<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 添加文档到数据集
     *  *
     * @param AddDatasetDocumentRequest $tmpReq  AddDatasetDocumentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDatasetDocumentResponse AddDatasetDocumentResponse
     */
    public function addDatasetDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddDatasetDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->document)) {
            $request->documentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->document, 'Document', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->documentShrink)) {
            $body['Document'] = $request->documentShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddDatasetDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 添加文档到数据集
     *  *
     * @param AddDatasetDocumentRequest $request AddDatasetDocumentRequest
     *
     * @return AddDatasetDocumentResponse AddDatasetDocumentResponse
     */
    public function addDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 取消异步任务
     *  *
     * @param CancelAsyncTaskRequest $request CancelAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAsyncTaskResponse CancelAsyncTaskResponse
     */
    public function cancelAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 取消异步任务
     *  *
     * @param CancelAsyncTaskRequest $request CancelAsyncTaskRequest
     *
     * @return CancelAsyncTaskResponse CancelAsyncTaskResponse
     */
    public function cancelAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 清除所有干预内容
     *  *
     * @param ClearIntervenesRequest $request ClearIntervenesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ClearIntervenesResponse ClearIntervenesResponse
     */
    public function clearIntervenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ClearIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ClearIntervenesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 清除所有干预内容
     *  *
     * @param ClearIntervenesRequest $request ClearIntervenesRequest
     *
     * @return ClearIntervenesResponse ClearIntervenesResponse
     */
    public function clearIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearIntervenesWithOptions($request, $runtime);
    }

    /**
     * @summary 数据集管理-创建
     *  *
     * @param CreateDatasetRequest $tmpReq  CreateDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDatasetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDatasetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->datasetConfig)) {
            $request->datasetConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->documentHandleConfig)) {
            $request->documentHandleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documentHandleConfig, 'DocumentHandleConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetConfigShrink)) {
            $body['DatasetConfig'] = $request->datasetConfigShrink;
        }
        if (!Utils::isUnset($request->datasetDescription)) {
            $body['DatasetDescription'] = $request->datasetDescription;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->datasetType)) {
            $body['DatasetType'] = $request->datasetType;
        }
        if (!Utils::isUnset($request->documentHandleConfigShrink)) {
            $body['DocumentHandleConfig'] = $request->documentHandleConfigShrink;
        }
        if (!Utils::isUnset($request->searchDatasetEnable)) {
            $body['SearchDatasetEnable'] = $request->searchDatasetEnable;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 数据集管理-创建
     *  *
     * @param CreateDatasetRequest $request CreateDatasetRequest
     *
     * @return CreateDatasetResponse CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-创建
     *  *
     * @param CreateGeneratedContentRequest $tmpReq  CreateGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGeneratedContentResponse CreateGeneratedContentResponse
     */
    public function createGeneratedContentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateGeneratedContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->keywords)) {
            $request->keywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentDomain)) {
            $body['ContentDomain'] = $request->contentDomain;
        }
        if (!Utils::isUnset($request->contentText)) {
            $body['ContentText'] = $request->contentText;
        }
        if (!Utils::isUnset($request->keywordsShrink)) {
            $body['Keywords'] = $request->keywordsShrink;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGeneratedContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-创建
     *  *
     * @param CreateGeneratedContentRequest $request CreateGeneratedContentRequest
     *
     * @return CreateGeneratedContentResponse CreateGeneratedContentResponse
     */
    public function createGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 获取授权token
     *  *
     * @param CreateTokenRequest $request CreateTokenRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTokenResponse CreateTokenResponse
     */
    public function createTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取授权token
     *  *
     * @param CreateTokenRequest $request CreateTokenRequest
     *
     * @return CreateTokenResponse CreateTokenResponse
     */
    public function createToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自定义文本
     *  *
     * @param DeleteCustomTextRequest $request DeleteCustomTextRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomTextResponse DeleteCustomTextResponse
     */
    public function deleteCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义文本
     *  *
     * @param DeleteCustomTextRequest $request DeleteCustomTextRequest
     *
     * @return DeleteCustomTextResponse DeleteCustomTextResponse
     */
    public function deleteCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 根据主题删除自定义主题事件
     *  *
     * @param DeleteCustomTopicByTopicRequest $request DeleteCustomTopicByTopicRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomTopicByTopicResponse DeleteCustomTopicByTopicResponse
     */
    public function deleteCustomTopicByTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCustomTopicByTopicResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomTopicByTopicResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据主题删除自定义主题事件
     *  *
     * @param DeleteCustomTopicByTopicRequest $request DeleteCustomTopicByTopicRequest
     *
     * @return DeleteCustomTopicByTopicResponse DeleteCustomTopicByTopicResponse
     */
    public function deleteCustomTopicByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTopicByTopicWithOptions($request, $runtime);
    }

    /**
     * @summary 根据自定义观点ID删除自定义观点
     *  *
     * @param DeleteCustomTopicViewPointByIdRequest $request DeleteCustomTopicViewPointByIdRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomTopicViewPointByIdResponse DeleteCustomTopicViewPointByIdResponse
     */
    public function deleteCustomTopicViewPointByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->customViewPointId)) {
            $body['CustomViewPointId'] = $request->customViewPointId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCustomTopicViewPointByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomTopicViewPointByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据自定义观点ID删除自定义观点
     *  *
     * @param DeleteCustomTopicViewPointByIdRequest $request DeleteCustomTopicViewPointByIdRequest
     *
     * @return DeleteCustomTopicViewPointByIdResponse DeleteCustomTopicViewPointByIdResponse
     */
    public function deleteCustomTopicViewPointById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTopicViewPointByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 数据集管理-删除
     *  *
     * @param DeleteDatasetRequest $request DeleteDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 数据集管理-删除
     *  *
     * @param DeleteDatasetRequest $request DeleteDatasetRequest
     *
     * @return DeleteDatasetResponse DeleteDatasetResponse
     */
    public function deleteDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 删除数据集文档
     *  *
     * @param DeleteDatasetDocumentRequest $request DeleteDatasetDocumentRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDatasetDocumentResponse DeleteDatasetDocumentResponse
     */
    public function deleteDatasetDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->docUuid)) {
            $body['DocUuid'] = $request->docUuid;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除数据集文档
     *  *
     * @param DeleteDatasetDocumentRequest $request DeleteDatasetDocumentRequest
     *
     * @return DeleteDatasetDocumentResponse DeleteDatasetDocumentResponse
     */
    public function deleteDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读删除多个文档
     *  *
     * @param DeleteDocsRequest $tmpReq  DeleteDocsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDocsResponse DeleteDocsResponse
     */
    public function deleteDocsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDocsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docIds)) {
            $request->docIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docIds, 'DocIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->docIdsShrink)) {
            $body['DocIds'] = $request->docIdsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteDocsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDocsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读删除多个文档
     *  *
     * @param DeleteDocsRequest $request DeleteDocsRequest
     *
     * @return DeleteDocsResponse DeleteDocsResponse
     */
    public function deleteDocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDocsWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-删除。
     *  *
     * @param DeleteGeneratedContentRequest $request DeleteGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGeneratedContentResponse DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGeneratedContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-删除。
     *  *
     * @param DeleteGeneratedContentRequest $request DeleteGeneratedContentRequest
     *
     * @return DeleteGeneratedContentResponse DeleteGeneratedContentResponse
     */
    public function deleteGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除干预规则
     *  *
     * @param DeleteInterveneRuleRequest $request DeleteInterveneRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInterveneRuleResponse DeleteInterveneRuleResponse
     */
    public function deleteInterveneRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteInterveneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInterveneRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除干预规则
     *  *
     * @param DeleteInterveneRuleRequest $request DeleteInterveneRuleRequest
     *
     * @return DeleteInterveneRuleResponse DeleteInterveneRuleResponse
     */
    public function deleteInterveneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInterveneRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID删除素材
     *  *
     * @param DeleteMaterialByIdRequest $request DeleteMaterialByIdRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMaterialByIdResponse DeleteMaterialByIdResponse
     */
    public function deleteMaterialByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMaterialByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMaterialByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据ID删除素材
     *  *
     * @param DeleteMaterialByIdRequest $request DeleteMaterialByIdRequest
     *
     * @return DeleteMaterialByIdResponse DeleteMaterialByIdResponse
     */
    public function deleteMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 从链接中提取文档内容
     *  *
     * @param DocumentExtractionRequest $tmpReq  DocumentExtractionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DocumentExtractionResponse DocumentExtractionResponse
     */
    public function documentExtractionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DocumentExtractionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->urls)) {
            $request->urlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->urls, 'Urls', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->urlsShrink)) {
            $body['Urls'] = $request->urlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DocumentExtractionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DocumentExtractionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 从链接中提取文档内容
     *  *
     * @param DocumentExtractionRequest $request DocumentExtractionRequest
     *
     * @return DocumentExtractionResponse DocumentExtractionResponse
     */
    public function documentExtraction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->documentExtractionWithOptions($request, $runtime);
    }

    /**
     * @summary 导出企业VOC分析任务明细列表
     *  *
     * @param ExportAnalysisTagDetailByTaskIdRequest $tmpReq  ExportAnalysisTagDetailByTaskIdRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportAnalysisTagDetailByTaskIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categories)) {
            $request->categoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoriesShrink)) {
            $body['Categories'] = $request->categoriesShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExportAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportAnalysisTagDetailByTaskIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 导出企业VOC分析任务明细列表
     *  *
     * @param ExportAnalysisTagDetailByTaskIdRequest $request ExportAnalysisTagDetailByTaskIdRequest
     *
     * @return ExportAnalysisTagDetailByTaskIdResponse ExportAnalysisTagDetailByTaskIdResponse
     */
    public function exportAnalysisTagDetailByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportAnalysisTagDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-导出。
     *  *
     * @param ExportGeneratedContentRequest $request ExportGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportGeneratedContentResponse ExportGeneratedContentResponse
     */
    public function exportGeneratedContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExportGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportGeneratedContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-导出。
     *  *
     * @param ExportGeneratedContentRequest $request ExportGeneratedContentRequest
     *
     * @return ExportGeneratedContentResponse ExportGeneratedContentResponse
     */
    public function exportGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 导出选题策划文档，响应为一个可公开访问的URL。一小时后失效
     *  *
     * @param ExportHotTopicPlanningProposalsRequest $tmpReq  ExportHotTopicPlanningProposalsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportHotTopicPlanningProposalsResponse ExportHotTopicPlanningProposalsResponse
     */
    public function exportHotTopicPlanningProposalsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportHotTopicPlanningProposalsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customViewPointIds)) {
            $request->customViewPointIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customViewPointIds, 'CustomViewPointIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->titles)) {
            $request->titlesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->titles, 'Titles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->customViewPointIdsShrink)) {
            $body['CustomViewPointIds'] = $request->customViewPointIdsShrink;
        }
        if (!Utils::isUnset($request->exportType)) {
            $body['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->titlesShrink)) {
            $body['Titles'] = $request->titlesShrink;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        if (!Utils::isUnset($request->viewPointType)) {
            $body['ViewPointType'] = $request->viewPointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExportHotTopicPlanningProposalsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportHotTopicPlanningProposalsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 导出选题策划文档，响应为一个可公开访问的URL。一小时后失效
     *  *
     * @param ExportHotTopicPlanningProposalsRequest $request ExportHotTopicPlanningProposalsRequest
     *
     * @return ExportHotTopicPlanningProposalsResponse ExportHotTopicPlanningProposalsResponse
     */
    public function exportHotTopicPlanningProposals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportHotTopicPlanningProposalsWithOptions($request, $runtime);
    }

    /**
     * @summary 导出所有干预内容
     *  *
     * @param ExportIntervenesRequest $request ExportIntervenesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportIntervenesResponse ExportIntervenesResponse
     */
    public function exportIntervenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExportIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportIntervenesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 导出所有干预内容
     *  *
     * @param ExportIntervenesRequest $request ExportIntervenesRequest
     *
     * @return ExportIntervenesResponse ExportIntervenesResponse
     */
    public function exportIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportIntervenesWithOptions($request, $runtime);
    }

    /**
     * @summary 反馈某次生成的结果
     *  *
     * @param FeedbackDialogueRequest $tmpReq  FeedbackDialogueRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FeedbackDialogueResponse FeedbackDialogueResponse
     */
    public function feedbackDialogueWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FeedbackDialogueShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ratingTags)) {
            $request->ratingTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ratingTags, 'RatingTags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->customerResponse)) {
            $body['CustomerResponse'] = $request->customerResponse;
        }
        if (!Utils::isUnset($request->goodText)) {
            $body['GoodText'] = $request->goodText;
        }
        if (!Utils::isUnset($request->modifiedResponse)) {
            $body['ModifiedResponse'] = $request->modifiedResponse;
        }
        if (!Utils::isUnset($request->rating)) {
            $body['Rating'] = $request->rating;
        }
        if (!Utils::isUnset($request->ratingTagsShrink)) {
            $body['RatingTags'] = $request->ratingTagsShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return FeedbackDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FeedbackDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 反馈某次生成的结果
     *  *
     * @param FeedbackDialogueRequest $request FeedbackDialogueRequest
     *
     * @return FeedbackDialogueResponse FeedbackDialogueResponse
     */
    public function feedbackDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->feedbackDialogueWithOptions($request, $runtime);
    }

    /**
     * @summary 获取图片任务执行结果
     *  *
     * @param FetchImageTaskRequest $tmpReq  FetchImageTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchImageTaskResponse FetchImageTaskResponse
     */
    public function fetchImageTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FetchImageTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskIdList)) {
            $request->taskIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskIdList, 'TaskIdList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->articleTaskId)) {
            $body['ArticleTaskId'] = $request->articleTaskId;
        }
        if (!Utils::isUnset($request->taskIdListShrink)) {
            $body['TaskIdList'] = $request->taskIdListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return FetchImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FetchImageTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取图片任务执行结果
     *  *
     * @param FetchImageTaskRequest $request FetchImageTaskRequest
     *
     * @return FetchImageTaskResponse FetchImageTaskResponse
     */
    public function fetchImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchImageTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 生成临时可访问的公开url
     *  *
     * @param GenerateFileUrlByKeyRequest $request GenerateFileUrlByKeyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateFileUrlByKeyResponse GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateFileUrlByKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateFileUrlByKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 生成临时可访问的公开url
     *  *
     * @param GenerateFileUrlByKeyRequest $request GenerateFileUrlByKeyRequest
     *
     * @return GenerateFileUrlByKeyResponse GenerateFileUrlByKeyResponse
     */
    public function generateFileUrlByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateFileUrlByKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 智能配图，图片生成任务
     *  *
     * @param GenerateImageTaskRequest $tmpReq  GenerateImageTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateImageTaskResponse GenerateImageTaskResponse
     */
    public function generateImageTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateImageTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->paragraphList)) {
            $request->paragraphListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->paragraphList, 'ParagraphList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->articleTaskId)) {
            $body['ArticleTaskId'] = $request->articleTaskId;
        }
        if (!Utils::isUnset($request->paragraphListShrink)) {
            $body['ParagraphList'] = $request->paragraphListShrink;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->style)) {
            $body['Style'] = $request->style;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateImageTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateImageTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 智能配图，图片生成任务
     *  *
     * @param GenerateImageTaskRequest $request GenerateImageTaskRequest
     *
     * @return GenerateImageTaskResponse GenerateImageTaskResponse
     */
    public function generateImageTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateImageTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 生成上传配置
     *  *
     * @param GenerateUploadConfigRequest $request GenerateUploadConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateUploadConfigResponse GenerateUploadConfigResponse
     */
    public function generateUploadConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->parentDir)) {
            $body['ParentDir'] = $request->parentDir;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateUploadConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateUploadConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 生成上传配置
     *  *
     * @param GenerateUploadConfigRequest $request GenerateUploadConfigRequest
     *
     * @return GenerateUploadConfigResponse GenerateUploadConfigResponse
     */
    public function generateUploadConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 视角生成
     *  *
     * @param GenerateViewPointRequest $tmpReq  GenerateViewPointRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateViewPointResponse GenerateViewPointResponse
     */
    public function generateViewPointWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateViewPointShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateViewPointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateViewPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 视角生成
     *  *
     * @param GenerateViewPointRequest $request GenerateViewPointRequest
     *
     * @return GenerateViewPointResponse GenerateViewPointResponse
     */
    public function generateViewPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateViewPointWithOptions($request, $runtime);
    }

    /**
     * @summary 获取某次标签挖掘结果分类
     *  *
     * @param GetCategoriesByTaskIdRequest $request GetCategoriesByTaskIdRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCategoriesByTaskIdResponse GetCategoriesByTaskIdResponse
     */
    public function getCategoriesByTaskIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCategoriesByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCategoriesByTaskIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取某次标签挖掘结果分类
     *  *
     * @param GetCategoriesByTaskIdRequest $request GetCategoriesByTaskIdRequest
     *
     * @return GetCategoriesByTaskIdResponse GetCategoriesByTaskIdResponse
     */
    public function getCategoriesByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取自定义播报单任务结果
     *  *
     * @param GetCustomHotTopicBroadcastJobRequest $request GetCustomHotTopicBroadcastJobRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomHotTopicBroadcastJobResponse GetCustomHotTopicBroadcastJobResponse
     */
    public function getCustomHotTopicBroadcastJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCustomHotTopicBroadcastJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomHotTopicBroadcastJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义播报单任务结果
     *  *
     * @param GetCustomHotTopicBroadcastJobRequest $request GetCustomHotTopicBroadcastJobRequest
     *
     * @return GetCustomHotTopicBroadcastJobResponse GetCustomHotTopicBroadcastJobResponse
     */
    public function getCustomHotTopicBroadcastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomHotTopicBroadcastJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取自定义文本
     *  *
     * @param GetCustomTextRequest $request GetCustomTextRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomTextResponse GetCustomTextResponse
     */
    public function getCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义文本
     *  *
     * @param GetCustomTextRequest $request GetCustomTextRequest
     *
     * @return GetCustomTextResponse GetCustomTextResponse
     */
    public function getCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 获取自定义选题视角分析任务结果
     *  *
     * @param GetCustomTopicSelectionPerspectiveAnalysisTaskRequest $request GetCustomTopicSelectionPerspectiveAnalysisTaskRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse GetCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义选题视角分析任务结果
     *  *
     * @param GetCustomTopicSelectionPerspectiveAnalysisTaskRequest $request GetCustomTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @return GetCustomTopicSelectionPerspectiveAnalysisTaskResponse GetCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getCustomTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统数据源配置和个人配置
     *  *
     * @param GetDataSourceOrderConfigRequest $request GetDataSourceOrderConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDataSourceOrderConfigResponse GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDataSourceOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDataSourceOrderConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取系统数据源配置和个人配置
     *  *
     * @param GetDataSourceOrderConfigRequest $request GetDataSourceOrderConfigRequest
     *
     * @return GetDataSourceOrderConfigResponse GetDataSourceOrderConfigResponse
     */
    public function getDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 数据集管理-详情
     *  *
     * @param GetDatasetRequest $request GetDatasetRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatasetResponse GetDatasetResponse
     */
    public function getDatasetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 数据集管理-详情
     *  *
     * @param GetDatasetRequest $request GetDatasetRequest
     *
     * @return GetDatasetResponse GetDatasetResponse
     */
    public function getDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 获取数据集文档
     *  *
     * @param GetDatasetDocumentRequest $request GetDatasetDocumentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDatasetDocumentResponse GetDatasetDocumentResponse
     */
    public function getDatasetDocumentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->docUuid)) {
            $body['DocUuid'] = $request->docUuid;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取数据集文档
     *  *
     * @param GetDatasetDocumentRequest $request GetDatasetDocumentRequest
     *
     * @return GetDatasetDocumentResponse GetDatasetDocumentResponse
     */
    public function getDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 获取文档聚合任务结果
     *  *
     * @param GetDocClusterTaskRequest $request GetDocClusterTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocClusterTaskResponse GetDocClusterTaskResponse
     */
    public function getDocClusterTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDocClusterTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocClusterTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取文档聚合任务结果
     *  *
     * @param GetDocClusterTaskRequest $request GetDocClusterTaskRequest
     *
     * @return GetDocClusterTaskResponse GetDocClusterTaskResponse
     */
    public function getDocClusterTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocClusterTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读获取文档信息
     *  *
     * @param GetDocInfoRequest $request GetDocInfoRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDocInfoResponse GetDocInfoResponse
     */
    public function getDocInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDocInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读获取文档信息
     *  *
     * @param GetDocInfoRequest $request GetDocInfoRequest
     *
     * @return GetDocInfoResponse GetDocInfoResponse
     */
    public function getDocInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDocInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取企业VOC分析任务结果
     *  *
     * @param GetEnterpriseVocAnalysisTaskRequest $request GetEnterpriseVocAnalysisTaskRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEnterpriseVocAnalysisTaskResponse GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEnterpriseVocAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取企业VOC分析任务结果
     *  *
     * @param GetEnterpriseVocAnalysisTaskRequest $request GetEnterpriseVocAnalysisTaskRequest
     *
     * @return GetEnterpriseVocAnalysisTaskResponse GetEnterpriseVocAnalysisTaskResponse
     */
    public function getEnterpriseVocAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseVocAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-查询详情。
     *  *
     * @param GetGeneratedContentRequest $request GetGeneratedContentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGeneratedContentResponse GetGeneratedContentResponse
     */
    public function getGeneratedContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGeneratedContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-查询详情。
     *  *
     * @param GetGeneratedContentRequest $request GetGeneratedContentRequest
     *
     * @return GetGeneratedContentResponse GetGeneratedContentResponse
     */
    public function getGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 查询新闻播报单
     *  *
     * @param GetHotTopicBroadcastRequest $tmpReq  GetHotTopicBroadcastRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotTopicBroadcastResponse GetHotTopicBroadcastResponse
     */
    public function getHotTopicBroadcastWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotTopicBroadcastShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->stepForCustomSummaryStyleConfig)) {
            $request->stepForCustomSummaryStyleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stepForCustomSummaryStyleConfig, 'StepForCustomSummaryStyleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->stepForNewsBroadcastContentConfig)) {
            $request->stepForNewsBroadcastContentConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stepForNewsBroadcastContentConfig, 'StepForNewsBroadcastContentConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->topics)) {
            $request->topicsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calcTotalToken)) {
            $body['CalcTotalToken'] = $request->calcTotalToken;
        }
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->hotTopicVersion)) {
            $body['HotTopicVersion'] = $request->hotTopicVersion;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->stepForCustomSummaryStyleConfigShrink)) {
            $body['StepForCustomSummaryStyleConfig'] = $request->stepForCustomSummaryStyleConfigShrink;
        }
        if (!Utils::isUnset($request->stepForNewsBroadcastContentConfigShrink)) {
            $body['StepForNewsBroadcastContentConfig'] = $request->stepForNewsBroadcastContentConfigShrink;
        }
        if (!Utils::isUnset($request->topicsShrink)) {
            $body['Topics'] = $request->topicsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetHotTopicBroadcastResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHotTopicBroadcastResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询新闻播报单
     *  *
     * @param GetHotTopicBroadcastRequest $request GetHotTopicBroadcastRequest
     *
     * @return GetHotTopicBroadcastResponse GetHotTopicBroadcastResponse
     */
    public function getHotTopicBroadcast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotTopicBroadcastWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预全局回复
     *  *
     * @param GetInterveneGlobalReplyRequest $request GetInterveneGlobalReplyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneGlobalReplyResponse GetInterveneGlobalReplyResponse
     */
    public function getInterveneGlobalReplyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetInterveneGlobalReplyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInterveneGlobalReplyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得干预全局回复
     *  *
     * @param GetInterveneGlobalReplyRequest $request GetInterveneGlobalReplyRequest
     *
     * @return GetInterveneGlobalReplyResponse GetInterveneGlobalReplyResponse
     */
    public function getInterveneGlobalReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneGlobalReplyWithOptions($request, $runtime);
    }

    /**
     * @summary 获得导入任务信息
     *  *
     * @param GetInterveneImportTaskInfoRequest $request GetInterveneImportTaskInfoRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneImportTaskInfoResponse GetInterveneImportTaskInfoResponse
     */
    public function getInterveneImportTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetInterveneImportTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInterveneImportTaskInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得导入任务信息
     *  *
     * @param GetInterveneImportTaskInfoRequest $request GetInterveneImportTaskInfoRequest
     *
     * @return GetInterveneImportTaskInfoResponse GetInterveneImportTaskInfoResponse
     */
    public function getInterveneImportTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneImportTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预项规则详情
     *  *
     * @param GetInterveneRuleDetailRequest $request GetInterveneRuleDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneRuleDetailResponse GetInterveneRuleDetailResponse
     */
    public function getInterveneRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetInterveneRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInterveneRuleDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得干预项规则详情
     *  *
     * @param GetInterveneRuleDetailRequest $request GetInterveneRuleDetailRequest
     *
     * @return GetInterveneRuleDetailResponse GetInterveneRuleDetailResponse
     */
    public function getInterveneRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预导入模版文件下载地址
     *  *
     * @param GetInterveneTemplateFileUrlRequest $request GetInterveneTemplateFileUrlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInterveneTemplateFileUrlResponse GetInterveneTemplateFileUrlResponse
     */
    public function getInterveneTemplateFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetInterveneTemplateFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInterveneTemplateFileUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得干预导入模版文件下载地址
     *  *
     * @param GetInterveneTemplateFileUrlRequest $request GetInterveneTemplateFileUrlRequest
     *
     * @return GetInterveneTemplateFileUrlResponse GetInterveneTemplateFileUrlResponse
     */
    public function getInterveneTemplateFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInterveneTemplateFileUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID获取素材内容
     *  *
     * @param GetMaterialByIdRequest $request GetMaterialByIdRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMaterialByIdResponse GetMaterialByIdResponse
     */
    public function getMaterialByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMaterialByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMaterialByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据ID获取素材内容
     *  *
     * @param GetMaterialByIdRequest $request GetMaterialByIdRequest
     *
     * @return GetMaterialByIdResponse GetMaterialByIdResponse
     */
    public function getMaterialById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaterialByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取当前用户的配置
     *  *
     * @param GetPropertiesRequest $request GetPropertiesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPropertiesResponse GetPropertiesResponse
     */
    public function getPropertiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPropertiesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取当前用户的配置
     *  *
     * @param GetPropertiesRequest $request GetPropertiesRequest
     *
     * @return GetPropertiesResponse GetPropertiesResponse
     */
    public function getProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPropertiesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询一键成片剪辑任务
     *  *
     * @param GetSmartClipTaskRequest $request GetSmartClipTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSmartClipTaskResponse GetSmartClipTaskResponse
     */
    public function getSmartClipTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSmartClipTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSmartClipTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询一键成片剪辑任务
     *  *
     * @param GetSmartClipTaskRequest $request GetSmartClipTaskRequest
     *
     * @return GetSmartClipTaskResponse GetSmartClipTaskResponse
     */
    public function getSmartClipTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartClipTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID获取热点事件信息
     *  *
     * @param GetTopicByIdRequest $request GetTopicByIdRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTopicByIdResponse GetTopicByIdResponse
     */
    public function getTopicByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTopicByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTopicByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据ID获取热点事件信息
     *  *
     * @param GetTopicByIdRequest $request GetTopicByIdRequest
     *
     * @return GetTopicByIdResponse GetTopicByIdResponse
     */
    public function getTopicById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取选题视角分析任务结果
     *  *
     * @param GetTopicSelectionPerspectiveAnalysisTaskRequest $request GetTopicSelectionPerspectiveAnalysisTaskRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTopicSelectionPerspectiveAnalysisTaskResponse GetTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取选题视角分析任务结果
     *  *
     * @param GetTopicSelectionPerspectiveAnalysisTaskRequest $request GetTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @return GetTopicSelectionPerspectiveAnalysisTaskResponse GetTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function getTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 导入干预文件
     *  *
     * @param ImportInterveneFileRequest $request ImportInterveneFileRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportInterveneFileResponse ImportInterveneFileResponse
     */
    public function importInterveneFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->docName)) {
            $body['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ImportInterveneFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportInterveneFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 导入干预文件
     *  *
     * @param ImportInterveneFileRequest $request ImportInterveneFileRequest
     *
     * @return ImportInterveneFileResponse ImportInterveneFileResponse
     */
    public function importInterveneFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importInterveneFileWithOptions($request, $runtime);
    }

    /**
     * @summary 异步导入干预文件
     *  *
     * @param ImportInterveneFileAsyncRequest $request ImportInterveneFileAsyncRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportInterveneFileAsyncResponse ImportInterveneFileAsyncResponse
     */
    public function importInterveneFileAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->docName)) {
            $body['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ImportInterveneFileAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportInterveneFileAsyncResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 异步导入干预文件
     *  *
     * @param ImportInterveneFileAsyncRequest $request ImportInterveneFileAsyncRequest
     *
     * @return ImportInterveneFileAsyncResponse ImportInterveneFileAsyncResponse
     */
    public function importInterveneFileAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importInterveneFileAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary 设置干预全局回复
     *  *
     * @param InsertInterveneGlobalReplyRequest $tmpReq  InsertInterveneGlobalReplyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertInterveneGlobalReplyResponse InsertInterveneGlobalReplyResponse
     */
    public function insertInterveneGlobalReplyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertInterveneGlobalReplyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->replyMessagList)) {
            $request->replyMessagListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->replyMessagList, 'ReplyMessagList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->replyMessagListShrink)) {
            $body['ReplyMessagList'] = $request->replyMessagListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InsertInterveneGlobalReplyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InsertInterveneGlobalReplyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 设置干预全局回复
     *  *
     * @param InsertInterveneGlobalReplyRequest $request InsertInterveneGlobalReplyRequest
     *
     * @return InsertInterveneGlobalReplyResponse InsertInterveneGlobalReplyResponse
     */
    public function insertInterveneGlobalReply($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInterveneGlobalReplyWithOptions($request, $runtime);
    }

    /**
     * @summary 插入干预规则
     *  *
     * @param InsertInterveneRuleRequest $tmpReq  InsertInterveneRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertInterveneRuleResponse InsertInterveneRuleResponse
     */
    public function insertInterveneRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertInterveneRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->interveneRuleConfig)) {
            $request->interveneRuleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->interveneRuleConfig, 'InterveneRuleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->interveneRuleConfigShrink)) {
            $body['InterveneRuleConfig'] = $request->interveneRuleConfigShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InsertInterveneRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InsertInterveneRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 插入干预规则
     *  *
     * @param InsertInterveneRuleRequest $request InsertInterveneRuleRequest
     *
     * @return InsertInterveneRuleResponse InsertInterveneRuleResponse
     */
    public function insertInterveneRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertInterveneRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 分页获取企业VOC分析任务明细列表
     *  *
     * @param ListAnalysisTagDetailByTaskIdRequest $tmpReq  ListAnalysisTagDetailByTaskIdRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnalysisTagDetailByTaskIdResponse ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskIdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAnalysisTagDetailByTaskIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categories)) {
            $request->categoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoriesShrink)) {
            $body['Categories'] = $request->categoriesShrink;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAnalysisTagDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAnalysisTagDetailByTaskIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 分页获取企业VOC分析任务明细列表
     *  *
     * @param ListAnalysisTagDetailByTaskIdRequest $request ListAnalysisTagDetailByTaskIdRequest
     *
     * @return ListAnalysisTagDetailByTaskIdResponse ListAnalysisTagDetailByTaskIdResponse
     */
    public function listAnalysisTagDetailByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnalysisTagDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListAsyncTasksRequest $tmpReq  ListAsyncTasksRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAsyncTasksResponse ListAsyncTasksResponse
     */
    public function listAsyncTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAsyncTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskStatusList)) {
            $request->taskStatusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskStatusList, 'TaskStatusList', 'json');
        }
        if (!Utils::isUnset($tmpReq->taskTypeList)) {
            $request->taskTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskTypeList, 'TaskTypeList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->taskCode)) {
            $body['TaskCode'] = $request->taskCode;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->taskStatusListShrink)) {
            $body['TaskStatusList'] = $request->taskStatusListShrink;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->taskTypeListShrink)) {
            $body['TaskTypeList'] = $request->taskTypeListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAsyncTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAsyncTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListAsyncTasksRequest $request ListAsyncTasksRequest
     *
     * @return ListAsyncTasksResponse ListAsyncTasksResponse
     */
    public function listAsyncTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAsyncTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统自定义预设
     *  *
     * @param ListBuildConfigsRequest $request ListBuildConfigsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBuildConfigsResponse ListBuildConfigsResponse
     */
    public function listBuildConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListBuildConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListBuildConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取系统自定义预设
     *  *
     * @param ListBuildConfigsRequest $request ListBuildConfigsRequest
     *
     * @return ListBuildConfigsResponse ListBuildConfigsResponse
     */
    public function listBuildConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBuildConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义文本列表
     *  *
     * @param ListCustomTextRequest $request ListCustomTextRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomTextResponse ListCustomTextResponse
     */
    public function listCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 自定义文本列表
     *  *
     * @param ListCustomTextRequest $request ListCustomTextRequest
     *
     * @return ListCustomTextResponse ListCustomTextResponse
     */
    public function listCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义视角列表
     *  *
     * @param ListCustomViewPointsRequest $tmpReq  ListCustomViewPointsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomViewPointsResponse ListCustomViewPointsResponse
     */
    public function listCustomViewPointsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCustomViewPointsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->attitudes)) {
            $request->attitudesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attitudes, 'Attitudes', 'json');
        }
        if (!Utils::isUnset($tmpReq->customViewPointIds)) {
            $request->customViewPointIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customViewPointIds, 'CustomViewPointIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->attitude)) {
            $body['Attitude'] = $request->attitude;
        }
        if (!Utils::isUnset($request->attitudesShrink)) {
            $body['Attitudes'] = $request->attitudesShrink;
        }
        if (!Utils::isUnset($request->customViewPointId)) {
            $body['CustomViewPointId'] = $request->customViewPointId;
        }
        if (!Utils::isUnset($request->customViewPointIdsShrink)) {
            $body['CustomViewPointIds'] = $request->customViewPointIdsShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicId)) {
            $body['TopicId'] = $request->topicId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCustomViewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomViewPointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 自定义视角列表
     *  *
     * @param ListCustomViewPointsRequest $request ListCustomViewPointsRequest
     *
     * @return ListCustomViewPointsResponse ListCustomViewPointsResponse
     */
    public function listCustomViewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomViewPointsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询数据集文档列表
     *  *
     * @param ListDatasetDocumentsRequest $tmpReq  ListDatasetDocumentsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatasetDocumentsResponse ListDatasetDocumentsResponse
     */
    public function listDatasetDocumentsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDatasetDocumentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->excludeFields)) {
            $request->excludeFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->excludeFields, 'ExcludeFields', 'json');
        }
        if (!Utils::isUnset($tmpReq->includeFields)) {
            $request->includeFieldsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->includeFields, 'IncludeFields', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetDescription)) {
            $body['DatasetDescription'] = $request->datasetDescription;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->excludeFieldsShrink)) {
            $body['ExcludeFields'] = $request->excludeFieldsShrink;
        }
        if (!Utils::isUnset($request->includeFieldsShrink)) {
            $body['IncludeFields'] = $request->includeFieldsShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDatasetDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetDocumentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询数据集文档列表
     *  *
     * @param ListDatasetDocumentsRequest $request ListDatasetDocumentsRequest
     *
     * @return ListDatasetDocumentsResponse ListDatasetDocumentsResponse
     */
    public function listDatasetDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetDocumentsWithOptions($request, $runtime);
    }

    /**
     * @summary 数据集管理-查询
     *  *
     * @param ListDatasetsRequest $request ListDatasetsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDatasetsResponse ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->datasetType)) {
            $body['DatasetType'] = $request->datasetType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchDatasetEnable)) {
            $body['SearchDatasetEnable'] = $request->searchDatasetEnable;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 数据集管理-查询
     *  *
     * @param ListDatasetsRequest $request ListDatasetsRequest
     *
     * @return ListDatasetsResponse ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasetsWithOptions($request, $runtime);
    }

    /**
     * @summary 生成历史列表
     *  *
     * @param ListDialoguesRequest $request ListDialoguesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDialoguesResponse ListDialoguesResponse
     */
    public function listDialoguesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->dialogueType)) {
            $body['DialogueType'] = $request->dialogueType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDialoguesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 生成历史列表
     *  *
     * @param ListDialoguesRequest $request ListDialoguesRequest
     *
     * @return ListDialoguesResponse ListDialoguesResponse
     */
    public function listDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialoguesWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读获取文档列表
     *  *
     * @param ListDocsRequest $tmpReq  ListDocsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDocsResponse ListDocsResponse
     */
    public function listDocsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDocsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->statuses)) {
            $request->statusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statuses, 'Statuses', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->docName)) {
            $body['DocName'] = $request->docName;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->statusesShrink)) {
            $body['Statuses'] = $request->statusesShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDocsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDocsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读获取文档列表
     *  *
     * @param ListDocsRequest $request ListDocsRequest
     *
     * @return ListDocsResponse ListDocsResponse
     */
    public function listDocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDocsWithOptions($request, $runtime);
    }

    /**
     * @summary 新颖视角列表
     *  *
     * @param ListFreshViewPointsRequest $request ListFreshViewPointsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFreshViewPointsResponse ListFreshViewPointsResponse
     */
    public function listFreshViewPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListFreshViewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFreshViewPointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 新颖视角列表
     *  *
     * @param ListFreshViewPointsRequest $request ListFreshViewPointsRequest
     *
     * @return ListFreshViewPointsResponse ListFreshViewPointsResponse
     */
    public function listFreshViewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFreshViewPointsWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-列表。
     *  *
     * @param ListGeneratedContentsRequest $request ListGeneratedContentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGeneratedContentsResponse ListGeneratedContentsResponse
     */
    public function listGeneratedContentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->contentDomain)) {
            $body['ContentDomain'] = $request->contentDomain;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListGeneratedContentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGeneratedContentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-列表。
     *  *
     * @param ListGeneratedContentsRequest $request ListGeneratedContentsRequest
     *
     * @return ListGeneratedContentsResponse ListGeneratedContentsResponse
     */
    public function listGeneratedContents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGeneratedContentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取分类的热点新闻
     *  *
     * @param ListHotNewsWithTypeRequest $tmpReq  ListHotNewsWithTypeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotNewsWithTypeResponse ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithTypeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotNewsWithTypeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->newsTypes)) {
            $request->newsTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->newsTypes, 'NewsTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->newsType)) {
            $body['NewsType'] = $request->newsType;
        }
        if (!Utils::isUnset($request->newsTypesShrink)) {
            $body['NewsTypes'] = $request->newsTypesShrink;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHotNewsWithTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHotNewsWithTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取分类的热点新闻
     *  *
     * @param ListHotNewsWithTypeRequest $request ListHotNewsWithTypeRequest
     *
     * @return ListHotNewsWithTypeResponse ListHotNewsWithTypeResponse
     */
    public function listHotNewsWithType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotNewsWithTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取所有平台热榜源列表
     *  *
     * @param ListHotSourcesRequest $request ListHotSourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotSourcesResponse ListHotSourcesResponse
     */
    public function listHotSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHotSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHotSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取所有平台热榜源列表
     *  *
     * @param ListHotSourcesRequest $request ListHotSourcesRequest
     *
     * @return ListHotSourcesResponse ListHotSourcesResponse
     */
    public function listHotSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取热点事件列表
     *  *
     * @param ListHotTopicsRequest $tmpReq  ListHotTopicsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotTopicsResponse ListHotTopicsResponse
     */
    public function listHotTopicsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotTopicsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->topicIds)) {
            $request->topicIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->topicIds, 'TopicIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->topics)) {
            $request->topicsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->topicIdsShrink)) {
            $body['TopicIds'] = $request->topicIdsShrink;
        }
        if (!Utils::isUnset($request->topicQuery)) {
            $body['TopicQuery'] = $request->topicQuery;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        if (!Utils::isUnset($request->topicVersion)) {
            $body['TopicVersion'] = $request->topicVersion;
        }
        if (!Utils::isUnset($request->topicsShrink)) {
            $body['Topics'] = $request->topicsShrink;
        }
        if (!Utils::isUnset($request->withNews)) {
            $body['WithNews'] = $request->withNews;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHotTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHotTopicsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取热点事件列表
     *  *
     * @param ListHotTopicsRequest $request ListHotTopicsRequest
     *
     * @return ListHotTopicsResponse ListHotTopicsResponse
     */
    public function listHotTopics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotTopicsWithOptions($request, $runtime);
    }

    /**
     * @summary 热门视角列表
     *  *
     * @param ListHotViewPointsRequest $request ListHotViewPointsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotViewPointsResponse ListHotViewPointsResponse
     */
    public function listHotViewPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHotViewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHotViewPointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 热门视角列表
     *  *
     * @param ListHotViewPointsRequest $request ListHotViewPointsRequest
     *
     * @return ListHotViewPointsResponse ListHotViewPointsResponse
     */
    public function listHotViewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotViewPointsWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预项目数量列表
     *  *
     * @param ListInterveneCntRequest $request ListInterveneCntRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterveneCntResponse ListInterveneCntResponse
     */
    public function listInterveneCntWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListInterveneCntResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInterveneCntResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得干预项目数量列表
     *  *
     * @param ListInterveneCntRequest $request ListInterveneCntRequest
     *
     * @return ListInterveneCntResponse ListInterveneCntResponse
     */
    public function listInterveneCnt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneCntWithOptions($request, $runtime);
    }

    /**
     * @summary 获得导入任务列表
     *  *
     * @param ListInterveneImportTasksRequest $request ListInterveneImportTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterveneImportTasksResponse ListInterveneImportTasksResponse
     */
    public function listInterveneImportTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListInterveneImportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInterveneImportTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得导入任务列表
     *  *
     * @param ListInterveneImportTasksRequest $request ListInterveneImportTasksRequest
     *
     * @return ListInterveneImportTasksResponse ListInterveneImportTasksResponse
     */
    public function listInterveneImportTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneImportTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预规则列表
     *  *
     * @param ListInterveneRulesRequest $request ListInterveneRulesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInterveneRulesResponse ListInterveneRulesResponse
     */
    public function listInterveneRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListInterveneRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInterveneRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得干预规则列表
     *  *
     * @param ListInterveneRulesRequest $request ListInterveneRulesRequest
     *
     * @return ListInterveneRulesResponse ListInterveneRulesResponse
     */
    public function listInterveneRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInterveneRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 获得干预项列表
     *  *
     * @param ListIntervenesRequest $request ListIntervenesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIntervenesResponse ListIntervenesResponse
     */
    public function listIntervenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->interveneType)) {
            $body['InterveneType'] = $request->interveneType;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListIntervenesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListIntervenesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获得干预项列表
     *  *
     * @param ListIntervenesRequest $request ListIntervenesRequest
     *
     * @return ListIntervenesResponse ListIntervenesResponse
     */
    public function listIntervenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIntervenesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询素材列表
     *  *
     * @param ListMaterialDocumentsRequest $tmpReq  ListMaterialDocumentsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMaterialDocumentsResponse ListMaterialDocumentsResponse
     */
    public function listMaterialDocumentsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMaterialDocumentsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docTypeList)) {
            $request->docTypeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docTypeList, 'DocTypeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->keywords)) {
            $request->keywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->createTimeEnd)) {
            $body['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $body['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->docTypeListShrink)) {
            $body['DocTypeList'] = $request->docTypeListShrink;
        }
        if (!Utils::isUnset($request->generatePublicUrl)) {
            $body['GeneratePublicUrl'] = $request->generatePublicUrl;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->keywordsShrink)) {
            $body['Keywords'] = $request->keywordsShrink;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->shareAttr)) {
            $body['ShareAttr'] = $request->shareAttr;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->updateTimeEnd)) {
            $body['UpdateTimeEnd'] = $request->updateTimeEnd;
        }
        if (!Utils::isUnset($request->updateTimeStart)) {
            $body['UpdateTimeStart'] = $request->updateTimeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMaterialDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMaterialDocumentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询素材列表
     *  *
     * @param ListMaterialDocumentsRequest $request ListMaterialDocumentsRequest
     *
     * @return ListMaterialDocumentsResponse ListMaterialDocumentsResponse
     */
    public function listMaterialDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMaterialDocumentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取选题策划列表
     *  *
     * @param ListPlanningProposalRequest $tmpReq  ListPlanningProposalRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPlanningProposalResponse ListPlanningProposalResponse
     */
    public function listPlanningProposalWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPlanningProposalShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customViewPointIds)) {
            $request->customViewPointIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customViewPointIds, 'CustomViewPointIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->titles)) {
            $request->titlesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->titles, 'Titles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->customViewPointId)) {
            $body['CustomViewPointId'] = $request->customViewPointId;
        }
        if (!Utils::isUnset($request->customViewPointIdsShrink)) {
            $body['CustomViewPointIds'] = $request->customViewPointIdsShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->titlesShrink)) {
            $body['Titles'] = $request->titlesShrink;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        if (!Utils::isUnset($request->topicVersion)) {
            $body['TopicVersion'] = $request->topicVersion;
        }
        if (!Utils::isUnset($request->viewPointType)) {
            $body['ViewPointType'] = $request->viewPointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPlanningProposalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPlanningProposalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取选题策划列表
     *  *
     * @param ListPlanningProposalRequest $request ListPlanningProposalRequest
     *
     * @return ListPlanningProposalResponse ListPlanningProposalResponse
     */
    public function listPlanningProposal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlanningProposalWithOptions($request, $runtime);
    }

    /**
     * @summary 查询搜索生成任务对话详情中数据列表
     *  *
     * @param ListSearchTaskDialogueDatasRequest $request ListSearchTaskDialogueDatasRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchTaskDialogueDatasResponse ListSearchTaskDialogueDatasResponse
     */
    public function listSearchTaskDialogueDatasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->includeContent)) {
            $body['IncludeContent'] = $request->includeContent;
        }
        if (!Utils::isUnset($request->multimodalSearchType)) {
            $body['MultimodalSearchType'] = $request->multimodalSearchType;
        }
        if (!Utils::isUnset($request->originalSessionId)) {
            $body['OriginalSessionId'] = $request->originalSessionId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->searchModel)) {
            $body['SearchModel'] = $request->searchModel;
        }
        if (!Utils::isUnset($request->searchModelDataValue)) {
            $body['SearchModelDataValue'] = $request->searchModelDataValue;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSearchTaskDialogueDatasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSearchTaskDialogueDatasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询搜索生成任务对话详情中数据列表
     *  *
     * @param ListSearchTaskDialogueDatasRequest $request ListSearchTaskDialogueDatasRequest
     *
     * @return ListSearchTaskDialogueDatasResponse ListSearchTaskDialogueDatasResponse
     */
    public function listSearchTaskDialogueDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchTaskDialogueDatasWithOptions($request, $runtime);
    }

    /**
     * @summary 查询妙搜搜索生成任务详情列表
     *  *
     * @param ListSearchTaskDialoguesRequest $request ListSearchTaskDialoguesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchTaskDialoguesResponse ListSearchTaskDialoguesResponse
     */
    public function listSearchTaskDialoguesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSearchTaskDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSearchTaskDialoguesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询妙搜搜索生成任务详情列表
     *  *
     * @param ListSearchTaskDialoguesRequest $request ListSearchTaskDialoguesRequest
     *
     * @return ListSearchTaskDialoguesResponse ListSearchTaskDialoguesResponse
     */
    public function listSearchTaskDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchTaskDialoguesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询妙搜搜索生成历史任务列表
     *  *
     * @param ListSearchTasksRequest $tmpReq  ListSearchTasksRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchTasksResponse ListSearchTasksResponse
     */
    public function listSearchTasksWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSearchTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dialogueTypes)) {
            $request->dialogueTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dialogueTypes, 'DialogueTypes', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dialogueTypesShrink)) {
            $body['DialogueTypes'] = $request->dialogueTypesShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSearchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSearchTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询妙搜搜索生成历史任务列表
     *  *
     * @param ListSearchTasksRequest $request ListSearchTasksRequest
     *
     * @return ListSearchTasksResponse ListSearchTasksResponse
     */
    public function listSearchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 获取文体学习分析结果列表
     *  *
     * @param ListStyleLearningResultRequest $request ListStyleLearningResultRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListStyleLearningResultResponse ListStyleLearningResultResponse
     */
    public function listStyleLearningResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->current)) {
            $body['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListStyleLearningResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListStyleLearningResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取文体学习分析结果列表
     *  *
     * @param ListStyleLearningResultRequest $request ListStyleLearningResultRequest
     *
     * @return ListStyleLearningResultResponse ListStyleLearningResultResponse
     */
    public function listStyleLearningResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStyleLearningResultWithOptions($request, $runtime);
    }

    /**
     * @summary 时效性视角列表
     *  *
     * @param ListTimedViewAttitudeRequest $request ListTimedViewAttitudeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTimedViewAttitudeResponse ListTimedViewAttitudeResponse
     */
    public function listTimedViewAttitudeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTimedViewAttitudeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTimedViewAttitudeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 时效性视角列表
     *  *
     * @param ListTimedViewAttitudeRequest $request ListTimedViewAttitudeRequest
     *
     * @return ListTimedViewAttitudeResponse ListTimedViewAttitudeResponse
     */
    public function listTimedViewAttitude($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTimedViewAttitudeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取热点推荐事件
     *  *
     * @param ListTopicRecommendEventListRequest $request ListTopicRecommendEventListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTopicRecommendEventListResponse ListTopicRecommendEventListResponse
     */
    public function listTopicRecommendEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTopicRecommendEventListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTopicRecommendEventListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取热点推荐事件
     *  *
     * @param ListTopicRecommendEventListRequest $request ListTopicRecommendEventListRequest
     *
     * @return ListTopicRecommendEventListResponse ListTopicRecommendEventListResponse
     */
    public function listTopicRecommendEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicRecommendEventListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取主题事件推荐观点列表
     *  *
     * @param ListTopicViewPointRecommendEventListRequest $request ListTopicViewPointRecommendEventListRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTopicViewPointRecommendEventListResponse ListTopicViewPointRecommendEventListResponse
     */
    public function listTopicViewPointRecommendEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTopicViewPointRecommendEventListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTopicViewPointRecommendEventListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取主题事件推荐观点列表
     *  *
     * @param ListTopicViewPointRecommendEventListRequest $request ListTopicViewPointRecommendEventListRequest
     *
     * @return ListTopicViewPointRecommendEventListResponse ListTopicViewPointRecommendEventListResponse
     */
    public function listTopicViewPointRecommendEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicViewPointRecommendEventListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取系统所有实例信息
     *  *
     * @param ListVersionsRequest $request ListVersionsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVersionsResponse ListVersionsResponse
     */
    public function listVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取系统所有实例信息
     *  *
     * @param ListVersionsRequest $request ListVersionsRequest
     *
     * @return ListVersionsResponse ListVersionsResponse
     */
    public function listVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary 网友视角列表
     *  *
     * @param ListWebReviewPointsRequest $request ListWebReviewPointsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWebReviewPointsResponse ListWebReviewPointsResponse
     */
    public function listWebReviewPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWebReviewPointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWebReviewPointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 网友视角列表
     *  *
     * @param ListWebReviewPointsRequest $request ListWebReviewPointsRequest
     *
     * @return ListWebReviewPointsResponse ListWebReviewPointsResponse
     */
    public function listWebReviewPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWebReviewPointsWithOptions($request, $runtime);
    }

    /**
     * @summary 根据taskId查询异步任务状态
     *  *
     * @param QueryAsyncTaskRequest $request QueryAsyncTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAsyncTaskResponse QueryAsyncTaskResponse
     */
    public function queryAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据taskId查询异步任务状态
     *  *
     * @param QueryAsyncTaskRequest $request QueryAsyncTaskRequest
     *
     * @return QueryAsyncTaskResponse QueryAsyncTaskResponse
     */
    public function queryAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 内容缩写
     *  *
     * @param RunAbbreviationContentRequest $request RunAbbreviationContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RunAbbreviationContentResponse RunAbbreviationContentResponse
     */
    public function runAbbreviationContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunAbbreviationContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunAbbreviationContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 内容缩写
     *  *
     * @param RunAbbreviationContentRequest $request RunAbbreviationContentRequest
     *
     * @return RunAbbreviationContentResponse RunAbbreviationContentResponse
     */
    public function runAbbreviationContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runAbbreviationContentWithOptions($request, $runtime);
    }

    /**
     * @summary 书籍导读接口
     *  *
     * @param RunBookIntroductionRequest $request RunBookIntroductionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RunBookIntroductionResponse RunBookIntroductionResponse
     */
    public function runBookIntroductionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->keyPointPrompt)) {
            $body['KeyPointPrompt'] = $request->keyPointPrompt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->summaryPrompt)) {
            $body['SummaryPrompt'] = $request->summaryPrompt;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunBookIntroductionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunBookIntroductionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 书籍导读接口
     *  *
     * @param RunBookIntroductionRequest $request RunBookIntroductionRequest
     *
     * @return RunBookIntroductionResponse RunBookIntroductionResponse
     */
    public function runBookIntroduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runBookIntroductionWithOptions($request, $runtime);
    }

    /**
     * @summary 书籍智能卡片接口
     *  *
     * @param RunBookSmartCardRequest $request RunBookSmartCardRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RunBookSmartCardResponse RunBookSmartCardResponse
     */
    public function runBookSmartCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunBookSmartCardResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunBookSmartCardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 书籍智能卡片接口
     *  *
     * @param RunBookSmartCardRequest $request RunBookSmartCardRequest
     *
     * @return RunBookSmartCardResponse RunBookSmartCardResponse
     */
    public function runBookSmartCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runBookSmartCardWithOptions($request, $runtime);
    }

    /**
     * @summary 客户之声预测
     *  *
     * @param RunCommentGenerationRequest $tmpReq  RunCommentGenerationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCommentGenerationResponse RunCommentGenerationResponse
     */
    public function runCommentGenerationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunCommentGenerationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lengthRange)) {
            $request->lengthRangeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lengthRange, 'LengthRange', 'json');
        }
        if (!Utils::isUnset($tmpReq->sentiment)) {
            $request->sentimentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sentiment, 'Sentiment', 'json');
        }
        if (!Utils::isUnset($tmpReq->type)) {
            $request->typeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->type, 'Type', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->allowEmoji)) {
            $body['AllowEmoji'] = $request->allowEmoji;
        }
        if (!Utils::isUnset($request->extraInfo)) {
            $body['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->length)) {
            $body['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->lengthRangeShrink)) {
            $body['LengthRange'] = $request->lengthRangeShrink;
        }
        if (!Utils::isUnset($request->numComments)) {
            $body['NumComments'] = $request->numComments;
        }
        if (!Utils::isUnset($request->sentimentShrink)) {
            $body['Sentiment'] = $request->sentimentShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sourceMaterial)) {
            $body['SourceMaterial'] = $request->sourceMaterial;
        }
        if (!Utils::isUnset($request->style)) {
            $body['Style'] = $request->style;
        }
        if (!Utils::isUnset($request->typeShrink)) {
            $body['Type'] = $request->typeShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunCommentGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCommentGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 客户之声预测
     *  *
     * @param RunCommentGenerationRequest $request RunCommentGenerationRequest
     *
     * @return RunCommentGenerationResponse RunCommentGenerationResponse
     */
    public function runCommentGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommentGenerationWithOptions($request, $runtime);
    }

    /**
     * @summary 内容续写
     *  *
     * @param RunContinueContentRequest $request RunContinueContentRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RunContinueContentResponse RunContinueContentResponse
     */
    public function runContinueContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunContinueContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunContinueContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 内容续写
     *  *
     * @param RunContinueContentRequest $request RunContinueContentRequest
     *
     * @return RunContinueContentResponse RunContinueContentResponse
     */
    public function runContinueContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runContinueContentWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义热点话题分析
     *  *
     * @param RunCustomHotTopicAnalysisRequest $request RunCustomHotTopicAnalysisRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCustomHotTopicAnalysisResponse RunCustomHotTopicAnalysisResponse
     */
    public function runCustomHotTopicAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->askUser)) {
            $body['AskUser'] = $request->askUser;
        }
        if (!Utils::isUnset($request->forceAnalysisExistsTopic)) {
            $body['ForceAnalysisExistsTopic'] = $request->forceAnalysisExistsTopic;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->userBack)) {
            $body['UserBack'] = $request->userBack;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunCustomHotTopicAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCustomHotTopicAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 自定义热点话题分析
     *  *
     * @param RunCustomHotTopicAnalysisRequest $request RunCustomHotTopicAnalysisRequest
     *
     * @return RunCustomHotTopicAnalysisResponse RunCustomHotTopicAnalysisResponse
     */
    public function runCustomHotTopicAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCustomHotTopicAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary 自定义选题视角分析
     *  *
     * @param RunCustomHotTopicViewPointAnalysisRequest $request RunCustomHotTopicViewPointAnalysisRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCustomHotTopicViewPointAnalysisResponse RunCustomHotTopicViewPointAnalysisResponse
     */
    public function runCustomHotTopicViewPointAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->askUser)) {
            $body['AskUser'] = $request->askUser;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['SearchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->skipAskUser)) {
            $body['SkipAskUser'] = $request->skipAskUser;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->topicId)) {
            $body['TopicId'] = $request->topicId;
        }
        if (!Utils::isUnset($request->topicSource)) {
            $body['TopicSource'] = $request->topicSource;
        }
        if (!Utils::isUnset($request->topicVersion)) {
            $body['TopicVersion'] = $request->topicVersion;
        }
        if (!Utils::isUnset($request->userBack)) {
            $body['UserBack'] = $request->userBack;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunCustomHotTopicViewPointAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCustomHotTopicViewPointAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 自定义选题视角分析
     *  *
     * @param RunCustomHotTopicViewPointAnalysisRequest $request RunCustomHotTopicViewPointAnalysisRequest
     *
     * @return RunCustomHotTopicViewPointAnalysisResponse RunCustomHotTopicViewPointAnalysisResponse
     */
    public function runCustomHotTopicViewPointAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCustomHotTopicViewPointAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读脑图生成接口
     *  *
     * @param RunDocBrainmapRequest $request RunDocBrainmapRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocBrainmapResponse RunDocBrainmapResponse
     */
    public function runDocBrainmapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cleanCache)) {
            $body['CleanCache'] = $request->cleanCache;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->nodeNumber)) {
            $body['NodeNumber'] = $request->nodeNumber;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->wordNumber)) {
            $body['WordNumber'] = $request->wordNumber;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocBrainmapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocBrainmapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读脑图生成接口
     *  *
     * @param RunDocBrainmapRequest $request RunDocBrainmapRequest
     *
     * @return RunDocBrainmapResponse RunDocBrainmapResponse
     */
    public function runDocBrainmap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocBrainmapWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读文档导读接口
     *  *
     * @param RunDocIntroductionRequest $request RunDocIntroductionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocIntroductionResponse RunDocIntroductionResponse
     */
    public function runDocIntroductionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cleanCache)) {
            $query['CleanCache'] = $request->cleanCache;
        }
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->introductionPrompt)) {
            $body['IntroductionPrompt'] = $request->introductionPrompt;
        }
        if (!Utils::isUnset($request->keyPointPrompt)) {
            $body['KeyPointPrompt'] = $request->keyPointPrompt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->summaryPrompt)) {
            $body['SummaryPrompt'] = $request->summaryPrompt;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocIntroductionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocIntroductionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读文档导读接口
     *  *
     * @param RunDocIntroductionRequest $request RunDocIntroductionRequest
     *
     * @return RunDocIntroductionResponse RunDocIntroductionResponse
     */
    public function runDocIntroduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocIntroductionWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读问答接口
     *  *
     * @param RunDocQaRequest $tmpReq  RunDocQaRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocQaResponse RunDocQaResponse
     */
    public function runDocQaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunDocQaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categoryIds)) {
            $request->categoryIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categoryIds, 'CategoryIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->conversationContexts)) {
            $request->conversationContextsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->conversationContexts, 'ConversationContexts', 'json');
        }
        if (!Utils::isUnset($tmpReq->docIds)) {
            $request->docIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docIds, 'DocIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoryIdsShrink)) {
            $body['CategoryIds'] = $request->categoryIdsShrink;
        }
        if (!Utils::isUnset($request->conversationContextsShrink)) {
            $body['ConversationContexts'] = $request->conversationContextsShrink;
        }
        if (!Utils::isUnset($request->docIdsShrink)) {
            $body['DocIds'] = $request->docIdsShrink;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->referenceContent)) {
            $body['ReferenceContent'] = $request->referenceContent;
        }
        if (!Utils::isUnset($request->searchSource)) {
            $body['SearchSource'] = $request->searchSource;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocQaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocQaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读问答接口
     *  *
     * @param RunDocQaRequest $request RunDocQaRequest
     *
     * @return RunDocQaResponse RunDocQaResponse
     */
    public function runDocQa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocQaWithOptions($request, $runtime);
    }

    /**
     * @summary 文档智能卡片接口
     *  *
     * @param RunDocSmartCardRequest $request RunDocSmartCardRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocSmartCardResponse RunDocSmartCardResponse
     */
    public function runDocSmartCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocSmartCardResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocSmartCardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档智能卡片接口
     *  *
     * @param RunDocSmartCardRequest $request RunDocSmartCardRequest
     *
     * @return RunDocSmartCardResponse RunDocSmartCardResponse
     */
    public function runDocSmartCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocSmartCardWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读文档总结摘要接口
     *  *
     * @param RunDocSummaryRequest $request RunDocSummaryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocSummaryResponse RunDocSummaryResponse
     */
    public function runDocSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cleanCache)) {
            $body['CleanCache'] = $request->cleanCache;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->recommendContent)) {
            $body['RecommendContent'] = $request->recommendContent;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读文档总结摘要接口
     *  *
     * @param RunDocSummaryRequest $request RunDocSummaryRequest
     *
     * @return RunDocSummaryResponse RunDocSummaryResponse
     */
    public function runDocSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读文档翻译接口
     *  *
     * @param RunDocTranslationRequest $request RunDocTranslationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocTranslationResponse RunDocTranslationResponse
     */
    public function runDocTranslationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cleanCache)) {
            $body['CleanCache'] = $request->cleanCache;
        }
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->recommendContent)) {
            $body['RecommendContent'] = $request->recommendContent;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->transType)) {
            $body['TransType'] = $request->transType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocTranslationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocTranslationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读文档翻译接口
     *  *
     * @param RunDocTranslationRequest $request RunDocTranslationRequest
     *
     * @return RunDocTranslationResponse RunDocTranslationResponse
     */
    public function runDocTranslation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocTranslationWithOptions($request, $runtime);
    }

    /**
     * @summary 文档改写
     *  *
     * @param RunDocWashingRequest $request RunDocWashingRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RunDocWashingResponse RunDocWashingResponse
     */
    public function runDocWashingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->referenceContent)) {
            $body['ReferenceContent'] = $request->referenceContent;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->wordNumber)) {
            $body['WordNumber'] = $request->wordNumber;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        if (!Utils::isUnset($request->writingTypeName)) {
            $body['WritingTypeName'] = $request->writingTypeName;
        }
        if (!Utils::isUnset($request->writingTypeRefDoc)) {
            $body['WritingTypeRefDoc'] = $request->writingTypeRefDoc;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunDocWashingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunDocWashingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档改写
     *  *
     * @param RunDocWashingRequest $request RunDocWashingRequest
     *
     * @return RunDocWashingResponse RunDocWashingResponse
     */
    public function runDocWashing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDocWashingWithOptions($request, $runtime);
    }

    /**
     * @summary 内容扩写
     *  *
     * @param RunExpandContentRequest $request RunExpandContentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RunExpandContentResponse RunExpandContentResponse
     */
    public function runExpandContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunExpandContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunExpandContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 内容扩写
     *  *
     * @param RunExpandContentRequest $request RunExpandContentRequest
     *
     * @return RunExpandContentResponse RunExpandContentResponse
     */
    public function runExpandContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runExpandContentWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读猜你想问接口
     *  *
     * @param RunGenerateQuestionsRequest $request RunGenerateQuestionsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RunGenerateQuestionsResponse RunGenerateQuestionsResponse
     */
    public function runGenerateQuestionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->referenceContent)) {
            $body['ReferenceContent'] = $request->referenceContent;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunGenerateQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunGenerateQuestionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读猜你想问接口
     *  *
     * @param RunGenerateQuestionsRequest $request RunGenerateQuestionsRequest
     *
     * @return RunGenerateQuestionsResponse RunGenerateQuestionsResponse
     */
    public function runGenerateQuestions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runGenerateQuestionsWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读文档关键词抽取接口
     *  *
     * @param RunHotwordRequest $request RunHotwordRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RunHotwordResponse RunHotwordResponse
     */
    public function runHotwordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->docId)) {
            $body['DocId'] = $request->docId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->referenceContent)) {
            $body['ReferenceContent'] = $request->referenceContent;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunHotwordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunHotwordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读文档关键词抽取接口
     *  *
     * @param RunHotwordRequest $request RunHotwordRequest
     *
     * @return RunHotwordResponse RunHotwordResponse
     */
    public function runHotword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runHotwordWithOptions($request, $runtime);
    }

    /**
     * @summary AI妙笔-创作-抽取关键词
     *  *
     * @param RunKeywordsExtractionGenerationRequest $tmpReq  RunKeywordsExtractionGenerationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return RunKeywordsExtractionGenerationResponse RunKeywordsExtractionGenerationResponse
     */
    public function runKeywordsExtractionGenerationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunKeywordsExtractionGenerationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunKeywordsExtractionGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunKeywordsExtractionGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary AI妙笔-创作-抽取关键词
     *  *
     * @param RunKeywordsExtractionGenerationRequest $request RunKeywordsExtractionGenerationRequest
     *
     * @return RunKeywordsExtractionGenerationResponse RunKeywordsExtractionGenerationResponse
     */
    public function runKeywordsExtractionGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runKeywordsExtractionGenerationWithOptions($request, $runtime);
    }

    /**
     * @summary 文档批量导读
     *  *
     * @param RunMultiDocIntroductionRequest $tmpReq  RunMultiDocIntroductionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RunMultiDocIntroductionResponse RunMultiDocIntroductionResponse
     */
    public function runMultiDocIntroductionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunMultiDocIntroductionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docIds)) {
            $request->docIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docIds, 'DocIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->docIdsShrink)) {
            $body['DocIds'] = $request->docIdsShrink;
        }
        if (!Utils::isUnset($request->keyPointPrompt)) {
            $body['KeyPointPrompt'] = $request->keyPointPrompt;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->summaryPrompt)) {
            $body['SummaryPrompt'] = $request->summaryPrompt;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunMultiDocIntroductionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunMultiDocIntroductionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档批量导读
     *  *
     * @param RunMultiDocIntroductionRequest $request RunMultiDocIntroductionRequest
     *
     * @return RunMultiDocIntroductionResponse RunMultiDocIntroductionResponse
     */
    public function runMultiDocIntroduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runMultiDocIntroductionWithOptions($request, $runtime);
    }

    /**
     * @summary AI妙搜-智能搜索生成
     *  *
     * @param RunSearchGenerationRequest $tmpReq  RunSearchGenerationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RunSearchGenerationResponse RunSearchGenerationResponse
     */
    public function runSearchGenerationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunSearchGenerationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentContext)) {
            $request->agentContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentContext, 'AgentContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->chatConfig)) {
            $request->chatConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->chatConfig, 'ChatConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->agentContextShrink)) {
            $body['AgentContext'] = $request->agentContextShrink;
        }
        if (!Utils::isUnset($request->chatConfigShrink)) {
            $body['ChatConfig'] = $request->chatConfigShrink;
        }
        if (!Utils::isUnset($request->originalSessionId)) {
            $body['OriginalSessionId'] = $request->originalSessionId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunSearchGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunSearchGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary AI妙搜-智能搜索生成
     *  *
     * @param RunSearchGenerationRequest $request RunSearchGenerationRequest
     *
     * @return RunSearchGenerationResponse RunSearchGenerationResponse
     */
    public function runSearchGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSearchGenerationWithOptions($request, $runtime);
    }

    /**
     * @summary 妙搜-文搜文
     *  *
     * @param RunSearchSimilarArticlesRequest $tmpReq  RunSearchSimilarArticlesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RunSearchSimilarArticlesResponse RunSearchSimilarArticlesResponse
     */
    public function runSearchSimilarArticlesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunSearchSimilarArticlesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->chatConfig)) {
            $request->chatConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->chatConfig, 'ChatConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->chatConfigShrink)) {
            $body['ChatConfig'] = $request->chatConfigShrink;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunSearchSimilarArticlesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunSearchSimilarArticlesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙搜-文搜文
     *  *
     * @param RunSearchSimilarArticlesRequest $request RunSearchSimilarArticlesRequest
     *
     * @return RunSearchSimilarArticlesResponse RunSearchSimilarArticlesResponse
     */
    public function runSearchSimilarArticles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSearchSimilarArticlesWithOptions($request, $runtime);
    }

    /**
     * @summary 创作-分步骤写作
     *  *
     * @param RunStepByStepWritingRequest $tmpReq  RunStepByStepWritingRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RunStepByStepWritingResponse RunStepByStepWritingResponse
     */
    public function runStepByStepWritingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunStepByStepWritingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        if (!Utils::isUnset($tmpReq->writingConfig)) {
            $request->writingConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->writingConfig, 'WritingConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->originSessionId)) {
            $body['OriginSessionId'] = $request->originSessionId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        if (!Utils::isUnset($request->writingConfigShrink)) {
            $body['WritingConfig'] = $request->writingConfigShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunStepByStepWritingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunStepByStepWritingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创作-分步骤写作
     *  *
     * @param RunStepByStepWritingRequest $request RunStepByStepWritingRequest
     *
     * @return RunStepByStepWritingResponse RunStepByStepWritingResponse
     */
    public function runStepByStepWriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runStepByStepWritingWithOptions($request, $runtime);
    }

    /**
     * @summary 内容特点分析
     *  *
     * @param RunStyleFeatureAnalysisRequest $tmpReq  RunStyleFeatureAnalysisRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RunStyleFeatureAnalysisResponse RunStyleFeatureAnalysisResponse
     */
    public function runStyleFeatureAnalysisWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunStyleFeatureAnalysisShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->materialIds)) {
            $request->materialIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->materialIds, 'MaterialIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['Contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->materialIdsShrink)) {
            $body['MaterialIds'] = $request->materialIdsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunStyleFeatureAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunStyleFeatureAnalysisResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 内容特点分析
     *  *
     * @param RunStyleFeatureAnalysisRequest $request RunStyleFeatureAnalysisRequest
     *
     * @return RunStyleFeatureAnalysisResponse RunStyleFeatureAnalysisResponse
     */
    public function runStyleFeatureAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runStyleFeatureAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary 内容摘要生成
     *  *
     * @param RunSummaryGenerateRequest $request RunSummaryGenerateRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RunSummaryGenerateResponse RunSummaryGenerateResponse
     */
    public function runSummaryGenerateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunSummaryGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunSummaryGenerateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 内容摘要生成
     *  *
     * @param RunSummaryGenerateRequest $request RunSummaryGenerateRequest
     *
     * @return RunSummaryGenerateResponse RunSummaryGenerateResponse
     */
    public function runSummaryGenerate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runSummaryGenerateWithOptions($request, $runtime);
    }

    /**
     * @summary 创作-文本润色
     *  *
     * @param RunTextPolishingRequest $request RunTextPolishingRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RunTextPolishingResponse RunTextPolishingResponse
     */
    public function runTextPolishingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunTextPolishingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunTextPolishingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创作-文本润色
     *  *
     * @param RunTextPolishingRequest $request RunTextPolishingRequest
     *
     * @return RunTextPolishingResponse RunTextPolishingResponse
     */
    public function runTextPolishing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTextPolishingWithOptions($request, $runtime);
    }

    /**
     * @summary 妙笔：标题生成
     *  *
     * @param RunTitleGenerationRequest $tmpReq  RunTitleGenerationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RunTitleGenerationResponse RunTitleGenerationResponse
     */
    public function runTitleGenerationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunTitleGenerationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunTitleGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunTitleGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙笔：标题生成
     *  *
     * @param RunTitleGenerationRequest $request RunTitleGenerationRequest
     *
     * @return RunTitleGenerationResponse RunTitleGenerationResponse
     */
    public function runTitleGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTitleGenerationWithOptions($request, $runtime);
    }

    /**
     * @summary AI妙笔-创作-中英文翻译
     *  *
     * @param RunTranslateGenerationRequest $tmpReq  RunTranslateGenerationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RunTranslateGenerationResponse RunTranslateGenerationResponse
     */
    public function runTranslateGenerationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunTranslateGenerationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunTranslateGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunTranslateGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary AI妙笔-创作-中英文翻译
     *  *
     * @param RunTranslateGenerationRequest $request RunTranslateGenerationRequest
     *
     * @return RunTranslateGenerationResponse RunTranslateGenerationResponse
     */
    public function runTranslateGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runTranslateGenerationWithOptions($request, $runtime);
    }

    /**
     * @summary AI妙笔-创作-文风改写
     *  *
     * @param RunWriteToneGenerationRequest $tmpReq  RunWriteToneGenerationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RunWriteToneGenerationResponse RunWriteToneGenerationResponse
     */
    public function runWriteToneGenerationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunWriteToneGenerationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunWriteToneGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunWriteToneGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary AI妙笔-创作-文风改写
     *  *
     * @param RunWriteToneGenerationRequest $request RunWriteToneGenerationRequest
     *
     * @return RunWriteToneGenerationResponse RunWriteToneGenerationResponse
     */
    public function runWriteToneGeneration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runWriteToneGenerationWithOptions($request, $runtime);
    }

    /**
     * @summary 直接写作
     *  *
     * @param RunWritingRequest $tmpReq  RunWritingRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RunWritingResponse RunWritingResponse
     */
    public function runWritingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunWritingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->referenceData)) {
            $request->referenceDataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->referenceData, 'ReferenceData', 'json');
        }
        if (!Utils::isUnset($tmpReq->writingConfig)) {
            $request->writingConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->writingConfig, 'WritingConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->originSessionId)) {
            $body['OriginSessionId'] = $request->originSessionId;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->referenceDataShrink)) {
            $body['ReferenceData'] = $request->referenceDataShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        if (!Utils::isUnset($request->writingConfigShrink)) {
            $body['WritingConfig'] = $request->writingConfigShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunWritingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunWritingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 直接写作
     *  *
     * @param RunWritingRequest $request RunWritingRequest
     *
     * @return RunWritingResponse RunWritingResponse
     */
    public function runWriting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runWritingWithOptions($request, $runtime);
    }

    /**
     * @summary 保存自定义文本
     *  *
     * @param SaveCustomTextRequest $request SaveCustomTextRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveCustomTextResponse SaveCustomTextResponse
     */
    public function saveCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SaveCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveCustomTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 保存自定义文本
     *  *
     * @param SaveCustomTextRequest $request SaveCustomTextRequest
     *
     * @return SaveCustomTextResponse SaveCustomTextResponse
     */
    public function saveCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 保存用户的信源配置
     *  *
     * @param SaveDataSourceOrderConfigRequest $tmpReq  SaveDataSourceOrderConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveDataSourceOrderConfigResponse SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveDataSourceOrderConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userConfigDataSourceList)) {
            $request->userConfigDataSourceListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userConfigDataSourceList, 'UserConfigDataSourceList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->userConfigDataSourceListShrink)) {
            $body['UserConfigDataSourceList'] = $request->userConfigDataSourceListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SaveDataSourceOrderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveDataSourceOrderConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 保存用户的信源配置
     *  *
     * @param SaveDataSourceOrderConfigRequest $request SaveDataSourceOrderConfigRequest
     *
     * @return SaveDataSourceOrderConfigResponse SaveDataSourceOrderConfigResponse
     */
    public function saveDataSourceOrderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveDataSourceOrderConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 保存素材
     *  *
     * @param SaveMaterialDocumentRequest $tmpReq  SaveMaterialDocumentRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveMaterialDocumentResponse SaveMaterialDocumentResponse
     */
    public function saveMaterialDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveMaterialDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docKeywords)) {
            $request->docKeywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docKeywords, 'DocKeywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->author)) {
            $body['Author'] = $request->author;
        }
        if (!Utils::isUnset($request->bothSavePrivateAndShare)) {
            $body['BothSavePrivateAndShare'] = $request->bothSavePrivateAndShare;
        }
        if (!Utils::isUnset($request->docKeywordsShrink)) {
            $body['DocKeywords'] = $request->docKeywordsShrink;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->externalUrl)) {
            $body['ExternalUrl'] = $request->externalUrl;
        }
        if (!Utils::isUnset($request->htmlContent)) {
            $body['HtmlContent'] = $request->htmlContent;
        }
        if (!Utils::isUnset($request->pubTime)) {
            $body['PubTime'] = $request->pubTime;
        }
        if (!Utils::isUnset($request->shareAttr)) {
            $body['ShareAttr'] = $request->shareAttr;
        }
        if (!Utils::isUnset($request->srcFrom)) {
            $body['SrcFrom'] = $request->srcFrom;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['TextContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SaveMaterialDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveMaterialDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 保存素材
     *  *
     * @param SaveMaterialDocumentRequest $request SaveMaterialDocumentRequest
     *
     * @return SaveMaterialDocumentResponse SaveMaterialDocumentResponse
     */
    public function saveMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMaterialDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 搜索数据集文档
     *  *
     * @param SearchDatasetDocumentsRequest $request SearchDatasetDocumentsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchDatasetDocumentsResponse SearchDatasetDocumentsResponse
     */
    public function searchDatasetDocumentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->extend1)) {
            $body['Extend1'] = $request->extend1;
        }
        if (!Utils::isUnset($request->includeContent)) {
            $body['IncludeContent'] = $request->includeContent;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchDatasetDocumentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchDatasetDocumentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 搜索数据集文档
     *  *
     * @param SearchDatasetDocumentsRequest $request SearchDatasetDocumentsRequest
     *
     * @return SearchDatasetDocumentsResponse SearchDatasetDocumentsResponse
     */
    public function searchDatasetDocuments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchDatasetDocumentsWithOptions($request, $runtime);
    }

    /**
     * @summary 新闻检索
     *  *
     * @param SearchNewsRequest $tmpReq  SearchNewsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchNewsResponse SearchNewsResponse
     */
    public function searchNewsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchNewsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->searchSources)) {
            $request->searchSourcesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->searchSources, 'SearchSources', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->filterNotNull)) {
            $body['FilterNotNull'] = $request->filterNotNull;
        }
        if (!Utils::isUnset($request->includeContent)) {
            $body['IncludeContent'] = $request->includeContent;
        }
        if (!Utils::isUnset($request->page)) {
            $body['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->searchSourcesShrink)) {
            $body['SearchSources'] = $request->searchSourcesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchNewsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchNewsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 新闻检索
     *  *
     * @param SearchNewsRequest $request SearchNewsRequest
     *
     * @return SearchNewsResponse SearchNewsResponse
     */
    public function searchNews($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchNewsWithOptions($request, $runtime);
    }

    /**
     * @summary 提交异步任务
     *  *
     * @param SubmitAsyncTaskRequest $request SubmitAsyncTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAsyncTaskResponse SubmitAsyncTaskResponse
     */
    public function submitAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->taskCode)) {
            $body['TaskCode'] = $request->taskCode;
        }
        if (!Utils::isUnset($request->taskExecuteTime)) {
            $body['TaskExecuteTime'] = $request->taskExecuteTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskParam)) {
            $body['TaskParam'] = $request->taskParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAsyncTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交异步任务
     *  *
     * @param SubmitAsyncTaskRequest $request SubmitAsyncTaskRequest
     *
     * @return SubmitAsyncTaskResponse SubmitAsyncTaskResponse
     */
    public function submitAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 提交自定义播报单任务
     *  *
     * @param SubmitCustomHotTopicBroadcastJobRequest $tmpReq  SubmitCustomHotTopicBroadcastJobRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCustomHotTopicBroadcastJobResponse SubmitCustomHotTopicBroadcastJobResponse
     */
    public function submitCustomHotTopicBroadcastJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitCustomHotTopicBroadcastJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hotTopicBroadcastConfig)) {
            $request->hotTopicBroadcastConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hotTopicBroadcastConfig, 'HotTopicBroadcastConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->topics)) {
            $request->topicsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->hotTopicBroadcastConfigShrink)) {
            $body['HotTopicBroadcastConfig'] = $request->hotTopicBroadcastConfigShrink;
        }
        if (!Utils::isUnset($request->hotTopicVersion)) {
            $body['HotTopicVersion'] = $request->hotTopicVersion;
        }
        if (!Utils::isUnset($request->topicsShrink)) {
            $body['Topics'] = $request->topicsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitCustomHotTopicBroadcastJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCustomHotTopicBroadcastJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交自定义播报单任务
     *  *
     * @param SubmitCustomHotTopicBroadcastJobRequest $request SubmitCustomHotTopicBroadcastJobRequest
     *
     * @return SubmitCustomHotTopicBroadcastJobResponse SubmitCustomHotTopicBroadcastJobResponse
     */
    public function submitCustomHotTopicBroadcastJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomHotTopicBroadcastJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交自定义热点选题视角分析任务
     *  *
     * @param SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest $tmpReq  SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest
     * @param RuntimeOptions                                           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitCustomTopicSelectionPerspectiveAnalysisTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->documents)) {
            $request->documentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->documentsShrink)) {
            $body['Documents'] = $request->documentsShrink;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交自定义热点选题视角分析任务
     *  *
     * @param SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest $request SubmitCustomTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @return SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse SubmitCustomTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitCustomTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 提交文档聚合任务
     *  *
     * @param SubmitDocClusterTaskRequest $tmpReq  SubmitDocClusterTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDocClusterTaskResponse SubmitDocClusterTaskResponse
     */
    public function submitDocClusterTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitDocClusterTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->documents)) {
            $request->documentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->documentsShrink)) {
            $body['Documents'] = $request->documentsShrink;
        }
        if (!Utils::isUnset($request->summaryLength)) {
            $body['SummaryLength'] = $request->summaryLength;
        }
        if (!Utils::isUnset($request->titleLength)) {
            $body['TitleLength'] = $request->titleLength;
        }
        if (!Utils::isUnset($request->topicCount)) {
            $body['TopicCount'] = $request->topicCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitDocClusterTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDocClusterTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交文档聚合任务
     *  *
     * @param SubmitDocClusterTaskRequest $request SubmitDocClusterTaskRequest
     *
     * @return SubmitDocClusterTaskResponse SubmitDocClusterTaskResponse
     */
    public function submitDocClusterTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDocClusterTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 提交VOC异步任务
     *  *
     * @param SubmitEnterpriseVocAnalysisTaskRequest $tmpReq  SubmitEnterpriseVocAnalysisTaskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitEnterpriseVocAnalysisTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contentTags)) {
            $request->contentTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contentTags, 'ContentTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->filterTags)) {
            $request->filterTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterTags, 'FilterTags', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentTagsShrink)) {
            $body['ContentTags'] = $request->contentTagsShrink;
        }
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['Contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->filterTagsShrink)) {
            $body['FilterTags'] = $request->filterTagsShrink;
        }
        if (!Utils::isUnset($request->materialType)) {
            $body['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->positiveSample)) {
            $body['PositiveSample'] = $request->positiveSample;
        }
        if (!Utils::isUnset($request->positiveSampleFileKey)) {
            $body['PositiveSampleFileKey'] = $request->positiveSampleFileKey;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitEnterpriseVocAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitEnterpriseVocAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交VOC异步任务
     *  *
     * @param SubmitEnterpriseVocAnalysisTaskRequest $request SubmitEnterpriseVocAnalysisTaskRequest
     *
     * @return SubmitEnterpriseVocAnalysisTaskResponse SubmitEnterpriseVocAnalysisTaskResponse
     */
    public function submitEnterpriseVocAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitEnterpriseVocAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 提交一键成片剪辑任务
     *  *
     * @param SubmitSmartClipTaskRequest $tmpReq  SubmitSmartClipTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSmartClipTaskResponse SubmitSmartClipTaskResponse
     */
    public function submitSmartClipTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSmartClipTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->editingConfig)) {
            $request->editingConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->editingConfig, 'EditingConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->inputConfig)) {
            $request->inputConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputConfig, 'InputConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputConfig)) {
            $request->outputConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputConfig, 'OutputConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->editingConfigShrink)) {
            $body['EditingConfig'] = $request->editingConfigShrink;
        }
        if (!Utils::isUnset($request->extendParam)) {
            $body['ExtendParam'] = $request->extendParam;
        }
        if (!Utils::isUnset($request->inputConfigShrink)) {
            $body['InputConfig'] = $request->inputConfigShrink;
        }
        if (!Utils::isUnset($request->outputConfigShrink)) {
            $body['OutputConfig'] = $request->outputConfigShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSmartClipTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSmartClipTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交一键成片剪辑任务
     *  *
     * @param SubmitSmartClipTaskRequest $request SubmitSmartClipTaskRequest
     *
     * @return SubmitSmartClipTaskResponse SubmitSmartClipTaskResponse
     */
    public function submitSmartClipTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmartClipTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 提交选题热点分析任务
     *  *
     * @param SubmitTopicSelectionPerspectiveAnalysisTaskRequest $tmpReq  SubmitTopicSelectionPerspectiveAnalysisTaskRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTopicSelectionPerspectiveAnalysisTaskResponse SubmitTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitTopicSelectionPerspectiveAnalysisTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTopicSelectionPerspectiveAnalysisTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->documents)) {
            $request->documentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->documents, 'Documents', 'json');
        }
        if (!Utils::isUnset($tmpReq->perspectiveTypes)) {
            $request->perspectiveTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->perspectiveTypes, 'PerspectiveTypes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->documentsShrink)) {
            $body['Documents'] = $request->documentsShrink;
        }
        if (!Utils::isUnset($request->perspectiveTypesShrink)) {
            $body['PerspectiveTypes'] = $request->perspectiveTypesShrink;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTopicSelectionPerspectiveAnalysisTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交选题热点分析任务
     *  *
     * @param SubmitTopicSelectionPerspectiveAnalysisTaskRequest $request SubmitTopicSelectionPerspectiveAnalysisTaskRequest
     *
     * @return SubmitTopicSelectionPerspectiveAnalysisTaskResponse SubmitTopicSelectionPerspectiveAnalysisTaskResponse
     */
    public function submitTopicSelectionPerspectiveAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTopicSelectionPerspectiveAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 更新自定义文本
     *  *
     * @param UpdateCustomTextRequest $request UpdateCustomTextRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomTextResponse UpdateCustomTextResponse
     */
    public function updateCustomTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCustomTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新自定义文本
     *  *
     * @param UpdateCustomTextRequest $request UpdateCustomTextRequest
     *
     * @return UpdateCustomTextResponse UpdateCustomTextResponse
     */
    public function updateCustomText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTextWithOptions($request, $runtime);
    }

    /**
     * @summary 数据集管理-更新
     *  *
     * @param UpdateDatasetRequest $tmpReq  UpdateDatasetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDatasetResponse UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDatasetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->datasetConfig)) {
            $request->datasetConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->datasetConfig, 'DatasetConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetConfigShrink)) {
            $body['DatasetConfig'] = $request->datasetConfigShrink;
        }
        if (!Utils::isUnset($request->datasetDescription)) {
            $body['DatasetDescription'] = $request->datasetDescription;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->searchDatasetEnable)) {
            $body['SearchDatasetEnable'] = $request->searchDatasetEnable;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 数据集管理-更新
     *  *
     * @param UpdateDatasetRequest $request UpdateDatasetRequest
     *
     * @return UpdateDatasetResponse UpdateDatasetResponse
     */
    public function updateDataset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetWithOptions($request, $runtime);
    }

    /**
     * @summary 修改数据集文档
     *  *
     * @param UpdateDatasetDocumentRequest $tmpReq  UpdateDatasetDocumentRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDatasetDocumentResponse UpdateDatasetDocumentResponse
     */
    public function updateDatasetDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateDatasetDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->document)) {
            $request->documentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->document, 'Document', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->datasetName)) {
            $body['DatasetName'] = $request->datasetName;
        }
        if (!Utils::isUnset($request->documentShrink)) {
            $body['Document'] = $request->documentShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateDatasetDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 修改数据集文档
     *  *
     * @param UpdateDatasetDocumentRequest $request UpdateDatasetDocumentRequest
     *
     * @return UpdateDatasetDocumentResponse UpdateDatasetDocumentResponse
     */
    public function updateDatasetDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDatasetDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 文档管理-更新。
     *  *
     * @param UpdateGeneratedContentRequest $tmpReq  UpdateGeneratedContentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGeneratedContentResponse UpdateGeneratedContentResponse
     */
    public function updateGeneratedContentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGeneratedContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->keywords)) {
            $request->keywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keywords, 'Keywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentText)) {
            $body['ContentText'] = $request->contentText;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->keywordsShrink)) {
            $body['Keywords'] = $request->keywordsShrink;
        }
        if (!Utils::isUnset($request->prompt)) {
            $body['Prompt'] = $request->prompt;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateGeneratedContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateGeneratedContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 文档管理-更新。
     *  *
     * @param UpdateGeneratedContentRequest $request UpdateGeneratedContentRequest
     *
     * @return UpdateGeneratedContentResponse UpdateGeneratedContentResponse
     */
    public function updateGeneratedContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGeneratedContentWithOptions($request, $runtime);
    }

    /**
     * @summary 根据ID更新素材
     *  *
     * @param UpdateMaterialDocumentRequest $tmpReq  UpdateMaterialDocumentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMaterialDocumentResponse UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocumentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMaterialDocumentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docKeywords)) {
            $request->docKeywordsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docKeywords, 'DocKeywords', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentKey)) {
            $query['AgentKey'] = $request->agentKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->author)) {
            $body['Author'] = $request->author;
        }
        if (!Utils::isUnset($request->docKeywordsShrink)) {
            $body['DocKeywords'] = $request->docKeywordsShrink;
        }
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->externalUrl)) {
            $body['ExternalUrl'] = $request->externalUrl;
        }
        if (!Utils::isUnset($request->htmlContent)) {
            $body['HtmlContent'] = $request->htmlContent;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pubTime)) {
            $body['PubTime'] = $request->pubTime;
        }
        if (!Utils::isUnset($request->shareAttr)) {
            $body['ShareAttr'] = $request->shareAttr;
        }
        if (!Utils::isUnset($request->srcFrom)) {
            $body['SrcFrom'] = $request->srcFrom;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        if (!Utils::isUnset($request->textContent)) {
            $body['TextContent'] = $request->textContent;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMaterialDocumentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMaterialDocumentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 根据ID更新素材
     *  *
     * @param UpdateMaterialDocumentRequest $request UpdateMaterialDocumentRequest
     *
     * @return UpdateMaterialDocumentResponse UpdateMaterialDocumentResponse
     */
    public function updateMaterialDocument($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMaterialDocumentWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读上传书籍
     *  *
     * @param UploadBookRequest $tmpReq  UploadBookRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadBookResponse UploadBookResponse
     */
    public function uploadBookWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadBookShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docs)) {
            $request->docsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docs, 'Docs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->docsShrink)) {
            $body['Docs'] = $request->docsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadBookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadBookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读上传书籍
     *  *
     * @param UploadBookRequest $request UploadBookRequest
     *
     * @return UploadBookResponse UploadBookResponse
     */
    public function uploadBook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadBookWithOptions($request, $runtime);
    }

    /**
     * @summary 妙读上传文档接口
     *  *
     * @param UploadDocRequest $tmpReq  UploadDocRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadDocResponse UploadDocResponse
     */
    public function uploadDocWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadDocShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->docs)) {
            $request->docsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->docs, 'Docs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->docsShrink)) {
            $body['Docs'] = $request->docsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadDocResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadDocResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 妙读上传文档接口
     *  *
     * @param UploadDocRequest $request UploadDocRequest
     *
     * @return UploadDocResponse UploadDocResponse
     */
    public function uploadDoc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDocWithOptions($request, $runtime);
    }

    /**
     * @summary 校验企业VOC上传模板
     *  *
     * @param ValidateUploadTemplateRequest $request ValidateUploadTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateUploadTemplateResponse ValidateUploadTemplateResponse
     */
    public function validateUploadTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileKey)) {
            $body['FileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ValidateUploadTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ValidateUploadTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 校验企业VOC上传模板
     *  *
     * @param ValidateUploadTemplateRequest $request ValidateUploadTemplateRequest
     *
     * @return ValidateUploadTemplateResponse ValidateUploadTemplateResponse
     */
    public function validateUploadTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateUploadTemplateWithOptions($request, $runtime);
    }
}
