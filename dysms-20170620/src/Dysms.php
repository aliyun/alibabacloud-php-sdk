<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dysms\V20170620\Models\AddDomainNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\AddDomainNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\AddDomainRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\AddDomainResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ApplyExportSmsSendRecordNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ApplyExportSmsSendRecordNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchCreateSmsSignRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchCreateSmsSignResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchCreateSmsSignShrinkRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchDeleteExportSendRecordNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchDeleteExportSendRecordNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchDeleteTaskNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\BatchDeleteTaskNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CalculateSmsLengthNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CalculateSmsLengthNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CancelSmsSignRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CancelSmsSignResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CancelSmsTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CancelSmsTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CancelSmsTemplateRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CancelSmsTemplateResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CheckSmsSignNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CheckSmsSignNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateAlicomProductRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateAlicomProductResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateAuthorizationRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateAuthorizationResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateCardMessageCallbackRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateCardMessageCallbackResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateCardMessageQueueRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateCardMessageQueueResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateDigitalSmsTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateDigitalSmsTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateFileByBizRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateFileByBizResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateFlowLimitNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateFlowLimitNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateFlowLimitRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateFlowLimitResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateMessageCallbackNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateMessageCallbackNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateMessageCallbackTestNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateMessageCallbackTestNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateMessageQueueNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateMessageQueueNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePhoneWhiteListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePhoneWhiteListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePhoneWhiteListNewShrinkRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePhoneWhiteListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePhoneWhiteListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePkgThresholdNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePkgThresholdNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePkgThresholdRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePkgThresholdResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePrevLimitNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreatePrevLimitNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateProductNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateProductNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateProductRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateProductResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateShortUrlNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateShortUrlNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsDetectTaskNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsDetectTaskNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsInternalApplyRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsInternalApplyResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsProductForChannelCustRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsProductForChannelCustResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSaasTaskNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSaasTaskNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSaasTaskRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSaasTaskResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSendFailDetailsDownloadRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSendFailDetailsDownloadResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSignNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSignNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSignNewShrinkRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSignRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsSignResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateSmsTemplateNewShrinkRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateWarningThresholdNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateWarningThresholdNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateWarningThresholdRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\CreateWarningThresholdResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DelCardSendExportInfoRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DelCardSendExportInfoResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteCardMessageCallbackRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteCardMessageCallbackResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteCardMessageQueueRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteCardMessageQueueResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteContactsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteContactsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteContactsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteContactsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteDigitalTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteDigitalTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteMessageCallbackNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteMessageCallbackNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteMessageQueueNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteMessageQueueNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteOrCanceleTaskNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteOrCanceleTaskNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteOrCanceleTaskRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteOrCanceleTaskResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeletePhoneWhiteListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeletePhoneWhiteListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeletePhoneWhiteListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeletePhoneWhiteListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteShortUrlNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteShortUrlNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteSmsTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\DeleteSmsTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsHistoryRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsHistoryResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsStatisticsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsStatisticsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsStatisticsSendRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportCardSmsStatisticsSendResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportTmpEffectReportDataRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ExportTmpEffectReportDataResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\GetLetterOfAuthorizationRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\GetLetterOfAuthorizationResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ListPushMsgRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ListPushMsgResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\OpencPrevFlagNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\OpencPrevFlagNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\OpenShortUrlProductNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\OpenShortUrlProductNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\OpenShortUrlProductRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\OpenShortUrlProductResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryAnyParamTemplateUserRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryAnyParamTemplateUserResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryAuthorizationRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryAuthorizationResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryBillingStatisticsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryBillingStatisticsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardMessageQueueRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardMessageQueueResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSendExportInfoRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSendExportInfoResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsHistoryDetailRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsHistoryDetailResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsHistoryRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsHistoryResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsSendListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsSendListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsSendRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCardSmsStatisticsSendResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCommonCustInfoRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryCommonCustInfoResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryContactsListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryContactsListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryContactsListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryContactsListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDailyBillInfoLeafNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDailyBillInfoLeafNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateDetailNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateDetailNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateDetailRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateDetailResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateLastRangeNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateLastRangeNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateLastRangeRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplateLastRangeResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplatePageListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplatePageListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplatePageListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDigitalTemplatePageListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDomainListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDomainListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDomainListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDomainListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryExportSendRecordListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryExportSendRecordListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFailDetailDownloadNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFailDetailDownloadNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFailDetailDownloadRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFailDetailDownloadResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFlowLimitNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFlowLimitNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFlowLimitRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryFlowLimitResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryIndexColRecordRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryIndexColRecordResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryLearningStatusNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryLearningStatusNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMarketingAssistantStatusRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMarketingAssistantStatusResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMessageCallbackNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMessageCallbackNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMessageQueueNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMessageQueueNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillInfoLeafNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillInfoLeafNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillRentalNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillRentalNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillRentalRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillRentalResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMsgCountRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMsgCountResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryOpencFlagNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryOpencFlagNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryOpenStatusRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryOpenStatusResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPhoneWhiteListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPhoneWhiteListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPhoneWhiteListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPhoneWhiteListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPkgThresholdNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPkgThresholdNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPkgThresholdRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPkgThresholdResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPrevLimitNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryPrevLimitNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySaasRecordResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendDetailsByPhoneNumResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendFailDetailsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendFailDetailsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendFailDetailsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendFailDetailsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendToGlobeStatusRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySendToGlobeStatusResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlDetailNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlDetailNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlStatusRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlStatusResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySlsStatusNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySlsStatusNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsBaseScreenNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsBaseScreenNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectCountsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectCountsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectCountsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectCountsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageSummaryNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageSummaryNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageSummaryRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageSummaryResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskDetailResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSendFailDetailsUrlNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSendFailDetailsUrlNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSendFailDetailsUrlRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSendFailDetailsUrlResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignDetailBySignIdNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignDetailBySignIdNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListNewShrinkRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignValidNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignValidNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignValidRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignValidResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsByTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsByTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsByTemplateRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsByTemplateResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsUrlNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsUrlNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsUrlRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStatisticsUrlResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStepRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsStepResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateByCodeResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateLastRangeNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateLastRangeNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateLastRangeRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateLastRangeResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateListRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsTemplateListResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsUserTagsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsUserTagsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsUserTagsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsUserTagsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandardProtocolListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandardProtocolListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandardProtocolRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandardProtocolResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTagResourcesNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTagResourcesNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTagResourcesRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTagResourcesResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTmpEffectReportDataRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTmpEffectReportDataResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTmpEffectReportDayDataRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryTmpEffectReportDayDataResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryUsertagExistenceRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryUsertagExistenceResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWarningThresholdNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWarningThresholdNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWarningThresholdRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWarningThresholdResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SaveContactsNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SaveContactsNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SaveLearningStatusNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SaveLearningStatusNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SelectTagResourceNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SelectTagResourceNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SelectTagResourceRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SelectTagResourceResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendSmsTestNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendSmsTestNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendSmsTestRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendSmsTestResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendVerificationNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendVerificationNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendVerificationRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\SendVerificationResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\TagResourcesNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\TagResourcesNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\TagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\TagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UntagResourcesNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UntagResourcesNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UntagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UntagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UpdateIpWhiteListNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UpdateIpWhiteListNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UpdatePartnerTemplateNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UpdatePartnerTemplateNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UpdateSlsStatusNewRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UpdateSlsStatusNewResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UploadCardResRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UploadCardResResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UploadCardResWithDyncParamRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\UploadCardResWithDyncParamResponse;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ValidatYunSmsIdRequest;
use AlibabaCloud\SDK\Dysms\V20170620\Models\ValidatYunSmsIdResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dysms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dysms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AddDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainResponse
     *
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomain',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddDomainRequest
     *
     * @returns AddDomainResponse
     *
     * @param AddDomainRequest $request
     *
     * @return AddDomainResponse
     */
    public function addDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - AddDomainNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainNewResponse
     *
     * @param AddDomainNewRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddDomainNewResponse
     */
    public function addDomainNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomainNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDomainNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddDomainNewRequest
     *
     * @returns AddDomainNewResponse
     *
     * @param AddDomainNewRequest $request
     *
     * @return AddDomainNewResponse
     */
    public function addDomainNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainNewWithOptions($request, $runtime);
    }

    /**
     * @param request - ApplyExportSmsSendRecordNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyExportSmsSendRecordNewResponse
     *
     * @param ApplyExportSmsSendRecordNewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ApplyExportSmsSendRecordNewResponse
     */
    public function applyExportSmsSendRecordNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->errorCode) {
            @$query['ErrorCode'] = $request->errorCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->realTimeDataFlag) {
            @$query['RealTimeDataFlag'] = $request->realTimeDataFlag;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyExportSmsSendRecordNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyExportSmsSendRecordNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ApplyExportSmsSendRecordNewRequest
     *
     * @returns ApplyExportSmsSendRecordNewResponse
     *
     * @param ApplyExportSmsSendRecordNewRequest $request
     *
     * @return ApplyExportSmsSendRecordNewResponse
     */
    public function applyExportSmsSendRecordNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyExportSmsSendRecordNewWithOptions($request, $runtime);
    }

    /**
     * 批量创建签名.
     *
     * @param tmpReq - BatchCreateSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateSmsSignResponse
     *
     * @param BatchCreateSmsSignRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return BatchCreateSmsSignResponse
     */
    public function batchCreateSmsSignWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchCreateSmsSignShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->columnIndexMappingRule) {
            $request->columnIndexMappingRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->columnIndexMappingRule, 'ColumnIndexMappingRule', 'json');
        }

        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->columnIndexMappingRuleShrink) {
            @$query['ColumnIndexMappingRule'] = $request->columnIndexMappingRuleShrink;
        }

        if (null !== $request->extendMessage) {
            @$query['ExtendMessage'] = $request->extendMessage;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->ossKeys) {
            @$query['OssKeys'] = $request->ossKeys;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signOssKey) {
            @$query['SignOssKey'] = $request->signOssKey;
        }

        if (null !== $request->userViewFileName) {
            @$query['UserViewFileName'] = $request->userViewFileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchCreateSmsSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量创建签名.
     *
     * @param request - BatchCreateSmsSignRequest
     *
     * @returns BatchCreateSmsSignResponse
     *
     * @param BatchCreateSmsSignRequest $request
     *
     * @return BatchCreateSmsSignResponse
     */
    public function batchCreateSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchDeleteExportSendRecordNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteExportSendRecordNewResponse
     *
     * @param BatchDeleteExportSendRecordNewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchDeleteExportSendRecordNewResponse
     */
    public function batchDeleteExportSendRecordNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteExportSendRecordNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteExportSendRecordNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchDeleteExportSendRecordNewRequest
     *
     * @returns BatchDeleteExportSendRecordNewResponse
     *
     * @param BatchDeleteExportSendRecordNewRequest $request
     *
     * @return BatchDeleteExportSendRecordNewResponse
     */
    public function batchDeleteExportSendRecordNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteExportSendRecordNewWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchDeleteTaskNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteTaskNewResponse
     *
     * @param BatchDeleteTaskNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchDeleteTaskNewResponse
     */
    public function batchDeleteTaskNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteTaskNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteTaskNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchDeleteTaskNewRequest
     *
     * @returns BatchDeleteTaskNewResponse
     *
     * @param BatchDeleteTaskNewRequest $request
     *
     * @return BatchDeleteTaskNewResponse
     */
    public function batchDeleteTaskNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteTaskNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CalculateSmsLengthNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CalculateSmsLengthNewResponse
     *
     * @param CalculateSmsLengthNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CalculateSmsLengthNewResponse
     */
    public function calculateSmsLengthNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->smsContent) {
            @$query['SmsContent'] = $request->smsContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CalculateSmsLengthNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CalculateSmsLengthNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CalculateSmsLengthNewRequest
     *
     * @returns CalculateSmsLengthNewResponse
     *
     * @param CalculateSmsLengthNewRequest $request
     *
     * @return CalculateSmsLengthNewResponse
     */
    public function calculateSmsLengthNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calculateSmsLengthNewWithOptions($request, $runtime);
    }

    /**
     * 签名取消审核.
     *
     * @param request - CancelSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSmsSignResponse
     *
     * @param CancelSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CancelSmsSignResponse
     */
    public function cancelSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signatureCode) {
            @$query['SignatureCode'] = $request->signatureCode;
        }

        if (null !== $request->signatureId) {
            @$query['SignatureId'] = $request->signatureId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelSmsSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 签名取消审核.
     *
     * @param request - CancelSmsSignRequest
     *
     * @returns CancelSmsSignResponse
     *
     * @param CancelSmsSignRequest $request
     *
     * @return CancelSmsSignResponse
     */
    public function cancelSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelSmsTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSmsTemplateResponse
     *
     * @param CancelSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelSmsTemplateResponse
     */
    public function cancelSmsTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelSmsTemplate',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelSmsTemplateRequest
     *
     * @returns CancelSmsTemplateResponse
     *
     * @param CancelSmsTemplateRequest $request
     *
     * @return CancelSmsTemplateResponse
     */
    public function cancelSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelSmsTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelSmsTemplateNewResponse
     *
     * @param CancelSmsTemplateNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelSmsTemplateNewResponse
     */
    public function cancelSmsTemplateNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->intelligentApproval) {
            @$query['IntelligentApproval'] = $request->intelligentApproval;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelSmsTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelSmsTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelSmsTemplateNewRequest
     *
     * @returns CancelSmsTemplateNewResponse
     *
     * @param CancelSmsTemplateNewRequest $request
     *
     * @return CancelSmsTemplateNewResponse
     */
    public function cancelSmsTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelSmsTemplateNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckSmsSignNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSmsSignNewResponse
     *
     * @param CheckSmsSignNewRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckSmsSignNewResponse
     */
    public function checkSmsSignNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSmsSignNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSmsSignNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckSmsSignNewRequest
     *
     * @returns CheckSmsSignNewResponse
     *
     * @param CheckSmsSignNewRequest $request
     *
     * @return CheckSmsSignNewResponse
     */
    public function checkSmsSignNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSmsSignNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateAlicomProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlicomProductResponse
     *
     * @param CreateAlicomProductRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAlicomProductResponse
     */
    public function createAlicomProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->busOffer) {
            @$query['BusOffer'] = $request->busOffer;
        }

        if (null !== $request->busOffers) {
            @$query['BusOffers'] = $request->busOffers;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAlicomProduct',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAlicomProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateAlicomProductRequest
     *
     * @returns CreateAlicomProductResponse
     *
     * @param CreateAlicomProductRequest $request
     *
     * @return CreateAlicomProductResponse
     */
    public function createAlicomProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlicomProductWithOptions($request, $runtime);
    }

    /**
     * 创建授权.
     *
     * @param request - CreateAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuthorizationResponse
     *
     * @param CreateAuthorizationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAuthorizationResponse
     */
    public function createAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizeCode) {
            @$query['AuthorizeCode'] = $request->authorizeCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAuthorization',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建授权.
     *
     * @param request - CreateAuthorizationRequest
     *
     * @returns CreateAuthorizationResponse
     *
     * @param CreateAuthorizationRequest $request
     *
     * @return CreateAuthorizationResponse
     */
    public function createAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationWithOptions($request, $runtime);
    }

    /**
     * 创建消息回调.
     *
     * @param request - CreateCardMessageCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCardMessageCallbackResponse
     *
     * @param CreateCardMessageCallbackRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCardMessageCallbackResponse
     */
    public function createCardMessageCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCardMessageCallback',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCardMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建消息回调.
     *
     * @param request - CreateCardMessageCallbackRequest
     *
     * @returns CreateCardMessageCallbackResponse
     *
     * @param CreateCardMessageCallbackRequest $request
     *
     * @return CreateCardMessageCallbackResponse
     */
    public function createCardMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCardMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * 创建mns.
     *
     * @param request - CreateCardMessageQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCardMessageQueueResponse
     *
     * @param CreateCardMessageQueueRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCardMessageQueueResponse
     */
    public function createCardMessageQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queueType) {
            @$query['QueueType'] = $request->queueType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCardMessageQueue',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCardMessageQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建mns.
     *
     * @param request - CreateCardMessageQueueRequest
     *
     * @returns CreateCardMessageQueueResponse
     *
     * @param CreateCardMessageQueueRequest $request
     *
     * @return CreateCardMessageQueueResponse
     */
    public function createCardMessageQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCardMessageQueueWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDigitalSmsTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalSmsTemplateNewResponse
     *
     * @param CreateDigitalSmsTemplateNewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateDigitalSmsTemplateNewResponse
     */
    public function createDigitalSmsTemplateNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->contentOssKeys) {
            @$query['ContentOssKeys'] = $request->contentOssKeys;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalSmsTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDigitalSmsTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDigitalSmsTemplateNewRequest
     *
     * @returns CreateDigitalSmsTemplateNewResponse
     *
     * @param CreateDigitalSmsTemplateNewRequest $request
     *
     * @return CreateDigitalSmsTemplateNewResponse
     */
    public function createDigitalSmsTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDigitalSmsTemplateNewWithOptions($request, $runtime);
    }

    // Deprecated
    /**
     * @deprecated OpenAPI CreateFileByBiz is deprecated
     *
     * @param request - CreateFileByBizRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileByBizResponse
     *
     * @param CreateFileByBizRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFileByBizResponse
     */
    public function createFileByBizWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileByBiz',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileByBizResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * @deprecated OpenAPI CreateFileByBiz is deprecated
     *
     * @param request - CreateFileByBizRequest
     *
     * @returns CreateFileByBizResponse
     *
     * @param CreateFileByBizRequest $request
     *
     * @return CreateFileByBizResponse
     */
    public function createFileByBiz($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileByBizWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateFlowLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowLimitResponse
     *
     * @param CreateFlowLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFlowLimitResponse
     */
    public function createFlowLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dailyLimit) {
            @$query['DailyLimit'] = $request->dailyLimit;
        }

        if (null !== $request->hourLimit) {
            @$query['HourLimit'] = $request->hourLimit;
        }

        if (null !== $request->minuteLimit) {
            @$query['MinuteLimit'] = $request->minuteLimit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlowLimit',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateFlowLimitRequest
     *
     * @returns CreateFlowLimitResponse
     *
     * @param CreateFlowLimitRequest $request
     *
     * @return CreateFlowLimitResponse
     */
    public function createFlowLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowLimitWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateFlowLimitNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowLimitNewResponse
     *
     * @param CreateFlowLimitNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowLimitNewResponse
     */
    public function createFlowLimitNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->dailyLimit) {
            @$query['DailyLimit'] = $request->dailyLimit;
        }

        if (null !== $request->hourLimit) {
            @$query['HourLimit'] = $request->hourLimit;
        }

        if (null !== $request->minuteLimit) {
            @$query['MinuteLimit'] = $request->minuteLimit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlowLimitNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowLimitNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateFlowLimitNewRequest
     *
     * @returns CreateFlowLimitNewResponse
     *
     * @param CreateFlowLimitNewRequest $request
     *
     * @return CreateFlowLimitNewResponse
     */
    public function createFlowLimitNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowLimitNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMessageCallbackNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMessageCallbackNewResponse
     *
     * @param CreateMessageCallbackNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMessageCallbackNewResponse
     */
    public function createMessageCallbackNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMessageCallbackNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMessageCallbackNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMessageCallbackNewRequest
     *
     * @returns CreateMessageCallbackNewResponse
     *
     * @param CreateMessageCallbackNewRequest $request
     *
     * @return CreateMessageCallbackNewResponse
     */
    public function createMessageCallbackNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageCallbackNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMessageCallbackTestNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMessageCallbackTestNewResponse
     *
     * @param CreateMessageCallbackTestNewRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateMessageCallbackTestNewResponse
     */
    public function createMessageCallbackTestNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMessageCallbackTestNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMessageCallbackTestNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMessageCallbackTestNewRequest
     *
     * @returns CreateMessageCallbackTestNewResponse
     *
     * @param CreateMessageCallbackTestNewRequest $request
     *
     * @return CreateMessageCallbackTestNewResponse
     */
    public function createMessageCallbackTestNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageCallbackTestNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMessageQueueNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMessageQueueNewResponse
     *
     * @param CreateMessageQueueNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMessageQueueNewResponse
     */
    public function createMessageQueueNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queueType) {
            @$query['QueueType'] = $request->queueType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMessageQueueNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMessageQueueNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMessageQueueNewRequest
     *
     * @returns CreateMessageQueueNewResponse
     *
     * @param CreateMessageQueueNewRequest $request
     *
     * @return CreateMessageQueueNewResponse
     */
    public function createMessageQueueNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMessageQueueNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreatePhoneWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePhoneWhiteListResponse
     *
     * @param CreatePhoneWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePhoneWhiteListResponse
     */
    public function createPhoneWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePhoneWhiteList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePhoneWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreatePhoneWhiteListRequest
     *
     * @returns CreatePhoneWhiteListResponse
     *
     * @param CreatePhoneWhiteListRequest $request
     *
     * @return CreatePhoneWhiteListResponse
     */
    public function createPhoneWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhoneWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreatePhoneWhiteListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePhoneWhiteListNewResponse
     *
     * @param CreatePhoneWhiteListNewRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreatePhoneWhiteListNewResponse
     */
    public function createPhoneWhiteListNewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePhoneWhiteListNewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->remarks) {
            $request->remarksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->remarks, 'Remarks', 'json');
        }

        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumbers) {
            @$query['PhoneNumbers'] = $request->phoneNumbers;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remarksShrink) {
            @$query['Remarks'] = $request->remarksShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePhoneWhiteListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePhoneWhiteListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreatePhoneWhiteListNewRequest
     *
     * @returns CreatePhoneWhiteListNewResponse
     *
     * @param CreatePhoneWhiteListNewRequest $request
     *
     * @return CreatePhoneWhiteListNewResponse
     */
    public function createPhoneWhiteListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhoneWhiteListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreatePkgThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePkgThresholdResponse
     *
     * @param CreatePkgThresholdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePkgThresholdResponse
     */
    public function createPkgThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageWarningLimit) {
            @$query['PackageWarningLimit'] = $request->packageWarningLimit;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePkgThreshold',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePkgThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreatePkgThresholdRequest
     *
     * @returns CreatePkgThresholdResponse
     *
     * @param CreatePkgThresholdRequest $request
     *
     * @return CreatePkgThresholdResponse
     */
    public function createPkgThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPkgThresholdWithOptions($request, $runtime);
    }

    /**
     * @param request - CreatePkgThresholdNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePkgThresholdNewResponse
     *
     * @param CreatePkgThresholdNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePkgThresholdNewResponse
     */
    public function createPkgThresholdNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageWarningLimit) {
            @$query['PackageWarningLimit'] = $request->packageWarningLimit;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePkgThresholdNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePkgThresholdNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreatePkgThresholdNewRequest
     *
     * @returns CreatePkgThresholdNewResponse
     *
     * @param CreatePkgThresholdNewRequest $request
     *
     * @return CreatePkgThresholdNewResponse
     */
    public function createPkgThresholdNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPkgThresholdNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreatePrevLimitNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrevLimitNewResponse
     *
     * @param CreatePrevLimitNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePrevLimitNewResponse
     */
    public function createPrevLimitNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hourLimit) {
            @$query['HourLimit'] = $request->hourLimit;
        }

        if (null !== $request->increaseRate) {
            @$query['IncreaseRate'] = $request->increaseRate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->successRate) {
            @$query['SuccessRate'] = $request->successRate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePrevLimitNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePrevLimitNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreatePrevLimitNewRequest
     *
     * @returns CreatePrevLimitNewResponse
     *
     * @param CreatePrevLimitNewRequest $request
     *
     * @return CreatePrevLimitNewResponse
     */
    public function createPrevLimitNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPrevLimitNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateProductNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductNewResponse
     *
     * @param CreateProductNewRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateProductNewResponse
     */
    public function createProductNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProductNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateProductNewRequest
     *
     * @returns CreateProductNewResponse
     *
     * @param CreateProductNewRequest $request
     *
     * @return CreateProductNewResponse
     */
    public function createProductNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateShortUrlNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateShortUrlNewResponse
     *
     * @param CreateShortUrlNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateShortUrlNewResponse
     */
    public function createShortUrlNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectDay) {
            @$query['EffectDay'] = $request->effectDay;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sourceUrl) {
            @$query['SourceUrl'] = $request->sourceUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateShortUrlNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateShortUrlNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateShortUrlNewRequest
     *
     * @returns CreateShortUrlNewResponse
     *
     * @param CreateShortUrlNewRequest $request
     *
     * @return CreateShortUrlNewResponse
     */
    public function createShortUrlNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShortUrlNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsDetectTaskNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsDetectTaskNewResponse
     *
     * @param CreateSmsDetectTaskNewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSmsDetectTaskNewResponse
     */
    public function createSmsDetectTaskNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->check) {
            @$query['Check'] = $request->check;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsContent) {
            @$query['SmsContent'] = $request->smsContent;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsDetectTaskNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsDetectTaskNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsDetectTaskNewRequest
     *
     * @returns CreateSmsDetectTaskNewResponse
     *
     * @param CreateSmsDetectTaskNewRequest $request
     *
     * @return CreateSmsDetectTaskNewResponse
     */
    public function createSmsDetectTaskNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsDetectTaskNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsInternalApplyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsInternalApplyResponse
     *
     * @param CreateSmsInternalApplyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSmsInternalApplyResponse
     */
    public function createSmsInternalApplyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appDownloadLink) {
            @$query['AppDownloadLink'] = $request->appDownloadLink;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->industry) {
            @$query['Industry'] = $request->industry;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageLink) {
            @$query['PageLink'] = $request->pageLink;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsInternalApply',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsInternalApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsInternalApplyRequest
     *
     * @returns CreateSmsInternalApplyResponse
     *
     * @param CreateSmsInternalApplyRequest $request
     *
     * @return CreateSmsInternalApplyResponse
     */
    public function createSmsInternalApply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsInternalApplyWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsProductForChannelCustRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsProductForChannelCustResponse
     *
     * @param CreateSmsProductForChannelCustRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateSmsProductForChannelCustResponse
     */
    public function createSmsProductForChannelCustWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->onlyCheckOpened) {
            @$query['OnlyCheckOpened'] = $request->onlyCheckOpened;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsProductForChannelCust',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsProductForChannelCustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsProductForChannelCustRequest
     *
     * @returns CreateSmsProductForChannelCustResponse
     *
     * @param CreateSmsProductForChannelCustRequest $request
     *
     * @return CreateSmsProductForChannelCustResponse
     */
    public function createSmsProductForChannelCust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsProductForChannelCustWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsSaasTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSaasTaskResponse
     *
     * @param CreateSmsSaasTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSmsSaasTaskResponse
     */
    public function createSmsSaasTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->orderTime) {
            @$query['OrderTime'] = $request->orderTime;
        }

        if (null !== $request->ossFileName) {
            @$query['OssFileName'] = $request->ossFileName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneList) {
            @$query['PhoneList'] = $request->phoneList;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduleType) {
            @$query['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsContent) {
            @$query['SmsContent'] = $request->smsContent;
        }

        if (null !== $request->smsTemplateCode) {
            @$query['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->validCount) {
            @$query['ValidCount'] = $request->validCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSaasTask',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSaasTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsSaasTaskRequest
     *
     * @returns CreateSmsSaasTaskResponse
     *
     * @param CreateSmsSaasTaskRequest $request
     *
     * @return CreateSmsSaasTaskResponse
     */
    public function createSmsSaasTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSaasTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsSaasTaskNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSaasTaskNewResponse
     *
     * @param CreateSmsSaasTaskNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSmsSaasTaskNewResponse
     */
    public function createSmsSaasTaskNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->dataAbilityTaskId) {
            @$query['DataAbilityTaskId'] = $request->dataAbilityTaskId;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->orderTime) {
            @$query['OrderTime'] = $request->orderTime;
        }

        if (null !== $request->ossFileName) {
            @$query['OssFileName'] = $request->ossFileName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneList) {
            @$query['PhoneList'] = $request->phoneList;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduleType) {
            @$query['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->smsContent) {
            @$query['SmsContent'] = $request->smsContent;
        }

        if (null !== $request->smsTemplateCode) {
            @$query['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->validCount) {
            @$query['ValidCount'] = $request->validCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSaasTaskNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSaasTaskNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsSaasTaskNewRequest
     *
     * @returns CreateSmsSaasTaskNewResponse
     *
     * @param CreateSmsSaasTaskNewRequest $request
     *
     * @return CreateSmsSaasTaskNewResponse
     */
    public function createSmsSaasTaskNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSaasTaskNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsSendFailDetailsDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSendFailDetailsDownloadResponse
     *
     * @param CreateSmsSendFailDetailsDownloadRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateSmsSendFailDetailsDownloadResponse
     */
    public function createSmsSendFailDetailsDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSendFailDetailsDownload',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSendFailDetailsDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsSendFailDetailsDownloadRequest
     *
     * @returns CreateSmsSendFailDetailsDownloadResponse
     *
     * @param CreateSmsSendFailDetailsDownloadRequest $request
     *
     * @return CreateSmsSendFailDetailsDownloadResponse
     */
    public function createSmsSendFailDetailsDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSendFailDetailsDownloadWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateSmsSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSignWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extendMessage) {
            @$query['ExtendMessage'] = $request->extendMessage;
        }

        if (null !== $request->fileIds) {
            @$query['FileIds'] = $request->fileIds;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSign',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsSignRequest
     *
     * @returns CreateSmsSignResponse
     *
     * @param CreateSmsSignRequest $request
     *
     * @return CreateSmsSignResponse
     */
    public function createSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreateSmsSignNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsSignNewResponse
     *
     * @param CreateSmsSignNewRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSmsSignNewResponse
     */
    public function createSmsSignNewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSmsSignNewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->applicationSceneId) {
            @$query['ApplicationSceneId'] = $request->applicationSceneId;
        }

        if (null !== $request->applySource) {
            @$query['ApplySource'] = $request->applySource;
        }

        if (null !== $request->authorization) {
            @$query['Authorization'] = $request->authorization;
        }

        if (null !== $request->authorizationEffTime) {
            @$query['AuthorizationEffTime'] = $request->authorizationEffTime;
        }

        if (null !== $request->authorizationLetter) {
            @$query['AuthorizationLetter'] = $request->authorizationLetter;
        }

        if (null !== $request->authorizationLetterAuditPass) {
            @$query['AuthorizationLetterAuditPass'] = $request->authorizationLetterAuditPass;
        }

        if (null !== $request->authorizationLetterId) {
            @$query['AuthorizationLetterId'] = $request->authorizationLetterId;
        }

        if (null !== $request->authorizationLetterName) {
            @$query['AuthorizationLetterName'] = $request->authorizationLetterName;
        }

        if (null !== $request->authorizationSignScope) {
            @$query['AuthorizationSignScope'] = $request->authorizationSignScope;
        }

        if (null !== $request->createSignGray) {
            @$query['CreateSignGray'] = $request->createSignGray;
        }

        if (null !== $request->enableAuthorizationLetter) {
            @$query['EnableAuthorizationLetter'] = $request->enableAuthorizationLetter;
        }

        if (null !== $request->extendMessage) {
            @$query['ExtendMessage'] = $request->extendMessage;
        }

        if (null !== $request->fileIds) {
            @$query['FileIds'] = $request->fileIds;
        }

        if (null !== $request->isAuthorizationLetterOCRComplete) {
            @$query['IsAuthorizationLetterOCRComplete'] = $request->isAuthorizationLetterOCRComplete;
        }

        if (null !== $request->isAuthorizationLetterOCRDiff) {
            @$query['IsAuthorizationLetterOCRDiff'] = $request->isAuthorizationLetterOCRDiff;
        }

        if (null !== $request->isSignScopeOCRDiff) {
            @$query['IsSignScopeOCRDiff'] = $request->isSignScopeOCRDiff;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->organizationCode) {
            @$query['OrganizationCode'] = $request->organizationCode;
        }

        if (null !== $request->ossKeys) {
            @$query['OssKeys'] = $request->ossKeys;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->proxyAuthorization) {
            @$query['ProxyAuthorization'] = $request->proxyAuthorization;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->qualificationType) {
            @$query['QualificationType'] = $request->qualificationType;
        }

        if (null !== $request->qualificationVersion) {
            @$query['QualificationVersion'] = $request->qualificationVersion;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signCode) {
            @$query['SignCode'] = $request->signCode;
        }

        if (null !== $request->signId) {
            @$query['SignId'] = $request->signId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signScopeOCR) {
            @$query['SignScopeOCR'] = $request->signScopeOCR;
        }

        if (null !== $request->signUpgrade) {
            @$query['SignUpgrade'] = $request->signUpgrade;
        }

        if (null !== $request->thirdParty) {
            @$query['ThirdParty'] = $request->thirdParty;
        }

        if (null !== $request->userViewFileName) {
            @$query['UserViewFileName'] = $request->userViewFileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsSignNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsSignNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsSignNewRequest
     *
     * @returns CreateSmsSignNewResponse
     *
     * @param CreateSmsSignNewRequest $request
     *
     * @return CreateSmsSignNewResponse
     */
    public function createSmsSignNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsSignNewWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - CreateSmsTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSmsTemplateNewResponse
     *
     * @param CreateSmsTemplateNewRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSmsTemplateNewResponse
     */
    public function createSmsTemplateNewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSmsTemplateNewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->moreData) {
            $request->moreDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->moreData, 'MoreData', 'json');
        }

        $query = [];
        if (null !== $request->aiTemplate) {
            @$query['AiTemplate'] = $request->aiTemplate;
        }

        if (null !== $request->aiTemplateUuid) {
            @$query['AiTemplateUuid'] = $request->aiTemplateUuid;
        }

        if (null !== $request->applicationSceneId) {
            @$query['ApplicationSceneId'] = $request->applicationSceneId;
        }

        if (null !== $request->applySource) {
            @$query['ApplySource'] = $request->applySource;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intlType) {
            @$query['IntlType'] = $request->intlType;
        }

        if (null !== $request->moreDataShrink) {
            @$query['MoreData'] = $request->moreDataShrink;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ossKeys) {
            @$query['OssKeys'] = $request->ossKeys;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->productUrl) {
            @$query['ProductUrl'] = $request->productUrl;
        }

        if (null !== $request->relatedSignName) {
            @$query['RelatedSignName'] = $request->relatedSignName;
        }

        if (null !== $request->relatedSignOrderId) {
            @$query['RelatedSignOrderId'] = $request->relatedSignOrderId;
        }

        if (null !== $request->relatedSignUsageName) {
            @$query['RelatedSignUsageName'] = $request->relatedSignUsageName;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->rmdTemplateId) {
            @$query['RmdTemplateId'] = $request->rmdTemplateId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateRule) {
            @$query['TemplateRule'] = $request->templateRule;
        }

        if (null !== $request->userViewFileName) {
            @$query['UserViewFileName'] = $request->userViewFileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSmsTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSmsTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateSmsTemplateNewRequest
     *
     * @returns CreateSmsTemplateNewResponse
     *
     * @param CreateSmsTemplateNewRequest $request
     *
     * @return CreateSmsTemplateNewResponse
     */
    public function createSmsTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSmsTemplateNewWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateWarningThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWarningThresholdResponse
     *
     * @param CreateWarningThresholdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWarningThresholdResponse
     */
    public function createWarningThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->dailyHaltLimit) {
            @$query['DailyHaltLimit'] = $request->dailyHaltLimit;
        }

        if (null !== $request->dailyWarningLimit) {
            @$query['DailyWarningLimit'] = $request->dailyWarningLimit;
        }

        if (null !== $request->monthlyHaltLimit) {
            @$query['MonthlyHaltLimit'] = $request->monthlyHaltLimit;
        }

        if (null !== $request->monthlyWarningLimit) {
            @$query['MonthlyWarningLimit'] = $request->monthlyWarningLimit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWarningThreshold',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWarningThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateWarningThresholdRequest
     *
     * @returns CreateWarningThresholdResponse
     *
     * @param CreateWarningThresholdRequest $request
     *
     * @return CreateWarningThresholdResponse
     */
    public function createWarningThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarningThresholdWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateWarningThresholdNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWarningThresholdNewResponse
     *
     * @param CreateWarningThresholdNewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateWarningThresholdNewResponse
     */
    public function createWarningThresholdNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->dailyHaltLimit) {
            @$query['DailyHaltLimit'] = $request->dailyHaltLimit;
        }

        if (null !== $request->dailyWarningLimit) {
            @$query['DailyWarningLimit'] = $request->dailyWarningLimit;
        }

        if (null !== $request->monthlyHaltLimit) {
            @$query['MonthlyHaltLimit'] = $request->monthlyHaltLimit;
        }

        if (null !== $request->monthlyWarningLimit) {
            @$query['MonthlyWarningLimit'] = $request->monthlyWarningLimit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWarningThresholdNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWarningThresholdNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateWarningThresholdNewRequest
     *
     * @returns CreateWarningThresholdNewResponse
     *
     * @param CreateWarningThresholdNewRequest $request
     *
     * @return CreateWarningThresholdNewResponse
     */
    public function createWarningThresholdNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWarningThresholdNewWithOptions($request, $runtime);
    }

    /**
     * 删除导出记录.
     *
     * @param request - DelCardSendExportInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DelCardSendExportInfoResponse
     *
     * @param DelCardSendExportInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DelCardSendExportInfoResponse
     */
    public function delCardSendExportInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DelCardSendExportInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DelCardSendExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除导出记录.
     *
     * @param request - DelCardSendExportInfoRequest
     *
     * @returns DelCardSendExportInfoResponse
     *
     * @param DelCardSendExportInfoRequest $request
     *
     * @return DelCardSendExportInfoResponse
     */
    public function delCardSendExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delCardSendExportInfoWithOptions($request, $runtime);
    }

    /**
     * 删除消息回调.
     *
     * @param request - DeleteCardMessageCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCardMessageCallbackResponse
     *
     * @param DeleteCardMessageCallbackRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCardMessageCallbackResponse
     */
    public function deleteCardMessageCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCardMessageCallback',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCardMessageCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除消息回调.
     *
     * @param request - DeleteCardMessageCallbackRequest
     *
     * @returns DeleteCardMessageCallbackResponse
     *
     * @param DeleteCardMessageCallbackRequest $request
     *
     * @return DeleteCardMessageCallbackResponse
     */
    public function deleteCardMessageCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCardMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCardMessageQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCardMessageQueueResponse
     *
     * @param DeleteCardMessageQueueRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCardMessageQueueResponse
     */
    public function deleteCardMessageQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queueType) {
            @$query['QueueType'] = $request->queueType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCardMessageQueue',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCardMessageQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCardMessageQueueRequest
     *
     * @returns DeleteCardMessageQueueResponse
     *
     * @param DeleteCardMessageQueueRequest $request
     *
     * @return DeleteCardMessageQueueResponse
     */
    public function deleteCardMessageQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCardMessageQueueWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactsResponse
     *
     * @param DeleteContactsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteContactsResponse
     */
    public function deleteContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContacts',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteContactsRequest
     *
     * @returns DeleteContactsResponse
     *
     * @param DeleteContactsRequest $request
     *
     * @return DeleteContactsResponse
     */
    public function deleteContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactsWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteContactsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteContactsNewResponse
     *
     * @param DeleteContactsNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteContactsNewResponse
     */
    public function deleteContactsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteContactsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteContactsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteContactsNewRequest
     *
     * @returns DeleteContactsNewResponse
     *
     * @param DeleteContactsNewRequest $request
     *
     * @return DeleteContactsNewResponse
     */
    public function deleteContactsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDigitalTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDigitalTemplateNewResponse
     *
     * @param DeleteDigitalTemplateNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDigitalTemplateNewResponse
     */
    public function deleteDigitalTemplateNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDigitalTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDigitalTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDigitalTemplateNewRequest
     *
     * @returns DeleteDigitalTemplateNewResponse
     *
     * @param DeleteDigitalTemplateNewRequest $request
     *
     * @return DeleteDigitalTemplateNewResponse
     */
    public function deleteDigitalTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDigitalTemplateNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMessageCallbackNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMessageCallbackNewResponse
     *
     * @param DeleteMessageCallbackNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMessageCallbackNewResponse
     */
    public function deleteMessageCallbackNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMessageCallbackNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMessageCallbackNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMessageCallbackNewRequest
     *
     * @returns DeleteMessageCallbackNewResponse
     *
     * @param DeleteMessageCallbackNewRequest $request
     *
     * @return DeleteMessageCallbackNewResponse
     */
    public function deleteMessageCallbackNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageCallbackNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMessageQueueNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMessageQueueNewResponse
     *
     * @param DeleteMessageQueueNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMessageQueueNewResponse
     */
    public function deleteMessageQueueNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queueType) {
            @$query['QueueType'] = $request->queueType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMessageQueueNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMessageQueueNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMessageQueueNewRequest
     *
     * @returns DeleteMessageQueueNewResponse
     *
     * @param DeleteMessageQueueNewRequest $request
     *
     * @return DeleteMessageQueueNewResponse
     */
    public function deleteMessageQueueNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageQueueNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteOrCanceleTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOrCanceleTaskResponse
     *
     * @param DeleteOrCanceleTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteOrCanceleTaskResponse
     */
    public function deleteOrCanceleTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isDeleted) {
            @$query['IsDeleted'] = $request->isDeleted;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOrCanceleTask',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOrCanceleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteOrCanceleTaskRequest
     *
     * @returns DeleteOrCanceleTaskResponse
     *
     * @param DeleteOrCanceleTaskRequest $request
     *
     * @return DeleteOrCanceleTaskResponse
     */
    public function deleteOrCanceleTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrCanceleTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteOrCanceleTaskNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOrCanceleTaskNewResponse
     *
     * @param DeleteOrCanceleTaskNewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteOrCanceleTaskNewResponse
     */
    public function deleteOrCanceleTaskNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isDeleted) {
            @$query['IsDeleted'] = $request->isDeleted;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOrCanceleTaskNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOrCanceleTaskNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteOrCanceleTaskNewRequest
     *
     * @returns DeleteOrCanceleTaskNewResponse
     *
     * @param DeleteOrCanceleTaskNewRequest $request
     *
     * @return DeleteOrCanceleTaskNewResponse
     */
    public function deleteOrCanceleTaskNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOrCanceleTaskNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePhoneWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePhoneWhiteListResponse
     *
     * @param DeletePhoneWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePhoneWhiteListResponse
     */
    public function deletePhoneWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePhoneWhiteList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePhoneWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePhoneWhiteListRequest
     *
     * @returns DeletePhoneWhiteListResponse
     *
     * @param DeletePhoneWhiteListRequest $request
     *
     * @return DeletePhoneWhiteListResponse
     */
    public function deletePhoneWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhoneWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePhoneWhiteListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePhoneWhiteListNewResponse
     *
     * @param DeletePhoneWhiteListNewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeletePhoneWhiteListNewResponse
     */
    public function deletePhoneWhiteListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePhoneWhiteListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePhoneWhiteListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePhoneWhiteListNewRequest
     *
     * @returns DeletePhoneWhiteListNewResponse
     *
     * @param DeletePhoneWhiteListNewRequest $request
     *
     * @return DeletePhoneWhiteListNewResponse
     */
    public function deletePhoneWhiteListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhoneWhiteListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteShortUrlNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteShortUrlNewResponse
     *
     * @param DeleteShortUrlNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteShortUrlNewResponse
     */
    public function deleteShortUrlNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteShortUrlNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteShortUrlNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteShortUrlNewRequest
     *
     * @returns DeleteShortUrlNewResponse
     *
     * @param DeleteShortUrlNewRequest $request
     *
     * @return DeleteShortUrlNewResponse
     */
    public function deleteShortUrlNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShortUrlNewWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteSmsTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSmsTemplateNewResponse
     *
     * @param DeleteSmsTemplateNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSmsTemplateNewResponse
     */
    public function deleteSmsTemplateNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isSmsSign) {
            @$query['IsSmsSign'] = $request->isSmsSign;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->smsTemplateIds) {
            @$query['SmsTemplateIds'] = $request->smsTemplateIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSmsTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSmsTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteSmsTemplateNewRequest
     *
     * @returns DeleteSmsTemplateNewResponse
     *
     * @param DeleteSmsTemplateNewRequest $request
     *
     * @return DeleteSmsTemplateNewResponse
     */
    public function deleteSmsTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsTemplateNewWithOptions($request, $runtime);
    }

    /**
     * 发送纪录信息导出.
     *
     * @param request - ExportCardSmsHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportCardSmsHistoryResponse
     *
     * @param ExportCardSmsHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExportCardSmsHistoryResponse
     */
    public function exportCardSmsHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiSend) {
            @$query['ApiSend'] = $request->apiSend;
        }

        if (null !== $request->cardTemplateType) {
            @$query['CardTemplateType'] = $request->cardTemplateType;
        }

        if (null !== $request->gmtCreate) {
            @$query['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->receiveState) {
            @$query['ReceiveState'] = $request->receiveState;
        }

        if (null !== $request->receiver) {
            @$query['Receiver'] = $request->receiver;
        }

        if (null !== $request->renderState) {
            @$query['RenderState'] = $request->renderState;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportCardSmsHistory',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportCardSmsHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送纪录信息导出.
     *
     * @param request - ExportCardSmsHistoryRequest
     *
     * @returns ExportCardSmsHistoryResponse
     *
     * @param ExportCardSmsHistoryRequest $request
     *
     * @return ExportCardSmsHistoryResponse
     */
    public function exportCardSmsHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCardSmsHistoryWithOptions($request, $runtime);
    }

    /**
     * 导出发送统计信息-解析统计
     *
     * @param request - ExportCardSmsStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportCardSmsStatisticsResponse
     *
     * @param ExportCardSmsStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ExportCardSmsStatisticsResponse
     */
    public function exportCardSmsStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTmpCode) {
            @$query['CustomTmpCode'] = $request->customTmpCode;
        }

        if (null !== $request->sendDateEnd) {
            @$query['SendDateEnd'] = $request->sendDateEnd;
        }

        if (null !== $request->sendDateStart) {
            @$query['SendDateStart'] = $request->sendDateStart;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->tmpName) {
            @$query['TmpName'] = $request->tmpName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportCardSmsStatistics',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportCardSmsStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出发送统计信息-解析统计
     *
     * @param request - ExportCardSmsStatisticsRequest
     *
     * @returns ExportCardSmsStatisticsResponse
     *
     * @param ExportCardSmsStatisticsRequest $request
     *
     * @return ExportCardSmsStatisticsResponse
     */
    public function exportCardSmsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCardSmsStatisticsWithOptions($request, $runtime);
    }

    /**
     * 导出发送统计信息-发送+解析统计
     *
     * @param request - ExportCardSmsStatisticsSendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportCardSmsStatisticsSendResponse
     *
     * @param ExportCardSmsStatisticsSendRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ExportCardSmsStatisticsSendResponse
     */
    public function exportCardSmsStatisticsSendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTmpCode) {
            @$query['CustomTmpCode'] = $request->customTmpCode;
        }

        if (null !== $request->sendDateEnd) {
            @$query['SendDateEnd'] = $request->sendDateEnd;
        }

        if (null !== $request->sendDateStart) {
            @$query['SendDateStart'] = $request->sendDateStart;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportCardSmsStatisticsSend',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportCardSmsStatisticsSendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出发送统计信息-发送+解析统计
     *
     * @param request - ExportCardSmsStatisticsSendRequest
     *
     * @returns ExportCardSmsStatisticsSendResponse
     *
     * @param ExportCardSmsStatisticsSendRequest $request
     *
     * @return ExportCardSmsStatisticsSendResponse
     */
    public function exportCardSmsStatisticsSend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCardSmsStatisticsSendWithOptions($request, $runtime);
    }

    /**
     * 发送效果统计导出.
     *
     * @param request - ExportTmpEffectReportDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportTmpEffectReportDataResponse
     *
     * @param ExportTmpEffectReportDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExportTmpEffectReportDataResponse
     */
    public function exportTmpEffectReportDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->tmpName) {
            @$query['TmpName'] = $request->tmpName;
        }

        if (null !== $request->vendorCode) {
            @$query['VendorCode'] = $request->vendorCode;
        }

        if (null !== $request->vendorName) {
            @$query['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportTmpEffectReportData',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportTmpEffectReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送效果统计导出.
     *
     * @param request - ExportTmpEffectReportDataRequest
     *
     * @returns ExportTmpEffectReportDataResponse
     *
     * @param ExportTmpEffectReportDataRequest $request
     *
     * @return ExportTmpEffectReportDataResponse
     */
    public function exportTmpEffectReportData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportTmpEffectReportDataWithOptions($request, $runtime);
    }

    /**
     * 授权书下载.
     *
     * @param request - GetLetterOfAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLetterOfAuthorizationResponse
     *
     * @param GetLetterOfAuthorizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLetterOfAuthorizationResponse
     */
    public function getLetterOfAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLetterOfAuthorization',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLetterOfAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权书下载.
     *
     * @param request - GetLetterOfAuthorizationRequest
     *
     * @returns GetLetterOfAuthorizationResponse
     *
     * @param GetLetterOfAuthorizationRequest $request
     *
     * @return GetLetterOfAuthorizationResponse
     */
    public function getLetterOfAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLetterOfAuthorizationWithOptions($request, $runtime);
    }

    /**
     * 获取推送的消息信息.
     *
     * @param request - ListPushMsgRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPushMsgResponse
     *
     * @param ListPushMsgRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListPushMsgResponse
     */
    public function listPushMsgWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->msgType) {
            @$query['MsgType'] = $request->msgType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pushTime) {
            @$query['PushTime'] = $request->pushTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPushMsg',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPushMsgResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取推送的消息信息.
     *
     * @param request - ListPushMsgRequest
     *
     * @returns ListPushMsgResponse
     *
     * @param ListPushMsgRequest $request
     *
     * @return ListPushMsgResponse
     */
    public function listPushMsg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPushMsgWithOptions($request, $runtime);
    }

    /**
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tagOwnerUid) {
            @$query['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2017-06-20',
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
     * @param request - OpenShortUrlProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenShortUrlProductResponse
     *
     * @param OpenShortUrlProductRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OpenShortUrlProductResponse
     */
    public function openShortUrlProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenShortUrlProduct',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenShortUrlProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OpenShortUrlProductRequest
     *
     * @returns OpenShortUrlProductResponse
     *
     * @param OpenShortUrlProductRequest $request
     *
     * @return OpenShortUrlProductResponse
     */
    public function openShortUrlProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openShortUrlProductWithOptions($request, $runtime);
    }

    /**
     * @param request - OpenShortUrlProductNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenShortUrlProductNewResponse
     *
     * @param OpenShortUrlProductNewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OpenShortUrlProductNewResponse
     */
    public function openShortUrlProductNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenShortUrlProductNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenShortUrlProductNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OpenShortUrlProductNewRequest
     *
     * @returns OpenShortUrlProductNewResponse
     *
     * @param OpenShortUrlProductNewRequest $request
     *
     * @return OpenShortUrlProductNewResponse
     */
    public function openShortUrlProductNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openShortUrlProductNewWithOptions($request, $runtime);
    }

    /**
     * @param request - OpencPrevFlagNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpencPrevFlagNewResponse
     *
     * @param OpencPrevFlagNewRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OpencPrevFlagNewResponse
     */
    public function opencPrevFlagNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isOpen) {
            @$query['IsOpen'] = $request->isOpen;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpencPrevFlagNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpencPrevFlagNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - OpencPrevFlagNewRequest
     *
     * @returns OpencPrevFlagNewResponse
     *
     * @param OpencPrevFlagNewRequest $request
     *
     * @return OpencPrevFlagNewResponse
     */
    public function opencPrevFlagNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->opencPrevFlagNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAnyParamTemplateUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAnyParamTemplateUserResponse
     *
     * @param QueryAnyParamTemplateUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryAnyParamTemplateUserResponse
     */
    public function queryAnyParamTemplateUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAnyParamTemplateUser',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAnyParamTemplateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAnyParamTemplateUserRequest
     *
     * @returns QueryAnyParamTemplateUserResponse
     *
     * @param QueryAnyParamTemplateUserRequest $request
     *
     * @return QueryAnyParamTemplateUserResponse
     */
    public function queryAnyParamTemplateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnyParamTemplateUserWithOptions($request, $runtime);
    }

    /**
     * 获取授权状态
     *
     * @param request - QueryAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAuthorizationResponse
     *
     * @param QueryAuthorizationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryAuthorizationResponse
     */
    public function queryAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizeCode) {
            @$query['AuthorizeCode'] = $request->authorizeCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAuthorization',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取授权状态
     *
     * @param request - QueryAuthorizationRequest
     *
     * @returns QueryAuthorizationResponse
     *
     * @param QueryAuthorizationRequest $request
     *
     * @return QueryAuthorizationResponse
     */
    public function queryAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBillingStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBillingStatisticsResponse
     *
     * @param QueryBillingStatisticsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryBillingStatisticsResponse
     */
    public function queryBillingStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->itemName) {
            @$query['ItemName'] = $request->itemName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBillingStatistics',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBillingStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBillingStatisticsRequest
     *
     * @returns QueryBillingStatisticsResponse
     *
     * @param QueryBillingStatisticsRequest $request
     *
     * @return QueryBillingStatisticsResponse
     */
    public function queryBillingStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillingStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCardMessageQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardMessageQueueResponse
     *
     * @param QueryCardMessageQueueRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCardMessageQueueResponse
     */
    public function queryCardMessageQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queueTypes) {
            @$query['QueueTypes'] = $request->queueTypes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardMessageQueue',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardMessageQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCardMessageQueueRequest
     *
     * @returns QueryCardMessageQueueResponse
     *
     * @param QueryCardMessageQueueRequest $request
     *
     * @return QueryCardMessageQueueResponse
     */
    public function queryCardMessageQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardMessageQueueWithOptions($request, $runtime);
    }

    /**
     * 查询发送记录导出信息.
     *
     * @param request - QueryCardSendExportInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSendExportInfoResponse
     *
     * @param QueryCardSendExportInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCardSendExportInfoResponse
     */
    public function queryCardSendExportInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSendExportInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSendExportInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询发送记录导出信息.
     *
     * @param request - QueryCardSendExportInfoRequest
     *
     * @returns QueryCardSendExportInfoResponse
     *
     * @param QueryCardSendExportInfoRequest $request
     *
     * @return QueryCardSendExportInfoResponse
     */
    public function queryCardSendExportInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSendExportInfoWithOptions($request, $runtime);
    }

    /**
     * 分页查询发送纪录信息.
     *
     * @param request - QueryCardSmsHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsHistoryResponse
     *
     * @param QueryCardSmsHistoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCardSmsHistoryResponse
     */
    public function queryCardSmsHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiSend) {
            @$query['ApiSend'] = $request->apiSend;
        }

        if (null !== $request->cardTemplateType) {
            @$query['CardTemplateType'] = $request->cardTemplateType;
        }

        if (null !== $request->gmtCreate) {
            @$query['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->maxId) {
            @$query['MaxId'] = $request->maxId;
        }

        if (null !== $request->minId) {
            @$query['MinId'] = $request->minId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->receiveState) {
            @$query['ReceiveState'] = $request->receiveState;
        }

        if (null !== $request->receiver) {
            @$query['Receiver'] = $request->receiver;
        }

        if (null !== $request->renderState) {
            @$query['RenderState'] = $request->renderState;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsHistory',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询发送纪录信息.
     *
     * @param request - QueryCardSmsHistoryRequest
     *
     * @returns QueryCardSmsHistoryResponse
     *
     * @param QueryCardSmsHistoryRequest $request
     *
     * @return QueryCardSmsHistoryResponse
     */
    public function queryCardSmsHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsHistoryWithOptions($request, $runtime);
    }

    /**
     * 查询发送纪录信息详情.
     *
     * @param request - QueryCardSmsHistoryDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsHistoryDetailResponse
     *
     * @param QueryCardSmsHistoryDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCardSmsHistoryDetailResponse
     */
    public function queryCardSmsHistoryDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gmtCreate) {
            @$query['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsHistoryDetail',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsHistoryDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询发送纪录信息详情.
     *
     * @param request - QueryCardSmsHistoryDetailRequest
     *
     * @returns QueryCardSmsHistoryDetailResponse
     *
     * @param QueryCardSmsHistoryDetailRequest $request
     *
     * @return QueryCardSmsHistoryDetailResponse
     */
    public function queryCardSmsHistoryDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsHistoryDetailWithOptions($request, $runtime);
    }

    /**
     * 分页查询发送统计信息-解析统计
     *
     * @param request - QueryCardSmsStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsStatisticsResponse
     *
     * @param QueryCardSmsStatisticsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryCardSmsStatisticsResponse
     */
    public function queryCardSmsStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTmpCode) {
            @$query['CustomTmpCode'] = $request->customTmpCode;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sendDateEnd) {
            @$query['SendDateEnd'] = $request->sendDateEnd;
        }

        if (null !== $request->sendDateStart) {
            @$query['SendDateStart'] = $request->sendDateStart;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->tmpName) {
            @$query['TmpName'] = $request->tmpName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsStatistics',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询发送统计信息-解析统计
     *
     * @param request - QueryCardSmsStatisticsRequest
     *
     * @returns QueryCardSmsStatisticsResponse
     *
     * @param QueryCardSmsStatisticsRequest $request
     *
     * @return QueryCardSmsStatisticsResponse
     */
    public function queryCardSmsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsStatisticsWithOptions($request, $runtime);
    }

    /**
     * 按时间查询发送统计信息-解析统计
     *
     * @param request - QueryCardSmsStatisticsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsStatisticsListResponse
     *
     * @param QueryCardSmsStatisticsListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryCardSmsStatisticsListResponse
     */
    public function queryCardSmsStatisticsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTmpCode) {
            @$query['CustomTmpCode'] = $request->customTmpCode;
        }

        if (null !== $request->sendDateEnd) {
            @$query['SendDateEnd'] = $request->sendDateEnd;
        }

        if (null !== $request->sendDateStart) {
            @$query['SendDateStart'] = $request->sendDateStart;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->tmpName) {
            @$query['TmpName'] = $request->tmpName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsStatisticsList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsStatisticsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按时间查询发送统计信息-解析统计
     *
     * @param request - QueryCardSmsStatisticsListRequest
     *
     * @returns QueryCardSmsStatisticsListResponse
     *
     * @param QueryCardSmsStatisticsListRequest $request
     *
     * @return QueryCardSmsStatisticsListResponse
     */
    public function queryCardSmsStatisticsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsStatisticsListWithOptions($request, $runtime);
    }

    /**
     * 分页查询发送统计信息-发送+解析统计
     *
     * @param request - QueryCardSmsStatisticsSendRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsStatisticsSendResponse
     *
     * @param QueryCardSmsStatisticsSendRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryCardSmsStatisticsSendResponse
     */
    public function queryCardSmsStatisticsSendWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTmpCode) {
            @$query['CustomTmpCode'] = $request->customTmpCode;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sendDateEnd) {
            @$query['SendDateEnd'] = $request->sendDateEnd;
        }

        if (null !== $request->sendDateStart) {
            @$query['SendDateStart'] = $request->sendDateStart;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsStatisticsSend',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsStatisticsSendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询发送统计信息-发送+解析统计
     *
     * @param request - QueryCardSmsStatisticsSendRequest
     *
     * @returns QueryCardSmsStatisticsSendResponse
     *
     * @param QueryCardSmsStatisticsSendRequest $request
     *
     * @return QueryCardSmsStatisticsSendResponse
     */
    public function queryCardSmsStatisticsSend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsStatisticsSendWithOptions($request, $runtime);
    }

    /**
     * 按日期查询发送统计信息-发送+解析统计
     *
     * @param request - QueryCardSmsStatisticsSendListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCardSmsStatisticsSendListResponse
     *
     * @param QueryCardSmsStatisticsSendListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryCardSmsStatisticsSendListResponse
     */
    public function queryCardSmsStatisticsSendListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customTmpCode) {
            @$query['CustomTmpCode'] = $request->customTmpCode;
        }

        if (null !== $request->sendDateEnd) {
            @$query['SendDateEnd'] = $request->sendDateEnd;
        }

        if (null !== $request->sendDateStart) {
            @$query['SendDateStart'] = $request->sendDateStart;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCardSmsStatisticsSendList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCardSmsStatisticsSendListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按日期查询发送统计信息-发送+解析统计
     *
     * @param request - QueryCardSmsStatisticsSendListRequest
     *
     * @returns QueryCardSmsStatisticsSendListResponse
     *
     * @param QueryCardSmsStatisticsSendListRequest $request
     *
     * @return QueryCardSmsStatisticsSendListResponse
     */
    public function queryCardSmsStatisticsSendList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsStatisticsSendListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCommonCustInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCommonCustInfoResponse
     *
     * @param QueryCommonCustInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCommonCustInfoResponse
     */
    public function queryCommonCustInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCommonCustInfo',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCommonCustInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCommonCustInfoRequest
     *
     * @returns QueryCommonCustInfoResponse
     *
     * @param QueryCommonCustInfoRequest $request
     *
     * @return QueryCommonCustInfoResponse
     */
    public function queryCommonCustInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCommonCustInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryContactsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryContactsListResponse
     *
     * @param QueryContactsListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryContactsListResponse
     */
    public function queryContactsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryContactsList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryContactsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryContactsListRequest
     *
     * @returns QueryContactsListResponse
     *
     * @param QueryContactsListRequest $request
     *
     * @return QueryContactsListResponse
     */
    public function queryContactsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactsListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryContactsListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryContactsListNewResponse
     *
     * @param QueryContactsListNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryContactsListNewResponse
     */
    public function queryContactsListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryContactsListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryContactsListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryContactsListNewRequest
     *
     * @returns QueryContactsListNewResponse
     *
     * @param QueryContactsListNewRequest $request
     *
     * @return QueryContactsListNewResponse
     */
    public function queryContactsListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContactsListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDailyBillInfoLeafNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDailyBillInfoLeafNewResponse
     *
     * @param QueryDailyBillInfoLeafNewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryDailyBillInfoLeafNewResponse
     */
    public function queryDailyBillInfoLeafNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->itemId) {
            @$query['ItemId'] = $request->itemId;
        }

        if (null !== $request->itemName) {
            @$query['ItemName'] = $request->itemName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subjectItemId) {
            @$query['SubjectItemId'] = $request->subjectItemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDailyBillInfoLeafNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDailyBillInfoLeafNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDailyBillInfoLeafNewRequest
     *
     * @returns QueryDailyBillInfoLeafNewResponse
     *
     * @param QueryDailyBillInfoLeafNewRequest $request
     *
     * @return QueryDailyBillInfoLeafNewResponse
     */
    public function queryDailyBillInfoLeafNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDailyBillInfoLeafNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDigitalTemplateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalTemplateDetailResponse
     *
     * @param QueryDigitalTemplateDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDigitalTemplateDetailResponse
     */
    public function queryDigitalTemplateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalTemplateDetail',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalTemplateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDigitalTemplateDetailRequest
     *
     * @returns QueryDigitalTemplateDetailResponse
     *
     * @param QueryDigitalTemplateDetailRequest $request
     *
     * @return QueryDigitalTemplateDetailResponse
     */
    public function queryDigitalTemplateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalTemplateDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDigitalTemplateDetailNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalTemplateDetailNewResponse
     *
     * @param QueryDigitalTemplateDetailNewRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryDigitalTemplateDetailNewResponse
     */
    public function queryDigitalTemplateDetailNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalTemplateDetailNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalTemplateDetailNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDigitalTemplateDetailNewRequest
     *
     * @returns QueryDigitalTemplateDetailNewResponse
     *
     * @param QueryDigitalTemplateDetailNewRequest $request
     *
     * @return QueryDigitalTemplateDetailNewResponse
     */
    public function queryDigitalTemplateDetailNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalTemplateDetailNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDigitalTemplateLastRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalTemplateLastRangeResponse
     *
     * @param QueryDigitalTemplateLastRangeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryDigitalTemplateLastRangeResponse
     */
    public function queryDigitalTemplateLastRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalTemplateLastRange',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalTemplateLastRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDigitalTemplateLastRangeRequest
     *
     * @returns QueryDigitalTemplateLastRangeResponse
     *
     * @param QueryDigitalTemplateLastRangeRequest $request
     *
     * @return QueryDigitalTemplateLastRangeResponse
     */
    public function queryDigitalTemplateLastRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalTemplateLastRangeWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDigitalTemplateLastRangeNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalTemplateLastRangeNewResponse
     *
     * @param QueryDigitalTemplateLastRangeNewRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryDigitalTemplateLastRangeNewResponse
     */
    public function queryDigitalTemplateLastRangeNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodType) {
            @$query['ProdType'] = $request->prodType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalTemplateLastRangeNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalTemplateLastRangeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDigitalTemplateLastRangeNewRequest
     *
     * @returns QueryDigitalTemplateLastRangeNewResponse
     *
     * @param QueryDigitalTemplateLastRangeNewRequest $request
     *
     * @return QueryDigitalTemplateLastRangeNewResponse
     */
    public function queryDigitalTemplateLastRangeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalTemplateLastRangeNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDigitalTemplatePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalTemplatePageListResponse
     *
     * @param QueryDigitalTemplatePageListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDigitalTemplatePageListResponse
     */
    public function queryDigitalTemplatePageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalTemplatePageList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalTemplatePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDigitalTemplatePageListRequest
     *
     * @returns QueryDigitalTemplatePageListResponse
     *
     * @param QueryDigitalTemplatePageListRequest $request
     *
     * @return QueryDigitalTemplatePageListResponse
     */
    public function queryDigitalTemplatePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalTemplatePageListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDigitalTemplatePageListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDigitalTemplatePageListNewResponse
     *
     * @param QueryDigitalTemplatePageListNewRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryDigitalTemplatePageListNewResponse
     */
    public function queryDigitalTemplatePageListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDigitalTemplatePageListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDigitalTemplatePageListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDigitalTemplatePageListNewRequest
     *
     * @returns QueryDigitalTemplatePageListNewResponse
     *
     * @param QueryDigitalTemplatePageListNewRequest $request
     *
     * @return QueryDigitalTemplatePageListNewResponse
     */
    public function queryDigitalTemplatePageListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDigitalTemplatePageListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainListResponse
     *
     * @param QueryDomainListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDomainListRequest
     *
     * @returns QueryDomainListResponse
     *
     * @param QueryDomainListRequest $request
     *
     * @return QueryDomainListResponse
     */
    public function queryDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDomainListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainListNewResponse
     *
     * @param QueryDomainListNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryDomainListNewResponse
     */
    public function queryDomainListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryDomainListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDomainListNewRequest
     *
     * @returns QueryDomainListNewResponse
     *
     * @param QueryDomainListNewRequest $request
     *
     * @return QueryDomainListNewResponse
     */
    public function queryDomainListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryExportSendRecordListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExportSendRecordListNewResponse
     *
     * @param QueryExportSendRecordListNewRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryExportSendRecordListNewResponse
     */
    public function queryExportSendRecordListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyStatus) {
            @$query['ApplyStatus'] = $request->applyStatus;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryExportSendRecordListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryExportSendRecordListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryExportSendRecordListNewRequest
     *
     * @returns QueryExportSendRecordListNewResponse
     *
     * @param QueryExportSendRecordListNewRequest $request
     *
     * @return QueryExportSendRecordListNewResponse
     */
    public function queryExportSendRecordListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExportSendRecordListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryFailDetailDownloadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFailDetailDownloadResponse
     *
     * @param QueryFailDetailDownloadRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryFailDetailDownloadResponse
     */
    public function queryFailDetailDownloadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskInstanceId) {
            @$query['TaskInstanceId'] = $request->taskInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFailDetailDownload',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFailDetailDownloadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryFailDetailDownloadRequest
     *
     * @returns QueryFailDetailDownloadResponse
     *
     * @param QueryFailDetailDownloadRequest $request
     *
     * @return QueryFailDetailDownloadResponse
     */
    public function queryFailDetailDownload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailDetailDownloadWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryFailDetailDownloadNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFailDetailDownloadNewResponse
     *
     * @param QueryFailDetailDownloadNewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryFailDetailDownloadNewResponse
     */
    public function queryFailDetailDownloadNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskInstanceId) {
            @$query['TaskInstanceId'] = $request->taskInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFailDetailDownloadNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFailDetailDownloadNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryFailDetailDownloadNewRequest
     *
     * @returns QueryFailDetailDownloadNewResponse
     *
     * @param QueryFailDetailDownloadNewRequest $request
     *
     * @return QueryFailDetailDownloadNewResponse
     */
    public function queryFailDetailDownloadNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFailDetailDownloadNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryFlowLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFlowLimitResponse
     *
     * @param QueryFlowLimitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryFlowLimitResponse
     */
    public function queryFlowLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFlowLimit',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFlowLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryFlowLimitRequest
     *
     * @returns QueryFlowLimitResponse
     *
     * @param QueryFlowLimitRequest $request
     *
     * @return QueryFlowLimitResponse
     */
    public function queryFlowLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFlowLimitWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryFlowLimitNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFlowLimitNewResponse
     *
     * @param QueryFlowLimitNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryFlowLimitNewResponse
     */
    public function queryFlowLimitNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryFlowLimitNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryFlowLimitNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryFlowLimitNewRequest
     *
     * @returns QueryFlowLimitNewResponse
     *
     * @param QueryFlowLimitNewRequest $request
     *
     * @return QueryFlowLimitNewResponse
     */
    public function queryFlowLimitNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFlowLimitNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryIndexColRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIndexColRecordResponse
     *
     * @param QueryIndexColRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIndexColRecordResponse
     */
    public function queryIndexColRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskInstanceId) {
            @$query['TaskInstanceId'] = $request->taskInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryIndexColRecord',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryIndexColRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryIndexColRecordRequest
     *
     * @returns QueryIndexColRecordResponse
     *
     * @param QueryIndexColRecordRequest $request
     *
     * @return QueryIndexColRecordResponse
     */
    public function queryIndexColRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIndexColRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryLearningStatusNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLearningStatusNewResponse
     *
     * @param QueryLearningStatusNewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryLearningStatusNewResponse
     */
    public function queryLearningStatusNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryLearningStatusNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLearningStatusNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryLearningStatusNewRequest
     *
     * @returns QueryLearningStatusNewResponse
     *
     * @param QueryLearningStatusNewRequest $request
     *
     * @return QueryLearningStatusNewResponse
     */
    public function queryLearningStatusNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLearningStatusNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMarketingAssistantStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMarketingAssistantStatusResponse
     *
     * @param QueryMarketingAssistantStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryMarketingAssistantStatusResponse
     */
    public function queryMarketingAssistantStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMarketingAssistantStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMarketingAssistantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMarketingAssistantStatusRequest
     *
     * @returns QueryMarketingAssistantStatusResponse
     *
     * @param QueryMarketingAssistantStatusRequest $request
     *
     * @return QueryMarketingAssistantStatusResponse
     */
    public function queryMarketingAssistantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMarketingAssistantStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMessageCallbackNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMessageCallbackNewResponse
     *
     * @param QueryMessageCallbackNewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMessageCallbackNewResponse
     */
    public function queryMessageCallbackNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMessageCallbackNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMessageCallbackNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMessageCallbackNewRequest
     *
     * @returns QueryMessageCallbackNewResponse
     *
     * @param QueryMessageCallbackNewRequest $request
     *
     * @return QueryMessageCallbackNewResponse
     */
    public function queryMessageCallbackNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageCallbackNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMessageQueueNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMessageQueueNewResponse
     *
     * @param QueryMessageQueueNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMessageQueueNewResponse
     */
    public function queryMessageQueueNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->queueTypes) {
            @$query['QueueTypes'] = $request->queueTypes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMessageQueueNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMessageQueueNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMessageQueueNewRequest
     *
     * @returns QueryMessageQueueNewResponse
     *
     * @param QueryMessageQueueNewRequest $request
     *
     * @return QueryMessageQueueNewResponse
     */
    public function queryMessageQueueNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageQueueNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMonthlyBillInfoLeafNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMonthlyBillInfoLeafNewResponse
     *
     * @param QueryMonthlyBillInfoLeafNewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryMonthlyBillInfoLeafNewResponse
     */
    public function queryMonthlyBillInfoLeafNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->itemId) {
            @$query['ItemId'] = $request->itemId;
        }

        if (null !== $request->itemName) {
            @$query['ItemName'] = $request->itemName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->subjectItemId) {
            @$query['SubjectItemId'] = $request->subjectItemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMonthlyBillInfoLeafNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMonthlyBillInfoLeafNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMonthlyBillInfoLeafNewRequest
     *
     * @returns QueryMonthlyBillInfoLeafNewResponse
     *
     * @param QueryMonthlyBillInfoLeafNewRequest $request
     *
     * @return QueryMonthlyBillInfoLeafNewResponse
     */
    public function queryMonthlyBillInfoLeafNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyBillInfoLeafNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMonthlyBillRentalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMonthlyBillRentalResponse
     *
     * @param QueryMonthlyBillRentalRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryMonthlyBillRentalResponse
     */
    public function queryMonthlyBillRentalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMonthlyBillRental',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMonthlyBillRentalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMonthlyBillRentalRequest
     *
     * @returns QueryMonthlyBillRentalResponse
     *
     * @param QueryMonthlyBillRentalRequest $request
     *
     * @return QueryMonthlyBillRentalResponse
     */
    public function queryMonthlyBillRental($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyBillRentalWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMonthlyBillRentalNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMonthlyBillRentalNewResponse
     *
     * @param QueryMonthlyBillRentalNewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMonthlyBillRentalNewResponse
     */
    public function queryMonthlyBillRentalNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMonthlyBillRentalNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMonthlyBillRentalNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMonthlyBillRentalNewRequest
     *
     * @returns QueryMonthlyBillRentalNewResponse
     *
     * @param QueryMonthlyBillRentalNewRequest $request
     *
     * @return QueryMonthlyBillRentalNewResponse
     */
    public function queryMonthlyBillRentalNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyBillRentalNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMsgCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMsgCountResponse
     *
     * @param QueryMsgCountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryMsgCountResponse
     */
    public function queryMsgCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMsgCount',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMsgCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMsgCountRequest
     *
     * @returns QueryMsgCountResponse
     *
     * @param QueryMsgCountRequest $request
     *
     * @return QueryMsgCountResponse
     */
    public function queryMsgCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMsgCountWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryOpenStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOpenStatusResponse
     *
     * @param QueryOpenStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryOpenStatusResponse
     */
    public function queryOpenStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->busOffer) {
            @$query['BusOffer'] = $request->busOffer;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOpenStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOpenStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryOpenStatusRequest
     *
     * @returns QueryOpenStatusResponse
     *
     * @param QueryOpenStatusRequest $request
     *
     * @return QueryOpenStatusResponse
     */
    public function queryOpenStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOpenStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryOpencFlagNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOpencFlagNewResponse
     *
     * @param QueryOpencFlagNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOpencFlagNewResponse
     */
    public function queryOpencFlagNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOpencFlagNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOpencFlagNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryOpencFlagNewRequest
     *
     * @returns QueryOpencFlagNewResponse
     *
     * @param QueryOpencFlagNewRequest $request
     *
     * @return QueryOpencFlagNewResponse
     */
    public function queryOpencFlagNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOpencFlagNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPhoneWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPhoneWhiteListResponse
     *
     * @param QueryPhoneWhiteListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryPhoneWhiteListResponse
     */
    public function queryPhoneWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPhoneWhiteList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPhoneWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPhoneWhiteListRequest
     *
     * @returns QueryPhoneWhiteListResponse
     *
     * @param QueryPhoneWhiteListRequest $request
     *
     * @return QueryPhoneWhiteListResponse
     */
    public function queryPhoneWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPhoneWhiteListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPhoneWhiteListNewResponse
     *
     * @param QueryPhoneWhiteListNewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPhoneWhiteListNewResponse
     */
    public function queryPhoneWhiteListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPhoneWhiteListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPhoneWhiteListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPhoneWhiteListNewRequest
     *
     * @returns QueryPhoneWhiteListNewResponse
     *
     * @param QueryPhoneWhiteListNewRequest $request
     *
     * @return QueryPhoneWhiteListNewResponse
     */
    public function queryPhoneWhiteListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneWhiteListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPkgThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPkgThresholdResponse
     *
     * @param QueryPkgThresholdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPkgThresholdResponse
     */
    public function queryPkgThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPkgThreshold',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPkgThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPkgThresholdRequest
     *
     * @returns QueryPkgThresholdResponse
     *
     * @param QueryPkgThresholdRequest $request
     *
     * @return QueryPkgThresholdResponse
     */
    public function queryPkgThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPkgThresholdWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPkgThresholdNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPkgThresholdNewResponse
     *
     * @param QueryPkgThresholdNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryPkgThresholdNewResponse
     */
    public function queryPkgThresholdNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPkgThresholdNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPkgThresholdNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPkgThresholdNewRequest
     *
     * @returns QueryPkgThresholdNewResponse
     *
     * @param QueryPkgThresholdNewRequest $request
     *
     * @return QueryPkgThresholdNewResponse
     */
    public function queryPkgThresholdNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPkgThresholdNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPrevLimitNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPrevLimitNewResponse
     *
     * @param QueryPrevLimitNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPrevLimitNewResponse
     */
    public function queryPrevLimitNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPrevLimitNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPrevLimitNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPrevLimitNewRequest
     *
     * @returns QueryPrevLimitNewResponse
     *
     * @param QueryPrevLimitNewRequest $request
     *
     * @return QueryPrevLimitNewResponse
     */
    public function queryPrevLimitNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPrevLimitNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySaasRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySaasRecordResponse
     *
     * @param QuerySaasRecordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QuerySaasRecordResponse
     */
    public function querySaasRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->indexCol) {
            @$query['IndexCol'] = $request->indexCol;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->result) {
            @$query['Result'] = $request->result;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskInstanceId) {
            @$query['TaskInstanceId'] = $request->taskInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySaasRecord',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySaasRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySaasRecordRequest
     *
     * @returns QuerySaasRecordResponse
     *
     * @param QuerySaasRecordRequest $request
     *
     * @return QuerySaasRecordResponse
     */
    public function querySaasRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySaasRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySaasRecordNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySaasRecordNewResponse
     *
     * @param QuerySaasRecordNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySaasRecordNewResponse
     */
    public function querySaasRecordNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->indexCol) {
            @$query['IndexCol'] = $request->indexCol;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->result) {
            @$query['Result'] = $request->result;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskInstanceId) {
            @$query['TaskInstanceId'] = $request->taskInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySaasRecordNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySaasRecordNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySaasRecordNewRequest
     *
     * @returns QuerySaasRecordNewResponse
     *
     * @param QuerySaasRecordNewRequest $request
     *
     * @return QuerySaasRecordNewResponse
     */
    public function querySaasRecordNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySaasRecordNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySendDetailsByPhoneNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendDetailsByPhoneNumResponse
     *
     * @param QuerySendDetailsByPhoneNumRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySendDetailsByPhoneNumResponse
     */
    public function querySendDetailsByPhoneNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->errorCode) {
            @$query['ErrorCode'] = $request->errorCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendDetailsByPhoneNum',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendDetailsByPhoneNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySendDetailsByPhoneNumRequest
     *
     * @returns QuerySendDetailsByPhoneNumResponse
     *
     * @param QuerySendDetailsByPhoneNumRequest $request
     *
     * @return QuerySendDetailsByPhoneNumResponse
     */
    public function querySendDetailsByPhoneNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsByPhoneNumWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySendDetailsByPhoneNumNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendDetailsByPhoneNumNewResponse
     *
     * @param QuerySendDetailsByPhoneNumNewRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QuerySendDetailsByPhoneNumNewResponse
     */
    public function querySendDetailsByPhoneNumNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->errorCode) {
            @$query['ErrorCode'] = $request->errorCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        if (null !== $request->sendStatus) {
            @$query['SendStatus'] = $request->sendStatus;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->statisticsStatus) {
            @$query['StatisticsStatus'] = $request->statisticsStatus;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendDetailsByPhoneNumNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendDetailsByPhoneNumNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySendDetailsByPhoneNumNewRequest
     *
     * @returns QuerySendDetailsByPhoneNumNewResponse
     *
     * @param QuerySendDetailsByPhoneNumNewRequest $request
     *
     * @return QuerySendDetailsByPhoneNumNewResponse
     */
    public function querySendDetailsByPhoneNumNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsByPhoneNumNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySendFailDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendFailDetailsResponse
     *
     * @param QuerySendFailDetailsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySendFailDetailsResponse
     */
    public function querySendFailDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendFailDetails',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendFailDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySendFailDetailsRequest
     *
     * @returns QuerySendFailDetailsResponse
     *
     * @param QuerySendFailDetailsRequest $request
     *
     * @return QuerySendFailDetailsResponse
     */
    public function querySendFailDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendFailDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySendFailDetailsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendFailDetailsNewResponse
     *
     * @param QuerySendFailDetailsNewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySendFailDetailsNewResponse
     */
    public function querySendFailDetailsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendFailDetailsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendFailDetailsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySendFailDetailsNewRequest
     *
     * @returns QuerySendFailDetailsNewResponse
     *
     * @param QuerySendFailDetailsNewRequest $request
     *
     * @return QuerySendFailDetailsNewResponse
     */
    public function querySendFailDetailsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendFailDetailsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySendToGlobeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySendToGlobeStatusResponse
     *
     * @param QuerySendToGlobeStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySendToGlobeStatusResponse
     */
    public function querySendToGlobeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySendToGlobeStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySendToGlobeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySendToGlobeStatusRequest
     *
     * @returns QuerySendToGlobeStatusResponse
     *
     * @param QuerySendToGlobeStatusRequest $request
     *
     * @return QuerySendToGlobeStatusResponse
     */
    public function querySendToGlobeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendToGlobeStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryShortUrlDetailNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryShortUrlDetailNewResponse
     *
     * @param QueryShortUrlDetailNewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryShortUrlDetailNewResponse
     */
    public function queryShortUrlDetailNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->shortUrlId) {
            @$query['ShortUrlId'] = $request->shortUrlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryShortUrlDetailNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryShortUrlDetailNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryShortUrlDetailNewRequest
     *
     * @returns QueryShortUrlDetailNewResponse
     *
     * @param QueryShortUrlDetailNewRequest $request
     *
     * @return QueryShortUrlDetailNewResponse
     */
    public function queryShortUrlDetailNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlDetailNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryShortUrlListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryShortUrlListNewResponse
     *
     * @param QueryShortUrlListNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryShortUrlListNewResponse
     */
    public function queryShortUrlListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->shortUrl) {
            @$query['ShortUrl'] = $request->shortUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryShortUrlListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryShortUrlListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryShortUrlListNewRequest
     *
     * @returns QueryShortUrlListNewResponse
     *
     * @param QueryShortUrlListNewRequest $request
     *
     * @return QueryShortUrlListNewResponse
     */
    public function queryShortUrlListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryShortUrlStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryShortUrlStatusResponse
     *
     * @param QueryShortUrlStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryShortUrlStatusResponse
     */
    public function queryShortUrlStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryShortUrlStatus',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryShortUrlStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryShortUrlStatusRequest
     *
     * @returns QueryShortUrlStatusResponse
     *
     * @param QueryShortUrlStatusRequest $request
     *
     * @return QueryShortUrlStatusResponse
     */
    public function queryShortUrlStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySlsStatusNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySlsStatusNewResponse
     *
     * @param QuerySlsStatusNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySlsStatusNewResponse
     */
    public function querySlsStatusNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySlsStatusNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySlsStatusNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySlsStatusNewRequest
     *
     * @returns QuerySlsStatusNewResponse
     *
     * @param QuerySlsStatusNewRequest $request
     *
     * @return QuerySlsStatusNewResponse
     */
    public function querySlsStatusNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlsStatusNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsBaseScreenNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsBaseScreenNewResponse
     *
     * @param QuerySmsBaseScreenNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySmsBaseScreenNewResponse
     */
    public function querySmsBaseScreenNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsBaseScreenNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsBaseScreenNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsBaseScreenNewRequest
     *
     * @returns QuerySmsBaseScreenNewResponse
     *
     * @param QuerySmsBaseScreenNewRequest $request
     *
     * @return QuerySmsBaseScreenNewResponse
     */
    public function querySmsBaseScreenNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsBaseScreenNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsDetectCountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsDetectCountsResponse
     *
     * @param QuerySmsDetectCountsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmsDetectCountsResponse
     */
    public function querySmsDetectCountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsDetectCounts',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsDetectCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsDetectCountsRequest
     *
     * @returns QuerySmsDetectCountsResponse
     *
     * @param QuerySmsDetectCountsRequest $request
     *
     * @return QuerySmsDetectCountsResponse
     */
    public function querySmsDetectCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsDetectCountsWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsDetectCountsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsDetectCountsNewResponse
     *
     * @param QuerySmsDetectCountsNewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySmsDetectCountsNewResponse
     */
    public function querySmsDetectCountsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsDetectCountsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsDetectCountsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsDetectCountsNewRequest
     *
     * @returns QuerySmsDetectCountsNewResponse
     *
     * @param QuerySmsDetectCountsNewRequest $request
     *
     * @return QuerySmsDetectCountsNewResponse
     */
    public function querySmsDetectCountsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsDetectCountsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsDetectListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsDetectListResponse
     *
     * @param QuerySmsDetectListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySmsDetectListResponse
     */
    public function querySmsDetectListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsDetectList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsDetectListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsDetectListRequest
     *
     * @returns QuerySmsDetectListResponse
     *
     * @param QuerySmsDetectListRequest $request
     *
     * @return QuerySmsDetectListResponse
     */
    public function querySmsDetectList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsDetectListWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsDetectListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsDetectListNewResponse
     *
     * @param QuerySmsDetectListNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySmsDetectListNewResponse
     */
    public function querySmsDetectListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsDetectListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsDetectListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsDetectListNewRequest
     *
     * @returns QuerySmsDetectListNewResponse
     *
     * @param QuerySmsDetectListNewRequest $request
     *
     * @return QuerySmsDetectListNewResponse
     */
    public function querySmsDetectListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsDetectListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageDetailResponse
     *
     * @param QuerySmsPackageDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySmsPackageDetailResponse
     */
    public function querySmsPackageDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageDetail',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageDetailRequest
     *
     * @returns QuerySmsPackageDetailResponse
     *
     * @param QuerySmsPackageDetailRequest $request
     *
     * @return QuerySmsPackageDetailResponse
     */
    public function querySmsPackageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageDetailNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageDetailNewResponse
     *
     * @param QuerySmsPackageDetailNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySmsPackageDetailNewResponse
     */
    public function querySmsPackageDetailNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageDetailNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageDetailNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageDetailNewRequest
     *
     * @returns QuerySmsPackageDetailNewResponse
     *
     * @param QuerySmsPackageDetailNewRequest $request
     *
     * @return QuerySmsPackageDetailNewResponse
     */
    public function querySmsPackageDetailNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageDetailNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageNewResponse
     *
     * @param QuerySmsPackageNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySmsPackageNewResponse
     */
    public function querySmsPackageNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageNewRequest
     *
     * @returns QuerySmsPackageNewResponse
     *
     * @param QuerySmsPackageNewRequest $request
     *
     * @return QuerySmsPackageNewResponse
     */
    public function querySmsPackageNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageOrderListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageOrderListResponse
     *
     * @param QuerySmsPackageOrderListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySmsPackageOrderListResponse
     */
    public function querySmsPackageOrderListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageOrderList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageOrderListRequest
     *
     * @returns QuerySmsPackageOrderListResponse
     *
     * @param QuerySmsPackageOrderListRequest $request
     *
     * @return QuerySmsPackageOrderListResponse
     */
    public function querySmsPackageOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageOrderListWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageOrderListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageOrderListNewResponse
     *
     * @param QuerySmsPackageOrderListNewRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QuerySmsPackageOrderListNewResponse
     */
    public function querySmsPackageOrderListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageOrderListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageOrderListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageOrderListNewRequest
     *
     * @returns QuerySmsPackageOrderListNewResponse
     *
     * @param QuerySmsPackageOrderListNewRequest $request
     *
     * @return QuerySmsPackageOrderListNewResponse
     */
    public function querySmsPackageOrderListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageOrderListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageSummaryResponse
     *
     * @param QuerySmsPackageSummaryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySmsPackageSummaryResponse
     */
    public function querySmsPackageSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageSummary',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageSummaryRequest
     *
     * @returns QuerySmsPackageSummaryResponse
     *
     * @param QuerySmsPackageSummaryRequest $request
     *
     * @return QuerySmsPackageSummaryResponse
     */
    public function querySmsPackageSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsPackageSummaryNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsPackageSummaryNewResponse
     *
     * @param QuerySmsPackageSummaryNewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmsPackageSummaryNewResponse
     */
    public function querySmsPackageSummaryNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsPackageSummaryNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsPackageSummaryNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsPackageSummaryNewRequest
     *
     * @returns QuerySmsPackageSummaryNewResponse
     *
     * @param QuerySmsPackageSummaryNewRequest $request
     *
     * @return QuerySmsPackageSummaryNewResponse
     */
    public function querySmsPackageSummaryNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsPackageSummaryNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSaasTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSaasTaskDetailResponse
     *
     * @param QuerySmsSaasTaskDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySmsSaasTaskDetailResponse
     */
    public function querySmsSaasTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskInstanceId) {
            @$query['TaskInstanceId'] = $request->taskInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSaasTaskDetail',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSaasTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSaasTaskDetailRequest
     *
     * @returns QuerySmsSaasTaskDetailResponse
     *
     * @param QuerySmsSaasTaskDetailRequest $request
     *
     * @return QuerySmsSaasTaskDetailResponse
     */
    public function querySmsSaasTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSaasTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSaasTaskDetailNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSaasTaskDetailNewResponse
     *
     * @param QuerySmsSaasTaskDetailNewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmsSaasTaskDetailNewResponse
     */
    public function querySmsSaasTaskDetailNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSaasTaskDetailNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSaasTaskDetailNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSaasTaskDetailNewRequest
     *
     * @returns QuerySmsSaasTaskDetailNewResponse
     *
     * @param QuerySmsSaasTaskDetailNewRequest $request
     *
     * @return QuerySmsSaasTaskDetailNewResponse
     */
    public function querySmsSaasTaskDetailNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSaasTaskDetailNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSaasTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSaasTaskListResponse
     *
     * @param QuerySmsSaasTaskListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmsSaasTaskListResponse
     */
    public function querySmsSaasTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSaasTaskList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSaasTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSaasTaskListRequest
     *
     * @returns QuerySmsSaasTaskListResponse
     *
     * @param QuerySmsSaasTaskListRequest $request
     *
     * @return QuerySmsSaasTaskListResponse
     */
    public function querySmsSaasTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSaasTaskListWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSaasTaskListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSaasTaskListNewResponse
     *
     * @param QuerySmsSaasTaskListNewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySmsSaasTaskListNewResponse
     */
    public function querySmsSaasTaskListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSaasTaskListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSaasTaskListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSaasTaskListNewRequest
     *
     * @returns QuerySmsSaasTaskListNewResponse
     *
     * @param QuerySmsSaasTaskListNewRequest $request
     *
     * @return QuerySmsSaasTaskListNewResponse
     */
    public function querySmsSaasTaskListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSaasTaskListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSendFailDetailsUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSendFailDetailsUrlResponse
     *
     * @param QuerySmsSendFailDetailsUrlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySmsSendFailDetailsUrlResponse
     */
    public function querySmsSendFailDetailsUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSendFailDetailsUrl',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSendFailDetailsUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSendFailDetailsUrlRequest
     *
     * @returns QuerySmsSendFailDetailsUrlResponse
     *
     * @param QuerySmsSendFailDetailsUrlRequest $request
     *
     * @return QuerySmsSendFailDetailsUrlResponse
     */
    public function querySmsSendFailDetailsUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSendFailDetailsUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSendFailDetailsUrlNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSendFailDetailsUrlNewResponse
     *
     * @param QuerySmsSendFailDetailsUrlNewRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QuerySmsSendFailDetailsUrlNewResponse
     */
    public function querySmsSendFailDetailsUrlNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendDate) {
            @$query['SendDate'] = $request->sendDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSendFailDetailsUrlNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSendFailDetailsUrlNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSendFailDetailsUrlNewRequest
     *
     * @returns QuerySmsSendFailDetailsUrlNewResponse
     *
     * @param QuerySmsSendFailDetailsUrlNewRequest $request
     *
     * @return QuerySmsSendFailDetailsUrlNewResponse
     */
    public function querySmsSendFailDetailsUrlNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSendFailDetailsUrlNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSignDetailBySignIdNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignDetailBySignIdNewResponse
     *
     * @param QuerySmsSignDetailBySignIdNewRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QuerySmsSignDetailBySignIdNewResponse
     */
    public function querySmsSignDetailBySignIdNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signGray) {
            @$query['SignGray'] = $request->signGray;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignDetailBySignIdNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignDetailBySignIdNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignDetailBySignIdNewRequest
     *
     * @returns QuerySmsSignDetailBySignIdNewResponse
     *
     * @param QuerySmsSignDetailBySignIdNewRequest $request
     *
     * @return QuerySmsSignDetailBySignIdNewResponse
     */
    public function querySmsSignDetailBySignIdNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignDetailBySignIdNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSignLastRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignLastRangeResponse
     *
     * @param QuerySmsSignLastRangeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySmsSignLastRangeResponse
     */
    public function querySmsSignLastRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->isGlobeSign) {
            @$query['IsGlobeSign'] = $request->isGlobeSign;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->needDefaultSign) {
            @$query['NeedDefaultSign'] = $request->needDefaultSign;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignLastRange',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignLastRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignLastRangeRequest
     *
     * @returns QuerySmsSignLastRangeResponse
     *
     * @param QuerySmsSignLastRangeRequest $request
     *
     * @return QuerySmsSignLastRangeResponse
     */
    public function querySmsSignLastRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignLastRangeWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSignLastRangeNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignLastRangeNewResponse
     *
     * @param QuerySmsSignLastRangeNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySmsSignLastRangeNewResponse
     */
    public function querySmsSignLastRangeNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->isGlobeSign) {
            @$query['IsGlobeSign'] = $request->isGlobeSign;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->needDefaultSign) {
            @$query['NeedDefaultSign'] = $request->needDefaultSign;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneType) {
            @$query['SceneType'] = $request->sceneType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignLastRangeNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignLastRangeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignLastRangeNewRequest
     *
     * @returns QuerySmsSignLastRangeNewResponse
     *
     * @param QuerySmsSignLastRangeNewRequest $request
     *
     * @return QuerySmsSignLastRangeNewResponse
     */
    public function querySmsSignLastRangeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignLastRangeNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSignListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignListResponse
     *
     * @param QuerySmsSignListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmsSignListResponse
     */
    public function querySmsSignListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->isGlobeSign) {
            @$query['IsGlobeSign'] = $request->isGlobeSign;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignListRequest
     *
     * @returns QuerySmsSignListResponse
     *
     * @param QuerySmsSignListRequest $request
     *
     * @return QuerySmsSignListResponse
     */
    public function querySmsSignList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignListWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - QuerySmsSignListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignListNewResponse
     *
     * @param QuerySmsSignListNewRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySmsSignListNewResponse
     */
    public function querySmsSignListNewWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySmsSignListNewShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->operatorCodes) {
            $request->operatorCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operatorCodes, 'OperatorCodes', 'json');
        }

        $query = [];
        if (null !== $request->aggregatedRegisterStatus) {
            @$query['AggregatedRegisterStatus'] = $request->aggregatedRegisterStatus;
        }

        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->isGlobeSign) {
            @$query['IsGlobeSign'] = $request->isGlobeSign;
        }

        if (null !== $request->operatorCodesShrink) {
            @$query['OperatorCodes'] = $request->operatorCodesShrink;
        }

        if (null !== $request->operatorRegisterStatus) {
            @$query['OperatorRegisterStatus'] = $request->operatorRegisterStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->qualificationName) {
            @$query['QualificationName'] = $request->qualificationName;
        }

        if (null !== $request->registerResult) {
            @$query['RegisterResult'] = $request->registerResult;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signSource) {
            @$query['SignSource'] = $request->signSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignListNewRequest
     *
     * @returns QuerySmsSignListNewResponse
     *
     * @param QuerySmsSignListNewRequest $request
     *
     * @return QuerySmsSignListNewResponse
     */
    public function querySmsSignListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSignValidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignValidResponse
     *
     * @param QuerySmsSignValidRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySmsSignValidResponse
     */
    public function querySmsSignValidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignValid',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignValidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignValidRequest
     *
     * @returns QuerySmsSignValidResponse
     *
     * @param QuerySmsSignValidRequest $request
     *
     * @return QuerySmsSignValidResponse
     */
    public function querySmsSignValid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignValidWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsSignValidNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsSignValidNewResponse
     *
     * @param QuerySmsSignValidNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmsSignValidNewResponse
     */
    public function querySmsSignValidNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->signUpgrade) {
            @$query['SignUpgrade'] = $request->signUpgrade;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsSignValidNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsSignValidNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsSignValidNewRequest
     *
     * @returns QuerySmsSignValidNewResponse
     *
     * @param QuerySmsSignValidNewRequest $request
     *
     * @return QuerySmsSignValidNewResponse
     */
    public function querySmsSignValidNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignValidNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStatisticsResponse
     *
     * @param QuerySmsStatisticsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QuerySmsStatisticsResponse
     */
    public function querySmsStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStatistics',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStatisticsRequest
     *
     * @returns QuerySmsStatisticsResponse
     *
     * @param QuerySmsStatisticsRequest $request
     *
     * @return QuerySmsStatisticsResponse
     */
    public function querySmsStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStatisticsByTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStatisticsByTemplateResponse
     *
     * @param QuerySmsStatisticsByTemplateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySmsStatisticsByTemplateResponse
     */
    public function querySmsStatisticsByTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStatisticsByTemplate',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStatisticsByTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStatisticsByTemplateRequest
     *
     * @returns QuerySmsStatisticsByTemplateResponse
     *
     * @param QuerySmsStatisticsByTemplateRequest $request
     *
     * @return QuerySmsStatisticsByTemplateResponse
     */
    public function querySmsStatisticsByTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsByTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStatisticsByTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStatisticsByTemplateNewResponse
     *
     * @param QuerySmsStatisticsByTemplateNewRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QuerySmsStatisticsByTemplateNewResponse
     */
    public function querySmsStatisticsByTemplateNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStatisticsByTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStatisticsByTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStatisticsByTemplateNewRequest
     *
     * @returns QuerySmsStatisticsByTemplateNewResponse
     *
     * @param QuerySmsStatisticsByTemplateNewRequest $request
     *
     * @return QuerySmsStatisticsByTemplateNewResponse
     */
    public function querySmsStatisticsByTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsByTemplateNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStatisticsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStatisticsNewResponse
     *
     * @param QuerySmsStatisticsNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySmsStatisticsNewResponse
     */
    public function querySmsStatisticsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStatisticsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStatisticsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStatisticsNewRequest
     *
     * @returns QuerySmsStatisticsNewResponse
     *
     * @param QuerySmsStatisticsNewRequest $request
     *
     * @return QuerySmsStatisticsNewResponse
     */
    public function querySmsStatisticsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStatisticsUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStatisticsUrlResponse
     *
     * @param QuerySmsStatisticsUrlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySmsStatisticsUrlResponse
     */
    public function querySmsStatisticsUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStatisticsUrl',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStatisticsUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStatisticsUrlRequest
     *
     * @returns QuerySmsStatisticsUrlResponse
     *
     * @param QuerySmsStatisticsUrlRequest $request
     *
     * @return QuerySmsStatisticsUrlResponse
     */
    public function querySmsStatisticsUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsUrlWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStatisticsUrlNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStatisticsUrlNewResponse
     *
     * @param QuerySmsStatisticsUrlNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySmsStatisticsUrlNewResponse
     */
    public function querySmsStatisticsUrlNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStatisticsUrlNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStatisticsUrlNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStatisticsUrlNewRequest
     *
     * @returns QuerySmsStatisticsUrlNewResponse
     *
     * @param QuerySmsStatisticsUrlNewRequest $request
     *
     * @return QuerySmsStatisticsUrlNewResponse
     */
    public function querySmsStatisticsUrlNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStatisticsUrlNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsStepRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsStepResponse
     *
     * @param QuerySmsStepRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySmsStepResponse
     */
    public function querySmsStepWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billCycle) {
            @$query['BillCycle'] = $request->billCycle;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsStep',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsStepResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsStepRequest
     *
     * @returns QuerySmsStepResponse
     *
     * @param QuerySmsStepRequest $request
     *
     * @return QuerySmsStepResponse
     */
    public function querySmsStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsStepWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsTemplateByCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateByCodeResponse
     *
     * @param QuerySmsTemplateByCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySmsTemplateByCodeResponse
     */
    public function querySmsTemplateByCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateByCode',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsTemplateByCodeRequest
     *
     * @returns QuerySmsTemplateByCodeResponse
     *
     * @param QuerySmsTemplateByCodeRequest $request
     *
     * @return QuerySmsTemplateByCodeResponse
     */
    public function querySmsTemplateByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateByCodeWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsTemplateByCodeNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateByCodeNewResponse
     *
     * @param QuerySmsTemplateByCodeNewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmsTemplateByCodeNewResponse
     */
    public function querySmsTemplateByCodeNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateByCodeNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateByCodeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsTemplateByCodeNewRequest
     *
     * @returns QuerySmsTemplateByCodeNewResponse
     *
     * @param QuerySmsTemplateByCodeNewRequest $request
     *
     * @return QuerySmsTemplateByCodeNewResponse
     */
    public function querySmsTemplateByCodeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateByCodeNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsTemplateLastRangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateLastRangeResponse
     *
     * @param QuerySmsTemplateLastRangeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QuerySmsTemplateLastRangeResponse
     */
    public function querySmsTemplateLastRangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->needDefaultTemplate) {
            @$query['NeedDefaultTemplate'] = $request->needDefaultTemplate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateLastRange',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateLastRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsTemplateLastRangeRequest
     *
     * @returns QuerySmsTemplateLastRangeResponse
     *
     * @param QuerySmsTemplateLastRangeRequest $request
     *
     * @return QuerySmsTemplateLastRangeResponse
     */
    public function querySmsTemplateLastRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateLastRangeWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsTemplateLastRangeNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateLastRangeNewResponse
     *
     * @param QuerySmsTemplateLastRangeNewRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QuerySmsTemplateLastRangeNewResponse
     */
    public function querySmsTemplateLastRangeNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->filterAnyParam) {
            @$query['FilterAnyParam'] = $request->filterAnyParam;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->needDefaultTemplate) {
            @$query['NeedDefaultTemplate'] = $request->needDefaultTemplate;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateLastRangeNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateLastRangeNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsTemplateLastRangeNewRequest
     *
     * @returns QuerySmsTemplateLastRangeNewResponse
     *
     * @param QuerySmsTemplateLastRangeNewRequest $request
     *
     * @return QuerySmsTemplateLastRangeNewResponse
     */
    public function querySmsTemplateLastRangeNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateLastRangeNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateListResponse
     *
     * @param QuerySmsTemplateListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySmsTemplateListResponse
     */
    public function querySmsTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodType) {
            @$query['ProdType'] = $request->prodType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateList',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsTemplateListRequest
     *
     * @returns QuerySmsTemplateListResponse
     *
     * @param QuerySmsTemplateListRequest $request
     *
     * @return QuerySmsTemplateListResponse
     */
    public function querySmsTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsTemplateListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsTemplateListNewResponse
     *
     * @param QuerySmsTemplateListNewRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySmsTemplateListNewResponse
     */
    public function querySmsTemplateListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditState) {
            @$query['AuditState'] = $request->auditState;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->intlType) {
            @$query['IntlType'] = $request->intlType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->prodType) {
            @$query['ProdType'] = $request->prodType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tagListString) {
            @$query['TagListString'] = $request->tagListString;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsTemplateListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsTemplateListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsTemplateListNewRequest
     *
     * @returns QuerySmsTemplateListNewResponse
     *
     * @param QuerySmsTemplateListNewRequest $request
     *
     * @return QuerySmsTemplateListNewResponse
     */
    public function querySmsTemplateListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsUserTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsUserTagsResponse
     *
     * @param QuerySmsUserTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmsUserTagsResponse
     */
    public function querySmsUserTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsUserTags',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsUserTagsRequest
     *
     * @returns QuerySmsUserTagsResponse
     *
     * @param QuerySmsUserTagsRequest $request
     *
     * @return QuerySmsUserTagsResponse
     */
    public function querySmsUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySmsUserTagsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySmsUserTagsNewResponse
     *
     * @param QuerySmsUserTagsNewRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySmsUserTagsNewResponse
     */
    public function querySmsUserTagsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySmsUserTagsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySmsUserTagsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySmsUserTagsNewRequest
     *
     * @returns QuerySmsUserTagsNewResponse
     *
     * @param QuerySmsUserTagsNewRequest $request
     *
     * @return QuerySmsUserTagsNewResponse
     */
    public function querySmsUserTagsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsUserTagsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryStandarTemplateCollectionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStandarTemplateCollectionsResponse
     *
     * @param QueryStandarTemplateCollectionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryStandarTemplateCollectionsResponse
     */
    public function queryStandarTemplateCollectionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStandarTemplateCollections',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStandarTemplateCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryStandarTemplateCollectionsRequest
     *
     * @returns QueryStandarTemplateCollectionsResponse
     *
     * @param QueryStandarTemplateCollectionsRequest $request
     *
     * @return QueryStandarTemplateCollectionsResponse
     */
    public function queryStandarTemplateCollections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStandarTemplateCollectionsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryStandarTemplateCollectionsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStandarTemplateCollectionsNewResponse
     *
     * @param QueryStandarTemplateCollectionsNewRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryStandarTemplateCollectionsNewResponse
     */
    public function queryStandarTemplateCollectionsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateContent) {
            @$query['TemplateContent'] = $request->templateContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStandarTemplateCollectionsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStandarTemplateCollectionsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryStandarTemplateCollectionsNewRequest
     *
     * @returns QueryStandarTemplateCollectionsNewResponse
     *
     * @param QueryStandarTemplateCollectionsNewRequest $request
     *
     * @return QueryStandarTemplateCollectionsNewResponse
     */
    public function queryStandarTemplateCollectionsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStandarTemplateCollectionsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryStandardProtocolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStandardProtocolResponse
     *
     * @param QueryStandardProtocolRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryStandardProtocolResponse
     */
    public function queryStandardProtocolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStandardProtocol',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStandardProtocolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryStandardProtocolRequest
     *
     * @returns QueryStandardProtocolResponse
     *
     * @param QueryStandardProtocolRequest $request
     *
     * @return QueryStandardProtocolResponse
     */
    public function queryStandardProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStandardProtocolWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryStandardProtocolListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStandardProtocolListNewResponse
     *
     * @param QueryStandardProtocolListNewRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryStandardProtocolListNewResponse
     */
    public function queryStandardProtocolListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStandardProtocolListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStandardProtocolListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryStandardProtocolListNewRequest
     *
     * @returns QueryStandardProtocolListNewResponse
     *
     * @param QueryStandardProtocolListNewRequest $request
     *
     * @return QueryStandardProtocolListNewResponse
     */
    public function queryStandardProtocolListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStandardProtocolListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagResourcesResponse
     *
     * @param QueryTagResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTagResourcesResponse
     */
    public function queryTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTagResources',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTagResourcesRequest
     *
     * @returns QueryTagResourcesResponse
     *
     * @param QueryTagResourcesRequest $request
     *
     * @return QueryTagResourcesResponse
     */
    public function queryTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTagResourcesNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTagResourcesNewResponse
     *
     * @param QueryTagResourcesNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTagResourcesNewResponse
     */
    public function queryTagResourcesNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceIdListString) {
            @$query['ResourceIdListString'] = $request->resourceIdListString;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tagListString) {
            @$query['TagListString'] = $request->tagListString;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTagResourcesNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTagResourcesNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTagResourcesNewRequest
     *
     * @returns QueryTagResourcesNewResponse
     *
     * @param QueryTagResourcesNewRequest $request
     *
     * @return QueryTagResourcesNewResponse
     */
    public function queryTagResourcesNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagResourcesNewWithOptions($request, $runtime);
    }

    /**
     * 发送效果统计
     *
     * @param request - QueryTmpEffectReportDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTmpEffectReportDataResponse
     *
     * @param QueryTmpEffectReportDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryTmpEffectReportDataResponse
     */
    public function queryTmpEffectReportDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->tmpName) {
            @$query['TmpName'] = $request->tmpName;
        }

        if (null !== $request->vendorCode) {
            @$query['VendorCode'] = $request->vendorCode;
        }

        if (null !== $request->vendorName) {
            @$query['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTmpEffectReportData',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTmpEffectReportDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送效果统计
     *
     * @param request - QueryTmpEffectReportDataRequest
     *
     * @returns QueryTmpEffectReportDataResponse
     *
     * @param QueryTmpEffectReportDataRequest $request
     *
     * @return QueryTmpEffectReportDataResponse
     */
    public function queryTmpEffectReportData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTmpEffectReportDataWithOptions($request, $runtime);
    }

    /**
     * 发送效果统计-日报.
     *
     * @param request - QueryTmpEffectReportDayDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTmpEffectReportDayDataResponse
     *
     * @param QueryTmpEffectReportDayDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryTmpEffectReportDayDataResponse
     */
    public function queryTmpEffectReportDayDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->tmpCode) {
            @$query['TmpCode'] = $request->tmpCode;
        }

        if (null !== $request->tmpName) {
            @$query['TmpName'] = $request->tmpName;
        }

        if (null !== $request->vendorName) {
            @$query['VendorName'] = $request->vendorName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTmpEffectReportDayData',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTmpEffectReportDayDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送效果统计-日报.
     *
     * @param request - QueryTmpEffectReportDayDataRequest
     *
     * @returns QueryTmpEffectReportDayDataResponse
     *
     * @param QueryTmpEffectReportDayDataRequest $request
     *
     * @return QueryTmpEffectReportDayDataResponse
     */
    public function queryTmpEffectReportDayData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTmpEffectReportDayDataWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryUsertagExistenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUsertagExistenceResponse
     *
     * @param QueryUsertagExistenceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUsertagExistenceResponse
     */
    public function queryUsertagExistenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->usertagPosition) {
            @$query['UsertagPosition'] = $request->usertagPosition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUsertagExistence',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryUsertagExistenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryUsertagExistenceRequest
     *
     * @returns QueryUsertagExistenceResponse
     *
     * @param QueryUsertagExistenceRequest $request
     *
     * @return QueryUsertagExistenceResponse
     */
    public function queryUsertagExistence($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUsertagExistenceWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryWarningThresholdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWarningThresholdResponse
     *
     * @param QueryWarningThresholdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryWarningThresholdResponse
     */
    public function queryWarningThresholdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWarningThreshold',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWarningThresholdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryWarningThresholdRequest
     *
     * @returns QueryWarningThresholdResponse
     *
     * @param QueryWarningThresholdRequest $request
     *
     * @return QueryWarningThresholdResponse
     */
    public function queryWarningThreshold($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWarningThresholdWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryWarningThresholdNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWarningThresholdNewResponse
     *
     * @param QueryWarningThresholdNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryWarningThresholdNewResponse
     */
    public function queryWarningThresholdNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWarningThresholdNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWarningThresholdNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryWarningThresholdNewRequest
     *
     * @returns QueryWarningThresholdNewResponse
     *
     * @param QueryWarningThresholdNewRequest $request
     *
     * @return QueryWarningThresholdNewResponse
     */
    public function queryWarningThresholdNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWarningThresholdNewWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryWorkOrdAuditListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWorkOrdAuditListNewResponse
     *
     * @param QueryWorkOrdAuditListNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryWorkOrdAuditListNewResponse
     */
    public function queryWorkOrdAuditListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWorkOrdAuditListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWorkOrdAuditListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryWorkOrdAuditListNewRequest
     *
     * @returns QueryWorkOrdAuditListNewResponse
     *
     * @param QueryWorkOrdAuditListNewRequest $request
     *
     * @return QueryWorkOrdAuditListNewResponse
     */
    public function queryWorkOrdAuditListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWorkOrdAuditListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveContactsNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContactsNewResponse
     *
     * @param SaveContactsNewRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SaveContactsNewResponse
     */
    public function saveContactsNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->openPkgWarning) {
            @$query['OpenPkgWarning'] = $request->openPkgWarning;
        }

        if (null !== $request->openPreventBrushWarning) {
            @$query['OpenPreventBrushWarning'] = $request->openPreventBrushWarning;
        }

        if (null !== $request->openSendWarning) {
            @$query['OpenSendWarning'] = $request->openSendWarning;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->receiveSignTemplateAuditResult) {
            @$query['ReceiveSignTemplateAuditResult'] = $request->receiveSignTemplateAuditResult;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->verificationCode) {
            @$query['VerificationCode'] = $request->verificationCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveContactsNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveContactsNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveContactsNewRequest
     *
     * @returns SaveContactsNewResponse
     *
     * @param SaveContactsNewRequest $request
     *
     * @return SaveContactsNewResponse
     */
    public function saveContactsNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveContactsNewWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveLearningStatusNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveLearningStatusNewResponse
     *
     * @param SaveLearningStatusNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SaveLearningStatusNewResponse
     */
    public function saveLearningStatusNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveLearningStatusNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveLearningStatusNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveLearningStatusNewRequest
     *
     * @returns SaveLearningStatusNewResponse
     *
     * @param SaveLearningStatusNewRequest $request
     *
     * @return SaveLearningStatusNewResponse
     */
    public function saveLearningStatusNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveLearningStatusNewWithOptions($request, $runtime);
    }

    /**
     * @param request - SelectTagResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectTagResourceResponse
     *
     * @param SelectTagResourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SelectTagResourceResponse
     */
    public function selectTagResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagValue) {
            @$query['TagValue'] = $request->tagValue;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SelectTagResource',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SelectTagResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SelectTagResourceRequest
     *
     * @returns SelectTagResourceResponse
     *
     * @param SelectTagResourceRequest $request
     *
     * @return SelectTagResourceResponse
     */
    public function selectTagResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectTagResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - SelectTagResourceNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectTagResourceNewResponse
     *
     * @param SelectTagResourceNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SelectTagResourceNewResponse
     */
    public function selectTagResourceNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagValue) {
            @$query['TagValue'] = $request->tagValue;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SelectTagResourceNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SelectTagResourceNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SelectTagResourceNewRequest
     *
     * @returns SelectTagResourceNewResponse
     *
     * @param SelectTagResourceNewRequest $request
     *
     * @return SelectTagResourceNewResponse
     */
    public function selectTagResourceNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectTagResourceNewWithOptions($request, $runtime);
    }

    /**
     * @param request - SendSmsTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSmsTestResponse
     *
     * @param SendSmsTestRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SendSmsTestResponse
     */
    public function sendSmsTestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ncToken) {
            @$query['NcToken'] = $request->ncToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remoteIp) {
            @$query['RemoteIp'] = $request->remoteIp;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sig) {
            @$query['Sig'] = $request->sig;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        if (null !== $request->testType) {
            @$query['TestType'] = $request->testType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendSmsTest',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendSmsTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SendSmsTestRequest
     *
     * @returns SendSmsTestResponse
     *
     * @param SendSmsTestRequest $request
     *
     * @return SendSmsTestResponse
     */
    public function sendSmsTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsTestWithOptions($request, $runtime);
    }

    /**
     * @param request - SendSmsTestNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSmsTestNewResponse
     *
     * @param SendSmsTestNewRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SendSmsTestNewResponse
     */
    public function sendSmsTestNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ncToken) {
            @$query['NcToken'] = $request->ncToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->remoteIp) {
            @$query['RemoteIp'] = $request->remoteIp;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sig) {
            @$query['Sig'] = $request->sig;
        }

        if (null !== $request->signName) {
            @$query['SignName'] = $request->signName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateParam) {
            @$query['TemplateParam'] = $request->templateParam;
        }

        if (null !== $request->testType) {
            @$query['TestType'] = $request->testType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendSmsTestNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendSmsTestNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SendSmsTestNewRequest
     *
     * @returns SendSmsTestNewResponse
     *
     * @param SendSmsTestNewRequest $request
     *
     * @return SendSmsTestNewResponse
     */
    public function sendSmsTestNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsTestNewWithOptions($request, $runtime);
    }

    /**
     * @param request - SendVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendVerificationResponse
     *
     * @param SendVerificationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendVerificationResponse
     */
    public function sendVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendVerification',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SendVerificationRequest
     *
     * @returns SendVerificationResponse
     *
     * @param SendVerificationRequest $request
     *
     * @return SendVerificationResponse
     */
    public function sendVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationWithOptions($request, $runtime);
    }

    /**
     * @param request - SendVerificationNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendVerificationNewResponse
     *
     * @param SendVerificationNewRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SendVerificationNewResponse
     */
    public function sendVerificationNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendVerificationNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendVerificationNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SendVerificationNewRequest
     *
     * @returns SendVerificationNewResponse
     *
     * @param SendVerificationNewRequest $request
     *
     * @return SendVerificationNewResponse
     */
    public function sendVerificationNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationNewWithOptions($request, $runtime);
    }

    /**
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2017-06-20',
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
     * @param request - TagResourcesNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesNewResponse
     *
     * @param TagResourcesNewRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TagResourcesNewResponse
     */
    public function tagResourcesNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceIdListString) {
            @$query['ResourceIdListString'] = $request->resourceIdListString;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tagListString) {
            @$query['TagListString'] = $request->tagListString;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResourcesNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TagResourcesNewRequest
     *
     * @returns TagResourcesNewResponse
     *
     * @param TagResourcesNewRequest $request
     *
     * @return TagResourcesNewResponse
     */
    public function tagResourcesNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesNewWithOptions($request, $runtime);
    }

    /**
     * @param request - TagResourcesSystemTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesSystemTagsResponse
     *
     * @param TagResourcesSystemTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tagOwnerUid) {
            @$query['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResourcesSystemTags',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesSystemTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TagResourcesSystemTagsRequest
     *
     * @returns TagResourcesSystemTagsResponse
     *
     * @param TagResourcesSystemTagsRequest $request
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesSystemTagsWithOptions($request, $runtime);
    }

    /**
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
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2017-06-20',
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
     * @param request - UntagResourcesNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesNewResponse
     *
     * @param UntagResourcesNewRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UntagResourcesNewResponse
     */
    public function untagResourcesNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceIdListString) {
            @$query['ResourceIdListString'] = $request->resourceIdListString;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagListString) {
            @$query['TagListString'] = $request->tagListString;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResourcesNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UntagResourcesNewRequest
     *
     * @returns UntagResourcesNewResponse
     *
     * @param UntagResourcesNewRequest $request
     *
     * @return UntagResourcesNewResponse
     */
    public function untagResourcesNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesNewWithOptions($request, $runtime);
    }

    /**
     * @param request - UntagResourcesSystemTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesSystemTagsResponse
     *
     * @param UntagResourcesSystemTagsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagOwnerUid) {
            @$query['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResourcesSystemTags',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesSystemTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UntagResourcesSystemTagsRequest
     *
     * @returns UntagResourcesSystemTagsResponse
     *
     * @param UntagResourcesSystemTagsRequest $request
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesSystemTagsWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateIpWhiteListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIpWhiteListNewResponse
     *
     * @param UpdateIpWhiteListNewRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateIpWhiteListNewResponse
     */
    public function updateIpWhiteListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureCode) {
            @$query['FeatureCode'] = $request->featureCode;
        }

        if (null !== $request->ipWhiteList) {
            @$query['IpWhiteList'] = $request->ipWhiteList;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->realNameInsId) {
            @$query['RealNameInsId'] = $request->realNameInsId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIpWhiteListNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIpWhiteListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateIpWhiteListNewRequest
     *
     * @returns UpdateIpWhiteListNewResponse
     *
     * @param UpdateIpWhiteListNewRequest $request
     *
     * @return UpdateIpWhiteListNewResponse
     */
    public function updateIpWhiteListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpWhiteListNewWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdatePartnerTemplateNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePartnerTemplateNewResponse
     *
     * @param UpdatePartnerTemplateNewRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdatePartnerTemplateNewResponse
     */
    public function updatePartnerTemplateNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePartnerTemplateNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePartnerTemplateNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdatePartnerTemplateNewRequest
     *
     * @returns UpdatePartnerTemplateNewResponse
     *
     * @param UpdatePartnerTemplateNewRequest $request
     *
     * @return UpdatePartnerTemplateNewResponse
     */
    public function updatePartnerTemplateNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePartnerTemplateNewWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateSlsStatusNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSlsStatusNewResponse
     *
     * @param UpdateSlsStatusNewRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSlsStatusNewResponse
     */
    public function updateSlsStatusNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authStatus) {
            @$query['AuthStatus'] = $request->authStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->saveTime) {
            @$query['SaveTime'] = $request->saveTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSlsStatusNew',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSlsStatusNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateSlsStatusNewRequest
     *
     * @returns UpdateSlsStatusNewResponse
     *
     * @param UpdateSlsStatusNewRequest $request
     *
     * @return UpdateSlsStatusNewResponse
     */
    public function updateSlsStatusNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSlsStatusNewWithOptions($request, $runtime);
    }

    /**
     * 上传卡片素材并获取素材id.
     *
     * @param request - UploadCardResRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadCardResResponse
     *
     * @param UploadCardResRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UploadCardResResponse
     */
    public function uploadCardResWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callerParentId) {
            @$query['CallerParentId'] = $request->callerParentId;
        }

        if (null !== $request->callerType) {
            @$query['CallerType'] = $request->callerType;
        }

        if (null !== $request->callerUid) {
            @$query['CallerUid'] = $request->callerUid;
        }

        if (null !== $request->extendInfo) {
            @$query['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->memo) {
            @$query['Memo'] = $request->memo;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
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
            'action' => 'UploadCardRes',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadCardResResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传卡片素材并获取素材id.
     *
     * @param request - UploadCardResRequest
     *
     * @returns UploadCardResResponse
     *
     * @param UploadCardResRequest $request
     *
     * @return UploadCardResResponse
     */
    public function uploadCardRes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCardResWithOptions($request, $runtime);
    }

    /**
     * 上传动参图片素材.
     *
     * @param request - UploadCardResWithDyncParamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadCardResWithDyncParamResponse
     *
     * @param UploadCardResWithDyncParamRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UploadCardResWithDyncParamResponse
     */
    public function uploadCardResWithDyncParamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dynamicParam) {
            @$query['DynamicParam'] = $request->dynamicParam;
        }

        if (null !== $request->expiredTimes) {
            @$query['ExpiredTimes'] = $request->expiredTimes;
        }

        if (null !== $request->fileSize) {
            @$query['FileSize'] = $request->fileSize;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->memo) {
            @$query['Memo'] = $request->memo;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadCardResWithDyncParam',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadCardResWithDyncParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传动参图片素材.
     *
     * @param request - UploadCardResWithDyncParamRequest
     *
     * @returns UploadCardResWithDyncParamResponse
     *
     * @param UploadCardResWithDyncParamRequest $request
     *
     * @return UploadCardResWithDyncParamResponse
     */
    public function uploadCardResWithDyncParam($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCardResWithDyncParamWithOptions($request, $runtime);
    }

    /**
     * @param request - ValidatYunSmsIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidatYunSmsIdResponse
     *
     * @param ValidatYunSmsIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ValidatYunSmsIdResponse
     */
    public function validatYunSmsIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->data) {
            @$query['data'] = $request->data;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidatYunSmsId',
            'version' => '2017-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidatYunSmsIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ValidatYunSmsIdRequest
     *
     * @returns ValidatYunSmsIdResponse
     *
     * @param ValidatYunSmsIdRequest $request
     *
     * @return ValidatYunSmsIdResponse
     */
    public function validatYunSmsId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validatYunSmsIdWithOptions($request, $runtime);
    }
}
