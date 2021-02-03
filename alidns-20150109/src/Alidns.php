<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineResponse;
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
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidateDnsGtmAttributeInfoRequest;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ValidateDnsGtmAttributeInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Alidns extends OpenApiClient
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
     * @param AddCustomLineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddCustomLineResponse
     */
    public function addCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCustomLineResponse::fromMap($this->doRPCRequest('AddCustomLine', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDnsGtmAccessStrategyResponse
     */
    public function addDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDnsGtmAccessStrategyResponse::fromMap($this->doRPCRequest('AddDnsGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDnsGtmAddressPoolResponse::fromMap($this->doRPCRequest('AddDnsGtmAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddDnsGtmMonitorRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddDnsGtmMonitorResponse
     */
    public function addDnsGtmMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDnsGtmMonitorResponse::fromMap($this->doRPCRequest('AddDnsGtmMonitor', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDomainResponse
     */
    public function addDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDomainResponse::fromMap($this->doRPCRequest('AddDomain', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param AddDomainBackupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddDomainBackupResponse
     */
    public function addDomainBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDomainBackupResponse::fromMap($this->doRPCRequest('AddDomainBackup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDomainGroupResponse::fromMap($this->doRPCRequest('AddDomainGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDomainRecordResponse::fromMap($this->doRPCRequest('AddDomainRecord', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGtmAccessStrategyResponse::fromMap($this->doRPCRequest('AddGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGtmAddressPoolResponse::fromMap($this->doRPCRequest('AddGtmAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGtmMonitorResponse::fromMap($this->doRPCRequest('AddGtmMonitor', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('AddGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindInstanceDomainsResponse::fromMap($this->doRPCRequest('BindInstanceDomains', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeDomainGroupResponse::fromMap($this->doRPCRequest('ChangeDomainGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ChangeDomainOfDnsProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChangeDomainOfDnsProductResponse
     */
    public function changeDomainOfDnsProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeDomainOfDnsProductResponse::fromMap($this->doRPCRequest('ChangeDomainOfDnsProduct', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CopyGtmConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyGtmConfigResponse
     */
    public function copyGtmConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CopyGtmConfigResponse::fromMap($this->doRPCRequest('CopyGtmConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteCustomLinesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomLinesResponse
     */
    public function deleteCustomLinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomLinesResponse::fromMap($this->doRPCRequest('DeleteCustomLines', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDnsGtmAccessStrategyResponse
     */
    public function deleteDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDnsGtmAccessStrategyResponse::fromMap($this->doRPCRequest('DeleteDnsGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDnsGtmAddressPoolResponse::fromMap($this->doRPCRequest('DeleteDnsGtmAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainResponse::fromMap($this->doRPCRequest('DeleteDomain', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDomainGroupResponse
     */
    public function deleteDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainGroupResponse::fromMap($this->doRPCRequest('DeleteDomainGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDomainRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDomainRecordResponse
     */
    public function deleteDomainRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDomainRecordResponse::fromMap($this->doRPCRequest('DeleteDomainRecord', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGtmAccessStrategyResponse::fromMap($this->doRPCRequest('DeleteGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGtmAddressPoolResponse::fromMap($this->doRPCRequest('DeleteGtmAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('DeleteGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteSubDomainRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSubDomainRecordsResponse
     */
    public function deleteSubDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSubDomainRecordsResponse::fromMap($this->doRPCRequest('DeleteSubDomainRecords', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBatchResultCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeBatchResultCountResponse
     */
    public function describeBatchResultCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBatchResultCountResponse::fromMap($this->doRPCRequest('DescribeBatchResultCount', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBatchResultDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeBatchResultDetailResponse
     */
    public function describeBatchResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBatchResultDetailResponse::fromMap($this->doRPCRequest('DescribeBatchResultDetail', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeCustomLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeCustomLineResponse
     */
    public function describeCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomLineResponse::fromMap($this->doRPCRequest('DescribeCustomLine', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCustomLinesResponse::fromMap($this->doRPCRequest('DescribeCustomLines', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDnsGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDnsGtmAccessStrategiesResponse
     */
    public function describeDnsGtmAccessStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmAccessStrategiesResponse::fromMap($this->doRPCRequest('DescribeDnsGtmAccessStrategies', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmAccessStrategyResponse::fromMap($this->doRPCRequest('DescribeDnsGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmAccessStrategyAvailableConfigResponse::fromMap($this->doRPCRequest('DescribeDnsGtmAccessStrategyAvailableConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmAddrAttributeInfoResponse::fromMap($this->doRPCRequest('DescribeDnsGtmAddrAttributeInfo', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmAddressPoolAvailableConfigResponse::fromMap($this->doRPCRequest('DescribeDnsGtmAddressPoolAvailableConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmAvailableAlertGroupResponse::fromMap($this->doRPCRequest('DescribeDnsGtmAvailableAlertGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmInstanceResponse::fromMap($this->doRPCRequest('DescribeDnsGtmInstance', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmInstanceAddressPoolResponse::fromMap($this->doRPCRequest('DescribeDnsGtmInstanceAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmInstanceAddressPoolsResponse::fromMap($this->doRPCRequest('DescribeDnsGtmInstanceAddressPools', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDnsGtmInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDnsGtmInstancesResponse
     */
    public function describeDnsGtmInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmInstancesResponse::fromMap($this->doRPCRequest('DescribeDnsGtmInstances', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDnsGtmInstanceStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDnsGtmInstanceStatusResponse
     */
    public function describeDnsGtmInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmInstanceStatusResponse::fromMap($this->doRPCRequest('DescribeDnsGtmInstanceStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmInstanceSystemCnameResponse::fromMap($this->doRPCRequest('DescribeDnsGtmInstanceSystemCname', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDnsGtmLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDnsGtmLogsResponse
     */
    public function describeDnsGtmLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmLogsResponse::fromMap($this->doRPCRequest('DescribeDnsGtmLogs', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmMonitorAvailableConfigResponse::fromMap($this->doRPCRequest('DescribeDnsGtmMonitorAvailableConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsGtmMonitorConfigResponse::fromMap($this->doRPCRequest('DescribeDnsGtmMonitorConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsProductInstanceResponse::fromMap($this->doRPCRequest('DescribeDnsProductInstance', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDnsProductInstancesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDnsProductInstancesResponse
     */
    public function describeDnsProductInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDnsProductInstancesResponse::fromMap($this->doRPCRequest('DescribeDnsProductInstances', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDNSSLBSubDomainsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDNSSLBSubDomainsResponse
     */
    public function describeDNSSLBSubDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDNSSLBSubDomainsResponse::fromMap($this->doRPCRequest('DescribeDNSSLBSubDomains', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDohAccountStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDohAccountStatisticsResponse
     */
    public function describeDohAccountStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDohAccountStatisticsResponse::fromMap($this->doRPCRequest('DescribeDohAccountStatistics', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDohDomainStatisticsResponse::fromMap($this->doRPCRequest('DescribeDohDomainStatistics', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDohDomainStatisticsSummaryResponse::fromMap($this->doRPCRequest('DescribeDohDomainStatisticsSummary', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDohSubDomainStatisticsResponse::fromMap($this->doRPCRequest('DescribeDohSubDomainStatistics', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDohSubDomainStatisticsSummaryResponse::fromMap($this->doRPCRequest('DescribeDohSubDomainStatisticsSummary', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDohUserInfoResponse::fromMap($this->doRPCRequest('DescribeDohUserInfo', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainDnssecInfoResponse::fromMap($this->doRPCRequest('DescribeDomainDnssecInfo', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainGroupsResponse::fromMap($this->doRPCRequest('DescribeDomainGroups', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainInfoResponse
     */
    public function describeDomainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainInfoResponse::fromMap($this->doRPCRequest('DescribeDomainInfo', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainLogsResponse
     */
    public function describeDomainLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainLogsResponse::fromMap($this->doRPCRequest('DescribeDomainLogs', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainNsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDomainNsResponse
     */
    public function describeDomainNsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainNsResponse::fromMap($this->doRPCRequest('DescribeDomainNs', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainRecordInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainRecordInfoResponse
     */
    public function describeDomainRecordInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainRecordInfoResponse::fromMap($this->doRPCRequest('DescribeDomainRecordInfo', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDomainRecordsResponse
     */
    public function describeDomainRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainRecordsResponse::fromMap($this->doRPCRequest('DescribeDomainRecords', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDomainsResponse
     */
    public function describeDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainsResponse::fromMap($this->doRPCRequest('DescribeDomains', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDomainStatisticsResponse
     */
    public function describeDomainStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainStatisticsResponse::fromMap($this->doRPCRequest('DescribeDomainStatistics', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDomainStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDomainStatisticsSummaryResponse
     */
    public function describeDomainStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDomainStatisticsSummaryResponse::fromMap($this->doRPCRequest('DescribeDomainStatisticsSummary', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGtmAccessStrategiesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeGtmAccessStrategiesResponse
     */
    public function describeGtmAccessStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmAccessStrategiesResponse::fromMap($this->doRPCRequest('DescribeGtmAccessStrategies', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmAccessStrategyResponse::fromMap($this->doRPCRequest('DescribeGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmAccessStrategyAvailableConfigResponse::fromMap($this->doRPCRequest('DescribeGtmAccessStrategyAvailableConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmAvailableAlertGroupResponse::fromMap($this->doRPCRequest('DescribeGtmAvailableAlertGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmInstanceResponse::fromMap($this->doRPCRequest('DescribeGtmInstance', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmInstanceAddressPoolResponse::fromMap($this->doRPCRequest('DescribeGtmInstanceAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmInstanceAddressPoolsResponse::fromMap($this->doRPCRequest('DescribeGtmInstanceAddressPools', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGtmInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGtmInstancesResponse
     */
    public function describeGtmInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmInstancesResponse::fromMap($this->doRPCRequest('DescribeGtmInstances', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGtmInstanceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGtmInstanceStatusResponse
     */
    public function describeGtmInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmInstanceStatusResponse::fromMap($this->doRPCRequest('DescribeGtmInstanceStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmInstanceSystemCnameResponse::fromMap($this->doRPCRequest('DescribeGtmInstanceSystemCname', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeGtmLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeGtmLogsResponse
     */
    public function describeGtmLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmLogsResponse::fromMap($this->doRPCRequest('DescribeGtmLogs', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmMonitorAvailableConfigResponse::fromMap($this->doRPCRequest('DescribeGtmMonitorAvailableConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmMonitorConfigResponse::fromMap($this->doRPCRequest('DescribeGtmMonitorConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('DescribeGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmRecoveryPlanAvailableConfigResponse::fromMap($this->doRPCRequest('DescribeGtmRecoveryPlanAvailableConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGtmRecoveryPlansResponse::fromMap($this->doRPCRequest('DescribeGtmRecoveryPlans', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceDomainsResponse::fromMap($this->doRPCRequest('DescribeInstanceDomains', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRecordLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordLogsResponse
     */
    public function describeRecordLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordLogsResponse::fromMap($this->doRPCRequest('DescribeRecordLogs', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRecordStatisticsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecordStatisticsResponse
     */
    public function describeRecordStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordStatisticsResponse::fromMap($this->doRPCRequest('DescribeRecordStatistics', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRecordStatisticsSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeRecordStatisticsSummaryResponse
     */
    public function describeRecordStatisticsSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordStatisticsSummaryResponse::fromMap($this->doRPCRequest('DescribeRecordStatisticsSummary', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSubDomainRecordsResponse::fromMap($this->doRPCRequest('DescribeSubDomainRecords', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSupportLinesResponse::fromMap($this->doRPCRequest('DescribeSupportLines', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTagsResponse::fromMap($this->doRPCRequest('DescribeTags', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTransferDomainsResponse::fromMap($this->doRPCRequest('DescribeTransferDomains', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('ExecuteGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMainDomainNameResponse::fromMap($this->doRPCRequest('GetMainDomainName', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTxtRecordForVerifyResponse::fromMap($this->doRPCRequest('GetTxtRecordForVerify', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyHichinaDomainDNSRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyHichinaDomainDNSResponse
     */
    public function modifyHichinaDomainDNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyHichinaDomainDNSResponse::fromMap($this->doRPCRequest('ModifyHichinaDomainDNS', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param MoveDomainResourceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return MoveDomainResourceGroupResponse
     */
    public function moveDomainResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveDomainResourceGroupResponse::fromMap($this->doRPCRequest('MoveDomainResourceGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveGtmResourceGroupResponse::fromMap($this->doRPCRequest('MoveGtmResourceGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperateBatchDomainResponse::fromMap($this->doRPCRequest('OperateBatchDomain', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PreviewGtmRecoveryPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreviewGtmRecoveryPlanResponse
     */
    public function previewGtmRecoveryPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PreviewGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('PreviewGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RetrieveDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RetrieveDomainResponse
     */
    public function retrieveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RetrieveDomainResponse::fromMap($this->doRPCRequest('RetrieveDomain', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RollbackGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('RollbackGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDnsGtmAccessModeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetDnsGtmAccessModeResponse
     */
    public function setDnsGtmAccessModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDnsGtmAccessModeResponse::fromMap($this->doRPCRequest('SetDnsGtmAccessMode', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDnsGtmMonitorStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetDnsGtmMonitorStatusResponse
     */
    public function setDnsGtmMonitorStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDnsGtmMonitorStatusResponse::fromMap($this->doRPCRequest('SetDnsGtmMonitorStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDNSSLBStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetDNSSLBStatusResponse
     */
    public function setDNSSLBStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDNSSLBStatusResponse::fromMap($this->doRPCRequest('SetDNSSLBStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetDomainDnssecStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDomainDnssecStatusResponse
     */
    public function setDomainDnssecStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainDnssecStatusResponse::fromMap($this->doRPCRequest('SetDomainDnssecStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDomainRecordStatusResponse::fromMap($this->doRPCRequest('SetDomainRecordStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetGtmAccessModeResponse::fromMap($this->doRPCRequest('SetGtmAccessMode', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetGtmMonitorStatusResponse::fromMap($this->doRPCRequest('SetGtmMonitorStatus', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SwitchDnsGtmInstanceStrategyModeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SwitchDnsGtmInstanceStrategyModeResponse
     */
    public function switchDnsGtmInstanceStrategyModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchDnsGtmInstanceStrategyModeResponse::fromMap($this->doRPCRequest('SwitchDnsGtmInstanceStrategyMode', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferDomainResponse::fromMap($this->doRPCRequest('TransferDomain', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindInstanceDomainsResponse::fromMap($this->doRPCRequest('UnbindInstanceDomains', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateCustomLineRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCustomLineResponse
     */
    public function updateCustomLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCustomLineResponse::fromMap($this->doRPCRequest('UpdateCustomLine', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDnsGtmAccessStrategyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDnsGtmAccessStrategyResponse
     */
    public function updateDnsGtmAccessStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDnsGtmAccessStrategyResponse::fromMap($this->doRPCRequest('UpdateDnsGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDnsGtmAddressPoolResponse::fromMap($this->doRPCRequest('UpdateDnsGtmAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDnsGtmInstanceGlobalConfigResponse::fromMap($this->doRPCRequest('UpdateDnsGtmInstanceGlobalConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDnsGtmMonitorResponse::fromMap($this->doRPCRequest('UpdateDnsGtmMonitor', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDNSSLBWeightRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDNSSLBWeightResponse
     */
    public function updateDNSSLBWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDNSSLBWeightResponse::fromMap($this->doRPCRequest('UpdateDNSSLBWeight', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDomainGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateDomainGroupResponse
     */
    public function updateDomainGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDomainGroupResponse::fromMap($this->doRPCRequest('UpdateDomainGroup', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDomainRecordResponse::fromMap($this->doRPCRequest('UpdateDomainRecord', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDomainRecordRemarkResponse::fromMap($this->doRPCRequest('UpdateDomainRecordRemark', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDomainRemarkResponse::fromMap($this->doRPCRequest('UpdateDomainRemark', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGtmAccessStrategyResponse::fromMap($this->doRPCRequest('UpdateGtmAccessStrategy', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGtmAddressPoolResponse::fromMap($this->doRPCRequest('UpdateGtmAddressPool', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGtmInstanceGlobalConfigResponse::fromMap($this->doRPCRequest('UpdateGtmInstanceGlobalConfig', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGtmMonitorResponse::fromMap($this->doRPCRequest('UpdateGtmMonitor', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGtmRecoveryPlanResponse::fromMap($this->doRPCRequest('UpdateGtmRecoveryPlan', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ValidateDnsGtmAttributeInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ValidateDnsGtmAttributeInfoResponse
     */
    public function validateDnsGtmAttributeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ValidateDnsGtmAttributeInfoResponse::fromMap($this->doRPCRequest('ValidateDnsGtmAttributeInfo', '2015-01-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ValidateDnsGtmAttributeInfoRequest $request
     *
     * @return ValidateDnsGtmAttributeInfoResponse
     */
    public function validateDnsGtmAttributeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateDnsGtmAttributeInfoWithOptions($request, $runtime);
    }
}
