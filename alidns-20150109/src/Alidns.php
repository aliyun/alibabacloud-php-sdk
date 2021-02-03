<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse;
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
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Alidns extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'alidns.ap-northeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'dns.aliyuncs.com',
            'ap-south-1'                  => 'alidns.ap-south-1.aliyuncs.com',
            'ap-southeast-1'              => 'alidns.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'alidns.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'alidns.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'              => 'alidns.ap-southeast-5.aliyuncs.com',
            'cn-beijing'                  => 'alidns.cn-beijing.aliyuncs.com',
            'cn-beijing-finance-1'        => 'dns.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'dns.aliyuncs.com',
            'cn-beijing-gov-1'            => 'dns.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'dns.aliyuncs.com',
            'cn-chengdu'                  => 'alidns.cn-chengdu.aliyuncs.com',
            'cn-edge-1'                   => 'dns.aliyuncs.com',
            'cn-fujian'                   => 'dns.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'dns.aliyuncs.com',
            'cn-hangzhou'                 => 'alidns.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'dns.aliyuncs.com',
            'cn-hangzhou-finance'         => 'alidns.cn-hangzhou-finance.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dns.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dns.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dns.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dns.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'dns.aliyuncs.com',
            'cn-hongkong'                 => 'alidns.cn-hongkong.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'dns.aliyuncs.com',
            'cn-huhehaote'                => 'alidns.cn-huhehaote.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'dns.aliyuncs.com',
            'cn-north-2-gov-1'            => 'alidns.cn-north-2-gov-1.aliyuncs.com',
            'cn-qingdao'                  => 'dns.aliyuncs.com',
            'cn-qingdao-nebula'           => 'dns.aliyuncs.com',
            'cn-shanghai'                 => 'alidns.cn-shanghai.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'dns.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'dns.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'alidns.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai-inner'           => 'dns.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dns.aliyuncs.com',
            'cn-shenzhen'                 => 'alidns.cn-shenzhen.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'alidns.cn-shenzhen-finance-1.aliyuncs.com',
            'cn-shenzhen-inner'           => 'dns.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'dns.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'dns.aliyuncs.com',
            'cn-wuhan'                    => 'dns.aliyuncs.com',
            'cn-wulanchabu'               => 'dns.aliyuncs.com',
            'cn-yushanfang'               => 'dns.aliyuncs.com',
            'cn-zhangbei'                 => 'dns.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'dns.aliyuncs.com',
            'cn-zhangjiakou'              => 'alidns.cn-zhangjiakou.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'dns.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'dns.aliyuncs.com',
            'eu-central-1'                => 'alidns.eu-central-1.aliyuncs.com',
            'eu-west-1'                   => 'alidns.eu-west-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'dns.aliyuncs.com',
            'me-east-1'                   => 'alidns.me-east-1.aliyuncs.com',
            'rus-west-1-pop'              => 'dns.aliyuncs.com',
            'us-east-1'                   => 'alidns.us-east-1.aliyuncs.com',
            'us-west-1'                   => 'alidns.us-west-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alidns', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

        return DescribeDnsCacheDomainsResponse::fromMap($this->doRequest('DescribeDnsCacheDomains', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param UpdateDnsCacheDomainRemarkRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsCacheDomainRemarkResponse
     */
    public function updateDnsCacheDomainRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDnsCacheDomainRemarkResponse::fromMap($this->doRequest('UpdateDnsCacheDomainRemark', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param UpdateDnsCacheDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDnsCacheDomainResponse
     */
    public function updateDnsCacheDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDnsCacheDomainResponse::fromMap($this->doRequest('UpdateDnsCacheDomain', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param DeleteDnsCacheDomainRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDnsCacheDomainResponse
     */
    public function deleteDnsCacheDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDnsCacheDomainResponse::fromMap($this->doRequest('DeleteDnsCacheDomain', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param AddDnsCacheDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddDnsCacheDomainResponse
     */
    public function addDnsCacheDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDnsCacheDomainResponse::fromMap($this->doRequest('AddDnsCacheDomain', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDnsGtmMonitorAvailableConfigResponse
     */
    public function describeDnsGtmMonitorAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmMonitorAvailableConfigResponse::fromMap($this->doRequest('DescribeDnsGtmMonitorAvailableConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDnsGtmMonitorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDnsGtmMonitorResponse
     */
    public function updateDnsGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDnsGtmMonitorResponse::fromMap($this->doRequest('UpdateDnsGtmMonitor', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDnsGtmAddressPoolResponse
     */
    public function deleteDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDnsGtmAddressPoolResponse::fromMap($this->doRequest('DeleteDnsGtmAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetDnsGtmMonitorStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDnsGtmMonitorStatusResponse
     */
    public function setDnsGtmMonitorStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDnsGtmMonitorStatusResponse::fromMap($this->doRequest('SetDnsGtmMonitorStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDnsGtmMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddDnsGtmMonitorResponse
     */
    public function addDnsGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDnsGtmMonitorResponse::fromMap($this->doRequest('AddDnsGtmMonitor', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDnsGtmInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDnsGtmInstancesResponse
     */
    public function describeDnsGtmInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmInstancesResponse::fromMap($this->doRequest('DescribeDnsGtmInstances', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDnsGtmInstanceResponse
     */
    public function describeDnsGtmInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmInstanceResponse::fromMap($this->doRequest('DescribeDnsGtmInstance', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmAccessStrategyResponse
     */
    public function describeDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmAccessStrategyResponse::fromMap($this->doRequest('DescribeDnsGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmAddrAttributeInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDnsGtmAddrAttributeInfoResponse
     */
    public function describeDnsGtmAddrAttributeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmAddrAttributeInfoResponse::fromMap($this->doRequest('DescribeDnsGtmAddrAttributeInfo', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDnsGtmLogsResponse
     */
    public function describeDnsGtmLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmLogsResponse::fromMap($this->doRequest('DescribeDnsGtmLogs', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmAccessStrategyAvailableConfigRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeDnsGtmAccessStrategyAvailableConfigResponse
     */
    public function describeDnsGtmAccessStrategyAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmAccessStrategyAvailableConfigResponse::fromMap($this->doRequest('DescribeDnsGtmAccessStrategyAvailableConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmInstanceAddressPoolRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponse
     */
    public function describeDnsGtmInstanceAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmInstanceAddressPoolResponse::fromMap($this->doRequest('DescribeDnsGtmInstanceAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmAddressPoolAvailableConfigRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse
     */
    public function describeDnsGtmAddressPoolAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmAddressPoolAvailableConfigResponse::fromMap($this->doRequest('DescribeDnsGtmAddressPoolAvailableConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDnsGtmAddressPoolResponse
     */
    public function updateDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDnsGtmAddressPoolResponse::fromMap($this->doRequest('UpdateDnsGtmAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return UpdateDnsGtmInstanceGlobalConfigResponse::fromMap($this->doRequest('UpdateDnsGtmInstanceGlobalConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetDnsGtmAccessModeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetDnsGtmAccessModeResponse
     */
    public function setDnsGtmAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDnsGtmAccessModeResponse::fromMap($this->doRequest('SetDnsGtmAccessMode', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDnsGtmAccessStrategyResponse
     */
    public function deleteDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDnsGtmAccessStrategyResponse::fromMap($this->doRequest('DeleteDnsGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse
     */
    public function switchDnsGtmInstanceStrategyModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SwitchDnsGtmInstanceStrategyModeResponse::fromMap($this->doRequest('SwitchDnsGtmInstanceStrategyMode', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmAvailableAlertGroupRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmAvailableAlertGroupResponse
     */
    public function describeDnsGtmAvailableAlertGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmAvailableAlertGroupResponse::fromMap($this->doRequest('DescribeDnsGtmAvailableAlertGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDnsGtmAccessStrategyResponse
     */
    public function addDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDnsGtmAccessStrategyResponse::fromMap($this->doRequest('AddDnsGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDnsGtmAccessStrategiesResponse
     */
    public function describeDnsGtmAccessStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmAccessStrategiesResponse::fromMap($this->doRequest('DescribeDnsGtmAccessStrategies', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmInstanceAddressPoolsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDnsGtmInstanceAddressPoolsResponse
     */
    public function describeDnsGtmInstanceAddressPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmInstanceAddressPoolsResponse::fromMap($this->doRequest('DescribeDnsGtmInstanceAddressPools', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDnsGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddDnsGtmAddressPoolResponse
     */
    public function addDnsGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDnsGtmAddressPoolResponse::fromMap($this->doRequest('AddDnsGtmAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmMonitorConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDnsGtmMonitorConfigResponse
     */
    public function describeDnsGtmMonitorConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmMonitorConfigResponse::fromMap($this->doRequest('DescribeDnsGtmMonitorConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsGtmAccessStrategyResponse
     */
    public function updateDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDnsGtmAccessStrategyResponse::fromMap($this->doRequest('UpdateDnsGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponse
     */
    public function describeDnsGtmInstanceSystemCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmInstanceSystemCnameResponse::fromMap($this->doRequest('DescribeDnsGtmInstanceSystemCname', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsGtmInstanceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmInstanceStatusResponse
     */
    public function describeDnsGtmInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsGtmInstanceStatusResponse::fromMap($this->doRequest('DescribeDnsGtmInstanceStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDohDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDohDomainStatisticsSummaryResponse
     */
    public function describeDohDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDohDomainStatisticsSummaryResponse::fromMap($this->doRequest('DescribeDohDomainStatisticsSummary', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDohAccountStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDohAccountStatisticsResponse
     */
    public function describeDohAccountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDohAccountStatisticsResponse::fromMap($this->doRequest('DescribeDohAccountStatistics', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDohSubDomainStatisticsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDohSubDomainStatisticsResponse
     */
    public function describeDohSubDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDohSubDomainStatisticsResponse::fromMap($this->doRequest('DescribeDohSubDomainStatistics', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeDohSubDomainStatisticsSummaryResponse::fromMap($this->doRequest('DescribeDohSubDomainStatisticsSummary', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDohDomainStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDohDomainStatisticsResponse
     */
    public function describeDohDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDohDomainStatisticsResponse::fromMap($this->doRequest('DescribeDohDomainStatistics', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDohUserInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDohUserInfoResponse
     */
    public function describeDohUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDohUserInfoResponse::fromMap($this->doRequest('DescribeDohUserInfo', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeTagsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTagsResponse::fromMap($this->doRequest('DescribeTags', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CopyGtmConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyGtmConfigResponse
     */
    public function copyGtmConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CopyGtmConfigResponse::fromMap($this->doRequest('CopyGtmConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainDnssecInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainDnssecInfoResponse
     */
    public function describeDomainDnssecInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainDnssecInfoResponse::fromMap($this->doRequest('DescribeDomainDnssecInfo', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetDomainDnssecStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainDnssecStatusResponse
     */
    public function setDomainDnssecStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDomainDnssecStatusResponse::fromMap($this->doRequest('SetDomainDnssecStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param TransferDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TransferDomainResponse
     */
    public function transferDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TransferDomainResponse::fromMap($this->doRequest('TransferDomain', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeTransferDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTransferDomainsResponse
     */
    public function describeTransferDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeTransferDomainsResponse::fromMap($this->doRequest('DescribeTransferDomains', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDomainBackupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainBackupResponse
     */
    public function addDomainBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDomainBackupResponse::fromMap($this->doRequest('AddDomainBackup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param RetrieveDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RetrieveDomainResponse
     */
    public function retrieveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RetrieveDomainResponse::fromMap($this->doRequest('RetrieveDomain', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeGtmRecoveryPlanResponse
     */
    public function describeGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmRecoveryPlanResponse::fromMap($this->doRequest('DescribeGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddGtmRecoveryPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddGtmRecoveryPlanResponse
     */
    public function addGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddGtmRecoveryPlanResponse::fromMap($this->doRequest('AddGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateGtmRecoveryPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateGtmRecoveryPlanResponse
     */
    public function updateGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateGtmRecoveryPlanResponse::fromMap($this->doRequest('UpdateGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteGtmRecoveryPlanResponse
     */
    public function deleteGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteGtmRecoveryPlanResponse::fromMap($this->doRequest('DeleteGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmRecoveryPlansRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGtmRecoveryPlansResponse
     */
    public function describeGtmRecoveryPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmRecoveryPlansResponse::fromMap($this->doRequest('DescribeGtmRecoveryPlans', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmRecoveryPlanAvailableConfigRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeGtmRecoveryPlanAvailableConfigResponse
     */
    public function describeGtmRecoveryPlanAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmRecoveryPlanAvailableConfigResponse::fromMap($this->doRequest('DescribeGtmRecoveryPlanAvailableConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ExecuteGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExecuteGtmRecoveryPlanResponse
     */
    public function executeGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExecuteGtmRecoveryPlanResponse::fromMap($this->doRequest('ExecuteGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param RollbackGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackGtmRecoveryPlanResponse
     */
    public function rollbackGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RollbackGtmRecoveryPlanResponse::fromMap($this->doRequest('RollbackGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param PreviewGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreviewGtmRecoveryPlanResponse
     */
    public function previewGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PreviewGtmRecoveryPlanResponse::fromMap($this->doRequest('PreviewGtmRecoveryPlan', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param GetTxtRecordForVerifyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTxtRecordForVerifyResponse
     */
    public function getTxtRecordForVerifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetTxtRecordForVerifyResponse::fromMap($this->doRequest('GetTxtRecordForVerify', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainStatisticsResponse
     */
    public function describeDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainStatisticsResponse::fromMap($this->doRequest('DescribeDomainStatistics', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeRecordStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecordStatisticsResponse
     */
    public function describeRecordStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordStatisticsResponse::fromMap($this->doRequest('DescribeRecordStatistics', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param MoveDomainResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return MoveDomainResourceGroupResponse
     */
    public function moveDomainResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return MoveDomainResourceGroupResponse::fromMap($this->doRequest('MoveDomainResourceGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return MoveGtmResourceGroupResponse::fromMap($this->doRequest('MoveGtmResourceGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmInstanceSystemCnameRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeGtmInstanceSystemCnameResponse
     */
    public function describeGtmInstanceSystemCnameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmInstanceSystemCnameResponse::fromMap($this->doRequest('DescribeGtmInstanceSystemCname', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeInstanceDomainsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceDomainsResponse
     */
    public function describeInstanceDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInstanceDomainsResponse::fromMap($this->doRequest('DescribeInstanceDomains', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param BindInstanceDomainsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindInstanceDomainsResponse
     */
    public function bindInstanceDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return BindInstanceDomainsResponse::fromMap($this->doRequest('BindInstanceDomains', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UnbindInstanceDomainsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindInstanceDomainsResponse
     */
    public function unbindInstanceDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnbindInstanceDomainsResponse::fromMap($this->doRequest('UnbindInstanceDomains', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateCustomLineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCustomLineResponse
     */
    public function updateCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateCustomLineResponse::fromMap($this->doRequest('UpdateCustomLine', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param AddCustomLineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddCustomLineResponse
     */
    public function addCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddCustomLineResponse::fromMap($this->doRequest('AddCustomLine', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteCustomLinesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomLinesResponse
     */
    public function deleteCustomLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCustomLinesResponse::fromMap($this->doRequest('DeleteCustomLines', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeCustomLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCustomLineResponse
     */
    public function describeCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCustomLineResponse::fromMap($this->doRequest('DescribeCustomLine', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeCustomLinesResponse::fromMap($this->doRequest('DescribeCustomLines', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDomainStatisticsSummaryResponse
     */
    public function describeDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainStatisticsSummaryResponse::fromMap($this->doRequest('DescribeDomainStatisticsSummary', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRecordStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecordStatisticsSummaryResponse
     */
    public function describeRecordStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordStatisticsSummaryResponse::fromMap($this->doRequest('DescribeRecordStatisticsSummary', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param OperateBatchDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OperateBatchDomainResponse
     */
    public function operateBatchDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return OperateBatchDomainResponse::fromMap($this->doRequest('OperateBatchDomain', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeBatchResultDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBatchResultDetailResponse
     */
    public function describeBatchResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBatchResultDetailResponse::fromMap($this->doRequest('DescribeBatchResultDetail', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeBatchResultCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBatchResultCountResponse
     */
    public function describeBatchResultCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBatchResultCountResponse::fromMap($this->doRequest('DescribeBatchResultCount', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetGtmAccessModeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetGtmAccessModeResponse
     */
    public function setGtmAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetGtmAccessModeResponse::fromMap($this->doRequest('SetGtmAccessMode', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return SetGtmMonitorStatusResponse::fromMap($this->doRequest('SetGtmMonitorStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateGtmInstanceGlobalConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGtmInstanceGlobalConfigResponse
     */
    public function updateGtmInstanceGlobalConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateGtmInstanceGlobalConfigResponse::fromMap($this->doRequest('UpdateGtmInstanceGlobalConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeGtmLogsResponse
     */
    public function describeGtmLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmLogsResponse::fromMap($this->doRequest('DescribeGtmLogs', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteGtmAccessStrategyResponse
     */
    public function deleteGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteGtmAccessStrategyResponse::fromMap($this->doRequest('DeleteGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddGtmMonitorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddGtmMonitorResponse
     */
    public function addGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddGtmMonitorResponse::fromMap($this->doRequest('AddGtmMonitor', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddGtmAddressPoolRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddGtmAddressPoolResponse
     */
    public function addGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddGtmAddressPoolResponse::fromMap($this->doRequest('AddGtmAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddGtmAccessStrategyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddGtmAccessStrategyResponse
     */
    public function addGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddGtmAccessStrategyResponse::fromMap($this->doRequest('AddGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGtmInstancesResponse
     */
    public function describeGtmInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmInstancesResponse::fromMap($this->doRequest('DescribeGtmInstances', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteGtmAddressPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteGtmAddressPoolResponse
     */
    public function deleteGtmAddressPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteGtmAddressPoolResponse::fromMap($this->doRequest('DeleteGtmAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeGtmAccessStrategiesResponse
     */
    public function describeGtmAccessStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmAccessStrategiesResponse::fromMap($this->doRequest('DescribeGtmAccessStrategies', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmAccessStrategyResponse::fromMap($this->doRequest('DescribeGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmAccessStrategyAvailableConfigResponse::fromMap($this->doRequest('DescribeGtmAccessStrategyAvailableConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmAvailableAlertGroupResponse::fromMap($this->doRequest('DescribeGtmAvailableAlertGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmInstanceResponse::fromMap($this->doRequest('DescribeGtmInstance', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmInstanceAddressPoolResponse::fromMap($this->doRequest('DescribeGtmInstanceAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmInstanceAddressPoolsResponse::fromMap($this->doRequest('DescribeGtmInstanceAddressPools', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmInstanceStatusResponse::fromMap($this->doRequest('DescribeGtmInstanceStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeGtmMonitorAvailableConfigRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeGtmMonitorAvailableConfigResponse
     */
    public function describeGtmMonitorAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGtmMonitorAvailableConfigResponse::fromMap($this->doRequest('DescribeGtmMonitorAvailableConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return DescribeGtmMonitorConfigResponse::fromMap($this->doRequest('DescribeGtmMonitorConfig', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateGtmAccessStrategyResponse
     */
    public function updateGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateGtmAccessStrategyResponse::fromMap($this->doRequest('UpdateGtmAccessStrategy', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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

        return UpdateGtmAddressPoolResponse::fromMap($this->doRequest('UpdateGtmAddressPool', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateGtmMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateGtmMonitorResponse
     */
    public function updateGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateGtmMonitorResponse::fromMap($this->doRequest('UpdateGtmMonitor', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDomainRemarkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDomainRemarkResponse
     */
    public function updateDomainRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDomainRemarkResponse::fromMap($this->doRequest('UpdateDomainRemark', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDomainRecordRemarkRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateDomainRecordRemarkResponse
     */
    public function updateDomainRecordRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDomainRecordRemarkResponse::fromMap($this->doRequest('UpdateDomainRecordRemark', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeSupportLinesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSupportLinesResponse
     */
    public function describeSupportLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSupportLinesResponse::fromMap($this->doRequest('DescribeSupportLines', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainNsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDomainNsResponse
     */
    public function describeDomainNsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainNsResponse::fromMap($this->doRequest('DescribeDomainNs', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDnsProductInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDnsProductInstanceResponse
     */
    public function describeDnsProductInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsProductInstanceResponse::fromMap($this->doRequest('DescribeDnsProductInstance', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDomainRecordResponse
     */
    public function updateDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDomainRecordResponse::fromMap($this->doRequest('UpdateDomainRecord', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param UpdateDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDomainGroupResponse
     */
    public function updateDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDomainGroupResponse::fromMap($this->doRequest('UpdateDomainGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param UpdateDNSSLBWeightRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDNSSLBWeightResponse
     */
    public function updateDNSSLBWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateDNSSLBWeightResponse::fromMap($this->doRequest('UpdateDNSSLBWeight', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetDomainRecordStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainRecordStatusResponse
     */
    public function setDomainRecordStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDomainRecordStatusResponse::fromMap($this->doRequest('SetDomainRecordStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SetDNSSLBStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetDNSSLBStatusResponse
     */
    public function setDNSSLBStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDNSSLBStatusResponse::fromMap($this->doRequest('SetDNSSLBStatus', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ModifyHichinaDomainDNSRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHichinaDomainDNSResponse
     */
    public function modifyHichinaDomainDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyHichinaDomainDNSResponse::fromMap($this->doRequest('ModifyHichinaDomainDNS', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param GetMainDomainNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMainDomainNameResponse
     */
    public function getMainDomainNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetMainDomainNameResponse::fromMap($this->doRequest('GetMainDomainName', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeSubDomainRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSubDomainRecordsResponse
     */
    public function describeSubDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSubDomainRecordsResponse::fromMap($this->doRequest('DescribeSubDomainRecords', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRecordLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordLogsResponse
     */
    public function describeRecordLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRecordLogsResponse::fromMap($this->doRequest('DescribeRecordLogs', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainsResponse::fromMap($this->doRequest('DescribeDomains', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDomainRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainRecordsResponse
     */
    public function describeDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainRecordsResponse::fromMap($this->doRequest('DescribeDomainRecords', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDomainRecordInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainRecordInfoResponse
     */
    public function describeDomainRecordInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainRecordInfoResponse::fromMap($this->doRequest('DescribeDomainRecordInfo', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainLogsResponse
     */
    public function describeDomainLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainLogsResponse::fromMap($this->doRequest('DescribeDomainLogs', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDomainInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainInfoResponse
     */
    public function describeDomainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainInfoResponse::fromMap($this->doRequest('DescribeDomainInfo', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DescribeDomainGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainGroupsResponse
     */
    public function describeDomainGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainGroupsResponse::fromMap($this->doRequest('DescribeDomainGroups', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDNSSLBSubDomainsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDNSSLBSubDomainsResponse
     */
    public function describeDNSSLBSubDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDNSSLBSubDomainsResponse::fromMap($this->doRequest('DescribeDNSSLBSubDomains', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDnsProductInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDnsProductInstancesResponse
     */
    public function describeDnsProductInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDnsProductInstancesResponse::fromMap($this->doRequest('DescribeDnsProductInstances', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteSubDomainRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSubDomainRecordsResponse
     */
    public function deleteSubDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSubDomainRecordsResponse::fromMap($this->doRequest('DeleteSubDomainRecords', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDomainRecordResponse
     */
    public function deleteDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDomainRecordResponse::fromMap($this->doRequest('DeleteDomainRecord', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param DeleteDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDomainGroupResponse::fromMap($this->doRequest('DeleteDomainGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDomainResponse::fromMap($this->doRequest('DeleteDomain', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ChangeDomainOfDnsProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChangeDomainOfDnsProductResponse
     */
    public function changeDomainOfDnsProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ChangeDomainOfDnsProductResponse::fromMap($this->doRequest('ChangeDomainOfDnsProduct', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
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
     * @param ChangeDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeDomainGroupResponse
     */
    public function changeDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ChangeDomainGroupResponse::fromMap($this->doRequest('ChangeDomainGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDomainRecordRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainRecordResponse
     */
    public function addDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDomainRecordResponse::fromMap($this->doRequest('AddDomainRecord', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
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
     * @param AddDomainGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddDomainGroupResponse
     */
    public function addDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDomainGroupResponse::fromMap($this->doRequest('AddDomainGroup', 'HTTPS', 'POST', '2015-01-09', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddDomainResponse::fromMap($this->doRequest('AddDomain', 'HTTPS', 'POST', '2015-01-09', 'AK,BearerToken', null, Tea::merge($request), $runtime));
    }

    /**
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
}
