<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\AddDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\AddDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\AddDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\AddDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchAddDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchAddDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchCreateDcdnWafRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchCreateDcdnWafRulesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnWafRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnWafRulesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchModifyDcdnWafRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchModifyDcdnWafRulesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnIpaDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnIpaDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnWafDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnWafDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CheckDcdnProjectExistRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CheckDcdnProjectExistResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CommitStagingRoutineCodeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CommitStagingRoutineCodeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnDeliverTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnDeliverTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnSLSRealTimeLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnSLSRealTimeLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnSubTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnSubTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnWafPolicyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnWafPolicyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateRoutineRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateRoutineResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateRoutineShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateSlrAndSlsProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateSlrAndSlsProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDeliverTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDeliverTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnRealTimeLogProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnRealTimeLogProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSubTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnWafPolicyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnWafPolicyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineConfEnvsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineConfEnvsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineConfEnvsShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnAclFieldsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnAclFieldsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDeletedDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDeletedDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDeliverListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDeliverListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataByLayerRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataByLayerResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCcActivityLogRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCcActivityLogResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCnameRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCnameResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHitRateDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHitRateDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataByLayerRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataByLayerResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaConnDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaConnDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainPropertyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainPropertyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainPvDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainPvDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataByLayerRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataByLayerResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainQpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeByteHitRateDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeByteHitRateDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeDetailDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeDetailDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeHttpCodeDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeHttpCodeDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeQpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeQpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeReqHitRateDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeReqHitRateDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRegionDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRegionDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopReferVisitRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopReferVisitResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopUrlVisitRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTopUrlVisitResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUsageDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUsageDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUvDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUvDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnHttpsDomainListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnHttpsDomainListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnL2VipsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnL2VipsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRealTimeDeliveryFieldRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRealTimeDeliveryFieldResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshQuotaRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshQuotaResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTaskByIdRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTaskByIdResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnReportListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnReportListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnReportRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnReportResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecFuncInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecFuncInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnsecServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnsecServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSubListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserCertificateExpireCountResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsByFuncRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsByFuncResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserQuotaRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserQuotaResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserRealTimeDeliveryFieldRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserRealTimeDeliveryFieldResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropByMinuteRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropByMinuteResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserTagsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnVerifyContentRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnVerifyContentResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafFilterInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGeoInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafLogsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPoliciesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPoliciesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyValidDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPolicyValidDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafRuleRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafRuleResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafRulesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafScenesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafScenesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCanaryEnvsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineSpecResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineUserInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnIpaStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnIpaStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserErStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserErStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserLogserviceStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserLogserviceStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditRoutineConfRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditRoutineConfResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditRoutineConfShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnRealTimeDeliveryProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnRealTimeDeliveryProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDCdnDomainSchdmByPropertyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDCdnDomainSchdmByPropertyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafPolicyDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafPolicyDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafPolicyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafPolicyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafRuleRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafRuleResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\OpenDcdnServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\OpenDcdnServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PreloadDcdnObjectCachesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PreloadDcdnObjectCachesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishDcdnStagingConfigToProductionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishDcdnStagingConfigToProductionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishRoutineCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishRoutineCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishRoutineCodeRevisionShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCachesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCachesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RollbackDcdnStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RollbackDcdnStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainSMCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainSMCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnUserConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnUserConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetRoutineSubdomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetRoutineSubdomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetRoutineSubdomainShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StartDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StartDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StartDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StartDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StopDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StopDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StopDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\StopDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\TagDcdnResourcesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\TagDcdnResourcesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UntagDcdnResourcesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UntagDcdnResourcesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnDeliverTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnDeliverTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnSLSRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnSLSRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnSubTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnSubTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnUserRealTimeDeliveryFieldRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnUserRealTimeDeliveryFieldResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UploadRoutineCodeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UploadRoutineCodeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UploadStagingRoutineCodeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UploadStagingRoutineCodeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\VerifyDcdnDomainOwnerRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\VerifyDcdnDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dcdn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'dcdn.aliyuncs.com',
            'ap-northeast-2-pop'          => 'dcdn.aliyuncs.com',
            'ap-south-1'                  => 'dcdn.aliyuncs.com',
            'ap-southeast-1'              => 'dcdn.aliyuncs.com',
            'ap-southeast-2'              => 'dcdn.aliyuncs.com',
            'ap-southeast-3'              => 'dcdn.aliyuncs.com',
            'ap-southeast-5'              => 'dcdn.aliyuncs.com',
            'cn-beijing'                  => 'dcdn.aliyuncs.com',
            'cn-beijing-finance-1'        => 'dcdn.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'dcdn.aliyuncs.com',
            'cn-beijing-gov-1'            => 'dcdn.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'dcdn.aliyuncs.com',
            'cn-chengdu'                  => 'dcdn.aliyuncs.com',
            'cn-edge-1'                   => 'dcdn.aliyuncs.com',
            'cn-fujian'                   => 'dcdn.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'dcdn.aliyuncs.com',
            'cn-hangzhou'                 => 'dcdn.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'dcdn.aliyuncs.com',
            'cn-hangzhou-finance'         => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'dcdn.aliyuncs.com',
            'cn-hongkong'                 => 'dcdn.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'dcdn.aliyuncs.com',
            'cn-huhehaote'                => 'dcdn.aliyuncs.com',
            'cn-north-2-gov-1'            => 'dcdn.aliyuncs.com',
            'cn-qingdao'                  => 'dcdn.aliyuncs.com',
            'cn-qingdao-nebula'           => 'dcdn.aliyuncs.com',
            'cn-shanghai'                 => 'dcdn.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'dcdn.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'dcdn.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'dcdn.aliyuncs.com',
            'cn-shanghai-inner'           => 'dcdn.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dcdn.aliyuncs.com',
            'cn-shenzhen'                 => 'dcdn.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'dcdn.aliyuncs.com',
            'cn-shenzhen-inner'           => 'dcdn.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'dcdn.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'dcdn.aliyuncs.com',
            'cn-wuhan'                    => 'dcdn.aliyuncs.com',
            'cn-yushanfang'               => 'dcdn.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'dcdn.aliyuncs.com',
            'cn-zhangjiakou'              => 'dcdn.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'dcdn.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'dcdn.aliyuncs.com',
            'eu-central-1'                => 'dcdn.aliyuncs.com',
            'eu-west-1'                   => 'dcdn.aliyuncs.com',
            'eu-west-1-oxs'               => 'dcdn.aliyuncs.com',
            'me-east-1'                   => 'dcdn.aliyuncs.com',
            'rus-west-1-pop'              => 'dcdn.aliyuncs.com',
            'us-east-1'                   => 'dcdn.aliyuncs.com',
            'us-west-1'                   => 'dcdn.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dcdn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * >
     *   * *   The Dynamic Route for CDN (DCDN) service is activated.
     *   * *   Internet content provider (ICP) filing is complete for the accelerated domain name.
     *   * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param AddDcdnDomainRequest $request AddDcdnDomainRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDcdnDomainResponse AddDcdnDomainResponse
     */
    public function addDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkUrl)) {
            $query['CheckUrl'] = $request->checkUrl;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   The Dynamic Route for CDN (DCDN) service is activated.
     *   * *   Internet content provider (ICP) filing is complete for the accelerated domain name.
     *   * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param AddDcdnDomainRequest $request AddDcdnDomainRequest
     *
     * @return AddDcdnDomainResponse AddDcdnDomainResponse
     */
    public function addDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Make sure that the IPA service is activated before you add a domain name to accelerate.
     *   * *   Make sure that the Internet content provider (ICP) filling is complete for the domain name to accelerate.
     *   * *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review is complete by the end of the next business day after you submit the request.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
     * @param AddDcdnIpaDomainRequest $request AddDcdnIpaDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDcdnIpaDomainResponse AddDcdnIpaDomainResponse
     */
    public function addDcdnIpaDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkUrl)) {
            $query['CheckUrl'] = $request->checkUrl;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDcdnIpaDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Make sure that the IPA service is activated before you add a domain name to accelerate.
     *   * *   Make sure that the Internet content provider (ICP) filling is complete for the domain name to accelerate.
     *   * *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review is complete by the end of the next business day after you submit the request.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
     * @param AddDcdnIpaDomainRequest $request AddDcdnIpaDomainRequest
     *
     * @return AddDcdnIpaDomainResponse AddDcdnIpaDomainResponse
     */
    public function addDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * **Prerequisites**:
     *   * *   The [DCDN service is activated](~~64926~~).
     *   * *   Internet Content Provider (ICP) filing is complete for the accelerated domain names.
     *   * >
     *   * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     *   * *   The maximum number of domain names configured at a time is 50.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param BatchAddDcdnDomainRequest $request BatchAddDcdnDomainRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchAddDcdnDomainResponse BatchAddDcdnDomainResponse
     */
    public function batchAddDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkUrl)) {
            $query['CheckUrl'] = $request->checkUrl;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAddDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Prerequisites**:
     *   * *   The [DCDN service is activated](~~64926~~).
     *   * *   Internet Content Provider (ICP) filing is complete for the accelerated domain names.
     *   * >
     *   * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     *   * *   The maximum number of domain names configured at a time is 50.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param BatchAddDcdnDomainRequest $request BatchAddDcdnDomainRequest
     *
     * @return BatchAddDcdnDomainResponse BatchAddDcdnDomainResponse
     */
    public function batchAddDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 20 times per second per account.
     *   *
     * @param BatchCreateDcdnWafRulesRequest $request BatchCreateDcdnWafRulesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateDcdnWafRulesResponse BatchCreateDcdnWafRulesResponse
     */
    public function batchCreateDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->ruleConfigs)) {
            $body['RuleConfigs'] = $request->ruleConfigs;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateDcdnWafRules',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 20 times per second per account.
     *   *
     * @param BatchCreateDcdnWafRulesRequest $request BatchCreateDcdnWafRulesRequest
     *
     * @return BatchCreateDcdnWafRulesResponse BatchCreateDcdnWafRulesResponse
     */
    public function batchCreateDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can specify up to 50 domain names in each request.
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param BatchDeleteDcdnDomainConfigsRequest $request BatchDeleteDcdnDomainConfigsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteDcdnDomainConfigsResponse BatchDeleteDcdnDomainConfigsResponse
     */
    public function batchDeleteDcdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteDcdnDomainConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteDcdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can specify up to 50 domain names in each request.
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param BatchDeleteDcdnDomainConfigsRequest $request BatchDeleteDcdnDomainConfigsRequest
     *
     * @return BatchDeleteDcdnDomainConfigsResponse BatchDeleteDcdnDomainConfigsResponse
     */
    public function batchDeleteDcdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDcdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param BatchDeleteDcdnWafRulesRequest $request BatchDeleteDcdnWafRulesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteDcdnWafRulesResponse BatchDeleteDcdnWafRulesResponse
     */
    public function batchDeleteDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ruleIds)) {
            $body['RuleIds'] = $request->ruleIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteDcdnWafRules',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param BatchDeleteDcdnWafRulesRequest $request BatchDeleteDcdnWafRulesRequest
     *
     * @return BatchDeleteDcdnWafRulesResponse BatchDeleteDcdnWafRulesResponse
     */
    public function batchDeleteDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param BatchModifyDcdnWafRulesRequest $request BatchModifyDcdnWafRulesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchModifyDcdnWafRulesResponse BatchModifyDcdnWafRulesResponse
     */
    public function batchModifyDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->ruleConfigs)) {
            $body['RuleConfigs'] = $request->ruleConfigs;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchModifyDcdnWafRules',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchModifyDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param BatchModifyDcdnWafRulesRequest $request BatchModifyDcdnWafRulesRequest
     *
     * @return BatchModifyDcdnWafRulesResponse BatchModifyDcdnWafRulesResponse
     */
    public function batchModifyDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchModifyDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 10 times per second per account.
     *   *
     * @param BatchSetDcdnDomainCertificateRequest $request BatchSetDcdnDomainCertificateRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetDcdnDomainCertificateResponse BatchSetDcdnDomainCertificateResponse
     */
    public function batchSetDcdnDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->SSLPri)) {
            $query['SSLPri'] = $request->SSLPri;
        }
        if (!Utils::isUnset($request->SSLProtocol)) {
            $query['SSLProtocol'] = $request->SSLProtocol;
        }
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetDcdnDomainCertificate',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetDcdnDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 10 times per second per account.
     *   *
     * @param BatchSetDcdnDomainCertificateRequest $request BatchSetDcdnDomainCertificateRequest
     *
     * @return BatchSetDcdnDomainCertificateResponse BatchSetDcdnDomainCertificateResponse
     */
    public function batchSetDcdnDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,)
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param BatchSetDcdnDomainConfigsRequest $request BatchSetDcdnDomainConfigsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetDcdnDomainConfigsResponse BatchSetDcdnDomainConfigsResponse
     */
    public function batchSetDcdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetDcdnDomainConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetDcdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,)
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param BatchSetDcdnDomainConfigsRequest $request BatchSetDcdnDomainConfigsRequest
     *
     * @return BatchSetDcdnDomainConfigsResponse BatchSetDcdnDomainConfigsResponse
     */
    public function batchSetDcdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param BatchSetDcdnIpaDomainConfigsRequest $request BatchSetDcdnIpaDomainConfigsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetDcdnIpaDomainConfigsResponse BatchSetDcdnIpaDomainConfigsResponse
     */
    public function batchSetDcdnIpaDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetDcdnIpaDomainConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetDcdnIpaDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param BatchSetDcdnIpaDomainConfigsRequest $request BatchSetDcdnIpaDomainConfigsRequest
     *
     * @return BatchSetDcdnIpaDomainConfigsResponse BatchSetDcdnIpaDomainConfigsResponse
     */
    public function batchSetDcdnIpaDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnIpaDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param BatchSetDcdnWafDomainConfigsRequest $request BatchSetDcdnWafDomainConfigsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetDcdnWafDomainConfigsResponse BatchSetDcdnWafDomainConfigsResponse
     */
    public function batchSetDcdnWafDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientIpTag)) {
            $body['ClientIpTag'] = $request->clientIpTag;
        }
        if (!Utils::isUnset($request->defenseStatus)) {
            $body['DefenseStatus'] = $request->defenseStatus;
        }
        if (!Utils::isUnset($request->domainNames)) {
            $body['DomainNames'] = $request->domainNames;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchSetDcdnWafDomainConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetDcdnWafDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param BatchSetDcdnWafDomainConfigsRequest $request BatchSetDcdnWafDomainConfigsRequest
     *
     * @return BatchSetDcdnWafDomainConfigsResponse BatchSetDcdnWafDomainConfigsResponse
     */
    public function batchSetDcdnWafDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnWafDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param CheckDcdnProjectExistRequest $request CheckDcdnProjectExistRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDcdnProjectExistResponse CheckDcdnProjectExistResponse
     */
    public function checkDcdnProjectExistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDcdnProjectExist',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDcdnProjectExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param CheckDcdnProjectExistRequest $request CheckDcdnProjectExistRequest
     *
     * @return CheckDcdnProjectExistResponse CheckDcdnProjectExistResponse
     */
    public function checkDcdnProjectExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDcdnProjectExistWithOptions($request, $runtime);
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param CommitStagingRoutineCodeRequest $request CommitStagingRoutineCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CommitStagingRoutineCodeResponse CommitStagingRoutineCodeResponse
     */
    public function commitStagingRoutineCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CommitStagingRoutineCode',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitStagingRoutineCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param CommitStagingRoutineCodeRequest $request CommitStagingRoutineCodeRequest
     *
     * @return CommitStagingRoutineCodeResponse CommitStagingRoutineCodeResponse
     */
    public function commitStagingRoutineCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitStagingRoutineCodeWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param CreateDcdnDeliverTaskRequest $request CreateDcdnDeliverTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDcdnDeliverTaskResponse CreateDcdnDeliverTaskResponse
     */
    public function createDcdnDeliverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deliver)) {
            $body['Deliver'] = $request->deliver;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->reports)) {
            $body['Reports'] = $request->reports;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['Schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDcdnDeliverTask',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDcdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param CreateDcdnDeliverTaskRequest $request CreateDcdnDeliverTaskRequest
     *
     * @return CreateDcdnDeliverTaskResponse CreateDcdnDeliverTaskResponse
     */
    public function createDcdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateDcdnSLSRealTimeLogDeliveryRequest $request CreateDcdnSLSRealTimeLogDeliveryRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDcdnSLSRealTimeLogDeliveryResponse CreateDcdnSLSRealTimeLogDeliveryResponse
     */
    public function createDcdnSLSRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->dataCenter)) {
            $body['DataCenter'] = $request->dataCenter;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->SLSLogStore)) {
            $body['SLSLogStore'] = $request->SLSLogStore;
        }
        if (!Utils::isUnset($request->SLSProject)) {
            $body['SLSProject'] = $request->SLSProject;
        }
        if (!Utils::isUnset($request->SLSRegion)) {
            $body['SLSRegion'] = $request->SLSRegion;
        }
        if (!Utils::isUnset($request->samplingRate)) {
            $body['SamplingRate'] = $request->samplingRate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDcdnSLSRealTimeLogDelivery',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDcdnSLSRealTimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateDcdnSLSRealTimeLogDeliveryRequest $request CreateDcdnSLSRealTimeLogDeliveryRequest
     *
     * @return CreateDcdnSLSRealTimeLogDeliveryResponse CreateDcdnSLSRealTimeLogDeliveryResponse
     */
    public function createDcdnSLSRealTimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnSLSRealTimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     *   * *   You can call this operation up to three times per second.
     *   *
     * @param CreateDcdnSubTaskRequest $request CreateDcdnSubTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDcdnSubTaskResponse CreateDcdnSubTaskResponse
     */
    public function createDcdnSubTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->reportIds)) {
            $body['ReportIds'] = $request->reportIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDcdnSubTask',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDcdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     *   * *   You can call this operation up to three times per second.
     *   *
     * @param CreateDcdnSubTaskRequest $request CreateDcdnSubTaskRequest
     *
     * @return CreateDcdnSubTaskResponse CreateDcdnSubTaskResponse
     */
    public function createDcdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param CreateDcdnWafPolicyRequest $request CreateDcdnWafPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDcdnWafPolicyResponse CreateDcdnWafPolicyResponse
     */
    public function createDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $body['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->policyName)) {
            $body['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyStatus)) {
            $body['PolicyStatus'] = $request->policyStatus;
        }
        if (!Utils::isUnset($request->policyType)) {
            $body['PolicyType'] = $request->policyType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDcdnWafPolicy',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param CreateDcdnWafPolicyRequest $request CreateDcdnWafPolicyRequest
     *
     * @return CreateDcdnWafPolicyResponse CreateDcdnWafPolicyResponse
     */
    public function createDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   The parameters must comply with the rules of EnvConf. The description of a routine cannot exceed 50 characters in length.
     *   * *   This operation creates a routine that contains only production and staging environments.
     *   * *   You can call this operation up to 100 times per second.
     *   *
     * @param CreateRoutineRequest $tmpReq  CreateRoutineRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoutineResponse CreateRoutineResponse
     */
    public function createRoutineWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRoutineShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envConf)) {
            $request->envConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envConf, 'EnvConf', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envConfShrink)) {
            $body['EnvConf'] = $request->envConfShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRoutine',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   The parameters must comply with the rules of EnvConf. The description of a routine cannot exceed 50 characters in length.
     *   * *   This operation creates a routine that contains only production and staging environments.
     *   * *   You can call this operation up to 100 times per second.
     *   *
     * @param CreateRoutineRequest $request CreateRoutineRequest
     *
     * @return CreateRoutineResponse CreateRoutineResponse
     */
    public function createRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateSlrAndSlsProjectRequest $request CreateSlrAndSlsProjectRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSlrAndSlsProjectResponse CreateSlrAndSlsProjectResponse
     */
    public function createSlrAndSlsProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSlrAndSlsProject',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSlrAndSlsProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateSlrAndSlsProjectRequest $request CreateSlrAndSlsProjectRequest
     *
     * @return CreateSlrAndSlsProjectResponse CreateSlrAndSlsProjectResponse
     */
    public function createSlrAndSlsProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrAndSlsProjectWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 3.
     *   *
     * @param DeleteDcdnDeliverTaskRequest $request DeleteDcdnDeliverTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnDeliverTaskResponse DeleteDcdnDeliverTaskResponse
     */
    public function deleteDcdnDeliverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverId)) {
            $query['DeliverId'] = $request->deliverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnDeliverTask',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 3.
     *   *
     * @param DeleteDcdnDeliverTaskRequest $request DeleteDcdnDeliverTaskRequest
     *
     * @return DeleteDcdnDeliverTaskResponse DeleteDcdnDeliverTaskResponse
     */
    public function deleteDcdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Before you delete your domain name, you must request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     *   * *   If you call the **DeleteDcdnDomain** operation, all the information about the accelerated domain name is deleted. If you want to disable an accelerated domain name, call the [StopDcdnDomain](~~130622~~) operation.
     *   * *   The maximum number of times that each user can call this operation per second is 10.
     *   *
     * @param DeleteDcdnDomainRequest $request DeleteDcdnDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnDomainResponse DeleteDcdnDomainResponse
     */
    public function deleteDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Before you delete your domain name, you must request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     *   * *   If you call the **DeleteDcdnDomain** operation, all the information about the accelerated domain name is deleted. If you want to disable an accelerated domain name, call the [StopDcdnDomain](~~130622~~) operation.
     *   * *   The maximum number of times that each user can call this operation per second is 10.
     *   *
     * @param DeleteDcdnDomainRequest $request DeleteDcdnDomainRequest
     *
     * @return DeleteDcdnDomainResponse DeleteDcdnDomainResponse
     */
    public function deleteDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Before you delete your domain name, we recommend that you request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     *   * *   If you call the **DeleteDcdnIpaDomain** operation to delete an accelerated domain name, all the relevant information is deleted. If you want to only disable an accelerated domain name, we recommend that you call the **StopDcdnIpaDomain** operation.
     *   * *   The maximum number of times that users can call this operation per second is 10.
     *   *
     * @param DeleteDcdnIpaDomainRequest $request DeleteDcdnIpaDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnIpaDomainResponse DeleteDcdnIpaDomainResponse
     */
    public function deleteDcdnIpaDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnIpaDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Before you delete your domain name, we recommend that you request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     *   * *   If you call the **DeleteDcdnIpaDomain** operation to delete an accelerated domain name, all the relevant information is deleted. If you want to only disable an accelerated domain name, we recommend that you call the **StopDcdnIpaDomain** operation.
     *   * *   The maximum number of times that users can call this operation per second is 10.
     *   *
     * @param DeleteDcdnIpaDomainRequest $request DeleteDcdnIpaDomainRequest
     *
     * @return DeleteDcdnIpaDomainResponse DeleteDcdnIpaDomainResponse
     */
    public function deleteDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 10.
     *   *
     * @param DeleteDcdnIpaSpecificConfigRequest $request DeleteDcdnIpaSpecificConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnIpaSpecificConfigResponse DeleteDcdnIpaSpecificConfigResponse
     */
    public function deleteDcdnIpaSpecificConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnIpaSpecificConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnIpaSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 10.
     *   *
     * @param DeleteDcdnIpaSpecificConfigRequest $request DeleteDcdnIpaSpecificConfigRequest
     *
     * @return DeleteDcdnIpaSpecificConfigResponse DeleteDcdnIpaSpecificConfigResponse
     */
    public function deleteDcdnIpaSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnIpaSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 50 times per second per account.
     *   *
     * @param DeleteDcdnKvRequest $request DeleteDcdnKvRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnKvResponse DeleteDcdnKvResponse
     */
    public function deleteDcdnKvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnKv',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 50 times per second per account.
     *   *
     * @param DeleteDcdnKvRequest $request DeleteDcdnKvRequest
     *
     * @return DeleteDcdnKvResponse DeleteDcdnKvResponse
     */
    public function deleteDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnKvWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DeleteDcdnRealTimeLogProjectRequest $request DeleteDcdnRealTimeLogProjectRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnRealTimeLogProjectResponse DeleteDcdnRealTimeLogProjectResponse
     */
    public function deleteDcdnRealTimeLogProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnRealTimeLogProject',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnRealTimeLogProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DeleteDcdnRealTimeLogProjectRequest $request DeleteDcdnRealTimeLogProjectRequest
     *
     * @return DeleteDcdnRealTimeLogProjectResponse DeleteDcdnRealTimeLogProjectResponse
     */
    public function deleteDcdnRealTimeLogProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnRealTimeLogProjectWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param DeleteDcdnSpecificConfigRequest $request DeleteDcdnSpecificConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnSpecificConfigResponse DeleteDcdnSpecificConfigResponse
     */
    public function deleteDcdnSpecificConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnSpecificConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param DeleteDcdnSpecificConfigRequest $request DeleteDcdnSpecificConfigRequest
     *
     * @return DeleteDcdnSpecificConfigResponse DeleteDcdnSpecificConfigResponse
     */
    public function deleteDcdnSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param DeleteDcdnSpecificStagingConfigRequest $request DeleteDcdnSpecificStagingConfigRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnSpecificStagingConfigResponse DeleteDcdnSpecificStagingConfigResponse
     */
    public function deleteDcdnSpecificStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnSpecificStagingConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnSpecificStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param DeleteDcdnSpecificStagingConfigRequest $request DeleteDcdnSpecificStagingConfigRequest
     *
     * @return DeleteDcdnSpecificStagingConfigResponse DeleteDcdnSpecificStagingConfigResponse
     */
    public function deleteDcdnSpecificStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSpecificStagingConfigWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnSubTaskResponse DeleteDcdnSubTaskResponse
     */
    public function deleteDcdnSubTaskWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DeleteDcdnSubTask',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @return DeleteDcdnSubTaskResponse DeleteDcdnSubTaskResponse
     */
    public function deleteDcdnSubTask()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSubTaskWithOptions($runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param DeleteDcdnWafPolicyRequest $request DeleteDcdnWafPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDcdnWafPolicyResponse DeleteDcdnWafPolicyResponse
     */
    public function deleteDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDcdnWafPolicy',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param DeleteDcdnWafPolicyRequest $request DeleteDcdnWafPolicyRequest
     *
     * @return DeleteDcdnWafPolicyResponse DeleteDcdnWafPolicyResponse
     */
    public function deleteDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param DeleteRoutineRequest $request DeleteRoutineRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineResponse DeleteRoutineResponse
     */
    public function deleteRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoutine',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param DeleteRoutineRequest $request DeleteRoutineRequest
     *
     * @return DeleteRoutineResponse DeleteRoutineResponse
     */
    public function deleteRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineWithOptions($request, $runtime);
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param DeleteRoutineCodeRevisionRequest $request DeleteRoutineCodeRevisionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineCodeRevisionResponse DeleteRoutineCodeRevisionResponse
     */
    public function deleteRoutineCodeRevisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->selectCodeRevision)) {
            $body['SelectCodeRevision'] = $request->selectCodeRevision;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoutineCodeRevision',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param DeleteRoutineCodeRevisionRequest $request DeleteRoutineCodeRevisionRequest
     *
     * @return DeleteRoutineCodeRevisionResponse DeleteRoutineCodeRevisionResponse
     */
    public function deleteRoutineCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation deletes only custom preset canary release environments. You cannot delete production or staging environments.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DeleteRoutineConfEnvsRequest $tmpReq  DeleteRoutineConfEnvsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineConfEnvsResponse DeleteRoutineConfEnvsResponse
     */
    public function deleteRoutineConfEnvsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRoutineConfEnvsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envs)) {
            $request->envsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envs, 'Envs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->envsShrink)) {
            $body['Envs'] = $request->envsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoutineConfEnvs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineConfEnvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation deletes only custom preset canary release environments. You cannot delete production or staging environments.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DeleteRoutineConfEnvsRequest $request DeleteRoutineConfEnvsRequest
     *
     * @return DeleteRoutineConfEnvsResponse DeleteRoutineConfEnvsResponse
     */
    public function deleteRoutineConfEnvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineConfEnvsWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to three times per second.
     *   *
     * @param DescribeDcdnAclFieldsRequest $request DescribeDcdnAclFieldsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnAclFieldsResponse DescribeDcdnAclFieldsResponse
     */
    public function describeDcdnAclFieldsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnAclFields',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnAclFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to three times per second.
     *   *
     * @param DescribeDcdnAclFieldsRequest $request DescribeDcdnAclFieldsRequest
     *
     * @return DescribeDcdnAclFieldsResponse DescribeDcdnAclFieldsResponse
     */
    public function describeDcdnAclFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnAclFieldsWithOptions($request, $runtime);
    }

    /**
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both of them empty.
     *   * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     *   * *   You can query data in the last 90 days.
     *   * *   The maximum time range from the start time to the end time is 31 days. The start time is specified by the StartTime parameter and the end time is specified by the EndTime parameter.
     *   * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     *   * *   You can call this operation up to five times per second per account.
     *   *
     * @param DescribeDcdnBgpBpsDataRequest $request DescribeDcdnBgpBpsDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnBgpBpsDataResponse DescribeDcdnBgpBpsDataResponse
     */
    public function describeDcdnBgpBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->devicePort)) {
            $query['DevicePort'] = $request->devicePort;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnBgpBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnBgpBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both of them empty.
     *   * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     *   * *   You can query data in the last 90 days.
     *   * *   The maximum time range from the start time to the end time is 31 days. The start time is specified by the StartTime parameter and the end time is specified by the EndTime parameter.
     *   * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     *   * *   You can call this operation up to five times per second per account.
     *   *
     * @param DescribeDcdnBgpBpsDataRequest $request DescribeDcdnBgpBpsDataRequest
     *
     * @return DescribeDcdnBgpBpsDataResponse DescribeDcdnBgpBpsDataResponse
     */
    public function describeDcdnBgpBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnBgpBpsDataWithOptions($request, $runtime);
    }

    /**
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both of them empty.
     *   * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     *   * *   You can query data in the last 90 days.
     *   * *   The maximum time range from the start time to the end time is 31 days. The start time is specified by the StartTime parameter and the end time is specified by the EndTime parameter.
     *   * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     *   * *   You can call this operation up to five times per second per account.
     *   *
     * @param DescribeDcdnBgpTrafficDataRequest $request DescribeDcdnBgpTrafficDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnBgpTrafficDataResponse DescribeDcdnBgpTrafficDataResponse
     */
    public function describeDcdnBgpTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnBgpTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnBgpTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both of them empty.
     *   * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     *   * *   You can query data in the last 90 days.
     *   * *   The maximum time range from the start time to the end time is 31 days. The start time is specified by the StartTime parameter and the end time is specified by the EndTime parameter.
     *   * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     *   * *   You can call this operation up to five times per second per account.
     *   *
     * @param DescribeDcdnBgpTrafficDataRequest $request DescribeDcdnBgpTrafficDataRequest
     *
     * @return DescribeDcdnBgpTrafficDataResponse DescribeDcdnBgpTrafficDataResponse
     */
    public function describeDcdnBgpTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnBgpTrafficDataWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnBlockedRegionsRequest $request DescribeDcdnBlockedRegionsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnBlockedRegionsResponse DescribeDcdnBlockedRegionsResponse
     */
    public function describeDcdnBlockedRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnBlockedRegions',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnBlockedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnBlockedRegionsRequest $request DescribeDcdnBlockedRegionsRequest
     *
     * @return DescribeDcdnBlockedRegionsResponse DescribeDcdnBlockedRegionsResponse
     */
    public function describeDcdnBlockedRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnBlockedRegionsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnCertificateDetailRequest $request DescribeDcdnCertificateDetailRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnCertificateDetailResponse DescribeDcdnCertificateDetailResponse
     */
    public function describeDcdnCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnCertificateDetail',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnCertificateDetailRequest $request DescribeDcdnCertificateDetailRequest
     *
     * @return DescribeDcdnCertificateDetailResponse DescribeDcdnCertificateDetailResponse
     */
    public function describeDcdnCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnCertificateListRequest $request DescribeDcdnCertificateListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnCertificateListResponse DescribeDcdnCertificateListResponse
     */
    public function describeDcdnCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnCertificateList',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnCertificateListRequest $request DescribeDcdnCertificateListRequest
     *
     * @return DescribeDcdnCertificateListResponse DescribeDcdnCertificateListResponse
     */
    public function describeDcdnCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnCertificateListWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 10 times per second per account.
     *   *
     * @param DescribeDcdnDeletedDomainsRequest $request DescribeDcdnDeletedDomainsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDeletedDomainsResponse DescribeDcdnDeletedDomainsResponse
     */
    public function describeDcdnDeletedDomainsWithOptions($request, $runtime)
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
            'action'      => 'DescribeDcdnDeletedDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDeletedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 10 times per second per account.
     *   *
     * @param DescribeDcdnDeletedDomainsRequest $request DescribeDcdnDeletedDomainsRequest
     *
     * @return DescribeDcdnDeletedDomainsResponse DescribeDcdnDeletedDomainsResponse
     */
    public function describeDcdnDeletedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDeletedDomainsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 3.
     *   *
     * @param DescribeDcdnDeliverListRequest $request DescribeDcdnDeliverListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDeliverListResponse DescribeDcdnDeliverListResponse
     */
    public function describeDcdnDeliverListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverId)) {
            $query['DeliverId'] = $request->deliverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDeliverList',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDeliverListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 3.
     *   *
     * @param DescribeDcdnDeliverListRequest $request DescribeDcdnDeliverListRequest
     *
     * @return DescribeDcdnDeliverListResponse DescribeDcdnDeliverListResponse
     */
    public function describeDcdnDeliverList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDeliverListWithOptions($request, $runtime);
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainBpsDataRequest $request DescribeDcdnDomainBpsDataRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainBpsDataResponse DescribeDcdnDomainBpsDataResponse
     */
    public function describeDcdnDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainBpsDataRequest $request DescribeDcdnDomainBpsDataRequest
     *
     * @return DescribeDcdnDomainBpsDataResponse DescribeDcdnDomainBpsDataResponse
     */
    public function describeDcdnDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 20 times per second.
     *   * - If you do not set the **StartTime** or **EndTime** parameters, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data is available | Data delay |
     *   * | ---------------- | ---------------------------- | ---------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainBpsDataByLayerRequest $request DescribeDcdnDomainBpsDataByLayerRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainBpsDataByLayerResponse DescribeDcdnDomainBpsDataByLayerResponse
     */
    public function describeDcdnDomainBpsDataByLayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->layer)) {
            $query['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainBpsDataByLayer',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainBpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 20 times per second.
     *   * - If you do not set the **StartTime** or **EndTime** parameters, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data is available | Data delay |
     *   * | ---------------- | ---------------------------- | ---------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainBpsDataByLayerRequest $request DescribeDcdnDomainBpsDataByLayerRequest
     *
     * @return DescribeDcdnDomainBpsDataByLayerResponse DescribeDcdnDomainBpsDataByLayerResponse
     */
    public function describeDcdnDomainBpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainBpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnDomainByCertificateRequest $request DescribeDcdnDomainByCertificateRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainByCertificateResponse DescribeDcdnDomainByCertificateResponse
     */
    public function describeDcdnDomainByCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
        }
        if (!Utils::isUnset($request->SSLStatus)) {
            $query['SSLStatus'] = $request->SSLStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainByCertificate',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainByCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnDomainByCertificateRequest $request DescribeDcdnDomainByCertificateRequest
     *
     * @return DescribeDcdnDomainByCertificateResponse DescribeDcdnDomainByCertificateResponse
     */
    public function describeDcdnDomainByCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainByCertificateWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If you do not configure the StartTime or EndTime parameter, data collected over the last 24 hours is queried. If you configure both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     *   * *   You can query data collected over the last 30 days.
     *   * *   You can call this operation up to 50 times per second.
     *   *
     * @param DescribeDcdnDomainCcActivityLogRequest $request DescribeDcdnDomainCcActivityLogRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainCcActivityLogResponse DescribeDcdnDomainCcActivityLogResponse
     */
    public function describeDcdnDomainCcActivityLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->triggerObject)) {
            $query['TriggerObject'] = $request->triggerObject;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainCcActivityLog',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainCcActivityLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If you do not configure the StartTime or EndTime parameter, data collected over the last 24 hours is queried. If you configure both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     *   * *   You can query data collected over the last 30 days.
     *   * *   You can call this operation up to 50 times per second.
     *   *
     * @param DescribeDcdnDomainCcActivityLogRequest $request DescribeDcdnDomainCcActivityLogRequest
     *
     * @return DescribeDcdnDomainCcActivityLogResponse DescribeDcdnDomainCcActivityLogResponse
     */
    public function describeDcdnDomainCcActivityLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainCcActivityLogWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnDomainCertificateInfoRequest $request DescribeDcdnDomainCertificateInfoRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainCertificateInfoResponse DescribeDcdnDomainCertificateInfoResponse
     */
    public function describeDcdnDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainCertificateInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnDomainCertificateInfoRequest $request DescribeDcdnDomainCertificateInfoRequest
     *
     * @return DescribeDcdnDomainCertificateInfoResponse DescribeDcdnDomainCertificateInfoResponse
     */
    public function describeDcdnDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 80.
     *   *
     * @param DescribeDcdnDomainCnameRequest $request DescribeDcdnDomainCnameRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainCnameResponse DescribeDcdnDomainCnameResponse
     */
    public function describeDcdnDomainCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainCname',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 80.
     *   *
     * @param DescribeDcdnDomainCnameRequest $request DescribeDcdnDomainCnameRequest
     *
     * @return DescribeDcdnDomainCnameResponse DescribeDcdnDomainCnameResponse
     */
    public function describeDcdnDomainCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainCnameWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can query the configurations of one or more features in a request.
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnDomainConfigsRequest $request DescribeDcdnDomainConfigsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainConfigsResponse DescribeDcdnDomainConfigsResponse
     */
    public function describeDcdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can query the configurations of one or more features in a request.
     *   * *   You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnDomainConfigsRequest $request DescribeDcdnDomainConfigsRequest
     *
     * @return DescribeDcdnDomainConfigsResponse DescribeDcdnDomainConfigsResponse
     */
    public function describeDcdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnDomainDetailRequest $request DescribeDcdnDomainDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainDetailResponse DescribeDcdnDomainDetailResponse
     */
    public function describeDcdnDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainDetail',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnDomainDetailRequest $request DescribeDcdnDomainDetailRequest
     *
     * @return DescribeDcdnDomainDetailResponse DescribeDcdnDomainDetailResponse
     */
    public function describeDcdnDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainDetailWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 100 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainHitRateDataRequest $request DescribeDcdnDomainHitRateDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainHitRateDataResponse DescribeDcdnDomainHitRateDataResponse
     */
    public function describeDcdnDomainHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainHitRateData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 100 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainHitRateDataRequest $request DescribeDcdnDomainHitRateDataRequest
     *
     * @return DescribeDcdnDomainHitRateDataResponse DescribeDcdnDomainHitRateDataResponse
     */
    public function describeDcdnDomainHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * * You can call this operation up to 100 times per second per account.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainHttpCodeDataRequest $request DescribeDcdnDomainHttpCodeDataRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainHttpCodeDataResponse DescribeDcdnDomainHttpCodeDataResponse
     */
    public function describeDcdnDomainHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainHttpCodeData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * * You can call this operation up to 100 times per second per account.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainHttpCodeDataRequest $request DescribeDcdnDomainHttpCodeDataRequest
     *
     * @return DescribeDcdnDomainHttpCodeDataResponse DescribeDcdnDomainHttpCodeDataResponse
     */
    public function describeDcdnDomainHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 20 times per second per account.
     *   * - You cannot query the distribution of HTTP status codes by IP protocol.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainHttpCodeDataByLayerRequest $request DescribeDcdnDomainHttpCodeDataByLayerRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainHttpCodeDataByLayerResponse DescribeDcdnDomainHttpCodeDataByLayerResponse
     */
    public function describeDcdnDomainHttpCodeDataByLayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->layer)) {
            $query['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainHttpCodeDataByLayer',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainHttpCodeDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 20 times per second per account.
     *   * - You cannot query the distribution of HTTP status codes by IP protocol.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainHttpCodeDataByLayerRequest $request DescribeDcdnDomainHttpCodeDataByLayerRequest
     *
     * @return DescribeDcdnDomainHttpCodeDataByLayerResponse DescribeDcdnDomainHttpCodeDataByLayerResponse
     */
    public function describeDcdnDomainHttpCodeDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainHttpCodeDataByLayerWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Unit: bit/s.
     *   * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnDomainIpaBpsDataRequest $request DescribeDcdnDomainIpaBpsDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainIpaBpsDataResponse DescribeDcdnDomainIpaBpsDataResponse
     */
    public function describeDcdnDomainIpaBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fixTimeGap)) {
            $query['FixTimeGap'] = $request->fixTimeGap;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeMerge)) {
            $query['TimeMerge'] = $request->timeMerge;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainIpaBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainIpaBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Unit: bit/s.
     *   * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnDomainIpaBpsDataRequest $request DescribeDcdnDomainIpaBpsDataRequest
     *
     * @return DescribeDcdnDomainIpaBpsDataResponse DescribeDcdnDomainIpaBpsDataResponse
     */
    public function describeDcdnDomainIpaBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIpaBpsDataWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 10 times per second per account.
     *   * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * *   The minimum time granularity at which the data is queried is 5 minutes. The maximum time range for a single query is 31 days. The period within which historical data is available is 366 days. The data latency is no more than 10 minutes.
     *   *
     * @param DescribeDcdnDomainIpaConnDataRequest $request DescribeDcdnDomainIpaConnDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainIpaConnDataResponse DescribeDcdnDomainIpaConnDataResponse
     */
    public function describeDcdnDomainIpaConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainIpaConnData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainIpaConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 10 times per second per account.
     *   * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * *   The minimum time granularity at which the data is queried is 5 minutes. The maximum time range for a single query is 31 days. The period within which historical data is available is 366 days. The data latency is no more than 10 minutes.
     *   *
     * @param DescribeDcdnDomainIpaConnDataRequest $request DescribeDcdnDomainIpaConnDataRequest
     *
     * @return DescribeDcdnDomainIpaConnDataResponse DescribeDcdnDomainIpaConnDataResponse
     */
    public function describeDcdnDomainIpaConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIpaConnDataWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If you do not set **StartTime** or **EndTime**, data collected within the last 24 hours is queried. If you set both **StartTime** and **EndTime**, data collected within the specified time range is queried.
     *   * *   The monitoring data is measured in bytes.
     *   * *   The maximum number of times that users can call this operation per second is 100.
     *   *
     * @param DescribeDcdnDomainIpaTrafficDataRequest $request DescribeDcdnDomainIpaTrafficDataRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainIpaTrafficDataResponse DescribeDcdnDomainIpaTrafficDataResponse
     */
    public function describeDcdnDomainIpaTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fixTimeGap)) {
            $query['FixTimeGap'] = $request->fixTimeGap;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeMerge)) {
            $query['TimeMerge'] = $request->timeMerge;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainIpaTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainIpaTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If you do not set **StartTime** or **EndTime**, data collected within the last 24 hours is queried. If you set both **StartTime** and **EndTime**, data collected within the specified time range is queried.
     *   * *   The monitoring data is measured in bytes.
     *   * *   The maximum number of times that users can call this operation per second is 100.
     *   *
     * @param DescribeDcdnDomainIpaTrafficDataRequest $request DescribeDcdnDomainIpaTrafficDataRequest
     *
     * @return DescribeDcdnDomainIpaTrafficDataResponse DescribeDcdnDomainIpaTrafficDataResponse
     */
    public function describeDcdnDomainIpaTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIpaTrafficDataWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can call this operation up to 100 times per second.
     *   * *   If **StartTime** is set but **EndTime** is not set, the data within the hour that starts from **StartTime** is queried.
     *   * *   If **EndTime** is set but **StartTime** is not set, the data within the last hour that precedes **EndTime** is queried.
     *   * *   You can query data of a domain name or all domain names that belong to your account.
     *   * *   You can view data that is collected over the last seven days. The interval at which data is queried is based on the time range specified by **StartTime** and **EndTime**.
     *   *     *   **If the time range is shorter than or equal to one hour**, data is queried every minute.
     *   *     *   **If the time range is longer than 1 hour but shorter than or equal to three days**, data is queried every five minutes.
     *   *     *   **If the time range is longer than three days but shorter than or equal to seven days**, data is queried every hour.
     *   *
     * @param DescribeDcdnDomainIspDataRequest $request DescribeDcdnDomainIspDataRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainIspDataResponse DescribeDcdnDomainIspDataResponse
     */
    public function describeDcdnDomainIspDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainIspData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainIspDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can call this operation up to 100 times per second.
     *   * *   If **StartTime** is set but **EndTime** is not set, the data within the hour that starts from **StartTime** is queried.
     *   * *   If **EndTime** is set but **StartTime** is not set, the data within the last hour that precedes **EndTime** is queried.
     *   * *   You can query data of a domain name or all domain names that belong to your account.
     *   * *   You can view data that is collected over the last seven days. The interval at which data is queried is based on the time range specified by **StartTime** and **EndTime**.
     *   *     *   **If the time range is shorter than or equal to one hour**, data is queried every minute.
     *   *     *   **If the time range is longer than 1 hour but shorter than or equal to three days**, data is queried every five minutes.
     *   *     *   **If the time range is longer than three days but shorter than or equal to seven days**, data is queried every hour.
     *   *
     * @param DescribeDcdnDomainIspDataRequest $request DescribeDcdnDomainIspDataRequest
     *
     * @return DescribeDcdnDomainIspDataResponse DescribeDcdnDomainIspDataResponse
     */
    public function describeDcdnDomainIspData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIspDataWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If you specify neither the **StartTime** parameter nor the **EndTime** parameter, the data in the last 24 hours is returned. If you specify the **StartTime** and **EndTime** parameters, the data within the specified time range is returned.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnDomainLogRequest $request DescribeDcdnDomainLogRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainLogResponse DescribeDcdnDomainLogResponse
     */
    public function describeDcdnDomainLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainLog',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If you specify neither the **StartTime** parameter nor the **EndTime** parameter, the data in the last 24 hours is returned. If you specify the **StartTime** and **EndTime** parameters, the data within the specified time range is returned.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnDomainLogRequest $request DescribeDcdnDomainLogRequest
     *
     * @return DescribeDcdnDomainLogResponse DescribeDcdnDomainLogResponse
     */
    public function describeDcdnDomainLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainLogWithOptions($request, $runtime);
    }

    /**
     * When you call this operation, take note of the following rules:
     *   * *   If you do not set the StartTime or EndTime parameter, data within the last 10 minutes is queried. You can set both the StartTime and EndTime parameters to specify a time range.
     *   * *   You can specify one or more accelerated domain names. Separate domain names with commas (,).
     *   * *   You can query data up to the last 90 days.
     *   * *   The time range cannot exceed 1 hour.
     *   *
     * @param DescribeDcdnDomainMultiUsageDataRequest $request DescribeDcdnDomainMultiUsageDataRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainMultiUsageDataResponse DescribeDcdnDomainMultiUsageDataResponse
     */
    public function describeDcdnDomainMultiUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainMultiUsageData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainMultiUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, take note of the following rules:
     *   * *   If you do not set the StartTime or EndTime parameter, data within the last 10 minutes is queried. You can set both the StartTime and EndTime parameters to specify a time range.
     *   * *   You can specify one or more accelerated domain names. Separate domain names with commas (,).
     *   * *   You can query data up to the last 90 days.
     *   * *   The time range cannot exceed 1 hour.
     *   *
     * @param DescribeDcdnDomainMultiUsageDataRequest $request DescribeDcdnDomainMultiUsageDataRequest
     *
     * @return DescribeDcdnDomainMultiUsageDataResponse DescribeDcdnDomainMultiUsageDataResponse
     */
    public function describeDcdnDomainMultiUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainMultiUsageDataWithOptions($request, $runtime);
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainOriginBpsDataRequest $request DescribeDcdnDomainOriginBpsDataRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainOriginBpsDataResponse DescribeDcdnDomainOriginBpsDataResponse
     */
    public function describeDcdnDomainOriginBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainOriginBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainOriginBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainOriginBpsDataRequest $request DescribeDcdnDomainOriginBpsDataRequest
     *
     * @return DescribeDcdnDomainOriginBpsDataResponse DescribeDcdnDomainOriginBpsDataResponse
     */
    public function describeDcdnDomainOriginBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainOriginBpsDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 100 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameters, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainOriginTrafficDataRequest $request DescribeDcdnDomainOriginTrafficDataRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainOriginTrafficDataResponse DescribeDcdnDomainOriginTrafficDataResponse
     */
    public function describeDcdnDomainOriginTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainOriginTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainOriginTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 100 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameters, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainOriginTrafficDataRequest $request DescribeDcdnDomainOriginTrafficDataRequest
     *
     * @return DescribeDcdnDomainOriginTrafficDataResponse DescribeDcdnDomainOriginTrafficDataResponse
     */
    public function describeDcdnDomainOriginTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainOriginTrafficDataWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 10.
     *   *
     * @param DescribeDcdnDomainPropertyRequest $request DescribeDcdnDomainPropertyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainPropertyResponse DescribeDcdnDomainPropertyResponse
     */
    public function describeDcdnDomainPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainProperty',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 10.
     *   *
     * @param DescribeDcdnDomainPropertyRequest $request DescribeDcdnDomainPropertyRequest
     *
     * @return DescribeDcdnDomainPropertyResponse DescribeDcdnDomainPropertyResponse
     */
    public function describeDcdnDomainProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainPropertyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainPvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainPvDataResponse
     */
    public function describeDcdnDomainPvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainPvData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnDomainPvDataRequest $request
     *
     * @return DescribeDcdnDomainPvDataResponse
     */
    public function describeDcdnDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainQpsDataRequest $request DescribeDcdnDomainQpsDataRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainQpsDataResponse DescribeDcdnDomainQpsDataResponse
     */
    public function describeDcdnDomainQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainQpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainQpsDataRequest $request DescribeDcdnDomainQpsDataRequest
     *
     * @return DescribeDcdnDomainQpsDataResponse DescribeDcdnDomainQpsDataResponse
     */
    public function describeDcdnDomainQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 20 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainQpsDataByLayerRequest $request DescribeDcdnDomainQpsDataByLayerRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainQpsDataByLayerResponse DescribeDcdnDomainQpsDataByLayerResponse
     */
    public function describeDcdnDomainQpsDataByLayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->layer)) {
            $query['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainQpsDataByLayer',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainQpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 20 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainQpsDataByLayerRequest $request DescribeDcdnDomainQpsDataByLayerRequest
     *
     * @return DescribeDcdnDomainQpsDataByLayerResponse DescribeDcdnDomainQpsDataByLayerResponse
     */
    public function describeDcdnDomainQpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainQpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeBpsDataRequest $request DescribeDcdnDomainRealTimeBpsDataRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeBpsDataResponse DescribeDcdnDomainRealTimeBpsDataResponse
     */
    public function describeDcdnDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeBpsDataRequest $request DescribeDcdnDomainRealTimeBpsDataRequest
     *
     * @return DescribeDcdnDomainRealTimeBpsDataResponse DescribeDcdnDomainRealTimeBpsDataResponse
     */
    public function describeDcdnDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeByteHitRateDataRequest $request DescribeDcdnDomainRealTimeByteHitRateDataRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeByteHitRateDataResponse DescribeDcdnDomainRealTimeByteHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeByteHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeByteHitRateData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeByteHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeByteHitRateDataRequest $request DescribeDcdnDomainRealTimeByteHitRateDataRequest
     *
     * @return DescribeDcdnDomainRealTimeByteHitRateDataResponse DescribeDcdnDomainRealTimeByteHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeByteHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 10 times per second per account.
     *   * **Time granularity of general data returned by the operation**
     *   * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |1 minute|1 hour|7 days|5 minutes|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * Unless otherwise specified, statistics in the preceding table prevail.
     *   *
     * @param DescribeDcdnDomainRealTimeDetailDataRequest $request DescribeDcdnDomainRealTimeDetailDataRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeDetailDataResponse DescribeDcdnDomainRealTimeDetailDataResponse
     */
    public function describeDcdnDomainRealTimeDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeDetailData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 10 times per second per account.
     *   * **Time granularity of general data returned by the operation**
     *   * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |1 minute|1 hour|7 days|5 minutes|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * Unless otherwise specified, statistics in the preceding table prevail.
     *   *
     * @param DescribeDcdnDomainRealTimeDetailDataRequest $request DescribeDcdnDomainRealTimeDetailDataRequest
     *
     * @return DescribeDcdnDomainRealTimeDetailDataResponse DescribeDcdnDomainRealTimeDetailDataResponse
     */
    public function describeDcdnDomainRealTimeDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeDetailDataWithOptions($request, $runtime);
    }

    /**
     * * You can call this operation up to 10 times per second per account.
     *   * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |1 minute|1 hour|7 days|5 minutes|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|.
     *   *
     * @param DescribeDcdnDomainRealTimeHttpCodeDataRequest $request DescribeDcdnDomainRealTimeHttpCodeDataRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeHttpCodeDataResponse DescribeDcdnDomainRealTimeHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeHttpCodeData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * You can call this operation up to 10 times per second per account.
     *   * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |1 minute|1 hour|7 days|5 minutes|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|.
     *   *
     * @param DescribeDcdnDomainRealTimeHttpCodeDataRequest $request DescribeDcdnDomainRealTimeHttpCodeDataRequest
     *
     * @return DescribeDcdnDomainRealTimeHttpCodeDataResponse DescribeDcdnDomainRealTimeHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeQpsDataRequest $request DescribeDcdnDomainRealTimeQpsDataRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeQpsDataResponse DescribeDcdnDomainRealTimeQpsDataResponse
     */
    public function describeDcdnDomainRealTimeQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeQpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeQpsDataRequest $request DescribeDcdnDomainRealTimeQpsDataRequest
     *
     * @return DescribeDcdnDomainRealTimeQpsDataResponse DescribeDcdnDomainRealTimeQpsDataResponse
     */
    public function describeDcdnDomainRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeReqHitRateDataRequest $request DescribeDcdnDomainRealTimeReqHitRateDataRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeReqHitRateDataResponse DescribeDcdnDomainRealTimeReqHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeReqHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeReqHitRateData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeReqHitRateDataRequest $request DescribeDcdnDomainRealTimeReqHitRateDataRequest
     *
     * @return DescribeDcdnDomainRealTimeReqHitRateDataResponse DescribeDcdnDomainRealTimeReqHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeSrcBpsDataRequest $request DescribeDcdnDomainRealTimeSrcBpsDataRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeSrcBpsDataResponse DescribeDcdnDomainRealTimeSrcBpsDataResponse
     */
    public function describeDcdnDomainRealTimeSrcBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeSrcBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeSrcBpsDataRequest $request DescribeDcdnDomainRealTimeSrcBpsDataRequest
     *
     * @return DescribeDcdnDomainRealTimeSrcBpsDataResponse DescribeDcdnDomainRealTimeSrcBpsDataResponse
     */
    public function describeDcdnDomainRealTimeSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the StartTime or EndTime parameter, data collected over the last one hour is queried. If you set both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest $request DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeSrcHttpCodeData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 10 times per second per account.
     *   * - If you do not set the StartTime or EndTime parameter, data collected over the last one hour is queried. If you set both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest $request DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest
     *
     * @return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeSrcHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |1 minute|1 hour|7 days|5 minutes|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|.
     *   *
     * @param DescribeDcdnDomainRealTimeSrcTrafficDataRequest $request DescribeDcdnDomainRealTimeSrcTrafficDataRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponse DescribeDcdnDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeSrcTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeSrcTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |1 minute|1 hour|7 days|5 minutes|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|.
     *   *
     * @param DescribeDcdnDomainRealTimeSrcTrafficDataRequest $request DescribeDcdnDomainRealTimeSrcTrafficDataRequest
     *
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponse DescribeDcdnDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 50 times per second per account.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeTrafficDataRequest $request DescribeDcdnDomainRealTimeTrafficDataRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRealTimeTrafficDataResponse DescribeDcdnDomainRealTimeTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRealTimeTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 50 times per second per account.
     *   * **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 1 minute | 1 hour | 7 days | 5 minutes |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |.
     *   *
     * @param DescribeDcdnDomainRealTimeTrafficDataRequest $request DescribeDcdnDomainRealTimeTrafficDataRequest
     *
     * @return DescribeDcdnDomainRealTimeTrafficDataResponse DescribeDcdnDomainRealTimeTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If you do not specify the StartTime or EndTime parameters, the data within the last 24 hours is queried by default.
     *   * *   If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     *   * *   The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnDomainRegionDataRequest $request DescribeDcdnDomainRegionDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainRegionDataResponse DescribeDcdnDomainRegionDataResponse
     */
    public function describeDcdnDomainRegionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainRegionData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If you do not specify the StartTime or EndTime parameters, the data within the last 24 hours is queried by default.
     *   * *   If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     *   * *   The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnDomainRegionDataRequest $request DescribeDcdnDomainRegionDataRequest
     *
     * @return DescribeDcdnDomainRegionDataResponse DescribeDcdnDomainRegionDataResponse
     */
    public function describeDcdnDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainStagingConfigResponse
     */
    public function describeDcdnDomainStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainStagingConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnDomainStagingConfigRequest $request
     *
     * @return DescribeDcdnDomainStagingConfigResponse
     */
    public function describeDcdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * **Before you call this operation, take note of the following considerations:**
     *   * *   If you do not set the StartTime parameter, the data on the previous day is queried.
     *   * *   You can specify only one domain name.
     *   *
     * @param DescribeDcdnDomainTopReferVisitRequest $request DescribeDcdnDomainTopReferVisitRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainTopReferVisitResponse DescribeDcdnDomainTopReferVisitResponse
     */
    public function describeDcdnDomainTopReferVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainTopReferVisit',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainTopReferVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Before you call this operation, take note of the following considerations:**
     *   * *   If you do not set the StartTime parameter, the data on the previous day is queried.
     *   * *   You can specify only one domain name.
     *   *
     * @param DescribeDcdnDomainTopReferVisitRequest $request DescribeDcdnDomainTopReferVisitRequest
     *
     * @return DescribeDcdnDomainTopReferVisitResponse DescribeDcdnDomainTopReferVisitResponse
     */
    public function describeDcdnDomainTopReferVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainTopReferVisitWithOptions($request, $runtime);
    }

    /**
     * >  You can only query the data within the last seven days.
     *   *
     * @param DescribeDcdnDomainTopUrlVisitRequest $request DescribeDcdnDomainTopUrlVisitRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainTopUrlVisitResponse DescribeDcdnDomainTopUrlVisitResponse
     */
    public function describeDcdnDomainTopUrlVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainTopUrlVisit',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can only query the data within the last seven days.
     *   *
     * @param DescribeDcdnDomainTopUrlVisitRequest $request DescribeDcdnDomainTopUrlVisitRequest
     *
     * @return DescribeDcdnDomainTopUrlVisitResponse DescribeDcdnDomainTopUrlVisitResponse
     */
    public function describeDcdnDomainTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * * You can call this operation up to 100 times per second per account.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainTrafficDataRequest $request DescribeDcdnDomainTrafficDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainTrafficDataResponse DescribeDcdnDomainTrafficDataResponse
     */
    public function describeDcdnDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * * You can call this operation up to 100 times per second per account.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainTrafficDataRequest $request DescribeDcdnDomainTrafficDataRequest
     *
     * @return DescribeDcdnDomainTrafficDataResponse DescribeDcdnDomainTrafficDataResponse
     */
    public function describeDcdnDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * * You can call this operation up to 10 times per second per account.
     *   * * Usage data includes traffic (measured in bytes), bandwidth values (measured in bit/s), and the number of requests.
     *   * **Time granularity**:
     *   * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainUsageDataRequest $request DescribeDcdnDomainUsageDataRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainUsageDataResponse DescribeDcdnDomainUsageDataResponse
     */
    public function describeDcdnDomainUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->dataProtocol)) {
            $query['DataProtocol'] = $request->dataProtocol;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->field)) {
            $query['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainUsageData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * You can call this operation up to 10 times per second per account.
     *   * * Usage data includes traffic (measured in bytes), bandwidth values (measured in bit/s), and the number of requests.
     *   * **Time granularity**:
     *   * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainUsageDataRequest $request DescribeDcdnDomainUsageDataRequest
     *
     * @return DescribeDcdnDomainUsageDataResponse DescribeDcdnDomainUsageDataResponse
     */
    public function describeDcdnDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * **Before you call this operation, pay attention to the following considerations:**
     *   * *   If you do not specify the StartTime or EndTime parameter, the data collected within the last 24 hours is queried by default. If you specify the StartTime and EndTime parameters, the data collected within the specified time range is queried.
     *   * *   You can specify only one accelerated domain or all the accelerated domains under your account.
     *   *
     * @param DescribeDcdnDomainUvDataRequest $request DescribeDcdnDomainUvDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainUvDataResponse DescribeDcdnDomainUvDataResponse
     */
    public function describeDcdnDomainUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainUvData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Before you call this operation, pay attention to the following considerations:**
     *   * *   If you do not specify the StartTime or EndTime parameter, the data collected within the last 24 hours is queried by default. If you specify the StartTime and EndTime parameters, the data collected within the specified time range is queried.
     *   * *   You can specify only one accelerated domain or all the accelerated domains under your account.
     *   *
     * @param DescribeDcdnDomainUvDataRequest $request DescribeDcdnDomainUvDataRequest
     *
     * @return DescribeDcdnDomainUvDataResponse DescribeDcdnDomainUvDataResponse
     */
    public function describeDcdnDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * - You can call this operation up to 100 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainWebsocketBpsDataRequest $request DescribeDcdnDomainWebsocketBpsDataRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainWebsocketBpsDataResponse DescribeDcdnDomainWebsocketBpsDataResponse
     */
    public function describeDcdnDomainWebsocketBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainWebsocketBpsData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainWebsocketBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - You can call this operation up to 100 times per second per account.
     *   * - If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainWebsocketBpsDataRequest $request DescribeDcdnDomainWebsocketBpsDataRequest
     *
     * @return DescribeDcdnDomainWebsocketBpsDataResponse DescribeDcdnDomainWebsocketBpsDataResponse
     */
    public function describeDcdnDomainWebsocketBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainWebsocketBpsDataWithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 100 times per second per account.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainWebsocketHttpCodeDataRequest $request DescribeDcdnDomainWebsocketHttpCodeDataRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainWebsocketHttpCodeDataResponse DescribeDcdnDomainWebsocketHttpCodeDataResponse
     */
    public function describeDcdnDomainWebsocketHttpCodeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainWebsocketHttpCodeData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainWebsocketHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 100 times per second per account.
     *   * **Time granularity**The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     *   * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     *   * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     *   * | 5 minutes | 3 days | 93 days | 15 minutes |
     *   * | 1 hour | 31 days | 186 days | 4 hours |
     *   * | 1 day | 366 days | 366 days | 04:00 on the next day |.
     *   *
     * @param DescribeDcdnDomainWebsocketHttpCodeDataRequest $request DescribeDcdnDomainWebsocketHttpCodeDataRequest
     *
     * @return DescribeDcdnDomainWebsocketHttpCodeDataResponse DescribeDcdnDomainWebsocketHttpCodeDataResponse
     */
    public function describeDcdnDomainWebsocketHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainWebsocketHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainWebsocketTrafficDataRequest $request DescribeDcdnDomainWebsocketTrafficDataRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnDomainWebsocketTrafficDataResponse DescribeDcdnDomainWebsocketTrafficDataResponse
     */
    public function describeDcdnDomainWebsocketTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnDomainWebsocketTrafficData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnDomainWebsocketTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * * You can call this operation up to 100 times per second per account.
     *   * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     *   * **Time granularity**
     *   * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     *   * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     *   * |---|---|---|---|
     *   * |5 minutes|3 days|93 days|15 minutes|
     *   * |1 hour|31 days|186 days|4 hours|
     *   * |1 day|366 days|366 days|04:00 on the next day|.
     *   *
     * @param DescribeDcdnDomainWebsocketTrafficDataRequest $request DescribeDcdnDomainWebsocketTrafficDataRequest
     *
     * @return DescribeDcdnDomainWebsocketTrafficDataResponse DescribeDcdnDomainWebsocketTrafficDataResponse
     */
    public function describeDcdnDomainWebsocketTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainWebsocketTrafficDataWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 10 times per second per account.
     *   * *   The minimum time granularity for a query is one hour. The maximum time span for a query is 24 hours. The time period within which historical data is available for a query is 366 days.
     *   *
     * @param DescribeDcdnErUsageDataRequest $request DescribeDcdnErUsageDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnErUsageDataResponse DescribeDcdnErUsageDataResponse
     */
    public function describeDcdnErUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->routineID)) {
            $query['RoutineID'] = $request->routineID;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnErUsageData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnErUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 10 times per second per account.
     *   * *   The minimum time granularity for a query is one hour. The maximum time span for a query is 24 hours. The time period within which historical data is available for a query is 366 days.
     *   *
     * @param DescribeDcdnErUsageDataRequest $request DescribeDcdnErUsageDataRequest
     *
     * @return DescribeDcdnErUsageDataResponse DescribeDcdnErUsageDataResponse
     */
    public function describeDcdnErUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnErUsageDataWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnHttpsDomainListRequest $request DescribeDcdnHttpsDomainListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnHttpsDomainListResponse DescribeDcdnHttpsDomainListResponse
     */
    public function describeDcdnHttpsDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
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
            'action'      => 'DescribeDcdnHttpsDomainList',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnHttpsDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnHttpsDomainListRequest $request DescribeDcdnHttpsDomainListRequest
     *
     * @return DescribeDcdnHttpsDomainListResponse DescribeDcdnHttpsDomainListResponse
     */
    public function describeDcdnHttpsDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnHttpsDomainListWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnIpInfoRequest $request DescribeDcdnIpInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnIpInfoResponse DescribeDcdnIpInfoResponse
     */
    public function describeDcdnIpInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->IP)) {
            $query['IP'] = $request->IP;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnIpInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnIpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnIpInfoRequest $request DescribeDcdnIpInfoRequest
     *
     * @return DescribeDcdnIpInfoResponse DescribeDcdnIpInfoResponse
     */
    public function describeDcdnIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpInfoWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnIpaDomainConfigsRequest $request DescribeDcdnIpaDomainConfigsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnIpaDomainConfigsResponse DescribeDcdnIpaDomainConfigsResponse
     */
    public function describeDcdnIpaDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnIpaDomainConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnIpaDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnIpaDomainConfigsRequest $request DescribeDcdnIpaDomainConfigsRequest
     *
     * @return DescribeDcdnIpaDomainConfigsResponse DescribeDcdnIpaDomainConfigsResponse
     */
    public function describeDcdnIpaDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 30.
     *   *
     * @param DescribeDcdnIpaDomainDetailRequest $request DescribeDcdnIpaDomainDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnIpaDomainDetailResponse DescribeDcdnIpaDomainDetailResponse
     */
    public function describeDcdnIpaDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnIpaDomainDetail',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnIpaDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 30.
     *   *
     * @param DescribeDcdnIpaDomainDetailRequest $request DescribeDcdnIpaDomainDetailRequest
     *
     * @return DescribeDcdnIpaDomainDetailResponse DescribeDcdnIpaDomainDetailResponse
     */
    public function describeDcdnIpaDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaDomainDetailWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param DescribeDcdnIpaServiceRequest $request DescribeDcdnIpaServiceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnIpaServiceResponse DescribeDcdnIpaServiceResponse
     */
    public function describeDcdnIpaServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnIpaService',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnIpaServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param DescribeDcdnIpaServiceRequest $request DescribeDcdnIpaServiceRequest
     *
     * @return DescribeDcdnIpaServiceResponse DescribeDcdnIpaServiceResponse
     */
    public function describeDcdnIpaService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaServiceWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnIpaUserDomainsRequest $request DescribeDcdnIpaUserDomainsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnIpaUserDomainsResponse DescribeDcdnIpaUserDomainsResponse
     */
    public function describeDcdnIpaUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkDomainShow)) {
            $query['CheckDomainShow'] = $request->checkDomainShow;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSearchType)) {
            $query['DomainSearchType'] = $request->domainSearchType;
        }
        if (!Utils::isUnset($request->domainStatus)) {
            $query['DomainStatus'] = $request->domainStatus;
        }
        if (!Utils::isUnset($request->funcFilter)) {
            $query['FuncFilter'] = $request->funcFilter;
        }
        if (!Utils::isUnset($request->funcId)) {
            $query['FuncId'] = $request->funcId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnIpaUserDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnIpaUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnIpaUserDomainsRequest $request DescribeDcdnIpaUserDomainsRequest
     *
     * @return DescribeDcdnIpaUserDomainsResponse DescribeDcdnIpaUserDomainsResponse
     */
    public function describeDcdnIpaUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnL2VipsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnL2VipsResponse
     */
    public function describeDcdnL2VipsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnL2Vips',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnL2VipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnL2VipsRequest $request
     *
     * @return DescribeDcdnL2VipsResponse
     */
    public function describeDcdnL2Vips($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnL2VipsWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnRealTimeDeliveryFieldRequest $request DescribeDcdnRealTimeDeliveryFieldRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnRealTimeDeliveryFieldResponse DescribeDcdnRealTimeDeliveryFieldResponse
     */
    public function describeDcdnRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnRealTimeDeliveryField',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnRealTimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnRealTimeDeliveryFieldRequest $request DescribeDcdnRealTimeDeliveryFieldRequest
     *
     * @return DescribeDcdnRealTimeDeliveryFieldResponse DescribeDcdnRealTimeDeliveryFieldResponse
     */
    public function describeDcdnRealTimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRealTimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can call the **RefreshDcdnObjectCaches** operation to refresh content and call the **PreloadDcdnObjectCaches** operation to prefetch content.
     *   * *   You can call this operation up to 20 times per second.
     *   *
     * @param DescribeDcdnRefreshQuotaRequest $request DescribeDcdnRefreshQuotaRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnRefreshQuotaResponse DescribeDcdnRefreshQuotaResponse
     */
    public function describeDcdnRefreshQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnRefreshQuota',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can call the **RefreshDcdnObjectCaches** operation to refresh content and call the **PreloadDcdnObjectCaches** operation to prefetch content.
     *   * *   You can call this operation up to 20 times per second.
     *   *
     * @param DescribeDcdnRefreshQuotaRequest $request DescribeDcdnRefreshQuotaRequest
     *
     * @return DescribeDcdnRefreshQuotaResponse DescribeDcdnRefreshQuotaResponse
     */
    public function describeDcdnRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can query data within the last three days.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnRefreshTaskByIdRequest $request DescribeDcdnRefreshTaskByIdRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnRefreshTaskByIdResponse DescribeDcdnRefreshTaskByIdResponse
     */
    public function describeDcdnRefreshTaskByIdWithOptions($request, $runtime)
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
            'action'      => 'DescribeDcdnRefreshTaskById',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnRefreshTaskByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can query data within the last three days.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnRefreshTaskByIdRequest $request DescribeDcdnRefreshTaskByIdRequest
     *
     * @return DescribeDcdnRefreshTaskByIdResponse DescribeDcdnRefreshTaskByIdResponse
     */
    public function describeDcdnRefreshTaskById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRefreshTaskByIdWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   You can query the status information by task ID or URL.
     *   * *   You can set both the **TaskId** parameter and the **ObjectPath** parameter to query. If you set neither the **TaskId** parameter nor the **ObjectPath** parameter, the data in the last 3 days on the first page is returned. By default, a maximum of 20 entries can be displayed on each page.
     *   * *   If you specify the **DomainName** or **Status** parameter, you must also specify the **ObjectType** parameter.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
     * @param DescribeDcdnRefreshTasksRequest $request DescribeDcdnRefreshTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnRefreshTasksResponse DescribeDcdnRefreshTasksResponse
     */
    public function describeDcdnRefreshTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnRefreshTasks',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   You can query the status information by task ID or URL.
     *   * *   You can set both the **TaskId** parameter and the **ObjectPath** parameter to query. If you set neither the **TaskId** parameter nor the **ObjectPath** parameter, the data in the last 3 days on the first page is returned. By default, a maximum of 20 entries can be displayed on each page.
     *   * *   If you specify the **DomainName** or **Status** parameter, you must also specify the **ObjectType** parameter.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
     * @param DescribeDcdnRefreshTasksRequest $request DescribeDcdnRefreshTasksRequest
     *
     * @return DescribeDcdnRefreshTasksResponse DescribeDcdnRefreshTasksResponse
     */
    public function describeDcdnRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnRegionAndIspRequest $request DescribeDcdnRegionAndIspRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnRegionAndIspResponse DescribeDcdnRegionAndIspResponse
     */
    public function describeDcdnRegionAndIspWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnRegionAndIsp',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnRegionAndIspResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnRegionAndIspRequest $request DescribeDcdnRegionAndIspRequest
     *
     * @return DescribeDcdnRegionAndIspResponse DescribeDcdnRegionAndIspResponse
     */
    public function describeDcdnRegionAndIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRegionAndIspWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 3.
     *   *
     * @param DescribeDcdnReportRequest $request DescribeDcdnReportRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnReportResponse DescribeDcdnReportResponse
     */
    public function describeDcdnReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->httpCode)) {
            $query['HttpCode'] = $request->httpCode;
        }
        if (!Utils::isUnset($request->isOverseas)) {
            $query['IsOverseas'] = $request->isOverseas;
        }
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnReport',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 3.
     *   *
     * @param DescribeDcdnReportRequest $request DescribeDcdnReportRequest
     *
     * @return DescribeDcdnReportResponse DescribeDcdnReportResponse
     */
    public function describeDcdnReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnReportWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     *   * *   You can call this API operation up to three times per second per account.
     *   *
     * @param DescribeDcdnReportListRequest $request DescribeDcdnReportListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnReportListResponse DescribeDcdnReportListResponse
     */
    public function describeDcdnReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportId)) {
            $query['ReportId'] = $request->reportId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnReportList',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     *   * *   You can call this API operation up to three times per second per account.
     *   *
     * @param DescribeDcdnReportListRequest $request DescribeDcdnReportListRequest
     *
     * @return DescribeDcdnReportListResponse DescribeDcdnReportListResponse
     */
    public function describeDcdnReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnReportListWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnSLSRealtimeLogDeliveryRequest $request DescribeDcdnSLSRealtimeLogDeliveryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnSLSRealtimeLogDeliveryResponse DescribeDcdnSLSRealtimeLogDeliveryResponse
     */
    public function describeDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnSLSRealtimeLogDelivery',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnSLSRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnSLSRealtimeLogDeliveryRequest $request DescribeDcdnSLSRealtimeLogDeliveryRequest
     *
     * @return DescribeDcdnSLSRealtimeLogDeliveryResponse DescribeDcdnSLSRealtimeLogDeliveryResponse
     */
    public function describeDcdnSLSRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second.
     *   *
     * @param DescribeDcdnSMCertificateDetailRequest $request DescribeDcdnSMCertificateDetailRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnSMCertificateDetailResponse DescribeDcdnSMCertificateDetailResponse
     */
    public function describeDcdnSMCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnSMCertificateDetail',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnSMCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second.
     *   *
     * @param DescribeDcdnSMCertificateDetailRequest $request DescribeDcdnSMCertificateDetailRequest
     *
     * @return DescribeDcdnSMCertificateDetailResponse DescribeDcdnSMCertificateDetailResponse
     */
    public function describeDcdnSMCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSMCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnSMCertificateListRequest $request DescribeDcdnSMCertificateListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnSMCertificateListResponse DescribeDcdnSMCertificateListResponse
     */
    public function describeDcdnSMCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnSMCertificateList',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnSMCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnSMCertificateListRequest $request DescribeDcdnSMCertificateListRequest
     *
     * @return DescribeDcdnSMCertificateListResponse DescribeDcdnSMCertificateListResponse
     */
    public function describeDcdnSMCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSMCertificateListWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnSecFuncInfoRequest $request DescribeDcdnSecFuncInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnSecFuncInfoResponse DescribeDcdnSecFuncInfoResponse
     */
    public function describeDcdnSecFuncInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->secFuncType)) {
            $query['SecFuncType'] = $request->secFuncType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnSecFuncInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnSecFuncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnSecFuncInfoRequest $request DescribeDcdnSecFuncInfoRequest
     *
     * @return DescribeDcdnSecFuncInfoResponse DescribeDcdnSecFuncInfoResponse
     */
    public function describeDcdnSecFuncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSecFuncInfoWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 50 times per second.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnSecSpecInfoResponse DescribeDcdnSecSpecInfoResponse
     */
    public function describeDcdnSecSpecInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDcdnSecSpecInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnSecSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 50 times per second.
     *   *
     * @return DescribeDcdnSecSpecInfoResponse DescribeDcdnSecSpecInfoResponse
     */
    public function describeDcdnSecSpecInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSecSpecInfoWithOptions($runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnServiceRequest $request DescribeDcdnServiceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnServiceResponse DescribeDcdnServiceResponse
     */
    public function describeDcdnServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnService',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnServiceRequest $request DescribeDcdnServiceRequest
     *
     * @return DescribeDcdnServiceResponse DescribeDcdnServiceResponse
     */
    public function describeDcdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnServiceWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnStagingIpResponse DescribeDcdnStagingIpResponse
     */
    public function describeDcdnStagingIpWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDcdnStagingIp',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnStagingIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @return DescribeDcdnStagingIpResponse DescribeDcdnStagingIpResponse
     */
    public function describeDcdnStagingIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnStagingIpWithOptions($runtime);
    }

    /**
     * >
     *   * *   By default, this operation queries all custom report tasks. However, only one task can be displayed. Therefore, only one task is returned.
     *   * *   You can call this operation up to three times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnSubListResponse DescribeDcdnSubListResponse
     */
    public function describeDcdnSubListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDcdnSubList',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnSubListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   By default, this operation queries all custom report tasks. However, only one task can be displayed. Therefore, only one task is returned.
     *   * *   You can call this operation up to three times per second per account.
     *   *
     * @return DescribeDcdnSubListResponse DescribeDcdnSubListResponse
     */
    public function describeDcdnSubList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSubListWithOptions($runtime);
    }

    /**
     * >  You can call this operation up to 10 times per second per account.
     *   *
     * @param DescribeDcdnTagResourcesRequest $request DescribeDcdnTagResourcesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnTagResourcesResponse DescribeDcdnTagResourcesResponse
     */
    public function describeDcdnTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnTagResources',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 10 times per second per account.
     *   *
     * @param DescribeDcdnTagResourcesRequest $request DescribeDcdnTagResourcesRequest
     *
     * @return DescribeDcdnTagResourcesResponse DescribeDcdnTagResourcesResponse
     */
    public function describeDcdnTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnTagResourcesWithOptions($request, $runtime);
    }

    /**
     * **Before you call this operation, pay attention to the following considerations:**If you do not specify the StartTime and EndTime parameters, the data within the current month is queried by default. If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     *   *
     * @param DescribeDcdnTopDomainsByFlowRequest $request DescribeDcdnTopDomainsByFlowRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnTopDomainsByFlowResponse DescribeDcdnTopDomainsByFlowResponse
     */
    public function describeDcdnTopDomainsByFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnTopDomainsByFlow',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * **Before you call this operation, pay attention to the following considerations:**If you do not specify the StartTime and EndTime parameters, the data within the current month is queried by default. If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     *   *
     * @param DescribeDcdnTopDomainsByFlowRequest $request DescribeDcdnTopDomainsByFlowRequest
     *
     * @return DescribeDcdnTopDomainsByFlowResponse DescribeDcdnTopDomainsByFlowResponse
     */
    public function describeDcdnTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnUserBillHistoryRequest $request DescribeDcdnUserBillHistoryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserBillHistoryResponse DescribeDcdnUserBillHistoryResponse
     */
    public function describeDcdnUserBillHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserBillHistory',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserBillHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnUserBillHistoryRequest $request DescribeDcdnUserBillHistoryRequest
     *
     * @return DescribeDcdnUserBillHistoryResponse DescribeDcdnUserBillHistoryResponse
     */
    public function describeDcdnUserBillHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserBillHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserBillTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnUserBillTypeResponse
     */
    public function describeDcdnUserBillTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserBillType',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserBillTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnUserBillTypeRequest $request
     *
     * @return DescribeDcdnUserBillTypeResponse
     */
    public function describeDcdnUserBillType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserBillTypeWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserCertificateExpireCountResponse DescribeDcdnUserCertificateExpireCountResponse
     */
    public function describeDcdnUserCertificateExpireCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserCertificateExpireCount',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserCertificateExpireCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @return DescribeDcdnUserCertificateExpireCountResponse DescribeDcdnUserCertificateExpireCountResponse
     */
    public function describeDcdnUserCertificateExpireCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserCertificateExpireCountWithOptions($runtime);
    }

    /**
     * >You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnUserConfigsRequest $request DescribeDcdnUserConfigsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserConfigsResponse DescribeDcdnUserConfigsResponse
     */
    public function describeDcdnUserConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserConfigs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnUserConfigsRequest $request DescribeDcdnUserConfigsRequest
     *
     * @return DescribeDcdnUserConfigsResponse DescribeDcdnUserConfigsResponse
     */
    public function describeDcdnUserConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserConfigsWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 80 times per second per account.
     *   *
     * @param DescribeDcdnUserDomainsRequest $request DescribeDcdnUserDomainsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserDomainsResponse DescribeDcdnUserDomainsResponse
     */
    public function describeDcdnUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeEndTime)) {
            $query['ChangeEndTime'] = $request->changeEndTime;
        }
        if (!Utils::isUnset($request->changeStartTime)) {
            $query['ChangeStartTime'] = $request->changeStartTime;
        }
        if (!Utils::isUnset($request->checkDomainShow)) {
            $query['CheckDomainShow'] = $request->checkDomainShow;
        }
        if (!Utils::isUnset($request->coverage)) {
            $query['Coverage'] = $request->coverage;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSearchType)) {
            $query['DomainSearchType'] = $request->domainSearchType;
        }
        if (!Utils::isUnset($request->domainStatus)) {
            $query['DomainStatus'] = $request->domainStatus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 80 times per second per account.
     *   *
     * @param DescribeDcdnUserDomainsRequest $request DescribeDcdnUserDomainsRequest
     *
     * @return DescribeDcdnUserDomainsResponse DescribeDcdnUserDomainsResponse
     */
    public function describeDcdnUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserDomainsWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnUserDomainsByFuncRequest $request DescribeDcdnUserDomainsByFuncRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserDomainsByFuncResponse DescribeDcdnUserDomainsByFuncResponse
     */
    public function describeDcdnUserDomainsByFuncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->funcFilter)) {
            $query['FuncFilter'] = $request->funcFilter;
        }
        if (!Utils::isUnset($request->funcId)) {
            $query['FuncId'] = $request->funcId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserDomainsByFunc',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserDomainsByFuncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnUserDomainsByFuncRequest $request DescribeDcdnUserDomainsByFuncRequest
     *
     * @return DescribeDcdnUserDomainsByFuncResponse DescribeDcdnUserDomainsByFuncResponse
     */
    public function describeDcdnUserDomainsByFunc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserDomainsByFuncWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnUserQuotaRequest $request DescribeDcdnUserQuotaRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserQuotaResponse DescribeDcdnUserQuotaResponse
     */
    public function describeDcdnUserQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserQuota',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeDcdnUserQuotaRequest $request DescribeDcdnUserQuotaRequest
     *
     * @return DescribeDcdnUserQuotaResponse DescribeDcdnUserQuotaResponse
     */
    public function describeDcdnUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserQuotaWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnUserRealTimeDeliveryFieldRequest $request DescribeDcdnUserRealTimeDeliveryFieldRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserRealTimeDeliveryFieldResponse DescribeDcdnUserRealTimeDeliveryFieldResponse
     */
    public function describeDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserRealTimeDeliveryField',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserRealTimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnUserRealTimeDeliveryFieldRequest $request DescribeDcdnUserRealTimeDeliveryFieldRequest
     *
     * @return DescribeDcdnUserRealTimeDeliveryFieldResponse DescribeDcdnUserRealTimeDeliveryFieldResponse
     */
    public function describeDcdnUserRealTimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * > You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnUserResourcePackageRequest $request DescribeDcdnUserResourcePackageRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserResourcePackageResponse DescribeDcdnUserResourcePackageResponse
     */
    public function describeDcdnUserResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserResourcePackage',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can call this operation up to 30 times per second per account.
     *   *
     * @param DescribeDcdnUserResourcePackageRequest $request DescribeDcdnUserResourcePackageRequest
     *
     * @return DescribeDcdnUserResourcePackageResponse DescribeDcdnUserResourcePackageResponse
     */
    public function describeDcdnUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnUserSecDropRequest $request DescribeDcdnUserSecDropRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserSecDropResponse DescribeDcdnUserSecDropResponse
     */
    public function describeDcdnUserSecDropWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->secFunc)) {
            $query['SecFunc'] = $request->secFunc;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserSecDrop',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserSecDropResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnUserSecDropRequest $request DescribeDcdnUserSecDropRequest
     *
     * @return DescribeDcdnUserSecDropResponse DescribeDcdnUserSecDropResponse
     */
    public function describeDcdnUserSecDrop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserSecDropWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnUserSecDropByMinuteRequest $request DescribeDcdnUserSecDropByMinuteRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserSecDropByMinuteResponse DescribeDcdnUserSecDropByMinuteResponse
     */
    public function describeDcdnUserSecDropByMinuteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->object)) {
            $query['Object'] = $request->object;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->secFunc)) {
            $query['SecFunc'] = $request->secFunc;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserSecDropByMinute',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserSecDropByMinuteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 50.
     *   *
     * @param DescribeDcdnUserSecDropByMinuteRequest $request DescribeDcdnUserSecDropByMinuteRequest
     *
     * @return DescribeDcdnUserSecDropByMinuteResponse DescribeDcdnUserSecDropByMinuteResponse
     */
    public function describeDcdnUserSecDropByMinute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserSecDropByMinuteWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 100.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnUserTagsResponse DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTagsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDcdnUserTags',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 100.
     *   *
     * @return DescribeDcdnUserTagsResponse DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTags()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserTagsWithOptions($runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnVerifyContentRequest $request DescribeDcdnVerifyContentRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnVerifyContentResponse DescribeDcdnVerifyContentResponse
     */
    public function describeDcdnVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnVerifyContent',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param DescribeDcdnVerifyContentRequest $request DescribeDcdnVerifyContentRequest
     *
     * @return DescribeDcdnVerifyContentResponse DescribeDcdnVerifyContentResponse
     */
    public function describeDcdnVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnVerifyContentWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 150 times per second per account.
     *   *
     * @param DescribeDcdnWafDomainRequest $request DescribeDcdnWafDomainRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafDomainResponse DescribeDcdnWafDomainResponse
     */
    public function describeDcdnWafDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 150 times per second per account.
     *   *
     * @param DescribeDcdnWafDomainRequest $request DescribeDcdnWafDomainRequest
     *
     * @return DescribeDcdnWafDomainResponse DescribeDcdnWafDomainResponse
     */
    public function describeDcdnWafDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDomainWithOptions($request, $runtime);
    }

    /**
     * # Usage notes
     *   * You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafDomainDetailRequest $request DescribeDcdnWafDomainDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafDomainDetailResponse DescribeDcdnWafDomainDetailResponse
     */
    public function describeDcdnWafDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafDomainDetail',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Usage notes
     *   * You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafDomainDetailRequest $request DescribeDcdnWafDomainDetailRequest
     *
     * @return DescribeDcdnWafDomainDetailResponse DescribeDcdnWafDomainDetailResponse
     */
    public function describeDcdnWafDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDomainDetailWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafDomainsRequest $request DescribeDcdnWafDomainsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafDomainsResponse DescribeDcdnWafDomainsResponse
     */
    public function describeDcdnWafDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryArgs)) {
            $query['QueryArgs'] = $request->queryArgs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafDomainsRequest $request DescribeDcdnWafDomainsRequest
     *
     * @return DescribeDcdnWafDomainsResponse DescribeDcdnWafDomainsResponse
     */
    public function describeDcdnWafDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDomainsWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafFilterInfoRequest $request DescribeDcdnWafFilterInfoRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafFilterInfoResponse DescribeDcdnWafFilterInfoResponse
     */
    public function describeDcdnWafFilterInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScenes)) {
            $query['DefenseScenes'] = $request->defenseScenes;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafFilterInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafFilterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafFilterInfoRequest $request DescribeDcdnWafFilterInfoRequest
     *
     * @return DescribeDcdnWafFilterInfoResponse DescribeDcdnWafFilterInfoResponse
     */
    public function describeDcdnWafFilterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafFilterInfoWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafGeoInfoRequest $request DescribeDcdnWafGeoInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafGeoInfoResponse DescribeDcdnWafGeoInfoResponse
     */
    public function describeDcdnWafGeoInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafGeoInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafGeoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafGeoInfoRequest $request DescribeDcdnWafGeoInfoRequest
     *
     * @return DescribeDcdnWafGeoInfoResponse DescribeDcdnWafGeoInfoResponse
     */
    public function describeDcdnWafGeoInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafGeoInfoWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If you do not set StartTime or EndTime, data collected in the last 24 hours is queried. If you set both StartTime and EndTime, data collected within the specified time range is queried.
     *   * *   The log data is collected every hour.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnWafLogsRequest $request DescribeDcdnWafLogsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafLogsResponse DescribeDcdnWafLogsResponse
     */
    public function describeDcdnWafLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafLogs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If you do not set StartTime or EndTime, data collected in the last 24 hours is queried. If you set both StartTime and EndTime, data collected within the specified time range is queried.
     *   * *   The log data is collected every hour.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeDcdnWafLogsRequest $request DescribeDcdnWafLogsRequest
     *
     * @return DescribeDcdnWafLogsResponse DescribeDcdnWafLogsResponse
     */
    public function describeDcdnWafLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafLogsWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPoliciesRequest $request DescribeDcdnWafPoliciesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafPoliciesResponse DescribeDcdnWafPoliciesResponse
     */
    public function describeDcdnWafPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryArgs)) {
            $query['QueryArgs'] = $request->queryArgs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafPolicies',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPoliciesRequest $request DescribeDcdnWafPoliciesRequest
     *
     * @return DescribeDcdnWafPoliciesResponse DescribeDcdnWafPoliciesResponse
     */
    public function describeDcdnWafPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPoliciesWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPolicyRequest $request DescribeDcdnWafPolicyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafPolicyResponse DescribeDcdnWafPolicyResponse
     */
    public function describeDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafPolicy',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPolicyRequest $request DescribeDcdnWafPolicyRequest
     *
     * @return DescribeDcdnWafPolicyResponse DescribeDcdnWafPolicyResponse
     */
    public function describeDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPolicyDomainsRequest $request DescribeDcdnWafPolicyDomainsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafPolicyDomainsResponse DescribeDcdnWafPolicyDomainsResponse
     */
    public function describeDcdnWafPolicyDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafPolicyDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafPolicyDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPolicyDomainsRequest $request DescribeDcdnWafPolicyDomainsRequest
     *
     * @return DescribeDcdnWafPolicyDomainsResponse DescribeDcdnWafPolicyDomainsResponse
     */
    public function describeDcdnWafPolicyDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPolicyDomainsWithOptions($request, $runtime);
    }

    /**
     * # Usage notes
     *   * You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPolicyValidDomainsRequest $request DescribeDcdnWafPolicyValidDomainsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafPolicyValidDomainsResponse DescribeDcdnWafPolicyValidDomainsResponse
     */
    public function describeDcdnWafPolicyValidDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScene)) {
            $query['DefenseScene'] = $request->defenseScene;
        }
        if (!Utils::isUnset($request->domainNameLike)) {
            $query['DomainNameLike'] = $request->domainNameLike;
        }
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
            'action'      => 'DescribeDcdnWafPolicyValidDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafPolicyValidDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Usage notes
     *   * You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafPolicyValidDomainsRequest $request DescribeDcdnWafPolicyValidDomainsRequest
     *
     * @return DescribeDcdnWafPolicyValidDomainsResponse DescribeDcdnWafPolicyValidDomainsResponse
     */
    public function describeDcdnWafPolicyValidDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPolicyValidDomainsWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafRuleRequest $request DescribeDcdnWafRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafRuleResponse DescribeDcdnWafRuleResponse
     */
    public function describeDcdnWafRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafRule',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafRuleRequest $request DescribeDcdnWafRuleRequest
     *
     * @return DescribeDcdnWafRuleResponse DescribeDcdnWafRuleResponse
     */
    public function describeDcdnWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafRuleWithOptions($request, $runtime);
    }

    /**
     * You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafRulesRequest $request DescribeDcdnWafRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafRulesResponse DescribeDcdnWafRulesResponse
     */
    public function describeDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryArgs)) {
            $query['QueryArgs'] = $request->queryArgs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafRules',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafRulesRequest $request DescribeDcdnWafRulesRequest
     *
     * @return DescribeDcdnWafRulesResponse DescribeDcdnWafRulesResponse
     */
    public function describeDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafScenesRequest $request DescribeDcdnWafScenesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafScenesResponse DescribeDcdnWafScenesResponse
     */
    public function describeDcdnWafScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScenes)) {
            $query['DefenseScenes'] = $request->defenseScenes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafScenes',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafScenesRequest $request DescribeDcdnWafScenesRequest
     *
     * @return DescribeDcdnWafScenesResponse DescribeDcdnWafScenesResponse
     */
    public function describeDcdnWafScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafScenesWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafServiceRequest $request DescribeDcdnWafServiceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafServiceResponse DescribeDcdnWafServiceResponse
     */
    public function describeDcdnWafServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafService',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param DescribeDcdnWafServiceRequest $request DescribeDcdnWafServiceRequest
     *
     * @return DescribeDcdnWafServiceResponse DescribeDcdnWafServiceResponse
     */
    public function describeDcdnWafService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafServiceWithOptions($request, $runtime);
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafSpecInfoResponse DescribeDcdnWafSpecInfoResponse
     */
    public function describeDcdnWafSpecInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafSpecInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >You can call this operation up to 20 times per second per account.
     *   *
     * @return DescribeDcdnWafSpecInfoResponse DescribeDcdnWafSpecInfoResponse
     */
    public function describeDcdnWafSpecInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafSpecInfoWithOptions($runtime);
    }

    /**
     * >*   You can call this operation up to 10 times per second per account.
     *   * *   The minimum time granularity for a query is 5 minutes. The maximum time span for a query is 31 days. The time period within which historical data is available for a query is 90 days.
     *   *
     * @param DescribeDcdnWafUsageDataRequest $request DescribeDcdnWafUsageDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnWafUsageDataResponse DescribeDcdnWafUsageDataResponse
     */
    public function describeDcdnWafUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnWafUsageData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnWafUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 10 times per second per account.
     *   * *   The minimum time granularity for a query is 5 minutes. The maximum time span for a query is 31 days. The time period within which historical data is available for a query is 90 days.
     *   *
     * @param DescribeDcdnWafUsageDataRequest $request DescribeDcdnWafUsageDataRequest
     *
     * @return DescribeDcdnWafUsageDataResponse DescribeDcdnWafUsageDataResponse
     */
    public function describeDcdnWafUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafUsageDataWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 20 times per second.
     *   *
     * @param DescribeDcdnsecServiceRequest $request DescribeDcdnsecServiceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDcdnsecServiceResponse DescribeDcdnsecServiceResponse
     */
    public function describeDcdnsecServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnsecService',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnsecServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 20 times per second.
     *   *
     * @param DescribeDcdnsecServiceRequest $request DescribeDcdnsecServiceRequest
     *
     * @return DescribeDcdnsecServiceResponse DescribeDcdnsecServiceResponse
     */
    public function describeDcdnsecService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnsecServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRDDomainConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRDDomainConfigResponse
     */
    public function describeRDDomainConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRDDomainConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRDDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRDDomainConfigRequest $request
     *
     * @return DescribeRDDomainConfigResponse
     */
    public function describeRDDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRDDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRDDomainsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRDDomainsResponse
     */
    public function describeRDDomainsWithOptions($request, $runtime)
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
            'action'      => 'DescribeRDDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRDDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRDDomainsRequest $request
     *
     * @return DescribeRDDomainsResponse
     */
    public function describeRDDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRDDomainsWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeRoutineRequest $request DescribeRoutineRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRoutineResponse DescribeRoutineResponse
     */
    public function describeRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRoutine',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param DescribeRoutineRequest $request DescribeRoutineRequest
     *
     * @return DescribeRoutineResponse DescribeRoutineResponse
     */
    public function describeRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRoutineCanaryEnvsResponse DescribeRoutineCanaryEnvsResponse
     */
    public function describeRoutineCanaryEnvsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRoutineCanaryEnvs',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoutineCanaryEnvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @return DescribeRoutineCanaryEnvsResponse DescribeRoutineCanaryEnvsResponse
     */
    public function describeRoutineCanaryEnvs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineCanaryEnvsWithOptions($runtime);
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param DescribeRoutineCodeRevisionRequest $request DescribeRoutineCodeRevisionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRoutineCodeRevisionResponse DescribeRoutineCodeRevisionResponse
     */
    public function describeRoutineCodeRevisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->selectCodeRevision)) {
            $body['SelectCodeRevision'] = $request->selectCodeRevision;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRoutineCodeRevision',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoutineCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param DescribeRoutineCodeRevisionRequest $request DescribeRoutineCodeRevisionRequest
     *
     * @return DescribeRoutineCodeRevisionResponse DescribeRoutineCodeRevisionResponse
     */
    public function describeRoutineCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRoutineSpecResponse DescribeRoutineSpecResponse
     */
    public function describeRoutineSpecWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRoutineSpec',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoutineSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The call frequency of the API is no more than 100 queries per second.
     *   *
     * @return DescribeRoutineSpecResponse DescribeRoutineSpecResponse
     */
    public function describeRoutineSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineSpecWithOptions($runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRoutineUserInfoResponse DescribeRoutineUserInfoResponse
     */
    public function describeRoutineUserInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeRoutineUserInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRoutineUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @return DescribeRoutineUserInfoResponse DescribeRoutineUserInfoResponse
     */
    public function describeRoutineUserInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineUserInfoWithOptions($runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param DescribeUserDcdnIpaStatusRequest $request DescribeUserDcdnIpaStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserDcdnIpaStatusResponse DescribeUserDcdnIpaStatusResponse
     */
    public function describeUserDcdnIpaStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserDcdnIpaStatus',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserDcdnIpaStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param DescribeUserDcdnIpaStatusRequest $request DescribeUserDcdnIpaStatusRequest
     *
     * @return DescribeUserDcdnIpaStatusResponse DescribeUserDcdnIpaStatusResponse
     */
    public function describeUserDcdnIpaStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDcdnIpaStatusWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeUserDcdnStatusRequest $request DescribeUserDcdnStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserDcdnStatusResponse DescribeUserDcdnStatusResponse
     */
    public function describeUserDcdnStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserDcdnStatus',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserDcdnStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeUserDcdnStatusRequest $request DescribeUserDcdnStatusRequest
     *
     * @return DescribeUserDcdnStatusResponse DescribeUserDcdnStatusResponse
     */
    public function describeUserDcdnStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDcdnStatusWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeUserErStatusRequest $request DescribeUserErStatusRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserErStatusResponse DescribeUserErStatusResponse
     */
    public function describeUserErStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserErStatus',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserErStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param DescribeUserErStatusRequest $request DescribeUserErStatusRequest
     *
     * @return DescribeUserErStatusResponse DescribeUserErStatusResponse
     */
    public function describeUserErStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserErStatusWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 20.
     *   *
     * @param DescribeUserLogserviceStatusRequest $request DescribeUserLogserviceStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserLogserviceStatusResponse DescribeUserLogserviceStatusResponse
     */
    public function describeUserLogserviceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserLogserviceStatus',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserLogserviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 20.
     *   *
     * @param DescribeUserLogserviceStatusRequest $request DescribeUserLogserviceStatusRequest
     *
     * @return DescribeUserLogserviceStatusResponse DescribeUserLogserviceStatusResponse
     */
    public function describeUserLogserviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLogserviceStatusWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   This operation modifies only the specified configurations. Other configurations remain unchanged.
     *   * *   If you want to delete a setting, delete the parameter value.
     *   * *   This operation can add canary release environments. Make sure that the environment names comply with the naming rules. Otherwise, you will fail to add the environments.
     *   * *   Dynamic Route for CDN (DCDN) provides 35 canary release environments. Among these environments, 34 are deployed in China and 1 is deployed outside China. The canary release environments are:
     *   *     *   Outside China: presetCanaryOverseas.
     *   *     *   In China: The 34 canary release environments are named in the format of presetCanaryXX. For example, presetCanaryBeijing represents the canary release environment in Beijing. A canary release environment is in each of the following regions: Anhui, Beijing, Chongqing, Fujian, Gansu, Guangdong, Guangxi, Guizhou, Hainan, Hebei, Heilongjiang, Henan, Hong Kong, Hubei, Hunan, Jiangsu, Jiangxi, Jilin, Liaoning, Macao, Neimenggu, Ningxia, Qinghai, Shaanxi, Shandong, Shanghai, Shanxi, Sichuan, Taiwan, Tianjin, Xinjiang, Xizang, Yunan, and Zhejiang.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param EditRoutineConfRequest $tmpReq  EditRoutineConfRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EditRoutineConfResponse EditRoutineConfResponse
     */
    public function editRoutineConfWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EditRoutineConfShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envConf)) {
            $request->envConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envConf, 'EnvConf', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envConfShrink)) {
            $body['EnvConf'] = $request->envConfShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EditRoutineConf',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditRoutineConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   This operation modifies only the specified configurations. Other configurations remain unchanged.
     *   * *   If you want to delete a setting, delete the parameter value.
     *   * *   This operation can add canary release environments. Make sure that the environment names comply with the naming rules. Otherwise, you will fail to add the environments.
     *   * *   Dynamic Route for CDN (DCDN) provides 35 canary release environments. Among these environments, 34 are deployed in China and 1 is deployed outside China. The canary release environments are:
     *   *     *   Outside China: presetCanaryOverseas.
     *   *     *   In China: The 34 canary release environments are named in the format of presetCanaryXX. For example, presetCanaryBeijing represents the canary release environment in Beijing. A canary release environment is in each of the following regions: Anhui, Beijing, Chongqing, Fujian, Gansu, Guangdong, Guangxi, Guizhou, Hainan, Hebei, Heilongjiang, Henan, Hong Kong, Hubei, Hunan, Jiangsu, Jiangxi, Jilin, Liaoning, Macao, Neimenggu, Ningxia, Qinghai, Shaanxi, Shandong, Shanghai, Shanxi, Sichuan, Taiwan, Tianjin, Xinjiang, Xizang, Yunan, and Zhejiang.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param EditRoutineConfRequest $request EditRoutineConfRequest
     *
     * @return EditRoutineConfResponse EditRoutineConfResponse
     */
    public function editRoutineConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editRoutineConfWithOptions($request, $runtime);
    }

    /**
     * @param GetDcdnKvRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetDcdnKvResponse
     */
    public function getDcdnKvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDcdnKv',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDcdnKvRequest $request
     *
     * @return GetDcdnKvResponse
     */
    public function getDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDcdnKvWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param ListDcdnRealTimeDeliveryProjectRequest $request ListDcdnRealTimeDeliveryProjectRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDcdnRealTimeDeliveryProjectResponse ListDcdnRealTimeDeliveryProjectResponse
     */
    public function listDcdnRealTimeDeliveryProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
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
            'action'      => 'ListDcdnRealTimeDeliveryProject',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDcdnRealTimeDeliveryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param ListDcdnRealTimeDeliveryProjectRequest $request ListDcdnRealTimeDeliveryProjectRequest
     *
     * @return ListDcdnRealTimeDeliveryProjectResponse ListDcdnRealTimeDeliveryProjectResponse
     */
    public function listDcdnRealTimeDeliveryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDcdnRealTimeDeliveryProjectWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param ModifyDCdnDomainSchdmByPropertyRequest $request ModifyDCdnDomainSchdmByPropertyRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDCdnDomainSchdmByPropertyResponse ModifyDCdnDomainSchdmByPropertyResponse
     */
    public function modifyDCdnDomainSchdmByPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->property)) {
            $query['Property'] = $request->property;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDCdnDomainSchdmByProperty',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDCdnDomainSchdmByPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param ModifyDCdnDomainSchdmByPropertyRequest $request ModifyDCdnDomainSchdmByPropertyRequest
     *
     * @return ModifyDCdnDomainSchdmByPropertyResponse ModifyDCdnDomainSchdmByPropertyResponse
     */
    public function modifyDCdnDomainSchdmByProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDCdnDomainSchdmByPropertyWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param ModifyDcdnWafPolicyRequest $request ModifyDcdnWafPolicyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDcdnWafPolicyResponse ModifyDcdnWafPolicyResponse
     */
    public function modifyDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $body['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->policyStatus)) {
            $body['PolicyStatus'] = $request->policyStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDcdnWafPolicy',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param ModifyDcdnWafPolicyRequest $request ModifyDcdnWafPolicyRequest
     *
     * @return ModifyDcdnWafPolicyResponse ModifyDcdnWafPolicyResponse
     */
    public function modifyDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param ModifyDcdnWafPolicyDomainsRequest $request ModifyDcdnWafPolicyDomainsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDcdnWafPolicyDomainsResponse ModifyDcdnWafPolicyDomainsResponse
     */
    public function modifyDcdnWafPolicyDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bindDomains)) {
            $body['BindDomains'] = $request->bindDomains;
        }
        if (!Utils::isUnset($request->method)) {
            $body['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->unbindDomains)) {
            $body['UnbindDomains'] = $request->unbindDomains;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDcdnWafPolicyDomains',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDcdnWafPolicyDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   *
     * @param ModifyDcdnWafPolicyDomainsRequest $request ModifyDcdnWafPolicyDomainsRequest
     *
     * @return ModifyDcdnWafPolicyDomainsResponse ModifyDcdnWafPolicyDomainsResponse
     */
    public function modifyDcdnWafPolicyDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafPolicyDomainsWithOptions($request, $runtime);
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   * *   You must configure at least one of the **RuleStatus**, **RuleName** and **RuleConfig** parameters.
     *   *
     * @param ModifyDcdnWafRuleRequest $request ModifyDcdnWafRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDcdnWafRuleResponse ModifyDcdnWafRuleResponse
     */
    public function modifyDcdnWafRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ruleConfig)) {
            $body['RuleConfig'] = $request->ruleConfig;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleStatus)) {
            $body['RuleStatus'] = $request->ruleStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDcdnWafRule',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDcdnWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >*   You can call this operation up to 20 times per second per account.
     *   * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *   * *   You must configure at least one of the **RuleStatus**, **RuleName** and **RuleConfig** parameters.
     *   *
     * @param ModifyDcdnWafRuleRequest $request ModifyDcdnWafRuleRequest
     *
     * @return ModifyDcdnWafRuleResponse ModifyDcdnWafRuleResponse
     */
    public function modifyDcdnWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafRuleWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   DCDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must pass real-name verification.
     *   * *   You can call this operation up to five times per second per account.
     *   *
     * @param OpenDcdnServiceRequest $request OpenDcdnServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenDcdnServiceResponse OpenDcdnServiceResponse
     */
    public function openDcdnServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->billType)) {
            $query['BillType'] = $request->billType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->websocketBillType)) {
            $query['WebsocketBillType'] = $request->websocketBillType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenDcdnService',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenDcdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   DCDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must pass real-name verification.
     *   * *   You can call this operation up to five times per second per account.
     *   *
     * @param OpenDcdnServiceRequest $request OpenDcdnServiceRequest
     *
     * @return OpenDcdnServiceResponse OpenDcdnServiceResponse
     */
    public function openDcdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDcdnServiceWithOptions($request, $runtime);
    }

    /**
     * # Usage notes
     *   * *   You can call the [RefreshDcdnObjectCaches](~~130620~~) operation to refresh content and call the [PreloadDcdnObjectCaches](~~130636~~) operation to prefetch content.
     *   * *   Dynamic Route for CDN (DCDN) supports POST requests in which parameters are sent as a form.
     *   * *   By default, each Alibaba Cloud account can submit up to 1,000 URLs per day. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to increase your daily quota. Alibaba Cloud reviews your application and then increases the quota accordingly.
     *   * *   Each Alibaba Cloud account can submit up to 100 URLs in a request.
     *   * *   The prefetch queue of each Alibaba Cloud account can contain up to 50,000 URLs. DCDN executes prefetch tasks based on the time at which you submit the URLs.
     *   * *   You can call this operation up to 15 times per second per account.
     *   * # Precautions
     *   * *   After a refresh task is submitted and executed, the POPs immediately start to retrieve resources from the origin server. Therefore, a large number of refresh tasks cause a large number of concurrent download tasks. This increases the number of requests that are redirected to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     *   * *   The time required for a prefetch task to complete is proportional to the size of the prefetched file. In actual practice, most prefetch tasks take 5 to 30 minutes to complete. A task with a smaller average file size takes less time.
     *   * *   To allow Resource Access Management (RAM) users to perform this operation, you must first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](~~445051~~).
     *   *
     * @param PreloadDcdnObjectCachesRequest $request PreloadDcdnObjectCachesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return PreloadDcdnObjectCachesResponse PreloadDcdnObjectCachesResponse
     */
    public function preloadDcdnObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->l2Preload)) {
            $query['L2Preload'] = $request->l2Preload;
        }
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->withHeader)) {
            $query['WithHeader'] = $request->withHeader;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreloadDcdnObjectCaches',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreloadDcdnObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Usage notes
     *   * *   You can call the [RefreshDcdnObjectCaches](~~130620~~) operation to refresh content and call the [PreloadDcdnObjectCaches](~~130636~~) operation to prefetch content.
     *   * *   Dynamic Route for CDN (DCDN) supports POST requests in which parameters are sent as a form.
     *   * *   By default, each Alibaba Cloud account can submit up to 1,000 URLs per day. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to increase your daily quota. Alibaba Cloud reviews your application and then increases the quota accordingly.
     *   * *   Each Alibaba Cloud account can submit up to 100 URLs in a request.
     *   * *   The prefetch queue of each Alibaba Cloud account can contain up to 50,000 URLs. DCDN executes prefetch tasks based on the time at which you submit the URLs.
     *   * *   You can call this operation up to 15 times per second per account.
     *   * # Precautions
     *   * *   After a refresh task is submitted and executed, the POPs immediately start to retrieve resources from the origin server. Therefore, a large number of refresh tasks cause a large number of concurrent download tasks. This increases the number of requests that are redirected to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     *   * *   The time required for a prefetch task to complete is proportional to the size of the prefetched file. In actual practice, most prefetch tasks take 5 to 30 minutes to complete. A task with a smaller average file size takes less time.
     *   * *   To allow Resource Access Management (RAM) users to perform this operation, you must first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](~~445051~~).
     *   *
     * @param PreloadDcdnObjectCachesRequest $request PreloadDcdnObjectCachesRequest
     *
     * @return PreloadDcdnObjectCachesResponse PreloadDcdnObjectCachesResponse
     */
    public function preloadDcdnObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadDcdnObjectCachesWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 30.
     *   *
     * @param PublishDcdnStagingConfigToProductionRequest $request PublishDcdnStagingConfigToProductionRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishDcdnStagingConfigToProductionResponse PublishDcdnStagingConfigToProductionResponse
     */
    public function publishDcdnStagingConfigToProductionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PublishDcdnStagingConfigToProduction',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishDcdnStagingConfigToProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 30.
     *   *
     * @param PublishDcdnStagingConfigToProductionRequest $request PublishDcdnStagingConfigToProductionRequest
     *
     * @return PublishDcdnStagingConfigToProductionResponse PublishDcdnStagingConfigToProductionResponse
     */
    public function publishDcdnStagingConfigToProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDcdnStagingConfigToProductionWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param PublishRoutineCodeRevisionRequest $tmpReq  PublishRoutineCodeRevisionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishRoutineCodeRevisionResponse PublishRoutineCodeRevisionResponse
     */
    public function publishRoutineCodeRevisionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PublishRoutineCodeRevisionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envs)) {
            $request->envsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envs, 'Envs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->envsShrink)) {
            $body['Envs'] = $request->envsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->selectCodeRevision)) {
            $body['SelectCodeRevision'] = $request->selectCodeRevision;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishRoutineCodeRevision',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishRoutineCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param PublishRoutineCodeRevisionRequest $request PublishRoutineCodeRevisionRequest
     *
     * @return PublishRoutineCodeRevisionResponse PublishRoutineCodeRevisionResponse
     */
    public function publishRoutineCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRoutineCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * @param PutDcdnKvRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PutDcdnKvResponse
     */
    public function putDcdnKvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $body = [];
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutDcdnKv',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutDcdnKvRequest $request
     *
     * @return PutDcdnKvResponse
     */
    public function putDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDcdnKvWithOptions($request, $runtime);
    }

    /**
     * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests in which parameters are sent as a form.
     *   * *   You can call the [RefreshDcdnObjectCaches](~~130620~~) operation to refresh content and call the [PreloadDcdnObjectCaches](~~130636~~) operation to prefetch content.
     *   * *   By default, each Alibaba Cloud account can refresh content from a maximum of 10,000 URLs and 100 directories per day, including subdirectories. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to apply for an increased upper limit. Alibaba Cloud will review your application and then increase the quota accordingly.
     *   * *   You can specify up to 1,000 URLs or 100 directories that you want to refresh in each request.
     *   * *   You can refresh a maximum of 1,000 URLs per minute for each domain name.
     *   * *   You can call this operation up to 30 times per second per account.
     *   * - After a refresh task is submitted and completed, your resources that are stored on CDN POPs are removed. When a POP receives a request your resources, the request is redirected to the origin server to retrieve the resources. Then, the resources are returned to the client and cached on the POP. If you frequently run refresh tasks, more requests will be redirected back to the origin server for resources, which result in high bandwidth costs and undue pressure on the origin server.
     *   * - A refresh task takes effect five to six minutes after being submitted. This means that if the resource you want to refresh has a TTL of less than five minutes, you wait for it to expire instead of manually running a refresh task.
     *   * - If you want to use Resource Access Management (RAM) users to refresh or prefetch resources, you must acquire the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://www.alibabacloud.com/help/en/dynamic-route-for-cdn/latest/to-grant-the-ram-users-refresh-and-preheating-permissions).
     *   *
     * @param RefreshDcdnObjectCachesRequest $request RefreshDcdnObjectCachesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshDcdnObjectCachesResponse RefreshDcdnObjectCachesResponse
     */
    public function refreshDcdnObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectPath)) {
            $query['ObjectPath'] = $request->objectPath;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshDcdnObjectCaches',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDcdnObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests in which parameters are sent as a form.
     *   * *   You can call the [RefreshDcdnObjectCaches](~~130620~~) operation to refresh content and call the [PreloadDcdnObjectCaches](~~130636~~) operation to prefetch content.
     *   * *   By default, each Alibaba Cloud account can refresh content from a maximum of 10,000 URLs and 100 directories per day, including subdirectories. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to apply for an increased upper limit. Alibaba Cloud will review your application and then increase the quota accordingly.
     *   * *   You can specify up to 1,000 URLs or 100 directories that you want to refresh in each request.
     *   * *   You can refresh a maximum of 1,000 URLs per minute for each domain name.
     *   * *   You can call this operation up to 30 times per second per account.
     *   * - After a refresh task is submitted and completed, your resources that are stored on CDN POPs are removed. When a POP receives a request your resources, the request is redirected to the origin server to retrieve the resources. Then, the resources are returned to the client and cached on the POP. If you frequently run refresh tasks, more requests will be redirected back to the origin server for resources, which result in high bandwidth costs and undue pressure on the origin server.
     *   * - A refresh task takes effect five to six minutes after being submitted. This means that if the resource you want to refresh has a TTL of less than five minutes, you wait for it to expire instead of manually running a refresh task.
     *   * - If you want to use Resource Access Management (RAM) users to refresh or prefetch resources, you must acquire the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://www.alibabacloud.com/help/en/dynamic-route-for-cdn/latest/to-grant-the-ram-users-refresh-and-preheating-permissions).
     *   *
     * @param RefreshDcdnObjectCachesRequest $request RefreshDcdnObjectCachesRequest
     *
     * @return RefreshDcdnObjectCachesResponse RefreshDcdnObjectCachesResponse
     */
    public function refreshDcdnObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDcdnObjectCachesWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param RollbackDcdnStagingConfigRequest $request RollbackDcdnStagingConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackDcdnStagingConfigResponse RollbackDcdnStagingConfigResponse
     */
    public function rollbackDcdnStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackDcdnStagingConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackDcdnStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param RollbackDcdnStagingConfigRequest $request RollbackDcdnStagingConfigRequest
     *
     * @return RollbackDcdnStagingConfigResponse RollbackDcdnStagingConfigResponse
     */
    public function rollbackDcdnStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackDcdnStagingConfigWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param SetDcdnDomainCertificateRequest $request SetDcdnDomainCertificateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDcdnDomainCertificateResponse SetDcdnDomainCertificateResponse
     */
    public function setDcdnDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->forceSet)) {
            $query['ForceSet'] = $request->forceSet;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->SSLPri)) {
            $query['SSLPri'] = $request->SSLPri;
        }
        if (!Utils::isUnset($request->SSLProtocol)) {
            $query['SSLProtocol'] = $request->SSLProtocol;
        }
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDcdnDomainCertificate',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDcdnDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param SetDcdnDomainCertificateRequest $request SetDcdnDomainCertificateRequest
     *
     * @return SetDcdnDomainCertificateResponse SetDcdnDomainCertificateResponse
     */
    public function setDcdnDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param SetDcdnDomainSMCertificateRequest $request SetDcdnDomainSMCertificateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDcdnDomainSMCertificateResponse SetDcdnDomainSMCertificateResponse
     */
    public function setDcdnDomainSMCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certIdentifier)) {
            $query['CertIdentifier'] = $request->certIdentifier;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->SSLProtocol)) {
            $query['SSLProtocol'] = $request->SSLProtocol;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDcdnDomainSMCertificate',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDcdnDomainSMCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param SetDcdnDomainSMCertificateRequest $request SetDcdnDomainSMCertificateRequest
     *
     * @return SetDcdnDomainSMCertificateResponse SetDcdnDomainSMCertificateResponse
     */
    public function setDcdnDomainSMCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainSMCertificateWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 30.
     *   *
     * @param SetDcdnDomainStagingConfigRequest $request SetDcdnDomainStagingConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDcdnDomainStagingConfigResponse SetDcdnDomainStagingConfigResponse
     */
    public function setDcdnDomainStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDcdnDomainStagingConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDcdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 30.
     *   *
     * @param SetDcdnDomainStagingConfigRequest $request SetDcdnDomainStagingConfigRequest
     *
     * @return SetDcdnDomainStagingConfigResponse SetDcdnDomainStagingConfigResponse
     */
    public function setDcdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second.
     *   *
     * @param SetDcdnUserConfigRequest $request SetDcdnUserConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDcdnUserConfigResponse SetDcdnUserConfigResponse
     */
    public function setDcdnUserConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->functionId)) {
            $query['FunctionId'] = $request->functionId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDcdnUserConfig',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDcdnUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second.
     *   *
     * @param SetDcdnUserConfigRequest $request SetDcdnUserConfigRequest
     *
     * @return SetDcdnUserConfigResponse SetDcdnUserConfigResponse
     */
    public function setDcdnUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnUserConfigWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Each subdomain is globally unique. Resource Access Management (RAM) users cannot create duplicate subdomains.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param SetRoutineSubdomainRequest $tmpReq  SetRoutineSubdomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetRoutineSubdomainResponse SetRoutineSubdomainResponse
     */
    public function setRoutineSubdomainWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetRoutineSubdomainShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subdomains)) {
            $request->subdomainsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subdomains, 'Subdomains', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->subdomainsShrink)) {
            $body['Subdomains'] = $request->subdomainsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetRoutineSubdomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRoutineSubdomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Each subdomain is globally unique. Resource Access Management (RAM) users cannot create duplicate subdomains.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param SetRoutineSubdomainRequest $request SetRoutineSubdomainRequest
     *
     * @return SetRoutineSubdomainResponse SetRoutineSubdomainResponse
     */
    public function setRoutineSubdomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRoutineSubdomainWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   If an accelerated domain is in an invalid state or your account has an overdue payment, the accelerated domain cannot be enabled.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param StartDcdnDomainRequest $request StartDcdnDomainRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDcdnDomainResponse StartDcdnDomainResponse
     */
    public function startDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   If an accelerated domain is in an invalid state or your account has an overdue payment, the accelerated domain cannot be enabled.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param StartDcdnDomainRequest $request StartDcdnDomainRequest
     *
     * @return StartDcdnDomainResponse StartDcdnDomainResponse
     */
    public function startDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   The maximum number of times that users can call this operation per second is 20.
     *   * *   If an accelerated domain is in an invalid state or your account has an overdue payment, the accelerated domain cannot be enabled.
     *   *
     * @param StartDcdnIpaDomainRequest $request StartDcdnIpaDomainRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDcdnIpaDomainResponse StartDcdnIpaDomainResponse
     */
    public function startDcdnIpaDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDcdnIpaDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   The maximum number of times that users can call this operation per second is 20.
     *   * *   If an accelerated domain is in an invalid state or your account has an overdue payment, the accelerated domain cannot be enabled.
     *   *
     * @param StartDcdnIpaDomainRequest $request StartDcdnIpaDomainRequest
     *
     * @return StartDcdnIpaDomainResponse StartDcdnIpaDomainResponse
     */
    public function startDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   After the accelerated domain is disabled, Dynamic Route for CDN retains its information and reroutes all the requests that are destined for the accelerated domain to the origin.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param StopDcdnDomainRequest $request StopDcdnDomainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDcdnDomainResponse StopDcdnDomainResponse
     */
    public function stopDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   After the accelerated domain is disabled, Dynamic Route for CDN retains its information and reroutes all the requests that are destined for the accelerated domain to the origin.
     *   * *   The maximum number of times that each user can call this operation per second is 30.
     *   *
     * @param StopDcdnDomainRequest $request StopDcdnDomainRequest
     *
     * @return StopDcdnDomainResponse StopDcdnDomainResponse
     */
    public function stopDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   The maximum number of times that users can call this operation per second is 20.
     *   * *   If you disable an accelerated domain, the configurations of the accelerated domain are still retained. The system automatically forwards all the requests that are destined for this domain to the origin.
     *   *
     * @param StopDcdnIpaDomainRequest $request StopDcdnIpaDomainRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDcdnIpaDomainResponse StopDcdnIpaDomainResponse
     */
    public function stopDcdnIpaDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDcdnIpaDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   The maximum number of times that users can call this operation per second is 20.
     *   * *   If you disable an accelerated domain, the configurations of the accelerated domain are still retained. The system automatically forwards all the requests that are destined for this domain to the origin.
     *   *
     * @param StopDcdnIpaDomainRequest $request StopDcdnIpaDomainRequest
     *
     * @return StopDcdnIpaDomainResponse StopDcdnIpaDomainResponse
     */
    public function stopDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * >  You can call this API operation up to 100 times per second per account.
     *   *
     * @param TagDcdnResourcesRequest $request TagDcdnResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return TagDcdnResourcesResponse TagDcdnResourcesResponse
     */
    public function tagDcdnResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagDcdnResources',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagDcdnResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this API operation up to 100 times per second per account.
     *   *
     * @param TagDcdnResourcesRequest $request TagDcdnResourcesRequest
     *
     * @return TagDcdnResourcesResponse TagDcdnResourcesResponse
     */
    public function tagDcdnResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagDcdnResourcesWithOptions($request, $runtime);
    }

    /**
     * >  You can call this API operation up to 100 times per second per account.
     *   *
     * @param UntagDcdnResourcesRequest $request UntagDcdnResourcesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagDcdnResourcesResponse UntagDcdnResourcesResponse
     */
    public function untagDcdnResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagDcdnResources',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagDcdnResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this API operation up to 100 times per second per account.
     *   *
     * @param UntagDcdnResourcesRequest $request UntagDcdnResourcesRequest
     *
     * @return UntagDcdnResourcesResponse UntagDcdnResourcesResponse
     */
    public function untagDcdnResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagDcdnResourcesWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param UpdateDcdnDeliverTaskRequest $request UpdateDcdnDeliverTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDcdnDeliverTaskResponse UpdateDcdnDeliverTaskResponse
     */
    public function updateDcdnDeliverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deliver)) {
            $body['Deliver'] = $request->deliver;
        }
        if (!Utils::isUnset($request->deliverId)) {
            $body['DeliverId'] = $request->deliverId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->reports)) {
            $body['Reports'] = $request->reports;
        }
        if (!Utils::isUnset($request->schedule)) {
            $body['Schedule'] = $request->schedule;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDcdnDeliverTask',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDcdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param UpdateDcdnDeliverTaskRequest $request UpdateDcdnDeliverTaskRequest
     *
     * @return UpdateDcdnDeliverTaskResponse UpdateDcdnDeliverTaskResponse
     */
    public function updateDcdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param UpdateDcdnDomainRequest $request UpdateDcdnDomainRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDcdnDomainResponse UpdateDcdnDomainResponse
     */
    public function updateDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 30 times per second per account.
     *   *
     * @param UpdateDcdnDomainRequest $request UpdateDcdnDomainRequest
     *
     * @return UpdateDcdnDomainResponse UpdateDcdnDomainResponse
     */
    public function updateDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param UpdateDcdnIpaDomainRequest $request UpdateDcdnIpaDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDcdnIpaDomainResponse UpdateDcdnIpaDomainResponse
     */
    public function updateDcdnIpaDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        if (!Utils::isUnset($request->topLevelDomain)) {
            $query['TopLevelDomain'] = $request->topLevelDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDcdnIpaDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that users can call this operation per second is 20.
     *   *
     * @param UpdateDcdnIpaDomainRequest $request UpdateDcdnIpaDomainRequest
     *
     * @return UpdateDcdnIpaDomainResponse UpdateDcdnIpaDomainResponse
     */
    public function updateDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param UpdateDcdnSLSRealtimeLogDeliveryRequest $request UpdateDcdnSLSRealtimeLogDeliveryRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDcdnSLSRealtimeLogDeliveryResponse UpdateDcdnSLSRealtimeLogDeliveryResponse
     */
    public function updateDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataCenter)) {
            $body['DataCenter'] = $request->dataCenter;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->SLSLogStore)) {
            $body['SLSLogStore'] = $request->SLSLogStore;
        }
        if (!Utils::isUnset($request->SLSProject)) {
            $body['SLSProject'] = $request->SLSProject;
        }
        if (!Utils::isUnset($request->SLSRegion)) {
            $body['SLSRegion'] = $request->SLSRegion;
        }
        if (!Utils::isUnset($request->samplingRate)) {
            $body['SamplingRate'] = $request->samplingRate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDcdnSLSRealtimeLogDelivery',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDcdnSLSRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param UpdateDcdnSLSRealtimeLogDeliveryRequest $request UpdateDcdnSLSRealtimeLogDeliveryRequest
     *
     * @return UpdateDcdnSLSRealtimeLogDeliveryResponse UpdateDcdnSLSRealtimeLogDeliveryResponse
     */
    public function updateDcdnSLSRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param UpdateDcdnSubTaskRequest $request UpdateDcdnSubTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDcdnSubTaskResponse UpdateDcdnSubTaskResponse
     */
    public function updateDcdnSubTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->reportIds)) {
            $body['ReportIds'] = $request->reportIds;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDcdnSubTask',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDcdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to three times per second per account.
     *   *
     * @param UpdateDcdnSubTaskRequest $request UpdateDcdnSubTaskRequest
     *
     * @return UpdateDcdnSubTaskResponse UpdateDcdnSubTaskResponse
     */
    public function updateDcdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param UpdateDcdnUserRealTimeDeliveryFieldRequest $request UpdateDcdnUserRealTimeDeliveryFieldRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDcdnUserRealTimeDeliveryFieldResponse UpdateDcdnUserRealTimeDeliveryFieldResponse
     */
    public function updateDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDcdnUserRealTimeDeliveryField',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDcdnUserRealTimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  You can call this operation up to 100 times per second per account.
     *   *
     * @param UpdateDcdnUserRealTimeDeliveryFieldRequest $request UpdateDcdnUserRealTimeDeliveryFieldRequest
     *
     * @return UpdateDcdnUserRealTimeDeliveryFieldResponse UpdateDcdnUserRealTimeDeliveryFieldResponse
     */
    public function updateDcdnUserRealTimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Each time you submit code, a version of the code is generated. You can manage and publish code by version.
     *   * *   Each routine can retain at most 10 versions. If the upper limit is reached, you must call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param UploadRoutineCodeRequest $request UploadRoutineCodeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadRoutineCodeResponse UploadRoutineCodeResponse
     */
    public function uploadRoutineCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadRoutineCode',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadRoutineCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Each time you submit code, a version of the code is generated. You can manage and publish code by version.
     *   * *   Each routine can retain at most 10 versions. If the upper limit is reached, you must call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     *   * *   You can call this operation up to 100 times per second per account.
     *   *
     * @param UploadRoutineCodeRequest $request UploadRoutineCodeRequest
     *
     * @return UploadRoutineCodeResponse UploadRoutineCodeResponse
     */
    public function uploadRoutineCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRoutineCodeWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   Each time you upload code to a routine, a version is generated. The number of versions is counted by CodeRev. The uploaded code is used only for testing.
     *   * *   The code is automatically published to a staging environment.
     *   * *   Each routine can retain at most 10 versions. If the upper limit is reached, you must call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     *   * *   The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param UploadStagingRoutineCodeRequest $request UploadStagingRoutineCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadStagingRoutineCodeResponse UploadStagingRoutineCodeResponse
     */
    public function uploadStagingRoutineCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadStagingRoutineCode',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadStagingRoutineCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   Each time you upload code to a routine, a version is generated. The number of versions is counted by CodeRev. The uploaded code is used only for testing.
     *   * *   The code is automatically published to a staging environment.
     *   * *   Each routine can retain at most 10 versions. If the upper limit is reached, you must call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     *   * *   The call frequency of the API is no more than 100 queries per second.
     *   *
     * @param UploadStagingRoutineCodeRequest $request UploadStagingRoutineCodeRequest
     *
     * @return UploadStagingRoutineCodeResponse UploadStagingRoutineCodeResponse
     */
    public function uploadStagingRoutineCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStagingRoutineCodeWithOptions($request, $runtime);
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param VerifyDcdnDomainOwnerRequest $request VerifyDcdnDomainOwnerRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyDcdnDomainOwnerResponse VerifyDcdnDomainOwnerResponse
     */
    public function verifyDcdnDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $query['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyDcdnDomainOwner',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyDcdnDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The maximum number of times that each user can call this operation per second is 100.
     *   *
     * @param VerifyDcdnDomainOwnerRequest $request VerifyDcdnDomainOwnerRequest
     *
     * @return VerifyDcdnDomainOwnerResponse VerifyDcdnDomainOwnerResponse
     */
    public function verifyDcdnDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDcdnDomainOwnerWithOptions($request, $runtime);
    }
}
