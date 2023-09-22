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
     * The operation that you want to perform. Set the value to AddCustomLine.
     *   *
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
     * The operation that you want to perform. Set the value to AddCustomLine.
     *   *
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
     * @param AddDnsCacheDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddDnsCacheDomainResponse
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
     * @param AddDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDnsGtmAccessStrategyResponse
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
     * @param AddDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDnsGtmAddressPoolResponse
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
     * ***
     *   *
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
     * ***
     *   *
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
     * You can check whether a domain name is valid based on the following topic:
     *   * [Domain name validity](https://www.alibabacloud.com/help/zh/doc-detail/67788.htm).
     *   *
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
     * You can check whether a domain name is valid based on the following topic:
     *   * [Domain name validity](https://www.alibabacloud.com/help/zh/doc-detail/67788.htm).
     *   *
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
     * @param AddDomainBackupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainBackupResponse
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
     * @param AddDomainGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddDomainGroupResponse
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
     * @param AddDomainRecordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainRecordResponse
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
     * @param AddGtmAccessStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddGtmAccessStrategyResponse
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
     * @param AddGtmAddressPoolRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddGtmAddressPoolResponse
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
     * @param AddGtmMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddGtmMonitorResponse
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
     * @param AddGtmRecoveryPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddGtmRecoveryPlanResponse
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
     * @param BindInstanceDomainsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindInstanceDomainsResponse
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
     * @param ChangeDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeDomainGroupResponse
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
     * >  You can call this operation to change the domain name for an Alibaba Cloud DNS instance to which a domain name is bound. You can also call this operation to bind a domain name to an Alibaba Cloud DNS instance to which no domain name is bound. If you need to unbind a domain name from an Alibaba Cloud DNS instance, you can call this operation. In this case, the NewDomain parameter must not be specified.
     *   *
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
     * >  You can call this operation to change the domain name for an Alibaba Cloud DNS instance to which a domain name is bound. You can also call this operation to bind a domain name to an Alibaba Cloud DNS instance to which no domain name is bound. If you need to unbind a domain name from an Alibaba Cloud DNS instance, you can call this operation. In this case, the NewDomain parameter must not be specified.
     *   *
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
     * @param CopyGtmConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyGtmConfigResponse
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
     * @param CreatePdnsAppKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePdnsAppKeyResponse
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
     * @param CreatePdnsUdpIpSegmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePdnsUdpIpSegmentResponse
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
     * @param DeleteCustomLinesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomLinesResponse
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
     * @param DeleteDnsCacheDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDnsCacheDomainResponse
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
     * @param DeleteDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDnsGtmAccessStrategyResponse
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
     * @param DeleteDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDnsGtmAddressPoolResponse
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
     * *   Given the unique nature of a HiChina domain name, you are not allowed to delete the HiChina domain name by calling the Alibaba Cloud DNS API.
     *   * *   If the system prompts that a domain name does not exist, it is an unregistered domain name, it does not exist under the account, or its format in the request parameters is incorrect.
     *   *
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
     * *   Given the unique nature of a HiChina domain name, you are not allowed to delete the HiChina domain name by calling the Alibaba Cloud DNS API.
     *   * *   If the system prompts that a domain name does not exist, it is an unregistered domain name, it does not exist under the account, or its format in the request parameters is incorrect.
     *   *
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
     * >  A domain name group can be deleted only when it contains no domain names. The default group cannot be deleted.
     *   *
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
     * >  A domain name group can be deleted only when it contains no domain names. The default group cannot be deleted.
     *   *
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
     * @param DeleteDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDomainRecordResponse
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
     * @param DeleteGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteGtmAccessStrategyResponse
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
     * @param DeleteGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGtmAddressPoolResponse
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
     * @param DeleteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGtmRecoveryPlanResponse
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
     * If the DNS records to be deleted contain locked DNS records, locked DNS records will not be deleted.
     *   *
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
     * If the DNS records to be deleted contain locked DNS records, locked DNS records will not be deleted.
     *   *
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
     * @param DescribeBatchResultCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBatchResultCountResponse
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
     * Before you call this operation, make sure that the batch tasks have been executed.
     *   *
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
     * Before you call this operation, make sure that the batch tasks have been executed.
     *   *
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
     * @param DescribeCustomLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCustomLineResponse
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
     * @param DescribeCustomLinesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeCustomLinesResponse
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
     * @param DescribeDNSSLBSubDomainsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDNSSLBSubDomainsResponse
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
     * @param DescribeDnsCacheDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDnsCacheDomainsResponse
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
     * @param DescribeDnsGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDnsGtmAccessStrategiesResponse
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
     * @param DescribeDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmAccessStrategyResponse
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
     * @param DescribeDnsGtmAccessStrategyAvailableConfigRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse
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
     * @param DescribeDnsGtmAddrAttributeInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponse
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
     * @param DescribeDnsGtmAddressPoolAvailableConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse
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
     * @param DescribeDnsGtmAvailableAlertGroupRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponse
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
     * @param DescribeDnsGtmInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDnsGtmInstanceResponse
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
     * @param DescribeDnsGtmInstanceAddressPoolRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse
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
     * @param DescribeDnsGtmInstanceAddressPoolsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponse
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
     * @param DescribeDnsGtmInstanceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmInstanceStatusResponse
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
     * @param DescribeDnsGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponse
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
     * @param DescribeDnsGtmInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDnsGtmInstancesResponse
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
     * @param DescribeDnsGtmLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDnsGtmLogsResponse
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
     * @param DescribeDnsGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse
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
     * @param DescribeDnsGtmMonitorConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDnsGtmMonitorConfigResponse
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
     * @param DescribeDnsProductInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDnsProductInstanceResponse
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
     * The number of the page to return. Pages start from page **1**. Default value: **1**.
     *   *
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
     * The number of the page to return. Pages start from page **1**. Default value: **1**.
     *   *
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
     * @param DescribeDohAccountStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDohAccountStatisticsResponse
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
     * @param DescribeDohDomainStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDohDomainStatisticsResponse
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
     * @param DescribeDohDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDohDomainStatisticsSummaryResponse
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
     * @param DescribeDohSubDomainStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDohSubDomainStatisticsResponse
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
     * @param DescribeDohSubDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDohSubDomainStatisticsSummaryResponse
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
     * @param DescribeDohUserInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDohUserInfoResponse
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
     * @param DescribeDomainDnssecInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainDnssecInfoResponse
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
     * @param DescribeDomainGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainGroupsResponse
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
     * In this example, the domain name is bound to an Alibaba Cloud DNS instance of Enterprise Ultimate Edition. For more information about valid lines, see the return values of the RecordLines parameter.
     *   *
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
     * In this example, the domain name is bound to an Alibaba Cloud DNS instance of Enterprise Ultimate Edition. For more information about valid lines, see the return values of the RecordLines parameter.
     *   *
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
     * @param DescribeDomainLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainLogsResponse
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
     * > This operation queries the authoritative servers of a domain name registry to obtain the name servers for a domain name. If the domain name is in an invalid state, such as serverHold or clientHold, an error may be returned.
     *   *
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
     * > This operation queries the authoritative servers of a domain name registry to obtain the name servers for a domain name. If the domain name is in an invalid state, such as serverHold or clientHold, an error may be returned.
     *   *
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
     * @param DescribeDomainRecordInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainRecordInfoResponse
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
     * *   You can specify the DomainName, PageNumber, and PageSize parameters to query the DNS records of a domain name.
     *   * *   You can also specify the RRKeyWord, TypeKeyWord, or ValueKeyWord parameter to query the DNS records that contain the specified keyword.
     *   * *   By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     *   *
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
     * *   You can specify the DomainName, PageNumber, and PageSize parameters to query the DNS records of a domain name.
     *   * *   You can also specify the RRKeyWord, TypeKeyWord, or ValueKeyWord parameter to query the DNS records that contain the specified keyword.
     *   * *   By default, the DNS records are sorted in reverse chronological order based on the time when they were added.
     *   *
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
     * @param DescribeDomainResolveStatisticsSummaryRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeDomainResolveStatisticsSummaryResponse
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
     * Real-time data is collected per hour.
     *   *
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
     * Real-time data is collected per hour.
     *   *
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
     * @param DescribeDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDomainStatisticsSummaryResponse
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
     * *   You can specify the PageNumber and PageSize parameters to query domain names.
     *   * *   You can specify the KeyWord parameter to query domain names that contain the specified keyword.
     *   * *   By default, the domain names in a list are sorted in descending order of the time they were added.
     *   * *   You can specify the GroupId parameter. If you do not specify this parameter, all domain names are queried by default.
     *   *
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
     * *   You can specify the PageNumber and PageSize parameters to query domain names.
     *   * *   You can specify the KeyWord parameter to query domain names that contain the specified keyword.
     *   * *   By default, the domain names in a list are sorted in descending order of the time they were added.
     *   * *   You can specify the GroupId parameter. If you do not specify this parameter, all domain names are queried by default.
     *   *
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
     * @param DescribeGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeGtmAccessStrategiesResponse
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
     * @param DescribeGtmAccessStrategyRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGtmAccessStrategyResponse
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
     * @param DescribeGtmAccessStrategyAvailableConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponse
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
     * @param DescribeGtmAvailableAlertGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmAvailableAlertGroupResponse
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
     * @param DescribeGtmInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeGtmInstanceResponse
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
     * @param DescribeGtmInstanceAddressPoolRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmInstanceAddressPoolResponse
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
     * @param DescribeGtmInstanceAddressPoolsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeGtmInstanceAddressPoolsResponse
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
     * @param DescribeGtmInstanceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGtmInstanceStatusResponse
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
     * @param DescribeGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmInstanceSystemCnameResponse
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
     * @param DescribeGtmInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGtmInstancesResponse
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
     * @param DescribeGtmLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeGtmLogsResponse
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
     * @param DescribeGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeGtmMonitorAvailableConfigResponse
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
     * @param DescribeGtmMonitorConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGtmMonitorConfigResponse
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
     * @param DescribeGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGtmRecoveryPlanResponse
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
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
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
     * @param DescribeGtmRecoveryPlansRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGtmRecoveryPlansResponse
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
     * @param DescribeInstanceDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDomainsResponse
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
     * @param DescribeIspFlushCacheInstancesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeIspFlushCacheInstancesResponse
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
     * @param DescribeIspFlushCacheRemainQuotaRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeIspFlushCacheRemainQuotaResponse
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
     * @param DescribeIspFlushCacheTaskRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIspFlushCacheTaskResponse
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
     * @param DescribeIspFlushCacheTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeIspFlushCacheTasksResponse
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
     * @param DescribePdnsAccountSummaryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribePdnsAccountSummaryResponse
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
     * @param DescribePdnsAppKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePdnsAppKeyResponse
     */
    public function describePdnsAppKeyWithOptions($request, $runtime)
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
     * @param DescribePdnsAppKeysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePdnsAppKeysResponse
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
     * @param DescribePdnsOperateLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePdnsOperateLogsResponse
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
     * @param DescribePdnsRequestStatisticRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePdnsRequestStatisticResponse
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
     * @param DescribePdnsRequestStatisticsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribePdnsRequestStatisticsResponse
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
     * @param DescribePdnsThreatLogsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePdnsThreatLogsResponse
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
     * @param DescribePdnsThreatStatisticRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePdnsThreatStatisticResponse
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
     * @param DescribePdnsThreatStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePdnsThreatStatisticsResponse
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
     * @param DescribePdnsUdpIpSegmentsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePdnsUdpIpSegmentsResponse
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
     * @param DescribePdnsUserInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePdnsUserInfoResponse
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
     * @param DescribeRecordLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordLogsResponse
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
     * @param DescribeRecordResolveStatisticsSummaryRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeRecordResolveStatisticsSummaryResponse
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
     * Real-time data is collected per hour.
     *   *
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
     * Real-time data is collected per hour.
     *   *
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
     * @param DescribeRecordStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecordStatisticsSummaryResponse
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
     * @param DescribeSubDomainRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSubDomainRecordsResponse
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
     * @param DescribeSupportLinesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSupportLinesResponse
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
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
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
     * @param DescribeTransferDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTransferDomainsResponse
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
     * @param ExecuteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExecuteGtmRecoveryPlanResponse
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
     * @param GetMainDomainNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMainDomainNameResponse
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
     * @param GetTxtRecordForVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTxtRecordForVerifyResponse
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
     * *   Set ResourceId.N or Tag.N that consists of Tag.N.Key and Tag.N.Value in the request to specify the object to be queried.
     *   * *   Tag.N is a resource tag that consists of a key-value pair. If you set only Tag.N.Key, all tag values that are assigned to the specified key are returned. If you set only Tag.N.Value, an error message is returned.
     *   * *   If you set both Tag.N and ResourceId.N to filter tags, ResourceId.N must match all specified key-value pairs.
     *   * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *   *
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
     * *   Set ResourceId.N or Tag.N that consists of Tag.N.Key and Tag.N.Value in the request to specify the object to be queried.
     *   * *   Tag.N is a resource tag that consists of a key-value pair. If you set only Tag.N.Key, all tag values that are assigned to the specified key are returned. If you set only Tag.N.Value, an error message is returned.
     *   * *   If you set both Tag.N and ResourceId.N to filter tags, ResourceId.N must match all specified key-value pairs.
     *   * *   If you specify multiple key-value pairs, resources that contain these key-value pairs are returned.
     *   *
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
     * If the operation succeeds, the name of the DNS server changes to that of an Alibaba Cloud DNS server (ending with hichina.com).
     *   * >  Before you call this operation, make sure that your domain name has been registered with Alibaba Cloud and the DNS server in use is not an Alibaba Cloud DNS server.
     *   *
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
     * If the operation succeeds, the name of the DNS server changes to that of an Alibaba Cloud DNS server (ending with hichina.com).
     *   * >  Before you call this operation, make sure that your domain name has been registered with Alibaba Cloud and the DNS server in use is not an Alibaba Cloud DNS server.
     *   *
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
     * @param MoveDomainResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return MoveDomainResourceGroupResponse
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
     * @param MoveGtmResourceGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MoveGtmResourceGroupResponse
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
     * @param OperateBatchDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OperateBatchDomainResponse
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
     * @param PausePdnsServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PausePdnsServiceResponse
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
     * @param PreviewGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreviewGtmRecoveryPlanResponse
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
     * @param RemovePdnsAppKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemovePdnsAppKeyResponse
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
     * @param RemovePdnsUdpIpSegmentRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemovePdnsUdpIpSegmentResponse
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
     * @param ResumePdnsServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResumePdnsServiceResponse
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
     * @param RetrieveDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RetrieveDomainResponse
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
     * @param RollbackGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackGtmRecoveryPlanResponse
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
     * @param SetDNSSLBStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetDNSSLBStatusResponse
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
     * ****
     *   *
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
     * ****
     *   *
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
     * @param SetDnsGtmMonitorStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDnsGtmMonitorStatusResponse
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
     * @param SetDomainDnssecStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainDnssecStatusResponse
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
     * @param SetDomainRecordStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainRecordStatusResponse
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
     * @param SetGtmAccessModeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetGtmAccessModeResponse
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
     * @param SetGtmMonitorStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetGtmMonitorStatusResponse
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
     * @param SubmitIspFlushCacheTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitIspFlushCacheTaskResponse
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
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
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
     * @param TransferDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TransferDomainResponse
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
     * @param UnbindInstanceDomainsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindInstanceDomainsResponse
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
     * @param UpdateAppKeyStateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAppKeyStateResponse
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
     * In each CIDR block, the end IP address must be greater than or equal to the start IP address.
     *   * The CIDR blocks that are specified for all custom lines of a domain name cannot intersect.
     *   *
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
     * In each CIDR block, the end IP address must be greater than or equal to the start IP address.
     *   * The CIDR blocks that are specified for all custom lines of a domain name cannot intersect.
     *   *
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
     * @param UpdateDNSSLBWeightRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDNSSLBWeightResponse
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
     * @param UpdateDnsCacheDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDnsCacheDomainResponse
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
     * @param UpdateDnsCacheDomainRemarkRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsCacheDomainRemarkResponse
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
     * @param UpdateDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsGtmAccessStrategyResponse
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
     * @param UpdateDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDnsGtmAddressPoolResponse
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
     * @param UpdateDnsGtmInstanceGlobalConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateDnsGtmInstanceGlobalConfigResponse
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
     * @param UpdateDnsGtmMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDnsGtmMonitorResponse
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
     * @param UpdateDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDomainGroupResponse
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
     * @param UpdateDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDomainRecordResponse
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
     * @param UpdateDomainRecordRemarkRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDomainRecordRemarkResponse
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
     * @param UpdateDomainRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDomainRemarkResponse
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
     * @param UpdateGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateGtmAccessStrategyResponse
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
     * @param UpdateGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateGtmAddressPoolResponse
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
     * @param UpdateGtmInstanceGlobalConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGtmInstanceGlobalConfigResponse
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
     * @param UpdateGtmMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateGtmMonitorResponse
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
     * @param UpdateGtmRecoveryPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateGtmRecoveryPlanResponse
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
     * @param UpdateIspFlushCacheInstanceConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateIspFlushCacheInstanceConfigResponse
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
     * @param ValidateDnsGtmCnameRrCanUseRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ValidateDnsGtmCnameRrCanUseResponse
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
     * @param ValidatePdnsUdpIpSegmentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ValidatePdnsUdpIpSegmentResponse
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
