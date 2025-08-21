<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetGrayDomainFunctionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\BatchSetGrayDomainFunctionResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCustomDomainSampleRateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DeleteCustomDomainSampleRateResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomDomainSampleRateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomDomainSampleRateResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\GetGrayDomainFunctionRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\GetGrayDomainFunctionResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListDomainsByLogConfigIdResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryDomainsRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryDomainsResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryInfosResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListRealtimeLogDeliveryResponse;
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
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCustomDomainSampleRateRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyCustomDomainSampleRateResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ModifyRealtimeLogDeliveryResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\OpenCdnServiceRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\OpenCdnServiceResponse;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PublishGrayDomainConfigRequest;
use AlibabaCloud\SDK\Cdn\V20180510\Models\PublishGrayDomainConfigResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cdn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-northeast-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'cdn.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'cdn.ap-southeast-1.aliyuncs.com',
            'eu-central-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'cdn.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'cdn.ap-southeast-1.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Adds a domain name to accelerate.
     *
     * @remarks
     *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   The domain name that you want to add has a valid Internet Content Provider (ICP) number.
     * *   You can add only one domain name to Alibaba Cloud CDN in each call. Each Alibaba Cloud account can add a maximum of 50 domain names to Alibaba Cloud CDN.
     * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review will be completed by the end of the next business day after you submit the application.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - AddCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCdnDomainResponse
     *
     * @param AddCdnDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddCdnDomainResponse
     */
    public function addCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdnType) {
            @$query['CdnType'] = $request->cdnType;
        }

        if (null !== $request->checkUrl) {
            @$query['CheckUrl'] = $request->checkUrl;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->topLevelDomain) {
            @$query['TopLevelDomain'] = $request->topLevelDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a domain name to accelerate.
     *
     * @remarks
     *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   The domain name that you want to add has a valid Internet Content Provider (ICP) number.
     * *   You can add only one domain name to Alibaba Cloud CDN in each call. Each Alibaba Cloud account can add a maximum of 50 domain names to Alibaba Cloud CDN.
     * *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review will be completed by the end of the next business day after you submit the application.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - AddCdnDomainRequest
     *
     * @returns AddCdnDomainResponse
     *
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
     * Adds a Function Compute trigger.
     *
     * @param request - AddFCTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFCTriggerResponse
     *
     * @param AddFCTriggerRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddFCTriggerResponse
     */
    public function addFCTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->triggerARN) {
            @$query['TriggerARN'] = $request->triggerARN;
        }

        $body = [];
        if (null !== $request->eventMetaName) {
            @$body['EventMetaName'] = $request->eventMetaName;
        }

        if (null !== $request->eventMetaVersion) {
            @$body['EventMetaVersion'] = $request->eventMetaVersion;
        }

        if (null !== $request->functionARN) {
            @$body['FunctionARN'] = $request->functionARN;
        }

        if (null !== $request->notes) {
            @$body['Notes'] = $request->notes;
        }

        if (null !== $request->roleARN) {
            @$body['RoleARN'] = $request->roleARN;
        }

        if (null !== $request->sourceARN) {
            @$body['SourceARN'] = $request->sourceARN;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddFCTrigger',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Function Compute trigger.
     *
     * @param request - AddFCTriggerRequest
     *
     * @returns AddFCTriggerResponse
     *
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
     * Adds one or more domain names to Alibaba Cloud CDN. You can add a maximum of 50 domain names at a time.
     *
     * @remarks
     *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   If the acceleration region is Chinese Mainland Only or Global, you must apply for an ICP filing for the domain name.
     * *   You can specify multiple domain names and separate them with commas (,). You can specify at most 50 domain names in each call.
     * *   For more information, see [Add a domain name](https://help.aliyun.com/document_detail/122181.html).
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - BatchAddCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddCdnDomainResponse
     *
     * @param BatchAddCdnDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchAddCdnDomainResponse
     */
    public function batchAddCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdnType) {
            @$query['CdnType'] = $request->cdnType;
        }

        if (null !== $request->checkUrl) {
            @$query['CheckUrl'] = $request->checkUrl;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        if (null !== $request->topLevelDomain) {
            @$query['TopLevelDomain'] = $request->topLevelDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchAddCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchAddCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more domain names to Alibaba Cloud CDN. You can add a maximum of 50 domain names at a time.
     *
     * @remarks
     *   You must activate Alibaba Cloud CDN before you can add a domain name to it. For more information, see [Activate Alibaba Cloud CDN](https://help.aliyun.com/document_detail/27272.html).
     * *   If the acceleration region is Chinese Mainland Only or Global, you must apply for an ICP filing for the domain name.
     * *   You can specify multiple domain names and separate them with commas (,). You can specify at most 50 domain names in each call.
     * *   For more information, see [Add a domain name](https://help.aliyun.com/document_detail/122181.html).
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - BatchAddCdnDomainRequest
     *
     * @returns BatchAddCdnDomainResponse
     *
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
     * Deletes configurations of multiple accelerated domain names at a time.
     *
     * @remarks
     *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - BatchDeleteCdnDomainConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteCdnDomainConfigResponse
     *
     * @param BatchDeleteCdnDomainConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteCdnDomainConfigResponse
     */
    public function batchDeleteCdnDomainConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->functionNames) {
            @$query['FunctionNames'] = $request->functionNames;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteCdnDomainConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteCdnDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes configurations of multiple accelerated domain names at a time.
     *
     * @remarks
     *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - BatchDeleteCdnDomainConfigRequest
     *
     * @returns BatchDeleteCdnDomainConfigResponse
     *
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
     * Queries whether one or more IP addresses are assigned to Alibaba Cloud CDN.
     *
     * @remarks
     * >The maximum number of times that each user can call this operation per second is 20.
     *
     * @param request - BatchDescribeCdnIpInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDescribeCdnIpInfoResponse
     *
     * @param BatchDescribeCdnIpInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchDescribeCdnIpInfoResponse
     */
    public function batchDescribeCdnIpInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipAddrList) {
            @$query['IpAddrList'] = $request->ipAddrList;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDescribeCdnIpInfo',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDescribeCdnIpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether one or more IP addresses are assigned to Alibaba Cloud CDN.
     *
     * @remarks
     * >The maximum number of times that each user can call this operation per second is 20.
     *
     * @param request - BatchDescribeCdnIpInfoRequest
     *
     * @returns BatchDescribeCdnIpInfoResponse
     *
     * @param BatchDescribeCdnIpInfoRequest $request
     *
     * @return BatchDescribeCdnIpInfoResponse
     */
    public function batchDescribeCdnIpInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDescribeCdnIpInfoWithOptions($request, $runtime);
    }

    /**
     * Configures multiple accelerated domain names at a time.
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     * *   You can specify multiple domain names and must separate them with commas (,). You can specify up to 50 domain names in each call.
     * *   If the BatchSetCdnDomainConfig operation is successful, a unique configuration ID (ConfigId) is generated. You can use configuration IDs to update or delete configurations. For more information, see [Usage notes on ConfigId](https://help.aliyun.com/document_detail/388994.html).
     *
     * @param request - BatchSetCdnDomainConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetCdnDomainConfigResponse
     *
     * @param BatchSetCdnDomainConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSetCdnDomainConfigResponse
     */
    public function batchSetCdnDomainConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->functions) {
            @$query['Functions'] = $request->functions;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchSetCdnDomainConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetCdnDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures multiple accelerated domain names at a time.
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     * *   You can specify multiple domain names and must separate them with commas (,). You can specify up to 50 domain names in each call.
     * *   If the BatchSetCdnDomainConfig operation is successful, a unique configuration ID (ConfigId) is generated. You can use configuration IDs to update or delete configurations. For more information, see [Usage notes on ConfigId](https://help.aliyun.com/document_detail/388994.html).
     *
     * @param request - BatchSetCdnDomainConfigRequest
     *
     * @returns BatchSetCdnDomainConfigResponse
     *
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
     * 批量配置多个域名的灰度动态功能.
     *
     * @param request - BatchSetGrayDomainFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetGrayDomainFunctionResponse
     *
     * @param BatchSetGrayDomainFunctionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchSetGrayDomainFunctionResponse
     */
    public function batchSetGrayDomainFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->configs) {
            @$body['Configs'] = $request->configs;
        }

        if (null !== $request->domainNames) {
            @$body['DomainNames'] = $request->domainNames;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSetGrayDomainFunction',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetGrayDomainFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量配置多个域名的灰度动态功能.
     *
     * @param request - BatchSetGrayDomainFunctionRequest
     *
     * @returns BatchSetGrayDomainFunctionResponse
     *
     * @param BatchSetGrayDomainFunctionRequest $request
     *
     * @return BatchSetGrayDomainFunctionResponse
     */
    public function batchSetGrayDomainFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetGrayDomainFunctionWithOptions($request, $runtime);
    }

    /**
     * Enables one or more domain names at a time. After a domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *
     * @remarks
     *   If a domain name specified in the request is in an invalid state or your account has an overdue payment, the domain name cannot be enabled.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *
     * @param request - BatchStartCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStartCdnDomainResponse
     *
     * @param BatchStartCdnDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStartCdnDomainResponse
     */
    public function batchStartCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStartCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStartCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables one or more domain names at a time. After a domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *
     * @remarks
     *   If a domain name specified in the request is in an invalid state or your account has an overdue payment, the domain name cannot be enabled.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *
     * @param request - BatchStartCdnDomainRequest
     *
     * @returns BatchStartCdnDomainResponse
     *
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
     * Disables one or more accelerated domain names at a time. After an accelerated domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *
     * @remarks
     *   After an accelerated domain name is disabled, Alibaba Cloud CDN retains its information and reroutes all the requests that are destined for the accelerated domain name to the origin.
     * *   If you need to temporarily disable CDN acceleration for a domain name, we recommend that you call the StopDomain operation.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *
     * @param request - BatchStopCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStopCdnDomainResponse
     *
     * @param BatchStopCdnDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchStopCdnDomainResponse
     */
    public function batchStopCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStopCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStopCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables one or more accelerated domain names at a time. After an accelerated domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *
     * @remarks
     *   After an accelerated domain name is disabled, Alibaba Cloud CDN retains its information and reroutes all the requests that are destined for the accelerated domain name to the origin.
     * *   If you need to temporarily disable CDN acceleration for a domain name, we recommend that you call the StopDomain operation.
     * *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request.
     *
     * @param request - BatchStopCdnDomainRequest
     *
     * @returns BatchStopCdnDomainResponse
     *
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
     * Updates the configurations of multiple accelerated domain names at a time.
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *
     * @param request - BatchUpdateCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateCdnDomainResponse
     *
     * @param BatchUpdateCdnDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchUpdateCdnDomainResponse
     */
    public function batchUpdateCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        if (null !== $request->topLevelDomain) {
            @$query['TopLevelDomain'] = $request->topLevelDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUpdateCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of multiple accelerated domain names at a time.
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *
     * @param request - BatchUpdateCdnDomainRequest
     *
     * @returns BatchUpdateCdnDomainResponse
     *
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
     * Registers the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for an Alibaba Cloud CDN-accelerated domain name. After the registration is successful, the routing center generates the dynamic routing information and send it to DCDN points of presence (POPs). This is a prerequisite for you to transfer a domain name from Alibaba Cloud CDN to DCDN.
     *
     * @param request - CdnMigrateRegisterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CdnMigrateRegisterResponse
     *
     * @param CdnMigrateRegisterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CdnMigrateRegisterResponse
     */
    public function cdnMigrateRegisterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CdnMigrateRegister',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CdnMigrateRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for an Alibaba Cloud CDN-accelerated domain name. After the registration is successful, the routing center generates the dynamic routing information and send it to DCDN points of presence (POPs). This is a prerequisite for you to transfer a domain name from Alibaba Cloud CDN to DCDN.
     *
     * @param request - CdnMigrateRegisterRequest
     *
     * @returns CdnMigrateRegisterResponse
     *
     * @param CdnMigrateRegisterRequest $request
     *
     * @return CdnMigrateRegisterResponse
     */
    public function cdnMigrateRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cdnMigrateRegisterWithOptions($request, $runtime);
    }

    /**
     * Transfer a domain name from Alibaba Cloud CDN to DCDN.
     *
     * @param request - ChangeCdnDomainToDcdnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeCdnDomainToDcdnResponse
     *
     * @param ChangeCdnDomainToDcdnRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeCdnDomainToDcdnResponse
     */
    public function changeCdnDomainToDcdnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeCdnDomainToDcdn',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeCdnDomainToDcdnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transfer a domain name from Alibaba Cloud CDN to DCDN.
     *
     * @param request - ChangeCdnDomainToDcdnRequest
     *
     * @returns ChangeCdnDomainToDcdnResponse
     *
     * @param ChangeCdnDomainToDcdnRequest $request
     *
     * @return ChangeCdnDomainToDcdnResponse
     */
    public function changeCdnDomainToDcdn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCdnDomainToDcdnWithOptions($request, $runtime);
    }

    /**
     * Checks whether a domain name exists.
     *
     * @param request - CheckCdnDomainExistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCdnDomainExistResponse
     *
     * @param CheckCdnDomainExistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CheckCdnDomainExistResponse
     */
    public function checkCdnDomainExistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCdnDomainExist',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCdnDomainExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a domain name exists.
     *
     * @param request - CheckCdnDomainExistRequest
     *
     * @returns CheckCdnDomainExistResponse
     *
     * @param CheckCdnDomainExistRequest $request
     *
     * @return CheckCdnDomainExistResponse
     */
    public function checkCdnDomainExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCdnDomainExistWithOptions($request, $runtime);
    }

    /**
     * Checks whether an ICP filing is obtained for the domain name.
     *
     * @param request - CheckCdnDomainICPRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckCdnDomainICPResponse
     *
     * @param CheckCdnDomainICPRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckCdnDomainICPResponse
     */
    public function checkCdnDomainICPWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckCdnDomainICP',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckCdnDomainICPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether an ICP filing is obtained for the domain name.
     *
     * @param request - CheckCdnDomainICPRequest
     *
     * @returns CheckCdnDomainICPResponse
     *
     * @param CheckCdnDomainICPRequest $request
     *
     * @return CheckCdnDomainICPResponse
     */
    public function checkCdnDomainICP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCdnDomainICPWithOptions($request, $runtime);
    }

    /**
     * Creates a certificate signing request (CSR).
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateCdnCertificateSigningRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCdnCertificateSigningRequestResponse
     *
     * @param CreateCdnCertificateSigningRequestRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateCdnCertificateSigningRequestResponse
     */
    public function createCdnCertificateSigningRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->commonName) {
            @$query['CommonName'] = $request->commonName;
        }

        if (null !== $request->country) {
            @$query['Country'] = $request->country;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->organization) {
            @$query['Organization'] = $request->organization;
        }

        if (null !== $request->organizationUnit) {
            @$query['OrganizationUnit'] = $request->organizationUnit;
        }

        if (null !== $request->SANs) {
            @$query['SANs'] = $request->SANs;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCdnCertificateSigningRequest',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCdnCertificateSigningRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a certificate signing request (CSR).
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateCdnCertificateSigningRequestRequest
     *
     * @returns CreateCdnCertificateSigningRequestResponse
     *
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
     * Creates a tracking task. After you create a tracking task, the system sends operations reports to you by email on a regular basis.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - CreateCdnDeliverTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCdnDeliverTaskResponse
     *
     * @param CreateCdnDeliverTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCdnDeliverTaskResponse
     */
    public function createCdnDeliverTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deliver) {
            @$body['Deliver'] = $request->deliver;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->reports) {
            @$body['Reports'] = $request->reports;
        }

        if (null !== $request->schedule) {
            @$body['Schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCdnDeliverTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a tracking task. After you create a tracking task, the system sends operations reports to you by email on a regular basis.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - CreateCdnDeliverTaskRequest
     *
     * @returns CreateCdnDeliverTaskResponse
     *
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
     * Creates a custom operations report.
     *
     * @remarks
     *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     * *   You can call this operation up to three times per second per account.
     *
     * @param request - CreateCdnSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCdnSubTaskResponse
     *
     * @param CreateCdnSubTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCdnSubTaskResponse
     */
    public function createCdnSubTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->reportIds) {
            @$body['ReportIds'] = $request->reportIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCdnSubTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom operations report.
     *
     * @remarks
     *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     * *   You can call this operation up to three times per second per account.
     *
     * @param request - CreateCdnSubTaskRequest
     *
     * @returns CreateCdnSubTaskResponse
     *
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
     * Enables real-time log delivery for specific accelerated domain names.
     *
     * @remarks
     * >  You can call this API operation up to 100 times per second per account.
     *
     * @param request - CreateRealTimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRealTimeLogDeliveryResponse
     *
     * @param CreateRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRealTimeLogDeliveryResponse
     */
    public function createRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRealTimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRealTimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables real-time log delivery for specific accelerated domain names.
     *
     * @remarks
     * >  You can call this API operation up to 100 times per second per account.
     *
     * @param request - CreateRealTimeLogDeliveryRequest
     *
     * @returns CreateRealTimeLogDeliveryResponse
     *
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
     * Creates a task to export resource usage details to an Excel file.
     *
     * @remarks
     *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateUsageDetailDataExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUsageDetailDataExportTaskResponse
     *
     * @param CreateUsageDetailDataExportTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateUsageDetailDataExportTaskResponse
     */
    public function createUsageDetailDataExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->group) {
            @$query['Group'] = $request->group;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUsageDetailDataExportTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUsageDetailDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to export resource usage details to an Excel file.
     *
     * @remarks
     *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateUsageDetailDataExportTaskRequest
     *
     * @returns CreateUsageDetailDataExportTaskResponse
     *
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
     * Creates a task to export your resource usage history to a PDF file.
     *
     * @remarks
     *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateUserUsageDataExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserUsageDataExportTaskResponse
     *
     * @param CreateUserUsageDataExportTaskRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateUserUsageDataExportTaskResponse
     */
    public function createUserUsageDataExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserUsageDataExportTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserUsageDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a task to export your resource usage history to a PDF file.
     *
     * @remarks
     *   You can create a task to query data in the last year. The maximum time range that can be queried is one month.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateUserUsageDataExportTaskRequest
     *
     * @returns CreateUserUsageDataExportTaskResponse
     *
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
     * Deletes tracking tasks by task ID.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - DeleteCdnDeliverTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCdnDeliverTaskResponse
     *
     * @param DeleteCdnDeliverTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCdnDeliverTaskResponse
     */
    public function deleteCdnDeliverTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliverId) {
            @$query['DeliverId'] = $request->deliverId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCdnDeliverTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes tracking tasks by task ID.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - DeleteCdnDeliverTaskRequest
     *
     * @returns DeleteCdnDeliverTaskResponse
     *
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
     * Removes an accelerated domain name from Alibaba Cloud CDN.
     *
     * @remarks
     *   We recommend that you add an A record for the domain name in the system of your DNS service provider before you remove the domain name from Alibaba Cloud CDN. Otherwise, the domain name may become inaccessible. Proceed with caution.
     * *   After you successfully call the DeleteCdnDomain operation, all records of the removed domain name are deleted. If you need to only disable the domain name, we recommend that you call the StopCdnDomain operation.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DeleteCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCdnDomainResponse
     *
     * @param DeleteCdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCdnDomainResponse
     */
    public function deleteCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an accelerated domain name from Alibaba Cloud CDN.
     *
     * @remarks
     *   We recommend that you add an A record for the domain name in the system of your DNS service provider before you remove the domain name from Alibaba Cloud CDN. Otherwise, the domain name may become inaccessible. Proceed with caution.
     * *   After you successfully call the DeleteCdnDomain operation, all records of the removed domain name are deleted. If you need to only disable the domain name, we recommend that you call the StopCdnDomain operation.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DeleteCdnDomainRequest
     *
     * @returns DeleteCdnDomainResponse
     *
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
     * The ID of the request.
     *
     * @remarks
     * >  You can call this API operation up to three times per second per account.
     *
     * @param request - DeleteCdnSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCdnSubTaskResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCdnSubTaskResponse
     */
    public function deleteCdnSubTaskWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DeleteCdnSubTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *
     * @remarks
     * >  You can call this API operation up to three times per second per account.
     *
     * @returns DeleteCdnSubTaskResponse
     *
     * @return DeleteCdnSubTaskResponse
     */
    public function deleteCdnSubTask()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdnSubTaskWithOptions($runtime);
    }

    /**
     * A客户定制实时日志删除接口.
     *
     * @param request - DeleteCustomDomainSampleRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomDomainSampleRateResponse
     *
     * @param DeleteCustomDomainSampleRateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteCustomDomainSampleRateResponse
     */
    public function deleteCustomDomainSampleRateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainNames) {
            @$body['DomainNames'] = $request->domainNames;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomDomainSampleRate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomDomainSampleRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A客户定制实时日志删除接口.
     *
     * @param request - DeleteCustomDomainSampleRateRequest
     *
     * @returns DeleteCustomDomainSampleRateResponse
     *
     * @param DeleteCustomDomainSampleRateRequest $request
     *
     * @return DeleteCustomDomainSampleRateResponse
     */
    public function deleteCustomDomainSampleRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomDomainSampleRateWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified Function Compute trigger.
     *
     * @param request - DeleteFCTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFCTriggerResponse
     *
     * @param DeleteFCTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteFCTriggerResponse
     */
    public function deleteFCTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->triggerARN) {
            @$query['TriggerARN'] = $request->triggerARN;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFCTrigger',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified Function Compute trigger.
     *
     * @param request - DeleteFCTriggerRequest
     *
     * @returns DeleteFCTriggerResponse
     *
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
     * Deletes the Logstore that is used by a specified configuration record of real-time log delivery.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteRealTimeLogLogstoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRealTimeLogLogstoreResponse
     *
     * @param DeleteRealTimeLogLogstoreRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRealTimeLogLogstoreResponse
     */
    public function deleteRealTimeLogLogstoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRealTimeLogLogstore',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRealTimeLogLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the Logstore that is used by a specified configuration record of real-time log delivery.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteRealTimeLogLogstoreRequest
     *
     * @returns DeleteRealTimeLogLogstoreResponse
     *
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
     * Deletes the configurations of real-time log delivery for specific accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRealtimeLogDeliveryResponse
     *
     * @param DeleteRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRealtimeLogDeliveryResponse
     */
    public function deleteRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRealtimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configurations of real-time log delivery for specific accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteRealtimeLogDeliveryRequest
     *
     * @returns DeleteRealtimeLogDeliveryResponse
     *
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
     * Deletes specified configurations of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DeleteSpecificConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSpecificConfigResponse
     *
     * @param DeleteSpecificConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSpecificConfigResponse
     */
    public function deleteSpecificConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSpecificConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes specified configurations of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DeleteSpecificConfigRequest
     *
     * @returns DeleteSpecificConfigResponse
     *
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
     * Deletes a specified configuration of the staging environment.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param request - DeleteSpecificStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSpecificStagingConfigResponse
     *
     * @param DeleteSpecificStagingConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteSpecificStagingConfigResponse
     */
    public function deleteSpecificStagingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSpecificStagingConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSpecificStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified configuration of the staging environment.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param request - DeleteSpecificStagingConfigRequest
     *
     * @returns DeleteSpecificStagingConfigResponse
     *
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
     * Deletes a task that was used to export usage details.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteUsageDetailDataExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUsageDetailDataExportTaskResponse
     *
     * @param DeleteUsageDetailDataExportTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteUsageDetailDataExportTaskResponse
     */
    public function deleteUsageDetailDataExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUsageDetailDataExportTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUsageDetailDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a task that was used to export usage details.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteUsageDetailDataExportTaskRequest
     *
     * @returns DeleteUsageDetailDataExportTaskResponse
     *
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
     * Deletes a task that was used to export usage history.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteUserUsageDataExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserUsageDataExportTaskResponse
     *
     * @param DeleteUserUsageDataExportTaskRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteUserUsageDataExportTaskResponse
     */
    public function deleteUserUsageDataExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserUsageDataExportTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserUsageDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a task that was used to export usage history.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteUserUsageDataExportTaskRequest
     *
     * @returns DeleteUserUsageDataExportTaskResponse
     *
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
     * Queries countries and regions that can be added to the blacklist.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeBlockedRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBlockedRegionsResponse
     *
     * @param DescribeBlockedRegionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBlockedRegionsResponse
     */
    public function describeBlockedRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBlockedRegions',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBlockedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries countries and regions that can be added to the blacklist.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeBlockedRegionsRequest
     *
     * @returns DescribeBlockedRegionsResponse
     *
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
     * Queries the detailed information about an SSL certificate.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeCdnCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnCertificateDetailResponse
     *
     * @param DescribeCdnCertificateDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCdnCertificateDetailResponse
     */
    public function describeCdnCertificateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnCertificateDetail',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about an SSL certificate.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeCdnCertificateDetailRequest
     *
     * @returns DescribeCdnCertificateDetailResponse
     *
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
     * Queries certificate details by certificate ID.
     *
     * @param request - DescribeCdnCertificateDetailByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnCertificateDetailByIdResponse
     *
     * @param DescribeCdnCertificateDetailByIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCdnCertificateDetailByIdResponse
     */
    public function describeCdnCertificateDetailByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->certRegion) {
            @$query['CertRegion'] = $request->certRegion;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnCertificateDetailById',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnCertificateDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries certificate details by certificate ID.
     *
     * @param request - DescribeCdnCertificateDetailByIdRequest
     *
     * @returns DescribeCdnCertificateDetailByIdResponse
     *
     * @param DescribeCdnCertificateDetailByIdRequest $request
     *
     * @return DescribeCdnCertificateDetailByIdResponse
     */
    public function describeCdnCertificateDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnCertificateDetailByIdWithOptions($request, $runtime);
    }

    /**
     * Queries the certificates of accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @deprecated openAPI DescribeCdnCertificateList is deprecated, please use Cdn::2018-05-10::DescribeCdnSSLCertificateList instead
     *
     * @param request - DescribeCdnCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnCertificateListResponse
     *
     * @param DescribeCdnCertificateListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnCertificateListResponse
     */
    public function describeCdnCertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnCertificateList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the certificates of accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @deprecated openAPI DescribeCdnCertificateList is deprecated, please use Cdn::2018-05-10::DescribeCdnSSLCertificateList instead
     *
     * @param request - DescribeCdnCertificateListRequest
     *
     * @returns DescribeCdnCertificateListResponse
     *
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
     * Queries the Internet service provider (ISP), region, and country that are required for advanced conditions.
     *
     * @param request - DescribeCdnConditionIPBInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnConditionIPBInfoResponse
     *
     * @param DescribeCdnConditionIPBInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCdnConditionIPBInfoResponse
     */
    public function describeCdnConditionIPBInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnConditionIPBInfo',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnConditionIPBInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Internet service provider (ISP), region, and country that are required for advanced conditions.
     *
     * @param request - DescribeCdnConditionIPBInfoRequest
     *
     * @returns DescribeCdnConditionIPBInfoResponse
     *
     * @param DescribeCdnConditionIPBInfoRequest $request
     *
     * @return DescribeCdnConditionIPBInfoResponse
     */
    public function describeCdnConditionIPBInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnConditionIPBInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the domain names that are deleted from your account.
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeCdnDeletedDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDeletedDomainsResponse
     *
     * @param DescribeCdnDeletedDomainsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCdnDeletedDomainsResponse
     */
    public function describeCdnDeletedDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDeletedDomains',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDeletedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain names that are deleted from your account.
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeCdnDeletedDomainsRequest
     *
     * @returns DescribeCdnDeletedDomainsResponse
     *
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
     * Queries one or more tracking tasks of operations reports.
     *
     * @remarks
     * > You can call this operation up to 3 times per second per account.
     *
     * @param request - DescribeCdnDeliverListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDeliverListResponse
     *
     * @param DescribeCdnDeliverListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCdnDeliverListResponse
     */
    public function describeCdnDeliverListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliverId) {
            @$query['DeliverId'] = $request->deliverId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDeliverList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDeliverListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more tracking tasks of operations reports.
     *
     * @remarks
     * > You can call this operation up to 3 times per second per account.
     *
     * @param request - DescribeCdnDeliverListRequest
     *
     * @returns DescribeCdnDeliverListResponse
     *
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
     * 天翼定制化小时日志下载接口.
     *
     * @param request - DescribeCdnDomainAtoaLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainAtoaLogsResponse
     *
     * @param DescribeCdnDomainAtoaLogsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCdnDomainAtoaLogsResponse
     */
    public function describeCdnDomainAtoaLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainAtoaLogs',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainAtoaLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 天翼定制化小时日志下载接口.
     *
     * @param request - DescribeCdnDomainAtoaLogsRequest
     *
     * @returns DescribeCdnDomainAtoaLogsResponse
     *
     * @param DescribeCdnDomainAtoaLogsRequest $request
     *
     * @return DescribeCdnDomainAtoaLogsResponse
     */
    public function describeCdnDomainAtoaLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainAtoaLogsWithOptions($request, $runtime);
    }

    /**
     * Queries accelerated domain names by SSL certificate.
     *
     * @remarks
     * >  You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnDomainByCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainByCertificateResponse
     *
     * @param DescribeCdnDomainByCertificateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnDomainByCertificateResponse
     */
    public function describeCdnDomainByCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exact) {
            @$query['Exact'] = $request->exact;
        }

        if (null !== $request->SSLPub) {
            @$query['SSLPub'] = $request->SSLPub;
        }

        if (null !== $request->SSLStatus) {
            @$query['SSLStatus'] = $request->SSLStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainByCertificate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainByCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries accelerated domain names by SSL certificate.
     *
     * @remarks
     * >  You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnDomainByCertificateRequest
     *
     * @returns DescribeCdnDomainByCertificateResponse
     *
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
     * Queries the configurations of an accelerated domain name. You can query the configurations of one or more features at the same time.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainConfigsResponse
     *
     * @param DescribeCdnDomainConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCdnDomainConfigsResponse
     */
    public function describeCdnDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionNames) {
            @$query['FunctionNames'] = $request->functionNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainConfigs',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an accelerated domain name. You can query the configurations of one or more features at the same time.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnDomainConfigsRequest
     *
     * @returns DescribeCdnDomainConfigsResponse
     *
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
     * Queries the basic information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainDetailResponse
     *
     * @param DescribeCdnDomainDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnDomainDetailResponse
     */
    public function describeCdnDomainDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainDetail',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnDomainDetailRequest
     *
     * @returns DescribeCdnDomainDetailResponse
     *
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
     * Queries the address where you can download the log data of a specific domain name.
     *
     * @remarks
     *   If you do not set **StartTime** or **EndTime**, the request returns the data collected in the last 24 hours. If you set both **StartTime** and **EndTime**, the request returns the data collected within the specified time range.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 100 times per second per account.
     * *   You can query only logs in the last month. The start time and the current time cannot exceed 31 days.
     *
     * @param request - DescribeCdnDomainLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainLogsResponse
     *
     * @param DescribeCdnDomainLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCdnDomainLogsResponse
     */
    public function describeCdnDomainLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainLogs',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the address where you can download the log data of a specific domain name.
     *
     * @remarks
     *   If you do not set **StartTime** or **EndTime**, the request returns the data collected in the last 24 hours. If you set both **StartTime** and **EndTime**, the request returns the data collected within the specified time range.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 100 times per second per account.
     * *   You can query only logs in the last month. The start time and the current time cannot exceed 31 days.
     *
     * @param request - DescribeCdnDomainLogsRequest
     *
     * @returns DescribeCdnDomainLogsResponse
     *
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
     * 查询离线日志下载地址
     *
     * @param request - DescribeCdnDomainLogsExTtlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainLogsExTtlResponse
     *
     * @param DescribeCdnDomainLogsExTtlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnDomainLogsExTtlResponse
     */
    public function describeCdnDomainLogsExTtlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainLogsExTtl',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainLogsExTtlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询离线日志下载地址
     *
     * @param request - DescribeCdnDomainLogsExTtlRequest
     *
     * @returns DescribeCdnDomainLogsExTtlResponse
     *
     * @param DescribeCdnDomainLogsExTtlRequest $request
     *
     * @return DescribeCdnDomainLogsExTtlResponse
     */
    public function describeCdnDomainLogsExTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnDomainLogsExTtlWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of features in the staging environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnDomainStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnDomainStagingConfigResponse
     *
     * @param DescribeCdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnDomainStagingConfigResponse
     */
    public function describeCdnDomainStagingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionNames) {
            @$query['FunctionNames'] = $request->functionNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnDomainStagingConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of features in the staging environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnDomainStagingConfigRequest
     *
     * @returns DescribeCdnDomainStagingConfigResponse
     *
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
     * You can call the DescribeCdnFullDomainsBlockIPConfig operation to query the configurations of full blocking.
     *
     * @remarks
     * >
     * *   To use this operation,[submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * *   If you specify IP addresses or CIDR blocks, IP addresses that are effective and the corresponding expiration time are returned. If you do not specify IP addresses or CIDR blocks, all effective IP addresses and the corresponding expiration time are returned.
     * *   The results are written to OSS and returned as OSS URLs. The content in OSS objects is in the format of IP address-Corresponding expiration time. The expiration time is in the YYYY-MM-DD hh:mm:ss format.
     * *   You can share OSS URLs with others. The shared URLs are valid for three days.
     *
     * @param request - DescribeCdnFullDomainsBlockIPConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnFullDomainsBlockIPConfigResponse
     *
     * @param DescribeCdnFullDomainsBlockIPConfigRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCdnFullDomainsBlockIPConfigResponse
     */
    public function describeCdnFullDomainsBlockIPConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->IPList) {
            @$body['IPList'] = $request->IPList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnFullDomainsBlockIPConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnFullDomainsBlockIPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeCdnFullDomainsBlockIPConfig operation to query the configurations of full blocking.
     *
     * @remarks
     * >
     * *   To use this operation,[submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * *   If you specify IP addresses or CIDR blocks, IP addresses that are effective and the corresponding expiration time are returned. If you do not specify IP addresses or CIDR blocks, all effective IP addresses and the corresponding expiration time are returned.
     * *   The results are written to OSS and returned as OSS URLs. The content in OSS objects is in the format of IP address-Corresponding expiration time. The expiration time is in the YYYY-MM-DD hh:mm:ss format.
     * *   You can share OSS URLs with others. The shared URLs are valid for three days.
     *
     * @param request - DescribeCdnFullDomainsBlockIPConfigRequest
     *
     * @returns DescribeCdnFullDomainsBlockIPConfigResponse
     *
     * @param DescribeCdnFullDomainsBlockIPConfigRequest $request
     *
     * @return DescribeCdnFullDomainsBlockIPConfigResponse
     */
    public function describeCdnFullDomainsBlockIPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnFullDomainsBlockIPConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the blocking history.
     *
     * @remarks
     * >
     * *   To use this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * *   For a specified IP addresses and time range, the time when the IP address was delivered to the edge and the corresponding result are returned.
     * *   If a specified IP address or CIDR block has multiple blocking records in a specified time range, the records are sorted by delivery time in descending order.
     * *   The maximum time range to query is 90 days.
     * *   If no blocking record exists or delivery fails for the given IP address and time range, the delivery time is empty.
     *
     * @param request - DescribeCdnFullDomainsBlockIPHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnFullDomainsBlockIPHistoryResponse
     *
     * @param DescribeCdnFullDomainsBlockIPHistoryRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCdnFullDomainsBlockIPHistoryResponse
     */
    public function describeCdnFullDomainsBlockIPHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->IPList) {
            @$body['IPList'] = $request->IPList;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnFullDomainsBlockIPHistory',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnFullDomainsBlockIPHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the blocking history.
     *
     * @remarks
     * >
     * *   To use this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * *   For a specified IP addresses and time range, the time when the IP address was delivered to the edge and the corresponding result are returned.
     * *   If a specified IP address or CIDR block has multiple blocking records in a specified time range, the records are sorted by delivery time in descending order.
     * *   The maximum time range to query is 90 days.
     * *   If no blocking record exists or delivery fails for the given IP address and time range, the delivery time is empty.
     *
     * @param request - DescribeCdnFullDomainsBlockIPHistoryRequest
     *
     * @returns DescribeCdnFullDomainsBlockIPHistoryResponse
     *
     * @param DescribeCdnFullDomainsBlockIPHistoryRequest $request
     *
     * @return DescribeCdnFullDomainsBlockIPHistoryResponse
     */
    public function describeCdnFullDomainsBlockIPHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnFullDomainsBlockIPHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries the information about SSL certificates that belong to your Alibaba Cloud account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnHttpsDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnHttpsDomainListResponse
     *
     * @param DescribeCdnHttpsDomainListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnHttpsDomainListResponse
     */
    public function describeCdnHttpsDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnHttpsDomainList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnHttpsDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about SSL certificates that belong to your Alibaba Cloud account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnHttpsDomainListRequest
     *
     * @returns DescribeCdnHttpsDomainListResponse
     *
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
     * Queries the registration status of the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for a domain name that is added to Alibaba Cloud CDN.
     *
     * @remarks
     * >  If a domain name is not transferred from Alibaba Cloud CDN to DCDN after it is registered in the routing center of DCDN, the registration information is retained for only one day.
     *
     * @param request - DescribeCdnMigrateRegisterStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnMigrateRegisterStatusResponse
     *
     * @param DescribeCdnMigrateRegisterStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCdnMigrateRegisterStatusResponse
     */
    public function describeCdnMigrateRegisterStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnMigrateRegisterStatus',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnMigrateRegisterStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the registration status of the dynamic routing feature of Dynamic Content Delivery Network (DCDN) for a domain name that is added to Alibaba Cloud CDN.
     *
     * @remarks
     * >  If a domain name is not transferred from Alibaba Cloud CDN to DCDN after it is registered in the routing center of DCDN, the registration information is retained for only one day.
     *
     * @param request - DescribeCdnMigrateRegisterStatusRequest
     *
     * @returns DescribeCdnMigrateRegisterStatusResponse
     *
     * @param DescribeCdnMigrateRegisterStatusRequest $request
     *
     * @return DescribeCdnMigrateRegisterStatusResponse
     */
    public function describeCdnMigrateRegisterStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnMigrateRegisterStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the code of a commodity by account UID.
     *
     * @param request - DescribeCdnOrderCommodityCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnOrderCommodityCodeResponse
     *
     * @param DescribeCdnOrderCommodityCodeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCdnOrderCommodityCodeResponse
     */
    public function describeCdnOrderCommodityCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnOrderCommodityCode',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnOrderCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the code of a commodity by account UID.
     *
     * @param request - DescribeCdnOrderCommodityCodeRequest
     *
     * @returns DescribeCdnOrderCommodityCodeResponse
     *
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
     * Queries Internet service providers (ISPs) and regions that are supported by Alibaba Cloud CDN.
     *
     * @remarks
     *   The lists of ISPs and regions that are supported by Alibaba Cloud CDN are updated and published on the Alibaba Cloud International site.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnRegionAndIspRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnRegionAndIspResponse
     *
     * @param DescribeCdnRegionAndIspRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnRegionAndIspResponse
     */
    public function describeCdnRegionAndIspWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnRegionAndIsp',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnRegionAndIspResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Internet service providers (ISPs) and regions that are supported by Alibaba Cloud CDN.
     *
     * @remarks
     *   The lists of ISPs and regions that are supported by Alibaba Cloud CDN are updated and published on the Alibaba Cloud International site.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnRegionAndIspRequest
     *
     * @returns DescribeCdnRegionAndIspResponse
     *
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
     * Queries the content of an operations report.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - DescribeCdnReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnReportResponse
     *
     * @param DescribeCdnReportRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCdnReportResponse
     */
    public function describeCdnReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->httpCode) {
            @$query['HttpCode'] = $request->httpCode;
        }

        if (null !== $request->isOverseas) {
            @$query['IsOverseas'] = $request->isOverseas;
        }

        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnReport',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the content of an operations report.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - DescribeCdnReportRequest
     *
     * @returns DescribeCdnReportResponse
     *
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
     * Queries operations reports.
     *
     * @remarks
     *   This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     * *   You can call this operation up to three times per second per account.
     *
     * @param request - DescribeCdnReportListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnReportListResponse
     *
     * @param DescribeCdnReportListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCdnReportListResponse
     */
    public function describeCdnReportListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportId) {
            @$query['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnReportList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries operations reports.
     *
     * @remarks
     *   This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     * *   You can call this operation up to three times per second per account.
     *
     * @param request - DescribeCdnReportListRequest
     *
     * @returns DescribeCdnReportListResponse
     *
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
     * Queries the details about a ShangMi (SM) certificate.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeCdnSMCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnSMCertificateDetailResponse
     *
     * @param DescribeCdnSMCertificateDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnSMCertificateDetailResponse
     */
    public function describeCdnSMCertificateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnSMCertificateDetail',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnSMCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a ShangMi (SM) certificate.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeCdnSMCertificateDetailRequest
     *
     * @returns DescribeCdnSMCertificateDetailResponse
     *
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
     * Queries the ShangMi (SM) certificates of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnSMCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnSMCertificateListResponse
     *
     * @param DescribeCdnSMCertificateListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCdnSMCertificateListResponse
     */
    public function describeCdnSMCertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnSMCertificateList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnSMCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ShangMi (SM) certificates of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnSMCertificateListRequest
     *
     * @returns DescribeCdnSMCertificateListResponse
     *
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
     * Queries the certificate list by domain name.
     *
     * @param request - DescribeCdnSSLCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnSSLCertificateListResponse
     *
     * @param DescribeCdnSSLCertificateListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCdnSSLCertificateListResponse
     */
    public function describeCdnSSLCertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeyword) {
            @$query['SearchKeyword'] = $request->searchKeyword;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnSSLCertificateList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnSSLCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificate list by domain name.
     *
     * @param request - DescribeCdnSSLCertificateListRequest
     *
     * @returns DescribeCdnSSLCertificateListResponse
     *
     * @param DescribeCdnSSLCertificateListRequest $request
     *
     * @return DescribeCdnSSLCertificateListResponse
     */
    public function describeCdnSSLCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSSLCertificateListWithOptions($request, $runtime);
    }

    /**
     * Queries information about security features of Alibaba Cloud CDN.
     *
     * @param request - DescribeCdnSecFuncInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnSecFuncInfoResponse
     *
     * @param DescribeCdnSecFuncInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCdnSecFuncInfoResponse
     */
    public function describeCdnSecFuncInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->secFuncType) {
            @$query['SecFuncType'] = $request->secFuncType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnSecFuncInfo',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnSecFuncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about security features of Alibaba Cloud CDN.
     *
     * @param request - DescribeCdnSecFuncInfoRequest
     *
     * @returns DescribeCdnSecFuncInfoResponse
     *
     * @param DescribeCdnSecFuncInfoRequest $request
     *
     * @return DescribeCdnSecFuncInfoResponse
     */
    public function describeCdnSecFuncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSecFuncInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the status of your Alibaba Cloud CDN service. The information includes the service activation time, the current service status, the current metering method, and the metering method for the next cycle.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnServiceResponse
     *
     * @param DescribeCdnServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCdnServiceResponse
     */
    public function describeCdnServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnService',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of your Alibaba Cloud CDN service. The information includes the service activation time, the current service status, the current metering method, and the metering method for the next cycle.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnServiceRequest
     *
     * @returns DescribeCdnServiceResponse
     *
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
     * Queries the tracking tasks that you have created.
     *
     * @remarks
     *   By default, this operation queries all custom operations reports. However, only one operations report can be displayed. Therefore, only one operations report is returned.
     * *   You can call this operation up to three times per second per account.
     *
     * @param request - DescribeCdnSubListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnSubListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCdnSubListResponse
     */
    public function describeCdnSubListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeCdnSubList',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnSubListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tracking tasks that you have created.
     *
     * @remarks
     *   By default, this operation queries all custom operations reports. However, only one operations report can be displayed. Therefore, only one operations report is returned.
     * *   You can call this operation up to three times per second per account.
     *
     * @returns DescribeCdnSubListResponse
     *
     * @return DescribeCdnSubListResponse
     */
    public function describeCdnSubList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnSubListWithOptions($runtime);
    }

    /**
     * Queries the types of domain names.
     *
     * @param request - DescribeCdnTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnTypesResponse
     *
     * @param DescribeCdnTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCdnTypesResponse
     */
    public function describeCdnTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnTypes',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the types of domain names.
     *
     * @param request - DescribeCdnTypesRequest
     *
     * @returns DescribeCdnTypesResponse
     *
     * @param DescribeCdnTypesRequest $request
     *
     * @return DescribeCdnTypesResponse
     */
    public function describeCdnTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdnTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the billing history under your Alibaba Cloud account.
     *
     * @remarks
     *   You can query billing history up to the last one month.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnUserBillHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserBillHistoryResponse
     *
     * @param DescribeCdnUserBillHistoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCdnUserBillHistoryResponse
     */
    public function describeCdnUserBillHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserBillHistory',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserBillHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the billing history under your Alibaba Cloud account.
     *
     * @remarks
     *   You can query billing history up to the last one month.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnUserBillHistoryRequest
     *
     * @returns DescribeCdnUserBillHistoryResponse
     *
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
     * Estimates resource usage of the current month.
     *
     * @remarks
     * You can call this operation to estimate resource usage of the current month based on the metering method that is specified on the first day of the current month. You can call this operation to estimate resource usage only of the current month within your Alibaba Cloud account. The time range used for the estimation starts at 00:00 on the first day of the current month and ends 2 hours earlier than the current time.
     * *   Pay by monthly 95th percentile: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * *   Pay by average daily peak bandwidth per month: Estimated value = Sum of daily peak bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 4th peak bandwidth per month: The estimated value is the 4th peak bandwidth value between the start time and end time. If the time range is less than four days, the estimated value is 0.
     * *   Pay by average daily 95th percentile bandwidth per month: Estimated value = Sum of daily 95th percentile bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * > You can call this operation only once per second per account.
     *
     * @param request - DescribeCdnUserBillPredictionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserBillPredictionResponse
     *
     * @param DescribeCdnUserBillPredictionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCdnUserBillPredictionResponse
     */
    public function describeCdnUserBillPredictionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserBillPrediction',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserBillPredictionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Estimates resource usage of the current month.
     *
     * @remarks
     * You can call this operation to estimate resource usage of the current month based on the metering method that is specified on the first day of the current month. You can call this operation to estimate resource usage only of the current month within your Alibaba Cloud account. The time range used for the estimation starts at 00:00 on the first day of the current month and ends 2 hours earlier than the current time.
     * *   Pay by monthly 95th percentile: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * *   Pay by average daily peak bandwidth per month: Estimated value = Sum of daily peak bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 4th peak bandwidth per month: The estimated value is the 4th peak bandwidth value between the start time and end time. If the time range is less than four days, the estimated value is 0.
     * *   Pay by average daily 95th percentile bandwidth per month: Estimated value = Sum of daily 95th percentile bandwidth values/Number of days. The current day is excluded.
     * *   Pay by 95th percentile bandwidth with 50% off from 00:00 to 08:00: The top 5% values between the start time and end time are excluded. The estimated value is the highest value among the remaining values.
     * > You can call this operation only once per second per account.
     *
     * @param request - DescribeCdnUserBillPredictionRequest
     *
     * @returns DescribeCdnUserBillPredictionResponse
     *
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
     * Queries information about the metering methods of an account. The maximum time range to query is one month.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnUserBillTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserBillTypeResponse
     *
     * @param DescribeCdnUserBillTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCdnUserBillTypeResponse
     */
    public function describeCdnUserBillTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserBillType',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserBillTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the metering methods of an account. The maximum time range to query is one month.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCdnUserBillTypeRequest
     *
     * @returns DescribeCdnUserBillTypeResponse
     *
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
     * Queries configurations of security features.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnUserConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserConfigsResponse
     *
     * @param DescribeCdnUserConfigsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCdnUserConfigsResponse
     */
    public function describeCdnUserConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserConfigs',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries configurations of security features.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnUserConfigsRequest
     *
     * @returns DescribeCdnUserConfigsResponse
     *
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
     * Queries accelerated domain names that have specified features configured and the status of the domain names.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 100.
     *
     * @param request - DescribeCdnUserDomainsByFuncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserDomainsByFuncResponse
     *
     * @param DescribeCdnUserDomainsByFuncRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCdnUserDomainsByFuncResponse
     */
    public function describeCdnUserDomainsByFuncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->funcId) {
            @$query['FuncId'] = $request->funcId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserDomainsByFunc',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserDomainsByFuncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries accelerated domain names that have specified features configured and the status of the domain names.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 100.
     *
     * @param request - DescribeCdnUserDomainsByFuncRequest
     *
     * @returns DescribeCdnUserDomainsByFuncResponse
     *
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
     * Queries the quotas and usage of Alibaba Cloud CDN resources.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnUserQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserQuotaResponse
     *
     * @param DescribeCdnUserQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCdnUserQuotaResponse
     */
    public function describeCdnUserQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserQuota',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quotas and usage of Alibaba Cloud CDN resources.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnUserQuotaRequest
     *
     * @returns DescribeCdnUserQuotaResponse
     *
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
     * Queries the resource plans that you have purchased for Alibaba Cloud CDN.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnUserResourcePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnUserResourcePackageResponse
     *
     * @param DescribeCdnUserResourcePackageRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCdnUserResourcePackageResponse
     */
    public function describeCdnUserResourcePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnUserResourcePackage',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource plans that you have purchased for Alibaba Cloud CDN.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeCdnUserResourcePackageRequest
     *
     * @returns DescribeCdnUserResourcePackageResponse
     *
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
     * Queries domain names that use Web Application Firewall (WAF).
     *
     * @remarks
     * > You can call this operation up to 150 times per second per account.
     *
     * @param request - DescribeCdnWafDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdnWafDomainResponse
     *
     * @param DescribeCdnWafDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCdnWafDomainResponse
     */
    public function describeCdnWafDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdnWafDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdnWafDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries domain names that use Web Application Firewall (WAF).
     *
     * @remarks
     * > You can call this operation up to 150 times per second per account.
     *
     * @param request - DescribeCdnWafDomainRequest
     *
     * @returns DescribeCdnWafDomainResponse
     *
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
     * Queries the information about a specific certificate by certificate ID.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   If a certificate is associated with a domain name but the certificate is not enabled, the result of this operation shows that the certificate does not exist.
     *
     * @param request - DescribeCertificateInfoByIDRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertificateInfoByIDResponse
     *
     * @param DescribeCertificateInfoByIDRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCertificateInfoByIDResponse
     */
    public function describeCertificateInfoByIDWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCertificateInfoByID',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertificateInfoByIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a specific certificate by certificate ID.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   If a certificate is associated with a domain name but the certificate is not enabled, the result of this operation shows that the certificate does not exist.
     *
     * @param request - DescribeCertificateInfoByIDRequest
     *
     * @returns DescribeCertificateInfoByIDResponse
     *
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
     * A客户定制查询域名采样率.
     *
     * @param request - DescribeCustomDomainSampleRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomDomainSampleRateResponse
     *
     * @param DescribeCustomDomainSampleRateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCustomDomainSampleRateResponse
     */
    public function describeCustomDomainSampleRateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomDomainSampleRate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomDomainSampleRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A客户定制查询域名采样率.
     *
     * @param request - DescribeCustomDomainSampleRateRequest
     *
     * @returns DescribeCustomDomainSampleRateResponse
     *
     * @param DescribeCustomDomainSampleRateRequest $request
     *
     * @return DescribeCustomDomainSampleRateResponse
     */
    public function describeCustomDomainSampleRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomDomainSampleRateWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a custom logging configuration.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCustomLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomLogConfigResponse
     *
     * @param DescribeCustomLogConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCustomLogConfigResponse
     */
    public function describeCustomLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomLogConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a custom logging configuration.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeCustomLogConfigRequest
     *
     * @returns DescribeCustomLogConfigResponse
     *
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
     * Queries the average response time of one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     * >*   You can specify up to 500 domain names in each request. Separate multiple domain names with commas (,).
     *
     * @param request - DescribeDomainAverageResponseTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainAverageResponseTimeResponse
     *
     * @param DescribeDomainAverageResponseTimeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainAverageResponseTimeResponse
     */
    public function describeDomainAverageResponseTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeMerge) {
            @$query['TimeMerge'] = $request->timeMerge;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainAverageResponseTime',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainAverageResponseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the average response time of one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     * >*   You can specify up to 500 domain names in each request. Separate multiple domain names with commas (,).
     *
     * @param request - DescribeDomainAverageResponseTimeRequest
     *
     * @returns DescribeDomainAverageResponseTimeResponse
     *
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
     * Queries bandwidth monitoring data for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 150 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainBpsDataResponse
     *
     * @param DescribeDomainBpsDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainBpsDataResponse
     */
    public function describeDomainBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainBpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth monitoring data for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 150 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainBpsDataRequest
     *
     * @returns DescribeDomainBpsDataResponse
     *
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
     * Queries bandwidth data by protocol.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainBpsDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainBpsDataByLayerResponse
     *
     * @param DescribeDomainBpsDataByLayerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainBpsDataByLayerResponse
     */
    public function describeDomainBpsDataByLayerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->layer) {
            @$query['Layer'] = $request->layer;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainBpsDataByLayer',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainBpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth data by protocol.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainBpsDataByLayerRequest
     *
     * @returns DescribeDomainBpsDataByLayerResponse
     *
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
     * Queries the bandwidth data at a specified time for an accelerated domain.
     *
     * @remarks
     *   The bandwidth is measured in bit/s.
     * *   You can specify only one accelerated domain name in each request.
     * *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeDomainBpsDataByTimeStampRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainBpsDataByTimeStampResponse
     *
     * @param DescribeDomainBpsDataByTimeStampRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainBpsDataByTimeStampResponse
     */
    public function describeDomainBpsDataByTimeStampWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ispNames) {
            @$query['IspNames'] = $request->ispNames;
        }

        if (null !== $request->locationNames) {
            @$query['LocationNames'] = $request->locationNames;
        }

        if (null !== $request->timePoint) {
            @$query['TimePoint'] = $request->timePoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainBpsDataByTimeStamp',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainBpsDataByTimeStampResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data at a specified time for an accelerated domain.
     *
     * @remarks
     *   The bandwidth is measured in bit/s.
     * *   You can specify only one accelerated domain name in each request.
     * *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeDomainBpsDataByTimeStampRequest
     *
     * @returns DescribeDomainBpsDataByTimeStampResponse
     *
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
     * Queries log entries of rate limiting.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both parameters empty.
     * *   You can specify up to 20 domain names in reach request. If you specify multiple domain names, separate them with commas (,).
     * *   You can query data collected over the last 30 days.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeDomainCcActivityLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainCcActivityLogResponse
     *
     * @param DescribeDomainCcActivityLogRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainCcActivityLogResponse
     */
    public function describeDomainCcActivityLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->triggerObject) {
            @$query['TriggerObject'] = $request->triggerObject;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainCcActivityLog',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainCcActivityLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries log entries of rate limiting.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both parameters empty.
     * *   You can specify up to 20 domain names in reach request. If you specify multiple domain names, separate them with commas (,).
     * *   You can query data collected over the last 30 days.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeDomainCcActivityLogRequest
     *
     * @returns DescribeDomainCcActivityLogResponse
     *
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
     * Queries the certificate information of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainCertificateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainCertificateInfoResponse
     *
     * @param DescribeDomainCertificateInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainCertificateInfoResponse
     */
    public function describeDomainCertificateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainCertificateInfo',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificate information of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainCertificateInfoRequest
     *
     * @returns DescribeDomainCertificateInfoResponse
     *
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
     * Detects the CNAME for an accelerated domain name. You can check the resolution result to determine whether the CNAME is configured.
     *
     * @param request - DescribeDomainCnameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainCnameResponse
     *
     * @param DescribeDomainCnameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDomainCnameResponse
     */
    public function describeDomainCnameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainCname',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects the CNAME for an accelerated domain name. You can check the resolution result to determine whether the CNAME is configured.
     *
     * @param request - DescribeDomainCnameRequest
     *
     * @returns DescribeDomainCnameResponse
     *
     * @param DescribeDomainCnameRequest $request
     *
     * @return DescribeDomainCnameResponse
     */
    public function describeDomainCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainCnameWithOptions($request, $runtime);
    }

    /**
     * Queries the custom log configuration of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainCustomLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainCustomLogConfigResponse
     *
     * @param DescribeDomainCustomLogConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainCustomLogConfigResponse
     */
    public function describeDomainCustomLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainCustomLogConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the custom log configuration of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainCustomLogConfigRequest
     *
     * @returns DescribeDomainCustomLogConfigResponse
     *
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
     * The domain name that you want to query. You can specify multiple domain names and separate them with commas (,). You can specify at most 30 domain names in each call.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeDomainDetailDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainDetailDataByLayerResponse
     *
     * @param DescribeDomainDetailDataByLayerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDomainDetailDataByLayerResponse
     */
    public function describeDomainDetailDataByLayerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainDetailDataByLayer',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainDetailDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The domain name that you want to query. You can specify multiple domain names and separate them with commas (,). You can specify at most 30 domain names in each call.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeDomainDetailDataByLayerRequest
     *
     * @returns DescribeDomainDetailDataByLayerResponse
     *
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
     * Queries byte hit ratios that are measured in percentage.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainHitRateDataResponse
     *
     * @param DescribeDomainHitRateDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainHitRateDataResponse
     */
    public function describeDomainHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainHitRateData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries byte hit ratios that are measured in percentage.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainHitRateDataRequest
     *
     * @returns DescribeDomainHitRateDataResponse
     *
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
     * Queries the total number and proportions of HTTP status codes returned from an accelerated domain name. The data is collected every 5 minutes.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainHttpCodeDataResponse
     *
     * @param DescribeDomainHttpCodeDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainHttpCodeDataResponse
     */
    public function describeDomainHttpCodeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainHttpCodeData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number and proportions of HTTP status codes returned from an accelerated domain name. The data is collected every 5 minutes.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainHttpCodeDataRequest
     *
     * @returns DescribeDomainHttpCodeDataResponse
     *
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
     * Queries HTTP status codes by protocol.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainHttpCodeDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainHttpCodeDataByLayerResponse
     *
     * @param DescribeDomainHttpCodeDataByLayerRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainHttpCodeDataByLayerResponse
     */
    public function describeDomainHttpCodeDataByLayerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->layer) {
            @$query['Layer'] = $request->layer;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainHttpCodeDataByLayer',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainHttpCodeDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries HTTP status codes by protocol.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainHttpCodeDataByLayerRequest
     *
     * @returns DescribeDomainHttpCodeDataByLayerResponse
     *
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
     * Queries the proportions of data usage of different Internet service providers (ISPs). Data is collected every day. You can query data collected in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set StartTime or EndTime, the request returns the data collected in the last 24 hours. If you set both StartTime and EndTime, the request returns the data collected within the specified time range.
     * >*   This operation queries proportions of data usage of different ISPs for only a specific accelerated domain name, or for all accelerated domain names in your Alibaba Cloud account.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainISPDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainISPDataResponse
     *
     * @param DescribeDomainISPDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainISPDataResponse
     */
    public function describeDomainISPDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainISPData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainISPDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the proportions of data usage of different Internet service providers (ISPs). Data is collected every day. You can query data collected in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set StartTime or EndTime, the request returns the data collected in the last 24 hours. If you set both StartTime and EndTime, the request returns the data collected within the specified time range.
     * >*   This operation queries proportions of data usage of different ISPs for only a specific accelerated domain name, or for all accelerated domain names in your Alibaba Cloud account.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainISPDataRequest
     *
     * @returns DescribeDomainISPDataResponse
     *
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
     * Queries the 95th percentile bandwidth data of a domain name.
     *
     * @remarks
     * *You can use one of the following methods to query data:**
     * *   If you specify the StartTime and EndTime parameters and the time range that is specified by these parameters is less than or equal to 24 hours, the 95th percentile bandwidth data on the day of the start time is returned. If the time range that is specified by these parameters is more than 24 hours, the 95th percentile bandwidth data in the month of the start time is returned.
     * *   If you specify the TimePoint and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * *   If you specify the StartTime, EndTime, and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * If you do not use one of the methods, the 95th percentile bandwidth data of the previous 24 hours is returned by default.
     * * Maximum time range to query: 90 days
     * * Minimum data granularity to query: 1 day
     * * Historical data available: 90 days
     * - You can call this operation up to 100 times per second per account.
     * - The unit of the bandwidth data returned is bit/s.
     *
     * @param request - DescribeDomainMax95BpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainMax95BpsDataResponse
     *
     * @param DescribeDomainMax95BpsDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainMax95BpsDataResponse
     */
    public function describeDomainMax95BpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cycle) {
            @$query['Cycle'] = $request->cycle;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timePoint) {
            @$query['TimePoint'] = $request->timePoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainMax95BpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainMax95BpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the 95th percentile bandwidth data of a domain name.
     *
     * @remarks
     * *You can use one of the following methods to query data:**
     * *   If you specify the StartTime and EndTime parameters and the time range that is specified by these parameters is less than or equal to 24 hours, the 95th percentile bandwidth data on the day of the start time is returned. If the time range that is specified by these parameters is more than 24 hours, the 95th percentile bandwidth data in the month of the start time is returned.
     * *   If you specify the TimePoint and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * *   If you specify the StartTime, EndTime, and Cycle parameters, the 95th percentile bandwidth data of the cycle is returned.
     * If you do not use one of the methods, the 95th percentile bandwidth data of the previous 24 hours is returned by default.
     * * Maximum time range to query: 90 days
     * * Minimum data granularity to query: 1 day
     * * Historical data available: 90 days
     * - You can call this operation up to 100 times per second per account.
     * - The unit of the bandwidth data returned is bit/s.
     *
     * @param request - DescribeDomainMax95BpsDataRequest
     *
     * @returns DescribeDomainMax95BpsDataResponse
     *
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
     * Queries the traffic data and the number of requests for multiple accelerated domain names at a time.
     *
     * @remarks
     *   If you do not set StartTime or EndTime, data collected within the last 10 minutes is queried.
     * *   The maximum interval between StartTime and EndTime is 1 hour.
     * *   You can query data within the last 90 days.
     * *   You can query the traffic data and the number of requests for accelerated domain names that are deleted.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeDomainMultiUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainMultiUsageDataResponse
     *
     * @param DescribeDomainMultiUsageDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainMultiUsageDataResponse
     */
    public function describeDomainMultiUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainMultiUsageData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainMultiUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic data and the number of requests for multiple accelerated domain names at a time.
     *
     * @remarks
     *   If you do not set StartTime or EndTime, data collected within the last 10 minutes is queried.
     * *   The maximum interval between StartTime and EndTime is 1 hour.
     * *   You can query data within the last 90 days.
     * *   You can query the traffic data and the number of requests for accelerated domain names that are deleted.
     * *   You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeDomainMultiUsageDataRequest
     *
     * @returns DescribeDomainMultiUsageDataResponse
     *
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
     * Queries monitoring data including the amount of network traffic and the number of visits by directory.
     *
     * @remarks
     *   This operation is available only to users that are on the whitelist. If the daily peak bandwidth value of your workloads reaches 10 Gbit/s, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply to be included in the whitelist.
     * *   You can call this API operation up to 6,000 times per second per account.
     * *   Data collection by directory is available only to specified domain names within your Alibaba Cloud account. It cannot be enabled for all domain names within your Alibaba Cloud account.
     * *   The average size of the files that belong to the domain name must be larger than 1 MB.
     * *   The number of directories specified for a single domain name cannot exceed 100. If the number of directories exceeds 100, the data accuracy reduces.
     * *   If you do not set StartTime or EndTime, data collected within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query data collected within the last 30 days.
     *
     * @param request - DescribeDomainPathDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainPathDataResponse
     *
     * @param DescribeDomainPathDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDomainPathDataResponse
     */
    public function describeDomainPathDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainPathData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainPathDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries monitoring data including the amount of network traffic and the number of visits by directory.
     *
     * @remarks
     *   This operation is available only to users that are on the whitelist. If the daily peak bandwidth value of your workloads reaches 10 Gbit/s, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply to be included in the whitelist.
     * *   You can call this API operation up to 6,000 times per second per account.
     * *   Data collection by directory is available only to specified domain names within your Alibaba Cloud account. It cannot be enabled for all domain names within your Alibaba Cloud account.
     * *   The average size of the files that belong to the domain name must be larger than 1 MB.
     * *   The number of directories specified for a single domain name cannot exceed 100. If the number of directories exceeds 100, the data accuracy reduces.
     * *   If you do not set StartTime or EndTime, data collected within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query data collected within the last 30 days.
     *
     * @param request - DescribeDomainPathDataRequest
     *
     * @returns DescribeDomainPathDataResponse
     *
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
     * Queries the page view (PV) data of an accelerated domain name. The data is collected at an interval of 1 hour. You can query data in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeDomainPvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainPvDataResponse
     *
     * @param DescribeDomainPvDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainPvDataResponse
     */
    public function describeDomainPvDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainPvData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the page view (PV) data of an accelerated domain name. The data is collected at an interval of 1 hour. You can query data in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeDomainPvDataRequest
     *
     * @returns DescribeDomainPvDataResponse
     *
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
     * Queries the number of queries per second (QPS) for an accelerated domain name. The data is collected every 5 minutes. You can query data collected within the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainQpsDataResponse
     *
     * @param DescribeDomainQpsDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainQpsDataResponse
     */
    public function describeDomainQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainQpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of queries per second (QPS) for an accelerated domain name. The data is collected every 5 minutes. You can query data collected within the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainQpsDataRequest
     *
     * @returns DescribeDomainQpsDataResponse
     *
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
     * Queries the number of queries per second (QPS) at a specific layer for one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * You can call this operation up to 20 times per second per user.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainQpsDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainQpsDataByLayerResponse
     *
     * @param DescribeDomainQpsDataByLayerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainQpsDataByLayerResponse
     */
    public function describeDomainQpsDataByLayerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->layer) {
            @$query['Layer'] = $request->layer;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainQpsDataByLayer',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainQpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of queries per second (QPS) at a specific layer for one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * You can call this operation up to 20 times per second per user.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainQpsDataByLayerRequest
     *
     * @returns DescribeDomainQpsDataByLayerResponse
     *
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
     * Queries the bandwidth data about one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeBpsDataResponse
     *
     * @param DescribeDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainRealTimeBpsDataResponse
     */
    public function describeDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeBpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data about one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeBpsDataRequest
     *
     * @returns DescribeDomainRealTimeBpsDataResponse
     *
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
     * Queries the byte hit ratios of accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeByteHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeByteHitRateDataResponse
     *
     * @param DescribeDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDomainRealTimeByteHitRateDataResponse
     */
    public function describeDomainRealTimeByteHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeByteHitRateData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeByteHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the byte hit ratios of accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeByteHitRateDataRequest
     *
     * @returns DescribeDomainRealTimeByteHitRateDataResponse
     *
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
     * Queries the real-time monitoring data for a domain name.
     *
     * @remarks
     *   You can query data in the last seven days. Data is collected every minute.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainRealTimeDetailDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeDetailDataResponse
     *
     * @param DescribeDomainRealTimeDetailDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainRealTimeDetailDataResponse
     */
    public function describeDomainRealTimeDetailDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeDetailData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time monitoring data for a domain name.
     *
     * @remarks
     *   You can query data in the last seven days. Data is collected every minute.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainRealTimeDetailDataRequest
     *
     * @returns DescribeDomainRealTimeDetailDataResponse
     *
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
     * Queries the total number and proportions of HTTP status codes returned from an accelerated domain name.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeHttpCodeDataResponse
     *
     * @param DescribeDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDomainRealTimeHttpCodeDataResponse
     */
    public function describeDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeHttpCodeData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number and proportions of HTTP status codes returned from an accelerated domain name.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeHttpCodeDataRequest
     *
     * @returns DescribeDomainRealTimeHttpCodeDataResponse
     *
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
     * Queries the number of queries per second for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeQpsDataResponse
     *
     * @param DescribeDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainRealTimeQpsDataResponse
     */
    public function describeDomainRealTimeQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeQpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of queries per second for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeQpsDataRequest
     *
     * @returns DescribeDomainRealTimeQpsDataResponse
     *
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
     * Queries the request hit ratios for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
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
     *
     * @param request - DescribeDomainRealTimeReqHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeReqHitRateDataResponse
     *
     * @param DescribeDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDomainRealTimeReqHitRateDataResponse
     */
    public function describeDomainRealTimeReqHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeReqHitRateData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request hit ratios for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
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
     *
     * @param request - DescribeDomainRealTimeReqHitRateDataRequest
     *
     * @returns DescribeDomainRealTimeReqHitRateDataResponse
     *
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
     * Queries origin bandwidth data for accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeSrcBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeSrcBpsDataResponse
     *
     * @param DescribeDomainRealTimeSrcBpsDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDomainRealTimeSrcBpsDataResponse
     */
    public function describeDomainRealTimeSrcBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeSrcBpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries origin bandwidth data for accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeSrcBpsDataRequest
     *
     * @returns DescribeDomainRealTimeSrcBpsDataResponse
     *
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
     * Queries the total number and proportions of HTTP status codes returned during back-to-origin routing.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeSrcHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeSrcHttpCodeDataResponse
     *
     * @param DescribeDomainRealTimeSrcHttpCodeDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeSrcHttpCodeData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeSrcHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number and proportions of HTTP status codes returned during back-to-origin routing.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeSrcHttpCodeDataRequest
     *
     * @returns DescribeDomainRealTimeSrcHttpCodeDataResponse
     *
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
     * Queries the monitoring data of back-to-origin traffic for one or more specified accelerated domains. The data is collected every minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour by default. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeSrcTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeSrcTrafficDataResponse
     *
     * @param DescribeDomainRealTimeSrcTrafficDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDomainRealTimeSrcTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeSrcTrafficData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of back-to-origin traffic for one or more specified accelerated domains. The data is collected every minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour by default. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeSrcTrafficDataRequest
     *
     * @returns DescribeDomainRealTimeSrcTrafficDataResponse
     *
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
     * Queries the monitoring data of network traffic for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 50 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealTimeTrafficDataResponse
     *
     * @param DescribeDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainRealTimeTrafficDataResponse
     */
    public function describeDomainRealTimeTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealTimeTrafficData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of network traffic for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 50 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param request - DescribeDomainRealTimeTrafficDataRequest
     *
     * @returns DescribeDomainRealTimeTrafficDataResponse
     *
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
     * Queries the real-time log delivery information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRealtimeLogDeliveryResponse
     *
     * @param DescribeDomainRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDomainRealtimeLogDeliveryResponse
     */
    public function describeDomainRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRealtimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time log delivery information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainRealtimeLogDeliveryRequest
     *
     * @returns DescribeDomainRealtimeLogDeliveryResponse
     *
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
     * Queries the geographic distribution of users for a domain name. The data is collected at an interval of one day. You can query the data in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you not use this operation because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not specify the **StartTime** or **EndTime** parameter, data collected within the last **24** hours is queried. If you specify both the **StartTime** and **EndTime** parameters, data collected within the specified time range is queried.
     * >*   There is delay in data collection. If you want to query data collected within the last day, we recommend that you query the data on the next day.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainRegionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRegionDataResponse
     *
     * @param DescribeDomainRegionDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainRegionDataResponse
     */
    public function describeDomainRegionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRegionData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the geographic distribution of users for a domain name. The data is collected at an interval of one day. You can query the data in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you not use this operation because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not specify the **StartTime** or **EndTime** parameter, data collected within the last **24** hours is queried. If you specify both the **StartTime** and **EndTime** parameters, data collected within the specified time range is queried.
     * >*   There is delay in data collection. If you want to query data collected within the last day, we recommend that you query the data on the next day.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainRegionDataRequest
     *
     * @returns DescribeDomainRegionDataResponse
     *
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
     * Queries the request hit ratio in percentage.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainReqHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainReqHitRateDataResponse
     *
     * @param DescribeDomainReqHitRateDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainReqHitRateDataResponse
     */
    public function describeDomainReqHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainReqHitRateData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request hit ratio in percentage.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainReqHitRateDataRequest
     *
     * @returns DescribeDomainReqHitRateDataResponse
     *
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
     * Queries bandwidth monitoring data of requests that are redirected to origin servers for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSrcBpsDataResponse
     *
     * @param DescribeDomainSrcBpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainSrcBpsDataResponse
     */
    public function describeDomainSrcBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSrcBpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth monitoring data of requests that are redirected to origin servers for one or more accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcBpsDataRequest
     *
     * @returns DescribeDomainSrcBpsDataResponse
     *
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
     * Queries the proportions of HTTP status codes that are returned during back-to-origin routing.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSrcHttpCodeDataResponse
     *
     * @param DescribeDomainSrcHttpCodeDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDomainSrcHttpCodeDataResponse
     */
    public function describeDomainSrcHttpCodeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSrcHttpCodeData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainSrcHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the proportions of HTTP status codes that are returned during back-to-origin routing.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcHttpCodeDataRequest
     *
     * @returns DescribeDomainSrcHttpCodeDataResponse
     *
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
     * Queries the number of queries per second (QPS) that are sent to the origin server. You can query data collected in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSrcQpsDataResponse
     *
     * @param DescribeDomainSrcQpsDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainSrcQpsDataResponse
     */
    public function describeDomainSrcQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSrcQpsData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainSrcQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of queries per second (QPS) that are sent to the origin server. You can query data collected in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * ### Time granularity
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcQpsDataRequest
     *
     * @returns DescribeDomainSrcQpsDataResponse
     *
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
     * Queries frequently requested origin URLs of one or more accelerated domain names.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   The data is collected at an interval of 5 minutes.
     * >*   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainSrcTopUrlVisitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSrcTopUrlVisitResponse
     *
     * @param DescribeDomainSrcTopUrlVisitRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainSrcTopUrlVisitResponse
     */
    public function describeDomainSrcTopUrlVisitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSrcTopUrlVisit',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainSrcTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries frequently requested origin URLs of one or more accelerated domain names.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   The data is collected at an interval of 5 minutes.
     * >*   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainSrcTopUrlVisitRequest
     *
     * @returns DescribeDomainSrcTopUrlVisitResponse
     *
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
     * Queries origin traffic for one or more specified accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainSrcTrafficDataResponse
     *
     * @param DescribeDomainSrcTrafficDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainSrcTrafficDataResponse
     */
    public function describeDomainSrcTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainSrcTrafficData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries origin traffic for one or more specified accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainSrcTrafficDataRequest
     *
     * @returns DescribeDomainSrcTrafficDataResponse
     *
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
     * Queries client IP addresses that are ranked by the number of requests or the amount of network traffic within a specific time range for one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   Data is collected every hour.
     * >*   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainTopClientIpVisitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopClientIpVisitResponse
     *
     * @param DescribeDomainTopClientIpVisitRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDomainTopClientIpVisitResponse
     */
    public function describeDomainTopClientIpVisitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopClientIpVisit',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopClientIpVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries client IP addresses that are ranked by the number of requests or the amount of network traffic within a specific time range for one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature to for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   Data is collected every hour.
     * >*   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainTopClientIpVisitRequest
     *
     * @returns DescribeDomainTopClientIpVisitResponse
     *
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
     * Queries frequently requested web pages of one or more accelerated domain names on a specified day and sorts the web pages. You can query data collected within the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature or [ship real-time logs in Log Service](https://help.aliyun.com/document_detail/440145.html) to analyze data.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   Data is collected at an interval of five minutes.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainTopReferVisitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopReferVisitResponse
     *
     * @param DescribeDomainTopReferVisitRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDomainTopReferVisitResponse
     */
    public function describeDomainTopReferVisitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopReferVisit',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopReferVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries frequently requested web pages of one or more accelerated domain names on a specified day and sorts the web pages. You can query data collected within the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature or [ship real-time logs in Log Service](https://help.aliyun.com/document_detail/440145.html) to analyze data.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   Data is collected at an interval of five minutes.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainTopReferVisitRequest
     *
     * @returns DescribeDomainTopReferVisitResponse
     *
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
     * Queries top 100 frequently requested URLs of an accelerated domain name within a specified time range.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can query data collected in the last 90 days.
     * >*   You can specify only one domain name in each call.
     * >*   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainTopUrlVisitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTopUrlVisitResponse
     *
     * @param DescribeDomainTopUrlVisitRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainTopUrlVisitResponse
     */
    public function describeDomainTopUrlVisitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTopUrlVisit',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries top 100 frequently requested URLs of an accelerated domain name within a specified time range.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can query data collected in the last 90 days.
     * >*   You can specify only one domain name in each call.
     * >*   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeDomainTopUrlVisitRequest
     *
     * @returns DescribeDomainTopUrlVisitResponse
     *
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
     * Queries network traffic for one or more accelerated domain names. You can query data that is collected in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366|04:00 on the next day|
     *
     * @param request - DescribeDomainTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainTrafficDataResponse
     *
     * @param DescribeDomainTrafficDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainTrafficDataResponse
     */
    public function describeDomainTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainTrafficData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries network traffic for one or more accelerated domain names. You can query data that is collected in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366|04:00 on the next day|
     *
     * @param request - DescribeDomainTrafficDataRequest
     *
     * @returns DescribeDomainTrafficDataResponse
     *
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
     * Queries the resource usage data of specific domain names in a specified billable region.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|90 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainUsageDataResponse
     *
     * @param DescribeDomainUsageDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainUsageDataResponse
     */
    public function describeDomainUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->dataProtocol) {
            @$query['DataProtocol'] = $request->dataProtocol;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->field) {
            @$query['Field'] = $request->field;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainUsageData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource usage data of specific domain names in a specified billable region.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|90 days|366 days|04:00 on the next day|
     *
     * @param request - DescribeDomainUsageDataRequest
     *
     * @returns DescribeDomainUsageDataResponse
     *
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
     * Queries the unique visitor (UV) data of an accelerated domain name. Data is collected every hour. You can query data collected in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   You can specify only one accelerated domain name or all accelerated domain names in your Alibaba Cloud account.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainUvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainUvDataResponse
     *
     * @param DescribeDomainUvDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainUvDataResponse
     */
    public function describeDomainUvDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainUvData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the unique visitor (UV) data of an accelerated domain name. Data is collected every hour. You can query data collected in the last 90 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   You can specify only one accelerated domain name or all accelerated domain names in your Alibaba Cloud account.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeDomainUvDataRequest
     *
     * @returns DescribeDomainUvDataResponse
     *
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
     * Queries the verification content of a domain name, including the host record and record value.
     *
     * @remarks
     * You can call this operation to query the verification content of an accelerated domain name based on whether the global resource plan is enabled.
     *
     * @param request - DescribeDomainVerifyDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainVerifyDataResponse
     *
     * @param DescribeDomainVerifyDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainVerifyDataResponse
     */
    public function describeDomainVerifyDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->globalResourcePlan) {
            @$query['GlobalResourcePlan'] = $request->globalResourcePlan;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainVerifyData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainVerifyDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the verification content of a domain name, including the host record and record value.
     *
     * @remarks
     * You can call this operation to query the verification content of an accelerated domain name based on whether the global resource plan is enabled.
     *
     * @param request - DescribeDomainVerifyDataRequest
     *
     * @returns DescribeDomainVerifyDataResponse
     *
     * @param DescribeDomainVerifyDataRequest $request
     *
     * @return DescribeDomainVerifyDataResponse
     */
    public function describeDomainVerifyData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainVerifyDataWithOptions($request, $runtime);
    }

    /**
     * Queries accelerated domain names by origin server.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeDomainsBySourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainsBySourceResponse
     *
     * @param DescribeDomainsBySourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainsBySourceResponse
     */
    public function describeDomainsBySourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainsBySource',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainsBySourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries accelerated domain names by origin server.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeDomainsBySourceRequest
     *
     * @returns DescribeDomainsBySourceResponse
     *
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
     * Queries the monitoring data of an accelerated domain name. Data is collected every day. You can query data collected within the last 90 days.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   If you do not set StartTime or EndTime, data within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query the monitoring data of a specific accelerated domain name or all accelerated domain names that belong to your Alibaba Cloud account.
     *
     * @param request - DescribeDomainsUsageByDayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainsUsageByDayResponse
     *
     * @param DescribeDomainsUsageByDayRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDomainsUsageByDayResponse
     */
    public function describeDomainsUsageByDayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainsUsageByDay',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainsUsageByDayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of an accelerated domain name. Data is collected every day. You can query data collected within the last 90 days.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   If you do not set StartTime or EndTime, data within the last 24 hours is queried. If you set both StartTime and EndTime, data within the specified time range is queried.
     * *   You can query the monitoring data of a specific accelerated domain name or all accelerated domain names that belong to your Alibaba Cloud account.
     *
     * @param request - DescribeDomainsUsageByDayRequest
     *
     * @returns DescribeDomainsUsageByDayResponse
     *
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
     * Queries the execution errors of a script in EdgeScript (ES).
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeEsExceptionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEsExceptionDataResponse
     *
     * @param DescribeEsExceptionDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEsExceptionDataResponse
     */
    public function describeEsExceptionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEsExceptionData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEsExceptionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution errors of a script in EdgeScript (ES).
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeEsExceptionDataRequest
     *
     * @returns DescribeEsExceptionDataResponse
     *
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
     * Queries the execution status of scripts in EdgeScript (ES).
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeEsExecuteDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEsExecuteDataResponse
     *
     * @param DescribeEsExecuteDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeEsExecuteDataResponse
     */
    public function describeEsExecuteDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEsExecuteData',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEsExecuteDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution status of scripts in EdgeScript (ES).
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeEsExecuteDataRequest
     *
     * @returns DescribeEsExecuteDataResponse
     *
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
     * Queries a specified Function Compute trigger.
     *
     * @param request - DescribeFCTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFCTriggerResponse
     *
     * @param DescribeFCTriggerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFCTriggerResponse
     */
    public function describeFCTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFCTrigger',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a specified Function Compute trigger.
     *
     * @param request - DescribeFCTriggerRequest
     *
     * @returns DescribeFCTriggerResponse
     *
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
     * Checks whether a specified IP address is the IP address of a CDN point of presence (POP).
     *
     * @param request - DescribeIpInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpInfoResponse
     *
     * @param DescribeIpInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeIpInfoResponse
     */
    public function describeIpInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->IP) {
            @$query['IP'] = $request->IP;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpInfo',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a specified IP address is the IP address of a CDN point of presence (POP).
     *
     * @param request - DescribeIpInfoRequest
     *
     * @returns DescribeIpInfoResponse
     *
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
     * Queries the status of IP addresses of points of presence (POPs). The status of an IP address of a POP indicates whether content delivery acceleration is supported by the POP.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeIpStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIpStatusResponse
     *
     * @param DescribeIpStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIpStatusResponse
     */
    public function describeIpStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIpStatus',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIpStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of IP addresses of points of presence (POPs). The status of an IP address of a POP indicates whether content delivery acceleration is supported by the POP.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param request - DescribeIpStatusRequest
     *
     * @returns DescribeIpStatusResponse
     *
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
     * Queries the virtual IP addresses (VIPs) of L2 CDN points of presence (POPs) for a specific domain name.
     *
     * @remarks
     *   This operation is available only to users whose daily peak bandwidth value is higher than 1 Gbit/s. If you meet this requirement, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply for permissions to use this operation.
     * *   You can call this operation up to 40 times per second per account.
     *
     * @param request - DescribeL2VipsByDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeL2VipsByDomainResponse
     *
     * @param DescribeL2VipsByDomainRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeL2VipsByDomainResponse
     */
    public function describeL2VipsByDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeL2VipsByDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeL2VipsByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the virtual IP addresses (VIPs) of L2 CDN points of presence (POPs) for a specific domain name.
     *
     * @remarks
     *   This operation is available only to users whose daily peak bandwidth value is higher than 1 Gbit/s. If you meet this requirement, you can [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex) to apply for permissions to use this operation.
     * *   You can call this operation up to 40 times per second per account.
     *
     * @param request - DescribeL2VipsByDomainRequest
     *
     * @returns DescribeL2VipsByDomainResponse
     *
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
     * Queries the prefetch details of a task, including the prefetch progress of all resources in the task. Only users who are included in the whitelist can use this operation. You can contact your business manager to apply for the whitelist.
     *
     * @remarks
     *   You can query data within the last 3 days.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribePreloadDetailByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePreloadDetailByIdResponse
     *
     * @param DescribePreloadDetailByIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePreloadDetailByIdResponse
     */
    public function describePreloadDetailByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePreloadDetailById',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePreloadDetailByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the prefetch details of a task, including the prefetch progress of all resources in the task. Only users who are included in the whitelist can use this operation. You can contact your business manager to apply for the whitelist.
     *
     * @remarks
     *   You can query data within the last 3 days.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribePreloadDetailByIdRequest
     *
     * @returns DescribePreloadDetailByIdResponse
     *
     * @param DescribePreloadDetailByIdRequest $request
     *
     * @return DescribePreloadDetailByIdResponse
     */
    public function describePreloadDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreloadDetailByIdWithOptions($request, $runtime);
    }

    /**
     * Queries the bandwidth values by Internet service provider (ISP) and region.
     *
     * @remarks
     *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeRangeDataByLocateAndIspServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRangeDataByLocateAndIspServiceResponse
     *
     * @param DescribeRangeDataByLocateAndIspServiceRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeRangeDataByLocateAndIspServiceResponse
     */
    public function describeRangeDataByLocateAndIspServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ispNames) {
            @$query['IspNames'] = $request->ispNames;
        }

        if (null !== $request->locationNames) {
            @$query['LocationNames'] = $request->locationNames;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRangeDataByLocateAndIspService',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRangeDataByLocateAndIspServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth values by Internet service provider (ISP) and region.
     *
     * @remarks
     *   The data is collected every 5 minutes.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param request - DescribeRangeDataByLocateAndIspServiceRequest
     *
     * @returns DescribeRangeDataByLocateAndIspServiceResponse
     *
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
     * Queries the number of real-time log deliveries.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeRealtimeDeliveryAccRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRealtimeDeliveryAccResponse
     *
     * @param DescribeRealtimeDeliveryAccRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRealtimeDeliveryAccResponse
     */
    public function describeRealtimeDeliveryAccWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->logStore) {
            @$query['LogStore'] = $request->logStore;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRealtimeDeliveryAcc',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRealtimeDeliveryAccResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of real-time log deliveries.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeRealtimeDeliveryAccRequest
     *
     * @returns DescribeRealtimeDeliveryAccResponse
     *
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
     * DescribeRefreshQuota.
     *
     * @remarks
     * Queries the maximum and remaining numbers of URLs and directories that can be refreshed, the maximum and remaining numbers of times that you can prefetch content, and the maximum and remaining numbers of URLs and directories that can be blocked on the current day.
     *
     * @param request - DescribeRefreshQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRefreshQuotaResponse
     *
     * @param DescribeRefreshQuotaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRefreshQuotaResponse
     */
    public function describeRefreshQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRefreshQuota',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeRefreshQuota.
     *
     * @remarks
     * Queries the maximum and remaining numbers of URLs and directories that can be refreshed, the maximum and remaining numbers of times that you can prefetch content, and the maximum and remaining numbers of URLs and directories that can be blocked on the current day.
     *
     * @param request - DescribeRefreshQuotaRequest
     *
     * @returns DescribeRefreshQuotaResponse
     *
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
     * Queries the statuses of refresh or prefetch tasks by task ID.
     *
     * @remarks
     *   You can query data in the last three days.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeRefreshTaskByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRefreshTaskByIdResponse
     *
     * @param DescribeRefreshTaskByIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRefreshTaskByIdResponse
     */
    public function describeRefreshTaskByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRefreshTaskById',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRefreshTaskByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statuses of refresh or prefetch tasks by task ID.
     *
     * @remarks
     *   You can query data in the last three days.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeRefreshTaskByIdRequest
     *
     * @returns DescribeRefreshTaskByIdResponse
     *
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
     * Queries the status of refresh or prefetch tasks that belong to an accelerated domain name.
     *
     * @remarks
     *   You can query the status of tasks by task ID or URL.
     * *   You can set both the **TaskId** and **ObjectPath** parameters. If you do not set the **TaskId** or **ObjectPath** parameter, data entries on the first page (20 entries) collected in the last 3 days are returned.
     * *   You can query data collected in the last 3 days.
     * *   If auto CDN cache update is enabled in the Object Storage Service (OSS) console, you cannot call the DescribeRefreshTasks operation to query automatic refresh tasks in OSS.
     * *   You can call this operation up to 10 times per second per account. If you want to query tasks at a higher frequency, call the [DescribeRefreshTaskById](https://help.aliyun.com/document_detail/187709.html) operation. This operation allows you to query tasks by task ID.
     *
     * @param request - DescribeRefreshTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRefreshTasksResponse
     *
     * @param DescribeRefreshTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRefreshTasksResponse
     */
    public function describeRefreshTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->objectPath) {
            @$query['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRefreshTasks',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of refresh or prefetch tasks that belong to an accelerated domain name.
     *
     * @remarks
     *   You can query the status of tasks by task ID or URL.
     * *   You can set both the **TaskId** and **ObjectPath** parameters. If you do not set the **TaskId** or **ObjectPath** parameter, data entries on the first page (20 entries) collected in the last 3 days are returned.
     * *   You can query data collected in the last 3 days.
     * *   If auto CDN cache update is enabled in the Object Storage Service (OSS) console, you cannot call the DescribeRefreshTasks operation to query automatic refresh tasks in OSS.
     * *   You can call this operation up to 10 times per second per account. If you want to query tasks at a higher frequency, call the [DescribeRefreshTaskById](https://help.aliyun.com/document_detail/187709.html) operation. This operation allows you to query tasks by task ID.
     *
     * @param request - DescribeRefreshTasksRequest
     *
     * @returns DescribeRefreshTasksResponse
     *
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
     * Queries node IP addresses in the staging environment.
     *
     * @remarks
     * >The maximum number of times that each user can call this operation per second is 30.
     *
     * @param request - DescribeStagingIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStagingIpResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeStagingIpResponse
     */
    public function describeStagingIpWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeStagingIp',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStagingIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries node IP addresses in the staging environment.
     *
     * @remarks
     * >The maximum number of times that each user can call this operation per second is 30.
     *
     * @returns DescribeStagingIpResponse
     *
     * @return DescribeStagingIpResponse
     */
    public function describeStagingIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStagingIpWithOptions($runtime);
    }

    /**
     * Queries tags that are added to specified resources.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 10.
     *
     * @param request - DescribeTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagResourcesResponse
     *
     * @param DescribeTagResourcesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTagResourcesResponse
     */
    public function describeTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagResources',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tags that are added to specified resources.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 10.
     *
     * @param request - DescribeTagResourcesRequest
     *
     * @returns DescribeTagResourcesResponse
     *
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
     * Queries the top N domain names ranked by network traffic. You can query data collected in the last 30 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the current month. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeTopDomainsByFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTopDomainsByFlowResponse
     *
     * @param DescribeTopDomainsByFlowRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTopDomainsByFlowResponse
     */
    public function describeTopDomainsByFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTopDomainsByFlow',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the top N domain names ranked by network traffic. You can query data collected in the last 30 days.
     *
     * @remarks
     * The statistical analysis feature of Alibaba Cloud CDN is no longer available. The API operations related to the statistical analysis feature are no longer maintained. We recommend that you do not use the API operations because data may be missing or inaccurate. You can use the [operations report](https://help.aliyun.com/document_detail/279577.html) feature for data analysis.
     * > *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the current month. If you set both these parameters, the request returns the data collected within the specified time range.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeTopDomainsByFlowRequest
     *
     * @returns DescribeTopDomainsByFlowResponse
     *
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
     * Queries the status of a user.
     *
     * @param request - DescribeUserCdnStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserCdnStatusResponse
     *
     * @param DescribeUserCdnStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserCdnStatusResponse
     */
    public function describeUserCdnStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserCdnStatus',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserCdnStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a user.
     *
     * @param request - DescribeUserCdnStatusRequest
     *
     * @returns DescribeUserCdnStatusResponse
     *
     * @param DescribeUserCdnStatusRequest $request
     *
     * @return DescribeUserCdnStatusResponse
     */
    public function describeUserCdnStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCdnStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the number of domain names whose SSL certificates are about to expire or have already expired.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeUserCertificateExpireCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserCertificateExpireCountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserCertificateExpireCountResponse
     */
    public function describeUserCertificateExpireCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeUserCertificateExpireCount',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserCertificateExpireCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of domain names whose SSL certificates are about to expire or have already expired.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeUserCertificateExpireCountResponse
     *
     * @return DescribeUserCertificateExpireCountResponse
     */
    public function describeUserCertificateExpireCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCertificateExpireCountWithOptions($runtime);
    }

    /**
     * Queries configurations of security features.
     *
     * @param request - DescribeUserConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserConfigsResponse
     *
     * @param DescribeUserConfigsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserConfigsResponse
     */
    public function describeUserConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserConfigs',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries configurations of security features.
     *
     * @param request - DescribeUserConfigsRequest
     *
     * @returns DescribeUserConfigsResponse
     *
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
     * Queries all accelerated domain names in your Alibaba Cloud account and the status of the accelerated domain names. You can filter domain names by name or status. Fuzzy match is supported.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *
     * @param request - DescribeUserDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserDomainsResponse
     *
     * @param DescribeUserDomainsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserDomainsResponse
     */
    public function describeUserDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdnType) {
            @$query['CdnType'] = $request->cdnType;
        }

        if (null !== $request->changeEndTime) {
            @$query['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeStartTime) {
            @$query['ChangeStartTime'] = $request->changeStartTime;
        }

        if (null !== $request->checkDomainShow) {
            @$query['CheckDomainShow'] = $request->checkDomainShow;
        }

        if (null !== $request->coverage) {
            @$query['Coverage'] = $request->coverage;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainSearchType) {
            @$query['DomainSearchType'] = $request->domainSearchType;
        }

        if (null !== $request->domainStatus) {
            @$query['DomainStatus'] = $request->domainStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserDomains',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all accelerated domain names in your Alibaba Cloud account and the status of the accelerated domain names. You can filter domain names by name or status. Fuzzy match is supported.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can specify up to 50 domain names in each request. Separate multiple domain names with commas (,).
     *
     * @param request - DescribeUserDomainsRequest
     *
     * @returns DescribeUserDomainsResponse
     *
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
     * Queries user tags.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeUserTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserTagsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUserTagsResponse
     */
    public function describeUserTagsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeUserTags',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user tags.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeUserTagsResponse
     *
     * @return DescribeUserTagsResponse
     */
    public function describeUserTags()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTagsWithOptions($runtime);
    }

    /**
     * Queries usage export tasks that were created in the last three months.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeUserUsageDataExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserUsageDataExportTaskResponse
     *
     * @param DescribeUserUsageDataExportTaskRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeUserUsageDataExportTaskResponse
     */
    public function describeUserUsageDataExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserUsageDataExportTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserUsageDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries usage export tasks that were created in the last three months.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeUserUsageDataExportTaskRequest
     *
     * @returns DescribeUserUsageDataExportTaskResponse
     *
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
     * Queries tasks that were used to export resource usage details of one or more accelerated domain names that belong to your Alibaba Cloud account. Resource usage information is collected every five minutes.
     *
     * @remarks
     *   This operation has been available since July 20, 2018. You can query information about resource usage collected within the last three months.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeUserUsageDetailDataExportTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserUsageDetailDataExportTaskResponse
     *
     * @param DescribeUserUsageDetailDataExportTaskRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeUserUsageDetailDataExportTaskResponse
     */
    public function describeUserUsageDetailDataExportTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserUsageDetailDataExportTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserUsageDetailDataExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tasks that were used to export resource usage details of one or more accelerated domain names that belong to your Alibaba Cloud account. Resource usage information is collected every five minutes.
     *
     * @remarks
     *   This operation has been available since July 20, 2018. You can query information about resource usage collected within the last three months.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeUserUsageDetailDataExportTaskRequest
     *
     * @returns DescribeUserUsageDetailDataExportTaskResponse
     *
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
     * Queries virtual IP addresses (VIPs) of CDN points of presence (POPs) by domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeUserVipsByDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserVipsByDomainResponse
     *
     * @param DescribeUserVipsByDomainRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeUserVipsByDomainResponse
     */
    public function describeUserVipsByDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserVipsByDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserVipsByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virtual IP addresses (VIPs) of CDN points of presence (POPs) by domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - DescribeUserVipsByDomainRequest
     *
     * @returns DescribeUserVipsByDomainResponse
     *
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
     * Queries the ownership verification content of an accelerated domain name.
     *
     * @param request - DescribeVerifyContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVerifyContentResponse
     *
     * @param DescribeVerifyContentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVerifyContentResponse
     */
    public function describeVerifyContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVerifyContent',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ownership verification content of an accelerated domain name.
     *
     * @param request - DescribeVerifyContentRequest
     *
     * @returns DescribeVerifyContentResponse
     *
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
     * Disables real-time log delivery for specific accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DisableRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableRealtimeLogDeliveryResponse
     *
     * @param DisableRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableRealtimeLogDeliveryResponse
     */
    public function disableRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableRealtimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables real-time log delivery for specific accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - DisableRealtimeLogDeliveryRequest
     *
     * @returns DisableRealtimeLogDeliveryResponse
     *
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
     * Enables real-time log delivery for an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - EnableRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableRealtimeLogDeliveryResponse
     *
     * @param EnableRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableRealtimeLogDeliveryResponse
     */
    public function enableRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableRealtimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables real-time log delivery for an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - EnableRealtimeLogDeliveryRequest
     *
     * @returns EnableRealtimeLogDeliveryResponse
     *
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
     * 按域名、functionName查询灰度配置信息，返回的信息中包含当前的灰度状态、灰度进度.
     *
     * @param request - GetGrayDomainFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGrayDomainFunctionResponse
     *
     * @param GetGrayDomainFunctionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetGrayDomainFunctionResponse
     */
    public function getGrayDomainFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionNames) {
            @$body['FunctionNames'] = $request->functionNames;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGrayDomainFunction',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGrayDomainFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按域名、functionName查询灰度配置信息，返回的信息中包含当前的灰度状态、灰度进度.
     *
     * @param request - GetGrayDomainFunctionRequest
     *
     * @returns GetGrayDomainFunctionResponse
     *
     * @param GetGrayDomainFunctionRequest $request
     *
     * @return GetGrayDomainFunctionResponse
     */
    public function getGrayDomainFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGrayDomainFunctionWithOptions($request, $runtime);
    }

    /**
     * Queries domain names by log configuration ID.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListDomainsByLogConfigIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDomainsByLogConfigIdResponse
     *
     * @param ListDomainsByLogConfigIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDomainsByLogConfigIdResponse
     */
    public function listDomainsByLogConfigIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDomainsByLogConfigId',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDomainsByLogConfigIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries domain names by log configuration ID.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListDomainsByLogConfigIdRequest
     *
     * @returns ListDomainsByLogConfigIdResponse
     *
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
     * Queries the Function Compute trigger that is set for an Alibaba Cloud CDN event.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListFCTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFCTriggerResponse
     *
     * @param ListFCTriggerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListFCTriggerResponse
     */
    public function listFCTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFCTrigger',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Function Compute trigger that is set for an Alibaba Cloud CDN event.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListFCTriggerRequest
     *
     * @returns ListFCTriggerResponse
     *
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
     * Queries all real-time log delivery tasks within your Alibaba Cloud account.
     *
     * @param request - ListRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRealtimeLogDeliveryResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRealtimeLogDeliveryResponse
     */
    public function listRealtimeLogDeliveryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRealtimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all real-time log delivery tasks within your Alibaba Cloud account.
     *
     * @returns ListRealtimeLogDeliveryResponse
     *
     * @return ListRealtimeLogDeliveryResponse
     */
    public function listRealtimeLogDelivery()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeLogDeliveryWithOptions($runtime);
    }

    /**
     * Queries all domain names that are associated with a specific real-time log delivery configuration record.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListRealtimeLogDeliveryDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRealtimeLogDeliveryDomainsResponse
     *
     * @param ListRealtimeLogDeliveryDomainsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListRealtimeLogDeliveryDomainsResponse
     */
    public function listRealtimeLogDeliveryDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRealtimeLogDeliveryDomains',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRealtimeLogDeliveryDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all domain names that are associated with a specific real-time log delivery configuration record.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListRealtimeLogDeliveryDomainsRequest
     *
     * @returns ListRealtimeLogDeliveryDomainsResponse
     *
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
     * Queries the information about the real-time log delivery feature in a specified region.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListRealtimeLogDeliveryInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRealtimeLogDeliveryInfosResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRealtimeLogDeliveryInfosResponse
     */
    public function listRealtimeLogDeliveryInfosWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRealtimeLogDeliveryInfos',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRealtimeLogDeliveryInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the real-time log delivery feature in a specified region.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns ListRealtimeLogDeliveryInfosResponse
     *
     * @return ListRealtimeLogDeliveryInfosResponse
     */
    public function listRealtimeLogDeliveryInfos()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRealtimeLogDeliveryInfosWithOptions($runtime);
    }

    /**
     * Queries the tags that are attached to a resource.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tagOwnerBid) {
            @$query['TagOwnerBid'] = $request->tagOwnerBid;
        }

        if (null !== $request->tagOwnerUid) {
            @$query['TagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are attached to a resource.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries all custom log configurations in your account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ListUserCustomLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserCustomLogConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListUserCustomLogConfigResponse
     */
    public function listUserCustomLogConfigWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListUserCustomLogConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserCustomLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all custom log configurations in your account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns ListUserCustomLogConfigResponse
     *
     * @return ListUserCustomLogConfigResponse
     */
    public function listUserCustomLogConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserCustomLogConfigWithOptions($runtime);
    }

    /**
     * Modifies the configuration of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - ModifyCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCdnDomainResponse
     *
     * @param ModifyCdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyCdnDomainResponse
     */
    public function modifyCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        if (null !== $request->topLevelDomain) {
            @$query['TopLevelDomain'] = $request->topLevelDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - ModifyCdnDomainRequest
     *
     * @returns ModifyCdnDomainResponse
     *
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
     * Transfer domain names from an Alibaba Cloud account to the current account.
     *
     * @remarks
     * This operation is used in the following scenario:
     * *   You have multiple Alibaba Cloud accounts and want to transfer domain names from Account A to Account B.
     * *   You are prompted that a domain name has been added when you add the domain name to Alibaba Cloud CDN. You do not know which account does the domain name belong to, and you want to transfer the domain name to your current account.
     *
     * @param request - ModifyCdnDomainOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCdnDomainOwnerResponse
     *
     * @param ModifyCdnDomainOwnerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyCdnDomainOwnerResponse
     */
    public function modifyCdnDomainOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCdnDomainOwner',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCdnDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transfer domain names from an Alibaba Cloud account to the current account.
     *
     * @remarks
     * This operation is used in the following scenario:
     * *   You have multiple Alibaba Cloud accounts and want to transfer domain names from Account A to Account B.
     * *   You are prompted that a domain name has been added when you add the domain name to Alibaba Cloud CDN. You do not know which account does the domain name belong to, and you want to transfer the domain name to your current account.
     *
     * @param request - ModifyCdnDomainOwnerRequest
     *
     * @returns ModifyCdnDomainOwnerResponse
     *
     * @param ModifyCdnDomainOwnerRequest $request
     *
     * @return ModifyCdnDomainOwnerResponse
     */
    public function modifyCdnDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnDomainOwnerWithOptions($request, $runtime);
    }

    /**
     * Changes the acceleration region for an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ModifyCdnDomainSchdmByPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCdnDomainSchdmByPropertyResponse
     *
     * @param ModifyCdnDomainSchdmByPropertyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyCdnDomainSchdmByPropertyResponse
     */
    public function modifyCdnDomainSchdmByPropertyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->property) {
            @$query['Property'] = $request->property;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCdnDomainSchdmByProperty',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCdnDomainSchdmByPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the acceleration region for an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ModifyCdnDomainSchdmByPropertyRequest
     *
     * @returns ModifyCdnDomainSchdmByPropertyResponse
     *
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
     * Changes the metering method of Alibaba Cloud CDN.
     *
     * @param request - ModifyCdnServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCdnServiceResponse
     *
     * @param ModifyCdnServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCdnServiceResponse
     */
    public function modifyCdnServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCdnService',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the metering method of Alibaba Cloud CDN.
     *
     * @param request - ModifyCdnServiceRequest
     *
     * @returns ModifyCdnServiceResponse
     *
     * @param ModifyCdnServiceRequest $request
     *
     * @return ModifyCdnServiceResponse
     */
    public function modifyCdnService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdnServiceWithOptions($request, $runtime);
    }

    /**
     * A客户定制新增修改域名采样率接口.
     *
     * @param request - ModifyCustomDomainSampleRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCustomDomainSampleRateResponse
     *
     * @param ModifyCustomDomainSampleRateRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyCustomDomainSampleRateResponse
     */
    public function modifyCustomDomainSampleRateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->baseConfigID) {
            @$body['BaseConfigID'] = $request->baseConfigID;
        }

        if (null !== $request->domainNames) {
            @$body['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->sampleRate) {
            @$body['SampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sinkID) {
            @$body['SinkID'] = $request->sinkID;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyCustomDomainSampleRate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCustomDomainSampleRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A客户定制新增修改域名采样率接口.
     *
     * @param request - ModifyCustomDomainSampleRateRequest
     *
     * @returns ModifyCustomDomainSampleRateResponse
     *
     * @param ModifyCustomDomainSampleRateRequest $request
     *
     * @return ModifyCustomDomainSampleRateResponse
     */
    public function modifyCustomDomainSampleRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomDomainSampleRateWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of real-time log delivery for a specific domain name. Each domain name supports only one Logstore.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ModifyRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRealtimeLogDeliveryResponse
     *
     * @param ModifyRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRealtimeLogDeliveryResponse
     */
    public function modifyRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRealtimeLogDelivery',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of real-time log delivery for a specific domain name. Each domain name supports only one Logstore.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - ModifyRealtimeLogDeliveryRequest
     *
     * @returns ModifyRealtimeLogDeliveryResponse
     *
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
     * Activates Alibaba Cloud CDN. You must activate Alibaba Cloud CDN before you can manage domain names in Alibaba Cloud CDN.
     *
     * @remarks
     *   Alibaba Cloud CDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must complete real-name verification to activate Alibaba Cloud CDN.
     * *   You can call this operation up to five times per second per user.
     *
     * @param request - OpenCdnServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenCdnServiceResponse
     *
     * @param OpenCdnServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenCdnServiceResponse
     */
    public function openCdnServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenCdnService',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenCdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Alibaba Cloud CDN. You must activate Alibaba Cloud CDN before you can manage domain names in Alibaba Cloud CDN.
     *
     * @remarks
     *   Alibaba Cloud CDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must complete real-name verification to activate Alibaba Cloud CDN.
     * *   You can call this operation up to five times per second per user.
     *
     * @param request - OpenCdnServiceRequest
     *
     * @returns OpenCdnServiceResponse
     *
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
     * 发布灰度配置到线上，支持多种模式，如全网发布、指定方式(灰度发布)，回滚.
     *
     * @param request - PublishGrayDomainConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishGrayDomainConfigResponse
     *
     * @param PublishGrayDomainConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PublishGrayDomainConfigResponse
     */
    public function publishGrayDomainConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customCountryId) {
            @$body['CustomCountryId'] = $request->customCountryId;
        }

        if (null !== $request->customPercent) {
            @$body['CustomPercent'] = $request->customPercent;
        }

        if (null !== $request->customProvinceId) {
            @$body['CustomProvinceId'] = $request->customProvinceId;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishGrayDomainConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishGrayDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布灰度配置到线上，支持多种模式，如全网发布、指定方式(灰度发布)，回滚.
     *
     * @param request - PublishGrayDomainConfigRequest
     *
     * @returns PublishGrayDomainConfigResponse
     *
     * @param PublishGrayDomainConfigRequest $request
     *
     * @return PublishGrayDomainConfigResponse
     */
    public function publishGrayDomainConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishGrayDomainConfigWithOptions($request, $runtime);
    }

    /**
     * Publishes the configurations of the staging environment to the production environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - PublishStagingConfigToProductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishStagingConfigToProductionResponse
     *
     * @param PublishStagingConfigToProductionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PublishStagingConfigToProductionResponse
     */
    public function publishStagingConfigToProductionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishStagingConfigToProduction',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishStagingConfigToProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes the configurations of the staging environment to the production environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - PublishStagingConfigToProductionRequest
     *
     * @returns PublishStagingConfigToProductionResponse
     *
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
     * Prefetches content from origin servers to points of presence (POPs). This reduces loads on origin servers because users can directly hit cache upon their first visits.
     *
     * @remarks
     *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
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
     *
     * @param request - PushObjectCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushObjectCacheResponse
     *
     * @param PushObjectCacheRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PushObjectCacheResponse
     */
    public function pushObjectCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
        }

        if (null !== $request->consistencyHash) {
            @$query['ConsistencyHash'] = $request->consistencyHash;
        }

        if (null !== $request->l2Preload) {
            @$query['L2Preload'] = $request->l2Preload;
        }

        if (null !== $request->objectPath) {
            @$query['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryHashkey) {
            @$query['QueryHashkey'] = $request->queryHashkey;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->withHeader) {
            @$query['WithHeader'] = $request->withHeader;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushObjectCache',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushObjectCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prefetches content from origin servers to points of presence (POPs). This reduces loads on origin servers because users can directly hit cache upon their first visits.
     *
     * @remarks
     *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
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
     *
     * @param request - PushObjectCacheRequest
     *
     * @returns PushObjectCacheResponse
     *
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
     * Refreshes the cache based on cache tags that you configured.
     *
     * @param request - RefreshObjectCacheByCacheTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshObjectCacheByCacheTagResponse
     *
     * @param RefreshObjectCacheByCacheTagRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return RefreshObjectCacheByCacheTagResponse
     */
    public function refreshObjectCacheByCacheTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheTag) {
            @$query['CacheTag'] = $request->cacheTag;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshObjectCacheByCacheTag',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshObjectCacheByCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes the cache based on cache tags that you configured.
     *
     * @param request - RefreshObjectCacheByCacheTagRequest
     *
     * @returns RefreshObjectCacheByCacheTagResponse
     *
     * @param RefreshObjectCacheByCacheTagRequest $request
     *
     * @return RefreshObjectCacheByCacheTagResponse
     */
    public function refreshObjectCacheByCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshObjectCacheByCacheTagWithOptions($request, $runtime);
    }

    /**
     * Refreshes files on Alibaba Cloud CDN points of presence (POPs). After files are refreshed, the original file content immediately becomes invalid. If clients request the original file content, Alibaba Cloud CDN forwards the requests to the origin server. Then, Alibaba Cloud CDN caches the latest content to the POPs and returns the content to the clients. Alibaba Cloud CDN allows you to refresh content from multiple URLs at the same time.
     *
     * @remarks
     *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
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
     *
     * @param request - RefreshObjectCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshObjectCachesResponse
     *
     * @param RefreshObjectCachesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RefreshObjectCachesResponse
     */
    public function refreshObjectCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $body = [];
        if (null !== $request->force) {
            @$body['Force'] = $request->force;
        }

        if (null !== $request->objectPath) {
            @$body['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->objectType) {
            @$body['ObjectType'] = $request->objectType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RefreshObjectCaches',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes files on Alibaba Cloud CDN points of presence (POPs). After files are refreshed, the original file content immediately becomes invalid. If clients request the original file content, Alibaba Cloud CDN forwards the requests to the origin server. Then, Alibaba Cloud CDN caches the latest content to the POPs and returns the content to the clients. Alibaba Cloud CDN allows you to refresh content from multiple URLs at the same time.
     *
     * @remarks
     *   Alibaba Cloud CDN supports POST requests in which parameters are sent as a form.
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
     *
     * @param request - RefreshObjectCachesRequest
     *
     * @returns RefreshObjectCachesResponse
     *
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
     * Rolls back configurations in the staging environment. After you call this operation, all configurations in the staging environment are cleared.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - RollbackStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackStagingConfigResponse
     *
     * @param RollbackStagingConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RollbackStagingConfigResponse
     */
    public function rollbackStagingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackStagingConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back configurations in the staging environment. After you call this operation, all configurations in the staging environment are cleared.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - RollbackStagingConfigRequest
     *
     * @returns RollbackStagingConfigResponse
     *
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
     * You can call this operation to configure an SSL certificate for a specific domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - SetCdnDomainCSRCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCdnDomainCSRCertificateResponse
     *
     * @param SetCdnDomainCSRCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetCdnDomainCSRCertificateResponse
     */
    public function setCdnDomainCSRCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->serverCertificate) {
            @$query['ServerCertificate'] = $request->serverCertificate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCdnDomainCSRCertificate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCdnDomainCSRCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to configure an SSL certificate for a specific domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - SetCdnDomainCSRCertificateRequest
     *
     * @returns SetCdnDomainCSRCertificateResponse
     *
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
     * Enables or disables a ShangMi (SM) certificate for a domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - SetCdnDomainSMCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCdnDomainSMCertificateResponse
     *
     * @param SetCdnDomainSMCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetCdnDomainSMCertificateResponse
     */
    public function setCdnDomainSMCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certIdentifier) {
            @$query['CertIdentifier'] = $request->certIdentifier;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->SSLProtocol) {
            @$query['SSLProtocol'] = $request->SSLProtocol;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCdnDomainSMCertificate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCdnDomainSMCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a ShangMi (SM) certificate for a domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - SetCdnDomainSMCertificateRequest
     *
     * @returns SetCdnDomainSMCertificateResponse
     *
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
     * Enables or disables the certificate for a domain name and updates the certificate information.
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     * *   Method: POST.
     *
     * @param request - SetCdnDomainSSLCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCdnDomainSSLCertificateResponse
     *
     * @param SetCdnDomainSSLCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetCdnDomainSSLCertificateResponse
     */
    public function setCdnDomainSSLCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certId) {
            @$query['CertId'] = $request->certId;
        }

        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certRegion) {
            @$query['CertRegion'] = $request->certRegion;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->SSLPri) {
            @$query['SSLPri'] = $request->SSLPri;
        }

        if (null !== $request->SSLProtocol) {
            @$query['SSLProtocol'] = $request->SSLProtocol;
        }

        if (null !== $request->SSLPub) {
            @$query['SSLPub'] = $request->SSLPub;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCdnDomainSSLCertificate',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCdnDomainSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the certificate for a domain name and updates the certificate information.
     *
     * @remarks
     *   You can call this operation up to 30 times per second per account.
     * *   Method: POST.
     *
     * @param request - SetCdnDomainSSLCertificateRequest
     *
     * @returns SetCdnDomainSSLCertificateResponse
     *
     * @param SetCdnDomainSSLCertificateRequest $request
     *
     * @return SetCdnDomainSSLCertificateResponse
     */
    public function setCdnDomainSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnDomainSSLCertificateWithOptions($request, $runtime);
    }

    /**
     * Configures a domain name to be accelerated in the staging environment.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param request - SetCdnDomainStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCdnDomainStagingConfigResponse
     *
     * @param SetCdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetCdnDomainStagingConfigResponse
     */
    public function setCdnDomainStagingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functions) {
            @$query['Functions'] = $request->functions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetCdnDomainStagingConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a domain name to be accelerated in the staging environment.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param request - SetCdnDomainStagingConfigRequest
     *
     * @returns SetCdnDomainStagingConfigResponse
     *
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
     * Blocks or unblocks IP addresses from accessing domain names.
     *
     * @remarks
     * >
     * *   To use this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * *   This operation is suitable for blocking or unblocking a maximum of 1,000 IP addresses or CIDR blocks at a time.
     *
     * @param request - SetCdnFullDomainsBlockIPRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCdnFullDomainsBlockIPResponse
     *
     * @param SetCdnFullDomainsBlockIPRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetCdnFullDomainsBlockIPResponse
     */
    public function setCdnFullDomainsBlockIPWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->blockInterval) {
            @$body['BlockInterval'] = $request->blockInterval;
        }

        if (null !== $request->IPList) {
            @$body['IPList'] = $request->IPList;
        }

        if (null !== $request->operationType) {
            @$body['OperationType'] = $request->operationType;
        }

        if (null !== $request->updateType) {
            @$body['UpdateType'] = $request->updateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetCdnFullDomainsBlockIP',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetCdnFullDomainsBlockIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Blocks or unblocks IP addresses from accessing domain names.
     *
     * @remarks
     * >
     * *   To use this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * *   This operation is suitable for blocking or unblocking a maximum of 1,000 IP addresses or CIDR blocks at a time.
     *
     * @param request - SetCdnFullDomainsBlockIPRequest
     *
     * @returns SetCdnFullDomainsBlockIPResponse
     *
     * @param SetCdnFullDomainsBlockIPRequest $request
     *
     * @return SetCdnFullDomainsBlockIPResponse
     */
    public function setCdnFullDomainsBlockIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCdnFullDomainsBlockIPWithOptions($request, $runtime);
    }

    /**
     * Sets a custom origin header.
     *
     * @param request - SetReqHeaderConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetReqHeaderConfigResponse
     *
     * @param SetReqHeaderConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetReqHeaderConfigResponse
     */
    public function setReqHeaderConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetReqHeaderConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetReqHeaderConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a custom origin header.
     *
     * @param request - SetReqHeaderConfigRequest
     *
     * @returns SetReqHeaderConfigResponse
     *
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
     * Configures the virtual waiting room feature for an accelerated domain name. This operation is available only for accelerated domain names of the Dynamic CDN workload type.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - SetWaitingRoomConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetWaitingRoomConfigResponse
     *
     * @param SetWaitingRoomConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetWaitingRoomConfigResponse
     */
    public function setWaitingRoomConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowPct) {
            @$query['AllowPct'] = $request->allowPct;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->gapTime) {
            @$query['GapTime'] = $request->gapTime;
        }

        if (null !== $request->maxTimeWait) {
            @$query['MaxTimeWait'] = $request->maxTimeWait;
        }

        if (null !== $request->waitUri) {
            @$query['WaitUri'] = $request->waitUri;
        }

        if (null !== $request->waitUrl) {
            @$query['WaitUrl'] = $request->waitUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetWaitingRoomConfig',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetWaitingRoomConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the virtual waiting room feature for an accelerated domain name. This operation is available only for accelerated domain names of the Dynamic CDN workload type.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param request - SetWaitingRoomConfigRequest
     *
     * @returns SetWaitingRoomConfigResponse
     *
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
     * Enables a disabled domain name. After the domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *
     * @remarks
     *   If the domain name is in an invalid state or you have an overdue payment in your account, the domain name cannot be enabled.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - StartCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCdnDomainResponse
     *
     * @param StartCdnDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartCdnDomainResponse
     */
    public function startCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a disabled domain name. After the domain name is enabled, the value of the DomainStatus parameter is changed to Online.
     *
     * @remarks
     *   If the domain name is in an invalid state or you have an overdue payment in your account, the domain name cannot be enabled.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param request - StartCdnDomainRequest
     *
     * @returns StartCdnDomainResponse
     *
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
     * Disables an accelerated domain name. After the domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *
     * @remarks
     *   After an accelerated domain is disabled, Alibaba Cloud CDN retains its information and routes all the requests that are destined for the accelerated domain to the origin server.
     * *   You can call this operation up to 40 times per second per account.
     *
     * @param request - StopCdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCdnDomainResponse
     *
     * @param StopCdnDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopCdnDomainResponse
     */
    public function stopCdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopCdnDomain',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopCdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an accelerated domain name. After the domain name is disabled, the value of the DomainStatus parameter is changed to Offline.
     *
     * @remarks
     *   After an accelerated domain is disabled, Alibaba Cloud CDN retains its information and routes all the requests that are destined for the accelerated domain to the origin server.
     * *   You can call this operation up to 40 times per second per account.
     *
     * @param request - StopCdnDomainRequest
     *
     * @returns StopCdnDomainResponse
     *
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
     * Adds one or more tags to specific resources.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more tags to specific resources.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Removes tags from specified resources.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from specified resources.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * Updates a tracking task.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - UpdateCdnDeliverTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCdnDeliverTaskResponse
     *
     * @param UpdateCdnDeliverTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCdnDeliverTaskResponse
     */
    public function updateCdnDeliverTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deliver) {
            @$body['Deliver'] = $request->deliver;
        }

        if (null !== $request->deliverId) {
            @$body['DeliverId'] = $request->deliverId;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->reports) {
            @$body['Reports'] = $request->reports;
        }

        if (null !== $request->schedule) {
            @$body['Schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCdnDeliverTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a tracking task.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - UpdateCdnDeliverTaskRequest
     *
     * @returns UpdateCdnDeliverTaskResponse
     *
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
     * Updates one or more operations reports.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - UpdateCdnSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCdnSubTaskResponse
     *
     * @param UpdateCdnSubTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCdnSubTaskResponse
     */
    public function updateCdnSubTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->reportIds) {
            @$body['ReportIds'] = $request->reportIds;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCdnSubTask',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates one or more operations reports.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param request - UpdateCdnSubTaskRequest
     *
     * @returns UpdateCdnSubTaskResponse
     *
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
     * Updates a specified Function Compute trigger.
     *
     * @param request - UpdateFCTriggerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFCTriggerResponse
     *
     * @param UpdateFCTriggerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateFCTriggerResponse
     */
    public function updateFCTriggerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->triggerARN) {
            @$query['TriggerARN'] = $request->triggerARN;
        }

        $body = [];
        if (null !== $request->functionARN) {
            @$body['FunctionARN'] = $request->functionARN;
        }

        if (null !== $request->notes) {
            @$body['Notes'] = $request->notes;
        }

        if (null !== $request->roleARN) {
            @$body['RoleARN'] = $request->roleARN;
        }

        if (null !== $request->sourceARN) {
            @$body['SourceARN'] = $request->sourceARN;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFCTrigger',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFCTriggerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a specified Function Compute trigger.
     *
     * @param request - UpdateFCTriggerRequest
     *
     * @returns UpdateFCTriggerResponse
     *
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
     * Verifies the ownership of a specified domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - VerifyDomainOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyDomainOwnerResponse
     *
     * @param VerifyDomainOwnerRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyDomainOwnerResponse
     */
    public function verifyDomainOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyDomainOwner',
            'version' => '2018-05-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the ownership of a specified domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param request - VerifyDomainOwnerRequest
     *
     * @returns VerifyDomainOwnerResponse
     *
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
