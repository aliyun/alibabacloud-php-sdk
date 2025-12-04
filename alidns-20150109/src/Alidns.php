<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsCacheDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsCacheDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmMonitorRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmMonitorResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainBackupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainBackupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddRecursionRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddRecursionRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddRecursionZoneRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddRecursionZoneResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\BindInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\BindInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainOfDnsProductRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainOfDnsProductResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CopyGtmConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CopyGtmConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmAddressShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmInstanceConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmInstanceConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmMonitorTemplateRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmMonitorTemplateResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateCloudGtmMonitorTemplateShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsAppKeyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsAppKeyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsUdpIpSegmentRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsUdpIpSegmentResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmAddressRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmAddressResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmInstanceConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmInstanceConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmMonitorTemplateRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCloudGtmMonitorTemplateResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCustomLinesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteCustomLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDnsCacheDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDnsCacheDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDnsGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDnsGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDnsGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDnsGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteRecursionRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteRecursionRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteRecursionZoneRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteRecursionZoneResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteSubDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteSubDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultCountRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultCountResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolReferenceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolReferenceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmMonitorTemplateRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmMonitorTemplateResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsCacheDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAvailableAlertGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAvailableAlertGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceSystemCnameRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceSystemCnameResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstanceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstanceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohAccountStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohAccountStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohDomainStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohDomainStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohDomainStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohDomainStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohSubDomainStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohUserInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDohUserInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainDnssecInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainDnssecInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainGroupsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainNsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainResolveStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainResolveStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategiesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAvailableAlertGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAvailableAlertGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceSystemCnameRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceSystemCnameResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInternetDnsLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheRemainQuotaRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheRemainQuotaResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTaskResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTasksRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeIspFlushCacheTasksResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAccountSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAccountSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeysRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeysResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsOperateLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsOperateLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatStatisticRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatStatisticResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUdpIpSegmentsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUdpIpSegmentsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUserInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUserInfoResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordResolveStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordResolveStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecursionRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecursionRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecursionZoneRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecursionZoneResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSubDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSubDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ExecuteGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ExecuteGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetMainDomainNameRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetMainDomainNameResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetTxtRecordForVerifyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\GetTxtRecordForVerifyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAddressesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAddressesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAddressPoolsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAddressPoolsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAlertLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAlertLogsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorTemplatesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorTemplatesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListRecursionRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListRecursionRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListRecursionZonesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListRecursionZonesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ModifyHichinaDomainDNSResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\MoveDomainResourceGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\MoveDomainResourceGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\MoveGtmResourceGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\MoveGtmResourceGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\OperateBatchDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PausePdnsServiceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PausePdnsServiceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RemovePdnsAppKeyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RemovePdnsAppKeyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RemovePdnsUdpIpSegmentRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RemovePdnsUdpIpSegmentResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RemoveRspDomainServerHoldStatusForGatewayRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RemoveRspDomainServerHoldStatusForGatewayResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ResumePdnsServiceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ResumePdnsServiceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RetrieveDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RetrieveDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RollbackGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RollbackGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstancesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstancesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmMonitorTemplatesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmMonitorTemplatesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionZonesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionZonesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchRecursionZonesShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDnsGtmAccessModeRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDnsGtmAccessModeResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDnsGtmMonitorStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDnsGtmMonitorStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDNSSLBStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDNSSLBStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainDnssecStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainDnssecStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainRecordStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetDomainRecordStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmAccessModeRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmAccessModeResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmMonitorStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SetGtmMonitorStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SubmitIspFlushCacheTaskRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SubmitIspFlushCacheTaskResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SwitchDnsGtmInstanceStrategyModeRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SwitchDnsGtmInstanceStrategyModeResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TransferDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\TransferDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UnbindInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UnbindInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateAppKeyStateRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateAppKeyStateResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressEnableStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressEnableStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressManualAvailableStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressManualAvailableStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolBasicConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolBasicConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolEnableStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolEnableStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolLbStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolLbStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressPoolRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmGlobalAlertRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmGlobalAlertResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmGlobalAlertShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigAlertRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigAlertResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigAlertShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigBasicRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigBasicResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigEnableStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigEnableStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigLbStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigLbStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceNameRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceNameResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmMonitorTemplateRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmMonitorTemplateRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmMonitorTemplateRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmMonitorTemplateResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmMonitorTemplateShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsCacheDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmInstanceGlobalConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmInstanceGlobalConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmMonitorRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmMonitorResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDNSSLBWeightRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDNSSLBWeightResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDomainRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAccessStrategyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAccessStrategyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmInstanceGlobalConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmInstanceGlobalConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmMonitorRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmMonitorResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmRecoveryPlanResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateIspFlushCacheInstanceConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateIspFlushCacheInstanceConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordEnableStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordEnableStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordWeightEnableStatusRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordWeightEnableStatusResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordWeightRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionRecordWeightResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneEffectiveScopeRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneEffectiveScopeResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneEffectiveScopeShrinkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneProxyPatternRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneProxyPatternResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneRemarkRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRecursionZoneRemarkResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainServerProhibitStatusForGatewayRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainServerProhibitStatusForGatewayResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidateDnsGtmCnameRrCanUseRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidateDnsGtmCnameRrCanUseResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidatePdnsUdpIpSegmentRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidatePdnsUdpIpSegmentResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Alidns extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alidns', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a custom line to the domain name.
     *
     * @remarks
     * In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *
     * @param request - AddCustomLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomLineResponse
     *
     * @param AddCustomLineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddCustomLineResponse
     */
    public function addCustomLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ipSegment) {
            @$query['IpSegment'] = $request->ipSegment;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineName) {
            @$query['LineName'] = $request->lineName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddCustomLine',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a custom line to the domain name.
     *
     * @remarks
     * In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *
     * @param request - AddCustomLineRequest
     *
     * @returns AddCustomLineResponse
     *
     * @param AddCustomLineRequest $request
     *
     * @return AddCustomLineResponse
     */
    public function addCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomLineWithOptions($request, $runtime);
    }

    /**
     * Adds a cache-accelerated domain name based on the specified parameters.
     *
     * @param request - AddDnsCacheDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDnsCacheDomainResponse
     *
     * @param AddDnsCacheDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddDnsCacheDomainResponse
     */
    public function addDnsCacheDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheTtlMax) {
            @$query['CacheTtlMax'] = $request->cacheTtlMax;
        }

        if (null !== $request->cacheTtlMin) {
            @$query['CacheTtlMin'] = $request->cacheTtlMin;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sourceDnsServer) {
            @$query['SourceDnsServer'] = $request->sourceDnsServer;
        }

        if (null !== $request->sourceEdns) {
            @$query['SourceEdns'] = $request->sourceEdns;
        }

        if (null !== $request->sourceProtocol) {
            @$query['SourceProtocol'] = $request->sourceProtocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDnsCacheDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDnsCacheDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a cache-accelerated domain name based on the specified parameters.
     *
     * @param request - AddDnsCacheDomainRequest
     *
     * @returns AddDnsCacheDomainResponse
     *
     * @param AddDnsCacheDomainRequest $request
     *
     * @return AddDnsCacheDomainResponse
     */
    public function addDnsCacheDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsCacheDomainWithOptions($request, $runtime);
    }

    /**
     * Creates an access policy.
     *
     * @param request - AddDnsGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDnsGtmAccessStrategyResponse
     *
     * @param AddDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDnsGtmAccessStrategyResponse
     */
    public function addDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultAddrPool) {
            @$query['DefaultAddrPool'] = $request->defaultAddrPool;
        }

        if (null !== $request->defaultAddrPoolType) {
            @$query['DefaultAddrPoolType'] = $request->defaultAddrPoolType;
        }

        if (null !== $request->defaultLatencyOptimization) {
            @$query['DefaultLatencyOptimization'] = $request->defaultLatencyOptimization;
        }

        if (null !== $request->defaultLbaStrategy) {
            @$query['DefaultLbaStrategy'] = $request->defaultLbaStrategy;
        }

        if (null !== $request->defaultMaxReturnAddrNum) {
            @$query['DefaultMaxReturnAddrNum'] = $request->defaultMaxReturnAddrNum;
        }

        if (null !== $request->defaultMinAvailableAddrNum) {
            @$query['DefaultMinAvailableAddrNum'] = $request->defaultMinAvailableAddrNum;
        }

        if (null !== $request->failoverAddrPool) {
            @$query['FailoverAddrPool'] = $request->failoverAddrPool;
        }

        if (null !== $request->failoverAddrPoolType) {
            @$query['FailoverAddrPoolType'] = $request->failoverAddrPoolType;
        }

        if (null !== $request->failoverLatencyOptimization) {
            @$query['FailoverLatencyOptimization'] = $request->failoverLatencyOptimization;
        }

        if (null !== $request->failoverLbaStrategy) {
            @$query['FailoverLbaStrategy'] = $request->failoverLbaStrategy;
        }

        if (null !== $request->failoverMaxReturnAddrNum) {
            @$query['FailoverMaxReturnAddrNum'] = $request->failoverMaxReturnAddrNum;
        }

        if (null !== $request->failoverMinAvailableAddrNum) {
            @$query['FailoverMinAvailableAddrNum'] = $request->failoverMinAvailableAddrNum;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lines) {
            @$query['Lines'] = $request->lines;
        }

        if (null !== $request->strategyMode) {
            @$query['StrategyMode'] = $request->strategyMode;
        }

        if (null !== $request->strategyName) {
            @$query['StrategyName'] = $request->strategyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDnsGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access policy.
     *
     * @param request - AddDnsGtmAccessStrategyRequest
     *
     * @returns AddDnsGtmAccessStrategyResponse
     *
     * @param AddDnsGtmAccessStrategyRequest $request
     *
     * @return AddDnsGtmAccessStrategyResponse
     */
    public function addDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates an address pool.
     *
     * @param request - AddDnsGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDnsGtmAddressPoolResponse
     *
     * @param AddDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDnsGtmAddressPoolResponse
     */
    public function addDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addr) {
            @$query['Addr'] = $request->addr;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNode) {
            @$query['IspCityNode'] = $request->ispCityNode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lbaStrategy) {
            @$query['LbaStrategy'] = $request->lbaStrategy;
        }

        if (null !== $request->monitorExtendInfo) {
            @$query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }

        if (null !== $request->monitorStatus) {
            @$query['MonitorStatus'] = $request->monitorStatus;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDnsGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDnsGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an address pool.
     *
     * @param request - AddDnsGtmAddressPoolRequest
     *
     * @returns AddDnsGtmAddressPoolResponse
     *
     * @param AddDnsGtmAddressPoolRequest $request
     *
     * @return AddDnsGtmAddressPoolResponse
     */
    public function addDnsGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Creates a health check task.
     *
     * @remarks
     *
     * @param request - AddDnsGtmMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDnsGtmMonitorResponse
     *
     * @param AddDnsGtmMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddDnsGtmMonitorResponse
     */
    public function addDnsGtmMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNode) {
            @$query['IspCityNode'] = $request->ispCityNode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorExtendInfo) {
            @$query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDnsGtmMonitor',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDnsGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a health check task.
     *
     * @remarks
     *
     * @param request - AddDnsGtmMonitorRequest
     *
     * @returns AddDnsGtmMonitorResponse
     *
     * @param AddDnsGtmMonitorRequest $request
     *
     * @return AddDnsGtmMonitorResponse
     */
    public function addDnsGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * Adds a domain name based on the specified parameters.
     *
     * @remarks
     * For more information about how to check whether a domain name is valid, see
     * [Domain name validity](https://www.alibabacloud.com/help/zh/doc-detail/67788.htm).
     *
     * @param request - AddDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainResponse
     *
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a domain name based on the specified parameters.
     *
     * @remarks
     * For more information about how to check whether a domain name is valid, see
     * [Domain name validity](https://www.alibabacloud.com/help/zh/doc-detail/67788.htm).
     *
     * @param request - AddDomainRequest
     *
     * @returns AddDomainResponse
     *
     * @param AddDomainRequest $request
     *
     * @return AddDomainResponse
     */
    public function addDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainWithOptions($request, $runtime);
    }

    /**
     * Creates a backup task for a domain name.
     *
     * @param request - AddDomainBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainBackupResponse
     *
     * @param AddDomainBackupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainBackupResponse
     */
    public function addDomainBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->periodType) {
            @$query['PeriodType'] = $request->periodType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomainBackup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDomainBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a backup task for a domain name.
     *
     * @param request - AddDomainBackupRequest
     *
     * @returns AddDomainBackupResponse
     *
     * @param AddDomainBackupRequest $request
     *
     * @return AddDomainBackupResponse
     */
    public function addDomainBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainBackupWithOptions($request, $runtime);
    }

    /**
     * Creates a domain name group based on the specified parameters.
     *
     * @param request - AddDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainGroupResponse
     *
     * @param AddDomainGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddDomainGroupResponse
     */
    public function addDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomainGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a domain name group based on the specified parameters.
     *
     * @param request - AddDomainGroupRequest
     *
     * @returns AddDomainGroupResponse
     *
     * @param AddDomainGroupRequest $request
     *
     * @return AddDomainGroupResponse
     */
    public function addDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainGroupWithOptions($request, $runtime);
    }

    /**
     * Adds a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - AddDomainRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDomainRecordResponse
     *
     * @param AddDomainRecordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainRecordResponse
     */
    public function addDomainRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->RR) {
            @$query['RR'] = $request->RR;
        }

        if (null !== $request->TTL) {
            @$query['TTL'] = $request->TTL;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDomainRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDomainRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - AddDomainRecordRequest
     *
     * @returns AddDomainRecordResponse
     *
     * @param AddDomainRecordRequest $request
     *
     * @return AddDomainRecordResponse
     */
    public function addDomainRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - AddGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGtmAccessStrategyResponse
     *
     * @param AddGtmAccessStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddGtmAccessStrategyResponse
     */
    public function addGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLines) {
            @$query['AccessLines'] = $request->accessLines;
        }

        if (null !== $request->defaultAddrPoolId) {
            @$query['DefaultAddrPoolId'] = $request->defaultAddrPoolId;
        }

        if (null !== $request->failoverAddrPoolId) {
            @$query['FailoverAddrPoolId'] = $request->failoverAddrPoolId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyName) {
            @$query['StrategyName'] = $request->strategyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddGtmAccessStrategyRequest
     *
     * @returns AddGtmAccessStrategyResponse
     *
     * @param AddGtmAccessStrategyRequest $request
     *
     * @return AddGtmAccessStrategyResponse
     */
    public function addGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates an address pool.
     *
     * @param request - AddGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGtmAddressPoolResponse
     *
     * @param AddGtmAddressPoolRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddGtmAddressPoolResponse
     */
    public function addGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addr) {
            @$query['Addr'] = $request->addr;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNode) {
            @$query['IspCityNode'] = $request->ispCityNode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->minAvailableAddrNum) {
            @$query['MinAvailableAddrNum'] = $request->minAvailableAddrNum;
        }

        if (null !== $request->monitorExtendInfo) {
            @$query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }

        if (null !== $request->monitorStatus) {
            @$query['MonitorStatus'] = $request->monitorStatus;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an address pool.
     *
     * @param request - AddGtmAddressPoolRequest
     *
     * @returns AddGtmAddressPoolResponse
     *
     * @param AddGtmAddressPoolRequest $request
     *
     * @return AddGtmAddressPoolResponse
     */
    public function addGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Creates a health check task.
     *
     * @param request - AddGtmMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGtmMonitorResponse
     *
     * @param AddGtmMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddGtmMonitorResponse
     */
    public function addGtmMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNode) {
            @$query['IspCityNode'] = $request->ispCityNode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorExtendInfo) {
            @$query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGtmMonitor',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a health check task.
     *
     * @param request - AddGtmMonitorRequest
     *
     * @returns AddGtmMonitorResponse
     *
     * @param AddGtmMonitorRequest $request
     *
     * @return AddGtmMonitorResponse
     */
    public function addGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * Creates a disaster recovery plan.
     *
     * @param request - AddGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGtmRecoveryPlanResponse
     *
     * @param AddGtmRecoveryPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddGtmRecoveryPlanResponse
     */
    public function addGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faultAddrPool) {
            @$query['FaultAddrPool'] = $request->faultAddrPool;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a disaster recovery plan.
     *
     * @param request - AddGtmRecoveryPlanRequest
     *
     * @returns AddGtmRecoveryPlanResponse
     *
     * @param AddGtmRecoveryPlanRequest $request
     *
     * @return AddGtmRecoveryPlanResponse
     */
    public function addGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * 新增递归解析内置权威解析记录.
     *
     * @param request - AddRecursionRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRecursionRecordResponse
     *
     * @param AddRecursionRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddRecursionRecordResponse
     */
    public function addRecursionRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->requestSource) {
            @$query['RequestSource'] = $request->requestSource;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRecursionRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRecursionRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增递归解析内置权威解析记录.
     *
     * @param request - AddRecursionRecordRequest
     *
     * @returns AddRecursionRecordResponse
     *
     * @param AddRecursionRecordRequest $request
     *
     * @return AddRecursionRecordResponse
     */
    public function addRecursionRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecursionRecordWithOptions($request, $runtime);
    }

    /**
     * 新增递归解析内置权威域名zone.
     *
     * @param request - AddRecursionZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRecursionZoneResponse
     *
     * @param AddRecursionZoneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddRecursionZoneResponse
     */
    public function addRecursionZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->proxyPattern) {
            @$query['ProxyPattern'] = $request->proxyPattern;
        }

        if (null !== $request->zoneName) {
            @$query['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddRecursionZone',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddRecursionZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增递归解析内置权威域名zone.
     *
     * @param request - AddRecursionZoneRequest
     *
     * @returns AddRecursionZoneResponse
     *
     * @param AddRecursionZoneRequest $request
     *
     * @return AddRecursionZoneResponse
     */
    public function addRecursionZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecursionZoneWithOptions($request, $runtime);
    }

    /**
     * Binds one or more domain names to a paid Alibaba Cloud DNS instance.
     *
     * @remarks
     * A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call this API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call this API operation to bind only one domain name to the instance. However, if the instance is already bound to a domain name, you must unbind the original domain name from the instance and bind the desired domain name to the instance.
     *
     * @param request - BindInstanceDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindInstanceDomainsResponse
     *
     * @param BindInstanceDomainsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindInstanceDomainsResponse
     */
    public function bindInstanceDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindInstanceDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds one or more domain names to a paid Alibaba Cloud DNS instance.
     *
     * @remarks
     * A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call this API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call this API operation to bind only one domain name to the instance. However, if the instance is already bound to a domain name, you must unbind the original domain name from the instance and bind the desired domain name to the instance.
     *
     * @param request - BindInstanceDomainsRequest
     *
     * @returns BindInstanceDomainsResponse
     *
     * @param BindInstanceDomainsRequest $request
     *
     * @return BindInstanceDomainsResponse
     */
    public function bindInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * Moves a domain name from the original group to the new group based on the specified parameters.
     *
     * @remarks
     * You can specify GroupId to move a domain name to a specific domain name group. You can move the domain name to the group that contains all domain names or the default group.
     *
     * @param request - ChangeDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDomainGroupResponse
     *
     * @param ChangeDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeDomainGroupResponse
     */
    public function changeDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeDomainGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a domain name from the original group to the new group based on the specified parameters.
     *
     * @remarks
     * You can specify GroupId to move a domain name to a specific domain name group. You can move the domain name to the group that contains all domain names or the default group.
     *
     * @param request - ChangeDomainGroupRequest
     *
     * @returns ChangeDomainGroupResponse
     *
     * @param ChangeDomainGroupRequest $request
     *
     * @return ChangeDomainGroupResponse
     */
    public function changeDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeDomainGroupWithOptions($request, $runtime);
    }

    /**
     * Changes the domain name that is bound to an Alibaba Cloud DNS instance.
     *
     * @remarks
     *   **You can call this operation regardless of whether the Alibaba Cloud DNS instance is bound to a domain name. You can also call this operation to unbind the domain name from the Alibaba Cloud DNS instance by leaving the NewDomain parameter empty.**
     * *   **This operation applies to instances of the custom edition. To change the domain name that is bound to an Alibaba Cloud DNS instance of Personal Edition, Enterprise Standard Edition, or Enterprise Ultimate Edition, call the BindInstanceDomains operation.
     *
     * @param request - ChangeDomainOfDnsProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeDomainOfDnsProductResponse
     *
     * @param ChangeDomainOfDnsProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChangeDomainOfDnsProductResponse
     */
    public function changeDomainOfDnsProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newDomain) {
            @$query['NewDomain'] = $request->newDomain;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeDomainOfDnsProduct',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeDomainOfDnsProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the domain name that is bound to an Alibaba Cloud DNS instance.
     *
     * @remarks
     *   **You can call this operation regardless of whether the Alibaba Cloud DNS instance is bound to a domain name. You can also call this operation to unbind the domain name from the Alibaba Cloud DNS instance by leaving the NewDomain parameter empty.**
     * *   **This operation applies to instances of the custom edition. To change the domain name that is bound to an Alibaba Cloud DNS instance of Personal Edition, Enterprise Standard Edition, or Enterprise Ultimate Edition, call the BindInstanceDomains operation.
     *
     * @param request - ChangeDomainOfDnsProductRequest
     *
     * @returns ChangeDomainOfDnsProductResponse
     *
     * @param ChangeDomainOfDnsProductRequest $request
     *
     * @return ChangeDomainOfDnsProductResponse
     */
    public function changeDomainOfDnsProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeDomainOfDnsProductWithOptions($request, $runtime);
    }

    /**
     * Copies the configurations of a Global Traffic Manager (GTM) instance.
     *
     * @param request - CopyGtmConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyGtmConfigResponse
     *
     * @param CopyGtmConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyGtmConfigResponse
     */
    public function copyGtmConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->copyType) {
            @$query['CopyType'] = $request->copyType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyGtmConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyGtmConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies the configurations of a Global Traffic Manager (GTM) instance.
     *
     * @param request - CopyGtmConfigRequest
     *
     * @returns CopyGtmConfigResponse
     *
     * @param CopyGtmConfigRequest $request
     *
     * @return CopyGtmConfigResponse
     */
    public function copyGtmConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyGtmConfigWithOptions($request, $runtime);
    }

    /**
     * Creates an address.
     *
     * @param tmpReq - CreateCloudGtmAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudGtmAddressResponse
     *
     * @param CreateCloudGtmAddressRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCloudGtmAddressResponse
     */
    public function createCloudGtmAddressWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCloudGtmAddressShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->healthTasks) {
            $request->healthTasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->healthTasks, 'HealthTasks', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->attributeInfo) {
            @$query['AttributeInfo'] = $request->attributeInfo;
        }

        if (null !== $request->availableMode) {
            @$query['AvailableMode'] = $request->availableMode;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->healthJudgement) {
            @$query['HealthJudgement'] = $request->healthJudgement;
        }

        if (null !== $request->healthTasksShrink) {
            @$query['HealthTasks'] = $request->healthTasksShrink;
        }

        if (null !== $request->manualAvailableStatus) {
            @$query['ManualAvailableStatus'] = $request->manualAvailableStatus;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudGtmAddress',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudGtmAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an address.
     *
     * @param request - CreateCloudGtmAddressRequest
     *
     * @returns CreateCloudGtmAddressResponse
     *
     * @param CreateCloudGtmAddressRequest $request
     *
     * @return CreateCloudGtmAddressResponse
     */
    public function createCloudGtmAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudGtmAddressWithOptions($request, $runtime);
    }

    /**
     * Creates an address pool.
     *
     * @param request - CreateCloudGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudGtmAddressPoolResponse
     *
     * @param CreateCloudGtmAddressPoolRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateCloudGtmAddressPoolResponse
     */
    public function createCloudGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolName) {
            @$query['AddressPoolName'] = $request->addressPoolName;
        }

        if (null !== $request->addressPoolType) {
            @$query['AddressPoolType'] = $request->addressPoolType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->healthJudgement) {
            @$query['HealthJudgement'] = $request->healthJudgement;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an address pool.
     *
     * @param request - CreateCloudGtmAddressPoolRequest
     *
     * @returns CreateCloudGtmAddressPoolResponse
     *
     * @param CreateCloudGtmAddressPoolRequest $request
     *
     * @return CreateCloudGtmAddressPoolResponse
     */
    public function createCloudGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * 创建gtm实例配置.
     *
     * @param request - CreateCloudGtmInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudGtmInstanceConfigResponse
     *
     * @param CreateCloudGtmInstanceConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateCloudGtmInstanceConfigResponse
     */
    public function createCloudGtmInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->scheduleHostname) {
            @$query['ScheduleHostname'] = $request->scheduleHostname;
        }

        if (null !== $request->scheduleRrType) {
            @$query['ScheduleRrType'] = $request->scheduleRrType;
        }

        if (null !== $request->scheduleZoneMode) {
            @$query['ScheduleZoneMode'] = $request->scheduleZoneMode;
        }

        if (null !== $request->scheduleZoneName) {
            @$query['ScheduleZoneName'] = $request->scheduleZoneName;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudGtmInstanceConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudGtmInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建gtm实例配置.
     *
     * @param request - CreateCloudGtmInstanceConfigRequest
     *
     * @returns CreateCloudGtmInstanceConfigResponse
     *
     * @param CreateCloudGtmInstanceConfigRequest $request
     *
     * @return CreateCloudGtmInstanceConfigResponse
     */
    public function createCloudGtmInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudGtmInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a health check template.
     *
     * @param tmpReq - CreateCloudGtmMonitorTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudGtmMonitorTemplateResponse
     *
     * @param CreateCloudGtmMonitorTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateCloudGtmMonitorTemplateResponse
     */
    public function createCloudGtmMonitorTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateCloudGtmMonitorTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ispCityNodes) {
            $request->ispCityNodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ispCityNodes, 'IspCityNodes', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->extendInfo) {
            @$query['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->failureRate) {
            @$query['FailureRate'] = $request->failureRate;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->ispCityNodesShrink) {
            @$query['IspCityNodes'] = $request->ispCityNodesShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudGtmMonitorTemplate',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudGtmMonitorTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a health check template.
     *
     * @param request - CreateCloudGtmMonitorTemplateRequest
     *
     * @returns CreateCloudGtmMonitorTemplateResponse
     *
     * @param CreateCloudGtmMonitorTemplateRequest $request
     *
     * @return CreateCloudGtmMonitorTemplateResponse
     */
    public function createCloudGtmMonitorTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudGtmMonitorTemplateWithOptions($request, $runtime);
    }

    /**
     * 创建公共DNS AppKey.
     *
     * @param request - CreatePdnsAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdnsAppKeyResponse
     *
     * @param CreatePdnsAppKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePdnsAppKeyResponse
     */
    public function createPdnsAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePdnsAppKey',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePdnsAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建公共DNS AppKey.
     *
     * @param request - CreatePdnsAppKeyRequest
     *
     * @returns CreatePdnsAppKeyResponse
     *
     * @param CreatePdnsAppKeyRequest $request
     *
     * @return CreatePdnsAppKeyResponse
     */
    public function createPdnsAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPdnsAppKeyWithOptions($request, $runtime);
    }

    /**
     * 创建公共DNS Udp Ip地址段.
     *
     * @param request - CreatePdnsUdpIpSegmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdnsUdpIpSegmentResponse
     *
     * @param CreatePdnsUdpIpSegmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePdnsUdpIpSegmentResponse
     */
    public function createPdnsUdpIpSegmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->ipToken) {
            @$query['IpToken'] = $request->ipToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePdnsUdpIpSegment',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePdnsUdpIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建公共DNS Udp Ip地址段.
     *
     * @param request - CreatePdnsUdpIpSegmentRequest
     *
     * @returns CreatePdnsUdpIpSegmentResponse
     *
     * @param CreatePdnsUdpIpSegmentRequest $request
     *
     * @return CreatePdnsUdpIpSegmentResponse
     */
    public function createPdnsUdpIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPdnsUdpIpSegmentWithOptions($request, $runtime);
    }

    /**
     * Deletes an address.
     *
     * @param request - DeleteCloudGtmAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudGtmAddressResponse
     *
     * @param DeleteCloudGtmAddressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCloudGtmAddressResponse
     */
    public function deleteCloudGtmAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudGtmAddress',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudGtmAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an address.
     *
     * @param request - DeleteCloudGtmAddressRequest
     *
     * @returns DeleteCloudGtmAddressResponse
     *
     * @param DeleteCloudGtmAddressRequest $request
     *
     * @return DeleteCloudGtmAddressResponse
     */
    public function deleteCloudGtmAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudGtmAddressWithOptions($request, $runtime);
    }

    /**
     * Deletes an address pool.
     *
     * @param request - DeleteCloudGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudGtmAddressPoolResponse
     *
     * @param DeleteCloudGtmAddressPoolRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteCloudGtmAddressPoolResponse
     */
    public function deleteCloudGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an address pool.
     *
     * @param request - DeleteCloudGtmAddressPoolRequest
     *
     * @returns DeleteCloudGtmAddressPoolResponse
     *
     * @param DeleteCloudGtmAddressPoolRequest $request
     *
     * @return DeleteCloudGtmAddressPoolResponse
     */
    public function deleteCloudGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Deletes an access domain name that is configured for a Global Traffic Manager (GTM) 3.0 instance.
     *
     * @param request - DeleteCloudGtmInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudGtmInstanceConfigResponse
     *
     * @param DeleteCloudGtmInstanceConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteCloudGtmInstanceConfigResponse
     */
    public function deleteCloudGtmInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudGtmInstanceConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudGtmInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access domain name that is configured for a Global Traffic Manager (GTM) 3.0 instance.
     *
     * @param request - DeleteCloudGtmInstanceConfigRequest
     *
     * @returns DeleteCloudGtmInstanceConfigResponse
     *
     * @param DeleteCloudGtmInstanceConfigRequest $request
     *
     * @return DeleteCloudGtmInstanceConfigResponse
     */
    public function deleteCloudGtmInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudGtmInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes a health check template.
     *
     * @param request - DeleteCloudGtmMonitorTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudGtmMonitorTemplateResponse
     *
     * @param DeleteCloudGtmMonitorTemplateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteCloudGtmMonitorTemplateResponse
     */
    public function deleteCloudGtmMonitorTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudGtmMonitorTemplate',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudGtmMonitorTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a health check template.
     *
     * @param request - DeleteCloudGtmMonitorTemplateRequest
     *
     * @returns DeleteCloudGtmMonitorTemplateResponse
     *
     * @param DeleteCloudGtmMonitorTemplateRequest $request
     *
     * @return DeleteCloudGtmMonitorTemplateResponse
     */
    public function deleteCloudGtmMonitorTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudGtmMonitorTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes custom lines at a time by using the unique IDs.
     *
     * @param request - DeleteCustomLinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomLinesResponse
     *
     * @param DeleteCustomLinesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomLinesResponse
     */
    public function deleteCustomLinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineIds) {
            @$query['LineIds'] = $request->lineIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomLines',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes custom lines at a time by using the unique IDs.
     *
     * @param request - DeleteCustomLinesRequest
     *
     * @returns DeleteCustomLinesResponse
     *
     * @param DeleteCustomLinesRequest $request
     *
     * @return DeleteCustomLinesResponse
     */
    public function deleteCustomLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomLinesWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified cache-accelerated domain name.
     *
     * @param request - DeleteDnsCacheDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDnsCacheDomainResponse
     *
     * @param DeleteDnsCacheDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDnsCacheDomainResponse
     */
    public function deleteDnsCacheDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDnsCacheDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDnsCacheDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified cache-accelerated domain name.
     *
     * @param request - DeleteDnsCacheDomainRequest
     *
     * @returns DeleteDnsCacheDomainResponse
     *
     * @param DeleteDnsCacheDomainRequest $request
     *
     * @return DeleteDnsCacheDomainResponse
     */
    public function deleteDnsCacheDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsCacheDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDnsGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDnsGtmAccessStrategyResponse
     *
     * @param DeleteDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDnsGtmAccessStrategyResponse
     */
    public function deleteDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDnsGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDnsGtmAccessStrategyRequest
     *
     * @returns DeleteDnsGtmAccessStrategyResponse
     *
     * @param DeleteDnsGtmAccessStrategyRequest $request
     *
     * @return DeleteDnsGtmAccessStrategyResponse
     */
    public function deleteDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDnsGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDnsGtmAddressPoolResponse
     *
     * @param DeleteDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDnsGtmAddressPoolResponse
     */
    public function deleteDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDnsGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDnsGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDnsGtmAddressPoolRequest
     *
     * @returns DeleteDnsGtmAddressPoolResponse
     *
     * @param DeleteDnsGtmAddressPoolRequest $request
     *
     * @return DeleteDnsGtmAddressPoolResponse
     */
    public function deleteDnsGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Deletes a domain name based on the specified parameters.
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a domain name based on the specified parameters.
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * Deletes a domain name group. After you delete the domain name group, the domain names in the group are moved to the default group.
     *
     * @remarks
     * >  The default group cannot be deleted.
     *
     * @param request - DeleteDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainGroupResponse
     *
     * @param DeleteDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a domain name group. After you delete the domain name group, the domain names in the group are moved to the default group.
     *
     * @remarks
     * >  The default group cannot be deleted.
     *
     * @param request - DeleteDomainGroupRequest
     *
     * @returns DeleteDomainGroupResponse
     *
     * @param DeleteDomainGroupRequest $request
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes an Alibaba Cloud DNS (DNS) record based on the specified parameters.
     *
     * @param request - DeleteDomainRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainRecordResponse
     *
     * @param DeleteDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDomainRecordResponse
     */
    public function deleteDomainRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomainRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Alibaba Cloud DNS (DNS) record based on the specified parameters.
     *
     * @param request - DeleteDomainRecordRequest
     *
     * @returns DeleteDomainRecordResponse
     *
     * @param DeleteDomainRecordRequest $request
     *
     * @return DeleteDomainRecordResponse
     */
    public function deleteDomainRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGtmAccessStrategyResponse
     *
     * @param DeleteGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteGtmAccessStrategyResponse
     */
    public function deleteGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteGtmAccessStrategyRequest
     *
     * @returns DeleteGtmAccessStrategyResponse
     *
     * @param DeleteGtmAccessStrategyRequest $request
     *
     * @return DeleteGtmAccessStrategyResponse
     */
    public function deleteGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGtmAddressPoolResponse
     *
     * @param DeleteGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGtmAddressPoolResponse
     */
    public function deleteGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteGtmAddressPoolRequest
     *
     * @returns DeleteGtmAddressPoolResponse
     *
     * @param DeleteGtmAddressPoolRequest $request
     *
     * @return DeleteGtmAddressPoolResponse
     */
    public function deleteGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGtmRecoveryPlanResponse
     *
     * @param DeleteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGtmRecoveryPlanResponse
     */
    public function deleteGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recoveryPlanId) {
            @$query['RecoveryPlanId'] = $request->recoveryPlanId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteGtmRecoveryPlanRequest
     *
     * @returns DeleteGtmRecoveryPlanResponse
     *
     * @param DeleteGtmRecoveryPlanRequest $request
     *
     * @return DeleteGtmRecoveryPlanResponse
     */
    public function deleteGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * 删除递归解析内置权威解析记录.
     *
     * @param request - DeleteRecursionRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecursionRecordResponse
     *
     * @param DeleteRecursionRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRecursionRecordResponse
     */
    public function deleteRecursionRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRecursionRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRecursionRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除递归解析内置权威解析记录.
     *
     * @param request - DeleteRecursionRecordRequest
     *
     * @returns DeleteRecursionRecordResponse
     *
     * @param DeleteRecursionRecordRequest $request
     *
     * @return DeleteRecursionRecordResponse
     */
    public function deleteRecursionRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecursionRecordWithOptions($request, $runtime);
    }

    /**
     * 删除递归解析内置权威域名zone.
     *
     * @param request - DeleteRecursionZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecursionZoneResponse
     *
     * @param DeleteRecursionZoneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteRecursionZoneResponse
     */
    public function deleteRecursionZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRecursionZone',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRecursionZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除递归解析内置权威域名zone.
     *
     * @param request - DeleteRecursionZoneRequest
     *
     * @returns DeleteRecursionZoneResponse
     *
     * @param DeleteRecursionZoneRequest $request
     *
     * @return DeleteRecursionZoneResponse
     */
    public function deleteRecursionZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecursionZoneWithOptions($request, $runtime);
    }

    /**
     * Deletes the DNS records that are corresponding to a hostname based on the specified parameters.
     *
     * @remarks
     * If the DNS records to be deleted contain locked DNS records, the locked DNS records will not be deleted.
     *
     * @param request - DeleteSubDomainRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSubDomainRecordsResponse
     *
     * @param DeleteSubDomainRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSubDomainRecordsResponse
     */
    public function deleteSubDomainRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->RR) {
            @$query['RR'] = $request->RR;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSubDomainRecords',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSubDomainRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the DNS records that are corresponding to a hostname based on the specified parameters.
     *
     * @remarks
     * If the DNS records to be deleted contain locked DNS records, the locked DNS records will not be deleted.
     *
     * @param request - DeleteSubDomainRecordsRequest
     *
     * @returns DeleteSubDomainRecordsResponse
     *
     * @param DeleteSubDomainRecordsRequest $request
     *
     * @return DeleteSubDomainRecordsResponse
     */
    public function deleteSubDomainRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the execution result of a batch operation task based on the task ID. If you do not specify task ID, the execution result of the last batch operation task is returned.
     *
     * @param request - DescribeBatchResultCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBatchResultCountResponse
     *
     * @param DescribeBatchResultCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBatchResultCountResponse
     */
    public function describeBatchResultCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchType) {
            @$query['BatchType'] = $request->batchType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBatchResultCount',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBatchResultCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution result of a batch operation task based on the task ID. If you do not specify task ID, the execution result of the last batch operation task is returned.
     *
     * @param request - DescribeBatchResultCountRequest
     *
     * @returns DescribeBatchResultCountResponse
     *
     * @param DescribeBatchResultCountRequest $request
     *
     * @return DescribeBatchResultCountResponse
     */
    public function describeBatchResultCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBatchResultCountWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed results of a batch operation task.
     *
     * @remarks
     * Before you call this operation, make sure that the batch operation task is complete.
     *
     * @param request - DescribeBatchResultDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBatchResultDetailResponse
     *
     * @param DescribeBatchResultDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBatchResultDetailResponse
     */
    public function describeBatchResultDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchType) {
            @$query['BatchType'] = $request->batchType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'DescribeBatchResultDetail',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBatchResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed results of a batch operation task.
     *
     * @remarks
     * Before you call this operation, make sure that the batch operation task is complete.
     *
     * @param request - DescribeBatchResultDetailRequest
     *
     * @returns DescribeBatchResultDetailResponse
     *
     * @param DescribeBatchResultDetailRequest $request
     *
     * @return DescribeBatchResultDetailResponse
     */
    public function describeBatchResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBatchResultDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an address.
     *
     * @param request - DescribeCloudGtmAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmAddressResponse
     *
     * @param DescribeCloudGtmAddressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudGtmAddressResponse
     */
    public function describeCloudGtmAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmAddress',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an address.
     *
     * @param request - DescribeCloudGtmAddressRequest
     *
     * @returns DescribeCloudGtmAddressResponse
     *
     * @param DescribeCloudGtmAddressRequest $request
     *
     * @return DescribeCloudGtmAddressResponse
     */
    public function describeCloudGtmAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmAddressWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an address pool.
     *
     * @param request - DescribeCloudGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmAddressPoolResponse
     *
     * @param DescribeCloudGtmAddressPoolRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCloudGtmAddressPoolResponse
     */
    public function describeCloudGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an address pool.
     *
     * @param request - DescribeCloudGtmAddressPoolRequest
     *
     * @returns DescribeCloudGtmAddressPoolResponse
     *
     * @param DescribeCloudGtmAddressPoolRequest $request
     *
     * @return DescribeCloudGtmAddressPoolResponse
     */
    public function describeCloudGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the access domain names that reference an address pool.
     *
     * @param request - DescribeCloudGtmAddressPoolReferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmAddressPoolReferenceResponse
     *
     * @param DescribeCloudGtmAddressPoolReferenceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeCloudGtmAddressPoolReferenceResponse
     */
    public function describeCloudGtmAddressPoolReferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmAddressPoolReference',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmAddressPoolReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the access domain names that reference an address pool.
     *
     * @param request - DescribeCloudGtmAddressPoolReferenceRequest
     *
     * @returns DescribeCloudGtmAddressPoolReferenceResponse
     *
     * @param DescribeCloudGtmAddressPoolReferenceRequest $request
     *
     * @return DescribeCloudGtmAddressPoolReferenceResponse
     */
    public function describeCloudGtmAddressPoolReference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmAddressPoolReferenceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the address pools and Global Traffic Manager (GTM) 3.0 instances that reference an address.
     *
     * @param request - DescribeCloudGtmAddressReferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmAddressReferenceResponse
     *
     * @param DescribeCloudGtmAddressReferenceRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCloudGtmAddressReferenceResponse
     */
    public function describeCloudGtmAddressReferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmAddressReference',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmAddressReferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the address pools and Global Traffic Manager (GTM) 3.0 instances that reference an address.
     *
     * @param request - DescribeCloudGtmAddressReferenceRequest
     *
     * @returns DescribeCloudGtmAddressReferenceResponse
     *
     * @param DescribeCloudGtmAddressReferenceRequest $request
     *
     * @return DescribeCloudGtmAddressReferenceResponse
     */
    public function describeCloudGtmAddressReference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmAddressReferenceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCloudGtmGlobalAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmGlobalAlertResponse
     *
     * @param DescribeCloudGtmGlobalAlertRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCloudGtmGlobalAlertResponse
     */
    public function describeCloudGtmGlobalAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmGlobalAlert',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmGlobalAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCloudGtmGlobalAlertRequest
     *
     * @returns DescribeCloudGtmGlobalAlertResponse
     *
     * @param DescribeCloudGtmGlobalAlertRequest $request
     *
     * @return DescribeCloudGtmGlobalAlertResponse
     */
    public function describeCloudGtmGlobalAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmGlobalAlertWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCloudGtmInstanceConfigAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmInstanceConfigAlertResponse
     *
     * @param DescribeCloudGtmInstanceConfigAlertRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCloudGtmInstanceConfigAlertResponse
     */
    public function describeCloudGtmInstanceConfigAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmInstanceConfigAlert',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmInstanceConfigAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCloudGtmInstanceConfigAlertRequest
     *
     * @returns DescribeCloudGtmInstanceConfigAlertResponse
     *
     * @param DescribeCloudGtmInstanceConfigAlertRequest $request
     *
     * @return DescribeCloudGtmInstanceConfigAlertResponse
     */
    public function describeCloudGtmInstanceConfigAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmInstanceConfigAlertWithOptions($request, $runtime);
    }

    /**
     * Queries the complete configuration information about a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeCloudGtmInstanceConfigFullInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmInstanceConfigFullInfoResponse
     *
     * @param DescribeCloudGtmInstanceConfigFullInfoRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeCloudGtmInstanceConfigFullInfoResponse
     */
    public function describeCloudGtmInstanceConfigFullInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmInstanceConfigFullInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmInstanceConfigFullInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the complete configuration information about a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeCloudGtmInstanceConfigFullInfoRequest
     *
     * @returns DescribeCloudGtmInstanceConfigFullInfoResponse
     *
     * @param DescribeCloudGtmInstanceConfigFullInfoRequest $request
     *
     * @return DescribeCloudGtmInstanceConfigFullInfoResponse
     */
    public function describeCloudGtmInstanceConfigFullInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmInstanceConfigFullInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a health check template.
     *
     * @param request - DescribeCloudGtmMonitorTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmMonitorTemplateResponse
     *
     * @param DescribeCloudGtmMonitorTemplateRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCloudGtmMonitorTemplateResponse
     */
    public function describeCloudGtmMonitorTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmMonitorTemplate',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmMonitorTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a health check template.
     *
     * @param request - DescribeCloudGtmMonitorTemplateRequest
     *
     * @returns DescribeCloudGtmMonitorTemplateResponse
     *
     * @param DescribeCloudGtmMonitorTemplateRequest $request
     *
     * @return DescribeCloudGtmMonitorTemplateResponse
     */
    public function describeCloudGtmMonitorTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmMonitorTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCloudGtmSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmSummaryResponse
     *
     * @param DescribeCloudGtmSummaryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudGtmSummaryResponse
     */
    public function describeCloudGtmSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudGtmSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCloudGtmSummaryRequest
     *
     * @returns DescribeCloudGtmSummaryResponse
     *
     * @param DescribeCloudGtmSummaryRequest $request
     *
     * @return DescribeCloudGtmSummaryResponse
     */
    public function describeCloudGtmSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCloudGtmSystemLinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudGtmSystemLinesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCloudGtmSystemLinesResponse
     */
    public function describeCloudGtmSystemLinesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeCloudGtmSystemLines',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudGtmSystemLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DescribeCloudGtmSystemLinesResponse
     *
     * @return DescribeCloudGtmSystemLinesResponse
     */
    public function describeCloudGtmSystemLines()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmSystemLinesWithOptions($runtime);
    }

    /**
     * Queries the details of a custom line by its unique ID.
     *
     * @param request - DescribeCustomLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomLineResponse
     *
     * @param DescribeCustomLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCustomLineResponse
     */
    public function describeCustomLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineId) {
            @$query['LineId'] = $request->lineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomLine',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom line by its unique ID.
     *
     * @param request - DescribeCustomLineRequest
     *
     * @returns DescribeCustomLineResponse
     *
     * @param DescribeCustomLineRequest $request
     *
     * @return DescribeCustomLineResponse
     */
    public function describeCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLineWithOptions($request, $runtime);
    }

    /**
     * Queries custom lines by domain name.
     *
     * @param request - DescribeCustomLinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomLinesResponse
     *
     * @param DescribeCustomLinesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCustomLinesResponse
     */
    public function describeCustomLinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeCustomLines',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom lines by domain name.
     *
     * @param request - DescribeCustomLinesRequest
     *
     * @returns DescribeCustomLinesResponse
     *
     * @param DescribeCustomLinesRequest $request
     *
     * @return DescribeCustomLinesResponse
     */
    public function describeCustomLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLinesWithOptions($request, $runtime);
    }

    /**
     * Queries the subdomains for which weighted round-robin is enabled based on the specified parameters.
     *
     * @param request - DescribeDNSSLBSubDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDNSSLBSubDomainsResponse
     *
     * @param DescribeDNSSLBSubDomainsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDNSSLBSubDomainsResponse
     */
    public function describeDNSSLBSubDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDNSSLBSubDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDNSSLBSubDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the subdomains for which weighted round-robin is enabled based on the specified parameters.
     *
     * @param request - DescribeDNSSLBSubDomainsRequest
     *
     * @returns DescribeDNSSLBSubDomainsResponse
     *
     * @param DescribeDNSSLBSubDomainsRequest $request
     *
     * @return DescribeDNSSLBSubDomainsResponse
     */
    public function describeDNSSLBSubDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDNSSLBSubDomainsWithOptions($request, $runtime);
    }

    /**
     * 查询代理域名.
     *
     * @param request - DescribeDnsCacheDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsCacheDomainsResponse
     *
     * @param DescribeDnsCacheDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDnsCacheDomainsResponse
     */
    public function describeDnsCacheDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeDnsCacheDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsCacheDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代理域名.
     *
     * @param request - DescribeDnsCacheDomainsRequest
     *
     * @returns DescribeDnsCacheDomainsResponse
     *
     * @param DescribeDnsCacheDomainsRequest $request
     *
     * @return DescribeDnsCacheDomainsResponse
     */
    public function describeDnsCacheDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsCacheDomainsWithOptions($request, $runtime);
    }

    /**
     * Queries access policies of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAccessStrategiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmAccessStrategiesResponse
     *
     * @param DescribeDnsGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDnsGtmAccessStrategiesResponse
     */
    public function describeDnsGtmAccessStrategiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->strategyMode) {
            @$query['StrategyMode'] = $request->strategyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmAccessStrategies',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmAccessStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access policies of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAccessStrategiesRequest
     *
     * @returns DescribeDnsGtmAccessStrategiesResponse
     *
     * @param DescribeDnsGtmAccessStrategiesRequest $request
     *
     * @return DescribeDnsGtmAccessStrategiesResponse
     */
    public function describeDnsGtmAccessStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAccessStrategiesWithOptions($request, $runtime);
    }

    /**
     * Queries detailed information about an access policy of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmAccessStrategyResponse
     *
     * @param DescribeDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmAccessStrategyResponse
     */
    public function describeDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries detailed information about an access policy of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAccessStrategyRequest
     *
     * @returns DescribeDnsGtmAccessStrategyResponse
     *
     * @param DescribeDnsGtmAccessStrategyRequest $request
     *
     * @return DescribeDnsGtmAccessStrategyResponse
     */
    public function describeDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries the available configurations of an access policy of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAccessStrategyAvailableConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmAccessStrategyAvailableConfigResponse
     *
     * @param DescribeDnsGtmAccessStrategyAvailableConfigRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse
     */
    public function describeDnsGtmAccessStrategyAvailableConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyMode) {
            @$query['StrategyMode'] = $request->strategyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmAccessStrategyAvailableConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmAccessStrategyAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available configurations of an access policy of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAccessStrategyAvailableConfigRequest
     *
     * @returns DescribeDnsGtmAccessStrategyAvailableConfigResponse
     *
     * @param DescribeDnsGtmAccessStrategyAvailableConfigRequest $request
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse
     */
    public function describeDnsGtmAccessStrategyAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAccessStrategyAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the source regions of addresses.
     *
     * @param request - DescribeDnsGtmAddrAttributeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmAddrAttributeInfoResponse
     *
     * @param DescribeDnsGtmAddrAttributeInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponse
     */
    public function describeDnsGtmAddrAttributeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrs) {
            @$query['Addrs'] = $request->addrs;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmAddrAttributeInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmAddrAttributeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the source regions of addresses.
     *
     * @param request - DescribeDnsGtmAddrAttributeInfoRequest
     *
     * @returns DescribeDnsGtmAddrAttributeInfoResponse
     *
     * @param DescribeDnsGtmAddrAttributeInfoRequest $request
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponse
     */
    public function describeDnsGtmAddrAttributeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAddrAttributeInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the available configurations of an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAddressPoolAvailableConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmAddressPoolAvailableConfigResponse
     *
     * @param DescribeDnsGtmAddressPoolAvailableConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse
     */
    public function describeDnsGtmAddressPoolAvailableConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmAddressPoolAvailableConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmAddressPoolAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available configurations of an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmAddressPoolAvailableConfigRequest
     *
     * @returns DescribeDnsGtmAddressPoolAvailableConfigResponse
     *
     * @param DescribeDnsGtmAddressPoolAvailableConfigRequest $request
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse
     */
    public function describeDnsGtmAddressPoolAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAddressPoolAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDnsGtmAvailableAlertGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmAvailableAlertGroupResponse
     *
     * @param DescribeDnsGtmAvailableAlertGroupRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponse
     */
    public function describeDnsGtmAvailableAlertGroupWithOptions($request, $runtime)
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
            'action' => 'DescribeDnsGtmAvailableAlertGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmAvailableAlertGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDnsGtmAvailableAlertGroupRequest
     *
     * @returns DescribeDnsGtmAvailableAlertGroupResponse
     *
     * @param DescribeDnsGtmAvailableAlertGroupRequest $request
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponse
     */
    public function describeDnsGtmAvailableAlertGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAvailableAlertGroupWithOptions($request, $runtime);
    }

    /**
     * Queries detailed information about a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmInstanceResponse
     *
     * @param DescribeDnsGtmInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDnsGtmInstanceResponse
     */
    public function describeDnsGtmInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmInstance',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries detailed information about a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceRequest
     *
     * @returns DescribeDnsGtmInstanceResponse
     *
     * @param DescribeDnsGtmInstanceRequest $request
     *
     * @return DescribeDnsGtmInstanceResponse
     */
    public function describeDnsGtmInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries detailed information about an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmInstanceAddressPoolResponse
     *
     * @param DescribeDnsGtmInstanceAddressPoolRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse
     */
    public function describeDnsGtmInstanceAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmInstanceAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmInstanceAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries detailed information about an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceAddressPoolRequest
     *
     * @returns DescribeDnsGtmInstanceAddressPoolResponse
     *
     * @param DescribeDnsGtmInstanceAddressPoolRequest $request
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse
     */
    public function describeDnsGtmInstanceAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Queries the address pools of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceAddressPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmInstanceAddressPoolsResponse
     *
     * @param DescribeDnsGtmInstanceAddressPoolsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponse
     */
    public function describeDnsGtmInstanceAddressPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeDnsGtmInstanceAddressPools',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmInstanceAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the address pools of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceAddressPoolsRequest
     *
     * @returns DescribeDnsGtmInstanceAddressPoolsResponse
     *
     * @param DescribeDnsGtmInstanceAddressPoolsRequest $request
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponse
     */
    public function describeDnsGtmInstanceAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmInstanceStatusResponse
     *
     * @param DescribeDnsGtmInstanceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmInstanceStatusResponse
     */
    public function describeDnsGtmInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmInstanceStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceStatusRequest
     *
     * @returns DescribeDnsGtmInstanceStatusResponse
     *
     * @param DescribeDnsGtmInstanceStatusRequest $request
     *
     * @return DescribeDnsGtmInstanceStatusResponse
     */
    public function describeDnsGtmInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the CNAME domain name assigned by the system for a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceSystemCnameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmInstanceSystemCnameResponse
     *
     * @param DescribeDnsGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponse
     */
    public function describeDnsGtmInstanceSystemCnameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmInstanceSystemCname',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmInstanceSystemCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the CNAME domain name assigned by the system for a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmInstanceSystemCnameRequest
     *
     * @returns DescribeDnsGtmInstanceSystemCnameResponse
     *
     * @param DescribeDnsGtmInstanceSystemCnameRequest $request
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponse
     */
    public function describeDnsGtmInstanceSystemCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceSystemCnameWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances.
     *
     * @param request - DescribeDnsGtmInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmInstancesResponse
     *
     * @param DescribeDnsGtmInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDnsGtmInstancesResponse
     */
    public function describeDnsGtmInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeDnsGtmInstances',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances.
     *
     * @param request - DescribeDnsGtmInstancesRequest
     *
     * @returns DescribeDnsGtmInstancesResponse
     *
     * @param DescribeDnsGtmInstancesRequest $request
     *
     * @return DescribeDnsGtmInstancesResponse
     */
    public function describeDnsGtmInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries operation logs of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmLogsResponse
     *
     * @param DescribeDnsGtmLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDnsGtmLogsResponse
     */
    public function describeDnsGtmLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries operation logs of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeDnsGtmLogsRequest
     *
     * @returns DescribeDnsGtmLogsResponse
     *
     * @param DescribeDnsGtmLogsRequest $request
     *
     * @return DescribeDnsGtmLogsResponse
     */
    public function describeDnsGtmLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration items that can be set for a health check task.
     *
     * @param request - DescribeDnsGtmMonitorAvailableConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmMonitorAvailableConfigResponse
     *
     * @param DescribeDnsGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse
     */
    public function describeDnsGtmMonitorAvailableConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeDnsGtmMonitorAvailableConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmMonitorAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration items that can be set for a health check task.
     *
     * @param request - DescribeDnsGtmMonitorAvailableConfigRequest
     *
     * @returns DescribeDnsGtmMonitorAvailableConfigResponse
     *
     * @param DescribeDnsGtmMonitorAvailableConfigRequest $request
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse
     */
    public function describeDnsGtmMonitorAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmMonitorAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the health check configuration of an address pool.
     *
     * @param request - DescribeDnsGtmMonitorConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsGtmMonitorConfigResponse
     *
     * @param DescribeDnsGtmMonitorConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDnsGtmMonitorConfigResponse
     */
    public function describeDnsGtmMonitorConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorConfigId) {
            @$query['MonitorConfigId'] = $request->monitorConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsGtmMonitorConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsGtmMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health check configuration of an address pool.
     *
     * @param request - DescribeDnsGtmMonitorConfigRequest
     *
     * @returns DescribeDnsGtmMonitorConfigResponse
     *
     * @param DescribeDnsGtmMonitorConfigRequest $request
     *
     * @return DescribeDnsGtmMonitorConfigResponse
     */
    public function describeDnsGtmMonitorConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmMonitorConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a paid Alibaba Cloud DNS instance based on the instance ID.
     *
     * @param request - DescribeDnsProductInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsProductInstanceResponse
     *
     * @param DescribeDnsProductInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDnsProductInstanceResponse
     */
    public function describeDnsProductInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsProductInstance',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsProductInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a paid Alibaba Cloud DNS instance based on the instance ID.
     *
     * @param request - DescribeDnsProductInstanceRequest
     *
     * @returns DescribeDnsProductInstanceResponse
     *
     * @param DescribeDnsProductInstanceRequest $request
     *
     * @return DescribeDnsProductInstanceResponse
     */
    public function describeDnsProductInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsProductInstanceWithOptions($request, $runtime);
    }

    /**
     * Calls the DescribeDnsProductInstances operation to query the list of paid Alibaba Cloud DNS instances based on input parameters.
     *
     * @remarks
     * >  If the response parameters of an Alibaba Cloud DNS instance do not contain domain names, no domain names are bound to the instance.
     *
     * @param request - DescribeDnsProductInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDnsProductInstancesResponse
     *
     * @param DescribeDnsProductInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDnsProductInstancesResponse
     */
    public function describeDnsProductInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->versionCode) {
            @$query['VersionCode'] = $request->versionCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDnsProductInstances',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDnsProductInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeDnsProductInstances operation to query the list of paid Alibaba Cloud DNS instances based on input parameters.
     *
     * @remarks
     * >  If the response parameters of an Alibaba Cloud DNS instance do not contain domain names, no domain names are bound to the instance.
     *
     * @param request - DescribeDnsProductInstancesRequest
     *
     * @returns DescribeDnsProductInstancesResponse
     *
     * @param DescribeDnsProductInstancesRequest $request
     *
     * @return DescribeDnsProductInstancesResponse
     */
    public function describeDnsProductInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsProductInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDohAccountStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDohAccountStatisticsResponse
     *
     * @param DescribeDohAccountStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDohAccountStatisticsResponse
     */
    public function describeDohAccountStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDohAccountStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDohAccountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDohAccountStatisticsRequest
     *
     * @returns DescribeDohAccountStatisticsResponse
     *
     * @param DescribeDohAccountStatisticsRequest $request
     *
     * @return DescribeDohAccountStatisticsResponse
     */
    public function describeDohAccountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohAccountStatisticsWithOptions($request, $runtime);
    }

    /**
     * 查询DOH域名请求量数据.
     *
     * @param request - DescribeDohDomainStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDohDomainStatisticsResponse
     *
     * @param DescribeDohDomainStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDohDomainStatisticsResponse
     */
    public function describeDohDomainStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDohDomainStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDohDomainStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询DOH域名请求量数据.
     *
     * @param request - DescribeDohDomainStatisticsRequest
     *
     * @returns DescribeDohDomainStatisticsResponse
     *
     * @param DescribeDohDomainStatisticsRequest $request
     *
     * @return DescribeDohDomainStatisticsResponse
     */
    public function describeDohDomainStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDohDomainStatisticsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDohDomainStatisticsSummaryResponse
     *
     * @param DescribeDohDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDohDomainStatisticsSummaryResponse
     */
    public function describeDohDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDohDomainStatisticsSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDohDomainStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDohDomainStatisticsSummaryRequest
     *
     * @returns DescribeDohDomainStatisticsSummaryResponse
     *
     * @param DescribeDohDomainStatisticsSummaryRequest $request
     *
     * @return DescribeDohDomainStatisticsSummaryResponse
     */
    public function describeDohDomainStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDohSubDomainStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDohSubDomainStatisticsResponse
     *
     * @param DescribeDohSubDomainStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDohSubDomainStatisticsResponse
     */
    public function describeDohSubDomainStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDohSubDomainStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDohSubDomainStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDohSubDomainStatisticsRequest
     *
     * @returns DescribeDohSubDomainStatisticsResponse
     *
     * @param DescribeDohSubDomainStatisticsRequest $request
     *
     * @return DescribeDohSubDomainStatisticsResponse
     */
    public function describeDohSubDomainStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohSubDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDohSubDomainStatisticsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDohSubDomainStatisticsSummaryResponse
     *
     * @param DescribeDohSubDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDohSubDomainStatisticsSummaryResponse
     */
    public function describeDohSubDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDohSubDomainStatisticsSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDohSubDomainStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDohSubDomainStatisticsSummaryRequest
     *
     * @returns DescribeDohSubDomainStatisticsSummaryResponse
     *
     * @param DescribeDohSubDomainStatisticsSummaryRequest $request
     *
     * @return DescribeDohSubDomainStatisticsSummaryResponse
     */
    public function describeDohSubDomainStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohSubDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the numbers of accessed domains and subdomains by using DNS over HTTPS (DoH).
     *
     * @param request - DescribeDohUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDohUserInfoResponse
     *
     * @param DescribeDohUserInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDohUserInfoResponse
     */
    public function describeDohUserInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDohUserInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDohUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the numbers of accessed domains and subdomains by using DNS over HTTPS (DoH).
     *
     * @param request - DescribeDohUserInfoRequest
     *
     * @returns DescribeDohUserInfoResponse
     *
     * @param DescribeDohUserInfoRequest $request
     *
     * @return DescribeDohUserInfoResponse
     */
    public function describeDohUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohUserInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the Domain Name System Security Extensions (DNSSEC) configurations of a domain name based on the specified parameters.
     *
     * @param request - DescribeDomainDnssecInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainDnssecInfoResponse
     *
     * @param DescribeDomainDnssecInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainDnssecInfoResponse
     */
    public function describeDomainDnssecInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainDnssecInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainDnssecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Domain Name System Security Extensions (DNSSEC) configurations of a domain name based on the specified parameters.
     *
     * @param request - DescribeDomainDnssecInfoRequest
     *
     * @returns DescribeDomainDnssecInfoResponse
     *
     * @param DescribeDomainDnssecInfoRequest $request
     *
     * @return DescribeDomainDnssecInfoResponse
     */
    public function describeDomainDnssecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDnssecInfoWithOptions($request, $runtime);
    }

    /**
     * Queries all domain name groups based on the specified parameters.
     *
     * @param request - DescribeDomainGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainGroupsResponse
     *
     * @param DescribeDomainGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainGroupsResponse
     */
    public function describeDomainGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeDomainGroups',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all domain name groups based on the specified parameters.
     *
     * @param request - DescribeDomainGroupsRequest
     *
     * @returns DescribeDomainGroupsResponse
     *
     * @param DescribeDomainGroupsRequest $request
     *
     * @return DescribeDomainGroupsResponse
     */
    public function describeDomainGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a domain name based on specified parameters.
     *
     * @remarks
     * In this example, the domain name is bound to an instance of Alibaba Cloud DNS Enterprise Ultimate Edition. For more information about valid Domain Name System (DNS) request lines, see the return values of the RecordLines parameter.
     *
     * @param request - DescribeDomainInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainInfoResponse
     *
     * @param DescribeDomainInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainInfoResponse
     */
    public function describeDomainInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->needDetailAttributes) {
            @$query['NeedDetailAttributes'] = $request->needDetailAttributes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a domain name based on specified parameters.
     *
     * @remarks
     * In this example, the domain name is bound to an instance of Alibaba Cloud DNS Enterprise Ultimate Edition. For more information about valid Domain Name System (DNS) request lines, see the return values of the RecordLines parameter.
     *
     * @param request - DescribeDomainInfoRequest
     *
     * @returns DescribeDomainInfoResponse
     *
     * @param DescribeDomainInfoRequest $request
     *
     * @return DescribeDomainInfoResponse
     */
    public function describeDomainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the operation logs of domain names based on the specified parameters.
     *
     * @param request - DescribeDomainLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainLogsResponse
     *
     * @param DescribeDomainLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainLogsResponse
     */
    public function describeDomainLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of domain names based on the specified parameters.
     *
     * @param request - DescribeDomainLogsRequest
     *
     * @returns DescribeDomainLogsResponse
     *
     * @param DescribeDomainLogsRequest $request
     *
     * @return DescribeDomainLogsResponse
     */
    public function describeDomainLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the name servers configured for a specified domain name and checks whether all the name servers are Alibaba Cloud Domain Name System (DNS) servers.
     *
     * @remarks
     * >  You can call this operation to query the authoritative servers of a domain name registry to obtain the name servers for a domain name. If the domain name is in an invalid state, such as serverHold or clientHold, an error may be returned.
     *
     * @param request - DescribeDomainNsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainNsResponse
     *
     * @param DescribeDomainNsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDomainNsResponse
     */
    public function describeDomainNsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainNs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainNsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the name servers configured for a specified domain name and checks whether all the name servers are Alibaba Cloud Domain Name System (DNS) servers.
     *
     * @remarks
     * >  You can call this operation to query the authoritative servers of a domain name registry to obtain the name servers for a domain name. If the domain name is in an invalid state, such as serverHold or clientHold, an error may be returned.
     *
     * @param request - DescribeDomainNsRequest
     *
     * @returns DescribeDomainNsResponse
     *
     * @param DescribeDomainNsRequest $request
     *
     * @return DescribeDomainNsResponse
     */
    public function describeDomainNs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainNsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a Domain Name System (DNS) record by the ID of the DNS record.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Alidns\\&api=DescribeDomainRecordInfo\\&type=RPC\\&version=2015-01-09)
     *
     * @param request - DescribeDomainRecordInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRecordInfoResponse
     *
     * @param DescribeDomainRecordInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainRecordInfoResponse
     */
    public function describeDomainRecordInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRecordInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRecordInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a Domain Name System (DNS) record by the ID of the DNS record.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Alidns\\&api=DescribeDomainRecordInfo\\&type=RPC\\&version=2015-01-09)
     *
     * @param request - DescribeDomainRecordInfoRequest
     *
     * @returns DescribeDomainRecordInfoResponse
     *
     * @param DescribeDomainRecordInfoRequest $request
     *
     * @return DescribeDomainRecordInfoResponse
     */
    public function describeDomainRecordInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRecordInfoWithOptions($request, $runtime);
    }

    /**
     * Queries all Domain Name System (DNS) records of the specified primary domain names based on the specified parameters.
     *
     * @remarks
     *   You can specify DomainName, PageNumber, and PageSize to query the DNS records of the specified domain names.
     * *   You can also specify RRKeyWord, TypeKeyWord, or ValueKeyWord to query the DNS records that contain the specified keyword.
     * *   By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     * *   You can specify GroupId to query the DNS records of the specified domain names based on the group ID. You can query the DNS records of all domain names and the domain names in the default group.
     *
     * @param request - DescribeDomainRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRecordsResponse
     *
     * @param DescribeDomainRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainRecordsResponse
     */
    public function describeDomainRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->RRKeyWord) {
            @$query['RRKeyWord'] = $request->RRKeyWord;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->typeKeyWord) {
            @$query['TypeKeyWord'] = $request->typeKeyWord;
        }

        if (null !== $request->valueKeyWord) {
            @$query['ValueKeyWord'] = $request->valueKeyWord;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRecords',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all Domain Name System (DNS) records of the specified primary domain names based on the specified parameters.
     *
     * @remarks
     *   You can specify DomainName, PageNumber, and PageSize to query the DNS records of the specified domain names.
     * *   You can also specify RRKeyWord, TypeKeyWord, or ValueKeyWord to query the DNS records that contain the specified keyword.
     * *   By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     * *   You can specify GroupId to query the DNS records of the specified domain names based on the group ID. You can query the DNS records of all domain names and the domain names in the default group.
     *
     * @param request - DescribeDomainRecordsRequest
     *
     * @returns DescribeDomainRecordsResponse
     *
     * @param DescribeDomainRecordsRequest $request
     *
     * @return DescribeDomainRecordsResponse
     */
    public function describeDomainRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the resolution requests of all paid domain names within your account.
     *
     * @param request - DescribeDomainResolveStatisticsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainResolveStatisticsSummaryResponse
     *
     * @param DescribeDomainResolveStatisticsSummaryRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDomainResolveStatisticsSummaryResponse
     */
    public function describeDomainResolveStatisticsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainResolveStatisticsSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainResolveStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resolution requests of all paid domain names within your account.
     *
     * @param request - DescribeDomainResolveStatisticsSummaryRequest
     *
     * @returns DescribeDomainResolveStatisticsSummaryResponse
     *
     * @param DescribeDomainResolveStatisticsSummaryRequest $request
     *
     * @return DescribeDomainResolveStatisticsSummaryResponse
     */
    public function describeDomainResolveStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResolveStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time statistics on the Domain Name System (DNS) requests for a primary domain name.
     *
     * @remarks
     * Real-time data is collected per hour.
     *
     * @param request - DescribeDomainStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainStatisticsResponse
     *
     * @param DescribeDomainStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainStatisticsResponse
     */
    public function describeDomainStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time statistics on the Domain Name System (DNS) requests for a primary domain name.
     *
     * @remarks
     * Real-time data is collected per hour.
     *
     * @param request - DescribeDomainStatisticsRequest
     *
     * @returns DescribeDomainStatisticsResponse
     *
     * @param DescribeDomainStatisticsRequest $request
     *
     * @return DescribeDomainStatisticsResponse
     */
    public function describeDomainStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * Calls the DescribeDomainStatisticsSummary operation to obtain the query volume of all paid domain names under your account.
     *
     * @param request - DescribeDomainStatisticsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainStatisticsSummaryResponse
     *
     * @param DescribeDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDomainStatisticsSummaryResponse
     */
    public function describeDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainStatisticsSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeDomainStatisticsSummary operation to obtain the query volume of all paid domain names under your account.
     *
     * @param request - DescribeDomainStatisticsSummaryRequest
     *
     * @returns DescribeDomainStatisticsSummaryResponse
     *
     * @param DescribeDomainStatisticsSummaryRequest $request
     *
     * @return DescribeDomainStatisticsSummaryResponse
     */
    public function describeDomainStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * Calls the DescribeDomains operation to query domain names of a user based on input parameters.
     *
     * @remarks
     *   You can specify the PageNumber and PageSize parameters to query domain names.
     * *   You can specify the KeyWord parameter to query domain names that contain the specified keyword.
     * *   By default, the domain names in a list are sorted in descending order of the time they were added.
     * *   You can specify the GroupId parameter. If you do not specify this parameter, all domain names are queried by default.
     *
     * @param request - DescribeDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainsResponse
     *
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->starmark) {
            @$query['Starmark'] = $request->starmark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls the DescribeDomains operation to query domain names of a user based on input parameters.
     *
     * @remarks
     *   You can specify the PageNumber and PageSize parameters to query domain names.
     * *   You can specify the KeyWord parameter to query domain names that contain the specified keyword.
     * *   By default, the domain names in a list are sorted in descending order of the time they were added.
     * *   You can specify the GroupId parameter. If you do not specify this parameter, all domain names are queried by default.
     *
     * @param request - DescribeDomainsRequest
     *
     * @returns DescribeDomainsResponse
     *
     * @param DescribeDomainsRequest $request
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the access policies of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmAccessStrategiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmAccessStrategiesResponse
     *
     * @param DescribeGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeGtmAccessStrategiesResponse
     */
    public function describeGtmAccessStrategiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeGtmAccessStrategies',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmAccessStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the access policies of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmAccessStrategiesRequest
     *
     * @returns DescribeGtmAccessStrategiesResponse
     *
     * @param DescribeGtmAccessStrategiesRequest $request
     *
     * @return DescribeGtmAccessStrategiesResponse
     */
    public function describeGtmAccessStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAccessStrategiesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details about an access policy of a Global Traffic Manager (GTM) instance based on the policy ID.
     *
     * @param request - DescribeGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmAccessStrategyResponse
     *
     * @param DescribeGtmAccessStrategyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGtmAccessStrategyResponse
     */
    public function describeGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details about an access policy of a Global Traffic Manager (GTM) instance based on the policy ID.
     *
     * @param request - DescribeGtmAccessStrategyRequest
     *
     * @returns DescribeGtmAccessStrategyResponse
     *
     * @param DescribeGtmAccessStrategyRequest $request
     *
     * @return DescribeGtmAccessStrategyResponse
     */
    public function describeGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration items that can be set for an access policy.
     *
     * @param request - DescribeGtmAccessStrategyAvailableConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmAccessStrategyAvailableConfigResponse
     *
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponse
     */
    public function describeGtmAccessStrategyAvailableConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmAccessStrategyAvailableConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmAccessStrategyAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration items that can be set for an access policy.
     *
     * @param request - DescribeGtmAccessStrategyAvailableConfigRequest
     *
     * @returns DescribeGtmAccessStrategyAvailableConfigResponse
     *
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponse
     */
    public function describeGtmAccessStrategyAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAccessStrategyAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGtmAvailableAlertGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmAvailableAlertGroupResponse
     *
     * @param DescribeGtmAvailableAlertGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmAvailableAlertGroupResponse
     */
    public function describeGtmAvailableAlertGroupWithOptions($request, $runtime)
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
            'action' => 'DescribeGtmAvailableAlertGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmAvailableAlertGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeGtmAvailableAlertGroupRequest
     *
     * @returns DescribeGtmAvailableAlertGroupResponse
     *
     * @param DescribeGtmAvailableAlertGroupRequest $request
     *
     * @return DescribeGtmAvailableAlertGroupResponse
     */
    public function describeGtmAvailableAlertGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAvailableAlertGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details about a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmInstanceResponse
     *
     * @param DescribeGtmInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeGtmInstanceResponse
     */
    public function describeGtmInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->needDetailAttributes) {
            @$query['NeedDetailAttributes'] = $request->needDetailAttributes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmInstance',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceRequest
     *
     * @returns DescribeGtmInstanceResponse
     *
     * @param DescribeGtmInstanceRequest $request
     *
     * @return DescribeGtmInstanceResponse
     */
    public function describeGtmInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details about an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmInstanceAddressPoolResponse
     *
     * @param DescribeGtmInstanceAddressPoolRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmInstanceAddressPoolResponse
     */
    public function describeGtmInstanceAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmInstanceAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmInstanceAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details about an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceAddressPoolRequest
     *
     * @returns DescribeGtmInstanceAddressPoolResponse
     *
     * @param DescribeGtmInstanceAddressPoolRequest $request
     *
     * @return DescribeGtmInstanceAddressPoolResponse
     */
    public function describeGtmInstanceAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceAddressPoolWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the address pools of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceAddressPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmInstanceAddressPoolsResponse
     *
     * @param DescribeGtmInstanceAddressPoolsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeGtmInstanceAddressPoolsResponse
     */
    public function describeGtmInstanceAddressPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeGtmInstanceAddressPools',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmInstanceAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the address pools of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceAddressPoolsRequest
     *
     * @returns DescribeGtmInstanceAddressPoolsResponse
     *
     * @param DescribeGtmInstanceAddressPoolsRequest $request
     *
     * @return DescribeGtmInstanceAddressPoolsResponse
     */
    public function describeGtmInstanceAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmInstanceStatusResponse
     *
     * @param DescribeGtmInstanceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGtmInstanceStatusResponse
     */
    public function describeGtmInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmInstanceStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmInstanceStatusRequest
     *
     * @returns DescribeGtmInstanceStatusResponse
     *
     * @param DescribeGtmInstanceStatusRequest $request
     *
     * @return DescribeGtmInstanceStatusResponse
     */
    public function describeGtmInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGtmInstanceSystemCnameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmInstanceSystemCnameResponse
     *
     * @param DescribeGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmInstanceSystemCnameResponse
     */
    public function describeGtmInstanceSystemCnameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmInstanceSystemCname',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmInstanceSystemCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeGtmInstanceSystemCnameRequest
     *
     * @returns DescribeGtmInstanceSystemCnameResponse
     *
     * @param DescribeGtmInstanceSystemCnameRequest $request
     *
     * @return DescribeGtmInstanceSystemCnameResponse
     */
    public function describeGtmInstanceSystemCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceSystemCnameWithOptions($request, $runtime);
    }

    /**
     * Queries the Global Traffic Manager (GTM) instances under your account.
     *
     * @param request - DescribeGtmInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmInstancesResponse
     *
     * @param DescribeGtmInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGtmInstancesResponse
     */
    public function describeGtmInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->needDetailAttributes) {
            @$query['NeedDetailAttributes'] = $request->needDetailAttributes;
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
            'action' => 'DescribeGtmInstances',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Global Traffic Manager (GTM) instances under your account.
     *
     * @param request - DescribeGtmInstancesRequest
     *
     * @returns DescribeGtmInstancesResponse
     *
     * @param DescribeGtmInstancesRequest $request
     *
     * @return DescribeGtmInstancesResponse
     */
    public function describeGtmInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query logs of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmLogsResponse
     *
     * @param DescribeGtmLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeGtmLogsResponse
     */
    public function describeGtmLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query logs of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmLogsRequest
     *
     * @returns DescribeGtmLogsResponse
     *
     * @param DescribeGtmLogsRequest $request
     *
     * @return DescribeGtmLogsResponse
     */
    public function describeGtmLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmLogsWithOptions($request, $runtime);
    }

    /**
     * Queries available monitored nodes.
     *
     * @param request - DescribeGtmMonitorAvailableConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmMonitorAvailableConfigResponse
     *
     * @param DescribeGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeGtmMonitorAvailableConfigResponse
     */
    public function describeGtmMonitorAvailableConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeGtmMonitorAvailableConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmMonitorAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available monitored nodes.
     *
     * @param request - DescribeGtmMonitorAvailableConfigRequest
     *
     * @returns DescribeGtmMonitorAvailableConfigResponse
     *
     * @param DescribeGtmMonitorAvailableConfigRequest $request
     *
     * @return DescribeGtmMonitorAvailableConfigResponse
     */
    public function describeGtmMonitorAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmMonitorAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the health check configuration of an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmMonitorConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmMonitorConfigResponse
     *
     * @param DescribeGtmMonitorConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGtmMonitorConfigResponse
     */
    public function describeGtmMonitorConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorConfigId) {
            @$query['MonitorConfigId'] = $request->monitorConfigId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmMonitorConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health check configuration of an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmMonitorConfigRequest
     *
     * @returns DescribeGtmMonitorConfigResponse
     *
     * @param DescribeGtmMonitorConfigRequest $request
     *
     * @return DescribeGtmMonitorConfigResponse
     */
    public function describeGtmMonitorConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmMonitorConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a disaster recovery plan.
     *
     * @param request - DescribeGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmRecoveryPlanResponse
     *
     * @param DescribeGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGtmRecoveryPlanResponse
     */
    public function describeGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recoveryPlanId) {
            @$query['RecoveryPlanId'] = $request->recoveryPlanId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a disaster recovery plan.
     *
     * @param request - DescribeGtmRecoveryPlanRequest
     *
     * @returns DescribeGtmRecoveryPlanResponse
     *
     * @param DescribeGtmRecoveryPlanRequest $request
     *
     * @return DescribeGtmRecoveryPlanResponse
     */
    public function describeGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration items that can be set for a disaster recovery plan.
     *
     * @param request - DescribeGtmRecoveryPlanAvailableConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmRecoveryPlanAvailableConfigResponse
     *
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
     */
    public function describeGtmRecoveryPlanAvailableConfigWithOptions($request, $runtime)
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
            'action' => 'DescribeGtmRecoveryPlanAvailableConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmRecoveryPlanAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration items that can be set for a disaster recovery plan.
     *
     * @param request - DescribeGtmRecoveryPlanAvailableConfigRequest
     *
     * @returns DescribeGtmRecoveryPlanAvailableConfigResponse
     *
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
     */
    public function describeGtmRecoveryPlanAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmRecoveryPlanAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the disaster recovery plans for a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmRecoveryPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGtmRecoveryPlansResponse
     *
     * @param DescribeGtmRecoveryPlansRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGtmRecoveryPlansResponse
     */
    public function describeGtmRecoveryPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeGtmRecoveryPlans',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGtmRecoveryPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disaster recovery plans for a Global Traffic Manager (GTM) instance.
     *
     * @param request - DescribeGtmRecoveryPlansRequest
     *
     * @returns DescribeGtmRecoveryPlansResponse
     *
     * @param DescribeGtmRecoveryPlansRequest $request
     *
     * @return DescribeGtmRecoveryPlansResponse
     */
    public function describeGtmRecoveryPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmRecoveryPlansWithOptions($request, $runtime);
    }

    /**
     * Queries the domain names that are bound to an Alibaba Cloud DNS instance.
     *
     * @param request - DescribeInstanceDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDomainsResponse
     *
     * @param DescribeInstanceDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDomainsResponse
     */
    public function describeInstanceDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribeInstanceDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain names that are bound to an Alibaba Cloud DNS instance.
     *
     * @param request - DescribeInstanceDomainsRequest
     *
     * @returns DescribeInstanceDomainsResponse
     *
     * @param DescribeInstanceDomainsRequest $request
     *
     * @return DescribeInstanceDomainsResponse
     */
    public function describeInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * 查询解析日志.
     *
     * @param request - DescribeInternetDnsLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInternetDnsLogsResponse
     *
     * @param DescribeInternetDnsLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInternetDnsLogsResponse
     */
    public function describeInternetDnsLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->module) {
            @$query['Module'] = $request->module;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryCondition) {
            @$query['QueryCondition'] = $request->queryCondition;
        }

        if (null !== $request->recursionProtocolType) {
            @$query['RecursionProtocolType'] = $request->recursionProtocolType;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInternetDnsLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInternetDnsLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询解析日志.
     *
     * @param request - DescribeInternetDnsLogsRequest
     *
     * @returns DescribeInternetDnsLogsResponse
     *
     * @param DescribeInternetDnsLogsRequest $request
     *
     * @return DescribeInternetDnsLogsResponse
     */
    public function describeInternetDnsLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetDnsLogsWithOptions($request, $runtime);
    }

    /**
     * 获取缓存刷新套餐包列表.
     *
     * @param request - DescribeIspFlushCacheInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIspFlushCacheInstancesResponse
     *
     * @param DescribeIspFlushCacheInstancesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeIspFlushCacheInstancesResponse
     */
    public function describeIspFlushCacheInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIspFlushCacheInstances',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIspFlushCacheInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取缓存刷新套餐包列表.
     *
     * @param request - DescribeIspFlushCacheInstancesRequest
     *
     * @returns DescribeIspFlushCacheInstancesResponse
     *
     * @param DescribeIspFlushCacheInstancesRequest $request
     *
     * @return DescribeIspFlushCacheInstancesResponse
     */
    public function describeIspFlushCacheInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheInstancesWithOptions($request, $runtime);
    }

    /**
     * 获取剩余可缓存刷新次数.
     *
     * @param request - DescribeIspFlushCacheRemainQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIspFlushCacheRemainQuotaResponse
     *
     * @param DescribeIspFlushCacheRemainQuotaRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeIspFlushCacheRemainQuotaResponse
     */
    public function describeIspFlushCacheRemainQuotaWithOptions($request, $runtime)
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
            'action' => 'DescribeIspFlushCacheRemainQuota',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIspFlushCacheRemainQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取剩余可缓存刷新次数.
     *
     * @param request - DescribeIspFlushCacheRemainQuotaRequest
     *
     * @returns DescribeIspFlushCacheRemainQuotaResponse
     *
     * @param DescribeIspFlushCacheRemainQuotaRequest $request
     *
     * @return DescribeIspFlushCacheRemainQuotaResponse
     */
    public function describeIspFlushCacheRemainQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheRemainQuotaWithOptions($request, $runtime);
    }

    /**
     * 获取缓存刷新任务详情.
     *
     * @param request - DescribeIspFlushCacheTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIspFlushCacheTaskResponse
     *
     * @param DescribeIspFlushCacheTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIspFlushCacheTaskResponse
     */
    public function describeIspFlushCacheTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIspFlushCacheTask',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIspFlushCacheTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取缓存刷新任务详情.
     *
     * @param request - DescribeIspFlushCacheTaskRequest
     *
     * @returns DescribeIspFlushCacheTaskResponse
     *
     * @param DescribeIspFlushCacheTaskRequest $request
     *
     * @return DescribeIspFlushCacheTaskResponse
     */
    public function describeIspFlushCacheTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheTaskWithOptions($request, $runtime);
    }

    /**
     * 获取缓存刷新任务列表.
     *
     * @param request - DescribeIspFlushCacheTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIspFlushCacheTasksResponse
     *
     * @param DescribeIspFlushCacheTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeIspFlushCacheTasksResponse
     */
    public function describeIspFlushCacheTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
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
            'action' => 'DescribeIspFlushCacheTasks',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIspFlushCacheTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取缓存刷新任务列表.
     *
     * @param request - DescribeIspFlushCacheTasksRequest
     *
     * @returns DescribeIspFlushCacheTasksResponse
     *
     * @param DescribeIspFlushCacheTasksRequest $request
     *
     * @return DescribeIspFlushCacheTasksResponse
     */
    public function describeIspFlushCacheTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheTasksWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS用户数据概览.
     *
     * @param request - DescribePdnsAccountSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsAccountSummaryResponse
     *
     * @param DescribePdnsAccountSummaryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePdnsAccountSummaryResponse
     */
    public function describePdnsAccountSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsAccountSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS用户数据概览.
     *
     * @param request - DescribePdnsAccountSummaryRequest
     *
     * @returns DescribePdnsAccountSummaryResponse
     *
     * @param DescribePdnsAccountSummaryRequest $request
     *
     * @return DescribePdnsAccountSummaryResponse
     */
    public function describePdnsAccountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsAccountSummaryWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS AppKey 详情.
     *
     * @param request - DescribePdnsAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsAppKeyResponse
     *
     * @param DescribePdnsAppKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePdnsAppKeyResponse
     */
    public function describePdnsAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKeyId) {
            @$query['AppKeyId'] = $request->appKeyId;
        }

        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsAppKey',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS AppKey 详情.
     *
     * @param request - DescribePdnsAppKeyRequest
     *
     * @returns DescribePdnsAppKeyResponse
     *
     * @param DescribePdnsAppKeyRequest $request
     *
     * @return DescribePdnsAppKeyResponse
     */
    public function describePdnsAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsAppKeyWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS AppKey 列表.
     *
     * @param request - DescribePdnsAppKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsAppKeysResponse
     *
     * @param DescribePdnsAppKeysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePdnsAppKeysResponse
     */
    public function describePdnsAppKeysWithOptions($request, $runtime)
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
            'action' => 'DescribePdnsAppKeys',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsAppKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS AppKey 列表.
     *
     * @param request - DescribePdnsAppKeysRequest
     *
     * @returns DescribePdnsAppKeysResponse
     *
     * @param DescribePdnsAppKeysRequest $request
     *
     * @return DescribePdnsAppKeysResponse
     */
    public function describePdnsAppKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsAppKeysWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS 操作日志列表.
     *
     * @param request - DescribePdnsOperateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsOperateLogsResponse
     *
     * @param DescribePdnsOperateLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePdnsOperateLogsResponse
     */
    public function describePdnsOperateLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsOperateLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS 操作日志列表.
     *
     * @param request - DescribePdnsOperateLogsRequest
     *
     * @returns DescribePdnsOperateLogsResponse
     *
     * @param DescribePdnsOperateLogsRequest $request
     *
     * @return DescribePdnsOperateLogsResponse
     */
    public function describePdnsOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsOperateLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on requests for Alibaba Cloud Public DNS.
     *
     * @param request - DescribePdnsRequestStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsRequestStatisticResponse
     *
     * @param DescribePdnsRequestStatisticRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePdnsRequestStatisticResponse
     */
    public function describePdnsRequestStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsRequestStatistic',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsRequestStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on requests for Alibaba Cloud Public DNS.
     *
     * @param request - DescribePdnsRequestStatisticRequest
     *
     * @returns DescribePdnsRequestStatisticResponse
     *
     * @param DescribePdnsRequestStatisticRequest $request
     *
     * @return DescribePdnsRequestStatisticResponse
     */
    public function describePdnsRequestStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsRequestStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries a list of statistics on requests for Alibaba Cloud Public DNS.
     *
     * @param request - DescribePdnsRequestStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsRequestStatisticsResponse
     *
     * @param DescribePdnsRequestStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePdnsRequestStatisticsResponse
     */
    public function describePdnsRequestStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsRequestStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsRequestStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of statistics on requests for Alibaba Cloud Public DNS.
     *
     * @param request - DescribePdnsRequestStatisticsRequest
     *
     * @returns DescribePdnsRequestStatisticsResponse
     *
     * @param DescribePdnsRequestStatisticsRequest $request
     *
     * @return DescribePdnsRequestStatisticsResponse
     */
    public function describePdnsRequestStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsRequestStatisticsWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS 威胁日志列表.
     *
     * @param request - DescribePdnsThreatLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsThreatLogsResponse
     *
     * @param DescribePdnsThreatLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePdnsThreatLogsResponse
     */
    public function describePdnsThreatLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->threatLevel) {
            @$query['ThreatLevel'] = $request->threatLevel;
        }

        if (null !== $request->threatSourceIp) {
            @$query['ThreatSourceIp'] = $request->threatSourceIp;
        }

        if (null !== $request->threatType) {
            @$query['ThreatType'] = $request->threatType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsThreatLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsThreatLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS 威胁日志列表.
     *
     * @param request - DescribePdnsThreatLogsRequest
     *
     * @returns DescribePdnsThreatLogsResponse
     *
     * @param DescribePdnsThreatLogsRequest $request
     *
     * @return DescribePdnsThreatLogsResponse
     */
    public function describePdnsThreatLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsThreatLogsWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS 威胁统计
     *
     * @param request - DescribePdnsThreatStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsThreatStatisticResponse
     *
     * @param DescribePdnsThreatStatisticRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePdnsThreatStatisticResponse
     */
    public function describePdnsThreatStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->threatSourceIp) {
            @$query['ThreatSourceIp'] = $request->threatSourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsThreatStatistic',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsThreatStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS 威胁统计
     *
     * @param request - DescribePdnsThreatStatisticRequest
     *
     * @returns DescribePdnsThreatStatisticResponse
     *
     * @param DescribePdnsThreatStatisticRequest $request
     *
     * @return DescribePdnsThreatStatisticResponse
     */
    public function describePdnsThreatStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsThreatStatisticWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS 威胁统计列表.
     *
     * @param request - DescribePdnsThreatStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsThreatStatisticsResponse
     *
     * @param DescribePdnsThreatStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePdnsThreatStatisticsResponse
     */
    public function describePdnsThreatStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        if (null !== $request->threatLevel) {
            @$query['ThreatLevel'] = $request->threatLevel;
        }

        if (null !== $request->threatSourceIp) {
            @$query['ThreatSourceIp'] = $request->threatSourceIp;
        }

        if (null !== $request->threatType) {
            @$query['ThreatType'] = $request->threatType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePdnsThreatStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsThreatStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS 威胁统计列表.
     *
     * @param request - DescribePdnsThreatStatisticsRequest
     *
     * @returns DescribePdnsThreatStatisticsResponse
     *
     * @param DescribePdnsThreatStatisticsRequest $request
     *
     * @return DescribePdnsThreatStatisticsResponse
     */
    public function describePdnsThreatStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsThreatStatisticsWithOptions($request, $runtime);
    }

    /**
     * 获取公共DNS Udp IP段列表.
     *
     * @param request - DescribePdnsUdpIpSegmentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsUdpIpSegmentsResponse
     *
     * @param DescribePdnsUdpIpSegmentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePdnsUdpIpSegmentsResponse
     */
    public function describePdnsUdpIpSegmentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'action' => 'DescribePdnsUdpIpSegments',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsUdpIpSegmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取公共DNS Udp IP段列表.
     *
     * @param request - DescribePdnsUdpIpSegmentsRequest
     *
     * @returns DescribePdnsUdpIpSegmentsResponse
     *
     * @param DescribePdnsUdpIpSegmentsRequest $request
     *
     * @return DescribePdnsUdpIpSegmentsResponse
     */
    public function describePdnsUdpIpSegments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsUdpIpSegmentsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about users in Alibaba Cloud Public DNS.
     *
     * @param request - DescribePdnsUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePdnsUserInfoResponse
     *
     * @param DescribePdnsUserInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePdnsUserInfoResponse
     */
    public function describePdnsUserInfoWithOptions($request, $runtime)
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
            'action' => 'DescribePdnsUserInfo',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePdnsUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about users in Alibaba Cloud Public DNS.
     *
     * @param request - DescribePdnsUserInfoRequest
     *
     * @returns DescribePdnsUserInfoResponse
     *
     * @param DescribePdnsUserInfoRequest $request
     *
     * @return DescribePdnsUserInfoResponse
     */
    public function describePdnsUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsUserInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the operation logs of a domain name based on the specified parameters.
     *
     * @param request - DescribeRecordLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordLogsResponse
     *
     * @param DescribeRecordLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordLogsResponse
     */
    public function describeRecordLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of a domain name based on the specified parameters.
     *
     * @param request - DescribeRecordLogsRequest
     *
     * @returns DescribeRecordLogsResponse
     *
     * @param DescribeRecordLogsRequest $request
     *
     * @return DescribeRecordLogsResponse
     */
    public function describeRecordLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the number of resolution requests for all subdomain names of a specified domain name.
     *
     * @param request - DescribeRecordResolveStatisticsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordResolveStatisticsSummaryResponse
     *
     * @param DescribeRecordResolveStatisticsSummaryRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeRecordResolveStatisticsSummaryResponse
     */
    public function describeRecordResolveStatisticsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordResolveStatisticsSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordResolveStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of resolution requests for all subdomain names of a specified domain name.
     *
     * @param request - DescribeRecordResolveStatisticsSummaryRequest
     *
     * @returns DescribeRecordResolveStatisticsSummaryResponse
     *
     * @param DescribeRecordResolveStatisticsSummaryRequest $request
     *
     * @return DescribeRecordResolveStatisticsSummaryResponse
     */
    public function describeRecordResolveStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordResolveStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * Queries the real-time statistics on the Domain Name System (DNS) requests for a subdomain name.
     *
     * @remarks
     * Real-time data is collected per hour.
     *
     * @param request - DescribeRecordStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordStatisticsResponse
     *
     * @param DescribeRecordStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecordStatisticsResponse
     */
    public function describeRecordStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordStatistics',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the real-time statistics on the Domain Name System (DNS) requests for a subdomain name.
     *
     * @remarks
     * Real-time data is collected per hour.
     *
     * @param request - DescribeRecordStatisticsRequest
     *
     * @returns DescribeRecordStatisticsResponse
     *
     * @param DescribeRecordStatisticsRequest $request
     *
     * @return DescribeRecordStatisticsResponse
     */
    public function describeRecordStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the number of Domain Name System (DNS) requests for all subdomain names of a specified domain name.
     *
     * @param request - DescribeRecordStatisticsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordStatisticsSummaryResponse
     *
     * @param DescribeRecordStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecordStatisticsSummaryResponse
     */
    public function describeRecordStatisticsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainType) {
            @$query['DomainType'] = $request->domainType;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchMode) {
            @$query['SearchMode'] = $request->searchMode;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordStatisticsSummary',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of Domain Name System (DNS) requests for all subdomain names of a specified domain name.
     *
     * @param request - DescribeRecordStatisticsSummaryRequest
     *
     * @returns DescribeRecordStatisticsSummaryResponse
     *
     * @param DescribeRecordStatisticsSummaryRequest $request
     *
     * @return DescribeRecordStatisticsSummaryResponse
     */
    public function describeRecordStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * 查询递归解析内置权威解析记录详情.
     *
     * @param request - DescribeRecursionRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecursionRecordResponse
     *
     * @param DescribeRecursionRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRecursionRecordResponse
     */
    public function describeRecursionRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecursionRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecursionRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询递归解析内置权威解析记录详情.
     *
     * @param request - DescribeRecursionRecordRequest
     *
     * @returns DescribeRecursionRecordResponse
     *
     * @param DescribeRecursionRecordRequest $request
     *
     * @return DescribeRecursionRecordResponse
     */
    public function describeRecursionRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecursionRecordWithOptions($request, $runtime);
    }

    /**
     * 查询递归解析内置权威域名zone详情.
     *
     * @param request - DescribeRecursionZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecursionZoneResponse
     *
     * @param DescribeRecursionZoneRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRecursionZoneResponse
     */
    public function describeRecursionZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecursionZone',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecursionZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询递归解析内置权威域名zone详情.
     *
     * @param request - DescribeRecursionZoneRequest
     *
     * @returns DescribeRecursionZoneResponse
     *
     * @param DescribeRecursionZoneRequest $request
     *
     * @return DescribeRecursionZoneResponse
     */
    public function describeRecursionZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecursionZoneWithOptions($request, $runtime);
    }

    /**
     * Queries all Domain Name System (DNS) records of a subdomain name based on the specified parameters.
     *
     * @param request - DescribeSubDomainRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubDomainRecordsResponse
     *
     * @param DescribeSubDomainRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSubDomainRecordsResponse
     */
    public function describeSubDomainRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubDomainRecords',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubDomainRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all Domain Name System (DNS) records of a subdomain name based on the specified parameters.
     *
     * @param request - DescribeSubDomainRecordsRequest
     *
     * @returns DescribeSubDomainRecordsResponse
     *
     * @param DescribeSubDomainRecordsRequest $request
     *
     * @return DescribeSubDomainRecordsResponse
     */
    public function describeSubDomainRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * 查询支持的所有线路.
     *
     * @param request - DescribeSupportLinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSupportLinesResponse
     *
     * @param DescribeSupportLinesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSupportLinesResponse
     */
    public function describeSupportLinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSupportLines',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSupportLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询支持的所有线路.
     *
     * @param request - DescribeSupportLinesRequest
     *
     * @returns DescribeSupportLinesResponse
     *
     * @param DescribeSupportLinesRequest $request
     *
     * @return DescribeSupportLinesResponse
     */
    public function describeSupportLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportLinesWithOptions($request, $runtime);
    }

    /**
     * Queries existing tags.
     *
     * @param request - DescribeTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries existing tags.
     *
     * @param request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * Queries the domain names that were transferred between the current account and another account based on the specified parameters.
     *
     * @param request - DescribeTransferDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTransferDomainsResponse
     *
     * @param DescribeTransferDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTransferDomainsResponse
     */
    public function describeTransferDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->fromUserId) {
            @$query['FromUserId'] = $request->fromUserId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        if (null !== $request->transferType) {
            @$query['TransferType'] = $request->transferType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTransferDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTransferDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the domain names that were transferred between the current account and another account based on the specified parameters.
     *
     * @param request - DescribeTransferDomainsRequest
     *
     * @returns DescribeTransferDomainsResponse
     *
     * @param DescribeTransferDomainsRequest $request
     *
     * @return DescribeTransferDomainsResponse
     */
    public function describeTransferDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransferDomainsWithOptions($request, $runtime);
    }

    /**
     * Executes a disaster recovery plan.
     *
     * @param request - ExecuteGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteGtmRecoveryPlanResponse
     *
     * @param ExecuteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExecuteGtmRecoveryPlanResponse
     */
    public function executeGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recoveryPlanId) {
            @$query['RecoveryPlanId'] = $request->recoveryPlanId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a disaster recovery plan.
     *
     * @param request - ExecuteGtmRecoveryPlanRequest
     *
     * @returns ExecuteGtmRecoveryPlanResponse
     *
     * @param ExecuteGtmRecoveryPlanRequest $request
     *
     * @return ExecuteGtmRecoveryPlanResponse
     */
    public function executeGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * Queries a primary domain name based on the specified parameters.
     *
     * @remarks
     * For more information about the difference between primary domain names and subdomain names, see
     * [Subdomain levels](https://www.alibabacloud.com/help/zh/faq-detail/39803.htm). For example, if you enter `www.abc.com`, abc.com is obtained.
     *
     * @param request - GetMainDomainNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMainDomainNameResponse
     *
     * @param GetMainDomainNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMainDomainNameResponse
     */
    public function getMainDomainNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputString) {
            @$query['InputString'] = $request->inputString;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMainDomainName',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMainDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a primary domain name based on the specified parameters.
     *
     * @remarks
     * For more information about the difference between primary domain names and subdomain names, see
     * [Subdomain levels](https://www.alibabacloud.com/help/zh/faq-detail/39803.htm). For example, if you enter `www.abc.com`, abc.com is obtained.
     *
     * @param request - GetMainDomainNameRequest
     *
     * @returns GetMainDomainNameResponse
     *
     * @param GetMainDomainNameRequest $request
     *
     * @return GetMainDomainNameResponse
     */
    public function getMainDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainDomainNameWithOptions($request, $runtime);
    }

    /**
     * Generates a text (TXT) record. TXT records are used to retrieve domain names and subdomain names, enable the subdomain name verification feature, and perform batch retrievals.
     *
     * @param request - GetTxtRecordForVerifyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTxtRecordForVerifyResponse
     *
     * @param GetTxtRecordForVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTxtRecordForVerifyResponse
     */
    public function getTxtRecordForVerifyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTxtRecordForVerify',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTxtRecordForVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a text (TXT) record. TXT records are used to retrieve domain names and subdomain names, enable the subdomain name verification feature, and perform batch retrievals.
     *
     * @param request - GetTxtRecordForVerifyRequest
     *
     * @returns GetTxtRecordForVerifyResponse
     *
     * @param GetTxtRecordForVerifyRequest $request
     *
     * @return GetTxtRecordForVerifyResponse
     */
    public function getTxtRecordForVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTxtRecordForVerifyWithOptions($request, $runtime);
    }

    /**
     * Queries a list of address pools.
     *
     * @param request - ListCloudGtmAddressPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmAddressPoolsResponse
     *
     * @param ListCloudGtmAddressPoolsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListCloudGtmAddressPoolsResponse
     */
    public function listCloudGtmAddressPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolName) {
            @$query['AddressPoolName'] = $request->addressPoolName;
        }

        if (null !== $request->addressPoolType) {
            @$query['AddressPoolType'] = $request->addressPoolType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmAddressPools',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of address pools.
     *
     * @param request - ListCloudGtmAddressPoolsRequest
     *
     * @returns ListCloudGtmAddressPoolsResponse
     *
     * @param ListCloudGtmAddressPoolsRequest $request
     *
     * @return ListCloudGtmAddressPoolsResponse
     */
    public function listCloudGtmAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of addresses.
     *
     * @param request - ListCloudGtmAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmAddressesResponse
     *
     * @param ListCloudGtmAddressesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCloudGtmAddressesResponse
     */
    public function listCloudGtmAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->healthStatus) {
            @$query['HealthStatus'] = $request->healthStatus;
        }

        if (null !== $request->monitorTemplateId) {
            @$query['MonitorTemplateId'] = $request->monitorTemplateId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmAddresses',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of addresses.
     *
     * @param request - ListCloudGtmAddressesRequest
     *
     * @returns ListCloudGtmAddressesResponse
     *
     * @param ListCloudGtmAddressesRequest $request
     *
     * @return ListCloudGtmAddressesResponse
     */
    public function listCloudGtmAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmAddressesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListCloudGtmAlertLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmAlertLogsResponse
     *
     * @param ListCloudGtmAlertLogsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCloudGtmAlertLogsResponse
     */
    public function listCloudGtmAlertLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->endTimestamp) {
            @$query['EndTimestamp'] = $request->endTimestamp;
        }

        if (null !== $request->entityType) {
            @$query['EntityType'] = $request->entityType;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTimestamp) {
            @$query['StartTimestamp'] = $request->startTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmAlertLogs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmAlertLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCloudGtmAlertLogsRequest
     *
     * @returns ListCloudGtmAlertLogsResponse
     *
     * @param ListCloudGtmAlertLogsRequest $request
     *
     * @return ListCloudGtmAlertLogsResponse
     */
    public function listCloudGtmAlertLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmAlertLogsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListCloudGtmAvailableAlertGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmAvailableAlertGroupsResponse
     *
     * @param ListCloudGtmAvailableAlertGroupsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListCloudGtmAvailableAlertGroupsResponse
     */
    public function listCloudGtmAvailableAlertGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmAvailableAlertGroups',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmAvailableAlertGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListCloudGtmAvailableAlertGroupsRequest
     *
     * @returns ListCloudGtmAvailableAlertGroupsResponse
     *
     * @param ListCloudGtmAvailableAlertGroupsRequest $request
     *
     * @return ListCloudGtmAvailableAlertGroupsResponse
     */
    public function listCloudGtmAvailableAlertGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmAvailableAlertGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a Global Traffic Manager (GTM) instance, including the information about access domain names and address pools.
     *
     * @param request - ListCloudGtmInstanceConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmInstanceConfigsResponse
     *
     * @param ListCloudGtmInstanceConfigsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCloudGtmInstanceConfigsResponse
     */
    public function listCloudGtmInstanceConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->scheduleDomainName) {
            @$query['ScheduleDomainName'] = $request->scheduleDomainName;
        }

        if (null !== $request->scheduleZoneName) {
            @$query['ScheduleZoneName'] = $request->scheduleZoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmInstanceConfigs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmInstanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a Global Traffic Manager (GTM) instance, including the information about access domain names and address pools.
     *
     * @param request - ListCloudGtmInstanceConfigsRequest
     *
     * @returns ListCloudGtmInstanceConfigsResponse
     *
     * @param ListCloudGtmInstanceConfigsRequest $request
     *
     * @return ListCloudGtmInstanceConfigsResponse
     */
    public function listCloudGtmInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmInstanceConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Global Traffic Manager (GTM) 3.0 instances.
     *
     * @param request - ListCloudGtmInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmInstancesResponse
     *
     * @param ListCloudGtmInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListCloudGtmInstancesResponse
     */
    public function listCloudGtmInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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
            'action' => 'ListCloudGtmInstances',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Global Traffic Manager (GTM) 3.0 instances.
     *
     * @param request - ListCloudGtmInstancesRequest
     *
     * @returns ListCloudGtmInstancesResponse
     *
     * @param ListCloudGtmInstancesRequest $request
     *
     * @return ListCloudGtmInstancesResponse
     */
    public function listCloudGtmInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of health check nodes.
     *
     * @param request - ListCloudGtmMonitorNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmMonitorNodesResponse
     *
     * @param ListCloudGtmMonitorNodesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListCloudGtmMonitorNodesResponse
     */
    public function listCloudGtmMonitorNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmMonitorNodes',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmMonitorNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of health check nodes.
     *
     * @param request - ListCloudGtmMonitorNodesRequest
     *
     * @returns ListCloudGtmMonitorNodesResponse
     *
     * @param ListCloudGtmMonitorNodesRequest $request
     *
     * @return ListCloudGtmMonitorNodesResponse
     */
    public function listCloudGtmMonitorNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmMonitorNodesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of health check templates.
     *
     * @param request - ListCloudGtmMonitorTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudGtmMonitorTemplatesResponse
     *
     * @param ListCloudGtmMonitorTemplatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListCloudGtmMonitorTemplatesResponse
     */
    public function listCloudGtmMonitorTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudGtmMonitorTemplates',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudGtmMonitorTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of health check templates.
     *
     * @param request - ListCloudGtmMonitorTemplatesRequest
     *
     * @returns ListCloudGtmMonitorTemplatesResponse
     *
     * @param ListCloudGtmMonitorTemplatesRequest $request
     *
     * @return ListCloudGtmMonitorTemplatesResponse
     */
    public function listCloudGtmMonitorTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudGtmMonitorTemplatesWithOptions($request, $runtime);
    }

    /**
     * 查询递归解析内置权威解析记录.
     *
     * @param request - ListRecursionRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecursionRecordsResponse
     *
     * @param ListRecursionRecordsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListRecursionRecordsResponse
     */
    public function listRecursionRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->requestSource) {
            @$query['RequestSource'] = $request->requestSource;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecursionRecords',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecursionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询递归解析内置权威解析记录.
     *
     * @param request - ListRecursionRecordsRequest
     *
     * @returns ListRecursionRecordsResponse
     *
     * @param ListRecursionRecordsRequest $request
     *
     * @return ListRecursionRecordsResponse
     */
    public function listRecursionRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecursionRecordsWithOptions($request, $runtime);
    }

    /**
     * 查询递归解析内置权威域名zone.
     *
     * @param request - ListRecursionZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecursionZonesResponse
     *
     * @param ListRecursionZonesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListRecursionZonesResponse
     */
    public function listRecursionZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->zoneName) {
            @$query['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecursionZones',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRecursionZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询递归解析内置权威域名zone.
     *
     * @param request - ListRecursionZonesRequest
     *
     * @returns ListRecursionZonesResponse
     *
     * @param ListRecursionZonesRequest $request
     *
     * @return ListRecursionZonesResponse
     */
    public function listRecursionZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecursionZonesWithOptions($request, $runtime);
    }

    /**
     * Queries resources by tag.
     *
     * @remarks
     *   Set ResourceId.N or Tag.N that consists of Tag.N.Key and Tag.N.Value in the request to specify the object to be queried.
     * *   Tag.N is a resource tag that consists of a key-value pair. If you set only Tag.N.Key, all tag values that are assigned to the specified key are returned. If you set only Tag.N.Value, an error message is returned.
     * *   If you set both Tag.N and ResourceId.N to filter tags, ResourceId.N must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2015-01-09',
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
     * Queries resources by tag.
     *
     * @remarks
     *   Set ResourceId.N or Tag.N that consists of Tag.N.Key and Tag.N.Value in the request to specify the object to be queried.
     * *   Tag.N is a resource tag that consists of a key-value pair. If you set only Tag.N.Key, all tag values that are assigned to the specified key are returned. If you set only Tag.N.Value, an error message is returned.
     * *   If you set both Tag.N and ResourceId.N to filter tags, ResourceId.N must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
     * Changes the names of DNS servers bound to a domain name from DNS server names provided by a third-party service provider to DNS server names provided by Alibaba Cloud DNS.
     *
     * @remarks
     * If the operation succeeds, the names of DNS servers change to those of Alibaba Cloud DNS servers (ending with hichina.com).
     * >  **Before you call this operation, make sure that your domain name has been registered with Alibaba Cloud and the DNS servers in use are not Alibaba Cloud DNS servers.
     *
     * @param request - ModifyHichinaDomainDNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHichinaDomainDNSResponse
     *
     * @param ModifyHichinaDomainDNSRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHichinaDomainDNSResponse
     */
    public function modifyHichinaDomainDNSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHichinaDomainDNS',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHichinaDomainDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the names of DNS servers bound to a domain name from DNS server names provided by a third-party service provider to DNS server names provided by Alibaba Cloud DNS.
     *
     * @remarks
     * If the operation succeeds, the names of DNS servers change to those of Alibaba Cloud DNS servers (ending with hichina.com).
     * >  **Before you call this operation, make sure that your domain name has been registered with Alibaba Cloud and the DNS servers in use are not Alibaba Cloud DNS servers.
     *
     * @param request - ModifyHichinaDomainDNSRequest
     *
     * @returns ModifyHichinaDomainDNSResponse
     *
     * @param ModifyHichinaDomainDNSRequest $request
     *
     * @return ModifyHichinaDomainDNSResponse
     */
    public function modifyHichinaDomainDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHichinaDomainDNSWithOptions($request, $runtime);
    }

    /**
     * Moves a domain name to another resource group.
     *
     * @param request - MoveDomainResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveDomainResourceGroupResponse
     *
     * @param MoveDomainResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return MoveDomainResourceGroupResponse
     */
    public function moveDomainResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveDomainResourceGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveDomainResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a domain name to another resource group.
     *
     * @param request - MoveDomainResourceGroupRequest
     *
     * @returns MoveDomainResourceGroupResponse
     *
     * @param MoveDomainResourceGroupRequest $request
     *
     * @return MoveDomainResourceGroupResponse
     */
    public function moveDomainResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveDomainResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - MoveGtmResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveGtmResourceGroupResponse
     *
     * @param MoveGtmResourceGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MoveGtmResourceGroupResponse
     */
    public function moveGtmResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveGtmResourceGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveGtmResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - MoveGtmResourceGroupRequest
     *
     * @returns MoveGtmResourceGroupResponse
     *
     * @param MoveGtmResourceGroupRequest $request
     *
     * @return MoveGtmResourceGroupResponse
     */
    public function moveGtmResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveGtmResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Adds or deletes domain names and Domain Name System (DNS) records in batches.
     *
     * @remarks
     * Scenario: You need to execute a large number of tasks related to DNS resolution and you do not have high requirements for efficiency.
     *
     * @param request - OperateBatchDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateBatchDomainResponse
     *
     * @param OperateBatchDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OperateBatchDomainResponse
     */
    public function operateBatchDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainRecordInfo) {
            @$query['DomainRecordInfo'] = $request->domainRecordInfo;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateBatchDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateBatchDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds or deletes domain names and Domain Name System (DNS) records in batches.
     *
     * @remarks
     * Scenario: You need to execute a large number of tasks related to DNS resolution and you do not have high requirements for efficiency.
     *
     * @param request - OperateBatchDomainRequest
     *
     * @returns OperateBatchDomainResponse
     *
     * @param OperateBatchDomainRequest $request
     *
     * @return OperateBatchDomainResponse
     */
    public function operateBatchDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateBatchDomainWithOptions($request, $runtime);
    }

    /**
     * 暂停公共DNS服务
     *
     * @param request - PausePdnsServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PausePdnsServiceResponse
     *
     * @param PausePdnsServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PausePdnsServiceResponse
     */
    public function pausePdnsServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PausePdnsService',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PausePdnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 暂停公共DNS服务
     *
     * @param request - PausePdnsServiceRequest
     *
     * @returns PausePdnsServiceResponse
     *
     * @param PausePdnsServiceRequest $request
     *
     * @return PausePdnsServiceResponse
     */
    public function pausePdnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pausePdnsServiceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to preview a disaster recovery plan of a Global Traffic Manager (GTM) instance.
     *
     * @param request - PreviewGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewGtmRecoveryPlanResponse
     *
     * @param PreviewGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreviewGtmRecoveryPlanResponse
     */
    public function previewGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->recoveryPlanId) {
            @$query['RecoveryPlanId'] = $request->recoveryPlanId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreviewGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreviewGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to preview a disaster recovery plan of a Global Traffic Manager (GTM) instance.
     *
     * @param request - PreviewGtmRecoveryPlanRequest
     *
     * @returns PreviewGtmRecoveryPlanResponse
     *
     * @param PreviewGtmRecoveryPlanRequest $request
     *
     * @return PreviewGtmRecoveryPlanResponse
     */
    public function previewGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * 删除公共DNS AppKey.
     *
     * @param request - RemovePdnsAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePdnsAppKeyResponse
     *
     * @param RemovePdnsAppKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemovePdnsAppKeyResponse
     */
    public function removePdnsAppKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKeyId) {
            @$query['AppKeyId'] = $request->appKeyId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePdnsAppKey',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePdnsAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除公共DNS AppKey.
     *
     * @param request - RemovePdnsAppKeyRequest
     *
     * @returns RemovePdnsAppKeyResponse
     *
     * @param RemovePdnsAppKeyRequest $request
     *
     * @return RemovePdnsAppKeyResponse
     */
    public function removePdnsAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePdnsAppKeyWithOptions($request, $runtime);
    }

    /**
     * 删除公共DNS Udp Ip地址段.
     *
     * @param request - RemovePdnsUdpIpSegmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePdnsUdpIpSegmentResponse
     *
     * @param RemovePdnsUdpIpSegmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemovePdnsUdpIpSegmentResponse
     */
    public function removePdnsUdpIpSegmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePdnsUdpIpSegment',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePdnsUdpIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除公共DNS Udp Ip地址段.
     *
     * @param request - RemovePdnsUdpIpSegmentRequest
     *
     * @returns RemovePdnsUdpIpSegmentResponse
     *
     * @param RemovePdnsUdpIpSegmentRequest $request
     *
     * @return RemovePdnsUdpIpSegmentResponse
     */
    public function removePdnsUdpIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePdnsUdpIpSegmentWithOptions($request, $runtime);
    }

    /**
     * 用于删除特定域名的serverHold状态信息。
     *
     * @remarks
     * ## 请求说明
     * - 本接口专为注册局用户设计，允许他们更新指定顶级域名（TLD）的各种属性。
     * - 必须提供`RegistryId`和`Tld`参数以标识要修改的具体TLD。
     * - 可选参数包括但不限于宽限期设置、DNS解析缓存时间、价格设定等，这些都可根据需要进行调整。
     * - 环境(`Env`)参数指定了API调用的目标环境，默认值为“DAILY”表示日常测试环境；正式上线前，请确保已正确设置此参数。
     * - 某些时间戳字段如`SunriseStartTimeStamp`要求输入Unix时间戳格式的数据。
     *
     * @param request - RemoveRspDomainServerHoldStatusForGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveRspDomainServerHoldStatusForGatewayResponse
     *
     * @param RemoveRspDomainServerHoldStatusForGatewayRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return RemoveRspDomainServerHoldStatusForGatewayResponse
     */
    public function removeRspDomainServerHoldStatusForGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->statusMsg) {
            @$query['StatusMsg'] = $request->statusMsg;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveRspDomainServerHoldStatusForGateway',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveRspDomainServerHoldStatusForGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于删除特定域名的serverHold状态信息。
     *
     * @remarks
     * ## 请求说明
     * - 本接口专为注册局用户设计，允许他们更新指定顶级域名（TLD）的各种属性。
     * - 必须提供`RegistryId`和`Tld`参数以标识要修改的具体TLD。
     * - 可选参数包括但不限于宽限期设置、DNS解析缓存时间、价格设定等，这些都可根据需要进行调整。
     * - 环境(`Env`)参数指定了API调用的目标环境，默认值为“DAILY”表示日常测试环境；正式上线前，请确保已正确设置此参数。
     * - 某些时间戳字段如`SunriseStartTimeStamp`要求输入Unix时间戳格式的数据。
     *
     * @param request - RemoveRspDomainServerHoldStatusForGatewayRequest
     *
     * @returns RemoveRspDomainServerHoldStatusForGatewayResponse
     *
     * @param RemoveRspDomainServerHoldStatusForGatewayRequest $request
     *
     * @return RemoveRspDomainServerHoldStatusForGatewayResponse
     */
    public function removeRspDomainServerHoldStatusForGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRspDomainServerHoldStatusForGatewayWithOptions($request, $runtime);
    }

    /**
     * Replaces the addresses referenced by an address pool.
     *
     * @param tmpReq - ReplaceCloudGtmAddressPoolAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceCloudGtmAddressPoolAddressResponse
     *
     * @param ReplaceCloudGtmAddressPoolAddressRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return ReplaceCloudGtmAddressPoolAddressResponse
     */
    public function replaceCloudGtmAddressPoolAddressWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReplaceCloudGtmAddressPoolAddressShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addresses) {
            $request->addressesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addresses, 'Addresses', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->addressesShrink) {
            @$query['Addresses'] = $request->addressesShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReplaceCloudGtmAddressPoolAddress',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceCloudGtmAddressPoolAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces the addresses referenced by an address pool.
     *
     * @param request - ReplaceCloudGtmAddressPoolAddressRequest
     *
     * @returns ReplaceCloudGtmAddressPoolAddressResponse
     *
     * @param ReplaceCloudGtmAddressPoolAddressRequest $request
     *
     * @return ReplaceCloudGtmAddressPoolAddressResponse
     */
    public function replaceCloudGtmAddressPoolAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceCloudGtmAddressPoolAddressWithOptions($request, $runtime);
    }

    /**
     * Replaces address pools that are associated with a Global Traffic Manager (GTM) 3.0 instance with new address pools.
     *
     * @param tmpReq - ReplaceCloudGtmInstanceConfigAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReplaceCloudGtmInstanceConfigAddressPoolResponse
     *
     * @param ReplaceCloudGtmInstanceConfigAddressPoolRequest $tmpReq
     * @param RuntimeOptions                                  $runtime
     *
     * @return ReplaceCloudGtmInstanceConfigAddressPoolResponse
     */
    public function replaceCloudGtmInstanceConfigAddressPoolWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReplaceCloudGtmInstanceConfigAddressPoolShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addressPools) {
            $request->addressPoolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addressPools, 'AddressPools', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolsShrink) {
            @$query['AddressPools'] = $request->addressPoolsShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReplaceCloudGtmInstanceConfigAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReplaceCloudGtmInstanceConfigAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces address pools that are associated with a Global Traffic Manager (GTM) 3.0 instance with new address pools.
     *
     * @param request - ReplaceCloudGtmInstanceConfigAddressPoolRequest
     *
     * @returns ReplaceCloudGtmInstanceConfigAddressPoolResponse
     *
     * @param ReplaceCloudGtmInstanceConfigAddressPoolRequest $request
     *
     * @return ReplaceCloudGtmInstanceConfigAddressPoolResponse
     */
    public function replaceCloudGtmInstanceConfigAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceCloudGtmInstanceConfigAddressPoolWithOptions($request, $runtime);
    }

    /**
     * 恢复公共DNS服务
     *
     * @param request - ResumePdnsServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumePdnsServiceResponse
     *
     * @param ResumePdnsServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResumePdnsServiceResponse
     */
    public function resumePdnsServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumePdnsService',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumePdnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 恢复公共DNS服务
     *
     * @param request - ResumePdnsServiceRequest
     *
     * @returns ResumePdnsServiceResponse
     *
     * @param ResumePdnsServiceRequest $request
     *
     * @return ResumePdnsServiceResponse
     */
    public function resumePdnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumePdnsServiceWithOptions($request, $runtime);
    }

    /**
     * Retrieves a domain name.
     *
     * @remarks
     * To retrieve a domain name, you must verify a text (TXT) record. Therefore, before you call this API operation to retrieve a domain name, call the [GetTxtRecordForVerify](https://www.alibabacloud.com/help/en/alibaba-cloud-dns/latest/generating-a-txt-record) operation to generate a TXT record.
     *
     * @param request - RetrieveDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveDomainResponse
     *
     * @param RetrieveDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RetrieveDomainResponse
     */
    public function retrieveDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RetrieveDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RetrieveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a domain name.
     *
     * @remarks
     * To retrieve a domain name, you must verify a text (TXT) record. Therefore, before you call this API operation to retrieve a domain name, call the [GetTxtRecordForVerify](https://www.alibabacloud.com/help/en/alibaba-cloud-dns/latest/generating-a-txt-record) operation to generate a TXT record.
     *
     * @param request - RetrieveDomainRequest
     *
     * @returns RetrieveDomainResponse
     *
     * @param RetrieveDomainRequest $request
     *
     * @return RetrieveDomainResponse
     */
    public function retrieveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retrieveDomainWithOptions($request, $runtime);
    }

    /**
     * Rolls back a disaster recovery plan.
     *
     * @param request - RollbackGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackGtmRecoveryPlanResponse
     *
     * @param RollbackGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackGtmRecoveryPlanResponse
     */
    public function rollbackGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recoveryPlanId) {
            @$query['RecoveryPlanId'] = $request->recoveryPlanId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back a disaster recovery plan.
     *
     * @param request - RollbackGtmRecoveryPlanRequest
     *
     * @returns RollbackGtmRecoveryPlanResponse
     *
     * @param RollbackGtmRecoveryPlanRequest $request
     *
     * @return RollbackGtmRecoveryPlanResponse
     */
    public function rollbackGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * Queries a list of address pools.
     *
     * @param request - SearchCloudGtmAddressPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCloudGtmAddressPoolsResponse
     *
     * @param SearchCloudGtmAddressPoolsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SearchCloudGtmAddressPoolsResponse
     */
    public function searchCloudGtmAddressPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolName) {
            @$query['AddressPoolName'] = $request->addressPoolName;
        }

        if (null !== $request->addressPoolType) {
            @$query['AddressPoolType'] = $request->addressPoolType;
        }

        if (null !== $request->availableStatus) {
            @$query['AvailableStatus'] = $request->availableStatus;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->healthStatus) {
            @$query['HealthStatus'] = $request->healthStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchCloudGtmAddressPools',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCloudGtmAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of address pools.
     *
     * @param request - SearchCloudGtmAddressPoolsRequest
     *
     * @returns SearchCloudGtmAddressPoolsResponse
     *
     * @param SearchCloudGtmAddressPoolsRequest $request
     *
     * @return SearchCloudGtmAddressPoolsResponse
     */
    public function searchCloudGtmAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchCloudGtmAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of addresses based on address names, descriptions, health check templates referenced by the addresses, or address IDs.
     *
     * @param request - SearchCloudGtmAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCloudGtmAddressesResponse
     *
     * @param SearchCloudGtmAddressesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchCloudGtmAddressesResponse
     */
    public function searchCloudGtmAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->availableStatus) {
            @$query['AvailableStatus'] = $request->availableStatus;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->healthStatus) {
            @$query['HealthStatus'] = $request->healthStatus;
        }

        if (null !== $request->monitorTemplateName) {
            @$query['MonitorTemplateName'] = $request->monitorTemplateName;
        }

        if (null !== $request->nameSearchCondition) {
            @$query['NameSearchCondition'] = $request->nameSearchCondition;
        }

        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remarkSearchCondition) {
            @$query['RemarkSearchCondition'] = $request->remarkSearchCondition;
        }

        if (null !== $request->remarks) {
            @$query['Remarks'] = $request->remarks;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchCloudGtmAddresses',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCloudGtmAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of addresses based on address names, descriptions, health check templates referenced by the addresses, or address IDs.
     *
     * @param request - SearchCloudGtmAddressesRequest
     *
     * @returns SearchCloudGtmAddressesResponse
     *
     * @param SearchCloudGtmAddressesRequest $request
     *
     * @return SearchCloudGtmAddressesResponse
     */
    public function searchCloudGtmAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchCloudGtmAddressesWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an access domain name.
     *
     * @param request - SearchCloudGtmInstanceConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCloudGtmInstanceConfigsResponse
     *
     * @param SearchCloudGtmInstanceConfigsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SearchCloudGtmInstanceConfigsResponse
     */
    public function searchCloudGtmInstanceConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->availableStatus) {
            @$query['AvailableStatus'] = $request->availableStatus;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->healthStatus) {
            @$query['HealthStatus'] = $request->healthStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->scheduleDomainName) {
            @$query['ScheduleDomainName'] = $request->scheduleDomainName;
        }

        if (null !== $request->scheduleZoneName) {
            @$query['ScheduleZoneName'] = $request->scheduleZoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchCloudGtmInstanceConfigs',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCloudGtmInstanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an access domain name.
     *
     * @param request - SearchCloudGtmInstanceConfigsRequest
     *
     * @returns SearchCloudGtmInstanceConfigsResponse
     *
     * @param SearchCloudGtmInstanceConfigsRequest $request
     *
     * @return SearchCloudGtmInstanceConfigsResponse
     */
    public function searchCloudGtmInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchCloudGtmInstanceConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances.
     *
     * @param request - SearchCloudGtmInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCloudGtmInstancesResponse
     *
     * @param SearchCloudGtmInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchCloudGtmInstancesResponse
     */
    public function searchCloudGtmInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
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
            'action' => 'SearchCloudGtmInstances',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCloudGtmInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances.
     *
     * @param request - SearchCloudGtmInstancesRequest
     *
     * @returns SearchCloudGtmInstancesResponse
     *
     * @param SearchCloudGtmInstancesRequest $request
     *
     * @return SearchCloudGtmInstancesResponse
     */
    public function searchCloudGtmInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchCloudGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of health check templates.
     *
     * @param request - SearchCloudGtmMonitorTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchCloudGtmMonitorTemplatesResponse
     *
     * @param SearchCloudGtmMonitorTemplatesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SearchCloudGtmMonitorTemplatesResponse
     */
    public function searchCloudGtmMonitorTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ipVersion) {
            @$query['IpVersion'] = $request->ipVersion;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchCloudGtmMonitorTemplates',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchCloudGtmMonitorTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of health check templates.
     *
     * @param request - SearchCloudGtmMonitorTemplatesRequest
     *
     * @returns SearchCloudGtmMonitorTemplatesResponse
     *
     * @param SearchCloudGtmMonitorTemplatesRequest $request
     *
     * @return SearchCloudGtmMonitorTemplatesResponse
     */
    public function searchCloudGtmMonitorTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchCloudGtmMonitorTemplatesWithOptions($request, $runtime);
    }

    /**
     * 搜索递归解析内置权威解析记录.
     *
     * @param request - SearchRecursionRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchRecursionRecordsResponse
     *
     * @param SearchRecursionRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SearchRecursionRecordsResponse
     */
    public function searchRecursionRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->requestSource) {
            @$query['RequestSource'] = $request->requestSource;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchRecursionRecords',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchRecursionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索递归解析内置权威解析记录.
     *
     * @param request - SearchRecursionRecordsRequest
     *
     * @returns SearchRecursionRecordsResponse
     *
     * @param SearchRecursionRecordsRequest $request
     *
     * @return SearchRecursionRecordsResponse
     */
    public function searchRecursionRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchRecursionRecordsWithOptions($request, $runtime);
    }

    /**
     * 搜索递归解析内置权威域名zone.
     *
     * @param tmpReq - SearchRecursionZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchRecursionZonesResponse
     *
     * @param SearchRecursionZonesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SearchRecursionZonesResponse
     */
    public function searchRecursionZonesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchRecursionZonesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->effectiveScopes) {
            $request->effectiveScopesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->effectiveScopes, 'EffectiveScopes', 'json');
        }

        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->effectiveScopesShrink) {
            @$query['EffectiveScopes'] = $request->effectiveScopesShrink;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->zoneName) {
            @$query['ZoneName'] = $request->zoneName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchRecursionZones',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchRecursionZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索递归解析内置权威域名zone.
     *
     * @param request - SearchRecursionZonesRequest
     *
     * @returns SearchRecursionZonesResponse
     *
     * @param SearchRecursionZonesRequest $request
     *
     * @return SearchRecursionZonesResponse
     */
    public function searchRecursionZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchRecursionZonesWithOptions($request, $runtime);
    }

    /**
     * Enables or disables weighted round-robin based on the specified parameters.
     *
     * @param request - SetDNSSLBStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDNSSLBStatusResponse
     *
     * @param SetDNSSLBStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetDNSSLBStatusResponse
     */
    public function setDNSSLBStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->open) {
            @$query['Open'] = $request->open;
        }

        if (null !== $request->subDomain) {
            @$query['SubDomain'] = $request->subDomain;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDNSSLBStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDNSSLBStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables weighted round-robin based on the specified parameters.
     *
     * @param request - SetDNSSLBStatusRequest
     *
     * @returns SetDNSSLBStatusResponse
     *
     * @param SetDNSSLBStatusRequest $request
     *
     * @return SetDNSSLBStatusResponse
     */
    public function setDNSSLBStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDNSSLBStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies an access policy.
     *
     * @remarks
     *
     * @param request - SetDnsGtmAccessModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDnsGtmAccessModeResponse
     *
     * @param SetDnsGtmAccessModeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetDnsGtmAccessModeResponse
     */
    public function setDnsGtmAccessModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDnsGtmAccessMode',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDnsGtmAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an access policy.
     *
     * @remarks
     *
     * @param request - SetDnsGtmAccessModeRequest
     *
     * @returns SetDnsGtmAccessModeResponse
     *
     * @param SetDnsGtmAccessModeRequest $request
     *
     * @return SetDnsGtmAccessModeResponse
     */
    public function setDnsGtmAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDnsGtmAccessModeWithOptions($request, $runtime);
    }

    /**
     * Specifies the health check status of an address pool.
     *
     * @param request - SetDnsGtmMonitorStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDnsGtmMonitorStatusResponse
     *
     * @param SetDnsGtmMonitorStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDnsGtmMonitorStatusResponse
     */
    public function setDnsGtmMonitorStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorConfigId) {
            @$query['MonitorConfigId'] = $request->monitorConfigId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDnsGtmMonitorStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDnsGtmMonitorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies the health check status of an address pool.
     *
     * @param request - SetDnsGtmMonitorStatusRequest
     *
     * @returns SetDnsGtmMonitorStatusResponse
     *
     * @param SetDnsGtmMonitorStatusRequest $request
     *
     * @return SetDnsGtmMonitorStatusResponse
     */
    public function setDnsGtmMonitorStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDnsGtmMonitorStatusWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the Domain Name System Security Extensions (DNSSEC) for a domain name. This feature is available only for the users of the paid editions of Alibaba Cloud DNS.
     *
     * @param request - SetDomainDnssecStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainDnssecStatusResponse
     *
     * @param SetDomainDnssecStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainDnssecStatusResponse
     */
    public function setDomainDnssecStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomainDnssecStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainDnssecStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the Domain Name System Security Extensions (DNSSEC) for a domain name. This feature is available only for the users of the paid editions of Alibaba Cloud DNS.
     *
     * @param request - SetDomainDnssecStatusRequest
     *
     * @returns SetDomainDnssecStatusResponse
     *
     * @param SetDomainDnssecStatusRequest $request
     *
     * @return SetDomainDnssecStatusResponse
     */
    public function setDomainDnssecStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainDnssecStatusWithOptions($request, $runtime);
    }

    /**
     * Specifies the status of an Alibaba Cloud DNS (DNS) record based on the specified parameters.
     *
     * @param request - SetDomainRecordStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainRecordStatusResponse
     *
     * @param SetDomainRecordStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainRecordStatusResponse
     */
    public function setDomainRecordStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomainRecordStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specifies the status of an Alibaba Cloud DNS (DNS) record based on the specified parameters.
     *
     * @param request - SetDomainRecordStatusRequest
     *
     * @returns SetDomainRecordStatusResponse
     *
     * @param SetDomainRecordStatusRequest $request
     *
     * @return SetDomainRecordStatusResponse
     */
    public function setDomainRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainRecordStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies a policy for switchover between address pool sets.
     *
     * @param request - SetGtmAccessModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetGtmAccessModeResponse
     *
     * @param SetGtmAccessModeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetGtmAccessModeResponse
     */
    public function setGtmAccessModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetGtmAccessMode',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetGtmAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a policy for switchover between address pool sets.
     *
     * @param request - SetGtmAccessModeRequest
     *
     * @returns SetGtmAccessModeResponse
     *
     * @param SetGtmAccessModeRequest $request
     *
     * @return SetGtmAccessModeResponse
     */
    public function setGtmAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGtmAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param request - SetGtmMonitorStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetGtmMonitorStatusResponse
     *
     * @param SetGtmMonitorStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetGtmMonitorStatusResponse
     */
    public function setGtmMonitorStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorConfigId) {
            @$query['MonitorConfigId'] = $request->monitorConfigId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetGtmMonitorStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetGtmMonitorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetGtmMonitorStatusRequest
     *
     * @returns SetGtmMonitorStatusResponse
     *
     * @param SetGtmMonitorStatusRequest $request
     *
     * @return SetGtmMonitorStatusResponse
     */
    public function setGtmMonitorStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGtmMonitorStatusWithOptions($request, $runtime);
    }

    /**
     * 提交缓存刷新任务
     *
     * @param request - SubmitIspFlushCacheTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIspFlushCacheTaskResponse
     *
     * @param SubmitIspFlushCacheTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitIspFlushCacheTaskResponse
     */
    public function submitIspFlushCacheTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIspFlushCacheTask',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitIspFlushCacheTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交缓存刷新任务
     *
     * @param request - SubmitIspFlushCacheTaskRequest
     *
     * @returns SubmitIspFlushCacheTaskResponse
     *
     * @param SubmitIspFlushCacheTaskRequest $request
     *
     * @return SubmitIspFlushCacheTaskResponse
     */
    public function submitIspFlushCacheTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIspFlushCacheTaskWithOptions($request, $runtime);
    }

    /**
     * Changes the access policy type for a Global Traffic Manager (GTM) instance.
     *
     * @param request - SwitchDnsGtmInstanceStrategyModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchDnsGtmInstanceStrategyModeResponse
     *
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse
     */
    public function switchDnsGtmInstanceStrategyModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyMode) {
            @$query['StrategyMode'] = $request->strategyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchDnsGtmInstanceStrategyMode',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchDnsGtmInstanceStrategyModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the access policy type for a Global Traffic Manager (GTM) instance.
     *
     * @param request - SwitchDnsGtmInstanceStrategyModeRequest
     *
     * @returns SwitchDnsGtmInstanceStrategyModeResponse
     *
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse
     */
    public function switchDnsGtmInstanceStrategyMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDnsGtmInstanceStrategyModeWithOptions($request, $runtime);
    }

    /**
     * Adds and modifies a tag for a resource.
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
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2015-01-09',
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
     * Adds and modifies a tag for a resource.
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
     * Transfers multiple domain names from the current account to another account at a time.
     *
     * @param request - TransferDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferDomainResponse
     *
     * @param TransferDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TransferDomainResponse
     */
    public function transferDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transfers multiple domain names from the current account to another account at a time.
     *
     * @param request - TransferDomainRequest
     *
     * @returns TransferDomainResponse
     *
     * @param TransferDomainRequest $request
     *
     * @return TransferDomainResponse
     */
    public function transferDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferDomainWithOptions($request, $runtime);
    }

    /**
     * Unbinds one or more domain names from a paid Alibaba Cloud DNS instance based on the instance ID.
     *
     * @remarks
     * A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call an API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call an API operation to bind only one domain name to the instance. However, if the instance that you want to bind to the desired domain name is already bound to a domain name, you can call this operation to unbind the original domain name from the instance and then bind the desired domain name to the instance.
     *
     * @param request - UnbindInstanceDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindInstanceDomainsResponse
     *
     * @param UnbindInstanceDomainsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindInstanceDomainsResponse
     */
    public function unbindInstanceDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindInstanceDomains',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds one or more domain names from a paid Alibaba Cloud DNS instance based on the instance ID.
     *
     * @remarks
     * A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call an API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call an API operation to bind only one domain name to the instance. However, if the instance that you want to bind to the desired domain name is already bound to a domain name, you can call this operation to unbind the original domain name from the instance and then bind the desired domain name to the instance.
     *
     * @param request - UnbindInstanceDomainsRequest
     *
     * @returns UnbindInstanceDomainsResponse
     *
     * @param UnbindInstanceDomainsRequest $request
     *
     * @return UnbindInstanceDomainsResponse
     */
    public function unbindInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resources.
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

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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
            'version' => '2015-01-09',
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
     * Removes tags from resources.
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
     * 修改 AppKey 状态
     *
     * @param request - UpdateAppKeyStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppKeyStateResponse
     *
     * @param UpdateAppKeyStateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAppKeyStateResponse
     */
    public function updateAppKeyStateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appKeyId) {
            @$query['AppKeyId'] = $request->appKeyId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAppKeyState',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppKeyStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改 AppKey 状态
     *
     * @param request - UpdateAppKeyStateRequest
     *
     * @returns UpdateAppKeyStateResponse
     *
     * @param UpdateAppKeyStateRequest $request
     *
     * @return UpdateAppKeyStateResponse
     */
    public function updateAppKeyState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppKeyStateWithOptions($request, $runtime);
    }

    /**
     * Modifies the condition for determining the health status of a specified address.
     *
     * @param tmpReq - UpdateCloudGtmAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressResponse
     *
     * @param UpdateCloudGtmAddressRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCloudGtmAddressResponse
     */
    public function updateCloudGtmAddressWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCloudGtmAddressShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->healthTasks) {
            $request->healthTasksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->healthTasks, 'HealthTasks', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->attributeInfo) {
            @$query['AttributeInfo'] = $request->attributeInfo;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->healthJudgement) {
            @$query['HealthJudgement'] = $request->healthJudgement;
        }

        if (null !== $request->healthTasksShrink) {
            @$query['HealthTasks'] = $request->healthTasksShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddress',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the condition for determining the health status of a specified address.
     *
     * @param request - UpdateCloudGtmAddressRequest
     *
     * @returns UpdateCloudGtmAddressResponse
     *
     * @param UpdateCloudGtmAddressRequest $request
     *
     * @return UpdateCloudGtmAddressResponse
     */
    public function updateCloudGtmAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressWithOptions($request, $runtime);
    }

    /**
     * Modifies the enabling status of an address.
     *
     * @remarks
     *   If an address is **enabled** and the health status of the address is **Normal**, the availability status of the address is **Available**.
     * *   If an address is **disabled** or the health status of the address is **Abnormal**, the availability status of the address is **Unavailable**.
     *
     * @param request - UpdateCloudGtmAddressEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressEnableStatusResponse
     *
     * @param UpdateCloudGtmAddressEnableStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateCloudGtmAddressEnableStatusResponse
     */
    public function updateCloudGtmAddressEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressEnableStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the enabling status of an address.
     *
     * @remarks
     *   If an address is **enabled** and the health status of the address is **Normal**, the availability status of the address is **Available**.
     * *   If an address is **disabled** or the health status of the address is **Abnormal**, the availability status of the address is **Unavailable**.
     *
     * @param request - UpdateCloudGtmAddressEnableStatusRequest
     *
     * @returns UpdateCloudGtmAddressEnableStatusResponse
     *
     * @param UpdateCloudGtmAddressEnableStatusRequest $request
     *
     * @return UpdateCloudGtmAddressEnableStatusResponse
     */
    public function updateCloudGtmAddressEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressEnableStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the failover mode that is used when address exceptions are identified.
     *
     * @param request - UpdateCloudGtmAddressManualAvailableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressManualAvailableStatusResponse
     *
     * @param UpdateCloudGtmAddressManualAvailableStatusRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return UpdateCloudGtmAddressManualAvailableStatusResponse
     */
    public function updateCloudGtmAddressManualAvailableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->availableMode) {
            @$query['AvailableMode'] = $request->availableMode;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->manualAvailableStatus) {
            @$query['ManualAvailableStatus'] = $request->manualAvailableStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressManualAvailableStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressManualAvailableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the failover mode that is used when address exceptions are identified.
     *
     * @param request - UpdateCloudGtmAddressManualAvailableStatusRequest
     *
     * @returns UpdateCloudGtmAddressManualAvailableStatusResponse
     *
     * @param UpdateCloudGtmAddressManualAvailableStatusRequest $request
     *
     * @return UpdateCloudGtmAddressManualAvailableStatusResponse
     */
    public function updateCloudGtmAddressManualAvailableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressManualAvailableStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic configurations of an address pool.
     *
     * @param request - UpdateCloudGtmAddressPoolBasicConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressPoolBasicConfigResponse
     *
     * @param UpdateCloudGtmAddressPoolBasicConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateCloudGtmAddressPoolBasicConfigResponse
     */
    public function updateCloudGtmAddressPoolBasicConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->addressPoolName) {
            @$query['AddressPoolName'] = $request->addressPoolName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->healthJudgement) {
            @$query['HealthJudgement'] = $request->healthJudgement;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressPoolBasicConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressPoolBasicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic configurations of an address pool.
     *
     * @param request - UpdateCloudGtmAddressPoolBasicConfigRequest
     *
     * @returns UpdateCloudGtmAddressPoolBasicConfigResponse
     *
     * @param UpdateCloudGtmAddressPoolBasicConfigRequest $request
     *
     * @return UpdateCloudGtmAddressPoolBasicConfigResponse
     */
    public function updateCloudGtmAddressPoolBasicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressPoolBasicConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the enabling status of an address pool.
     *
     * @remarks
     *   If an address pool is **enabled** and the health status of the address pool is **Normal**, the availability status of the address pool is **Available**.
     * *   If an address pool is **disabled** or the health status of the address pool is **Abnormal**, the availability status of the address pool is **unavailable**.
     *
     * @param request - UpdateCloudGtmAddressPoolEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressPoolEnableStatusResponse
     *
     * @param UpdateCloudGtmAddressPoolEnableStatusRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateCloudGtmAddressPoolEnableStatusResponse
     */
    public function updateCloudGtmAddressPoolEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressPoolEnableStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressPoolEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the enabling status of an address pool.
     *
     * @remarks
     *   If an address pool is **enabled** and the health status of the address pool is **Normal**, the availability status of the address pool is **Available**.
     * *   If an address pool is **disabled** or the health status of the address pool is **Abnormal**, the availability status of the address pool is **unavailable**.
     *
     * @param request - UpdateCloudGtmAddressPoolEnableStatusRequest
     *
     * @returns UpdateCloudGtmAddressPoolEnableStatusResponse
     *
     * @param UpdateCloudGtmAddressPoolEnableStatusRequest $request
     *
     * @return UpdateCloudGtmAddressPoolEnableStatusResponse
     */
    public function updateCloudGtmAddressPoolEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressPoolEnableStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the load balancing policy of an address pool.
     *
     * @param request - UpdateCloudGtmAddressPoolLbStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressPoolLbStrategyResponse
     *
     * @param UpdateCloudGtmAddressPoolLbStrategyRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateCloudGtmAddressPoolLbStrategyResponse
     */
    public function updateCloudGtmAddressPoolLbStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressLbStrategy) {
            @$query['AddressLbStrategy'] = $request->addressLbStrategy;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->sequenceLbStrategyMode) {
            @$query['SequenceLbStrategyMode'] = $request->sequenceLbStrategyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressPoolLbStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressPoolLbStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the load balancing policy of an address pool.
     *
     * @param request - UpdateCloudGtmAddressPoolLbStrategyRequest
     *
     * @returns UpdateCloudGtmAddressPoolLbStrategyResponse
     *
     * @param UpdateCloudGtmAddressPoolLbStrategyRequest $request
     *
     * @return UpdateCloudGtmAddressPoolLbStrategyResponse
     */
    public function updateCloudGtmAddressPoolLbStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressPoolLbStrategyWithOptions($request, $runtime);
    }

    /**
     * Modifies the remarks of an address pool.
     *
     * @param request - UpdateCloudGtmAddressPoolRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressPoolRemarkResponse
     *
     * @param UpdateCloudGtmAddressPoolRemarkRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateCloudGtmAddressPoolRemarkResponse
     */
    public function updateCloudGtmAddressPoolRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolId) {
            @$query['AddressPoolId'] = $request->addressPoolId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressPoolRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressPoolRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the remarks of an address pool.
     *
     * @param request - UpdateCloudGtmAddressPoolRemarkRequest
     *
     * @returns UpdateCloudGtmAddressPoolRemarkResponse
     *
     * @param UpdateCloudGtmAddressPoolRemarkRequest $request
     *
     * @return UpdateCloudGtmAddressPoolRemarkResponse
     */
    public function updateCloudGtmAddressPoolRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressPoolRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies the remarks of an address.
     *
     * @param request - UpdateCloudGtmAddressRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmAddressRemarkResponse
     *
     * @param UpdateCloudGtmAddressRemarkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateCloudGtmAddressRemarkResponse
     */
    public function updateCloudGtmAddressRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressId) {
            @$query['AddressId'] = $request->addressId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmAddressRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmAddressRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the remarks of an address.
     *
     * @param request - UpdateCloudGtmAddressRemarkRequest
     *
     * @returns UpdateCloudGtmAddressRemarkResponse
     *
     * @param UpdateCloudGtmAddressRemarkRequest $request
     *
     * @return UpdateCloudGtmAddressRemarkResponse
     */
    public function updateCloudGtmAddressRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmAddressRemarkWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateCloudGtmGlobalAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmGlobalAlertResponse
     *
     * @param UpdateCloudGtmGlobalAlertRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateCloudGtmGlobalAlertResponse
     */
    public function updateCloudGtmGlobalAlertWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCloudGtmGlobalAlertShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alertConfig) {
            $request->alertConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertConfig, 'AlertConfig', 'json');
        }

        if (null !== $tmpReq->alertGroup) {
            $request->alertGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertGroup, 'AlertGroup', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->alertConfigShrink) {
            @$query['AlertConfig'] = $request->alertConfigShrink;
        }

        if (null !== $request->alertGroupShrink) {
            @$query['AlertGroup'] = $request->alertGroupShrink;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmGlobalAlert',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmGlobalAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCloudGtmGlobalAlertRequest
     *
     * @returns UpdateCloudGtmGlobalAlertResponse
     *
     * @param UpdateCloudGtmGlobalAlertRequest $request
     *
     * @return UpdateCloudGtmGlobalAlertResponse
     */
    public function updateCloudGtmGlobalAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmGlobalAlertWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - UpdateCloudGtmInstanceConfigAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmInstanceConfigAlertResponse
     *
     * @param UpdateCloudGtmInstanceConfigAlertRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateCloudGtmInstanceConfigAlertResponse
     */
    public function updateCloudGtmInstanceConfigAlertWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCloudGtmInstanceConfigAlertShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->alertConfig) {
            $request->alertConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertConfig, 'AlertConfig', 'json');
        }

        if (null !== $tmpReq->alertGroup) {
            $request->alertGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->alertGroup, 'AlertGroup', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->alertConfigShrink) {
            @$query['AlertConfig'] = $request->alertConfigShrink;
        }

        if (null !== $request->alertGroupShrink) {
            @$query['AlertGroup'] = $request->alertGroupShrink;
        }

        if (null !== $request->alertMode) {
            @$query['AlertMode'] = $request->alertMode;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmInstanceConfigAlert',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmInstanceConfigAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCloudGtmInstanceConfigAlertRequest
     *
     * @returns UpdateCloudGtmInstanceConfigAlertResponse
     *
     * @param UpdateCloudGtmInstanceConfigAlertRequest $request
     *
     * @return UpdateCloudGtmInstanceConfigAlertResponse
     */
    public function updateCloudGtmInstanceConfigAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmInstanceConfigAlertWithOptions($request, $runtime);
    }

    /**
     * Updates the global time-to-live (TTL) configuration of a GTM 3.0 instance.
     *
     * @param request - UpdateCloudGtmInstanceConfigBasicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmInstanceConfigBasicResponse
     *
     * @param UpdateCloudGtmInstanceConfigBasicRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateCloudGtmInstanceConfigBasicResponse
     */
    public function updateCloudGtmInstanceConfigBasicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scheduleHostname) {
            @$query['ScheduleHostname'] = $request->scheduleHostname;
        }

        if (null !== $request->scheduleZoneName) {
            @$query['ScheduleZoneName'] = $request->scheduleZoneName;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmInstanceConfigBasic',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmInstanceConfigBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the global time-to-live (TTL) configuration of a GTM 3.0 instance.
     *
     * @param request - UpdateCloudGtmInstanceConfigBasicRequest
     *
     * @returns UpdateCloudGtmInstanceConfigBasicResponse
     *
     * @param UpdateCloudGtmInstanceConfigBasicRequest $request
     *
     * @return UpdateCloudGtmInstanceConfigBasicResponse
     */
    public function updateCloudGtmInstanceConfigBasic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmInstanceConfigBasicWithOptions($request, $runtime);
    }

    /**
     * Modifies the enabling status of an access domain name.
     *
     * @remarks
     *   If an access domain name is **enabled** and the health state is **normal**, the access domain name is deemed **available**.
     * *   If an access domain name is **disabled** or the health state is **abnormal**, the access domain name is deemed **unavailable**.
     *
     * @param request - UpdateCloudGtmInstanceConfigEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmInstanceConfigEnableStatusResponse
     *
     * @param UpdateCloudGtmInstanceConfigEnableStatusRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateCloudGtmInstanceConfigEnableStatusResponse
     */
    public function updateCloudGtmInstanceConfigEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmInstanceConfigEnableStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmInstanceConfigEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the enabling status of an access domain name.
     *
     * @remarks
     *   If an access domain name is **enabled** and the health state is **normal**, the access domain name is deemed **available**.
     * *   If an access domain name is **disabled** or the health state is **abnormal**, the access domain name is deemed **unavailable**.
     *
     * @param request - UpdateCloudGtmInstanceConfigEnableStatusRequest
     *
     * @returns UpdateCloudGtmInstanceConfigEnableStatusResponse
     *
     * @param UpdateCloudGtmInstanceConfigEnableStatusRequest $request
     *
     * @return UpdateCloudGtmInstanceConfigEnableStatusResponse
     */
    public function updateCloudGtmInstanceConfigEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmInstanceConfigEnableStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the load balancing policy of a Global Traffic Manager (GTM) 3.0 instance.
     *
     * @param request - UpdateCloudGtmInstanceConfigLbStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmInstanceConfigLbStrategyResponse
     *
     * @param UpdateCloudGtmInstanceConfigLbStrategyRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateCloudGtmInstanceConfigLbStrategyResponse
     */
    public function updateCloudGtmInstanceConfigLbStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->addressPoolLbStrategy) {
            @$query['AddressPoolLbStrategy'] = $request->addressPoolLbStrategy;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sequenceLbStrategyMode) {
            @$query['SequenceLbStrategyMode'] = $request->sequenceLbStrategyMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmInstanceConfigLbStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmInstanceConfigLbStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the load balancing policy of a Global Traffic Manager (GTM) 3.0 instance.
     *
     * @param request - UpdateCloudGtmInstanceConfigLbStrategyRequest
     *
     * @returns UpdateCloudGtmInstanceConfigLbStrategyResponse
     *
     * @param UpdateCloudGtmInstanceConfigLbStrategyRequest $request
     *
     * @return UpdateCloudGtmInstanceConfigLbStrategyResponse
     */
    public function updateCloudGtmInstanceConfigLbStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmInstanceConfigLbStrategyWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a Global Traffic Manager (GTM) 3.0 instance.
     *
     * @param request - UpdateCloudGtmInstanceConfigRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmInstanceConfigRemarkResponse
     *
     * @param UpdateCloudGtmInstanceConfigRemarkRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateCloudGtmInstanceConfigRemarkResponse
     */
    public function updateCloudGtmInstanceConfigRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmInstanceConfigRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmInstanceConfigRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a Global Traffic Manager (GTM) 3.0 instance.
     *
     * @param request - UpdateCloudGtmInstanceConfigRemarkRequest
     *
     * @returns UpdateCloudGtmInstanceConfigRemarkResponse
     *
     * @param UpdateCloudGtmInstanceConfigRemarkRequest $request
     *
     * @return UpdateCloudGtmInstanceConfigRemarkResponse
     */
    public function updateCloudGtmInstanceConfigRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmInstanceConfigRemarkWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateCloudGtmInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmInstanceNameResponse
     *
     * @param UpdateCloudGtmInstanceNameRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateCloudGtmInstanceNameResponse
     */
    public function updateCloudGtmInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmInstanceName',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCloudGtmInstanceNameRequest
     *
     * @returns UpdateCloudGtmInstanceNameResponse
     *
     * @param UpdateCloudGtmInstanceNameRequest $request
     *
     * @return UpdateCloudGtmInstanceNameResponse
     */
    public function updateCloudGtmInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmInstanceNameWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a health check template.
     *
     * @param tmpReq - UpdateCloudGtmMonitorTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmMonitorTemplateResponse
     *
     * @param UpdateCloudGtmMonitorTemplateRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateCloudGtmMonitorTemplateResponse
     */
    public function updateCloudGtmMonitorTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateCloudGtmMonitorTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ispCityNodes) {
            $request->ispCityNodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ispCityNodes, 'IspCityNodes', 'json');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->extendInfo) {
            @$query['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->failureRate) {
            @$query['FailureRate'] = $request->failureRate;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNodesShrink) {
            @$query['IspCityNodes'] = $request->ispCityNodesShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmMonitorTemplate',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmMonitorTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about a health check template.
     *
     * @param request - UpdateCloudGtmMonitorTemplateRequest
     *
     * @returns UpdateCloudGtmMonitorTemplateResponse
     *
     * @param UpdateCloudGtmMonitorTemplateRequest $request
     *
     * @return UpdateCloudGtmMonitorTemplateResponse
     */
    public function updateCloudGtmMonitorTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmMonitorTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateCloudGtmMonitorTemplateRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudGtmMonitorTemplateRemarkResponse
     *
     * @param UpdateCloudGtmMonitorTemplateRemarkRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateCloudGtmMonitorTemplateRemarkResponse
     */
    public function updateCloudGtmMonitorTemplateRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudGtmMonitorTemplateRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudGtmMonitorTemplateRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCloudGtmMonitorTemplateRemarkRequest
     *
     * @returns UpdateCloudGtmMonitorTemplateRemarkResponse
     *
     * @param UpdateCloudGtmMonitorTemplateRemarkRequest $request
     *
     * @return UpdateCloudGtmMonitorTemplateRemarkResponse
     */
    public function updateCloudGtmMonitorTemplateRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudGtmMonitorTemplateRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies a custom line with its unique ID.
     *
     * @remarks
     * In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *
     * @param request - UpdateCustomLineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomLineResponse
     *
     * @param UpdateCustomLineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCustomLineResponse
     */
    public function updateCustomLineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipSegment) {
            @$query['IpSegment'] = $request->ipSegment;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lineId) {
            @$query['LineId'] = $request->lineId;
        }

        if (null !== $request->lineName) {
            @$query['LineName'] = $request->lineName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomLine',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a custom line with its unique ID.
     *
     * @remarks
     * In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *
     * @param request - UpdateCustomLineRequest
     *
     * @returns UpdateCustomLineResponse
     *
     * @param UpdateCustomLineRequest $request
     *
     * @return UpdateCustomLineResponse
     */
    public function updateCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomLineWithOptions($request, $runtime);
    }

    /**
     * Modifies the weight of a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - UpdateDNSSLBWeightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDNSSLBWeightResponse
     *
     * @param UpdateDNSSLBWeightRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDNSSLBWeightResponse
     */
    public function updateDNSSLBWeightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDNSSLBWeight',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDNSSLBWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the weight of a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - UpdateDNSSLBWeightRequest
     *
     * @returns UpdateDNSSLBWeightResponse
     *
     * @param UpdateDNSSLBWeightRequest $request
     *
     * @return UpdateDNSSLBWeightResponse
     */
    public function updateDNSSLBWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDNSSLBWeightWithOptions($request, $runtime);
    }

    /**
     * Updates the cache-accelerated domain name based on the specified parameters.
     *
     * @param request - UpdateDnsCacheDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDnsCacheDomainResponse
     *
     * @param UpdateDnsCacheDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDnsCacheDomainResponse
     */
    public function updateDnsCacheDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheTtlMax) {
            @$query['CacheTtlMax'] = $request->cacheTtlMax;
        }

        if (null !== $request->cacheTtlMin) {
            @$query['CacheTtlMin'] = $request->cacheTtlMin;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceDnsServer) {
            @$query['SourceDnsServer'] = $request->sourceDnsServer;
        }

        if (null !== $request->sourceEdns) {
            @$query['SourceEdns'] = $request->sourceEdns;
        }

        if (null !== $request->sourceProtocol) {
            @$query['SourceProtocol'] = $request->sourceProtocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDnsCacheDomain',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDnsCacheDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the cache-accelerated domain name based on the specified parameters.
     *
     * @param request - UpdateDnsCacheDomainRequest
     *
     * @returns UpdateDnsCacheDomainResponse
     *
     * @param UpdateDnsCacheDomainRequest $request
     *
     * @return UpdateDnsCacheDomainResponse
     */
    public function updateDnsCacheDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsCacheDomainWithOptions($request, $runtime);
    }

    /**
     * Updates the remarks for the cache-accelerated domain name of the destination domain name.
     *
     * @param request - UpdateDnsCacheDomainRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDnsCacheDomainRemarkResponse
     *
     * @param UpdateDnsCacheDomainRemarkRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsCacheDomainRemarkResponse
     */
    public function updateDnsCacheDomainRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDnsCacheDomainRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDnsCacheDomainRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the remarks for the cache-accelerated domain name of the destination domain name.
     *
     * @param request - UpdateDnsCacheDomainRemarkRequest
     *
     * @returns UpdateDnsCacheDomainRemarkResponse
     *
     * @param UpdateDnsCacheDomainRemarkRequest $request
     *
     * @return UpdateDnsCacheDomainRemarkResponse
     */
    public function updateDnsCacheDomainRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsCacheDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies an access policy.
     *
     * @param request - UpdateDnsGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDnsGtmAccessStrategyResponse
     *
     * @param UpdateDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsGtmAccessStrategyResponse
     */
    public function updateDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessMode) {
            @$query['AccessMode'] = $request->accessMode;
        }

        if (null !== $request->defaultAddrPool) {
            @$query['DefaultAddrPool'] = $request->defaultAddrPool;
        }

        if (null !== $request->defaultAddrPoolType) {
            @$query['DefaultAddrPoolType'] = $request->defaultAddrPoolType;
        }

        if (null !== $request->defaultLatencyOptimization) {
            @$query['DefaultLatencyOptimization'] = $request->defaultLatencyOptimization;
        }

        if (null !== $request->defaultLbaStrategy) {
            @$query['DefaultLbaStrategy'] = $request->defaultLbaStrategy;
        }

        if (null !== $request->defaultMaxReturnAddrNum) {
            @$query['DefaultMaxReturnAddrNum'] = $request->defaultMaxReturnAddrNum;
        }

        if (null !== $request->defaultMinAvailableAddrNum) {
            @$query['DefaultMinAvailableAddrNum'] = $request->defaultMinAvailableAddrNum;
        }

        if (null !== $request->failoverAddrPool) {
            @$query['FailoverAddrPool'] = $request->failoverAddrPool;
        }

        if (null !== $request->failoverAddrPoolType) {
            @$query['FailoverAddrPoolType'] = $request->failoverAddrPoolType;
        }

        if (null !== $request->failoverLatencyOptimization) {
            @$query['FailoverLatencyOptimization'] = $request->failoverLatencyOptimization;
        }

        if (null !== $request->failoverLbaStrategy) {
            @$query['FailoverLbaStrategy'] = $request->failoverLbaStrategy;
        }

        if (null !== $request->failoverMaxReturnAddrNum) {
            @$query['FailoverMaxReturnAddrNum'] = $request->failoverMaxReturnAddrNum;
        }

        if (null !== $request->failoverMinAvailableAddrNum) {
            @$query['FailoverMinAvailableAddrNum'] = $request->failoverMinAvailableAddrNum;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lines) {
            @$query['Lines'] = $request->lines;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        if (null !== $request->strategyName) {
            @$query['StrategyName'] = $request->strategyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDnsGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an access policy.
     *
     * @param request - UpdateDnsGtmAccessStrategyRequest
     *
     * @returns UpdateDnsGtmAccessStrategyResponse
     *
     * @param UpdateDnsGtmAccessStrategyRequest $request
     *
     * @return UpdateDnsGtmAccessStrategyResponse
     */
    public function updateDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * Modifies an address pool.
     *
     * @param request - UpdateDnsGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDnsGtmAddressPoolResponse
     *
     * @param UpdateDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDnsGtmAddressPoolResponse
     */
    public function updateDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addr) {
            @$query['Addr'] = $request->addr;
        }

        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lbaStrategy) {
            @$query['LbaStrategy'] = $request->lbaStrategy;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDnsGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDnsGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an address pool.
     *
     * @param request - UpdateDnsGtmAddressPoolRequest
     *
     * @returns UpdateDnsGtmAddressPoolResponse
     *
     * @param UpdateDnsGtmAddressPoolRequest $request
     *
     * @return UpdateDnsGtmAddressPoolResponse
     */
    public function updateDnsGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a Global Traffic Manager (GTM) instance.
     *
     * @param request - UpdateDnsGtmInstanceGlobalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDnsGtmInstanceGlobalConfigResponse
     *
     * @param UpdateDnsGtmInstanceGlobalConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateDnsGtmInstanceGlobalConfigResponse
     */
    public function updateDnsGtmInstanceGlobalConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertConfig) {
            @$query['AlertConfig'] = $request->alertConfig;
        }

        if (null !== $request->alertGroup) {
            @$query['AlertGroup'] = $request->alertGroup;
        }

        if (null !== $request->cnameType) {
            @$query['CnameType'] = $request->cnameType;
        }

        if (null !== $request->forceUpdate) {
            @$query['ForceUpdate'] = $request->forceUpdate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->publicCnameMode) {
            @$query['PublicCnameMode'] = $request->publicCnameMode;
        }

        if (null !== $request->publicRr) {
            @$query['PublicRr'] = $request->publicRr;
        }

        if (null !== $request->publicUserDomainName) {
            @$query['PublicUserDomainName'] = $request->publicUserDomainName;
        }

        if (null !== $request->publicZoneName) {
            @$query['PublicZoneName'] = $request->publicZoneName;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDnsGtmInstanceGlobalConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDnsGtmInstanceGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a Global Traffic Manager (GTM) instance.
     *
     * @param request - UpdateDnsGtmInstanceGlobalConfigRequest
     *
     * @returns UpdateDnsGtmInstanceGlobalConfigResponse
     *
     * @param UpdateDnsGtmInstanceGlobalConfigRequest $request
     *
     * @return UpdateDnsGtmInstanceGlobalConfigResponse
     */
    public function updateDnsGtmInstanceGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmInstanceGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies a health check task.
     *
     * @param request - UpdateDnsGtmMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDnsGtmMonitorResponse
     *
     * @param UpdateDnsGtmMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDnsGtmMonitorResponse
     */
    public function updateDnsGtmMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNode) {
            @$query['IspCityNode'] = $request->ispCityNode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorConfigId) {
            @$query['MonitorConfigId'] = $request->monitorConfigId;
        }

        if (null !== $request->monitorExtendInfo) {
            @$query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDnsGtmMonitor',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDnsGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a health check task.
     *
     * @param request - UpdateDnsGtmMonitorRequest
     *
     * @returns UpdateDnsGtmMonitorResponse
     *
     * @param UpdateDnsGtmMonitorRequest $request
     *
     * @return UpdateDnsGtmMonitorResponse
     */
    public function updateDnsGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a domain name group based on the specified parameters.
     *
     * @remarks
     * Modifies the name of an existing domain name group.
     *
     * @param request - UpdateDomainGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainGroupResponse
     *
     * @param UpdateDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDomainGroupResponse
     */
    public function updateDomainGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainGroup',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a domain name group based on the specified parameters.
     *
     * @remarks
     * Modifies the name of an existing domain name group.
     *
     * @param request - UpdateDomainGroupRequest
     *
     * @returns UpdateDomainGroupResponse
     *
     * @param UpdateDomainGroupRequest $request
     *
     * @return UpdateDomainGroupResponse
     */
    public function updateDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - UpdateDomainRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainRecordResponse
     *
     * @param UpdateDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDomainRecordResponse
     */
    public function updateDomainRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->RR) {
            @$query['RR'] = $request->RR;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->TTL) {
            @$query['TTL'] = $request->TTL;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - UpdateDomainRecordRequest
     *
     * @returns UpdateDomainRecordResponse
     *
     * @param UpdateDomainRecordRequest $request
     *
     * @return UpdateDomainRecordResponse
     */
    public function updateDomainRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainRecordWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - UpdateDomainRecordRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainRecordRemarkResponse
     *
     * @param UpdateDomainRecordRemarkRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDomainRecordRemarkResponse
     */
    public function updateDomainRecordRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainRecordRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainRecordRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a Domain Name System (DNS) record based on the specified parameters.
     *
     * @param request - UpdateDomainRecordRemarkRequest
     *
     * @returns UpdateDomainRecordRemarkResponse
     *
     * @param UpdateDomainRecordRemarkRequest $request
     *
     * @return UpdateDomainRecordRemarkResponse
     */
    public function updateDomainRecordRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainRecordRemarkWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a domain name based on the specified parameters.
     *
     * @param request - UpdateDomainRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDomainRemarkResponse
     *
     * @param UpdateDomainRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDomainRemarkResponse
     */
    public function updateDomainRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDomainRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDomainRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a domain name based on the specified parameters.
     *
     * @param request - UpdateDomainRemarkRequest
     *
     * @returns UpdateDomainRemarkResponse
     *
     * @param UpdateDomainRemarkRequest $request
     *
     * @return UpdateDomainRemarkResponse
     */
    public function updateDomainRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateGtmAccessStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGtmAccessStrategyResponse
     *
     * @param UpdateGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateGtmAccessStrategyResponse
     */
    public function updateGtmAccessStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLines) {
            @$query['AccessLines'] = $request->accessLines;
        }

        if (null !== $request->defaultAddrPoolId) {
            @$query['DefaultAddrPoolId'] = $request->defaultAddrPoolId;
        }

        if (null !== $request->failoverAddrPoolId) {
            @$query['FailoverAddrPoolId'] = $request->failoverAddrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->strategyId) {
            @$query['StrategyId'] = $request->strategyId;
        }

        if (null !== $request->strategyName) {
            @$query['StrategyName'] = $request->strategyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGtmAccessStrategy',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateGtmAccessStrategyRequest
     *
     * @returns UpdateGtmAccessStrategyResponse
     *
     * @param UpdateGtmAccessStrategyRequest $request
     *
     * @return UpdateGtmAccessStrategyResponse
     */
    public function updateGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateGtmAddressPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGtmAddressPoolResponse
     *
     * @param UpdateGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGtmAddressPoolResponse
     */
    public function updateGtmAddressPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addr) {
            @$query['Addr'] = $request->addr;
        }

        if (null !== $request->addrPoolId) {
            @$query['AddrPoolId'] = $request->addrPoolId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->minAvailableAddrNum) {
            @$query['MinAvailableAddrNum'] = $request->minAvailableAddrNum;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGtmAddressPool',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateGtmAddressPoolRequest
     *
     * @returns UpdateGtmAddressPoolResponse
     *
     * @param UpdateGtmAddressPoolRequest $request
     *
     * @return UpdateGtmAddressPoolResponse
     */
    public function updateGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a Global Traffic Manager (GTM) instance based on the specified parameters.
     *
     * @param request - UpdateGtmInstanceGlobalConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGtmInstanceGlobalConfigResponse
     *
     * @param UpdateGtmInstanceGlobalConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGtmInstanceGlobalConfigResponse
     */
    public function updateGtmInstanceGlobalConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertGroup) {
            @$query['AlertGroup'] = $request->alertGroup;
        }

        if (null !== $request->cnameCustomDomainName) {
            @$query['CnameCustomDomainName'] = $request->cnameCustomDomainName;
        }

        if (null !== $request->cnameMode) {
            @$query['CnameMode'] = $request->cnameMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lbaStrategy) {
            @$query['LbaStrategy'] = $request->lbaStrategy;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->userDomainName) {
            @$query['UserDomainName'] = $request->userDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGtmInstanceGlobalConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGtmInstanceGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a Global Traffic Manager (GTM) instance based on the specified parameters.
     *
     * @param request - UpdateGtmInstanceGlobalConfigRequest
     *
     * @returns UpdateGtmInstanceGlobalConfigResponse
     *
     * @param UpdateGtmInstanceGlobalConfigRequest $request
     *
     * @return UpdateGtmInstanceGlobalConfigResponse
     */
    public function updateGtmInstanceGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmInstanceGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * Modifies the health check configuration for an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - UpdateGtmMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGtmMonitorResponse
     *
     * @param UpdateGtmMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateGtmMonitorResponse
     */
    public function updateGtmMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispCityNode) {
            @$query['IspCityNode'] = $request->ispCityNode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->monitorConfigId) {
            @$query['MonitorConfigId'] = $request->monitorConfigId;
        }

        if (null !== $request->monitorExtendInfo) {
            @$query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGtmMonitor',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the health check configuration for an address pool of a Global Traffic Manager (GTM) instance.
     *
     * @param request - UpdateGtmMonitorRequest
     *
     * @returns UpdateGtmMonitorResponse
     *
     * @param UpdateGtmMonitorRequest $request
     *
     * @return UpdateGtmMonitorResponse
     */
    public function updateGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * Modifies a disaster recovery plan.
     *
     * @param request - UpdateGtmRecoveryPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGtmRecoveryPlanResponse
     *
     * @param UpdateGtmRecoveryPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateGtmRecoveryPlanResponse
     */
    public function updateGtmRecoveryPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->faultAddrPool) {
            @$query['FaultAddrPool'] = $request->faultAddrPool;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->recoveryPlanId) {
            @$query['RecoveryPlanId'] = $request->recoveryPlanId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGtmRecoveryPlan',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a disaster recovery plan.
     *
     * @param request - UpdateGtmRecoveryPlanRequest
     *
     * @returns UpdateGtmRecoveryPlanResponse
     *
     * @param UpdateGtmRecoveryPlanRequest $request
     *
     * @return UpdateGtmRecoveryPlanResponse
     */
    public function updateGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * 修改缓存刷新套餐包配置.
     *
     * @param request - UpdateIspFlushCacheInstanceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIspFlushCacheInstanceConfigResponse
     *
     * @param UpdateIspFlushCacheInstanceConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateIspFlushCacheInstanceConfigResponse
     */
    public function updateIspFlushCacheInstanceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIspFlushCacheInstanceConfig',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateIspFlushCacheInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改缓存刷新套餐包配置.
     *
     * @param request - UpdateIspFlushCacheInstanceConfigRequest
     *
     * @returns UpdateIspFlushCacheInstanceConfigResponse
     *
     * @param UpdateIspFlushCacheInstanceConfigRequest $request
     *
     * @return UpdateIspFlushCacheInstanceConfigResponse
     */
    public function updateIspFlushCacheInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIspFlushCacheInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威解析记录.
     *
     * @param request - UpdateRecursionRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionRecordResponse
     *
     * @param UpdateRecursionRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateRecursionRecordResponse
     */
    public function updateRecursionRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->requestSource) {
            @$query['RequestSource'] = $request->requestSource;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionRecord',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威解析记录.
     *
     * @param request - UpdateRecursionRecordRequest
     *
     * @returns UpdateRecursionRecordResponse
     *
     * @param UpdateRecursionRecordRequest $request
     *
     * @return UpdateRecursionRecordResponse
     */
    public function updateRecursionRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionRecordWithOptions($request, $runtime);
    }

    /**
     * 修改内置权威解析记录启用状态
     *
     * @param request - UpdateRecursionRecordEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionRecordEnableStatusResponse
     *
     * @param UpdateRecursionRecordEnableStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateRecursionRecordEnableStatusResponse
     */
    public function updateRecursionRecordEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionRecordEnableStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionRecordEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改内置权威解析记录启用状态
     *
     * @param request - UpdateRecursionRecordEnableStatusRequest
     *
     * @returns UpdateRecursionRecordEnableStatusResponse
     *
     * @param UpdateRecursionRecordEnableStatusRequest $request
     *
     * @return UpdateRecursionRecordEnableStatusResponse
     */
    public function updateRecursionRecordEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionRecordEnableStatusWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威解析记录备注.
     *
     * @param request - UpdateRecursionRecordRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionRecordRemarkResponse
     *
     * @param UpdateRecursionRecordRemarkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateRecursionRecordRemarkResponse
     */
    public function updateRecursionRecordRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionRecordRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionRecordRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威解析记录备注.
     *
     * @param request - UpdateRecursionRecordRemarkRequest
     *
     * @returns UpdateRecursionRecordRemarkResponse
     *
     * @param UpdateRecursionRecordRemarkRequest $request
     *
     * @return UpdateRecursionRecordRemarkResponse
     */
    public function updateRecursionRecordRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionRecordRemarkWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威解析记录权重.
     *
     * @param request - UpdateRecursionRecordWeightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionRecordWeightResponse
     *
     * @param UpdateRecursionRecordWeightRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateRecursionRecordWeightResponse
     */
    public function updateRecursionRecordWeightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionRecordWeight',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionRecordWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威解析记录权重.
     *
     * @param request - UpdateRecursionRecordWeightRequest
     *
     * @returns UpdateRecursionRecordWeightResponse
     *
     * @param UpdateRecursionRecordWeightRequest $request
     *
     * @return UpdateRecursionRecordWeightResponse
     */
    public function updateRecursionRecordWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionRecordWeightWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威解析记录权重算法启用状态
     *
     * @param request - UpdateRecursionRecordWeightEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionRecordWeightEnableStatusResponse
     *
     * @param UpdateRecursionRecordWeightEnableStatusRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return UpdateRecursionRecordWeightEnableStatusResponse
     */
    public function updateRecursionRecordWeightEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->enableStatus) {
            @$query['EnableStatus'] = $request->enableStatus;
        }

        if (null !== $request->requestSource) {
            @$query['RequestSource'] = $request->requestSource;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionRecordWeightEnableStatus',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionRecordWeightEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威解析记录权重算法启用状态
     *
     * @param request - UpdateRecursionRecordWeightEnableStatusRequest
     *
     * @returns UpdateRecursionRecordWeightEnableStatusResponse
     *
     * @param UpdateRecursionRecordWeightEnableStatusRequest $request
     *
     * @return UpdateRecursionRecordWeightEnableStatusResponse
     */
    public function updateRecursionRecordWeightEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionRecordWeightEnableStatusWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威域名zone生效范围.
     *
     * @param tmpReq - UpdateRecursionZoneEffectiveScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionZoneEffectiveScopeResponse
     *
     * @param UpdateRecursionZoneEffectiveScopeRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateRecursionZoneEffectiveScopeResponse
     */
    public function updateRecursionZoneEffectiveScopeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRecursionZoneEffectiveScopeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->effectiveScopes) {
            $request->effectiveScopesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->effectiveScopes, 'EffectiveScopes', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->effectiveScopesShrink) {
            @$query['EffectiveScopes'] = $request->effectiveScopesShrink;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionZoneEffectiveScope',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionZoneEffectiveScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威域名zone生效范围.
     *
     * @param request - UpdateRecursionZoneEffectiveScopeRequest
     *
     * @returns UpdateRecursionZoneEffectiveScopeResponse
     *
     * @param UpdateRecursionZoneEffectiveScopeRequest $request
     *
     * @return UpdateRecursionZoneEffectiveScopeResponse
     */
    public function updateRecursionZoneEffectiveScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionZoneEffectiveScopeWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威域名zone递归代理模式.
     *
     * @param request - UpdateRecursionZoneProxyPatternRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionZoneProxyPatternResponse
     *
     * @param UpdateRecursionZoneProxyPatternRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateRecursionZoneProxyPatternResponse
     */
    public function updateRecursionZoneProxyPatternWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->proxyPattern) {
            @$query['ProxyPattern'] = $request->proxyPattern;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionZoneProxyPattern',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionZoneProxyPatternResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威域名zone递归代理模式.
     *
     * @param request - UpdateRecursionZoneProxyPatternRequest
     *
     * @returns UpdateRecursionZoneProxyPatternResponse
     *
     * @param UpdateRecursionZoneProxyPatternRequest $request
     *
     * @return UpdateRecursionZoneProxyPatternResponse
     */
    public function updateRecursionZoneProxyPattern($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionZoneProxyPatternWithOptions($request, $runtime);
    }

    /**
     * 修改递归解析内置权威域名zone备注.
     *
     * @param request - UpdateRecursionZoneRemarkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecursionZoneRemarkResponse
     *
     * @param UpdateRecursionZoneRemarkRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateRecursionZoneRemarkResponse
     */
    public function updateRecursionZoneRemarkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecursionZoneRemark',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRecursionZoneRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改递归解析内置权威域名zone备注.
     *
     * @param request - UpdateRecursionZoneRemarkRequest
     *
     * @returns UpdateRecursionZoneRemarkResponse
     *
     * @param UpdateRecursionZoneRemarkRequest $request
     *
     * @return UpdateRecursionZoneRemarkResponse
     */
    public function updateRecursionZoneRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecursionZoneRemarkWithOptions($request, $runtime);
    }

    /**
     * 用于更新特定域名的状态信息。
     *
     * @remarks
     * ## 请求说明
     * - 本接口专为注册局用户设计，允许他们更新指定顶级域名（TLD）的各种属性。
     * - 必须提供`RegistryId`和`Tld`参数以标识要修改的具体TLD。
     * - 可选参数包括但不限于宽限期设置、DNS解析缓存时间、价格设定等，这些都可根据需要进行调整。
     * - 环境(`Env`)参数指定了API调用的目标环境，默认值为“DAILY”表示日常测试环境；正式上线前，请确保已正确设置此参数。
     * - 某些时间戳字段如`SunriseStartTimeStamp`要求输入Unix时间戳格式的数据。
     *
     * @param request - UpdateRspDomainServerProhibitStatusForGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRspDomainServerProhibitStatusForGatewayResponse
     *
     * @param UpdateRspDomainServerProhibitStatusForGatewayRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return UpdateRspDomainServerProhibitStatusForGatewayResponse
     */
    public function updateRspDomainServerProhibitStatusForGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addStatusList) {
            @$query['AddStatusList'] = $request->addStatusList;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deleteStatusList) {
            @$query['DeleteStatusList'] = $request->deleteStatusList;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRspDomainServerProhibitStatusForGateway',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRspDomainServerProhibitStatusForGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于更新特定域名的状态信息。
     *
     * @remarks
     * ## 请求说明
     * - 本接口专为注册局用户设计，允许他们更新指定顶级域名（TLD）的各种属性。
     * - 必须提供`RegistryId`和`Tld`参数以标识要修改的具体TLD。
     * - 可选参数包括但不限于宽限期设置、DNS解析缓存时间、价格设定等，这些都可根据需要进行调整。
     * - 环境(`Env`)参数指定了API调用的目标环境，默认值为“DAILY”表示日常测试环境；正式上线前，请确保已正确设置此参数。
     * - 某些时间戳字段如`SunriseStartTimeStamp`要求输入Unix时间戳格式的数据。
     *
     * @param request - UpdateRspDomainServerProhibitStatusForGatewayRequest
     *
     * @returns UpdateRspDomainServerProhibitStatusForGatewayResponse
     *
     * @param UpdateRspDomainServerProhibitStatusForGatewayRequest $request
     *
     * @return UpdateRspDomainServerProhibitStatusForGatewayResponse
     */
    public function updateRspDomainServerProhibitStatusForGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRspDomainServerProhibitStatusForGatewayWithOptions($request, $runtime);
    }

    /**
     * 检查实例主机名是否可添加.
     *
     * @param request - ValidateDnsGtmCnameRrCanUseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateDnsGtmCnameRrCanUseResponse
     *
     * @param ValidateDnsGtmCnameRrCanUseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ValidateDnsGtmCnameRrCanUseResponse
     */
    public function validateDnsGtmCnameRrCanUseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnameMode) {
            @$query['CnameMode'] = $request->cnameMode;
        }

        if (null !== $request->cnameRr) {
            @$query['CnameRr'] = $request->cnameRr;
        }

        if (null !== $request->cnameType) {
            @$query['CnameType'] = $request->cnameType;
        }

        if (null !== $request->cnameZone) {
            @$query['CnameZone'] = $request->cnameZone;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateDnsGtmCnameRrCanUse',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateDnsGtmCnameRrCanUseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查实例主机名是否可添加.
     *
     * @param request - ValidateDnsGtmCnameRrCanUseRequest
     *
     * @returns ValidateDnsGtmCnameRrCanUseResponse
     *
     * @param ValidateDnsGtmCnameRrCanUseRequest $request
     *
     * @return ValidateDnsGtmCnameRrCanUseResponse
     */
    public function validateDnsGtmCnameRrCanUse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateDnsGtmCnameRrCanUseWithOptions($request, $runtime);
    }

    /**
     * 验证公共DNS Udp Ip地址段.
     *
     * @param request - ValidatePdnsUdpIpSegmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidatePdnsUdpIpSegmentResponse
     *
     * @param ValidatePdnsUdpIpSegmentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ValidatePdnsUdpIpSegmentResponse
     */
    public function validatePdnsUdpIpSegmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->ipToken) {
            @$query['IpToken'] = $request->ipToken;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidatePdnsUdpIpSegment',
            'version' => '2015-01-09',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidatePdnsUdpIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 验证公共DNS Udp Ip地址段.
     *
     * @param request - ValidatePdnsUdpIpSegmentRequest
     *
     * @returns ValidatePdnsUdpIpSegmentResponse
     *
     * @param ValidatePdnsUdpIpSegmentRequest $request
     *
     * @return ValidatePdnsUdpIpSegmentResponse
     */
    public function validatePdnsUdpIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validatePdnsUdpIpSegmentWithOptions($request, $runtime);
    }
}
