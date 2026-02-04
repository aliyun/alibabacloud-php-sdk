<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnKvShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnKvWithHighCapacityAdvanceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnKvWithHighCapacityRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnKvWithHighCapacityResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnWafRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchDeleteDcdnWafRulesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchModifyDcdnWafRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchModifyDcdnWafRulesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvWithHighCapacityAdvanceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvWithHighCapacityRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchPutDcdnKvWithHighCapacityResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnWafGroupRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnWafGroupResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnWafPolicyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateDcdnWafPolicyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateRoutineRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateRoutineResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateRoutineShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateSlrAndSlsProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\CreateSlrAndSlsProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteCustomDomainSampleRateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteCustomDomainSampleRateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDeliverTaskRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDeliverTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnIpaSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnKvNamespaceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnKvNamespaceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnRealTimeLogProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnRealTimeLogProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSpecificStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnSubTaskResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnUserConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnUserConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnWafGroupRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnWafGroupResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnWafPolicyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteDcdnWafPolicyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineConfEnvsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineConfEnvsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineConfEnvsShrinkRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DeleteRoutineResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeCustomDomainSampleRateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeCustomDomainSampleRateResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosServiceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosServiceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogExTtlRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogExTtlResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPHistoryRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnFullDomainsBlockIPHistoryResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnHttpsDomainListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnHttpsDomainListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainCidrRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainCidrResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvAccountResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvAccountStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvNamespaceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvNamespaceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnL2IpsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnL2VipsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnL2VipsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSSLCertificateListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSSLCertificateListResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserVipsByDomainRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserVipsByDomainResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnVerifyContentRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnVerifyContentResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafBotAppKeyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDefaultRulesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDefaultRulesResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupsResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDdosAllEventListRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDdosAllEventListResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeEncryptRoutineUidResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeHighlightInfoRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeHighlightInfoResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvRealTimeQpsDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvRealTimeQpsDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvUsageDataRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvUsageDataResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRDDomainsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCanaryEnvsResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCodeRevisionRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineCodeRevisionResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineRelatedDomainsRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeRoutineRelatedDomainsResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvDetailRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvDetailResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvStatusRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\GetDcdnKvStatusResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnRealTimeDeliveryProjectRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnRealTimeDeliveryProjectResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyCustomDomainSampleRateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyCustomDomainSampleRateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDCdnDomainSchdmByPropertyRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDCdnDomainSchdmByPropertyResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafGroupRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\ModifyDcdnWafGroupResponse;
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
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvNamespaceRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvNamespaceResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvWithHighCapacityRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\PutDcdnKvWithHighCapacityResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCacheByCacheTagRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCacheByCacheTagResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCachesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshDcdnObjectCachesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshErObjectCachesByCacheTagRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshErObjectCachesByCacheTagResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshErObjectCachesRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RefreshErObjectCachesResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RollbackDcdnStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\RollbackDcdnStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCSRCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainCSRCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainSMCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainSMCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainSSLCertificateRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainSSLCertificateResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainStagingConfigRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnDomainStagingConfigResponse;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnFullDomainsBlockIPRequest;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\SetDcdnFullDomainsBlockIPResponse;
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
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dcdn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'dcdn.aliyuncs.com',
            'ap-northeast-2-pop' => 'dcdn.aliyuncs.com',
            'ap-south-1' => 'dcdn.aliyuncs.com',
            'ap-southeast-1' => 'dcdn.aliyuncs.com',
            'ap-southeast-2' => 'dcdn.aliyuncs.com',
            'ap-southeast-3' => 'dcdn.aliyuncs.com',
            'ap-southeast-5' => 'dcdn.aliyuncs.com',
            'cn-beijing' => 'dcdn.aliyuncs.com',
            'cn-beijing-finance-1' => 'dcdn.aliyuncs.com',
            'cn-beijing-finance-pop' => 'dcdn.aliyuncs.com',
            'cn-beijing-gov-1' => 'dcdn.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'dcdn.aliyuncs.com',
            'cn-chengdu' => 'dcdn.aliyuncs.com',
            'cn-edge-1' => 'dcdn.aliyuncs.com',
            'cn-fujian' => 'dcdn.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'dcdn.aliyuncs.com',
            'cn-hangzhou' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-finance' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dcdn.aliyuncs.com',
            'cn-hangzhou-test-306' => 'dcdn.aliyuncs.com',
            'cn-hongkong' => 'dcdn.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'dcdn.aliyuncs.com',
            'cn-huhehaote' => 'dcdn.aliyuncs.com',
            'cn-north-2-gov-1' => 'dcdn.aliyuncs.com',
            'cn-qingdao' => 'dcdn.aliyuncs.com',
            'cn-qingdao-nebula' => 'dcdn.aliyuncs.com',
            'cn-shanghai' => 'dcdn.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'dcdn.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'dcdn.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dcdn.aliyuncs.com',
            'cn-shanghai-inner' => 'dcdn.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dcdn.aliyuncs.com',
            'cn-shenzhen' => 'dcdn.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dcdn.aliyuncs.com',
            'cn-shenzhen-inner' => 'dcdn.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'dcdn.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'dcdn.aliyuncs.com',
            'cn-wuhan' => 'dcdn.aliyuncs.com',
            'cn-yushanfang' => 'dcdn.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'dcdn.aliyuncs.com',
            'cn-zhangjiakou' => 'dcdn.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'dcdn.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'dcdn.aliyuncs.com',
            'eu-central-1' => 'dcdn.aliyuncs.com',
            'eu-west-1' => 'dcdn.aliyuncs.com',
            'eu-west-1-oxs' => 'dcdn.aliyuncs.com',
            'me-east-1' => 'dcdn.aliyuncs.com',
            'rus-west-1-pop' => 'dcdn.aliyuncs.com',
            'us-east-1' => 'dcdn.aliyuncs.com',
            'us-west-1' => 'dcdn.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dcdn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => '' . @$form['host'],
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * Adds a domain name to accelerate. You can specify only one domain name in each request.
     *
     * @remarks
     * > *   Dynamic Content Delivery Network (DCDN) is activated.
     * > *   Internet content provider (ICP) filing is complete for the accelerated domain name.
     * > *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     * > *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - AddDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDcdnDomainResponse
     *
     * @param AddDcdnDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddDcdnDomainResponse
     */
    public function addDcdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkUrl) {
            @$query['CheckUrl'] = $request->checkUrl;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionType) {
            @$query['FunctionType'] = $request->functionType;
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

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
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
            'action' => 'AddDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a domain name to accelerate. You can specify only one domain name in each request.
     *
     * @remarks
     * > *   Dynamic Content Delivery Network (DCDN) is activated.
     * > *   Internet content provider (ICP) filing is complete for the accelerated domain name.
     * > *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     * > *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - AddDcdnDomainRequest
     *
     * @returns AddDcdnDomainResponse
     *
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
     * Adds a domain name to IPA. You can specify only one domain name in each request.
     *
     * @remarks
     * >
     * *   Make sure that the IPA service is activated before you add a domain name to accelerate.
     * *   Make sure that the Internet content provider (ICP) filling is complete for the domain name to accelerate.
     * *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review is complete by the end of the next business day after you submit the request.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param Request - AddDcdnIpaDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDcdnIpaDomainResponse
     *
     * @param AddDcdnIpaDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddDcdnIpaDomainResponse
     */
    public function addDcdnIpaDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
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
            'action' => 'AddDcdnIpaDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a domain name to IPA. You can specify only one domain name in each request.
     *
     * @remarks
     * >
     * *   Make sure that the IPA service is activated before you add a domain name to accelerate.
     * *   Make sure that the Internet content provider (ICP) filling is complete for the domain name to accelerate.
     * *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed. The review is complete by the end of the next business day after you submit the request.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param Request - AddDcdnIpaDomainRequest
     *
     * @returns AddDcdnIpaDomainResponse
     *
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
     * Adds one or more domain names to DCDN at a time.
     *
     * @remarks
     * *Prerequisites**:
     * *   The [DCDN service is activated](https://help.aliyun.com/document_detail/64926.html).
     * *   Internet content provider (ICP) filing is complete for the accelerated domain names.
     * > *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     * >*   You can specify up to 50 domain names in each request.
     * >*   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchAddDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchAddDcdnDomainResponse
     *
     * @param BatchAddDcdnDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchAddDcdnDomainResponse
     */
    public function batchAddDcdnDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'BatchAddDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchAddDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more domain names to DCDN at a time.
     *
     * @remarks
     * *Prerequisites**:
     * *   The [DCDN service is activated](https://help.aliyun.com/document_detail/64926.html).
     * *   Internet content provider (ICP) filing is complete for the accelerated domain names.
     * > *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     * >*   You can specify up to 50 domain names in each request.
     * >*   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchAddDcdnDomainRequest
     *
     * @returns BatchAddDcdnDomainResponse
     *
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
     * Creates Web Application Firewall (WAF) protection rules.
     *
     * @remarks
     * >  You can call this operation up to 20 times per second per account.
     *
     * @param Request - BatchCreateDcdnWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateDcdnWafRulesResponse
     *
     * @param BatchCreateDcdnWafRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchCreateDcdnWafRulesResponse
     */
    public function batchCreateDcdnWafRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->ruleConfigs) {
            @$body['RuleConfigs'] = $request->ruleConfigs;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateDcdnWafRules',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates Web Application Firewall (WAF) protection rules.
     *
     * @remarks
     * >  You can call this operation up to 20 times per second per account.
     *
     * @param Request - BatchCreateDcdnWafRulesRequest
     *
     * @returns BatchCreateDcdnWafRulesResponse
     *
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
     * Deletes configurations of multiple accelerated domain names at a time.
     *
     * @remarks
     * > - You can specify up to 50 domain names in each request.
     * > - You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchDeleteDcdnDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDcdnDomainConfigsResponse
     *
     * @param BatchDeleteDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchDeleteDcdnDomainConfigsResponse
     */
    public function batchDeleteDcdnDomainConfigsWithOptions($request, $runtime)
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
            'action' => 'BatchDeleteDcdnDomainConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDcdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes configurations of multiple accelerated domain names at a time.
     *
     * @remarks
     * > - You can specify up to 50 domain names in each request.
     * > - You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchDeleteDcdnDomainConfigsRequest
     *
     * @returns BatchDeleteDcdnDomainConfigsResponse
     *
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
     * 批量删除kv数据，支持最大2M的请求体.
     *
     * @param tmpReq - BatchDeleteDcdnKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDcdnKvResponse
     *
     * @param BatchDeleteDcdnKvRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return BatchDeleteDcdnKvResponse
     */
    public function batchDeleteDcdnKvWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchDeleteDcdnKvShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keys) {
            $request->keysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }

        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->keysShrink) {
            @$body['Keys'] = $request->keysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteDcdnKv',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除kv数据，支持最大2M的请求体.
     *
     * @param Request - BatchDeleteDcdnKvRequest
     *
     * @returns BatchDeleteDcdnKvResponse
     *
     * @param BatchDeleteDcdnKvRequest $request
     *
     * @return BatchDeleteDcdnKvResponse
     */
    public function batchDeleteDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDcdnKvWithOptions($request, $runtime);
    }

    /**
     * 批量删除kv数据，支持最大100M的请求体.
     *
     * @param Request - BatchDeleteDcdnKvWithHighCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDcdnKvWithHighCapacityResponse
     *
     * @param BatchDeleteDcdnKvWithHighCapacityRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchDeleteDcdnKvWithHighCapacityResponse
     */
    public function batchDeleteDcdnKvWithHighCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteDcdnKvWithHighCapacity',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDcdnKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除kv数据，支持最大100M的请求体.
     *
     * @param Request - BatchDeleteDcdnKvWithHighCapacityRequest
     *
     * @returns BatchDeleteDcdnKvWithHighCapacityResponse
     *
     * @param BatchDeleteDcdnKvWithHighCapacityRequest $request
     *
     * @return BatchDeleteDcdnKvWithHighCapacityResponse
     */
    public function batchDeleteDcdnKvWithHighCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDcdnKvWithHighCapacityWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteDcdnKvWithHighCapacityAdvanceRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return BatchDeleteDcdnKvWithHighCapacityResponse
     */
    public function batchDeleteDcdnKvWithHighCapacityAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'dcdn',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $batchDeleteDcdnKvWithHighCapacityReq = new BatchDeleteDcdnKvWithHighCapacityRequest([]);
        Utils::convert($request, $batchDeleteDcdnKvWithHighCapacityReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $batchDeleteDcdnKvWithHighCapacityReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->batchDeleteDcdnKvWithHighCapacityWithOptions($batchDeleteDcdnKvWithHighCapacityReq, $runtime);
    }

    /**
     * Deletes multiple Web Application Firewall (WAF) protection rules at a time.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - BatchDeleteDcdnWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDcdnWafRulesResponse
     *
     * @param BatchDeleteDcdnWafRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchDeleteDcdnWafRulesResponse
     */
    public function batchDeleteDcdnWafRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ruleIds) {
            @$body['RuleIds'] = $request->ruleIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteDcdnWafRules',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple Web Application Firewall (WAF) protection rules at a time.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - BatchDeleteDcdnWafRulesRequest
     *
     * @returns BatchDeleteDcdnWafRulesResponse
     *
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
     * Modifies multiple Web Application Firewall (WAF) protection rules. Only Bot management rules can be modified.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - BatchModifyDcdnWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchModifyDcdnWafRulesResponse
     *
     * @param BatchModifyDcdnWafRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchModifyDcdnWafRulesResponse
     */
    public function batchModifyDcdnWafRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->ruleConfigs) {
            @$body['RuleConfigs'] = $request->ruleConfigs;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchModifyDcdnWafRules',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchModifyDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies multiple Web Application Firewall (WAF) protection rules. Only Bot management rules can be modified.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - BatchModifyDcdnWafRulesRequest
     *
     * @returns BatchModifyDcdnWafRulesResponse
     *
     * @param BatchModifyDcdnWafRulesRequest $request
     *
     * @return BatchModifyDcdnWafRulesResponse
     */
    public function batchModifyDcdnWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchModifyDcdnWafRulesWithOptions($request, $runtime);
    }

    /**
     * Configures multiple key-value (KV) pairs for a namespace.
     *
     * @param tmpReq - BatchPutDcdnKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchPutDcdnKvResponse
     *
     * @param BatchPutDcdnKvRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return BatchPutDcdnKvResponse
     */
    public function batchPutDcdnKvWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchPutDcdnKvShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->kvList) {
            $request->kvListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kvList, 'KvList', 'json');
        }

        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->kvListShrink) {
            @$body['KvList'] = $request->kvListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchPutDcdnKv',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchPutDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures multiple key-value (KV) pairs for a namespace.
     *
     * @param Request - BatchPutDcdnKvRequest
     *
     * @returns BatchPutDcdnKvResponse
     *
     * @param BatchPutDcdnKvRequest $request
     *
     * @return BatchPutDcdnKvResponse
     */
    public function batchPutDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchPutDcdnKvWithOptions($request, $runtime);
    }

    /**
     * 批量写入kv数据，支持最大100M的请求体.
     *
     * @param Request - BatchPutDcdnKvWithHighCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchPutDcdnKvWithHighCapacityResponse
     *
     * @param BatchPutDcdnKvWithHighCapacityRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchPutDcdnKvWithHighCapacityResponse
     */
    public function batchPutDcdnKvWithHighCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchPutDcdnKvWithHighCapacity',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchPutDcdnKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量写入kv数据，支持最大100M的请求体.
     *
     * @param Request - BatchPutDcdnKvWithHighCapacityRequest
     *
     * @returns BatchPutDcdnKvWithHighCapacityResponse
     *
     * @param BatchPutDcdnKvWithHighCapacityRequest $request
     *
     * @return BatchPutDcdnKvWithHighCapacityResponse
     */
    public function batchPutDcdnKvWithHighCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchPutDcdnKvWithHighCapacityWithOptions($request, $runtime);
    }

    /**
     * @param BatchPutDcdnKvWithHighCapacityAdvanceRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return BatchPutDcdnKvWithHighCapacityResponse
     */
    public function batchPutDcdnKvWithHighCapacityAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'dcdn',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $batchPutDcdnKvWithHighCapacityReq = new BatchPutDcdnKvWithHighCapacityRequest([]);
        Utils::convert($request, $batchPutDcdnKvWithHighCapacityReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $batchPutDcdnKvWithHighCapacityReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->batchPutDcdnKvWithHighCapacityWithOptions($batchPutDcdnKvWithHighCapacityReq, $runtime);
    }

    /**
     * Configures features for one or more domain names.
     *
     * @remarks
     *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchSetDcdnDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetDcdnDomainConfigsResponse
     *
     * @param BatchSetDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchSetDcdnDomainConfigsResponse
     */
    public function batchSetDcdnDomainConfigsWithOptions($request, $runtime)
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
            'action' => 'BatchSetDcdnDomainConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetDcdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures features for one or more domain names.
     *
     * @remarks
     *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchSetDcdnDomainConfigsRequest
     *
     * @returns BatchSetDcdnDomainConfigsResponse
     *
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
     * Configures multiple domain names to be accelerated by IP Application Accelerator (IPA).
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - BatchSetDcdnIpaDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetDcdnIpaDomainConfigsResponse
     *
     * @param BatchSetDcdnIpaDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchSetDcdnIpaDomainConfigsResponse
     */
    public function batchSetDcdnIpaDomainConfigsWithOptions($request, $runtime)
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
            'action' => 'BatchSetDcdnIpaDomainConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetDcdnIpaDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures multiple domain names to be accelerated by IP Application Accelerator (IPA).
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - BatchSetDcdnIpaDomainConfigsRequest
     *
     * @returns BatchSetDcdnIpaDomainConfigsResponse
     *
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
     * Sets the protection status of multiple domain names at a time.
     *
     * @remarks
     * #
     * *   You can call this operation up to 20 times per second.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - BatchSetDcdnWafDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetDcdnWafDomainConfigsResponse
     *
     * @param BatchSetDcdnWafDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchSetDcdnWafDomainConfigsResponse
     */
    public function batchSetDcdnWafDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientIpTag) {
            @$body['ClientIpTag'] = $request->clientIpTag;
        }

        if (null !== $request->defenseStatus) {
            @$body['DefenseStatus'] = $request->defenseStatus;
        }

        if (null !== $request->domainNames) {
            @$body['DomainNames'] = $request->domainNames;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSetDcdnWafDomainConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetDcdnWafDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the protection status of multiple domain names at a time.
     *
     * @remarks
     * #
     * *   You can call this operation up to 20 times per second.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - BatchSetDcdnWafDomainConfigsRequest
     *
     * @returns BatchSetDcdnWafDomainConfigsResponse
     *
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
     * Enables one or more accelerated domain names. After the accelerated domain names are enabled, the value of the DomainStatus parameter for the domain names changes to Online.
     *
     * @remarks
     * >
     * *   If an accelerated domain name is in an invalid state or your account has an overdue payment, the accelerated domain name cannot be enabled.
     * *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchStartDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStartDcdnDomainResponse
     *
     * @param BatchStartDcdnDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchStartDcdnDomainResponse
     */
    public function batchStartDcdnDomainWithOptions($request, $runtime)
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
            'action' => 'BatchStartDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStartDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables one or more accelerated domain names. After the accelerated domain names are enabled, the value of the DomainStatus parameter for the domain names changes to Online.
     *
     * @remarks
     * >
     * *   If an accelerated domain name is in an invalid state or your account has an overdue payment, the accelerated domain name cannot be enabled.
     * *   You can specify up to 50 domain names in each request.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchStartDcdnDomainRequest
     *
     * @returns BatchStartDcdnDomainResponse
     *
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
     * Disables one or more accelerated domain names. After an accelerated domain name is disabled, the value of the DomainStatus parameter for the domain name changes to Offline.
     *
     * @remarks
     * > *   After an accelerated domain name is disabled, Dynamic Content Delivery Network (DCDN) retains the domain name information. The system automatically reroutes all requests that are destined for the accelerated domain name to the origin.
     * >*   You can specify up to 50 domain names in each request.
     * >*   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchStopDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStopDcdnDomainResponse
     *
     * @param BatchStopDcdnDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchStopDcdnDomainResponse
     */
    public function batchStopDcdnDomainWithOptions($request, $runtime)
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
            'action' => 'BatchStopDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStopDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables one or more accelerated domain names. After an accelerated domain name is disabled, the value of the DomainStatus parameter for the domain name changes to Offline.
     *
     * @remarks
     * > *   After an accelerated domain name is disabled, Dynamic Content Delivery Network (DCDN) retains the domain name information. The system automatically reroutes all requests that are destined for the accelerated domain name to the origin.
     * >*   You can specify up to 50 domain names in each request.
     * >*   You can call this operation up to 30 times per second per account.
     *
     * @param Request - BatchStopDcdnDomainRequest
     *
     * @returns BatchStopDcdnDomainResponse
     *
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
     * Checks whether a real-time log delivery project exists.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - CheckDcdnProjectExistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDcdnProjectExistResponse
     *
     * @param CheckDcdnProjectExistRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckDcdnProjectExistResponse
     */
    public function checkDcdnProjectExistWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDcdnProjectExist',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDcdnProjectExistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a real-time log delivery project exists.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - CheckDcdnProjectExistRequest
     *
     * @returns CheckDcdnProjectExistResponse
     *
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
     * Generates an official code version from unstable JavaScript code that is in the staging
     *                   environment. The version can be used in the canary release or production environment.
     *
     * @remarks
     * >  The call frequency of the API is no more than 100 queries per second.
     *
     * @param Request - CommitStagingRoutineCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitStagingRoutineCodeResponse
     *
     * @param CommitStagingRoutineCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CommitStagingRoutineCodeResponse
     */
    public function commitStagingRoutineCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeDescription) {
            @$body['CodeDescription'] = $request->codeDescription;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CommitStagingRoutineCode',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CommitStagingRoutineCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates an official code version from unstable JavaScript code that is in the staging
     *                   environment. The version can be used in the canary release or production environment.
     *
     * @remarks
     * >  The call frequency of the API is no more than 100 queries per second.
     *
     * @param Request - CommitStagingRoutineCodeRequest
     *
     * @returns CommitStagingRoutineCodeResponse
     *
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
     * Creates a certificate signing request (CSR) file.
     *
     * @param Request - CreateDcdnCertificateSigningRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDcdnCertificateSigningRequestResponse
     *
     * @param CreateDcdnCertificateSigningRequestRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateDcdnCertificateSigningRequestResponse
     */
    public function createDcdnCertificateSigningRequestWithOptions($request, $runtime)
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
            'action' => 'CreateDcdnCertificateSigningRequest',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDcdnCertificateSigningRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a certificate signing request (CSR) file.
     *
     * @param Request - CreateDcdnCertificateSigningRequestRequest
     *
     * @returns CreateDcdnCertificateSigningRequestResponse
     *
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
     * Creates a tracking task. After you create a tracking task, the system periodically sends operations reports to you by email.
     *
     * @remarks
     * *
     * **You can call this operation up to three times per second.
     *
     * @param Request - CreateDcdnDeliverTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDcdnDeliverTaskResponse
     *
     * @param CreateDcdnDeliverTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDcdnDeliverTaskResponse
     */
    public function createDcdnDeliverTaskWithOptions($request, $runtime)
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
            'action' => 'CreateDcdnDeliverTask',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDcdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a tracking task. After you create a tracking task, the system periodically sends operations reports to you by email.
     *
     * @remarks
     * *
     * **You can call this operation up to three times per second.
     *
     * @param Request - CreateDcdnDeliverTaskRequest
     *
     * @returns CreateDcdnDeliverTaskResponse
     *
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
     * Creates a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - CreateDcdnSLSRealTimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDcdnSLSRealTimeLogDeliveryResponse
     *
     * @param CreateDcdnSLSRealTimeLogDeliveryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateDcdnSLSRealTimeLogDeliveryResponse
     */
    public function createDcdnSLSRealTimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->dataCenter) {
            @$body['DataCenter'] = $request->dataCenter;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->SLSLogStore) {
            @$body['SLSLogStore'] = $request->SLSLogStore;
        }

        if (null !== $request->SLSProject) {
            @$body['SLSProject'] = $request->SLSProject;
        }

        if (null !== $request->SLSRegion) {
            @$body['SLSRegion'] = $request->SLSRegion;
        }

        if (null !== $request->samplingRate) {
            @$body['SamplingRate'] = $request->samplingRate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDcdnSLSRealTimeLogDelivery',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDcdnSLSRealTimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - CreateDcdnSLSRealTimeLogDeliveryRequest
     *
     * @returns CreateDcdnSLSRealTimeLogDeliveryResponse
     *
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
     * Creates a custom operations report.
     *
     * @remarks
     * > *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     * > *   You can call this operation up to three times per second per account.
     *
     * @param Request - CreateDcdnSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDcdnSubTaskResponse
     *
     * @param CreateDcdnSubTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDcdnSubTaskResponse
     */
    public function createDcdnSubTaskWithOptions($request, $runtime)
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
            'action' => 'CreateDcdnSubTask',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDcdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom operations report.
     *
     * @remarks
     * > *   This operation allows you to create a custom operations report for a specific domain name. You can view the statistics about the domain name in the report.
     * > *   You can call this operation up to three times per second per account.
     *
     * @param Request - CreateDcdnSubTaskRequest
     *
     * @returns CreateDcdnSubTaskResponse
     *
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
     * Create a custom WAF rule group.
     *
     * @param Request - CreateDcdnWafGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDcdnWafGroupResponse
     *
     * @param CreateDcdnWafGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDcdnWafGroupResponse
     */
    public function createDcdnWafGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->subscribe) {
            @$body['Subscribe'] = $request->subscribe;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDcdnWafGroup',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDcdnWafGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a custom WAF rule group.
     *
     * @param Request - CreateDcdnWafGroupRequest
     *
     * @returns CreateDcdnWafGroupResponse
     *
     * @param CreateDcdnWafGroupRequest $request
     *
     * @return CreateDcdnWafGroupResponse
     */
    public function createDcdnWafGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDcdnWafGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a Web Application Firewall (WAF) protection policy.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per user.
     * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *
     * @param Request - CreateDcdnWafPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDcdnWafPolicyResponse
     *
     * @param CreateDcdnWafPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDcdnWafPolicyResponse
     */
    public function createDcdnWafPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defenseScene) {
            @$body['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyStatus) {
            @$body['PolicyStatus'] = $request->policyStatus;
        }

        if (null !== $request->policyType) {
            @$body['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDcdnWafPolicy',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Web Application Firewall (WAF) protection policy.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per user.
     * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *
     * @param Request - CreateDcdnWafPolicyRequest
     *
     * @returns CreateDcdnWafPolicyResponse
     *
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
     * Creates a routine.
     *
     * @remarks
     * > *   The parameters must comply with the rules of EnvConf. The description of a routine cannot exceed 50 characters in length.
     * >*   You can only specify the production and staging environments when you call this operation.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param tmpReq - CreateRoutineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoutineResponse
     *
     * @param CreateRoutineRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRoutineResponse
     */
    public function createRoutineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRoutineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->envConf) {
            $request->envConfShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->envConf, 'EnvConf', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->envConfShrink) {
            @$body['EnvConf'] = $request->envConfShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoutine',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routine.
     *
     * @remarks
     * > *   The parameters must comply with the rules of EnvConf. The description of a routine cannot exceed 50 characters in length.
     * >*   You can only specify the production and staging environments when you call this operation.
     * >*   You can call this operation up to 100 times per second per account.
     *
     * @param Request - CreateRoutineRequest
     *
     * @returns CreateRoutineResponse
     *
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
     * Creates a service-linked role (SLR) and a Log Service project.
     *
     * @remarks
     * >  You can call this operation up to 100 times per second per account.
     *
     * @param Request - CreateSlrAndSlsProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSlrAndSlsProjectResponse
     *
     * @param CreateSlrAndSlsProjectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSlrAndSlsProjectResponse
     */
    public function createSlrAndSlsProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSlrAndSlsProject',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSlrAndSlsProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role (SLR) and a Log Service project.
     *
     * @remarks
     * >  You can call this operation up to 100 times per second per account.
     *
     * @param Request - CreateSlrAndSlsProjectRequest
     *
     * @returns CreateSlrAndSlsProjectResponse
     *
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
     * A客户定制实时日志删除接口.
     *
     * @param Request - DeleteCustomDomainSampleRateRequest
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
            'version' => '2018-01-15',
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
     * @param Request - DeleteCustomDomainSampleRateRequest
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
     * Deletes tracking tasks by task ID.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 3.
     *
     * @param Request - DeleteDcdnDeliverTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnDeliverTaskResponse
     *
     * @param DeleteDcdnDeliverTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDcdnDeliverTaskResponse
     */
    public function deleteDcdnDeliverTaskWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnDeliverTask',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes tracking tasks by task ID.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 3.
     *
     * @param Request - DeleteDcdnDeliverTaskRequest
     *
     * @returns DeleteDcdnDeliverTaskResponse
     *
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
     * Deletes a specified accelerated domain name.
     *
     * @remarks
     * > *   Before you delete your domain name, you need to request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     * > *   If you call the **DeleteDcdnDomain** operation, all the information about the accelerated domain name is deleted. If you want to disable an accelerated domain name, call the [StopDcdnDomain](https://help.aliyun.com/document_detail/130622.html) operation.
     * > *   You can call this operation up to 10 times per second per account.
     *
     * @param Request - DeleteDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnDomainResponse
     *
     * @param DeleteDcdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDcdnDomainResponse
     */
    public function deleteDcdnDomainWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified accelerated domain name.
     *
     * @remarks
     * > *   Before you delete your domain name, you need to request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     * > *   If you call the **DeleteDcdnDomain** operation, all the information about the accelerated domain name is deleted. If you want to disable an accelerated domain name, call the [StopDcdnDomain](https://help.aliyun.com/document_detail/130622.html) operation.
     * > *   You can call this operation up to 10 times per second per account.
     *
     * @param Request - DeleteDcdnDomainRequest
     *
     * @returns DeleteDcdnDomainResponse
     *
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
     * Deletes an accelerated domain name from IP Application Accelerator (IPA).
     *
     * @remarks
     * >
     * *   Before you delete your domain name, we recommend that you request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     * *   This operation deletes all records of the specified accelerated domain name. If you want to temporarily disable an accelerated domain name, call the **StopDcdnIpaDomain** operation.****
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param Request - DeleteDcdnIpaDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnIpaDomainResponse
     *
     * @param DeleteDcdnIpaDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDcdnIpaDomainResponse
     */
    public function deleteDcdnIpaDomainWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnIpaDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an accelerated domain name from IP Application Accelerator (IPA).
     *
     * @remarks
     * >
     * *   Before you delete your domain name, we recommend that you request the Domain Name System (DNS) provider to restore the A record of the domain name. Otherwise, the domain name may become inaccessible after you delete it.
     * *   This operation deletes all records of the specified accelerated domain name. If you want to temporarily disable an accelerated domain name, call the **StopDcdnIpaDomain** operation.****
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param Request - DeleteDcdnIpaDomainRequest
     *
     * @returns DeleteDcdnIpaDomainResponse
     *
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
     * Deletes specific configurations of an accelerated domain name from IP Application Accelerator (IPA).
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DeleteDcdnIpaSpecificConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnIpaSpecificConfigResponse
     *
     * @param DeleteDcdnIpaSpecificConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteDcdnIpaSpecificConfigResponse
     */
    public function deleteDcdnIpaSpecificConfigWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnIpaSpecificConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnIpaSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes specific configurations of an accelerated domain name from IP Application Accelerator (IPA).
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DeleteDcdnIpaSpecificConfigRequest
     *
     * @returns DeleteDcdnIpaSpecificConfigResponse
     *
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
     * Deletes the key-value pairs in a namespace that you specify when you call the PutDcdnKvNamespace operation. EdgeKV provides a global key-value database for Dynamic Route for CDN (DCDN) points of presence (POPs).
     *
     * @param Request - DeleteDcdnKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnKvResponse
     *
     * @param DeleteDcdnKvRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDcdnKvResponse
     */
    public function deleteDcdnKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDcdnKv',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the key-value pairs in a namespace that you specify when you call the PutDcdnKvNamespace operation. EdgeKV provides a global key-value database for Dynamic Route for CDN (DCDN) points of presence (POPs).
     *
     * @param Request - DeleteDcdnKvRequest
     *
     * @returns DeleteDcdnKvResponse
     *
     * @param DeleteDcdnKvRequest $request
     *
     * @return DeleteDcdnKvResponse
     */
    public function deleteDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnKvWithOptions($request, $runtime);
    }

    /**
     * Deletes a namespace that belongs to your account.
     *
     * @param Request - DeleteDcdnKvNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnKvNamespaceResponse
     *
     * @param DeleteDcdnKvNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDcdnKvNamespaceResponse
     */
    public function deleteDcdnKvNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDcdnKvNamespace',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a namespace that belongs to your account.
     *
     * @param Request - DeleteDcdnKvNamespaceRequest
     *
     * @returns DeleteDcdnKvNamespaceResponse
     *
     * @param DeleteDcdnKvNamespaceRequest $request
     *
     * @return DeleteDcdnKvNamespaceResponse
     */
    public function deleteDcdnKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *
     * @remarks
     * >  You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteDcdnRealTimeLogProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnRealTimeLogProjectResponse
     *
     * @param DeleteDcdnRealTimeLogProjectRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteDcdnRealTimeLogProjectResponse
     */
    public function deleteDcdnRealTimeLogProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDcdnRealTimeLogProject',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnRealTimeLogProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *
     * @remarks
     * >  You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteDcdnRealTimeLogProjectRequest
     *
     * @returns DeleteDcdnRealTimeLogProjectResponse
     *
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
     * Deletes configurations of a domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DeleteDcdnSpecificConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnSpecificConfigResponse
     *
     * @param DeleteDcdnSpecificConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDcdnSpecificConfigResponse
     */
    public function deleteDcdnSpecificConfigWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnSpecificConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnSpecificConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes configurations of a domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DeleteDcdnSpecificConfigRequest
     *
     * @returns DeleteDcdnSpecificConfigResponse
     *
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
     * Deletes the configurations of an accelerated domain name in the canary release environment.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DeleteDcdnSpecificStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnSpecificStagingConfigResponse
     *
     * @param DeleteDcdnSpecificStagingConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteDcdnSpecificStagingConfigResponse
     */
    public function deleteDcdnSpecificStagingConfigWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnSpecificStagingConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnSpecificStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configurations of an accelerated domain name in the canary release environment.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DeleteDcdnSpecificStagingConfigRequest
     *
     * @returns DeleteDcdnSpecificStagingConfigResponse
     *
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
     * Deletes all custom operations reports.
     *
     * @remarks
     * > You can call this operation up to 3 times per second per account.
     *
     * @param Request - DeleteDcdnSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnSubTaskResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDcdnSubTaskResponse
     */
    public function deleteDcdnSubTaskWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DeleteDcdnSubTask',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes all custom operations reports.
     *
     * @remarks
     * > You can call this operation up to 3 times per second per account.
     *
     * @returns DeleteDcdnSubTaskResponse
     *
     * @return DeleteDcdnSubTaskResponse
     */
    public function deleteDcdnSubTask()
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnSubTaskWithOptions($runtime);
    }

    /**
     * Deletes feature configurations by user.
     *
     * @param Request - DeleteDcdnUserConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnUserConfigResponse
     *
     * @param DeleteDcdnUserConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDcdnUserConfigResponse
     */
    public function deleteDcdnUserConfigWithOptions($request, $runtime)
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
            'action' => 'DeleteDcdnUserConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes feature configurations by user.
     *
     * @param Request - DeleteDcdnUserConfigRequest
     *
     * @returns DeleteDcdnUserConfigResponse
     *
     * @param DeleteDcdnUserConfigRequest $request
     *
     * @return DeleteDcdnUserConfigResponse
     */
    public function deleteDcdnUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnUserConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom WAF rule group.
     *
     * @param Request - DeleteDcdnWafGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnWafGroupResponse
     *
     * @param DeleteDcdnWafGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDcdnWafGroupResponse
     */
    public function deleteDcdnWafGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDcdnWafGroup',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnWafGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom WAF rule group.
     *
     * @param Request - DeleteDcdnWafGroupRequest
     *
     * @returns DeleteDcdnWafGroupResponse
     *
     * @param DeleteDcdnWafGroupRequest $request
     *
     * @return DeleteDcdnWafGroupResponse
     */
    public function deleteDcdnWafGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDcdnWafGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a protection policy.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - DeleteDcdnWafPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDcdnWafPolicyResponse
     *
     * @param DeleteDcdnWafPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDcdnWafPolicyResponse
     */
    public function deleteDcdnWafPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDcdnWafPolicy',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a protection policy.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - DeleteDcdnWafPolicyRequest
     *
     * @returns DeleteDcdnWafPolicyResponse
     *
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
     * Deletes a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteRoutineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineResponse
     *
     * @param DeleteRoutineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRoutineResponse
     */
    public function deleteRoutineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutine',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteRoutineRequest
     *
     * @returns DeleteRoutineResponse
     *
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
     * Deletes the code of the specified version from a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteRoutineCodeRevisionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineCodeRevisionResponse
     *
     * @param DeleteRoutineCodeRevisionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteRoutineCodeRevisionResponse
     */
    public function deleteRoutineCodeRevisionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->selectCodeRevision) {
            @$body['SelectCodeRevision'] = $request->selectCodeRevision;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutineCodeRevision',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoutineCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the code of the specified version from a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteRoutineCodeRevisionRequest
     *
     * @returns DeleteRoutineCodeRevisionResponse
     *
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
     * Deletes canary release environments from a routine.
     *
     * @remarks
     * >
     * *   This operation deletes only custom preset canary release environments. You cannot delete production or staging environments.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param tmpReq - DeleteRoutineConfEnvsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineConfEnvsResponse
     *
     * @param DeleteRoutineConfEnvsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRoutineConfEnvsResponse
     */
    public function deleteRoutineConfEnvsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteRoutineConfEnvsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->envs) {
            $request->envsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->envs, 'Envs', 'json');
        }

        $body = [];
        if (null !== $request->envsShrink) {
            @$body['Envs'] = $request->envsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutineConfEnvs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoutineConfEnvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes canary release environments from a routine.
     *
     * @remarks
     * >
     * *   This operation deletes only custom preset canary release environments. You cannot delete production or staging environments.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DeleteRoutineConfEnvsRequest
     *
     * @returns DeleteRoutineConfEnvsResponse
     *
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
     * A客户定制查询域名采样率.
     *
     * @param Request - DescribeCustomDomainSampleRateRequest
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
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
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
            'action' => 'DescribeCustomDomainSampleRate',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
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
     * @param Request - DescribeCustomDomainSampleRateRequest
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
     * Queries precise access control rules.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnAclFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnAclFieldsResponse
     *
     * @param DescribeDcdnAclFieldsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnAclFieldsResponse
     */
    public function describeDcdnAclFieldsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnAclFields',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnAclFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries precise access control rules.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnAclFieldsRequest
     *
     * @returns DescribeDcdnAclFieldsResponse
     *
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
     * Queries bandwidth data for Border Gateway Protocol (BGP) accelerated domain names. Data is collected every 5 minutes.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both of them empty.
     * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     * *   You can query data in the last 90 days.
     * *   The maximum time range from the start time to the end time is 31 days. The start time is specified by the StartTime parameter and the end time is specified by the EndTime parameter.
     * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     * *   You can call this operation up to five times per second per account.
     *
     * @param Request - DescribeDcdnBgpBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnBgpBpsDataResponse
     *
     * @param DescribeDcdnBgpBpsDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnBgpBpsDataResponse
     */
    public function describeDcdnBgpBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceName) {
            @$query['DeviceName'] = $request->deviceName;
        }

        if (null !== $request->devicePort) {
            @$query['DevicePort'] = $request->devicePort;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnBgpBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnBgpBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth data for Border Gateway Protocol (BGP) accelerated domain names. Data is collected every 5 minutes.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both of them empty.
     * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     * *   You can query data in the last 90 days.
     * *   The maximum time range from the start time to the end time is 31 days. The start time is specified by the StartTime parameter and the end time is specified by the EndTime parameter.
     * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     * *   You can call this operation up to five times per second per account.
     *
     * @param Request - DescribeDcdnBgpBpsDataRequest
     *
     * @returns DescribeDcdnBgpBpsDataResponse
     *
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
     * Queries traffic data for BGP accelerated domain names. Data is collected every 5 minutes.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both parameters empty.
     * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     * *   You can query data in the last 90 days.
     * *   The maximum time range that you can specify is 31 days. StartTime specifies the start time and EndTime specifies the end time of the time range.
     * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     * *   You can call this operation up to five times per second per account.
     *
     * @param Request - DescribeDcdnBgpTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnBgpTrafficDataResponse
     *
     * @param DescribeDcdnBgpTrafficDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnBgpTrafficDataResponse
     */
    public function describeDcdnBgpTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnBgpTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnBgpTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries traffic data for BGP accelerated domain names. Data is collected every 5 minutes.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range. You must set both parameters or leave both parameters empty.
     * *   If you specify multiple Internet service providers (ISPs), the data for the ISPs is aggregated.
     * *   You can query data in the last 90 days.
     * *   The maximum time range that you can specify is 31 days. StartTime specifies the start time and EndTime specifies the end time of the time range.
     * *   If the time range from the start time to the end time is 72 hours or shorter, you can specify the interval as 5 minutes. If the time range is longer than 72 hours, you must specify the interval as 1 hour.
     * *   You can call this operation up to five times per second per account.
     *
     * @param Request - DescribeDcdnBgpTrafficDataRequest
     *
     * @returns DescribeDcdnBgpTrafficDataResponse
     *
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
     * Queries countries and regions that can be added to the blacklist.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnBlockedRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnBlockedRegionsResponse
     *
     * @param DescribeDcdnBlockedRegionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnBlockedRegionsResponse
     */
    public function describeDcdnBlockedRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnBlockedRegions',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnBlockedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries countries and regions that can be added to the blacklist.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnBlockedRegionsRequest
     *
     * @returns DescribeDcdnBlockedRegionsResponse
     *
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
     * Queries details about a certificate.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnCertificateDetailResponse
     *
     * @param DescribeDcdnCertificateDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnCertificateDetailResponse
     */
    public function describeDcdnCertificateDetailWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnCertificateDetail',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about a certificate.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnCertificateDetailRequest
     *
     * @returns DescribeDcdnCertificateDetailResponse
     *
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
     * Queries the certificates of one or more accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @deprecated openAPI DescribeDcdnCertificateList is deprecated, please use dcdn::2018-01-15::DescribeDcdnSSLCertificateList instead
     *
     * @param Request - DescribeDcdnCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnCertificateListResponse
     *
     * @param DescribeDcdnCertificateListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnCertificateListResponse
     */
    public function describeDcdnCertificateListWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnCertificateList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries the certificates of one or more accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @deprecated openAPI DescribeDcdnCertificateList is deprecated, please use dcdn::2018-01-15::DescribeDcdnSSLCertificateList instead
     *
     * @param Request - DescribeDcdnCertificateListRequest
     *
     * @returns DescribeDcdnCertificateListResponse
     *
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
     * Queries the status of DCDN DDoS mitigation.
     *
     * @param Request - DescribeDcdnDdosServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDdosServiceResponse
     *
     * @param DescribeDcdnDdosServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnDdosServiceResponse
     */
    public function describeDcdnDdosServiceWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDdosService',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDdosServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of DCDN DDoS mitigation.
     *
     * @param Request - DescribeDcdnDdosServiceRequest
     *
     * @returns DescribeDcdnDdosServiceResponse
     *
     * @param DescribeDcdnDdosServiceRequest $request
     *
     * @return DescribeDcdnDdosServiceResponse
     */
    public function describeDcdnDdosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDdosServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of DCDN DDoS versions.
     *
     * @param Request - DescribeDcdnDdosSpecInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDdosSpecInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnDdosSpecInfoResponse
     */
    public function describeDcdnDdosSpecInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnDdosSpecInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDdosSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of DCDN DDoS versions.
     *
     * @returns DescribeDcdnDdosSpecInfoResponse
     *
     * @return DescribeDcdnDdosSpecInfoResponse
     */
    public function describeDcdnDdosSpecInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDdosSpecInfoWithOptions($runtime);
    }

    /**
     * Queries the domain names that are deleted from your Alibaba Cloud account.
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnDeletedDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDeletedDomainsResponse
     *
     * @param DescribeDcdnDeletedDomainsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnDeletedDomainsResponse
     */
    public function describeDcdnDeletedDomainsWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDeletedDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDeletedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain names that are deleted from your Alibaba Cloud account.
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnDeletedDomainsRequest
     *
     * @returns DescribeDcdnDeletedDomainsResponse
     *
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
     * Queries all tracking tasks of operations reports.
     *
     * @remarks
     * >You can call this operation up to three times per second.
     *
     * @param Request - DescribeDcdnDeliverListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDeliverListResponse
     *
     * @param DescribeDcdnDeliverListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnDeliverListResponse
     */
    public function describeDcdnDeliverListWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDeliverList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDeliverListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all tracking tasks of operations reports.
     *
     * @remarks
     * >You can call this operation up to three times per second.
     *
     * @param Request - DescribeDcdnDeliverListRequest
     *
     * @returns DescribeDcdnDeliverListResponse
     *
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
     * Queries the monitoring data of network bandwidth for one or more accelerated domain names. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainBpsDataResponse
     *
     * @param DescribeDcdnDomainBpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainBpsDataResponse
     */
    public function describeDcdnDomainBpsDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of network bandwidth for one or more accelerated domain names. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainBpsDataRequest
     *
     * @returns DescribeDcdnDomainBpsDataResponse
     *
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
     * Queries bandwidth data of accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set **StartTime** or **EndTime**, the request returns the data collected in the last 24 hours. If you set both **StartTime** and **EndTime**, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainBpsDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainBpsDataByLayerResponse
     *
     * @param DescribeDcdnDomainBpsDataByLayerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainBpsDataByLayerResponse
     */
    public function describeDcdnDomainBpsDataByLayerWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainBpsDataByLayer',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainBpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth data of accelerated domain names.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set **StartTime** or **EndTime**, the request returns the data collected in the last 24 hours. If you set both **StartTime** and **EndTime**, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainBpsDataByLayerRequest
     *
     * @returns DescribeDcdnDomainBpsDataByLayerResponse
     *
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
     * Queries accelerated domain names by SSL certificate.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainByCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainByCertificateResponse
     *
     * @param DescribeDcdnDomainByCertificateRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainByCertificateResponse
     */
    public function describeDcdnDomainByCertificateWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainByCertificate',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainByCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries accelerated domain names by SSL certificate.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainByCertificateRequest
     *
     * @returns DescribeDcdnDomainByCertificateResponse
     *
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
     * Queries logs of rate limiting.
     *
     * @remarks
     * >
     * *   If you do not configure the StartTime or EndTime parameter, data collected over the last 24 hours is queried. If you configure both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     * *   You can query data collected over the last 30 days.
     * *   You can call the RefreshObjectCaches operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnDomainCcActivityLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainCcActivityLogResponse
     *
     * @param DescribeDcdnDomainCcActivityLogRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainCcActivityLogResponse
     */
    public function describeDcdnDomainCcActivityLogWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainCcActivityLog',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainCcActivityLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries logs of rate limiting.
     *
     * @remarks
     * >
     * *   If you do not configure the StartTime or EndTime parameter, data collected over the last 24 hours is queried. If you configure both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     * *   You can query data collected over the last 30 days.
     * *   You can call the RefreshObjectCaches operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnDomainCcActivityLogRequest
     *
     * @returns DescribeDcdnDomainCcActivityLogResponse
     *
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
     * Queries the certificate information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainCertificateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainCertificateInfoResponse
     *
     * @param DescribeDcdnDomainCertificateInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainCertificateInfoResponse
     */
    public function describeDcdnDomainCertificateInfoWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainCertificateInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificate information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainCertificateInfoRequest
     *
     * @returns DescribeDcdnDomainCertificateInfoResponse
     *
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
     * Checks whether CNAME records are configured for one or more accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 80 times per second per account.
     *
     * @param Request - DescribeDcdnDomainCnameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainCnameResponse
     *
     * @param DescribeDcdnDomainCnameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnDomainCnameResponse
     */
    public function describeDcdnDomainCnameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainCname',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether CNAME records are configured for one or more accelerated domain names.
     *
     * @remarks
     * > You can call this operation up to 80 times per second per account.
     *
     * @param Request - DescribeDcdnDomainCnameRequest
     *
     * @returns DescribeDcdnDomainCnameResponse
     *
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
     * Queries the configurations of an accelerated domain name.
     *
     * @remarks
     * > *   You can query the configurations of one or more features in a request.
     * > *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainConfigsResponse
     *
     * @param DescribeDcdnDomainConfigsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainConfigsResponse
     */
    public function describeDcdnDomainConfigsWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an accelerated domain name.
     *
     * @remarks
     * > *   You can query the configurations of one or more features in a request.
     * > *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnDomainConfigsRequest
     *
     * @returns DescribeDcdnDomainConfigsResponse
     *
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
     * Queries the basic configuration information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainDetailResponse
     *
     * @param DescribeDcdnDomainDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainDetailResponse
     */
    public function describeDcdnDomainDetailWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainDetail',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic configuration information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnDomainDetailRequest
     *
     * @returns DescribeDcdnDomainDetailResponse
     *
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
     * Queries the request hit ratios of one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * #
     * *   You can call this operation up to 100 times per second per account.
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table. |Time granularity |Maximum time range per query |Historical data available |Data delay | -------------- | -------------- | ------ |5 minutes |3 days |93 days |15 minutes |1 hour |31 days |186 days |4 hours |1 day |366 days |366 days |04:00 on the next day
     *
     * @param Request - DescribeDcdnDomainHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainHitRateDataResponse
     *
     * @param DescribeDcdnDomainHitRateDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainHitRateDataResponse
     */
    public function describeDcdnDomainHitRateDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainHitRateData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request hit ratios of one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @remarks
     * #
     * *   You can call this operation up to 100 times per second per account.
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table. |Time granularity |Maximum time range per query |Historical data available |Data delay | -------------- | -------------- | ------ |5 minutes |3 days |93 days |15 minutes |1 hour |31 days |186 days |4 hours |1 day |366 days |366 days |04:00 on the next day
     *
     * @param Request - DescribeDcdnDomainHitRateDataRequest
     *
     * @returns DescribeDcdnDomainHitRateDataResponse
     *
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
     * Queries the total number and proportions of HTTP status codes returned from one or more accelerated domain names. Data is collected every 5 minutes. You can query data in the last 90 days.
     *
     * @remarks
     * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * * You can call this operation up to 100 times per second per account.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainHttpCodeDataResponse
     *
     * @param DescribeDcdnDomainHttpCodeDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDcdnDomainHttpCodeDataResponse
     */
    public function describeDcdnDomainHttpCodeDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainHttpCodeData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number and proportions of HTTP status codes returned from one or more accelerated domain names. Data is collected every 5 minutes. You can query data in the last 90 days.
     *
     * @remarks
     * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * * You can call this operation up to 100 times per second per account.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainHttpCodeDataRequest
     *
     * @returns DescribeDcdnDomainHttpCodeDataResponse
     *
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
     * Queries the distribution of HTTP status codes by protocol.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * You cannot query the distribution of HTTP status codes by IP protocol.
     * * If you do not specify the **StartTime** or **EndTime** parameter, the data that is collected within the last 24 hours is collected. If you specify both the **StartTime** and **EndTime** parameters, the data that is collected within the time range that you specify is collected.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainHttpCodeDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainHttpCodeDataByLayerResponse
     *
     * @param DescribeDcdnDomainHttpCodeDataByLayerRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnDomainHttpCodeDataByLayerResponse
     */
    public function describeDcdnDomainHttpCodeDataByLayerWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainHttpCodeDataByLayer',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainHttpCodeDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the distribution of HTTP status codes by protocol.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * You cannot query the distribution of HTTP status codes by IP protocol.
     * * If you do not specify the **StartTime** or **EndTime** parameter, the data that is collected within the last 24 hours is collected. If you specify both the **StartTime** and **EndTime** parameters, the data that is collected within the time range that you specify is collected.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainHttpCodeDataByLayerRequest
     *
     * @returns DescribeDcdnDomainHttpCodeDataByLayerResponse
     *
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
     * Queries bandwidth of accelerated domain names for which Layer 4 acceleration is enabled. You can query the data that is collected over the last 90 days.
     *
     * @remarks
     * >
     * *   The bandwidth is measured in bit/s.
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainIpaBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainIpaBpsDataResponse
     *
     * @param DescribeDcdnDomainIpaBpsDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnDomainIpaBpsDataResponse
     */
    public function describeDcdnDomainIpaBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fixTimeGap) {
            @$query['FixTimeGap'] = $request->fixTimeGap;
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
            'action' => 'DescribeDcdnDomainIpaBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainIpaBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth of accelerated domain names for which Layer 4 acceleration is enabled. You can query the data that is collected over the last 90 days.
     *
     * @remarks
     * >
     * *   The bandwidth is measured in bit/s.
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainIpaBpsDataRequest
     *
     * @returns DescribeDcdnDomainIpaBpsDataResponse
     *
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
     * Queries the number of IPA user connections.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per user.
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * *   The minimum time granularity at which the data is queried is 5 minutes. The maximum time range for a single query is 31 days. The period within which historical data is available is 366 days. The data latency is no more than 10 minutes.
     *
     * @param Request - DescribeDcdnDomainIpaConnDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainIpaConnDataResponse
     *
     * @param DescribeDcdnDomainIpaConnDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainIpaConnDataResponse
     */
    public function describeDcdnDomainIpaConnDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->splitBy) {
            @$query['SplitBy'] = $request->splitBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainIpaConnData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainIpaConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of IPA user connections.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per user.
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * *   The minimum time granularity at which the data is queried is 5 minutes. The maximum time range for a single query is 31 days. The period within which historical data is available is 366 days. The data latency is no more than 10 minutes.
     *
     * @param Request - DescribeDcdnDomainIpaConnDataRequest
     *
     * @returns DescribeDcdnDomainIpaConnDataResponse
     *
     * @param DescribeDcdnDomainIpaConnDataRequest $request
     *
     * @return DescribeDcdnDomainIpaConnDataResponse
     */
    public function describeDcdnDomainIpaConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainIpaConnDataWithOptions($request, $runtime);
    }

    /**
     * Queries traffic of one or more accelerated domain names for which Layer 4 acceleration is enabled. You can query the data that is collected over the last 90 days.
     *
     * @remarks
     * >
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * *   Unit: bytes.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainIpaTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainIpaTrafficDataResponse
     *
     * @param DescribeDcdnDomainIpaTrafficDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainIpaTrafficDataResponse
     */
    public function describeDcdnDomainIpaTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fixTimeGap) {
            @$query['FixTimeGap'] = $request->fixTimeGap;
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
            'action' => 'DescribeDcdnDomainIpaTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainIpaTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries traffic of one or more accelerated domain names for which Layer 4 acceleration is enabled. You can query the data that is collected over the last 90 days.
     *
     * @remarks
     * >
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * *   Unit: bytes.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainIpaTrafficDataRequest
     *
     * @returns DescribeDcdnDomainIpaTrafficDataResponse
     *
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
     * Queries the proportions of data usage of different Internet service providers (ISPs). You can query data within the last 90 days.
     *
     * @remarks
     * >
     * *   You can call this operation up to 100 times per second per account.
     * *   If **StartTime** is set but **EndTime** is not set, the data within the hour that starts from **StartTime** is queried.
     * *   If **EndTime** is set but **StartTime** is not set, the data within the last hour that precedes **EndTime** is queried.
     * *   You can query data of a domain name or all domain names that belong to your account.
     * *   You can view data that is collected over the last seven days. The interval at which data is queried is based on the time range specified by **StartTime** and **EndTime**.
     *     *   **If the time range is shorter than or equal to one hour**, data is queried every minute.
     *     *   **If the time range is longer than 1 hour but shorter than or equal to three days**, data is queried every five minutes.
     *     *   **If the time range is longer than three days but shorter than or equal to seven days**, data is queried every hour.
     *
     * @param Request - DescribeDcdnDomainIspDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainIspDataResponse
     *
     * @param DescribeDcdnDomainIspDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainIspDataResponse
     */
    public function describeDcdnDomainIspDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainIspData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainIspDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the proportions of data usage of different Internet service providers (ISPs). You can query data within the last 90 days.
     *
     * @remarks
     * >
     * *   You can call this operation up to 100 times per second per account.
     * *   If **StartTime** is set but **EndTime** is not set, the data within the hour that starts from **StartTime** is queried.
     * *   If **EndTime** is set but **StartTime** is not set, the data within the last hour that precedes **EndTime** is queried.
     * *   You can query data of a domain name or all domain names that belong to your account.
     * *   You can view data that is collected over the last seven days. The interval at which data is queried is based on the time range specified by **StartTime** and **EndTime**.
     *     *   **If the time range is shorter than or equal to one hour**, data is queried every minute.
     *     *   **If the time range is longer than 1 hour but shorter than or equal to three days**, data is queried every five minutes.
     *     *   **If the time range is longer than three days but shorter than or equal to seven days**, data is queried every hour.
     *
     * @param Request - DescribeDcdnDomainIspDataRequest
     *
     * @returns DescribeDcdnDomainIspDataResponse
     *
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
     * Queries the address where you can download the log data of a domain name.
     *
     * @remarks
     * >
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.********
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainLogResponse
     *
     * @param DescribeDcdnDomainLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnDomainLogResponse
     */
    public function describeDcdnDomainLogWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainLog',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the address where you can download the log data of a domain name.
     *
     * @remarks
     * >
     * *   If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.********
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainLogRequest
     *
     * @returns DescribeDcdnDomainLogResponse
     *
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
     * DescribeDcdnDomainLogExTtl.
     *
     * @param Request - DescribeDcdnDomainLogExTtlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainLogExTtlResponse
     *
     * @param DescribeDcdnDomainLogExTtlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnDomainLogExTtlResponse
     */
    public function describeDcdnDomainLogExTtlWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainLogExTtl',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainLogExTtlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeDcdnDomainLogExTtl.
     *
     * @param Request - DescribeDcdnDomainLogExTtlRequest
     *
     * @returns DescribeDcdnDomainLogExTtlResponse
     *
     * @param DescribeDcdnDomainLogExTtlRequest $request
     *
     * @return DescribeDcdnDomainLogExTtlResponse
     */
    public function describeDcdnDomainLogExTtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainLogExTtlWithOptions($request, $runtime);
    }

    /**
     * Queries the billable items of accelerated domain names. The data is collected at least every 5 minutes. The billable items do not include non-request items.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, data within the last 10 minutes is queried. You can set both the StartTime and EndTime parameters to specify a time range.
     * *   You can specify one or more accelerated domain names. Separate domain names with commas (,).
     * *   You can query data within the last 90 days.
     * *   The time range cannot exceed 1 hour.
     *
     * @param Request - DescribeDcdnDomainMultiUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainMultiUsageDataResponse
     *
     * @param DescribeDcdnDomainMultiUsageDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainMultiUsageDataResponse
     */
    public function describeDcdnDomainMultiUsageDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainMultiUsageData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainMultiUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the billable items of accelerated domain names. The data is collected at least every 5 minutes. The billable items do not include non-request items.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, data within the last 10 minutes is queried. You can set both the StartTime and EndTime parameters to specify a time range.
     * *   You can specify one or more accelerated domain names. Separate domain names with commas (,).
     * *   You can query data within the last 90 days.
     * *   The time range cannot exceed 1 hour.
     *
     * @param Request - DescribeDcdnDomainMultiUsageDataRequest
     *
     * @returns DescribeDcdnDomainMultiUsageDataResponse
     *
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
     * Queries the origin bandwidth data for one or more accelerated domain names. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainOriginBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainOriginBpsDataResponse
     *
     * @param DescribeDcdnDomainOriginBpsDataRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainOriginBpsDataResponse
     */
    public function describeDcdnDomainOriginBpsDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainOriginBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainOriginBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the origin bandwidth data for one or more accelerated domain names. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainOriginBpsDataRequest
     *
     * @returns DescribeDcdnDomainOriginBpsDataResponse
     *
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
     * Queries the back-to-origin traffic of one or more accelerated domain names.
     *
     * @remarks
     * - You can call this operation up to 100 times per second per account.
     * - If you do not set the **StartTime** or **EndTime** parameters, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     * | 5 minutes | 3 days | 93 days | 15 minutes |
     * | 1 hour | 31 days | 186 days | 4 hours |
     * | 1 day | 366 days | 366 days | 04:00 on the next day |
     *
     * @param Request - DescribeDcdnDomainOriginTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainOriginTrafficDataResponse
     *
     * @param DescribeDcdnDomainOriginTrafficDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDcdnDomainOriginTrafficDataResponse
     */
    public function describeDcdnDomainOriginTrafficDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainOriginTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainOriginTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the back-to-origin traffic of one or more accelerated domain names.
     *
     * @remarks
     * - You can call this operation up to 100 times per second per account.
     * - If you do not set the **StartTime** or **EndTime** parameters, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter varies with the maximum time range per query. The following table describes the time period within which historical data is available and the data delay.
     * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     * | ---------------- | ---------------------------- | ------------------------- | ---------- |
     * | 5 minutes | 3 days | 93 days | 15 minutes |
     * | 1 hour | 31 days | 186 days | 4 hours |
     * | 1 day | 366 days | 366 days | 04:00 on the next day |
     *
     * @param Request - DescribeDcdnDomainOriginTrafficDataRequest
     *
     * @returns DescribeDcdnDomainOriginTrafficDataResponse
     *
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
     * Queries the protocol type of IP Application Accelerator (IPA).
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnDomainPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainPropertyResponse
     *
     * @param DescribeDcdnDomainPropertyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnDomainPropertyResponse
     */
    public function describeDcdnDomainPropertyWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainProperty',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the protocol type of IP Application Accelerator (IPA).
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnDomainPropertyRequest
     *
     * @returns DescribeDcdnDomainPropertyResponse
     *
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
     * Queries page view (PV) data of an accelerated domain name. Data can be collected at minimum intervals of one hour.
     *
     * @param Request - DescribeDcdnDomainPvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainPvDataResponse
     *
     * @param DescribeDcdnDomainPvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainPvDataResponse
     */
    public function describeDcdnDomainPvDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainPvData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries page view (PV) data of an accelerated domain name. Data can be collected at minimum intervals of one hour.
     *
     * @param Request - DescribeDcdnDomainPvDataRequest
     *
     * @returns DescribeDcdnDomainPvDataResponse
     *
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
     * Queries the number of requests to an accelerated domain name per second. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainQpsDataResponse
     *
     * @param DescribeDcdnDomainQpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnDomainQpsDataResponse
     */
    public function describeDcdnDomainQpsDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainQpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of requests to an accelerated domain name per second. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainQpsDataRequest
     *
     * @returns DescribeDcdnDomainQpsDataResponse
     *
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
     * The number of queries per second in the Chinese mainland.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainQpsDataByLayerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainQpsDataByLayerResponse
     *
     * @param DescribeDcdnDomainQpsDataByLayerRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDcdnDomainQpsDataByLayerResponse
     */
    public function describeDcdnDomainQpsDataByLayerWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainQpsDataByLayer',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainQpsDataByLayerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of queries per second in the Chinese mainland.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainQpsDataByLayerRequest
     *
     * @returns DescribeDcdnDomainQpsDataByLayerResponse
     *
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
     * Queries the real-time network bandwidth of a domain name.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify **StartTime** or **EndTime**, the request returns the data collected in the last hour by default. If you specify both parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|3 to 4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeBpsDataResponse
     *
     * @param DescribeDcdnDomainRealTimeBpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainRealTimeBpsDataResponse
     */
    public function describeDcdnDomainRealTimeBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainRealTimeBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time network bandwidth of a domain name.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify **StartTime** or **EndTime**, the request returns the data collected in the last hour by default. If you specify both parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|3 to 4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeBpsDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeBpsDataResponse
     *
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
     * Queries byte hit ratios at a time granularity of 1 minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     * |----|------|-----|--------|
     * | 1 minute | 1 hour | 7 days | 5 minutes |
     * | 5 minutes | 3 days | 93 days | 15 minutes |
     * | 1 hour | 31 days | 186 days | 4 hours |
     *
     * @param Request - DescribeDcdnDomainRealTimeByteHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeByteHitRateDataResponse
     *
     * @param DescribeDcdnDomainRealTimeByteHitRateDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeDcdnDomainRealTimeByteHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeByteHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainRealTimeByteHitRateData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeByteHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries byte hit ratios at a time granularity of 1 minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     * |----|------|-----|--------|
     * | 1 minute | 1 hour | 7 days | 5 minutes |
     * | 5 minutes | 3 days | 93 days | 15 minutes |
     * | 1 hour | 31 days | 186 days | 4 hours |
     *
     * @param Request - DescribeDcdnDomainRealTimeByteHitRateDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeByteHitRateDataResponse
     *
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
     * Queries traffic usage through each Internet service provider (ISP) and the number of visits in each region. The resolution of the data is one minute. The maximum time range to query for this operation is 10 minutes.
     *
     * @remarks
     * >
     * > - You can call this operation up to 10 times per second per account.
     * > - This operation is available only to users whose daily peak bandwidth value is higher than 1 Gbit/s. If you meet this requirement, you can [submit a ticket](https://smartservice.console.aliyun.com/service/create-ticket-intl) to apply for permissions to use this operation.
     *
     * @param Request - DescribeDcdnDomainRealTimeDetailDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeDetailDataResponse
     *
     * @param DescribeDcdnDomainRealTimeDetailDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDcdnDomainRealTimeDetailDataResponse
     */
    public function describeDcdnDomainRealTimeDetailDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainRealTimeDetailData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries traffic usage through each Internet service provider (ISP) and the number of visits in each region. The resolution of the data is one minute. The maximum time range to query for this operation is 10 minutes.
     *
     * @remarks
     * >
     * > - You can call this operation up to 10 times per second per account.
     * > - This operation is available only to users whose daily peak bandwidth value is higher than 1 Gbit/s. If you meet this requirement, you can [submit a ticket](https://smartservice.console.aliyun.com/service/create-ticket-intl) to apply for permissions to use this operation.
     *
     * @param Request - DescribeDcdnDomainRealTimeDetailDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeDetailDataResponse
     *
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
     * Queries the total number and proportions of HTTP status codes returned from one or more accelerated domain names.
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
     * @param Request - DescribeDcdnDomainRealTimeHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeHttpCodeDataResponse
     *
     * @param DescribeDcdnDomainRealTimeHttpCodeDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDcdnDomainRealTimeHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeHttpCodeDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainRealTimeHttpCodeData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the total number and proportions of HTTP status codes returned from one or more accelerated domain names.
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
     * @param Request - DescribeDcdnDomainRealTimeHttpCodeDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeHttpCodeDataResponse
     *
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
     * The number of QPS for one or more accelerated domain names is queried. Data is collected every minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeQpsDataResponse
     *
     * @param DescribeDcdnDomainRealTimeQpsDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnDomainRealTimeQpsDataResponse
     */
    public function describeDcdnDomainRealTimeQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainRealTimeQpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of QPS for one or more accelerated domain names is queried. Data is collected every minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeQpsDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeQpsDataResponse
     *
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
     * Queries the request hit rates with a time granularity of 1 minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per user.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeReqHitRateDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeReqHitRateDataResponse
     *
     * @param DescribeDcdnDomainRealTimeReqHitRateDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDcdnDomainRealTimeReqHitRateDataResponse
     */
    public function describeDcdnDomainRealTimeReqHitRateDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainRealTimeReqHitRateData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeReqHitRateDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request hit rates with a time granularity of 1 minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per user.
     * * The network traffic destined for different domain names may be redirected to the same origin server. Therefore, the byte hit ratios may be inaccurate. The accuracy of query results is based on the actual configurations.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last hour. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity** The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeReqHitRateDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeReqHitRateDataResponse
     *
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
     * Queries the bandwidth data of back-to-origin requests. Data is collected every minute. You can query data collected in the last 7 days.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     * |-----|-----|-----|--------|
     * | 1 minute | 1 hour | 7 days | 5 minutes |
     * | 5 minutes | 3 days | 93 days | 15 minutes | | 1 hour | 31 days | 186 days | 4 hours |
     *
     * @param Request - DescribeDcdnDomainRealTimeSrcBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeSrcBpsDataResponse
     *
     * @param DescribeDcdnDomainRealTimeSrcBpsDataRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDcdnDomainRealTimeSrcBpsDataResponse
     */
    public function describeDcdnDomainRealTimeSrcBpsDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainRealTimeSrcBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeSrcBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth data of back-to-origin requests. Data is collected every minute. You can query data collected in the last 7 days.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * | Time granularity | Maximum time range per query | Historical data available | Data delay |
     * |-----|-----|-----|--------|
     * | 1 minute | 1 hour | 7 days | 5 minutes |
     * | 5 minutes | 3 days | 93 days | 15 minutes | | 1 hour | 31 days | 186 days | 4 hours |
     *
     * @param Request - DescribeDcdnDomainRealTimeSrcBpsDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeSrcBpsDataResponse
     *
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
     * Queries the proportions of HTTP status codes based on back-to-origin statistics with a time granularity of one minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
     *
     * @param DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
     */
    public function describeDcdnDomainRealTimeSrcHttpCodeDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainRealTimeSrcHttpCodeData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the proportions of HTTP status codes based on back-to-origin statistics with a time granularity of one minute.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you specify both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeSrcHttpCodeDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeSrcHttpCodeDataResponse
     *
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
     * Queries the origin traffic monitoring data for an accelerated domain name. Data is collected every minute. You can query data in the last 90 days.
     *
     * @remarks
     * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeSrcTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeSrcTrafficDataResponse
     *
     * @param DescribeDcdnDomainRealTimeSrcTrafficDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeSrcTrafficDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainRealTimeSrcTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeSrcTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the origin traffic monitoring data for an accelerated domain name. Data is collected every minute. You can query data in the last 90 days.
     *
     * @remarks
     * If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeSrcTrafficDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeSrcTrafficDataResponse
     *
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
     * Queries the traffic monitoring data of an accelerated domain name. Data is collected every minute.
     *
     * @remarks
     * You can call this operation up to 50 times per second per user.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRealTimeTrafficDataResponse
     *
     * @param DescribeDcdnDomainRealTimeTrafficDataRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnDomainRealTimeTrafficDataResponse
     */
    public function describeDcdnDomainRealTimeTrafficDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainRealTimeTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRealTimeTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic monitoring data of an accelerated domain name. Data is collected every minute.
     *
     * @remarks
     * You can call this operation up to 50 times per second per user.
     * **Time granularity**
     * The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |1 minute|1 hour|7 days|5 minutes|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     *
     * @param Request - DescribeDcdnDomainRealTimeTrafficDataRequest
     *
     * @returns DescribeDcdnDomainRealTimeTrafficDataResponse
     *
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
     * Queries regional distribution of users. Data is collected every day. You can query data within the last 90 days.
     *
     * @remarks
     * >
     * *   If you do not specify the StartTime and EndTime parameters, the data within the last 24 hours is queried. If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainRegionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainRegionDataResponse
     *
     * @param DescribeDcdnDomainRegionDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnDomainRegionDataResponse
     */
    public function describeDcdnDomainRegionDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainRegionData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries regional distribution of users. Data is collected every day. You can query data within the last 90 days.
     *
     * @remarks
     * >
     * *   If you do not specify the StartTime and EndTime parameters, the data within the last 24 hours is queried. If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnDomainRegionDataRequest
     *
     * @returns DescribeDcdnDomainRegionDataResponse
     *
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
     * Queries the environment configuration in the canary release environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnDomainStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainStagingConfigResponse
     *
     * @param DescribeDcdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainStagingConfigResponse
     */
    public function describeDcdnDomainStagingConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainStagingConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the environment configuration in the canary release environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnDomainStagingConfigRequest
     *
     * @returns DescribeDcdnDomainStagingConfigResponse
     *
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
     * Queries and sorts frequently requested web pages on a specified day. You can query data collected within the last 90 days.
     *
     * @remarks
     *   If you do not set the StartTime parameter, the data on the previous day is queried.
     * *   You can specify only one domain name.
     *
     * @param Request - DescribeDcdnDomainTopReferVisitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainTopReferVisitResponse
     *
     * @param DescribeDcdnDomainTopReferVisitRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnDomainTopReferVisitResponse
     */
    public function describeDcdnDomainTopReferVisitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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
            'action' => 'DescribeDcdnDomainTopReferVisit',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainTopReferVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries and sorts frequently requested web pages on a specified day. You can query data collected within the last 90 days.
     *
     * @remarks
     *   If you do not set the StartTime parameter, the data on the previous day is queried.
     * *   You can specify only one domain name.
     *
     * @param Request - DescribeDcdnDomainTopReferVisitRequest
     *
     * @returns DescribeDcdnDomainTopReferVisitResponse
     *
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
     * Queries frequently requested URLs on a day.
     *
     * @remarks
     * > You can query data in the last seven days.
     *
     * @param Request - DescribeDcdnDomainTopUrlVisitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainTopUrlVisitResponse
     *
     * @param DescribeDcdnDomainTopUrlVisitRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainTopUrlVisitResponse
     */
    public function describeDcdnDomainTopUrlVisitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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
            'action' => 'DescribeDcdnDomainTopUrlVisit',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainTopUrlVisitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries frequently requested URLs on a day.
     *
     * @remarks
     * > You can query data in the last seven days.
     *
     * @param Request - DescribeDcdnDomainTopUrlVisitRequest
     *
     * @returns DescribeDcdnDomainTopUrlVisitResponse
     *
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
     * Queries the network traffic of accelerated domain names. You can query data collected in the last 90 days.
     *
     * @remarks
     * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * * You can call this operation up to 100 times per second per account.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainTrafficDataResponse
     *
     * @param DescribeDcdnDomainTrafficDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnDomainTrafficDataResponse
     */
    public function describeDcdnDomainTrafficDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the network traffic of accelerated domain names. You can query data collected in the last 90 days.
     *
     * @remarks
     * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * * You can call this operation up to 100 times per second per account.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainTrafficDataRequest
     *
     * @returns DescribeDcdnDomainTrafficDataResponse
     *
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
     * Queries resource usage about domain names in a billable region.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * Usage data includes traffic (measured in bytes), bandwidth values (measured in bit/s), and the number of requests.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainUsageDataResponse
     *
     * @param DescribeDcdnDomainUsageDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnDomainUsageDataResponse
     */
    public function describeDcdnDomainUsageDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainUsageData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource usage about domain names in a billable region.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account.
     * * Usage data includes traffic (measured in bytes), bandwidth values (measured in bit/s), and the number of requests.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainUsageDataRequest
     *
     * @returns DescribeDcdnDomainUsageDataResponse
     *
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
     * Queries the number of unique visitors (UVs) to an accelerated domain name. Data is collected every hour. You can query data within the last 90 days.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   You can specify only one accelerated domain name or all the accelerated domain names that belong to your Alibaba Cloud account.
     *
     * @param Request - DescribeDcdnDomainUvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainUvDataResponse
     *
     * @param DescribeDcdnDomainUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnDomainUvDataResponse
     */
    public function describeDcdnDomainUvDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainUvData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of unique visitors (UVs) to an accelerated domain name. Data is collected every hour. You can query data within the last 90 days.
     *
     * @remarks
     *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   You can specify only one accelerated domain name or all the accelerated domain names that belong to your Alibaba Cloud account.
     *
     * @param Request - DescribeDcdnDomainUvDataRequest
     *
     * @returns DescribeDcdnDomainUvDataResponse
     *
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
     * Queries bandwidth of one or more accelerated domain names for which WebSocket is enabled. You can query the data that is collected over the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainWebsocketBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainWebsocketBpsDataResponse
     *
     * @param DescribeDcdnDomainWebsocketBpsDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDcdnDomainWebsocketBpsDataResponse
     */
    public function describeDcdnDomainWebsocketBpsDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainWebsocketBpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainWebsocketBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries bandwidth of one or more accelerated domain names for which WebSocket is enabled. You can query the data that is collected over the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainWebsocketBpsDataRequest
     *
     * @returns DescribeDcdnDomainWebsocketBpsDataResponse
     *
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
     * The total number and proportions of HTTP status codes returned from one or more accelerated domain names for which WebSocket is enabled are queried. Data can be collected at minimum intervals of 5 minutes.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainWebsocketHttpCodeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainWebsocketHttpCodeDataResponse
     *
     * @param DescribeDcdnDomainWebsocketHttpCodeDataRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeDcdnDomainWebsocketHttpCodeDataResponse
     */
    public function describeDcdnDomainWebsocketHttpCodeDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainWebsocketHttpCodeData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainWebsocketHttpCodeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The total number and proportions of HTTP status codes returned from one or more accelerated domain names for which WebSocket is enabled are queried. Data can be collected at minimum intervals of 5 minutes.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the time range to query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainWebsocketHttpCodeDataRequest
     *
     * @returns DescribeDcdnDomainWebsocketHttpCodeDataResponse
     *
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
     * Queries the traffic monitoring data for an accelerated domain name with WebSocket enabled. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainWebsocketTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainWebsocketTrafficDataResponse
     *
     * @param DescribeDcdnDomainWebsocketTrafficDataRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDcdnDomainWebsocketTrafficDataResponse
     */
    public function describeDcdnDomainWebsocketTrafficDataWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnDomainWebsocketTrafficData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainWebsocketTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the traffic monitoring data for an accelerated domain name with WebSocket enabled. You can query data in the last 90 days.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     * * If you do not set the **StartTime** or **EndTime** parameter, the request returns the data collected in the last 24 hours. If you set both the **StartTime** and **EndTime** parameters, the request returns the data collected within the specified time range.
     * **Time granularity**
     * The time granularity supported by the Interval parameter, the maximum time period within which historical data is available, and the data delay vary with the maximum time range per query, as described in the following table.
     * |Time granularity|Maximum time range per query|Historical data available|Data delay|
     * |---|---|---|---|
     * |5 minutes|3 days|93 days|15 minutes|
     * |1 hour|31 days|186 days|4 hours|
     * |1 day|366 days|366 days|04:00 on the next day|
     *
     * @param Request - DescribeDcdnDomainWebsocketTrafficDataRequest
     *
     * @returns DescribeDcdnDomainWebsocketTrafficDataResponse
     *
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
     * Queries DCDN-accelerated domain names by origin server.
     *
     * @param Request - DescribeDcdnDomainsBySourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnDomainsBySourceResponse
     *
     * @param DescribeDcdnDomainsBySourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnDomainsBySourceResponse
     */
    public function describeDcdnDomainsBySourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sources) {
            @$query['Sources'] = $request->sources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnDomainsBySource',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnDomainsBySourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries DCDN-accelerated domain names by origin server.
     *
     * @param Request - DescribeDcdnDomainsBySourceRequest
     *
     * @returns DescribeDcdnDomainsBySourceResponse
     *
     * @param DescribeDcdnDomainsBySourceRequest $request
     *
     * @return DescribeDcdnDomainsBySourceResponse
     */
    public function describeDcdnDomainsBySource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnDomainsBySourceWithOptions($request, $runtime);
    }

    /**
     * Queries the number of times that a routine is executed within a specified period of time.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   The minimum time granularity for a query is 1 hour. The maximum time span for a query is 24 hours. The time period within which historical data is available for a query is 366 days.
     *
     * @param Request - DescribeDcdnErUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnErUsageDataResponse
     *
     * @param DescribeDcdnErUsageDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnErUsageDataResponse
     */
    public function describeDcdnErUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->routineID) {
            @$query['RoutineID'] = $request->routineID;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        if (null !== $request->splitBy) {
            @$query['SplitBy'] = $request->splitBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnErUsageData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnErUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of times that a routine is executed within a specified period of time.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   The minimum time granularity for a query is 1 hour. The maximum time span for a query is 24 hours. The time period within which historical data is available for a query is 366 days.
     *
     * @param Request - DescribeDcdnErUsageDataRequest
     *
     * @returns DescribeDcdnErUsageDataResponse
     *
     * @param DescribeDcdnErUsageDataRequest $request
     *
     * @return DescribeDcdnErUsageDataResponse
     */
    public function describeDcdnErUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnErUsageDataWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of blocked IP addresses.
     *
     * @remarks
     * > *   If you specify IP addresses or CIDR blocks, IP addresses that are effective and the corresponding expiration time are returned. If you do not specify IP addresses or CIDR blocks, all effective IP addresses and the corresponding expiration time are returned.
     * > *   The results are written to OSS and returned as OSS URLs. The content in OSS objects is in the format of `IP address-Corresponding expiration time`. The expiration time is in the YYYY-MM-DD hh:mm:ss format.
     * > *   You can share OSS URLs with others. The shared URLs are valid for three days.
     *
     * @param Request - DescribeDcdnFullDomainsBlockIPConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnFullDomainsBlockIPConfigResponse
     *
     * @param DescribeDcdnFullDomainsBlockIPConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDcdnFullDomainsBlockIPConfigResponse
     */
    public function describeDcdnFullDomainsBlockIPConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnFullDomainsBlockIPConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnFullDomainsBlockIPConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of blocked IP addresses.
     *
     * @remarks
     * > *   If you specify IP addresses or CIDR blocks, IP addresses that are effective and the corresponding expiration time are returned. If you do not specify IP addresses or CIDR blocks, all effective IP addresses and the corresponding expiration time are returned.
     * > *   The results are written to OSS and returned as OSS URLs. The content in OSS objects is in the format of `IP address-Corresponding expiration time`. The expiration time is in the YYYY-MM-DD hh:mm:ss format.
     * > *   You can share OSS URLs with others. The shared URLs are valid for three days.
     *
     * @param Request - DescribeDcdnFullDomainsBlockIPConfigRequest
     *
     * @returns DescribeDcdnFullDomainsBlockIPConfigResponse
     *
     * @param DescribeDcdnFullDomainsBlockIPConfigRequest $request
     *
     * @return DescribeDcdnFullDomainsBlockIPConfigResponse
     */
    public function describeDcdnFullDomainsBlockIPConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnFullDomainsBlockIPConfigWithOptions($request, $runtime);
    }

    /**
     * 查询用户海量封禁历史.
     *
     * @remarks
     *   For a specified IP addresses and time range, the time when the IP address was delivered to the edge and the corresponding result are returned.
     * *   If a specified IP address or CIDR block has multiple blocking records in a specified time range, the records are sorted by delivery time in descending order.
     * *   The maximum time range to query is 90 days.
     * *   If no blocking record exists or delivery fails for the given IP address and time range, the delivery time is empty.
     *
     * @param Request - DescribeDcdnFullDomainsBlockIPHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnFullDomainsBlockIPHistoryResponse
     *
     * @param DescribeDcdnFullDomainsBlockIPHistoryRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnFullDomainsBlockIPHistoryResponse
     */
    public function describeDcdnFullDomainsBlockIPHistoryWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnFullDomainsBlockIPHistory',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnFullDomainsBlockIPHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户海量封禁历史.
     *
     * @remarks
     *   For a specified IP addresses and time range, the time when the IP address was delivered to the edge and the corresponding result are returned.
     * *   If a specified IP address or CIDR block has multiple blocking records in a specified time range, the records are sorted by delivery time in descending order.
     * *   The maximum time range to query is 90 days.
     * *   If no blocking record exists or delivery fails for the given IP address and time range, the delivery time is empty.
     *
     * @param Request - DescribeDcdnFullDomainsBlockIPHistoryRequest
     *
     * @returns DescribeDcdnFullDomainsBlockIPHistoryResponse
     *
     * @param DescribeDcdnFullDomainsBlockIPHistoryRequest $request
     *
     * @return DescribeDcdnFullDomainsBlockIPHistoryResponse
     */
    public function describeDcdnFullDomainsBlockIPHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnFullDomainsBlockIPHistoryWithOptions($request, $runtime);
    }

    /**
     * Queries information about all certificates that belong to your account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnHttpsDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnHttpsDomainListResponse
     *
     * @param DescribeDcdnHttpsDomainListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnHttpsDomainListResponse
     */
    public function describeDcdnHttpsDomainListWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnHttpsDomainList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnHttpsDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about all certificates that belong to your account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnHttpsDomainListRequest
     *
     * @returns DescribeDcdnHttpsDomainListResponse
     *
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
     * Queries whether an IP address belongs to a POP.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnIpInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnIpInfoResponse
     *
     * @param DescribeDcdnIpInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnIpInfoResponse
     */
    public function describeDcdnIpInfoWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnIpInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnIpInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether an IP address belongs to a POP.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnIpInfoRequest
     *
     * @returns DescribeDcdnIpInfoResponse
     *
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
     * Queries the back-to-origin CIDR blocks of IPA-accelerated domain names. If you want to call this API operation, you must submit a ticket to apply for the required permissions.
     *
     * @remarks
     * >  This operation can be called globally up to 50 times per second. This operation can be called up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnIpaDomainCidrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnIpaDomainCidrResponse
     *
     * @param DescribeDcdnIpaDomainCidrRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnIpaDomainCidrResponse
     */
    public function describeDcdnIpaDomainCidrWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnIpaDomainCidr',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnIpaDomainCidrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the back-to-origin CIDR blocks of IPA-accelerated domain names. If you want to call this API operation, you must submit a ticket to apply for the required permissions.
     *
     * @remarks
     * >  This operation can be called globally up to 50 times per second. This operation can be called up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnIpaDomainCidrRequest
     *
     * @returns DescribeDcdnIpaDomainCidrResponse
     *
     * @param DescribeDcdnIpaDomainCidrRequest $request
     *
     * @return DescribeDcdnIpaDomainCidrResponse
     */
    public function describeDcdnIpaDomainCidr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnIpaDomainCidrWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an accelerated domain name. You can query the configurations of one or more features in each request.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnIpaDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnIpaDomainConfigsResponse
     *
     * @param DescribeDcdnIpaDomainConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnIpaDomainConfigsResponse
     */
    public function describeDcdnIpaDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DescribeDcdnIpaDomainConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnIpaDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an accelerated domain name. You can query the configurations of one or more features in each request.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnIpaDomainConfigsRequest
     *
     * @returns DescribeDcdnIpaDomainConfigsResponse
     *
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
     * Queries the basic configuration information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnIpaDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnIpaDomainDetailResponse
     *
     * @param DescribeDcdnIpaDomainDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnIpaDomainDetailResponse
     */
    public function describeDcdnIpaDomainDetailWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnIpaDomainDetail',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnIpaDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic configuration information about an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnIpaDomainDetailRequest
     *
     * @returns DescribeDcdnIpaDomainDetailResponse
     *
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
     * Queries the status of IPA. The information includes the time when the service was activated, the current service status, the current billing method, and the billing method of the next cycle.
     *
     * @remarks
     * *
     * **The maximum number of times that each user can call this operation per second is 20.
     *
     * @param Request - DescribeDcdnIpaServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnIpaServiceResponse
     *
     * @param DescribeDcdnIpaServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnIpaServiceResponse
     */
    public function describeDcdnIpaServiceWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnIpaService',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnIpaServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of IPA. The information includes the time when the service was activated, the current service status, the current billing method, and the billing method of the next cycle.
     *
     * @remarks
     * *
     * **The maximum number of times that each user can call this operation per second is 20.
     *
     * @param Request - DescribeDcdnIpaServiceRequest
     *
     * @returns DescribeDcdnIpaServiceResponse
     *
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
     * Queries information about all domain names that are accelerated by IP Application Accelerator (IPA) in your account. Fuzzy search and filtering by domain status are supported.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnIpaUserDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnIpaUserDomainsResponse
     *
     * @param DescribeDcdnIpaUserDomainsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDcdnIpaUserDomainsResponse
     */
    public function describeDcdnIpaUserDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkDomainShow) {
            @$query['CheckDomainShow'] = $request->checkDomainShow;
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

        if (null !== $request->funcFilter) {
            @$query['FuncFilter'] = $request->funcFilter;
        }

        if (null !== $request->funcId) {
            @$query['FuncId'] = $request->funcId;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnIpaUserDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnIpaUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about all domain names that are accelerated by IP Application Accelerator (IPA) in your account. Fuzzy search and filtering by domain status are supported.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnIpaUserDomainsRequest
     *
     * @returns DescribeDcdnIpaUserDomainsResponse
     *
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
     * Queries the information about the key-value pairs that belong to your account.
     *
     * @param Request - DescribeDcdnKvAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnKvAccountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnKvAccountResponse
     */
    public function describeDcdnKvAccountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnKvAccount',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnKvAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the key-value pairs that belong to your account.
     *
     * @returns DescribeDcdnKvAccountResponse
     *
     * @return DescribeDcdnKvAccountResponse
     */
    public function describeDcdnKvAccount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnKvAccountWithOptions($runtime);
    }

    /**
     * Queries the KV status of an account.
     *
     * @param Request - DescribeDcdnKvAccountStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnKvAccountStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnKvAccountStatusResponse
     */
    public function describeDcdnKvAccountStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnKvAccountStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnKvAccountStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the KV status of an account.
     *
     * @returns DescribeDcdnKvAccountStatusResponse
     *
     * @return DescribeDcdnKvAccountStatusResponse
     */
    public function describeDcdnKvAccountStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnKvAccountStatusWithOptions($runtime);
    }

    /**
     * Queries the information about a namespace.
     *
     * @param Request - DescribeDcdnKvNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnKvNamespaceResponse
     *
     * @param DescribeDcdnKvNamespaceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnKvNamespaceResponse
     */
    public function describeDcdnKvNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnKvNamespace',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a namespace.
     *
     * @param Request - DescribeDcdnKvNamespaceRequest
     *
     * @returns DescribeDcdnKvNamespaceResponse
     *
     * @param DescribeDcdnKvNamespaceRequest $request
     *
     * @return DescribeDcdnKvNamespaceResponse
     */
    public function describeDcdnKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries CIDR blocks of Dynamic Content Delivery Network (DCDN) points of presence (POPs).
     *
     * @remarks
     * > *   To use this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * > *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnL2IpsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnL2IpsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnL2IpsResponse
     */
    public function describeDcdnL2IpsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnL2Ips',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnL2IpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries CIDR blocks of Dynamic Content Delivery Network (DCDN) points of presence (POPs).
     *
     * @remarks
     * > *   To use this operation, [submit a ticket](https://workorder-intl.console.aliyun.com/?spm=5176.2020520001.aliyun_topbar.18.dbd44bd3e4f845#/ticket/createIndex).
     * > *   You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeDcdnL2IpsResponse
     *
     * @return DescribeDcdnL2IpsResponse
     */
    public function describeDcdnL2Ips()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnL2IpsWithOptions($runtime);
    }

    /**
     * Queries the origin CIDR blocks by domain name. The CIDR blocks include IPv4 and IPv6 CIDR blocks.
     *
     * @param Request - DescribeDcdnL2VipsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnL2VipsResponse
     *
     * @param DescribeDcdnL2VipsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnL2VipsResponse
     */
    public function describeDcdnL2VipsWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnL2Vips',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnL2VipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the origin CIDR blocks by domain name. The CIDR blocks include IPv4 and IPv6 CIDR blocks.
     *
     * @param Request - DescribeDcdnL2VipsRequest
     *
     * @returns DescribeDcdnL2VipsResponse
     *
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
     * Queries the status of the origin server for a DCDN-accelerated domain name.
     *
     * @param Request - DescribeDcdnOriginSiteHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnOriginSiteHealthStatusResponse
     *
     * @param DescribeDcdnOriginSiteHealthStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDcdnOriginSiteHealthStatusResponse
     */
    public function describeDcdnOriginSiteHealthStatusWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnOriginSiteHealthStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnOriginSiteHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the origin server for a DCDN-accelerated domain name.
     *
     * @param Request - DescribeDcdnOriginSiteHealthStatusRequest
     *
     * @returns DescribeDcdnOriginSiteHealthStatusResponse
     *
     * @param DescribeDcdnOriginSiteHealthStatusRequest $request
     *
     * @return DescribeDcdnOriginSiteHealthStatusResponse
     */
    public function describeDcdnOriginSiteHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnOriginSiteHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the fields in real-time log entries.
     *
     * @remarks
     * >  You can call this API operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnRealTimeDeliveryFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnRealTimeDeliveryFieldResponse
     *
     * @param DescribeDcdnRealTimeDeliveryFieldRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnRealTimeDeliveryFieldResponse
     */
    public function describeDcdnRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnRealTimeDeliveryField',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnRealTimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fields in real-time log entries.
     *
     * @remarks
     * >  You can call this API operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnRealTimeDeliveryFieldRequest
     *
     * @returns DescribeDcdnRealTimeDeliveryFieldResponse
     *
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
     * Queries the maximum number and the remaining number of URLs and directories that can be refreshed or the maximum number and the remaining number of URLs that can be prefetched per day.
     *
     * @remarks
     * >
     * *   You can call the **RefreshDcdnObjectCaches** operation to refresh content and call the **PreloadDcdnObjectCaches** operation to prefetch content.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnRefreshQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnRefreshQuotaResponse
     *
     * @param DescribeDcdnRefreshQuotaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRefreshQuotaResponse
     */
    public function describeDcdnRefreshQuotaWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnRefreshQuota',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnRefreshQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the maximum number and the remaining number of URLs and directories that can be refreshed or the maximum number and the remaining number of URLs that can be prefetched per day.
     *
     * @remarks
     * >
     * *   You can call the **RefreshDcdnObjectCaches** operation to refresh content and call the **PreloadDcdnObjectCaches** operation to prefetch content.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnRefreshQuotaRequest
     *
     * @returns DescribeDcdnRefreshQuotaResponse
     *
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
     * Queries the status of refresh or prefetch tasks by task ID.
     *
     * @remarks
     * >
     * *   You can query data within the last three days.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnRefreshTaskByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnRefreshTaskByIdResponse
     *
     * @param DescribeDcdnRefreshTaskByIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnRefreshTaskByIdResponse
     */
    public function describeDcdnRefreshTaskByIdWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnRefreshTaskById',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnRefreshTaskByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of refresh or prefetch tasks by task ID.
     *
     * @remarks
     * >
     * *   You can query data within the last three days.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnRefreshTaskByIdRequest
     *
     * @returns DescribeDcdnRefreshTaskByIdResponse
     *
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
     * Queries the refresh or prefetch tasks. You can query the tasks in the last three days.
     *
     * @remarks
     *   You can query the refresh or prefetch tasks by ID or URL.
     * *   You can set both **TaskId** and **ObjectPath** in a request. If you do not set **TaskId** or **ObjectPath**, the data in the last 3 days on the first page is returned. By default, a maximum of 20 entries can be displayed on each page.
     * *   If you specify **DomainName** or **Status**, you must also specify **ObjectType**.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnRefreshTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnRefreshTasksResponse
     *
     * @param DescribeDcdnRefreshTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRefreshTasksResponse
     */
    public function describeDcdnRefreshTasksWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnRefreshTasks',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnRefreshTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the refresh or prefetch tasks. You can query the tasks in the last three days.
     *
     * @remarks
     *   You can query the refresh or prefetch tasks by ID or URL.
     * *   You can set both **TaskId** and **ObjectPath** in a request. If you do not set **TaskId** or **ObjectPath**, the data in the last 3 days on the first page is returned. By default, a maximum of 20 entries can be displayed on each page.
     * *   If you specify **DomainName** or **Status**, you must also specify **ObjectType**.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnRefreshTasksRequest
     *
     * @returns DescribeDcdnRefreshTasksResponse
     *
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
     * Queries the list of Internet service providers (ISPs) and regions.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnRegionAndIspRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnRegionAndIspResponse
     *
     * @param DescribeDcdnRegionAndIspRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnRegionAndIspResponse
     */
    public function describeDcdnRegionAndIspWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnRegionAndIsp',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnRegionAndIspResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Internet service providers (ISPs) and regions.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnRegionAndIspRequest
     *
     * @returns DescribeDcdnRegionAndIspResponse
     *
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
     * Queries the content of an operations report.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnReportResponse
     *
     * @param DescribeDcdnReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDcdnReportResponse
     */
    public function describeDcdnReportWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnReport',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the content of an operations report.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnReportRequest
     *
     * @returns DescribeDcdnReportResponse
     *
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
     * Queries custom operations reports.
     *
     * @remarks
     * > * This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     * > * You can call this operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnReportListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnReportListResponse
     *
     * @param DescribeDcdnReportListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnReportListResponse
     */
    public function describeDcdnReportListWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnReportList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom operations reports.
     *
     * @remarks
     * > * This operation queries the metadata of all operations reports. The statistics in the reports are not returned.
     * > * You can call this operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnReportListRequest
     *
     * @returns DescribeDcdnReportListResponse
     *
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
     * Queries supported types of real-time logs.
     *
     * @param Request - DescribeDcdnSLSRealTimeLogTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSLSRealTimeLogTypeResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnSLSRealTimeLogTypeResponse
     */
    public function describeDcdnSLSRealTimeLogTypeWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnSLSRealTimeLogType',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSLSRealTimeLogTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries supported types of real-time logs.
     *
     * @returns DescribeDcdnSLSRealTimeLogTypeResponse
     *
     * @return DescribeDcdnSLSRealTimeLogTypeResponse
     */
    public function describeDcdnSLSRealTimeLogType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSLSRealTimeLogTypeWithOptions($runtime);
    }

    /**
     * Queries a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnSLSRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSLSRealtimeLogDeliveryResponse
     *
     * @param DescribeDcdnSLSRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDcdnSLSRealtimeLogDeliveryResponse
     */
    public function describeDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnSLSRealtimeLogDelivery',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSLSRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnSLSRealtimeLogDeliveryRequest
     *
     * @returns DescribeDcdnSLSRealtimeLogDeliveryResponse
     *
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
     * Queries the details about a ShangMi (SM) certificate.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnSMCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSMCertificateDetailResponse
     *
     * @param DescribeDcdnSMCertificateDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnSMCertificateDetailResponse
     */
    public function describeDcdnSMCertificateDetailWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnSMCertificateDetail',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSMCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a ShangMi (SM) certificate.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnSMCertificateDetailRequest
     *
     * @returns DescribeDcdnSMCertificateDetailResponse
     *
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
     * Queries the ShangMi (SM) certificates of an accelerated domain name.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnSMCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSMCertificateListResponse
     *
     * @param DescribeDcdnSMCertificateListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnSMCertificateListResponse
     */
    public function describeDcdnSMCertificateListWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnSMCertificateList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSMCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ShangMi (SM) certificates of an accelerated domain name.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnSMCertificateListRequest
     *
     * @returns DescribeDcdnSMCertificateListResponse
     *
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
     * Queries the certificates of accelerated domain names.
     *
     * @param Request - DescribeDcdnSSLCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSSLCertificateListResponse
     *
     * @param DescribeDcdnSSLCertificateListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDcdnSSLCertificateListResponse
     */
    public function describeDcdnSSLCertificateListWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnSSLCertificateList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSSLCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificates of accelerated domain names.
     *
     * @param Request - DescribeDcdnSSLCertificateListRequest
     *
     * @returns DescribeDcdnSSLCertificateListResponse
     *
     * @param DescribeDcdnSSLCertificateListRequest $request
     *
     * @return DescribeDcdnSSLCertificateListResponse
     */
    public function describeDcdnSSLCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSSLCertificateListWithOptions($request, $runtime);
    }

    /**
     * Creates an edge security drop-down list in the Dynamic Content Delivery Network (DCDN) console.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnSecFuncInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSecFuncInfoResponse
     *
     * @param DescribeDcdnSecFuncInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnSecFuncInfoResponse
     */
    public function describeDcdnSecFuncInfoWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnSecFuncInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSecFuncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an edge security drop-down list in the Dynamic Content Delivery Network (DCDN) console.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnSecFuncInfoRequest
     *
     * @returns DescribeDcdnSecFuncInfoResponse
     *
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
     * Queries the version of secure Dynamic Route for CDN (DCDN) and the security rules.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnSecSpecInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSecSpecInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnSecSpecInfoResponse
     */
    public function describeDcdnSecSpecInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnSecSpecInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSecSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the version of secure Dynamic Route for CDN (DCDN) and the security rules.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @returns DescribeDcdnSecSpecInfoResponse
     *
     * @return DescribeDcdnSecSpecInfoResponse
     */
    public function describeDcdnSecSpecInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSecSpecInfoWithOptions($runtime);
    }

    /**
     * Queries information about the Dynamic Content Delivery Network (DCDN) service. The information includes the time when the service was activated, the current service status, the current billing method, and the billing method of the next cycle.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnServiceResponse
     *
     * @param DescribeDcdnServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnServiceResponse
     */
    public function describeDcdnServiceWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnService',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the Dynamic Content Delivery Network (DCDN) service. The information includes the time when the service was activated, the current service status, the current billing method, and the billing method of the next cycle.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnServiceRequest
     *
     * @returns DescribeDcdnServiceResponse
     *
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
     * Queries valid virtual IP addresses (VIPs) in the staging environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnStagingIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnStagingIpResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnStagingIpResponse
     */
    public function describeDcdnStagingIpWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnStagingIp',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnStagingIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries valid virtual IP addresses (VIPs) in the staging environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @returns DescribeDcdnStagingIpResponse
     *
     * @return DescribeDcdnStagingIpResponse
     */
    public function describeDcdnStagingIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnStagingIpWithOptions($runtime);
    }

    /**
     * Queries custom operations reports.
     *
     * @remarks
     * > *   By default, this operation queries all custom operations reports. However, only one operations report can be displayed. Therefore, only one operations report is returned.
     * > *   You can call this API operation up to three times per second per account.
     *
     * @param Request - DescribeDcdnSubListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnSubListResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnSubListResponse
     */
    public function describeDcdnSubListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnSubList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnSubListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom operations reports.
     *
     * @remarks
     * > *   By default, this operation queries all custom operations reports. However, only one operations report can be displayed. Therefore, only one operations report is returned.
     * > *   You can call this API operation up to three times per second per account.
     *
     * @returns DescribeDcdnSubListResponse
     *
     * @return DescribeDcdnSubListResponse
     */
    public function describeDcdnSubList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnSubListWithOptions($runtime);
    }

    /**
     * Queries the tags of one or more resources.
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnTagResourcesResponse
     *
     * @param DescribeDcdnTagResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnTagResourcesResponse
     */
    public function describeDcdnTagResourcesWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnTagResources',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of one or more resources.
     *
     * @remarks
     * > You can call this operation up to 10 times per second per account.
     *
     * @param Request - DescribeDcdnTagResourcesRequest
     *
     * @returns DescribeDcdnTagResourcesResponse
     *
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
     * Queries domain names ranked by network traffic. You can query data within the last 90 days.
     *
     * @remarks
     * If you do not specify the StartTime and EndTime parameters, the data within the current month is queried. If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     *
     * @param Request - DescribeDcdnTopDomainsByFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnTopDomainsByFlowResponse
     *
     * @param DescribeDcdnTopDomainsByFlowRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnTopDomainsByFlowResponse
     */
    public function describeDcdnTopDomainsByFlowWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnTopDomainsByFlow',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries domain names ranked by network traffic. You can query data within the last 90 days.
     *
     * @remarks
     * If you do not specify the StartTime and EndTime parameters, the data within the current month is queried. If you specify the StartTime and EndTime parameters, the data within the specified time range is queried.
     *
     * @param Request - DescribeDcdnTopDomainsByFlowRequest
     *
     * @returns DescribeDcdnTopDomainsByFlowResponse
     *
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
     * Queries the billing records of an Alibaba Cloud account. The maximum time range that you can specify is one month.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserBillHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserBillHistoryResponse
     *
     * @param DescribeDcdnUserBillHistoryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnUserBillHistoryResponse
     */
    public function describeDcdnUserBillHistoryWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnUserBillHistory',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserBillHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the billing records of an Alibaba Cloud account. The maximum time range that you can specify is one month.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserBillHistoryRequest
     *
     * @returns DescribeDcdnUserBillHistoryResponse
     *
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
     * Queries the metering method that is used in Dynamic Content Delivery Network (DCDN).
     *
     * @param Request - DescribeDcdnUserBillTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserBillTypeResponse
     *
     * @param DescribeDcdnUserBillTypeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnUserBillTypeResponse
     */
    public function describeDcdnUserBillTypeWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnUserBillType',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserBillTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metering method that is used in Dynamic Content Delivery Network (DCDN).
     *
     * @param Request - DescribeDcdnUserBillTypeRequest
     *
     * @returns DescribeDcdnUserBillTypeResponse
     *
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
     * Queries the number of domain names whose SSL certificates are about to expire or have already expired.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserCertificateExpireCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserCertificateExpireCountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnUserCertificateExpireCountResponse
     */
    public function describeDcdnUserCertificateExpireCountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnUserCertificateExpireCount',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserCertificateExpireCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of domain names whose SSL certificates are about to expire or have already expired.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeDcdnUserCertificateExpireCountResponse
     *
     * @return DescribeDcdnUserCertificateExpireCountResponse
     */
    public function describeDcdnUserCertificateExpireCount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserCertificateExpireCountWithOptions($runtime);
    }

    /**
     * Queries the configurations of security features.
     *
     * @remarks
     * You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnUserConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserConfigsResponse
     *
     * @param DescribeDcdnUserConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserConfigsResponse
     */
    public function describeDcdnUserConfigsWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnUserConfigs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of security features.
     *
     * @remarks
     * You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnUserConfigsRequest
     *
     * @returns DescribeDcdnUserConfigsResponse
     *
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
     * Queries the accelerated domain names that belong to your Alibaba Cloud account. You can filter domains by name or by status. Fuzzy match is supported when you filter domains by name.
     *
     * @remarks
     * > You can call this operation up to 80 times per second per account.
     *
     * @param Request - DescribeDcdnUserDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserDomainsResponse
     *
     * @param DescribeDcdnUserDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserDomainsResponse
     */
    public function describeDcdnUserDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->webSiteType) {
            @$query['WebSiteType'] = $request->webSiteType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnUserDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the accelerated domain names that belong to your Alibaba Cloud account. You can filter domains by name or by status. Fuzzy match is supported when you filter domains by name.
     *
     * @remarks
     * > You can call this operation up to 80 times per second per account.
     *
     * @param Request - DescribeDcdnUserDomainsRequest
     *
     * @returns DescribeDcdnUserDomainsResponse
     *
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
     * Queries all accelerated domain names with specified features configured that belong to your Alibaba Cloud account based on the FuncId parameter.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserDomainsByFuncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserDomainsByFuncResponse
     *
     * @param DescribeDcdnUserDomainsByFuncRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDcdnUserDomainsByFuncResponse
     */
    public function describeDcdnUserDomainsByFuncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->funcFilter) {
            @$query['FuncFilter'] = $request->funcFilter;
        }

        if (null !== $request->funcId) {
            @$query['FuncId'] = $request->funcId;
        }

        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
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
            'action' => 'DescribeDcdnUserDomainsByFunc',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserDomainsByFuncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all accelerated domain names with specified features configured that belong to your Alibaba Cloud account based on the FuncId parameter.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserDomainsByFuncRequest
     *
     * @returns DescribeDcdnUserDomainsByFuncResponse
     *
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
     * Queries the resource quotas and the used resources.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 30.
     *
     * @param Request - DescribeDcdnUserQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserQuotaResponse
     *
     * @param DescribeDcdnUserQuotaRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnUserQuotaResponse
     */
    public function describeDcdnUserQuotaWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnUserQuota',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource quotas and the used resources.
     *
     * @remarks
     * >  The maximum number of times that each user can call this operation per second is 30.
     *
     * @param Request - DescribeDcdnUserQuotaRequest
     *
     * @returns DescribeDcdnUserQuotaResponse
     *
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
     * Queries the fields that are selected.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserRealTimeDeliveryFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserRealTimeDeliveryFieldResponse
     *
     * @param DescribeDcdnUserRealTimeDeliveryFieldRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDcdnUserRealTimeDeliveryFieldResponse
     */
    public function describeDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnUserRealTimeDeliveryField',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserRealTimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fields that are selected.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserRealTimeDeliveryFieldRequest
     *
     * @returns DescribeDcdnUserRealTimeDeliveryFieldResponse
     *
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
     * Queries information about the resource plans in your Alibaba Cloud account.
     *
     * @remarks
     * The maximum number of times that each user can call this operation per second is 30.
     *
     * @param Request - DescribeDcdnUserResourcePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserResourcePackageResponse
     *
     * @param DescribeDcdnUserResourcePackageRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnUserResourcePackageResponse
     */
    public function describeDcdnUserResourcePackageWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnUserResourcePackage',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the resource plans in your Alibaba Cloud account.
     *
     * @remarks
     * The maximum number of times that each user can call this operation per second is 30.
     *
     * @param Request - DescribeDcdnUserResourcePackageRequest
     *
     * @returns DescribeDcdnUserResourcePackageResponse
     *
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
     * Queries the number of packets blocked by a specified security feature.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnUserSecDropRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserSecDropResponse
     *
     * @param DescribeDcdnUserSecDropRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnUserSecDropResponse
     */
    public function describeDcdnUserSecDropWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->secFunc) {
            @$query['SecFunc'] = $request->secFunc;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnUserSecDrop',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserSecDropResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of packets blocked by a specified security feature.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnUserSecDropRequest
     *
     * @returns DescribeDcdnUserSecDropResponse
     *
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
     * Queries the number of packets that are blocked by security features at the application layer in a specific time range.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnUserSecDropByMinuteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserSecDropByMinuteResponse
     *
     * @param DescribeDcdnUserSecDropByMinuteRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDcdnUserSecDropByMinuteResponse
     */
    public function describeDcdnUserSecDropByMinuteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->object) {
            @$query['Object'] = $request->object;
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

        if (null !== $request->secFunc) {
            @$query['SecFunc'] = $request->secFunc;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnUserSecDropByMinute',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserSecDropByMinuteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of packets that are blocked by security features at the application layer in a specific time range.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnUserSecDropByMinuteRequest
     *
     * @returns DescribeDcdnUserSecDropByMinuteResponse
     *
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
     * Queries user tags.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnUserTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserTagsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTagsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnUserTags',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user tags.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeDcdnUserTagsResponse
     *
     * @return DescribeDcdnUserTagsResponse
     */
    public function describeDcdnUserTags()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserTagsWithOptions($runtime);
    }

    /**
     * Queries virtual IP addresses of the POPs by domain name.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnUserVipsByDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnUserVipsByDomainResponse
     *
     * @param DescribeDcdnUserVipsByDomainRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnUserVipsByDomainResponse
     */
    public function describeDcdnUserVipsByDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->available) {
            @$query['Available'] = $request->available;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnUserVipsByDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnUserVipsByDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries virtual IP addresses of the POPs by domain name.
     *
     * @remarks
     * >  You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeDcdnUserVipsByDomainRequest
     *
     * @returns DescribeDcdnUserVipsByDomainResponse
     *
     * @param DescribeDcdnUserVipsByDomainRequest $request
     *
     * @return DescribeDcdnUserVipsByDomainResponse
     */
    public function describeDcdnUserVipsByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnUserVipsByDomainWithOptions($request, $runtime);
    }

    /**
     * Queries the ownership verification content of a domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnVerifyContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnVerifyContentResponse
     *
     * @param DescribeDcdnVerifyContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnVerifyContentResponse
     */
    public function describeDcdnVerifyContentWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnVerifyContent',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ownership verification content of a domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnVerifyContentRequest
     *
     * @returns DescribeDcdnVerifyContentResponse
     *
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
     * Queries the SDK authentication key for the Alibaba Cloud account. You can also use the SDK authentication key to send SDK initialization requests. The key must be included in the integration code.
     *
     * @param Request - DescribeDcdnWafBotAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafBotAppKeyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnWafBotAppKeyResponse
     */
    public function describeDcdnWafBotAppKeyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnWafBotAppKey',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafBotAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SDK authentication key for the Alibaba Cloud account. You can also use the SDK authentication key to send SDK initialization requests. The key must be included in the integration code.
     *
     * @returns DescribeDcdnWafBotAppKeyResponse
     *
     * @return DescribeDcdnWafBotAppKeyResponse
     */
    public function describeDcdnWafBotAppKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafBotAppKeyWithOptions($runtime);
    }

    /**
     * Queries the default configurations of a WAF rule.
     *
     * @param Request - DescribeDcdnWafDefaultRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafDefaultRulesResponse
     *
     * @param DescribeDcdnWafDefaultRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnWafDefaultRulesResponse
     */
    public function describeDcdnWafDefaultRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryArgs) {
            @$query['QueryArgs'] = $request->queryArgs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafDefaultRules',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafDefaultRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the default configurations of a WAF rule.
     *
     * @param Request - DescribeDcdnWafDefaultRulesRequest
     *
     * @returns DescribeDcdnWafDefaultRulesResponse
     *
     * @param DescribeDcdnWafDefaultRulesRequest $request
     *
     * @return DescribeDcdnWafDefaultRulesResponse
     */
    public function describeDcdnWafDefaultRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafDefaultRulesWithOptions($request, $runtime);
    }

    /**
     * Queries domain names that have Web Application Firewall (WAF) enabled and the relevant information, including the status of the access control list (ACL), protection against HTTP flood attacks, domain name, and WAF.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnWafDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafDomainResponse
     *
     * @param DescribeDcdnWafDomainRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafDomainResponse
     */
    public function describeDcdnWafDomainWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnWafDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries domain names that have Web Application Firewall (WAF) enabled and the relevant information, including the status of the access control list (ACL), protection against HTTP flood attacks, domain name, and WAF.
     *
     * @remarks
     * > You can call this operation up to 50 times per second per account.
     *
     * @param Request - DescribeDcdnWafDomainRequest
     *
     * @returns DescribeDcdnWafDomainResponse
     *
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
     * Queries the information about the protection policy of a domain name.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafDomainDetailResponse
     *
     * @param DescribeDcdnWafDomainDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDcdnWafDomainDetailResponse
     */
    public function describeDcdnWafDomainDetailWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnWafDomainDetail',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the protection policy of a domain name.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafDomainDetailRequest
     *
     * @returns DescribeDcdnWafDomainDetailResponse
     *
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
     * Queries the accelerated domain names that are protected by Web Application Firewall (WAF). Fuzzy search is supported.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafDomainsResponse
     *
     * @param DescribeDcdnWafDomainsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnWafDomainsResponse
     */
    public function describeDcdnWafDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgs) {
            @$query['QueryArgs'] = $request->queryArgs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the accelerated domain names that are protected by Web Application Firewall (WAF). Fuzzy search is supported.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafDomainsRequest
     *
     * @returns DescribeDcdnWafDomainsResponse
     *
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
     * Queries the information about match conditions in a custom protection rule, such as the match fields, logical characters, and match content.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafFilterInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafFilterInfoResponse
     *
     * @param DescribeDcdnWafFilterInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDcdnWafFilterInfoResponse
     */
    public function describeDcdnWafFilterInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScenes) {
            @$query['DefenseScenes'] = $request->defenseScenes;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafFilterInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafFilterInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about match conditions in a custom protection rule, such as the match fields, logical characters, and match content.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafFilterInfoRequest
     *
     * @returns DescribeDcdnWafFilterInfoResponse
     *
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
     * Queries the countries and regions that can be added to the blacklist of Web Application Firewall (WAF).
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafGeoInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafGeoInfoResponse
     *
     * @param DescribeDcdnWafGeoInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnWafGeoInfoResponse
     */
    public function describeDcdnWafGeoInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafGeoInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafGeoInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the countries and regions that can be added to the blacklist of Web Application Firewall (WAF).
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafGeoInfoRequest
     *
     * @returns DescribeDcdnWafGeoInfoResponse
     *
     * @param DescribeDcdnWafGeoInfoRequest $request
     *
     * @return DescribeDcdnWafGeoInfoResponse
     */
    public function describeDcdnWafGeoInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafGeoInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a custom WAF rule group by page.
     *
     * @param Request - DescribeDcdnWafGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafGroupResponse
     *
     * @param DescribeDcdnWafGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDcdnWafGroupResponse
     */
    public function describeDcdnWafGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgs) {
            @$query['QueryArgs'] = $request->queryArgs;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafGroup',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom WAF rule group by page.
     *
     * @param Request - DescribeDcdnWafGroupRequest
     *
     * @returns DescribeDcdnWafGroupResponse
     *
     * @param DescribeDcdnWafGroupRequest $request
     *
     * @return DescribeDcdnWafGroupResponse
     */
    public function describeDcdnWafGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafGroupWithOptions($request, $runtime);
    }

    /**
     * Queries custom Web Application Firewall (WAF) rule groups.
     *
     * @param Request - DescribeDcdnWafGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafGroupsResponse
     *
     * @param DescribeDcdnWafGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafGroupsResponse
     */
    public function describeDcdnWafGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgs) {
            @$query['QueryArgs'] = $request->queryArgs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafGroups',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom Web Application Firewall (WAF) rule groups.
     *
     * @param Request - DescribeDcdnWafGroupsRequest
     *
     * @returns DescribeDcdnWafGroupsResponse
     *
     * @param DescribeDcdnWafGroupsRequest $request
     *
     * @return DescribeDcdnWafGroupsResponse
     */
    public function describeDcdnWafGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the address from which you can download the Web Application Firewall (WAF) logs of a domain name.
     *
     * @remarks
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnWafLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafLogsResponse
     *
     * @param DescribeDcdnWafLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnWafLogsResponse
     */
    public function describeDcdnWafLogsWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnWafLogs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the address from which you can download the Web Application Firewall (WAF) logs of a domain name.
     *
     * @remarks
     * >
     * *   If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last 24 hours. If you set both these parameters, the request returns the data collected within the specified time range.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeDcdnWafLogsRequest
     *
     * @returns DescribeDcdnWafLogsResponse
     *
     * @param DescribeDcdnWafLogsRequest $request
     *
     * @return DescribeDcdnWafLogsResponse
     */
    public function describeDcdnWafLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the Web Application Firewall (WAF) protection policies that you configured.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafPoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafPoliciesResponse
     *
     * @param DescribeDcdnWafPoliciesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDcdnWafPoliciesResponse
     */
    public function describeDcdnWafPoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgs) {
            @$query['QueryArgs'] = $request->queryArgs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafPolicies',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the Web Application Firewall (WAF) protection policies that you configured.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafPoliciesRequest
     *
     * @returns DescribeDcdnWafPoliciesResponse
     *
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
     * Queries the details of a protection policy.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafPolicyResponse
     *
     * @param DescribeDcdnWafPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafPolicyResponse
     */
    public function describeDcdnWafPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafPolicy',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a protection policy.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafPolicyRequest
     *
     * @returns DescribeDcdnWafPolicyResponse
     *
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
     * Queries the accelerated domain names that are protected by a specified Web Application Firewall (WAF) protection policy.
     *
     * @remarks
     * You can call this operation up to 20 times per second per user.
     *
     * @param Request - DescribeDcdnWafPolicyDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafPolicyDomainsResponse
     *
     * @param DescribeDcdnWafPolicyDomainsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDcdnWafPolicyDomainsResponse
     */
    public function describeDcdnWafPolicyDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafPolicyDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafPolicyDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the accelerated domain names that are protected by a specified Web Application Firewall (WAF) protection policy.
     *
     * @remarks
     * You can call this operation up to 20 times per second per user.
     *
     * @param Request - DescribeDcdnWafPolicyDomainsRequest
     *
     * @returns DescribeDcdnWafPolicyDomainsResponse
     *
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
     * Queries the domain names that can be bound to a custom protection policy.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafPolicyValidDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafPolicyValidDomainsResponse
     *
     * @param DescribeDcdnWafPolicyValidDomainsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDcdnWafPolicyValidDomainsResponse
     */
    public function describeDcdnWafPolicyValidDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScene) {
            @$query['DefenseScene'] = $request->defenseScene;
        }

        if (null !== $request->domainNameLike) {
            @$query['DomainNameLike'] = $request->domainNameLike;
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
            'action' => 'DescribeDcdnWafPolicyValidDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafPolicyValidDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain names that can be bound to a custom protection policy.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafPolicyValidDomainsRequest
     *
     * @returns DescribeDcdnWafPolicyValidDomainsResponse
     *
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
     * Queries the details of a specified protection rule.
     *
     * @remarks
     * #
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafRuleResponse
     *
     * @param DescribeDcdnWafRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDcdnWafRuleResponse
     */
    public function describeDcdnWafRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafRule',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified protection rule.
     *
     * @remarks
     * #
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafRuleRequest
     *
     * @returns DescribeDcdnWafRuleResponse
     *
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
     * Queries the details of the protection rules that you configured.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafRulesResponse
     *
     * @param DescribeDcdnWafRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDcdnWafRulesResponse
     */
    public function describeDcdnWafRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgs) {
            @$query['QueryArgs'] = $request->queryArgs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafRules',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the protection rules that you configured.
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafRulesRequest
     *
     * @returns DescribeDcdnWafRulesResponse
     *
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
     * Queries the information about the type of the protection policy that you use.
     *
     * @remarks
     * You can call this operation up to 20 times per second per user.
     *
     * @param Request - DescribeDcdnWafScenesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafScenesResponse
     *
     * @param DescribeDcdnWafScenesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDcdnWafScenesResponse
     */
    public function describeDcdnWafScenesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseScenes) {
            @$query['DefenseScenes'] = $request->defenseScenes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafScenes',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the type of the protection policy that you use.
     *
     * @remarks
     * You can call this operation up to 20 times per second per user.
     *
     * @param Request - DescribeDcdnWafScenesRequest
     *
     * @returns DescribeDcdnWafScenesResponse
     *
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
     * Queries the information about Dynamic Content Delivery Network (DCDN) Web Application Firewall WAF), including the time when WAF is enabled, edition of WAF, current status of WAF, metering method for requests, and metering method for rules.
     *
     * @remarks
     * # Usage notes
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafServiceResponse
     *
     * @param DescribeDcdnWafServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnWafServiceResponse
     */
    public function describeDcdnWafServiceWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnWafService',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Dynamic Content Delivery Network (DCDN) Web Application Firewall WAF), including the time when WAF is enabled, edition of WAF, current status of WAF, metering method for requests, and metering method for rules.
     *
     * @remarks
     * # Usage notes
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafServiceRequest
     *
     * @returns DescribeDcdnWafServiceResponse
     *
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
     * Queries the version of Web Application Firewall (WAF) used in Dynamic Content Delivery Network (DCDN).
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnWafSpecInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafSpecInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDcdnWafSpecInfoResponse
     */
    public function describeDcdnWafSpecInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDcdnWafSpecInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the version of Web Application Firewall (WAF) used in Dynamic Content Delivery Network (DCDN).
     *
     * @remarks
     * You can call this operation up to 20 times per second per account.
     *
     * @returns DescribeDcdnWafSpecInfoResponse
     *
     * @return DescribeDcdnWafSpecInfoResponse
     */
    public function describeDcdnWafSpecInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafSpecInfoWithOptions($runtime);
    }

    /**
     * The number of used SeCUs.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   The minimum time granularity for a query is 5 minutes. The maximum time span for a query is 31 days. The time period within which historical data is available for a query is 90 days.
     *
     * @param Request - DescribeDcdnWafUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnWafUsageDataResponse
     *
     * @param DescribeDcdnWafUsageDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDcdnWafUsageDataResponse
     */
    public function describeDcdnWafUsageDataWithOptions($request, $runtime)
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

        if (null !== $request->splitBy) {
            @$query['SplitBy'] = $request->splitBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDcdnWafUsageData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnWafUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of used SeCUs.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   The minimum time granularity for a query is 5 minutes. The maximum time span for a query is 31 days. The time period within which historical data is available for a query is 90 days.
     *
     * @param Request - DescribeDcdnWafUsageDataRequest
     *
     * @returns DescribeDcdnWafUsageDataResponse
     *
     * @param DescribeDcdnWafUsageDataRequest $request
     *
     * @return DescribeDcdnWafUsageDataResponse
     */
    public function describeDcdnWafUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDcdnWafUsageDataWithOptions($request, $runtime);
    }

    /**
     * Queries the information about Dynamic Content Delivery Network (DCDN), such as the service activation time, the expiration time, and the current status.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnsecServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDcdnsecServiceResponse
     *
     * @param DescribeDcdnsecServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDcdnsecServiceResponse
     */
    public function describeDcdnsecServiceWithOptions($request, $runtime)
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
            'action' => 'DescribeDcdnsecService',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDcdnsecServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Dynamic Content Delivery Network (DCDN), such as the service activation time, the expiration time, and the current status.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeDcdnsecServiceRequest
     *
     * @returns DescribeDcdnsecServiceResponse
     *
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
     * Queries attack events.
     *
     * @param Request - DescribeDdosAllEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDdosAllEventListResponse
     *
     * @param DescribeDdosAllEventListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDdosAllEventListResponse
     */
    public function describeDdosAllEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
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
            'action' => 'DescribeDdosAllEventList',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDdosAllEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries attack events.
     *
     * @param Request - DescribeDdosAllEventListRequest
     *
     * @returns DescribeDdosAllEventListResponse
     *
     * @param DescribeDdosAllEventListRequest $request
     *
     * @return DescribeDdosAllEventListResponse
     */
    public function describeDdosAllEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDdosAllEventListWithOptions($request, $runtime);
    }

    /**
     * Queries the encrypted RoutineUid of a routine.
     *
     * @param Request - DescribeEncryptRoutineUidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEncryptRoutineUidResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEncryptRoutineUidResponse
     */
    public function describeEncryptRoutineUidWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeEncryptRoutineUid',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEncryptRoutineUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the encrypted RoutineUid of a routine.
     *
     * @returns DescribeEncryptRoutineUidResponse
     *
     * @return DescribeEncryptRoutineUidResponse
     */
    public function describeEncryptRoutineUid()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEncryptRoutineUidWithOptions($runtime);
    }

    /**
     * Queries the highlighted data of attack details. You can query the reasons for which requests are blocked based on TraceIDs in logs of requests that are blocked by Basic Web Protection. The highlighted data matches the content blocked by the basic web protection module.
     *
     * @param Request - DescribeHighlightInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHighlightInfoResponse
     *
     * @param DescribeHighlightInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeHighlightInfoResponse
     */
    public function describeHighlightInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->traceId) {
            @$query['TraceId'] = $request->traceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHighlightInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHighlightInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the highlighted data of attack details. You can query the reasons for which requests are blocked based on TraceIDs in logs of requests that are blocked by Basic Web Protection. The highlighted data matches the content blocked by the basic web protection module.
     *
     * @param Request - DescribeHighlightInfoRequest
     *
     * @returns DescribeHighlightInfoResponse
     *
     * @param DescribeHighlightInfoRequest $request
     *
     * @return DescribeHighlightInfoResponse
     */
    public function describeHighlightInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHighlightInfoWithOptions($request, $runtime);
    }

    /**
     * kv存储实时Qps监控数据.
     *
     * @param Request - DescribeKvRealTimeQpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKvRealTimeQpsDataResponse
     *
     * @param DescribeKvRealTimeQpsDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeKvRealTimeQpsDataResponse
     */
    public function describeKvRealTimeQpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->splitBy) {
            @$query['SplitBy'] = $request->splitBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKvRealTimeQpsData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKvRealTimeQpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * kv存储实时Qps监控数据.
     *
     * @param Request - DescribeKvRealTimeQpsDataRequest
     *
     * @returns DescribeKvRealTimeQpsDataResponse
     *
     * @param DescribeKvRealTimeQpsDataRequest $request
     *
     * @return DescribeKvRealTimeQpsDataResponse
     */
    public function describeKvRealTimeQpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKvRealTimeQpsDataWithOptions($request, $runtime);
    }

    /**
     * Queries the usage data of KV storage.
     *
     * @remarks
     * *Note*** You can call this operation up to 5 times per second per account.
     * * The usage data indicates the number of requests.
     * **Time granularity:** This operation supports only the time granularity of 1 hour.
     * |Time granularity|Time range to query|Historical data available|Data latency|
     * |---|---|---|---|
     * |1 hour|31 days|90 days|3 to 4 hours|
     *
     * @param Request - DescribeKvUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKvUsageDataResponse
     *
     * @param DescribeKvUsageDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeKvUsageDataResponse
     */
    public function describeKvUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->field) {
            @$query['Field'] = $request->field;
        }

        if (null !== $request->namespaceId) {
            @$query['NamespaceId'] = $request->namespaceId;
        }

        if (null !== $request->responseType) {
            @$query['ResponseType'] = $request->responseType;
        }

        if (null !== $request->splitBy) {
            @$query['SplitBy'] = $request->splitBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeKvUsageData',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKvUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage data of KV storage.
     *
     * @remarks
     * *Note*** You can call this operation up to 5 times per second per account.
     * * The usage data indicates the number of requests.
     * **Time granularity:** This operation supports only the time granularity of 1 hour.
     * |Time granularity|Time range to query|Historical data available|Data latency|
     * |---|---|---|---|
     * |1 hour|31 days|90 days|3 to 4 hours|
     *
     * @param Request - DescribeKvUsageDataRequest
     *
     * @returns DescribeKvUsageDataResponse
     *
     * @param DescribeKvUsageDataRequest $request
     *
     * @return DescribeKvUsageDataResponse
     */
    public function describeKvUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKvUsageDataWithOptions($request, $runtime);
    }

    /**
     * Queries the feature configurations of an accelerated domain name in the resource directory.
     *
     * @param Request - DescribeRDDomainConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRDDomainConfigResponse
     *
     * @param DescribeRDDomainConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRDDomainConfigResponse
     */
    public function describeRDDomainConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRDDomainConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRDDomainConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the feature configurations of an accelerated domain name in the resource directory.
     *
     * @param Request - DescribeRDDomainConfigRequest
     *
     * @returns DescribeRDDomainConfigResponse
     *
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
     * Queries all domain names of Alibaba Cloud CDN and Dynamic Content Delivery Network (DCDN) in a Resource Directory (RD).
     *
     * @remarks
     * A domain name can be in one of the following states:
     * *   online
     * *   offline
     * *   configuring
     * *   configure_failed
     * *   checking
     * *   check_failed
     *
     * @param Request - DescribeRDDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRDDomainsResponse
     *
     * @param DescribeRDDomainsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRDDomainsResponse
     */
    public function describeRDDomainsWithOptions($request, $runtime)
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
            'action' => 'DescribeRDDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRDDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all domain names of Alibaba Cloud CDN and Dynamic Content Delivery Network (DCDN) in a Resource Directory (RD).
     *
     * @remarks
     * A domain name can be in one of the following states:
     * *   online
     * *   offline
     * *   configuring
     * *   configure_failed
     * *   checking
     * *   check_failed
     *
     * @param Request - DescribeRDDomainsRequest
     *
     * @returns DescribeRDDomainsResponse
     *
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
     * Queries the metadata of a specified routine. The metadata includes the routine configuration, configuration version, and code version.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoutineResponse
     *
     * @param DescribeRoutineRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRoutineResponse
     */
    public function describeRoutineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRoutine',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metadata of a specified routine. The metadata includes the routine configuration, configuration version, and code version.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineRequest
     *
     * @returns DescribeRoutineResponse
     *
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
     * Queries the canary release environments that are supported by a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineCanaryEnvsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoutineCanaryEnvsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRoutineCanaryEnvsResponse
     */
    public function describeRoutineCanaryEnvsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRoutineCanaryEnvs',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoutineCanaryEnvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the canary release environments that are supported by a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeRoutineCanaryEnvsResponse
     *
     * @return DescribeRoutineCanaryEnvsResponse
     */
    public function describeRoutineCanaryEnvs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineCanaryEnvsWithOptions($runtime);
    }

    /**
     * Queries the JavaScript code version of a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineCodeRevisionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoutineCodeRevisionResponse
     *
     * @param DescribeRoutineCodeRevisionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeRoutineCodeRevisionResponse
     */
    public function describeRoutineCodeRevisionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->selectCodeRevision) {
            @$body['SelectCodeRevision'] = $request->selectCodeRevision;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRoutineCodeRevision',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoutineCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the JavaScript code version of a routine.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineCodeRevisionRequest
     *
     * @returns DescribeRoutineCodeRevisionResponse
     *
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
     * Queries the list of domain names that are associated with a routine.
     *
     * @param Request - DescribeRoutineRelatedDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoutineRelatedDomainsResponse
     *
     * @param DescribeRoutineRelatedDomainsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRoutineRelatedDomainsResponse
     */
    public function describeRoutineRelatedDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeRoutineRelatedDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoutineRelatedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of domain names that are associated with a routine.
     *
     * @param Request - DescribeRoutineRelatedDomainsRequest
     *
     * @returns DescribeRoutineRelatedDomainsResponse
     *
     * @param DescribeRoutineRelatedDomainsRequest $request
     *
     * @return DescribeRoutineRelatedDomainsResponse
     */
    public function describeRoutineRelatedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineRelatedDomainsWithOptions($request, $runtime);
    }

    /**
     * Queries the supported specifications for routines. The private preview supports the following CPU time slice specifications: 5 ms, 50 ms, and 100 ms.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoutineSpecResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRoutineSpecResponse
     */
    public function describeRoutineSpecWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRoutineSpec',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoutineSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the supported specifications for routines. The private preview supports the following CPU time slice specifications: 5 ms, 50 ms, and 100 ms.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeRoutineSpecResponse
     *
     * @return DescribeRoutineSpecResponse
     */
    public function describeRoutineSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineSpecWithOptions($runtime);
    }

    /**
     * Queries the subdomains and routines that belong to your Alibaba Cloud account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - DescribeRoutineUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRoutineUserInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRoutineUserInfoResponse
     */
    public function describeRoutineUserInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeRoutineUserInfo',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRoutineUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the subdomains and routines that belong to your Alibaba Cloud account.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @returns DescribeRoutineUserInfoResponse
     *
     * @return DescribeRoutineUserInfoResponse
     */
    public function describeRoutineUserInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRoutineUserInfoWithOptions($runtime);
    }

    /**
     * Whether IPA is enabled and whether you have overdue payments for your IPA are queried.
     *
     * @remarks
     * *
     * **The maximum number of times that each user can call this operation per second is 20.
     *
     * @param Request - DescribeUserDcdnIpaStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserDcdnIpaStatusResponse
     *
     * @param DescribeUserDcdnIpaStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserDcdnIpaStatusResponse
     */
    public function describeUserDcdnIpaStatusWithOptions($request, $runtime)
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
            'action' => 'DescribeUserDcdnIpaStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserDcdnIpaStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Whether IPA is enabled and whether you have overdue payments for your IPA are queried.
     *
     * @remarks
     * *
     * **The maximum number of times that each user can call this operation per second is 20.
     *
     * @param Request - DescribeUserDcdnIpaStatusRequest
     *
     * @returns DescribeUserDcdnIpaStatusResponse
     *
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
     * Queries whether DCDN is activated and whether your account has overdue payments.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeUserDcdnStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserDcdnStatusResponse
     *
     * @param DescribeUserDcdnStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeUserDcdnStatusResponse
     */
    public function describeUserDcdnStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserDcdnStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserDcdnStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether DCDN is activated and whether your account has overdue payments.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeUserDcdnStatusRequest
     *
     * @returns DescribeUserDcdnStatusResponse
     *
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
     * Queries whether EdgeRoutine (ER) is activated or has an overdue payment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeUserErStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserErStatusResponse
     *
     * @param DescribeUserErStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserErStatusResponse
     */
    public function describeUserErStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserErStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserErStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether EdgeRoutine (ER) is activated or has an overdue payment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - DescribeUserErStatusRequest
     *
     * @returns DescribeUserErStatusResponse
     *
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
     * Queries whether Log Service is activated and whether you have overdue payments for your Log Service.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeUserLogserviceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserLogserviceStatusResponse
     *
     * @param DescribeUserLogserviceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUserLogserviceStatusResponse
     */
    public function describeUserLogserviceStatusWithOptions($request, $runtime)
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
            'action' => 'DescribeUserLogserviceStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserLogserviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether Log Service is activated and whether you have overdue payments for your Log Service.
     *
     * @remarks
     * > You can call this operation up to 20 times per second per account.
     *
     * @param Request - DescribeUserLogserviceStatusRequest
     *
     * @returns DescribeUserLogserviceStatusResponse
     *
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
     * Modifies the configurations of a routine.
     *
     * @remarks
     * >
     * *   This operation modifies only the specified configurations. Other configurations remain unchanged.
     * *   If you want to delete a setting, delete the parameter value.
     * *   This operation can add canary release environments. Make sure that the environment names comply with the naming rules. Otherwise, you will fail to add the environments.
     * *   Dynamic Route for CDN (DCDN) provides 35 canary release environments. Among these environments, 34 are deployed in China and 1 is deployed outside China. The canary release environments are:
     *     *   Outside China: presetCanaryOverseas.
     *     *   In China: The 34 canary release environments are named in the format of presetCanaryXX. For example, presetCanaryBeijing represents the canary release environment in Beijing. A canary release environment is in each of the following regions: Anhui, Beijing, Chongqing, Fujian, Gansu, Guangdong, Guangxi, Guizhou, Hainan, Hebei, Heilongjiang, Henan, Hong Kong, Hubei, Hunan, Jiangsu, Jiangxi, Jilin, Liaoning, Macao, Neimenggu, Ningxia, Qinghai, Shaanxi, Shandong, Shanghai, Shanxi, Sichuan, Taiwan, Tianjin, Xinjiang, Xizang, Yunan, and Zhejiang.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param tmpReq - EditRoutineConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditRoutineConfResponse
     *
     * @param EditRoutineConfRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return EditRoutineConfResponse
     */
    public function editRoutineConfWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EditRoutineConfShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->envConf) {
            $request->envConfShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->envConf, 'EnvConf', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->envConfShrink) {
            @$body['EnvConf'] = $request->envConfShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditRoutineConf',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditRoutineConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a routine.
     *
     * @remarks
     * >
     * *   This operation modifies only the specified configurations. Other configurations remain unchanged.
     * *   If you want to delete a setting, delete the parameter value.
     * *   This operation can add canary release environments. Make sure that the environment names comply with the naming rules. Otherwise, you will fail to add the environments.
     * *   Dynamic Route for CDN (DCDN) provides 35 canary release environments. Among these environments, 34 are deployed in China and 1 is deployed outside China. The canary release environments are:
     *     *   Outside China: presetCanaryOverseas.
     *     *   In China: The 34 canary release environments are named in the format of presetCanaryXX. For example, presetCanaryBeijing represents the canary release environment in Beijing. A canary release environment is in each of the following regions: Anhui, Beijing, Chongqing, Fujian, Gansu, Guangdong, Guangxi, Guizhou, Hainan, Hebei, Heilongjiang, Henan, Hong Kong, Hubei, Hunan, Jiangsu, Jiangxi, Jilin, Liaoning, Macao, Neimenggu, Ningxia, Qinghai, Shaanxi, Shandong, Shanghai, Shanxi, Sichuan, Taiwan, Tianjin, Xinjiang, Xizang, Yunan, and Zhejiang.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - EditRoutineConfRequest
     *
     * @returns EditRoutineConfResponse
     *
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
     * Queries the value of a key in a key-value pair.
     *
     * @param Request - GetDcdnKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDcdnKvResponse
     *
     * @param GetDcdnKvRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetDcdnKvResponse
     */
    public function getDcdnKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDcdnKv',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the value of a key in a key-value pair.
     *
     * @param Request - GetDcdnKvRequest
     *
     * @returns GetDcdnKvResponse
     *
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
     * 查询KV对的值以及TTL信息.
     *
     * @param Request - GetDcdnKvDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDcdnKvDetailResponse
     *
     * @param GetDcdnKvDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDcdnKvDetailResponse
     */
    public function getDcdnKvDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDcdnKvDetail',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDcdnKvDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询KV对的值以及TTL信息.
     *
     * @param Request - GetDcdnKvDetailRequest
     *
     * @returns GetDcdnKvDetailResponse
     *
     * @param GetDcdnKvDetailRequest $request
     *
     * @return GetDcdnKvDetailResponse
     */
    public function getDcdnKvDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDcdnKvDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the KV status by key value.
     *
     * @param Request - GetDcdnKvStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDcdnKvStatusResponse
     *
     * @param GetDcdnKvStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDcdnKvStatusResponse
     */
    public function getDcdnKvStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDcdnKvStatus',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDcdnKvStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the KV status by key value.
     *
     * @param Request - GetDcdnKvStatusRequest
     *
     * @returns GetDcdnKvStatusResponse
     *
     * @param GetDcdnKvStatusRequest $request
     *
     * @return GetDcdnKvStatusResponse
     */
    public function getDcdnKvStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDcdnKvStatusWithOptions($request, $runtime);
    }

    /**
     * Traverses the values of keys in a namespace.
     *
     * @param Request - ListDcdnKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDcdnKvResponse
     *
     * @param ListDcdnKvRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDcdnKvResponse
     */
    public function listDcdnKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDcdnKv',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Traverses the values of keys in a namespace.
     *
     * @param Request - ListDcdnKvRequest
     *
     * @returns ListDcdnKvResponse
     *
     * @param ListDcdnKvRequest $request
     *
     * @return ListDcdnKvResponse
     */
    public function listDcdnKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDcdnKvWithOptions($request, $runtime);
    }

    /**
     * Queries information about a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - ListDcdnRealTimeDeliveryProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDcdnRealTimeDeliveryProjectResponse
     *
     * @param ListDcdnRealTimeDeliveryProjectRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDcdnRealTimeDeliveryProjectResponse
     */
    public function listDcdnRealTimeDeliveryProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
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
            'action' => 'ListDcdnRealTimeDeliveryProject',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDcdnRealTimeDeliveryProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - ListDcdnRealTimeDeliveryProjectRequest
     *
     * @returns ListDcdnRealTimeDeliveryProjectResponse
     *
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
     * A客户定制新增修改域名采样率接口.
     *
     * @param Request - ModifyCustomDomainSampleRateRequest
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
            'version' => '2018-01-15',
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
     * @param Request - ModifyCustomDomainSampleRateRequest
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
     * Changes the acceleration region.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - ModifyDCdnDomainSchdmByPropertyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDCdnDomainSchdmByPropertyResponse
     *
     * @param ModifyDCdnDomainSchdmByPropertyRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyDCdnDomainSchdmByPropertyResponse
     */
    public function modifyDCdnDomainSchdmByPropertyWithOptions($request, $runtime)
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
            'action' => 'ModifyDCdnDomainSchdmByProperty',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDCdnDomainSchdmByPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the acceleration region.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - ModifyDCdnDomainSchdmByPropertyRequest
     *
     * @returns ModifyDCdnDomainSchdmByPropertyResponse
     *
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
     * Modifies a custom Web Application Firewall (WAF) rule group.
     *
     * @param Request - ModifyDcdnWafGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDcdnWafGroupResponse
     *
     * @param ModifyDcdnWafGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDcdnWafGroupResponse
     */
    public function modifyDcdnWafGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->rules) {
            @$body['Rules'] = $request->rules;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDcdnWafGroup',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDcdnWafGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a custom Web Application Firewall (WAF) rule group.
     *
     * @param Request - ModifyDcdnWafGroupRequest
     *
     * @returns ModifyDcdnWafGroupResponse
     *
     * @param ModifyDcdnWafGroupRequest $request
     *
     * @return ModifyDcdnWafGroupResponse
     */
    public function modifyDcdnWafGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDcdnWafGroupWithOptions($request, $runtime);
    }

    /**
     * Changes the name or the status of a protection policy.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - ModifyDcdnWafPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDcdnWafPolicyResponse
     *
     * @param ModifyDcdnWafPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDcdnWafPolicyResponse
     */
    public function modifyDcdnWafPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$body['PolicyName'] = $request->policyName;
        }

        if (null !== $request->policyStatus) {
            @$body['PolicyStatus'] = $request->policyStatus;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDcdnWafPolicy',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDcdnWafPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name or the status of a protection policy.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     *
     * @param Request - ModifyDcdnWafPolicyRequest
     *
     * @returns ModifyDcdnWafPolicyResponse
     *
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
     * Changes the accelerated domain names that are bound to a protection policy.
     *
     * @remarks
     * # Usage notes
     * *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *
     * @param Request - ModifyDcdnWafPolicyDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDcdnWafPolicyDomainsResponse
     *
     * @param ModifyDcdnWafPolicyDomainsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDcdnWafPolicyDomainsResponse
     */
    public function modifyDcdnWafPolicyDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bindDomains) {
            @$body['BindDomains'] = $request->bindDomains;
        }

        if (null !== $request->method) {
            @$body['Method'] = $request->method;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->unbindDomains) {
            @$body['UnbindDomains'] = $request->unbindDomains;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDcdnWafPolicyDomains',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDcdnWafPolicyDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the accelerated domain names that are bound to a protection policy.
     *
     * @remarks
     * # Usage notes
     * *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Route for CDN (DCDN) supports POST requests.
     *
     * @param Request - ModifyDcdnWafPolicyDomainsRequest
     *
     * @returns ModifyDcdnWafPolicyDomainsResponse
     *
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
     * Changes the name, status, or configurations of a protection rule.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     * *   You must configure at least one of the **RuleStatus**, **RuleName** and **RuleConfig** parameters.
     *
     * @param Request - ModifyDcdnWafRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDcdnWafRuleResponse
     *
     * @param ModifyDcdnWafRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDcdnWafRuleResponse
     */
    public function modifyDcdnWafRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ruleConfig) {
            @$body['RuleConfig'] = $request->ruleConfig;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$body['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleStatus) {
            @$body['RuleStatus'] = $request->ruleStatus;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDcdnWafRule',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDcdnWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name, status, or configurations of a protection rule.
     *
     * @remarks
     *   You can call this operation up to 20 times per second per account.
     * *   Alibaba Cloud Dynamic Content Delivery Network (DCDN) supports POST requests.
     * *   You must configure at least one of the **RuleStatus**, **RuleName** and **RuleConfig** parameters.
     *
     * @param Request - ModifyDcdnWafRuleRequest
     *
     * @returns ModifyDcdnWafRuleResponse
     *
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
     * Activates Dynamic Route for CDN (DCDN).
     *
     * @remarks
     * >
     * *   DCDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must pass real-name verification.
     * *   You can call this operation up to five times per second per user.
     *
     * @param Request - OpenDcdnServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenDcdnServiceResponse
     *
     * @param OpenDcdnServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenDcdnServiceResponse
     */
    public function openDcdnServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billType) {
            @$query['BillType'] = $request->billType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->websocketBillType) {
            @$query['WebsocketBillType'] = $request->websocketBillType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenDcdnService',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenDcdnServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates Dynamic Route for CDN (DCDN).
     *
     * @remarks
     * >
     * *   DCDN can be activated only once per Alibaba Cloud account. The Alibaba Cloud account must pass real-name verification.
     * *   You can call this operation up to five times per second per user.
     *
     * @param Request - OpenDcdnServiceRequest
     *
     * @returns OpenDcdnServiceResponse
     *
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
     * Prefetches content from origin servers to points of presence (POPs). This reduces workloads on origin servers because users can hit cache upon their first visits.
     *
     * @remarks
     *   You can call the [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html) operation to refresh content and call the [PreloadDcdnObjectCaches](https://help.aliyun.com/document_detail/130636.html) operation to prefetch content.
     * *   Dynamic Content Delivery Network (DCDN) supports POST requests in which parameters are sent as a form.
     * *   By default, each Alibaba Cloud account can submit up to 1,000 URLs per day. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to increase your daily quota. Alibaba Cloud reviews your application and then increases the quota accordingly.
     * *   You can specify up to 100 URLs to prefetch.
     * *   The prefetch queue of each Alibaba Cloud account can contain up to 100,000 URLs. DCDN executes prefetch tasks based on the time at which you submit the URLs.
     * *   You can call this operation up to 15 times per second per account.
     * ## Description
     * *   After a refresh task is submitted and completed, the POPs immediately start to retrieve resources from the origin server. Therefore, a large number of refresh tasks cause a large number of concurrent download tasks. This increases the number of requests that are redirected to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     * *   The time required for a prefetch task to complete is proportional to the size of the prefetched file. In actual practice, most prefetch tasks require 5 to 30 minutes to complete. A task with a smaller average file size requires less time.
     * *   To allow RAM users to perform this operation, you need to first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/445051.html).
     *
     * @param Request - PreloadDcdnObjectCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreloadDcdnObjectCachesResponse
     *
     * @param PreloadDcdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PreloadDcdnObjectCachesResponse
     */
    public function preloadDcdnObjectCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->area) {
            @$query['Area'] = $request->area;
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
            'action' => 'PreloadDcdnObjectCaches',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreloadDcdnObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prefetches content from origin servers to points of presence (POPs). This reduces workloads on origin servers because users can hit cache upon their first visits.
     *
     * @remarks
     *   You can call the [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html) operation to refresh content and call the [PreloadDcdnObjectCaches](https://help.aliyun.com/document_detail/130636.html) operation to prefetch content.
     * *   Dynamic Content Delivery Network (DCDN) supports POST requests in which parameters are sent as a form.
     * *   By default, each Alibaba Cloud account can submit up to 1,000 URLs per day. If the daily peak bandwidth value of your workloads exceeds 200 Mbit/s, you can [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to increase your daily quota. Alibaba Cloud reviews your application and then increases the quota accordingly.
     * *   You can specify up to 100 URLs to prefetch.
     * *   The prefetch queue of each Alibaba Cloud account can contain up to 100,000 URLs. DCDN executes prefetch tasks based on the time at which you submit the URLs.
     * *   You can call this operation up to 15 times per second per account.
     * ## Description
     * *   After a refresh task is submitted and completed, the POPs immediately start to retrieve resources from the origin server. Therefore, a large number of refresh tasks cause a large number of concurrent download tasks. This increases the number of requests that are redirected to the origin server. The back-to-origin routing process consumes more bandwidth resources and the origin server may be overwhelmed.
     * *   The time required for a prefetch task to complete is proportional to the size of the prefetched file. In actual practice, most prefetch tasks require 5 to 30 minutes to complete. A task with a smaller average file size requires less time.
     * *   To allow RAM users to perform this operation, you need to first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/445051.html).
     *
     * @param Request - PreloadDcdnObjectCachesRequest
     *
     * @returns PreloadDcdnObjectCachesResponse
     *
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
     * Publishes the configurations of an accelerated domain name from the staging environment to the production environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - PublishDcdnStagingConfigToProductionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishDcdnStagingConfigToProductionResponse
     *
     * @param PublishDcdnStagingConfigToProductionRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return PublishDcdnStagingConfigToProductionResponse
     */
    public function publishDcdnStagingConfigToProductionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PublishDcdnStagingConfigToProduction',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishDcdnStagingConfigToProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes the configurations of an accelerated domain name from the staging environment to the production environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - PublishDcdnStagingConfigToProductionRequest
     *
     * @returns PublishDcdnStagingConfigToProductionResponse
     *
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
     * Publishes a specified version of routine code to an environment.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param tmpReq - PublishRoutineCodeRevisionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRoutineCodeRevisionResponse
     *
     * @param PublishRoutineCodeRevisionRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return PublishRoutineCodeRevisionResponse
     */
    public function publishRoutineCodeRevisionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PublishRoutineCodeRevisionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->envs) {
            $request->envsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->envs, 'Envs', 'json');
        }

        $body = [];
        if (null !== $request->envsShrink) {
            @$body['Envs'] = $request->envsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->selectCodeRevision) {
            @$body['SelectCodeRevision'] = $request->selectCodeRevision;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishRoutineCodeRevision',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishRoutineCodeRevisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a specified version of routine code to an environment.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - PublishRoutineCodeRevisionRequest
     *
     * @returns PublishRoutineCodeRevisionResponse
     *
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
     * Sets key-value pairs in a namespace.
     *
     * @param Request - PutDcdnKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDcdnKvResponse
     *
     * @param PutDcdnKvRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PutDcdnKvResponse
     */
    public function putDcdnKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->expirationTtl) {
            @$query['ExpirationTtl'] = $request->expirationTtl;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutDcdnKv',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDcdnKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets key-value pairs in a namespace.
     *
     * @param Request - PutDcdnKvRequest
     *
     * @returns PutDcdnKvResponse
     *
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
     * Adds namespaces to your account.
     *
     * @param Request - PutDcdnKvNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDcdnKvNamespaceResponse
     *
     * @param PutDcdnKvNamespaceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutDcdnKvNamespaceResponse
     */
    public function putDcdnKvNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutDcdnKvNamespace',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDcdnKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds namespaces to your account.
     *
     * @param Request - PutDcdnKvNamespaceRequest
     *
     * @returns PutDcdnKvNamespaceResponse
     *
     * @param PutDcdnKvNamespaceRequest $request
     *
     * @return PutDcdnKvNamespaceResponse
     */
    public function putDcdnKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDcdnKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * 设置Namespace的key-value对，支持最大25M的请求体.
     *
     * @param Request - PutDcdnKvWithHighCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutDcdnKvWithHighCapacityResponse
     *
     * @param PutDcdnKvWithHighCapacityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PutDcdnKvWithHighCapacityResponse
     */
    public function putDcdnKvWithHighCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutDcdnKvWithHighCapacity',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutDcdnKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置Namespace的key-value对，支持最大25M的请求体.
     *
     * @param Request - PutDcdnKvWithHighCapacityRequest
     *
     * @returns PutDcdnKvWithHighCapacityResponse
     *
     * @param PutDcdnKvWithHighCapacityRequest $request
     *
     * @return PutDcdnKvWithHighCapacityResponse
     */
    public function putDcdnKvWithHighCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDcdnKvWithHighCapacityWithOptions($request, $runtime);
    }

    /**
     * 指定缓存tag刷新节点上的文件内容.
     *
     * @param Request - RefreshDcdnObjectCacheByCacheTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshDcdnObjectCacheByCacheTagResponse
     *
     * @param RefreshDcdnObjectCacheByCacheTagRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RefreshDcdnObjectCacheByCacheTagResponse
     */
    public function refreshDcdnObjectCacheByCacheTagWithOptions($request, $runtime)
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
            'action' => 'RefreshDcdnObjectCacheByCacheTag',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshDcdnObjectCacheByCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定缓存tag刷新节点上的文件内容.
     *
     * @param Request - RefreshDcdnObjectCacheByCacheTagRequest
     *
     * @returns RefreshDcdnObjectCacheByCacheTagResponse
     *
     * @param RefreshDcdnObjectCacheByCacheTagRequest $request
     *
     * @return RefreshDcdnObjectCacheByCacheTagResponse
     */
    public function refreshDcdnObjectCacheByCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDcdnObjectCacheByCacheTagWithOptions($request, $runtime);
    }

    /**
     * Refreshes specified objects on points of presence (POPs). The objects can be included in the content of files or URLs. You can refresh multiple URLs in each request.
     *
     * @remarks
     *   Dynamic Content Delivery Network (DCDN) supports POST requests in which parameters are sent as a form.
     * *   You can call the [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html) operation to purge content and call the [PreloadDcdnObjectCaches](https://help.aliyun.com/document_detail/130636.html) operation to prefetch content.
     * *   By default, each Alibaba Cloud account can purge content from a maximum of 10,000 URLs and 100 directories including subdirectories per day. If the daily peak bandwidth of your Alibaba Cloud account exceeds 200 Mbit/s, [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to request a quota increase. Alibaba Cloud determines whether to approve your application based on your workloads.
     * *   You can specify up to 1,000 URLs or 100 directories that you want to purge in each request.
     * *   You can specify up to 1,000 URLs that you want to purge per minute for each domain name.
     * *   You can call this operation up to 30 times per second per account.
     * #### [](#)Precautions
     * *   After a purge task is completed, your resources that are cached on points of presence (POPs) are removed. When a POP receives a request for your resources, the request is redirected to the origin server to retrieve the resources. Then, the resources are returned to the client and cached on POPs. If you frequently run purge tasks, more requests are redirected to the origin server for resources. This results in high bandwidth costs and more loads on the origin server.
     * *   A purge task takes effect 5 to 6 minutes after being submitted. If the resource you want to purge has a TTL of less than 5 minutes, you wait for it to expire instead of manually running a purge task.
     * *   To allow RAM users to perform this operation, you need to first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/445051.html).
     *
     * @param Request - RefreshDcdnObjectCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshDcdnObjectCachesResponse
     *
     * @param RefreshDcdnObjectCachesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshDcdnObjectCachesResponse
     */
    public function refreshDcdnObjectCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshDcdnObjectCaches',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshDcdnObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes specified objects on points of presence (POPs). The objects can be included in the content of files or URLs. You can refresh multiple URLs in each request.
     *
     * @remarks
     *   Dynamic Content Delivery Network (DCDN) supports POST requests in which parameters are sent as a form.
     * *   You can call the [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html) operation to purge content and call the [PreloadDcdnObjectCaches](https://help.aliyun.com/document_detail/130636.html) operation to prefetch content.
     * *   By default, each Alibaba Cloud account can purge content from a maximum of 10,000 URLs and 100 directories including subdirectories per day. If the daily peak bandwidth of your Alibaba Cloud account exceeds 200 Mbit/s, [submit a ticket](https://account.alibabacloud.com/login/login.htm?oauth_callback=https%3A//ticket-intl.console.aliyun.com/%23/ticket/createIndex) to request a quota increase. Alibaba Cloud determines whether to approve your application based on your workloads.
     * *   You can specify up to 1,000 URLs or 100 directories that you want to purge in each request.
     * *   You can specify up to 1,000 URLs that you want to purge per minute for each domain name.
     * *   You can call this operation up to 30 times per second per account.
     * #### [](#)Precautions
     * *   After a purge task is completed, your resources that are cached on points of presence (POPs) are removed. When a POP receives a request for your resources, the request is redirected to the origin server to retrieve the resources. Then, the resources are returned to the client and cached on POPs. If you frequently run purge tasks, more requests are redirected to the origin server for resources. This results in high bandwidth costs and more loads on the origin server.
     * *   A purge task takes effect 5 to 6 minutes after being submitted. If the resource you want to purge has a TTL of less than 5 minutes, you wait for it to expire instead of manually running a purge task.
     * *   To allow RAM users to perform this operation, you need to first grant them the required permissions. For more information, see [Authorize a RAM user to prefetch and refresh resources](https://help.aliyun.com/document_detail/445051.html).
     *
     * @param Request - RefreshDcdnObjectCachesRequest
     *
     * @returns RefreshDcdnObjectCachesResponse
     *
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
     * Refreshes the cache that is written by calling the cache operation of EdgeRoutine. You can refresh multiple URLs in each request.
     *
     * @remarks
     * > *   Dynamic Content Delivery Network (DCDN) supports POST requests in which parameters are sent as a form.
     * > *   Related operation: [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html).
     * > *   By default, each Alibaba Cloud account can purge content from a maxim> um of 10,000 URLs and 100 directories including subdirectories per day.
     * > *   You can specify up to 1,000 URLs or 100 directories that you want to purge in each request.
     * > *   You can specify up to 1,000 URLs that you want to purge per minute for each domain name.
     * > *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - RefreshErObjectCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshErObjectCachesResponse
     *
     * @param RefreshErObjectCachesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RefreshErObjectCachesResponse
     */
    public function refreshErObjectCachesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->mergeDomainName) {
            @$query['MergeDomainName'] = $request->mergeDomainName;
        }

        if (null !== $request->objectPath) {
            @$query['ObjectPath'] = $request->objectPath;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->routineId) {
            @$query['RoutineId'] = $request->routineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshErObjectCaches',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshErObjectCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes the cache that is written by calling the cache operation of EdgeRoutine. You can refresh multiple URLs in each request.
     *
     * @remarks
     * > *   Dynamic Content Delivery Network (DCDN) supports POST requests in which parameters are sent as a form.
     * > *   Related operation: [RefreshDcdnObjectCaches](https://help.aliyun.com/document_detail/130620.html).
     * > *   By default, each Alibaba Cloud account can purge content from a maxim> um of 10,000 URLs and 100 directories including subdirectories per day.
     * > *   You can specify up to 1,000 URLs or 100 directories that you want to purge in each request.
     * > *   You can specify up to 1,000 URLs that you want to purge per minute for each domain name.
     * > *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - RefreshErObjectCachesRequest
     *
     * @returns RefreshErObjectCachesResponse
     *
     * @param RefreshErObjectCachesRequest $request
     *
     * @return RefreshErObjectCachesResponse
     */
    public function refreshErObjectCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshErObjectCachesWithOptions($request, $runtime);
    }

    /**
     * ER场景下的cache tag粒度的刷新接口.
     *
     * @param Request - RefreshErObjectCachesByCacheTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshErObjectCachesByCacheTagResponse
     *
     * @param RefreshErObjectCachesByCacheTagRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RefreshErObjectCachesByCacheTagResponse
     */
    public function refreshErObjectCachesByCacheTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheTag) {
            @$query['CacheTag'] = $request->cacheTag;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->mergeDomainName) {
            @$query['MergeDomainName'] = $request->mergeDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshErObjectCachesByCacheTag',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshErObjectCachesByCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ER场景下的cache tag粒度的刷新接口.
     *
     * @param Request - RefreshErObjectCachesByCacheTagRequest
     *
     * @returns RefreshErObjectCachesByCacheTagResponse
     *
     * @param RefreshErObjectCachesByCacheTagRequest $request
     *
     * @return RefreshErObjectCachesByCacheTagResponse
     */
    public function refreshErObjectCachesByCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshErObjectCachesByCacheTagWithOptions($request, $runtime);
    }

    /**
     * Rolls back the configurations of an accelerated domain name from the staging environment to the production environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - RollbackDcdnStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackDcdnStagingConfigResponse
     *
     * @param RollbackDcdnStagingConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RollbackDcdnStagingConfigResponse
     */
    public function rollbackDcdnStagingConfigWithOptions($request, $runtime)
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
            'action' => 'RollbackDcdnStagingConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackDcdnStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back the configurations of an accelerated domain name from the staging environment to the production environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - RollbackDcdnStagingConfigRequest
     *
     * @returns RollbackDcdnStagingConfigResponse
     *
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
     * Configures an SSL certificate for a specified domain name.
     *
     * @param Request - SetDcdnDomainCSRCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDcdnDomainCSRCertificateResponse
     *
     * @param SetDcdnDomainCSRCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDcdnDomainCSRCertificateResponse
     */
    public function setDcdnDomainCSRCertificateWithOptions($request, $runtime)
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
            'action' => 'SetDcdnDomainCSRCertificate',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDcdnDomainCSRCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures an SSL certificate for a specified domain name.
     *
     * @param Request - SetDcdnDomainCSRCertificateRequest
     *
     * @returns SetDcdnDomainCSRCertificateResponse
     *
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
     * Enables or disables the ShangMi (SM) certificate for a domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - SetDcdnDomainSMCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDcdnDomainSMCertificateResponse
     *
     * @param SetDcdnDomainSMCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDcdnDomainSMCertificateResponse
     */
    public function setDcdnDomainSMCertificateWithOptions($request, $runtime)
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
            'action' => 'SetDcdnDomainSMCertificate',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDcdnDomainSMCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the ShangMi (SM) certificate for a domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - SetDcdnDomainSMCertificateRequest
     *
     * @returns SetDcdnDomainSMCertificateResponse
     *
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
     * Enables or disables the SSL certificate for a domain name and updates certificate details.
     *
     * @param Request - SetDcdnDomainSSLCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDcdnDomainSSLCertificateResponse
     *
     * @param SetDcdnDomainSSLCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetDcdnDomainSSLCertificateResponse
     */
    public function setDcdnDomainSSLCertificateWithOptions($request, $runtime)
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
            'action' => 'SetDcdnDomainSSLCertificate',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDcdnDomainSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the SSL certificate for a domain name and updates certificate details.
     *
     * @param Request - SetDcdnDomainSSLCertificateRequest
     *
     * @returns SetDcdnDomainSSLCertificateResponse
     *
     * @param SetDcdnDomainSSLCertificateRequest $request
     *
     * @return SetDcdnDomainSSLCertificateResponse
     */
    public function setDcdnDomainSSLCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnDomainSSLCertificateWithOptions($request, $runtime);
    }

    /**
     * Sets or modifies the domain name configuration in the canary release environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - SetDcdnDomainStagingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDcdnDomainStagingConfigResponse
     *
     * @param SetDcdnDomainStagingConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDcdnDomainStagingConfigResponse
     */
    public function setDcdnDomainStagingConfigWithOptions($request, $runtime)
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
            'action' => 'SetDcdnDomainStagingConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDcdnDomainStagingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets or modifies the domain name configuration in the canary release environment.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - SetDcdnDomainStagingConfigRequest
     *
     * @returns SetDcdnDomainStagingConfigResponse
     *
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
     * Blocks or unblocks IP addresses or CIDR blocks.
     *
     * @remarks
     * >  You can call this operation to block or unblock a large number of IP addresses or CIDR blocks. You can block or unblock up to 1,000 IP addresses or CIDR blocks in a request.
     *
     * @param Request - SetDcdnFullDomainsBlockIPRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDcdnFullDomainsBlockIPResponse
     *
     * @param SetDcdnFullDomainsBlockIPRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDcdnFullDomainsBlockIPResponse
     */
    public function setDcdnFullDomainsBlockIPWithOptions($request, $runtime)
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
            'action' => 'SetDcdnFullDomainsBlockIP',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDcdnFullDomainsBlockIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Blocks or unblocks IP addresses or CIDR blocks.
     *
     * @remarks
     * >  You can call this operation to block or unblock a large number of IP addresses or CIDR blocks. You can block or unblock up to 1,000 IP addresses or CIDR blocks in a request.
     *
     * @param Request - SetDcdnFullDomainsBlockIPRequest
     *
     * @returns SetDcdnFullDomainsBlockIPResponse
     *
     * @param SetDcdnFullDomainsBlockIPRequest $request
     *
     * @return SetDcdnFullDomainsBlockIPResponse
     */
    public function setDcdnFullDomainsBlockIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDcdnFullDomainsBlockIPWithOptions($request, $runtime);
    }

    /**
     * Configures features for a user.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - SetDcdnUserConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDcdnUserConfigResponse
     *
     * @param SetDcdnUserConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetDcdnUserConfigResponse
     */
    public function setDcdnUserConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configs) {
            @$query['Configs'] = $request->configs;
        }

        if (null !== $request->functionId) {
            @$query['FunctionId'] = $request->functionId;
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
            'action' => 'SetDcdnUserConfig',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDcdnUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures features for a user.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - SetDcdnUserConfigRequest
     *
     * @returns SetDcdnUserConfigResponse
     *
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
     * Configures a subdomain for a routine.
     *
     * @remarks
     * >
     * *   Each subdomain is globally unique. Resource Access Management (RAM) users cannot create duplicate subdomains.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param tmpReq - SetRoutineSubdomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetRoutineSubdomainResponse
     *
     * @param SetRoutineSubdomainRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SetRoutineSubdomainResponse
     */
    public function setRoutineSubdomainWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetRoutineSubdomainShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subdomains) {
            $request->subdomainsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subdomains, 'Subdomains', 'json');
        }

        $body = [];
        if (null !== $request->subdomainsShrink) {
            @$body['Subdomains'] = $request->subdomainsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetRoutineSubdomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetRoutineSubdomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a subdomain for a routine.
     *
     * @remarks
     * >
     * *   Each subdomain is globally unique. Resource Access Management (RAM) users cannot create duplicate subdomains.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - SetRoutineSubdomainRequest
     *
     * @returns SetRoutineSubdomainResponse
     *
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
     * Enables a specified disabled accelerated domain. After the accelerated domain is enabled, the value of the DomainStatus parameter changes to Online for the domain.
     *
     * @remarks
     * >
     * *   If an accelerated domain name is in invalid state or your account has an overdue payment, the accelerated domain name cannot be enabled.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - StartDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDcdnDomainResponse
     *
     * @param StartDcdnDomainRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartDcdnDomainResponse
     */
    public function startDcdnDomainWithOptions($request, $runtime)
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
            'action' => 'StartDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a specified disabled accelerated domain. After the accelerated domain is enabled, the value of the DomainStatus parameter changes to Online for the domain.
     *
     * @remarks
     * >
     * *   If an accelerated domain name is in invalid state or your account has an overdue payment, the accelerated domain name cannot be enabled.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - StartDcdnDomainRequest
     *
     * @returns StartDcdnDomainResponse
     *
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
     * Enables one or more accelerated domain names. After the accelerated domain names are enabled, the value of the DomainStatus parameter for the domain names changes to Online.
     *
     * @remarks
     *   If an accelerated domain name is in invalid state or your account has an overdue payment, the accelerated domain name cannot be enabled.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param Request - StartDcdnIpaDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDcdnIpaDomainResponse
     *
     * @param StartDcdnIpaDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartDcdnIpaDomainResponse
     */
    public function startDcdnIpaDomainWithOptions($request, $runtime)
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
            'action' => 'StartDcdnIpaDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables one or more accelerated domain names. After the accelerated domain names are enabled, the value of the DomainStatus parameter for the domain names changes to Online.
     *
     * @remarks
     *   If an accelerated domain name is in invalid state or your account has an overdue payment, the accelerated domain name cannot be enabled.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param Request - StartDcdnIpaDomainRequest
     *
     * @returns StartDcdnIpaDomainResponse
     *
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
     * Disables a specified accelerated domain. After the accelerated domain is disabled,
     *                   the value of the DomainStatus parameter changes to Offline for the domain.
     *
     * @remarks
     * >
     * *   After an accelerated domain is disabled, Dynamic Content Delivery Network (DCDN) retains its information and routes all the requests that are destined for the accelerated domain to the origin server.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - StopDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDcdnDomainResponse
     *
     * @param StopDcdnDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopDcdnDomainResponse
     */
    public function stopDcdnDomainWithOptions($request, $runtime)
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
            'action' => 'StopDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a specified accelerated domain. After the accelerated domain is disabled,
     *                   the value of the DomainStatus parameter changes to Offline for the domain.
     *
     * @remarks
     * >
     * *   After an accelerated domain is disabled, Dynamic Content Delivery Network (DCDN) retains its information and routes all the requests that are destined for the accelerated domain to the origin server.
     * *   You can call this operation up to 30 times per second per account.
     *
     * @param Request - StopDcdnDomainRequest
     *
     * @returns StopDcdnDomainResponse
     *
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
     * Disables an accelerated domain name. After an accelerated domain name is disabled, the value of the DomainStatus parameter for the domain name changes to Offline.
     *
     * @remarks
     * >
     * *   If you disable an accelerated domain, the configurations of the accelerated domain are still retained. The system automatically forwards all the requests that are destined for this domain to the origin.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param Request - StopDcdnIpaDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDcdnIpaDomainResponse
     *
     * @param StopDcdnIpaDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopDcdnIpaDomainResponse
     */
    public function stopDcdnIpaDomainWithOptions($request, $runtime)
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
            'action' => 'StopDcdnIpaDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an accelerated domain name. After an accelerated domain name is disabled, the value of the DomainStatus parameter for the domain name changes to Offline.
     *
     * @remarks
     * >
     * *   If you disable an accelerated domain, the configurations of the accelerated domain are still retained. The system automatically forwards all the requests that are destined for this domain to the origin.
     * *   You can call this operation up to 20 times per second per account.
     *
     * @param Request - StopDcdnIpaDomainRequest
     *
     * @returns StopDcdnIpaDomainResponse
     *
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
     * Adds one or more tags to a resource.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - TagDcdnResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagDcdnResourcesResponse
     *
     * @param TagDcdnResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TagDcdnResourcesResponse
     */
    public function tagDcdnResourcesWithOptions($request, $runtime)
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
            'action' => 'TagDcdnResources',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagDcdnResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more tags to a resource.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - TagDcdnResourcesRequest
     *
     * @returns TagDcdnResourcesResponse
     *
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
     * Removes one or more tags from a resource.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - UntagDcdnResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagDcdnResourcesResponse
     *
     * @param UntagDcdnResourcesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UntagDcdnResourcesResponse
     */
    public function untagDcdnResourcesWithOptions($request, $runtime)
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
            'action' => 'UntagDcdnResources',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagDcdnResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes one or more tags from a resource.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - UntagDcdnResourcesRequest
     *
     * @returns UntagDcdnResourcesResponse
     *
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
     * Updates a tracking task by task ID.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - UpdateDcdnDeliverTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDcdnDeliverTaskResponse
     *
     * @param UpdateDcdnDeliverTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDcdnDeliverTaskResponse
     */
    public function updateDcdnDeliverTaskWithOptions($request, $runtime)
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
            'action' => 'UpdateDcdnDeliverTask',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDcdnDeliverTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a tracking task by task ID.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - UpdateDcdnDeliverTaskRequest
     *
     * @returns UpdateDcdnDeliverTaskResponse
     *
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
     * Modifies an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - UpdateDcdnDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDcdnDomainResponse
     *
     * @param UpdateDcdnDomainRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDcdnDomainResponse
     */
    public function updateDcdnDomainWithOptions($request, $runtime)
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
            'action' => 'UpdateDcdnDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDcdnDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an accelerated domain name.
     *
     * @remarks
     * > You can call this operation up to 30 times per second per account.
     *
     * @param Request - UpdateDcdnDomainRequest
     *
     * @returns UpdateDcdnDomainResponse
     *
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
     * Modifies a domain name that is accelerated by IP Application Accelerator (IPA).
     *
     * @remarks
     * >  You can call this operation up to 20 times per second per account.
     *
     * @param Request - UpdateDcdnIpaDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDcdnIpaDomainResponse
     *
     * @param UpdateDcdnIpaDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDcdnIpaDomainResponse
     */
    public function updateDcdnIpaDomainWithOptions($request, $runtime)
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
            'action' => 'UpdateDcdnIpaDomain',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDcdnIpaDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a domain name that is accelerated by IP Application Accelerator (IPA).
     *
     * @remarks
     * >  You can call this operation up to 20 times per second per account.
     *
     * @param Request - UpdateDcdnIpaDomainRequest
     *
     * @returns UpdateDcdnIpaDomainResponse
     *
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
     * Updates a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - UpdateDcdnSLSRealtimeLogDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDcdnSLSRealtimeLogDeliveryResponse
     *
     * @param UpdateDcdnSLSRealtimeLogDeliveryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateDcdnSLSRealtimeLogDeliveryResponse
     */
    public function updateDcdnSLSRealtimeLogDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataCenter) {
            @$body['DataCenter'] = $request->dataCenter;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->SLSLogStore) {
            @$body['SLSLogStore'] = $request->SLSLogStore;
        }

        if (null !== $request->SLSProject) {
            @$body['SLSProject'] = $request->SLSProject;
        }

        if (null !== $request->SLSRegion) {
            @$body['SLSRegion'] = $request->SLSRegion;
        }

        if (null !== $request->samplingRate) {
            @$body['SamplingRate'] = $request->samplingRate;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDcdnSLSRealtimeLogDelivery',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDcdnSLSRealtimeLogDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a real-time log delivery project.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - UpdateDcdnSLSRealtimeLogDeliveryRequest
     *
     * @returns UpdateDcdnSLSRealtimeLogDeliveryResponse
     *
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
     * Updates one or more operations reports.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - UpdateDcdnSubTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDcdnSubTaskResponse
     *
     * @param UpdateDcdnSubTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDcdnSubTaskResponse
     */
    public function updateDcdnSubTaskWithOptions($request, $runtime)
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
            'action' => 'UpdateDcdnSubTask',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDcdnSubTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates one or more operations reports.
     *
     * @remarks
     * > You can call this operation up to three times per second per account.
     *
     * @param Request - UpdateDcdnSubTaskRequest
     *
     * @returns UpdateDcdnSubTaskResponse
     *
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
     * Updates the fields in real-time log entries.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - UpdateDcdnUserRealTimeDeliveryFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDcdnUserRealTimeDeliveryFieldResponse
     *
     * @param UpdateDcdnUserRealTimeDeliveryFieldRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateDcdnUserRealTimeDeliveryFieldResponse
     */
    public function updateDcdnUserRealTimeDeliveryFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDcdnUserRealTimeDeliveryField',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDcdnUserRealTimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the fields in real-time log entries.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - UpdateDcdnUserRealTimeDeliveryFieldRequest
     *
     * @returns UpdateDcdnUserRealTimeDeliveryFieldResponse
     *
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
     * Uploads code to EdgeRoutine (ER).
     *
     * @remarks
     * >
     * *   Each time you submit code, a version of the code is generated. You can manage and publish code by version.
     * *   Each routine can retain at most 10 versions. If the upper limit is reached, you must call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - UploadRoutineCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadRoutineCodeResponse
     *
     * @param UploadRoutineCodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadRoutineCodeResponse
     */
    public function uploadRoutineCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeDescription) {
            @$body['CodeDescription'] = $request->codeDescription;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadRoutineCode',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadRoutineCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads code to EdgeRoutine (ER).
     *
     * @remarks
     * >
     * *   Each time you submit code, a version of the code is generated. You can manage and publish code by version.
     * *   Each routine can retain at most 10 versions. If the upper limit is reached, you must call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - UploadRoutineCodeRequest
     *
     * @returns UploadRoutineCodeResponse
     *
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
     * Uploads code to a routine for testing.
     *
     * @remarks
     * >
     * *   Each time you upload code to a routine, a version is generated. The number of versions is counted by CodeRev. The uploaded code is used only for testing.
     * *   The code is automatically published to a staging environment.
     * *   Each routine can retain at most 10 versions. If the upper limit is reached, you need to call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - UploadStagingRoutineCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadStagingRoutineCodeResponse
     *
     * @param UploadStagingRoutineCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UploadStagingRoutineCodeResponse
     */
    public function uploadStagingRoutineCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeDescription) {
            @$body['CodeDescription'] = $request->codeDescription;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadStagingRoutineCode',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadStagingRoutineCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads code to a routine for testing.
     *
     * @remarks
     * >
     * *   Each time you upload code to a routine, a version is generated. The number of versions is counted by CodeRev. The uploaded code is used only for testing.
     * *   The code is automatically published to a staging environment.
     * *   Each routine can retain at most 10 versions. If the upper limit is reached, you need to call the DeleteRoutineCodeRevision operation to manually delete versions that are no longer needed before new versions can be saved.
     * *   You can call this operation up to 100 times per second per account.
     *
     * @param Request - UploadStagingRoutineCodeRequest
     *
     * @returns UploadStagingRoutineCodeResponse
     *
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
     * Verifies the ownership of a domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - VerifyDcdnDomainOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyDcdnDomainOwnerResponse
     *
     * @param VerifyDcdnDomainOwnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VerifyDcdnDomainOwnerResponse
     */
    public function verifyDcdnDomainOwnerWithOptions($request, $runtime)
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
            'action' => 'VerifyDcdnDomainOwner',
            'version' => '2018-01-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyDcdnDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the ownership of a domain name.
     *
     * @remarks
     * > You can call this operation up to 100 times per second per account.
     *
     * @param Request - VerifyDcdnDomainOwnerRequest
     *
     * @returns VerifyDcdnDomainOwnerResponse
     *
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
