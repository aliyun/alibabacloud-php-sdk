<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\AddMdsMiniConfigRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\AddMdsMiniConfigResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CancelPushSchedulerRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CancelPushSchedulerResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMcubeMiniTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMcubeMiniTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMcubeNebulaTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMcubeNebulaTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMcubePublicTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMcubePublicTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMdsCubeTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ChangeMdsCubeTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CopyMcdpGroupRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CopyMcdpGroupResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateLinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateLinkResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpGroupRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpGroupResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpMaterialRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpMaterialResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpZoneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpZoneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchRollbackTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchRollbackTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeHotpatchTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeMiniAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeMiniAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeMiniTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeMiniTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeNebulaTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeUpgradePackageRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeUpgradePackageResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeUpgradeTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeUpgradeTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeVhostRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeVhostResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeWhitelistForIdeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeWhitelistForIdeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsCubeResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsCubeResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsCubeTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsCubeTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsCubeTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsCubeTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsMiniprogramTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsMiniprogramTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenGlobalDataRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenGlobalDataResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenSingleDataRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenSingleDataResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteCubecardWhitelistContentRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteCubecardWhitelistContentResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpAimRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpAimResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpCrowdRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpCrowdResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpZoneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpZoneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeHotpatchResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeHotpatchResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeMiniAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeMiniAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeNebulaAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeNebulaAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeUpgradeResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeUpgradeResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMdsCubeTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMdsCubeTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMdsWhitelistContentRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMdsWhitelistContentResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExistMcubeRsaKeyRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExistMcubeRsaKeyResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExportMappCenterAppConfigRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExportMappCenterAppConfigResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetFileTokenForUploadToMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetFileTokenForUploadToMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetLogUrlInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetLogUrlInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeFileTokenRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeFileTokenResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeNebulaTaskDetailResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradePackageInfoResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradeTaskInfoRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMcubeUpgradeTaskInfoResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetMdsMiniConfigResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppDonwloadUrlInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppDonwloadUrlInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppEnhanceProcessInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppEnhanceProcessInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListAnalysisCoreIndexRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListAnalysisCoreIndexResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListCubecardAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcdpAimRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcdpAimResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchResourcesRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchResourcesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniAppsRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniPackagesRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniPackagesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaAppsRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaResourcesRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaResourcesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeNebulaTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradePackagesRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradePackagesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradeTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradeTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeWhitelistsRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeWhitelistsResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeResourcesRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeResourcesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeTemplatesRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeTemplatesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListTemplatePageRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListTemplatePageResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\MTRSOCRServiceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\MTRSOCRServiceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBindRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBindResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBroadcastRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBroadcastResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBroadcastShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushQueryDeviceStateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushQueryDeviceStateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushReportRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushReportResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushSimpleRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushSimpleResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushSimpleShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushTemplateShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushUnBindRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushUnBindResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryCubecardFiletokenRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryCubecardFiletokenResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryInfoFromMdpRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryInfoFromMdpResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryLinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryLinkResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpAimRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpAimResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpZoneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpZoneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeHotpatchTaskDetailResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniPackageRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniPackageResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeVhostRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeVhostResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMdsUpgradeTaskDetailRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMdsUpgradeTaskDetailResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsTestreqbodyautogenRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsTestreqbodyautogenResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMpsSchedulerListRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMpsSchedulerListResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMscpRiskInfoRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMscpRiskInfoResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisCoreIndexRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisCoreIndexResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisTaskDetailRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisTaskDetailResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisTaskListRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushAnalysisTaskListResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushSchedulerListRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPushSchedulerListResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\RevokePushMessageRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\RevokePushMessageResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\RevokePushTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\RevokePushTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\RunMsaDiffRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\RunMsaDiffResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\SaveMgsApirestRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\SaveMgsApirestResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\StartUserAppAsyncEnhanceInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\StartUserAppAsyncEnhanceInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateLinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateLinkResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeHotpatchTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeHotpatchTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMdsCubeResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMdsCubeResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMpaasAppInfoRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMpaasAppInfoResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadBitcodeToMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadBitcodeToMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeMiniPackageRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeMiniPackageResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeRsaKeyRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeRsaKeyResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadUserAppToMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadUserAppToMsaResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MPaaS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'mpaas.aliyuncs.com',
            'ap-northeast-1' => 'mpaas.aliyuncs.com',
            'ap-northeast-2-pop' => 'mpaas.aliyuncs.com',
            'ap-south-1' => 'mpaas.aliyuncs.com',
            'ap-southeast-1' => 'mpaas.aliyuncs.com',
            'ap-southeast-2' => 'mpaas.aliyuncs.com',
            'ap-southeast-3' => 'mpaas.aliyuncs.com',
            'ap-southeast-5' => 'mpaas.aliyuncs.com',
            'cn-beijing' => 'mpaas.aliyuncs.com',
            'cn-beijing-finance-1' => 'mpaas.aliyuncs.com',
            'cn-beijing-finance-pop' => 'mpaas.aliyuncs.com',
            'cn-beijing-gov-1' => 'mpaas.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'mpaas.aliyuncs.com',
            'cn-chengdu' => 'mpaas.aliyuncs.com',
            'cn-edge-1' => 'mpaas.aliyuncs.com',
            'cn-fujian' => 'mpaas.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-finance' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-test-306' => 'mpaas.aliyuncs.com',
            'cn-hongkong' => 'mpaas.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'mpaas.aliyuncs.com',
            'cn-huhehaote' => 'mpaas.aliyuncs.com',
            'cn-north-2-gov-1' => 'mpaas.aliyuncs.com',
            'cn-qingdao' => 'mpaas.aliyuncs.com',
            'cn-qingdao-nebula' => 'mpaas.aliyuncs.com',
            'cn-shanghai' => 'mpaas.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'mpaas.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'mpaas.aliyuncs.com',
            'cn-shanghai-finance-1' => 'mpaas.aliyuncs.com',
            'cn-shanghai-inner' => 'mpaas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mpaas.aliyuncs.com',
            'cn-shenzhen' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-inner' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'mpaas.aliyuncs.com',
            'cn-wuhan' => 'mpaas.aliyuncs.com',
            'cn-yushanfang' => 'mpaas.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'mpaas.aliyuncs.com',
            'cn-zhangjiakou' => 'mpaas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'mpaas.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'mpaas.aliyuncs.com',
            'eu-central-1' => 'mpaas.aliyuncs.com',
            'eu-west-1' => 'mpaas.aliyuncs.com',
            'eu-west-1-oxs' => 'mpaas.aliyuncs.com',
            'me-east-1' => 'mpaas.aliyuncs.com',
            'rus-west-1-pop' => 'mpaas.aliyuncs.com',
            'us-east-1' => 'mpaas.aliyuncs.com',
            'us-west-1' => 'mpaas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mpaas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AddMdsMiniConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMdsMiniConfigResponse
     *
     * @param AddMdsMiniConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMdsMiniConfigResponse
     */
    public function addMdsMiniConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMiniConfigAddJsonStr) {
            @$body['MpaasMappcenterMiniConfigAddJsonStr'] = $request->mpaasMappcenterMiniConfigAddJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMdsMiniConfig',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMdsMiniConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddMdsMiniConfigRequest
     *
     * @returns AddMdsMiniConfigResponse
     *
     * @param AddMdsMiniConfigRequest $request
     *
     * @return AddMdsMiniConfigResponse
     */
    public function addMdsMiniConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMdsMiniConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelPushSchedulerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPushSchedulerResponse
     *
     * @param CancelPushSchedulerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelPushSchedulerResponse
     */
    public function cancelPushSchedulerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueIds) {
            @$body['UniqueIds'] = $request->uniqueIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelPushScheduler',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPushSchedulerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelPushSchedulerRequest
     *
     * @returns CancelPushSchedulerResponse
     *
     * @param CancelPushSchedulerRequest $request
     *
     * @return CancelPushSchedulerResponse
     */
    public function cancelPushScheduler($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPushSchedulerWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMcubeMiniTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMcubeMiniTaskStatusResponse
     *
     * @param ChangeMcubeMiniTaskStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ChangeMcubeMiniTaskStatusResponse
     */
    public function changeMcubeMiniTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMcubeMiniTaskStatus',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMcubeMiniTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMcubeMiniTaskStatusRequest
     *
     * @returns ChangeMcubeMiniTaskStatusResponse
     *
     * @param ChangeMcubeMiniTaskStatusRequest $request
     *
     * @return ChangeMcubeMiniTaskStatusResponse
     */
    public function changeMcubeMiniTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMcubeMiniTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMcubeNebulaTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMcubeNebulaTaskStatusResponse
     *
     * @param ChangeMcubeNebulaTaskStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeMcubeNebulaTaskStatusResponse
     */
    public function changeMcubeNebulaTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMcubeNebulaTaskStatus',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMcubeNebulaTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMcubeNebulaTaskStatusRequest
     *
     * @returns ChangeMcubeNebulaTaskStatusResponse
     *
     * @param ChangeMcubeNebulaTaskStatusRequest $request
     *
     * @return ChangeMcubeNebulaTaskStatusResponse
     */
    public function changeMcubeNebulaTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMcubeNebulaTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMcubePublicTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMcubePublicTaskStatusResponse
     *
     * @param ChangeMcubePublicTaskStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeMcubePublicTaskStatusResponse
     */
    public function changeMcubePublicTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMcubePublicTaskStatus',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMcubePublicTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMcubePublicTaskStatusRequest
     *
     * @returns ChangeMcubePublicTaskStatusResponse
     *
     * @param ChangeMcubePublicTaskStatusRequest $request
     *
     * @return ChangeMcubePublicTaskStatusResponse
     */
    public function changeMcubePublicTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMcubePublicTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMdsCubeTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMdsCubeTaskStatusResponse
     *
     * @param ChangeMdsCubeTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ChangeMdsCubeTaskStatusResponse
     */
    public function changeMdsCubeTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->templateResourceId) {
            @$body['TemplateResourceId'] = $request->templateResourceId;
        }

        if (null !== $request->templateTaskId) {
            @$body['TemplateTaskId'] = $request->templateTaskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMdsCubeTaskStatus',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMdsCubeTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMdsCubeTaskStatusRequest
     *
     * @returns ChangeMdsCubeTaskStatusResponse
     *
     * @param ChangeMdsCubeTaskStatusRequest $request
     *
     * @return ChangeMdsCubeTaskStatusResponse
     */
    public function changeMdsCubeTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMdsCubeTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - CopyMcdpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyMcdpGroupResponse
     *
     * @param CopyMcdpGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyMcdpGroupResponse
     */
    public function copyMcdpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpGroupCopyJsonStr) {
            @$body['MpaasMappcenterMcdpGroupCopyJsonStr'] = $request->mpaasMappcenterMcdpGroupCopyJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyMcdpGroup',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyMcdpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CopyMcdpGroupRequest
     *
     * @returns CopyMcdpGroupResponse
     *
     * @param CopyMcdpGroupRequest $request
     *
     * @return CopyMcdpGroupResponse
     */
    public function copyMcdpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyMcdpGroupWithOptions($request, $runtime);
    }

    /**
     * 创建短链.
     *
     * @param request - CreateLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLinkResponse
     *
     * @param CreateLinkRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateLinkResponse
     */
    public function createLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->cors) {
            @$body['Cors'] = $request->cors;
        }

        if (null !== $request->domain) {
            @$body['Domain'] = $request->domain;
        }

        if (null !== $request->dynamicfield) {
            @$body['Dynamicfield'] = $request->dynamicfield;
        }

        if (null !== $request->targetUrl) {
            @$body['TargetUrl'] = $request->targetUrl;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLink',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建短链.
     *
     * @param request - CreateLinkRequest
     *
     * @returns CreateLinkResponse
     *
     * @param CreateLinkRequest $request
     *
     * @return CreateLinkResponse
     */
    public function createLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLinkWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcdpGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcdpGroupResponse
     *
     * @param CreateMcdpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMcdpGroupResponse
     */
    public function createMcdpGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpGroupCreateJsonStr) {
            @$body['MpaasMappcenterMcdpGroupCreateJsonStr'] = $request->mpaasMappcenterMcdpGroupCreateJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcdpGroup',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcdpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcdpGroupRequest
     *
     * @returns CreateMcdpGroupResponse
     *
     * @param CreateMcdpGroupRequest $request
     *
     * @return CreateMcdpGroupResponse
     */
    public function createMcdpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcdpGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcdpMaterialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcdpMaterialResponse
     *
     * @param CreateMcdpMaterialRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMcdpMaterialResponse
     */
    public function createMcdpMaterialWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpMaterialCreateJsonStr) {
            @$body['MpaasMappcenterMcdpMaterialCreateJsonStr'] = $request->mpaasMappcenterMcdpMaterialCreateJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcdpMaterial',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcdpMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcdpMaterialRequest
     *
     * @returns CreateMcdpMaterialResponse
     *
     * @param CreateMcdpMaterialRequest $request
     *
     * @return CreateMcdpMaterialResponse
     */
    public function createMcdpMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcdpMaterialWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcdpZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcdpZoneResponse
     *
     * @param CreateMcdpZoneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateMcdpZoneResponse
     */
    public function createMcdpZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpZoneCreateJsonStr) {
            @$body['MpaasMappcenterMcdpZoneCreateJsonStr'] = $request->mpaasMappcenterMcdpZoneCreateJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcdpZone',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcdpZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcdpZoneRequest
     *
     * @returns CreateMcdpZoneResponse
     *
     * @param CreateMcdpZoneRequest $request
     *
     * @return CreateMcdpZoneResponse
     */
    public function createMcdpZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcdpZoneWithOptions($request, $runtime);
    }

    /**
     * 创建热修复资源.
     *
     * @param request - CreateMcubeHotpatchResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeHotpatchResourceResponse
     *
     * @param CreateMcubeHotpatchResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateMcubeHotpatchResourceResponse
     */
    public function createMcubeHotpatchResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->fixDesc) {
            @$body['FixDesc'] = $request->fixDesc;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->productVersion) {
            @$body['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeHotpatchResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeHotpatchResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建热修复资源.
     *
     * @param request - CreateMcubeHotpatchResourceRequest
     *
     * @returns CreateMcubeHotpatchResourceResponse
     *
     * @param CreateMcubeHotpatchResourceRequest $request
     *
     * @return CreateMcubeHotpatchResourceResponse
     */
    public function createMcubeHotpatchResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeHotpatchResourceWithOptions($request, $runtime);
    }

    /**
     * 创建热修复回滚任务
     *
     * @param request - CreateMcubeHotpatchRollbackTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeHotpatchRollbackTaskResponse
     *
     * @param CreateMcubeHotpatchRollbackTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateMcubeHotpatchRollbackTaskResponse
     */
    public function createMcubeHotpatchRollbackTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersion) {
            @$body['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeHotpatchRollbackTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeHotpatchRollbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建热修复回滚任务
     *
     * @param request - CreateMcubeHotpatchRollbackTaskRequest
     *
     * @returns CreateMcubeHotpatchRollbackTaskResponse
     *
     * @param CreateMcubeHotpatchRollbackTaskRequest $request
     *
     * @return CreateMcubeHotpatchRollbackTaskResponse
     */
    public function createMcubeHotpatchRollbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeHotpatchRollbackTaskWithOptions($request, $runtime);
    }

    /**
     * 创建热修复发布任务
     *
     * @param request - CreateMcubeHotpatchTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeHotpatchTaskResponse
     *
     * @param CreateMcubeHotpatchTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateMcubeHotpatchTaskResponse
     */
    public function createMcubeHotpatchTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->syncMode) {
            @$body['SyncMode'] = $request->syncMode;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeHotpatchTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeHotpatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建热修复发布任务
     *
     * @param request - CreateMcubeHotpatchTaskRequest
     *
     * @returns CreateMcubeHotpatchTaskResponse
     *
     * @param CreateMcubeHotpatchTaskRequest $request
     *
     * @return CreateMcubeHotpatchTaskResponse
     */
    public function createMcubeHotpatchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeHotpatchTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeMiniAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeMiniAppResponse
     *
     * @param CreateMcubeMiniAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMcubeMiniAppResponse
     */
    public function createMcubeMiniAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeMiniApp',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeMiniAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeMiniAppRequest
     *
     * @returns CreateMcubeMiniAppResponse
     *
     * @param CreateMcubeMiniAppRequest $request
     *
     * @return CreateMcubeMiniAppResponse
     */
    public function createMcubeMiniApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeMiniAppWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeMiniTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeMiniTaskResponse
     *
     * @param CreateMcubeMiniTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMcubeMiniTaskResponse
     */
    public function createMcubeMiniTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeMiniTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeMiniTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeMiniTaskRequest
     *
     * @returns CreateMcubeMiniTaskResponse
     *
     * @param CreateMcubeMiniTaskRequest $request
     *
     * @return CreateMcubeMiniTaskResponse
     */
    public function createMcubeMiniTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeMiniTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeNebulaAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeNebulaAppResponse
     *
     * @param CreateMcubeNebulaAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMcubeNebulaAppResponse
     */
    public function createMcubeNebulaAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeNebulaApp',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeNebulaAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeNebulaAppRequest
     *
     * @returns CreateMcubeNebulaAppResponse
     *
     * @param CreateMcubeNebulaAppRequest $request
     *
     * @return CreateMcubeNebulaAppResponse
     */
    public function createMcubeNebulaApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeNebulaAppWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeNebulaResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeNebulaResourceResponse
     *
     * @param CreateMcubeNebulaResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMcubeNebulaResourceResponse
     */
    public function createMcubeNebulaResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->autoInstall) {
            @$body['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->clientVersionMax) {
            @$body['ClientVersionMax'] = $request->clientVersionMax;
        }

        if (null !== $request->clientVersionMin) {
            @$body['ClientVersionMin'] = $request->clientVersionMin;
        }

        if (null !== $request->customDomainName) {
            @$body['CustomDomainName'] = $request->customDomainName;
        }

        if (null !== $request->extendInfo) {
            @$body['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->h5Version) {
            @$body['H5Version'] = $request->h5Version;
        }

        if (null !== $request->installType) {
            @$body['InstallType'] = $request->installType;
        }

        if (null !== $request->mainUrl) {
            @$body['MainUrl'] = $request->mainUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->repeatNebula) {
            @$body['RepeatNebula'] = $request->repeatNebula;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->subUrl) {
            @$body['SubUrl'] = $request->subUrl;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->vhost) {
            @$body['Vhost'] = $request->vhost;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeNebulaResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeNebulaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeNebulaResourceRequest
     *
     * @returns CreateMcubeNebulaResourceResponse
     *
     * @param CreateMcubeNebulaResourceRequest $request
     *
     * @return CreateMcubeNebulaResourceResponse
     */
    public function createMcubeNebulaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeNebulaResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeNebulaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeNebulaTaskResponse
     *
     * @param CreateMcubeNebulaTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMcubeNebulaTaskResponse
     */
    public function createMcubeNebulaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appCode) {
            @$body['AppCode'] = $request->appCode;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->creator) {
            @$body['Creator'] = $request->creator;
        }

        if (null !== $request->gmtCreate) {
            @$body['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->gmtModified) {
            @$body['GmtModified'] = $request->gmtModified;
        }

        if (null !== $request->gmtModifiedStr) {
            @$body['GmtModifiedStr'] = $request->gmtModifiedStr;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtime) {
            @$body['GreyEndtime'] = $request->greyEndtime;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyEndtimeStr) {
            @$body['GreyEndtimeStr'] = $request->greyEndtimeStr;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->greyUrl) {
            @$body['GreyUrl'] = $request->greyUrl;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->modifier) {
            @$body['Modifier'] = $request->modifier;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->percent) {
            @$body['Percent'] = $request->percent;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersion) {
            @$body['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->releaseVersion) {
            @$body['ReleaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->resIds) {
            @$body['ResIds'] = $request->resIds;
        }

        if (null !== $request->serialVersionUID) {
            @$body['SerialVersionUID'] = $request->serialVersionUID;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->syncMode) {
            @$body['SyncMode'] = $request->syncMode;
        }

        if (null !== $request->syncResult) {
            @$body['SyncResult'] = $request->syncResult;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->taskVersion) {
            @$body['TaskVersion'] = $request->taskVersion;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->upgradeNoticeNum) {
            @$body['UpgradeNoticeNum'] = $request->upgradeNoticeNum;
        }

        if (null !== $request->upgradeProgress) {
            @$body['UpgradeProgress'] = $request->upgradeProgress;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeNebulaTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeNebulaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeNebulaTaskRequest
     *
     * @returns CreateMcubeNebulaTaskResponse
     *
     * @param CreateMcubeNebulaTaskRequest $request
     *
     * @return CreateMcubeNebulaTaskResponse
     */
    public function createMcubeNebulaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeNebulaTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeUpgradePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeUpgradePackageResponse
     *
     * @param CreateMcubeUpgradePackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMcubeUpgradePackageResponse
     */
    public function createMcubeUpgradePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->appstoreUrl) {
            @$body['AppstoreUrl'] = $request->appstoreUrl;
        }

        if (null !== $request->bundleId) {
            @$body['BundleId'] = $request->bundleId;
        }

        if (null !== $request->customDomainName) {
            @$body['CustomDomainName'] = $request->customDomainName;
        }

        if (null !== $request->desc) {
            @$body['Desc'] = $request->desc;
        }

        if (null !== $request->downloadUrl) {
            @$body['DownloadUrl'] = $request->downloadUrl;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->harmonyLabel) {
            @$body['HarmonyLabel'] = $request->harmonyLabel;
        }

        if (null !== $request->iconFileUrl) {
            @$body['IconFileUrl'] = $request->iconFileUrl;
        }

        if (null !== $request->installAmount) {
            @$body['InstallAmount'] = $request->installAmount;
        }

        if (null !== $request->iosSymbolfileUrl) {
            @$body['IosSymbolfileUrl'] = $request->iosSymbolfileUrl;
        }

        if (null !== $request->isEnterprise) {
            @$body['IsEnterprise'] = $request->isEnterprise;
        }

        if (null !== $request->largeIconUrl) {
            @$body['LargeIconUrl'] = $request->largeIconUrl;
        }

        if (null !== $request->needCheck) {
            @$body['NeedCheck'] = $request->needCheck;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->validDays) {
            @$body['ValidDays'] = $request->validDays;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeUpgradePackage',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeUpgradePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeUpgradePackageRequest
     *
     * @returns CreateMcubeUpgradePackageResponse
     *
     * @param CreateMcubeUpgradePackageRequest $request
     *
     * @return CreateMcubeUpgradePackageResponse
     */
    public function createMcubeUpgradePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeUpgradePackageWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeUpgradeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeUpgradeTaskResponse
     *
     * @param CreateMcubeUpgradeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMcubeUpgradeTaskResponse
     */
    public function createMcubeUpgradeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->historyForce) {
            @$body['HistoryForce'] = $request->historyForce;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->packageInfoId) {
            @$body['PackageInfoId'] = $request->packageInfoId;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->upgradeContent) {
            @$body['UpgradeContent'] = $request->upgradeContent;
        }

        if (null !== $request->upgradeType) {
            @$body['UpgradeType'] = $request->upgradeType;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeUpgradeTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeUpgradeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeUpgradeTaskRequest
     *
     * @returns CreateMcubeUpgradeTaskResponse
     *
     * @param CreateMcubeUpgradeTaskRequest $request
     *
     * @return CreateMcubeUpgradeTaskResponse
     */
    public function createMcubeUpgradeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeUpgradeTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeVhostResponse
     *
     * @param CreateMcubeVhostRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMcubeVhostResponse
     */
    public function createMcubeVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->vhost) {
            @$body['Vhost'] = $request->vhost;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeVhost',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeVhostRequest
     *
     * @returns CreateMcubeVhostResponse
     *
     * @param CreateMcubeVhostRequest $request
     *
     * @return CreateMcubeVhostResponse
     */
    public function createMcubeVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeVhostWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeWhitelistResponse
     *
     * @param CreateMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMcubeWhitelistResponse
     */
    public function createMcubeWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whiteListName) {
            @$body['WhiteListName'] = $request->whiteListName;
        }

        if (null !== $request->whitelistType) {
            @$body['WhitelistType'] = $request->whitelistType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeWhitelist',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeWhitelistRequest
     *
     * @returns CreateMcubeWhitelistResponse
     *
     * @param CreateMcubeWhitelistRequest $request
     *
     * @return CreateMcubeWhitelistResponse
     */
    public function createMcubeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeWhitelistForIdeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeWhitelistForIdeResponse
     *
     * @param CreateMcubeWhitelistForIdeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateMcubeWhitelistForIdeResponse
     */
    public function createMcubeWhitelistForIdeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->whitelistValue) {
            @$body['WhitelistValue'] = $request->whitelistValue;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeWhitelistForIde',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeWhitelistForIdeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeWhitelistForIdeRequest
     *
     * @returns CreateMcubeWhitelistForIdeResponse
     *
     * @param CreateMcubeWhitelistForIdeRequest $request
     *
     * @return CreateMcubeWhitelistForIdeResponse
     */
    public function createMcubeWhitelistForIde($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeWhitelistForIdeWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMdsCubeResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMdsCubeResourceResponse
     *
     * @param CreateMdsCubeResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMdsCubeResourceResponse
     */
    public function createMdsCubeResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->androidMaxVersion) {
            @$body['AndroidMaxVersion'] = $request->androidMaxVersion;
        }

        if (null !== $request->androidMinVersion) {
            @$body['AndroidMinVersion'] = $request->androidMinVersion;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->extendInfo) {
            @$body['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->iosMaxVersion) {
            @$body['IosMaxVersion'] = $request->iosMaxVersion;
        }

        if (null !== $request->iosMinVersion) {
            @$body['IosMinVersion'] = $request->iosMinVersion;
        }

        if (null !== $request->mockDataUrl) {
            @$body['MockDataUrl'] = $request->mockDataUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->previewPictureUrl) {
            @$body['PreviewPictureUrl'] = $request->previewPictureUrl;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateResourceDesc) {
            @$body['TemplateResourceDesc'] = $request->templateResourceDesc;
        }

        if (null !== $request->templateResourceVersion) {
            @$body['TemplateResourceVersion'] = $request->templateResourceVersion;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMdsCubeResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMdsCubeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMdsCubeResourceRequest
     *
     * @returns CreateMdsCubeResourceResponse
     *
     * @param CreateMdsCubeResourceRequest $request
     *
     * @return CreateMdsCubeResourceResponse
     */
    public function createMdsCubeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMdsCubeResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMdsCubeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMdsCubeTaskResponse
     *
     * @param CreateMdsCubeTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMdsCubeTaskResponse
     */
    public function createMdsCubeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->taskDesc) {
            @$body['TaskDesc'] = $request->taskDesc;
        }

        if (null !== $request->templateResourceId) {
            @$body['TemplateResourceId'] = $request->templateResourceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMdsCubeTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMdsCubeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMdsCubeTaskRequest
     *
     * @returns CreateMdsCubeTaskResponse
     *
     * @param CreateMdsCubeTaskRequest $request
     *
     * @return CreateMdsCubeTaskResponse
     */
    public function createMdsCubeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMdsCubeTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMdsCubeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMdsCubeTemplateResponse
     *
     * @param CreateMdsCubeTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMdsCubeTemplateResponse
     */
    public function createMdsCubeTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->templateDesc) {
            @$body['TemplateDesc'] = $request->templateDesc;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMdsCubeTemplate',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMdsCubeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMdsCubeTemplateRequest
     *
     * @returns CreateMdsCubeTemplateResponse
     *
     * @param CreateMdsCubeTemplateRequest $request
     *
     * @return CreateMdsCubeTemplateResponse
     */
    public function createMdsCubeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMdsCubeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMdsMiniprogramTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMdsMiniprogramTaskResponse
     *
     * @param CreateMdsMiniprogramTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMdsMiniprogramTaskResponse
     */
    public function createMdsMiniprogramTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->syncMode) {
            @$body['SyncMode'] = $request->syncMode;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMdsMiniprogramTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMdsMiniprogramTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMdsMiniprogramTaskRequest
     *
     * @returns CreateMdsMiniprogramTaskResponse
     *
     * @param CreateMdsMiniprogramTaskRequest $request
     *
     * @return CreateMdsMiniprogramTaskResponse
     */
    public function createMdsMiniprogramTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMdsMiniprogramTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateOpenGlobalDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpenGlobalDataResponse
     *
     * @param CreateOpenGlobalDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpenGlobalDataResponse
     */
    public function createOpenGlobalDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appMaxVersion) {
            @$body['AppMaxVersion'] = $request->appMaxVersion;
        }

        if (null !== $request->appMinVersion) {
            @$body['AppMinVersion'] = $request->appMinVersion;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->extAttrStr) {
            @$body['ExtAttrStr'] = $request->extAttrStr;
        }

        if (null !== $request->maxUid) {
            @$body['MaxUid'] = $request->maxUid;
        }

        if (null !== $request->minUid) {
            @$body['MinUid'] = $request->minUid;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdMsgId) {
            @$body['ThirdMsgId'] = $request->thirdMsgId;
        }

        if (null !== $request->uids) {
            @$body['Uids'] = $request->uids;
        }

        if (null !== $request->validTimeEnd) {
            @$body['ValidTimeEnd'] = $request->validTimeEnd;
        }

        if (null !== $request->validTimeStart) {
            @$body['ValidTimeStart'] = $request->validTimeStart;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOpenGlobalData',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpenGlobalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateOpenGlobalDataRequest
     *
     * @returns CreateOpenGlobalDataResponse
     *
     * @param CreateOpenGlobalDataRequest $request
     *
     * @return CreateOpenGlobalDataResponse
     */
    public function createOpenGlobalData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpenGlobalDataWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateOpenSingleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpenSingleDataResponse
     *
     * @param CreateOpenSingleDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpenSingleDataResponse
     */
    public function createOpenSingleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appMaxVersion) {
            @$body['AppMaxVersion'] = $request->appMaxVersion;
        }

        if (null !== $request->appMinVersion) {
            @$body['AppMinVersion'] = $request->appMinVersion;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->checkOnline) {
            @$body['CheckOnline'] = $request->checkOnline;
        }

        if (null !== $request->extAttrStr) {
            @$body['ExtAttrStr'] = $request->extAttrStr;
        }

        if (null !== $request->linkToken) {
            @$body['LinkToken'] = $request->linkToken;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdMsgId) {
            @$body['ThirdMsgId'] = $request->thirdMsgId;
        }

        if (null !== $request->validTimeEnd) {
            @$body['ValidTimeEnd'] = $request->validTimeEnd;
        }

        if (null !== $request->validTimeStart) {
            @$body['ValidTimeStart'] = $request->validTimeStart;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOpenSingleData',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpenSingleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateOpenSingleDataRequest
     *
     * @returns CreateOpenSingleDataResponse
     *
     * @param CreateOpenSingleDataRequest $request
     *
     * @return CreateOpenSingleDataResponse
     */
    public function createOpenSingleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpenSingleDataWithOptions($request, $runtime);
    }

    /**
     * 创建模版.
     *
     * @param request - CreateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->descInfo) {
            @$body['DescInfo'] = $request->descInfo;
        }

        if (null !== $request->iconUrls) {
            @$body['IconUrls'] = $request->iconUrls;
        }

        if (null !== $request->imageUrls) {
            @$body['ImageUrls'] = $request->imageUrls;
        }

        if (null !== $request->jumpAction) {
            @$body['JumpAction'] = $request->jumpAction;
        }

        if (null !== $request->pushStyle) {
            @$body['PushStyle'] = $request->pushStyle;
        }

        if (null !== $request->showStyle) {
            @$body['ShowStyle'] = $request->showStyle;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->variables) {
            @$body['Variables'] = $request->variables;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模版.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCubecardWhitelistContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCubecardWhitelistContentResponse
     *
     * @param DeleteCubecardWhitelistContentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteCubecardWhitelistContentResponse
     */
    public function deleteCubecardWhitelistContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistId) {
            @$body['WhitelistId'] = $request->whitelistId;
        }

        if (null !== $request->whitelistValue) {
            @$body['WhitelistValue'] = $request->whitelistValue;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCubecardWhitelistContent',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCubecardWhitelistContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCubecardWhitelistContentRequest
     *
     * @returns DeleteCubecardWhitelistContentResponse
     *
     * @param DeleteCubecardWhitelistContentRequest $request
     *
     * @return DeleteCubecardWhitelistContentResponse
     */
    public function deleteCubecardWhitelistContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCubecardWhitelistContentWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcdpAimRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcdpAimResponse
     *
     * @param DeleteMcdpAimRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteMcdpAimResponse
     */
    public function deleteMcdpAimWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpAimDeleteJsonStr) {
            @$body['MpaasMappcenterMcdpAimDeleteJsonStr'] = $request->mpaasMappcenterMcdpAimDeleteJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcdpAim',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcdpAimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcdpAimRequest
     *
     * @returns DeleteMcdpAimResponse
     *
     * @param DeleteMcdpAimRequest $request
     *
     * @return DeleteMcdpAimResponse
     */
    public function deleteMcdpAim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcdpAimWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcdpCrowdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcdpCrowdResponse
     *
     * @param DeleteMcdpCrowdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMcdpCrowdResponse
     */
    public function deleteMcdpCrowdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpCrowdDeleteJsonStr) {
            @$body['MpaasMappcenterMcdpCrowdDeleteJsonStr'] = $request->mpaasMappcenterMcdpCrowdDeleteJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcdpCrowd',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcdpCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcdpCrowdRequest
     *
     * @returns DeleteMcdpCrowdResponse
     *
     * @param DeleteMcdpCrowdRequest $request
     *
     * @return DeleteMcdpCrowdResponse
     */
    public function deleteMcdpCrowd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcdpCrowdWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcdpZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcdpZoneResponse
     *
     * @param DeleteMcdpZoneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMcdpZoneResponse
     */
    public function deleteMcdpZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMcdpZoneDeleteJsonStr) {
            @$body['MpaasMappcenterMcdpZoneDeleteJsonStr'] = $request->mpaasMappcenterMcdpZoneDeleteJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcdpZone',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcdpZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcdpZoneRequest
     *
     * @returns DeleteMcdpZoneResponse
     *
     * @param DeleteMcdpZoneRequest $request
     *
     * @return DeleteMcdpZoneResponse
     */
    public function deleteMcdpZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcdpZoneWithOptions($request, $runtime);
    }

    /**
     * 删除热修复资源包.
     *
     * @param request - DeleteMcubeHotpatchResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeHotpatchResourceResponse
     *
     * @param DeleteMcubeHotpatchResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteMcubeHotpatchResourceResponse
     */
    public function deleteMcubeHotpatchResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appCode) {
            @$body['AppCode'] = $request->appCode;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeHotpatchResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeHotpatchResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除热修复资源包.
     *
     * @param request - DeleteMcubeHotpatchResourceRequest
     *
     * @returns DeleteMcubeHotpatchResourceResponse
     *
     * @param DeleteMcubeHotpatchResourceRequest $request
     *
     * @return DeleteMcubeHotpatchResourceResponse
     */
    public function deleteMcubeHotpatchResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeHotpatchResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeMiniAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeMiniAppResponse
     *
     * @param DeleteMcubeMiniAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMcubeMiniAppResponse
     */
    public function deleteMcubeMiniAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeMiniApp',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeMiniAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeMiniAppRequest
     *
     * @returns DeleteMcubeMiniAppResponse
     *
     * @param DeleteMcubeMiniAppRequest $request
     *
     * @return DeleteMcubeMiniAppResponse
     */
    public function deleteMcubeMiniApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeMiniAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeNebulaAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeNebulaAppResponse
     *
     * @param DeleteMcubeNebulaAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMcubeNebulaAppResponse
     */
    public function deleteMcubeNebulaAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeNebulaApp',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeNebulaAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeNebulaAppRequest
     *
     * @returns DeleteMcubeNebulaAppResponse
     *
     * @param DeleteMcubeNebulaAppRequest $request
     *
     * @return DeleteMcubeNebulaAppResponse
     */
    public function deleteMcubeNebulaApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeNebulaAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeUpgradeResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeUpgradeResourceResponse
     *
     * @param DeleteMcubeUpgradeResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteMcubeUpgradeResourceResponse
     */
    public function deleteMcubeUpgradeResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeUpgradeResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeUpgradeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeUpgradeResourceRequest
     *
     * @returns DeleteMcubeUpgradeResourceResponse
     *
     * @param DeleteMcubeUpgradeResourceRequest $request
     *
     * @return DeleteMcubeUpgradeResourceResponse
     */
    public function deleteMcubeUpgradeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeUpgradeResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeWhitelistResponse
     *
     * @param DeleteMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMcubeWhitelistResponse
     */
    public function deleteMcubeWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeWhitelist',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeWhitelistRequest
     *
     * @returns DeleteMcubeWhitelistResponse
     *
     * @param DeleteMcubeWhitelistRequest $request
     *
     * @return DeleteMcubeWhitelistResponse
     */
    public function deleteMcubeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMdsCubeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMdsCubeTemplateResponse
     *
     * @param DeleteMdsCubeTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteMdsCubeTemplateResponse
     */
    public function deleteMdsCubeTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMdsCubeTemplate',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMdsCubeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMdsCubeTemplateRequest
     *
     * @returns DeleteMdsCubeTemplateResponse
     *
     * @param DeleteMdsCubeTemplateRequest $request
     *
     * @return DeleteMdsCubeTemplateResponse
     */
    public function deleteMdsCubeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMdsCubeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMdsWhitelistContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMdsWhitelistContentResponse
     *
     * @param DeleteMdsWhitelistContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMdsWhitelistContentResponse
     */
    public function deleteMdsWhitelistContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistId) {
            @$body['WhitelistId'] = $request->whitelistId;
        }

        if (null !== $request->whitelistValue) {
            @$body['WhitelistValue'] = $request->whitelistValue;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMdsWhitelistContent',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMdsWhitelistContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMdsWhitelistContentRequest
     *
     * @returns DeleteMdsWhitelistContentResponse
     *
     * @param DeleteMdsWhitelistContentRequest $request
     *
     * @return DeleteMdsWhitelistContentResponse
     */
    public function deleteMdsWhitelistContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMdsWhitelistContentWithOptions($request, $runtime);
    }

    /**
     * 删除模版.
     *
     * @param request - DeleteTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模版.
     *
     * @param request - DeleteTemplateRequest
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - ExistMcubeRsaKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExistMcubeRsaKeyResponse
     *
     * @param ExistMcubeRsaKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExistMcubeRsaKeyResponse
     */
    public function existMcubeRsaKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExistMcubeRsaKey',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExistMcubeRsaKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExistMcubeRsaKeyRequest
     *
     * @returns ExistMcubeRsaKeyResponse
     *
     * @param ExistMcubeRsaKeyRequest $request
     *
     * @return ExistMcubeRsaKeyResponse
     */
    public function existMcubeRsaKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->existMcubeRsaKeyWithOptions($request, $runtime);
    }

    /**
     * @param request - ExportMappCenterAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportMappCenterAppConfigResponse
     *
     * @param ExportMappCenterAppConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExportMappCenterAppConfigResponse
     */
    public function exportMappCenterAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apkFileUrl) {
            @$body['ApkFileUrl'] = $request->apkFileUrl;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->certRsaBase64) {
            @$body['CertRsaBase64'] = $request->certRsaBase64;
        }

        if (null !== $request->identifier) {
            @$body['Identifier'] = $request->identifier;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportMappCenterAppConfig',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportMappCenterAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExportMappCenterAppConfigRequest
     *
     * @returns ExportMappCenterAppConfigResponse
     *
     * @param ExportMappCenterAppConfigRequest $request
     *
     * @return ExportMappCenterAppConfigResponse
     */
    public function exportMappCenterAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportMappCenterAppConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - GetFileTokenForUploadToMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileTokenForUploadToMsaResponse
     *
     * @param GetFileTokenForUploadToMsaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetFileTokenForUploadToMsaResponse
     */
    public function getFileTokenForUploadToMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFileTokenForUploadToMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFileTokenForUploadToMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetFileTokenForUploadToMsaRequest
     *
     * @returns GetFileTokenForUploadToMsaResponse
     *
     * @param GetFileTokenForUploadToMsaRequest $request
     *
     * @return GetFileTokenForUploadToMsaResponse
     */
    public function getFileTokenForUploadToMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFileTokenForUploadToMsaWithOptions($request, $runtime);
    }

    /**
     * 查看全部审核记录.
     *
     * @param request - GetGameReviewByStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGameReviewByStatusResponse
     *
     * @param GetGameReviewByStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetGameReviewByStatusResponse
     */
    public function getGameReviewByStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reviewStatus) {
            @$body['ReviewStatus'] = $request->reviewStatus;
        }

        if (null !== $request->sortMode) {
            @$body['SortMode'] = $request->sortMode;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGameReviewByStatus',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGameReviewByStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看全部审核记录.
     *
     * @param request - GetGameReviewByStatusRequest
     *
     * @returns GetGameReviewByStatusResponse
     *
     * @param GetGameReviewByStatusRequest $request
     *
     * @return GetGameReviewByStatusResponse
     */
    public function getGameReviewByStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGameReviewByStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLogUrlInMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogUrlInMsaResponse
     *
     * @param GetLogUrlInMsaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetLogUrlInMsaResponse
     */
    public function getLogUrlInMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLogUrlInMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogUrlInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLogUrlInMsaRequest
     *
     * @returns GetLogUrlInMsaResponse
     *
     * @param GetLogUrlInMsaRequest $request
     *
     * @return GetLogUrlInMsaResponse
     */
    public function getLogUrlInMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogUrlInMsaWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeFileTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeFileTokenResponse
     *
     * @param GetMcubeFileTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMcubeFileTokenResponse
     */
    public function getMcubeFileTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeFileToken',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeFileTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeFileTokenRequest
     *
     * @returns GetMcubeFileTokenResponse
     *
     * @param GetMcubeFileTokenRequest $request
     *
     * @return GetMcubeFileTokenResponse
     */
    public function getMcubeFileToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeFileTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeNebulaResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeNebulaResourceResponse
     *
     * @param GetMcubeNebulaResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMcubeNebulaResourceResponse
     */
    public function getMcubeNebulaResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeNebulaResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeNebulaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeNebulaResourceRequest
     *
     * @returns GetMcubeNebulaResourceResponse
     *
     * @param GetMcubeNebulaResourceRequest $request
     *
     * @return GetMcubeNebulaResourceResponse
     */
    public function getMcubeNebulaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeNebulaResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeNebulaTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeNebulaTaskDetailResponse
     *
     * @param GetMcubeNebulaTaskDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMcubeNebulaTaskDetailResponse
     */
    public function getMcubeNebulaTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeNebulaTaskDetail',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeNebulaTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeNebulaTaskDetailRequest
     *
     * @returns GetMcubeNebulaTaskDetailResponse
     *
     * @param GetMcubeNebulaTaskDetailRequest $request
     *
     * @return GetMcubeNebulaTaskDetailResponse
     */
    public function getMcubeNebulaTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeNebulaTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeUpgradePackageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeUpgradePackageInfoResponse
     *
     * @param GetMcubeUpgradePackageInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMcubeUpgradePackageInfoResponse
     */
    public function getMcubeUpgradePackageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeUpgradePackageInfo',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeUpgradePackageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeUpgradePackageInfoRequest
     *
     * @returns GetMcubeUpgradePackageInfoResponse
     *
     * @param GetMcubeUpgradePackageInfoRequest $request
     *
     * @return GetMcubeUpgradePackageInfoResponse
     */
    public function getMcubeUpgradePackageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeUpgradePackageInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeUpgradeTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeUpgradeTaskInfoResponse
     *
     * @param GetMcubeUpgradeTaskInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetMcubeUpgradeTaskInfoResponse
     */
    public function getMcubeUpgradeTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeUpgradeTaskInfo',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeUpgradeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeUpgradeTaskInfoRequest
     *
     * @returns GetMcubeUpgradeTaskInfoResponse
     *
     * @param GetMcubeUpgradeTaskInfoRequest $request
     *
     * @return GetMcubeUpgradeTaskInfoResponse
     */
    public function getMcubeUpgradeTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeUpgradeTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMdsMiniConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMdsMiniConfigResponse
     *
     * @param GetMdsMiniConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMdsMiniConfigResponse
     */
    public function getMdsMiniConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMdsMiniConfig',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMdsMiniConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMdsMiniConfigRequest
     *
     * @returns GetMdsMiniConfigResponse
     *
     * @param GetMdsMiniConfigRequest $request
     *
     * @return GetMdsMiniConfigResponse
     */
    public function getMdsMiniConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMdsMiniConfigWithOptions($request, $runtime);
    }

    /**
     * 获取模版.
     *
     * @param request - GetTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模版.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserAppDonwloadUrlInMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAppDonwloadUrlInMsaResponse
     *
     * @param GetUserAppDonwloadUrlInMsaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetUserAppDonwloadUrlInMsaResponse
     */
    public function getUserAppDonwloadUrlInMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserAppDonwloadUrlInMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserAppDonwloadUrlInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUserAppDonwloadUrlInMsaRequest
     *
     * @returns GetUserAppDonwloadUrlInMsaResponse
     *
     * @param GetUserAppDonwloadUrlInMsaRequest $request
     *
     * @return GetUserAppDonwloadUrlInMsaResponse
     */
    public function getUserAppDonwloadUrlInMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserAppDonwloadUrlInMsaWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserAppEnhanceProcessInMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAppEnhanceProcessInMsaResponse
     *
     * @param GetUserAppEnhanceProcessInMsaRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetUserAppEnhanceProcessInMsaResponse
     */
    public function getUserAppEnhanceProcessInMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserAppEnhanceProcessInMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserAppEnhanceProcessInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUserAppEnhanceProcessInMsaRequest
     *
     * @returns GetUserAppEnhanceProcessInMsaResponse
     *
     * @param GetUserAppEnhanceProcessInMsaRequest $request
     *
     * @return GetUserAppEnhanceProcessInMsaResponse
     */
    public function getUserAppEnhanceProcessInMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserAppEnhanceProcessInMsaWithOptions($request, $runtime);
    }

    /**
     * @param request - GetUserAppUploadProcessInMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAppUploadProcessInMsaResponse
     *
     * @param GetUserAppUploadProcessInMsaRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserAppUploadProcessInMsaResponse
     */
    public function getUserAppUploadProcessInMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserAppUploadProcessInMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserAppUploadProcessInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetUserAppUploadProcessInMsaRequest
     *
     * @returns GetUserAppUploadProcessInMsaResponse
     *
     * @param GetUserAppUploadProcessInMsaRequest $request
     *
     * @return GetUserAppUploadProcessInMsaResponse
     */
    public function getUserAppUploadProcessInMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserAppUploadProcessInMsaWithOptions($request, $runtime);
    }

    /**
     * 查询报表.
     *
     * @param request - ListAnalysisCoreIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnalysisCoreIndexResponse
     *
     * @param ListAnalysisCoreIndexRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAnalysisCoreIndexResponse
     */
    public function listAnalysisCoreIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAnalysisCoreIndex',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAnalysisCoreIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报表.
     *
     * @param request - ListAnalysisCoreIndexRequest
     *
     * @returns ListAnalysisCoreIndexResponse
     *
     * @param ListAnalysisCoreIndexRequest $request
     *
     * @return ListAnalysisCoreIndexResponse
     */
    public function listAnalysisCoreIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnalysisCoreIndexWithOptions($request, $runtime);
    }

    /**
     * @param request - ListCubecardAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCubecardAppsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListCubecardAppsResponse
     */
    public function listCubecardAppsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListCubecardApps',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCubecardAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListCubecardAppsResponse
     *
     * @return ListCubecardAppsResponse
     */
    public function listCubecardApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCubecardAppsWithOptions($runtime);
    }

    /**
     * @param request - ListMappCenterAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMappCenterAppsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListMappCenterAppsResponse
     */
    public function listMappCenterAppsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListMappCenterApps',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMappCenterAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListMappCenterAppsResponse
     *
     * @return ListMappCenterAppsResponse
     */
    public function listMappCenterApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMappCenterAppsWithOptions($runtime);
    }

    /**
     * @param request - ListMappCenterWorkspacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMappCenterWorkspacesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListMappCenterWorkspacesResponse
     */
    public function listMappCenterWorkspacesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListMappCenterWorkspaces',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMappCenterWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns ListMappCenterWorkspacesResponse
     *
     * @return ListMappCenterWorkspacesResponse
     */
    public function listMappCenterWorkspaces()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMappCenterWorkspacesWithOptions($runtime);
    }

    /**
     * @param request - ListMcdpAimRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcdpAimResponse
     *
     * @param ListMcdpAimRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMcdpAimResponse
     */
    public function listMcdpAimWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->emptyTag) {
            @$body['EmptyTag'] = $request->emptyTag;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNo) {
            @$body['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sort) {
            @$body['Sort'] = $request->sort;
        }

        if (null !== $request->sortField) {
            @$body['SortField'] = $request->sortField;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcdpAim',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcdpAimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcdpAimRequest
     *
     * @returns ListMcdpAimResponse
     *
     * @param ListMcdpAimRequest $request
     *
     * @return ListMcdpAimResponse
     */
    public function listMcdpAim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcdpAimWithOptions($request, $runtime);
    }

    /**
     * 查询热修复资源包列表.
     *
     * @param request - ListMcubeHotpatchResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeHotpatchResourcesResponse
     *
     * @param ListMcubeHotpatchResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListMcubeHotpatchResourcesResponse
     */
    public function listMcubeHotpatchResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeHotpatchResources',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeHotpatchResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询热修复资源包列表.
     *
     * @param request - ListMcubeHotpatchResourcesRequest
     *
     * @returns ListMcubeHotpatchResourcesResponse
     *
     * @param ListMcubeHotpatchResourcesRequest $request
     *
     * @return ListMcubeHotpatchResourcesResponse
     */
    public function listMcubeHotpatchResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeHotpatchResourcesWithOptions($request, $runtime);
    }

    /**
     * 查询热修复发布任务列表.
     *
     * @param request - ListMcubeHotpatchTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeHotpatchTasksResponse
     *
     * @param ListMcubeHotpatchTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListMcubeHotpatchTasksResponse
     */
    public function listMcubeHotpatchTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeHotpatchTasks',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeHotpatchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询热修复发布任务列表.
     *
     * @param request - ListMcubeHotpatchTasksRequest
     *
     * @returns ListMcubeHotpatchTasksResponse
     *
     * @param ListMcubeHotpatchTasksRequest $request
     *
     * @return ListMcubeHotpatchTasksResponse
     */
    public function listMcubeHotpatchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeHotpatchTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeMiniAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeMiniAppsResponse
     *
     * @param ListMcubeMiniAppsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMcubeMiniAppsResponse
     */
    public function listMcubeMiniAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeMiniApps',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeMiniAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeMiniAppsRequest
     *
     * @returns ListMcubeMiniAppsResponse
     *
     * @param ListMcubeMiniAppsRequest $request
     *
     * @return ListMcubeMiniAppsResponse
     */
    public function listMcubeMiniApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeMiniAppsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeMiniPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeMiniPackagesResponse
     *
     * @param ListMcubeMiniPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMcubeMiniPackagesResponse
     */
    public function listMcubeMiniPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->packageTypes) {
            @$body['PackageTypes'] = $request->packageTypes;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeMiniPackages',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeMiniPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeMiniPackagesRequest
     *
     * @returns ListMcubeMiniPackagesResponse
     *
     * @param ListMcubeMiniPackagesRequest $request
     *
     * @return ListMcubeMiniPackagesResponse
     */
    public function listMcubeMiniPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeMiniPackagesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeMiniTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeMiniTasksResponse
     *
     * @param ListMcubeMiniTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMcubeMiniTasksResponse
     */
    public function listMcubeMiniTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeMiniTasks',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeMiniTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeMiniTasksRequest
     *
     * @returns ListMcubeMiniTasksResponse
     *
     * @param ListMcubeMiniTasksRequest $request
     *
     * @return ListMcubeMiniTasksResponse
     */
    public function listMcubeMiniTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeMiniTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeNebulaAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeNebulaAppsResponse
     *
     * @param ListMcubeNebulaAppsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcubeNebulaAppsResponse
     */
    public function listMcubeNebulaAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeNebulaApps',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeNebulaAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeNebulaAppsRequest
     *
     * @returns ListMcubeNebulaAppsResponse
     *
     * @param ListMcubeNebulaAppsRequest $request
     *
     * @return ListMcubeNebulaAppsResponse
     */
    public function listMcubeNebulaApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeNebulaAppsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeNebulaResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeNebulaResourcesResponse
     *
     * @param ListMcubeNebulaResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMcubeNebulaResourcesResponse
     */
    public function listMcubeNebulaResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeNebulaResources',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeNebulaResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeNebulaResourcesRequest
     *
     * @returns ListMcubeNebulaResourcesResponse
     *
     * @param ListMcubeNebulaResourcesRequest $request
     *
     * @return ListMcubeNebulaResourcesResponse
     */
    public function listMcubeNebulaResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeNebulaResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeNebulaTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeNebulaTasksResponse
     *
     * @param ListMcubeNebulaTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMcubeNebulaTasksResponse
     */
    public function listMcubeNebulaTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeNebulaTasks',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeNebulaTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeNebulaTasksRequest
     *
     * @returns ListMcubeNebulaTasksResponse
     *
     * @param ListMcubeNebulaTasksRequest $request
     *
     * @return ListMcubeNebulaTasksResponse
     */
    public function listMcubeNebulaTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeNebulaTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeUpgradePackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeUpgradePackagesResponse
     *
     * @param ListMcubeUpgradePackagesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMcubeUpgradePackagesResponse
     */
    public function listMcubeUpgradePackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeUpgradePackages',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeUpgradePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeUpgradePackagesRequest
     *
     * @returns ListMcubeUpgradePackagesResponse
     *
     * @param ListMcubeUpgradePackagesRequest $request
     *
     * @return ListMcubeUpgradePackagesResponse
     */
    public function listMcubeUpgradePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeUpgradePackagesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeUpgradeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeUpgradeTasksResponse
     *
     * @param ListMcubeUpgradeTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMcubeUpgradeTasksResponse
     */
    public function listMcubeUpgradeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeUpgradeTasks',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeUpgradeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeUpgradeTasksRequest
     *
     * @returns ListMcubeUpgradeTasksResponse
     *
     * @param ListMcubeUpgradeTasksRequest $request
     *
     * @return ListMcubeUpgradeTasksResponse
     */
    public function listMcubeUpgradeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeUpgradeTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeWhitelistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeWhitelistsResponse
     *
     * @param ListMcubeWhitelistsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcubeWhitelistsResponse
     */
    public function listMcubeWhitelistsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistName) {
            @$body['WhitelistName'] = $request->whitelistName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeWhitelists',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeWhitelistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeWhitelistsRequest
     *
     * @returns ListMcubeWhitelistsResponse
     *
     * @param ListMcubeWhitelistsRequest $request
     *
     * @return ListMcubeWhitelistsResponse
     */
    public function listMcubeWhitelists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeWhitelistsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMdsCubeResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMdsCubeResourcesResponse
     *
     * @param ListMdsCubeResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMdsCubeResourcesResponse
     */
    public function listMdsCubeResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->test) {
            @$body['test'] = $request->test;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMdsCubeResources',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMdsCubeResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMdsCubeResourcesRequest
     *
     * @returns ListMdsCubeResourcesResponse
     *
     * @param ListMdsCubeResourcesRequest $request
     *
     * @return ListMdsCubeResourcesResponse
     */
    public function listMdsCubeResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMdsCubeResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMdsCubeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMdsCubeTasksResponse
     *
     * @param ListMdsCubeTasksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListMdsCubeTasksResponse
     */
    public function listMdsCubeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->templateResourceId) {
            @$body['TemplateResourceId'] = $request->templateResourceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMdsCubeTasks',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMdsCubeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMdsCubeTasksRequest
     *
     * @returns ListMdsCubeTasksResponse
     *
     * @param ListMdsCubeTasksRequest $request
     *
     * @return ListMdsCubeTasksResponse
     */
    public function listMdsCubeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMdsCubeTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMdsCubeTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMdsCubeTemplatesResponse
     *
     * @param ListMdsCubeTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMdsCubeTemplatesResponse
     */
    public function listMdsCubeTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMdsCubeTemplates',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMdsCubeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMdsCubeTemplatesRequest
     *
     * @returns ListMdsCubeTemplatesResponse
     *
     * @param ListMdsCubeTemplatesRequest $request
     *
     * @return ListMdsCubeTemplatesResponse
     */
    public function listMdsCubeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMdsCubeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMgsApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMgsApiResponse
     *
     * @param ListMgsApiRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMgsApiResponse
     */
    public function listMgsApiWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiStatus) {
            @$body['ApiStatus'] = $request->apiStatus;
        }

        if (null !== $request->apiType) {
            @$body['ApiType'] = $request->apiType;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->format) {
            @$body['Format'] = $request->format;
        }

        if (null !== $request->host) {
            @$body['Host'] = $request->host;
        }

        if (null !== $request->needEncrypt) {
            @$body['NeedEncrypt'] = $request->needEncrypt;
        }

        if (null !== $request->needEtag) {
            @$body['NeedEtag'] = $request->needEtag;
        }

        if (null !== $request->needSign) {
            @$body['NeedSign'] = $request->needSign;
        }

        if (null !== $request->operationType) {
            @$body['OperationType'] = $request->operationType;
        }

        if (null !== $request->optFuzzy) {
            @$body['OptFuzzy'] = $request->optFuzzy;
        }

        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sysId) {
            @$body['SysId'] = $request->sysId;
        }

        if (null !== $request->sysName) {
            @$body['SysName'] = $request->sysName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMgsApi',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMgsApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMgsApiRequest
     *
     * @returns ListMgsApiResponse
     *
     * @param ListMgsApiRequest $request
     *
     * @return ListMgsApiResponse
     */
    public function listMgsApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMgsApiWithOptions($request, $runtime);
    }

    /**
     * 分页查询模版列表.
     *
     * @param request - ListTemplatePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatePageResponse
     *
     * @param ListTemplatePageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTemplatePageResponse
     */
    public function listTemplatePageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTemplatePage',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplatePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询模版列表.
     *
     * @param request - ListTemplatePageRequest
     *
     * @returns ListTemplatePageResponse
     *
     * @param ListTemplatePageRequest $request
     *
     * @return ListTemplatePageResponse
     */
    public function listTemplatePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatePageWithOptions($request, $runtime);
    }

    /**
     * OCR通用接口.
     *
     * @param request - MTRSOCRServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MTRSOCRServiceResponse
     *
     * @param MTRSOCRServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MTRSOCRServiceResponse
     */
    public function mTRSOCRServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->imageRaw) {
            @$body['ImageRaw'] = $request->imageRaw;
        }

        if (null !== $request->mask) {
            @$body['Mask'] = $request->mask;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MTRSOCRService',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MTRSOCRServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OCR通用接口.
     *
     * @param request - MTRSOCRServiceRequest
     *
     * @returns MTRSOCRServiceResponse
     *
     * @param MTRSOCRServiceRequest $request
     *
     * @return MTRSOCRServiceResponse
     */
    public function mTRSOCRService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mTRSOCRServiceWithOptions($request, $runtime);
    }

    /**
     * @param request - PushBindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushBindResponse
     *
     * @param PushBindRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PushBindResponse
     */
    public function pushBindWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->deliveryToken) {
            @$body['DeliveryToken'] = $request->deliveryToken;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushBind',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushBindRequest
     *
     * @returns PushBindResponse
     *
     * @param PushBindRequest $request
     *
     * @return PushBindResponse
     */
    public function pushBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushBindWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushBroadcastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushBroadcastResponse
     *
     * @param PushBroadcastRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return PushBroadcastResponse
     */
    public function pushBroadcastWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushBroadcastShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->androidChannel) {
            @$body['AndroidChannel'] = $request->androidChannel;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bindEndTime) {
            @$body['BindEndTime'] = $request->bindEndTime;
        }

        if (null !== $request->bindPeriod) {
            @$body['BindPeriod'] = $request->bindPeriod;
        }

        if (null !== $request->bindStartTime) {
            @$body['BindStartTime'] = $request->bindStartTime;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->msgkey) {
            @$body['Msgkey'] = $request->msgkey;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->pushStatus) {
            @$body['PushStatus'] = $request->pushStatus;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateKeyValue) {
            @$body['TemplateKeyValue'] = $request->templateKeyValue;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->timeMode) {
            @$body['TimeMode'] = $request->timeMode;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->unBindEndTime) {
            @$body['UnBindEndTime'] = $request->unBindEndTime;
        }

        if (null !== $request->unBindPeriod) {
            @$body['UnBindPeriod'] = $request->unBindPeriod;
        }

        if (null !== $request->unBindStartTime) {
            @$body['UnBindStartTime'] = $request->unBindStartTime;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushBroadcast',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushBroadcastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushBroadcastRequest
     *
     * @returns PushBroadcastResponse
     *
     * @param PushBroadcastRequest $request
     *
     * @return PushBroadcastResponse
     */
    public function pushBroadcast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushBroadcastWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushMultipleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushMultipleResponse
     *
     * @param PushMultipleRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PushMultipleResponse
     */
    public function pushMultipleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushMultipleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->activityContentState) {
            @$body['ActivityContentState'] = $request->activityContentState;
        }

        if (null !== $request->activityEvent) {
            @$body['ActivityEvent'] = $request->activityEvent;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->dismissalDate) {
            @$body['DismissalDate'] = $request->dismissalDate;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->targetMsg) {
            @$body['TargetMsg'] = $request->targetMsg;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushMultiple',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushMultipleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushMultipleRequest
     *
     * @returns PushMultipleResponse
     *
     * @param PushMultipleRequest $request
     *
     * @return PushMultipleResponse
     */
    public function pushMultiple($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMultipleWithOptions($request, $runtime);
    }

    /**
     * 查询设备状态信息.
     *
     * @param request - PushQueryDeviceStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushQueryDeviceStateResponse
     *
     * @param PushQueryDeviceStateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PushQueryDeviceStateResponse
     */
    public function pushQueryDeviceStateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->target) {
            @$body['Target'] = $request->target;
        }

        if (null !== $request->targetType) {
            @$body['TargetType'] = $request->targetType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushQueryDeviceState',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushQueryDeviceStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备状态信息.
     *
     * @param request - PushQueryDeviceStateRequest
     *
     * @returns PushQueryDeviceStateResponse
     *
     * @param PushQueryDeviceStateRequest $request
     *
     * @return PushQueryDeviceStateResponse
     */
    public function pushQueryDeviceState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushQueryDeviceStateWithOptions($request, $runtime);
    }

    /**
     * @param request - PushReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushReportResponse
     *
     * @param PushReportRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PushReportResponse
     */
    public function pushReportWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->connectType) {
            @$body['ConnectType'] = $request->connectType;
        }

        if (null !== $request->deliveryToken) {
            @$body['DeliveryToken'] = $request->deliveryToken;
        }

        if (null !== $request->imei) {
            @$body['Imei'] = $request->imei;
        }

        if (null !== $request->imsi) {
            @$body['Imsi'] = $request->imsi;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->pushVersion) {
            @$body['PushVersion'] = $request->pushVersion;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannel) {
            @$body['ThirdChannel'] = $request->thirdChannel;
        }

        if (null !== $request->thirdChannelDeviceToken) {
            @$body['ThirdChannelDeviceToken'] = $request->thirdChannelDeviceToken;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushReport',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushReportRequest
     *
     * @returns PushReportResponse
     *
     * @param PushReportRequest $request
     *
     * @return PushReportResponse
     */
    public function pushReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushReportWithOptions($request, $runtime);
    }

    /**
     * 极简推送
     *
     * @param tmpReq - PushSimpleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushSimpleResponse
     *
     * @param PushSimpleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return PushSimpleResponse
     */
    public function pushSimpleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushSimpleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->activityContentState) {
            @$body['ActivityContentState'] = $request->activityContentState;
        }

        if (null !== $request->activityEvent) {
            @$body['ActivityEvent'] = $request->activityEvent;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->dismissalDate) {
            @$body['DismissalDate'] = $request->dismissalDate;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->iconUrls) {
            @$body['IconUrls'] = $request->iconUrls;
        }

        if (null !== $request->imageUrls) {
            @$body['ImageUrls'] = $request->imageUrls;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->pushStyle) {
            @$body['PushStyle'] = $request->pushStyle;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->smsSignName) {
            @$body['SmsSignName'] = $request->smsSignName;
        }

        if (null !== $request->smsStrategy) {
            @$body['SmsStrategy'] = $request->smsStrategy;
        }

        if (null !== $request->smsTemplateCode) {
            @$body['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        if (null !== $request->smsTemplateParam) {
            @$body['SmsTemplateParam'] = $request->smsTemplateParam;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->targetMsgkey) {
            @$body['TargetMsgkey'] = $request->targetMsgkey;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushSimple',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushSimpleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 极简推送
     *
     * @param request - PushSimpleRequest
     *
     * @returns PushSimpleResponse
     *
     * @param PushSimpleRequest $request
     *
     * @return PushSimpleResponse
     */
    public function pushSimple($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushSimpleWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushTemplateResponse
     *
     * @param PushTemplateRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PushTemplateResponse
     */
    public function pushTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->activityContentState) {
            @$body['ActivityContentState'] = $request->activityContentState;
        }

        if (null !== $request->activityEvent) {
            @$body['ActivityEvent'] = $request->activityEvent;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->dismissalDate) {
            @$body['DismissalDate'] = $request->dismissalDate;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->smsSignName) {
            @$body['SmsSignName'] = $request->smsSignName;
        }

        if (null !== $request->smsStrategy) {
            @$body['SmsStrategy'] = $request->smsStrategy;
        }

        if (null !== $request->smsTemplateCode) {
            @$body['SmsTemplateCode'] = $request->smsTemplateCode;
        }

        if (null !== $request->smsTemplateParam) {
            @$body['SmsTemplateParam'] = $request->smsTemplateParam;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->targetMsgkey) {
            @$body['TargetMsgkey'] = $request->targetMsgkey;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateKeyValue) {
            @$body['TemplateKeyValue'] = $request->templateKeyValue;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushTemplate',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushTemplateRequest
     *
     * @returns PushTemplateResponse
     *
     * @param PushTemplateRequest $request
     *
     * @return PushTemplateResponse
     */
    public function pushTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - PushUnBindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushUnBindResponse
     *
     * @param PushUnBindRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PushUnBindResponse
     */
    public function pushUnBindWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->deliveryToken) {
            @$body['DeliveryToken'] = $request->deliveryToken;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushUnBind',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushUnBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushUnBindRequest
     *
     * @returns PushUnBindResponse
     *
     * @param PushUnBindRequest $request
     *
     * @return PushUnBindResponse
     */
    public function pushUnBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushUnBindWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCubecardFiletokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCubecardFiletokenResponse
     *
     * @param QueryCubecardFiletokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryCubecardFiletokenResponse
     */
    public function queryCubecardFiletokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCubecardFiletoken',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCubecardFiletokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCubecardFiletokenRequest
     *
     * @returns QueryCubecardFiletokenResponse
     *
     * @param QueryCubecardFiletokenRequest $request
     *
     * @return QueryCubecardFiletokenResponse
     */
    public function queryCubecardFiletoken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCubecardFiletokenWithOptions($request, $runtime);
    }

    /**
     * 查询Device+服务的.
     *
     * @param request - QueryInfoFromMdpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInfoFromMdpResponse
     *
     * @param QueryInfoFromMdpRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryInfoFromMdpResponse
     */
    public function queryInfoFromMdpWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->mobileMd5) {
            @$body['MobileMd5'] = $request->mobileMd5;
        }

        if (null !== $request->mobileSha256) {
            @$body['MobileSha256'] = $request->mobileSha256;
        }

        if (null !== $request->mobileSm3) {
            @$body['MobileSm3'] = $request->mobileSm3;
        }

        if (null !== $request->riskScene) {
            @$body['RiskScene'] = $request->riskScene;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryInfoFromMdp',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInfoFromMdpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Device+服务的.
     *
     * @param request - QueryInfoFromMdpRequest
     *
     * @returns QueryInfoFromMdpResponse
     *
     * @param QueryInfoFromMdpRequest $request
     *
     * @return QueryInfoFromMdpResponse
     */
    public function queryInfoFromMdp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInfoFromMdpWithOptions($request, $runtime);
    }

    /**
     * 查询短链.
     *
     * @param request - QueryLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLinkResponse
     *
     * @param QueryLinkRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryLinkResponse
     */
    public function queryLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
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
            'action' => 'QueryLink',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询短链.
     *
     * @param request - QueryLinkRequest
     *
     * @returns QueryLinkResponse
     *
     * @param QueryLinkRequest $request
     *
     * @return QueryLinkResponse
     */
    public function queryLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLinkWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMappCenterAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMappCenterAppResponse
     *
     * @param QueryMappCenterAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMappCenterAppResponse
     */
    public function queryMappCenterAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMappCenterApp',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMappCenterAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMappCenterAppRequest
     *
     * @returns QueryMappCenterAppResponse
     *
     * @param QueryMappCenterAppRequest $request
     *
     * @return QueryMappCenterAppResponse
     */
    public function queryMappCenterApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMappCenterAppWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcdpAimRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcdpAimResponse
     *
     * @param QueryMcdpAimRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMcdpAimResponse
     */
    public function queryMcdpAimWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcdpAim',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcdpAimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcdpAimRequest
     *
     * @returns QueryMcdpAimResponse
     *
     * @param QueryMcdpAimRequest $request
     *
     * @return QueryMcdpAimResponse
     */
    public function queryMcdpAim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcdpAimWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcdpZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcdpZoneResponse
     *
     * @param QueryMcdpZoneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryMcdpZoneResponse
     */
    public function queryMcdpZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcdpZone',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcdpZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcdpZoneRequest
     *
     * @returns QueryMcdpZoneResponse
     *
     * @param QueryMcdpZoneRequest $request
     *
     * @return QueryMcdpZoneResponse
     */
    public function queryMcdpZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcdpZoneWithOptions($request, $runtime);
    }

    /**
     * 查询热修复发布任务详情.
     *
     * @param request - QueryMcubeHotpatchTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeHotpatchTaskDetailResponse
     *
     * @param QueryMcubeHotpatchTaskDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryMcubeHotpatchTaskDetailResponse
     */
    public function queryMcubeHotpatchTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeHotpatchTaskDetail',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeHotpatchTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询热修复发布任务详情.
     *
     * @param request - QueryMcubeHotpatchTaskDetailRequest
     *
     * @returns QueryMcubeHotpatchTaskDetailResponse
     *
     * @param QueryMcubeHotpatchTaskDetailRequest $request
     *
     * @return QueryMcubeHotpatchTaskDetailResponse
     */
    public function queryMcubeHotpatchTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeHotpatchTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcubeMiniPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeMiniPackageResponse
     *
     * @param QueryMcubeMiniPackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMcubeMiniPackageResponse
     */
    public function queryMcubeMiniPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeMiniPackage',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeMiniPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcubeMiniPackageRequest
     *
     * @returns QueryMcubeMiniPackageResponse
     *
     * @param QueryMcubeMiniPackageRequest $request
     *
     * @return QueryMcubeMiniPackageResponse
     */
    public function queryMcubeMiniPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeMiniPackageWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcubeMiniTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeMiniTaskResponse
     *
     * @param QueryMcubeMiniTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMcubeMiniTaskResponse
     */
    public function queryMcubeMiniTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeMiniTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeMiniTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcubeMiniTaskRequest
     *
     * @returns QueryMcubeMiniTaskResponse
     *
     * @param QueryMcubeMiniTaskRequest $request
     *
     * @return QueryMcubeMiniTaskResponse
     */
    public function queryMcubeMiniTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeMiniTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcubeVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeVhostResponse
     *
     * @param QueryMcubeVhostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMcubeVhostResponse
     */
    public function queryMcubeVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeVhost',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcubeVhostRequest
     *
     * @returns QueryMcubeVhostResponse
     *
     * @param QueryMcubeVhostRequest $request
     *
     * @return QueryMcubeVhostResponse
     */
    public function queryMcubeVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeVhostWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMdsUpgradeTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMdsUpgradeTaskDetailResponse
     *
     * @param QueryMdsUpgradeTaskDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMdsUpgradeTaskDetailResponse
     */
    public function queryMdsUpgradeTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMdsUpgradeTaskDetail',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMdsUpgradeTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMdsUpgradeTaskDetailRequest
     *
     * @returns QueryMdsUpgradeTaskDetailResponse
     *
     * @param QueryMdsUpgradeTaskDetailRequest $request
     *
     * @return QueryMdsUpgradeTaskDetailResponse
     */
    public function queryMdsUpgradeTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMdsUpgradeTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMgsApipageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMgsApipageResponse
     *
     * @param QueryMgsApipageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMgsApipageResponse
     */
    public function queryMgsApipageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiStatus) {
            @$body['ApiStatus'] = $request->apiStatus;
        }

        if (null !== $request->apiType) {
            @$body['ApiType'] = $request->apiType;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->format) {
            @$body['Format'] = $request->format;
        }

        if (null !== $request->host) {
            @$body['Host'] = $request->host;
        }

        if (null !== $request->needEncrypt) {
            @$body['NeedEncrypt'] = $request->needEncrypt;
        }

        if (null !== $request->needEtag) {
            @$body['NeedEtag'] = $request->needEtag;
        }

        if (null !== $request->needSign) {
            @$body['NeedSign'] = $request->needSign;
        }

        if (null !== $request->operationType) {
            @$body['OperationType'] = $request->operationType;
        }

        if (null !== $request->optFuzzy) {
            @$body['OptFuzzy'] = $request->optFuzzy;
        }

        if (null !== $request->pageIndex) {
            @$body['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sysId) {
            @$body['SysId'] = $request->sysId;
        }

        if (null !== $request->sysName) {
            @$body['SysName'] = $request->sysName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMgsApipage',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMgsApipageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMgsApipageRequest
     *
     * @returns QueryMgsApipageResponse
     *
     * @param QueryMgsApipageRequest $request
     *
     * @return QueryMgsApipageResponse
     */
    public function queryMgsApipage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMgsApipageWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMgsApirestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMgsApirestResponse
     *
     * @param QueryMgsApirestRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMgsApirestResponse
     */
    public function queryMgsApirestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->format) {
            @$body['Format'] = $request->format;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMgsApirest',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMgsApirestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMgsApirestRequest
     *
     * @returns QueryMgsApirestResponse
     *
     * @param QueryMgsApirestRequest $request
     *
     * @return QueryMgsApirestResponse
     */
    public function queryMgsApirest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMgsApirestWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMgsTestreqbodyautogenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMgsTestreqbodyautogenResponse
     *
     * @param QueryMgsTestreqbodyautogenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryMgsTestreqbodyautogenResponse
     */
    public function queryMgsTestreqbodyautogenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->format) {
            @$body['Format'] = $request->format;
        }

        if (null !== $request->mpaasMappcenterMgsTestreqbodyautogenQueryJsonStr) {
            @$body['MpaasMappcenterMgsTestreqbodyautogenQueryJsonStr'] = $request->mpaasMappcenterMgsTestreqbodyautogenQueryJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMgsTestreqbodyautogen',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMgsTestreqbodyautogenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMgsTestreqbodyautogenRequest
     *
     * @returns QueryMgsTestreqbodyautogenResponse
     *
     * @param QueryMgsTestreqbodyautogenRequest $request
     *
     * @return QueryMgsTestreqbodyautogenResponse
     */
    public function queryMgsTestreqbodyautogen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMgsTestreqbodyautogenWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMpsSchedulerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMpsSchedulerListResponse
     *
     * @param QueryMpsSchedulerListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMpsSchedulerListResponse
     */
    public function queryMpsSchedulerListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueId) {
            @$body['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMpsSchedulerList',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMpsSchedulerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMpsSchedulerListRequest
     *
     * @returns QueryMpsSchedulerListResponse
     *
     * @param QueryMpsSchedulerListRequest $request
     *
     * @return QueryMpsSchedulerListResponse
     */
    public function queryMpsSchedulerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMpsSchedulerListWithOptions($request, $runtime);
    }

    /**
     * 查询风险信息.
     *
     * @param request - QueryMscpRiskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMscpRiskInfoResponse
     *
     * @param QueryMscpRiskInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMscpRiskInfoResponse
     */
    public function queryMscpRiskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apdidToken) {
            @$body['ApdidToken'] = $request->apdidToken;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->terminalType) {
            @$body['TerminalType'] = $request->terminalType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMscpRiskInfo',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMscpRiskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询风险信息.
     *
     * @param request - QueryMscpRiskInfoRequest
     *
     * @returns QueryMscpRiskInfoResponse
     *
     * @param QueryMscpRiskInfoRequest $request
     *
     * @return QueryMscpRiskInfoResponse
     */
    public function queryMscpRiskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMscpRiskInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushAnalysisCoreIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushAnalysisCoreIndexResponse
     *
     * @param QueryPushAnalysisCoreIndexRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryPushAnalysisCoreIndexResponse
     */
    public function queryPushAnalysisCoreIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushAnalysisCoreIndex',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushAnalysisCoreIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushAnalysisCoreIndexRequest
     *
     * @returns QueryPushAnalysisCoreIndexResponse
     *
     * @param QueryPushAnalysisCoreIndexRequest $request
     *
     * @return QueryPushAnalysisCoreIndexResponse
     */
    public function queryPushAnalysisCoreIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushAnalysisCoreIndexWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushAnalysisTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushAnalysisTaskDetailResponse
     *
     * @param QueryPushAnalysisTaskDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryPushAnalysisTaskDetailResponse
     */
    public function queryPushAnalysisTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushAnalysisTaskDetail',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushAnalysisTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushAnalysisTaskDetailRequest
     *
     * @returns QueryPushAnalysisTaskDetailResponse
     *
     * @param QueryPushAnalysisTaskDetailRequest $request
     *
     * @return QueryPushAnalysisTaskDetailResponse
     */
    public function queryPushAnalysisTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushAnalysisTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushAnalysisTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushAnalysisTaskListResponse
     *
     * @param QueryPushAnalysisTaskListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPushAnalysisTaskListResponse
     */
    public function queryPushAnalysisTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushAnalysisTaskList',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushAnalysisTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushAnalysisTaskListRequest
     *
     * @returns QueryPushAnalysisTaskListResponse
     *
     * @param QueryPushAnalysisTaskListRequest $request
     *
     * @return QueryPushAnalysisTaskListResponse
     */
    public function queryPushAnalysisTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushAnalysisTaskListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushSchedulerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushSchedulerListResponse
     *
     * @param QueryPushSchedulerListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPushSchedulerListResponse
     */
    public function queryPushSchedulerListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueId) {
            @$body['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushSchedulerList',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushSchedulerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushSchedulerListRequest
     *
     * @returns QueryPushSchedulerListResponse
     *
     * @param QueryPushSchedulerListRequest $request
     *
     * @return QueryPushSchedulerListResponse
     */
    public function queryPushSchedulerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushSchedulerListWithOptions($request, $runtime);
    }

    /**
     * @param request - RevokePushMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokePushMessageResponse
     *
     * @param RevokePushMessageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RevokePushMessageResponse
     */
    public function revokePushMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->messageId) {
            @$body['MessageId'] = $request->messageId;
        }

        if (null !== $request->targetId) {
            @$body['TargetId'] = $request->targetId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokePushMessage',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokePushMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RevokePushMessageRequest
     *
     * @returns RevokePushMessageResponse
     *
     * @param RevokePushMessageRequest $request
     *
     * @return RevokePushMessageResponse
     */
    public function revokePushMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokePushMessageWithOptions($request, $runtime);
    }

    /**
     * @param request - RevokePushTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokePushTaskResponse
     *
     * @param RevokePushTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RevokePushTaskResponse
     */
    public function revokePushTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokePushTask',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokePushTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RevokePushTaskRequest
     *
     * @returns RevokePushTaskResponse
     *
     * @param RevokePushTaskRequest $request
     *
     * @return RevokePushTaskResponse
     */
    public function revokePushTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokePushTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - RunMsaDiffRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunMsaDiffResponse
     *
     * @param RunMsaDiffRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunMsaDiffResponse
     */
    public function runMsaDiffWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMsaDiffRunJsonStr) {
            @$body['MpaasMappcenterMsaDiffRunJsonStr'] = $request->mpaasMappcenterMsaDiffRunJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunMsaDiff',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunMsaDiffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RunMsaDiffRequest
     *
     * @returns RunMsaDiffResponse
     *
     * @param RunMsaDiffRequest $request
     *
     * @return RunMsaDiffResponse
     */
    public function runMsaDiff($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runMsaDiffWithOptions($request, $runtime);
    }

    /**
     * @param request - SaveMgsApirestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveMgsApirestResponse
     *
     * @param SaveMgsApirestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveMgsApirestResponse
     */
    public function saveMgsApirestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mpaasMappcenterMgsApirestSaveJsonStr) {
            @$body['MpaasMappcenterMgsApirestSaveJsonStr'] = $request->mpaasMappcenterMgsApirestSaveJsonStr;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveMgsApirest',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveMgsApirestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SaveMgsApirestRequest
     *
     * @returns SaveMgsApirestResponse
     *
     * @param SaveMgsApirestRequest $request
     *
     * @return SaveMgsApirestResponse
     */
    public function saveMgsApirest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMgsApirestWithOptions($request, $runtime);
    }

    /**
     * @param request - StartUserAppAsyncEnhanceInMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartUserAppAsyncEnhanceInMsaResponse
     *
     * @param StartUserAppAsyncEnhanceInMsaRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return StartUserAppAsyncEnhanceInMsaResponse
     */
    public function startUserAppAsyncEnhanceInMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newShieldConfig) {
            @$query['NewShieldConfig'] = $request->newShieldConfig;
        }

        $body = [];
        if (null !== $request->apkProtector) {
            @$body['ApkProtector'] = $request->apkProtector;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->assetsFileList) {
            @$body['AssetsFileList'] = $request->assetsFileList;
        }

        if (null !== $request->classes) {
            @$body['Classes'] = $request->classes;
        }

        if (null !== $request->dalvikDebugger) {
            @$body['DalvikDebugger'] = $request->dalvikDebugger;
        }

        if (null !== $request->emulatorEnvironment) {
            @$body['EmulatorEnvironment'] = $request->emulatorEnvironment;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->javaHook) {
            @$body['JavaHook'] = $request->javaHook;
        }

        if (null !== $request->memoryDump) {
            @$body['MemoryDump'] = $request->memoryDump;
        }

        if (null !== $request->nativeDebugger) {
            @$body['NativeDebugger'] = $request->nativeDebugger;
        }

        if (null !== $request->nativeHook) {
            @$body['NativeHook'] = $request->nativeHook;
        }

        if (null !== $request->packageTampered) {
            @$body['PackageTampered'] = $request->packageTampered;
        }

        if (null !== $request->root) {
            @$body['Root'] = $request->root;
        }

        if (null !== $request->runMode) {
            @$body['RunMode'] = $request->runMode;
        }

        if (null !== $request->soFileList) {
            @$body['SoFileList'] = $request->soFileList;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->totalSwitch) {
            @$body['TotalSwitch'] = $request->totalSwitch;
        }

        if (null !== $request->useAShield) {
            @$body['UseAShield'] = $request->useAShield;
        }

        if (null !== $request->useYShield) {
            @$body['UseYShield'] = $request->useYShield;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartUserAppAsyncEnhanceInMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartUserAppAsyncEnhanceInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartUserAppAsyncEnhanceInMsaRequest
     *
     * @returns StartUserAppAsyncEnhanceInMsaResponse
     *
     * @param StartUserAppAsyncEnhanceInMsaRequest $request
     *
     * @return StartUserAppAsyncEnhanceInMsaResponse
     */
    public function startUserAppAsyncEnhanceInMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startUserAppAsyncEnhanceInMsaWithOptions($request, $runtime);
    }

    /**
     * 更新短链.
     *
     * @param request - UpdateLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLinkResponse
     *
     * @param UpdateLinkRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateLinkResponse
     */
    public function updateLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->cors) {
            @$body['Cors'] = $request->cors;
        }

        if (null !== $request->domain) {
            @$body['Domain'] = $request->domain;
        }

        if (null !== $request->dynamicfield) {
            @$body['Dynamicfield'] = $request->dynamicfield;
        }

        if (null !== $request->targetUrl) {
            @$body['TargetUrl'] = $request->targetUrl;
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
            'action' => 'UpdateLink',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新短链.
     *
     * @param request - UpdateLinkRequest
     *
     * @returns UpdateLinkResponse
     *
     * @param UpdateLinkRequest $request
     *
     * @return UpdateLinkResponse
     */
    public function updateLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLinkWithOptions($request, $runtime);
    }

    /**
     * 更新热修复发布任务状态
     *
     * @param request - UpdateMcubeHotpatchTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcubeHotpatchTaskStatusResponse
     *
     * @param UpdateMcubeHotpatchTaskStatusRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateMcubeHotpatchTaskStatusResponse
     */
    public function updateMcubeHotpatchTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcubeHotpatchTaskStatus',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMcubeHotpatchTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新热修复发布任务状态
     *
     * @param request - UpdateMcubeHotpatchTaskStatusRequest
     *
     * @returns UpdateMcubeHotpatchTaskStatusResponse
     *
     * @param UpdateMcubeHotpatchTaskStatusRequest $request
     *
     * @return UpdateMcubeHotpatchTaskStatusResponse
     */
    public function updateMcubeHotpatchTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMcubeHotpatchTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateMcubeWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcubeWhitelistResponse
     *
     * @param UpdateMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMcubeWhitelistResponse
     */
    public function updateMcubeWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->keyIds) {
            @$body['KeyIds'] = $request->keyIds;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->ossUrl) {
            @$body['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcubeWhitelist',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateMcubeWhitelistRequest
     *
     * @returns UpdateMcubeWhitelistResponse
     *
     * @param UpdateMcubeWhitelistRequest $request
     *
     * @return UpdateMcubeWhitelistResponse
     */
    public function updateMcubeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMcubeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateMdsCubeResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMdsCubeResourceResponse
     *
     * @param UpdateMdsCubeResourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateMdsCubeResourceResponse
     */
    public function updateMdsCubeResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->mockDataUrl) {
            @$body['MockDataUrl'] = $request->mockDataUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->templateResourceId) {
            @$body['TemplateResourceId'] = $request->templateResourceId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMdsCubeResource',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMdsCubeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateMdsCubeResourceRequest
     *
     * @returns UpdateMdsCubeResourceResponse
     *
     * @param UpdateMdsCubeResourceRequest $request
     *
     * @return UpdateMdsCubeResourceResponse
     */
    public function updateMdsCubeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMdsCubeResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateMpaasAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMpaasAppInfoResponse
     *
     * @param UpdateMpaasAppInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMpaasAppInfoResponse
     */
    public function updateMpaasAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->iconFileUrl) {
            @$body['IconFileUrl'] = $request->iconFileUrl;
        }

        if (null !== $request->identifier) {
            @$body['Identifier'] = $request->identifier;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMpaasAppInfo',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMpaasAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateMpaasAppInfoRequest
     *
     * @returns UpdateMpaasAppInfoResponse
     *
     * @param UpdateMpaasAppInfoRequest $request
     *
     * @return UpdateMpaasAppInfoResponse
     */
    public function updateMpaasAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMpaasAppInfoWithOptions($request, $runtime);
    }

    /**
     * 上传字节码到msa进行加固.
     *
     * @param request - UploadBitcodeToMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadBitcodeToMsaResponse
     *
     * @param UploadBitcodeToMsaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadBitcodeToMsaResponse
     */
    public function uploadBitcodeToMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bitcode) {
            @$body['Bitcode'] = $request->bitcode;
        }

        if (null !== $request->codeVersion) {
            @$body['CodeVersion'] = $request->codeVersion;
        }

        if (null !== $request->license) {
            @$body['License'] = $request->license;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadBitcodeToMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadBitcodeToMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传字节码到msa进行加固.
     *
     * @param request - UploadBitcodeToMsaRequest
     *
     * @returns UploadBitcodeToMsaResponse
     *
     * @param UploadBitcodeToMsaRequest $request
     *
     * @return UploadBitcodeToMsaResponse
     */
    public function uploadBitcodeToMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadBitcodeToMsaWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadMcubeMiniPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMcubeMiniPackageResponse
     *
     * @param UploadMcubeMiniPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UploadMcubeMiniPackageResponse
     */
    public function uploadMcubeMiniPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->autoInstall) {
            @$body['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->clientVersionMax) {
            @$body['ClientVersionMax'] = $request->clientVersionMax;
        }

        if (null !== $request->clientVersionMin) {
            @$body['ClientVersionMin'] = $request->clientVersionMin;
        }

        if (null !== $request->enableKeepAlive) {
            @$body['EnableKeepAlive'] = $request->enableKeepAlive;
        }

        if (null !== $request->enableOptionMenu) {
            @$body['EnableOptionMenu'] = $request->enableOptionMenu;
        }

        if (null !== $request->enableTabBar) {
            @$body['EnableTabBar'] = $request->enableTabBar;
        }

        if (null !== $request->extendInfo) {
            @$body['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->h5Version) {
            @$body['H5Version'] = $request->h5Version;
        }

        if (null !== $request->iconFileUrl) {
            @$body['IconFileUrl'] = $request->iconFileUrl;
        }

        if (null !== $request->iconUrl) {
            @$body['IconUrl'] = $request->iconUrl;
        }

        if (null !== $request->installType) {
            @$body['InstallType'] = $request->installType;
        }

        if (null !== $request->mainUrl) {
            @$body['MainUrl'] = $request->mainUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->resourceFileUrl) {
            @$body['ResourceFileUrl'] = $request->resourceFileUrl;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        if (null !== $request->vhost) {
            @$body['Vhost'] = $request->vhost;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadMcubeMiniPackage',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadMcubeMiniPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UploadMcubeMiniPackageRequest
     *
     * @returns UploadMcubeMiniPackageResponse
     *
     * @param UploadMcubeMiniPackageRequest $request
     *
     * @return UploadMcubeMiniPackageResponse
     */
    public function uploadMcubeMiniPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMcubeMiniPackageWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadMcubeRsaKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMcubeRsaKeyResponse
     *
     * @param UploadMcubeRsaKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadMcubeRsaKeyResponse
     */
    public function uploadMcubeRsaKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadMcubeRsaKey',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadMcubeRsaKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UploadMcubeRsaKeyRequest
     *
     * @returns UploadMcubeRsaKeyResponse
     *
     * @param UploadMcubeRsaKeyRequest $request
     *
     * @return UploadMcubeRsaKeyResponse
     */
    public function uploadMcubeRsaKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMcubeRsaKeyWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadUserAppToMsaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadUserAppToMsaResponse
     *
     * @param UploadUserAppToMsaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadUserAppToMsaResponse
     */
    public function uploadUserAppToMsaWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->fileName) {
            @$body['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->useYShield) {
            @$body['UseYShield'] = $request->useYShield;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadUserAppToMsa',
            'version' => '2020-10-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadUserAppToMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UploadUserAppToMsaRequest
     *
     * @returns UploadUserAppToMsaResponse
     *
     * @param UploadUserAppToMsaRequest $request
     *
     * @return UploadUserAppToMsaResponse
     */
    public function uploadUserAppToMsa($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadUserAppToMsaWithOptions($request, $runtime);
    }
}
