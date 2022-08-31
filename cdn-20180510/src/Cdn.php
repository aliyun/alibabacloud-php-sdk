<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cdn\V20180510\Models\AddCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\AddCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\AddFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\AddFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchAddCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchAddCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDeleteCdnDomainConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDeleteCdnDomainConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainServerCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetCdnDomainServerCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchStartCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchStartCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchStopCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchStopCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchUpdateCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchUpdateCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnCertificateSigningRequestRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnCertificateSigningRequestResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnDeliverTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnDeliverTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnSubTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnSubTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateIllegalUrlExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateIllegalUrlExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateRealTimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateRealTimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateUsageDetailDataExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateUsageDetailDataExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateUserUsageDataExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateUserUsageDataExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCdnDeliverTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCdnDeliverTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCdnSubTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCdnSubTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteRealTimeLogLogstoreRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteRealTimeLogLogstoreResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteSpecificConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteSpecificConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteSpecificStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteSpecificStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteUsageDetailDataExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteUsageDetailDataExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteUserUsageDataExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteUserUsageDataExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeActiveVersionOfConfigGroupRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeActiveVersionOfConfigGroupResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeBlockedRegionsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeBlockedRegionsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeletedDomainsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeletedDomainsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainByCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainByCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnOrderCommodityCodeRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnOrderCommodityCodeResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSubListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSubListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillHistoryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillPredictionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillTypeRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserBillTypeResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserConfigsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserConfigsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserDomainsByFuncRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserDomainsByFuncResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserQuotaRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserQuotaResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserResourcePackageRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnUserResourcePackageResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnWafDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnWafDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCertificateInfoByIDRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCertificateInfoByIDResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigGroupDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigGroupDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigOfVersionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigOfVersionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomLogConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomLogConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainAverageResponseTimeRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainAverageResponseTimeResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByLayerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByLayerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByTimeStampResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCcActivityLogRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCcActivityLogResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCustomLogConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCustomLogConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainDetailDataByLayerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainDetailDataByLayerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainFileSizeProportionDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHitRateDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHitRateDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataByLayerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataByLayerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainHttpCodeDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainISPDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainISPDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainNamesOfVersionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainNamesOfVersionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPathDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPathDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPvDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPvDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataByLayerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataByLayerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainQpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeBpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeBpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeByteHitRateDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeByteHitRateDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeDetailDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeDetailDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeHttpCodeDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeHttpCodeDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeQpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeQpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeReqHitRateDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeReqHitRateDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcBpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcBpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcHttpCodeDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcTrafficDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeSrcTrafficDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeTrafficDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRealTimeTrafficDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRegionDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainRegionDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainReqHitRateDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainReqHitRateDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcBpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcBpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcHttpCodeDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcHttpCodeDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcQpsDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcQpsDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTopUrlVisitRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTopUrlVisitResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTrafficDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainSrcTrafficDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsUsageByDayResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopReferVisitResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTrafficDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTrafficDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainUsageDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainUsageDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainUvDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainUvDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExecuteDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExecuteDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIllegalUrlExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIllegalUrlExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpInfoRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpInfoResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeL2VipsByDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeL2VipsByDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRangeDataByLocateAndIspServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRangeDataByLocateAndIspServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeLogAuthorizedRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeLogAuthorizedResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshQuotaRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshQuotaResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTaskByIdRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTaskByIdResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRefreshTasksResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeStagingIpRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeStagingIpResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTagResourcesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTagResourcesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserCertificateExpireCountRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserCertificateExpireCountResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserTagsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserTagsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserVipsByDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserVipsByDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeVerifyContentRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeVerifyContentResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DisableRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DisableRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\EnableRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\EnableRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryDomainsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryDomainsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryInfosRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryInfosResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainSchdmByPropertyRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainSchdmByPropertyResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\OpenCdnServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\OpenCdnServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PublishStagingConfigToProductionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PublishStagingConfigToProductionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PushObjectCacheRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PushObjectCacheResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RefreshObjectCachesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RefreshObjectCachesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RollbackStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RollbackStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainCSRCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainCSRCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSMCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSMCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetConfigOfVersionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetConfigOfVersionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetDomainServerCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetDomainServerCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetReqHeaderConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetReqHeaderConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetWaitingRoomConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetWaitingRoomConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\StartCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\StartCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\StopCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\StopCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UpdateCdnDeliverTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UpdateCdnDeliverTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UpdateCdnSubTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UpdateCdnSubTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UpdateFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\UpdateFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\VerifyDomainOwnerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\VerifyDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cdn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-northeast-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-south-1'     => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'cdn.ap-southeast-1.aliyuncs.com',
            'eu-central-1'   => 'cdn.ap-southeast-1.aliyuncs.com',
            'eu-west-1'      => 'cdn.ap-southeast-1.aliyuncs.com',
            'me-east-1'      => 'cdn.ap-southeast-1.aliyuncs.com',
            'us-east-1'      => 'cdn.ap-southeast-1.aliyuncs.com',
            'us-west-1'      => 'cdn.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cdn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCdnDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddCdnDomainResponse
     */
    public function addCdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdnType)) {
            $query['CdnType'] = $request->cdnType;
        }
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
            'action'      => 'AddCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCdnDomainRequest $request
     *
     * @return AddCdnDomainResponse
     */
    public function addCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param AddFCTriggerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddFCTriggerResponse
     */
    public function addFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->triggerARN)) {
            $query['TriggerARN'] = $request->triggerARN;
        }
        $body = [];
        if (!Utils::isUnset($request->eventMetaName)) {
            $body['EventMetaName'] = $request->eventMetaName;
        }
        if (!Utils::isUnset($request->eventMetaVersion)) {
            $body['EventMetaVersion'] = $request->eventMetaVersion;
        }
        if (!Utils::isUnset($request->functionARN)) {
            $body['FunctionARN'] = $request->functionARN;
        }
        if (!Utils::isUnset($request->notes)) {
            $body['Notes'] = $request->notes;
        }
        if (!Utils::isUnset($request->roleARN)) {
            $body['RoleARN'] = $request->roleARN;
        }
        if (!Utils::isUnset($request->sourceARN)) {
            $body['SourceARN'] = $request->sourceARN;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddFCTrigger',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFCTriggerRequest $request
     *
     * @return AddFCTriggerResponse
     */
    public function addFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddCdnDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchAddCdnDomainResponse
     */
    public function batchAddCdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdnType)) {
            $query['CdnType'] = $request->cdnType;
        }
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
            'action'      => 'BatchAddCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAddCdnDomainRequest $request
     *
     * @return BatchAddCdnDomainResponse
     */
    public function batchAddCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteCdnDomainConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteCdnDomainConfigResponse
     */
    public function batchDeleteCdnDomainConfigWithOptions($request, $runtime)
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
            'action'      => 'BatchDeleteCdnDomainConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteCdnDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteCdnDomainConfigRequest $request
     *
     * @return BatchDeleteCdnDomainConfigResponse
     */
    public function batchDeleteCdnDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteCdnDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetCdnDomainConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSetCdnDomainConfigResponse
     */
    public function batchSetCdnDomainConfigWithOptions($request, $runtime)
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
            'action'      => 'BatchSetCdnDomainConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetCdnDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSetCdnDomainConfigRequest $request
     *
     * @return BatchSetCdnDomainConfigResponse
     */
    public function batchSetCdnDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetCdnDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetCdnDomainServerCertificateRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return BatchSetCdnDomainServerCertificateResponse
     */
    public function batchSetCdnDomainServerCertificateWithOptions($request, $runtime)
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
            'action'      => 'BatchSetCdnDomainServerCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetCdnDomainServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSetCdnDomainServerCertificateRequest $request
     *
     * @return BatchSetCdnDomainServerCertificateResponse
     */
    public function batchSetCdnDomainServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetCdnDomainServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartCdnDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStartCdnDomainResponse
     */
    public function batchStartCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'BatchStartCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStartCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStartCdnDomainRequest $request
     *
     * @return BatchStartCdnDomainResponse
     */
    public function batchStartCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopCdnDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchStopCdnDomainResponse
     */
    public function batchStopCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'BatchStopCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStopCdnDomainRequest $request
     *
     * @return BatchStopCdnDomainResponse
     */
    public function batchStopCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param BatchUpdateCdnDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchUpdateCdnDomainResponse
     */
    public function batchUpdateCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'BatchUpdateCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUpdateCdnDomainRequest $request
     *
     * @return BatchUpdateCdnDomainResponse
     */
    public function batchUpdateCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdnCertificateSigningRequestRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateCdnCertificateSigningRequestResponse
     */
    public function createCdnCertificateSigningRequestWithOptions($request, $runtime)
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
            'action'      => 'CreateCdnCertificateSigningRequest',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdnCertificateSigningRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdnCertificateSigningRequestRequest $request
     *
     * @return CreateCdnCertificateSigningRequestResponse
     */
    public function createCdnCertificateSigningRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdnCertificateSigningRequestWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdnDeliverTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCdnDeliverTaskResponse
     */
    public function createCdnDeliverTaskWithOptions($request, $runtime)
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
            'action'      => 'CreateCdnDeliverTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdnDeliverTaskRequest $request
     *
     * @return CreateCdnDeliverTaskResponse
     */
    public function createCdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdnSubTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCdnSubTaskResponse
     */
    public function createCdnSubTaskWithOptions($request, $runtime)
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
            'action'      => 'CreateCdnSubTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdnSubTaskRequest $request
     *
     * @return CreateCdnSubTaskResponse
     */
    public function createCdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateIllegalUrlExportTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateIllegalUrlExportTaskResponse
     */
    public function createIllegalUrlExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->timePoint)) {
            $query['TimePoint'] = $request->timePoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIllegalUrlExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIllegalUrlExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIllegalUrlExportTaskRequest $request
     *
     * @return CreateIllegalUrlExportTaskResponse
     */
    public function createIllegalUrlExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIllegalUrlExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRealTimeLogDeliveryResponse
     */
    public function createRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRealTimeLogDelivery',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRealTimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRealTimeLogDeliveryRequest $request
     *
     * @return CreateRealTimeLogDeliveryResponse
     */
    public function createRealTimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRealTimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param CreateUsageDetailDataExportTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateUsageDetailDataExportTaskResponse
     */
    public function createUsageDetailDataExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->group)) {
            $query['Group'] = $request->group;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
            'action'      => 'CreateUsageDetailDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUsageDetailDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUsageDetailDataExportTaskRequest $request
     *
     * @return CreateUsageDetailDataExportTaskResponse
     */
    public function createUsageDetailDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsageDetailDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserUsageDataExportTaskRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateUserUsageDataExportTaskResponse
     */
    public function createUserUsageDataExportTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserUsageDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserUsageDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserUsageDataExportTaskRequest $request
     *
     * @return CreateUserUsageDataExportTaskResponse
     */
    public function createUserUsageDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserUsageDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCdnDeliverTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCdnDeliverTaskResponse
     */
    public function deleteCdnDeliverTaskWithOptions($request, $runtime)
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
            'action'      => 'DeleteCdnDeliverTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCdnDeliverTaskRequest $request
     *
     * @return DeleteCdnDeliverTaskResponse
     */
    public function deleteCdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCdnDomainResponse
     */
    public function deleteCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'DeleteCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCdnDomainRequest $request
     *
     * @return DeleteCdnDomainResponse
     */
    public function deleteCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCdnSubTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCdnSubTaskResponse
     */
    public function deleteCdnSubTaskWithOptions($request, $runtime)
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
            'action'      => 'DeleteCdnSubTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCdnSubTaskRequest $request
     *
     * @return DeleteCdnSubTaskResponse
     */
    public function deleteCdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFCTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFCTriggerResponse
     */
    public function deleteFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->triggerARN)) {
            $query['TriggerARN'] = $request->triggerARN;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFCTrigger',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFCTriggerRequest $request
     *
     * @return DeleteFCTriggerResponse
     */
    public function deleteFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRealTimeLogLogstoreRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRealTimeLogLogstoreResponse
     */
    public function deleteRealTimeLogLogstoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRealTimeLogLogstore',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRealTimeLogLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRealTimeLogLogstoreRequest $request
     *
     * @return DeleteRealTimeLogLogstoreResponse
     */
    public function deleteRealTimeLogLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRealTimeLogLogstoreWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRealtimeLogDeliveryResponse
     */
    public function deleteRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRealtimeLogDelivery',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRealtimeLogDeliveryRequest $request
     *
     * @return DeleteRealtimeLogDeliveryResponse
     */
    public function deleteRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpecificConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSpecificConfigResponse
     */
    public function deleteSpecificConfigWithOptions($request, $runtime)
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
            'action'      => 'DeleteSpecificConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSpecificConfigRequest $request
     *
     * @return DeleteSpecificConfigResponse
     */
    public function deleteSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSpecificStagingConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteSpecificStagingConfigResponse
     */
    public function deleteSpecificStagingConfigWithOptions($request, $runtime)
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
            'action'      => 'DeleteSpecificStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSpecificStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSpecificStagingConfigRequest $request
     *
     * @return DeleteSpecificStagingConfigResponse
     */
    public function deleteSpecificStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpecificStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUsageDetailDataExportTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteUsageDetailDataExportTaskResponse
     */
    public function deleteUsageDetailDataExportTaskWithOptions($request, $runtime)
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
            'action'      => 'DeleteUsageDetailDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUsageDetailDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUsageDetailDataExportTaskRequest $request
     *
     * @return DeleteUsageDetailDataExportTaskResponse
     */
    public function deleteUsageDetailDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsageDetailDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserUsageDataExportTaskRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteUserUsageDataExportTaskResponse
     */
    public function deleteUserUsageDataExportTaskWithOptions($request, $runtime)
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
            'action'      => 'DeleteUserUsageDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserUsageDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserUsageDataExportTaskRequest $request
     *
     * @return DeleteUserUsageDataExportTaskResponse
     */
    public function deleteUserUsageDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserUsageDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeActiveVersionOfConfigGroupRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeActiveVersionOfConfigGroupResponse
     */
    public function describeActiveVersionOfConfigGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configGroupId)) {
            $query['ConfigGroupId'] = $request->configGroupId;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveVersionOfConfigGroup',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeActiveVersionOfConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeActiveVersionOfConfigGroupRequest $request
     *
     * @return DescribeActiveVersionOfConfigGroupResponse
     */
    public function describeActiveVersionOfConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeActiveVersionOfConfigGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBlockedRegionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBlockedRegionsResponse
     */
    public function describeBlockedRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBlockedRegions',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBlockedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBlockedRegionsRequest $request
     *
     * @return DescribeBlockedRegionsResponse
     */
    public function describeBlockedRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockedRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnCertificateDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCdnCertificateDetailResponse
     */
    public function describeCdnCertificateDetailWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnCertificateDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnCertificateDetailRequest $request
     *
     * @return DescribeCdnCertificateDetailResponse
     */
    public function describeCdnCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnCertificateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnCertificateListResponse
     */
    public function describeCdnCertificateListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnCertificateList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnCertificateListRequest $request
     *
     * @return DescribeCdnCertificateListResponse
     */
    public function describeCdnCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDeletedDomainsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCdnDeletedDomainsResponse
     */
    public function describeCdnDeletedDomainsWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDeletedDomains',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDeletedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDeletedDomainsRequest $request
     *
     * @return DescribeCdnDeletedDomainsResponse
     */
    public function describeCdnDeletedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDeletedDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDeliverListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCdnDeliverListResponse
     */
    public function describeCdnDeliverListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDeliverList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDeliverListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDeliverListRequest $request
     *
     * @return DescribeCdnDeliverListResponse
     */
    public function describeCdnDeliverList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDeliverListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainByCertificateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnDomainByCertificateResponse
     */
    public function describeCdnDomainByCertificateWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainByCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainByCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDomainByCertificateRequest $request
     *
     * @return DescribeCdnDomainByCertificateResponse
     */
    public function describeCdnDomainByCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainByCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCdnDomainConfigsResponse
     */
    public function describeCdnDomainConfigsWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainConfigs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDomainConfigsRequest $request
     *
     * @return DescribeCdnDomainConfigsResponse
     */
    public function describeCdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnDomainDetailResponse
     */
    public function describeCdnDomainDetailWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDomainDetailRequest $request
     *
     * @return DescribeCdnDomainDetailResponse
     */
    public function describeCdnDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCdnDomainLogsResponse
     */
    public function describeCdnDomainLogsWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainLogs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDomainLogsRequest $request
     *
     * @return DescribeCdnDomainLogsResponse
     */
    public function describeCdnDomainLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnDomainStagingConfigResponse
     */
    public function describeCdnDomainStagingConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDomainStagingConfigRequest $request
     *
     * @return DescribeCdnDomainStagingConfigResponse
     */
    public function describeCdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnHttpsDomainListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnHttpsDomainListResponse
     */
    public function describeCdnHttpsDomainListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnHttpsDomainList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnHttpsDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnHttpsDomainListRequest $request
     *
     * @return DescribeCdnHttpsDomainListResponse
     */
    public function describeCdnHttpsDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnHttpsDomainListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnOrderCommodityCodeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCdnOrderCommodityCodeResponse
     */
    public function describeCdnOrderCommodityCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
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
            'action'      => 'DescribeCdnOrderCommodityCode',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnOrderCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnOrderCommodityCodeRequest $request
     *
     * @return DescribeCdnOrderCommodityCodeResponse
     */
    public function describeCdnOrderCommodityCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnOrderCommodityCodeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnRegionAndIspRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnRegionAndIspResponse
     */
    public function describeCdnRegionAndIspWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnRegionAndIsp',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnRegionAndIspResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnRegionAndIspRequest $request
     *
     * @return DescribeCdnRegionAndIspResponse
     */
    public function describeCdnRegionAndIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnRegionAndIspWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnReportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCdnReportResponse
     */
    public function describeCdnReportWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnReport',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnReportRequest $request
     *
     * @return DescribeCdnReportResponse
     */
    public function describeCdnReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnReportListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCdnReportListResponse
     */
    public function describeCdnReportListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnReportList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnReportListRequest $request
     *
     * @return DescribeCdnReportListResponse
     */
    public function describeCdnReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnReportListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnSMCertificateDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnSMCertificateDetailResponse
     */
    public function describeCdnSMCertificateDetailWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnSMCertificateDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnSMCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnSMCertificateDetailRequest $request
     *
     * @return DescribeCdnSMCertificateDetailResponse
     */
    public function describeCdnSMCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSMCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnSMCertificateListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCdnSMCertificateListResponse
     */
    public function describeCdnSMCertificateListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnSMCertificateList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnSMCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnSMCertificateListRequest $request
     *
     * @return DescribeCdnSMCertificateListResponse
     */
    public function describeCdnSMCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSMCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCdnServiceResponse
     */
    public function describeCdnServiceWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnServiceRequest $request
     *
     * @return DescribeCdnServiceResponse
     */
    public function describeCdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnSubListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCdnSubListResponse
     */
    public function describeCdnSubListWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnSubList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnSubListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnSubListRequest $request
     *
     * @return DescribeCdnSubListResponse
     */
    public function describeCdnSubList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSubListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserBillHistoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnUserBillHistoryResponse
     */
    public function describeCdnUserBillHistoryWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnUserBillHistory',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserBillHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserBillHistoryRequest $request
     *
     * @return DescribeCdnUserBillHistoryResponse
     */
    public function describeCdnUserBillHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserBillHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserBillPredictionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCdnUserBillPredictionResponse
     */
    public function describeCdnUserBillPredictionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->area)) {
            $query['Area'] = $request->area;
        }
        if (!Utils::isUnset($request->dimension)) {
            $query['Dimension'] = $request->dimension;
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
            'action'      => 'DescribeCdnUserBillPrediction',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserBillPredictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserBillPredictionRequest $request
     *
     * @return DescribeCdnUserBillPredictionResponse
     */
    public function describeCdnUserBillPrediction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserBillPredictionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserBillTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnUserBillTypeResponse
     */
    public function describeCdnUserBillTypeWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnUserBillType',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserBillTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserBillTypeRequest $request
     *
     * @return DescribeCdnUserBillTypeResponse
     */
    public function describeCdnUserBillType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserBillTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserConfigsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCdnUserConfigsResponse
     */
    public function describeCdnUserConfigsWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnUserConfigs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserConfigsRequest $request
     *
     * @return DescribeCdnUserConfigsResponse
     */
    public function describeCdnUserConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserDomainsByFuncRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCdnUserDomainsByFuncResponse
     */
    public function describeCdnUserDomainsByFuncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeCdnUserDomainsByFunc',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserDomainsByFuncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserDomainsByFuncRequest $request
     *
     * @return DescribeCdnUserDomainsByFuncResponse
     */
    public function describeCdnUserDomainsByFunc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserDomainsByFuncWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCdnUserQuotaResponse
     */
    public function describeCdnUserQuotaWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnUserQuota',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserQuotaRequest $request
     *
     * @return DescribeCdnUserQuotaResponse
     */
    public function describeCdnUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnUserResourcePackageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnUserResourcePackageResponse
     */
    public function describeCdnUserResourcePackageWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnUserResourcePackage',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnUserResourcePackageRequest $request
     *
     * @return DescribeCdnUserResourcePackageResponse
     */
    public function describeCdnUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnWafDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCdnWafDomainResponse
     */
    public function describeCdnWafDomainWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnWafDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnWafDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnWafDomainRequest $request
     *
     * @return DescribeCdnWafDomainResponse
     */
    public function describeCdnWafDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnWafDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertificateInfoByIDRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCertificateInfoByIDResponse
     */
    public function describeCertificateInfoByIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCertificateInfoByID',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCertificateInfoByIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCertificateInfoByIDRequest $request
     *
     * @return DescribeCertificateInfoByIDResponse
     */
    public function describeCertificateInfoByID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateInfoByIDWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConfigGroupDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeConfigGroupDetailResponse
     */
    public function describeConfigGroupDetailWithOptions($request, $runtime)
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
            'action'      => 'DescribeConfigGroupDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConfigGroupDetailRequest $request
     *
     * @return DescribeConfigGroupDetailResponse
     */
    public function describeConfigGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConfigOfVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeConfigOfVersionResponse
     */
    public function describeConfigOfVersionWithOptions($request, $runtime)
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
            'action'      => 'DescribeConfigOfVersion',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigOfVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConfigOfVersionRequest $request
     *
     * @return DescribeConfigOfVersionResponse
     */
    public function describeConfigOfVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigOfVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomLogConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCustomLogConfigResponse
     */
    public function describeCustomLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomLogConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomLogConfigRequest $request
     *
     * @return DescribeCustomLogConfigResponse
     */
    public function describeCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainAverageResponseTimeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainAverageResponseTimeResponse
     */
    public function describeDomainAverageResponseTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
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
        if (!Utils::isUnset($request->timeMerge)) {
            $query['TimeMerge'] = $request->timeMerge;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainAverageResponseTime',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainAverageResponseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainAverageResponseTimeRequest $request
     *
     * @return DescribeDomainAverageResponseTimeResponse
     */
    public function describeDomainAverageResponseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAverageResponseTimeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainBpsDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainBpsDataResponse
     */
    public function describeDomainBpsDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainBpsDataRequest $request
     *
     * @return DescribeDomainBpsDataResponse
     */
    public function describeDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainBpsDataByLayerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainBpsDataByLayerResponse
     */
    public function describeDomainBpsDataByLayerWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainBpsDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainBpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainBpsDataByLayerRequest $request
     *
     * @return DescribeDomainBpsDataByLayerResponse
     */
    public function describeDomainBpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainBpsDataByTimeStampRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainBpsDataByTimeStampResponse
     */
    public function describeDomainBpsDataByTimeStampWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ispNames)) {
            $query['IspNames'] = $request->ispNames;
        }
        if (!Utils::isUnset($request->locationNames)) {
            $query['LocationNames'] = $request->locationNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->timePoint)) {
            $query['TimePoint'] = $request->timePoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainBpsDataByTimeStamp',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainBpsDataByTimeStampResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainBpsDataByTimeStampRequest $request
     *
     * @return DescribeDomainBpsDataByTimeStampResponse
     */
    public function describeDomainBpsDataByTimeStamp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsDataByTimeStampWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainCcActivityLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainCcActivityLogResponse
     */
    public function describeDomainCcActivityLogWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainCcActivityLog',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainCcActivityLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainCcActivityLogRequest $request
     *
     * @return DescribeDomainCcActivityLogResponse
     */
    public function describeDomainCcActivityLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCcActivityLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainCertificateInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainCertificateInfoResponse
     */
    public function describeDomainCertificateInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainCertificateInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainCertificateInfoRequest $request
     *
     * @return DescribeDomainCertificateInfoResponse
     */
    public function describeDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainCustomLogConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainCustomLogConfigResponse
     */
    public function describeDomainCustomLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainCustomLogConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainCustomLogConfigRequest $request
     *
     * @return DescribeDomainCustomLogConfigResponse
     */
    public function describeDomainCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCustomLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainDetailDataByLayerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDomainDetailDataByLayerResponse
     */
    public function describeDomainDetailDataByLayerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainDetailDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainDetailDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainDetailDataByLayerRequest $request
     *
     * @return DescribeDomainDetailDataByLayerResponse
     */
    public function describeDomainDetailDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDetailDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainFileSizeProportionDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDomainFileSizeProportionDataResponse
     */
    public function describeDomainFileSizeProportionDataWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainFileSizeProportionData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainFileSizeProportionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainFileSizeProportionDataRequest $request
     *
     * @return DescribeDomainFileSizeProportionDataResponse
     */
    public function describeDomainFileSizeProportionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainFileSizeProportionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainHitRateDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainHitRateDataResponse
     */
    public function describeDomainHitRateDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainHitRateData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainHitRateDataRequest $request
     *
     * @return DescribeDomainHitRateDataResponse
     */
    public function describeDomainHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainHttpCodeDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainHttpCodeDataResponse
     */
    public function describeDomainHttpCodeDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainHttpCodeDataRequest $request
     *
     * @return DescribeDomainHttpCodeDataResponse
     */
    public function describeDomainHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainHttpCodeDataByLayerRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainHttpCodeDataByLayerResponse
     */
    public function describeDomainHttpCodeDataByLayerWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainHttpCodeDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainHttpCodeDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainHttpCodeDataByLayerRequest $request
     *
     * @return DescribeDomainHttpCodeDataByLayerResponse
     */
    public function describeDomainHttpCodeDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainHttpCodeDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainISPDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainISPDataResponse
     */
    public function describeDomainISPDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainISPData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainISPDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainISPDataRequest $request
     *
     * @return DescribeDomainISPDataResponse
     */
    public function describeDomainISPData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainISPDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainMax95BpsDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainMax95BpsDataResponse
     */
    public function describeDomainMax95BpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cycle)) {
            $query['Cycle'] = $request->cycle;
        }
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
        if (!Utils::isUnset($request->timePoint)) {
            $query['TimePoint'] = $request->timePoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainMax95BpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainMax95BpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainMax95BpsDataRequest $request
     *
     * @return DescribeDomainMax95BpsDataResponse
     */
    public function describeDomainMax95BpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainMax95BpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainMultiUsageDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainMultiUsageDataResponse
     */
    public function describeDomainMultiUsageDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainMultiUsageData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainMultiUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainMultiUsageDataRequest $request
     *
     * @return DescribeDomainMultiUsageDataResponse
     */
    public function describeDomainMultiUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainMultiUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainNamesOfVersionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainNamesOfVersionResponse
     */
    public function describeDomainNamesOfVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainNamesOfVersion',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainNamesOfVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainNamesOfVersionRequest $request
     *
     * @return DescribeDomainNamesOfVersionResponse
     */
    public function describeDomainNamesOfVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainNamesOfVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainPathDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainPathDataResponse
     */
    public function describeDomainPathDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainPathData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainPathDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainPathDataRequest $request
     *
     * @return DescribeDomainPathDataResponse
     */
    public function describeDomainPathData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainPathDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainPvDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainPvDataResponse
     */
    public function describeDomainPvDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainPvData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainPvDataRequest $request
     *
     * @return DescribeDomainPvDataResponse
     */
    public function describeDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainQpsDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainQpsDataResponse
     */
    public function describeDomainQpsDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainQpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainQpsDataRequest $request
     *
     * @return DescribeDomainQpsDataResponse
     */
    public function describeDomainQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainQpsDataByLayerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainQpsDataByLayerResponse
     */
    public function describeDomainQpsDataByLayerWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainQpsDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainQpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainQpsDataByLayerRequest $request
     *
     * @return DescribeDomainQpsDataByLayerResponse
     */
    public function describeDomainQpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainRealTimeBpsDataResponse
     */
    public function describeDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeBpsDataRequest $request
     *
     * @return DescribeDomainRealTimeBpsDataResponse
     */
    public function describeDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDomainRealTimeByteHitRateDataResponse
     */
    public function describeDomainRealTimeByteHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeByteHitRateData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeByteHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeByteHitRateDataRequest $request
     *
     * @return DescribeDomainRealTimeByteHitRateDataResponse
     */
    public function describeDomainRealTimeByteHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeDetailDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainRealTimeDetailDataResponse
     */
    public function describeDomainRealTimeDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeDetailData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeDetailDataRequest $request
     *
     * @return DescribeDomainRealTimeDetailDataResponse
     */
    public function describeDomainRealTimeDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeDetailDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDomainRealTimeHttpCodeDataResponse
     */
    public function describeDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainRealTimeHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeHttpCodeDataRequest $request
     *
     * @return DescribeDomainRealTimeHttpCodeDataResponse
     */
    public function describeDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainRealTimeQpsDataResponse
     */
    public function describeDomainRealTimeQpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeQpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeQpsDataRequest $request
     *
     * @return DescribeDomainRealTimeQpsDataResponse
     */
    public function describeDomainRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDomainRealTimeReqHitRateDataResponse
     */
    public function describeDomainRealTimeReqHitRateDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeReqHitRateData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeReqHitRateDataRequest $request
     *
     * @return DescribeDomainRealTimeReqHitRateDataResponse
     */
    public function describeDomainRealTimeReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeSrcBpsDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainRealTimeSrcBpsDataResponse
     */
    public function describeDomainRealTimeSrcBpsDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainRealTimeSrcBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeSrcBpsDataRequest $request
     *
     * @return DescribeDomainRealTimeSrcBpsDataResponse
     */
    public function describeDomainRealTimeSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeSrcHttpCodeDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainRealTimeSrcHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeSrcHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeSrcHttpCodeDataRequest $request
     *
     * @return DescribeDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDomainRealTimeSrcHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeSrcTrafficDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDomainRealTimeSrcTrafficDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainRealTimeSrcTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeSrcTrafficDataRequest $request
     *
     * @return DescribeDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDomainRealTimeSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainRealTimeTrafficDataResponse
     */
    public function describeDomainRealTimeTrafficDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainRealTimeTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealTimeTrafficDataRequest $request
     *
     * @return DescribeDomainRealTimeTrafficDataResponse
     */
    public function describeDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainRealtimeLogDeliveryResponse
     */
    public function describeDomainRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealtimeLogDelivery',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRealtimeLogDeliveryRequest $request
     *
     * @return DescribeDomainRealtimeLogDeliveryResponse
     */
    public function describeDomainRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainRegionDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainRegionDataResponse
     */
    public function describeDomainRegionDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainRegionData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainRegionDataRequest $request
     *
     * @return DescribeDomainRegionDataResponse
     */
    public function describeDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainReqHitRateDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainReqHitRateDataResponse
     */
    public function describeDomainReqHitRateDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainReqHitRateData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainReqHitRateDataRequest $request
     *
     * @return DescribeDomainReqHitRateDataResponse
     */
    public function describeDomainReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSrcBpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainSrcBpsDataResponse
     */
    public function describeDomainSrcBpsDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainSrcBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainSrcBpsDataRequest $request
     *
     * @return DescribeDomainSrcBpsDataResponse
     */
    public function describeDomainSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSrcHttpCodeDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainSrcHttpCodeDataResponse
     */
    public function describeDomainSrcHttpCodeDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainSrcHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainSrcHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainSrcHttpCodeDataRequest $request
     *
     * @return DescribeDomainSrcHttpCodeDataResponse
     */
    public function describeDomainSrcHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSrcQpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainSrcQpsDataResponse
     */
    public function describeDomainSrcQpsDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainSrcQpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainSrcQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainSrcQpsDataRequest $request
     *
     * @return DescribeDomainSrcQpsDataResponse
     */
    public function describeDomainSrcQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcQpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSrcTopUrlVisitRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainSrcTopUrlVisitResponse
     */
    public function describeDomainSrcTopUrlVisitWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainSrcTopUrlVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainSrcTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainSrcTopUrlVisitRequest $request
     *
     * @return DescribeDomainSrcTopUrlVisitResponse
     */
    public function describeDomainSrcTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainSrcTrafficDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainSrcTrafficDataResponse
     */
    public function describeDomainSrcTrafficDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainSrcTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainSrcTrafficDataRequest $request
     *
     * @return DescribeDomainSrcTrafficDataResponse
     */
    public function describeDomainSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainTopClientIpVisitRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDomainTopClientIpVisitResponse
     */
    public function describeDomainTopClientIpVisitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
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
            'action'      => 'DescribeDomainTopClientIpVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainTopClientIpVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainTopClientIpVisitRequest $request
     *
     * @return DescribeDomainTopClientIpVisitResponse
     */
    public function describeDomainTopClientIpVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopClientIpVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainTopReferVisitRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainTopReferVisitResponse
     */
    public function describeDomainTopReferVisitWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainTopReferVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainTopReferVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainTopReferVisitRequest $request
     *
     * @return DescribeDomainTopReferVisitResponse
     */
    public function describeDomainTopReferVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopReferVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainTopUrlVisitRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainTopUrlVisitResponse
     */
    public function describeDomainTopUrlVisitWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainTopUrlVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainTopUrlVisitRequest $request
     *
     * @return DescribeDomainTopUrlVisitResponse
     */
    public function describeDomainTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainTrafficDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainTrafficDataResponse
     */
    public function describeDomainTrafficDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainTrafficDataRequest $request
     *
     * @return DescribeDomainTrafficDataResponse
     */
    public function describeDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainUsageDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageDataWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainUsageData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainUsageDataRequest $request
     *
     * @return DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainUvDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainUvDataResponse
     */
    public function describeDomainUvDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainUvData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainUvDataRequest $request
     *
     * @return DescribeDomainUvDataResponse
     */
    public function describeDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsBySourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainsBySourceResponse
     */
    public function describeDomainsBySourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->sources)) {
            $query['Sources'] = $request->sources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainsBySource',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsBySourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainsBySourceRequest $request
     *
     * @return DescribeDomainsBySourceResponse
     */
    public function describeDomainsBySource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsBySourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDomainsUsageByDayRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainsUsageByDayResponse
     */
    public function describeDomainsUsageByDayWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainsUsageByDay',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsUsageByDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainsUsageByDayRequest $request
     *
     * @return DescribeDomainsUsageByDayResponse
     */
    public function describeDomainsUsageByDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsUsageByDayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEsExceptionDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEsExceptionDataResponse
     */
    public function describeEsExceptionDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeEsExceptionData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEsExceptionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEsExceptionDataRequest $request
     *
     * @return DescribeEsExceptionDataResponse
     */
    public function describeEsExceptionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEsExceptionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEsExecuteDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEsExecuteDataResponse
     */
    public function describeEsExecuteDataWithOptions($request, $runtime)
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
            'action'      => 'DescribeEsExecuteData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEsExecuteDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEsExecuteDataRequest $request
     *
     * @return DescribeEsExecuteDataResponse
     */
    public function describeEsExecuteData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEsExecuteDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFCTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFCTriggerResponse
     */
    public function describeFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFCTrigger',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFCTriggerRequest $request
     *
     * @return DescribeFCTriggerResponse
     */
    public function describeFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIllegalUrlExportTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeIllegalUrlExportTaskResponse
     */
    public function describeIllegalUrlExportTaskWithOptions($request, $runtime)
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
            'action'      => 'DescribeIllegalUrlExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIllegalUrlExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIllegalUrlExportTaskRequest $request
     *
     * @return DescribeIllegalUrlExportTaskResponse
     */
    public function describeIllegalUrlExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIllegalUrlExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIpInfoResponse
     */
    public function describeIpInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeIpInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpInfoRequest $request
     *
     * @return DescribeIpInfoResponse
     */
    public function describeIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIpStatusResponse
     */
    public function describeIpStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpStatus',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpStatusRequest $request
     *
     * @return DescribeIpStatusResponse
     */
    public function describeIpStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeL2VipsByDomainRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeL2VipsByDomainResponse
     */
    public function describeL2VipsByDomainWithOptions($request, $runtime)
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
            'action'      => 'DescribeL2VipsByDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeL2VipsByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeL2VipsByDomainRequest $request
     *
     * @return DescribeL2VipsByDomainResponse
     */
    public function describeL2VipsByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL2VipsByDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRangeDataByLocateAndIspServiceRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeRangeDataByLocateAndIspServiceResponse
     */
    public function describeRangeDataByLocateAndIspServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ispNames)) {
            $query['IspNames'] = $request->ispNames;
        }
        if (!Utils::isUnset($request->locationNames)) {
            $query['LocationNames'] = $request->locationNames;
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
            'action'      => 'DescribeRangeDataByLocateAndIspService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRangeDataByLocateAndIspServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRangeDataByLocateAndIspServiceRequest $request
     *
     * @return DescribeRangeDataByLocateAndIspServiceResponse
     */
    public function describeRangeDataByLocateAndIspService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRangeDataByLocateAndIspServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRealtimeDeliveryAccRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRealtimeDeliveryAccResponse
     */
    public function describeRealtimeDeliveryAccWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->logStore)) {
            $query['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->project)) {
            $query['Project'] = $request->project;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRealtimeDeliveryAcc',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRealtimeDeliveryAccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRealtimeDeliveryAccRequest $request
     *
     * @return DescribeRealtimeDeliveryAccResponse
     */
    public function describeRealtimeDeliveryAcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRealtimeDeliveryAccWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRealtimeLogAuthorizedRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRealtimeLogAuthorizedResponse
     */
    public function describeRealtimeLogAuthorizedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRealtimeLogAuthorized',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRealtimeLogAuthorizedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRealtimeLogAuthorizedRequest $request
     *
     * @return DescribeRealtimeLogAuthorizedResponse
     */
    public function describeRealtimeLogAuthorized($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRealtimeLogAuthorizedWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRefreshQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRefreshQuotaResponse
     */
    public function describeRefreshQuotaWithOptions($request, $runtime)
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
            'action'      => 'DescribeRefreshQuota',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRefreshQuotaRequest $request
     *
     * @return DescribeRefreshQuotaResponse
     */
    public function describeRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRefreshTaskByIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRefreshTaskByIdResponse
     */
    public function describeRefreshTaskByIdWithOptions($request, $runtime)
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
            'action'      => 'DescribeRefreshTaskById',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRefreshTaskByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRefreshTaskByIdRequest $request
     *
     * @return DescribeRefreshTaskByIdResponse
     */
    public function describeRefreshTaskById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefreshTaskByIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRefreshTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRefreshTasksResponse
     */
    public function describeRefreshTasksWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'DescribeRefreshTasks',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRefreshTasksRequest $request
     *
     * @return DescribeRefreshTasksResponse
     */
    public function describeRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStagingIpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeStagingIpResponse
     */
    public function describeStagingIpWithOptions($request, $runtime)
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
            'action'      => 'DescribeStagingIp',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStagingIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStagingIpRequest $request
     *
     * @return DescribeStagingIpResponse
     */
    public function describeStagingIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStagingIpWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTagResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagResourcesResponse
     */
    public function describeTagResourcesWithOptions($request, $runtime)
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
            'action'      => 'DescribeTagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTagResourcesRequest $request
     *
     * @return DescribeTagResourcesResponse
     */
    public function describeTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTopDomainsByFlowRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTopDomainsByFlowResponse
     */
    public function describeTopDomainsByFlowWithOptions($request, $runtime)
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
            'action'      => 'DescribeTopDomainsByFlow',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTopDomainsByFlowRequest $request
     *
     * @return DescribeTopDomainsByFlowResponse
     */
    public function describeTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserCertificateExpireCountRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeUserCertificateExpireCountResponse
     */
    public function describeUserCertificateExpireCountWithOptions($request, $runtime)
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
            'action'      => 'DescribeUserCertificateExpireCount',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserCertificateExpireCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserCertificateExpireCountRequest $request
     *
     * @return DescribeUserCertificateExpireCountResponse
     */
    public function describeUserCertificateExpireCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCertificateExpireCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserConfigsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserConfigsResponse
     */
    public function describeUserConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
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
            'action'      => 'DescribeUserConfigs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserConfigsRequest $request
     *
     * @return DescribeUserConfigsResponse
     */
    public function describeUserConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserDomainsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserDomainsResponse
     */
    public function describeUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdnType)) {
            $query['CdnType'] = $request->cdnType;
        }
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
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserDomains',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserDomainsRequest $request
     *
     * @return DescribeUserDomainsResponse
     */
    public function describeUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserTagsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeUserTagsResponse
     */
    public function describeUserTagsWithOptions($request, $runtime)
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
            'action'      => 'DescribeUserTags',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserTagsRequest $request
     *
     * @return DescribeUserTagsResponse
     */
    public function describeUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserUsageDataExportTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeUserUsageDataExportTaskResponse
     */
    public function describeUserUsageDataExportTaskWithOptions($request, $runtime)
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
            'action'      => 'DescribeUserUsageDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserUsageDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserUsageDataExportTaskRequest $request
     *
     * @return DescribeUserUsageDataExportTaskResponse
     */
    public function describeUserUsageDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserUsageDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserUsageDetailDataExportTaskRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeUserUsageDetailDataExportTaskResponse
     */
    public function describeUserUsageDetailDataExportTaskWithOptions($request, $runtime)
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
            'action'      => 'DescribeUserUsageDetailDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserUsageDetailDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserUsageDetailDataExportTaskRequest $request
     *
     * @return DescribeUserUsageDetailDataExportTaskResponse
     */
    public function describeUserUsageDetailDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserUsageDetailDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserVipsByDomainRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUserVipsByDomainResponse
     */
    public function describeUserVipsByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserVipsByDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserVipsByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserVipsByDomainRequest $request
     *
     * @return DescribeUserVipsByDomainResponse
     */
    public function describeUserVipsByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserVipsByDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVerifyContentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifyContentResponse
     */
    public function describeVerifyContentWithOptions($request, $runtime)
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
            'action'      => 'DescribeVerifyContent',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVerifyContentRequest $request
     *
     * @return DescribeVerifyContentResponse
     */
    public function describeVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyContentWithOptions($request, $runtime);
    }

    /**
     * @param DisableRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableRealtimeLogDeliveryResponse
     */
    public function disableRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableRealtimeLogDelivery',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableRealtimeLogDeliveryRequest $request
     *
     * @return DisableRealtimeLogDeliveryResponse
     */
    public function disableRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param EnableRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableRealtimeLogDeliveryResponse
     */
    public function enableRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableRealtimeLogDelivery',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableRealtimeLogDeliveryRequest $request
     *
     * @return EnableRealtimeLogDeliveryResponse
     */
    public function enableRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param ListDomainsByLogConfigIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDomainsByLogConfigIdResponse
     */
    public function listDomainsByLogConfigIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomainsByLogConfigId',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDomainsByLogConfigIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDomainsByLogConfigIdRequest $request
     *
     * @return ListDomainsByLogConfigIdResponse
     */
    public function listDomainsByLogConfigId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsByLogConfigIdWithOptions($request, $runtime);
    }

    /**
     * @param ListFCTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFCTriggerResponse
     */
    public function listFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFCTrigger',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFCTriggerRequest $request
     *
     * @return ListFCTriggerResponse
     */
    public function listFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @param ListRealtimeLogDeliveryDomainsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListRealtimeLogDeliveryDomainsResponse
     */
    public function listRealtimeLogDeliveryDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRealtimeLogDeliveryDomains',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRealtimeLogDeliveryDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRealtimeLogDeliveryDomainsRequest $request
     *
     * @return ListRealtimeLogDeliveryDomainsResponse
     */
    public function listRealtimeLogDeliveryDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeLogDeliveryDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ListRealtimeLogDeliveryInfosRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListRealtimeLogDeliveryInfosResponse
     */
    public function listRealtimeLogDeliveryInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRealtimeLogDeliveryInfos',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRealtimeLogDeliveryInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRealtimeLogDeliveryInfosRequest $request
     *
     * @return ListRealtimeLogDeliveryInfosResponse
     */
    public function listRealtimeLogDeliveryInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeLogDeliveryInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListUserCustomLogConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserCustomLogConfigResponse
     */
    public function listUserCustomLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserCustomLogConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserCustomLogConfigRequest $request
     *
     * @return ListUserCustomLogConfigResponse
     */
    public function listUserCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserCustomLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyCdnDomainResponse
     */
    public function modifyCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'ModifyCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCdnDomainRequest $request
     *
     * @return ModifyCdnDomainResponse
     */
    public function modifyCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCdnDomainSchdmByPropertyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyCdnDomainSchdmByPropertyResponse
     */
    public function modifyCdnDomainSchdmByPropertyWithOptions($request, $runtime)
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
            'action'      => 'ModifyCdnDomainSchdmByProperty',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCdnDomainSchdmByPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCdnDomainSchdmByPropertyRequest $request
     *
     * @return ModifyCdnDomainSchdmByPropertyResponse
     */
    public function modifyCdnDomainSchdmByProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnDomainSchdmByPropertyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRealtimeLogDeliveryResponse
     */
    public function modifyRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRealtimeLogDelivery',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRealtimeLogDeliveryRequest $request
     *
     * @return ModifyRealtimeLogDeliveryResponse
     */
    public function modifyRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param OpenCdnServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenCdnServiceResponse
     */
    public function openCdnServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
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
            'action'      => 'OpenCdnService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenCdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenCdnServiceRequest $request
     *
     * @return OpenCdnServiceResponse
     */
    public function openCdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCdnServiceWithOptions($request, $runtime);
    }

    /**
     * @param PublishStagingConfigToProductionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PublishStagingConfigToProductionResponse
     */
    public function publishStagingConfigToProductionWithOptions($request, $runtime)
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
            'action'      => 'PublishStagingConfigToProduction',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishStagingConfigToProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishStagingConfigToProductionRequest $request
     *
     * @return PublishStagingConfigToProductionResponse
     */
    public function publishStagingConfigToProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishStagingConfigToProductionWithOptions($request, $runtime);
    }

    /**
     * @param PushObjectCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PushObjectCacheResponse
     */
    public function pushObjectCacheWithOptions($request, $runtime)
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
            'action'      => 'PushObjectCache',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushObjectCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushObjectCacheRequest $request
     *
     * @return PushObjectCacheResponse
     */
    public function pushObjectCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushObjectCacheWithOptions($request, $runtime);
    }

    /**
     * @param RefreshObjectCachesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RefreshObjectCachesResponse
     */
    public function refreshObjectCachesWithOptions($request, $runtime)
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
            'action'      => 'RefreshObjectCaches',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshObjectCachesRequest $request
     *
     * @return RefreshObjectCachesResponse
     */
    public function refreshObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param RollbackStagingConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RollbackStagingConfigResponse
     */
    public function rollbackStagingConfigWithOptions($request, $runtime)
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
            'action'      => 'RollbackStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackStagingConfigRequest $request
     *
     * @return RollbackStagingConfigResponse
     */
    public function rollbackStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetCdnDomainCSRCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetCdnDomainCSRCertificateResponse
     */
    public function setCdnDomainCSRCertificateWithOptions($request, $runtime)
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
            'action'      => 'SetCdnDomainCSRCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCdnDomainCSRCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCdnDomainCSRCertificateRequest $request
     *
     * @return SetCdnDomainCSRCertificateResponse
     */
    public function setCdnDomainCSRCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainCSRCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetCdnDomainSMCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetCdnDomainSMCertificateResponse
     */
    public function setCdnDomainSMCertificateWithOptions($request, $runtime)
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
            'action'      => 'SetCdnDomainSMCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCdnDomainSMCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCdnDomainSMCertificateRequest $request
     *
     * @return SetCdnDomainSMCertificateResponse
     */
    public function setCdnDomainSMCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainSMCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetCdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetCdnDomainStagingConfigResponse
     */
    public function setCdnDomainStagingConfigWithOptions($request, $runtime)
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
            'action'      => 'SetCdnDomainStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCdnDomainStagingConfigRequest $request
     *
     * @return SetCdnDomainStagingConfigResponse
     */
    public function setCdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetConfigOfVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetConfigOfVersionResponse
     */
    public function setConfigOfVersionWithOptions($request, $runtime)
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
            'action'      => 'SetConfigOfVersion',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetConfigOfVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetConfigOfVersionRequest $request
     *
     * @return SetConfigOfVersionResponse
     */
    public function setConfigOfVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setConfigOfVersionWithOptions($request, $runtime);
    }

    /**
     * @param SetDomainServerCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDomainServerCertificateResponse
     */
    public function setDomainServerCertificateWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->privateKey)) {
            $query['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->serverCertificate)) {
            $query['ServerCertificate'] = $request->serverCertificate;
        }
        if (!Utils::isUnset($request->serverCertificateStatus)) {
            $query['ServerCertificateStatus'] = $request->serverCertificateStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainServerCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainServerCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainServerCertificateRequest $request
     *
     * @return SetDomainServerCertificateResponse
     */
    public function setDomainServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetReqHeaderConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetReqHeaderConfigResponse
     */
    public function setReqHeaderConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetReqHeaderConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetReqHeaderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetReqHeaderConfigRequest $request
     *
     * @return SetReqHeaderConfigResponse
     */
    public function setReqHeaderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setReqHeaderConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetWaitingRoomConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetWaitingRoomConfigResponse
     */
    public function setWaitingRoomConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowPct)) {
            $query['AllowPct'] = $request->allowPct;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->gapTime)) {
            $query['GapTime'] = $request->gapTime;
        }
        if (!Utils::isUnset($request->maxTimeWait)) {
            $query['MaxTimeWait'] = $request->maxTimeWait;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->waitUri)) {
            $query['WaitUri'] = $request->waitUri;
        }
        if (!Utils::isUnset($request->waitUrl)) {
            $query['WaitUrl'] = $request->waitUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetWaitingRoomConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetWaitingRoomConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetWaitingRoomConfigRequest $request
     *
     * @return SetWaitingRoomConfigResponse
     */
    public function setWaitingRoomConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWaitingRoomConfigWithOptions($request, $runtime);
    }

    /**
     * @param StartCdnDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartCdnDomainResponse
     */
    public function startCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'StartCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCdnDomainRequest $request
     *
     * @return StartCdnDomainResponse
     */
    public function startCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param StopCdnDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopCdnDomainResponse
     */
    public function stopCdnDomainWithOptions($request, $runtime)
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
            'action'      => 'StopCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopCdnDomainRequest $request
     *
     * @return StopCdnDomainResponse
     */
    public function stopCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
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
            'action'      => 'TagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
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
            'action'      => 'UntagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateCdnDeliverTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCdnDeliverTaskResponse
     */
    public function updateCdnDeliverTaskWithOptions($request, $runtime)
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
            'action'      => 'UpdateCdnDeliverTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCdnDeliverTaskRequest $request
     *
     * @return UpdateCdnDeliverTaskResponse
     */
    public function updateCdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCdnSubTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCdnSubTaskResponse
     */
    public function updateCdnSubTaskWithOptions($request, $runtime)
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
            'action'      => 'UpdateCdnSubTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCdnSubTaskRequest $request
     *
     * @return UpdateCdnSubTaskResponse
     */
    public function updateCdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFCTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFCTriggerResponse
     */
    public function updateFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->triggerARN)) {
            $query['TriggerARN'] = $request->triggerARN;
        }
        $body = [];
        if (!Utils::isUnset($request->functionARN)) {
            $body['FunctionARN'] = $request->functionARN;
        }
        if (!Utils::isUnset($request->notes)) {
            $body['Notes'] = $request->notes;
        }
        if (!Utils::isUnset($request->roleARN)) {
            $body['RoleARN'] = $request->roleARN;
        }
        if (!Utils::isUnset($request->sourceARN)) {
            $body['SourceARN'] = $request->sourceARN;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFCTrigger',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFCTriggerRequest $request
     *
     * @return UpdateFCTriggerResponse
     */
    public function updateFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @param VerifyDomainOwnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwnerWithOptions($request, $runtime)
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
            'action'      => 'VerifyDomainOwner',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyDomainOwnerRequest $request
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDomainOwnerWithOptions($request, $runtime);
    }
}
