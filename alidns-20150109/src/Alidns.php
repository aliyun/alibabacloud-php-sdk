<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\BindInstanceDomainsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\BindInstanceDomainsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainGroupRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainGroupResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainOfDnsProductRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ChangeDomainOfDnsProductResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CopyGtmConfigRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CopyGtmConfigResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsAppKeyRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsAppKeyResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsUdpIpSegmentRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreatePdnsUdpIpSegmentResponse;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteSubDomainRecordsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DeleteSubDomainRecordsResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultCountRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultCountResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolResponse;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\ResumePdnsServiceRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ResumePdnsServiceResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RetrieveDomainRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RetrieveDomainResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RollbackGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\RollbackGtmRecoveryPlanResponse;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidateDnsGtmCnameRrCanUseRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidateDnsGtmCnameRrCanUseResponse;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidatePdnsUdpIpSegmentRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidatePdnsUdpIpSegmentResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds a custom line.
     *  *
     * @description In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *  *
     * @param AddCustomLineRequest $request AddCustomLineRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCustomLineResponse AddCustomLineResponse
     */
    public function addCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ipSegment)) {
            $query['IpSegment'] = $request->ipSegment;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lineName)) {
            $query['LineName'] = $request->lineName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCustomLine',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a custom line.
     *  *
     * @description In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *  *
     * @param AddCustomLineRequest $request AddCustomLineRequest
     *
     * @return AddCustomLineResponse AddCustomLineResponse
     */
    public function addCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomLineWithOptions($request, $runtime);
    }

    /**
     * @param AddDnsCacheDomainRequest $request AddDnsCacheDomainRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDnsCacheDomainResponse AddDnsCacheDomainResponse
     */
    public function addDnsCacheDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheTtlMax)) {
            $query['CacheTtlMax'] = $request->cacheTtlMax;
        }
        if (!Utils::isUnset($request->cacheTtlMin)) {
            $query['CacheTtlMin'] = $request->cacheTtlMin;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->sourceDnsServer)) {
            $query['SourceDnsServer'] = $request->sourceDnsServer;
        }
        if (!Utils::isUnset($request->sourceEdns)) {
            $query['SourceEdns'] = $request->sourceEdns;
        }
        if (!Utils::isUnset($request->sourceProtocol)) {
            $query['SourceProtocol'] = $request->sourceProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDnsCacheDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDnsCacheDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDnsCacheDomainRequest $request AddDnsCacheDomainRequest
     *
     * @return AddDnsCacheDomainResponse AddDnsCacheDomainResponse
     */
    public function addDnsCacheDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsCacheDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an access policy.
     *  *
     * @param AddDnsGtmAccessStrategyRequest $request AddDnsGtmAccessStrategyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDnsGtmAccessStrategyResponse AddDnsGtmAccessStrategyResponse
     */
    public function addDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultAddrPool)) {
            $query['DefaultAddrPool'] = $request->defaultAddrPool;
        }
        if (!Utils::isUnset($request->defaultAddrPoolType)) {
            $query['DefaultAddrPoolType'] = $request->defaultAddrPoolType;
        }
        if (!Utils::isUnset($request->defaultLatencyOptimization)) {
            $query['DefaultLatencyOptimization'] = $request->defaultLatencyOptimization;
        }
        if (!Utils::isUnset($request->defaultLbaStrategy)) {
            $query['DefaultLbaStrategy'] = $request->defaultLbaStrategy;
        }
        if (!Utils::isUnset($request->defaultMaxReturnAddrNum)) {
            $query['DefaultMaxReturnAddrNum'] = $request->defaultMaxReturnAddrNum;
        }
        if (!Utils::isUnset($request->defaultMinAvailableAddrNum)) {
            $query['DefaultMinAvailableAddrNum'] = $request->defaultMinAvailableAddrNum;
        }
        if (!Utils::isUnset($request->failoverAddrPool)) {
            $query['FailoverAddrPool'] = $request->failoverAddrPool;
        }
        if (!Utils::isUnset($request->failoverAddrPoolType)) {
            $query['FailoverAddrPoolType'] = $request->failoverAddrPoolType;
        }
        if (!Utils::isUnset($request->failoverLatencyOptimization)) {
            $query['FailoverLatencyOptimization'] = $request->failoverLatencyOptimization;
        }
        if (!Utils::isUnset($request->failoverLbaStrategy)) {
            $query['FailoverLbaStrategy'] = $request->failoverLbaStrategy;
        }
        if (!Utils::isUnset($request->failoverMaxReturnAddrNum)) {
            $query['FailoverMaxReturnAddrNum'] = $request->failoverMaxReturnAddrNum;
        }
        if (!Utils::isUnset($request->failoverMinAvailableAddrNum)) {
            $query['FailoverMinAvailableAddrNum'] = $request->failoverMinAvailableAddrNum;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->strategyMode)) {
            $query['StrategyMode'] = $request->strategyMode;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDnsGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access policy.
     *  *
     * @param AddDnsGtmAccessStrategyRequest $request AddDnsGtmAccessStrategyRequest
     *
     * @return AddDnsGtmAccessStrategyResponse AddDnsGtmAccessStrategyResponse
     */
    public function addDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an address pool.
     *  *
     * @param AddDnsGtmAddressPoolRequest $request AddDnsGtmAddressPoolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDnsGtmAddressPoolResponse AddDnsGtmAddressPoolResponse
     */
    public function addDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addr)) {
            $query['Addr'] = $request->addr;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCityNode)) {
            $query['IspCityNode'] = $request->ispCityNode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lbaStrategy)) {
            $query['LbaStrategy'] = $request->lbaStrategy;
        }
        if (!Utils::isUnset($request->monitorExtendInfo)) {
            $query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }
        if (!Utils::isUnset($request->monitorStatus)) {
            $query['MonitorStatus'] = $request->monitorStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDnsGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDnsGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an address pool.
     *  *
     * @param AddDnsGtmAddressPoolRequest $request AddDnsGtmAddressPoolRequest
     *
     * @return AddDnsGtmAddressPoolResponse AddDnsGtmAddressPoolResponse
     */
    public function addDnsGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a health check task.
     *  *
     * @description ***
     *  *
     * @param AddDnsGtmMonitorRequest $request AddDnsGtmMonitorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDnsGtmMonitorResponse AddDnsGtmMonitorResponse
     */
    public function addDnsGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCityNode)) {
            $query['IspCityNode'] = $request->ispCityNode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorExtendInfo)) {
            $query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDnsGtmMonitor',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDnsGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a health check task.
     *  *
     * @description ***
     *  *
     * @param AddDnsGtmMonitorRequest $request AddDnsGtmMonitorRequest
     *
     * @return AddDnsGtmMonitorResponse AddDnsGtmMonitorResponse
     */
    public function addDnsGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDnsGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a domain name based on the specified parameters.
     *  *
     * @description For more information about how to check whether a domain name is valid, see
     * [Domain name validity](https://www.alibabacloud.com/help/zh/doc-detail/67788.htm).
     *  *
     * @param AddDomainRequest $request AddDomainRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDomainResponse AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a domain name based on the specified parameters.
     *  *
     * @description For more information about how to check whether a domain name is valid, see
     * [Domain name validity](https://www.alibabacloud.com/help/zh/doc-detail/67788.htm).
     *  *
     * @param AddDomainRequest $request AddDomainRequest
     *
     * @return AddDomainResponse AddDomainResponse
     */
    public function addDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a backup task for a domain name.
     *  *
     * @param AddDomainBackupRequest $request AddDomainBackupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDomainBackupResponse AddDomainBackupResponse
     */
    public function addDomainBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->periodType)) {
            $query['PeriodType'] = $request->periodType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDomainBackup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDomainBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a backup task for a domain name.
     *  *
     * @param AddDomainBackupRequest $request AddDomainBackupRequest
     *
     * @return AddDomainBackupResponse AddDomainBackupResponse
     */
    public function addDomainBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainBackupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a domain name group based on the specified parameters.
     *  *
     * @param AddDomainGroupRequest $request AddDomainGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDomainGroupResponse AddDomainGroupResponse
     */
    public function addDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDomainGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a domain name group based on the specified parameters.
     *  *
     * @param AddDomainGroupRequest $request AddDomainGroupRequest
     *
     * @return AddDomainGroupResponse AddDomainGroupResponse
     */
    public function addDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param AddDomainRecordRequest $request AddDomainRecordRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDomainRecordResponse AddDomainRecordResponse
     */
    public function addDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->RR)) {
            $query['RR'] = $request->RR;
        }
        if (!Utils::isUnset($request->TTL)) {
            $query['TTL'] = $request->TTL;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDomainRecord',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDomainRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param AddDomainRecordRequest $request AddDomainRecordRequest
     *
     * @return AddDomainRecordResponse AddDomainRecordResponse
     */
    public function addDomainRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param AddGtmAccessStrategyRequest $request AddGtmAccessStrategyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGtmAccessStrategyResponse AddGtmAccessStrategyResponse
     */
    public function addGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLines)) {
            $query['AccessLines'] = $request->accessLines;
        }
        if (!Utils::isUnset($request->defaultAddrPoolId)) {
            $query['DefaultAddrPoolId'] = $request->defaultAddrPoolId;
        }
        if (!Utils::isUnset($request->failoverAddrPoolId)) {
            $query['FailoverAddrPoolId'] = $request->failoverAddrPoolId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGtmAccessStrategyRequest $request AddGtmAccessStrategyRequest
     *
     * @return AddGtmAccessStrategyResponse AddGtmAccessStrategyResponse
     */
    public function addGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an address pool.
     *  *
     * @param AddGtmAddressPoolRequest $request AddGtmAddressPoolRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGtmAddressPoolResponse AddGtmAddressPoolResponse
     */
    public function addGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addr)) {
            $query['Addr'] = $request->addr;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCityNode)) {
            $query['IspCityNode'] = $request->ispCityNode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->minAvailableAddrNum)) {
            $query['MinAvailableAddrNum'] = $request->minAvailableAddrNum;
        }
        if (!Utils::isUnset($request->monitorExtendInfo)) {
            $query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }
        if (!Utils::isUnset($request->monitorStatus)) {
            $query['MonitorStatus'] = $request->monitorStatus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an address pool.
     *  *
     * @param AddGtmAddressPoolRequest $request AddGtmAddressPoolRequest
     *
     * @return AddGtmAddressPoolResponse AddGtmAddressPoolResponse
     */
    public function addGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a health check task.
     *  *
     * @param AddGtmMonitorRequest $request AddGtmMonitorRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGtmMonitorResponse AddGtmMonitorResponse
     */
    public function addGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCityNode)) {
            $query['IspCityNode'] = $request->ispCityNode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorExtendInfo)) {
            $query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGtmMonitor',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a health check task.
     *  *
     * @param AddGtmMonitorRequest $request AddGtmMonitorRequest
     *
     * @return AddGtmMonitorResponse AddGtmMonitorResponse
     */
    public function addGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * @param AddGtmRecoveryPlanRequest $request AddGtmRecoveryPlanRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGtmRecoveryPlanResponse AddGtmRecoveryPlanResponse
     */
    public function addGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->faultAddrPool)) {
            $query['FaultAddrPool'] = $request->faultAddrPool;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddGtmRecoveryPlanRequest $request AddGtmRecoveryPlanRequest
     *
     * @return AddGtmRecoveryPlanResponse AddGtmRecoveryPlanResponse
     */
    public function addGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Binds one or more domain names to a paid Alibaba Cloud DNS instance.
     *  *
     * @description A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call this API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call this API operation to bind only one domain name to the instance. However, if the instance is already bound to a domain name, you must unbind the original domain name from the instance and bind the desired domain name to the instance.
     *  *
     * @param BindInstanceDomainsRequest $request BindInstanceDomainsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BindInstanceDomainsResponse BindInstanceDomainsResponse
     */
    public function bindInstanceDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindInstanceDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds one or more domain names to a paid Alibaba Cloud DNS instance.
     *  *
     * @description A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call this API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call this API operation to bind only one domain name to the instance. However, if the instance is already bound to a domain name, you must unbind the original domain name from the instance and bind the desired domain name to the instance.
     *  *
     * @param BindInstanceDomainsRequest $request BindInstanceDomainsRequest
     *
     * @return BindInstanceDomainsResponse BindInstanceDomainsResponse
     */
    public function bindInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a domain name from the original group to the new group based on the specified parameters.
     *  *
     * @description You can specify GroupId to move a domain name to a specific domain name group. You can move the domain name to the group that contains all domain names or the default group.
     *  *
     * @param ChangeDomainGroupRequest $request ChangeDomainGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeDomainGroupResponse ChangeDomainGroupResponse
     */
    public function changeDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeDomainGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a domain name from the original group to the new group based on the specified parameters.
     *  *
     * @description You can specify GroupId to move a domain name to a specific domain name group. You can move the domain name to the group that contains all domain names or the default group.
     *  *
     * @param ChangeDomainGroupRequest $request ChangeDomainGroupRequest
     *
     * @return ChangeDomainGroupResponse ChangeDomainGroupResponse
     */
    public function changeDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the domain name bound to an Alibaba Cloud DNS instance.
     *  *
     * @description >  You can call this operation to change the domain name for an Alibaba Cloud DNS instance to which a domain name is bound. You can also call this operation to bind a domain name to an Alibaba Cloud DNS instance to which no domain name is bound. If you need to unbind a domain name from an Alibaba Cloud DNS instance, you can call this operation. In this case, the NewDomain parameter must not be specified.
     *  *
     * @param ChangeDomainOfDnsProductRequest $request ChangeDomainOfDnsProductRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeDomainOfDnsProductResponse ChangeDomainOfDnsProductResponse
     */
    public function changeDomainOfDnsProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newDomain)) {
            $query['NewDomain'] = $request->newDomain;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeDomainOfDnsProduct',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeDomainOfDnsProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the domain name bound to an Alibaba Cloud DNS instance.
     *  *
     * @description >  You can call this operation to change the domain name for an Alibaba Cloud DNS instance to which a domain name is bound. You can also call this operation to bind a domain name to an Alibaba Cloud DNS instance to which no domain name is bound. If you need to unbind a domain name from an Alibaba Cloud DNS instance, you can call this operation. In this case, the NewDomain parameter must not be specified.
     *  *
     * @param ChangeDomainOfDnsProductRequest $request ChangeDomainOfDnsProductRequest
     *
     * @return ChangeDomainOfDnsProductResponse ChangeDomainOfDnsProductResponse
     */
    public function changeDomainOfDnsProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeDomainOfDnsProductWithOptions($request, $runtime);
    }

    /**
     * @param CopyGtmConfigRequest $request CopyGtmConfigRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyGtmConfigResponse CopyGtmConfigResponse
     */
    public function copyGtmConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->copyType)) {
            $query['CopyType'] = $request->copyType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyGtmConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyGtmConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyGtmConfigRequest $request CopyGtmConfigRequest
     *
     * @return CopyGtmConfigResponse CopyGtmConfigResponse
     */
    public function copyGtmConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyGtmConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 创建公共DNS AppKey
     *  *
     * @param CreatePdnsAppKeyRequest $request CreatePdnsAppKeyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePdnsAppKeyResponse CreatePdnsAppKeyResponse
     */
    public function createPdnsAppKeyWithOptions($request, $runtime)
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
            'action'      => 'CreatePdnsAppKey',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePdnsAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建公共DNS AppKey
     *  *
     * @param CreatePdnsAppKeyRequest $request CreatePdnsAppKeyRequest
     *
     * @return CreatePdnsAppKeyResponse CreatePdnsAppKeyResponse
     */
    public function createPdnsAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPdnsAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 创建公共DNS Udp Ip地址段
     *  *
     * @param CreatePdnsUdpIpSegmentRequest $request CreatePdnsUdpIpSegmentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePdnsUdpIpSegmentResponse CreatePdnsUdpIpSegmentResponse
     */
    public function createPdnsUdpIpSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePdnsUdpIpSegment',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePdnsUdpIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建公共DNS Udp Ip地址段
     *  *
     * @param CreatePdnsUdpIpSegmentRequest $request CreatePdnsUdpIpSegmentRequest
     *
     * @return CreatePdnsUdpIpSegmentResponse CreatePdnsUdpIpSegmentResponse
     */
    public function createPdnsUdpIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPdnsUdpIpSegmentWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple custom lines at a time.
     *  *
     * @param DeleteCustomLinesRequest $request DeleteCustomLinesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomLinesResponse DeleteCustomLinesResponse
     */
    public function deleteCustomLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lineIds)) {
            $query['LineIds'] = $request->lineIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomLines',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple custom lines at a time.
     *  *
     * @param DeleteCustomLinesRequest $request DeleteCustomLinesRequest
     *
     * @return DeleteCustomLinesResponse DeleteCustomLinesResponse
     */
    public function deleteCustomLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomLinesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDnsCacheDomainRequest $request DeleteDnsCacheDomainRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDnsCacheDomainResponse DeleteDnsCacheDomainResponse
     */
    public function deleteDnsCacheDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDnsCacheDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDnsCacheDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDnsCacheDomainRequest $request DeleteDnsCacheDomainRequest
     *
     * @return DeleteDnsCacheDomainResponse DeleteDnsCacheDomainResponse
     */
    public function deleteDnsCacheDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsCacheDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDnsGtmAccessStrategyRequest $request DeleteDnsGtmAccessStrategyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDnsGtmAccessStrategyResponse DeleteDnsGtmAccessStrategyResponse
     */
    public function deleteDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDnsGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDnsGtmAccessStrategyRequest $request DeleteDnsGtmAccessStrategyRequest
     *
     * @return DeleteDnsGtmAccessStrategyResponse DeleteDnsGtmAccessStrategyResponse
     */
    public function deleteDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDnsGtmAddressPoolRequest $request DeleteDnsGtmAddressPoolRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDnsGtmAddressPoolResponse DeleteDnsGtmAddressPoolResponse
     */
    public function deleteDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDnsGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDnsGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDnsGtmAddressPoolRequest $request DeleteDnsGtmAddressPoolRequest
     *
     * @return DeleteDnsGtmAddressPoolResponse DeleteDnsGtmAddressPoolResponse
     */
    public function deleteDnsGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDnsGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a domain name based on the specified parameters.
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a domain name based on the specified parameters.
     *  *
     * @param DeleteDomainRequest $request DeleteDomainRequest
     *
     * @return DeleteDomainResponse DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a domain name group. After you delete the domain name group, the domain names in the group are moved to the default group.
     *  *
     * @description >  The default group cannot be deleted.
     *  *
     * @param DeleteDomainGroupRequest $request DeleteDomainGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainGroupResponse DeleteDomainGroupResponse
     */
    public function deleteDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a domain name group. After you delete the domain name group, the domain names in the group are moved to the default group.
     *  *
     * @description >  The default group cannot be deleted.
     *  *
     * @param DeleteDomainGroupRequest $request DeleteDomainGroupRequest
     *
     * @return DeleteDomainGroupResponse DeleteDomainGroupResponse
     */
    public function deleteDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param DeleteDomainRecordRequest $request DeleteDomainRecordRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDomainRecordResponse DeleteDomainRecordResponse
     */
    public function deleteDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDomainRecord',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDomainRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param DeleteDomainRecordRequest $request DeleteDomainRecordRequest
     *
     * @return DeleteDomainRecordResponse DeleteDomainRecordResponse
     */
    public function deleteDomainRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGtmAccessStrategyRequest $request DeleteGtmAccessStrategyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGtmAccessStrategyResponse DeleteGtmAccessStrategyResponse
     */
    public function deleteGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGtmAccessStrategyRequest $request DeleteGtmAccessStrategyRequest
     *
     * @return DeleteGtmAccessStrategyResponse DeleteGtmAccessStrategyResponse
     */
    public function deleteGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGtmAddressPoolRequest $request DeleteGtmAddressPoolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGtmAddressPoolResponse DeleteGtmAddressPoolResponse
     */
    public function deleteGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGtmAddressPoolRequest $request DeleteGtmAddressPoolRequest
     *
     * @return DeleteGtmAddressPoolResponse DeleteGtmAddressPoolResponse
     */
    public function deleteGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGtmRecoveryPlanRequest $request DeleteGtmRecoveryPlanRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGtmRecoveryPlanResponse DeleteGtmRecoveryPlanResponse
     */
    public function deleteGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGtmRecoveryPlanRequest $request DeleteGtmRecoveryPlanRequest
     *
     * @return DeleteGtmRecoveryPlanResponse DeleteGtmRecoveryPlanResponse
     */
    public function deleteGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @description If the DNS records to be deleted contain locked DNS records, locked DNS records will not be deleted.
     *  *
     * @param DeleteSubDomainRecordsRequest $request DeleteSubDomainRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSubDomainRecordsResponse DeleteSubDomainRecordsResponse
     */
    public function deleteSubDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->RR)) {
            $query['RR'] = $request->RR;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubDomainRecords',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubDomainRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description If the DNS records to be deleted contain locked DNS records, locked DNS records will not be deleted.
     *  *
     * @param DeleteSubDomainRecordsRequest $request DeleteSubDomainRecordsRequest
     *
     * @return DeleteSubDomainRecordsResponse DeleteSubDomainRecordsResponse
     */
    public function deleteSubDomainRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBatchResultCountRequest $request DescribeBatchResultCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBatchResultCountResponse DescribeBatchResultCountResponse
     */
    public function describeBatchResultCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchType)) {
            $query['BatchType'] = $request->batchType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBatchResultCount',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBatchResultCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBatchResultCountRequest $request DescribeBatchResultCountRequest
     *
     * @return DescribeBatchResultCountResponse DescribeBatchResultCountResponse
     */
    public function describeBatchResultCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBatchResultCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed results of a batch operation task.
     *  *
     * @description Before you call this operation, make sure that the batch operation task is complete.
     *  *
     * @param DescribeBatchResultDetailRequest $request DescribeBatchResultDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBatchResultDetailResponse DescribeBatchResultDetailResponse
     */
    public function describeBatchResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchType)) {
            $query['BatchType'] = $request->batchType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeBatchResultDetail',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBatchResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed results of a batch operation task.
     *  *
     * @description Before you call this operation, make sure that the batch operation task is complete.
     *  *
     * @param DescribeBatchResultDetailRequest $request DescribeBatchResultDetailRequest
     *
     * @return DescribeBatchResultDetailResponse DescribeBatchResultDetailResponse
     */
    public function describeBatchResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBatchResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudGtmAddressPoolRequest $request DescribeCloudGtmAddressPoolRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudGtmAddressPoolResponse DescribeCloudGtmAddressPoolResponse
     */
    public function describeCloudGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->addressPoolId)) {
            $query['AddressPoolId'] = $request->addressPoolId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudGtmAddressPoolRequest $request DescribeCloudGtmAddressPoolRequest
     *
     * @return DescribeCloudGtmAddressPoolResponse DescribeCloudGtmAddressPoolResponse
     */
    public function describeCloudGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a custom line.
     *  *
     * @param DescribeCustomLineRequest $request DescribeCustomLineRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomLineResponse DescribeCustomLineResponse
     */
    public function describeCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lineId)) {
            $query['LineId'] = $request->lineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomLine',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a custom line.
     *  *
     * @param DescribeCustomLineRequest $request DescribeCustomLineRequest
     *
     * @return DescribeCustomLineResponse DescribeCustomLineResponse
     */
    public function describeCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries custom lines.
     *  *
     * @param DescribeCustomLinesRequest $request DescribeCustomLinesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomLinesResponse DescribeCustomLinesResponse
     */
    public function describeCustomLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeCustomLines',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries custom lines.
     *  *
     * @param DescribeCustomLinesRequest $request DescribeCustomLinesRequest
     *
     * @return DescribeCustomLinesResponse DescribeCustomLinesResponse
     */
    public function describeCustomLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomLinesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the subdomains for which weighted round-robin is enabled based on the specified parameters.
     *  *
     * @param DescribeDNSSLBSubDomainsRequest $request DescribeDNSSLBSubDomainsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDNSSLBSubDomainsResponse DescribeDNSSLBSubDomainsResponse
     */
    public function describeDNSSLBSubDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->rr)) {
            $query['Rr'] = $request->rr;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDNSSLBSubDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDNSSLBSubDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the subdomains for which weighted round-robin is enabled based on the specified parameters.
     *  *
     * @param DescribeDNSSLBSubDomainsRequest $request DescribeDNSSLBSubDomainsRequest
     *
     * @return DescribeDNSSLBSubDomainsResponse DescribeDNSSLBSubDomainsResponse
     */
    public function describeDNSSLBSubDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDNSSLBSubDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnsCacheDomainsRequest $request DescribeDnsCacheDomainsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsCacheDomainsResponse DescribeDnsCacheDomainsResponse
     */
    public function describeDnsCacheDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeDnsCacheDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsCacheDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDnsCacheDomainsRequest $request DescribeDnsCacheDomainsRequest
     *
     * @return DescribeDnsCacheDomainsResponse DescribeDnsCacheDomainsResponse
     */
    public function describeDnsCacheDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsCacheDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries access policies of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAccessStrategiesRequest $request DescribeDnsGtmAccessStrategiesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmAccessStrategiesResponse DescribeDnsGtmAccessStrategiesResponse
     */
    public function describeDnsGtmAccessStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->strategyMode)) {
            $query['StrategyMode'] = $request->strategyMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmAccessStrategies',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmAccessStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries access policies of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAccessStrategiesRequest $request DescribeDnsGtmAccessStrategiesRequest
     *
     * @return DescribeDnsGtmAccessStrategiesResponse DescribeDnsGtmAccessStrategiesResponse
     */
    public function describeDnsGtmAccessStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAccessStrategiesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about an access policy of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAccessStrategyRequest $request DescribeDnsGtmAccessStrategyRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmAccessStrategyResponse DescribeDnsGtmAccessStrategyResponse
     */
    public function describeDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about an access policy of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAccessStrategyRequest $request DescribeDnsGtmAccessStrategyRequest
     *
     * @return DescribeDnsGtmAccessStrategyResponse DescribeDnsGtmAccessStrategyResponse
     */
    public function describeDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available configurations of an access policy of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAccessStrategyAvailableConfigRequest $request DescribeDnsGtmAccessStrategyAvailableConfigRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse DescribeDnsGtmAccessStrategyAvailableConfigResponse
     */
    public function describeDnsGtmAccessStrategyAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyMode)) {
            $query['StrategyMode'] = $request->strategyMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmAccessStrategyAvailableConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmAccessStrategyAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the available configurations of an access policy of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAccessStrategyAvailableConfigRequest $request DescribeDnsGtmAccessStrategyAvailableConfigRequest
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse DescribeDnsGtmAccessStrategyAvailableConfigResponse
     */
    public function describeDnsGtmAccessStrategyAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAccessStrategyAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnsGtmAddrAttributeInfoRequest $request DescribeDnsGtmAddrAttributeInfoRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponse DescribeDnsGtmAddrAttributeInfoResponse
     */
    public function describeDnsGtmAddrAttributeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrs)) {
            $query['Addrs'] = $request->addrs;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmAddrAttributeInfo',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmAddrAttributeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDnsGtmAddrAttributeInfoRequest $request DescribeDnsGtmAddrAttributeInfoRequest
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponse DescribeDnsGtmAddrAttributeInfoResponse
     */
    public function describeDnsGtmAddrAttributeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAddrAttributeInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available configurations of an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAddressPoolAvailableConfigRequest $request DescribeDnsGtmAddressPoolAvailableConfigRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse DescribeDnsGtmAddressPoolAvailableConfigResponse
     */
    public function describeDnsGtmAddressPoolAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmAddressPoolAvailableConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmAddressPoolAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the available configurations of an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmAddressPoolAvailableConfigRequest $request DescribeDnsGtmAddressPoolAvailableConfigRequest
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse DescribeDnsGtmAddressPoolAvailableConfigResponse
     */
    public function describeDnsGtmAddressPoolAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAddressPoolAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnsGtmAvailableAlertGroupRequest $request DescribeDnsGtmAvailableAlertGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponse DescribeDnsGtmAvailableAlertGroupResponse
     */
    public function describeDnsGtmAvailableAlertGroupWithOptions($request, $runtime)
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
            'action'      => 'DescribeDnsGtmAvailableAlertGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmAvailableAlertGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDnsGtmAvailableAlertGroupRequest $request DescribeDnsGtmAvailableAlertGroupRequest
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponse DescribeDnsGtmAvailableAlertGroupResponse
     */
    public function describeDnsGtmAvailableAlertGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmAvailableAlertGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceRequest $request DescribeDnsGtmInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmInstanceResponse DescribeDnsGtmInstanceResponse
     */
    public function describeDnsGtmInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmInstance',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceRequest $request DescribeDnsGtmInstanceRequest
     *
     * @return DescribeDnsGtmInstanceResponse DescribeDnsGtmInstanceResponse
     */
    public function describeDnsGtmInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceAddressPoolRequest $request DescribeDnsGtmInstanceAddressPoolRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse DescribeDnsGtmInstanceAddressPoolResponse
     */
    public function describeDnsGtmInstanceAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmInstanceAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmInstanceAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceAddressPoolRequest $request DescribeDnsGtmInstanceAddressPoolRequest
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse DescribeDnsGtmInstanceAddressPoolResponse
     */
    public function describeDnsGtmInstanceAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the address pools of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceAddressPoolsRequest $request DescribeDnsGtmInstanceAddressPoolsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponse DescribeDnsGtmInstanceAddressPoolsResponse
     */
    public function describeDnsGtmInstanceAddressPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeDnsGtmInstanceAddressPools',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmInstanceAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the address pools of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceAddressPoolsRequest $request DescribeDnsGtmInstanceAddressPoolsRequest
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponse DescribeDnsGtmInstanceAddressPoolsResponse
     */
    public function describeDnsGtmInstanceAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceStatusRequest $request DescribeDnsGtmInstanceStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmInstanceStatusResponse DescribeDnsGtmInstanceStatusResponse
     */
    public function describeDnsGtmInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmInstanceStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceStatusRequest $request DescribeDnsGtmInstanceStatusRequest
     *
     * @return DescribeDnsGtmInstanceStatusResponse DescribeDnsGtmInstanceStatusResponse
     */
    public function describeDnsGtmInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the CNAME domain name assigned by the system for a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceSystemCnameRequest $request DescribeDnsGtmInstanceSystemCnameRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponse DescribeDnsGtmInstanceSystemCnameResponse
     */
    public function describeDnsGtmInstanceSystemCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmInstanceSystemCname',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmInstanceSystemCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the CNAME domain name assigned by the system for a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmInstanceSystemCnameRequest $request DescribeDnsGtmInstanceSystemCnameRequest
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponse DescribeDnsGtmInstanceSystemCnameResponse
     */
    public function describeDnsGtmInstanceSystemCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstanceSystemCnameWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDnsGtmInstancesRequest $request DescribeDnsGtmInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmInstancesResponse DescribeDnsGtmInstancesResponse
     */
    public function describeDnsGtmInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeDnsGtmInstances',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDnsGtmInstancesRequest $request DescribeDnsGtmInstancesRequest
     *
     * @return DescribeDnsGtmInstancesResponse DescribeDnsGtmInstancesResponse
     */
    public function describeDnsGtmInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries operation logs of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmLogsRequest $request DescribeDnsGtmLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmLogsResponse DescribeDnsGtmLogsResponse
     */
    public function describeDnsGtmLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries operation logs of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmLogsRequest $request DescribeDnsGtmLogsRequest
     *
     * @return DescribeDnsGtmLogsResponse DescribeDnsGtmLogsResponse
     */
    public function describeDnsGtmLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available monitored nodes.
     *  *
     * @param DescribeDnsGtmMonitorAvailableConfigRequest $request DescribeDnsGtmMonitorAvailableConfigRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse DescribeDnsGtmMonitorAvailableConfigResponse
     */
    public function describeDnsGtmMonitorAvailableConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeDnsGtmMonitorAvailableConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmMonitorAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available monitored nodes.
     *  *
     * @param DescribeDnsGtmMonitorAvailableConfigRequest $request DescribeDnsGtmMonitorAvailableConfigRequest
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse DescribeDnsGtmMonitorAvailableConfigResponse
     */
    public function describeDnsGtmMonitorAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmMonitorAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health check configurations of an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmMonitorConfigRequest $request DescribeDnsGtmMonitorConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsGtmMonitorConfigResponse DescribeDnsGtmMonitorConfigResponse
     */
    public function describeDnsGtmMonitorConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorConfigId)) {
            $query['MonitorConfigId'] = $request->monitorConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsGtmMonitorConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsGtmMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the health check configurations of an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeDnsGtmMonitorConfigRequest $request DescribeDnsGtmMonitorConfigRequest
     *
     * @return DescribeDnsGtmMonitorConfigResponse DescribeDnsGtmMonitorConfigResponse
     */
    public function describeDnsGtmMonitorConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsGtmMonitorConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a paid Alibaba Cloud DNS instance based on the instance ID.
     *  *
     * @param DescribeDnsProductInstanceRequest $request DescribeDnsProductInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsProductInstanceResponse DescribeDnsProductInstanceResponse
     */
    public function describeDnsProductInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsProductInstance',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsProductInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a paid Alibaba Cloud DNS instance based on the instance ID.
     *  *
     * @param DescribeDnsProductInstanceRequest $request DescribeDnsProductInstanceRequest
     *
     * @return DescribeDnsProductInstanceResponse DescribeDnsProductInstanceResponse
     */
    public function describeDnsProductInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsProductInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Calls the DescribeDnsProductInstances operation to query the list of paid Alibaba Cloud DNS instances based on input parameters.
     *  *
     * @description >  If the response parameters of an Alibaba Cloud DNS instance do not contain domain names, no domain names are bound to the instance.
     *  *
     * @param DescribeDnsProductInstancesRequest $request DescribeDnsProductInstancesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDnsProductInstancesResponse DescribeDnsProductInstancesResponse
     */
    public function describeDnsProductInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->versionCode)) {
            $query['VersionCode'] = $request->versionCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDnsProductInstances',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDnsProductInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Calls the DescribeDnsProductInstances operation to query the list of paid Alibaba Cloud DNS instances based on input parameters.
     *  *
     * @description >  If the response parameters of an Alibaba Cloud DNS instance do not contain domain names, no domain names are bound to the instance.
     *  *
     * @param DescribeDnsProductInstancesRequest $request DescribeDnsProductInstancesRequest
     *
     * @return DescribeDnsProductInstancesResponse DescribeDnsProductInstancesResponse
     */
    public function describeDnsProductInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDnsProductInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDohAccountStatisticsRequest $request DescribeDohAccountStatisticsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDohAccountStatisticsResponse DescribeDohAccountStatisticsResponse
     */
    public function describeDohAccountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDohAccountStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDohAccountStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDohAccountStatisticsRequest $request DescribeDohAccountStatisticsRequest
     *
     * @return DescribeDohAccountStatisticsResponse DescribeDohAccountStatisticsResponse
     */
    public function describeDohAccountStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohAccountStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDohDomainStatisticsRequest $request DescribeDohDomainStatisticsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDohDomainStatisticsResponse DescribeDohDomainStatisticsResponse
     */
    public function describeDohDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDohDomainStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDohDomainStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDohDomainStatisticsRequest $request DescribeDohDomainStatisticsRequest
     *
     * @return DescribeDohDomainStatisticsResponse DescribeDohDomainStatisticsResponse
     */
    public function describeDohDomainStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDohDomainStatisticsSummaryRequest $request DescribeDohDomainStatisticsSummaryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDohDomainStatisticsSummaryResponse DescribeDohDomainStatisticsSummaryResponse
     */
    public function describeDohDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDohDomainStatisticsSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDohDomainStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDohDomainStatisticsSummaryRequest $request DescribeDohDomainStatisticsSummaryRequest
     *
     * @return DescribeDohDomainStatisticsSummaryResponse DescribeDohDomainStatisticsSummaryResponse
     */
    public function describeDohDomainStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDohSubDomainStatisticsRequest $request DescribeDohSubDomainStatisticsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDohSubDomainStatisticsResponse DescribeDohSubDomainStatisticsResponse
     */
    public function describeDohSubDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDohSubDomainStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDohSubDomainStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDohSubDomainStatisticsRequest $request DescribeDohSubDomainStatisticsRequest
     *
     * @return DescribeDohSubDomainStatisticsResponse DescribeDohSubDomainStatisticsResponse
     */
    public function describeDohSubDomainStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohSubDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDohSubDomainStatisticsSummaryRequest $request DescribeDohSubDomainStatisticsSummaryRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDohSubDomainStatisticsSummaryResponse DescribeDohSubDomainStatisticsSummaryResponse
     */
    public function describeDohSubDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDohSubDomainStatisticsSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDohSubDomainStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDohSubDomainStatisticsSummaryRequest $request DescribeDohSubDomainStatisticsSummaryRequest
     *
     * @return DescribeDohSubDomainStatisticsSummaryResponse DescribeDohSubDomainStatisticsSummaryResponse
     */
    public function describeDohSubDomainStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohSubDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the numbers of accessed domains and subdomains by using DNS over HTTPS (DoH).
     *  *
     * @param DescribeDohUserInfoRequest $request DescribeDohUserInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDohUserInfoResponse DescribeDohUserInfoResponse
     */
    public function describeDohUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDohUserInfo',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDohUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the numbers of accessed domains and subdomains by using DNS over HTTPS (DoH).
     *  *
     * @param DescribeDohUserInfoRequest $request DescribeDohUserInfoRequest
     *
     * @return DescribeDohUserInfoResponse DescribeDohUserInfoResponse
     */
    public function describeDohUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDohUserInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Domain Name System Security Extensions (DNSSEC) configurations of a domain name based on the specified parameters.
     *  *
     * @param DescribeDomainDnssecInfoRequest $request DescribeDomainDnssecInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainDnssecInfoResponse DescribeDomainDnssecInfoResponse
     */
    public function describeDomainDnssecInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainDnssecInfo',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainDnssecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Domain Name System Security Extensions (DNSSEC) configurations of a domain name based on the specified parameters.
     *  *
     * @param DescribeDomainDnssecInfoRequest $request DescribeDomainDnssecInfoRequest
     *
     * @return DescribeDomainDnssecInfoResponse DescribeDomainDnssecInfoResponse
     */
    public function describeDomainDnssecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainDnssecInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all domain name groups based on the specified parameters.
     *  *
     * @param DescribeDomainGroupsRequest $request DescribeDomainGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainGroupsResponse DescribeDomainGroupsResponse
     */
    public function describeDomainGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeDomainGroups',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all domain name groups based on the specified parameters.
     *  *
     * @param DescribeDomainGroupsRequest $request DescribeDomainGroupsRequest
     *
     * @return DescribeDomainGroupsResponse DescribeDomainGroupsResponse
     */
    public function describeDomainGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a domain name based on specified parameters.
     *  *
     * @description In this example, the domain name is bound to an instance of Alibaba Cloud DNS Enterprise Ultimate Edition. For more information about valid Domain Name System (DNS) request lines, see the return values of the RecordLines parameter.
     *  *
     * @param DescribeDomainInfoRequest $request DescribeDomainInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainInfoResponse DescribeDomainInfoResponse
     */
    public function describeDomainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->needDetailAttributes)) {
            $query['NeedDetailAttributes'] = $request->needDetailAttributes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainInfo',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a domain name based on specified parameters.
     *  *
     * @description In this example, the domain name is bound to an instance of Alibaba Cloud DNS Enterprise Ultimate Edition. For more information about valid Domain Name System (DNS) request lines, see the return values of the RecordLines parameter.
     *  *
     * @param DescribeDomainInfoRequest $request DescribeDomainInfoRequest
     *
     * @return DescribeDomainInfoResponse DescribeDomainInfoResponse
     */
    public function describeDomainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operation logs of domain names based on the specified parameters.
     *  *
     * @param DescribeDomainLogsRequest $request DescribeDomainLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainLogsResponse DescribeDomainLogsResponse
     */
    public function describeDomainLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the operation logs of domain names based on the specified parameters.
     *  *
     * @param DescribeDomainLogsRequest $request DescribeDomainLogsRequest
     *
     * @return DescribeDomainLogsResponse DescribeDomainLogsResponse
     */
    public function describeDomainLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the name servers configured for a specified domain name and checks whether all the name servers are Alibaba Cloud Domain Name System (DNS) servers.
     *  *
     * @description >  You can call this operation to query the authoritative servers of a domain name registry to obtain the name servers for a domain name. If the domain name is in an invalid state, such as serverHold or clientHold, an error may be returned.
     *  *
     * @param DescribeDomainNsRequest $request DescribeDomainNsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainNsResponse DescribeDomainNsResponse
     */
    public function describeDomainNsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainNs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainNsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the name servers configured for a specified domain name and checks whether all the name servers are Alibaba Cloud Domain Name System (DNS) servers.
     *  *
     * @description >  You can call this operation to query the authoritative servers of a domain name registry to obtain the name servers for a domain name. If the domain name is in an invalid state, such as serverHold or clientHold, an error may be returned.
     *  *
     * @param DescribeDomainNsRequest $request DescribeDomainNsRequest
     *
     * @return DescribeDomainNsResponse DescribeDomainNsResponse
     */
    public function describeDomainNs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainNsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a Domain Name System (DNS) record.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Alidns\\&api=DescribeDomainRecordInfo\\&type=RPC\\&version=2015-01-09)
     *  *
     * @param DescribeDomainRecordInfoRequest $request DescribeDomainRecordInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRecordInfoResponse DescribeDomainRecordInfoResponse
     */
    public function describeDomainRecordInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRecordInfo',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRecordInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a Domain Name System (DNS) record.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Alidns\\&api=DescribeDomainRecordInfo\\&type=RPC\\&version=2015-01-09)
     *  *
     * @param DescribeDomainRecordInfoRequest $request DescribeDomainRecordInfoRequest
     *
     * @return DescribeDomainRecordInfoResponse DescribeDomainRecordInfoResponse
     */
    public function describeDomainRecordInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRecordInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all Domain Name System (DNS) records of the specified primary domain names based on the specified parameters.
     *  *
     * @description *   You can specify DomainName, PageNumber, and PageSize to query the DNS records of the specified domain names.
     * *   You can also specify RRKeyWord, TypeKeyWord, or ValueKeyWord to query the DNS records that contain the specified keyword.
     * *   By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     * *   You can specify GroupId to query the DNS records of the specified domain names based on the group ID. You can query the DNS records of all domain names and the domain names in the default group.
     *  *
     * @param DescribeDomainRecordsRequest $request DescribeDomainRecordsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainRecordsResponse DescribeDomainRecordsResponse
     */
    public function describeDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->RRKeyWord)) {
            $query['RRKeyWord'] = $request->RRKeyWord;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->typeKeyWord)) {
            $query['TypeKeyWord'] = $request->typeKeyWord;
        }
        if (!Utils::isUnset($request->valueKeyWord)) {
            $query['ValueKeyWord'] = $request->valueKeyWord;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainRecords',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all Domain Name System (DNS) records of the specified primary domain names based on the specified parameters.
     *  *
     * @description *   You can specify DomainName, PageNumber, and PageSize to query the DNS records of the specified domain names.
     * *   You can also specify RRKeyWord, TypeKeyWord, or ValueKeyWord to query the DNS records that contain the specified keyword.
     * *   By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     * *   You can specify GroupId to query the DNS records of the specified domain names based on the group ID. You can query the DNS records of all domain names and the domain names in the default group.
     *  *
     * @param DescribeDomainRecordsRequest $request DescribeDomainRecordsRequest
     *
     * @return DescribeDomainRecordsResponse DescribeDomainRecordsResponse
     */
    public function describeDomainRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resolution requests of all paid domain names within your account.
     *  *
     * @param DescribeDomainResolveStatisticsSummaryRequest $request DescribeDomainResolveStatisticsSummaryRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainResolveStatisticsSummaryResponse DescribeDomainResolveStatisticsSummaryResponse
     */
    public function describeDomainResolveStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainResolveStatisticsSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainResolveStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resolution requests of all paid domain names within your account.
     *  *
     * @param DescribeDomainResolveStatisticsSummaryRequest $request DescribeDomainResolveStatisticsSummaryRequest
     *
     * @return DescribeDomainResolveStatisticsSummaryResponse DescribeDomainResolveStatisticsSummaryResponse
     */
    public function describeDomainResolveStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainResolveStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time statistics on the Domain Name System (DNS) requests for a primary domain name.
     *  *
     * @description Real-time data is collected per hour.
     *  *
     * @param DescribeDomainStatisticsRequest $request DescribeDomainStatisticsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainStatisticsResponse DescribeDomainStatisticsResponse
     */
    public function describeDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time statistics on the Domain Name System (DNS) requests for a primary domain name.
     *  *
     * @description Real-time data is collected per hour.
     *  *
     * @param DescribeDomainStatisticsRequest $request DescribeDomainStatisticsRequest
     *
     * @return DescribeDomainStatisticsResponse DescribeDomainStatisticsResponse
     */
    public function describeDomainStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Calls the DescribeDomainStatisticsSummary operation to obtain the query volume of all paid domain names under your account.
     *  *
     * @param DescribeDomainStatisticsSummaryRequest $request DescribeDomainStatisticsSummaryRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainStatisticsSummaryResponse DescribeDomainStatisticsSummaryResponse
     */
    public function describeDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainStatisticsSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Calls the DescribeDomainStatisticsSummary operation to obtain the query volume of all paid domain names under your account.
     *  *
     * @param DescribeDomainStatisticsSummaryRequest $request DescribeDomainStatisticsSummaryRequest
     *
     * @return DescribeDomainStatisticsSummaryResponse DescribeDomainStatisticsSummaryResponse
     */
    public function describeDomainStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Calls the DescribeDomains operation to query domain names of a user based on input parameters.
     *  *
     * @description *   You can specify the PageNumber and PageSize parameters to query domain names.
     * *   You can specify the KeyWord parameter to query domain names that contain the specified keyword.
     * *   By default, the domain names in a list are sorted in descending order of the time they were added.
     * *   You can specify the GroupId parameter. If you do not specify this parameter, all domain names are queried by default.
     *  *
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->starmark)) {
            $query['Starmark'] = $request->starmark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Calls the DescribeDomains operation to query domain names of a user based on input parameters.
     *  *
     * @description *   You can specify the PageNumber and PageSize parameters to query domain names.
     * *   You can specify the KeyWord parameter to query domain names that contain the specified keyword.
     * *   By default, the domain names in a list are sorted in descending order of the time they were added.
     * *   You can specify the GroupId parameter. If you do not specify this parameter, all domain names are queried by default.
     *  *
     * @param DescribeDomainsRequest $request DescribeDomainsRequest
     *
     * @return DescribeDomainsResponse DescribeDomainsResponse
     */
    public function describeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the access policies of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmAccessStrategiesRequest $request DescribeGtmAccessStrategiesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmAccessStrategiesResponse DescribeGtmAccessStrategiesResponse
     */
    public function describeGtmAccessStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeGtmAccessStrategies',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmAccessStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the access policies of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmAccessStrategiesRequest $request DescribeGtmAccessStrategiesRequest
     *
     * @return DescribeGtmAccessStrategiesResponse DescribeGtmAccessStrategiesResponse
     */
    public function describeGtmAccessStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAccessStrategiesWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the details about an access policy of a Global Traffic Manager (GTM) instance based on the policy ID.
     *  *
     * @param DescribeGtmAccessStrategyRequest $request DescribeGtmAccessStrategyRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmAccessStrategyResponse DescribeGtmAccessStrategyResponse
     */
    public function describeGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the details about an access policy of a Global Traffic Manager (GTM) instance based on the policy ID.
     *  *
     * @param DescribeGtmAccessStrategyRequest $request DescribeGtmAccessStrategyRequest
     *
     * @return DescribeGtmAccessStrategyResponse DescribeGtmAccessStrategyResponse
     */
    public function describeGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration items that can be set for an access policy.
     *  *
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request DescribeGtmAccessStrategyAvailableConfigRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponse DescribeGtmAccessStrategyAvailableConfigResponse
     */
    public function describeGtmAccessStrategyAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmAccessStrategyAvailableConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmAccessStrategyAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration items that can be set for an access policy.
     *  *
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request DescribeGtmAccessStrategyAvailableConfigRequest
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponse DescribeGtmAccessStrategyAvailableConfigResponse
     */
    public function describeGtmAccessStrategyAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAccessStrategyAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmAvailableAlertGroupRequest $request DescribeGtmAvailableAlertGroupRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmAvailableAlertGroupResponse DescribeGtmAvailableAlertGroupResponse
     */
    public function describeGtmAvailableAlertGroupWithOptions($request, $runtime)
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
            'action'      => 'DescribeGtmAvailableAlertGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmAvailableAlertGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGtmAvailableAlertGroupRequest $request DescribeGtmAvailableAlertGroupRequest
     *
     * @return DescribeGtmAvailableAlertGroupResponse DescribeGtmAvailableAlertGroupResponse
     */
    public function describeGtmAvailableAlertGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmAvailableAlertGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceRequest $request DescribeGtmInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmInstanceResponse DescribeGtmInstanceResponse
     */
    public function describeGtmInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->needDetailAttributes)) {
            $query['NeedDetailAttributes'] = $request->needDetailAttributes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmInstance',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceRequest $request DescribeGtmInstanceRequest
     *
     * @return DescribeGtmInstanceResponse DescribeGtmInstanceResponse
     */
    public function describeGtmInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the details about an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceAddressPoolRequest $request DescribeGtmInstanceAddressPoolRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmInstanceAddressPoolResponse DescribeGtmInstanceAddressPoolResponse
     */
    public function describeGtmInstanceAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmInstanceAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmInstanceAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the details about an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceAddressPoolRequest $request DescribeGtmInstanceAddressPoolRequest
     *
     * @return DescribeGtmInstanceAddressPoolResponse DescribeGtmInstanceAddressPoolResponse
     */
    public function describeGtmInstanceAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the address pools of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceAddressPoolsRequest $request DescribeGtmInstanceAddressPoolsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmInstanceAddressPoolsResponse DescribeGtmInstanceAddressPoolsResponse
     */
    public function describeGtmInstanceAddressPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeGtmInstanceAddressPools',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmInstanceAddressPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the address pools of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceAddressPoolsRequest $request DescribeGtmInstanceAddressPoolsRequest
     *
     * @return DescribeGtmInstanceAddressPoolsResponse DescribeGtmInstanceAddressPoolsResponse
     */
    public function describeGtmInstanceAddressPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceAddressPoolsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the current status of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceStatusRequest $request DescribeGtmInstanceStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmInstanceStatusResponse DescribeGtmInstanceStatusResponse
     */
    public function describeGtmInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmInstanceStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the current status of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmInstanceStatusRequest $request DescribeGtmInstanceStatusRequest
     *
     * @return DescribeGtmInstanceStatusResponse DescribeGtmInstanceStatusResponse
     */
    public function describeGtmInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGtmInstanceSystemCnameRequest $request DescribeGtmInstanceSystemCnameRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmInstanceSystemCnameResponse DescribeGtmInstanceSystemCnameResponse
     */
    public function describeGtmInstanceSystemCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmInstanceSystemCname',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmInstanceSystemCnameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGtmInstanceSystemCnameRequest $request DescribeGtmInstanceSystemCnameRequest
     *
     * @return DescribeGtmInstanceSystemCnameResponse DescribeGtmInstanceSystemCnameResponse
     */
    public function describeGtmInstanceSystemCname($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstanceSystemCnameWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Global Traffic Manager (GTM) instances under your account.
     *  *
     * @param DescribeGtmInstancesRequest $request DescribeGtmInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmInstancesResponse DescribeGtmInstancesResponse
     */
    public function describeGtmInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->needDetailAttributes)) {
            $query['NeedDetailAttributes'] = $request->needDetailAttributes;
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
            'action'      => 'DescribeGtmInstances',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Global Traffic Manager (GTM) instances under your account.
     *  *
     * @param DescribeGtmInstancesRequest $request DescribeGtmInstancesRequest
     *
     * @return DescribeGtmInstancesResponse DescribeGtmInstancesResponse
     */
    public function describeGtmInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query logs of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmLogsRequest $request DescribeGtmLogsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmLogsResponse DescribeGtmLogsResponse
     */
    public function describeGtmLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query logs of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmLogsRequest $request DescribeGtmLogsRequest
     *
     * @return DescribeGtmLogsResponse DescribeGtmLogsResponse
     */
    public function describeGtmLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available monitored nodes.
     *  *
     * @param DescribeGtmMonitorAvailableConfigRequest $request DescribeGtmMonitorAvailableConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmMonitorAvailableConfigResponse DescribeGtmMonitorAvailableConfigResponse
     */
    public function describeGtmMonitorAvailableConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeGtmMonitorAvailableConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmMonitorAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available monitored nodes.
     *  *
     * @param DescribeGtmMonitorAvailableConfigRequest $request DescribeGtmMonitorAvailableConfigRequest
     *
     * @return DescribeGtmMonitorAvailableConfigResponse DescribeGtmMonitorAvailableConfigResponse
     */
    public function describeGtmMonitorAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmMonitorAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the health check configuration of an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmMonitorConfigRequest $request DescribeGtmMonitorConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmMonitorConfigResponse DescribeGtmMonitorConfigResponse
     */
    public function describeGtmMonitorConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorConfigId)) {
            $query['MonitorConfigId'] = $request->monitorConfigId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmMonitorConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmMonitorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the health check configuration of an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmMonitorConfigRequest $request DescribeGtmMonitorConfigRequest
     *
     * @return DescribeGtmMonitorConfigResponse DescribeGtmMonitorConfigResponse
     */
    public function describeGtmMonitorConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmMonitorConfigWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the detailed information of a disaster recovery plan for a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmRecoveryPlanRequest $request DescribeGtmRecoveryPlanRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmRecoveryPlanResponse DescribeGtmRecoveryPlanResponse
     */
    public function describeGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the detailed information of a disaster recovery plan for a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmRecoveryPlanRequest $request DescribeGtmRecoveryPlanRequest
     *
     * @return DescribeGtmRecoveryPlanResponse DescribeGtmRecoveryPlanResponse
     */
    public function describeGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the available configurations of a disaster recovery plan of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request DescribeGtmRecoveryPlanAvailableConfigRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse DescribeGtmRecoveryPlanAvailableConfigResponse
     */
    public function describeGtmRecoveryPlanAvailableConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeGtmRecoveryPlanAvailableConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmRecoveryPlanAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the available configurations of a disaster recovery plan of a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request DescribeGtmRecoveryPlanAvailableConfigRequest
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse DescribeGtmRecoveryPlanAvailableConfigResponse
     */
    public function describeGtmRecoveryPlanAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmRecoveryPlanAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the disaster recovery plans for a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmRecoveryPlansRequest $request DescribeGtmRecoveryPlansRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGtmRecoveryPlansResponse DescribeGtmRecoveryPlansResponse
     */
    public function describeGtmRecoveryPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeGtmRecoveryPlans',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGtmRecoveryPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the disaster recovery plans for a Global Traffic Manager (GTM) instance.
     *  *
     * @param DescribeGtmRecoveryPlansRequest $request DescribeGtmRecoveryPlansRequest
     *
     * @return DescribeGtmRecoveryPlansResponse DescribeGtmRecoveryPlansResponse
     */
    public function describeGtmRecoveryPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGtmRecoveryPlansWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the domain names that are bound to an Alibaba Cloud DNS instance.
     *  *
     * @param DescribeInstanceDomainsRequest $request DescribeInstanceDomainsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceDomainsResponse DescribeInstanceDomainsResponse
     */
    public function describeInstanceDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribeInstanceDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the domain names that are bound to an Alibaba Cloud DNS instance.
     *  *
     * @param DescribeInstanceDomainsRequest $request DescribeInstanceDomainsRequest
     *
     * @return DescribeInstanceDomainsResponse DescribeInstanceDomainsResponse
     */
    public function describeInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInternetDnsLogsRequest $request DescribeInternetDnsLogsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInternetDnsLogsResponse DescribeInternetDnsLogsResponse
     */
    public function describeInternetDnsLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTimestamp)) {
            $query['EndTimestamp'] = $request->endTimestamp;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->module)) {
            $query['Module'] = $request->module;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryCondition)) {
            $query['QueryCondition'] = $request->queryCondition;
        }
        if (!Utils::isUnset($request->startTimestamp)) {
            $query['StartTimestamp'] = $request->startTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInternetDnsLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInternetDnsLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInternetDnsLogsRequest $request DescribeInternetDnsLogsRequest
     *
     * @return DescribeInternetDnsLogsResponse DescribeInternetDnsLogsResponse
     */
    public function describeInternetDnsLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInternetDnsLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取缓存刷新套餐包列表
     *  *
     * @param DescribeIspFlushCacheInstancesRequest $request DescribeIspFlushCacheInstancesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIspFlushCacheInstancesResponse DescribeIspFlushCacheInstancesResponse
     */
    public function describeIspFlushCacheInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIspFlushCacheInstances',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIspFlushCacheInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取缓存刷新套餐包列表
     *  *
     * @param DescribeIspFlushCacheInstancesRequest $request DescribeIspFlushCacheInstancesRequest
     *
     * @return DescribeIspFlushCacheInstancesResponse DescribeIspFlushCacheInstancesResponse
     */
    public function describeIspFlushCacheInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取剩余可缓存刷新次数
     *  *
     * @param DescribeIspFlushCacheRemainQuotaRequest $request DescribeIspFlushCacheRemainQuotaRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIspFlushCacheRemainQuotaResponse DescribeIspFlushCacheRemainQuotaResponse
     */
    public function describeIspFlushCacheRemainQuotaWithOptions($request, $runtime)
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
            'action'      => 'DescribeIspFlushCacheRemainQuota',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIspFlushCacheRemainQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取剩余可缓存刷新次数
     *  *
     * @param DescribeIspFlushCacheRemainQuotaRequest $request DescribeIspFlushCacheRemainQuotaRequest
     *
     * @return DescribeIspFlushCacheRemainQuotaResponse DescribeIspFlushCacheRemainQuotaResponse
     */
    public function describeIspFlushCacheRemainQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheRemainQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary 获取缓存刷新任务详情
     *  *
     * @param DescribeIspFlushCacheTaskRequest $request DescribeIspFlushCacheTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIspFlushCacheTaskResponse DescribeIspFlushCacheTaskResponse
     */
    public function describeIspFlushCacheTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIspFlushCacheTask',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIspFlushCacheTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取缓存刷新任务详情
     *  *
     * @param DescribeIspFlushCacheTaskRequest $request DescribeIspFlushCacheTaskRequest
     *
     * @return DescribeIspFlushCacheTaskResponse DescribeIspFlushCacheTaskResponse
     */
    public function describeIspFlushCacheTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 获取缓存刷新任务列表
     *  *
     * @param DescribeIspFlushCacheTasksRequest $request DescribeIspFlushCacheTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIspFlushCacheTasksResponse DescribeIspFlushCacheTasksResponse
     */
    public function describeIspFlushCacheTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
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
            'action'      => 'DescribeIspFlushCacheTasks',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIspFlushCacheTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取缓存刷新任务列表
     *  *
     * @param DescribeIspFlushCacheTasksRequest $request DescribeIspFlushCacheTasksRequest
     *
     * @return DescribeIspFlushCacheTasksResponse DescribeIspFlushCacheTasksResponse
     */
    public function describeIspFlushCacheTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIspFlushCacheTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS用户数据概览
     *  *
     * @param DescribePdnsAccountSummaryRequest $request DescribePdnsAccountSummaryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsAccountSummaryResponse DescribePdnsAccountSummaryResponse
     */
    public function describePdnsAccountSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsAccountSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsAccountSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS用户数据概览
     *  *
     * @param DescribePdnsAccountSummaryRequest $request DescribePdnsAccountSummaryRequest
     *
     * @return DescribePdnsAccountSummaryResponse DescribePdnsAccountSummaryResponse
     */
    public function describePdnsAccountSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsAccountSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS AppKey 详情
     *  *
     * @param DescribePdnsAppKeyRequest $request DescribePdnsAppKeyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsAppKeyResponse DescribePdnsAppKeyResponse
     */
    public function describePdnsAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKeyId)) {
            $query['AppKeyId'] = $request->appKeyId;
        }
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsAppKey',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS AppKey 详情
     *  *
     * @param DescribePdnsAppKeyRequest $request DescribePdnsAppKeyRequest
     *
     * @return DescribePdnsAppKeyResponse DescribePdnsAppKeyResponse
     */
    public function describePdnsAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS AppKey 列表
     *  *
     * @param DescribePdnsAppKeysRequest $request DescribePdnsAppKeysRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsAppKeysResponse DescribePdnsAppKeysResponse
     */
    public function describePdnsAppKeysWithOptions($request, $runtime)
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
            'action'      => 'DescribePdnsAppKeys',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsAppKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS AppKey 列表
     *  *
     * @param DescribePdnsAppKeysRequest $request DescribePdnsAppKeysRequest
     *
     * @return DescribePdnsAppKeysResponse DescribePdnsAppKeysResponse
     */
    public function describePdnsAppKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsAppKeysWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS 操作日志列表
     *  *
     * @param DescribePdnsOperateLogsRequest $request DescribePdnsOperateLogsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsOperateLogsResponse DescribePdnsOperateLogsResponse
     */
    public function describePdnsOperateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsOperateLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS 操作日志列表
     *  *
     * @param DescribePdnsOperateLogsRequest $request DescribePdnsOperateLogsRequest
     *
     * @return DescribePdnsOperateLogsResponse DescribePdnsOperateLogsResponse
     */
    public function describePdnsOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS 请求统计
     *  *
     * @param DescribePdnsRequestStatisticRequest $request DescribePdnsRequestStatisticRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsRequestStatisticResponse DescribePdnsRequestStatisticResponse
     */
    public function describePdnsRequestStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsRequestStatistic',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsRequestStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS 请求统计
     *  *
     * @param DescribePdnsRequestStatisticRequest $request DescribePdnsRequestStatisticRequest
     *
     * @return DescribePdnsRequestStatisticResponse DescribePdnsRequestStatisticResponse
     */
    public function describePdnsRequestStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsRequestStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS 请求统计列表
     *  *
     * @param DescribePdnsRequestStatisticsRequest $request DescribePdnsRequestStatisticsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsRequestStatisticsResponse DescribePdnsRequestStatisticsResponse
     */
    public function describePdnsRequestStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsRequestStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsRequestStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS 请求统计列表
     *  *
     * @param DescribePdnsRequestStatisticsRequest $request DescribePdnsRequestStatisticsRequest
     *
     * @return DescribePdnsRequestStatisticsResponse DescribePdnsRequestStatisticsResponse
     */
    public function describePdnsRequestStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsRequestStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS 威胁日志列表
     *  *
     * @param DescribePdnsThreatLogsRequest $request DescribePdnsThreatLogsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsThreatLogsResponse DescribePdnsThreatLogsResponse
     */
    public function describePdnsThreatLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->threatLevel)) {
            $query['ThreatLevel'] = $request->threatLevel;
        }
        if (!Utils::isUnset($request->threatSourceIp)) {
            $query['ThreatSourceIp'] = $request->threatSourceIp;
        }
        if (!Utils::isUnset($request->threatType)) {
            $query['ThreatType'] = $request->threatType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsThreatLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsThreatLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS 威胁日志列表
     *  *
     * @param DescribePdnsThreatLogsRequest $request DescribePdnsThreatLogsRequest
     *
     * @return DescribePdnsThreatLogsResponse DescribePdnsThreatLogsResponse
     */
    public function describePdnsThreatLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsThreatLogsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS 威胁统计
     *  *
     * @param DescribePdnsThreatStatisticRequest $request DescribePdnsThreatStatisticRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsThreatStatisticResponse DescribePdnsThreatStatisticResponse
     */
    public function describePdnsThreatStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->threatSourceIp)) {
            $query['ThreatSourceIp'] = $request->threatSourceIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsThreatStatistic',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsThreatStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS 威胁统计
     *  *
     * @param DescribePdnsThreatStatisticRequest $request DescribePdnsThreatStatisticRequest
     *
     * @return DescribePdnsThreatStatisticResponse DescribePdnsThreatStatisticResponse
     */
    public function describePdnsThreatStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsThreatStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS 威胁统计列表
     *  *
     * @param DescribePdnsThreatStatisticsRequest $request DescribePdnsThreatStatisticsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsThreatStatisticsResponse DescribePdnsThreatStatisticsResponse
     */
    public function describePdnsThreatStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        if (!Utils::isUnset($request->threatLevel)) {
            $query['ThreatLevel'] = $request->threatLevel;
        }
        if (!Utils::isUnset($request->threatSourceIp)) {
            $query['ThreatSourceIp'] = $request->threatSourceIp;
        }
        if (!Utils::isUnset($request->threatType)) {
            $query['ThreatType'] = $request->threatType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePdnsThreatStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsThreatStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS 威胁统计列表
     *  *
     * @param DescribePdnsThreatStatisticsRequest $request DescribePdnsThreatStatisticsRequest
     *
     * @return DescribePdnsThreatStatisticsResponse DescribePdnsThreatStatisticsResponse
     */
    public function describePdnsThreatStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsThreatStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS Udp IP段列表
     *  *
     * @param DescribePdnsUdpIpSegmentsRequest $request DescribePdnsUdpIpSegmentsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsUdpIpSegmentsResponse DescribePdnsUdpIpSegmentsResponse
     */
    public function describePdnsUdpIpSegmentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'action'      => 'DescribePdnsUdpIpSegments',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsUdpIpSegmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS Udp IP段列表
     *  *
     * @param DescribePdnsUdpIpSegmentsRequest $request DescribePdnsUdpIpSegmentsRequest
     *
     * @return DescribePdnsUdpIpSegmentsResponse DescribePdnsUdpIpSegmentsResponse
     */
    public function describePdnsUdpIpSegments($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsUdpIpSegmentsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共DNS用户信息
     *  *
     * @param DescribePdnsUserInfoRequest $request DescribePdnsUserInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePdnsUserInfoResponse DescribePdnsUserInfoResponse
     */
    public function describePdnsUserInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribePdnsUserInfo',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePdnsUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取公共DNS用户信息
     *  *
     * @param DescribePdnsUserInfoRequest $request DescribePdnsUserInfoRequest
     *
     * @return DescribePdnsUserInfoResponse DescribePdnsUserInfoResponse
     */
    public function describePdnsUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePdnsUserInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operation logs of a domain name based on the specified parameters.
     *  *
     * @param DescribeRecordLogsRequest $request DescribeRecordLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordLogsResponse DescribeRecordLogsResponse
     */
    public function describeRecordLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordLogs',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the operation logs of a domain name based on the specified parameters.
     *  *
     * @param DescribeRecordLogsRequest $request DescribeRecordLogsRequest
     *
     * @return DescribeRecordLogsResponse DescribeRecordLogsResponse
     */
    public function describeRecordLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of resolution requests for all subdomain names of a specified domain name.
     *  *
     * @param DescribeRecordResolveStatisticsSummaryRequest $request DescribeRecordResolveStatisticsSummaryRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordResolveStatisticsSummaryResponse DescribeRecordResolveStatisticsSummaryResponse
     */
    public function describeRecordResolveStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordResolveStatisticsSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordResolveStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of resolution requests for all subdomain names of a specified domain name.
     *  *
     * @param DescribeRecordResolveStatisticsSummaryRequest $request DescribeRecordResolveStatisticsSummaryRequest
     *
     * @return DescribeRecordResolveStatisticsSummaryResponse DescribeRecordResolveStatisticsSummaryResponse
     */
    public function describeRecordResolveStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordResolveStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the real-time statistics on the Domain Name System (DNS) requests for a subdomain name.
     *  *
     * @description Real-time data is collected per hour.
     *  *
     * @param DescribeRecordStatisticsRequest $request DescribeRecordStatisticsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordStatisticsResponse DescribeRecordStatisticsResponse
     */
    public function describeRecordStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->rr)) {
            $query['Rr'] = $request->rr;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordStatistics',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the real-time statistics on the Domain Name System (DNS) requests for a subdomain name.
     *  *
     * @description Real-time data is collected per hour.
     *  *
     * @param DescribeRecordStatisticsRequest $request DescribeRecordStatisticsRequest
     *
     * @return DescribeRecordStatisticsResponse DescribeRecordStatisticsResponse
     */
    public function describeRecordStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of Domain Name System (DNS) requests for all subdomain names of a specified domain name.
     *  *
     * @param DescribeRecordStatisticsSummaryRequest $request DescribeRecordStatisticsSummaryRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordStatisticsSummaryResponse DescribeRecordStatisticsSummaryResponse
     */
    public function describeRecordStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainType)) {
            $query['DomainType'] = $request->domainType;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchMode)) {
            $query['SearchMode'] = $request->searchMode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordStatisticsSummary',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordStatisticsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of Domain Name System (DNS) requests for all subdomain names of a specified domain name.
     *  *
     * @param DescribeRecordStatisticsSummaryRequest $request DescribeRecordStatisticsSummaryRequest
     *
     * @return DescribeRecordStatisticsSummaryResponse DescribeRecordStatisticsSummaryResponse
     */
    public function describeRecordStatisticsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordStatisticsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all Domain Name System (DNS) records of a subdomain name based on the specified parameters.
     *  *
     * @param DescribeSubDomainRecordsRequest $request DescribeSubDomainRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubDomainRecordsResponse DescribeSubDomainRecordsResponse
     */
    public function describeSubDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubDomainRecords',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubDomainRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all Domain Name System (DNS) records of a subdomain name based on the specified parameters.
     *  *
     * @param DescribeSubDomainRecordsRequest $request DescribeSubDomainRecordsRequest
     *
     * @return DescribeSubDomainRecordsResponse DescribeSubDomainRecordsResponse
     */
    public function describeSubDomainRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubDomainRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询云解析支持的所有线路列表。
     *  *
     * @param DescribeSupportLinesRequest $request DescribeSupportLinesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupportLinesResponse DescribeSupportLinesResponse
     */
    public function describeSupportLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupportLines',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询云解析支持的所有线路列表。
     *  *
     * @param DescribeSupportLinesRequest $request DescribeSupportLinesRequest
     *
     * @return DescribeSupportLinesResponse DescribeSupportLinesResponse
     */
    public function describeSupportLines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportLinesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries existing tags.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTags',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries existing tags.
     *  *
     * @param DescribeTagsRequest $request DescribeTagsRequest
     *
     * @return DescribeTagsResponse DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the domain names that were transferred between the current account and another account based on the specified parameters.
     *  *
     * @param DescribeTransferDomainsRequest $request DescribeTransferDomainsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTransferDomainsResponse DescribeTransferDomainsResponse
     */
    public function describeTransferDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->fromUserId)) {
            $query['FromUserId'] = $request->fromUserId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        if (!Utils::isUnset($request->transferType)) {
            $query['TransferType'] = $request->transferType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTransferDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTransferDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the domain names that were transferred between the current account and another account based on the specified parameters.
     *  *
     * @param DescribeTransferDomainsRequest $request DescribeTransferDomainsRequest
     *
     * @return DescribeTransferDomainsResponse DescribeTransferDomainsResponse
     */
    public function describeTransferDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTransferDomainsWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteGtmRecoveryPlanRequest $request ExecuteGtmRecoveryPlanRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteGtmRecoveryPlanResponse ExecuteGtmRecoveryPlanResponse
     */
    public function executeGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteGtmRecoveryPlanRequest $request ExecuteGtmRecoveryPlanRequest
     *
     * @return ExecuteGtmRecoveryPlanResponse ExecuteGtmRecoveryPlanResponse
     */
    public function executeGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a primary domain name based on the specified parameters.
     *  *
     * @description For more information about the difference between primary domain names and subdomain names, see
     * [Subdomain levels](https://www.alibabacloud.com/help/zh/faq-detail/39803.htm). For example, if you enter `www.abc.com`, abc.com is obtained.
     *  *
     * @param GetMainDomainNameRequest $request GetMainDomainNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMainDomainNameResponse GetMainDomainNameResponse
     */
    public function getMainDomainNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputString)) {
            $query['InputString'] = $request->inputString;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMainDomainName',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMainDomainNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a primary domain name based on the specified parameters.
     *  *
     * @description For more information about the difference between primary domain names and subdomain names, see
     * [Subdomain levels](https://www.alibabacloud.com/help/zh/faq-detail/39803.htm). For example, if you enter `www.abc.com`, abc.com is obtained.
     *  *
     * @param GetMainDomainNameRequest $request GetMainDomainNameRequest
     *
     * @return GetMainDomainNameResponse GetMainDomainNameResponse
     */
    public function getMainDomainName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainDomainNameWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a text (TXT) record. TXT records are used to retrieve domain names and subdomain names, enable the subdomain name verification feature, and perform batch retrievals.
     *  *
     * @param GetTxtRecordForVerifyRequest $request GetTxtRecordForVerifyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTxtRecordForVerifyResponse GetTxtRecordForVerifyResponse
     */
    public function getTxtRecordForVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTxtRecordForVerify',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTxtRecordForVerifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a text (TXT) record. TXT records are used to retrieve domain names and subdomain names, enable the subdomain name verification feature, and perform batch retrievals.
     *  *
     * @param GetTxtRecordForVerifyRequest $request GetTxtRecordForVerifyRequest
     *
     * @return GetTxtRecordForVerifyResponse GetTxtRecordForVerifyResponse
     */
    public function getTxtRecordForVerify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTxtRecordForVerifyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are added to a specified resource.
     *  *
     * @description *   Set ResourceId.N or Tag.N that consists of Tag.N.Key and Tag.N.Value in the request to specify the object to be queried.
     * *   Tag.N is a resource tag that consists of a key-value pair. If you set only Tag.N.Key, all tag values that are assigned to the specified key are returned. If you set only Tag.N.Value, an error message is returned.
     * *   If you set both Tag.N and ResourceId.N to filter tags, ResourceId.N must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2015-01-09',
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
     * @summary Queries the tags that are added to a specified resource.
     *  *
     * @description *   Set ResourceId.N or Tag.N that consists of Tag.N.Key and Tag.N.Value in the request to specify the object to be queried.
     * *   Tag.N is a resource tag that consists of a key-value pair. If you set only Tag.N.Key, all tag values that are assigned to the specified key are returned. If you set only Tag.N.Value, an error message is returned.
     * *   If you set both Tag.N and ResourceId.N to filter tags, ResourceId.N must match all specified key-value pairs.
     * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
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
     * @summary Calls the ModifyHichinaDomainDNS operation to change the name of a DNS server based on input parameters.
     *  *
     * @description If the operation succeeds, the name of the DNS server changes to that of an Alibaba Cloud DNS server (ending with hichina.com).
     * >  Before you call this operation, make sure that your domain name has been registered with Alibaba Cloud and the DNS server in use is not an Alibaba Cloud DNS server.
     *  *
     * @param ModifyHichinaDomainDNSRequest $request ModifyHichinaDomainDNSRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyHichinaDomainDNSResponse ModifyHichinaDomainDNSResponse
     */
    public function modifyHichinaDomainDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyHichinaDomainDNS',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyHichinaDomainDNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Calls the ModifyHichinaDomainDNS operation to change the name of a DNS server based on input parameters.
     *  *
     * @description If the operation succeeds, the name of the DNS server changes to that of an Alibaba Cloud DNS server (ending with hichina.com).
     * >  Before you call this operation, make sure that your domain name has been registered with Alibaba Cloud and the DNS server in use is not an Alibaba Cloud DNS server.
     *  *
     * @param ModifyHichinaDomainDNSRequest $request ModifyHichinaDomainDNSRequest
     *
     * @return ModifyHichinaDomainDNSResponse ModifyHichinaDomainDNSResponse
     */
    public function modifyHichinaDomainDNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHichinaDomainDNSWithOptions($request, $runtime);
    }

    /**
     * @summary Moves a domain name to another resource group.
     *  *
     * @param MoveDomainResourceGroupRequest $request MoveDomainResourceGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveDomainResourceGroupResponse MoveDomainResourceGroupResponse
     */
    public function moveDomainResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveDomainResourceGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveDomainResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Moves a domain name to another resource group.
     *  *
     * @param MoveDomainResourceGroupRequest $request MoveDomainResourceGroupRequest
     *
     * @return MoveDomainResourceGroupResponse MoveDomainResourceGroupResponse
     */
    public function moveDomainResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveDomainResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param MoveGtmResourceGroupRequest $request MoveGtmResourceGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveGtmResourceGroupResponse MoveGtmResourceGroupResponse
     */
    public function moveGtmResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveGtmResourceGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveGtmResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveGtmResourceGroupRequest $request MoveGtmResourceGroupRequest
     *
     * @return MoveGtmResourceGroupResponse MoveGtmResourceGroupResponse
     */
    public function moveGtmResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveGtmResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a batch operation task to add or delete multiple domain names or multiple Domain Name System (DNS) records at a time.
     *  *
     * @description Scenario: You need to execute a large number of tasks related to DNS resolution and you do not have high requirements for efficiency.
     *  *
     * @param OperateBatchDomainRequest $request OperateBatchDomainRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateBatchDomainResponse OperateBatchDomainResponse
     */
    public function operateBatchDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainRecordInfo)) {
            $query['DomainRecordInfo'] = $request->domainRecordInfo;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateBatchDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateBatchDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a batch operation task to add or delete multiple domain names or multiple Domain Name System (DNS) records at a time.
     *  *
     * @description Scenario: You need to execute a large number of tasks related to DNS resolution and you do not have high requirements for efficiency.
     *  *
     * @param OperateBatchDomainRequest $request OperateBatchDomainRequest
     *
     * @return OperateBatchDomainResponse OperateBatchDomainResponse
     */
    public function operateBatchDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateBatchDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停公共DNS服务
     *  *
     * @param PausePdnsServiceRequest $request PausePdnsServiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PausePdnsServiceResponse PausePdnsServiceResponse
     */
    public function pausePdnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PausePdnsService',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PausePdnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停公共DNS服务
     *  *
     * @param PausePdnsServiceRequest $request PausePdnsServiceRequest
     *
     * @return PausePdnsServiceResponse PausePdnsServiceResponse
     */
    public function pausePdnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pausePdnsServiceWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to preview a disaster recovery plan of a Global Traffic Manager (GTM) instance.
     *  *
     * @param PreviewGtmRecoveryPlanRequest $request PreviewGtmRecoveryPlanRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return PreviewGtmRecoveryPlanResponse PreviewGtmRecoveryPlanResponse
     */
    public function previewGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreviewGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreviewGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to preview a disaster recovery plan of a Global Traffic Manager (GTM) instance.
     *  *
     * @param PreviewGtmRecoveryPlanRequest $request PreviewGtmRecoveryPlanRequest
     *
     * @return PreviewGtmRecoveryPlanResponse PreviewGtmRecoveryPlanResponse
     */
    public function previewGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->previewGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 删除公共DNS AppKey
     *  *
     * @param RemovePdnsAppKeyRequest $request RemovePdnsAppKeyRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePdnsAppKeyResponse RemovePdnsAppKeyResponse
     */
    public function removePdnsAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKeyId)) {
            $query['AppKeyId'] = $request->appKeyId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePdnsAppKey',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePdnsAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除公共DNS AppKey
     *  *
     * @param RemovePdnsAppKeyRequest $request RemovePdnsAppKeyRequest
     *
     * @return RemovePdnsAppKeyResponse RemovePdnsAppKeyResponse
     */
    public function removePdnsAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePdnsAppKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除公共DNS Udp Ip地址段
     *  *
     * @param RemovePdnsUdpIpSegmentRequest $request RemovePdnsUdpIpSegmentRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePdnsUdpIpSegmentResponse RemovePdnsUdpIpSegmentResponse
     */
    public function removePdnsUdpIpSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePdnsUdpIpSegment',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePdnsUdpIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除公共DNS Udp Ip地址段
     *  *
     * @param RemovePdnsUdpIpSegmentRequest $request RemovePdnsUdpIpSegmentRequest
     *
     * @return RemovePdnsUdpIpSegmentResponse RemovePdnsUdpIpSegmentResponse
     */
    public function removePdnsUdpIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePdnsUdpIpSegmentWithOptions($request, $runtime);
    }

    /**
     * @summary 恢复公共DNS服务
     *  *
     * @param ResumePdnsServiceRequest $request ResumePdnsServiceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumePdnsServiceResponse ResumePdnsServiceResponse
     */
    public function resumePdnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumePdnsService',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumePdnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 恢复公共DNS服务
     *  *
     * @param ResumePdnsServiceRequest $request ResumePdnsServiceRequest
     *
     * @return ResumePdnsServiceResponse ResumePdnsServiceResponse
     */
    public function resumePdnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumePdnsServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieves a domain name.
     *  *
     * @description To retrieve a domain name, you must verify a text (TXT) record. Therefore, before you call this API operation to retrieve a domain name, call the [GetTxtRecordForVerify](https://www.alibabacloud.com/help/zh/alibaba-cloud-dns/latest/generating-a-txt-record) operation to generate a TXT record.
     *  *
     * @param RetrieveDomainRequest $request RetrieveDomainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RetrieveDomainResponse RetrieveDomainResponse
     */
    public function retrieveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetrieveDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetrieveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Retrieves a domain name.
     *  *
     * @description To retrieve a domain name, you must verify a text (TXT) record. Therefore, before you call this API operation to retrieve a domain name, call the [GetTxtRecordForVerify](https://www.alibabacloud.com/help/zh/alibaba-cloud-dns/latest/generating-a-txt-record) operation to generate a TXT record.
     *  *
     * @param RetrieveDomainRequest $request RetrieveDomainRequest
     *
     * @return RetrieveDomainResponse RetrieveDomainResponse
     */
    public function retrieveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retrieveDomainWithOptions($request, $runtime);
    }

    /**
     * @param RollbackGtmRecoveryPlanRequest $request RollbackGtmRecoveryPlanRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackGtmRecoveryPlanResponse RollbackGtmRecoveryPlanResponse
     */
    public function rollbackGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackGtmRecoveryPlanRequest $request RollbackGtmRecoveryPlanRequest
     *
     * @return RollbackGtmRecoveryPlanResponse RollbackGtmRecoveryPlanResponse
     */
    public function rollbackGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables weighted round-robin based on the specified parameters.
     *  *
     * @param SetDNSSLBStatusRequest $request SetDNSSLBStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDNSSLBStatusResponse SetDNSSLBStatusResponse
     */
    public function setDNSSLBStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->open)) {
            $query['Open'] = $request->open;
        }
        if (!Utils::isUnset($request->subDomain)) {
            $query['SubDomain'] = $request->subDomain;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDNSSLBStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDNSSLBStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables weighted round-robin based on the specified parameters.
     *  *
     * @param SetDNSSLBStatusRequest $request SetDNSSLBStatusRequest
     *
     * @return SetDNSSLBStatusResponse SetDNSSLBStatusResponse
     */
    public function setDNSSLBStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDNSSLBStatusWithOptions($request, $runtime);
    }

    /**
     * @description ****
     *  *
     * @param SetDnsGtmAccessModeRequest $request SetDnsGtmAccessModeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDnsGtmAccessModeResponse SetDnsGtmAccessModeResponse
     */
    public function setDnsGtmAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessMode)) {
            $query['AccessMode'] = $request->accessMode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDnsGtmAccessMode',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDnsGtmAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description ****
     *  *
     * @param SetDnsGtmAccessModeRequest $request SetDnsGtmAccessModeRequest
     *
     * @return SetDnsGtmAccessModeResponse SetDnsGtmAccessModeResponse
     */
    public function setDnsGtmAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDnsGtmAccessModeWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the health check status of an address pool.
     *  *
     * @param SetDnsGtmMonitorStatusRequest $request SetDnsGtmMonitorStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDnsGtmMonitorStatusResponse SetDnsGtmMonitorStatusResponse
     */
    public function setDnsGtmMonitorStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorConfigId)) {
            $query['MonitorConfigId'] = $request->monitorConfigId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDnsGtmMonitorStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDnsGtmMonitorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the health check status of an address pool.
     *  *
     * @param SetDnsGtmMonitorStatusRequest $request SetDnsGtmMonitorStatusRequest
     *
     * @return SetDnsGtmMonitorStatusResponse SetDnsGtmMonitorStatusResponse
     */
    public function setDnsGtmMonitorStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDnsGtmMonitorStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the Domain Name System Security Extensions (DNSSEC) status of a domain name.
     *  *
     * @param SetDomainDnssecStatusRequest $request SetDomainDnssecStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainDnssecStatusResponse SetDomainDnssecStatusResponse
     */
    public function setDomainDnssecStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainDnssecStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainDnssecStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the Domain Name System Security Extensions (DNSSEC) status of a domain name.
     *  *
     * @param SetDomainDnssecStatusRequest $request SetDomainDnssecStatusRequest
     *
     * @return SetDomainDnssecStatusResponse SetDomainDnssecStatusResponse
     */
    public function setDomainDnssecStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainDnssecStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Specifies the status of a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param SetDomainRecordStatusRequest $request SetDomainRecordStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDomainRecordStatusResponse SetDomainRecordStatusResponse
     */
    public function setDomainRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDomainRecordStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDomainRecordStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Specifies the status of a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param SetDomainRecordStatusRequest $request SetDomainRecordStatusRequest
     *
     * @return SetDomainRecordStatusResponse SetDomainRecordStatusResponse
     */
    public function setDomainRecordStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainRecordStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetGtmAccessModeRequest $request SetGtmAccessModeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetGtmAccessModeResponse SetGtmAccessModeResponse
     */
    public function setGtmAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessMode)) {
            $query['AccessMode'] = $request->accessMode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGtmAccessMode',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGtmAccessModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGtmAccessModeRequest $request SetGtmAccessModeRequest
     *
     * @return SetGtmAccessModeResponse SetGtmAccessModeResponse
     */
    public function setGtmAccessMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGtmAccessModeWithOptions($request, $runtime);
    }

    /**
     * @param SetGtmMonitorStatusRequest $request SetGtmMonitorStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetGtmMonitorStatusResponse SetGtmMonitorStatusResponse
     */
    public function setGtmMonitorStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorConfigId)) {
            $query['MonitorConfigId'] = $request->monitorConfigId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGtmMonitorStatus',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGtmMonitorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGtmMonitorStatusRequest $request SetGtmMonitorStatusRequest
     *
     * @return SetGtmMonitorStatusResponse SetGtmMonitorStatusResponse
     */
    public function setGtmMonitorStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGtmMonitorStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 提交缓存刷新任务
     *  *
     * @param SubmitIspFlushCacheTaskRequest $request SubmitIspFlushCacheTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitIspFlushCacheTaskResponse SubmitIspFlushCacheTaskResponse
     */
    public function submitIspFlushCacheTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIspFlushCacheTask',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIspFlushCacheTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交缓存刷新任务
     *  *
     * @param SubmitIspFlushCacheTaskRequest $request SubmitIspFlushCacheTaskRequest
     *
     * @return SubmitIspFlushCacheTaskResponse SubmitIspFlushCacheTaskResponse
     */
    public function submitIspFlushCacheTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIspFlushCacheTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the access policy type for a Global Traffic Manager (GTM) instance.
     *  *
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request SwitchDnsGtmInstanceStrategyModeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse SwitchDnsGtmInstanceStrategyModeResponse
     */
    public function switchDnsGtmInstanceStrategyModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyMode)) {
            $query['StrategyMode'] = $request->strategyMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchDnsGtmInstanceStrategyMode',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchDnsGtmInstanceStrategyModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the access policy type for a Global Traffic Manager (GTM) instance.
     *  *
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request SwitchDnsGtmInstanceStrategyModeRequest
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse SwitchDnsGtmInstanceStrategyModeResponse
     */
    public function switchDnsGtmInstanceStrategyMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDnsGtmInstanceStrategyModeWithOptions($request, $runtime);
    }

    /**
     * @summary Adds and modifies a tag for a resource.
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'version'     => '2015-01-09',
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
     * @summary Adds and modifies a tag for a resource.
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
     * @summary Transfers multiple domain names from the current account to another account at a time.
     *  *
     * @param TransferDomainRequest $request TransferDomainRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferDomainResponse TransferDomainResponse
     */
    public function transferDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->targetUserId)) {
            $query['TargetUserId'] = $request->targetUserId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Transfers multiple domain names from the current account to another account at a time.
     *  *
     * @param TransferDomainRequest $request TransferDomainRequest
     *
     * @return TransferDomainResponse TransferDomainResponse
     */
    public function transferDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferDomainWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds one or more domain names from a paid Alibaba Cloud DNS instance based on the instance ID.
     *  *
     * @description A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call an API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call an API operation to bind only one domain name to the instance. However, if the instance that you want to bind to the desired domain name is already bound to a domain name, you can call this operation to unbind the original domain name from the instance and then bind the desired domain name to the instance.
     *  *
     * @param UnbindInstanceDomainsRequest $request UnbindInstanceDomainsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindInstanceDomainsResponse UnbindInstanceDomainsResponse
     */
    public function unbindInstanceDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindInstanceDomains',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindInstanceDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds one or more domain names from a paid Alibaba Cloud DNS instance based on the instance ID.
     *  *
     * @description A paid Alibaba Cloud DNS instance whose ID starts with dns is an instance of the new version. You can call an API operation to bind multiple domain names to the instance. If the upper limit is exceeded, an error message is returned.\\
     * A paid Alibaba Cloud DNS instance whose ID does not start with dns is an instance of the old version. You can call an API operation to bind only one domain name to the instance. However, if the instance that you want to bind to the desired domain name is already bound to a domain name, you can call this operation to unbind the original domain name from the instance and then bind the desired domain name to the instance.
     *  *
     * @param UnbindInstanceDomainsRequest $request UnbindInstanceDomainsRequest
     *
     * @return UnbindInstanceDomainsResponse UnbindInstanceDomainsResponse
     */
    public function unbindInstanceDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindInstanceDomainsWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from resources.
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
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
            'version'     => '2015-01-09',
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
     * @summary Removes tags from resources.
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
     * @summary 修改 AppKey 状态
     *  *
     * @param UpdateAppKeyStateRequest $request UpdateAppKeyStateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppKeyStateResponse UpdateAppKeyStateResponse
     */
    public function updateAppKeyStateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKeyId)) {
            $query['AppKeyId'] = $request->appKeyId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppKeyState',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppKeyStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改 AppKey 状态
     *  *
     * @param UpdateAppKeyStateRequest $request UpdateAppKeyStateRequest
     *
     * @return UpdateAppKeyStateResponse UpdateAppKeyStateResponse
     */
    public function updateAppKeyState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppKeyStateWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a custom line.
     *  *
     * @description In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *  *
     * @param UpdateCustomLineRequest $request UpdateCustomLineRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomLineResponse UpdateCustomLineResponse
     */
    public function updateCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipSegment)) {
            $query['IpSegment'] = $request->ipSegment;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lineId)) {
            $query['LineId'] = $request->lineId;
        }
        if (!Utils::isUnset($request->lineName)) {
            $query['LineName'] = $request->lineName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomLine',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a custom line.
     *  *
     * @description In each CIDR block, the end IP address must be greater than or equal to the start IP address.\\
     * The CIDR blocks that are specified for all custom lines of a domain name cannot be overlapped.
     *  *
     * @param UpdateCustomLineRequest $request UpdateCustomLineRequest
     *
     * @return UpdateCustomLineResponse UpdateCustomLineResponse
     */
    public function updateCustomLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomLineWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the weight of a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param UpdateDNSSLBWeightRequest $request UpdateDNSSLBWeightRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDNSSLBWeightResponse UpdateDNSSLBWeightResponse
     */
    public function updateDNSSLBWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->weight)) {
            $query['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDNSSLBWeight',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDNSSLBWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the weight of a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param UpdateDNSSLBWeightRequest $request UpdateDNSSLBWeightRequest
     *
     * @return UpdateDNSSLBWeightResponse UpdateDNSSLBWeightResponse
     */
    public function updateDNSSLBWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDNSSLBWeightWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDnsCacheDomainRequest $request UpdateDnsCacheDomainRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDnsCacheDomainResponse UpdateDnsCacheDomainResponse
     */
    public function updateDnsCacheDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheTtlMax)) {
            $query['CacheTtlMax'] = $request->cacheTtlMax;
        }
        if (!Utils::isUnset($request->cacheTtlMin)) {
            $query['CacheTtlMin'] = $request->cacheTtlMin;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceDnsServer)) {
            $query['SourceDnsServer'] = $request->sourceDnsServer;
        }
        if (!Utils::isUnset($request->sourceEdns)) {
            $query['SourceEdns'] = $request->sourceEdns;
        }
        if (!Utils::isUnset($request->sourceProtocol)) {
            $query['SourceProtocol'] = $request->sourceProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDnsCacheDomain',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDnsCacheDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDnsCacheDomainRequest $request UpdateDnsCacheDomainRequest
     *
     * @return UpdateDnsCacheDomainResponse UpdateDnsCacheDomainResponse
     */
    public function updateDnsCacheDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsCacheDomainWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDnsCacheDomainRemarkRequest $request UpdateDnsCacheDomainRemarkRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDnsCacheDomainRemarkResponse UpdateDnsCacheDomainRemarkResponse
     */
    public function updateDnsCacheDomainRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDnsCacheDomainRemark',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDnsCacheDomainRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDnsCacheDomainRemarkRequest $request UpdateDnsCacheDomainRemarkRequest
     *
     * @return UpdateDnsCacheDomainRemarkResponse UpdateDnsCacheDomainRemarkResponse
     */
    public function updateDnsCacheDomainRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsCacheDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an access policy.
     *  *
     * @param UpdateDnsGtmAccessStrategyRequest $request UpdateDnsGtmAccessStrategyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDnsGtmAccessStrategyResponse UpdateDnsGtmAccessStrategyResponse
     */
    public function updateDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessMode)) {
            $query['AccessMode'] = $request->accessMode;
        }
        if (!Utils::isUnset($request->defaultAddrPool)) {
            $query['DefaultAddrPool'] = $request->defaultAddrPool;
        }
        if (!Utils::isUnset($request->defaultAddrPoolType)) {
            $query['DefaultAddrPoolType'] = $request->defaultAddrPoolType;
        }
        if (!Utils::isUnset($request->defaultLatencyOptimization)) {
            $query['DefaultLatencyOptimization'] = $request->defaultLatencyOptimization;
        }
        if (!Utils::isUnset($request->defaultLbaStrategy)) {
            $query['DefaultLbaStrategy'] = $request->defaultLbaStrategy;
        }
        if (!Utils::isUnset($request->defaultMaxReturnAddrNum)) {
            $query['DefaultMaxReturnAddrNum'] = $request->defaultMaxReturnAddrNum;
        }
        if (!Utils::isUnset($request->defaultMinAvailableAddrNum)) {
            $query['DefaultMinAvailableAddrNum'] = $request->defaultMinAvailableAddrNum;
        }
        if (!Utils::isUnset($request->failoverAddrPool)) {
            $query['FailoverAddrPool'] = $request->failoverAddrPool;
        }
        if (!Utils::isUnset($request->failoverAddrPoolType)) {
            $query['FailoverAddrPoolType'] = $request->failoverAddrPoolType;
        }
        if (!Utils::isUnset($request->failoverLatencyOptimization)) {
            $query['FailoverLatencyOptimization'] = $request->failoverLatencyOptimization;
        }
        if (!Utils::isUnset($request->failoverLbaStrategy)) {
            $query['FailoverLbaStrategy'] = $request->failoverLbaStrategy;
        }
        if (!Utils::isUnset($request->failoverMaxReturnAddrNum)) {
            $query['FailoverMaxReturnAddrNum'] = $request->failoverMaxReturnAddrNum;
        }
        if (!Utils::isUnset($request->failoverMinAvailableAddrNum)) {
            $query['FailoverMinAvailableAddrNum'] = $request->failoverMinAvailableAddrNum;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDnsGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDnsGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an access policy.
     *  *
     * @param UpdateDnsGtmAccessStrategyRequest $request UpdateDnsGtmAccessStrategyRequest
     *
     * @return UpdateDnsGtmAccessStrategyResponse UpdateDnsGtmAccessStrategyResponse
     */
    public function updateDnsGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of address pools for a GTM instance.
     *  *
     * @param UpdateDnsGtmAddressPoolRequest $request UpdateDnsGtmAddressPoolRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDnsGtmAddressPoolResponse UpdateDnsGtmAddressPoolResponse
     */
    public function updateDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addr)) {
            $query['Addr'] = $request->addr;
        }
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lbaStrategy)) {
            $query['LbaStrategy'] = $request->lbaStrategy;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDnsGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDnsGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of address pools for a GTM instance.
     *  *
     * @param UpdateDnsGtmAddressPoolRequest $request UpdateDnsGtmAddressPoolRequest
     *
     * @return UpdateDnsGtmAddressPoolResponse UpdateDnsGtmAddressPoolResponse
     */
    public function updateDnsGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a Global Traffic Manager (GTM) instance.
     *  *
     * @param UpdateDnsGtmInstanceGlobalConfigRequest $request UpdateDnsGtmInstanceGlobalConfigRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDnsGtmInstanceGlobalConfigResponse UpdateDnsGtmInstanceGlobalConfigResponse
     */
    public function updateDnsGtmInstanceGlobalConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConfig)) {
            $query['AlertConfig'] = $request->alertConfig;
        }
        if (!Utils::isUnset($request->alertGroup)) {
            $query['AlertGroup'] = $request->alertGroup;
        }
        if (!Utils::isUnset($request->cnameType)) {
            $query['CnameType'] = $request->cnameType;
        }
        if (!Utils::isUnset($request->forceUpdate)) {
            $query['ForceUpdate'] = $request->forceUpdate;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->publicCnameMode)) {
            $query['PublicCnameMode'] = $request->publicCnameMode;
        }
        if (!Utils::isUnset($request->publicRr)) {
            $query['PublicRr'] = $request->publicRr;
        }
        if (!Utils::isUnset($request->publicUserDomainName)) {
            $query['PublicUserDomainName'] = $request->publicUserDomainName;
        }
        if (!Utils::isUnset($request->publicZoneName)) {
            $query['PublicZoneName'] = $request->publicZoneName;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDnsGtmInstanceGlobalConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDnsGtmInstanceGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a Global Traffic Manager (GTM) instance.
     *  *
     * @param UpdateDnsGtmInstanceGlobalConfigRequest $request UpdateDnsGtmInstanceGlobalConfigRequest
     *
     * @return UpdateDnsGtmInstanceGlobalConfigResponse UpdateDnsGtmInstanceGlobalConfigResponse
     */
    public function updateDnsGtmInstanceGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmInstanceGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a health check task.
     *  *
     * @param UpdateDnsGtmMonitorRequest $request UpdateDnsGtmMonitorRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDnsGtmMonitorResponse UpdateDnsGtmMonitorResponse
     */
    public function updateDnsGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCityNode)) {
            $query['IspCityNode'] = $request->ispCityNode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorConfigId)) {
            $query['MonitorConfigId'] = $request->monitorConfigId;
        }
        if (!Utils::isUnset($request->monitorExtendInfo)) {
            $query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDnsGtmMonitor',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDnsGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a health check task.
     *  *
     * @param UpdateDnsGtmMonitorRequest $request UpdateDnsGtmMonitorRequest
     *
     * @return UpdateDnsGtmMonitorResponse UpdateDnsGtmMonitorResponse
     */
    public function updateDnsGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDnsGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name of a domain name group based on the specified parameters.
     *  *
     * @param UpdateDomainGroupRequest $request UpdateDomainGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainGroupResponse UpdateDomainGroupResponse
     */
    public function updateDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomainGroup',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name of a domain name group based on the specified parameters.
     *  *
     * @param UpdateDomainGroupRequest $request UpdateDomainGroupRequest
     *
     * @return UpdateDomainGroupResponse UpdateDomainGroupResponse
     */
    public function updateDomainGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param UpdateDomainRecordRequest $request UpdateDomainRecordRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainRecordResponse UpdateDomainRecordResponse
     */
    public function updateDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->RR)) {
            $query['RR'] = $request->RR;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->TTL)) {
            $query['TTL'] = $request->TTL;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomainRecord',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param UpdateDomainRecordRequest $request UpdateDomainRecordRequest
     *
     * @return UpdateDomainRecordResponse UpdateDomainRecordResponse
     */
    public function updateDomainRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param UpdateDomainRecordRemarkRequest $request UpdateDomainRecordRemarkRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainRecordRemarkResponse UpdateDomainRecordRemarkResponse
     */
    public function updateDomainRecordRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomainRecordRemark',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainRecordRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a Domain Name System (DNS) record based on the specified parameters.
     *  *
     * @param UpdateDomainRecordRemarkRequest $request UpdateDomainRecordRemarkRequest
     *
     * @return UpdateDomainRecordRemarkResponse UpdateDomainRecordRemarkResponse
     */
    public function updateDomainRecordRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainRecordRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a domain name based on the specified parameters.
     *  *
     * @param UpdateDomainRemarkRequest $request UpdateDomainRemarkRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDomainRemarkResponse UpdateDomainRemarkResponse
     */
    public function updateDomainRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDomainRemark',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDomainRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a domain name based on the specified parameters.
     *  *
     * @param UpdateDomainRemarkRequest $request UpdateDomainRemarkRequest
     *
     * @return UpdateDomainRemarkResponse UpdateDomainRemarkResponse
     */
    public function updateDomainRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDomainRemarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmAccessStrategyRequest $request UpdateGtmAccessStrategyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGtmAccessStrategyResponse UpdateGtmAccessStrategyResponse
     */
    public function updateGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLines)) {
            $query['AccessLines'] = $request->accessLines;
        }
        if (!Utils::isUnset($request->defaultAddrPoolId)) {
            $query['DefaultAddrPoolId'] = $request->defaultAddrPoolId;
        }
        if (!Utils::isUnset($request->failoverAddrPoolId)) {
            $query['FailoverAddrPoolId'] = $request->failoverAddrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->strategyId)) {
            $query['StrategyId'] = $request->strategyId;
        }
        if (!Utils::isUnset($request->strategyName)) {
            $query['StrategyName'] = $request->strategyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGtmAccessStrategy',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGtmAccessStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGtmAccessStrategyRequest $request UpdateGtmAccessStrategyRequest
     *
     * @return UpdateGtmAccessStrategyResponse UpdateGtmAccessStrategyResponse
     */
    public function updateGtmAccessStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmAccessStrategyWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGtmAddressPoolRequest $request UpdateGtmAddressPoolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGtmAddressPoolResponse UpdateGtmAddressPoolResponse
     */
    public function updateGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addr)) {
            $query['Addr'] = $request->addr;
        }
        if (!Utils::isUnset($request->addrPoolId)) {
            $query['AddrPoolId'] = $request->addrPoolId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->minAvailableAddrNum)) {
            $query['MinAvailableAddrNum'] = $request->minAvailableAddrNum;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGtmAddressPool',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGtmAddressPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGtmAddressPoolRequest $request UpdateGtmAddressPoolRequest
     *
     * @return UpdateGtmAddressPoolResponse UpdateGtmAddressPoolResponse
     */
    public function updateGtmAddressPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmAddressPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a Global Traffic Manager (GTM) instance based on the specified parameters.
     *  *
     * @param UpdateGtmInstanceGlobalConfigRequest $request UpdateGtmInstanceGlobalConfigRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGtmInstanceGlobalConfigResponse UpdateGtmInstanceGlobalConfigResponse
     */
    public function updateGtmInstanceGlobalConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertGroup)) {
            $query['AlertGroup'] = $request->alertGroup;
        }
        if (!Utils::isUnset($request->cnameCustomDomainName)) {
            $query['CnameCustomDomainName'] = $request->cnameCustomDomainName;
        }
        if (!Utils::isUnset($request->cnameMode)) {
            $query['CnameMode'] = $request->cnameMode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lbaStrategy)) {
            $query['LbaStrategy'] = $request->lbaStrategy;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->userDomainName)) {
            $query['UserDomainName'] = $request->userDomainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGtmInstanceGlobalConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGtmInstanceGlobalConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a Global Traffic Manager (GTM) instance based on the specified parameters.
     *  *
     * @param UpdateGtmInstanceGlobalConfigRequest $request UpdateGtmInstanceGlobalConfigRequest
     *
     * @return UpdateGtmInstanceGlobalConfigResponse UpdateGtmInstanceGlobalConfigResponse
     */
    public function updateGtmInstanceGlobalConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmInstanceGlobalConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the health check configuration for an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param UpdateGtmMonitorRequest $request UpdateGtmMonitorRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGtmMonitorResponse UpdateGtmMonitorResponse
     */
    public function updateGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispCityNode)) {
            $query['IspCityNode'] = $request->ispCityNode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->monitorConfigId)) {
            $query['MonitorConfigId'] = $request->monitorConfigId;
        }
        if (!Utils::isUnset($request->monitorExtendInfo)) {
            $query['MonitorExtendInfo'] = $request->monitorExtendInfo;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGtmMonitor',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGtmMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the health check configuration for an address pool of a Global Traffic Manager (GTM) instance.
     *  *
     * @param UpdateGtmMonitorRequest $request UpdateGtmMonitorRequest
     *
     * @return UpdateGtmMonitorResponse UpdateGtmMonitorResponse
     */
    public function updateGtmMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmMonitorWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a disaster recovery plan for a Global Traffic Manager (GTM) instance.
     *  *
     * @param UpdateGtmRecoveryPlanRequest $request UpdateGtmRecoveryPlanRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGtmRecoveryPlanResponse UpdateGtmRecoveryPlanResponse
     */
    public function updateGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->faultAddrPool)) {
            $query['FaultAddrPool'] = $request->faultAddrPool;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recoveryPlanId)) {
            $query['RecoveryPlanId'] = $request->recoveryPlanId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGtmRecoveryPlan',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGtmRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a disaster recovery plan for a Global Traffic Manager (GTM) instance.
     *  *
     * @param UpdateGtmRecoveryPlanRequest $request UpdateGtmRecoveryPlanRequest
     *
     * @return UpdateGtmRecoveryPlanResponse UpdateGtmRecoveryPlanResponse
     */
    public function updateGtmRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGtmRecoveryPlanWithOptions($request, $runtime);
    }

    /**
     * @summary 修改缓存刷新套餐包配置
     *  *
     * @param UpdateIspFlushCacheInstanceConfigRequest $request UpdateIspFlushCacheInstanceConfigRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIspFlushCacheInstanceConfigResponse UpdateIspFlushCacheInstanceConfigResponse
     */
    public function updateIspFlushCacheInstanceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIspFlushCacheInstanceConfig',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIspFlushCacheInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改缓存刷新套餐包配置
     *  *
     * @param UpdateIspFlushCacheInstanceConfigRequest $request UpdateIspFlushCacheInstanceConfigRequest
     *
     * @return UpdateIspFlushCacheInstanceConfigResponse UpdateIspFlushCacheInstanceConfigResponse
     */
    public function updateIspFlushCacheInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIspFlushCacheInstanceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 检查实例主机名是否可添加
     *  *
     * @param ValidateDnsGtmCnameRrCanUseRequest $request ValidateDnsGtmCnameRrCanUseRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateDnsGtmCnameRrCanUseResponse ValidateDnsGtmCnameRrCanUseResponse
     */
    public function validateDnsGtmCnameRrCanUseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cnameMode)) {
            $query['CnameMode'] = $request->cnameMode;
        }
        if (!Utils::isUnset($request->cnameRr)) {
            $query['CnameRr'] = $request->cnameRr;
        }
        if (!Utils::isUnset($request->cnameType)) {
            $query['CnameType'] = $request->cnameType;
        }
        if (!Utils::isUnset($request->cnameZone)) {
            $query['CnameZone'] = $request->cnameZone;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateDnsGtmCnameRrCanUse',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateDnsGtmCnameRrCanUseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 检查实例主机名是否可添加
     *  *
     * @param ValidateDnsGtmCnameRrCanUseRequest $request ValidateDnsGtmCnameRrCanUseRequest
     *
     * @return ValidateDnsGtmCnameRrCanUseResponse ValidateDnsGtmCnameRrCanUseResponse
     */
    public function validateDnsGtmCnameRrCanUse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateDnsGtmCnameRrCanUseWithOptions($request, $runtime);
    }

    /**
     * @summary 验证公共DNS Udp Ip地址段
     *  *
     * @param ValidatePdnsUdpIpSegmentRequest $request ValidatePdnsUdpIpSegmentRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidatePdnsUdpIpSegmentResponse ValidatePdnsUdpIpSegmentResponse
     */
    public function validatePdnsUdpIpSegmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidatePdnsUdpIpSegment',
            'version'     => '2015-01-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidatePdnsUdpIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 验证公共DNS Udp Ip地址段
     *  *
     * @param ValidatePdnsUdpIpSegmentRequest $request ValidatePdnsUdpIpSegmentRequest
     *
     * @return ValidatePdnsUdpIpSegmentResponse ValidatePdnsUdpIpSegmentResponse
     */
    public function validatePdnsUdpIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validatePdnsUdpIpSegmentWithOptions($request, $runtime);
    }
}
