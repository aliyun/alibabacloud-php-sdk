<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CopyMcdpGroupRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CopyMcdpGroupResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMasCrowdRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMasCrowdResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMasFunnelRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMasFunnelResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpEventAttributeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpEventAttributeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpEventRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpEventResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpGroupRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpGroupResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpMaterialRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpMaterialResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpZoneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcdpZoneResponse;
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
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsMiniprogramTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMdsMiniprogramTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMsaEnhanceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMsaEnhanceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenGlobalDataRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenGlobalDataResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenSingleDataRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateOpenSingleDataResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteCubecardWhitelistContentRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteCubecardWhitelistContentResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpAimRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpAimResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpCrowdRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpCrowdResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpEventAttributeByIdRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpEventAttributeByIdResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpEventByIdRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpEventByIdResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpMaterialRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpMaterialResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpZoneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcdpZoneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeMiniAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeMiniAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeNebulaAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeNebulaAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeUpgradeResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeUpgradeResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMdsWhitelistContentRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\DeleteMdsWhitelistContentResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExistMcubeRsaKeyRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExistMcubeRsaKeyResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExportMappCenterAppConfigRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ExportMappCenterAppConfigResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetFileTokenForUploadToMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetFileTokenForUploadToMsaResponse;
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
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppDonwloadUrlInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppDonwloadUrlInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppEnhanceProcessInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppEnhanceProcessInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMappCenterWorkspacesResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcdpAimRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcdpAimResponse;
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
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\LogMsaQueryRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\LogMsaQueryResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\MTRSOCRServiceRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\MTRSOCRServiceResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiAddActiveCodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiAddActiveCodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiAddActiveSceneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiAddActiveSceneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiCallbackRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiCallbackResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiDecodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiDecodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiDeleteActiveCodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiDeleteActiveCodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiEncodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiEncodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiQueryActiveCodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiQueryActiveCodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiQueryActiveSceneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiQueryActiveSceneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiUniqueEncodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiUniqueEncodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiUpdateActiveCodeRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiUpdateActiveCodeResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiUpdateActiveSceneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\OpenApiUpdateActiveSceneResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBindRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBindResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBroadcastRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBroadcastResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushBroadcastShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleShrinkRequest;
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
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMappCenterAppResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpAimRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpAimResponse;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpZoneRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcdpZoneResponse;
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
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MPaaS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'mpaas.aliyuncs.com',
            'ap-northeast-1'              => 'mpaas.aliyuncs.com',
            'ap-northeast-2-pop'          => 'mpaas.aliyuncs.com',
            'ap-south-1'                  => 'mpaas.aliyuncs.com',
            'ap-southeast-1'              => 'mpaas.aliyuncs.com',
            'ap-southeast-2'              => 'mpaas.aliyuncs.com',
            'ap-southeast-3'              => 'mpaas.aliyuncs.com',
            'ap-southeast-5'              => 'mpaas.aliyuncs.com',
            'cn-beijing'                  => 'mpaas.aliyuncs.com',
            'cn-beijing-finance-1'        => 'mpaas.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'mpaas.aliyuncs.com',
            'cn-beijing-gov-1'            => 'mpaas.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'mpaas.aliyuncs.com',
            'cn-chengdu'                  => 'mpaas.aliyuncs.com',
            'cn-edge-1'                   => 'mpaas.aliyuncs.com',
            'cn-fujian'                   => 'mpaas.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'mpaas.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'mpaas.aliyuncs.com',
            'cn-hangzhou-finance'         => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'mpaas.aliyuncs.com',
            'cn-hongkong'                 => 'mpaas.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'mpaas.aliyuncs.com',
            'cn-huhehaote'                => 'mpaas.aliyuncs.com',
            'cn-north-2-gov-1'            => 'mpaas.aliyuncs.com',
            'cn-qingdao'                  => 'mpaas.aliyuncs.com',
            'cn-qingdao-nebula'           => 'mpaas.aliyuncs.com',
            'cn-shanghai'                 => 'mpaas.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'mpaas.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'mpaas.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'mpaas.aliyuncs.com',
            'cn-shanghai-inner'           => 'mpaas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mpaas.aliyuncs.com',
            'cn-shenzhen'                 => 'mpaas.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'mpaas.aliyuncs.com',
            'cn-shenzhen-inner'           => 'mpaas.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'mpaas.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'mpaas.aliyuncs.com',
            'cn-wuhan'                    => 'mpaas.aliyuncs.com',
            'cn-yushanfang'               => 'mpaas.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'mpaas.aliyuncs.com',
            'cn-zhangjiakou'              => 'mpaas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'mpaas.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'mpaas.aliyuncs.com',
            'eu-central-1'                => 'mpaas.aliyuncs.com',
            'eu-west-1'                   => 'mpaas.aliyuncs.com',
            'eu-west-1-oxs'               => 'mpaas.aliyuncs.com',
            'me-east-1'                   => 'mpaas.aliyuncs.com',
            'rus-west-1-pop'              => 'mpaas.aliyuncs.com',
            'us-east-1'                   => 'mpaas.aliyuncs.com',
            'us-west-1'                   => 'mpaas.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddMdsMiniConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddMdsMiniConfigResponse
     */
    public function addMdsMiniConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMiniConfigAddJsonStr)) {
            $body['MpaasMappcenterMiniConfigAddJsonStr'] = $request->mpaasMappcenterMiniConfigAddJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddMdsMiniConfig',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMdsMiniConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CancelPushSchedulerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelPushSchedulerResponse
     */
    public function cancelPushSchedulerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uniqueIds)) {
            $body['UniqueIds'] = $request->uniqueIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelPushScheduler',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelPushSchedulerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ChangeMcubeMiniTaskStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ChangeMcubeMiniTaskStatusResponse
     */
    public function changeMcubeMiniTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeMcubeMiniTaskStatus',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeMcubeMiniTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ChangeMcubeNebulaTaskStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeMcubeNebulaTaskStatusResponse
     */
    public function changeMcubeNebulaTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeMcubeNebulaTaskStatus',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeMcubeNebulaTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ChangeMcubePublicTaskStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeMcubePublicTaskStatusResponse
     */
    public function changeMcubePublicTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeMcubePublicTaskStatus',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeMcubePublicTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CopyMcdpGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyMcdpGroupResponse
     */
    public function copyMcdpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpGroupCopyJsonStr)) {
            $body['MpaasMappcenterMcdpGroupCopyJsonStr'] = $request->mpaasMappcenterMcdpGroupCopyJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyMcdpGroup',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyMcdpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMasCrowdRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateMasCrowdResponse
     */
    public function createMasCrowdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpMasCrowdCreateJsonStr)) {
            $body['MpaasMappcenterMcdpMasCrowdCreateJsonStr'] = $request->mpaasMappcenterMcdpMasCrowdCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMasCrowd',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMasCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMasCrowdRequest $request
     *
     * @return CreateMasCrowdResponse
     */
    public function createMasCrowd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMasCrowdWithOptions($request, $runtime);
    }

    /**
     * @param CreateMasFunnelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMasFunnelResponse
     */
    public function createMasFunnelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpMasFunnelCreateJsonStr)) {
            $body['MpaasMappcenterMcdpMasFunnelCreateJsonStr'] = $request->mpaasMappcenterMcdpMasFunnelCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMasFunnel',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMasFunnelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMasFunnelRequest $request
     *
     * @return CreateMasFunnelResponse
     */
    public function createMasFunnel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMasFunnelWithOptions($request, $runtime);
    }

    /**
     * @param CreateMcdpEventRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMcdpEventResponse
     */
    public function createMcdpEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpEventCreateJsonStr)) {
            $body['MpaasMappcenterMcdpEventCreateJsonStr'] = $request->mpaasMappcenterMcdpEventCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcdpEvent',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcdpEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMcdpEventRequest $request
     *
     * @return CreateMcdpEventResponse
     */
    public function createMcdpEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcdpEventWithOptions($request, $runtime);
    }

    /**
     * @param CreateMcdpEventAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMcdpEventAttributeResponse
     */
    public function createMcdpEventAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpEventAttributeCreateJsonStr)) {
            $body['MpaasMappcenterMcdpEventAttributeCreateJsonStr'] = $request->mpaasMappcenterMcdpEventAttributeCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcdpEventAttribute',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcdpEventAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMcdpEventAttributeRequest $request
     *
     * @return CreateMcdpEventAttributeResponse
     */
    public function createMcdpEventAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcdpEventAttributeWithOptions($request, $runtime);
    }

    /**
     * @param CreateMcdpGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMcdpGroupResponse
     */
    public function createMcdpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpGroupCreateJsonStr)) {
            $body['MpaasMappcenterMcdpGroupCreateJsonStr'] = $request->mpaasMappcenterMcdpGroupCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcdpGroup',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcdpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcdpMaterialRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMcdpMaterialResponse
     */
    public function createMcdpMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpMaterialCreateJsonStr)) {
            $body['MpaasMappcenterMcdpMaterialCreateJsonStr'] = $request->mpaasMappcenterMcdpMaterialCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcdpMaterial',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcdpMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcdpZoneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateMcdpZoneResponse
     */
    public function createMcdpZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpZoneCreateJsonStr)) {
            $body['MpaasMappcenterMcdpZoneCreateJsonStr'] = $request->mpaasMappcenterMcdpZoneCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcdpZone',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcdpZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeMiniAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMcubeMiniAppResponse
     */
    public function createMcubeMiniAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->h5Name)) {
            $body['H5Name'] = $request->h5Name;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeMiniApp',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeMiniAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeMiniTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMcubeMiniTaskResponse
     */
    public function createMcubeMiniTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->greyConfigInfo)) {
            $body['GreyConfigInfo'] = $request->greyConfigInfo;
        }
        if (!Utils::isUnset($request->greyEndtimeData)) {
            $body['GreyEndtimeData'] = $request->greyEndtimeData;
        }
        if (!Utils::isUnset($request->greyNum)) {
            $body['GreyNum'] = $request->greyNum;
        }
        if (!Utils::isUnset($request->memo)) {
            $body['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->publishMode)) {
            $body['PublishMode'] = $request->publishMode;
        }
        if (!Utils::isUnset($request->publishType)) {
            $body['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->whitelistIds)) {
            $body['WhitelistIds'] = $request->whitelistIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeMiniTask',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeMiniTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeNebulaAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMcubeNebulaAppResponse
     */
    public function createMcubeNebulaAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->h5Name)) {
            $body['H5Name'] = $request->h5Name;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeNebulaApp',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeNebulaAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeNebulaResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMcubeNebulaResourceResponse
     */
    public function createMcubeNebulaResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoInstall)) {
            $body['AutoInstall'] = $request->autoInstall;
        }
        if (!Utils::isUnset($request->clientVersionMax)) {
            $body['ClientVersionMax'] = $request->clientVersionMax;
        }
        if (!Utils::isUnset($request->clientVersionMin)) {
            $body['ClientVersionMin'] = $request->clientVersionMin;
        }
        if (!Utils::isUnset($request->customDomainName)) {
            $body['CustomDomainName'] = $request->customDomainName;
        }
        if (!Utils::isUnset($request->extendInfo)) {
            $body['ExtendInfo'] = $request->extendInfo;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->h5Name)) {
            $body['H5Name'] = $request->h5Name;
        }
        if (!Utils::isUnset($request->h5Version)) {
            $body['H5Version'] = $request->h5Version;
        }
        if (!Utils::isUnset($request->installType)) {
            $body['InstallType'] = $request->installType;
        }
        if (!Utils::isUnset($request->mainUrl)) {
            $body['MainUrl'] = $request->mainUrl;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->repeatNebula)) {
            $body['RepeatNebula'] = $request->repeatNebula;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->subUrl)) {
            $body['SubUrl'] = $request->subUrl;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->vhost)) {
            $body['Vhost'] = $request->vhost;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeNebulaResource',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeNebulaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeNebulaTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMcubeNebulaTaskResponse
     */
    public function createMcubeNebulaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appCode)) {
            $body['AppCode'] = $request->appCode;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->creator)) {
            $body['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->gmtCreate)) {
            $body['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $body['GmtModified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->gmtModifiedStr)) {
            $body['GmtModifiedStr'] = $request->gmtModifiedStr;
        }
        if (!Utils::isUnset($request->greyConfigInfo)) {
            $body['GreyConfigInfo'] = $request->greyConfigInfo;
        }
        if (!Utils::isUnset($request->greyEndtime)) {
            $body['GreyEndtime'] = $request->greyEndtime;
        }
        if (!Utils::isUnset($request->greyEndtimeData)) {
            $body['GreyEndtimeData'] = $request->greyEndtimeData;
        }
        if (!Utils::isUnset($request->greyEndtimeStr)) {
            $body['GreyEndtimeStr'] = $request->greyEndtimeStr;
        }
        if (!Utils::isUnset($request->greyNum)) {
            $body['GreyNum'] = $request->greyNum;
        }
        if (!Utils::isUnset($request->greyUrl)) {
            $body['GreyUrl'] = $request->greyUrl;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->memo)) {
            $body['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->modifier)) {
            $body['Modifier'] = $request->modifier;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->percent)) {
            $body['Percent'] = $request->percent;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersion)) {
            $body['ProductVersion'] = $request->productVersion;
        }
        if (!Utils::isUnset($request->publishMode)) {
            $body['PublishMode'] = $request->publishMode;
        }
        if (!Utils::isUnset($request->publishType)) {
            $body['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $body['ReleaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->resIds)) {
            $body['ResIds'] = $request->resIds;
        }
        if (!Utils::isUnset($request->serialVersionUID)) {
            $body['SerialVersionUID'] = $request->serialVersionUID;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->syncMode)) {
            $body['SyncMode'] = $request->syncMode;
        }
        if (!Utils::isUnset($request->syncResult)) {
            $body['SyncResult'] = $request->syncResult;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->taskVersion)) {
            $body['TaskVersion'] = $request->taskVersion;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->upgradeNoticeNum)) {
            $body['UpgradeNoticeNum'] = $request->upgradeNoticeNum;
        }
        if (!Utils::isUnset($request->upgradeProgress)) {
            $body['UpgradeProgress'] = $request->upgradeProgress;
        }
        if (!Utils::isUnset($request->whitelistIds)) {
            $body['WhitelistIds'] = $request->whitelistIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeNebulaTask',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeNebulaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeUpgradePackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMcubeUpgradePackageResponse
     */
    public function createMcubeUpgradePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->appstoreUrl)) {
            $body['AppstoreUrl'] = $request->appstoreUrl;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $body['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->customDomainName)) {
            $body['CustomDomainName'] = $request->customDomainName;
        }
        if (!Utils::isUnset($request->desc)) {
            $body['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->downloadUrl)) {
            $body['DownloadUrl'] = $request->downloadUrl;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->iconFileUrl)) {
            $body['IconFileUrl'] = $request->iconFileUrl;
        }
        if (!Utils::isUnset($request->installAmount)) {
            $body['InstallAmount'] = $request->installAmount;
        }
        if (!Utils::isUnset($request->iosSymbolfileUrl)) {
            $body['IosSymbolfileUrl'] = $request->iosSymbolfileUrl;
        }
        if (!Utils::isUnset($request->isEnterprise)) {
            $body['IsEnterprise'] = $request->isEnterprise;
        }
        if (!Utils::isUnset($request->needCheck)) {
            $body['NeedCheck'] = $request->needCheck;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->validDays)) {
            $body['ValidDays'] = $request->validDays;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeUpgradePackage',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeUpgradePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeUpgradeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMcubeUpgradeTaskResponse
     */
    public function createMcubeUpgradeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->greyConfigInfo)) {
            $body['GreyConfigInfo'] = $request->greyConfigInfo;
        }
        if (!Utils::isUnset($request->greyEndtimeData)) {
            $body['GreyEndtimeData'] = $request->greyEndtimeData;
        }
        if (!Utils::isUnset($request->greyNum)) {
            $body['GreyNum'] = $request->greyNum;
        }
        if (!Utils::isUnset($request->historyForce)) {
            $body['HistoryForce'] = $request->historyForce;
        }
        if (!Utils::isUnset($request->memo)) {
            $body['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->packageInfoId)) {
            $body['PackageInfoId'] = $request->packageInfoId;
        }
        if (!Utils::isUnset($request->publishMode)) {
            $body['PublishMode'] = $request->publishMode;
        }
        if (!Utils::isUnset($request->publishType)) {
            $body['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->upgradeContent)) {
            $body['UpgradeContent'] = $request->upgradeContent;
        }
        if (!Utils::isUnset($request->upgradeType)) {
            $body['UpgradeType'] = $request->upgradeType;
        }
        if (!Utils::isUnset($request->whitelistIds)) {
            $body['WhitelistIds'] = $request->whitelistIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeUpgradeTask',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeUpgradeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeVhostRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMcubeVhostResponse
     */
    public function createMcubeVhostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->vhost)) {
            $body['Vhost'] = $request->vhost;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeVhost',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMcubeWhitelistResponse
     */
    public function createMcubeWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->whiteListName)) {
            $body['WhiteListName'] = $request->whiteListName;
        }
        if (!Utils::isUnset($request->whitelistType)) {
            $body['WhitelistType'] = $request->whitelistType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeWhitelist',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMcubeWhitelistForIdeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateMcubeWhitelistForIdeResponse
     */
    public function createMcubeWhitelistForIdeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->whitelistValue)) {
            $body['WhitelistValue'] = $request->whitelistValue;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMcubeWhitelistForIde',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMcubeWhitelistForIdeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMdsMiniprogramTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMdsMiniprogramTaskResponse
     */
    public function createMdsMiniprogramTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->greyConfigInfo)) {
            $body['GreyConfigInfo'] = $request->greyConfigInfo;
        }
        if (!Utils::isUnset($request->greyEndtimeData)) {
            $body['GreyEndtimeData'] = $request->greyEndtimeData;
        }
        if (!Utils::isUnset($request->greyNum)) {
            $body['GreyNum'] = $request->greyNum;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->memo)) {
            $body['Memo'] = $request->memo;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->publishMode)) {
            $body['PublishMode'] = $request->publishMode;
        }
        if (!Utils::isUnset($request->publishType)) {
            $body['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->syncMode)) {
            $body['SyncMode'] = $request->syncMode;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->whitelistIds)) {
            $body['WhitelistIds'] = $request->whitelistIds;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMdsMiniprogramTask',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMdsMiniprogramTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateMsaEnhanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMsaEnhanceResponse
     */
    public function createMsaEnhanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMsaEnhanceCreateJsonStr)) {
            $body['MpaasMappcenterMsaEnhanceCreateJsonStr'] = $request->mpaasMappcenterMsaEnhanceCreateJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMsaEnhance',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMsaEnhanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMsaEnhanceRequest $request
     *
     * @return CreateMsaEnhanceResponse
     */
    public function createMsaEnhance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMsaEnhanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateOpenGlobalDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpenGlobalDataResponse
     */
    public function createOpenGlobalDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appMaxVersion)) {
            $body['AppMaxVersion'] = $request->appMaxVersion;
        }
        if (!Utils::isUnset($request->appMinVersion)) {
            $body['AppMinVersion'] = $request->appMinVersion;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extAttrStr)) {
            $body['ExtAttrStr'] = $request->extAttrStr;
        }
        if (!Utils::isUnset($request->maxUid)) {
            $body['MaxUid'] = $request->maxUid;
        }
        if (!Utils::isUnset($request->minUid)) {
            $body['MinUid'] = $request->minUid;
        }
        if (!Utils::isUnset($request->osType)) {
            $body['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->payload)) {
            $body['Payload'] = $request->payload;
        }
        if (!Utils::isUnset($request->thirdMsgId)) {
            $body['ThirdMsgId'] = $request->thirdMsgId;
        }
        if (!Utils::isUnset($request->uids)) {
            $body['Uids'] = $request->uids;
        }
        if (!Utils::isUnset($request->validTimeEnd)) {
            $body['ValidTimeEnd'] = $request->validTimeEnd;
        }
        if (!Utils::isUnset($request->validTimeStart)) {
            $body['ValidTimeStart'] = $request->validTimeStart;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOpenGlobalData',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOpenGlobalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateOpenSingleDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpenSingleDataResponse
     */
    public function createOpenSingleDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appMaxVersion)) {
            $body['AppMaxVersion'] = $request->appMaxVersion;
        }
        if (!Utils::isUnset($request->appMinVersion)) {
            $body['AppMinVersion'] = $request->appMinVersion;
        }
        if (!Utils::isUnset($request->bizType)) {
            $body['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->checkOnline)) {
            $body['CheckOnline'] = $request->checkOnline;
        }
        if (!Utils::isUnset($request->extAttrStr)) {
            $body['ExtAttrStr'] = $request->extAttrStr;
        }
        if (!Utils::isUnset($request->linkToken)) {
            $body['LinkToken'] = $request->linkToken;
        }
        if (!Utils::isUnset($request->osType)) {
            $body['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->payload)) {
            $body['Payload'] = $request->payload;
        }
        if (!Utils::isUnset($request->thirdMsgId)) {
            $body['ThirdMsgId'] = $request->thirdMsgId;
        }
        if (!Utils::isUnset($request->validTimeEnd)) {
            $body['ValidTimeEnd'] = $request->validTimeEnd;
        }
        if (!Utils::isUnset($request->validTimeStart)) {
            $body['ValidTimeStart'] = $request->validTimeStart;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOpenSingleData',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOpenSingleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteCubecardWhitelistContentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteCubecardWhitelistContentResponse
     */
    public function deleteCubecardWhitelistContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->whitelistId)) {
            $body['WhitelistId'] = $request->whitelistId;
        }
        if (!Utils::isUnset($request->whitelistValue)) {
            $body['WhitelistValue'] = $request->whitelistValue;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCubecardWhitelistContent',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCubecardWhitelistContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcdpAimRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteMcdpAimResponse
     */
    public function deleteMcdpAimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpAimDeleteJsonStr)) {
            $body['MpaasMappcenterMcdpAimDeleteJsonStr'] = $request->mpaasMappcenterMcdpAimDeleteJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcdpAim',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcdpAimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcdpCrowdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMcdpCrowdResponse
     */
    public function deleteMcdpCrowdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpCrowdDeleteJsonStr)) {
            $body['MpaasMappcenterMcdpCrowdDeleteJsonStr'] = $request->mpaasMappcenterMcdpCrowdDeleteJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcdpCrowd',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcdpCrowdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcdpEventAttributeByIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMcdpEventAttributeByIdResponse
     */
    public function deleteMcdpEventAttributeByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpEventAttributeDeleteJsonStr)) {
            $body['MpaasMappcenterMcdpEventAttributeDeleteJsonStr'] = $request->mpaasMappcenterMcdpEventAttributeDeleteJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcdpEventAttributeById',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcdpEventAttributeByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMcdpEventAttributeByIdRequest $request
     *
     * @return DeleteMcdpEventAttributeByIdResponse
     */
    public function deleteMcdpEventAttributeById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcdpEventAttributeByIdWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMcdpEventByIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMcdpEventByIdResponse
     */
    public function deleteMcdpEventByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpEventDeleteJsonStr)) {
            $body['MpaasMappcenterMcdpEventDeleteJsonStr'] = $request->mpaasMappcenterMcdpEventDeleteJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcdpEventById',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcdpEventByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMcdpEventByIdRequest $request
     *
     * @return DeleteMcdpEventByIdResponse
     */
    public function deleteMcdpEventById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcdpEventByIdWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMcdpMaterialRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMcdpMaterialResponse
     */
    public function deleteMcdpMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpMaterialDeleteJsonStr)) {
            $body['MpaasMappcenterMcdpMaterialDeleteJsonStr'] = $request->mpaasMappcenterMcdpMaterialDeleteJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcdpMaterial',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcdpMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMcdpMaterialRequest $request
     *
     * @return DeleteMcdpMaterialResponse
     */
    public function deleteMcdpMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcdpMaterialWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMcdpZoneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMcdpZoneResponse
     */
    public function deleteMcdpZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMcdpZoneDeleteJsonStr)) {
            $body['MpaasMappcenterMcdpZoneDeleteJsonStr'] = $request->mpaasMappcenterMcdpZoneDeleteJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcdpZone',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcdpZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcubeMiniAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMcubeMiniAppResponse
     */
    public function deleteMcubeMiniAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcubeMiniApp',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcubeMiniAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcubeNebulaAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMcubeNebulaAppResponse
     */
    public function deleteMcubeNebulaAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcubeNebulaApp',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcubeNebulaAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcubeUpgradeResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteMcubeUpgradeResourceResponse
     */
    public function deleteMcubeUpgradeResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcubeUpgradeResource',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcubeUpgradeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMcubeWhitelistResponse
     */
    public function deleteMcubeWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMcubeWhitelist',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteMdsWhitelistContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMdsWhitelistContentResponse
     */
    public function deleteMdsWhitelistContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->whitelistId)) {
            $body['WhitelistId'] = $request->whitelistId;
        }
        if (!Utils::isUnset($request->whitelistValue)) {
            $body['WhitelistValue'] = $request->whitelistValue;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMdsWhitelistContent',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMdsWhitelistContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExistMcubeRsaKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExistMcubeRsaKeyResponse
     */
    public function existMcubeRsaKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExistMcubeRsaKey',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExistMcubeRsaKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ExportMappCenterAppConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ExportMappCenterAppConfigResponse
     */
    public function exportMappCenterAppConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apkFileUrl)) {
            $body['ApkFileUrl'] = $request->apkFileUrl;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->certRsaBase64)) {
            $body['CertRsaBase64'] = $request->certRsaBase64;
        }
        if (!Utils::isUnset($request->identifier)) {
            $body['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->systemType)) {
            $body['SystemType'] = $request->systemType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportMappCenterAppConfig',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportMappCenterAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetFileTokenForUploadToMsaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetFileTokenForUploadToMsaResponse
     */
    public function getFileTokenForUploadToMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFileTokenForUploadToMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileTokenForUploadToMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetLogUrlInMsaRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetLogUrlInMsaResponse
     */
    public function getLogUrlInMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLogUrlInMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogUrlInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMcubeFileTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMcubeFileTokenResponse
     */
    public function getMcubeFileTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMcubeFileToken',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMcubeFileTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMcubeNebulaResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMcubeNebulaResourceResponse
     */
    public function getMcubeNebulaResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMcubeNebulaResource',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMcubeNebulaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMcubeNebulaTaskDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMcubeNebulaTaskDetailResponse
     */
    public function getMcubeNebulaTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMcubeNebulaTaskDetail',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMcubeNebulaTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMcubeUpgradePackageInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMcubeUpgradePackageInfoResponse
     */
    public function getMcubeUpgradePackageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMcubeUpgradePackageInfo',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMcubeUpgradePackageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMcubeUpgradeTaskInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetMcubeUpgradeTaskInfoResponse
     */
    public function getMcubeUpgradeTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMcubeUpgradeTaskInfo',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMcubeUpgradeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetMdsMiniConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMdsMiniConfigResponse
     */
    public function getMdsMiniConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMdsMiniConfig',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMdsMiniConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserAppDonwloadUrlInMsaRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetUserAppDonwloadUrlInMsaResponse
     */
    public function getUserAppDonwloadUrlInMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserAppDonwloadUrlInMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserAppDonwloadUrlInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserAppEnhanceProcessInMsaRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetUserAppEnhanceProcessInMsaResponse
     */
    public function getUserAppEnhanceProcessInMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserAppEnhanceProcessInMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserAppEnhanceProcessInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserAppUploadProcessInMsaRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetUserAppUploadProcessInMsaResponse
     */
    public function getUserAppUploadProcessInMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserAppUploadProcessInMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserAppUploadProcessInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListMappCenterAppsResponse
     */
    public function listMappCenterAppsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListMappCenterApps',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMappCenterAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListMappCenterAppsResponse
     */
    public function listMappCenterApps()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMappCenterAppsWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListMappCenterWorkspacesResponse
     */
    public function listMappCenterWorkspacesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListMappCenterWorkspaces',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMappCenterWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListMappCenterWorkspacesResponse
     */
    public function listMappCenterWorkspaces()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMappCenterWorkspacesWithOptions($runtime);
    }

    /**
     * @param ListMcdpAimRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListMcdpAimResponse
     */
    public function listMcdpAimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->emptyTag)) {
            $body['EmptyTag'] = $request->emptyTag;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->sortField)) {
            $body['SortField'] = $request->sortField;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcdpAim',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcdpAimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeMiniAppsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMcubeMiniAppsResponse
     */
    public function listMcubeMiniAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeMiniApps',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeMiniAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeMiniPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMcubeMiniPackagesResponse
     */
    public function listMcubeMiniPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->packageTypes)) {
            $body['PackageTypes'] = $request->packageTypes;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeMiniPackages',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeMiniPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeMiniTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMcubeMiniTasksResponse
     */
    public function listMcubeMiniTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeMiniTasks',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeMiniTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeNebulaAppsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcubeNebulaAppsResponse
     */
    public function listMcubeNebulaAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeNebulaApps',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeNebulaAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeNebulaResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMcubeNebulaResourcesResponse
     */
    public function listMcubeNebulaResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeNebulaResources',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeNebulaResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeNebulaTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMcubeNebulaTasksResponse
     */
    public function listMcubeNebulaTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeNebulaTasks',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeNebulaTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeUpgradePackagesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMcubeUpgradePackagesResponse
     */
    public function listMcubeUpgradePackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeUpgradePackages',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeUpgradePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeUpgradeTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMcubeUpgradeTasksResponse
     */
    public function listMcubeUpgradeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->packageId)) {
            $body['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeUpgradeTasks',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeUpgradeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMcubeWhitelistsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcubeWhitelistsResponse
     */
    public function listMcubeWhitelistsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->whitelistName)) {
            $body['WhitelistName'] = $request->whitelistName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMcubeWhitelists',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMcubeWhitelistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListMgsApiRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMgsApiResponse
     */
    public function listMgsApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiStatus)) {
            $body['ApiStatus'] = $request->apiStatus;
        }
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->needEncrypt)) {
            $body['NeedEncrypt'] = $request->needEncrypt;
        }
        if (!Utils::isUnset($request->needEtag)) {
            $body['NeedEtag'] = $request->needEtag;
        }
        if (!Utils::isUnset($request->needSign)) {
            $body['NeedSign'] = $request->needSign;
        }
        if (!Utils::isUnset($request->operationType)) {
            $body['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->optFuzzy)) {
            $body['OptFuzzy'] = $request->optFuzzy;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sysId)) {
            $body['SysId'] = $request->sysId;
        }
        if (!Utils::isUnset($request->sysName)) {
            $body['SysName'] = $request->sysName;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMgsApi',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMgsApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param LogMsaQueryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return LogMsaQueryResponse
     */
    public function logMsaQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LogMsaQuery',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LogMsaQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LogMsaQueryRequest $request
     *
     * @return LogMsaQueryResponse
     */
    public function logMsaQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->logMsaQueryWithOptions($request, $runtime);
    }

    /**
     * @param MTRSOCRServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MTRSOCRServiceResponse
     */
    public function mTRSOCRServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->imageRaw)) {
            $body['ImageRaw'] = $request->imageRaw;
        }
        if (!Utils::isUnset($request->mask)) {
            $body['Mask'] = $request->mask;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MTRSOCRService',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MTRSOCRServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param OpenApiAddActiveCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OpenApiAddActiveCodeResponse
     */
    public function openApiAddActiveCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiAddActiveCodeReqJsonStr)) {
            $body['MpaasMqcpOpenApiAddActiveCodeReqJsonStr'] = $request->mpaasMqcpOpenApiAddActiveCodeReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiAddActiveCode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiAddActiveCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiAddActiveCodeRequest $request
     *
     * @return OpenApiAddActiveCodeResponse
     */
    public function openApiAddActiveCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiAddActiveCodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiAddActiveSceneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OpenApiAddActiveSceneResponse
     */
    public function openApiAddActiveSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiAddActiveSceneReqJsonStr)) {
            $body['MpaasMqcpOpenApiAddActiveSceneReqJsonStr'] = $request->mpaasMqcpOpenApiAddActiveSceneReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiAddActiveScene',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiAddActiveSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiAddActiveSceneRequest $request
     *
     * @return OpenApiAddActiveSceneResponse
     */
    public function openApiAddActiveScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiAddActiveSceneWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiCallbackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenApiCallbackResponse
     */
    public function openApiCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiCallbackRequestJsonStr)) {
            $body['MpaasMqcpOpenApiCallbackRequestJsonStr'] = $request->mpaasMqcpOpenApiCallbackRequestJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiCallback',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiCallbackRequest $request
     *
     * @return OpenApiCallbackResponse
     */
    public function openApiCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiCallbackWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiDecodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OpenApiDecodeResponse
     */
    public function openApiDecodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiDecodeRequestJsonStr)) {
            $body['MpaasMqcpOpenApiDecodeRequestJsonStr'] = $request->mpaasMqcpOpenApiDecodeRequestJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiDecode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiDecodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiDecodeRequest $request
     *
     * @return OpenApiDecodeResponse
     */
    public function openApiDecode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiDecodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiDeleteActiveCodeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OpenApiDeleteActiveCodeResponse
     */
    public function openApiDeleteActiveCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiDeleteActiveCodeReqJsonStr)) {
            $body['MpaasMqcpOpenApiDeleteActiveCodeReqJsonStr'] = $request->mpaasMqcpOpenApiDeleteActiveCodeReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiDeleteActiveCode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiDeleteActiveCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiDeleteActiveCodeRequest $request
     *
     * @return OpenApiDeleteActiveCodeResponse
     */
    public function openApiDeleteActiveCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiDeleteActiveCodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiEncodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OpenApiEncodeResponse
     */
    public function openApiEncodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiEncodeRequestJsonStr)) {
            $body['MpaasMqcpOpenApiEncodeRequestJsonStr'] = $request->mpaasMqcpOpenApiEncodeRequestJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiEncode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiEncodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiEncodeRequest $request
     *
     * @return OpenApiEncodeResponse
     */
    public function openApiEncode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiEncodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiQueryActiveCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OpenApiQueryActiveCodeResponse
     */
    public function openApiQueryActiveCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiQueryActiveCodeReqJsonStr)) {
            $body['MpaasMqcpOpenApiQueryActiveCodeReqJsonStr'] = $request->mpaasMqcpOpenApiQueryActiveCodeReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiQueryActiveCode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiQueryActiveCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiQueryActiveCodeRequest $request
     *
     * @return OpenApiQueryActiveCodeResponse
     */
    public function openApiQueryActiveCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiQueryActiveCodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiQueryActiveSceneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OpenApiQueryActiveSceneResponse
     */
    public function openApiQueryActiveSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiQueryActiveSceneReqJsonStr)) {
            $body['MpaasMqcpOpenApiQueryActiveSceneReqJsonStr'] = $request->mpaasMqcpOpenApiQueryActiveSceneReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiQueryActiveScene',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiQueryActiveSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiQueryActiveSceneRequest $request
     *
     * @return OpenApiQueryActiveSceneResponse
     */
    public function openApiQueryActiveScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiQueryActiveSceneWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiUniqueEncodeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OpenApiUniqueEncodeResponse
     */
    public function openApiUniqueEncodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiUniqueEncodeRequestJsonStr)) {
            $body['MpaasMqcpOpenApiUniqueEncodeRequestJsonStr'] = $request->mpaasMqcpOpenApiUniqueEncodeRequestJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiUniqueEncode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiUniqueEncodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiUniqueEncodeRequest $request
     *
     * @return OpenApiUniqueEncodeResponse
     */
    public function openApiUniqueEncode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiUniqueEncodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiUpdateActiveCodeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OpenApiUpdateActiveCodeResponse
     */
    public function openApiUpdateActiveCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiUpdateActiveCodeReqJsonStr)) {
            $body['MpaasMqcpOpenApiUpdateActiveCodeReqJsonStr'] = $request->mpaasMqcpOpenApiUpdateActiveCodeReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiUpdateActiveCode',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiUpdateActiveCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiUpdateActiveCodeRequest $request
     *
     * @return OpenApiUpdateActiveCodeResponse
     */
    public function openApiUpdateActiveCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiUpdateActiveCodeWithOptions($request, $runtime);
    }

    /**
     * @param OpenApiUpdateActiveSceneRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OpenApiUpdateActiveSceneResponse
     */
    public function openApiUpdateActiveSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr)) {
            $body['MpaasMqcpOpenApiUpdateActiveSceneReqJsonStr'] = $request->mpaasMqcpOpenApiUpdateActiveSceneReqJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenApiUpdateActiveScene',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenApiUpdateActiveSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenApiUpdateActiveSceneRequest $request
     *
     * @return OpenApiUpdateActiveSceneResponse
     */
    public function openApiUpdateActiveScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openApiUpdateActiveSceneWithOptions($request, $runtime);
    }

    /**
     * @param PushBindRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PushBindResponse
     */
    public function pushBindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deliveryToken)) {
            $body['DeliveryToken'] = $request->deliveryToken;
        }
        if (!Utils::isUnset($request->osType)) {
            $body['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushBind',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushBroadcastRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return PushBroadcastResponse
     */
    public function pushBroadcastWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushBroadcastShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->thirdChannelCategory)) {
            $request->thirdChannelCategoryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->androidChannel)) {
            $body['AndroidChannel'] = $request->androidChannel;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bindPeriod)) {
            $body['BindPeriod'] = $request->bindPeriod;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->classification)) {
            $body['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->deliveryType)) {
            $body['DeliveryType'] = $request->deliveryType;
        }
        if (!Utils::isUnset($request->expiredSeconds)) {
            $body['ExpiredSeconds'] = $request->expiredSeconds;
        }
        if (!Utils::isUnset($request->extendedParams)) {
            $body['ExtendedParams'] = $request->extendedParams;
        }
        if (!Utils::isUnset($request->miChannelId)) {
            $body['MiChannelId'] = $request->miChannelId;
        }
        if (!Utils::isUnset($request->msgkey)) {
            $body['Msgkey'] = $request->msgkey;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $body['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->pushAction)) {
            $body['PushAction'] = $request->pushAction;
        }
        if (!Utils::isUnset($request->pushStatus)) {
            $body['PushStatus'] = $request->pushStatus;
        }
        if (!Utils::isUnset($request->silent)) {
            $body['Silent'] = $request->silent;
        }
        if (!Utils::isUnset($request->strategyContent)) {
            $body['StrategyContent'] = $request->strategyContent;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $body['StrategyType'] = $request->strategyType;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->templateKeyValue)) {
            $body['TemplateKeyValue'] = $request->templateKeyValue;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->thirdChannelCategoryShrink)) {
            $body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }
        if (!Utils::isUnset($request->unBindPeriod)) {
            $body['UnBindPeriod'] = $request->unBindPeriod;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushBroadcast',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushBroadcastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushMultipleRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PushMultipleResponse
     */
    public function pushMultipleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushMultipleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->thirdChannelCategory)) {
            $request->thirdChannelCategoryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->activityContentState)) {
            $body['ActivityContentState'] = $request->activityContentState;
        }
        if (!Utils::isUnset($request->activityEvent)) {
            $body['ActivityEvent'] = $request->activityEvent;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->classification)) {
            $body['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->deliveryType)) {
            $body['DeliveryType'] = $request->deliveryType;
        }
        if (!Utils::isUnset($request->dismissalDate)) {
            $body['DismissalDate'] = $request->dismissalDate;
        }
        if (!Utils::isUnset($request->expiredSeconds)) {
            $body['ExpiredSeconds'] = $request->expiredSeconds;
        }
        if (!Utils::isUnset($request->extendedParams)) {
            $body['ExtendedParams'] = $request->extendedParams;
        }
        if (!Utils::isUnset($request->miChannelId)) {
            $body['MiChannelId'] = $request->miChannelId;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $body['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->pushAction)) {
            $body['PushAction'] = $request->pushAction;
        }
        if (!Utils::isUnset($request->silent)) {
            $body['Silent'] = $request->silent;
        }
        if (!Utils::isUnset($request->strategyContent)) {
            $body['StrategyContent'] = $request->strategyContent;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $body['StrategyType'] = $request->strategyType;
        }
        if (!Utils::isUnset($request->targetMsg)) {
            $body['TargetMsg'] = $request->targetMsg;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->thirdChannelCategoryShrink)) {
            $body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushMultiple',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushMultipleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushReportRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PushReportResponse
     */
    public function pushReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->channel)) {
            $body['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->connectType)) {
            $body['ConnectType'] = $request->connectType;
        }
        if (!Utils::isUnset($request->deliveryToken)) {
            $body['DeliveryToken'] = $request->deliveryToken;
        }
        if (!Utils::isUnset($request->imei)) {
            $body['Imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->imsi)) {
            $body['Imsi'] = $request->imsi;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->osType)) {
            $body['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->pushVersion)) {
            $body['PushVersion'] = $request->pushVersion;
        }
        if (!Utils::isUnset($request->thirdChannel)) {
            $body['ThirdChannel'] = $request->thirdChannel;
        }
        if (!Utils::isUnset($request->thirdChannelDeviceToken)) {
            $body['ThirdChannelDeviceToken'] = $request->thirdChannelDeviceToken;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushReport',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushSimpleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return PushSimpleResponse
     */
    public function pushSimpleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushSimpleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->thirdChannelCategory)) {
            $request->thirdChannelCategoryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->activityContentState)) {
            $body['ActivityContentState'] = $request->activityContentState;
        }
        if (!Utils::isUnset($request->activityEvent)) {
            $body['ActivityEvent'] = $request->activityEvent;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->classification)) {
            $body['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->deliveryType)) {
            $body['DeliveryType'] = $request->deliveryType;
        }
        if (!Utils::isUnset($request->dismissalDate)) {
            $body['DismissalDate'] = $request->dismissalDate;
        }
        if (!Utils::isUnset($request->expiredSeconds)) {
            $body['ExpiredSeconds'] = $request->expiredSeconds;
        }
        if (!Utils::isUnset($request->extendedParams)) {
            $body['ExtendedParams'] = $request->extendedParams;
        }
        if (!Utils::isUnset($request->iconUrls)) {
            $body['IconUrls'] = $request->iconUrls;
        }
        if (!Utils::isUnset($request->imageUrls)) {
            $body['ImageUrls'] = $request->imageUrls;
        }
        if (!Utils::isUnset($request->miChannelId)) {
            $body['MiChannelId'] = $request->miChannelId;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $body['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->pushAction)) {
            $body['PushAction'] = $request->pushAction;
        }
        if (!Utils::isUnset($request->pushStyle)) {
            $body['PushStyle'] = $request->pushStyle;
        }
        if (!Utils::isUnset($request->silent)) {
            $body['Silent'] = $request->silent;
        }
        if (!Utils::isUnset($request->smsSignName)) {
            $body['SmsSignName'] = $request->smsSignName;
        }
        if (!Utils::isUnset($request->smsStrategy)) {
            $body['SmsStrategy'] = $request->smsStrategy;
        }
        if (!Utils::isUnset($request->smsTemplateCode)) {
            $body['SmsTemplateCode'] = $request->smsTemplateCode;
        }
        if (!Utils::isUnset($request->smsTemplateParam)) {
            $body['SmsTemplateParam'] = $request->smsTemplateParam;
        }
        if (!Utils::isUnset($request->strategyContent)) {
            $body['StrategyContent'] = $request->strategyContent;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $body['StrategyType'] = $request->strategyType;
        }
        if (!Utils::isUnset($request->targetMsgkey)) {
            $body['TargetMsgkey'] = $request->targetMsgkey;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->thirdChannelCategoryShrink)) {
            $body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushSimple',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushSimpleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushTemplateRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PushTemplateResponse
     */
    public function pushTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->thirdChannelCategory)) {
            $request->thirdChannelCategoryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->activityContentState)) {
            $body['ActivityContentState'] = $request->activityContentState;
        }
        if (!Utils::isUnset($request->activityEvent)) {
            $body['ActivityEvent'] = $request->activityEvent;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->classification)) {
            $body['Classification'] = $request->classification;
        }
        if (!Utils::isUnset($request->deliveryType)) {
            $body['DeliveryType'] = $request->deliveryType;
        }
        if (!Utils::isUnset($request->dismissalDate)) {
            $body['DismissalDate'] = $request->dismissalDate;
        }
        if (!Utils::isUnset($request->expiredSeconds)) {
            $body['ExpiredSeconds'] = $request->expiredSeconds;
        }
        if (!Utils::isUnset($request->extendedParams)) {
            $body['ExtendedParams'] = $request->extendedParams;
        }
        if (!Utils::isUnset($request->miChannelId)) {
            $body['MiChannelId'] = $request->miChannelId;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $body['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->pushAction)) {
            $body['PushAction'] = $request->pushAction;
        }
        if (!Utils::isUnset($request->silent)) {
            $body['Silent'] = $request->silent;
        }
        if (!Utils::isUnset($request->smsSignName)) {
            $body['SmsSignName'] = $request->smsSignName;
        }
        if (!Utils::isUnset($request->smsStrategy)) {
            $body['SmsStrategy'] = $request->smsStrategy;
        }
        if (!Utils::isUnset($request->smsTemplateCode)) {
            $body['SmsTemplateCode'] = $request->smsTemplateCode;
        }
        if (!Utils::isUnset($request->smsTemplateParam)) {
            $body['SmsTemplateParam'] = $request->smsTemplateParam;
        }
        if (!Utils::isUnset($request->strategyContent)) {
            $body['StrategyContent'] = $request->strategyContent;
        }
        if (!Utils::isUnset($request->strategyType)) {
            $body['StrategyType'] = $request->strategyType;
        }
        if (!Utils::isUnset($request->targetMsgkey)) {
            $body['TargetMsgkey'] = $request->targetMsgkey;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->templateKeyValue)) {
            $body['TemplateKeyValue'] = $request->templateKeyValue;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->thirdChannelCategoryShrink)) {
            $body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushTemplate',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PushUnBindRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return PushUnBindResponse
     */
    public function pushUnBindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deliveryToken)) {
            $body['DeliveryToken'] = $request->deliveryToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushUnBind',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushUnBindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMappCenterAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMappCenterAppResponse
     */
    public function queryMappCenterAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMappCenterApp',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMappCenterAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMcdpAimRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMcdpAimResponse
     */
    public function queryMcdpAimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMcdpAim',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcdpAimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMcdpZoneRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryMcdpZoneResponse
     */
    public function queryMcdpZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMcdpZone',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcdpZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMcubeMiniPackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMcubeMiniPackageResponse
     */
    public function queryMcubeMiniPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMcubeMiniPackage',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcubeMiniPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMcubeMiniTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMcubeMiniTaskResponse
     */
    public function queryMcubeMiniTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMcubeMiniTask',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcubeMiniTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMcubeVhostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMcubeVhostResponse
     */
    public function queryMcubeVhostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMcubeVhost',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMcubeVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMdsUpgradeTaskDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMdsUpgradeTaskDetailResponse
     */
    public function queryMdsUpgradeTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMdsUpgradeTaskDetail',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMdsUpgradeTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMgsApipageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMgsApipageResponse
     */
    public function queryMgsApipageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apiStatus)) {
            $body['ApiStatus'] = $request->apiStatus;
        }
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->host)) {
            $body['Host'] = $request->host;
        }
        if (!Utils::isUnset($request->needEncrypt)) {
            $body['NeedEncrypt'] = $request->needEncrypt;
        }
        if (!Utils::isUnset($request->needEtag)) {
            $body['NeedEtag'] = $request->needEtag;
        }
        if (!Utils::isUnset($request->needSign)) {
            $body['NeedSign'] = $request->needSign;
        }
        if (!Utils::isUnset($request->operationType)) {
            $body['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->optFuzzy)) {
            $body['OptFuzzy'] = $request->optFuzzy;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sysId)) {
            $body['SysId'] = $request->sysId;
        }
        if (!Utils::isUnset($request->sysName)) {
            $body['SysName'] = $request->sysName;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMgsApipage',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMgsApipageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMgsApirestRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMgsApirestResponse
     */
    public function queryMgsApirestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMgsApirest',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMgsApirestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMgsTestreqbodyautogenRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryMgsTestreqbodyautogenResponse
     */
    public function queryMgsTestreqbodyautogenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->format)) {
            $body['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMgsTestreqbodyautogenQueryJsonStr)) {
            $body['MpaasMappcenterMgsTestreqbodyautogenQueryJsonStr'] = $request->mpaasMappcenterMgsTestreqbodyautogenQueryJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMgsTestreqbodyautogen',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMgsTestreqbodyautogenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryMpsSchedulerListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMpsSchedulerListResponse
     */
    public function queryMpsSchedulerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
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
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uniqueId)) {
            $body['UniqueId'] = $request->uniqueId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMpsSchedulerList',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMpsSchedulerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushAnalysisCoreIndexRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryPushAnalysisCoreIndexResponse
     */
    public function queryPushAnalysisCoreIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channel)) {
            $body['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryPushAnalysisCoreIndex',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushAnalysisCoreIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushAnalysisTaskDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryPushAnalysisTaskDetailResponse
     */
    public function queryPushAnalysisTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
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
            'action'      => 'QueryPushAnalysisTaskDetail',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushAnalysisTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushAnalysisTaskListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPushAnalysisTaskListResponse
     */
    public function queryPushAnalysisTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryPushAnalysisTaskList',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushAnalysisTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryPushSchedulerListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPushSchedulerListResponse
     */
    public function queryPushSchedulerListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
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
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uniqueId)) {
            $body['UniqueId'] = $request->uniqueId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryPushSchedulerList',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPushSchedulerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RevokePushMessageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RevokePushMessageResponse
     */
    public function revokePushMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->messageId)) {
            $body['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $body['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokePushMessage',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokePushMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RevokePushTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RevokePushTaskResponse
     */
    public function revokePushTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
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
            'action'      => 'RevokePushTask',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokePushTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RunMsaDiffRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunMsaDiffResponse
     */
    public function runMsaDiffWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMsaDiffRunJsonStr)) {
            $body['MpaasMappcenterMsaDiffRunJsonStr'] = $request->mpaasMappcenterMsaDiffRunJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunMsaDiff',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunMsaDiffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SaveMgsApirestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveMgsApirestResponse
     */
    public function saveMgsApirestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mpaasMappcenterMgsApirestSaveJsonStr)) {
            $body['MpaasMappcenterMgsApirestSaveJsonStr'] = $request->mpaasMappcenterMgsApirestSaveJsonStr;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveMgsApirest',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveMgsApirestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartUserAppAsyncEnhanceInMsaRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return StartUserAppAsyncEnhanceInMsaResponse
     */
    public function startUserAppAsyncEnhanceInMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apkProtector)) {
            $body['ApkProtector'] = $request->apkProtector;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->assetsFileList)) {
            $body['AssetsFileList'] = $request->assetsFileList;
        }
        if (!Utils::isUnset($request->classes)) {
            $body['Classes'] = $request->classes;
        }
        if (!Utils::isUnset($request->dalvikDebugger)) {
            $body['DalvikDebugger'] = $request->dalvikDebugger;
        }
        if (!Utils::isUnset($request->emulatorEnvironment)) {
            $body['EmulatorEnvironment'] = $request->emulatorEnvironment;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->javaHook)) {
            $body['JavaHook'] = $request->javaHook;
        }
        if (!Utils::isUnset($request->memoryDump)) {
            $body['MemoryDump'] = $request->memoryDump;
        }
        if (!Utils::isUnset($request->nativeDebugger)) {
            $body['NativeDebugger'] = $request->nativeDebugger;
        }
        if (!Utils::isUnset($request->nativeHook)) {
            $body['NativeHook'] = $request->nativeHook;
        }
        if (!Utils::isUnset($request->packageTampered)) {
            $body['PackageTampered'] = $request->packageTampered;
        }
        if (!Utils::isUnset($request->root)) {
            $body['Root'] = $request->root;
        }
        if (!Utils::isUnset($request->runMode)) {
            $body['RunMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->soFileList)) {
            $body['SoFileList'] = $request->soFileList;
        }
        if (!Utils::isUnset($request->taskType)) {
            $body['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->totalSwitch)) {
            $body['TotalSwitch'] = $request->totalSwitch;
        }
        if (!Utils::isUnset($request->useAShield)) {
            $body['UseAShield'] = $request->useAShield;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartUserAppAsyncEnhanceInMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartUserAppAsyncEnhanceInMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMcubeWhitelistResponse
     */
    public function updateMcubeWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->keyIds)) {
            $body['KeyIds'] = $request->keyIds;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->ossUrl)) {
            $body['OssUrl'] = $request->ossUrl;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMcubeWhitelist',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateMpaasAppInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMpaasAppInfoResponse
     */
    public function updateMpaasAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->iconFileUrl)) {
            $body['IconFileUrl'] = $request->iconFileUrl;
        }
        if (!Utils::isUnset($request->identifier)) {
            $body['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->systemType)) {
            $body['SystemType'] = $request->systemType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMpaasAppInfo',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMpaasAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UploadBitcodeToMsaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadBitcodeToMsaResponse
     */
    public function uploadBitcodeToMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bitcode)) {
            $body['Bitcode'] = $request->bitcode;
        }
        if (!Utils::isUnset($request->codeVersion)) {
            $body['CodeVersion'] = $request->codeVersion;
        }
        if (!Utils::isUnset($request->license)) {
            $body['License'] = $request->license;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadBitcodeToMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadBitcodeToMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UploadMcubeMiniPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UploadMcubeMiniPackageResponse
     */
    public function uploadMcubeMiniPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->autoInstall)) {
            $body['AutoInstall'] = $request->autoInstall;
        }
        if (!Utils::isUnset($request->clientVersionMax)) {
            $body['ClientVersionMax'] = $request->clientVersionMax;
        }
        if (!Utils::isUnset($request->clientVersionMin)) {
            $body['ClientVersionMin'] = $request->clientVersionMin;
        }
        if (!Utils::isUnset($request->enableKeepAlive)) {
            $body['EnableKeepAlive'] = $request->enableKeepAlive;
        }
        if (!Utils::isUnset($request->enableOptionMenu)) {
            $body['EnableOptionMenu'] = $request->enableOptionMenu;
        }
        if (!Utils::isUnset($request->enableTabBar)) {
            $body['EnableTabBar'] = $request->enableTabBar;
        }
        if (!Utils::isUnset($request->extendInfo)) {
            $body['ExtendInfo'] = $request->extendInfo;
        }
        if (!Utils::isUnset($request->h5Id)) {
            $body['H5Id'] = $request->h5Id;
        }
        if (!Utils::isUnset($request->h5Name)) {
            $body['H5Name'] = $request->h5Name;
        }
        if (!Utils::isUnset($request->h5Version)) {
            $body['H5Version'] = $request->h5Version;
        }
        if (!Utils::isUnset($request->iconFileUrl)) {
            $body['IconFileUrl'] = $request->iconFileUrl;
        }
        if (!Utils::isUnset($request->iconUrl)) {
            $body['IconUrl'] = $request->iconUrl;
        }
        if (!Utils::isUnset($request->installType)) {
            $body['InstallType'] = $request->installType;
        }
        if (!Utils::isUnset($request->mainUrl)) {
            $body['MainUrl'] = $request->mainUrl;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->packageType)) {
            $body['PackageType'] = $request->packageType;
        }
        if (!Utils::isUnset($request->platform)) {
            $body['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->resourceFileUrl)) {
            $body['ResourceFileUrl'] = $request->resourceFileUrl;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->vhost)) {
            $body['Vhost'] = $request->vhost;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadMcubeMiniPackage',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMcubeMiniPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UploadMcubeRsaKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadMcubeRsaKeyResponse
     */
    public function uploadMcubeRsaKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->onexFlag)) {
            $body['OnexFlag'] = $request->onexFlag;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadMcubeRsaKey',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMcubeRsaKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UploadUserAppToMsaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadUserAppToMsaResponse
     */
    public function uploadUserAppToMsaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadUserAppToMsa',
            'version'     => '2020-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadUserAppToMsaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
