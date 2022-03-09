<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ActivateUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ActivateUserResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AddQRCodeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AddQRCodeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunJwtCreateCommonRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunJwtCreateCommonResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunMainJwtCreateRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunMainJwtCreateResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunRamJwtCreateRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunRamJwtCreateResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunTicketJwtCreateRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunTicketJwtCreateResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunUidWhiteListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\AliyunUidWhiteListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimBuildModelRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimBuildModelResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimGetStsTokenRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimGetStsTokenResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimPreStepRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimPreStepResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProAgainBuildModeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProAgainBuildModeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProjectDeleteFileRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProjectDeleteFileResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProjectShareModelRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimProjectShareModelResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimRetryTransRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimRetryTransResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardAutoSalbInfoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardAutoSalbInfoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardDetailRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardDetailResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardElevationRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimStandardElevationResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimTransModelRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimTransModelResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimTransModelStatusRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimTransModelStatusResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimTransModelStatusShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimUpdateProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimUpdateProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\BimUpdateProjectShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CheckImageRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CheckImageResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CommonRequestRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CommonRequestResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyActivateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyActivateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyAndMainUserCreateRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyAndMainUserCreateResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyCreateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyCreateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyDisableOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyDisableOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindByIsvTypeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindByIsvTypeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyFindOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyListByConditionRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyListByConditionResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyUpdateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CompanyUpdateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateBimProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateBimProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateBimProjectShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateMainUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateMainUserResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateMaterialRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateMaterialResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateOrUpdateExtInfoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateOrUpdateExtInfoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreatePipelineNodeInstanceRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreatePipelineNodeInstanceResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateRamUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CreateRamUserResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomFindOrderRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomFindOrderResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomFindOrderStatusRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomFindOrderStatusResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomGetCdnModelPathRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomGetCdnModelPathResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetConfigFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetConfigFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetConfigFindOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetConfigFindOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetConfigUpdateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetConfigUpdateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetCreateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetCreateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetDeteleOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetDeteleOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetPublishPublishRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetPublishPublishResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetTypeFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetTypeFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUnbindProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUnbindProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUpdateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUpdateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadCreateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadCreateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadDeleteOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadDeleteOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadDeleteOssFileRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadDeleteOssFileResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByDatasetIdRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByDatasetIdResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByProjectIdAppRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByProjectIdAppResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByProjectIdRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DatasetUploadFindByProjectIdResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DataStoreCredentialRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DataStoreCredentialResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DelBimDrawingRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DelBimDrawingResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DelBimProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DelBimProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteMaterialRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteMaterialResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteMaterialsRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteMaterialsResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteProjectTransModelRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteProjectTransModelResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteQRCodeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DeleteQRCodeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DisabelUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\DisabelUserResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\FindRegionRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\FindRegionResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\FloorPlanRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\FloorPlanResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingDetailRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingDetailResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingRenderRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingRenderResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingStatusRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingStatusResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingStatusShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimFragmentListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimFragmentListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimGlbModelListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimGlbModelListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimModelConfigRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimModelConfigResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimOriginModelRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimOriginModelResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectDetailRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectDetailResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectDrawFilesRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectDrawFilesResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListStatusRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListStatusResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListStatusShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectShareModelListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectShareModelListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardAutoMarkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardAutoMarkResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardRenderRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardRenderResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardStatusByIdsRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardStatusByIdsResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardStatusByIdsShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTaskDetailRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTaskDetailResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTenantFlowRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTenantFlowResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTransModelListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTransModelListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimUploadStsTokenRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimUploadStsTokenResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetCurrentUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetCurrentUserResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetInstancesRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetInstancesResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetLatestNodeByTypeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetLatestNodeByTypeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetMaterialListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetMaterialListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetOssCredentialRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetOssCredentialResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetProjectPhaseDetailRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetProjectPhaseDetailResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetStatusAndOssRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetStatusAndOssResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetTemplateListRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetTemplateListResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetTokenRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetTokenResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialCreateOnePictureRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialCreateOnePictureResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialCreateOneVideoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialCreateOneVideoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialDeleteOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialDeleteOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllPictureRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllPictureResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllVideoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllVideoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFlushUploadRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFlushUploadResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialGetOssCreadentialsRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialGetOssCreadentialsResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialUpdateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialUpdateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderAssignedScanISVRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderAssignedScanISVResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderBatchCreateRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderBatchCreateResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderBatchDeleteRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderBatchDeleteResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderBatchUpdateOrderStateRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderBatchUpdateOrderStateResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneAppRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneAppResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderQueryOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderUpdateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\OrderUpdateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PCDatasetCreateOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PCDatasetCreateOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PCUploadBuildRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PCUploadBuildResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PCUploadPublishRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PCUploadPublishResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PipelineFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PipelineFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProduceExpoNoticeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProduceExpoNoticeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProduceNoticeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProduceNoticeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOneAPPResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOrUpdateExtInfoAppRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOrUpdateExtInfoAppResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOrUpdateExtInfoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectCreateOrUpdateExtInfoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectFindUploadsRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectFindUploadsResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetOneAppRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetOneAppResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetStatusAndOssRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetStatusAndOssResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectSyncProjectStatusRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectSyncProjectStatusResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PublishGalleryRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PublishGalleryResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PublishRealRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\PublishRealResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\QueryAccountLabelRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\QueryAccountLabelResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\QueryBizLogByOpTypeAndTimeRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\QueryBizLogByOpTypeAndTimeResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\QueryQRCodeInfoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\QueryQRCodeInfoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataCreateProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataCreateProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataCreateProjectShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataQueryProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataQueryProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataRemoveRoleRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataRemoveRoleResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataRemoveRoleShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataShareProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataShareProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataShareProjectShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataUpdateProjectRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ScanDataUpdateProjectResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\SpiltBimDrawingRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\SpiltBimDrawingResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\TestPopParamsResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\TransTextToAudioRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\TransTextToAudioResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimFragmentRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimFragmentResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimFragmentShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimModelConfigRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimModelConfigResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimProjectDrawFilesRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimProjectDrawFilesResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimProjectDrawFilesShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardDwInfoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardDwInfoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardDwInfoShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardElevationRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardElevationResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardElevationShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardSlabInfoRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardSlabInfoResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardSlabInfoShrinkRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateNoteRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateNoteResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateUserResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserFindAllRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserFindAllResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserFindByRolesRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserFindByRolesResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserGetOneRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserGetOneResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListMenusRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListMenusResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListPermissionsRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListPermissionsResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListRolesRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListRolesResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListSubRolesRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UserListSubRolesResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ValidAliyunUidRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ValidAliyunUidResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ValidCompanyNameRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\ValidCompanyNameResponse;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\VrUserCreateScanUserRequest;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\VrUserCreateScanUserResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Holowatcher extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'holowatcher.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('holowatcher', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ActivateUserResponse
     */
    public function activateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivateUserRequest $request
     *
     * @return ActivateUserResponse
     */
    public function activateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateUserWithOptions($request, $runtime);
    }

    /**
     * @param AddQRCodeRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddQRCodeResponse
     */
    public function addQRCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddQRCode',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddQRCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddQRCodeRequest $request
     *
     * @return AddQRCodeResponse
     */
    public function addQRCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addQRCodeWithOptions($request, $runtime);
    }

    /**
     * @param AliyunJwtCreateCommonRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AliyunJwtCreateCommonResponse
     */
    public function aliyunJwtCreateCommonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunAccountName)) {
            $query['AliyunAccountName'] = $request->aliyunAccountName;
        }
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        if (!Utils::isUnset($request->aliyunUidType)) {
            $query['AliyunUidType'] = $request->aliyunUidType;
        }
        if (!Utils::isUnset($request->parentUid)) {
            $query['ParentUid'] = $request->parentUid;
        }
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AliyunJwtCreateCommon',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AliyunJwtCreateCommonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AliyunJwtCreateCommonRequest $request
     *
     * @return AliyunJwtCreateCommonResponse
     */
    public function aliyunJwtCreateCommon($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aliyunJwtCreateCommonWithOptions($request, $runtime);
    }

    /**
     * @param AliyunMainJwtCreateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AliyunMainJwtCreateResponse
     */
    public function aliyunMainJwtCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        if (!Utils::isUnset($request->aliyunUidType)) {
            $query['AliyunUidType'] = $request->aliyunUidType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AliyunMainJwtCreate',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AliyunMainJwtCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AliyunMainJwtCreateRequest $request
     *
     * @return AliyunMainJwtCreateResponse
     */
    public function aliyunMainJwtCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aliyunMainJwtCreateWithOptions($request, $runtime);
    }

    /**
     * @param AliyunRamJwtCreateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AliyunRamJwtCreateResponse
     */
    public function aliyunRamJwtCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUidType)) {
            $query['AliyunUidType'] = $request->aliyunUidType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentUid)) {
            $query['ParentUid'] = $request->parentUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AliyunRamJwtCreate',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AliyunRamJwtCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AliyunRamJwtCreateRequest $request
     *
     * @return AliyunRamJwtCreateResponse
     */
    public function aliyunRamJwtCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aliyunRamJwtCreateWithOptions($request, $runtime);
    }

    /**
     * @param AliyunTicketJwtCreateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AliyunTicketJwtCreateResponse
     */
    public function aliyunTicketJwtCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ticket)) {
            $query['Ticket'] = $request->ticket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AliyunTicketJwtCreate',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AliyunTicketJwtCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AliyunTicketJwtCreateRequest $request
     *
     * @return AliyunTicketJwtCreateResponse
     */
    public function aliyunTicketJwtCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aliyunTicketJwtCreateWithOptions($request, $runtime);
    }

    /**
     * @param AliyunUidWhiteListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AliyunUidWhiteListResponse
     */
    public function aliyunUidWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AliyunUidWhiteList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AliyunUidWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AliyunUidWhiteListRequest $request
     *
     * @return AliyunUidWhiteListResponse
     */
    public function aliyunUidWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aliyunUidWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param BimBuildModelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BimBuildModelResponse
     */
    public function bimBuildModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimBuildModel',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimBuildModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimBuildModelRequest $request
     *
     * @return BimBuildModelResponse
     */
    public function bimBuildModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimBuildModelWithOptions($request, $runtime);
    }

    /**
     * @param BimGetStsTokenRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BimGetStsTokenResponse
     */
    public function bimGetStsTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimGetStsToken',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimGetStsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimGetStsTokenRequest $request
     *
     * @return BimGetStsTokenResponse
     */
    public function bimGetStsToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimGetStsTokenWithOptions($request, $runtime);
    }

    /**
     * @param BimPreStepRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return BimPreStepResponse
     */
    public function bimPreStepWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimPreStep',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimPreStepResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimPreStepRequest $request
     *
     * @return BimPreStepResponse
     */
    public function bimPreStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimPreStepWithOptions($request, $runtime);
    }

    /**
     * @param BimProAgainBuildModeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BimProAgainBuildModeResponse
     */
    public function bimProAgainBuildModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimProAgainBuildMode',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimProAgainBuildModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimProAgainBuildModeRequest $request
     *
     * @return BimProAgainBuildModeResponse
     */
    public function bimProAgainBuildMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimProAgainBuildModeWithOptions($request, $runtime);
    }

    /**
     * @param BimProjectDeleteFileRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BimProjectDeleteFileResponse
     */
    public function bimProjectDeleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimProjectDeleteFile',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimProjectDeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimProjectDeleteFileRequest $request
     *
     * @return BimProjectDeleteFileResponse
     */
    public function bimProjectDeleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimProjectDeleteFileWithOptions($request, $runtime);
    }

    /**
     * @param BimProjectShareModelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BimProjectShareModelResponse
     */
    public function bimProjectShareModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimProjectShareModel',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimProjectShareModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimProjectShareModelRequest $request
     *
     * @return BimProjectShareModelResponse
     */
    public function bimProjectShareModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimProjectShareModelWithOptions($request, $runtime);
    }

    /**
     * @param BimRetryTransRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BimRetryTransResponse
     */
    public function bimRetryTransWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimRetryTrans',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimRetryTransResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimRetryTransRequest $request
     *
     * @return BimRetryTransResponse
     */
    public function bimRetryTrans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimRetryTransWithOptions($request, $runtime);
    }

    /**
     * @param BimStandardAutoSalbInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BimStandardAutoSalbInfoResponse
     */
    public function bimStandardAutoSalbInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimStandardAutoSalbInfo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimStandardAutoSalbInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimStandardAutoSalbInfoRequest $request
     *
     * @return BimStandardAutoSalbInfoResponse
     */
    public function bimStandardAutoSalbInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimStandardAutoSalbInfoWithOptions($request, $runtime);
    }

    /**
     * @param BimStandardDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BimStandardDetailResponse
     */
    public function bimStandardDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimStandardDetail',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimStandardDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimStandardDetailRequest $request
     *
     * @return BimStandardDetailResponse
     */
    public function bimStandardDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimStandardDetailWithOptions($request, $runtime);
    }

    /**
     * @param BimStandardElevationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BimStandardElevationResponse
     */
    public function bimStandardElevationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimStandardElevation',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimStandardElevationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimStandardElevationRequest $request
     *
     * @return BimStandardElevationResponse
     */
    public function bimStandardElevation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimStandardElevationWithOptions($request, $runtime);
    }

    /**
     * @param BimTransModelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BimTransModelResponse
     */
    public function bimTransModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'BimTransModel',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimTransModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimTransModelRequest $request
     *
     * @return BimTransModelResponse
     */
    public function bimTransModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimTransModelWithOptions($request, $runtime);
    }

    /**
     * @param BimTransModelStatusRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BimTransModelStatusResponse
     */
    public function bimTransModelStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BimTransModelStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimTransModelStatus',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimTransModelStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimTransModelStatusRequest $request
     *
     * @return BimTransModelStatusResponse
     */
    public function bimTransModelStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimTransModelStatusWithOptions($request, $runtime);
    }

    /**
     * @param BimUpdateProjectRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return BimUpdateProjectResponse
     */
    public function bimUpdateProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BimUpdateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->component)) {
            $request->componentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->component, 'Component', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->componentShrink)) {
            $query['Component'] = $request->componentShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $query['Remarks'] = $request->remarks;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BimUpdateProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BimUpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BimUpdateProjectRequest $request
     *
     * @return BimUpdateProjectResponse
     */
    public function bimUpdateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bimUpdateProjectWithOptions($request, $runtime);
    }

    /**
     * @param CheckImageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CheckImageResponse
     */
    public function checkImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imagePath)) {
            $query['ImagePath'] = $request->imagePath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckImage',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckImageRequest $request
     *
     * @return CheckImageResponse
     */
    public function checkImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkImageWithOptions($request, $runtime);
    }

    /**
     * @param CommonRequestRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CommonRequestResponse
     */
    public function commonRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->api)) {
            $query['Api'] = $request->api;
        }
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommonRequest',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommonRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommonRequestRequest $request
     *
     * @return CommonRequestResponse
     */
    public function commonRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commonRequestWithOptions($request, $runtime);
    }

    /**
     * @param CompanyActivateOneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CompanyActivateOneResponse
     */
    public function companyActivateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyActivateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyActivateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyActivateOneRequest $request
     *
     * @return CompanyActivateOneResponse
     */
    public function companyActivateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyActivateOneWithOptions($request, $runtime);
    }

    /**
     * @param CompanyAndMainUserCreateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CompanyAndMainUserCreateResponse
     */
    public function companyAndMainUserCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->companyParams)) {
            $query['CompanyParams'] = $request->companyParams;
        }
        if (!Utils::isUnset($request->userParams)) {
            $query['UserParams'] = $request->userParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyAndMainUserCreate',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyAndMainUserCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyAndMainUserCreateRequest $request
     *
     * @return CompanyAndMainUserCreateResponse
     */
    public function companyAndMainUserCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyAndMainUserCreateWithOptions($request, $runtime);
    }

    /**
     * @param CompanyCreateOneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CompanyCreateOneResponse
     */
    public function companyCreateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyCreateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyCreateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyCreateOneRequest $request
     *
     * @return CompanyCreateOneResponse
     */
    public function companyCreateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyCreateOneWithOptions($request, $runtime);
    }

    /**
     * @param CompanyDisableOneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CompanyDisableOneResponse
     */
    public function companyDisableOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyDisableOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyDisableOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyDisableOneRequest $request
     *
     * @return CompanyDisableOneResponse
     */
    public function companyDisableOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyDisableOneWithOptions($request, $runtime);
    }

    /**
     * @param CompanyFindAllRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CompanyFindAllResponse
     */
    public function companyFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyFindAllRequest $request
     *
     * @return CompanyFindAllResponse
     */
    public function companyFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyFindAllWithOptions($request, $runtime);
    }

    /**
     * @param CompanyFindByIsvTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CompanyFindByIsvTypeResponse
     */
    public function companyFindByIsvTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->isvType)) {
            $query['IsvType'] = $request->isvType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyFindByIsvType',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyFindByIsvTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyFindByIsvTypeRequest $request
     *
     * @return CompanyFindByIsvTypeResponse
     */
    public function companyFindByIsvType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyFindByIsvTypeWithOptions($request, $runtime);
    }

    /**
     * @param CompanyFindOneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CompanyFindOneResponse
     */
    public function companyFindOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->companyId)) {
            $query['CompanyId'] = $request->companyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyFindOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyFindOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyFindOneRequest $request
     *
     * @return CompanyFindOneResponse
     */
    public function companyFindOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyFindOneWithOptions($request, $runtime);
    }

    /**
     * @param CompanyListByConditionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CompanyListByConditionResponse
     */
    public function companyListByConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->customSeeSelf)) {
            $query['CustomSeeSelf'] = $request->customSeeSelf;
        }
        if (!Utils::isUnset($request->isvType)) {
            $query['IsvType'] = $request->isvType;
        }
        if (!Utils::isUnset($request->supportType)) {
            $query['SupportType'] = $request->supportType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyListByCondition',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyListByConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyListByConditionRequest $request
     *
     * @return CompanyListByConditionResponse
     */
    public function companyListByCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyListByConditionWithOptions($request, $runtime);
    }

    /**
     * @param CompanyUpdateOneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CompanyUpdateOneResponse
     */
    public function companyUpdateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompanyUpdateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompanyUpdateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompanyUpdateOneRequest $request
     *
     * @return CompanyUpdateOneResponse
     */
    public function companyUpdateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->companyUpdateOneWithOptions($request, $runtime);
    }

    /**
     * @param CreateBimProjectRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBimProjectResponse
     */
    public function createBimProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateBimProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->component)) {
            $request->componentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->component, 'Component', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->componentShrink)) {
            $query['Component'] = $request->componentShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $query['Remarks'] = $request->remarks;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBimProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBimProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBimProjectRequest $request
     *
     * @return CreateBimProjectResponse
     */
    public function createBimProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBimProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateMainUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateMainUserResponse
     */
    public function createMainUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMainUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMainUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMainUserRequest $request
     *
     * @return CreateMainUserResponse
     */
    public function createMainUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMainUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateMaterialResponse
     */
    public function createMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMaterial',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMaterialRequest $request
     *
     * @return CreateMaterialResponse
     */
    public function createMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMaterialWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrUpdateExtInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateOrUpdateExtInfoResponse
     */
    public function createOrUpdateExtInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateExtInfo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateExtInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrUpdateExtInfoRequest $request
     *
     * @return CreateOrUpdateExtInfoResponse
     */
    public function createOrUpdateExtInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrUpdateExtInfoWithOptions($request, $runtime);
    }

    /**
     * @param CreatePipelineNodeInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePipelineNodeInstanceResponse
     */
    public function createPipelineNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineNodeInstance',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineNodeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePipelineNodeInstanceRequest $request
     *
     * @return CreatePipelineNodeInstanceResponse
     */
    public function createPipelineNodeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineNodeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateRamUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRamUserResponse
     */
    public function createRamUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRamUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRamUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRamUserRequest $request
     *
     * @return CreateRamUserResponse
     */
    public function createRamUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRamUserWithOptions($request, $runtime);
    }

    /**
     * @param CustomCreateOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CustomCreateOrderResponse
     */
    public function customCreateOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemType)) {
            $query['ItemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->orderName)) {
            $query['OrderName'] = $request->orderName;
        }
        if (!Utils::isUnset($request->orderPhotoContact)) {
            $query['OrderPhotoContact'] = $request->orderPhotoContact;
        }
        if (!Utils::isUnset($request->photoAddress)) {
            $query['PhotoAddress'] = $request->photoAddress;
        }
        if (!Utils::isUnset($request->photoEnvironment)) {
            $query['PhotoEnvironment'] = $request->photoEnvironment;
        }
        if (!Utils::isUnset($request->photoFloorNum)) {
            $query['PhotoFloorNum'] = $request->photoFloorNum;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CustomCreateOrder',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomCreateOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomCreateOrderRequest $request
     *
     * @return CustomCreateOrderResponse
     */
    public function customCreateOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customCreateOrderWithOptions($request, $runtime);
    }

    /**
     * @param CustomFindOrderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CustomFindOrderResponse
     */
    public function customFindOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderIdCipher)) {
            $query['OrderIdCipher'] = $request->orderIdCipher;
        }
        if (!Utils::isUnset($request->orderName)) {
            $query['OrderName'] = $request->orderName;
        }
        if (!Utils::isUnset($request->orderState)) {
            $query['OrderState'] = $request->orderState;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CustomFindOrder',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomFindOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomFindOrderRequest $request
     *
     * @return CustomFindOrderResponse
     */
    public function customFindOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customFindOrderWithOptions($request, $runtime);
    }

    /**
     * @param CustomFindOrderStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CustomFindOrderStatusResponse
     */
    public function customFindOrderStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderIdCipher)) {
            $query['OrderIdCipher'] = $request->orderIdCipher;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CustomFindOrderStatus',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomFindOrderStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomFindOrderStatusRequest $request
     *
     * @return CustomFindOrderStatusResponse
     */
    public function customFindOrderStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customFindOrderStatusWithOptions($request, $runtime);
    }

    /**
     * @param CustomGetCdnModelPathRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CustomGetCdnModelPathResponse
     */
    public function customGetCdnModelPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderIdCipher)) {
            $query['OrderIdCipher'] = $request->orderIdCipher;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CustomGetCdnModelPath',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CustomGetCdnModelPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CustomGetCdnModelPathRequest $request
     *
     * @return CustomGetCdnModelPathResponse
     */
    public function customGetCdnModelPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->customGetCdnModelPathWithOptions($request, $runtime);
    }

    /**
     * @param DataStoreCredentialRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DataStoreCredentialResponse
     */
    public function dataStoreCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DataStoreCredential',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DataStoreCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DataStoreCredentialRequest $request
     *
     * @return DataStoreCredentialResponse
     */
    public function dataStoreCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dataStoreCredentialWithOptions($request, $runtime);
    }

    /**
     * @param DatasetConfigFindAllRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DatasetConfigFindAllResponse
     */
    public function datasetConfigFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetConfigFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetConfigFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetConfigFindAllRequest $request
     *
     * @return DatasetConfigFindAllResponse
     */
    public function datasetConfigFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetConfigFindAllWithOptions($request, $runtime);
    }

    /**
     * @param DatasetConfigFindOneRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DatasetConfigFindOneResponse
     */
    public function datasetConfigFindOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetConfigFindOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetConfigFindOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetConfigFindOneRequest $request
     *
     * @return DatasetConfigFindOneResponse
     */
    public function datasetConfigFindOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetConfigFindOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetConfigUpdateOneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DatasetConfigUpdateOneResponse
     */
    public function datasetConfigUpdateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetConfigUpdateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetConfigUpdateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetConfigUpdateOneRequest $request
     *
     * @return DatasetConfigUpdateOneResponse
     */
    public function datasetConfigUpdateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetConfigUpdateOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetCreateOneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DatasetCreateOneResponse
     */
    public function datasetCreateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetCreateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetCreateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetCreateOneRequest $request
     *
     * @return DatasetCreateOneResponse
     */
    public function datasetCreateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetCreateOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetDeteleOneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DatasetDeteleOneResponse
     */
    public function datasetDeteleOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        $body = [];
        if (!Utils::isUnset($request->datasetId)) {
            $body['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DatasetDeteleOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetDeteleOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetDeteleOneRequest $request
     *
     * @return DatasetDeteleOneResponse
     */
    public function datasetDeteleOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetDeteleOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetFindAllRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DatasetFindAllResponse
     */
    public function datasetFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->noProject)) {
            $query['NoProject'] = $request->noProject;
        }
        if (!Utils::isUnset($request->notProjectId)) {
            $query['NotProjectId'] = $request->notProjectId;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->typeId)) {
            $query['TypeId'] = $request->typeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetFindAllRequest $request
     *
     * @return DatasetFindAllResponse
     */
    public function datasetFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetFindAllWithOptions($request, $runtime);
    }

    /**
     * @param DatasetPublishPublishRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DatasetPublishPublishResponse
     */
    public function datasetPublishPublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->overwriteLatest)) {
            $query['OverwriteLatest'] = $request->overwriteLatest;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetPublishPublish',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetPublishPublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetPublishPublishRequest $request
     *
     * @return DatasetPublishPublishResponse
     */
    public function datasetPublishPublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetPublishPublishWithOptions($request, $runtime);
    }

    /**
     * @param DatasetTypeFindAllRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DatasetTypeFindAllResponse
     */
    public function datasetTypeFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetTypeFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetTypeFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetTypeFindAllRequest $request
     *
     * @return DatasetTypeFindAllResponse
     */
    public function datasetTypeFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetTypeFindAllWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUnbindProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DatasetUnbindProjectResponse
     */
    public function datasetUnbindProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUnbindProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUnbindProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUnbindProjectRequest $request
     *
     * @return DatasetUnbindProjectResponse
     */
    public function datasetUnbindProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUnbindProjectWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUpdateOneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DatasetUpdateOneResponse
     */
    public function datasetUpdateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->typeId)) {
            $query['TypeId'] = $request->typeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUpdateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUpdateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUpdateOneRequest $request
     *
     * @return DatasetUpdateOneResponse
     */
    public function datasetUpdateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUpdateOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUploadCreateOneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DatasetUploadCreateOneResponse
     */
    public function datasetUploadCreateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->deviceKey)) {
            $query['DeviceKey'] = $request->deviceKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUploadCreateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUploadCreateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUploadCreateOneRequest $request
     *
     * @return DatasetUploadCreateOneResponse
     */
    public function datasetUploadCreateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUploadCreateOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUploadDeleteOneRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DatasetUploadDeleteOneResponse
     */
    public function datasetUploadDeleteOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['UploadId'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUploadDeleteOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUploadDeleteOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUploadDeleteOneRequest $request
     *
     * @return DatasetUploadDeleteOneResponse
     */
    public function datasetUploadDeleteOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUploadDeleteOneWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUploadDeleteOssFileRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DatasetUploadDeleteOssFileResponse
     */
    public function datasetUploadDeleteOssFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['UploadId'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUploadDeleteOssFile',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUploadDeleteOssFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUploadDeleteOssFileRequest $request
     *
     * @return DatasetUploadDeleteOssFileResponse
     */
    public function datasetUploadDeleteOssFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUploadDeleteOssFileWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUploadFindByDatasetIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DatasetUploadFindByDatasetIdResponse
     */
    public function datasetUploadFindByDatasetIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUploadFindByDatasetId',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUploadFindByDatasetIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUploadFindByDatasetIdRequest $request
     *
     * @return DatasetUploadFindByDatasetIdResponse
     */
    public function datasetUploadFindByDatasetId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUploadFindByDatasetIdWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUploadFindByProjectIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DatasetUploadFindByProjectIdResponse
     */
    public function datasetUploadFindByProjectIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->typeId)) {
            $query['TypeId'] = $request->typeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUploadFindByProjectId',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUploadFindByProjectIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUploadFindByProjectIdRequest $request
     *
     * @return DatasetUploadFindByProjectIdResponse
     */
    public function datasetUploadFindByProjectId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUploadFindByProjectIdWithOptions($request, $runtime);
    }

    /**
     * @param DatasetUploadFindByProjectIdAppRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DatasetUploadFindByProjectIdAppResponse
     */
    public function datasetUploadFindByProjectIdAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->typeId)) {
            $query['TypeId'] = $request->typeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DatasetUploadFindByProjectIdApp',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DatasetUploadFindByProjectIdAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DatasetUploadFindByProjectIdAppRequest $request
     *
     * @return DatasetUploadFindByProjectIdAppResponse
     */
    public function datasetUploadFindByProjectIdApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->datasetUploadFindByProjectIdAppWithOptions($request, $runtime);
    }

    /**
     * @param DelBimDrawingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DelBimDrawingResponse
     */
    public function delBimDrawingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelBimDrawing',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DelBimDrawingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelBimDrawingRequest $request
     *
     * @return DelBimDrawingResponse
     */
    public function delBimDrawing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delBimDrawingWithOptions($request, $runtime);
    }

    /**
     * @param DelBimProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DelBimProjectResponse
     */
    public function delBimProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DelBimProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DelBimProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DelBimProjectRequest $request
     *
     * @return DelBimProjectResponse
     */
    public function delBimProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delBimProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMaterialRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMaterialResponse
     */
    public function deleteMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMaterial',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMaterialRequest $request
     *
     * @return DeleteMaterialResponse
     */
    public function deleteMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMaterialsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMaterialsResponse
     */
    public function deleteMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMaterials',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMaterialsRequest $request
     *
     * @return DeleteMaterialsResponse
     */
    public function deleteMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteOneResponse
     */
    public function deleteOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOneRequest $request
     *
     * @return DeleteOneResponse
     */
    public function deleteOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOneWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectTransModelRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteProjectTransModelResponse
     */
    public function deleteProjectTransModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->transModelId)) {
            $query['TransModelId'] = $request->transModelId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProjectTransModel',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectTransModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProjectTransModelRequest $request
     *
     * @return DeleteProjectTransModelResponse
     */
    public function deleteProjectTransModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectTransModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQRCodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteQRCodeResponse
     */
    public function deleteQRCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SId)) {
            $query['SId'] = $request->SId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQRCode',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQRCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQRCodeRequest $request
     *
     * @return DeleteQRCodeResponse
     */
    public function deleteQRCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQRCodeWithOptions($request, $runtime);
    }

    /**
     * @param DisabelUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisabelUserResponse
     */
    public function disabelUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisabelUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisabelUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisabelUserRequest $request
     *
     * @return DisabelUserResponse
     */
    public function disabelUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disabelUserWithOptions($request, $runtime);
    }

    /**
     * @param FindRegionRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FindRegionResponse
     */
    public function findRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->regionCode)) {
            $query['RegionCode'] = $request->regionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindRegion',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FindRegionRequest $request
     *
     * @return FindRegionResponse
     */
    public function findRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findRegionWithOptions($request, $runtime);
    }

    /**
     * @param FloorPlanRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FloorPlanResponse
     */
    public function floorPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->ossKey)) {
            $query['OssKey'] = $request->ossKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FloorPlan',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FloorPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FloorPlanRequest $request
     *
     * @return FloorPlanResponse
     */
    public function floorPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->floorPlanWithOptions($request, $runtime);
    }

    /**
     * @param GetBimDrawingDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetBimDrawingDetailResponse
     */
    public function getBimDrawingDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drawingId)) {
            $query['DrawingId'] = $request->drawingId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimDrawingDetail',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimDrawingDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimDrawingDetailRequest $request
     *
     * @return GetBimDrawingDetailResponse
     */
    public function getBimDrawingDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimDrawingDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetBimDrawingListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBimDrawingListResponse
     */
    public function getBimDrawingListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimDrawingList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimDrawingListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimDrawingListRequest $request
     *
     * @return GetBimDrawingListResponse
     */
    public function getBimDrawingList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimDrawingListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimDrawingRenderRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetBimDrawingRenderResponse
     */
    public function getBimDrawingRenderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drawingId)) {
            $query['DrawingId'] = $request->drawingId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimDrawingRender',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimDrawingRenderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimDrawingRenderRequest $request
     *
     * @return GetBimDrawingRenderResponse
     */
    public function getBimDrawingRender($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimDrawingRenderWithOptions($request, $runtime);
    }

    /**
     * @param GetBimDrawingStatusRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetBimDrawingStatusResponse
     */
    public function getBimDrawingStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetBimDrawingStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimDrawingStatus',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimDrawingStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimDrawingStatusRequest $request
     *
     * @return GetBimDrawingStatusResponse
     */
    public function getBimDrawingStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimDrawingStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetBimFragmentListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBimFragmentListResponse
     */
    public function getBimFragmentListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drawingId)) {
            $query['DrawingId'] = $request->drawingId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimFragmentList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimFragmentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimFragmentListRequest $request
     *
     * @return GetBimFragmentListResponse
     */
    public function getBimFragmentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimFragmentListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimGlbModelListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBimGlbModelListResponse
     */
    public function getBimGlbModelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimGlbModelList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimGlbModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimGlbModelListRequest $request
     *
     * @return GetBimGlbModelListResponse
     */
    public function getBimGlbModelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimGlbModelListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimModelConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBimModelConfigResponse
     */
    public function getBimModelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimModelConfig',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimModelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimModelConfigRequest $request
     *
     * @return GetBimModelConfigResponse
     */
    public function getBimModelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimModelConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetBimOriginModelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBimOriginModelResponse
     */
    public function getBimOriginModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimOriginModel',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimOriginModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimOriginModelRequest $request
     *
     * @return GetBimOriginModelResponse
     */
    public function getBimOriginModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimOriginModelWithOptions($request, $runtime);
    }

    /**
     * @param GetBimProjectDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetBimProjectDetailResponse
     */
    public function getBimProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimProjectDetail',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimProjectDetailRequest $request
     *
     * @return GetBimProjectDetailResponse
     */
    public function getBimProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetBimProjectDrawFilesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetBimProjectDrawFilesResponse
     */
    public function getBimProjectDrawFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subject)) {
            $query['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimProjectDrawFiles',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimProjectDrawFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimProjectDrawFilesRequest $request
     *
     * @return GetBimProjectDrawFilesResponse
     */
    public function getBimProjectDrawFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimProjectDrawFilesWithOptions($request, $runtime);
    }

    /**
     * @param GetBimProjectListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBimProjectListResponse
     */
    public function getBimProjectListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
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
            'action'      => 'GetBimProjectList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimProjectListRequest $request
     *
     * @return GetBimProjectListResponse
     */
    public function getBimProjectList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimProjectListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimProjectListStatusRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBimProjectListStatusResponse
     */
    public function getBimProjectListStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetBimProjectListStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimProjectListStatus',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimProjectListStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimProjectListStatusRequest $request
     *
     * @return GetBimProjectListStatusResponse
     */
    public function getBimProjectListStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimProjectListStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetBimProjectShareModelListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetBimProjectShareModelListResponse
     */
    public function getBimProjectShareModelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->shareId)) {
            $query['ShareId'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimProjectShareModelList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimProjectShareModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimProjectShareModelListRequest $request
     *
     * @return GetBimProjectShareModelListResponse
     */
    public function getBimProjectShareModelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimProjectShareModelListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimStandardAutoMarkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetBimStandardAutoMarkResponse
     */
    public function getBimStandardAutoMarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimStandardAutoMark',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimStandardAutoMarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimStandardAutoMarkRequest $request
     *
     * @return GetBimStandardAutoMarkResponse
     */
    public function getBimStandardAutoMark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimStandardAutoMarkWithOptions($request, $runtime);
    }

    /**
     * @param GetBimStandardListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBimStandardListResponse
     */
    public function getBimStandardListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimStandardList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimStandardListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimStandardListRequest $request
     *
     * @return GetBimStandardListResponse
     */
    public function getBimStandardList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimStandardListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimStandardPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBimStandardPlanResponse
     */
    public function getBimStandardPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standard)) {
            $query['Standard'] = $request->standard;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimStandardPlan',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimStandardPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimStandardPlanRequest $request
     *
     * @return GetBimStandardPlanResponse
     */
    public function getBimStandardPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimStandardPlanWithOptions($request, $runtime);
    }

    /**
     * @param GetBimStandardRenderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBimStandardRenderResponse
     */
    public function getBimStandardRenderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimStandardRender',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimStandardRenderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimStandardRenderRequest $request
     *
     * @return GetBimStandardRenderResponse
     */
    public function getBimStandardRender($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimStandardRenderWithOptions($request, $runtime);
    }

    /**
     * @param GetBimStandardSampleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBimStandardSampleResponse
     */
    public function getBimStandardSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimStandardSample',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimStandardSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimStandardSampleRequest $request
     *
     * @return GetBimStandardSampleResponse
     */
    public function getBimStandardSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimStandardSampleWithOptions($request, $runtime);
    }

    /**
     * @param GetBimStandardStatusByIdsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetBimStandardStatusByIdsResponse
     */
    public function getBimStandardStatusByIdsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetBimStandardStatusByIdsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ids)) {
            $request->idsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'Ids', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->idsShrink)) {
            $query['Ids'] = $request->idsShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimStandardStatusByIds',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimStandardStatusByIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimStandardStatusByIdsRequest $request
     *
     * @return GetBimStandardStatusByIdsResponse
     */
    public function getBimStandardStatusByIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimStandardStatusByIdsWithOptions($request, $runtime);
    }

    /**
     * @param GetBimTaskDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetBimTaskDetailResponse
     */
    public function getBimTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimTaskDetail',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimTaskDetailRequest $request
     *
     * @return GetBimTaskDetailResponse
     */
    public function getBimTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetBimTenantFlowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetBimTenantFlowResponse
     */
    public function getBimTenantFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimTenantFlow',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimTenantFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimTenantFlowRequest $request
     *
     * @return GetBimTenantFlowResponse
     */
    public function getBimTenantFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimTenantFlowWithOptions($request, $runtime);
    }

    /**
     * @param GetBimTransModelListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBimTransModelListResponse
     */
    public function getBimTransModelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimTransModelList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimTransModelListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimTransModelListRequest $request
     *
     * @return GetBimTransModelListResponse
     */
    public function getBimTransModelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimTransModelListWithOptions($request, $runtime);
    }

    /**
     * @param GetBimUploadStsTokenRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBimUploadStsTokenResponse
     */
    public function getBimUploadStsTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBimUploadStsToken',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBimUploadStsTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBimUploadStsTokenRequest $request
     *
     * @return GetBimUploadStsTokenResponse
     */
    public function getBimUploadStsToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBimUploadStsTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetCurrentUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCurrentUserResponse
     */
    public function getCurrentUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCurrentUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCurrentUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCurrentUserRequest $request
     *
     * @return GetCurrentUserResponse
     */
    public function getCurrentUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCurrentUserWithOptions($request, $runtime);
    }

    /**
     * @param GetInstancesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetInstancesResponse
     */
    public function getInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineNodeId)) {
            $query['PipelineNodeId'] = $request->pipelineNodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstances',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstancesRequest $request
     *
     * @return GetInstancesResponse
     */
    public function getInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetLatestNodeByTypeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLatestNodeByTypeResponse
     */
    public function getLatestNodeByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLatestNodeByType',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLatestNodeByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLatestNodeByTypeRequest $request
     *
     * @return GetLatestNodeByTypeResponse
     */
    public function getLatestNodeByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLatestNodeByTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetMaterialListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMaterialListResponse
     */
    public function getMaterialListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMaterialList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMaterialListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMaterialListRequest $request
     *
     * @return GetMaterialListResponse
     */
    public function getMaterialList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMaterialListWithOptions($request, $runtime);
    }

    /**
     * @param GetOssCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetOssCredentialResponse
     */
    public function getOssCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssCredential',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssCredentialRequest $request
     *
     * @return GetOssCredentialResponse
     */
    public function getOssCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCredentialWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectPhaseDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetProjectPhaseDetailResponse
     */
    public function getProjectPhaseDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectPhaseDetail',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProjectPhaseDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProjectPhaseDetailRequest $request
     *
     * @return GetProjectPhaseDetailResponse
     */
    public function getProjectPhaseDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectPhaseDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetStatusAndOssRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetStatusAndOssResponse
     */
    public function getStatusAndOssWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->body)) {
            $query['body'] = $request->body;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStatusAndOss',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStatusAndOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStatusAndOssRequest $request
     *
     * @return GetStatusAndOssResponse
     */
    public function getStatusAndOss($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStatusAndOssWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTemplateListResponse
     */
    public function getTemplateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->current)) {
            $query['Current'] = $request->current;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->style)) {
            $query['Style'] = $request->style;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateList',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateListRequest $request
     *
     * @return GetTemplateListResponse
     */
    public function getTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateListWithOptions($request, $runtime);
    }

    /**
     * @param GetTokenRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pathType)) {
            $query['PathType'] = $request->pathType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * @param MaterialCreateOnePictureRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MaterialCreateOnePictureResponse
     */
    public function materialCreateOnePictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialCreateOnePicture',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialCreateOnePictureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialCreateOnePictureRequest $request
     *
     * @return MaterialCreateOnePictureResponse
     */
    public function materialCreateOnePicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialCreateOnePictureWithOptions($request, $runtime);
    }

    /**
     * @param MaterialCreateOneVideoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return MaterialCreateOneVideoResponse
     */
    public function materialCreateOneVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialCreateOneVideo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialCreateOneVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialCreateOneVideoRequest $request
     *
     * @return MaterialCreateOneVideoResponse
     */
    public function materialCreateOneVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialCreateOneVideoWithOptions($request, $runtime);
    }

    /**
     * @param MaterialDeleteOneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MaterialDeleteOneResponse
     */
    public function materialDeleteOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialDeleteOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialDeleteOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialDeleteOneRequest $request
     *
     * @return MaterialDeleteOneResponse
     */
    public function materialDeleteOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialDeleteOneWithOptions($request, $runtime);
    }

    /**
     * @param MaterialFindAllRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MaterialFindAllResponse
     */
    public function materialFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->materialType)) {
            $query['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialFindAllRequest $request
     *
     * @return MaterialFindAllResponse
     */
    public function materialFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialFindAllWithOptions($request, $runtime);
    }

    /**
     * @param MaterialFindAllPictureRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return MaterialFindAllPictureResponse
     */
    public function materialFindAllPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialFindAllPicture',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialFindAllPictureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialFindAllPictureRequest $request
     *
     * @return MaterialFindAllPictureResponse
     */
    public function materialFindAllPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialFindAllPictureWithOptions($request, $runtime);
    }

    /**
     * @param MaterialFindAllVideoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MaterialFindAllVideoResponse
     */
    public function materialFindAllVideoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialFindAllVideo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialFindAllVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialFindAllVideoRequest $request
     *
     * @return MaterialFindAllVideoResponse
     */
    public function materialFindAllVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialFindAllVideoWithOptions($request, $runtime);
    }

    /**
     * @param MaterialFindOneRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MaterialFindOneResponse
     */
    public function materialFindOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialFindOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialFindOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialFindOneRequest $request
     *
     * @return MaterialFindOneResponse
     */
    public function materialFindOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialFindOneWithOptions($request, $runtime);
    }

    /**
     * @param MaterialFlushUploadRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return MaterialFlushUploadResponse
     */
    public function materialFlushUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->materialId)) {
            $query['MaterialId'] = $request->materialId;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialFlushUpload',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialFlushUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialFlushUploadRequest $request
     *
     * @return MaterialFlushUploadResponse
     */
    public function materialFlushUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialFlushUploadWithOptions($request, $runtime);
    }

    /**
     * @param MaterialGetOssCreadentialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return MaterialGetOssCreadentialsResponse
     */
    public function materialGetOssCreadentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialGetOssCreadentials',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialGetOssCreadentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialGetOssCreadentialsRequest $request
     *
     * @return MaterialGetOssCreadentialsResponse
     */
    public function materialGetOssCreadentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialGetOssCreadentialsWithOptions($request, $runtime);
    }

    /**
     * @param MaterialUpdateOneRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MaterialUpdateOneResponse
     */
    public function materialUpdateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MaterialUpdateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MaterialUpdateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MaterialUpdateOneRequest $request
     *
     * @return MaterialUpdateOneResponse
     */
    public function materialUpdateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->materialUpdateOneWithOptions($request, $runtime);
    }

    /**
     * @param OrderAssignedScanISVRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OrderAssignedScanISVResponse
     */
    public function orderAssignedScanISVWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderAssignedScanISV',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderAssignedScanISVResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderAssignedScanISVRequest $request
     *
     * @return OrderAssignedScanISVResponse
     */
    public function orderAssignedScanISV($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderAssignedScanISVWithOptions($request, $runtime);
    }

    /**
     * @param OrderBatchCreateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OrderBatchCreateResponse
     */
    public function orderBatchCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderBatchCreate',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderBatchCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderBatchCreateRequest $request
     *
     * @return OrderBatchCreateResponse
     */
    public function orderBatchCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderBatchCreateWithOptions($request, $runtime);
    }

    /**
     * @param OrderBatchDeleteRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OrderBatchDeleteResponse
     */
    public function orderBatchDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderBatchDelete',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderBatchDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderBatchDeleteRequest $request
     *
     * @return OrderBatchDeleteResponse
     */
    public function orderBatchDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderBatchDeleteWithOptions($request, $runtime);
    }

    /**
     * @param OrderBatchUpdateOrderStateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return OrderBatchUpdateOrderStateResponse
     */
    public function orderBatchUpdateOrderStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderBatchUpdateOrderState',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderBatchUpdateOrderStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderBatchUpdateOrderStateRequest $request
     *
     * @return OrderBatchUpdateOrderStateResponse
     */
    public function orderBatchUpdateOrderState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderBatchUpdateOrderStateWithOptions($request, $runtime);
    }

    /**
     * @param OrderFindAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OrderFindAllResponse
     */
    public function orderFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderFindAllRequest $request
     *
     * @return OrderFindAllResponse
     */
    public function orderFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderFindAllWithOptions($request, $runtime);
    }

    /**
     * @param OrderQueryOneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OrderQueryOneResponse
     */
    public function orderQueryOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderQueryOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderQueryOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderQueryOneRequest $request
     *
     * @return OrderQueryOneResponse
     */
    public function orderQueryOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderQueryOneWithOptions($request, $runtime);
    }

    /**
     * @param OrderQueryOneAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OrderQueryOneAppResponse
     */
    public function orderQueryOneAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderQueryOneApp',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderQueryOneAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderQueryOneAppRequest $request
     *
     * @return OrderQueryOneAppResponse
     */
    public function orderQueryOneApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderQueryOneAppWithOptions($request, $runtime);
    }

    /**
     * @param OrderUpdateOneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OrderUpdateOneResponse
     */
    public function orderUpdateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OrderUpdateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OrderUpdateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OrderUpdateOneRequest $request
     *
     * @return OrderUpdateOneResponse
     */
    public function orderUpdateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->orderUpdateOneWithOptions($request, $runtime);
    }

    /**
     * @param PCDatasetCreateOneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PCDatasetCreateOneResponse
     */
    public function pCDatasetCreateOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->body)) {
            $query['Body'] = $request->body;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PCDatasetCreateOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PCDatasetCreateOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PCDatasetCreateOneRequest $request
     *
     * @return PCDatasetCreateOneResponse
     */
    public function pCDatasetCreateOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pCDatasetCreateOneWithOptions($request, $runtime);
    }

    /**
     * @param PCUploadBuildRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PCUploadBuildResponse
     */
    public function pCUploadBuildWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PCUploadBuild',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PCUploadBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PCUploadBuildRequest $request
     *
     * @return PCUploadBuildResponse
     */
    public function pCUploadBuild($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pCUploadBuildWithOptions($request, $runtime);
    }

    /**
     * @param PCUploadPublishRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PCUploadPublishResponse
     */
    public function pCUploadPublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PCUploadPublish',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PCUploadPublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PCUploadPublishRequest $request
     *
     * @return PCUploadPublishResponse
     */
    public function pCUploadPublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pCUploadPublishWithOptions($request, $runtime);
    }

    /**
     * @param PipelineFindAllRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PipelineFindAllResponse
     */
    public function pipelineFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->exposed)) {
            $query['Exposed'] = $request->exposed;
        }
        if (!Utils::isUnset($request->isRoot)) {
            $query['IsRoot'] = $request->isRoot;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PipelineFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PipelineFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PipelineFindAllRequest $request
     *
     * @return PipelineFindAllResponse
     */
    public function pipelineFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pipelineFindAllWithOptions($request, $runtime);
    }

    /**
     * @param ProduceExpoNoticeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ProduceExpoNoticeResponse
     */
    public function produceExpoNoticeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProduceExpoNotice',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProduceExpoNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProduceExpoNoticeRequest $request
     *
     * @return ProduceExpoNoticeResponse
     */
    public function produceExpoNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->produceExpoNoticeWithOptions($request, $runtime);
    }

    /**
     * @param ProduceNoticeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ProduceNoticeResponse
     */
    public function produceNoticeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->operationType)) {
            $query['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProduceNotice',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProduceNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProduceNoticeRequest $request
     *
     * @return ProduceNoticeResponse
     */
    public function produceNotice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->produceNoticeWithOptions($request, $runtime);
    }

    /**
     * @param ProjectCreateOneAPPRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ProjectCreateOneAPPResponse
     */
    public function projectCreateOneAPPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectCreateOneAPP',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectCreateOneAPPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectCreateOneAPPRequest $request
     *
     * @return ProjectCreateOneAPPResponse
     */
    public function projectCreateOneAPP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectCreateOneAPPWithOptions($request, $runtime);
    }

    /**
     * @param ProjectCreateOrUpdateExtInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ProjectCreateOrUpdateExtInfoResponse
     */
    public function projectCreateOrUpdateExtInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->extInfoStr)) {
            $query['ExtInfoStr'] = $request->extInfoStr;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectCreateOrUpdateExtInfo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectCreateOrUpdateExtInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectCreateOrUpdateExtInfoRequest $request
     *
     * @return ProjectCreateOrUpdateExtInfoResponse
     */
    public function projectCreateOrUpdateExtInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectCreateOrUpdateExtInfoWithOptions($request, $runtime);
    }

    /**
     * @param ProjectCreateOrUpdateExtInfoAppRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ProjectCreateOrUpdateExtInfoAppResponse
     */
    public function projectCreateOrUpdateExtInfoAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->extInfoStr)) {
            $query['ExtInfoStr'] = $request->extInfoStr;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectCreateOrUpdateExtInfoApp',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectCreateOrUpdateExtInfoAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectCreateOrUpdateExtInfoAppRequest $request
     *
     * @return ProjectCreateOrUpdateExtInfoAppResponse
     */
    public function projectCreateOrUpdateExtInfoApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectCreateOrUpdateExtInfoAppWithOptions($request, $runtime);
    }

    /**
     * @param ProjectFindAllRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ProjectFindAllResponse
     */
    public function projectFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->jsonParams)) {
            $query['JsonParams'] = $request->jsonParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectFindAllRequest $request
     *
     * @return ProjectFindAllResponse
     */
    public function projectFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectFindAllWithOptions($request, $runtime);
    }

    /**
     * @param ProjectFindUploadsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ProjectFindUploadsResponse
     */
    public function projectFindUploadsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->createdByCurrentUser)) {
            $query['CreatedByCurrentUser'] = $request->createdByCurrentUser;
        }
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->live)) {
            $query['Live'] = $request->live;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectFindUploads',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectFindUploadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectFindUploadsRequest $request
     *
     * @return ProjectFindUploadsResponse
     */
    public function projectFindUploads($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectFindUploadsWithOptions($request, $runtime);
    }

    /**
     * @param ProjectGetOneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ProjectGetOneResponse
     */
    public function projectGetOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectGetOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectGetOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectGetOneRequest $request
     *
     * @return ProjectGetOneResponse
     */
    public function projectGetOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectGetOneWithOptions($request, $runtime);
    }

    /**
     * @param ProjectGetOneAppRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ProjectGetOneAppResponse
     */
    public function projectGetOneAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectGetOneApp',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectGetOneAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectGetOneAppRequest $request
     *
     * @return ProjectGetOneAppResponse
     */
    public function projectGetOneApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectGetOneAppWithOptions($request, $runtime);
    }

    /**
     * @param ProjectGetStatusAndOssRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ProjectGetStatusAndOssResponse
     */
    public function projectGetStatusAndOssWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectGetStatusAndOss',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectGetStatusAndOssResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectGetStatusAndOssRequest $request
     *
     * @return ProjectGetStatusAndOssResponse
     */
    public function projectGetStatusAndOss($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectGetStatusAndOssWithOptions($request, $runtime);
    }

    /**
     * @param ProjectSyncProjectStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ProjectSyncProjectStatusResponse
     */
    public function projectSyncProjectStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ProjectSyncProjectStatus',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ProjectSyncProjectStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ProjectSyncProjectStatusRequest $request
     *
     * @return ProjectSyncProjectStatusResponse
     */
    public function projectSyncProjectStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->projectSyncProjectStatusWithOptions($request, $runtime);
    }

    /**
     * @param PublishGalleryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishGalleryResponse
     */
    public function publishGalleryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishGallery',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishGalleryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishGalleryRequest $request
     *
     * @return PublishGalleryResponse
     */
    public function publishGallery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishGalleryWithOptions($request, $runtime);
    }

    /**
     * @param PublishRealRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PublishRealResponse
     */
    public function publishRealWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->datasetId)) {
            $query['DatasetId'] = $request->datasetId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishReal',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishRealResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishRealRequest $request
     *
     * @return PublishRealResponse
     */
    public function publishReal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRealWithOptions($request, $runtime);
    }

    /**
     * @param QueryAccountLabelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAccountLabelResponse
     */
    public function queryAccountLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labelSeries)) {
            $query['LabelSeries'] = $request->labelSeries;
        }
        if (!Utils::isUnset($request->PK)) {
            $query['PK'] = $request->PK;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccountLabel',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccountLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAccountLabelRequest $request
     *
     * @return QueryAccountLabelResponse
     */
    public function queryAccountLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountLabelWithOptions($request, $runtime);
    }

    /**
     * @param QueryBizLogByOpTypeAndTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryBizLogByOpTypeAndTimeResponse
     */
    public function queryBizLogByOpTypeAndTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBizLogByOpTypeAndTime',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBizLogByOpTypeAndTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBizLogByOpTypeAndTimeRequest $request
     *
     * @return QueryBizLogByOpTypeAndTimeResponse
     */
    public function queryBizLogByOpTypeAndTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBizLogByOpTypeAndTimeWithOptions($request, $runtime);
    }

    /**
     * @param QueryQRCodeInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryQRCodeInfoResponse
     */
    public function queryQRCodeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SId)) {
            $query['SId'] = $request->SId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryQRCodeInfo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryQRCodeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryQRCodeInfoRequest $request
     *
     * @return QueryQRCodeInfoResponse
     */
    public function queryQRCodeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryQRCodeInfoWithOptions($request, $runtime);
    }

    /**
     * @param ScanDataCreateProjectRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ScanDataCreateProjectResponse
     */
    public function scanDataCreateProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScanDataCreateProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createScanUserDataRequest)) {
            $request->createScanUserDataRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->createScanUserDataRequest), 'CreateScanUserDataRequest', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->createScanUserDataRequestShrink)) {
            $query['CreateScanUserDataRequest'] = $request->createScanUserDataRequestShrink;
        }
        if (!Utils::isUnset($request->projectDesc)) {
            $query['ProjectDesc'] = $request->projectDesc;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanDataCreateProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanDataCreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanDataCreateProjectRequest $request
     *
     * @return ScanDataCreateProjectResponse
     */
    public function scanDataCreateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanDataCreateProjectWithOptions($request, $runtime);
    }

    /**
     * @param ScanDataQueryProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ScanDataQueryProjectResponse
     */
    public function scanDataQueryProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanDataQueryProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanDataQueryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanDataQueryProjectRequest $request
     *
     * @return ScanDataQueryProjectResponse
     */
    public function scanDataQueryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanDataQueryProjectWithOptions($request, $runtime);
    }

    /**
     * @param ScanDataRemoveRoleRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ScanDataRemoveRoleResponse
     */
    public function scanDataRemoveRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScanDataRemoveRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->removeUserDataRequest)) {
            $request->removeUserDataRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->removeUserDataRequest), 'RemoveUserDataRequest', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->removeUserDataRequestShrink)) {
            $query['RemoveUserDataRequest'] = $request->removeUserDataRequestShrink;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanDataRemoveRole',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanDataRemoveRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanDataRemoveRoleRequest $request
     *
     * @return ScanDataRemoveRoleResponse
     */
    public function scanDataRemoveRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanDataRemoveRoleWithOptions($request, $runtime);
    }

    /**
     * @param ScanDataShareProjectRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ScanDataShareProjectResponse
     */
    public function scanDataShareProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScanDataShareProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->shareUserDataRequest)) {
            $request->shareUserDataRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->shareUserDataRequest), 'ShareUserDataRequest', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->shareUserDataRequestShrink)) {
            $query['ShareUserDataRequest'] = $request->shareUserDataRequestShrink;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanDataShareProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanDataShareProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanDataShareProjectRequest $request
     *
     * @return ScanDataShareProjectResponse
     */
    public function scanDataShareProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanDataShareProjectWithOptions($request, $runtime);
    }

    /**
     * @param ScanDataUpdateProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ScanDataUpdateProjectResponse
     */
    public function scanDataUpdateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->projectDesc)) {
            $query['ProjectDesc'] = $request->projectDesc;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->userMobNum)) {
            $query['UserMobNum'] = $request->userMobNum;
        }
        if (!Utils::isUnset($request->userNick)) {
            $query['UserNick'] = $request->userNick;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanDataUpdateProject',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScanDataUpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScanDataUpdateProjectRequest $request
     *
     * @return ScanDataUpdateProjectResponse
     */
    public function scanDataUpdateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanDataUpdateProjectWithOptions($request, $runtime);
    }

    /**
     * @param SpiltBimDrawingRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SpiltBimDrawingResponse
     */
    public function spiltBimDrawingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drawingId)) {
            $query['DrawingId'] = $request->drawingId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SpiltBimDrawing',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SpiltBimDrawingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SpiltBimDrawingRequest $request
     *
     * @return SpiltBimDrawingResponse
     */
    public function spiltBimDrawing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->spiltBimDrawingWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return TestPopParamsResponse
     */
    public function testPopParamsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'TestPopParams',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TestPopParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return TestPopParamsResponse
     */
    public function testPopParams()
    {
        $runtime = new RuntimeOptions([]);

        return $this->testPopParamsWithOptions($runtime);
    }

    /**
     * @param TransTextToAudioRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TransTextToAudioResponse
     */
    public function transTextToAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TransTextToAudio',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransTextToAudioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransTextToAudioRequest $request
     *
     * @return TransTextToAudioResponse
     */
    public function transTextToAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transTextToAudioWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBimFragmentRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateBimFragmentResponse
     */
    public function updateBimFragmentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBimFragmentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->coordinates)) {
            $request->coordinatesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->coordinates, 'Coordinates', 'json');
        }
        if (!Utils::isUnset($tmpReq->floorInfo)) {
            $request->floorInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->floorInfo), 'FloorInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->buildingNo)) {
            $query['BuildingNo'] = $request->buildingNo;
        }
        if (!Utils::isUnset($request->coordinatesShrink)) {
            $query['Coordinates'] = $request->coordinatesShrink;
        }
        if (!Utils::isUnset($request->drawingId)) {
            $query['DrawingId'] = $request->drawingId;
        }
        if (!Utils::isUnset($request->floorInfoShrink)) {
            $query['FloorInfo'] = $request->floorInfoShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->selectionMode)) {
            $query['SelectionMode'] = $request->selectionMode;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->suffix)) {
            $query['Suffix'] = $request->suffix;
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
            'action'      => 'UpdateBimFragment',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBimFragmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBimFragmentRequest $request
     *
     * @return UpdateBimFragmentResponse
     */
    public function updateBimFragment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBimFragmentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBimModelConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateBimModelConfigResponse
     */
    public function updateBimModelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beamHeight)) {
            $query['BeamHeight'] = $request->beamHeight;
        }
        if (!Utils::isUnset($request->beamMode)) {
            $query['BeamMode'] = $request->beamMode;
        }
        if (!Utils::isUnset($request->beamOffset)) {
            $query['BeamOffset'] = $request->beamOffset;
        }
        if (!Utils::isUnset($request->doorHeight)) {
            $query['DoorHeight'] = $request->doorHeight;
        }
        if (!Utils::isUnset($request->doorOffset)) {
            $query['DoorOffset'] = $request->doorOffset;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->roomMode)) {
            $query['RoomMode'] = $request->roomMode;
        }
        if (!Utils::isUnset($request->slabMode)) {
            $query['SlabMode'] = $request->slabMode;
        }
        if (!Utils::isUnset($request->slabThickness)) {
            $query['SlabThickness'] = $request->slabThickness;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->windowHeight)) {
            $query['WindowHeight'] = $request->windowHeight;
        }
        if (!Utils::isUnset($request->windowOffset)) {
            $query['WindowOffset'] = $request->windowOffset;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBimModelConfig',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBimModelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBimModelConfigRequest $request
     *
     * @return UpdateBimModelConfigResponse
     */
    public function updateBimModelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBimModelConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBimProjectDrawFilesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateBimProjectDrawFilesResponse
     */
    public function updateBimProjectDrawFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBimProjectDrawFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->architectureFiles)) {
            $request->architectureFilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->architectureFiles, 'ArchitectureFiles', 'json');
        }
        if (!Utils::isUnset($tmpReq->structureFiles)) {
            $request->structureFilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->structureFiles, 'StructureFiles', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->architectureFilesShrink)) {
            $query['ArchitectureFiles'] = $request->architectureFilesShrink;
        }
        if (!Utils::isUnset($request->structureFilesShrink)) {
            $query['StructureFiles'] = $request->structureFilesShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBimProjectDrawFiles',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBimProjectDrawFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBimProjectDrawFilesRequest $request
     *
     * @return UpdateBimProjectDrawFilesResponse
     */
    public function updateBimProjectDrawFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBimProjectDrawFilesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBimStandardDwInfoRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateBimStandardDwInfoResponse
     */
    public function updateBimStandardDwInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBimStandardDwInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->data)) {
            $request->dataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->data, 'Data', 'json');
        }
        if (!Utils::isUnset($tmpReq->keys)) {
            $request->keysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataShrink)) {
            $query['Data'] = $request->dataShrink;
        }
        if (!Utils::isUnset($request->keysShrink)) {
            $query['Keys'] = $request->keysShrink;
        }
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBimStandardDwInfo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBimStandardDwInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBimStandardDwInfoRequest $request
     *
     * @return UpdateBimStandardDwInfoResponse
     */
    public function updateBimStandardDwInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBimStandardDwInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBimStandardElevationRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateBimStandardElevationResponse
     */
    public function updateBimStandardElevationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBimStandardElevationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->floors)) {
            $request->floorsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->floors, 'Floors', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->floorsShrink)) {
            $query['Floors'] = $request->floorsShrink;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->terraceHeight)) {
            $query['TerraceHeight'] = $request->terraceHeight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBimStandardElevation',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBimStandardElevationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBimStandardElevationRequest $request
     *
     * @return UpdateBimStandardElevationResponse
     */
    public function updateBimStandardElevation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBimStandardElevationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBimStandardSlabInfoRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateBimStandardSlabInfoResponse
     */
    public function updateBimStandardSlabInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateBimStandardSlabInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->legends)) {
            $request->legendsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->legends, 'Legends', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->legendsShrink)) {
            $query['Legends'] = $request->legendsShrink;
        }
        if (!Utils::isUnset($request->rootDir)) {
            $query['RootDir'] = $request->rootDir;
        }
        if (!Utils::isUnset($request->standardId)) {
            $query['StandardId'] = $request->standardId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->thickness)) {
            $query['Thickness'] = $request->thickness;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBimStandardSlabInfo',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBimStandardSlabInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBimStandardSlabInfoRequest $request
     *
     * @return UpdateBimStandardSlabInfoResponse
     */
    public function updateBimStandardSlabInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBimStandardSlabInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNoteRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateNoteResponse
     */
    public function updateNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNote',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNoteRequest $request
     *
     * @return UpdateNoteResponse
     */
    public function updateNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNoteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }

    /**
     * @param UserFindAllRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UserFindAllResponse
     */
    public function userFindAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserFindAll',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserFindAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserFindAllRequest $request
     *
     * @return UserFindAllResponse
     */
    public function userFindAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userFindAllWithOptions($request, $runtime);
    }

    /**
     * @param UserFindByRolesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UserFindByRolesResponse
     */
    public function userFindByRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->roleNames)) {
            $query['RoleNames'] = $request->roleNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserFindByRoles',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserFindByRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserFindByRolesRequest $request
     *
     * @return UserFindByRolesResponse
     */
    public function userFindByRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userFindByRolesWithOptions($request, $runtime);
    }

    /**
     * @param UserGetOneRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UserGetOneResponse
     */
    public function userGetOneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserGetOne',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserGetOneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserGetOneRequest $request
     *
     * @return UserGetOneResponse
     */
    public function userGetOne($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userGetOneWithOptions($request, $runtime);
    }

    /**
     * @param UserListMenusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UserListMenusResponse
     */
    public function userListMenusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserListMenus',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserListMenusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserListMenusRequest $request
     *
     * @return UserListMenusResponse
     */
    public function userListMenus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userListMenusWithOptions($request, $runtime);
    }

    /**
     * @param UserListPermissionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UserListPermissionsResponse
     */
    public function userListPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserListPermissions',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserListPermissionsRequest $request
     *
     * @return UserListPermissionsResponse
     */
    public function userListPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userListPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param UserListRolesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UserListRolesResponse
     */
    public function userListRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserListRoles',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserListRolesRequest $request
     *
     * @return UserListRolesResponse
     */
    public function userListRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userListRolesWithOptions($request, $runtime);
    }

    /**
     * @param UserListSubRolesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UserListSubRolesResponse
     */
    public function userListSubRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UserListSubRoles',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UserListSubRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UserListSubRolesRequest $request
     *
     * @return UserListSubRolesResponse
     */
    public function userListSubRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->userListSubRolesWithOptions($request, $runtime);
    }

    /**
     * @param ValidAliyunUidRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ValidAliyunUidResponse
     */
    public function validAliyunUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidAliyunUid',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidAliyunUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidAliyunUidRequest $request
     *
     * @return ValidAliyunUidResponse
     */
    public function validAliyunUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validAliyunUidWithOptions($request, $runtime);
    }

    /**
     * @param ValidCompanyNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ValidCompanyNameResponse
     */
    public function validCompanyNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunJwt)) {
            $query['AliyunJwt'] = $request->aliyunJwt;
        }
        if (!Utils::isUnset($request->companyName)) {
            $query['CompanyName'] = $request->companyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidCompanyName',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidCompanyNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidCompanyNameRequest $request
     *
     * @return ValidCompanyNameResponse
     */
    public function validCompanyName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validCompanyNameWithOptions($request, $runtime);
    }

    /**
     * @param VrUserCreateScanUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VrUserCreateScanUserResponse
     */
    public function vrUserCreateScanUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizOrderNo)) {
            $query['BizOrderNo'] = $request->bizOrderNo;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VrUserCreateScanUser',
            'version'     => '2020-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VrUserCreateScanUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VrUserCreateScanUserRequest $request
     *
     * @return VrUserCreateScanUserResponse
     */
    public function vrUserCreateScanUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->vrUserCreateScanUserWithOptions($request, $runtime);
    }
}
