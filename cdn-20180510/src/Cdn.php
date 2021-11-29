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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeL2VipsByDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeL2VipsByDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRangeDataByLocateAndIspServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRangeDataByLocateAndIspServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyDomainCustomLogConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyDomainCustomLogConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyUserCustomLogConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyUserCustomLogConfigResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCcConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCcConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainCSRCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainCSRCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSMCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSMCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetConfigOfVersionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetConfigOfVersionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetDomainGreenManagerConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetDomainGreenManagerConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetDomainServerCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetDomainServerCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetErrorPageConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetErrorPageConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetFileCacheExpiredConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetFileCacheExpiredConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetForceRedirectConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetForceRedirectConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetForwardSchemeConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetForwardSchemeConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetHttpErrorPageConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetHttpErrorPageConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetHttpHeaderConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetHttpHeaderConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetHttpsOptionConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetHttpsOptionConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetIgnoreQueryStringConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetIgnoreQueryStringConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetIpAllowListConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetIpAllowListConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetIpBlackListConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetIpBlackListConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetOptimizeConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetOptimizeConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetPageCompressConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetPageCompressConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetRangeConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetRangeConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetRefererConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetRefererConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetRemoveQueryStringConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetRemoveQueryStringConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetReqAuthConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetReqAuthConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetReqHeaderConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetReqHeaderConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetSourceHostConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetSourceHostConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetUserGreenManagerConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetUserGreenManagerConfigResponse;
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
        $query                    = [];
        $query['CdnType']         = $request->cdnType;
        $query['CheckUrl']        = $request->checkUrl;
        $query['DomainName']      = $request->domainName;
        $query['OwnerAccount']    = $request->ownerAccount;
        $query['OwnerId']         = $request->ownerId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['Scope']           = $request->scope;
        $query['SecurityToken']   = $request->securityToken;
        $query['Sources']         = $request->sources;
        $query['TopLevelDomain']  = $request->topLevelDomain;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['OwnerId']    = $request->ownerId;
        $query['TriggerARN'] = $request->triggerARN;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
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
        $query                    = [];
        $query['CdnType']         = $request->cdnType;
        $query['CheckUrl']        = $request->checkUrl;
        $query['DomainName']      = $request->domainName;
        $query['OwnerAccount']    = $request->ownerAccount;
        $query['OwnerId']         = $request->ownerId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['Scope']           = $request->scope;
        $query['SecurityToken']   = $request->securityToken;
        $query['Sources']         = $request->sources;
        $query['TopLevelDomain']  = $request->topLevelDomain;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchAddCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['FunctionNames'] = $request->functionNames;
        $query['OwnerAccount']  = $request->ownerAccount;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteCdnDomainConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['Functions']     = $request->functions;
        $query['OwnerAccount']  = $request->ownerAccount;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchSetCdnDomainConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['CertName']      = $request->certName;
        $query['CertType']      = $request->certType;
        $query['DomainName']    = $request->domainName;
        $query['ForceSet']      = $request->forceSet;
        $query['OwnerId']       = $request->ownerId;
        $query['Region']        = $request->region;
        $query['SSLPri']        = $request->SSLPri;
        $query['SSLProtocol']   = $request->SSLProtocol;
        $query['SSLPub']        = $request->SSLPub;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchSetCdnDomainServerCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchStartCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchStopCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['DomainName']      = $request->domainName;
        $query['OwnerId']         = $request->ownerId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['SecurityToken']   = $request->securityToken;
        $query['Sources']         = $request->sources;
        $query['TopLevelDomain']  = $request->topLevelDomain;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                     = [];
        $query['City']             = $request->city;
        $query['CommonName']       = $request->commonName;
        $query['Country']          = $request->country;
        $query['Email']            = $request->email;
        $query['Organization']     = $request->organization;
        $query['OrganizationUnit'] = $request->organizationUnit;
        $query['OwnerId']          = $request->ownerId;
        $query['SANs']             = $request->SANs;
        $query['State']            = $request->state;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateCdnCertificateSigningRequest',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
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
        $query              = [];
        $query['OwnerId']   = $request->ownerId;
        $query['TaskName']  = $request->taskName;
        $query['TimePoint'] = $request->timePoint;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateIllegalUrlExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                = [];
        $query['DomainNames'] = $request->domainNames;
        $query['EndTime']     = $request->endTime;
        $query['Group']       = $request->group;
        $query['Language']    = $request->language;
        $query['OwnerId']     = $request->ownerId;
        $query['StartTime']   = $request->startTime;
        $query['TaskName']    = $request->taskName;
        $query['Type']        = $request->type;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUsageDetailDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['Language']  = $request->language;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $query['TaskName']  = $request->taskName;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUserUsageDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['DeliverId'] = $request->deliverId;
        $query['OwnerId']   = $request->ownerId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteCdnDeliverTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerAccount']  = $request->ownerAccount;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteCdnSubTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['OwnerId']    = $request->ownerId;
        $query['TriggerARN'] = $request->triggerARN;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFCTrigger',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpecificConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteSpecificStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteUsageDetailDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserUsageDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['ConfigGroupId'] = $request->configGroupId;
        $query['Env']           = $request->env;
        $query['OwnerId']       = $request->ownerId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeActiveVersionOfConfigGroup',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['CertName']      = $request->certName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnCertificateDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnCertificateList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['OwnerId']    = $request->ownerId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDeletedDomains',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['DeliverId'] = $request->deliverId;
        $query['OwnerId']   = $request->ownerId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDeliverList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $query['SSLPub']  = $request->SSLPub;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDomainByCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['FunctionNames'] = $request->functionNames;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDomainConfigs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDomainDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDomainLogs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['FunctionNames'] = $request->functionNames;
        $query['OwnerId']       = $request->ownerId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnDomainStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['Keyword']    = $request->keyword;
        $query['OwnerId']    = $request->ownerId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnHttpsDomainList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeCdnRegionAndIspRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnRegionAndIspResponse
     */
    public function describeCdnRegionAndIspWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnRegionAndIsp',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['Area']       = $request->area;
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['HttpCode']   = $request->httpCode;
        $query['IsOverseas'] = $request->isOverseas;
        $query['OwnerId']    = $request->ownerId;
        $query['ReportId']   = $request->reportId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnReport',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query             = [];
        $query['OwnerId']  = $request->ownerId;
        $query['ReportId'] = $request->reportId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnReportList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['CertIdentifier'] = $request->certIdentifier;
        $query['OwnerId']        = $request->ownerId;
        $query['SecurityToken']  = $request->securityToken;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnSMCertificateDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnSMCertificateList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnSubList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserBillHistory',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['Area']      = $request->area;
        $query['Dimension'] = $request->dimension;
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserBillPrediction',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserBillType',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['FunctionName'] = $request->functionName;
        $query['OwnerId']      = $request->ownerId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserConfigs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['FuncId']          = $request->funcId;
        $query['OwnerId']         = $request->ownerId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserDomainsByFunc',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserQuota',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $query['Status']        = $request->status;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnUserResourcePackage',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['DomainName']      = $request->domainName;
        $query['OwnerId']         = $request->ownerId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnWafDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['ConfigGroupId']   = $request->configGroupId;
        $query['ConfigGroupName'] = $request->configGroupName;
        $query['OwnerId']         = $request->ownerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigGroupDetail',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['FunctionId']    = $request->functionId;
        $query['FunctionName']  = $request->functionName;
        $query['GroupId']       = $request->groupId;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $query['VersionId']     = $request->versionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigOfVersion',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['DomainType']     = $request->domainType;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $query['TimeMerge']      = $request->timeMerge;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainAverageResponseTime',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['Layer']          = $request->layer;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainBpsDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['IspNames']      = $request->ispNames;
        $query['LocationNames'] = $request->locationNames;
        $query['OwnerId']       = $request->ownerId;
        $query['TimePoint']     = $request->timePoint;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainBpsDataByTimeStamp',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['EndTime']       = $request->endTime;
        $query['OwnerId']       = $request->ownerId;
        $query['PageNumber']    = $request->pageNumber;
        $query['PageSize']      = $request->pageSize;
        $query['RuleName']      = $request->ruleName;
        $query['StartTime']     = $request->startTime;
        $query['TriggerObject'] = $request->triggerObject;
        $query['Value']         = $request->value;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainCcActivityLog',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainCertificateInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['EndTime']       = $request->endTime;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $query['StartTime']     = $request->startTime;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainFileSizeProportionData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainHitRateData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['Layer']          = $request->layer;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainHttpCodeDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainISPData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['Cycle']      = $request->cycle;
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $query['TimePoint']  = $request->timePoint;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainMax95BpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainMultiUsageData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['OwnerId']   = $request->ownerId;
        $query['PageIndex'] = $request->pageIndex;
        $query['PageSize']  = $request->pageSize;
        $query['VersionId'] = $request->versionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainNamesOfVersion',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainPvData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainQpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['Layer']          = $request->layer;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainQpsDataByLayer',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeSrcBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeSrcHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeSrcTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRealTimeTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRegionData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainReqHitRateData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainSrcBpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainSrcHttpCodeData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainSrcQpsData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['SortBy']     = $request->sortBy;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainSrcTopUrlVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['Interval']   = $request->interval;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainSrcTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Limit']          = $request->limit;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['SortBy']         = $request->sortBy;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainTopClientIpVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['Percent']    = $request->percent;
        $query['SortBy']     = $request->sortBy;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainTopReferVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['SortBy']     = $request->sortBy;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainTopUrlVisit',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['DomainName']     = $request->domainName;
        $query['EndTime']        = $request->endTime;
        $query['Interval']       = $request->interval;
        $query['IspNameEn']      = $request->ispNameEn;
        $query['LocationNameEn'] = $request->locationNameEn;
        $query['OwnerId']        = $request->ownerId;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainTrafficData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['Area']         = $request->area;
        $query['DataProtocol'] = $request->dataProtocol;
        $query['DomainName']   = $request->domainName;
        $query['EndTime']      = $request->endTime;
        $query['Field']        = $request->field;
        $query['Interval']     = $request->interval;
        $query['OwnerId']      = $request->ownerId;
        $query['StartTime']    = $request->startTime;
        $query['Type']         = $request->type;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainUsageData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainUvData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $query['Sources']       = $request->sources;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainsBySource',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['EndTime']    = $request->endTime;
        $query['OwnerId']    = $request->ownerId;
        $query['StartTime']  = $request->startTime;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainsUsageByDay',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['RuleId']    = $request->ruleId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeEsExceptionData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['RuleId']    = $request->ruleId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeEsExecuteData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeIllegalUrlExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['IP']            = $request->IP;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeL2VipsByDomainRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeL2VipsByDomainResponse
     */
    public function describeL2VipsByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeL2VipsByDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainNames']   = $request->domainNames;
        $query['EndTime']       = $request->endTime;
        $query['IspNames']      = $request->ispNames;
        $query['LocationNames'] = $request->locationNames;
        $query['OwnerId']       = $request->ownerId;
        $query['StartTime']     = $request->startTime;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRangeDataByLocateAndIspService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['Interval']  = $request->interval;
        $query['LogStore']  = $request->logStore;
        $query['OwnerId']   = $request->ownerId;
        $query['Project']   = $request->project;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRealtimeDeliveryAcc',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeRefreshQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRefreshQuotaResponse
     */
    public function describeRefreshQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRefreshQuota',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRefreshTaskById',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['DomainName']      = $request->domainName;
        $query['EndTime']         = $request->endTime;
        $query['ObjectPath']      = $request->objectPath;
        $query['ObjectType']      = $request->objectType;
        $query['OwnerId']         = $request->ownerId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['SecurityToken']   = $request->securityToken;
        $query['StartTime']       = $request->startTime;
        $query['Status']          = $request->status;
        $query['TaskId']          = $request->taskId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRefreshTasks',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeStagingIp',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['OwnerId']      = $request->ownerId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query              = [];
        $query['EndTime']   = $request->endTime;
        $query['Limit']     = $request->limit;
        $query['OwnerId']   = $request->ownerId;
        $query['StartTime'] = $request->startTime;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeTopDomainsByFlow',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserCertificateExpireCount',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['Config']        = $request->config;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserConfigs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                     = [];
        $query['CdnType']          = $request->cdnType;
        $query['ChangeEndTime']    = $request->changeEndTime;
        $query['ChangeStartTime']  = $request->changeStartTime;
        $query['CheckDomainShow']  = $request->checkDomainShow;
        $query['Coverage']         = $request->coverage;
        $query['DomainName']       = $request->domainName;
        $query['DomainSearchType'] = $request->domainSearchType;
        $query['DomainStatus']     = $request->domainStatus;
        $query['OwnerId']          = $request->ownerId;
        $query['PageNumber']       = $request->pageNumber;
        $query['PageSize']         = $request->pageSize;
        $query['ResourceGroupId']  = $request->resourceGroupId;
        $query['SecurityToken']    = $request->securityToken;
        $query['Source']           = $request->source;
        $query['Tag']              = $request->tag;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserDomains',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserTags',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['OwnerId']    = $request->ownerId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserUsageDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['OwnerId']    = $request->ownerId;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserUsageDetailDataExportTask',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeVerifyContent',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['DomainName']      = $request->domainName;
        $query['OwnerId']         = $request->ownerId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['SecurityToken']   = $request->securityToken;
        $query['Sources']         = $request->sources;
        $query['TopLevelDomain']  = $request->topLevelDomain;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $query['Property']   = $request->property;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyCdnDomainSchdmByProperty',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ModifyDomainCustomLogConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDomainCustomLogConfigResponse
     */
    public function modifyDomainCustomLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDomainCustomLogConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyDomainCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDomainCustomLogConfigRequest $request
     *
     * @return ModifyDomainCustomLogConfigResponse
     */
    public function modifyDomainCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainCustomLogConfigWithOptions($request, $runtime);
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
            'reqBodyType' => 'json',
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
     * @param ModifyUserCustomLogConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyUserCustomLogConfigResponse
     */
    public function modifyUserCustomLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserCustomLogConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyUserCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserCustomLogConfigRequest $request
     *
     * @return ModifyUserCustomLogConfigResponse
     */
    public function modifyUserCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserCustomLogConfigWithOptions($request, $runtime);
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
        $query                       = [];
        $query['InternetChargeType'] = $request->internetChargeType;
        $query['OwnerId']            = $request->ownerId;
        $query['SecurityToken']      = $request->securityToken;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'OpenCdnService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['DomainName']   = $request->domainName;
        $query['FunctionName'] = $request->functionName;
        $query['OwnerId']      = $request->ownerId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PublishStagingConfigToProduction',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['Area']          = $request->area;
        $query['ObjectPath']    = $request->objectPath;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PushObjectCache',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['ObjectPath']    = $request->objectPath;
        $query['ObjectType']    = $request->objectType;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RefreshObjectCaches',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['DomainName']   = $request->domainName;
        $query['FunctionName'] = $request->functionName;
        $query['OwnerId']      = $request->ownerId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RollbackStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param SetCcConfigRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SetCcConfigResponse
     */
    public function setCcConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AllowIps']      = $request->allowIps;
        $query['BlockIps']      = $request->blockIps;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetCcConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetCcConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCcConfigRequest $request
     *
     * @return SetCcConfigResponse
     */
    public function setCcConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCcConfigWithOptions($request, $runtime);
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
        $query                      = [];
        $query['DomainName']        = $request->domainName;
        $query['OwnerId']           = $request->ownerId;
        $query['ServerCertificate'] = $request->serverCertificate;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetCdnDomainCSRCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                   = [];
        $query['CertIdentifier'] = $request->certIdentifier;
        $query['DomainName']     = $request->domainName;
        $query['OwnerId']        = $request->ownerId;
        $query['SSLProtocol']    = $request->SSLProtocol;
        $query['SecurityToken']  = $request->securityToken;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetCdnDomainSMCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['Functions']  = $request->functions;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetCdnDomainStagingConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                    = [];
        $query['ConfigId']        = $request->configId;
        $query['FunctionArgs']    = $request->functionArgs;
        $query['FunctionId']      = $request->functionId;
        $query['FunctionMatches'] = $request->functionMatches;
        $query['FunctionName']    = $request->functionName;
        $query['OwnerAccount']    = $request->ownerAccount;
        $query['OwnerId']         = $request->ownerId;
        $query['SecurityToken']   = $request->securityToken;
        $query['VersionId']       = $request->versionId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetConfigOfVersion',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param SetDomainGreenManagerConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDomainGreenManagerConfigResponse
     */
    public function setDomainGreenManagerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['Enable']     = $request->enable;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetDomainGreenManagerConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetDomainGreenManagerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDomainGreenManagerConfigRequest $request
     *
     * @return SetDomainGreenManagerConfigResponse
     */
    public function setDomainGreenManagerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainGreenManagerConfigWithOptions($request, $runtime);
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
        $query                            = [];
        $query['CertName']                = $request->certName;
        $query['CertType']                = $request->certType;
        $query['DomainName']              = $request->domainName;
        $query['ForceSet']                = $request->forceSet;
        $query['OwnerId']                 = $request->ownerId;
        $query['PrivateKey']              = $request->privateKey;
        $query['SecurityToken']           = $request->securityToken;
        $query['ServerCertificate']       = $request->serverCertificate;
        $query['ServerCertificateStatus'] = $request->serverCertificateStatus;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetDomainServerCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param SetErrorPageConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetErrorPageConfigResponse
     */
    public function setErrorPageConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['CustomPageUrl'] = $request->customPageUrl;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['PageType']      = $request->pageType;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetErrorPageConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetErrorPageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetErrorPageConfigRequest $request
     *
     * @return SetErrorPageConfigResponse
     */
    public function setErrorPageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setErrorPageConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetFileCacheExpiredConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetFileCacheExpiredConfigResponse
     */
    public function setFileCacheExpiredConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['CacheContent']  = $request->cacheContent;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $query['TTL']           = $request->TTL;
        $query['Weight']        = $request->weight;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetFileCacheExpiredConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetFileCacheExpiredConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetFileCacheExpiredConfigRequest $request
     *
     * @return SetFileCacheExpiredConfigResponse
     */
    public function setFileCacheExpiredConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setFileCacheExpiredConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetForceRedirectConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetForceRedirectConfigResponse
     */
    public function setForceRedirectConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['RedirectType']  = $request->redirectType;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetForceRedirectConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetForceRedirectConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetForceRedirectConfigRequest $request
     *
     * @return SetForceRedirectConfigResponse
     */
    public function setForceRedirectConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setForceRedirectConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetForwardSchemeConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetForwardSchemeConfigResponse
     */
    public function setForwardSchemeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['ConfigId']         = $request->configId;
        $query['DomainName']       = $request->domainName;
        $query['Enable']           = $request->enable;
        $query['OwnerId']          = $request->ownerId;
        $query['SchemeOrigin']     = $request->schemeOrigin;
        $query['SchemeOriginPort'] = $request->schemeOriginPort;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetForwardSchemeConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetForwardSchemeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetForwardSchemeConfigRequest $request
     *
     * @return SetForwardSchemeConfigResponse
     */
    public function setForwardSchemeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setForwardSchemeConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetHttpErrorPageConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetHttpErrorPageConfigResponse
     */
    public function setHttpErrorPageConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ConfigId']   = $request->configId;
        $query['DomainName'] = $request->domainName;
        $query['ErrorCode']  = $request->errorCode;
        $query['OwnerId']    = $request->ownerId;
        $query['PageUrl']    = $request->pageUrl;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetHttpErrorPageConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetHttpErrorPageConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetHttpErrorPageConfigRequest $request
     *
     * @return SetHttpErrorPageConfigResponse
     */
    public function setHttpErrorPageConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpErrorPageConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetHttpHeaderConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetHttpHeaderConfigResponse
     */
    public function setHttpHeaderConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['HeaderKey']     = $request->headerKey;
        $query['HeaderValue']   = $request->headerValue;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetHttpHeaderConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetHttpHeaderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetHttpHeaderConfigRequest $request
     *
     * @return SetHttpHeaderConfigResponse
     */
    public function setHttpHeaderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpHeaderConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetHttpsOptionConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetHttpsOptionConfigResponse
     */
    public function setHttpsOptionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ConfigId']   = $request->configId;
        $query['DomainName'] = $request->domainName;
        $query['Http2']      = $request->http2;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetHttpsOptionConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetHttpsOptionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetHttpsOptionConfigRequest $request
     *
     * @return SetHttpsOptionConfigResponse
     */
    public function setHttpsOptionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpsOptionConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetIgnoreQueryStringConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetIgnoreQueryStringConfigResponse
     */
    public function setIgnoreQueryStringConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['ConfigId']    = $request->configId;
        $query['DomainName']  = $request->domainName;
        $query['Enable']      = $request->enable;
        $query['HashKeyArgs'] = $request->hashKeyArgs;
        $query['KeepOssArgs'] = $request->keepOssArgs;
        $query['OwnerId']     = $request->ownerId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetIgnoreQueryStringConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetIgnoreQueryStringConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetIgnoreQueryStringConfigRequest $request
     *
     * @return SetIgnoreQueryStringConfigResponse
     */
    public function setIgnoreQueryStringConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIgnoreQueryStringConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetIpAllowListConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetIpAllowListConfigResponse
     */
    public function setIpAllowListConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AllowIps']      = $request->allowIps;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetIpAllowListConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetIpAllowListConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetIpAllowListConfigRequest $request
     *
     * @return SetIpAllowListConfigResponse
     */
    public function setIpAllowListConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIpAllowListConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetIpBlackListConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetIpBlackListConfigResponse
     */
    public function setIpBlackListConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['BlockIps']   = $request->blockIps;
        $query['ConfigId']   = $request->configId;
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetIpBlackListConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetIpBlackListConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetIpBlackListConfigRequest $request
     *
     * @return SetIpBlackListConfigResponse
     */
    public function setIpBlackListConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIpBlackListConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetOptimizeConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetOptimizeConfigResponse
     */
    public function setOptimizeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ConfigId']   = $request->configId;
        $query['DomainName'] = $request->domainName;
        $query['Enable']     = $request->enable;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetOptimizeConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetOptimizeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetOptimizeConfigRequest $request
     *
     * @return SetOptimizeConfigResponse
     */
    public function setOptimizeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOptimizeConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetPageCompressConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetPageCompressConfigResponse
     */
    public function setPageCompressConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ConfigId']   = $request->configId;
        $query['DomainName'] = $request->domainName;
        $query['Enable']     = $request->enable;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetPageCompressConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetPageCompressConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetPageCompressConfigRequest $request
     *
     * @return SetPageCompressConfigResponse
     */
    public function setPageCompressConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPageCompressConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetRangeConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetRangeConfigResponse
     */
    public function setRangeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ConfigId']   = $request->configId;
        $query['DomainName'] = $request->domainName;
        $query['Enable']     = $request->enable;
        $query['OwnerId']    = $request->ownerId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetRangeConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetRangeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRangeConfigRequest $request
     *
     * @return SetRangeConfigResponse
     */
    public function setRangeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRangeConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetRefererConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetRefererConfigResponse
     */
    public function setRefererConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AllowEmpty']    = $request->allowEmpty;
        $query['DisableAst']    = $request->disableAst;
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['ReferList']     = $request->referList;
        $query['ReferType']     = $request->referType;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetRefererConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetRefererConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRefererConfigRequest $request
     *
     * @return SetRefererConfigResponse
     */
    public function setRefererConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRefererConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetRemoveQueryStringConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetRemoveQueryStringConfigResponse
     */
    public function setRemoveQueryStringConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AliRemoveArgs'] = $request->aliRemoveArgs;
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['KeepOssArgs']   = $request->keepOssArgs;
        $query['OwnerId']       = $request->ownerId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetRemoveQueryStringConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetRemoveQueryStringConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRemoveQueryStringConfigRequest $request
     *
     * @return SetRemoveQueryStringConfigResponse
     */
    public function setRemoveQueryStringConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRemoveQueryStringConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetReqAuthConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetReqAuthConfigResponse
     */
    public function setReqAuthConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AuthRemoteDesc'] = $request->authRemoteDesc;
        $query['AuthType']       = $request->authType;
        $query['DomainName']     = $request->domainName;
        $query['Key1']           = $request->key1;
        $query['Key2']           = $request->key2;
        $query['OwnerId']        = $request->ownerId;
        $query['SecurityToken']  = $request->securityToken;
        $query['TimeOut']        = $request->timeOut;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetReqAuthConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetReqAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetReqAuthConfigRequest $request
     *
     * @return SetReqAuthConfigResponse
     */
    public function setReqAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setReqAuthConfigWithOptions($request, $runtime);
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
        $query                  = [];
        $query['ConfigId']      = $request->configId;
        $query['DomainName']    = $request->domainName;
        $query['Key']           = $request->key;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $query['Value']         = $request->value;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetReqHeaderConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param SetSourceHostConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetSourceHostConfigResponse
     */
    public function setSourceHostConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['BackSrcDomain'] = $request->backSrcDomain;
        $query['DomainName']    = $request->domainName;
        $query['Enable']        = $request->enable;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetSourceHostConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetSourceHostConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSourceHostConfigRequest $request
     *
     * @return SetSourceHostConfigResponse
     */
    public function setSourceHostConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSourceHostConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetUserGreenManagerConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetUserGreenManagerConfigResponse
     */
    public function setUserGreenManagerConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['OwnerId']       = $request->ownerId;
        $query['Quota']         = $request->quota;
        $query['Ratio']         = $request->ratio;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetUserGreenManagerConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SetUserGreenManagerConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetUserGreenManagerConfigRequest $request
     *
     * @return SetUserGreenManagerConfigResponse
     */
    public function setUserGreenManagerConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserGreenManagerConfigWithOptions($request, $runtime);
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
        $query                = [];
        $query['AllowPct']    = $request->allowPct;
        $query['DomainName']  = $request->domainName;
        $query['GapTime']     = $request->gapTime;
        $query['MaxTimeWait'] = $request->maxTimeWait;
        $query['OwnerId']     = $request->ownerId;
        $query['WaitUri']     = $request->waitUri;
        $query['WaitUrl']     = $request->waitUrl;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SetWaitingRoomConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                  = [];
        $query['DomainName']    = $request->domainName;
        $query['OwnerId']       = $request->ownerId;
        $query['SecurityToken'] = $request->securityToken;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StopCdnDomain',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['OwnerId']      = $request->ownerId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['Tag']          = $request->tag;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query                 = [];
        $query['All']          = $request->all;
        $query['OwnerId']      = $request->ownerId;
        $query['ResourceId']   = $request->resourceId;
        $query['ResourceType'] = $request->resourceType;
        $query['TagKey']       = $request->tagKey;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
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
        $query            = [];
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
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
        $query               = [];
        $query['OwnerId']    = $request->ownerId;
        $query['TriggerARN'] = $request->triggerARN;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
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
        $query               = [];
        $query['DomainName'] = $request->domainName;
        $query['OwnerId']    = $request->ownerId;
        $query['VerifyType'] = $request->verifyType;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'VerifyDomainOwner',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
