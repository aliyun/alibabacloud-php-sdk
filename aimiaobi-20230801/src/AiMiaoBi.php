<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AddDatasetDocumentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CancelAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CancelAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ClearIntervenesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ClearIntervenesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateGeneratedContentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateTokenResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTopicByTopicRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTopicByTopicResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTopicViewPointByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteCustomTopicViewPointByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDatasetDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDatasetDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDatasetRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDocsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDocsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteDocsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteInterveneRuleRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteInterveneRuleResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteMaterialByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteMaterialByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DocumentExtractionRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DocumentExtractionResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DocumentExtractionShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportAnalysisTagDetailByTaskIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportAnalysisTagDetailByTaskIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportAnalysisTagDetailByTaskIdShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportHotTopicPlanningProposalsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportHotTopicPlanningProposalsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportHotTopicPlanningProposalsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportIntervenesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ExportIntervenesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FeedbackDialogueRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FeedbackDialogueResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FeedbackDialogueShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateFileUrlByKeyRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateFileUrlByKeyResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateUploadConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateUploadConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCategoriesByTaskIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCategoriesByTaskIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomHotTopicBroadcastJobRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomHotTopicBroadcastJobResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomTopicSelectionPerspectiveAnalysisTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDatasetResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDataSourceOrderConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocClusterTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocClusterTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocInfoRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocInfoResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneImportTaskInfoResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneRuleDetailResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneTemplateFileUrlRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneTemplateFileUrlResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetMaterialByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicSelectionPerspectiveAnalysisTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileAsyncRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileAsyncResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ImportInterveneFileResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAnalysisTagDetailByTaskIdShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListAsyncTasksShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListBuildConfigsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListCustomViewPointsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetDocumentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetDocumentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetDocumentsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDocsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDocsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDocsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListFreshViewPointsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListFreshViewPointsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotNewsWithTypeShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotSourcesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotSourcesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotTopicsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotTopicsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotTopicsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneCntRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneCntResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneImportTasksResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneRulesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListMaterialDocumentsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListPlanningProposalRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListPlanningProposalResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListPlanningProposalShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialogueDatasResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialoguesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialoguesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTasksRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTasksResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTasksShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListStyleLearningResultRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListStyleLearningResultResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTimedViewAttitudeRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTimedViewAttitudeResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTopicRecommendEventListRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTopicRecommendEventListResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTopicViewPointRecommendEventListRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListTopicViewPointRecommendEventListResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunAbbreviationContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunAbbreviationContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookIntroductionRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookIntroductionResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookSmartCardRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookSmartCardResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCommentGenerationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCommentGenerationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCommentGenerationShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunContinueContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunContinueContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicAnalysisRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicAnalysisResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicViewPointAnalysisRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicViewPointAnalysisResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocBrainmapRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocBrainmapResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSmartCardRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSmartCardResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSummaryRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocSummaryResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocTranslationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocTranslationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocWashingRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocWashingResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunExpandContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunExpandContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunGenerateQuestionsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunGenerateQuestionsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunHotwordRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunHotwordResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunKeywordsExtractionGenerationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunKeywordsExtractionGenerationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunKeywordsExtractionGenerationShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchSimilarArticlesShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStyleFeatureAnalysisRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStyleFeatureAnalysisResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStyleFeatureAnalysisShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSummaryGenerateRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSummaryGenerateResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTextPolishingRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTextPolishingResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTranslateGenerationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTranslateGenerationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTranslateGenerationShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWriteToneGenerationRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWriteToneGenerationResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWriteToneGenerationShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveMaterialDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveMaterialDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveMaterialDocumentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveStyleLearningResultRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveStyleLearningResultResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveStyleLearningResultShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchNewsShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitAsyncTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitAsyncTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomTopicSelectionPerspectiveAnalysisTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDocClusterTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDocClusterTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDocClusterTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateCustomTextRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateCustomTextResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetDocumentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneratedContentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneratedContentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateGeneratedContentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateMaterialDocumentRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateMaterialDocumentResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateMaterialDocumentShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadBookRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadBookResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadBookShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocResponse;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocShrinkRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ValidateUploadTemplateRequest;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ValidateUploadTemplateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AiMiaoBi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aimiaobi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加文档到数据集.
     *
     * @param tmpReq - AddDatasetDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDatasetDocumentResponse
     *
     * @param AddDatasetDocumentRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return AddDatasetDocumentResponse
     */
    public function addDatasetDocumentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddDatasetDocumentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->document) {
            $request->documentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->document, 'Document', 'json');
        }

        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->documentShrink) {
            @$body['Document'] = $request->documentShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDatasetDocument',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加文档到数据集.
     *
     * @param request - AddDatasetDocumentRequest
     *
     * @returns AddDatasetDocumentResponse
     *
     * @param AddDatasetDocumentRequest $request
     *
     * @return AddDatasetDocumentResponse
     */
    public function addDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * 取消异步任务
     *
     * @param request - CancelAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAsyncTaskResponse
     *
     * @param CancelAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelAsyncTaskResponse
     */
    public function cancelAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelAsyncTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消异步任务
     *
     * @param request - CancelAsyncTaskRequest
     *
     * @returns CancelAsyncTaskResponse
     *
     * @param CancelAsyncTaskRequest $request
     *
     * @return CancelAsyncTaskResponse
     */
    public function cancelAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * 清除所有干预内容.
     *
     * @param request - ClearIntervenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearIntervenesResponse
     *
     * @param ClearIntervenesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ClearIntervenesResponse
     */
    public function clearIntervenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClearIntervenes',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClearIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清除所有干预内容.
     *
     * @param request - ClearIntervenesRequest
     *
     * @returns ClearIntervenesResponse
     *
     * @param ClearIntervenesRequest $request
     *
     * @return ClearIntervenesResponse
     */
    public function clearIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearIntervenesWithOptions($request, $runtime);
    }

    /**
     * 数据集管理-创建.
     *
     * @param tmpReq - CreateDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDatasetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetConfig) {
            $request->datasetConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }

        if (null !== $tmpReq->documentHandleConfig) {
            $request->documentHandleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documentHandleConfig, 'DocumentHandleConfig', 'json');
        }

        $body = [];
        if (null !== $request->datasetConfigShrink) {
            @$body['DatasetConfig'] = $request->datasetConfigShrink;
        }

        if (null !== $request->datasetDescription) {
            @$body['DatasetDescription'] = $request->datasetDescription;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->datasetType) {
            @$body['DatasetType'] = $request->datasetType;
        }

        if (null !== $request->documentHandleConfigShrink) {
            @$body['DocumentHandleConfig'] = $request->documentHandleConfigShrink;
        }

        if (null !== $request->invokeType) {
            @$body['InvokeType'] = $request->invokeType;
        }

        if (null !== $request->searchDatasetEnable) {
            @$body['SearchDatasetEnable'] = $request->searchDatasetEnable;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDataset',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据集管理-创建.
     *
     * @param request - CreateDatasetRequest
     *
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * 文档管理-创建.
     *
     * @param tmpReq - CreateGeneratedContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGeneratedContentResponse
     *
     * @param CreateGeneratedContentRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateGeneratedContentResponse
     */
    public function createGeneratedContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateGeneratedContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keywords) {
            $request->keywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentDomain) {
            @$body['ContentDomain'] = $request->contentDomain;
        }

        if (null !== $request->contentText) {
            @$body['ContentText'] = $request->contentText;
        }

        if (null !== $request->keywordsShrink) {
            @$body['Keywords'] = $request->keywordsShrink;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGeneratedContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档管理-创建.
     *
     * @param request - CreateGeneratedContentRequest
     *
     * @returns CreateGeneratedContentResponse
     *
     * @param CreateGeneratedContentRequest $request
     *
     * @return CreateGeneratedContentResponse
     */
    public function createGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * 获取授权token.
     *
     * @param request - CreateTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTokenResponse
     *
     * @param CreateTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTokenResponse
     */
    public function createTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateToken',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取授权token.
     *
     * @param request - CreateTokenRequest
     *
     * @returns CreateTokenResponse
     *
     * @param CreateTokenRequest $request
     *
     * @return CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * 删除自定义文本.
     *
     * @param request - DeleteCustomTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomTextResponse
     *
     * @param DeleteCustomTextRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCustomTextResponse
     */
    public function deleteCustomTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomText',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除自定义文本.
     *
     * @param request - DeleteCustomTextRequest
     *
     * @returns DeleteCustomTextResponse
     *
     * @param DeleteCustomTextRequest $request
     *
     * @return DeleteCustomTextResponse
     */
    public function deleteCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTextWithOptions($request, $runtime);
    }

    /**
     * 根据主题删除自定义主题事件.
     *
     * @param request - DeleteCustomTopicByTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomTopicByTopicResponse
     *
     * @param DeleteCustomTopicByTopicRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCustomTopicByTopicResponse
     */
    public function deleteCustomTopicByTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomTopicByTopic',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomTopicByTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据主题删除自定义主题事件.
     *
     * @param request - DeleteCustomTopicByTopicRequest
     *
     * @returns DeleteCustomTopicByTopicResponse
     *
     * @param DeleteCustomTopicByTopicRequest $request
     *
     * @return DeleteCustomTopicByTopicResponse
     */
    public function deleteCustomTopicByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTopicByTopicWithOptions($request, $runtime);
    }

    /**
     * 根据自定义观点ID删除自定义观点.
     *
     * @param request - DeleteCustomTopicViewPointByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomTopicViewPointByIdResponse
     *
     * @param DeleteCustomTopicViewPointByIdRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteCustomTopicViewPointByIdResponse
     */
    public function deleteCustomTopicViewPointByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->customViewPointId) {
            @$body['CustomViewPointId'] = $request->customViewPointId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomTopicViewPointById',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomTopicViewPointByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据自定义观点ID删除自定义观点.
     *
     * @param request - DeleteCustomTopicViewPointByIdRequest
     *
     * @returns DeleteCustomTopicViewPointByIdResponse
     *
     * @param DeleteCustomTopicViewPointByIdRequest $request
     *
     * @return DeleteCustomTopicViewPointByIdResponse
     */
    public function deleteCustomTopicViewPointById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTopicViewPointByIdWithOptions($request, $runtime);
    }

    /**
     * 数据集管理-删除.
     *
     * @param request - DeleteDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetResponse
     *
     * @param DeleteDatasetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataset',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据集管理-删除.
     *
     * @param request - DeleteDatasetRequest
     *
     * @returns DeleteDatasetResponse
     *
     * @param DeleteDatasetRequest $request
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * 删除数据集文档.
     *
     * @param request - DeleteDatasetDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDatasetDocumentResponse
     *
     * @param DeleteDatasetDocumentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDatasetDocumentResponse
     */
    public function deleteDatasetDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->docUuid) {
            @$body['DocUuid'] = $request->docUuid;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDatasetDocument',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据集文档.
     *
     * @param request - DeleteDatasetDocumentRequest
     *
     * @returns DeleteDatasetDocumentResponse
     *
     * @param DeleteDatasetDocumentRequest $request
     *
     * @return DeleteDatasetDocumentResponse
     */
    public function deleteDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * 妙读删除多个文档.
     *
     * @param tmpReq - DeleteDocsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDocsResponse
     *
     * @param DeleteDocsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteDocsResponse
     */
    public function deleteDocsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteDocsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docIds) {
            $request->docIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docIds, 'DocIds', 'json');
        }

        $body = [];
        if (null !== $request->docIdsShrink) {
            @$body['DocIds'] = $request->docIdsShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDocs',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDocsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读删除多个文档.
     *
     * @param request - DeleteDocsRequest
     *
     * @returns DeleteDocsResponse
     *
     * @param DeleteDocsRequest $request
     *
     * @return DeleteDocsResponse
     */
    public function deleteDocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocsWithOptions($request, $runtime);
    }

    /**
     * 文档管理-删除。
     *
     * @param request - DeleteGeneratedContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGeneratedContentResponse
     *
     * @param DeleteGeneratedContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteGeneratedContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档管理-删除。
     *
     * @param request - DeleteGeneratedContentRequest
     *
     * @returns DeleteGeneratedContentResponse
     *
     * @param DeleteGeneratedContentRequest $request
     *
     * @return DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * 删除干预规则.
     *
     * @param request - DeleteInterveneRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInterveneRuleResponse
     *
     * @param DeleteInterveneRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteInterveneRuleResponse
     */
    public function deleteInterveneRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInterveneRule',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInterveneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除干预规则.
     *
     * @param request - DeleteInterveneRuleRequest
     *
     * @returns DeleteInterveneRuleResponse
     *
     * @param DeleteInterveneRuleRequest $request
     *
     * @return DeleteInterveneRuleResponse
     */
    public function deleteInterveneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInterveneRuleWithOptions($request, $runtime);
    }

    /**
     * 根据ID删除素材.
     *
     * @param request - DeleteMaterialByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMaterialByIdResponse
     *
     * @param DeleteMaterialByIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMaterialByIdResponse
     */
    public function deleteMaterialByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMaterialById',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMaterialByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据ID删除素材.
     *
     * @param request - DeleteMaterialByIdRequest
     *
     * @returns DeleteMaterialByIdResponse
     *
     * @param DeleteMaterialByIdRequest $request
     *
     * @return DeleteMaterialByIdResponse
     */
    public function deleteMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * 从链接中提取文档内容.
     *
     * @param tmpReq - DocumentExtractionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocumentExtractionResponse
     *
     * @param DocumentExtractionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DocumentExtractionResponse
     */
    public function documentExtractionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DocumentExtractionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->urls) {
            $request->urlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->urls, 'Urls', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->urlsShrink) {
            @$body['Urls'] = $request->urlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocumentExtraction',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocumentExtractionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从链接中提取文档内容.
     *
     * @param request - DocumentExtractionRequest
     *
     * @returns DocumentExtractionResponse
     *
     * @param DocumentExtractionRequest $request
     *
     * @return DocumentExtractionResponse
     */
    public function documentExtraction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->documentExtractionWithOptions($request, $runtime);
    }

    /**
     * 导出企业VOC分析任务明细列表.
     *
     * @param tmpReq - ExportAnalysisTagDetailByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportAnalysisTagDetailByTaskIdResponse
     *
     * @param ExportAnalysisTagDetailByTaskIdRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskIdWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportAnalysisTagDetailByTaskIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categories) {
            $request->categoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }

        $body = [];
        if (null !== $request->categoriesShrink) {
            @$body['Categories'] = $request->categoriesShrink;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportAnalysisTagDetailByTaskId',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出企业VOC分析任务明细列表.
     *
     * @param request - ExportAnalysisTagDetailByTaskIdRequest
     *
     * @returns ExportAnalysisTagDetailByTaskIdResponse
     *
     * @param ExportAnalysisTagDetailByTaskIdRequest $request
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportAnalysisTagDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * 文档管理-导出。
     *
     * @param request - ExportGeneratedContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportGeneratedContentResponse
     *
     * @param ExportGeneratedContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExportGeneratedContentResponse
     */
    public function exportGeneratedContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportGeneratedContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档管理-导出。
     *
     * @param request - ExportGeneratedContentRequest
     *
     * @returns ExportGeneratedContentResponse
     *
     * @param ExportGeneratedContentRequest $request
     *
     * @return ExportGeneratedContentResponse
     */
    public function exportGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * 导出选题策划文档，响应为一个可公开访问的URL。一小时后失效.
     *
     * @param tmpReq - ExportHotTopicPlanningProposalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportHotTopicPlanningProposalsResponse
     *
     * @param ExportHotTopicPlanningProposalsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ExportHotTopicPlanningProposalsResponse
     */
    public function exportHotTopicPlanningProposalsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportHotTopicPlanningProposalsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customViewPointIds) {
            $request->customViewPointIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customViewPointIds, 'CustomViewPointIds', 'json');
        }

        if (null !== $tmpReq->titles) {
            $request->titlesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->titles, 'Titles', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->customViewPointIdsShrink) {
            @$body['CustomViewPointIds'] = $request->customViewPointIdsShrink;
        }

        if (null !== $request->exportType) {
            @$body['ExportType'] = $request->exportType;
        }

        if (null !== $request->titlesShrink) {
            @$body['Titles'] = $request->titlesShrink;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        if (null !== $request->viewPointType) {
            @$body['ViewPointType'] = $request->viewPointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportHotTopicPlanningProposals',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportHotTopicPlanningProposalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出选题策划文档，响应为一个可公开访问的URL。一小时后失效.
     *
     * @param request - ExportHotTopicPlanningProposalsRequest
     *
     * @returns ExportHotTopicPlanningProposalsResponse
     *
     * @param ExportHotTopicPlanningProposalsRequest $request
     *
     * @return ExportHotTopicPlanningProposalsResponse
     */
    public function exportHotTopicPlanningProposals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportHotTopicPlanningProposalsWithOptions($request, $runtime);
    }

    /**
     * 导出所有干预内容.
     *
     * @param request - ExportIntervenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportIntervenesResponse
     *
     * @param ExportIntervenesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExportIntervenesResponse
     */
    public function exportIntervenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportIntervenes',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出所有干预内容.
     *
     * @param request - ExportIntervenesRequest
     *
     * @returns ExportIntervenesResponse
     *
     * @param ExportIntervenesRequest $request
     *
     * @return ExportIntervenesResponse
     */
    public function exportIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportIntervenesWithOptions($request, $runtime);
    }

    /**
     * 反馈某次生成的结果.
     *
     * @param tmpReq - FeedbackDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FeedbackDialogueResponse
     *
     * @param FeedbackDialogueRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return FeedbackDialogueResponse
     */
    public function feedbackDialogueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new FeedbackDialogueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ratingTags) {
            $request->ratingTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ratingTags, 'RatingTags', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->customerResponse) {
            @$body['CustomerResponse'] = $request->customerResponse;
        }

        if (null !== $request->goodText) {
            @$body['GoodText'] = $request->goodText;
        }

        if (null !== $request->modifiedResponse) {
            @$body['ModifiedResponse'] = $request->modifiedResponse;
        }

        if (null !== $request->rating) {
            @$body['Rating'] = $request->rating;
        }

        if (null !== $request->ratingTagsShrink) {
            @$body['RatingTags'] = $request->ratingTagsShrink;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FeedbackDialogue',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FeedbackDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 反馈某次生成的结果.
     *
     * @param request - FeedbackDialogueRequest
     *
     * @returns FeedbackDialogueResponse
     *
     * @param FeedbackDialogueRequest $request
     *
     * @return FeedbackDialogueResponse
     */
    public function feedbackDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackDialogueWithOptions($request, $runtime);
    }

    /**
     * 获取图片任务执行结果.
     *
     * @param tmpReq - FetchImageTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FetchImageTaskResponse
     *
     * @param FetchImageTaskRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return FetchImageTaskResponse
     */
    public function fetchImageTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new FetchImageTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskIdList) {
            $request->taskIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'TaskIdList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->articleTaskId) {
            @$body['ArticleTaskId'] = $request->articleTaskId;
        }

        if (null !== $request->taskIdListShrink) {
            @$body['TaskIdList'] = $request->taskIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FetchImageTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FetchImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取图片任务执行结果.
     *
     * @param request - FetchImageTaskRequest
     *
     * @returns FetchImageTaskResponse
     *
     * @param FetchImageTaskRequest $request
     *
     * @return FetchImageTaskResponse
     */
    public function fetchImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchImageTaskWithOptions($request, $runtime);
    }

    /**
     * 生成临时可访问的公开url.
     *
     * @param request - GenerateFileUrlByKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateFileUrlByKeyResponse
     *
     * @param GenerateFileUrlByKeyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateFileUrlByKey',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateFileUrlByKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成临时可访问的公开url.
     *
     * @param request - GenerateFileUrlByKeyRequest
     *
     * @returns GenerateFileUrlByKeyResponse
     *
     * @param GenerateFileUrlByKeyRequest $request
     *
     * @return GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileUrlByKeyWithOptions($request, $runtime);
    }

    /**
     * 智能配图，图片生成任务
     *
     * @param tmpReq - GenerateImageTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateImageTaskResponse
     *
     * @param GenerateImageTaskRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateImageTaskResponse
     */
    public function generateImageTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateImageTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->paragraphList) {
            $request->paragraphListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->paragraphList, 'ParagraphList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->articleTaskId) {
            @$body['ArticleTaskId'] = $request->articleTaskId;
        }

        if (null !== $request->paragraphListShrink) {
            @$body['ParagraphList'] = $request->paragraphListShrink;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->style) {
            @$body['Style'] = $request->style;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateImageTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 智能配图，图片生成任务
     *
     * @param request - GenerateImageTaskRequest
     *
     * @returns GenerateImageTaskResponse
     *
     * @param GenerateImageTaskRequest $request
     *
     * @return GenerateImageTaskResponse
     */
    public function generateImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateImageTaskWithOptions($request, $runtime);
    }

    /**
     * 生成上传配置.
     *
     * @param request - GenerateUploadConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUploadConfigResponse
     *
     * @param GenerateUploadConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GenerateUploadConfigResponse
     */
    public function generateUploadConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->parentDir) {
            @$body['ParentDir'] = $request->parentDir;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateUploadConfig',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUploadConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成上传配置.
     *
     * @param request - GenerateUploadConfigRequest
     *
     * @returns GenerateUploadConfigResponse
     *
     * @param GenerateUploadConfigRequest $request
     *
     * @return GenerateUploadConfigResponse
     */
    public function generateUploadConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadConfigWithOptions($request, $runtime);
    }

    /**
     * 视角生成.
     *
     * @param tmpReq - GenerateViewPointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateViewPointResponse
     *
     * @param GenerateViewPointRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GenerateViewPointResponse
     */
    public function generateViewPointWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateViewPointShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateViewPoint',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateViewPointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视角生成.
     *
     * @param request - GenerateViewPointRequest
     *
     * @returns GenerateViewPointResponse
     *
     * @param GenerateViewPointRequest $request
     *
     * @return GenerateViewPointResponse
     */
    public function generateViewPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateViewPointWithOptions($request, $runtime);
    }

    /**
     * 获取某次标签挖掘结果分类.
     *
     * @param request - GetCategoriesByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCategoriesByTaskIdResponse
     *
     * @param GetCategoriesByTaskIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCategoriesByTaskIdResponse
     */
    public function getCategoriesByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCategoriesByTaskId',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCategoriesByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取某次标签挖掘结果分类.
     *
     * @param request - GetCategoriesByTaskIdRequest
     *
     * @returns GetCategoriesByTaskIdResponse
     *
     * @param GetCategoriesByTaskIdRequest $request
     *
     * @return GetCategoriesByTaskIdResponse
     */
    public function getCategoriesByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesByTaskIdWithOptions($request, $runtime);
    }

    /**
     * 获取自定义播报单任务结果.
     *
     * @param request - GetCustomHotTopicBroadcastJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomHotTopicBroadcastJobResponse
     *
     * @param GetCustomHotTopicBroadcastJobRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetCustomHotTopicBroadcastJobResponse
     */
    public function getCustomHotTopicBroadcastJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCustomHotTopicBroadcastJob',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomHotTopicBroadcastJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义播报单任务结果.
     *
     * @param request - GetCustomHotTopicBroadcastJobRequest
     *
     * @returns GetCustomHotTopicBroadcastJobResponse
     *
     * @param GetCustomHotTopicBroadcastJobRequest $request
     *
     * @return GetCustomHotTopicBroadcastJobResponse
     */
    public function getCustomHotTopicBroadcastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomHotTopicBroadcastJobWithOptions($request, $runtime);
    }

    /**
     * 获取自定义文本.
     *
     * @param request - GetCustomTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomTextResponse
     *
     * @param GetCustomTextRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCustomTextResponse
     */
    public function getCustomTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCustomText',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义文本.
     *
     * @param request - GetCustomTextRequest
     *
     * @returns GetCustomTextResponse
     *
     * @param GetCustomTextRequest $request
     *
     * @return GetCustomTextResponse
     */
    public function getCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTextWithOptions($request, $runtime);
    }

    /**
     * 获取自定义选题视角分析任务结果.
     *
     * @param request - GetCustomTopicSelectionPerspectiveAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param GetCustomTopicSelectionPerspectiveAnalysisTaskRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCustomTopicSelectionPerspectiveAnalysisTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义选题视角分析任务结果.
     *
     * @param request - GetCustomTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @returns GetCustomTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param GetCustomTopicSelectionPerspectiveAnalysisTaskRequest $request
     *
     * @return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getCustomTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * 获取系统数据源配置和个人配置.
     *
     * @param request - GetDataSourceOrderConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDataSourceOrderConfigResponse
     *
     * @param GetDataSourceOrderConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->generateTechnology) {
            @$body['GenerateTechnology'] = $request->generateTechnology;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDataSourceOrderConfig',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDataSourceOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取系统数据源配置和个人配置.
     *
     * @param request - GetDataSourceOrderConfigRequest
     *
     * @returns GetDataSourceOrderConfigResponse
     *
     * @param GetDataSourceOrderConfigRequest $request
     *
     * @return GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * 数据集管理-详情.
     *
     * @param request - GetDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetResponse
     *
     * @param GetDatasetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDataset',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据集管理-详情.
     *
     * @param request - GetDatasetRequest
     *
     * @returns GetDatasetResponse
     *
     * @param GetDatasetRequest $request
     *
     * @return GetDatasetResponse
     */
    public function getDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetWithOptions($request, $runtime);
    }

    /**
     * 获取数据集文档.
     *
     * @param request - GetDatasetDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatasetDocumentResponse
     *
     * @param GetDatasetDocumentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDatasetDocumentResponse
     */
    public function getDatasetDocumentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->docUuid) {
            @$body['DocUuid'] = $request->docUuid;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDatasetDocument',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集文档.
     *
     * @param request - GetDatasetDocumentRequest
     *
     * @returns GetDatasetDocumentResponse
     *
     * @param GetDatasetDocumentRequest $request
     *
     * @return GetDatasetDocumentResponse
     */
    public function getDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * 获取文档聚合任务结果.
     *
     * @param request - GetDocClusterTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocClusterTaskResponse
     *
     * @param GetDocClusterTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetDocClusterTaskResponse
     */
    public function getDocClusterTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocClusterTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocClusterTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文档聚合任务结果.
     *
     * @param request - GetDocClusterTaskRequest
     *
     * @returns GetDocClusterTaskResponse
     *
     * @param GetDocClusterTaskRequest $request
     *
     * @return GetDocClusterTaskResponse
     */
    public function getDocClusterTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocClusterTaskWithOptions($request, $runtime);
    }

    /**
     * 妙读获取文档信息.
     *
     * @param request - GetDocInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocInfoResponse
     *
     * @param GetDocInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetDocInfoResponse
     */
    public function getDocInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocInfo',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读获取文档信息.
     *
     * @param request - GetDocInfoRequest
     *
     * @returns GetDocInfoResponse
     *
     * @param GetDocInfoRequest $request
     *
     * @return GetDocInfoResponse
     */
    public function getDocInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocInfoWithOptions($request, $runtime);
    }

    /**
     * 获取企业VOC分析任务结果.
     *
     * @param request - GetEnterpriseVocAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnterpriseVocAnalysisTaskResponse
     *
     * @param GetEnterpriseVocAnalysisTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEnterpriseVocAnalysisTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取企业VOC分析任务结果.
     *
     * @param request - GetEnterpriseVocAnalysisTaskRequest
     *
     * @returns GetEnterpriseVocAnalysisTaskResponse
     *
     * @param GetEnterpriseVocAnalysisTaskRequest $request
     *
     * @return GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseVocAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * 文档管理-查询详情。
     *
     * @param request - GetGeneratedContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGeneratedContentResponse
     *
     * @param GetGeneratedContentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetGeneratedContentResponse
     */
    public function getGeneratedContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGeneratedContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档管理-查询详情。
     *
     * @param request - GetGeneratedContentRequest
     *
     * @returns GetGeneratedContentResponse
     *
     * @param GetGeneratedContentRequest $request
     *
     * @return GetGeneratedContentResponse
     */
    public function getGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * 查询新闻播报单.
     *
     * @param tmpReq - GetHotTopicBroadcastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotTopicBroadcastResponse
     *
     * @param GetHotTopicBroadcastRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetHotTopicBroadcastResponse
     */
    public function getHotTopicBroadcastWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetHotTopicBroadcastShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->locations) {
            $request->locationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->locations, 'Locations', 'json');
        }

        if (null !== $tmpReq->stepForCustomSummaryStyleConfig) {
            $request->stepForCustomSummaryStyleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->stepForCustomSummaryStyleConfig, 'StepForCustomSummaryStyleConfig', 'json');
        }

        if (null !== $tmpReq->stepForNewsBroadcastContentConfig) {
            $request->stepForNewsBroadcastContentConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->stepForNewsBroadcastContentConfig, 'StepForNewsBroadcastContentConfig', 'json');
        }

        if (null !== $tmpReq->topics) {
            $request->topicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }

        $body = [];
        if (null !== $request->calcTotalToken) {
            @$body['CalcTotalToken'] = $request->calcTotalToken;
        }

        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->hotTopicVersion) {
            @$body['HotTopicVersion'] = $request->hotTopicVersion;
        }

        if (null !== $request->locationQuery) {
            @$body['LocationQuery'] = $request->locationQuery;
        }

        if (null !== $request->locationsShrink) {
            @$body['Locations'] = $request->locationsShrink;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->stepForCustomSummaryStyleConfigShrink) {
            @$body['StepForCustomSummaryStyleConfig'] = $request->stepForCustomSummaryStyleConfigShrink;
        }

        if (null !== $request->stepForNewsBroadcastContentConfigShrink) {
            @$body['StepForNewsBroadcastContentConfig'] = $request->stepForNewsBroadcastContentConfigShrink;
        }

        if (null !== $request->topicsShrink) {
            @$body['Topics'] = $request->topicsShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotTopicBroadcast',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotTopicBroadcastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询新闻播报单.
     *
     * @param request - GetHotTopicBroadcastRequest
     *
     * @returns GetHotTopicBroadcastResponse
     *
     * @param GetHotTopicBroadcastRequest $request
     *
     * @return GetHotTopicBroadcastResponse
     */
    public function getHotTopicBroadcast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotTopicBroadcastWithOptions($request, $runtime);
    }

    /**
     * 获得干预全局回复.
     *
     * @param request - GetInterveneGlobalReplyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInterveneGlobalReplyResponse
     *
     * @param GetInterveneGlobalReplyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetInterveneGlobalReplyResponse
     */
    public function getInterveneGlobalReplyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInterveneGlobalReply',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInterveneGlobalReplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得干预全局回复.
     *
     * @param request - GetInterveneGlobalReplyRequest
     *
     * @returns GetInterveneGlobalReplyResponse
     *
     * @param GetInterveneGlobalReplyRequest $request
     *
     * @return GetInterveneGlobalReplyResponse
     */
    public function getInterveneGlobalReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneGlobalReplyWithOptions($request, $runtime);
    }

    /**
     * 获得导入任务信息.
     *
     * @param request - GetInterveneImportTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInterveneImportTaskInfoResponse
     *
     * @param GetInterveneImportTaskInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetInterveneImportTaskInfoResponse
     */
    public function getInterveneImportTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInterveneImportTaskInfo',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInterveneImportTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得导入任务信息.
     *
     * @param request - GetInterveneImportTaskInfoRequest
     *
     * @returns GetInterveneImportTaskInfoResponse
     *
     * @param GetInterveneImportTaskInfoRequest $request
     *
     * @return GetInterveneImportTaskInfoResponse
     */
    public function getInterveneImportTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneImportTaskInfoWithOptions($request, $runtime);
    }

    /**
     * 获得干预项规则详情.
     *
     * @param request - GetInterveneRuleDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInterveneRuleDetailResponse
     *
     * @param GetInterveneRuleDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInterveneRuleDetailResponse
     */
    public function getInterveneRuleDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInterveneRuleDetail',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInterveneRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得干预项规则详情.
     *
     * @param request - GetInterveneRuleDetailRequest
     *
     * @returns GetInterveneRuleDetailResponse
     *
     * @param GetInterveneRuleDetailRequest $request
     *
     * @return GetInterveneRuleDetailResponse
     */
    public function getInterveneRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneRuleDetailWithOptions($request, $runtime);
    }

    /**
     * 获得干预导入模版文件下载地址
     *
     * @param request - GetInterveneTemplateFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInterveneTemplateFileUrlResponse
     *
     * @param GetInterveneTemplateFileUrlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInterveneTemplateFileUrlResponse
     */
    public function getInterveneTemplateFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInterveneTemplateFileUrl',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInterveneTemplateFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得干预导入模版文件下载地址
     *
     * @param request - GetInterveneTemplateFileUrlRequest
     *
     * @returns GetInterveneTemplateFileUrlResponse
     *
     * @param GetInterveneTemplateFileUrlRequest $request
     *
     * @return GetInterveneTemplateFileUrlResponse
     */
    public function getInterveneTemplateFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneTemplateFileUrlWithOptions($request, $runtime);
    }

    /**
     * 根据ID获取素材内容.
     *
     * @param request - GetMaterialByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMaterialByIdResponse
     *
     * @param GetMaterialByIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMaterialByIdResponse
     */
    public function getMaterialByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMaterialById',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMaterialByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据ID获取素材内容.
     *
     * @param request - GetMaterialByIdRequest
     *
     * @returns GetMaterialByIdResponse
     *
     * @param GetMaterialByIdRequest $request
     *
     * @return GetMaterialByIdResponse
     */
    public function getMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * 获取当前用户的配置.
     *
     * @param request - GetPropertiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPropertiesResponse
     *
     * @param GetPropertiesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPropertiesResponse
     */
    public function getPropertiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProperties',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取当前用户的配置.
     *
     * @param request - GetPropertiesRequest
     *
     * @returns GetPropertiesResponse
     *
     * @param GetPropertiesRequest $request
     *
     * @return GetPropertiesResponse
     */
    public function getProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPropertiesWithOptions($request, $runtime);
    }

    /**
     * 查询一键成片剪辑任务
     *
     * @param request - GetSmartClipTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSmartClipTaskResponse
     *
     * @param GetSmartClipTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSmartClipTaskResponse
     */
    public function getSmartClipTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSmartClipTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSmartClipTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一键成片剪辑任务
     *
     * @param request - GetSmartClipTaskRequest
     *
     * @returns GetSmartClipTaskResponse
     *
     * @param GetSmartClipTaskRequest $request
     *
     * @return GetSmartClipTaskResponse
     */
    public function getSmartClipTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartClipTaskWithOptions($request, $runtime);
    }

    /**
     * 根据ID获取热点事件信息.
     *
     * @param request - GetTopicByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicByIdResponse
     *
     * @param GetTopicByIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTopicByIdResponse
     */
    public function getTopicByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTopicById',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据ID获取热点事件信息.
     *
     * @param request - GetTopicByIdRequest
     *
     * @returns GetTopicByIdResponse
     *
     * @param GetTopicByIdRequest $request
     *
     * @return GetTopicByIdResponse
     */
    public function getTopicById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicByIdWithOptions($request, $runtime);
    }

    /**
     * 获取选题视角分析任务结果.
     *
     * @param request - GetTopicSelectionPerspectiveAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param GetTopicSelectionPerspectiveAnalysisTaskRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTopicSelectionPerspectiveAnalysisTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取选题视角分析任务结果.
     *
     * @param request - GetTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @returns GetTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param GetTopicSelectionPerspectiveAnalysisTaskRequest $request
     *
     * @return GetTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * 导入干预文件.
     *
     * @param request - ImportInterveneFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportInterveneFileResponse
     *
     * @param ImportInterveneFileRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ImportInterveneFileResponse
     */
    public function importInterveneFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->docName) {
            @$body['DocName'] = $request->docName;
        }

        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportInterveneFile',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportInterveneFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导入干预文件.
     *
     * @param request - ImportInterveneFileRequest
     *
     * @returns ImportInterveneFileResponse
     *
     * @param ImportInterveneFileRequest $request
     *
     * @return ImportInterveneFileResponse
     */
    public function importInterveneFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importInterveneFileWithOptions($request, $runtime);
    }

    /**
     * 异步导入干预文件.
     *
     * @param request - ImportInterveneFileAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportInterveneFileAsyncResponse
     *
     * @param ImportInterveneFileAsyncRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportInterveneFileAsyncResponse
     */
    public function importInterveneFileAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->docName) {
            @$body['DocName'] = $request->docName;
        }

        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportInterveneFileAsync',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportInterveneFileAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 异步导入干预文件.
     *
     * @param request - ImportInterveneFileAsyncRequest
     *
     * @returns ImportInterveneFileAsyncResponse
     *
     * @param ImportInterveneFileAsyncRequest $request
     *
     * @return ImportInterveneFileAsyncResponse
     */
    public function importInterveneFileAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importInterveneFileAsyncWithOptions($request, $runtime);
    }

    /**
     * 设置干预全局回复.
     *
     * @param tmpReq - InsertInterveneGlobalReplyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertInterveneGlobalReplyResponse
     *
     * @param InsertInterveneGlobalReplyRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return InsertInterveneGlobalReplyResponse
     */
    public function insertInterveneGlobalReplyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InsertInterveneGlobalReplyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->replyMessagList) {
            $request->replyMessagListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->replyMessagList, 'ReplyMessagList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->replyMessagListShrink) {
            @$body['ReplyMessagList'] = $request->replyMessagListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsertInterveneGlobalReply',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsertInterveneGlobalReplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置干预全局回复.
     *
     * @param request - InsertInterveneGlobalReplyRequest
     *
     * @returns InsertInterveneGlobalReplyResponse
     *
     * @param InsertInterveneGlobalReplyRequest $request
     *
     * @return InsertInterveneGlobalReplyResponse
     */
    public function insertInterveneGlobalReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInterveneGlobalReplyWithOptions($request, $runtime);
    }

    /**
     * 插入干预规则.
     *
     * @param tmpReq - InsertInterveneRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertInterveneRuleResponse
     *
     * @param InsertInterveneRuleRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return InsertInterveneRuleResponse
     */
    public function insertInterveneRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InsertInterveneRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interveneRuleConfig) {
            $request->interveneRuleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interveneRuleConfig, 'InterveneRuleConfig', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->interveneRuleConfigShrink) {
            @$body['InterveneRuleConfig'] = $request->interveneRuleConfigShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsertInterveneRule',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsertInterveneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 插入干预规则.
     *
     * @param request - InsertInterveneRuleRequest
     *
     * @returns InsertInterveneRuleResponse
     *
     * @param InsertInterveneRuleRequest $request
     *
     * @return InsertInterveneRuleResponse
     */
    public function insertInterveneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInterveneRuleWithOptions($request, $runtime);
    }

    /**
     * 分页获取企业VOC分析任务明细列表.
     *
     * @param tmpReq - ListAnalysisTagDetailByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnalysisTagDetailByTaskIdResponse
     *
     * @param ListAnalysisTagDetailByTaskIdRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskIdWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAnalysisTagDetailByTaskIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categories) {
            $request->categoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }

        $body = [];
        if (null !== $request->categoriesShrink) {
            @$body['Categories'] = $request->categoriesShrink;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAnalysisTagDetailByTaskId',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页获取企业VOC分析任务明细列表.
     *
     * @param request - ListAnalysisTagDetailByTaskIdRequest
     *
     * @returns ListAnalysisTagDetailByTaskIdResponse
     *
     * @param ListAnalysisTagDetailByTaskIdRequest $request
     *
     * @return ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnalysisTagDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * 查询任务列表.
     *
     * @param tmpReq - ListAsyncTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAsyncTasksResponse
     *
     * @param ListAsyncTasksRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAsyncTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskStatusList) {
            $request->taskStatusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskStatusList, 'TaskStatusList', 'json');
        }

        if (null !== $tmpReq->taskTypeList) {
            $request->taskTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskTypeList, 'TaskTypeList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->createTimeEnd) {
            @$body['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$body['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->taskCode) {
            @$body['TaskCode'] = $request->taskCode;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->taskStatusListShrink) {
            @$body['TaskStatusList'] = $request->taskStatusListShrink;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->taskTypeListShrink) {
            @$body['TaskTypeList'] = $request->taskTypeListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAsyncTasks',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务列表.
     *
     * @param request - ListAsyncTasksRequest
     *
     * @returns ListAsyncTasksResponse
     *
     * @param ListAsyncTasksRequest $request
     *
     * @return ListAsyncTasksResponse
     */
    public function listAsyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsyncTasksWithOptions($request, $runtime);
    }

    /**
     * 获取系统自定义预设.
     *
     * @param request - ListBuildConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBuildConfigsResponse
     *
     * @param ListBuildConfigsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListBuildConfigsResponse
     */
    public function listBuildConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBuildConfigs',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBuildConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取系统自定义预设.
     *
     * @param request - ListBuildConfigsRequest
     *
     * @returns ListBuildConfigsResponse
     *
     * @param ListBuildConfigsRequest $request
     *
     * @return ListBuildConfigsResponse
     */
    public function listBuildConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBuildConfigsWithOptions($request, $runtime);
    }

    /**
     * 自定义文本列表.
     *
     * @param request - ListCustomTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomTextResponse
     *
     * @param ListCustomTextRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCustomTextResponse
     */
    public function listCustomTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCustomText',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自定义文本列表.
     *
     * @param request - ListCustomTextRequest
     *
     * @returns ListCustomTextResponse
     *
     * @param ListCustomTextRequest $request
     *
     * @return ListCustomTextResponse
     */
    public function listCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTextWithOptions($request, $runtime);
    }

    /**
     * 自定义视角列表.
     *
     * @param tmpReq - ListCustomViewPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomViewPointsResponse
     *
     * @param ListCustomViewPointsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListCustomViewPointsResponse
     */
    public function listCustomViewPointsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCustomViewPointsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attitudes) {
            $request->attitudesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attitudes, 'Attitudes', 'json');
        }

        if (null !== $tmpReq->customViewPointIds) {
            $request->customViewPointIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customViewPointIds, 'CustomViewPointIds', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->attitude) {
            @$body['Attitude'] = $request->attitude;
        }

        if (null !== $request->attitudesShrink) {
            @$body['Attitudes'] = $request->attitudesShrink;
        }

        if (null !== $request->customViewPointId) {
            @$body['CustomViewPointId'] = $request->customViewPointId;
        }

        if (null !== $request->customViewPointIdsShrink) {
            @$body['CustomViewPointIds'] = $request->customViewPointIdsShrink;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicId) {
            @$body['TopicId'] = $request->topicId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCustomViewPoints',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomViewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自定义视角列表.
     *
     * @param request - ListCustomViewPointsRequest
     *
     * @returns ListCustomViewPointsResponse
     *
     * @param ListCustomViewPointsRequest $request
     *
     * @return ListCustomViewPointsResponse
     */
    public function listCustomViewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomViewPointsWithOptions($request, $runtime);
    }

    /**
     * 查询数据集文档列表.
     *
     * @param tmpReq - ListDatasetDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasetDocumentsResponse
     *
     * @param ListDatasetDocumentsRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListDatasetDocumentsResponse
     */
    public function listDatasetDocumentsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDatasetDocumentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeFields) {
            $request->excludeFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeFields, 'ExcludeFields', 'json');
        }

        if (null !== $tmpReq->includeFields) {
            $request->includeFieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->includeFields, 'IncludeFields', 'json');
        }

        $body = [];
        if (null !== $request->datasetDescription) {
            @$body['DatasetDescription'] = $request->datasetDescription;
        }

        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->excludeFieldsShrink) {
            @$body['ExcludeFields'] = $request->excludeFieldsShrink;
        }

        if (null !== $request->includeFieldsShrink) {
            @$body['IncludeFields'] = $request->includeFieldsShrink;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDatasetDocuments',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDatasetDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据集文档列表.
     *
     * @param request - ListDatasetDocumentsRequest
     *
     * @returns ListDatasetDocumentsResponse
     *
     * @param ListDatasetDocumentsRequest $request
     *
     * @return ListDatasetDocumentsResponse
     */
    public function listDatasetDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetDocumentsWithOptions($request, $runtime);
    }

    /**
     * 数据集管理-查询.
     *
     * @param request - ListDatasetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatasetsResponse
     *
     * @param ListDatasetsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->datasetType) {
            @$body['DatasetType'] = $request->datasetType;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->includeConfig) {
            @$body['IncludeConfig'] = $request->includeConfig;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchDatasetEnable) {
            @$body['SearchDatasetEnable'] = $request->searchDatasetEnable;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDatasets',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据集管理-查询.
     *
     * @param request - ListDatasetsRequest
     *
     * @returns ListDatasetsResponse
     *
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetsWithOptions($request, $runtime);
    }

    /**
     * 生成历史列表.
     *
     * @param request - ListDialoguesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDialoguesResponse
     *
     * @param ListDialoguesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListDialoguesResponse
     */
    public function listDialoguesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->dialogueType) {
            @$body['DialogueType'] = $request->dialogueType;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDialogues',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成历史列表.
     *
     * @param request - ListDialoguesRequest
     *
     * @returns ListDialoguesResponse
     *
     * @param ListDialoguesRequest $request
     *
     * @return ListDialoguesResponse
     */
    public function listDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialoguesWithOptions($request, $runtime);
    }

    /**
     * 妙读获取文档列表.
     *
     * @param tmpReq - ListDocsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDocsResponse
     *
     * @param ListDocsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListDocsResponse
     */
    public function listDocsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDocsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->statuses) {
            $request->statusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statuses, 'Statuses', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->docName) {
            @$body['DocName'] = $request->docName;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->skip) {
            @$body['Skip'] = $request->skip;
        }

        if (null !== $request->statusesShrink) {
            @$body['Statuses'] = $request->statusesShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDocs',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDocsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读获取文档列表.
     *
     * @param request - ListDocsRequest
     *
     * @returns ListDocsResponse
     *
     * @param ListDocsRequest $request
     *
     * @return ListDocsResponse
     */
    public function listDocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocsWithOptions($request, $runtime);
    }

    /**
     * 新颖视角列表.
     *
     * @param request - ListFreshViewPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFreshViewPointsResponse
     *
     * @param ListFreshViewPointsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFreshViewPointsResponse
     */
    public function listFreshViewPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFreshViewPoints',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFreshViewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新颖视角列表.
     *
     * @param request - ListFreshViewPointsRequest
     *
     * @returns ListFreshViewPointsResponse
     *
     * @param ListFreshViewPointsRequest $request
     *
     * @return ListFreshViewPointsResponse
     */
    public function listFreshViewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFreshViewPointsWithOptions($request, $runtime);
    }

    /**
     * 文档管理-列表。
     *
     * @param request - ListGeneratedContentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGeneratedContentsResponse
     *
     * @param ListGeneratedContentsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListGeneratedContentsResponse
     */
    public function listGeneratedContentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->contentDomain) {
            @$body['ContentDomain'] = $request->contentDomain;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListGeneratedContents',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGeneratedContentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档管理-列表。
     *
     * @param request - ListGeneratedContentsRequest
     *
     * @returns ListGeneratedContentsResponse
     *
     * @param ListGeneratedContentsRequest $request
     *
     * @return ListGeneratedContentsResponse
     */
    public function listGeneratedContents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGeneratedContentsWithOptions($request, $runtime);
    }

    /**
     * 获取分类的热点新闻.
     *
     * @param tmpReq - ListHotNewsWithTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotNewsWithTypeResponse
     *
     * @param ListHotNewsWithTypeRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithTypeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListHotNewsWithTypeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->newsTypes) {
            $request->newsTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->newsTypes, 'NewsTypes', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->newsType) {
            @$body['NewsType'] = $request->newsType;
        }

        if (null !== $request->newsTypesShrink) {
            @$body['NewsTypes'] = $request->newsTypesShrink;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHotNewsWithType',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotNewsWithTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取分类的热点新闻.
     *
     * @param request - ListHotNewsWithTypeRequest
     *
     * @returns ListHotNewsWithTypeResponse
     *
     * @param ListHotNewsWithTypeRequest $request
     *
     * @return ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotNewsWithTypeWithOptions($request, $runtime);
    }

    /**
     * 获取所有平台热榜源列表.
     *
     * @param request - ListHotSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotSourcesResponse
     *
     * @param ListHotSourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListHotSourcesResponse
     */
    public function listHotSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHotSources',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取所有平台热榜源列表.
     *
     * @param request - ListHotSourcesRequest
     *
     * @returns ListHotSourcesResponse
     *
     * @param ListHotSourcesRequest $request
     *
     * @return ListHotSourcesResponse
     */
    public function listHotSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotSourcesWithOptions($request, $runtime);
    }

    /**
     * 获取热点事件列表.
     *
     * @param tmpReq - ListHotTopicsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotTopicsResponse
     *
     * @param ListHotTopicsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListHotTopicsResponse
     */
    public function listHotTopicsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListHotTopicsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->topicIds) {
            $request->topicIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topicIds, 'TopicIds', 'json');
        }

        if (null !== $tmpReq->topics) {
            $request->topicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->topicIdsShrink) {
            @$body['TopicIds'] = $request->topicIdsShrink;
        }

        if (null !== $request->topicQuery) {
            @$body['TopicQuery'] = $request->topicQuery;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        if (null !== $request->topicVersion) {
            @$body['TopicVersion'] = $request->topicVersion;
        }

        if (null !== $request->topicsShrink) {
            @$body['Topics'] = $request->topicsShrink;
        }

        if (null !== $request->withNews) {
            @$body['WithNews'] = $request->withNews;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHotTopics',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取热点事件列表.
     *
     * @param request - ListHotTopicsRequest
     *
     * @returns ListHotTopicsResponse
     *
     * @param ListHotTopicsRequest $request
     *
     * @return ListHotTopicsResponse
     */
    public function listHotTopics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotTopicsWithOptions($request, $runtime);
    }

    /**
     * 热门视角列表.
     *
     * @param request - ListHotViewPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotViewPointsResponse
     *
     * @param ListHotViewPointsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHotViewPointsResponse
     */
    public function listHotViewPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListHotViewPoints',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotViewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 热门视角列表.
     *
     * @param request - ListHotViewPointsRequest
     *
     * @returns ListHotViewPointsResponse
     *
     * @param ListHotViewPointsRequest $request
     *
     * @return ListHotViewPointsResponse
     */
    public function listHotViewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotViewPointsWithOptions($request, $runtime);
    }

    /**
     * 获得干预项目数量列表.
     *
     * @param request - ListInterveneCntRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterveneCntResponse
     *
     * @param ListInterveneCntRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListInterveneCntResponse
     */
    public function listInterveneCntWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInterveneCnt',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInterveneCntResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得干预项目数量列表.
     *
     * @param request - ListInterveneCntRequest
     *
     * @returns ListInterveneCntResponse
     *
     * @param ListInterveneCntRequest $request
     *
     * @return ListInterveneCntResponse
     */
    public function listInterveneCnt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneCntWithOptions($request, $runtime);
    }

    /**
     * 获得导入任务列表.
     *
     * @param request - ListInterveneImportTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterveneImportTasksResponse
     *
     * @param ListInterveneImportTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListInterveneImportTasksResponse
     */
    public function listInterveneImportTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInterveneImportTasks',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInterveneImportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得导入任务列表.
     *
     * @param request - ListInterveneImportTasksRequest
     *
     * @returns ListInterveneImportTasksResponse
     *
     * @param ListInterveneImportTasksRequest $request
     *
     * @return ListInterveneImportTasksResponse
     */
    public function listInterveneImportTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneImportTasksWithOptions($request, $runtime);
    }

    /**
     * 获得干预规则列表.
     *
     * @param request - ListInterveneRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInterveneRulesResponse
     *
     * @param ListInterveneRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInterveneRulesResponse
     */
    public function listInterveneRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInterveneRules',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInterveneRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得干预规则列表.
     *
     * @param request - ListInterveneRulesRequest
     *
     * @returns ListInterveneRulesResponse
     *
     * @param ListInterveneRulesRequest $request
     *
     * @return ListInterveneRulesResponse
     */
    public function listInterveneRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneRulesWithOptions($request, $runtime);
    }

    /**
     * 获得干预项列表.
     *
     * @param request - ListIntervenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIntervenesResponse
     *
     * @param ListIntervenesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListIntervenesResponse
     */
    public function listIntervenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->interveneType) {
            @$body['InterveneType'] = $request->interveneType;
        }

        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListIntervenes',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得干预项列表.
     *
     * @param request - ListIntervenesRequest
     *
     * @returns ListIntervenesResponse
     *
     * @param ListIntervenesRequest $request
     *
     * @return ListIntervenesResponse
     */
    public function listIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervenesWithOptions($request, $runtime);
    }

    /**
     * 查询素材列表.
     *
     * @param tmpReq - ListMaterialDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMaterialDocumentsResponse
     *
     * @param ListMaterialDocumentsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListMaterialDocumentsResponse
     */
    public function listMaterialDocumentsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMaterialDocumentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docTypeList) {
            $request->docTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docTypeList, 'DocTypeList', 'json');
        }

        if (null !== $tmpReq->keywords) {
            $request->keywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->createTimeEnd) {
            @$body['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$body['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->docTypeListShrink) {
            @$body['DocTypeList'] = $request->docTypeListShrink;
        }

        if (null !== $request->generatePublicUrl) {
            @$body['GeneratePublicUrl'] = $request->generatePublicUrl;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->keywordsShrink) {
            @$body['Keywords'] = $request->keywordsShrink;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->shareAttr) {
            @$body['ShareAttr'] = $request->shareAttr;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->updateTimeEnd) {
            @$body['UpdateTimeEnd'] = $request->updateTimeEnd;
        }

        if (null !== $request->updateTimeStart) {
            @$body['UpdateTimeStart'] = $request->updateTimeStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMaterialDocuments',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMaterialDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询素材列表.
     *
     * @param request - ListMaterialDocumentsRequest
     *
     * @returns ListMaterialDocumentsResponse
     *
     * @param ListMaterialDocumentsRequest $request
     *
     * @return ListMaterialDocumentsResponse
     */
    public function listMaterialDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMaterialDocumentsWithOptions($request, $runtime);
    }

    /**
     * 获取选题策划列表.
     *
     * @param tmpReq - ListPlanningProposalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPlanningProposalResponse
     *
     * @param ListPlanningProposalRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListPlanningProposalResponse
     */
    public function listPlanningProposalWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPlanningProposalShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customViewPointIds) {
            $request->customViewPointIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customViewPointIds, 'CustomViewPointIds', 'json');
        }

        if (null !== $tmpReq->titles) {
            $request->titlesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->titles, 'Titles', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->customViewPointId) {
            @$body['CustomViewPointId'] = $request->customViewPointId;
        }

        if (null !== $request->customViewPointIdsShrink) {
            @$body['CustomViewPointIds'] = $request->customViewPointIdsShrink;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->titlesShrink) {
            @$body['Titles'] = $request->titlesShrink;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        if (null !== $request->topicVersion) {
            @$body['TopicVersion'] = $request->topicVersion;
        }

        if (null !== $request->viewPointType) {
            @$body['ViewPointType'] = $request->viewPointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPlanningProposal',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPlanningProposalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取选题策划列表.
     *
     * @param request - ListPlanningProposalRequest
     *
     * @returns ListPlanningProposalResponse
     *
     * @param ListPlanningProposalRequest $request
     *
     * @return ListPlanningProposalResponse
     */
    public function listPlanningProposal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlanningProposalWithOptions($request, $runtime);
    }

    /**
     * 查询搜索生成任务对话详情中数据列表.
     *
     * @param request - ListSearchTaskDialogueDatasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchTaskDialogueDatasResponse
     *
     * @param ListSearchTaskDialogueDatasRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListSearchTaskDialogueDatasResponse
     */
    public function listSearchTaskDialogueDatasWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->includeContent) {
            @$body['IncludeContent'] = $request->includeContent;
        }

        if (null !== $request->multimodalSearchType) {
            @$body['MultimodalSearchType'] = $request->multimodalSearchType;
        }

        if (null !== $request->originalSessionId) {
            @$body['OriginalSessionId'] = $request->originalSessionId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->searchModel) {
            @$body['SearchModel'] = $request->searchModel;
        }

        if (null !== $request->searchModelDataValue) {
            @$body['SearchModelDataValue'] = $request->searchModelDataValue;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSearchTaskDialogueDatas',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSearchTaskDialogueDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询搜索生成任务对话详情中数据列表.
     *
     * @param request - ListSearchTaskDialogueDatasRequest
     *
     * @returns ListSearchTaskDialogueDatasResponse
     *
     * @param ListSearchTaskDialogueDatasRequest $request
     *
     * @return ListSearchTaskDialogueDatasResponse
     */
    public function listSearchTaskDialogueDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchTaskDialogueDatasWithOptions($request, $runtime);
    }

    /**
     * 查询妙搜搜索生成任务详情列表.
     *
     * @param request - ListSearchTaskDialoguesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchTaskDialoguesResponse
     *
     * @param ListSearchTaskDialoguesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSearchTaskDialoguesResponse
     */
    public function listSearchTaskDialoguesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSearchTaskDialogues',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSearchTaskDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询妙搜搜索生成任务详情列表.
     *
     * @param request - ListSearchTaskDialoguesRequest
     *
     * @returns ListSearchTaskDialoguesResponse
     *
     * @param ListSearchTaskDialoguesRequest $request
     *
     * @return ListSearchTaskDialoguesResponse
     */
    public function listSearchTaskDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchTaskDialoguesWithOptions($request, $runtime);
    }

    /**
     * 查询妙搜搜索生成历史任务列表.
     *
     * @param tmpReq - ListSearchTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchTasksResponse
     *
     * @param ListSearchTasksRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListSearchTasksResponse
     */
    public function listSearchTasksWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSearchTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dialogueTypes) {
            $request->dialogueTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dialogueTypes, 'DialogueTypes', 'json');
        }

        $body = [];
        if (null !== $request->dialogueTypesShrink) {
            @$body['DialogueTypes'] = $request->dialogueTypesShrink;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSearchTasks',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSearchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询妙搜搜索生成历史任务列表.
     *
     * @param request - ListSearchTasksRequest
     *
     * @returns ListSearchTasksResponse
     *
     * @param ListSearchTasksRequest $request
     *
     * @return ListSearchTasksResponse
     */
    public function listSearchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchTasksWithOptions($request, $runtime);
    }

    /**
     * 获取文体学习分析结果列表.
     *
     * @param request - ListStyleLearningResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStyleLearningResultResponse
     *
     * @param ListStyleLearningResultRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListStyleLearningResultResponse
     */
    public function listStyleLearningResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->current) {
            @$body['Current'] = $request->current;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListStyleLearningResult',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStyleLearningResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文体学习分析结果列表.
     *
     * @param request - ListStyleLearningResultRequest
     *
     * @returns ListStyleLearningResultResponse
     *
     * @param ListStyleLearningResultRequest $request
     *
     * @return ListStyleLearningResultResponse
     */
    public function listStyleLearningResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStyleLearningResultWithOptions($request, $runtime);
    }

    /**
     * 时效性视角列表.
     *
     * @param request - ListTimedViewAttitudeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTimedViewAttitudeResponse
     *
     * @param ListTimedViewAttitudeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListTimedViewAttitudeResponse
     */
    public function listTimedViewAttitudeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTimedViewAttitude',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTimedViewAttitudeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 时效性视角列表.
     *
     * @param request - ListTimedViewAttitudeRequest
     *
     * @returns ListTimedViewAttitudeResponse
     *
     * @param ListTimedViewAttitudeRequest $request
     *
     * @return ListTimedViewAttitudeResponse
     */
    public function listTimedViewAttitude($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimedViewAttitudeWithOptions($request, $runtime);
    }

    /**
     * 获取热点推荐事件.
     *
     * @param request - ListTopicRecommendEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicRecommendEventListResponse
     *
     * @param ListTopicRecommendEventListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListTopicRecommendEventListResponse
     */
    public function listTopicRecommendEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTopicRecommendEventList',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTopicRecommendEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取热点推荐事件.
     *
     * @param request - ListTopicRecommendEventListRequest
     *
     * @returns ListTopicRecommendEventListResponse
     *
     * @param ListTopicRecommendEventListRequest $request
     *
     * @return ListTopicRecommendEventListResponse
     */
    public function listTopicRecommendEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicRecommendEventListWithOptions($request, $runtime);
    }

    /**
     * 获取主题事件推荐观点列表.
     *
     * @param request - ListTopicViewPointRecommendEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicViewPointRecommendEventListResponse
     *
     * @param ListTopicViewPointRecommendEventListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return ListTopicViewPointRecommendEventListResponse
     */
    public function listTopicViewPointRecommendEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTopicViewPointRecommendEventList',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTopicViewPointRecommendEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取主题事件推荐观点列表.
     *
     * @param request - ListTopicViewPointRecommendEventListRequest
     *
     * @returns ListTopicViewPointRecommendEventListResponse
     *
     * @param ListTopicViewPointRecommendEventListRequest $request
     *
     * @return ListTopicViewPointRecommendEventListResponse
     */
    public function listTopicViewPointRecommendEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicViewPointRecommendEventListWithOptions($request, $runtime);
    }

    /**
     * 获取系统所有实例信息.
     *
     * @param request - ListVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVersionsResponse
     *
     * @param ListVersionsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListVersionsResponse
     */
    public function listVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVersions',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取系统所有实例信息.
     *
     * @param request - ListVersionsRequest
     *
     * @returns ListVersionsResponse
     *
     * @param ListVersionsRequest $request
     *
     * @return ListVersionsResponse
     */
    public function listVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionsWithOptions($request, $runtime);
    }

    /**
     * 网友视角列表.
     *
     * @param request - ListWebReviewPointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWebReviewPointsResponse
     *
     * @param ListWebReviewPointsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListWebReviewPointsResponse
     */
    public function listWebReviewPointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWebReviewPoints',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWebReviewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 网友视角列表.
     *
     * @param request - ListWebReviewPointsRequest
     *
     * @returns ListWebReviewPointsResponse
     *
     * @param ListWebReviewPointsRequest $request
     *
     * @return ListWebReviewPointsResponse
     */
    public function listWebReviewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWebReviewPointsWithOptions($request, $runtime);
    }

    /**
     * 根据taskId查询异步任务状态
     *
     * @param request - QueryAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAsyncTaskResponse
     *
     * @param QueryAsyncTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryAsyncTaskResponse
     */
    public function queryAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAsyncTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据taskId查询异步任务状态
     *
     * @param request - QueryAsyncTaskRequest
     *
     * @returns QueryAsyncTaskResponse
     *
     * @param QueryAsyncTaskRequest $request
     *
     * @return QueryAsyncTaskResponse
     */
    public function queryAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * 内容缩写.
     *
     * @param request - RunAbbreviationContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunAbbreviationContentResponse
     *
     * @param RunAbbreviationContentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RunAbbreviationContentResponse
     */
    public function runAbbreviationContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunAbbreviationContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunAbbreviationContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 内容缩写.
     *
     * @param request - RunAbbreviationContentRequest
     *
     * @returns RunAbbreviationContentResponse
     *
     * @param RunAbbreviationContentRequest $request
     *
     * @return RunAbbreviationContentResponse
     */
    public function runAbbreviationContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runAbbreviationContentWithOptions($request, $runtime);
    }

    /**
     * 书籍导读接口.
     *
     * @param request - RunBookIntroductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunBookIntroductionResponse
     *
     * @param RunBookIntroductionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RunBookIntroductionResponse
     */
    public function runBookIntroductionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->keyPointPrompt) {
            @$body['KeyPointPrompt'] = $request->keyPointPrompt;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->summaryPrompt) {
            @$body['SummaryPrompt'] = $request->summaryPrompt;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunBookIntroduction',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunBookIntroductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 书籍导读接口.
     *
     * @param request - RunBookIntroductionRequest
     *
     * @returns RunBookIntroductionResponse
     *
     * @param RunBookIntroductionRequest $request
     *
     * @return RunBookIntroductionResponse
     */
    public function runBookIntroduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runBookIntroductionWithOptions($request, $runtime);
    }

    /**
     * 书籍智能卡片接口.
     *
     * @param request - RunBookSmartCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunBookSmartCardResponse
     *
     * @param RunBookSmartCardRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunBookSmartCardResponse
     */
    public function runBookSmartCardWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunBookSmartCard',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunBookSmartCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 书籍智能卡片接口.
     *
     * @param request - RunBookSmartCardRequest
     *
     * @returns RunBookSmartCardResponse
     *
     * @param RunBookSmartCardRequest $request
     *
     * @return RunBookSmartCardResponse
     */
    public function runBookSmartCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runBookSmartCardWithOptions($request, $runtime);
    }

    /**
     * 客户之声预测.
     *
     * @param tmpReq - RunCommentGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCommentGenerationResponse
     *
     * @param RunCommentGenerationRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RunCommentGenerationResponse
     */
    public function runCommentGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunCommentGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lengthRange) {
            $request->lengthRangeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lengthRange, 'LengthRange', 'json');
        }

        if (null !== $tmpReq->sentiment) {
            $request->sentimentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sentiment, 'Sentiment', 'json');
        }

        if (null !== $tmpReq->type) {
            $request->typeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->type, 'Type', 'json');
        }

        $body = [];
        if (null !== $request->allowEmoji) {
            @$body['AllowEmoji'] = $request->allowEmoji;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->length) {
            @$body['Length'] = $request->length;
        }

        if (null !== $request->lengthRangeShrink) {
            @$body['LengthRange'] = $request->lengthRangeShrink;
        }

        if (null !== $request->numComments) {
            @$body['NumComments'] = $request->numComments;
        }

        if (null !== $request->sentimentShrink) {
            @$body['Sentiment'] = $request->sentimentShrink;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sourceMaterial) {
            @$body['SourceMaterial'] = $request->sourceMaterial;
        }

        if (null !== $request->style) {
            @$body['Style'] = $request->style;
        }

        if (null !== $request->typeShrink) {
            @$body['Type'] = $request->typeShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCommentGeneration',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCommentGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 客户之声预测.
     *
     * @param request - RunCommentGenerationRequest
     *
     * @returns RunCommentGenerationResponse
     *
     * @param RunCommentGenerationRequest $request
     *
     * @return RunCommentGenerationResponse
     */
    public function runCommentGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommentGenerationWithOptions($request, $runtime);
    }

    /**
     * 内容续写.
     *
     * @param request - RunContinueContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunContinueContentResponse
     *
     * @param RunContinueContentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunContinueContentResponse
     */
    public function runContinueContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunContinueContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunContinueContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 内容续写.
     *
     * @param request - RunContinueContentRequest
     *
     * @returns RunContinueContentResponse
     *
     * @param RunContinueContentRequest $request
     *
     * @return RunContinueContentResponse
     */
    public function runContinueContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runContinueContentWithOptions($request, $runtime);
    }

    /**
     * 自定义热点话题分析.
     *
     * @param request - RunCustomHotTopicAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCustomHotTopicAnalysisResponse
     *
     * @param RunCustomHotTopicAnalysisRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RunCustomHotTopicAnalysisResponse
     */
    public function runCustomHotTopicAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->askUser) {
            @$body['AskUser'] = $request->askUser;
        }

        if (null !== $request->forceAnalysisExistsTopic) {
            @$body['ForceAnalysisExistsTopic'] = $request->forceAnalysisExistsTopic;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->userBack) {
            @$body['UserBack'] = $request->userBack;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCustomHotTopicAnalysis',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCustomHotTopicAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自定义热点话题分析.
     *
     * @param request - RunCustomHotTopicAnalysisRequest
     *
     * @returns RunCustomHotTopicAnalysisResponse
     *
     * @param RunCustomHotTopicAnalysisRequest $request
     *
     * @return RunCustomHotTopicAnalysisResponse
     */
    public function runCustomHotTopicAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCustomHotTopicAnalysisWithOptions($request, $runtime);
    }

    /**
     * 自定义选题视角分析.
     *
     * @param request - RunCustomHotTopicViewPointAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCustomHotTopicViewPointAnalysisResponse
     *
     * @param RunCustomHotTopicViewPointAnalysisRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return RunCustomHotTopicViewPointAnalysisResponse
     */
    public function runCustomHotTopicViewPointAnalysisWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->askUser) {
            @$body['AskUser'] = $request->askUser;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->searchQuery) {
            @$body['SearchQuery'] = $request->searchQuery;
        }

        if (null !== $request->skipAskUser) {
            @$body['SkipAskUser'] = $request->skipAskUser;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->topicId) {
            @$body['TopicId'] = $request->topicId;
        }

        if (null !== $request->topicSource) {
            @$body['TopicSource'] = $request->topicSource;
        }

        if (null !== $request->topicVersion) {
            @$body['TopicVersion'] = $request->topicVersion;
        }

        if (null !== $request->userBack) {
            @$body['UserBack'] = $request->userBack;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunCustomHotTopicViewPointAnalysis',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCustomHotTopicViewPointAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 自定义选题视角分析.
     *
     * @param request - RunCustomHotTopicViewPointAnalysisRequest
     *
     * @returns RunCustomHotTopicViewPointAnalysisResponse
     *
     * @param RunCustomHotTopicViewPointAnalysisRequest $request
     *
     * @return RunCustomHotTopicViewPointAnalysisResponse
     */
    public function runCustomHotTopicViewPointAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCustomHotTopicViewPointAnalysisWithOptions($request, $runtime);
    }

    /**
     * 妙读脑图生成接口.
     *
     * @param request - RunDocBrainmapRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocBrainmapResponse
     *
     * @param RunDocBrainmapRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RunDocBrainmapResponse
     */
    public function runDocBrainmapWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cleanCache) {
            @$body['CleanCache'] = $request->cleanCache;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->nodeNumber) {
            @$body['NodeNumber'] = $request->nodeNumber;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->wordNumber) {
            @$body['WordNumber'] = $request->wordNumber;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->referenceContent) {
            @$body['referenceContent'] = $request->referenceContent;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocBrainmap',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocBrainmapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读脑图生成接口.
     *
     * @param request - RunDocBrainmapRequest
     *
     * @returns RunDocBrainmapResponse
     *
     * @param RunDocBrainmapRequest $request
     *
     * @return RunDocBrainmapResponse
     */
    public function runDocBrainmap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocBrainmapWithOptions($request, $runtime);
    }

    /**
     * 妙读文档导读接口.
     *
     * @param request - RunDocIntroductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocIntroductionResponse
     *
     * @param RunDocIntroductionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunDocIntroductionResponse
     */
    public function runDocIntroductionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cleanCache) {
            @$body['CleanCache'] = $request->cleanCache;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->introductionPrompt) {
            @$body['IntroductionPrompt'] = $request->introductionPrompt;
        }

        if (null !== $request->keyPointPrompt) {
            @$body['KeyPointPrompt'] = $request->keyPointPrompt;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->summaryPrompt) {
            @$body['SummaryPrompt'] = $request->summaryPrompt;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->referenceContent) {
            @$body['referenceContent'] = $request->referenceContent;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocIntroduction',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocIntroductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读文档导读接口.
     *
     * @param request - RunDocIntroductionRequest
     *
     * @returns RunDocIntroductionResponse
     *
     * @param RunDocIntroductionRequest $request
     *
     * @return RunDocIntroductionResponse
     */
    public function runDocIntroduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocIntroductionWithOptions($request, $runtime);
    }

    /**
     * 妙读问答接口.
     *
     * @param tmpReq - RunDocQaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocQaResponse
     *
     * @param RunDocQaRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return RunDocQaResponse
     */
    public function runDocQaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunDocQaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryIds) {
            $request->categoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }

        if (null !== $tmpReq->conversationContexts) {
            $request->conversationContextsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->conversationContexts, 'ConversationContexts', 'json');
        }

        if (null !== $tmpReq->docIds) {
            $request->docIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docIds, 'DocIds', 'json');
        }

        $body = [];
        if (null !== $request->categoryIdsShrink) {
            @$body['CategoryIds'] = $request->categoryIdsShrink;
        }

        if (null !== $request->conversationContextsShrink) {
            @$body['ConversationContexts'] = $request->conversationContextsShrink;
        }

        if (null !== $request->docIdsShrink) {
            @$body['DocIds'] = $request->docIdsShrink;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->referenceContent) {
            @$body['ReferenceContent'] = $request->referenceContent;
        }

        if (null !== $request->searchSource) {
            @$body['SearchSource'] = $request->searchSource;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocQa',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocQaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读问答接口.
     *
     * @param request - RunDocQaRequest
     *
     * @returns RunDocQaResponse
     *
     * @param RunDocQaRequest $request
     *
     * @return RunDocQaResponse
     */
    public function runDocQa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocQaWithOptions($request, $runtime);
    }

    /**
     * 文档智能卡片接口.
     *
     * @param request - RunDocSmartCardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocSmartCardResponse
     *
     * @param RunDocSmartCardRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RunDocSmartCardResponse
     */
    public function runDocSmartCardWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocSmartCard',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocSmartCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档智能卡片接口.
     *
     * @param request - RunDocSmartCardRequest
     *
     * @returns RunDocSmartCardResponse
     *
     * @param RunDocSmartCardRequest $request
     *
     * @return RunDocSmartCardResponse
     */
    public function runDocSmartCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocSmartCardWithOptions($request, $runtime);
    }

    /**
     * 妙读文档总结摘要接口.
     *
     * @param request - RunDocSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocSummaryResponse
     *
     * @param RunDocSummaryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RunDocSummaryResponse
     */
    public function runDocSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cleanCache) {
            @$body['CleanCache'] = $request->cleanCache;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->recommendContent) {
            @$body['RecommendContent'] = $request->recommendContent;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocSummary',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读文档总结摘要接口.
     *
     * @param request - RunDocSummaryRequest
     *
     * @returns RunDocSummaryResponse
     *
     * @param RunDocSummaryRequest $request
     *
     * @return RunDocSummaryResponse
     */
    public function runDocSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocSummaryWithOptions($request, $runtime);
    }

    /**
     * 妙读文档翻译接口.
     *
     * @param request - RunDocTranslationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocTranslationResponse
     *
     * @param RunDocTranslationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RunDocTranslationResponse
     */
    public function runDocTranslationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cleanCache) {
            @$body['CleanCache'] = $request->cleanCache;
        }

        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->recommendContent) {
            @$body['RecommendContent'] = $request->recommendContent;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->transType) {
            @$body['TransType'] = $request->transType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocTranslation',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocTranslationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读文档翻译接口.
     *
     * @param request - RunDocTranslationRequest
     *
     * @returns RunDocTranslationResponse
     *
     * @param RunDocTranslationRequest $request
     *
     * @return RunDocTranslationResponse
     */
    public function runDocTranslation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocTranslationWithOptions($request, $runtime);
    }

    /**
     * 文档改写.
     *
     * @param request - RunDocWashingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunDocWashingResponse
     *
     * @param RunDocWashingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RunDocWashingResponse
     */
    public function runDocWashingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->referenceContent) {
            @$body['ReferenceContent'] = $request->referenceContent;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        if (null !== $request->wordNumber) {
            @$body['WordNumber'] = $request->wordNumber;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->writingTypeName) {
            @$body['WritingTypeName'] = $request->writingTypeName;
        }

        if (null !== $request->writingTypeRefDoc) {
            @$body['WritingTypeRefDoc'] = $request->writingTypeRefDoc;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunDocWashing',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunDocWashingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档改写.
     *
     * @param request - RunDocWashingRequest
     *
     * @returns RunDocWashingResponse
     *
     * @param RunDocWashingRequest $request
     *
     * @return RunDocWashingResponse
     */
    public function runDocWashing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocWashingWithOptions($request, $runtime);
    }

    /**
     * 内容扩写.
     *
     * @param request - RunExpandContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunExpandContentResponse
     *
     * @param RunExpandContentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunExpandContentResponse
     */
    public function runExpandContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunExpandContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunExpandContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 内容扩写.
     *
     * @param request - RunExpandContentRequest
     *
     * @returns RunExpandContentResponse
     *
     * @param RunExpandContentRequest $request
     *
     * @return RunExpandContentResponse
     */
    public function runExpandContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runExpandContentWithOptions($request, $runtime);
    }

    /**
     * 妙读猜你想问接口.
     *
     * @param request - RunGenerateQuestionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunGenerateQuestionsResponse
     *
     * @param RunGenerateQuestionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RunGenerateQuestionsResponse
     */
    public function runGenerateQuestionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->referenceContent) {
            @$body['ReferenceContent'] = $request->referenceContent;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunGenerateQuestions',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunGenerateQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读猜你想问接口.
     *
     * @param request - RunGenerateQuestionsRequest
     *
     * @returns RunGenerateQuestionsResponse
     *
     * @param RunGenerateQuestionsRequest $request
     *
     * @return RunGenerateQuestionsResponse
     */
    public function runGenerateQuestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runGenerateQuestionsWithOptions($request, $runtime);
    }

    /**
     * 妙读文档关键词抽取接口.
     *
     * @param request - RunHotwordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunHotwordResponse
     *
     * @param RunHotwordRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunHotwordResponse
     */
    public function runHotwordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->docId) {
            @$body['DocId'] = $request->docId;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->referenceContent) {
            @$body['ReferenceContent'] = $request->referenceContent;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunHotword',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunHotwordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读文档关键词抽取接口.
     *
     * @param request - RunHotwordRequest
     *
     * @returns RunHotwordResponse
     *
     * @param RunHotwordRequest $request
     *
     * @return RunHotwordResponse
     */
    public function runHotword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runHotwordWithOptions($request, $runtime);
    }

    /**
     * AI妙笔-创作-抽取关键词.
     *
     * @param tmpReq - RunKeywordsExtractionGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunKeywordsExtractionGenerationResponse
     *
     * @param RunKeywordsExtractionGenerationRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return RunKeywordsExtractionGenerationResponse
     */
    public function runKeywordsExtractionGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunKeywordsExtractionGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        $body = [];
        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunKeywordsExtractionGeneration',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunKeywordsExtractionGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI妙笔-创作-抽取关键词.
     *
     * @param request - RunKeywordsExtractionGenerationRequest
     *
     * @returns RunKeywordsExtractionGenerationResponse
     *
     * @param RunKeywordsExtractionGenerationRequest $request
     *
     * @return RunKeywordsExtractionGenerationResponse
     */
    public function runKeywordsExtractionGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runKeywordsExtractionGenerationWithOptions($request, $runtime);
    }

    /**
     * 文档批量导读.
     *
     * @param tmpReq - RunMultiDocIntroductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunMultiDocIntroductionResponse
     *
     * @param RunMultiDocIntroductionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RunMultiDocIntroductionResponse
     */
    public function runMultiDocIntroductionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunMultiDocIntroductionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docIds) {
            $request->docIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docIds, 'DocIds', 'json');
        }

        $body = [];
        if (null !== $request->docIdsShrink) {
            @$body['DocIds'] = $request->docIdsShrink;
        }

        if (null !== $request->keyPointPrompt) {
            @$body['KeyPointPrompt'] = $request->keyPointPrompt;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->summaryPrompt) {
            @$body['SummaryPrompt'] = $request->summaryPrompt;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMultiDocIntroduction',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMultiDocIntroductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档批量导读.
     *
     * @param request - RunMultiDocIntroductionRequest
     *
     * @returns RunMultiDocIntroductionResponse
     *
     * @param RunMultiDocIntroductionRequest $request
     *
     * @return RunMultiDocIntroductionResponse
     */
    public function runMultiDocIntroduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runMultiDocIntroductionWithOptions($request, $runtime);
    }

    /**
     * AI妙搜-智能搜索生成.
     *
     * @param tmpReq - RunSearchGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSearchGenerationResponse
     *
     * @param RunSearchGenerationRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return RunSearchGenerationResponse
     */
    public function runSearchGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunSearchGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentContext) {
            $request->agentContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentContext, 'AgentContext', 'json');
        }

        if (null !== $tmpReq->chatConfig) {
            $request->chatConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->chatConfig, 'ChatConfig', 'json');
        }

        $body = [];
        if (null !== $request->agentContextShrink) {
            @$body['AgentContext'] = $request->agentContextShrink;
        }

        if (null !== $request->chatConfigShrink) {
            @$body['ChatConfig'] = $request->chatConfigShrink;
        }

        if (null !== $request->modelId) {
            @$body['ModelId'] = $request->modelId;
        }

        if (null !== $request->originalSessionId) {
            @$body['OriginalSessionId'] = $request->originalSessionId;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSearchGeneration',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSearchGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI妙搜-智能搜索生成.
     *
     * @param request - RunSearchGenerationRequest
     *
     * @returns RunSearchGenerationResponse
     *
     * @param RunSearchGenerationRequest $request
     *
     * @return RunSearchGenerationResponse
     */
    public function runSearchGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSearchGenerationWithOptions($request, $runtime);
    }

    /**
     * 妙搜-文搜文.
     *
     * @param tmpReq - RunSearchSimilarArticlesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSearchSimilarArticlesResponse
     *
     * @param RunSearchSimilarArticlesRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return RunSearchSimilarArticlesResponse
     */
    public function runSearchSimilarArticlesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunSearchSimilarArticlesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->chatConfig) {
            $request->chatConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->chatConfig, 'ChatConfig', 'json');
        }

        $body = [];
        if (null !== $request->chatConfigShrink) {
            @$body['ChatConfig'] = $request->chatConfigShrink;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSearchSimilarArticles',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSearchSimilarArticlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙搜-文搜文.
     *
     * @param request - RunSearchSimilarArticlesRequest
     *
     * @returns RunSearchSimilarArticlesResponse
     *
     * @param RunSearchSimilarArticlesRequest $request
     *
     * @return RunSearchSimilarArticlesResponse
     */
    public function runSearchSimilarArticles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSearchSimilarArticlesWithOptions($request, $runtime);
    }

    /**
     * 创作-分步骤写作.
     *
     * @param tmpReq - RunStepByStepWritingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunStepByStepWritingResponse
     *
     * @param RunStepByStepWritingRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RunStepByStepWritingResponse
     */
    public function runStepByStepWritingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunStepByStepWritingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        if (null !== $tmpReq->writingConfig) {
            $request->writingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->writingConfig, 'WritingConfig', 'json');
        }

        $body = [];
        if (null !== $request->originSessionId) {
            @$body['OriginSessionId'] = $request->originSessionId;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->writingConfigShrink) {
            @$body['WritingConfig'] = $request->writingConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunStepByStepWriting',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunStepByStepWritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创作-分步骤写作.
     *
     * @param request - RunStepByStepWritingRequest
     *
     * @returns RunStepByStepWritingResponse
     *
     * @param RunStepByStepWritingRequest $request
     *
     * @return RunStepByStepWritingResponse
     */
    public function runStepByStepWriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runStepByStepWritingWithOptions($request, $runtime);
    }

    /**
     * 内容特点分析.
     *
     * @param tmpReq - RunStyleFeatureAnalysisRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunStyleFeatureAnalysisResponse
     *
     * @param RunStyleFeatureAnalysisRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RunStyleFeatureAnalysisResponse
     */
    public function runStyleFeatureAnalysisWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunStyleFeatureAnalysisShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contents) {
            $request->contentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }

        if (null !== $tmpReq->materialIds) {
            $request->materialIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->materialIds, 'MaterialIds', 'json');
        }

        $body = [];
        if (null !== $request->contentsShrink) {
            @$body['Contents'] = $request->contentsShrink;
        }

        if (null !== $request->materialIdsShrink) {
            @$body['MaterialIds'] = $request->materialIdsShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunStyleFeatureAnalysis',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunStyleFeatureAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 内容特点分析.
     *
     * @param request - RunStyleFeatureAnalysisRequest
     *
     * @returns RunStyleFeatureAnalysisResponse
     *
     * @param RunStyleFeatureAnalysisRequest $request
     *
     * @return RunStyleFeatureAnalysisResponse
     */
    public function runStyleFeatureAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runStyleFeatureAnalysisWithOptions($request, $runtime);
    }

    /**
     * 内容摘要生成.
     *
     * @param request - RunSummaryGenerateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunSummaryGenerateResponse
     *
     * @param RunSummaryGenerateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunSummaryGenerateResponse
     */
    public function runSummaryGenerateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunSummaryGenerate',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunSummaryGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 内容摘要生成.
     *
     * @param request - RunSummaryGenerateRequest
     *
     * @returns RunSummaryGenerateResponse
     *
     * @param RunSummaryGenerateRequest $request
     *
     * @return RunSummaryGenerateResponse
     */
    public function runSummaryGenerate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSummaryGenerateWithOptions($request, $runtime);
    }

    /**
     * 创作-文本润色.
     *
     * @param request - RunTextPolishingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunTextPolishingResponse
     *
     * @param RunTextPolishingRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunTextPolishingResponse
     */
    public function runTextPolishingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunTextPolishing',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunTextPolishingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创作-文本润色.
     *
     * @param request - RunTextPolishingRequest
     *
     * @returns RunTextPolishingResponse
     *
     * @param RunTextPolishingRequest $request
     *
     * @return RunTextPolishingResponse
     */
    public function runTextPolishing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTextPolishingWithOptions($request, $runtime);
    }

    /**
     * 妙笔：标题生成.
     *
     * @param tmpReq - RunTitleGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunTitleGenerationResponse
     *
     * @param RunTitleGenerationRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return RunTitleGenerationResponse
     */
    public function runTitleGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunTitleGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deduplicatedTitles) {
            $request->deduplicatedTitlesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deduplicatedTitles, 'DeduplicatedTitles', 'json');
        }

        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        $body = [];
        if (null !== $request->deduplicatedTitlesShrink) {
            @$body['DeduplicatedTitles'] = $request->deduplicatedTitlesShrink;
        }

        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->titleCount) {
            @$body['TitleCount'] = $request->titleCount;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunTitleGeneration',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunTitleGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙笔：标题生成.
     *
     * @param request - RunTitleGenerationRequest
     *
     * @returns RunTitleGenerationResponse
     *
     * @param RunTitleGenerationRequest $request
     *
     * @return RunTitleGenerationResponse
     */
    public function runTitleGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTitleGenerationWithOptions($request, $runtime);
    }

    /**
     * AI妙笔-创作-中英文翻译.
     *
     * @param tmpReq - RunTranslateGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunTranslateGenerationResponse
     *
     * @param RunTranslateGenerationRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RunTranslateGenerationResponse
     */
    public function runTranslateGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunTranslateGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        $body = [];
        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunTranslateGeneration',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunTranslateGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI妙笔-创作-中英文翻译.
     *
     * @param request - RunTranslateGenerationRequest
     *
     * @returns RunTranslateGenerationResponse
     *
     * @param RunTranslateGenerationRequest $request
     *
     * @return RunTranslateGenerationResponse
     */
    public function runTranslateGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTranslateGenerationWithOptions($request, $runtime);
    }

    /**
     * AI妙笔-创作-文风改写.
     *
     * @param tmpReq - RunWriteToneGenerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunWriteToneGenerationResponse
     *
     * @param RunWriteToneGenerationRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RunWriteToneGenerationResponse
     */
    public function runWriteToneGenerationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunWriteToneGenerationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        $body = [];
        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunWriteToneGeneration',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunWriteToneGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI妙笔-创作-文风改写.
     *
     * @param request - RunWriteToneGenerationRequest
     *
     * @returns RunWriteToneGenerationResponse
     *
     * @param RunWriteToneGenerationRequest $request
     *
     * @return RunWriteToneGenerationResponse
     */
    public function runWriteToneGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runWriteToneGenerationWithOptions($request, $runtime);
    }

    /**
     * 直接写作.
     *
     * @param tmpReq - RunWritingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunWritingResponse
     *
     * @param RunWritingRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RunWritingResponse
     */
    public function runWritingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunWritingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->referenceData) {
            $request->referenceDataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }

        if (null !== $tmpReq->writingConfig) {
            $request->writingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->writingConfig, 'WritingConfig', 'json');
        }

        $body = [];
        if (null !== $request->originSessionId) {
            @$body['OriginSessionId'] = $request->originSessionId;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->referenceDataShrink) {
            @$body['ReferenceData'] = $request->referenceDataShrink;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->writingConfigShrink) {
            @$body['WritingConfig'] = $request->writingConfigShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunWriting',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunWritingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 直接写作.
     *
     * @param request - RunWritingRequest
     *
     * @returns RunWritingResponse
     *
     * @param RunWritingRequest $request
     *
     * @return RunWritingResponse
     */
    public function runWriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runWritingWithOptions($request, $runtime);
    }

    /**
     * 保存自定义文本.
     *
     * @param request - SaveCustomTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveCustomTextResponse
     *
     * @param SaveCustomTextRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveCustomTextResponse
     */
    public function saveCustomTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveCustomText',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存自定义文本.
     *
     * @param request - SaveCustomTextRequest
     *
     * @returns SaveCustomTextResponse
     *
     * @param SaveCustomTextRequest $request
     *
     * @return SaveCustomTextResponse
     */
    public function saveCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveCustomTextWithOptions($request, $runtime);
    }

    /**
     * 保存用户的信源配置.
     *
     * @param tmpReq - SaveDataSourceOrderConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveDataSourceOrderConfigResponse
     *
     * @param SaveDataSourceOrderConfigRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveDataSourceOrderConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userConfigDataSourceList) {
            $request->userConfigDataSourceListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userConfigDataSourceList, 'UserConfigDataSourceList', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->generateTechnology) {
            @$body['GenerateTechnology'] = $request->generateTechnology;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->userConfigDataSourceListShrink) {
            @$body['UserConfigDataSourceList'] = $request->userConfigDataSourceListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveDataSourceOrderConfig',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveDataSourceOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存用户的信源配置.
     *
     * @param request - SaveDataSourceOrderConfigRequest
     *
     * @returns SaveDataSourceOrderConfigResponse
     *
     * @param SaveDataSourceOrderConfigRequest $request
     *
     * @return SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * 保存素材.
     *
     * @param tmpReq - SaveMaterialDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveMaterialDocumentResponse
     *
     * @param SaveMaterialDocumentRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SaveMaterialDocumentResponse
     */
    public function saveMaterialDocumentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveMaterialDocumentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docKeywords) {
            $request->docKeywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docKeywords, 'DocKeywords', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->author) {
            @$body['Author'] = $request->author;
        }

        if (null !== $request->bothSavePrivateAndShare) {
            @$body['BothSavePrivateAndShare'] = $request->bothSavePrivateAndShare;
        }

        if (null !== $request->docKeywordsShrink) {
            @$body['DocKeywords'] = $request->docKeywordsShrink;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->externalUrl) {
            @$body['ExternalUrl'] = $request->externalUrl;
        }

        if (null !== $request->htmlContent) {
            @$body['HtmlContent'] = $request->htmlContent;
        }

        if (null !== $request->pubTime) {
            @$body['PubTime'] = $request->pubTime;
        }

        if (null !== $request->shareAttr) {
            @$body['ShareAttr'] = $request->shareAttr;
        }

        if (null !== $request->srcFrom) {
            @$body['SrcFrom'] = $request->srcFrom;
        }

        if (null !== $request->summary) {
            @$body['Summary'] = $request->summary;
        }

        if (null !== $request->textContent) {
            @$body['TextContent'] = $request->textContent;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveMaterialDocument',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveMaterialDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存素材.
     *
     * @param request - SaveMaterialDocumentRequest
     *
     * @returns SaveMaterialDocumentResponse
     *
     * @param SaveMaterialDocumentRequest $request
     *
     * @return SaveMaterialDocumentResponse
     */
    public function saveMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMaterialDocumentWithOptions($request, $runtime);
    }

    /**
     * 保存自定义文体.
     *
     * @param tmpReq - SaveStyleLearningResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveStyleLearningResultResponse
     *
     * @param SaveStyleLearningResultRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SaveStyleLearningResultResponse
     */
    public function saveStyleLearningResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveStyleLearningResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customTextIdList) {
            $request->customTextIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customTextIdList, 'CustomTextIdList', 'json');
        }

        if (null !== $tmpReq->materialIdList) {
            $request->materialIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->materialIdList, 'MaterialIdList', 'json');
        }

        $body = [];
        if (null !== $request->agentKey) {
            @$body['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->aigcResult) {
            @$body['AigcResult'] = $request->aigcResult;
        }

        if (null !== $request->customTextIdListShrink) {
            @$body['CustomTextIdList'] = $request->customTextIdListShrink;
        }

        if (null !== $request->materialIdListShrink) {
            @$body['MaterialIdList'] = $request->materialIdListShrink;
        }

        if (null !== $request->rewriteResult) {
            @$body['RewriteResult'] = $request->rewriteResult;
        }

        if (null !== $request->styleName) {
            @$body['StyleName'] = $request->styleName;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveStyleLearningResult',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveStyleLearningResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存自定义文体.
     *
     * @param request - SaveStyleLearningResultRequest
     *
     * @returns SaveStyleLearningResultResponse
     *
     * @param SaveStyleLearningResultRequest $request
     *
     * @return SaveStyleLearningResultResponse
     */
    public function saveStyleLearningResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveStyleLearningResultWithOptions($request, $runtime);
    }

    /**
     * 搜索数据集文档.
     *
     * @param request - SearchDatasetDocumentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchDatasetDocumentsResponse
     *
     * @param SearchDatasetDocumentsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchDatasetDocumentsResponse
     */
    public function searchDatasetDocumentsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->extend1) {
            @$body['Extend1'] = $request->extend1;
        }

        if (null !== $request->includeContent) {
            @$body['IncludeContent'] = $request->includeContent;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchDatasetDocuments',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchDatasetDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索数据集文档.
     *
     * @param request - SearchDatasetDocumentsRequest
     *
     * @returns SearchDatasetDocumentsResponse
     *
     * @param SearchDatasetDocumentsRequest $request
     *
     * @return SearchDatasetDocumentsResponse
     */
    public function searchDatasetDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDatasetDocumentsWithOptions($request, $runtime);
    }

    /**
     * 新闻检索.
     *
     * @param tmpReq - SearchNewsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchNewsResponse
     *
     * @param SearchNewsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return SearchNewsResponse
     */
    public function searchNewsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchNewsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->searchSources) {
            $request->searchSourcesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->searchSources, 'SearchSources', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->filterNotNull) {
            @$body['FilterNotNull'] = $request->filterNotNull;
        }

        if (null !== $request->includeContent) {
            @$body['IncludeContent'] = $request->includeContent;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->searchSourcesShrink) {
            @$body['SearchSources'] = $request->searchSourcesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchNews',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchNewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新闻检索.
     *
     * @param request - SearchNewsRequest
     *
     * @returns SearchNewsResponse
     *
     * @param SearchNewsRequest $request
     *
     * @return SearchNewsResponse
     */
    public function searchNews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNewsWithOptions($request, $runtime);
    }

    /**
     * 提交异步任务
     *
     * @param request - SubmitAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAsyncTaskResponse
     *
     * @param SubmitAsyncTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitAsyncTaskResponse
     */
    public function submitAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->taskCode) {
            @$body['TaskCode'] = $request->taskCode;
        }

        if (null !== $request->taskExecuteTime) {
            @$body['TaskExecuteTime'] = $request->taskExecuteTime;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskParam) {
            @$body['TaskParam'] = $request->taskParam;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitAsyncTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交异步任务
     *
     * @param request - SubmitAsyncTaskRequest
     *
     * @returns SubmitAsyncTaskResponse
     *
     * @param SubmitAsyncTaskRequest $request
     *
     * @return SubmitAsyncTaskResponse
     */
    public function submitAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * 提交自定义播报单任务
     *
     * @param tmpReq - SubmitCustomHotTopicBroadcastJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCustomHotTopicBroadcastJobResponse
     *
     * @param SubmitCustomHotTopicBroadcastJobRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitCustomHotTopicBroadcastJobResponse
     */
    public function submitCustomHotTopicBroadcastJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitCustomHotTopicBroadcastJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hotTopicBroadcastConfig) {
            $request->hotTopicBroadcastConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hotTopicBroadcastConfig, 'HotTopicBroadcastConfig', 'json');
        }

        if (null !== $tmpReq->topics) {
            $request->topicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }

        $body = [];
        if (null !== $request->hotTopicBroadcastConfigShrink) {
            @$body['HotTopicBroadcastConfig'] = $request->hotTopicBroadcastConfigShrink;
        }

        if (null !== $request->hotTopicVersion) {
            @$body['HotTopicVersion'] = $request->hotTopicVersion;
        }

        if (null !== $request->topicsShrink) {
            @$body['Topics'] = $request->topicsShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitCustomHotTopicBroadcastJob',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCustomHotTopicBroadcastJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交自定义播报单任务
     *
     * @param request - SubmitCustomHotTopicBroadcastJobRequest
     *
     * @returns SubmitCustomHotTopicBroadcastJobResponse
     *
     * @param SubmitCustomHotTopicBroadcastJobRequest $request
     *
     * @return SubmitCustomHotTopicBroadcastJobResponse
     */
    public function submitCustomHotTopicBroadcastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomHotTopicBroadcastJobWithOptions($request, $runtime);
    }

    /**
     * 提交自定义热点选题视角分析任务
     *
     * @param tmpReq - SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest $tmpReq
     * @param RuntimeOptions                                           $runtime
     *
     * @return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitCustomTopicSelectionPerspectiveAnalysisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documents) {
            $request->documentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->documentsShrink) {
            @$body['Documents'] = $request->documentsShrink;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitCustomTopicSelectionPerspectiveAnalysisTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交自定义热点选题视角分析任务
     *
     * @param request - SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @returns SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest $request
     *
     * @return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitCustomTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * 提交文档聚合任务
     *
     * @param tmpReq - SubmitDocClusterTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocClusterTaskResponse
     *
     * @param SubmitDocClusterTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitDocClusterTaskResponse
     */
    public function submitDocClusterTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitDocClusterTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documents) {
            $request->documentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->documentsShrink) {
            @$body['Documents'] = $request->documentsShrink;
        }

        if (null !== $request->summaryLength) {
            @$body['SummaryLength'] = $request->summaryLength;
        }

        if (null !== $request->titleLength) {
            @$body['TitleLength'] = $request->titleLength;
        }

        if (null !== $request->topicCount) {
            @$body['TopicCount'] = $request->topicCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitDocClusterTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDocClusterTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交文档聚合任务
     *
     * @param request - SubmitDocClusterTaskRequest
     *
     * @returns SubmitDocClusterTaskResponse
     *
     * @param SubmitDocClusterTaskRequest $request
     *
     * @return SubmitDocClusterTaskResponse
     */
    public function submitDocClusterTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocClusterTaskWithOptions($request, $runtime);
    }

    /**
     * 提交VOC异步任务
     *
     * @param tmpReq - SubmitEnterpriseVocAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitEnterpriseVocAnalysisTaskResponse
     *
     * @param SubmitEnterpriseVocAnalysisTaskRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitEnterpriseVocAnalysisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->contentTags) {
            $request->contentTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contentTags, 'ContentTags', 'json');
        }

        if (null !== $tmpReq->contents) {
            $request->contentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }

        if (null !== $tmpReq->filterTags) {
            $request->filterTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filterTags, 'FilterTags', 'json');
        }

        $body = [];
        if (null !== $request->apiKey) {
            @$body['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->contentTagsShrink) {
            @$body['ContentTags'] = $request->contentTagsShrink;
        }

        if (null !== $request->contentsShrink) {
            @$body['Contents'] = $request->contentsShrink;
        }

        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->filterTagsShrink) {
            @$body['FilterTags'] = $request->filterTagsShrink;
        }

        if (null !== $request->materialType) {
            @$body['MaterialType'] = $request->materialType;
        }

        if (null !== $request->modelId) {
            @$body['ModelId'] = $request->modelId;
        }

        if (null !== $request->positiveSample) {
            @$body['PositiveSample'] = $request->positiveSample;
        }

        if (null !== $request->positiveSampleFileKey) {
            @$body['PositiveSampleFileKey'] = $request->positiveSampleFileKey;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitEnterpriseVocAnalysisTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交VOC异步任务
     *
     * @param request - SubmitEnterpriseVocAnalysisTaskRequest
     *
     * @returns SubmitEnterpriseVocAnalysisTaskResponse
     *
     * @param SubmitEnterpriseVocAnalysisTaskRequest $request
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEnterpriseVocAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * 提交一键成片剪辑任务
     *
     * @param tmpReq - SubmitSmartClipTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSmartClipTaskResponse
     *
     * @param SubmitSmartClipTaskRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitSmartClipTaskResponse
     */
    public function submitSmartClipTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSmartClipTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->editingConfig) {
            $request->editingConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->editingConfig, 'EditingConfig', 'json');
        }

        if (null !== $tmpReq->inputConfig) {
            $request->inputConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputConfig, 'InputConfig', 'json');
        }

        if (null !== $tmpReq->outputConfig) {
            $request->outputConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outputConfig, 'OutputConfig', 'json');
        }

        $body = [];
        if (null !== $request->editingConfigShrink) {
            @$body['EditingConfig'] = $request->editingConfigShrink;
        }

        if (null !== $request->extendParam) {
            @$body['ExtendParam'] = $request->extendParam;
        }

        if (null !== $request->inputConfigShrink) {
            @$body['InputConfig'] = $request->inputConfigShrink;
        }

        if (null !== $request->outputConfigShrink) {
            @$body['OutputConfig'] = $request->outputConfigShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitSmartClipTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSmartClipTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交一键成片剪辑任务
     *
     * @param request - SubmitSmartClipTaskRequest
     *
     * @returns SubmitSmartClipTaskResponse
     *
     * @param SubmitSmartClipTaskRequest $request
     *
     * @return SubmitSmartClipTaskResponse
     */
    public function submitSmartClipTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmartClipTaskWithOptions($request, $runtime);
    }

    /**
     * 提交选题热点分析任务
     *
     * @param tmpReq - SubmitTopicSelectionPerspectiveAnalysisTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param SubmitTopicSelectionPerspectiveAnalysisTaskRequest $tmpReq
     * @param RuntimeOptions                                     $runtime
     *
     * @return SubmitTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitTopicSelectionPerspectiveAnalysisTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTopicSelectionPerspectiveAnalysisTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->documents) {
            $request->documentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }

        if (null !== $tmpReq->perspectiveTypes) {
            $request->perspectiveTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->perspectiveTypes, 'PerspectiveTypes', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->documentsShrink) {
            @$body['Documents'] = $request->documentsShrink;
        }

        if (null !== $request->perspectiveTypesShrink) {
            @$body['PerspectiveTypes'] = $request->perspectiveTypesShrink;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitTopicSelectionPerspectiveAnalysisTask',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交选题热点分析任务
     *
     * @param request - SubmitTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @returns SubmitTopicSelectionPerspectiveAnalysisTaskResponse
     *
     * @param SubmitTopicSelectionPerspectiveAnalysisTaskRequest $request
     *
     * @return SubmitTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * 更新自定义文本.
     *
     * @param request - UpdateCustomTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomTextResponse
     *
     * @param UpdateCustomTextRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCustomTextResponse
     */
    public function updateCustomTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomText',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新自定义文本.
     *
     * @param request - UpdateCustomTextRequest
     *
     * @returns UpdateCustomTextResponse
     *
     * @param UpdateCustomTextRequest $request
     *
     * @return UpdateCustomTextResponse
     */
    public function updateCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTextWithOptions($request, $runtime);
    }

    /**
     * 数据集管理-更新.
     *
     * @param tmpReq - UpdateDatasetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDatasetResponse
     *
     * @param UpdateDatasetRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDatasetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->datasetConfig) {
            $request->datasetConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }

        $body = [];
        if (null !== $request->datasetConfigShrink) {
            @$body['DatasetConfig'] = $request->datasetConfigShrink;
        }

        if (null !== $request->datasetDescription) {
            @$body['DatasetDescription'] = $request->datasetDescription;
        }

        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->searchDatasetEnable) {
            @$body['SearchDatasetEnable'] = $request->searchDatasetEnable;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDataset',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 数据集管理-更新.
     *
     * @param request - UpdateDatasetRequest
     *
     * @returns UpdateDatasetResponse
     *
     * @param UpdateDatasetRequest $request
     *
     * @return UpdateDatasetResponse
     */
    public function updateDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetWithOptions($request, $runtime);
    }

    /**
     * 修改数据集文档.
     *
     * @param tmpReq - UpdateDatasetDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDatasetDocumentResponse
     *
     * @param UpdateDatasetDocumentRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDatasetDocumentResponse
     */
    public function updateDatasetDocumentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateDatasetDocumentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->document) {
            $request->documentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->document, 'Document', 'json');
        }

        $body = [];
        if (null !== $request->datasetId) {
            @$body['DatasetId'] = $request->datasetId;
        }

        if (null !== $request->datasetName) {
            @$body['DatasetName'] = $request->datasetName;
        }

        if (null !== $request->documentShrink) {
            @$body['Document'] = $request->documentShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDatasetDocument',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改数据集文档.
     *
     * @param request - UpdateDatasetDocumentRequest
     *
     * @returns UpdateDatasetDocumentResponse
     *
     * @param UpdateDatasetDocumentRequest $request
     *
     * @return UpdateDatasetDocumentResponse
     */
    public function updateDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * 文档管理-更新。
     *
     * @param tmpReq - UpdateGeneratedContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGeneratedContentResponse
     *
     * @param UpdateGeneratedContentRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateGeneratedContentResponse
     */
    public function updateGeneratedContentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateGeneratedContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keywords) {
            $request->keywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentText) {
            @$body['ContentText'] = $request->contentText;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->keywordsShrink) {
            @$body['Keywords'] = $request->keywordsShrink;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGeneratedContent',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档管理-更新。
     *
     * @param request - UpdateGeneratedContentRequest
     *
     * @returns UpdateGeneratedContentResponse
     *
     * @param UpdateGeneratedContentRequest $request
     *
     * @return UpdateGeneratedContentResponse
     */
    public function updateGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * 根据ID更新素材.
     *
     * @param tmpReq - UpdateMaterialDocumentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMaterialDocumentResponse
     *
     * @param UpdateMaterialDocumentRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocumentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMaterialDocumentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docKeywords) {
            $request->docKeywordsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docKeywords, 'DocKeywords', 'json');
        }

        $query = [];
        if (null !== $request->agentKey) {
            @$query['AgentKey'] = $request->agentKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->author) {
            @$body['Author'] = $request->author;
        }

        if (null !== $request->docKeywordsShrink) {
            @$body['DocKeywords'] = $request->docKeywordsShrink;
        }

        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->externalUrl) {
            @$body['ExternalUrl'] = $request->externalUrl;
        }

        if (null !== $request->htmlContent) {
            @$body['HtmlContent'] = $request->htmlContent;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->pubTime) {
            @$body['PubTime'] = $request->pubTime;
        }

        if (null !== $request->shareAttr) {
            @$body['ShareAttr'] = $request->shareAttr;
        }

        if (null !== $request->srcFrom) {
            @$body['SrcFrom'] = $request->srcFrom;
        }

        if (null !== $request->summary) {
            @$body['Summary'] = $request->summary;
        }

        if (null !== $request->textContent) {
            @$body['TextContent'] = $request->textContent;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMaterialDocument',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMaterialDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据ID更新素材.
     *
     * @param request - UpdateMaterialDocumentRequest
     *
     * @returns UpdateMaterialDocumentResponse
     *
     * @param UpdateMaterialDocumentRequest $request
     *
     * @return UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMaterialDocumentWithOptions($request, $runtime);
    }

    /**
     * 妙读上传书籍.
     *
     * @param tmpReq - UploadBookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadBookResponse
     *
     * @param UploadBookRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UploadBookResponse
     */
    public function uploadBookWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UploadBookShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docs) {
            $request->docsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docs, 'Docs', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->docsShrink) {
            @$body['Docs'] = $request->docsShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadBook',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadBookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读上传书籍.
     *
     * @param request - UploadBookRequest
     *
     * @returns UploadBookResponse
     *
     * @param UploadBookRequest $request
     *
     * @return UploadBookResponse
     */
    public function uploadBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadBookWithOptions($request, $runtime);
    }

    /**
     * 妙读上传文档接口.
     *
     * @param tmpReq - UploadDocRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadDocResponse
     *
     * @param UploadDocRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UploadDocResponse
     */
    public function uploadDocWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UploadDocShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->docs) {
            $request->docsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->docs, 'Docs', 'json');
        }

        $body = [];
        if (null !== $request->categoryId) {
            @$body['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->docsShrink) {
            @$body['Docs'] = $request->docsShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadDoc',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 妙读上传文档接口.
     *
     * @param request - UploadDocRequest
     *
     * @returns UploadDocResponse
     *
     * @param UploadDocRequest $request
     *
     * @return UploadDocResponse
     */
    public function uploadDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDocWithOptions($request, $runtime);
    }

    /**
     * 校验企业VOC上传模板
     *
     * @param request - ValidateUploadTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateUploadTemplateResponse
     *
     * @param ValidateUploadTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ValidateUploadTemplateResponse
     */
    public function validateUploadTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileKey) {
            @$body['FileKey'] = $request->fileKey;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateUploadTemplate',
            'version' => '2023-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateUploadTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验企业VOC上传模板
     *
     * @param request - ValidateUploadTemplateRequest
     *
     * @returns ValidateUploadTemplateResponse
     *
     * @param ValidateUploadTemplateRequest $request
     *
     * @return ValidateUploadTemplateResponse
     */
    public function validateUploadTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateUploadTemplateWithOptions($request, $runtime);
    }
}
