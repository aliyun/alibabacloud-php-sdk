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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnIpaDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnIpaDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnWafDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnWafDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStartDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStartDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStopDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStopDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CheckDcdnProjectExistRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CheckDcdnProjectExistResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CommitStagingRoutineCodeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CommitStagingRoutineCodeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnCertificateSigningRequestRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnCertificateSigningRequestResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateWasmRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateWasmResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDeliverTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDeliverTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnRealTimeLogProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnRealTimeLogProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSubTaskRequest;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteWasmCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteWasmCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteWasmRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteWasmResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigGroupDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigGroupDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigOfVersionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigOfVersionResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnEsExceptionDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnEsExceptionDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnEsExecuteDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnEsExecuteDataResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSubListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSubListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserCertificateExpireCountRequest;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserTagsRequest;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCanaryEnvsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCanaryEnvsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineSpecRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineSpecResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineUserInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineUserInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnIpaStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnIpaStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserErStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserErStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserLogserviceStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserLogserviceStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeWasmRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeWasmResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeWasmUserInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeWasmUserInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditRoutineConfRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditRoutineConfResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditRoutineConfShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditWasmConfRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EditWasmConfResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCachesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCachesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RollbackDcdnStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RollbackDcdnStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnConfigOfVersionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnConfigOfVersionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCSRCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCSRCertificateResponse;
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
     * @param AddDcdnDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddDcdnDomainResponse
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
     * @param AddDcdnDomainRequest $request
     *
     * @return AddDcdnDomainResponse
     */
    public function addDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddDcdnIpaDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddDcdnIpaDomainResponse
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
     * @param AddDcdnIpaDomainRequest $request
     *
     * @return AddDcdnIpaDomainResponse
     */
    public function addDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddDcdnDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchAddDcdnDomainResponse
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
     * @param BatchAddDcdnDomainRequest $request
     *
     * @return BatchAddDcdnDomainResponse
     */
    public function batchAddDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchCreateDcdnWafRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchCreateDcdnWafRulesResponse
     */
    public function batchCreateDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->ruleConfigs)) {
            $body['RuleConfigs'] = $request->ruleConfigs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param BatchCreateDcdnWafRulesRequest $request
     *
     * @return BatchCreateDcdnWafRulesResponse
     */
    public function batchCreateDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchDeleteDcdnDomainConfigsResponse
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
     * @param BatchDeleteDcdnDomainConfigsRequest $request
     *
     * @return BatchDeleteDcdnDomainConfigsResponse
     */
    public function batchDeleteDcdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDcdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteDcdnWafRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchDeleteDcdnWafRulesResponse
     */
    public function batchDeleteDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleIds)) {
            $body['RuleIds'] = $request->ruleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param BatchDeleteDcdnWafRulesRequest $request
     *
     * @return BatchDeleteDcdnWafRulesResponse
     */
    public function batchDeleteDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetDcdnDomainCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchSetDcdnDomainCertificateResponse
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
     * @param BatchSetDcdnDomainCertificateRequest $request
     *
     * @return BatchSetDcdnDomainCertificateResponse
     */
    public function batchSetDcdnDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchSetDcdnDomainConfigsResponse
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
     * @param BatchSetDcdnDomainConfigsRequest $request
     *
     * @return BatchSetDcdnDomainConfigsResponse
     */
    public function batchSetDcdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetDcdnIpaDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchSetDcdnIpaDomainConfigsResponse
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
     * @param BatchSetDcdnIpaDomainConfigsRequest $request
     *
     * @return BatchSetDcdnIpaDomainConfigsResponse
     */
    public function batchSetDcdnIpaDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnIpaDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetDcdnWafDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchSetDcdnWafDomainConfigsResponse
     */
    public function batchSetDcdnWafDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->defenseStatus)) {
            $body['DefenseStatus'] = $request->defenseStatus;
        }
        if (!Utils::isUnset($request->domainNames)) {
            $body['DomainNames'] = $request->domainNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param BatchSetDcdnWafDomainConfigsRequest $request
     *
     * @return BatchSetDcdnWafDomainConfigsResponse
     */
    public function batchSetDcdnWafDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetDcdnWafDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartDcdnDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchStartDcdnDomainResponse
     */
    public function batchStartDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
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
            'action'      => 'BatchStartDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStartDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStartDcdnDomainRequest $request
     *
     * @return BatchStartDcdnDomainResponse
     */
    public function batchStartDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopDcdnDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStopDcdnDomainResponse
     */
    public function batchStopDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
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
            'action'      => 'BatchStopDcdnDomain',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStopDcdnDomainRequest $request
     *
     * @return BatchStopDcdnDomainResponse
     */
    public function batchStopDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param CheckDcdnProjectExistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckDcdnProjectExistResponse
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
     * @param CheckDcdnProjectExistRequest $request
     *
     * @return CheckDcdnProjectExistResponse
     */
    public function checkDcdnProjectExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDcdnProjectExistWithOptions($request, $runtime);
    }

    /**
     * @param CommitStagingRoutineCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CommitStagingRoutineCodeResponse
     */
    public function commitStagingRoutineCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CommitStagingRoutineCodeRequest $request
     *
     * @return CommitStagingRoutineCodeResponse
     */
    public function commitStagingRoutineCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitStagingRoutineCodeWithOptions($request, $runtime);
    }

    /**
     * @param CreateDcdnCertificateSigningRequestRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateDcdnCertificateSigningRequestResponse
     */
    public function createDcdnCertificateSigningRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->commonName)) {
            $query['CommonName'] = $request->commonName;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->organization)) {
            $query['Organization'] = $request->organization;
        }
        if (!Utils::isUnset($request->organizationUnit)) {
            $query['OrganizationUnit'] = $request->organizationUnit;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->SANs)) {
            $query['SANs'] = $request->SANs;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDcdnCertificateSigningRequest',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDcdnCertificateSigningRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDcdnCertificateSigningRequestRequest $request
     *
     * @return CreateDcdnCertificateSigningRequestResponse
     */
    public function createDcdnCertificateSigningRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnCertificateSigningRequestWithOptions($request, $runtime);
    }

    /**
     * @param CreateDcdnDeliverTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDcdnDeliverTaskResponse
     */
    public function createDcdnDeliverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateDcdnDeliverTaskRequest $request
     *
     * @return CreateDcdnDeliverTaskResponse
     */
    public function createDcdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDcdnSLSRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateDcdnSLSRealTimeLogDeliveryResponse
     */
    public function createDcdnSLSRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateDcdnSLSRealTimeLogDeliveryRequest $request
     *
     * @return CreateDcdnSLSRealTimeLogDeliveryResponse
     */
    public function createDcdnSLSRealTimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnSLSRealTimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param CreateDcdnSubTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDcdnSubTaskResponse
     */
    public function createDcdnSubTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->reportIds)) {
            $body['ReportIds'] = $request->reportIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateDcdnSubTaskRequest $request
     *
     * @return CreateDcdnSubTaskResponse
     */
    public function createDcdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDcdnWafPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDcdnWafPolicyResponse
     */
    public function createDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateDcdnWafPolicyRequest $request
     *
     * @return CreateDcdnWafPolicyResponse
     */
    public function createDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CreateRoutineRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRoutineResponse
     */
    public function createRoutineWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRoutineShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envConf)) {
            $request->envConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envConf, 'EnvConf', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateRoutineRequest $request
     *
     * @return CreateRoutineResponse
     */
    public function createRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineWithOptions($request, $runtime);
    }

    /**
     * @param CreateSlrAndSlsProjectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSlrAndSlsProjectResponse
     */
    public function createSlrAndSlsProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param CreateSlrAndSlsProjectRequest $request
     *
     * @return CreateSlrAndSlsProjectResponse
     */
    public function createSlrAndSlsProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrAndSlsProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateWasmRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateWasmResponse
     */
    public function createWasmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWasm',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWasmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWasmRequest $request
     *
     * @return CreateWasmResponse
     */
    public function createWasm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWasmWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnDeliverTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDcdnDeliverTaskResponse
     */
    public function deleteDcdnDeliverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverId)) {
            $query['DeliverId'] = $request->deliverId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DeleteDcdnDeliverTaskRequest $request
     *
     * @return DeleteDcdnDeliverTaskResponse
     */
    public function deleteDcdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDcdnDomainResponse
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
     * @param DeleteDcdnDomainRequest $request
     *
     * @return DeleteDcdnDomainResponse
     */
    public function deleteDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnIpaDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDcdnIpaDomainResponse
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
     * @param DeleteDcdnIpaDomainRequest $request
     *
     * @return DeleteDcdnIpaDomainResponse
     */
    public function deleteDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnIpaSpecificConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteDcdnIpaSpecificConfigResponse
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
     * @param DeleteDcdnIpaSpecificConfigRequest $request
     *
     * @return DeleteDcdnIpaSpecificConfigResponse
     */
    public function deleteDcdnIpaSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnIpaSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnRealTimeLogProjectRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteDcdnRealTimeLogProjectResponse
     */
    public function deleteDcdnRealTimeLogProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DeleteDcdnRealTimeLogProjectRequest $request
     *
     * @return DeleteDcdnRealTimeLogProjectResponse
     */
    public function deleteDcdnRealTimeLogProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnRealTimeLogProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnSpecificConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDcdnSpecificConfigResponse
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
     * @param DeleteDcdnSpecificConfigRequest $request
     *
     * @return DeleteDcdnSpecificConfigResponse
     */
    public function deleteDcdnSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnSpecificStagingConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteDcdnSpecificStagingConfigResponse
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
     * @param DeleteDcdnSpecificStagingConfigRequest $request
     *
     * @return DeleteDcdnSpecificStagingConfigResponse
     */
    public function deleteDcdnSpecificStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSpecificStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnSubTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDcdnSubTaskResponse
     */
    public function deleteDcdnSubTaskWithOptions($request, $runtime)
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
     * @param DeleteDcdnSubTaskRequest $request
     *
     * @return DeleteDcdnSubTaskResponse
     */
    public function deleteDcdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDcdnWafPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDcdnWafPolicyResponse
     */
    public function deleteDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param DeleteDcdnWafPolicyRequest $request
     *
     * @return DeleteDcdnWafPolicyResponse
     */
    public function deleteDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoutineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRoutineResponse
     */
    public function deleteRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param DeleteRoutineRequest $request
     *
     * @return DeleteRoutineResponse
     */
    public function deleteRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoutineCodeRevisionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRoutineCodeRevisionResponse
     */
    public function deleteRoutineCodeRevisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->selectCodeRevision)) {
            $body['SelectCodeRevision'] = $request->selectCodeRevision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param DeleteRoutineCodeRevisionRequest $request
     *
     * @return DeleteRoutineCodeRevisionResponse
     */
    public function deleteRoutineCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRoutineConfEnvsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRoutineConfEnvsResponse
     */
    public function deleteRoutineConfEnvsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRoutineConfEnvsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envs)) {
            $request->envsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envs, 'Envs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->envsShrink)) {
            $body['Envs'] = $request->envsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param DeleteRoutineConfEnvsRequest $request
     *
     * @return DeleteRoutineConfEnvsResponse
     */
    public function deleteRoutineConfEnvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineConfEnvsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWasmRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteWasmResponse
     */
    public function deleteWasmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWasm',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWasmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWasmRequest $request
     *
     * @return DeleteWasmResponse
     */
    public function deleteWasm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWasmWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWasmCodeRevisionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWasmCodeRevisionResponse
     */
    public function deleteWasmCodeRevisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->selectCodeRevision)) {
            $body['SelectCodeRevision'] = $request->selectCodeRevision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWasmCodeRevision',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWasmCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWasmCodeRevisionRequest $request
     *
     * @return DeleteWasmCodeRevisionResponse
     */
    public function deleteWasmCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWasmCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnAclFieldsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnAclFieldsResponse
     */
    public function describeDcdnAclFieldsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnAclFieldsRequest $request
     *
     * @return DescribeDcdnAclFieldsResponse
     */
    public function describeDcdnAclFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnAclFieldsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnBgpBpsDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnBgpBpsDataResponse
     */
    public function describeDcdnBgpBpsDataWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnBgpBpsDataRequest $request
     *
     * @return DescribeDcdnBgpBpsDataResponse
     */
    public function describeDcdnBgpBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnBgpBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnBgpTrafficDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnBgpTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnBgpTrafficDataRequest $request
     *
     * @return DescribeDcdnBgpTrafficDataResponse
     */
    public function describeDcdnBgpTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnBgpTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnBlockedRegionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnBlockedRegionsResponse
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
     * @param DescribeDcdnBlockedRegionsRequest $request
     *
     * @return DescribeDcdnBlockedRegionsResponse
     */
    public function describeDcdnBlockedRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnBlockedRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnCertificateDetailResponse
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
     * @param DescribeDcdnCertificateDetailRequest $request
     *
     * @return DescribeDcdnCertificateDetailResponse
     */
    public function describeDcdnCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnCertificateListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnCertificateListResponse
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
     * @param DescribeDcdnCertificateListRequest $request
     *
     * @return DescribeDcdnCertificateListResponse
     */
    public function describeDcdnCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnConfigGroupDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnConfigGroupDetailResponse
     */
    public function describeDcdnConfigGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configGroupId)) {
            $query['ConfigGroupId'] = $request->configGroupId;
        }
        if (!Utils::isUnset($request->configGroupName)) {
            $query['ConfigGroupName'] = $request->configGroupName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnConfigGroupDetail',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnConfigGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnConfigGroupDetailRequest $request
     *
     * @return DescribeDcdnConfigGroupDetailResponse
     */
    public function describeDcdnConfigGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnConfigGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnConfigOfVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnConfigOfVersionResponse
     */
    public function describeDcdnConfigOfVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionId)) {
            $query['FunctionId'] = $request->functionId;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnConfigOfVersion',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnConfigOfVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnConfigOfVersionRequest $request
     *
     * @return DescribeDcdnConfigOfVersionResponse
     */
    public function describeDcdnConfigOfVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnConfigOfVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDeletedDomainsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnDeletedDomainsResponse
     */
    public function describeDcdnDeletedDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDeletedDomainsRequest $request
     *
     * @return DescribeDcdnDeletedDomainsResponse
     */
    public function describeDcdnDeletedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDeletedDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDeliverListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnDeliverListResponse
     */
    public function describeDcdnDeliverListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deliverId)) {
            $query['DeliverId'] = $request->deliverId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDeliverListRequest $request
     *
     * @return DescribeDcdnDeliverListResponse
     */
    public function describeDcdnDeliverList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDeliverListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainBpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainBpsDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainBpsDataRequest $request
     *
     * @return DescribeDcdnDomainBpsDataResponse
     */
    public function describeDcdnDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainBpsDataByLayerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainBpsDataByLayerResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainBpsDataByLayerRequest $request
     *
     * @return DescribeDcdnDomainBpsDataByLayerResponse
     */
    public function describeDcdnDomainBpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainBpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainByCertificateRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainByCertificateResponse
     */
    public function describeDcdnDomainByCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
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
     * @param DescribeDcdnDomainByCertificateRequest $request
     *
     * @return DescribeDcdnDomainByCertificateResponse
     */
    public function describeDcdnDomainByCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainByCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainCcActivityLogRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainCcActivityLogResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainCcActivityLogRequest $request
     *
     * @return DescribeDcdnDomainCcActivityLogResponse
     */
    public function describeDcdnDomainCcActivityLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainCcActivityLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainCertificateInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainCertificateInfoResponse
     */
    public function describeDcdnDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainCertificateInfoRequest $request
     *
     * @return DescribeDcdnDomainCertificateInfoResponse
     */
    public function describeDcdnDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainCnameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnDomainCnameResponse
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
     * @param DescribeDcdnDomainCnameRequest $request
     *
     * @return DescribeDcdnDomainCnameResponse
     */
    public function describeDcdnDomainCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainCnameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainConfigsResponse
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
     * @param DescribeDcdnDomainConfigsRequest $request
     *
     * @return DescribeDcdnDomainConfigsResponse
     */
    public function describeDcdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainDetailResponse
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
     * @param DescribeDcdnDomainDetailRequest $request
     *
     * @return DescribeDcdnDomainDetailResponse
     */
    public function describeDcdnDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainHitRateDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainHitRateDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainHitRateDataRequest $request
     *
     * @return DescribeDcdnDomainHitRateDataResponse
     */
    public function describeDcdnDomainHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainHttpCodeDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDcdnDomainHttpCodeDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainHttpCodeDataRequest $request
     *
     * @return DescribeDcdnDomainHttpCodeDataResponse
     */
    public function describeDcdnDomainHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainHttpCodeDataByLayerRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnDomainHttpCodeDataByLayerResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainHttpCodeDataByLayerRequest $request
     *
     * @return DescribeDcdnDomainHttpCodeDataByLayerResponse
     */
    public function describeDcdnDomainHttpCodeDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainHttpCodeDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainIpaBpsDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnDomainIpaBpsDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainIpaBpsDataRequest $request
     *
     * @return DescribeDcdnDomainIpaBpsDataResponse
     */
    public function describeDcdnDomainIpaBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIpaBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainIpaTrafficDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainIpaTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainIpaTrafficDataRequest $request
     *
     * @return DescribeDcdnDomainIpaTrafficDataResponse
     */
    public function describeDcdnDomainIpaTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIpaTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainIspDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainIspDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainIspDataRequest $request
     *
     * @return DescribeDcdnDomainIspDataResponse
     */
    public function describeDcdnDomainIspData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIspDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnDomainLogResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainLogRequest $request
     *
     * @return DescribeDcdnDomainLogResponse
     */
    public function describeDcdnDomainLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainMultiUsageDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainMultiUsageDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainMultiUsageDataRequest $request
     *
     * @return DescribeDcdnDomainMultiUsageDataResponse
     */
    public function describeDcdnDomainMultiUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainMultiUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainOriginBpsDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainOriginBpsDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainOriginBpsDataRequest $request
     *
     * @return DescribeDcdnDomainOriginBpsDataResponse
     */
    public function describeDcdnDomainOriginBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainOriginBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainOriginTrafficDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDcdnDomainOriginTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainOriginTrafficDataRequest $request
     *
     * @return DescribeDcdnDomainOriginTrafficDataResponse
     */
    public function describeDcdnDomainOriginTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainOriginTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainPropertyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnDomainPropertyResponse
     */
    public function describeDcdnDomainPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainPropertyRequest $request
     *
     * @return DescribeDcdnDomainPropertyResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainQpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainQpsDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainQpsDataRequest $request
     *
     * @return DescribeDcdnDomainQpsDataResponse
     */
    public function describeDcdnDomainQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainQpsDataByLayerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainQpsDataByLayerResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainQpsDataByLayerRequest $request
     *
     * @return DescribeDcdnDomainQpsDataByLayerResponse
     */
    public function describeDcdnDomainQpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainQpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainRealTimeBpsDataResponse
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
     * @param DescribeDcdnDomainRealTimeBpsDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeBpsDataResponse
     */
    public function describeDcdnDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeDcdnDomainRealTimeByteHitRateDataResponse
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
     * @param DescribeDcdnDomainRealTimeByteHitRateDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeByteHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeByteHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeDetailDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDcdnDomainRealTimeDetailDataResponse
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
     * @param DescribeDcdnDomainRealTimeDetailDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeDetailDataResponse
     */
    public function describeDcdnDomainRealTimeDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeDetailDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDcdnDomainRealTimeHttpCodeDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainRealTimeHttpCodeDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainRealTimeQpsDataResponse
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
     * @param DescribeDcdnDomainRealTimeQpsDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeQpsDataResponse
     */
    public function describeDcdnDomainRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDcdnDomainRealTimeReqHitRateDataResponse
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
     * @param DescribeDcdnDomainRealTimeReqHitRateDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeReqHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeSrcBpsDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDcdnDomainRealTimeSrcBpsDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainRealTimeSrcBpsDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeSrcBpsDataResponse
     */
    public function describeDcdnDomainRealTimeSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeSrcHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeSrcTrafficDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainRealTimeSrcTrafficDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnDomainRealTimeTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainRealTimeTrafficDataRequest $request
     *
     * @return DescribeDcdnDomainRealTimeTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainRegionDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnDomainRegionDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainRegionDataRequest $request
     *
     * @return DescribeDcdnDomainRegionDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainTopReferVisitRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainTopReferVisitResponse
     */
    public function describeDcdnDomainTopReferVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainTopReferVisitRequest $request
     *
     * @return DescribeDcdnDomainTopReferVisitResponse
     */
    public function describeDcdnDomainTopReferVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainTopReferVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainTopUrlVisitRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainTopUrlVisitResponse
     */
    public function describeDcdnDomainTopUrlVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainTopUrlVisitRequest $request
     *
     * @return DescribeDcdnDomainTopUrlVisitResponse
     */
    public function describeDcdnDomainTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainTrafficDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainTrafficDataRequest $request
     *
     * @return DescribeDcdnDomainTrafficDataResponse
     */
    public function describeDcdnDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainUsageDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnDomainUsageDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
     * @param DescribeDcdnDomainUsageDataRequest $request
     *
     * @return DescribeDcdnDomainUsageDataResponse
     */
    public function describeDcdnDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainUvDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainUvDataRequest $request
     *
     * @return DescribeDcdnDomainUvDataResponse
     */
    public function describeDcdnDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainWebsocketBpsDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDcdnDomainWebsocketBpsDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainWebsocketBpsDataRequest $request
     *
     * @return DescribeDcdnDomainWebsocketBpsDataResponse
     */
    public function describeDcdnDomainWebsocketBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainWebsocketBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainWebsocketHttpCodeDataRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeDcdnDomainWebsocketHttpCodeDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainWebsocketHttpCodeDataRequest $request
     *
     * @return DescribeDcdnDomainWebsocketHttpCodeDataResponse
     */
    public function describeDcdnDomainWebsocketHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainWebsocketHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnDomainWebsocketTrafficDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDcdnDomainWebsocketTrafficDataResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnDomainWebsocketTrafficDataRequest $request
     *
     * @return DescribeDcdnDomainWebsocketTrafficDataResponse
     */
    public function describeDcdnDomainWebsocketTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainWebsocketTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnEsExceptionDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnEsExceptionDataResponse
     */
    public function describeDcdnEsExceptionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnEsExceptionData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnEsExceptionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnEsExceptionDataRequest $request
     *
     * @return DescribeDcdnEsExceptionDataResponse
     */
    public function describeDcdnEsExceptionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnEsExceptionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnEsExecuteDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnEsExecuteDataResponse
     */
    public function describeDcdnEsExecuteDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDcdnEsExecuteData',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDcdnEsExecuteDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDcdnEsExecuteDataRequest $request
     *
     * @return DescribeDcdnEsExecuteDataResponse
     */
    public function describeDcdnEsExecuteData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnEsExecuteDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnHttpsDomainListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnHttpsDomainListResponse
     */
    public function describeDcdnHttpsDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
     * @param DescribeDcdnHttpsDomainListRequest $request
     *
     * @return DescribeDcdnHttpsDomainListResponse
     */
    public function describeDcdnHttpsDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnHttpsDomainListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnIpInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnIpInfoResponse
     */
    public function describeDcdnIpInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->IP)) {
            $query['IP'] = $request->IP;
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
     * @param DescribeDcdnIpInfoRequest $request
     *
     * @return DescribeDcdnIpInfoResponse
     */
    public function describeDcdnIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnIpaDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnIpaDomainConfigsResponse
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
     * @param DescribeDcdnIpaDomainConfigsRequest $request
     *
     * @return DescribeDcdnIpaDomainConfigsResponse
     */
    public function describeDcdnIpaDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnIpaDomainDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnIpaDomainDetailResponse
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
     * @param DescribeDcdnIpaDomainDetailRequest $request
     *
     * @return DescribeDcdnIpaDomainDetailResponse
     */
    public function describeDcdnIpaDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnIpaServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnIpaServiceResponse
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
     * @param DescribeDcdnIpaServiceRequest $request
     *
     * @return DescribeDcdnIpaServiceResponse
     */
    public function describeDcdnIpaService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnIpaUserDomainsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnIpaUserDomainsResponse
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
     * @param DescribeDcdnIpaUserDomainsRequest $request
     *
     * @return DescribeDcdnIpaUserDomainsResponse
     */
    public function describeDcdnIpaUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnRealTimeDeliveryFieldRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnRealTimeDeliveryFieldResponse
     */
    public function describeDcdnRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnRealTimeDeliveryFieldRequest $request
     *
     * @return DescribeDcdnRealTimeDeliveryFieldResponse
     */
    public function describeDcdnRealTimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRealTimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnRefreshQuotaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRefreshQuotaResponse
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
     * @param DescribeDcdnRefreshQuotaRequest $request
     *
     * @return DescribeDcdnRefreshQuotaResponse
     */
    public function describeDcdnRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnRefreshTaskByIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnRefreshTaskByIdResponse
     */
    public function describeDcdnRefreshTaskByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnRefreshTaskByIdRequest $request
     *
     * @return DescribeDcdnRefreshTaskByIdResponse
     */
    public function describeDcdnRefreshTaskById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRefreshTaskByIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnRefreshTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRefreshTasksResponse
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
     * @param DescribeDcdnRefreshTasksRequest $request
     *
     * @return DescribeDcdnRefreshTasksResponse
     */
    public function describeDcdnRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnRegionAndIspRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRegionAndIspResponse
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
     * @param DescribeDcdnRegionAndIspRequest $request
     *
     * @return DescribeDcdnRegionAndIspResponse
     */
    public function describeDcdnRegionAndIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnRegionAndIspWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnReportResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnReportRequest $request
     *
     * @return DescribeDcdnReportResponse
     */
    public function describeDcdnReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnReportListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnReportListResponse
     */
    public function describeDcdnReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnReportListRequest $request
     *
     * @return DescribeDcdnReportListResponse
     */
    public function describeDcdnReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnReportListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnSLSRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDcdnSLSRealtimeLogDeliveryResponse
     */
    public function describeDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnSLSRealtimeLogDeliveryRequest $request
     *
     * @return DescribeDcdnSLSRealtimeLogDeliveryResponse
     */
    public function describeDcdnSLSRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnSMCertificateDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnSMCertificateDetailResponse
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
     * @param DescribeDcdnSMCertificateDetailRequest $request
     *
     * @return DescribeDcdnSMCertificateDetailResponse
     */
    public function describeDcdnSMCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSMCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnSMCertificateListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnSMCertificateListResponse
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
     * @param DescribeDcdnSMCertificateListRequest $request
     *
     * @return DescribeDcdnSMCertificateListResponse
     */
    public function describeDcdnSMCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSMCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnSecFuncInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnSecFuncInfoResponse
     */
    public function describeDcdnSecFuncInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnSecFuncInfoRequest $request
     *
     * @return DescribeDcdnSecFuncInfoResponse
     */
    public function describeDcdnSecFuncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSecFuncInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnSecSpecInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnSecSpecInfoResponse
     */
    public function describeDcdnSecSpecInfoWithOptions($request, $runtime)
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
     * @param DescribeDcdnSecSpecInfoRequest $request
     *
     * @return DescribeDcdnSecSpecInfoResponse
     */
    public function describeDcdnSecSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSecSpecInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnServiceResponse
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
     * @param DescribeDcdnServiceRequest $request
     *
     * @return DescribeDcdnServiceResponse
     */
    public function describeDcdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnStagingIpRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnStagingIpResponse
     */
    public function describeDcdnStagingIpWithOptions($request, $runtime)
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
     * @param DescribeDcdnStagingIpRequest $request
     *
     * @return DescribeDcdnStagingIpResponse
     */
    public function describeDcdnStagingIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnStagingIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnSubListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnSubListResponse
     */
    public function describeDcdnSubListWithOptions($request, $runtime)
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
     * @param DescribeDcdnSubListRequest $request
     *
     * @return DescribeDcdnSubListResponse
     */
    public function describeDcdnSubList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSubListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnTagResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnTagResourcesResponse
     */
    public function describeDcdnTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnTagResourcesRequest $request
     *
     * @return DescribeDcdnTagResourcesResponse
     */
    public function describeDcdnTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnTopDomainsByFlowRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnTopDomainsByFlowResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnTopDomainsByFlowRequest $request
     *
     * @return DescribeDcdnTopDomainsByFlowResponse
     */
    public function describeDcdnTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserBillHistoryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnUserBillHistoryResponse
     */
    public function describeDcdnUserBillHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnUserBillHistoryRequest $request
     *
     * @return DescribeDcdnUserBillHistoryResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnUserCertificateExpireCountRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDcdnUserCertificateExpireCountResponse
     */
    public function describeDcdnUserCertificateExpireCountWithOptions($request, $runtime)
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
     * @param DescribeDcdnUserCertificateExpireCountRequest $request
     *
     * @return DescribeDcdnUserCertificateExpireCountResponse
     */
    public function describeDcdnUserCertificateExpireCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserCertificateExpireCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserConfigsResponse
     */
    public function describeDcdnUserConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnUserConfigsRequest $request
     *
     * @return DescribeDcdnUserConfigsResponse
     */
    public function describeDcdnUserConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserDomainsResponse
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
     * @param DescribeDcdnUserDomainsRequest $request
     *
     * @return DescribeDcdnUserDomainsResponse
     */
    public function describeDcdnUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserDomainsByFuncRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnUserDomainsByFuncResponse
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
     * @param DescribeDcdnUserDomainsByFuncRequest $request
     *
     * @return DescribeDcdnUserDomainsByFuncResponse
     */
    public function describeDcdnUserDomainsByFunc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserDomainsByFuncWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserQuotaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnUserQuotaResponse
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
     * @param DescribeDcdnUserQuotaRequest $request
     *
     * @return DescribeDcdnUserQuotaResponse
     */
    public function describeDcdnUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserRealTimeDeliveryFieldRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnUserRealTimeDeliveryFieldResponse
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
     * @param DescribeDcdnUserRealTimeDeliveryFieldRequest $request
     *
     * @return DescribeDcdnUserRealTimeDeliveryFieldResponse
     */
    public function describeDcdnUserRealTimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserResourcePackageRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnUserResourcePackageResponse
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
     * @param DescribeDcdnUserResourcePackageRequest $request
     *
     * @return DescribeDcdnUserResourcePackageResponse
     */
    public function describeDcdnUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserSecDropRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserSecDropResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnUserSecDropRequest $request
     *
     * @return DescribeDcdnUserSecDropResponse
     */
    public function describeDcdnUserSecDrop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserSecDropWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserSecDropByMinuteRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnUserSecDropByMinuteResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnUserSecDropByMinuteRequest $request
     *
     * @return DescribeDcdnUserSecDropByMinuteResponse
     */
    public function describeDcdnUserSecDropByMinute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserSecDropByMinuteWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnUserTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTagsWithOptions($request, $runtime)
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
     * @param DescribeDcdnUserTagsRequest $request
     *
     * @return DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnVerifyContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnVerifyContentResponse
     */
    public function describeDcdnVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnVerifyContentRequest $request
     *
     * @return DescribeDcdnVerifyContentResponse
     */
    public function describeDcdnVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnVerifyContentWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafDomainRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafDomainResponse
     */
    public function describeDcdnWafDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnWafDomainRequest $request
     *
     * @return DescribeDcdnWafDomainResponse
     */
    public function describeDcdnWafDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafDomainDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnWafDomainDetailResponse
     */
    public function describeDcdnWafDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnWafDomainDetailRequest $request
     *
     * @return DescribeDcdnWafDomainDetailResponse
     */
    public function describeDcdnWafDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafDomainsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnWafDomainsResponse
     */
    public function describeDcdnWafDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnWafDomainsRequest $request
     *
     * @return DescribeDcdnWafDomainsResponse
     */
    public function describeDcdnWafDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafFilterInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnWafFilterInfoResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnWafFilterInfoRequest $request
     *
     * @return DescribeDcdnWafFilterInfoResponse
     */
    public function describeDcdnWafFilterInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafFilterInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafPoliciesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnWafPoliciesResponse
     */
    public function describeDcdnWafPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnWafPoliciesRequest $request
     *
     * @return DescribeDcdnWafPoliciesResponse
     */
    public function describeDcdnWafPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafPolicyResponse
     */
    public function describeDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnWafPolicyRequest $request
     *
     * @return DescribeDcdnWafPolicyResponse
     */
    public function describeDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafPolicyDomainsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnWafPolicyDomainsResponse
     */
    public function describeDcdnWafPolicyDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnWafPolicyDomainsRequest $request
     *
     * @return DescribeDcdnWafPolicyDomainsResponse
     */
    public function describeDcdnWafPolicyDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPolicyDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafPolicyValidDomainsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnWafPolicyValidDomainsResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnWafPolicyValidDomainsRequest $request
     *
     * @return DescribeDcdnWafPolicyValidDomainsResponse
     */
    public function describeDcdnWafPolicyValidDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafPolicyValidDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnWafRuleResponse
     */
    public function describeDcdnWafRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnWafRuleRequest $request
     *
     * @return DescribeDcdnWafRuleResponse
     */
    public function describeDcdnWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDcdnWafRulesResponse
     */
    public function describeDcdnWafRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param DescribeDcdnWafRulesRequest $request
     *
     * @return DescribeDcdnWafRulesResponse
     */
    public function describeDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafScenesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafScenesResponse
     */
    public function describeDcdnWafScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defenseScenes)) {
            $query['DefenseScenes'] = $request->defenseScenes;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param DescribeDcdnWafScenesRequest $request
     *
     * @return DescribeDcdnWafScenesResponse
     */
    public function describeDcdnWafScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafScenesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnWafServiceResponse
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
     * @param DescribeDcdnWafServiceRequest $request
     *
     * @return DescribeDcdnWafServiceResponse
     */
    public function describeDcdnWafService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnWafSpecInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnWafSpecInfoResponse
     */
    public function describeDcdnWafSpecInfoWithOptions($request, $runtime)
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
     * @param DescribeDcdnWafSpecInfoRequest $request
     *
     * @return DescribeDcdnWafSpecInfoResponse
     */
    public function describeDcdnWafSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafSpecInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnsecServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnsecServiceResponse
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
     * @param DescribeDcdnsecServiceRequest $request
     *
     * @return DescribeDcdnsecServiceResponse
     */
    public function describeDcdnsecService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnsecServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoutineRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRoutineResponse
     */
    public function describeRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param DescribeRoutineRequest $request
     *
     * @return DescribeRoutineResponse
     */
    public function describeRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoutineCanaryEnvsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRoutineCanaryEnvsResponse
     */
    public function describeRoutineCanaryEnvsWithOptions($request, $runtime)
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
     * @param DescribeRoutineCanaryEnvsRequest $request
     *
     * @return DescribeRoutineCanaryEnvsResponse
     */
    public function describeRoutineCanaryEnvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineCanaryEnvsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoutineCodeRevisionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRoutineCodeRevisionResponse
     */
    public function describeRoutineCodeRevisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->selectCodeRevision)) {
            $body['SelectCodeRevision'] = $request->selectCodeRevision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param DescribeRoutineCodeRevisionRequest $request
     *
     * @return DescribeRoutineCodeRevisionResponse
     */
    public function describeRoutineCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoutineSpecRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRoutineSpecResponse
     */
    public function describeRoutineSpecWithOptions($request, $runtime)
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
     * @param DescribeRoutineSpecRequest $request
     *
     * @return DescribeRoutineSpecResponse
     */
    public function describeRoutineSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineSpecWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRoutineUserInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRoutineUserInfoResponse
     */
    public function describeRoutineUserInfoWithOptions($request, $runtime)
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
     * @param DescribeRoutineUserInfoRequest $request
     *
     * @return DescribeRoutineUserInfoResponse
     */
    public function describeRoutineUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserDcdnIpaStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserDcdnIpaStatusResponse
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
     * @param DescribeUserDcdnIpaStatusRequest $request
     *
     * @return DescribeUserDcdnIpaStatusResponse
     */
    public function describeUserDcdnIpaStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDcdnIpaStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserDcdnStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserDcdnStatusResponse
     */
    public function describeUserDcdnStatusWithOptions($request, $runtime)
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
     * @param DescribeUserDcdnStatusRequest $request
     *
     * @return DescribeUserDcdnStatusResponse
     */
    public function describeUserDcdnStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDcdnStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserErStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserErStatusResponse
     */
    public function describeUserErStatusWithOptions($request, $runtime)
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
     * @param DescribeUserErStatusRequest $request
     *
     * @return DescribeUserErStatusResponse
     */
    public function describeUserErStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserErStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserLogserviceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUserLogserviceStatusResponse
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
     * @param DescribeUserLogserviceStatusRequest $request
     *
     * @return DescribeUserLogserviceStatusResponse
     */
    public function describeUserLogserviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLogserviceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWasmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeWasmResponse
     */
    public function describeWasmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWasm',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWasmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWasmRequest $request
     *
     * @return DescribeWasmResponse
     */
    public function describeWasm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWasmWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWasmUserInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeWasmUserInfoResponse
     */
    public function describeWasmUserInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeWasmUserInfo',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWasmUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWasmUserInfoRequest $request
     *
     * @return DescribeWasmUserInfoResponse
     */
    public function describeWasmUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWasmUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param EditRoutineConfRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return EditRoutineConfResponse
     */
    public function editRoutineConfWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EditRoutineConfShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envConf)) {
            $request->envConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envConf, 'EnvConf', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param EditRoutineConfRequest $request
     *
     * @return EditRoutineConfResponse
     */
    public function editRoutineConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editRoutineConfWithOptions($request, $runtime);
    }

    /**
     * @param EditWasmConfRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EditWasmConfResponse
     */
    public function editWasmConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EditWasmConf',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditWasmConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditWasmConfRequest $request
     *
     * @return EditWasmConfResponse
     */
    public function editWasmConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editWasmConfWithOptions($request, $runtime);
    }

    /**
     * @param ListDcdnRealTimeDeliveryProjectRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDcdnRealTimeDeliveryProjectResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param ListDcdnRealTimeDeliveryProjectRequest $request
     *
     * @return ListDcdnRealTimeDeliveryProjectResponse
     */
    public function listDcdnRealTimeDeliveryProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDcdnRealTimeDeliveryProjectWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDCdnDomainSchdmByPropertyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyDCdnDomainSchdmByPropertyResponse
     */
    public function modifyDCdnDomainSchdmByPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param ModifyDCdnDomainSchdmByPropertyRequest $request
     *
     * @return ModifyDCdnDomainSchdmByPropertyResponse
     */
    public function modifyDCdnDomainSchdmByProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDCdnDomainSchdmByPropertyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDcdnWafPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDcdnWafPolicyResponse
     */
    public function modifyDcdnWafPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param ModifyDcdnWafPolicyRequest $request
     *
     * @return ModifyDcdnWafPolicyResponse
     */
    public function modifyDcdnWafPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDcdnWafPolicyDomainsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDcdnWafPolicyDomainsResponse
     */
    public function modifyDcdnWafPolicyDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->bindDomains)) {
            $body['BindDomains'] = $request->bindDomains;
        }
        if (!Utils::isUnset($request->policyId)) {
            $body['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->unbindDomains)) {
            $body['UnbindDomains'] = $request->unbindDomains;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param ModifyDcdnWafPolicyDomainsRequest $request
     *
     * @return ModifyDcdnWafPolicyDomainsResponse
     */
    public function modifyDcdnWafPolicyDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafPolicyDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDcdnWafRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDcdnWafRuleResponse
     */
    public function modifyDcdnWafRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param ModifyDcdnWafRuleRequest $request
     *
     * @return ModifyDcdnWafRuleResponse
     */
    public function modifyDcdnWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafRuleWithOptions($request, $runtime);
    }

    /**
     * @param OpenDcdnServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenDcdnServiceResponse
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
     * @param OpenDcdnServiceRequest $request
     *
     * @return OpenDcdnServiceResponse
     */
    public function openDcdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDcdnServiceWithOptions($request, $runtime);
    }

    /**
     * @param PreloadDcdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PreloadDcdnObjectCachesResponse
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
     * @param PreloadDcdnObjectCachesRequest $request
     *
     * @return PreloadDcdnObjectCachesResponse
     */
    public function preloadDcdnObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadDcdnObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param PublishDcdnStagingConfigToProductionRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return PublishDcdnStagingConfigToProductionResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param PublishDcdnStagingConfigToProductionRequest $request
     *
     * @return PublishDcdnStagingConfigToProductionResponse
     */
    public function publishDcdnStagingConfigToProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishDcdnStagingConfigToProductionWithOptions($request, $runtime);
    }

    /**
     * @param PublishRoutineCodeRevisionRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return PublishRoutineCodeRevisionResponse
     */
    public function publishRoutineCodeRevisionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PublishRoutineCodeRevisionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->envs)) {
            $request->envsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->envs, 'Envs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param PublishRoutineCodeRevisionRequest $request
     *
     * @return PublishRoutineCodeRevisionResponse
     */
    public function publishRoutineCodeRevision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRoutineCodeRevisionWithOptions($request, $runtime);
    }

    /**
     * @param RefreshDcdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshDcdnObjectCachesResponse
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
     * @param RefreshDcdnObjectCachesRequest $request
     *
     * @return RefreshDcdnObjectCachesResponse
     */
    public function refreshDcdnObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDcdnObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param RollbackDcdnStagingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RollbackDcdnStagingConfigResponse
     */
    public function rollbackDcdnStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param RollbackDcdnStagingConfigRequest $request
     *
     * @return RollbackDcdnStagingConfigResponse
     */
    public function rollbackDcdnStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackDcdnStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDcdnConfigOfVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDcdnConfigOfVersionResponse
     */
    public function setDcdnConfigOfVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->functionArgs)) {
            $query['FunctionArgs'] = $request->functionArgs;
        }
        if (!Utils::isUnset($request->functionId)) {
            $query['FunctionId'] = $request->functionId;
        }
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
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
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDcdnConfigOfVersion',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDcdnConfigOfVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDcdnConfigOfVersionRequest $request
     *
     * @return SetDcdnConfigOfVersionResponse
     */
    public function setDcdnConfigOfVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnConfigOfVersionWithOptions($request, $runtime);
    }

    /**
     * @param SetDcdnDomainCSRCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDcdnDomainCSRCertificateResponse
     */
    public function setDcdnDomainCSRCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->serverCertificate)) {
            $query['ServerCertificate'] = $request->serverCertificate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDcdnDomainCSRCertificate',
            'version'     => '2018-01-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDcdnDomainCSRCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDcdnDomainCSRCertificateRequest $request
     *
     * @return SetDcdnDomainCSRCertificateResponse
     */
    public function setDcdnDomainCSRCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainCSRCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetDcdnDomainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDcdnDomainCertificateResponse
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
     * @param SetDcdnDomainCertificateRequest $request
     *
     * @return SetDcdnDomainCertificateResponse
     */
    public function setDcdnDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetDcdnDomainSMCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDcdnDomainSMCertificateResponse
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
     * @param SetDcdnDomainSMCertificateRequest $request
     *
     * @return SetDcdnDomainSMCertificateResponse
     */
    public function setDcdnDomainSMCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainSMCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetDcdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDcdnDomainStagingConfigResponse
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param SetDcdnDomainStagingConfigRequest $request
     *
     * @return SetDcdnDomainStagingConfigResponse
     */
    public function setDcdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDcdnUserConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetDcdnUserConfigResponse
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
     * @param SetDcdnUserConfigRequest $request
     *
     * @return SetDcdnUserConfigResponse
     */
    public function setDcdnUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnUserConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetRoutineSubdomainRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SetRoutineSubdomainResponse
     */
    public function setRoutineSubdomainWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetRoutineSubdomainShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subdomains)) {
            $request->subdomainsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subdomains, 'Subdomains', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->subdomainsShrink)) {
            $body['Subdomains'] = $request->subdomainsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param SetRoutineSubdomainRequest $request
     *
     * @return SetRoutineSubdomainResponse
     */
    public function setRoutineSubdomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRoutineSubdomainWithOptions($request, $runtime);
    }

    /**
     * @param StartDcdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartDcdnDomainResponse
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
     * @param StartDcdnDomainRequest $request
     *
     * @return StartDcdnDomainResponse
     */
    public function startDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param StartDcdnIpaDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartDcdnIpaDomainResponse
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
     * @param StartDcdnIpaDomainRequest $request
     *
     * @return StartDcdnIpaDomainResponse
     */
    public function startDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopDcdnDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopDcdnDomainResponse
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
     * @param StopDcdnDomainRequest $request
     *
     * @return StopDcdnDomainResponse
     */
    public function stopDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopDcdnIpaDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopDcdnIpaDomainResponse
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
     * @param StopDcdnIpaDomainRequest $request
     *
     * @return StopDcdnIpaDomainResponse
     */
    public function stopDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * @param TagDcdnResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TagDcdnResourcesResponse
     */
    public function tagDcdnResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
     * @param TagDcdnResourcesRequest $request
     *
     * @return TagDcdnResourcesResponse
     */
    public function tagDcdnResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagDcdnResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagDcdnResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UntagDcdnResourcesResponse
     */
    public function untagDcdnResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param UntagDcdnResourcesRequest $request
     *
     * @return UntagDcdnResourcesResponse
     */
    public function untagDcdnResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagDcdnResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDcdnDeliverTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDcdnDeliverTaskResponse
     */
    public function updateDcdnDeliverTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param UpdateDcdnDeliverTaskRequest $request
     *
     * @return UpdateDcdnDeliverTaskResponse
     */
    public function updateDcdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDcdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDcdnDomainResponse
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
     * @param UpdateDcdnDomainRequest $request
     *
     * @return UpdateDcdnDomainResponse
     */
    public function updateDcdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDcdnIpaDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDcdnIpaDomainResponse
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
     * @param UpdateDcdnIpaDomainRequest $request
     *
     * @return UpdateDcdnIpaDomainResponse
     */
    public function updateDcdnIpaDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnIpaDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDcdnSLSRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateDcdnSLSRealtimeLogDeliveryResponse
     */
    public function updateDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param UpdateDcdnSLSRealtimeLogDeliveryRequest $request
     *
     * @return UpdateDcdnSLSRealtimeLogDeliveryResponse
     */
    public function updateDcdnSLSRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDcdnSubTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDcdnSubTaskResponse
     */
    public function updateDcdnSubTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param UpdateDcdnSubTaskRequest $request
     *
     * @return UpdateDcdnSubTaskResponse
     */
    public function updateDcdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDcdnUserRealTimeDeliveryFieldRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateDcdnUserRealTimeDeliveryFieldResponse
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
     * @param UpdateDcdnUserRealTimeDeliveryFieldRequest $request
     *
     * @return UpdateDcdnUserRealTimeDeliveryFieldResponse
     */
    public function updateDcdnUserRealTimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * @param UploadRoutineCodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadRoutineCodeResponse
     */
    public function uploadRoutineCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param UploadRoutineCodeRequest $request
     *
     * @return UploadRoutineCodeResponse
     */
    public function uploadRoutineCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRoutineCodeWithOptions($request, $runtime);
    }

    /**
     * @param UploadStagingRoutineCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UploadStagingRoutineCodeResponse
     */
    public function uploadStagingRoutineCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     * @param UploadStagingRoutineCodeRequest $request
     *
     * @return UploadStagingRoutineCodeResponse
     */
    public function uploadStagingRoutineCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStagingRoutineCodeWithOptions($request, $runtime);
    }

    /**
     * @param VerifyDcdnDomainOwnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyDcdnDomainOwnerResponse
     */
    public function verifyDcdnDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
     * @param VerifyDcdnDomainOwnerRequest $request
     *
     * @return VerifyDcdnDomainOwnerResponse
     */
    public function verifyDcdnDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDcdnDomainOwnerWithOptions($request, $runtime);
    }
}
