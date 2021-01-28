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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnIpaDomainConfigsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnIpaDomainConfigsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStartDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStartDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStopDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchStopDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnCertificateSigningRequestRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnCertificateSigningRequestResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnDomainOfflineLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnDomainOfflineLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnCertificateListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigOfVersionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigOfVersionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUvDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUvDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketBpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketBpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketTrafficDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketTrafficDataResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryFieldRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryFieldResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryRegionsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryRegionsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOfflineLogDeliveryStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshQuotaRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshQuotaResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTagResourcesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillHistoryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsByFuncRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsByFuncResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserQuotaRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserQuotaResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserTagsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserTagsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnVerifyContentRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnVerifyContentResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnIpaStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnIpaStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeUserDcdnStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DisableDcdnDomainOfflineLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DisableDcdnDomainOfflineLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DisableDcdnOfflineLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DisableDcdnOfflineLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EnableDcdnDomainOfflineLogDeliveryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\EnableDcdnDomainOfflineLogDeliveryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDCdnDomainSchdmByPropertyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDCdnDomainSchdmByPropertyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\OpenDcdnServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\OpenDcdnServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PreloadDcdnObjectCachesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PreloadDcdnObjectCachesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishDcdnStagingConfigToProductionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PublishDcdnStagingConfigToProductionResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainStagingConfigResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\UpdateDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\VerifyDcdnDomainOwnerRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\VerifyDcdnDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDcdnDomainResponse::fromMap($this->doRPCRequest('AddDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDcdnIpaDomainResponse::fromMap($this->doRPCRequest('AddDcdnIpaDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchAddDcdnDomainResponse::fromMap($this->doRPCRequest('BatchAddDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchDeleteDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchDeleteDcdnDomainConfigsResponse
     */
    public function batchDeleteDcdnDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteDcdnDomainConfigsResponse::fromMap($this->doRPCRequest('BatchDeleteDcdnDomainConfigs', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchSetDcdnDomainCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchSetDcdnDomainCertificateResponse
     */
    public function batchSetDcdnDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetDcdnDomainCertificateResponse::fromMap($this->doRPCRequest('BatchSetDcdnDomainCertificate', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetDcdnDomainConfigsResponse::fromMap($this->doRPCRequest('BatchSetDcdnDomainConfigs', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetDcdnIpaDomainConfigsResponse::fromMap($this->doRPCRequest('BatchSetDcdnIpaDomainConfigs', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param BatchStartDcdnDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchStartDcdnDomainResponse
     */
    public function batchStartDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStartDcdnDomainResponse::fromMap($this->doRPCRequest('BatchStartDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStopDcdnDomainResponse::fromMap($this->doRPCRequest('BatchStopDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDcdnCertificateSigningRequestRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateDcdnCertificateSigningRequestResponse
     */
    public function createDcdnCertificateSigningRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDcdnCertificateSigningRequestResponse::fromMap($this->doRPCRequest('CreateDcdnCertificateSigningRequest', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateDcdnDomainOfflineLogDeliveryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateDcdnDomainOfflineLogDeliveryResponse
     */
    public function createDcdnDomainOfflineLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDcdnDomainOfflineLogDeliveryResponse::fromMap($this->doRPCRequest('CreateDcdnDomainOfflineLogDelivery', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDcdnDomainOfflineLogDeliveryRequest $request
     *
     * @return CreateDcdnDomainOfflineLogDeliveryResponse
     */
    public function createDcdnDomainOfflineLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnDomainOfflineLogDeliveryWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDcdnDomainResponse::fromMap($this->doRPCRequest('DeleteDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDcdnIpaDomainResponse::fromMap($this->doRPCRequest('DeleteDcdnIpaDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDcdnIpaSpecificConfigResponse::fromMap($this->doRPCRequest('DeleteDcdnIpaSpecificConfig', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDcdnSpecificConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDcdnSpecificConfigResponse
     */
    public function deleteDcdnSpecificConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDcdnSpecificConfigResponse::fromMap($this->doRPCRequest('DeleteDcdnSpecificConfig', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDcdnSpecificStagingConfigResponse::fromMap($this->doRPCRequest('DeleteDcdnSpecificStagingConfig', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnBgpBpsDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnBgpBpsDataResponse
     */
    public function describeDcdnBgpBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnBgpBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnBgpBpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnBgpTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnBgpTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnCertificateDetailResponse
     */
    public function describeDcdnCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnCertificateDetailResponse::fromMap($this->doRPCRequest('DescribeDcdnCertificateDetail', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnCertificateListResponse::fromMap($this->doRPCRequest('DescribeDcdnCertificateList', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnConfigOfVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnConfigOfVersionResponse
     */
    public function describeDcdnConfigOfVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnConfigOfVersionResponse::fromMap($this->doRPCRequest('DescribeDcdnConfigOfVersion', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnDomainBpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainBpsDataResponse
     */
    public function describeDcdnDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainBpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnDomainByCertificateRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainByCertificateResponse
     */
    public function describeDcdnDomainByCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainByCertificateResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainByCertificate', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnDomainCertificateInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainCertificateInfoResponse
     */
    public function describeDcdnDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainCertificateInfoResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainCertificateInfo', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeDcdnDomainCnameResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainCname', '2018-01-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainConfigsResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainConfigs', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainDetailResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainDetail', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainHitRateDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainHitRateData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainHttpCodeData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnDomainIpaBpsDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnDomainIpaBpsDataResponse
     */
    public function describeDcdnDomainIpaBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainIpaBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainIpaBpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainIpaTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainIpaTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainIspDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainIspData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainLogResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainLog', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainMultiUsageDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainMultiUsageData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainOriginBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainOriginBpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainOriginTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainOriginTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainPropertyResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainProperty', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainPvDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainPvData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainQpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainQpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeDcdnDomainRealTimeBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeBpsData', '2018-01-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeDcdnDomainRealTimeByteHitRateDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeByteHitRateData', '2018-01-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeDcdnDomainRealTimeDetailDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeDetailData', '2018-01-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainRealTimeHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeHttpCodeData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeDcdnDomainRealTimeQpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeQpsData', '2018-01-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return DescribeDcdnDomainRealTimeReqHitRateDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeReqHitRateData', '2018-01-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainRealTimeSrcBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeSrcBpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeSrcHttpCodeData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainRealTimeSrcTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeSrcTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainRealTimeTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRealTimeTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainRegionDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainRegionData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainStagingConfigResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainStagingConfig', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainTopReferVisitResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainTopReferVisit', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainTopUrlVisitResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainTopUrlVisit', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnDomainUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainUvDataResponse
     */
    public function describeDcdnDomainUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainUvDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainUvData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainWebsocketBpsDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainWebsocketBpsData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainWebsocketHttpCodeDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainWebsocketHttpCodeData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnDomainWebsocketTrafficDataResponse::fromMap($this->doRPCRequest('DescribeDcdnDomainWebsocketTrafficData', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnHttpsDomainListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnHttpsDomainListResponse
     */
    public function describeDcdnHttpsDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnHttpsDomainListResponse::fromMap($this->doRPCRequest('DescribeDcdnHttpsDomainList', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnIpaDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnIpaDomainConfigsResponse
     */
    public function describeDcdnIpaDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnIpaDomainConfigsResponse::fromMap($this->doRPCRequest('DescribeDcdnIpaDomainConfigs', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnIpaDomainDetailResponse::fromMap($this->doRPCRequest('DescribeDcdnIpaDomainDetail', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnIpaServiceResponse::fromMap($this->doRPCRequest('DescribeDcdnIpaService', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnIpaUserDomainsResponse::fromMap($this->doRPCRequest('DescribeDcdnIpaUserDomains', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnIpInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnIpInfoResponse
     */
    public function describeDcdnIpInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnIpInfoResponse::fromMap($this->doRPCRequest('DescribeDcdnIpInfo', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnOfflineLogDeliveryRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDcdnOfflineLogDeliveryResponse
     */
    public function describeDcdnOfflineLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnOfflineLogDeliveryResponse::fromMap($this->doRPCRequest('DescribeDcdnOfflineLogDelivery', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryRequest $request
     *
     * @return DescribeDcdnOfflineLogDeliveryResponse
     */
    public function describeDcdnOfflineLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnOfflineLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryFieldRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDcdnOfflineLogDeliveryFieldResponse
     */
    public function describeDcdnOfflineLogDeliveryFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnOfflineLogDeliveryFieldResponse::fromMap($this->doRPCRequest('DescribeDcdnOfflineLogDeliveryField', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryFieldRequest $request
     *
     * @return DescribeDcdnOfflineLogDeliveryFieldResponse
     */
    public function describeDcdnOfflineLogDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnOfflineLogDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryRegionsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnOfflineLogDeliveryRegionsResponse
     */
    public function describeDcdnOfflineLogDeliveryRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnOfflineLogDeliveryRegionsResponse::fromMap($this->doRPCRequest('DescribeDcdnOfflineLogDeliveryRegions', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryRegionsRequest $request
     *
     * @return DescribeDcdnOfflineLogDeliveryRegionsResponse
     */
    public function describeDcdnOfflineLogDeliveryRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnOfflineLogDeliveryRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDcdnOfflineLogDeliveryStatusResponse
     */
    public function describeDcdnOfflineLogDeliveryStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnOfflineLogDeliveryStatusResponse::fromMap($this->doRPCRequest('DescribeDcdnOfflineLogDeliveryStatus', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDcdnOfflineLogDeliveryStatusRequest $request
     *
     * @return DescribeDcdnOfflineLogDeliveryStatusResponse
     */
    public function describeDcdnOfflineLogDeliveryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnOfflineLogDeliveryStatusWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnRefreshQuotaResponse::fromMap($this->doRPCRequest('DescribeDcdnRefreshQuota', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnRefreshTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRefreshTasksResponse
     */
    public function describeDcdnRefreshTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnRefreshTasksResponse::fromMap($this->doRPCRequest('DescribeDcdnRefreshTasks', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnRegionAndIspResponse::fromMap($this->doRPCRequest('DescribeDcdnRegionAndIsp', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnServiceResponse
     */
    public function describeDcdnServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnServiceResponse::fromMap($this->doRPCRequest('DescribeDcdnService', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnStagingIpResponse::fromMap($this->doRPCRequest('DescribeDcdnStagingIp', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnTagResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnTagResourcesResponse
     */
    public function describeDcdnTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnTagResourcesResponse::fromMap($this->doRPCRequest('DescribeDcdnTagResources', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnTopDomainsByFlowResponse::fromMap($this->doRPCRequest('DescribeDcdnTopDomainsByFlow', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserBillHistoryResponse::fromMap($this->doRPCRequest('DescribeDcdnUserBillHistory', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserBillTypeResponse::fromMap($this->doRPCRequest('DescribeDcdnUserBillType', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserDomainsResponse
     */
    public function describeDcdnUserDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserDomainsResponse::fromMap($this->doRPCRequest('DescribeDcdnUserDomains', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserDomainsByFuncResponse::fromMap($this->doRPCRequest('DescribeDcdnUserDomainsByFunc', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserQuotaResponse::fromMap($this->doRPCRequest('DescribeDcdnUserQuota', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnUserResourcePackageRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnUserResourcePackageResponse
     */
    public function describeDcdnUserResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserResourcePackageResponse::fromMap($this->doRPCRequest('DescribeDcdnUserResourcePackage', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserSecDropResponse::fromMap($this->doRPCRequest('DescribeDcdnUserSecDrop', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDcdnUserTagsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnUserTagsResponse::fromMap($this->doRPCRequest('DescribeDcdnUserTags', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnVerifyContentResponse::fromMap($this->doRPCRequest('DescribeDcdnVerifyContent', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDcdnWafDomainResponse::fromMap($this->doRPCRequest('DescribeDcdnWafDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUserDcdnIpaStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserDcdnIpaStatusResponse
     */
    public function describeUserDcdnIpaStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserDcdnIpaStatusResponse::fromMap($this->doRPCRequest('DescribeUserDcdnIpaStatus', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserDcdnStatusResponse::fromMap($this->doRPCRequest('DescribeUserDcdnStatus', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DisableDcdnDomainOfflineLogDeliveryRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DisableDcdnDomainOfflineLogDeliveryResponse
     */
    public function disableDcdnDomainOfflineLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDcdnDomainOfflineLogDeliveryResponse::fromMap($this->doRPCRequest('DisableDcdnDomainOfflineLogDelivery', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableDcdnDomainOfflineLogDeliveryRequest $request
     *
     * @return DisableDcdnDomainOfflineLogDeliveryResponse
     */
    public function disableDcdnDomainOfflineLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDcdnDomainOfflineLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param DisableDcdnOfflineLogDeliveryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DisableDcdnOfflineLogDeliveryResponse
     */
    public function disableDcdnOfflineLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableDcdnOfflineLogDeliveryResponse::fromMap($this->doRPCRequest('DisableDcdnOfflineLogDelivery', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableDcdnOfflineLogDeliveryRequest $request
     *
     * @return DisableDcdnOfflineLogDeliveryResponse
     */
    public function disableDcdnOfflineLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDcdnOfflineLogDeliveryWithOptions($request, $runtime);
    }

    /**
     * @param EnableDcdnDomainOfflineLogDeliveryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return EnableDcdnDomainOfflineLogDeliveryResponse
     */
    public function enableDcdnDomainOfflineLogDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableDcdnDomainOfflineLogDeliveryResponse::fromMap($this->doRPCRequest('EnableDcdnDomainOfflineLogDelivery', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableDcdnDomainOfflineLogDeliveryRequest $request
     *
     * @return EnableDcdnDomainOfflineLogDeliveryResponse
     */
    public function enableDcdnDomainOfflineLogDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDcdnDomainOfflineLogDeliveryWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDCdnDomainSchdmByPropertyResponse::fromMap($this->doRPCRequest('ModifyDCdnDomainSchdmByProperty', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param OpenDcdnServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenDcdnServiceResponse
     */
    public function openDcdnServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenDcdnServiceResponse::fromMap($this->doRPCRequest('OpenDcdnService', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PreloadDcdnObjectCachesResponse::fromMap($this->doRPCRequest('PreloadDcdnObjectCaches', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PublishDcdnStagingConfigToProductionResponse::fromMap($this->doRPCRequest('PublishDcdnStagingConfigToProduction', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RefreshDcdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshDcdnObjectCachesResponse
     */
    public function refreshDcdnObjectCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshDcdnObjectCachesResponse::fromMap($this->doRPCRequest('RefreshDcdnObjectCaches', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RollbackDcdnStagingConfigResponse::fromMap($this->doRPCRequest('RollbackDcdnStagingConfig', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDcdnConfigOfVersionResponse::fromMap($this->doRPCRequest('SetDcdnConfigOfVersion', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDcdnDomainCertificateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDcdnDomainCertificateResponse
     */
    public function setDcdnDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDcdnDomainCertificateResponse::fromMap($this->doRPCRequest('SetDcdnDomainCertificate', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDcdnDomainCSRCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDcdnDomainCSRCertificateResponse
     */
    public function setDcdnDomainCSRCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDcdnDomainCSRCertificateResponse::fromMap($this->doRPCRequest('SetDcdnDomainCSRCertificate', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDcdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDcdnDomainStagingConfigResponse
     */
    public function setDcdnDomainStagingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDcdnDomainStagingConfigResponse::fromMap($this->doRPCRequest('SetDcdnDomainStagingConfig', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartDcdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartDcdnDomainResponse
     */
    public function startDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDcdnDomainResponse::fromMap($this->doRPCRequest('StartDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDcdnIpaDomainResponse::fromMap($this->doRPCRequest('StartDcdnIpaDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDcdnDomainResponse::fromMap($this->doRPCRequest('StopDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDcdnIpaDomainResponse::fromMap($this->doRPCRequest('StopDcdnIpaDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagDcdnResourcesResponse::fromMap($this->doRPCRequest('TagDcdnResources', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagDcdnResourcesResponse::fromMap($this->doRPCRequest('UntagDcdnResources', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDcdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDcdnDomainResponse
     */
    public function updateDcdnDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDcdnDomainResponse::fromMap($this->doRPCRequest('UpdateDcdnDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDcdnIpaDomainResponse::fromMap($this->doRPCRequest('UpdateDcdnIpaDomain', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param VerifyDcdnDomainOwnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyDcdnDomainOwnerResponse
     */
    public function verifyDcdnDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyDcdnDomainOwnerResponse::fromMap($this->doRPCRequest('VerifyDcdnDomainOwner', '2018-01-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
