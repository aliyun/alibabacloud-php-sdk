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
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDescribeCdnIpInfoRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchDescribeCdnIpInfoResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\CdnMigrateRegisterRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CdnMigrateRegisterResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ChangeCdnDomainToDcdnRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ChangeCdnDomainToDcdnResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CheckCdnDomainExistRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CheckCdnDomainExistResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CheckCdnDomainICPRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CheckCdnDomainICPResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnCertificateSigningRequestRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnCertificateSigningRequestResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnDeliverTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnDeliverTaskResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnSubTaskRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\CreateCdnSubTaskResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeBlockedRegionsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeBlockedRegionsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateDetailByIdRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateDetailByIdResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnConditionIPBInfoRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnConditionIPBInfoResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeletedDomainsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeletedDomainsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainAtoaLogsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainAtoaLogsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainByCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainByCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnFullDomainsBlockIPConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnFullDomainsBlockIPConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnFullDomainsBlockIPHistoryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnFullDomainsBlockIPHistoryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnMigrateRegisterStatusRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnMigrateRegisterStatusResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnOrderCommodityCodeRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnOrderCommodityCodeResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnRegionAndIspResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnReportResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSecFuncInfoRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSecFuncInfoResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateDetailRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateDetailResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSSLCertificateListRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSSLCertificateListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSubListResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCnameRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCnameResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCustomLogConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCustomLogConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainDetailDataByLayerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainDetailDataByLayerResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainVerifyDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainVerifyDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExceptionDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExecuteDataRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeEsExecuteDataResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpInfoRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpInfoResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeIpStatusResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeL2VipsByDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeL2VipsByDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeStagingIpResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTagResourcesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTagResourcesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserCdnStatusRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserCdnStatusResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserCertificateExpireCountResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserConfigsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryInfosResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListUserCustomLogConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainOwnerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainOwnerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainSchdmByPropertyRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnDomainSchdmByPropertyResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCdnServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\OpenCdnServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\OpenCdnServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PublishStagingConfigToProductionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PublishStagingConfigToProductionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PushObjectCacheRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PushObjectCacheResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RefreshObjectCacheByCacheTagRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RefreshObjectCacheByCacheTagResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RefreshObjectCachesRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RefreshObjectCachesResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RollbackStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\RollbackStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainCSRCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainCSRCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSMCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSMCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSSLCertificateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainSSLCertificateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnFullDomainsBlockIPRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\SetCdnFullDomainsBlockIPResponse;
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
     * @summary Adds a domain name to accelerate.
     *  *
     * @description *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   The domain name that you want to add has a valid Internet Content Provider (ICP) number.
     * *   You can add only one domain name to Alibaba Cloud CDN in each call. Each Alibaba Cloud account can add a maximum of 50 domain names to Alibaba Cloud CDN.
     * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review will be completed by the end of the next business day after you submit the application.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param AddCdnDomainRequest $request AddCdnDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCdnDomainResponse AddCdnDomainResponse
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
     * @summary Adds a domain name to accelerate.
     *  *
     * @description *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   The domain name that you want to add has a valid Internet Content Provider (ICP) number.
     * *   You can add only one domain name to Alibaba Cloud CDN in each call. Each Alibaba Cloud account can add a maximum of 50 domain names to Alibaba Cloud CDN.
     * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review will be completed by the end of the next business day after you submit the application.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param AddCdnDomainRequest $request AddCdnDomainRequest
     *
     * @return AddCdnDomainResponse AddCdnDomainResponse
     */
    public function addCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a Function Compute trigger.
     *  *
     * @param AddFCTriggerRequest $request AddFCTriggerRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFCTriggerResponse AddFCTriggerResponse
     */
    public function addFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @summary Adds a Function Compute trigger.
     *  *
     * @param AddFCTriggerRequest $request AddFCTriggerRequest
     *
     * @return AddFCTriggerResponse AddFCTriggerResponse
     */
    public function addFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Adds one or more domain names to Alibaba Cloud CDN. You can add a maximum of 50 domain names at a time.
     *  *
     * @description *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   If the acceleration region is Chinese Mainland Only or Global, you must apply for an ICP filing for the domain name.
     * *   You can specify multiple domain names and separate them with commas (,). You can specify at most 50 domain names in each call.
     * *   For more information, see [Add a domain name](https://help.aliyun.com/document_detail/122181.html).
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param BatchAddCdnDomainRequest $request BatchAddCdnDomainRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchAddCdnDomainResponse BatchAddCdnDomainResponse
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
     * @summary Adds one or more domain names to Alibaba Cloud CDN. You can add a maximum of 50 domain names at a time.
     *  *
     * @description *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   If the acceleration region is Chinese Mainland Only or Global, you must apply for an ICP filing for the domain name.
     * *   You can specify multiple domain names and separate them with commas (,). You can specify at most 50 domain names in each call.
     * *   For more information, see [Add a domain name](https://help.aliyun.com/document_detail/122181.html).
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param BatchAddCdnDomainRequest $request BatchAddCdnDomainRequest
     *
     * @return BatchAddCdnDomainResponse BatchAddCdnDomainResponse
     */
    public function batchAddCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes configurations of multiple accelerated domain names at a time.
     *  *
     * @description *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param BatchDeleteCdnDomainConfigRequest $request BatchDeleteCdnDomainConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteCdnDomainConfigResponse BatchDeleteCdnDomainConfigResponse
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
     * @summary Deletes configurations of multiple accelerated domain names at a time.
     *  *
     * @description *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param BatchDeleteCdnDomainConfigRequest $request BatchDeleteCdnDomainConfigRequest
     *
     * @return BatchDeleteCdnDomainConfigResponse BatchDeleteCdnDomainConfigResponse
     */
    public function batchDeleteCdnDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteCdnDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether one or more IP addresses are assigned to Alibaba Cloud CDN.
     *  *
     * @description >The maximum number of times that each user can call this operation per second is 20.
     *  *
     * @param BatchDescribeCdnIpInfoRequest $request BatchDescribeCdnIpInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDescribeCdnIpInfoResponse BatchDescribeCdnIpInfoResponse
     */
    public function batchDescribeCdnIpInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipAddrList)) {
            $query['IpAddrList'] = $request->ipAddrList;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDescribeCdnIpInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDescribeCdnIpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether one or more IP addresses are assigned to Alibaba Cloud CDN.
     *  *
     * @description >The maximum number of times that each user can call this operation per second is 20.
     *  *
     * @param BatchDescribeCdnIpInfoRequest $request BatchDescribeCdnIpInfoRequest
     *
     * @return BatchDescribeCdnIpInfoResponse BatchDescribeCdnIpInfoResponse
     */
    public function batchDescribeCdnIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDescribeCdnIpInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Configures multiple accelerated domain names at a time.
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     * *   You can specify multiple domain names and must separate them with commas (,). You can specify up to 50 domain names in each call.
     * *   If the BatchSetCdnDomainConfig operation is successful, a unique configuration ID (ConfigId) is generated. You can use configuration IDs to update or delete configurations. For more information, see [Usage notes on ConfigId](https://help.aliyun.com/document_detail/388994.html).
     *  *
     * @param BatchSetCdnDomainConfigRequest $request BatchSetCdnDomainConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetCdnDomainConfigResponse BatchSetCdnDomainConfigResponse
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
     * @summary Configures multiple accelerated domain names at a time.
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     * *   You can specify multiple domain names and must separate them with commas (,). You can specify up to 50 domain names in each call.
     * *   If the BatchSetCdnDomainConfig operation is successful, a unique configuration ID (ConfigId) is generated. You can use configuration IDs to update or delete configurations. For more information, see [Usage notes on ConfigId](https://help.aliyun.com/document_detail/388994.html).
     *  *
     * @param BatchSetCdnDomainConfigRequest $request BatchSetCdnDomainConfigRequest
     *
     * @return BatchSetCdnDomainConfigResponse BatchSetCdnDomainConfigResponse
     */
    public function batchSetCdnDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetCdnDomainConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Enables, disables, or configures the SSL certificates of one or more accelerated domain names at a time.
     *  *
     * @description > *   You can call this operation up to 10 times per second per account.
     * >*   You can specify up to 10 domain names in each request. Separate multiple domain names with commas (,)
     * >*   If the service type of a domain name is live streaming, the service may be unavailable after you configure the certificate for the domain name. Therefore, you cannot use this operation to configure the certificate for a domain name that is used for live streaming.
     *  *
     * @param BatchSetCdnDomainServerCertificateRequest $request BatchSetCdnDomainServerCertificateRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetCdnDomainServerCertificateResponse BatchSetCdnDomainServerCertificateResponse
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
     * @summary Enables, disables, or configures the SSL certificates of one or more accelerated domain names at a time.
     *  *
     * @description > *   You can call this operation up to 10 times per second per account.
     * >*   You can specify up to 10 domain names in each request. Separate multiple domain names with commas (,)
     * >*   If the service type of a domain name is live streaming, the service may be unavailable after you configure the certificate for the domain name. Therefore, you cannot use this operation to configure the certificate for a domain name that is used for live streaming.
     *  *
     * @param BatchSetCdnDomainServerCertificateRequest $request BatchSetCdnDomainServerCertificateRequest
     *
     * @return BatchSetCdnDomainServerCertificateResponse BatchSetCdnDomainServerCertificateResponse
     */
    public function batchSetCdnDomainServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetCdnDomainServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Enables one or more domain names at a time. After a domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *  *
     * @description *   If a domain name specified in the request is in an invalid state or your account has an overdue payment, the domain name cannot be enabled.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *  *
     * @param BatchStartCdnDomainRequest $request BatchStartCdnDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStartCdnDomainResponse BatchStartCdnDomainResponse
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
     * @summary Enables one or more domain names at a time. After a domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *  *
     * @description *   If a domain name specified in the request is in an invalid state or your account has an overdue payment, the domain name cannot be enabled.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *  *
     * @param BatchStartCdnDomainRequest $request BatchStartCdnDomainRequest
     *
     * @return BatchStartCdnDomainResponse BatchStartCdnDomainResponse
     */
    public function batchStartCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Disables one or more accelerated domain names at a time. After an accelerated domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *  *
     * @description *   After an accelerated domain name is disabled, Alibaba Cloud CDN retains its information and reroutes all the requests that are destined for the accelerated domain name to the origin.
     * *   If you need to temporarily disable CDN acceleration for a domain name, we recommend that you call the StopDomain operation.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *  *
     * @param BatchStopCdnDomainRequest $request BatchStopCdnDomainRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStopCdnDomainResponse BatchStopCdnDomainResponse
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
     * @summary Disables one or more accelerated domain names at a time. After an accelerated domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *  *
     * @description *   After an accelerated domain name is disabled, Alibaba Cloud CDN retains its information and reroutes all the requests that are destined for the accelerated domain name to the origin.
     * *   If you need to temporarily disable CDN acceleration for a domain name, we recommend that you call the StopDomain operation.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *  *
     * @param BatchStopCdnDomainRequest $request BatchStopCdnDomainRequest
     *
     * @return BatchStopCdnDomainResponse BatchStopCdnDomainResponse
     */
    public function batchStopCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of multiple accelerated domain names at a time.
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *  *
     * @param BatchUpdateCdnDomainRequest $request BatchUpdateCdnDomainRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUpdateCdnDomainResponse BatchUpdateCdnDomainResponse
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
     * @summary Updates the configurations of multiple accelerated domain names at a time.
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *  *
     * @param BatchUpdateCdnDomainRequest $request BatchUpdateCdnDomainRequest
     *
     * @return BatchUpdateCdnDomainResponse BatchUpdateCdnDomainResponse
     */
    public function batchUpdateCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Registers the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for an Alibaba Cloud CDN-accelerated domain name. After the registration is successful, the routing center generates the dynamic routing information and send it to DCDN points of presence (POPs). This is a prerequisite for you to transfer a domain name from Alibaba Cloud CDN to DCDN.
     *  *
     * @param CdnMigrateRegisterRequest $request CdnMigrateRegisterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CdnMigrateRegisterResponse CdnMigrateRegisterResponse
     */
    public function cdnMigrateRegisterWithOptions($request, $runtime)
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
            'action'      => 'CdnMigrateRegister',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CdnMigrateRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for an Alibaba Cloud CDN-accelerated domain name. After the registration is successful, the routing center generates the dynamic routing information and send it to DCDN points of presence (POPs). This is a prerequisite for you to transfer a domain name from Alibaba Cloud CDN to DCDN.
     *  *
     * @param CdnMigrateRegisterRequest $request CdnMigrateRegisterRequest
     *
     * @return CdnMigrateRegisterResponse CdnMigrateRegisterResponse
     */
    public function cdnMigrateRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cdnMigrateRegisterWithOptions($request, $runtime);
    }

    /**
     * @summary Transfer a domain name from Alibaba Cloud CDN to DCDN.
     *  *
     * @param ChangeCdnDomainToDcdnRequest $request ChangeCdnDomainToDcdnRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeCdnDomainToDcdnResponse ChangeCdnDomainToDcdnResponse
     */
    public function changeCdnDomainToDcdnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
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
            'action'      => 'ChangeCdnDomainToDcdn',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeCdnDomainToDcdnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transfer a domain name from Alibaba Cloud CDN to DCDN.
     *  *
     * @param ChangeCdnDomainToDcdnRequest $request ChangeCdnDomainToDcdnRequest
     *
     * @return ChangeCdnDomainToDcdnResponse ChangeCdnDomainToDcdnResponse
     */
    public function changeCdnDomainToDcdn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCdnDomainToDcdnWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a domain name exists.
     *  *
     * @param CheckCdnDomainExistRequest $request CheckCdnDomainExistRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCdnDomainExistResponse CheckCdnDomainExistResponse
     */
    public function checkCdnDomainExistWithOptions($request, $runtime)
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
            'action'      => 'CheckCdnDomainExist',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCdnDomainExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether a domain name exists.
     *  *
     * @param CheckCdnDomainExistRequest $request CheckCdnDomainExistRequest
     *
     * @return CheckCdnDomainExistResponse CheckCdnDomainExistResponse
     */
    public function checkCdnDomainExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCdnDomainExistWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether an ICP filing is obtained for the domain name.
     *  *
     * @param CheckCdnDomainICPRequest $request CheckCdnDomainICPRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckCdnDomainICPResponse CheckCdnDomainICPResponse
     */
    public function checkCdnDomainICPWithOptions($request, $runtime)
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
            'action'      => 'CheckCdnDomainICP',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCdnDomainICPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether an ICP filing is obtained for the domain name.
     *  *
     * @param CheckCdnDomainICPRequest $request CheckCdnDomainICPRequest
     *
     * @return CheckCdnDomainICPResponse CheckCdnDomainICPResponse
     */
    public function checkCdnDomainICP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCdnDomainICPWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a certificate signing request (CSR).
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param CreateCdnCertificateSigningRequestRequest $request CreateCdnCertificateSigningRequestRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCdnCertificateSigningRequestResponse CreateCdnCertificateSigningRequestResponse
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
     * @summary Creates a certificate signing request (CSR).
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param CreateCdnCertificateSigningRequestRequest $request CreateCdnCertificateSigningRequestRequest
     *
     * @return CreateCdnCertificateSigningRequestResponse CreateCdnCertificateSigningRequestResponse
     */
    public function createCdnCertificateSigningRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdnCertificateSigningRequestWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a tracking task. After you create a tracking task, the system sends operations reports to you by email on a regular basis.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param CreateCdnDeliverTaskRequest $request CreateCdnDeliverTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCdnDeliverTaskResponse CreateCdnDeliverTaskResponse
     */
    public function createCdnDeliverTaskWithOptions($request, $runtime)
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
     * @summary Creates a tracking task. After you create a tracking task, the system sends operations reports to you by email on a regular basis.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param CreateCdnDeliverTaskRequest $request CreateCdnDeliverTaskRequest
     *
     * @return CreateCdnDeliverTaskResponse CreateCdnDeliverTaskResponse
     */
    public function createCdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom operations report.
     *  *
     * @description *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     * *   You can call this operation up to three times per second per account.
     *  *
     * @param CreateCdnSubTaskRequest $request CreateCdnSubTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCdnSubTaskResponse CreateCdnSubTaskResponse
     */
    public function createCdnSubTaskWithOptions($request, $runtime)
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
     * @summary Creates a custom operations report.
     *  *
     * @description *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     * *   You can call this operation up to three times per second per account.
     *  *
     * @param CreateCdnSubTaskRequest $request CreateCdnSubTaskRequest
     *
     * @return CreateCdnSubTaskResponse CreateCdnSubTaskResponse
     */
    public function createCdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Enables real-time log delivery for specific accelerated domain names.
     *  *
     * @description >  You can call this API operation up to 100 times per second per account.
     *  *
     * @param CreateRealTimeLogDeliveryRequest $request CreateRealTimeLogDeliveryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRealTimeLogDeliveryResponse CreateRealTimeLogDeliveryResponse
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
     * @summary Enables real-time log delivery for specific accelerated domain names.
     *  *
     * @description >  You can call this API operation up to 100 times per second per account.
     *  *
     * @param CreateRealTimeLogDeliveryRequest $request CreateRealTimeLogDeliveryRequest
     *
     * @return CreateRealTimeLogDeliveryResponse CreateRealTimeLogDeliveryResponse
     */
    public function createRealTimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRealTimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task to export resource usage details to an Excel file.
     *  *
     * @description *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param CreateUsageDetailDataExportTaskRequest $request CreateUsageDetailDataExportTaskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUsageDetailDataExportTaskResponse CreateUsageDetailDataExportTaskResponse
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
     * @summary Creates a task to export resource usage details to an Excel file.
     *  *
     * @description *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param CreateUsageDetailDataExportTaskRequest $request CreateUsageDetailDataExportTaskRequest
     *
     * @return CreateUsageDetailDataExportTaskResponse CreateUsageDetailDataExportTaskResponse
     */
    public function createUsageDetailDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsageDetailDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task to export your resource usage history to a PDF file.
     *  *
     * @description *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param CreateUserUsageDataExportTaskRequest $request CreateUserUsageDataExportTaskRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserUsageDataExportTaskResponse CreateUserUsageDataExportTaskResponse
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
     * @summary Creates a task to export your resource usage history to a PDF file.
     *  *
     * @description *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param CreateUserUsageDataExportTaskRequest $request CreateUserUsageDataExportTaskRequest
     *
     * @return CreateUserUsageDataExportTaskResponse CreateUserUsageDataExportTaskResponse
     */
    public function createUserUsageDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserUsageDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes tracking tasks by task ID.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param DeleteCdnDeliverTaskRequest $request DeleteCdnDeliverTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCdnDeliverTaskResponse DeleteCdnDeliverTaskResponse
     */
    public function deleteCdnDeliverTaskWithOptions($request, $runtime)
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
     * @summary Deletes tracking tasks by task ID.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param DeleteCdnDeliverTaskRequest $request DeleteCdnDeliverTaskRequest
     *
     * @return DeleteCdnDeliverTaskResponse DeleteCdnDeliverTaskResponse
     */
    public function deleteCdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Removes an accelerated domain name from Alibaba Cloud CDN.
     *  *
     * @description *   We recommend that you add an A record for the domain name in the system of your DNS service provider before you remove the domain name from Alibaba Cloud CDN. Otherwise, the domain name may become inaccessible. Proceed with caution.
     * *   After you successfully call the DeleteCdnDomain operation, all records of the removed domain name are deleted. If you need to only disable the domain name, we recommend that you call the StopCdnDomain operation.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DeleteCdnDomainRequest $request DeleteCdnDomainRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCdnDomainResponse DeleteCdnDomainResponse
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
     * @summary Removes an accelerated domain name from Alibaba Cloud CDN.
     *  *
     * @description *   We recommend that you add an A record for the domain name in the system of your DNS service provider before you remove the domain name from Alibaba Cloud CDN. Otherwise, the domain name may become inaccessible. Proceed with caution.
     * *   After you successfully call the DeleteCdnDomain operation, all records of the removed domain name are deleted. If you need to only disable the domain name, we recommend that you call the StopCdnDomain operation.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DeleteCdnDomainRequest $request DeleteCdnDomainRequest
     *
     * @return DeleteCdnDomainResponse DeleteCdnDomainResponse
     */
    public function deleteCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @description >  You can call this API operation up to three times per second per account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCdnSubTaskResponse DeleteCdnSubTaskResponse
     */
    public function deleteCdnSubTaskWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary The ID of the request.
     *  *
     * @description >  You can call this API operation up to three times per second per account.
     *  *
     * @return DeleteCdnSubTaskResponse DeleteCdnSubTaskResponse
     */
    public function deleteCdnSubTask()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnSubTaskWithOptions($runtime);
    }

    /**
     * @summary Deletes a specified Function Compute trigger.
     *  *
     * @param DeleteFCTriggerRequest $request DeleteFCTriggerRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFCTriggerResponse DeleteFCTriggerResponse
     */
    public function deleteFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @summary Deletes a specified Function Compute trigger.
     *  *
     * @param DeleteFCTriggerRequest $request DeleteFCTriggerRequest
     *
     * @return DeleteFCTriggerResponse DeleteFCTriggerResponse
     */
    public function deleteFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the Logstore that is used by a specified configuration record of real-time log delivery.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteRealTimeLogLogstoreRequest $request DeleteRealTimeLogLogstoreRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRealTimeLogLogstoreResponse DeleteRealTimeLogLogstoreResponse
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
     * @summary Deletes the Logstore that is used by a specified configuration record of real-time log delivery.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteRealTimeLogLogstoreRequest $request DeleteRealTimeLogLogstoreRequest
     *
     * @return DeleteRealTimeLogLogstoreResponse DeleteRealTimeLogLogstoreResponse
     */
    public function deleteRealTimeLogLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRealTimeLogLogstoreWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the configurations of real-time log delivery for specific accelerated domain names.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteRealtimeLogDeliveryRequest $request DeleteRealtimeLogDeliveryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRealtimeLogDeliveryResponse DeleteRealtimeLogDeliveryResponse
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
     * @summary Deletes the configurations of real-time log delivery for specific accelerated domain names.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteRealtimeLogDeliveryRequest $request DeleteRealtimeLogDeliveryRequest
     *
     * @return DeleteRealtimeLogDeliveryResponse DeleteRealtimeLogDeliveryResponse
     */
    public function deleteRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes specified configurations of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DeleteSpecificConfigRequest $request DeleteSpecificConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSpecificConfigResponse DeleteSpecificConfigResponse
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
     * @summary Deletes specified configurations of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DeleteSpecificConfigRequest $request DeleteSpecificConfigRequest
     *
     * @return DeleteSpecificConfigResponse DeleteSpecificConfigResponse
     */
    public function deleteSpecificConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified configuration of the staging environment.
     *  *
     * @description > You can call this operation up to 20 times per second per account.
     *  *
     * @param DeleteSpecificStagingConfigRequest $request DeleteSpecificStagingConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSpecificStagingConfigResponse DeleteSpecificStagingConfigResponse
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
     * @summary Deletes a specified configuration of the staging environment.
     *  *
     * @description > You can call this operation up to 20 times per second per account.
     *  *
     * @param DeleteSpecificStagingConfigRequest $request DeleteSpecificStagingConfigRequest
     *
     * @return DeleteSpecificStagingConfigResponse DeleteSpecificStagingConfigResponse
     */
    public function deleteSpecificStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSpecificStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a task that was used to export usage details.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteUsageDetailDataExportTaskRequest $request DeleteUsageDetailDataExportTaskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUsageDetailDataExportTaskResponse DeleteUsageDetailDataExportTaskResponse
     */
    public function deleteUsageDetailDataExportTaskWithOptions($request, $runtime)
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
     * @summary Deletes a task that was used to export usage details.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteUsageDetailDataExportTaskRequest $request DeleteUsageDetailDataExportTaskRequest
     *
     * @return DeleteUsageDetailDataExportTaskResponse DeleteUsageDetailDataExportTaskResponse
     */
    public function deleteUsageDetailDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsageDetailDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a task that was used to export usage history.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteUserUsageDataExportTaskRequest $request DeleteUserUsageDataExportTaskRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserUsageDataExportTaskResponse DeleteUserUsageDataExportTaskResponse
     */
    public function deleteUserUsageDataExportTaskWithOptions($request, $runtime)
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
     * @summary Deletes a task that was used to export usage history.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DeleteUserUsageDataExportTaskRequest $request DeleteUserUsageDataExportTaskRequest
     *
     * @return DeleteUserUsageDataExportTaskResponse DeleteUserUsageDataExportTaskResponse
     */
    public function deleteUserUsageDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserUsageDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries countries and regions that can be added to the blacklist.
     *  *
     * @description > You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeBlockedRegionsRequest $request DescribeBlockedRegionsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBlockedRegionsResponse DescribeBlockedRegionsResponse
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
     * @summary Queries countries and regions that can be added to the blacklist.
     *  *
     * @description > You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeBlockedRegionsRequest $request DescribeBlockedRegionsRequest
     *
     * @return DescribeBlockedRegionsResponse DescribeBlockedRegionsResponse
     */
    public function describeBlockedRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBlockedRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about an SSL certificate.
     *  *
     * @description > You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeCdnCertificateDetailRequest $request DescribeCdnCertificateDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnCertificateDetailResponse DescribeCdnCertificateDetailResponse
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
     * @summary Queries the detailed information about an SSL certificate.
     *  *
     * @description > You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeCdnCertificateDetailRequest $request DescribeCdnCertificateDetailRequest
     *
     * @return DescribeCdnCertificateDetailResponse DescribeCdnCertificateDetailResponse
     */
    public function describeCdnCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries certificate details by certificate ID.
     *  *
     * @param DescribeCdnCertificateDetailByIdRequest $request DescribeCdnCertificateDetailByIdRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnCertificateDetailByIdResponse DescribeCdnCertificateDetailByIdResponse
     */
    public function describeCdnCertificateDetailByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certRegion)) {
            $query['CertRegion'] = $request->certRegion;
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
            'action'      => 'DescribeCdnCertificateDetailById',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnCertificateDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries certificate details by certificate ID.
     *  *
     * @param DescribeCdnCertificateDetailByIdRequest $request DescribeCdnCertificateDetailByIdRequest
     *
     * @return DescribeCdnCertificateDetailByIdResponse DescribeCdnCertificateDetailByIdResponse
     */
    public function describeCdnCertificateDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnCertificateDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI DescribeCdnCertificateList is deprecated, please use Cdn::2018-05-10::DescribeCdnSSLCertificateList instead
     *  *
     * @summary Queries the certificates of accelerated domain names.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * Deprecated
     *
     * @param DescribeCdnCertificateListRequest $request DescribeCdnCertificateListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnCertificateListResponse DescribeCdnCertificateListResponse
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
     * @deprecated openAPI DescribeCdnCertificateList is deprecated, please use Cdn::2018-05-10::DescribeCdnSSLCertificateList instead
     *  *
     * @summary Queries the certificates of accelerated domain names.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * Deprecated
     *
     * @param DescribeCdnCertificateListRequest $request DescribeCdnCertificateListRequest
     *
     * @return DescribeCdnCertificateListResponse DescribeCdnCertificateListResponse
     */
    public function describeCdnCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnCertificateListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Internet service provider (ISP), region, and country that are required for advanced conditions.
     *  *
     * @param DescribeCdnConditionIPBInfoRequest $request DescribeCdnConditionIPBInfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnConditionIPBInfoResponse DescribeCdnConditionIPBInfoResponse
     */
    public function describeCdnConditionIPBInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnConditionIPBInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnConditionIPBInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Internet service provider (ISP), region, and country that are required for advanced conditions.
     *  *
     * @param DescribeCdnConditionIPBInfoRequest $request DescribeCdnConditionIPBInfoRequest
     *
     * @return DescribeCdnConditionIPBInfoResponse DescribeCdnConditionIPBInfoResponse
     */
    public function describeCdnConditionIPBInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnConditionIPBInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the domain names that are deleted from your account.
     *  *
     * @description > You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeCdnDeletedDomainsRequest $request DescribeCdnDeletedDomainsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDeletedDomainsResponse DescribeCdnDeletedDomainsResponse
     */
    public function describeCdnDeletedDomainsWithOptions($request, $runtime)
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
     * @summary Queries the domain names that are deleted from your account.
     *  *
     * @description > You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeCdnDeletedDomainsRequest $request DescribeCdnDeletedDomainsRequest
     *
     * @return DescribeCdnDeletedDomainsResponse DescribeCdnDeletedDomainsResponse
     */
    public function describeCdnDeletedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDeletedDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more tracking tasks of operations reports.
     *  *
     * @description > You can call this operation up to 3 times per second per account.
     *  *
     * @param DescribeCdnDeliverListRequest $request DescribeCdnDeliverListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDeliverListResponse DescribeCdnDeliverListResponse
     */
    public function describeCdnDeliverListWithOptions($request, $runtime)
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
     * @summary Queries one or more tracking tasks of operations reports.
     *  *
     * @description > You can call this operation up to 3 times per second per account.
     *  *
     * @param DescribeCdnDeliverListRequest $request DescribeCdnDeliverListRequest
     *
     * @return DescribeCdnDeliverListResponse DescribeCdnDeliverListResponse
     */
    public function describeCdnDeliverList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDeliverListWithOptions($request, $runtime);
    }

    /**
     * @summary 天翼定制化小时日志下载接口
     *  *
     * @param DescribeCdnDomainAtoaLogsRequest $request DescribeCdnDomainAtoaLogsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainAtoaLogsResponse DescribeCdnDomainAtoaLogsResponse
     */
    public function describeCdnDomainAtoaLogsWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainAtoaLogs',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainAtoaLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 天翼定制化小时日志下载接口
     *  *
     * @param DescribeCdnDomainAtoaLogsRequest $request DescribeCdnDomainAtoaLogsRequest
     *
     * @return DescribeCdnDomainAtoaLogsResponse DescribeCdnDomainAtoaLogsResponse
     */
    public function describeCdnDomainAtoaLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainAtoaLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries accelerated domain names by SSL certificate.
     *  *
     * @description >  You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnDomainByCertificateRequest $request DescribeCdnDomainByCertificateRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainByCertificateResponse DescribeCdnDomainByCertificateResponse
     */
    public function describeCdnDomainByCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exact)) {
            $query['Exact'] = $request->exact;
        }
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
     * @summary Queries accelerated domain names by SSL certificate.
     *  *
     * @description >  You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnDomainByCertificateRequest $request DescribeCdnDomainByCertificateRequest
     *
     * @return DescribeCdnDomainByCertificateResponse DescribeCdnDomainByCertificateResponse
     */
    public function describeCdnDomainByCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainByCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of an accelerated domain name. You can query the configurations of one or more features at the same time.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnDomainConfigsRequest $request DescribeCdnDomainConfigsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainConfigsResponse DescribeCdnDomainConfigsResponse
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
     * @summary Queries the configurations of an accelerated domain name. You can query the configurations of one or more features at the same time.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnDomainConfigsRequest $request DescribeCdnDomainConfigsRequest
     *
     * @return DescribeCdnDomainConfigsResponse DescribeCdnDomainConfigsResponse
     */
    public function describeCdnDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information about an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnDomainDetailRequest $request DescribeCdnDomainDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainDetailResponse DescribeCdnDomainDetailResponse
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
     * @summary Queries the basic information about an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnDomainDetailRequest $request DescribeCdnDomainDetailRequest
     *
     * @return DescribeCdnDomainDetailResponse DescribeCdnDomainDetailResponse
     */
    public function describeCdnDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the address where you can download the log data of a specific domain name.
     *  *
     * @description *   If you do not set **StartTime** or **EndTime**, the request returns the data collected in the last 24 hours. If you set both **StartTime** and **EndTime**, the request returns the data collected within the specified time range.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 100 times per second per account.
     * *   You can query only logs in the last month. The start time and the current time cannot exceed 31 days.
     *  *
     * @param DescribeCdnDomainLogsRequest $request DescribeCdnDomainLogsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainLogsResponse DescribeCdnDomainLogsResponse
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
     * @summary Queries the address where you can download the log data of a specific domain name.
     *  *
     * @description *   If you do not set **StartTime** or **EndTime**, the request returns the data collected in the last 24 hours. If you set both **StartTime** and **EndTime**, the request returns the data collected within the specified time range.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 100 times per second per account.
     * *   You can query only logs in the last month. The start time and the current time cannot exceed 31 days.
     *  *
     * @param DescribeCdnDomainLogsRequest $request DescribeCdnDomainLogsRequest
     *
     * @return DescribeCdnDomainLogsResponse DescribeCdnDomainLogsResponse
     */
    public function describeCdnDomainLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCdnDomainLogsExTtlRequest $request DescribeCdnDomainLogsExTtlRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainLogsExTtlResponse DescribeCdnDomainLogsExTtlResponse
     */
    public function describeCdnDomainLogsExTtlWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnDomainLogsExTtl',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnDomainLogsExTtlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnDomainLogsExTtlRequest $request DescribeCdnDomainLogsExTtlRequest
     *
     * @return DescribeCdnDomainLogsExTtlResponse DescribeCdnDomainLogsExTtlResponse
     */
    public function describeCdnDomainLogsExTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainLogsExTtlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of features in the staging environment.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnDomainStagingConfigRequest $request DescribeCdnDomainStagingConfigRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnDomainStagingConfigResponse DescribeCdnDomainStagingConfigResponse
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
     * @summary Queries the configurations of features in the staging environment.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnDomainStagingConfigRequest $request DescribeCdnDomainStagingConfigRequest
     *
     * @return DescribeCdnDomainStagingConfigResponse DescribeCdnDomainStagingConfigResponse
     */
    public function describeCdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取海量封禁全量配置
     *  *
     * @param DescribeCdnFullDomainsBlockIPConfigRequest $request DescribeCdnFullDomainsBlockIPConfigRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnFullDomainsBlockIPConfigResponse DescribeCdnFullDomainsBlockIPConfigResponse
     */
    public function describeCdnFullDomainsBlockIPConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->IPList)) {
            $body['IPList'] = $request->IPList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnFullDomainsBlockIPConfig',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnFullDomainsBlockIPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取海量封禁全量配置
     *  *
     * @param DescribeCdnFullDomainsBlockIPConfigRequest $request DescribeCdnFullDomainsBlockIPConfigRequest
     *
     * @return DescribeCdnFullDomainsBlockIPConfigResponse DescribeCdnFullDomainsBlockIPConfigResponse
     */
    public function describeCdnFullDomainsBlockIPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnFullDomainsBlockIPConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户海量封禁历史
     *  *
     * @param DescribeCdnFullDomainsBlockIPHistoryRequest $request DescribeCdnFullDomainsBlockIPHistoryRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnFullDomainsBlockIPHistoryResponse DescribeCdnFullDomainsBlockIPHistoryResponse
     */
    public function describeCdnFullDomainsBlockIPHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->IPList)) {
            $body['IPList'] = $request->IPList;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnFullDomainsBlockIPHistory',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnFullDomainsBlockIPHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户海量封禁历史
     *  *
     * @param DescribeCdnFullDomainsBlockIPHistoryRequest $request DescribeCdnFullDomainsBlockIPHistoryRequest
     *
     * @return DescribeCdnFullDomainsBlockIPHistoryResponse DescribeCdnFullDomainsBlockIPHistoryResponse
     */
    public function describeCdnFullDomainsBlockIPHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnFullDomainsBlockIPHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about SSL certificates that belong to your Alibaba Cloud account.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnHttpsDomainListRequest $request DescribeCdnHttpsDomainListRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnHttpsDomainListResponse DescribeCdnHttpsDomainListResponse
     */
    public function describeCdnHttpsDomainListWithOptions($request, $runtime)
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
     * @summary Queries the information about SSL certificates that belong to your Alibaba Cloud account.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnHttpsDomainListRequest $request DescribeCdnHttpsDomainListRequest
     *
     * @return DescribeCdnHttpsDomainListResponse DescribeCdnHttpsDomainListResponse
     */
    public function describeCdnHttpsDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnHttpsDomainListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the registration status of the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for a domain name that is added to Alibaba Cloud CDN.
     *  *
     * @description >  If a domain name is not transferred from Alibaba Cloud CDN to DCDN after it is registered in the routing center of DCDN, the registration information is retained for only one day.
     *  *
     * @param DescribeCdnMigrateRegisterStatusRequest $request DescribeCdnMigrateRegisterStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnMigrateRegisterStatusResponse DescribeCdnMigrateRegisterStatusResponse
     */
    public function describeCdnMigrateRegisterStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnMigrateRegisterStatus',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnMigrateRegisterStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the registration status of the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for a domain name that is added to Alibaba Cloud CDN.
     *  *
     * @description >  If a domain name is not transferred from Alibaba Cloud CDN to DCDN after it is registered in the routing center of DCDN, the registration information is retained for only one day.
     *  *
     * @param DescribeCdnMigrateRegisterStatusRequest $request DescribeCdnMigrateRegisterStatusRequest
     *
     * @return DescribeCdnMigrateRegisterStatusResponse DescribeCdnMigrateRegisterStatusResponse
     */
    public function describeCdnMigrateRegisterStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnMigrateRegisterStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the code of a commodity by account UID.
     *  *
     * @param DescribeCdnOrderCommodityCodeRequest $request DescribeCdnOrderCommodityCodeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnOrderCommodityCodeResponse DescribeCdnOrderCommodityCodeResponse
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
     * @summary Queries the code of a commodity by account UID.
     *  *
     * @param DescribeCdnOrderCommodityCodeRequest $request DescribeCdnOrderCommodityCodeRequest
     *
     * @return DescribeCdnOrderCommodityCodeResponse DescribeCdnOrderCommodityCodeResponse
     */
    public function describeCdnOrderCommodityCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnOrderCommodityCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Internet service providers (ISPs) and regions that are supported by Alibaba Cloud CDN.
     *  *
     * @description *   The lists of ISPs and regions that are supported by Alibaba Cloud CDN are updated and published on the Alibaba Cloud International site.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnRegionAndIspRequest $request DescribeCdnRegionAndIspRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnRegionAndIspResponse DescribeCdnRegionAndIspResponse
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
     * @summary Queries Internet service providers (ISPs) and regions that are supported by Alibaba Cloud CDN.
     *  *
     * @description *   The lists of ISPs and regions that are supported by Alibaba Cloud CDN are updated and published on the Alibaba Cloud International site.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnRegionAndIspRequest $request DescribeCdnRegionAndIspRequest
     *
     * @return DescribeCdnRegionAndIspResponse DescribeCdnRegionAndIspResponse
     */
    public function describeCdnRegionAndIsp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnRegionAndIspWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the content of an operations report.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param DescribeCdnReportRequest $request DescribeCdnReportRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnReportResponse DescribeCdnReportResponse
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
     * @summary Queries the content of an operations report.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param DescribeCdnReportRequest $request DescribeCdnReportRequest
     *
     * @return DescribeCdnReportResponse DescribeCdnReportResponse
     */
    public function describeCdnReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnReportWithOptions($request, $runtime);
    }

    /**
     * @summary Queries operations reports.
     *  *
     * @description *   This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     * *   You can call this operation up to three times per second per account.
     *  *
     * @param DescribeCdnReportListRequest $request DescribeCdnReportListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnReportListResponse DescribeCdnReportListResponse
     */
    public function describeCdnReportListWithOptions($request, $runtime)
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
     * @summary Queries operations reports.
     *  *
     * @description *   This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     * *   You can call this operation up to three times per second per account.
     *  *
     * @param DescribeCdnReportListRequest $request DescribeCdnReportListRequest
     *
     * @return DescribeCdnReportListResponse DescribeCdnReportListResponse
     */
    public function describeCdnReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnReportListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a ShangMi (SM) certificate.
     *  *
     * @description > You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeCdnSMCertificateDetailRequest $request DescribeCdnSMCertificateDetailRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnSMCertificateDetailResponse DescribeCdnSMCertificateDetailResponse
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
     * @summary Queries the details about a ShangMi (SM) certificate.
     *  *
     * @description > You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeCdnSMCertificateDetailRequest $request DescribeCdnSMCertificateDetailRequest
     *
     * @return DescribeCdnSMCertificateDetailResponse DescribeCdnSMCertificateDetailResponse
     */
    public function describeCdnSMCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSMCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ShangMi (SM) certificates of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnSMCertificateListRequest $request DescribeCdnSMCertificateListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnSMCertificateListResponse DescribeCdnSMCertificateListResponse
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
     * @summary Queries the ShangMi (SM) certificates of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnSMCertificateListRequest $request DescribeCdnSMCertificateListRequest
     *
     * @return DescribeCdnSMCertificateListResponse DescribeCdnSMCertificateListResponse
     */
    public function describeCdnSMCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSMCertificateListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificate list by domain name.
     *  *
     * @param DescribeCdnSSLCertificateListRequest $request DescribeCdnSSLCertificateListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnSSLCertificateListResponse DescribeCdnSSLCertificateListResponse
     */
    public function describeCdnSSLCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->searchKeyword)) {
            $query['SearchKeyword'] = $request->searchKeyword;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdnSSLCertificateList',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnSSLCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the certificate list by domain name.
     *  *
     * @param DescribeCdnSSLCertificateListRequest $request DescribeCdnSSLCertificateListRequest
     *
     * @return DescribeCdnSSLCertificateListResponse DescribeCdnSSLCertificateListResponse
     */
    public function describeCdnSSLCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSSLCertificateListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about security features of Alibaba Cloud CDN.
     *  *
     * @param DescribeCdnSecFuncInfoRequest $request DescribeCdnSecFuncInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnSecFuncInfoResponse DescribeCdnSecFuncInfoResponse
     */
    public function describeCdnSecFuncInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeCdnSecFuncInfo',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnSecFuncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about security features of Alibaba Cloud CDN.
     *  *
     * @param DescribeCdnSecFuncInfoRequest $request DescribeCdnSecFuncInfoRequest
     *
     * @return DescribeCdnSecFuncInfoResponse DescribeCdnSecFuncInfoResponse
     */
    public function describeCdnSecFuncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSecFuncInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of your Alibaba Cloud CDN service. The information includes the service activation time, the current service status, the current metering method, and the metering method for the next cycle.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnServiceRequest $request DescribeCdnServiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnServiceResponse DescribeCdnServiceResponse
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
     * @summary Queries the status of your Alibaba Cloud CDN service. The information includes the service activation time, the current service status, the current metering method, and the metering method for the next cycle.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnServiceRequest $request DescribeCdnServiceRequest
     *
     * @return DescribeCdnServiceResponse DescribeCdnServiceResponse
     */
    public function describeCdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tracking tasks that you have created.
     *  *
     * @description *   By default, this operation queries all custom operations reports. However, only one operations report can be displayed. Therefore, only one operations report is returned.
     * *   You can call this operation up to three times per second per account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnSubListResponse DescribeCdnSubListResponse
     */
    public function describeCdnSubListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary Queries the tracking tasks that you have created.
     *  *
     * @description *   By default, this operation queries all custom operations reports. However, only one operations report can be displayed. Therefore, only one operations report is returned.
     * *   You can call this operation up to three times per second per account.
     *  *
     * @return DescribeCdnSubListResponse DescribeCdnSubListResponse
     */
    public function describeCdnSubList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSubListWithOptions($runtime);
    }

    /**
     * @param DescribeCdnTypesRequest $request DescribeCdnTypesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnTypesResponse DescribeCdnTypesResponse
     */
    public function describeCdnTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'DescribeCdnTypes',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdnTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdnTypesRequest $request DescribeCdnTypesRequest
     *
     * @return DescribeCdnTypesResponse DescribeCdnTypesResponse
     */
    public function describeCdnTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the billing history under your Alibaba Cloud account.
     *  *
     * @description *   You can query billing history up to the last one month.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnUserBillHistoryRequest $request DescribeCdnUserBillHistoryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserBillHistoryResponse DescribeCdnUserBillHistoryResponse
     */
    public function describeCdnUserBillHistoryWithOptions($request, $runtime)
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
     * @summary Queries the billing history under your Alibaba Cloud account.
     *  *
     * @description *   You can query billing history up to the last one month.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnUserBillHistoryRequest $request DescribeCdnUserBillHistoryRequest
     *
     * @return DescribeCdnUserBillHistoryResponse DescribeCdnUserBillHistoryResponse
     */
    public function describeCdnUserBillHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserBillHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Estimates resource usage of the current month.
     *  *
     * @description You can call this operation to estimate resource usage of the current month based on the metering method that is specified on the first day of the current month. You can call this operation to estimate resource usage only of the current month within your Alibaba Cloud account. The time range used for the estimation starts at 00:00 on the first day of the current month and ends 2 hours earlier than the current time.
     * *   Pay by monthly 95th percentile: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * *   Pay by average daily peak bandwidth per month: Estimated value = Sum of daily peak bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 4th peak bandwidth per month: The estimated value is the 4th peak bandwidth value between the start time and end time. If the time range is less than four days, the estimated value is 0.
     * *   Pay by average daily 95th percentile bandwidth per month: Estimated value = Sum of daily 95th percentile bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * > You can call this operation only once per second per account.
     *  *
     * @param DescribeCdnUserBillPredictionRequest $request DescribeCdnUserBillPredictionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserBillPredictionResponse DescribeCdnUserBillPredictionResponse
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
     * @summary Estimates resource usage of the current month.
     *  *
     * @description You can call this operation to estimate resource usage of the current month based on the metering method that is specified on the first day of the current month. You can call this operation to estimate resource usage only of the current month within your Alibaba Cloud account. The time range used for the estimation starts at 00:00 on the first day of the current month and ends 2 hours earlier than the current time.
     * *   Pay by monthly 95th percentile: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * *   Pay by average daily peak bandwidth per month: Estimated value = Sum of daily peak bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 4th peak bandwidth per month: The estimated value is the 4th peak bandwidth value between the start time and end time. If the time range is less than four days, the estimated value is 0.
     * *   Pay by average daily 95th percentile bandwidth per month: Estimated value = Sum of daily 95th percentile bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * > You can call this operation only once per second per account.
     *  *
     * @param DescribeCdnUserBillPredictionRequest $request DescribeCdnUserBillPredictionRequest
     *
     * @return DescribeCdnUserBillPredictionResponse DescribeCdnUserBillPredictionResponse
     */
    public function describeCdnUserBillPrediction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserBillPredictionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about the metering methods of an account. The maximum time range to query is one month.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnUserBillTypeRequest $request DescribeCdnUserBillTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserBillTypeResponse DescribeCdnUserBillTypeResponse
     */
    public function describeCdnUserBillTypeWithOptions($request, $runtime)
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
     * @summary Queries information about the metering methods of an account. The maximum time range to query is one month.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCdnUserBillTypeRequest $request DescribeCdnUserBillTypeRequest
     *
     * @return DescribeCdnUserBillTypeResponse DescribeCdnUserBillTypeResponse
     */
    public function describeCdnUserBillType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserBillTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries configurations of security features.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnUserConfigsRequest $request DescribeCdnUserConfigsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserConfigsResponse DescribeCdnUserConfigsResponse
     */
    public function describeCdnUserConfigsWithOptions($request, $runtime)
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
     * @summary Queries configurations of security features.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnUserConfigsRequest $request DescribeCdnUserConfigsRequest
     *
     * @return DescribeCdnUserConfigsResponse DescribeCdnUserConfigsResponse
     */
    public function describeCdnUserConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries accelerated domain names that have specified features configured and the status of the domain names.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *  *
     * @param DescribeCdnUserDomainsByFuncRequest $request DescribeCdnUserDomainsByFuncRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserDomainsByFuncResponse DescribeCdnUserDomainsByFuncResponse
     */
    public function describeCdnUserDomainsByFuncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @summary Queries accelerated domain names that have specified features configured and the status of the domain names.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *  *
     * @param DescribeCdnUserDomainsByFuncRequest $request DescribeCdnUserDomainsByFuncRequest
     *
     * @return DescribeCdnUserDomainsByFuncResponse DescribeCdnUserDomainsByFuncResponse
     */
    public function describeCdnUserDomainsByFunc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserDomainsByFuncWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quotas and usage of Alibaba Cloud CDN resources.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnUserQuotaRequest $request DescribeCdnUserQuotaRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserQuotaResponse DescribeCdnUserQuotaResponse
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
     * @summary Queries the quotas and usage of Alibaba Cloud CDN resources.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnUserQuotaRequest $request DescribeCdnUserQuotaRequest
     *
     * @return DescribeCdnUserQuotaResponse DescribeCdnUserQuotaResponse
     */
    public function describeCdnUserQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource plans that you have purchased for Alibaba Cloud CDN.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnUserResourcePackageRequest $request DescribeCdnUserResourcePackageRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnUserResourcePackageResponse DescribeCdnUserResourcePackageResponse
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
     * @summary Queries the resource plans that you have purchased for Alibaba Cloud CDN.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeCdnUserResourcePackageRequest $request DescribeCdnUserResourcePackageRequest
     *
     * @return DescribeCdnUserResourcePackageResponse DescribeCdnUserResourcePackageResponse
     */
    public function describeCdnUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries domain names that use Web Application Firewall (WAF).
     *  *
     * @description > You can call this operation up to 150 times per second per account.
     *  *
     * @param DescribeCdnWafDomainRequest $request DescribeCdnWafDomainRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdnWafDomainResponse DescribeCdnWafDomainResponse
     */
    public function describeCdnWafDomainWithOptions($request, $runtime)
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
     * @summary Queries domain names that use Web Application Firewall (WAF).
     *  *
     * @description > You can call this operation up to 150 times per second per account.
     *  *
     * @param DescribeCdnWafDomainRequest $request DescribeCdnWafDomainRequest
     *
     * @return DescribeCdnWafDomainResponse DescribeCdnWafDomainResponse
     */
    public function describeCdnWafDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnWafDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a specific certificate by certificate ID.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   If a certificate is associated with a domain name but the certificate is not enabled, the result of this operation shows that the certificate does not exist.
     *  *
     * @param DescribeCertificateInfoByIDRequest $request DescribeCertificateInfoByIDRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCertificateInfoByIDResponse DescribeCertificateInfoByIDResponse
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
     * @summary Queries the information about a specific certificate by certificate ID.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   If a certificate is associated with a domain name but the certificate is not enabled, the result of this operation shows that the certificate does not exist.
     *  *
     * @param DescribeCertificateInfoByIDRequest $request DescribeCertificateInfoByIDRequest
     *
     * @return DescribeCertificateInfoByIDResponse DescribeCertificateInfoByIDResponse
     */
    public function describeCertificateInfoByID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateInfoByIDWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a custom logging configuration.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCustomLogConfigRequest $request DescribeCustomLogConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomLogConfigResponse DescribeCustomLogConfigResponse
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
     * @summary Queries the details about a custom logging configuration.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeCustomLogConfigRequest $request DescribeCustomLogConfigRequest
     *
     * @return DescribeCustomLogConfigResponse DescribeCustomLogConfigResponse
     */
    public function describeCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the average response time of one or more accelerated domain names. You can query data collected within the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     * >*   You can specify up to 500 domain names in each request. Separate multiple domain names with commas (,).
     *  *
     * @param DescribeDomainAverageResponseTimeRequest $request DescribeDomainAverageResponseTimeRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainAverageResponseTimeResponse DescribeDomainAverageResponseTimeResponse
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
     * @summary Queries the average response time of one or more accelerated domain names. You can query data collected within the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     * >*   You can specify up to 500 domain names in each request. Separate multiple domain names with commas (,).
     *  *
     * @param DescribeDomainAverageResponseTimeRequest $request DescribeDomainAverageResponseTimeRequest
     *
     * @return DescribeDomainAverageResponseTimeResponse DescribeDomainAverageResponseTimeResponse
     */
    public function describeDomainAverageResponseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAverageResponseTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries bandwidth monitoring data for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 150 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainBpsDataRequest $request DescribeDomainBpsDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainBpsDataResponse DescribeDomainBpsDataResponse
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
     * @summary Queries bandwidth monitoring data for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 150 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainBpsDataRequest $request DescribeDomainBpsDataRequest
     *
     * @return DescribeDomainBpsDataResponse DescribeDomainBpsDataResponse
     */
    public function describeDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries bandwidth data by protocol.
     *  *
     * @description * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainBpsDataByLayerRequest $request DescribeDomainBpsDataByLayerRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainBpsDataByLayerResponse DescribeDomainBpsDataByLayerResponse
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
     * @summary Queries bandwidth data by protocol.
     *  *
     * @description * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainBpsDataByLayerRequest $request DescribeDomainBpsDataByLayerRequest
     *
     * @return DescribeDomainBpsDataByLayerResponse DescribeDomainBpsDataByLayerResponse
     */
    public function describeDomainBpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the bandwidth data at a specified time for an accelerated domain.
     *  *
     * @description *   The bandwidth is measured in bit/s.
     * *   You can specify only one accelerated domain name in each request.
     * *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeDomainBpsDataByTimeStampRequest $request DescribeDomainBpsDataByTimeStampRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainBpsDataByTimeStampResponse DescribeDomainBpsDataByTimeStampResponse
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
     * @summary Queries the bandwidth data at a specified time for an accelerated domain.
     *  *
     * @description *   The bandwidth is measured in bit/s.
     * *   You can specify only one accelerated domain name in each request.
     * *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeDomainBpsDataByTimeStampRequest $request DescribeDomainBpsDataByTimeStampRequest
     *
     * @return DescribeDomainBpsDataByTimeStampResponse DescribeDomainBpsDataByTimeStampResponse
     */
    public function describeDomainBpsDataByTimeStamp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBpsDataByTimeStampWithOptions($request, $runtime);
    }

    /**
     * @summary Queries log entries of rate limiting.
     *  *
     * @description *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both parameters empty.
     * *   You can specify up to 20 domain names in reach request. If you specify multiple domain names, separate them with commas (,).
     * *   You can query data collected over the last 30 days.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeDomainCcActivityLogRequest $request DescribeDomainCcActivityLogRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainCcActivityLogResponse DescribeDomainCcActivityLogResponse
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
     * @summary Queries log entries of rate limiting.
     *  *
     * @description *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both parameters empty.
     * *   You can specify up to 20 domain names in reach request. If you specify multiple domain names, separate them with commas (,).
     * *   You can query data collected over the last 30 days.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeDomainCcActivityLogRequest $request DescribeDomainCcActivityLogRequest
     *
     * @return DescribeDomainCcActivityLogResponse DescribeDomainCcActivityLogResponse
     */
    public function describeDomainCcActivityLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCcActivityLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the certificate information of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainCertificateInfoRequest $request DescribeDomainCertificateInfoRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainCertificateInfoResponse DescribeDomainCertificateInfoResponse
     */
    public function describeDomainCertificateInfoWithOptions($request, $runtime)
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
     * @summary Queries the certificate information of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainCertificateInfoRequest $request DescribeDomainCertificateInfoRequest
     *
     * @return DescribeDomainCertificateInfoResponse DescribeDomainCertificateInfoResponse
     */
    public function describeDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Detects the CNAME for an accelerated domain name. You can check the resolution result to determine whether the CNAME is configured.
     *  *
     * @param DescribeDomainCnameRequest $request DescribeDomainCnameRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainCnameResponse DescribeDomainCnameResponse
     */
    public function describeDomainCnameWithOptions($request, $runtime)
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
            'action'      => 'DescribeDomainCname',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detects the CNAME for an accelerated domain name. You can check the resolution result to determine whether the CNAME is configured.
     *  *
     * @param DescribeDomainCnameRequest $request DescribeDomainCnameRequest
     *
     * @return DescribeDomainCnameResponse DescribeDomainCnameResponse
     */
    public function describeDomainCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCnameWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the custom log configuration of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainCustomLogConfigRequest $request DescribeDomainCustomLogConfigRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainCustomLogConfigResponse DescribeDomainCustomLogConfigResponse
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
     * @summary Queries the custom log configuration of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainCustomLogConfigRequest $request DescribeDomainCustomLogConfigRequest
     *
     * @return DescribeDomainCustomLogConfigResponse DescribeDomainCustomLogConfigResponse
     */
    public function describeDomainCustomLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCustomLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary The domain name that you want to query. You can specify multiple domain names and separate them with commas (,). You can specify at most 30 domain names in each call.
     *  *
     * @description You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeDomainDetailDataByLayerRequest $request DescribeDomainDetailDataByLayerRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainDetailDataByLayerResponse DescribeDomainDetailDataByLayerResponse
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
     * @summary The domain name that you want to query. You can specify multiple domain names and separate them with commas (,). You can specify at most 30 domain names in each call.
     *  *
     * @description You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeDomainDetailDataByLayerRequest $request DescribeDomainDetailDataByLayerRequest
     *
     * @return DescribeDomainDetailDataByLayerResponse DescribeDomainDetailDataByLayerResponse
     */
    public function describeDomainDetailDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDetailDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries byte hit ratios that are measured in percentage.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainHitRateDataRequest $request DescribeDomainHitRateDataRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainHitRateDataResponse DescribeDomainHitRateDataResponse
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
     * @summary Queries byte hit ratios that are measured in percentage.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainHitRateDataRequest $request DescribeDomainHitRateDataRequest
     *
     * @return DescribeDomainHitRateDataResponse DescribeDomainHitRateDataResponse
     */
    public function describeDomainHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the total number and proportions of HTTP status codes returned from an accelerated domain name. The data is collected every 5 minutes.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainHttpCodeDataRequest $request DescribeDomainHttpCodeDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainHttpCodeDataResponse DescribeDomainHttpCodeDataResponse
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
     * @summary Queries the total number and proportions of HTTP status codes returned from an accelerated domain name. The data is collected every 5 minutes.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainHttpCodeDataRequest $request DescribeDomainHttpCodeDataRequest
     *
     * @return DescribeDomainHttpCodeDataResponse DescribeDomainHttpCodeDataResponse
     */
    public function describeDomainHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries HTTP status codes by protocol.
     *  *
     * @description * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainHttpCodeDataByLayerRequest $request DescribeDomainHttpCodeDataByLayerRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainHttpCodeDataByLayerResponse DescribeDomainHttpCodeDataByLayerResponse
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
     * @summary Queries HTTP status codes by protocol.
     *  *
     * @description * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainHttpCodeDataByLayerRequest $request DescribeDomainHttpCodeDataByLayerRequest
     *
     * @return DescribeDomainHttpCodeDataByLayerResponse DescribeDomainHttpCodeDataByLayerResponse
     */
    public function describeDomainHttpCodeDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainHttpCodeDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the proportions of data usage of different Internet service providers (ISPs). Data is collected every day. You can query data collected in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set StartTime or EndTime, the request returns the data collected in the last 24 hours. If you set both StartTime and EndTime, the request returns the data collected within the specified time range.
     * >*   This operation queries proportions of data usage of different ISPs for only a specific accelerated domain name, or for all accelerated domain names in your Alibaba Cloud account.
     * >*   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainISPDataRequest $request DescribeDomainISPDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainISPDataResponse DescribeDomainISPDataResponse
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
     * @summary Queries the proportions of data usage of different Internet service providers (ISPs). Data is collected every day. You can query data collected in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set StartTime or EndTime, the request returns the data collected in the last 24 hours. If you set both StartTime and EndTime, the request returns the data collected within the specified time range.
     * >*   This operation queries proportions of data usage of different ISPs for only a specific accelerated domain name, or for all accelerated domain names in your Alibaba Cloud account.
     * >*   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainISPDataRequest $request DescribeDomainISPDataRequest
     *
     * @return DescribeDomainISPDataResponse DescribeDomainISPDataResponse
     */
    public function describeDomainISPData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainISPDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the 95th percentile bandwidth data of a domain name.
     *  *
     * @description **You can use one of the following methods to query data:**
     * *   If you specify the StartTime and EndTime parameters and the time range that is specified by these parameters is less than or equal to 24 hours, the 95th percentile bandwidth data on the day of the start time is returned. If the time range that is specified by these parameters is more than 24 hours, the 95th percentile bandwidth data in the month of the start time is returned.
     * *   If you specify the TimePoint and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * *   If you specify the StartTime, EndTime, and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * If you do not use one of the methods, the 95th percentile bandwidth data of the previous 24 hours is returned by default.
     * * Maximum time range to query: 90 days
     * * Minimum data granularity to query: 1 day
     * * Historical data available: 90 days
     * - You can call this operation up to 100 times per second per account.
     * - The unit of the bandwidth data returned is bit/s.
     *  *
     * @param DescribeDomainMax95BpsDataRequest $request DescribeDomainMax95BpsDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainMax95BpsDataResponse DescribeDomainMax95BpsDataResponse
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
     * @summary Queries the 95th percentile bandwidth data of a domain name.
     *  *
     * @description **You can use one of the following methods to query data:**
     * *   If you specify the StartTime and EndTime parameters and the time range that is specified by these parameters is less than or equal to 24 hours, the 95th percentile bandwidth data on the day of the start time is returned. If the time range that is specified by these parameters is more than 24 hours, the 95th percentile bandwidth data in the month of the start time is returned.
     * *   If you specify the TimePoint and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * *   If you specify the StartTime, EndTime, and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * If you do not use one of the methods, the 95th percentile bandwidth data of the previous 24 hours is returned by default.
     * * Maximum time range to query: 90 days
     * * Minimum data granularity to query: 1 day
     * * Historical data available: 90 days
     * - You can call this operation up to 100 times per second per account.
     * - The unit of the bandwidth data returned is bit/s.
     *  *
     * @param DescribeDomainMax95BpsDataRequest $request DescribeDomainMax95BpsDataRequest
     *
     * @return DescribeDomainMax95BpsDataResponse DescribeDomainMax95BpsDataResponse
     */
    public function describeDomainMax95BpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainMax95BpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the traffic data and the number of requests for multiple accelerated domain names at a time.
     *  *
     * @description *   If you do not set StartTime or EndTime, data collected within the last 10 minutes is queried.
     * *   The maximum interval between StartTime and EndTime is 1 hour.
     * *   You can query data within the last 90 days.
     * *   You can query the traffic data and the number of requests for accelerated domain names that are deleted.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeDomainMultiUsageDataRequest $request DescribeDomainMultiUsageDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainMultiUsageDataResponse DescribeDomainMultiUsageDataResponse
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
     * @summary Queries the traffic data and the number of requests for multiple accelerated domain names at a time.
     *  *
     * @description *   If you do not set StartTime or EndTime, data collected within the last 10 minutes is queried.
     * *   The maximum interval between StartTime and EndTime is 1 hour.
     * *   You can query data within the last 90 days.
     * *   You can query the traffic data and the number of requests for accelerated domain names that are deleted.
     * *   You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeDomainMultiUsageDataRequest $request DescribeDomainMultiUsageDataRequest
     *
     * @return DescribeDomainMultiUsageDataResponse DescribeDomainMultiUsageDataResponse
     */
    public function describeDomainMultiUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainMultiUsageDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries monitoring data including the amount of network traffic and the number of visits by directory.
     *  *
     * @description *   This operation is available only to users that are on the whitelist. If the daily peak bandwidth value of your workloads reaches 10 Gbit/s, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply to be included in the whitelist.
     * *   You can call this API operation up to 6,000 times per second per account.
     * *   Data collection by directory is available only to specified domain names within your Alibaba Cloud account. It cannot be enabled for all domain names within your Alibaba Cloud account.
     * *   The average size of the files that belong to the domain name must be larger than 1 MB.
     * *   The number of directories specified for a single domain name cannot exceed 100. If the number of directories exceeds 100, the data accuracy reduces.
     * *   If you do not set StartTime or EndTime, data collected within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query data collected within the last 30 days.
     *  *
     * @param DescribeDomainPathDataRequest $request DescribeDomainPathDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainPathDataResponse DescribeDomainPathDataResponse
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
     * @summary Queries monitoring data including the amount of network traffic and the number of visits by directory.
     *  *
     * @description *   This operation is available only to users that are on the whitelist. If the daily peak bandwidth value of your workloads reaches 10 Gbit/s, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply to be included in the whitelist.
     * *   You can call this API operation up to 6,000 times per second per account.
     * *   Data collection by directory is available only to specified domain names within your Alibaba Cloud account. It cannot be enabled for all domain names within your Alibaba Cloud account.
     * *   The average size of the files that belong to the domain name must be larger than 1 MB.
     * *   The number of directories specified for a single domain name cannot exceed 100. If the number of directories exceeds 100, the data accuracy reduces.
     * *   If you do not set StartTime or EndTime, data collected within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query data collected within the last 30 days.
     *  *
     * @param DescribeDomainPathDataRequest $request DescribeDomainPathDataRequest
     *
     * @return DescribeDomainPathDataResponse DescribeDomainPathDataResponse
     */
    public function describeDomainPathData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainPathDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the page view (PV) data of an accelerated domain name. The data is collected at an interval of 1 hour. You can query data in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeDomainPvDataRequest $request DescribeDomainPvDataRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainPvDataResponse DescribeDomainPvDataResponse
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
     * @summary Queries the page view (PV) data of an accelerated domain name. The data is collected at an interval of 1 hour. You can query data in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeDomainPvDataRequest $request DescribeDomainPvDataRequest
     *
     * @return DescribeDomainPvDataResponse DescribeDomainPvDataResponse
     */
    public function describeDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of queries per second (QPS) for an accelerated domain name. The data is collected every 5 minutes. You can query data collected within the last 90 days.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainQpsDataRequest $request DescribeDomainQpsDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainQpsDataResponse DescribeDomainQpsDataResponse
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
     * @summary Queries the number of queries per second (QPS) for an accelerated domain name. The data is collected every 5 minutes. You can query data collected within the last 90 days.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainQpsDataRequest $request DescribeDomainQpsDataRequest
     *
     * @return DescribeDomainQpsDataResponse DescribeDomainQpsDataResponse
     */
    public function describeDomainQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of queries per second (QPS) at a specific layer for one or more accelerated domain names. You can query data collected within the last 90 days.
     *  *
     * @description * You can call this operation up to 20 times per second per user.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainQpsDataByLayerRequest $request DescribeDomainQpsDataByLayerRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainQpsDataByLayerResponse DescribeDomainQpsDataByLayerResponse
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
     * @summary Queries the number of queries per second (QPS) at a specific layer for one or more accelerated domain names. You can query data collected within the last 90 days.
     *  *
     * @description * You can call this operation up to 20 times per second per user.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainQpsDataByLayerRequest $request DescribeDomainQpsDataByLayerRequest
     *
     * @return DescribeDomainQpsDataByLayerResponse DescribeDomainQpsDataByLayerResponse
     */
    public function describeDomainQpsDataByLayer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainQpsDataByLayerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the bandwidth data about one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeBpsDataRequest $request DescribeDomainRealTimeBpsDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeBpsDataResponse DescribeDomainRealTimeBpsDataResponse
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
     * @summary Queries the bandwidth data about one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeBpsDataRequest $request DescribeDomainRealTimeBpsDataRequest
     *
     * @return DescribeDomainRealTimeBpsDataResponse DescribeDomainRealTimeBpsDataResponse
     */
    public function describeDomainRealTimeBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeBpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the byte hit ratios of accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeByteHitRateDataRequest $request DescribeDomainRealTimeByteHitRateDataRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeByteHitRateDataResponse DescribeDomainRealTimeByteHitRateDataResponse
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
     * @summary Queries the byte hit ratios of accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeByteHitRateDataRequest $request DescribeDomainRealTimeByteHitRateDataRequest
     *
     * @return DescribeDomainRealTimeByteHitRateDataResponse DescribeDomainRealTimeByteHitRateDataResponse
     */
    public function describeDomainRealTimeByteHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeByteHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time monitoring data for a domain name.
     *  *
     * @description *   You can query data in the last seven days. Data is collected every minute.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainRealTimeDetailDataRequest $request DescribeDomainRealTimeDetailDataRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeDetailDataResponse DescribeDomainRealTimeDetailDataResponse
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
     * @summary Queries the real-time monitoring data for a domain name.
     *  *
     * @description *   You can query data in the last seven days. Data is collected every minute.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainRealTimeDetailDataRequest $request DescribeDomainRealTimeDetailDataRequest
     *
     * @return DescribeDomainRealTimeDetailDataResponse DescribeDomainRealTimeDetailDataResponse
     */
    public function describeDomainRealTimeDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeDetailDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the total number and proportions of HTTP status codes returned from an accelerated domain name.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeHttpCodeDataRequest $request DescribeDomainRealTimeHttpCodeDataRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeHttpCodeDataResponse DescribeDomainRealTimeHttpCodeDataResponse
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
     * @summary Queries the total number and proportions of HTTP status codes returned from an accelerated domain name.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeHttpCodeDataRequest $request DescribeDomainRealTimeHttpCodeDataRequest
     *
     * @return DescribeDomainRealTimeHttpCodeDataResponse DescribeDomainRealTimeHttpCodeDataResponse
     */
    public function describeDomainRealTimeHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of queries per second for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeQpsDataRequest $request DescribeDomainRealTimeQpsDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeQpsDataResponse DescribeDomainRealTimeQpsDataResponse
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
     * @summary Queries the number of queries per second for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeQpsDataRequest $request DescribeDomainRealTimeQpsDataRequest
     *
     * @return DescribeDomainRealTimeQpsDataResponse DescribeDomainRealTimeQpsDataResponse
     */
    public function describeDomainRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the request hit ratios for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * * By default, requests in the Go programming language use the POST request method. You must manually change the request method to GET by declaring: request.Method="GET".
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the request hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeReqHitRateDataRequest $request DescribeDomainRealTimeReqHitRateDataRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeReqHitRateDataResponse DescribeDomainRealTimeReqHitRateDataResponse
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
     * @summary Queries the request hit ratios for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * * By default, requests in the Go programming language use the POST request method. You must manually change the request method to GET by declaring: request.Method="GET".
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the request hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeReqHitRateDataRequest $request DescribeDomainRealTimeReqHitRateDataRequest
     *
     * @return DescribeDomainRealTimeReqHitRateDataResponse DescribeDomainRealTimeReqHitRateDataResponse
     */
    public function describeDomainRealTimeReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries origin bandwidth data for accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeSrcBpsDataRequest $request DescribeDomainRealTimeSrcBpsDataRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeSrcBpsDataResponse DescribeDomainRealTimeSrcBpsDataResponse
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
     * @summary Queries origin bandwidth data for accelerated domain names.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeSrcBpsDataRequest $request DescribeDomainRealTimeSrcBpsDataRequest
     *
     * @return DescribeDomainRealTimeSrcBpsDataResponse DescribeDomainRealTimeSrcBpsDataResponse
     */
    public function describeDomainRealTimeSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the total number and proportions of HTTP status codes returned during back-to-origin routing.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeSrcHttpCodeDataRequest $request DescribeDomainRealTimeSrcHttpCodeDataRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeSrcHttpCodeDataResponse DescribeDomainRealTimeSrcHttpCodeDataResponse
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
     * @summary Queries the total number and proportions of HTTP status codes returned during back-to-origin routing.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeSrcHttpCodeDataRequest $request DescribeDomainRealTimeSrcHttpCodeDataRequest
     *
     * @return DescribeDomainRealTimeSrcHttpCodeDataResponse DescribeDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDomainRealTimeSrcHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring data of back-to-origin traffic for one or more specified accelerated domains. The data is collected every minute.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour by default. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeSrcTrafficDataRequest $request DescribeDomainRealTimeSrcTrafficDataRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeSrcTrafficDataResponse DescribeDomainRealTimeSrcTrafficDataResponse
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
     * @summary Queries the monitoring data of back-to-origin traffic for one or more specified accelerated domains. The data is collected every minute.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour by default. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeSrcTrafficDataRequest $request DescribeDomainRealTimeSrcTrafficDataRequest
     *
     * @return DescribeDomainRealTimeSrcTrafficDataResponse DescribeDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDomainRealTimeSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring data of network traffic for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 50 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeTrafficDataRequest $request DescribeDomainRealTimeTrafficDataRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealTimeTrafficDataResponse DescribeDomainRealTimeTrafficDataResponse
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
     * @summary Queries the monitoring data of network traffic for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 50 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *  *
     * @param DescribeDomainRealTimeTrafficDataRequest $request DescribeDomainRealTimeTrafficDataRequest
     *
     * @return DescribeDomainRealTimeTrafficDataResponse DescribeDomainRealTimeTrafficDataResponse
     */
    public function describeDomainRealTimeTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealTimeTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time log delivery information about an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainRealtimeLogDeliveryRequest $request DescribeDomainRealtimeLogDeliveryRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRealtimeLogDeliveryResponse DescribeDomainRealtimeLogDeliveryResponse
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
     * @summary Queries the real-time log delivery information about an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainRealtimeLogDeliveryRequest $request DescribeDomainRealtimeLogDeliveryRequest
     *
     * @return DescribeDomainRealtimeLogDeliveryResponse DescribeDomainRealtimeLogDeliveryResponse
     */
    public function describeDomainRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the geographic distribution of users for a domain name. The data is collected at an interval of one day. You can query the data in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you not use this operation because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not specify the **StartTime** or **EndTime** parameter, data collected within the last **24** hours is queried. If you specify both the **StartTime** and **EndTime** parameters, data collected within the specified time range is queried.
     * >*   There is delay in data collection. If you want to query data collected within the last day, we recommend that you query the data on the next day.
     * >*   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainRegionDataRequest $request DescribeDomainRegionDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRegionDataResponse DescribeDomainRegionDataResponse
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
     * @summary Queries the geographic distribution of users for a domain name. The data is collected at an interval of one day. You can query the data in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you not use this operation because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not specify the **StartTime** or **EndTime** parameter, data collected within the last **24** hours is queried. If you specify both the **StartTime** and **EndTime** parameters, data collected within the specified time range is queried.
     * >*   There is delay in data collection. If you want to query data collected within the last day, we recommend that you query the data on the next day.
     * >*   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainRegionDataRequest $request DescribeDomainRegionDataRequest
     *
     * @return DescribeDomainRegionDataResponse DescribeDomainRegionDataResponse
     */
    public function describeDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the request hit ratio in percentage.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainReqHitRateDataRequest $request DescribeDomainReqHitRateDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainReqHitRateDataResponse DescribeDomainReqHitRateDataResponse
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
     * @summary Queries the request hit ratio in percentage.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainReqHitRateDataRequest $request DescribeDomainReqHitRateDataRequest
     *
     * @return DescribeDomainReqHitRateDataResponse DescribeDomainReqHitRateDataResponse
     */
    public function describeDomainReqHitRateData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainReqHitRateDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries bandwidth monitoring data of requests that are redirected to origin servers for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcBpsDataRequest $request DescribeDomainSrcBpsDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSrcBpsDataResponse DescribeDomainSrcBpsDataResponse
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
     * @summary Queries bandwidth monitoring data of requests that are redirected to origin servers for one or more accelerated domain names.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcBpsDataRequest $request DescribeDomainSrcBpsDataRequest
     *
     * @return DescribeDomainSrcBpsDataResponse DescribeDomainSrcBpsDataResponse
     */
    public function describeDomainSrcBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcBpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the proportions of HTTP status codes that are returned during back-to-origin routing.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcHttpCodeDataRequest $request DescribeDomainSrcHttpCodeDataRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSrcHttpCodeDataResponse DescribeDomainSrcHttpCodeDataResponse
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
     * @summary Queries the proportions of HTTP status codes that are returned during back-to-origin routing.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcHttpCodeDataRequest $request DescribeDomainSrcHttpCodeDataRequest
     *
     * @return DescribeDomainSrcHttpCodeDataResponse DescribeDomainSrcHttpCodeDataResponse
     */
    public function describeDomainSrcHttpCodeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcHttpCodeDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of queries per second (QPS) that are sent to the origin server. You can query data collected in the last 90 days.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcQpsDataRequest $request DescribeDomainSrcQpsDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSrcQpsDataResponse DescribeDomainSrcQpsDataResponse
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
     * @summary Queries the number of queries per second (QPS) that are sent to the origin server. You can query data collected in the last 90 days.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcQpsDataRequest $request DescribeDomainSrcQpsDataRequest
     *
     * @return DescribeDomainSrcQpsDataResponse DescribeDomainSrcQpsDataResponse
     */
    public function describeDomainSrcQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcQpsDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries frequently requested origin URLs of one or more accelerated domain names.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   The data is collected at an interval of 5 minutes.
     * >*   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainSrcTopUrlVisitRequest $request DescribeDomainSrcTopUrlVisitRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSrcTopUrlVisitResponse DescribeDomainSrcTopUrlVisitResponse
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
     * @summary Queries frequently requested origin URLs of one or more accelerated domain names.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   The data is collected at an interval of 5 minutes.
     * >*   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainSrcTopUrlVisitRequest $request DescribeDomainSrcTopUrlVisitRequest
     *
     * @return DescribeDomainSrcTopUrlVisitResponse DescribeDomainSrcTopUrlVisitResponse
     */
    public function describeDomainSrcTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries origin traffic for one or more specified accelerated domain names.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcTrafficDataRequest $request DescribeDomainSrcTrafficDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainSrcTrafficDataResponse DescribeDomainSrcTrafficDataResponse
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
     * @summary Queries origin traffic for one or more specified accelerated domain names.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainSrcTrafficDataRequest $request DescribeDomainSrcTrafficDataRequest
     *
     * @return DescribeDomainSrcTrafficDataResponse DescribeDomainSrcTrafficDataResponse
     */
    public function describeDomainSrcTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainSrcTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries client IP addresses that are ranked by the number of requests or the amount of network traffic within a specific time range for one or more accelerated domain names. You can query data collected within the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   Data is collected every hour.
     * >*   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainTopClientIpVisitRequest $request DescribeDomainTopClientIpVisitRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainTopClientIpVisitResponse DescribeDomainTopClientIpVisitResponse
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
     * @summary Queries client IP addresses that are ranked by the number of requests or the amount of network traffic within a specific time range for one or more accelerated domain names. You can query data collected within the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   Data is collected every hour.
     * >*   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainTopClientIpVisitRequest $request DescribeDomainTopClientIpVisitRequest
     *
     * @return DescribeDomainTopClientIpVisitResponse DescribeDomainTopClientIpVisitResponse
     */
    public function describeDomainTopClientIpVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopClientIpVisitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries frequently requested web pages of one or more accelerated domain names on a specified day and sorts the web pages. You can query data collected within the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature or [ship real-time logs in Log Service](https://help.aliyun.com/document_detail/440145.html) to analyze data.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   Data is collected at an interval of five minutes.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainTopReferVisitRequest $request DescribeDomainTopReferVisitRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainTopReferVisitResponse DescribeDomainTopReferVisitResponse
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
     * @summary Queries frequently requested web pages of one or more accelerated domain names on a specified day and sorts the web pages. You can query data collected within the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature or [ship real-time logs in Log Service](https://help.aliyun.com/document_detail/440145.html) to analyze data.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   Data is collected at an interval of five minutes.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainTopReferVisitRequest $request DescribeDomainTopReferVisitRequest
     *
     * @return DescribeDomainTopReferVisitResponse DescribeDomainTopReferVisitResponse
     */
    public function describeDomainTopReferVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopReferVisitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries top 100 frequently requested URLs of an accelerated domain name within a specified time range.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can query data collected in the last 90 days.
     * >*   You can specify only one domain name in each call.
     * >*   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainTopUrlVisitRequest $request DescribeDomainTopUrlVisitRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainTopUrlVisitResponse DescribeDomainTopUrlVisitResponse
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
     * @summary Queries top 100 frequently requested URLs of an accelerated domain name within a specified time range.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can query data collected in the last 90 days.
     * >*   You can specify only one domain name in each call.
     * >*   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeDomainTopUrlVisitRequest $request DescribeDomainTopUrlVisitRequest
     *
     * @return DescribeDomainTopUrlVisitResponse DescribeDomainTopUrlVisitResponse
     */
    public function describeDomainTopUrlVisit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTopUrlVisitWithOptions($request, $runtime);
    }

    /**
     * @summary Queries network traffic for one or more accelerated domain names. You can query data that is collected in the last 90 days.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366|04:00 on the next day|
     *  *
     * @param DescribeDomainTrafficDataRequest $request DescribeDomainTrafficDataRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainTrafficDataResponse DescribeDomainTrafficDataResponse
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
     * @summary Queries network traffic for one or more accelerated domain names. You can query data that is collected in the last 90 days.
     *  *
     * @description * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366|04:00 on the next day|
     *  *
     * @param DescribeDomainTrafficDataRequest $request DescribeDomainTrafficDataRequest
     *
     * @return DescribeDomainTrafficDataResponse DescribeDomainTrafficDataResponse
     */
    public function describeDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource usage data of specific domain names in a specified billable region.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|90 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainUsageDataRequest $request DescribeDomainUsageDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainUsageDataResponse DescribeDomainUsageDataResponse
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
     * @summary Queries the resource usage data of specific domain names in a specified billable region.
     *  *
     * @description * You can call this operation up to 10 times per second per account.
     * * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|90 days|366 days|04:00 on the next day|
     *  *
     * @param DescribeDomainUsageDataRequest $request DescribeDomainUsageDataRequest
     *
     * @return DescribeDomainUsageDataResponse DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the unique visitor (UV) data of an accelerated domain name. Data is collected every hour. You can query data collected in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   You can specify only one accelerated domain name or all accelerated domain names in your Alibaba Cloud account.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainUvDataRequest $request DescribeDomainUvDataRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainUvDataResponse DescribeDomainUvDataResponse
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
     * @summary Queries the unique visitor (UV) data of an accelerated domain name. Data is collected every hour. You can query data collected in the last 90 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   You can specify only one accelerated domain name or all accelerated domain names in your Alibaba Cloud account.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeDomainUvDataRequest $request DescribeDomainUvDataRequest
     *
     * @return DescribeDomainUvDataResponse DescribeDomainUvDataResponse
     */
    public function describeDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the verification content of a domain name, including the host record and record value.
     *  *
     * @description You can call this operation to query the verification content of an accelerated domain name based on whether the global resource plan is enabled.
     *  *
     * @param DescribeDomainVerifyDataRequest $request DescribeDomainVerifyDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainVerifyDataResponse DescribeDomainVerifyDataResponse
     */
    public function describeDomainVerifyDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->globalResourcePlan)) {
            $query['GlobalResourcePlan'] = $request->globalResourcePlan;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainVerifyData',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainVerifyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the verification content of a domain name, including the host record and record value.
     *  *
     * @description You can call this operation to query the verification content of an accelerated domain name based on whether the global resource plan is enabled.
     *  *
     * @param DescribeDomainVerifyDataRequest $request DescribeDomainVerifyDataRequest
     *
     * @return DescribeDomainVerifyDataResponse DescribeDomainVerifyDataResponse
     */
    public function describeDomainVerifyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainVerifyDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries accelerated domain names by origin server.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeDomainsBySourceRequest $request DescribeDomainsBySourceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainsBySourceResponse DescribeDomainsBySourceResponse
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
     * @summary Queries accelerated domain names by origin server.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeDomainsBySourceRequest $request DescribeDomainsBySourceRequest
     *
     * @return DescribeDomainsBySourceResponse DescribeDomainsBySourceResponse
     */
    public function describeDomainsBySource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsBySourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring data of an accelerated domain name. Data is collected every day. You can query data collected within the last 90 days.
     *  *
     * @description *   You can call this operation up to 10 times per second per account.
     * *   If you do not set StartTime or EndTime, data within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query the monitoring data of a specific accelerated domain name or all accelerated domain names that belong to your Alibaba Cloud account.
     *  *
     * @param DescribeDomainsUsageByDayRequest $request DescribeDomainsUsageByDayRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainsUsageByDayResponse DescribeDomainsUsageByDayResponse
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
     * @summary Queries the monitoring data of an accelerated domain name. Data is collected every day. You can query data collected within the last 90 days.
     *  *
     * @description *   You can call this operation up to 10 times per second per account.
     * *   If you do not set StartTime or EndTime, data within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query the monitoring data of a specific accelerated domain name or all accelerated domain names that belong to your Alibaba Cloud account.
     *  *
     * @param DescribeDomainsUsageByDayRequest $request DescribeDomainsUsageByDayRequest
     *
     * @return DescribeDomainsUsageByDayResponse DescribeDomainsUsageByDayResponse
     */
    public function describeDomainsUsageByDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsUsageByDayWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution errors of a script in EdgeScript (ES).
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeEsExceptionDataRequest $request DescribeEsExceptionDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEsExceptionDataResponse DescribeEsExceptionDataResponse
     */
    public function describeEsExceptionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
     * @summary Queries the execution errors of a script in EdgeScript (ES).
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeEsExceptionDataRequest $request DescribeEsExceptionDataRequest
     *
     * @return DescribeEsExceptionDataResponse DescribeEsExceptionDataResponse
     */
    public function describeEsExceptionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEsExceptionDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution status of scripts in EdgeScript (ES).
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeEsExecuteDataRequest $request DescribeEsExecuteDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEsExecuteDataResponse DescribeEsExecuteDataResponse
     */
    public function describeEsExecuteDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
     * @summary Queries the execution status of scripts in EdgeScript (ES).
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeEsExecuteDataRequest $request DescribeEsExecuteDataRequest
     *
     * @return DescribeEsExecuteDataResponse DescribeEsExecuteDataResponse
     */
    public function describeEsExecuteData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEsExecuteDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a specified Function Compute trigger.
     *  *
     * @param DescribeFCTriggerRequest $request DescribeFCTriggerRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFCTriggerResponse DescribeFCTriggerResponse
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
     * @summary Queries a specified Function Compute trigger.
     *  *
     * @param DescribeFCTriggerRequest $request DescribeFCTriggerRequest
     *
     * @return DescribeFCTriggerResponse DescribeFCTriggerResponse
     */
    public function describeFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a specified IP address is the IP address of a CDN point of presence (POP).
     *  *
     * @param DescribeIpInfoRequest $request DescribeIpInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpInfoResponse DescribeIpInfoResponse
     */
    public function describeIpInfoWithOptions($request, $runtime)
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
     * @summary Checks whether a specified IP address is the IP address of a CDN point of presence (POP).
     *  *
     * @param DescribeIpInfoRequest $request DescribeIpInfoRequest
     *
     * @return DescribeIpInfoResponse DescribeIpInfoResponse
     */
    public function describeIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of IP addresses of points of presence (POPs). The status of an IP address of a POP indicates whether content delivery acceleration is supported by the POP.
     *  *
     * @description > You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeIpStatusRequest $request DescribeIpStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIpStatusResponse DescribeIpStatusResponse
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
     * @summary Queries the status of IP addresses of points of presence (POPs). The status of an IP address of a POP indicates whether content delivery acceleration is supported by the POP.
     *  *
     * @description > You can call this operation up to 50 times per second per account.
     *  *
     * @param DescribeIpStatusRequest $request DescribeIpStatusRequest
     *
     * @return DescribeIpStatusResponse DescribeIpStatusResponse
     */
    public function describeIpStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the virtual IP addresses (VIPs) of L2 CDN points of presence (POPs) for a specific domain name.
     *  *
     * @description *   This operation is available only to users whose daily peak bandwidth value is higher than 1 Gbit/s. If you meet this requirement, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply for permissions to use this operation.
     * *   You can call this operation up to 40 times per second per account.
     *  *
     * @param DescribeL2VipsByDomainRequest $request DescribeL2VipsByDomainRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeL2VipsByDomainResponse DescribeL2VipsByDomainResponse
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
     * @summary Queries the virtual IP addresses (VIPs) of L2 CDN points of presence (POPs) for a specific domain name.
     *  *
     * @description *   This operation is available only to users whose daily peak bandwidth value is higher than 1 Gbit/s. If you meet this requirement, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply for permissions to use this operation.
     * *   You can call this operation up to 40 times per second per account.
     *  *
     * @param DescribeL2VipsByDomainRequest $request DescribeL2VipsByDomainRequest
     *
     * @return DescribeL2VipsByDomainResponse DescribeL2VipsByDomainResponse
     */
    public function describeL2VipsByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeL2VipsByDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the prefetch details of a task, including the prefetch progress of all resources in the task. Only users who are included in the whitelist can use this operation. You can contact your business manager to apply for the whitelist.
     *  *
     * @description *   You can query data within the last 3 days.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribePreloadDetailByIdRequest $request DescribePreloadDetailByIdRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePreloadDetailByIdResponse DescribePreloadDetailByIdResponse
     */
    public function describePreloadDetailByIdWithOptions($request, $runtime)
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
            'action'      => 'DescribePreloadDetailById',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePreloadDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the prefetch details of a task, including the prefetch progress of all resources in the task. Only users who are included in the whitelist can use this operation. You can contact your business manager to apply for the whitelist.
     *  *
     * @description *   You can query data within the last 3 days.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribePreloadDetailByIdRequest $request DescribePreloadDetailByIdRequest
     *
     * @return DescribePreloadDetailByIdResponse DescribePreloadDetailByIdResponse
     */
    public function describePreloadDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreloadDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the bandwidth values by Internet service provider (ISP) and region.
     *  *
     * @description *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeRangeDataByLocateAndIspServiceRequest $request DescribeRangeDataByLocateAndIspServiceRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRangeDataByLocateAndIspServiceResponse DescribeRangeDataByLocateAndIspServiceResponse
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
     * @summary Queries the bandwidth values by Internet service provider (ISP) and region.
     *  *
     * @description *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *  *
     * @param DescribeRangeDataByLocateAndIspServiceRequest $request DescribeRangeDataByLocateAndIspServiceRequest
     *
     * @return DescribeRangeDataByLocateAndIspServiceResponse DescribeRangeDataByLocateAndIspServiceResponse
     */
    public function describeRangeDataByLocateAndIspService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRangeDataByLocateAndIspServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of real-time log deliveries.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeRealtimeDeliveryAccRequest $request DescribeRealtimeDeliveryAccRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRealtimeDeliveryAccResponse DescribeRealtimeDeliveryAccResponse
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
     * @summary Queries the number of real-time log deliveries.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeRealtimeDeliveryAccRequest $request DescribeRealtimeDeliveryAccRequest
     *
     * @return DescribeRealtimeDeliveryAccResponse DescribeRealtimeDeliveryAccResponse
     */
    public function describeRealtimeDeliveryAcc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRealtimeDeliveryAccWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeRefreshQuota
     *  *
     * @description Queries the maximum and remaining numbers of URLs and directories that can be refreshed, the maximum and remaining numbers of times that you can prefetch content, and the maximum and remaining numbers of URLs and directories that can be blocked on the current day.
     *  *
     * @param DescribeRefreshQuotaRequest $request DescribeRefreshQuotaRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRefreshQuotaResponse DescribeRefreshQuotaResponse
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
     * @summary DescribeRefreshQuota
     *  *
     * @description Queries the maximum and remaining numbers of URLs and directories that can be refreshed, the maximum and remaining numbers of times that you can prefetch content, and the maximum and remaining numbers of URLs and directories that can be blocked on the current day.
     *  *
     * @param DescribeRefreshQuotaRequest $request DescribeRefreshQuotaRequest
     *
     * @return DescribeRefreshQuotaResponse DescribeRefreshQuotaResponse
     */
    public function describeRefreshQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statuses of refresh or prefetch tasks by task ID.
     *  *
     * @description *   You can query data in the last three days.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeRefreshTaskByIdRequest $request DescribeRefreshTaskByIdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRefreshTaskByIdResponse DescribeRefreshTaskByIdResponse
     */
    public function describeRefreshTaskByIdWithOptions($request, $runtime)
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
     * @summary Queries the statuses of refresh or prefetch tasks by task ID.
     *  *
     * @description *   You can query data in the last three days.
     * *   You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeRefreshTaskByIdRequest $request DescribeRefreshTaskByIdRequest
     *
     * @return DescribeRefreshTaskByIdResponse DescribeRefreshTaskByIdResponse
     */
    public function describeRefreshTaskById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefreshTaskByIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of refresh or prefetch tasks that belong to an accelerated domain name.
     *  *
     * @description *   You can query the status of tasks by task ID or URL.
     * *   You can set both the **TaskId** and **ObjectPath** parameters. If you do not set the **TaskId** or **ObjectPath** parameter, data entries on the first page (20 entries) collected in the last 3 days are returned.
     * *   You can query data collected in the last 3 days.
     * *   If auto CDN cache update is enabled in the Object Storage Service (OSS) console, you cannot call the DescribeRefreshTasks operation to query automatic refresh tasks in OSS.
     * *   You can call this operation up to 10 times per second per account. If you want to query tasks at a higher frequency, call the [DescribeRefreshTaskById](https://help.aliyun.com/document_detail/187709.html) operation. This operation allows you to query tasks by task ID.
     *  *
     * @param DescribeRefreshTasksRequest $request DescribeRefreshTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRefreshTasksResponse DescribeRefreshTasksResponse
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
     * @summary Queries the status of refresh or prefetch tasks that belong to an accelerated domain name.
     *  *
     * @description *   You can query the status of tasks by task ID or URL.
     * *   You can set both the **TaskId** and **ObjectPath** parameters. If you do not set the **TaskId** or **ObjectPath** parameter, data entries on the first page (20 entries) collected in the last 3 days are returned.
     * *   You can query data collected in the last 3 days.
     * *   If auto CDN cache update is enabled in the Object Storage Service (OSS) console, you cannot call the DescribeRefreshTasks operation to query automatic refresh tasks in OSS.
     * *   You can call this operation up to 10 times per second per account. If you want to query tasks at a higher frequency, call the [DescribeRefreshTaskById](https://help.aliyun.com/document_detail/187709.html) operation. This operation allows you to query tasks by task ID.
     *  *
     * @param DescribeRefreshTasksRequest $request DescribeRefreshTasksRequest
     *
     * @return DescribeRefreshTasksResponse DescribeRefreshTasksResponse
     */
    public function describeRefreshTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries node IP addresses in the staging environment.
     *  *
     * @description >The maximum number of times that each user can call this operation per second is 30.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStagingIpResponse DescribeStagingIpResponse
     */
    public function describeStagingIpWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary Queries node IP addresses in the staging environment.
     *  *
     * @description >The maximum number of times that each user can call this operation per second is 30.
     *  *
     * @return DescribeStagingIpResponse DescribeStagingIpResponse
     */
    public function describeStagingIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStagingIpWithOptions($runtime);
    }

    /**
     * @summary Queries tags that are added to specified resources.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 10.
     *  *
     * @param DescribeTagResourcesRequest $request DescribeTagResourcesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagResourcesResponse DescribeTagResourcesResponse
     */
    public function describeTagResourcesWithOptions($request, $runtime)
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
     * @summary Queries tags that are added to specified resources.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 10.
     *  *
     * @param DescribeTagResourcesRequest $request DescribeTagResourcesRequest
     *
     * @return DescribeTagResourcesResponse DescribeTagResourcesResponse
     */
    public function describeTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top N domain names ranked by network traffic. You can query data collected in the last 30 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the current month. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeTopDomainsByFlowRequest $request DescribeTopDomainsByFlowRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTopDomainsByFlowResponse DescribeTopDomainsByFlowResponse
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
     * @summary Queries the top N domain names ranked by network traffic. You can query data collected in the last 30 days.
     *  *
     * @description The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the current month. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeTopDomainsByFlowRequest $request DescribeTopDomainsByFlowRequest
     *
     * @return DescribeTopDomainsByFlowResponse DescribeTopDomainsByFlowResponse
     */
    public function describeTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserCdnStatusRequest $request DescribeUserCdnStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserCdnStatusResponse DescribeUserCdnStatusResponse
     */
    public function describeUserCdnStatusWithOptions($request, $runtime)
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
            'action'      => 'DescribeUserCdnStatus',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserCdnStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserCdnStatusRequest $request DescribeUserCdnStatusRequest
     *
     * @return DescribeUserCdnStatusResponse DescribeUserCdnStatusResponse
     */
    public function describeUserCdnStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCdnStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of domain names whose SSL certificates are about to expire or have already expired.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserCertificateExpireCountResponse DescribeUserCertificateExpireCountResponse
     */
    public function describeUserCertificateExpireCountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary Queries the number of domain names whose SSL certificates are about to expire or have already expired.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @return DescribeUserCertificateExpireCountResponse DescribeUserCertificateExpireCountResponse
     */
    public function describeUserCertificateExpireCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCertificateExpireCountWithOptions($runtime);
    }

    /**
     * @deprecated OpenAPI DescribeUserConfigs is deprecated
     *  *
     * @summary Queries configurations of security features.
     *  *
     * Deprecated
     *
     * @param DescribeUserConfigsRequest $request DescribeUserConfigsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserConfigsResponse DescribeUserConfigsResponse
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
     * @deprecated OpenAPI DescribeUserConfigs is deprecated
     *  *
     * @summary Queries configurations of security features.
     *  *
     * Deprecated
     *
     * @param DescribeUserConfigsRequest $request DescribeUserConfigsRequest
     *
     * @return DescribeUserConfigsResponse DescribeUserConfigsResponse
     */
    public function describeUserConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all accelerated domain names in your Alibaba Cloud account and the status of the accelerated domain names. You can filter domain names by name or status. Fuzzy match is supported.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *  *
     * @param DescribeUserDomainsRequest $request DescribeUserDomainsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserDomainsResponse DescribeUserDomainsResponse
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
     * @summary Queries all accelerated domain names in your Alibaba Cloud account and the status of the accelerated domain names. You can filter domain names by name or status. Fuzzy match is supported.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *  *
     * @param DescribeUserDomainsRequest $request DescribeUserDomainsRequest
     *
     * @return DescribeUserDomainsResponse DescribeUserDomainsResponse
     */
    public function describeUserDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries user tags.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserTagsResponse DescribeUserTagsResponse
     */
    public function describeUserTagsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary Queries user tags.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @return DescribeUserTagsResponse DescribeUserTagsResponse
     */
    public function describeUserTags()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTagsWithOptions($runtime);
    }

    /**
     * @summary Queries usage export tasks that were created in the last three months.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeUserUsageDataExportTaskRequest $request DescribeUserUsageDataExportTaskRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserUsageDataExportTaskResponse DescribeUserUsageDataExportTaskResponse
     */
    public function describeUserUsageDataExportTaskWithOptions($request, $runtime)
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
     * @summary Queries usage export tasks that were created in the last three months.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeUserUsageDataExportTaskRequest $request DescribeUserUsageDataExportTaskRequest
     *
     * @return DescribeUserUsageDataExportTaskResponse DescribeUserUsageDataExportTaskResponse
     */
    public function describeUserUsageDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserUsageDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tasks that were used to export resource usage details of one or more accelerated domain names that belong to your Alibaba Cloud account. Resource usage information is collected every five minutes.
     *  *
     * @description *   This operation has been available since July 20, 2018. You can query information about resource usage collected within the last three months.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeUserUsageDetailDataExportTaskRequest $request DescribeUserUsageDetailDataExportTaskRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserUsageDetailDataExportTaskResponse DescribeUserUsageDetailDataExportTaskResponse
     */
    public function describeUserUsageDetailDataExportTaskWithOptions($request, $runtime)
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
     * @summary Queries tasks that were used to export resource usage details of one or more accelerated domain names that belong to your Alibaba Cloud account. Resource usage information is collected every five minutes.
     *  *
     * @description *   This operation has been available since July 20, 2018. You can query information about resource usage collected within the last three months.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param DescribeUserUsageDetailDataExportTaskRequest $request DescribeUserUsageDetailDataExportTaskRequest
     *
     * @return DescribeUserUsageDetailDataExportTaskResponse DescribeUserUsageDetailDataExportTaskResponse
     */
    public function describeUserUsageDetailDataExportTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserUsageDetailDataExportTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries virtual IP addresses (VIPs) of CDN points of presence (POPs) by domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeUserVipsByDomainRequest $request DescribeUserVipsByDomainRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserVipsByDomainResponse DescribeUserVipsByDomainResponse
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
     * @summary Queries virtual IP addresses (VIPs) of CDN points of presence (POPs) by domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param DescribeUserVipsByDomainRequest $request DescribeUserVipsByDomainRequest
     *
     * @return DescribeUserVipsByDomainResponse DescribeUserVipsByDomainResponse
     */
    public function describeUserVipsByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserVipsByDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ownership verification content of an accelerated domain name.
     *  *
     * @param DescribeVerifyContentRequest $request DescribeVerifyContentRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVerifyContentResponse DescribeVerifyContentResponse
     */
    public function describeVerifyContentWithOptions($request, $runtime)
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
     * @summary Queries the ownership verification content of an accelerated domain name.
     *  *
     * @param DescribeVerifyContentRequest $request DescribeVerifyContentRequest
     *
     * @return DescribeVerifyContentResponse DescribeVerifyContentResponse
     */
    public function describeVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVerifyContentWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *  *
     * @param DisableRealtimeLogDeliveryRequest $request DisableRealtimeLogDeliveryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableRealtimeLogDeliveryResponse DisableRealtimeLogDeliveryResponse
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
     * @summary The ID of the request.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *  *
     * @param DisableRealtimeLogDeliveryRequest $request DisableRealtimeLogDeliveryRequest
     *
     * @return DisableRealtimeLogDeliveryResponse DisableRealtimeLogDeliveryResponse
     */
    public function disableRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *  *
     * @param EnableRealtimeLogDeliveryRequest $request EnableRealtimeLogDeliveryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableRealtimeLogDeliveryResponse EnableRealtimeLogDeliveryResponse
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
     * @summary The ID of the request.
     *  *
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *  *
     * @param EnableRealtimeLogDeliveryRequest $request EnableRealtimeLogDeliveryRequest
     *
     * @return EnableRealtimeLogDeliveryResponse EnableRealtimeLogDeliveryResponse
     */
    public function enableRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries domain names by log configuration ID.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ListDomainsByLogConfigIdRequest $request ListDomainsByLogConfigIdRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDomainsByLogConfigIdResponse ListDomainsByLogConfigIdResponse
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
     * @summary Queries domain names by log configuration ID.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ListDomainsByLogConfigIdRequest $request ListDomainsByLogConfigIdRequest
     *
     * @return ListDomainsByLogConfigIdResponse ListDomainsByLogConfigIdResponse
     */
    public function listDomainsByLogConfigId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDomainsByLogConfigIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Function Compute trigger that is set for an Alibaba Cloud CDN event.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ListFCTriggerRequest $request ListFCTriggerRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFCTriggerResponse ListFCTriggerResponse
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
     * @summary Queries the Function Compute trigger that is set for an Alibaba Cloud CDN event.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ListFCTriggerRequest $request ListFCTriggerRequest
     *
     * @return ListFCTriggerResponse ListFCTriggerResponse
     */
    public function listFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all domain names that are associated with a specific real-time log delivery configuration record.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ListRealtimeLogDeliveryDomainsRequest $request ListRealtimeLogDeliveryDomainsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRealtimeLogDeliveryDomainsResponse ListRealtimeLogDeliveryDomainsResponse
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
     * @summary Queries all domain names that are associated with a specific real-time log delivery configuration record.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ListRealtimeLogDeliveryDomainsRequest $request ListRealtimeLogDeliveryDomainsRequest
     *
     * @return ListRealtimeLogDeliveryDomainsResponse ListRealtimeLogDeliveryDomainsResponse
     */
    public function listRealtimeLogDeliveryDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeLogDeliveryDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the real-time log delivery feature in a specified region.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRealtimeLogDeliveryInfosResponse ListRealtimeLogDeliveryInfosResponse
     */
    public function listRealtimeLogDeliveryInfosWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary Queries the information about the real-time log delivery feature in a specified region.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @return ListRealtimeLogDeliveryInfosResponse ListRealtimeLogDeliveryInfosResponse
     */
    public function listRealtimeLogDeliveryInfos()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeLogDeliveryInfosWithOptions($runtime);
    }

    /**
     * @summary Queries the tags that are attached to a resource.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        if (!Utils::isUnset($request->tagOwnerBid)) {
            $query['TagOwnerBid'] = $request->tagOwnerBid;
        }
        if (!Utils::isUnset($request->tagOwnerUid)) {
            $query['TagOwnerUid'] = $request->tagOwnerUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags that are attached to a resource.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all custom log configurations in your account.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserCustomLogConfigResponse ListUserCustomLogConfigResponse
     */
    public function listUserCustomLogConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
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
     * @summary Queries all custom log configurations in your account.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @return ListUserCustomLogConfigResponse ListUserCustomLogConfigResponse
     */
    public function listUserCustomLogConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserCustomLogConfigWithOptions($runtime);
    }

    /**
     * @summary Modifies the configuration of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param ModifyCdnDomainRequest $request ModifyCdnDomainRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCdnDomainResponse ModifyCdnDomainResponse
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
     * @summary Modifies the configuration of an accelerated domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param ModifyCdnDomainRequest $request ModifyCdnDomainRequest
     *
     * @return ModifyCdnDomainResponse ModifyCdnDomainResponse
     */
    public function modifyCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Transfer domain names from an Alibaba Cloud account to the current account.
     *  *
     * @description This operation is used in the following scenario:
     * *   You have multiple Alibaba Cloud accounts and want to transfer domain names from Account A to Account B.
     * *   You are prompted that a domain name has been added when you add the domain name to Alibaba Cloud CDN. You do not know which account does the domain name belong to, and you want to transfer the domain name to your current account.
     *  *
     * @param ModifyCdnDomainOwnerRequest $request ModifyCdnDomainOwnerRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCdnDomainOwnerResponse ModifyCdnDomainOwnerResponse
     */
    public function modifyCdnDomainOwnerWithOptions($request, $runtime)
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
            'action'      => 'ModifyCdnDomainOwner',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCdnDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transfer domain names from an Alibaba Cloud account to the current account.
     *  *
     * @description This operation is used in the following scenario:
     * *   You have multiple Alibaba Cloud accounts and want to transfer domain names from Account A to Account B.
     * *   You are prompted that a domain name has been added when you add the domain name to Alibaba Cloud CDN. You do not know which account does the domain name belong to, and you want to transfer the domain name to your current account.
     *  *
     * @param ModifyCdnDomainOwnerRequest $request ModifyCdnDomainOwnerRequest
     *
     * @return ModifyCdnDomainOwnerResponse ModifyCdnDomainOwnerResponse
     */
    public function modifyCdnDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnDomainOwnerWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the acceleration region for an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ModifyCdnDomainSchdmByPropertyRequest $request ModifyCdnDomainSchdmByPropertyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCdnDomainSchdmByPropertyResponse ModifyCdnDomainSchdmByPropertyResponse
     */
    public function modifyCdnDomainSchdmByPropertyWithOptions($request, $runtime)
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
     * @summary Changes the acceleration region for an accelerated domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ModifyCdnDomainSchdmByPropertyRequest $request ModifyCdnDomainSchdmByPropertyRequest
     *
     * @return ModifyCdnDomainSchdmByPropertyResponse ModifyCdnDomainSchdmByPropertyResponse
     */
    public function modifyCdnDomainSchdmByProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnDomainSchdmByPropertyWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the metering method of Alibaba Cloud CDN.
     *  *
     * @param ModifyCdnServiceRequest $request ModifyCdnServiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCdnServiceResponse ModifyCdnServiceResponse
     */
    public function modifyCdnServiceWithOptions($request, $runtime)
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
            'action'      => 'ModifyCdnService',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the metering method of Alibaba Cloud CDN.
     *  *
     * @param ModifyCdnServiceRequest $request ModifyCdnServiceRequest
     *
     * @return ModifyCdnServiceResponse ModifyCdnServiceResponse
     */
    public function modifyCdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of real-time log delivery for a specific domain name. Each domain name supports only one Logstore.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ModifyRealtimeLogDeliveryRequest $request ModifyRealtimeLogDeliveryRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRealtimeLogDeliveryResponse ModifyRealtimeLogDeliveryResponse
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
     * @summary Modifies the configurations of real-time log delivery for a specific domain name. Each domain name supports only one Logstore.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param ModifyRealtimeLogDeliveryRequest $request ModifyRealtimeLogDeliveryRequest
     *
     * @return ModifyRealtimeLogDeliveryResponse ModifyRealtimeLogDeliveryResponse
     */
    public function modifyRealtimeLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRealtimeLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Activates Alibaba Cloud CDN. You must activate Alibaba Cloud CDN before you can manage domain names in Alibaba Cloud CDN.
     *  *
     * @description *   Alibaba Cloud CDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must complete real-name verification to activate Alibaba Cloud CDN.
     * *   You can call this operation up to five times per second per user.
     *  *
     * @param OpenCdnServiceRequest $request OpenCdnServiceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenCdnServiceResponse OpenCdnServiceResponse
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
     * @summary Activates Alibaba Cloud CDN. You must activate Alibaba Cloud CDN before you can manage domain names in Alibaba Cloud CDN.
     *  *
     * @description *   Alibaba Cloud CDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must complete real-name verification to activate Alibaba Cloud CDN.
     * *   You can call this operation up to five times per second per user.
     *  *
     * @param OpenCdnServiceRequest $request OpenCdnServiceRequest
     *
     * @return OpenCdnServiceResponse OpenCdnServiceResponse
     */
    public function openCdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCdnServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes the configurations of the staging environment to the production environment.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param PublishStagingConfigToProductionRequest $request PublishStagingConfigToProductionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishStagingConfigToProductionResponse PublishStagingConfigToProductionResponse
     */
    public function publishStagingConfigToProductionWithOptions($request, $runtime)
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
     * @summary Publishes the configurations of the staging environment to the production environment.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param PublishStagingConfigToProductionRequest $request PublishStagingConfigToProductionRequest
     *
     * @return PublishStagingConfigToProductionResponse PublishStagingConfigToProductionResponse
     */
    public function publishStagingConfigToProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishStagingConfigToProductionWithOptions($request, $runtime);
    }

    /**
     * @summary Prefetches content from origin servers to points of presence (POPs). This reduces loads on origin servers because users can directly hit cache upon their first visits.
     *  *
     * @description *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
     * *   You can call the [RefreshObjectCaches](https://help.aliyun.com/document_detail/91164.html) operation to refresh content and call the [PushObjectCache](https://help.aliyun.com/document_detail/91161.html) operation to prefetch content.
     * *   By default, each Alibaba Cloud account can submit up to 1,000 URLs per day. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to increase your daily quota. Alibaba Cloud reviews your application and then increases the quota accordingly.
     * *   You can specify at most 100 URLs in each prefetch request.
     * *   For each Alibaba Cloud account, the prefetch queue can contain up to 50,000 URLs. Content is prefetched based on the time when the URLs are submitted. The URL that is submitted the earliest has the highest priority. If the number of URLs in the queue reaches 50,000, you cannot submit more URLs until the number drops below 50,000.
     * *   You can call this operation up to 50 times per second per account.
     * *   For more information about how to automate refresh or prefetch tasks, see [Run scripts to refresh and prefetch content](https://help.aliyun.com/document_detail/151829.html).
     * ## Precautions
     * *   After a prefetch task is submitted and completed, the POPs immediately start to retrieve resources from the origin server. Therefore, a large number of refresh tasks cause a large number of concurrent download tasks. This increases the number of requests that are redirected to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     * *   The time required for a prefetch task to complete is proportional to the size of the prefetched file. In actual practice, most prefetch tasks require 5 to 30 minutes to complete. A task with a smaller average file size requires less time.
     * *   To allow RAM users to perform this operation, you must first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/260300.html).
     *  *
     * @param PushObjectCacheRequest $request PushObjectCacheRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PushObjectCacheResponse PushObjectCacheResponse
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
        if (!Utils::isUnset($request->queryHashkey)) {
            $query['QueryHashkey'] = $request->queryHashkey;
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
     * @summary Prefetches content from origin servers to points of presence (POPs). This reduces loads on origin servers because users can directly hit cache upon their first visits.
     *  *
     * @description *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
     * *   You can call the [RefreshObjectCaches](https://help.aliyun.com/document_detail/91164.html) operation to refresh content and call the [PushObjectCache](https://help.aliyun.com/document_detail/91161.html) operation to prefetch content.
     * *   By default, each Alibaba Cloud account can submit up to 1,000 URLs per day. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to increase your daily quota. Alibaba Cloud reviews your application and then increases the quota accordingly.
     * *   You can specify at most 100 URLs in each prefetch request.
     * *   For each Alibaba Cloud account, the prefetch queue can contain up to 50,000 URLs. Content is prefetched based on the time when the URLs are submitted. The URL that is submitted the earliest has the highest priority. If the number of URLs in the queue reaches 50,000, you cannot submit more URLs until the number drops below 50,000.
     * *   You can call this operation up to 50 times per second per account.
     * *   For more information about how to automate refresh or prefetch tasks, see [Run scripts to refresh and prefetch content](https://help.aliyun.com/document_detail/151829.html).
     * ## Precautions
     * *   After a prefetch task is submitted and completed, the POPs immediately start to retrieve resources from the origin server. Therefore, a large number of refresh tasks cause a large number of concurrent download tasks. This increases the number of requests that are redirected to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     * *   The time required for a prefetch task to complete is proportional to the size of the prefetched file. In actual practice, most prefetch tasks require 5 to 30 minutes to complete. A task with a smaller average file size requires less time.
     * *   To allow RAM users to perform this operation, you must first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/260300.html).
     *  *
     * @param PushObjectCacheRequest $request PushObjectCacheRequest
     *
     * @return PushObjectCacheResponse PushObjectCacheResponse
     */
    public function pushObjectCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushObjectCacheWithOptions($request, $runtime);
    }

    /**
     * @summary 指定缓存tag刷新节点上的文件内容
     *  *
     * @param RefreshObjectCacheByCacheTagRequest $request RefreshObjectCacheByCacheTagRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshObjectCacheByCacheTagResponse RefreshObjectCacheByCacheTagResponse
     */
    public function refreshObjectCacheByCacheTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheTag)) {
            $query['CacheTag'] = $request->cacheTag;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshObjectCacheByCacheTag',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshObjectCacheByCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 指定缓存tag刷新节点上的文件内容
     *  *
     * @param RefreshObjectCacheByCacheTagRequest $request RefreshObjectCacheByCacheTagRequest
     *
     * @return RefreshObjectCacheByCacheTagResponse RefreshObjectCacheByCacheTagResponse
     */
    public function refreshObjectCacheByCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshObjectCacheByCacheTagWithOptions($request, $runtime);
    }

    /**
     * @summary Refreshes files on Alibaba Cloud CDN points of presence (POPs). After files are refreshed, the original file content immediately becomes invalid. If clients request the original file content, Alibaba Cloud CDN forwards the requests to the origin server. Then, Alibaba Cloud CDN caches the latest content to the POPs and returns the content to the clients. Alibaba Cloud CDN allows you to refresh content from multiple URLs at the same time.
     *  *
     * @description *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
     * *   You can call the [RefreshObjectCaches](https://help.aliyun.com/document_detail/91164.html) operation to refresh content and call the [PushObjectCache](https://help.aliyun.com/document_detail/91161.html) operation to prefetch content.
     * *   You can call the RefreshObjectCaches operation up to 50 times per second per account.
     * *   For more information about how to automatically refresh or prefetch tasks, see [Run scripts to refresh and prefetch content](https://help.aliyun.com/document_detail/151829.html).
     * ## Precautions
     * *   After a refresh task is submitted and completed, specific resources are removed from POPs. When a POP receives a request for the removed resources, the POP forwards the request to the origin server to retrieve the resources. The retrieved resources are returned to the client and cached on the POP. Multiple refresh tasks may cause a large number of resources to be removed from the POPs. This increases the number of requests that are forwarded to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     * *   A refresh task takes effect 5 to 6 minutes after being submitted. This means that if the resource you want to refresh has a TTL of less than five minutes, you wait for it to expire instead of manually running a refresh task.
     * *   If you want to use RAM users to refresh or prefetch resources, you must obtain the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/260300.html).
     * ### Refresh quota
     * *   By default, each Alibaba Cloud account can refresh content from up to 10,000 URLs and 100 directories per day. The directories include subdirectories. If the daily peak bandwidth value exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to request a quota increase. Alibaba Cloud CDN evaluates your application based on your workloads.
     * *   By default, each Alibaba Cloud account can submit up to 20 refresh rules that contain regular expressions per day. If the daily peak bandwidth of your Alibaba Cloud account exceeds 10 Gbit/s, you can [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex) to request a quota increase.
     * *   You can specify up to 1,000 URL refresh rules, 100 directory refresh rules, or 1 refresh rule that contains regular expressions in each call.
     * *   You can refresh up to 1,000 URLs per minute for each domain name.
     *  *
     * @param RefreshObjectCachesRequest $request RefreshObjectCachesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshObjectCachesResponse RefreshObjectCachesResponse
     */
    public function refreshObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
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
     * @summary Refreshes files on Alibaba Cloud CDN points of presence (POPs). After files are refreshed, the original file content immediately becomes invalid. If clients request the original file content, Alibaba Cloud CDN forwards the requests to the origin server. Then, Alibaba Cloud CDN caches the latest content to the POPs and returns the content to the clients. Alibaba Cloud CDN allows you to refresh content from multiple URLs at the same time.
     *  *
     * @description *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
     * *   You can call the [RefreshObjectCaches](https://help.aliyun.com/document_detail/91164.html) operation to refresh content and call the [PushObjectCache](https://help.aliyun.com/document_detail/91161.html) operation to prefetch content.
     * *   You can call the RefreshObjectCaches operation up to 50 times per second per account.
     * *   For more information about how to automatically refresh or prefetch tasks, see [Run scripts to refresh and prefetch content](https://help.aliyun.com/document_detail/151829.html).
     * ## Precautions
     * *   After a refresh task is submitted and completed, specific resources are removed from POPs. When a POP receives a request for the removed resources, the POP forwards the request to the origin server to retrieve the resources. The retrieved resources are returned to the client and cached on the POP. Multiple refresh tasks may cause a large number of resources to be removed from the POPs. This increases the number of requests that are forwarded to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     * *   A refresh task takes effect 5 to 6 minutes after being submitted. This means that if the resource you want to refresh has a TTL of less than five minutes, you wait for it to expire instead of manually running a refresh task.
     * *   If you want to use RAM users to refresh or prefetch resources, you must obtain the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/260300.html).
     * ### Refresh quota
     * *   By default, each Alibaba Cloud account can refresh content from up to 10,000 URLs and 100 directories per day. The directories include subdirectories. If the daily peak bandwidth value exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to request a quota increase. Alibaba Cloud CDN evaluates your application based on your workloads.
     * *   By default, each Alibaba Cloud account can submit up to 20 refresh rules that contain regular expressions per day. If the daily peak bandwidth of your Alibaba Cloud account exceeds 10 Gbit/s, you can [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex) to request a quota increase.
     * *   You can specify up to 1,000 URL refresh rules, 100 directory refresh rules, or 1 refresh rule that contains regular expressions in each call.
     * *   You can refresh up to 1,000 URLs per minute for each domain name.
     *  *
     * @param RefreshObjectCachesRequest $request RefreshObjectCachesRequest
     *
     * @return RefreshObjectCachesResponse RefreshObjectCachesResponse
     */
    public function refreshObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back configurations in the staging environment. After you call this operation, all configurations in the staging environment are cleared.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param RollbackStagingConfigRequest $request RollbackStagingConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackStagingConfigResponse RollbackStagingConfigResponse
     */
    public function rollbackStagingConfigWithOptions($request, $runtime)
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
     * @summary Rolls back configurations in the staging environment. After you call this operation, all configurations in the staging environment are cleared.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param RollbackStagingConfigRequest $request RollbackStagingConfigRequest
     *
     * @return RollbackStagingConfigResponse RollbackStagingConfigResponse
     */
    public function rollbackStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to configure an SSL certificate for a specific domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param SetCdnDomainCSRCertificateRequest $request SetCdnDomainCSRCertificateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCdnDomainCSRCertificateResponse SetCdnDomainCSRCertificateResponse
     */
    public function setCdnDomainCSRCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
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
     * @summary You can call this operation to configure an SSL certificate for a specific domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param SetCdnDomainCSRCertificateRequest $request SetCdnDomainCSRCertificateRequest
     *
     * @return SetCdnDomainCSRCertificateResponse SetCdnDomainCSRCertificateResponse
     */
    public function setCdnDomainCSRCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainCSRCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables a ShangMi (SM) certificate for a domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param SetCdnDomainSMCertificateRequest $request SetCdnDomainSMCertificateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCdnDomainSMCertificateResponse SetCdnDomainSMCertificateResponse
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
     * @summary Enables or disables a ShangMi (SM) certificate for a domain name.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param SetCdnDomainSMCertificateRequest $request SetCdnDomainSMCertificateRequest
     *
     * @return SetCdnDomainSMCertificateResponse SetCdnDomainSMCertificateResponse
     */
    public function setCdnDomainSMCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainSMCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the certificate for a domain name and updates the certificate information.
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     * *   Method: POST.
     *  *
     * @param SetCdnDomainSSLCertificateRequest $request SetCdnDomainSSLCertificateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCdnDomainSSLCertificateResponse SetCdnDomainSSLCertificateResponse
     */
    public function setCdnDomainSSLCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certId)) {
            $query['CertId'] = $request->certId;
        }
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certRegion)) {
            $query['CertRegion'] = $request->certRegion;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->env)) {
            $query['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'SetCdnDomainSSLCertificate',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCdnDomainSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the certificate for a domain name and updates the certificate information.
     *  *
     * @description *   You can call this operation up to 30 times per second per account.
     * *   Method: POST.
     *  *
     * @param SetCdnDomainSSLCertificateRequest $request SetCdnDomainSSLCertificateRequest
     *
     * @return SetCdnDomainSSLCertificateResponse SetCdnDomainSSLCertificateResponse
     */
    public function setCdnDomainSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainSSLCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a domain name to be accelerated in the staging environment.
     *  *
     * @description >  You can call this operation up to 30 times per second per account.
     *  *
     * @param SetCdnDomainStagingConfigRequest $request SetCdnDomainStagingConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCdnDomainStagingConfigResponse SetCdnDomainStagingConfigResponse
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
     * @summary Configures a domain name to be accelerated in the staging environment.
     *  *
     * @description >  You can call this operation up to 30 times per second per account.
     *  *
     * @param SetCdnDomainStagingConfigRequest $request SetCdnDomainStagingConfigRequest
     *
     * @return SetCdnDomainStagingConfigResponse SetCdnDomainStagingConfigResponse
     */
    public function setCdnDomainStagingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainStagingConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 配置CDN上的海量封禁功能
     *  *
     * @param SetCdnFullDomainsBlockIPRequest $request SetCdnFullDomainsBlockIPRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCdnFullDomainsBlockIPResponse SetCdnFullDomainsBlockIPResponse
     */
    public function setCdnFullDomainsBlockIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->blockInterval)) {
            $body['BlockInterval'] = $request->blockInterval;
        }
        if (!Utils::isUnset($request->IPList)) {
            $body['IPList'] = $request->IPList;
        }
        if (!Utils::isUnset($request->operationType)) {
            $body['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->updateType)) {
            $body['UpdateType'] = $request->updateType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetCdnFullDomainsBlockIP',
            'version'     => '2018-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCdnFullDomainsBlockIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置CDN上的海量封禁功能
     *  *
     * @param SetCdnFullDomainsBlockIPRequest $request SetCdnFullDomainsBlockIPRequest
     *
     * @return SetCdnFullDomainsBlockIPResponse SetCdnFullDomainsBlockIPResponse
     */
    public function setCdnFullDomainsBlockIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnFullDomainsBlockIPWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI SetDomainServerCertificate is deprecated, please use Cdn::2018-05-10::SetCdnDomainSSLCertificate instead
     *  *
     * @summary Configures an SSL certificate for an accelerated domain name.
     *  *
     * @description *   You can call this operation up to 10 times per second per user.
     * *   Method: POST.
     *  *
     * Deprecated
     *
     * @param SetDomainServerCertificateRequest $request SetDomainServerCertificateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainServerCertificateResponse SetDomainServerCertificateResponse
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
     * @deprecated openAPI SetDomainServerCertificate is deprecated, please use Cdn::2018-05-10::SetCdnDomainSSLCertificate instead
     *  *
     * @summary Configures an SSL certificate for an accelerated domain name.
     *  *
     * @description *   You can call this operation up to 10 times per second per user.
     * *   Method: POST.
     *  *
     * Deprecated
     *
     * @param SetDomainServerCertificateRequest $request SetDomainServerCertificateRequest
     *
     * @return SetDomainServerCertificateResponse SetDomainServerCertificateResponse
     */
    public function setDomainServerCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainServerCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Sets a custom origin header.
     *  *
     * @param SetReqHeaderConfigRequest $request SetReqHeaderConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetReqHeaderConfigResponse SetReqHeaderConfigResponse
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
     * @summary Sets a custom origin header.
     *  *
     * @param SetReqHeaderConfigRequest $request SetReqHeaderConfigRequest
     *
     * @return SetReqHeaderConfigResponse SetReqHeaderConfigResponse
     */
    public function setReqHeaderConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setReqHeaderConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the virtual waiting room feature for an accelerated domain name. This operation is available only for accelerated domain names of the Dynamic CDN workload type.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param SetWaitingRoomConfigRequest $request SetWaitingRoomConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetWaitingRoomConfigResponse SetWaitingRoomConfigResponse
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
     * @summary Configures the virtual waiting room feature for an accelerated domain name. This operation is available only for accelerated domain names of the Dynamic CDN workload type.
     *  *
     * @description > You can call this operation up to 30 times per second per account.
     *  *
     * @param SetWaitingRoomConfigRequest $request SetWaitingRoomConfigRequest
     *
     * @return SetWaitingRoomConfigResponse SetWaitingRoomConfigResponse
     */
    public function setWaitingRoomConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWaitingRoomConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a disabled domain name. After the domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *  *
     * @description *   If the domain name is in an invalid state or you have an overdue payment in your account, the domain name cannot be enabled.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param StartCdnDomainRequest $request StartCdnDomainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCdnDomainResponse StartCdnDomainResponse
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
     * @summary Enables a disabled domain name. After the domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *  *
     * @description *   If the domain name is in an invalid state or you have an overdue payment in your account, the domain name cannot be enabled.
     * *   You can call this operation up to 100 times per second per account.
     *  *
     * @param StartCdnDomainRequest $request StartCdnDomainRequest
     *
     * @return StartCdnDomainResponse StartCdnDomainResponse
     */
    public function startCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an accelerated domain name. After the domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *  *
     * @description *   After an accelerated domain is disabled, Alibaba Cloud CDN retains its information and routes all the requests that are destined for the accelerated domain to the origin server.
     * *   You can call this operation up to 40 times per second per account.
     *  *
     * @param StopCdnDomainRequest $request StopCdnDomainRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCdnDomainResponse StopCdnDomainResponse
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
     * @summary Disables an accelerated domain name. After the domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *  *
     * @description *   After an accelerated domain is disabled, Alibaba Cloud CDN retains its information and routes all the requests that are destined for the accelerated domain to the origin server.
     * *   You can call this operation up to 40 times per second per account.
     *  *
     * @param StopCdnDomainRequest $request StopCdnDomainRequest
     *
     * @return StopCdnDomainResponse StopCdnDomainResponse
     */
    public function stopCdnDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCdnDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Adds one or more tags to specific resources.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
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
     * @summary Adds one or more tags to specific resources.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from specified resources.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
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
     * @summary Removes tags from specified resources.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a tracking task.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param UpdateCdnDeliverTaskRequest $request UpdateCdnDeliverTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCdnDeliverTaskResponse UpdateCdnDeliverTaskResponse
     */
    public function updateCdnDeliverTaskWithOptions($request, $runtime)
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
     * @summary Updates a tracking task.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param UpdateCdnDeliverTaskRequest $request UpdateCdnDeliverTaskRequest
     *
     * @return UpdateCdnDeliverTaskResponse UpdateCdnDeliverTaskResponse
     */
    public function updateCdnDeliverTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCdnDeliverTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Updates one or more operations reports.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param UpdateCdnSubTaskRequest $request UpdateCdnSubTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCdnSubTaskResponse UpdateCdnSubTaskResponse
     */
    public function updateCdnSubTaskWithOptions($request, $runtime)
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
     * @summary Updates one or more operations reports.
     *  *
     * @description > You can call this operation up to three times per second per account.
     *  *
     * @param UpdateCdnSubTaskRequest $request UpdateCdnSubTaskRequest
     *
     * @return UpdateCdnSubTaskResponse UpdateCdnSubTaskResponse
     */
    public function updateCdnSubTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCdnSubTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a specified Function Compute trigger.
     *  *
     * @param UpdateFCTriggerRequest $request UpdateFCTriggerRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFCTriggerResponse UpdateFCTriggerResponse
     */
    public function updateFCTriggerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @summary Updates a specified Function Compute trigger.
     *  *
     * @param UpdateFCTriggerRequest $request UpdateFCTriggerRequest
     *
     * @return UpdateFCTriggerResponse UpdateFCTriggerResponse
     */
    public function updateFCTrigger($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFCTriggerWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies the ownership of a specified domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param VerifyDomainOwnerRequest $request VerifyDomainOwnerRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyDomainOwnerResponse VerifyDomainOwnerResponse
     */
    public function verifyDomainOwnerWithOptions($request, $runtime)
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
     * @summary Verifies the ownership of a specified domain name.
     *  *
     * @description > You can call this operation up to 100 times per second per account.
     *  *
     * @param VerifyDomainOwnerRequest $request VerifyDomainOwnerRequest
     *
     * @return VerifyDomainOwnerResponse VerifyDomainOwnerResponse
     */
    public function verifyDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyDomainOwnerWithOptions($request, $runtime);
    }
}
