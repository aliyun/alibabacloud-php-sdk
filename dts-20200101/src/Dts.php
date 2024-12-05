<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureDtsJobAdvanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobAlertRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobAlertResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceAlertRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceAlertResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobAlertRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobAlertResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobReplicatorCompareRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobReplicatorCompareResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CountJobByConditionRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CountJobByConditionResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDedicatedClusterMonitorRuleRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDedicatedClusterMonitorRuleResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDtsInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDtsInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateJobMonitorRuleRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateJobMonitorRuleResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateMigrationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateReverseDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateReverseDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateSubscriptionInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateSubscriptionInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteConsumerGroupRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteDtsJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteDtsJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteMigrationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteSubscriptionInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteSubscriptionInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DeleteSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeChannelAccountRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeChannelAccountResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeCheckJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeCheckJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeClusterOperateLogsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeClusterOperateLogsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeClusterUsedUtilizationRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeClusterUsedUtilizationResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConnectionStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConnectionStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckReportUrlRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckReportUrlResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDetailsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDetailsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDiffDetailsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDiffDetailsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDedicatedClusterMonitorRuleRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDedicatedClusterMonitorRuleResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDedicatedClusterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDedicatedClusterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsEtlJobVersionInfoRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsEtlJobVersionInfoResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDTSIPRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDTSIPResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobConfigRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobConfigResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsServiceLogRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsServiceLogResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEndpointSwitchStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEndpointSwitchStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEtlJobLogsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEtlJobLogsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeInitializationStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeJobMonitorRuleRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeJobMonitorRuleResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMetricListRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMetricListResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobAlertRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobAlertResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceAlertRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceAlertResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstanceStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionMetaShrinkRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobAlertRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobAlertResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobReplicatorCompareRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobReplicatorCompareResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationObjectModifyStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSyncStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSyncStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagKeysRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagKeysResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagValuesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagValuesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\InitDtsRdsInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\InitDtsRdsInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerGroupPasswordRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerGroupPasswordResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumptionTimestampRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumptionTimestampResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDedicatedClusterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDedicatedClusterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobAdvanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobConfigRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobConfigResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobDedicatedClusterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobDedicatedClusterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobDuLimitRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobDuLimitResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobEndpointRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobEndpointResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobNameRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobNameResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobPasswordRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobPasswordResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobShrinkRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDynamicConfigRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDynamicConfigResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionObjectRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionObjectResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySynchronizationObjectRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySynchronizationObjectResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ResetDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ResetDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ResetSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ResetSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ReverseTwoWayDirectionRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ReverseTwoWayDirectionResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ShieldPrecheckRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ShieldPrecheckResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SkipPreCheckRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SkipPreCheckResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartDtsJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartDtsJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartMigrationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartReverseWriterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartReverseWriterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSubscriptionInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSubscriptionInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopDedicatedClusterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopDedicatedClusterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopDtsJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopDtsJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StopMigrationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SummaryJobDetailRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SummaryJobDetailResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendDtsJobsRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendDtsJobsResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendMigrationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SuspendSynchronizationJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SwitchPhysicalDtsJobToCloudRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SwitchPhysicalDtsJobToCloudResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\TransferInstanceClassRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\TransferInstanceClassResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\TransferPayTypeRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\TransferPayTypeResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\UpgradeTwoWayRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\UpgradeTwoWayResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\WhiteIpListRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\WhiteIpListResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'dts.aliyuncs.com',
            'cn-beijing'                  => 'dts.aliyuncs.com',
            'cn-zhangjiakou'              => 'dts.aliyuncs.com',
            'cn-huhehaote'                => 'dts.aliyuncs.com',
            'cn-hangzhou'                 => 'dts.aliyuncs.com',
            'cn-shanghai'                 => 'dts.aliyuncs.com',
            'cn-shenzhen'                 => 'dts.aliyuncs.com',
            'cn-hongkong'                 => 'dts.aliyuncs.com',
            'ap-southeast-1'              => 'dts.aliyuncs.com',
            'ap-southeast-2'              => 'dts.aliyuncs.com',
            'ap-southeast-3'              => 'dts.aliyuncs.com',
            'ap-southeast-5'              => 'dts.aliyuncs.com',
            'eu-west-1'                   => 'dts.aliyuncs.com',
            'us-west-1'                   => 'dts.aliyuncs.com',
            'us-east-1'                   => 'dts.aliyuncs.com',
            'eu-central-1'                => 'dts.aliyuncs.com',
            'me-east-1'                   => 'dts.aliyuncs.com',
            'ap-south-1'                  => 'dts.aliyuncs.com',
            'cn-hangzhou-finance'         => 'dts.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'dts.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'dts.aliyuncs.com',
            'cn-north-2-gov-1'            => 'dts.aliyuncs.com',
            'ap-northeast-2-pop'          => 'dts.aliyuncs.com',
            'cn-beijing-finance-1'        => 'dts.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'dts.aliyuncs.com',
            'cn-beijing-gov-1'            => 'dts.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'dts.aliyuncs.com',
            'cn-chengdu'                  => 'dts.aliyuncs.com',
            'cn-edge-1'                   => 'dts.aliyuncs.com',
            'cn-fujian'                   => 'dts.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'dts.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dts.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'dts.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'dts.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'dts.aliyuncs.com',
            'cn-qingdao-nebula'           => 'dts.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'dts.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'dts.aliyuncs.com',
            'cn-shanghai-inner'           => 'dts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dts.aliyuncs.com',
            'cn-shenzhen-inner'           => 'dts.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'dts.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'dts.aliyuncs.com',
            'cn-wuhan'                    => 'dts.aliyuncs.com',
            'cn-wulanchabu'               => 'dts.aliyuncs.com',
            'cn-yushanfang'               => 'dts.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'dts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'dts.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'dts.aliyuncs.com',
            'eu-west-1-oxs'               => 'dts.aliyuncs.com',
            'rus-west-1-pop'              => 'dts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Configures a data migration or synchronization task.
     *  *
     * @param ConfigureDtsJobRequest $request ConfigureDtsJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureDtsJobResponse ConfigureDtsJobResponse
     */
    public function configureDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkpoint)) {
            $query['Checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->dataCheckConfigure)) {
            $query['DataCheckConfigure'] = $request->dataCheckConfigure;
        }
        if (!Utils::isUnset($request->dataInitialization)) {
            $query['DataInitialization'] = $request->dataInitialization;
        }
        if (!Utils::isUnset($request->dataSynchronization)) {
            $query['DataSynchronization'] = $request->dataSynchronization;
        }
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->delayNotice)) {
            $query['DelayNotice'] = $request->delayNotice;
        }
        if (!Utils::isUnset($request->delayPhone)) {
            $query['DelayPhone'] = $request->delayPhone;
        }
        if (!Utils::isUnset($request->delayRuleTime)) {
            $query['DelayRuleTime'] = $request->delayRuleTime;
        }
        if (!Utils::isUnset($request->destCaCertificateOssUrl)) {
            $query['DestCaCertificateOssUrl'] = $request->destCaCertificateOssUrl;
        }
        if (!Utils::isUnset($request->destCaCertificatePassword)) {
            $query['DestCaCertificatePassword'] = $request->destCaCertificatePassword;
        }
        if (!Utils::isUnset($request->destClientCertOssUrl)) {
            $query['DestClientCertOssUrl'] = $request->destClientCertOssUrl;
        }
        if (!Utils::isUnset($request->destClientKeyOssUrl)) {
            $query['DestClientKeyOssUrl'] = $request->destClientKeyOssUrl;
        }
        if (!Utils::isUnset($request->destClientPassword)) {
            $query['DestClientPassword'] = $request->destClientPassword;
        }
        if (!Utils::isUnset($request->destPrimaryVswId)) {
            $query['DestPrimaryVswId'] = $request->destPrimaryVswId;
        }
        if (!Utils::isUnset($request->destSecondaryVswId)) {
            $query['DestSecondaryVswId'] = $request->destSecondaryVswId;
        }
        if (!Utils::isUnset($request->destinationEndpointDataBaseName)) {
            $query['DestinationEndpointDataBaseName'] = $request->destinationEndpointDataBaseName;
        }
        if (!Utils::isUnset($request->destinationEndpointEngineName)) {
            $query['DestinationEndpointEngineName'] = $request->destinationEndpointEngineName;
        }
        if (!Utils::isUnset($request->destinationEndpointIP)) {
            $query['DestinationEndpointIP'] = $request->destinationEndpointIP;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceID)) {
            $query['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceType)) {
            $query['DestinationEndpointInstanceType'] = $request->destinationEndpointInstanceType;
        }
        if (!Utils::isUnset($request->destinationEndpointOracleSID)) {
            $query['DestinationEndpointOracleSID'] = $request->destinationEndpointOracleSID;
        }
        if (!Utils::isUnset($request->destinationEndpointOwnerID)) {
            $query['DestinationEndpointOwnerID'] = $request->destinationEndpointOwnerID;
        }
        if (!Utils::isUnset($request->destinationEndpointPassword)) {
            $query['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }
        if (!Utils::isUnset($request->destinationEndpointPort)) {
            $query['DestinationEndpointPort'] = $request->destinationEndpointPort;
        }
        if (!Utils::isUnset($request->destinationEndpointRegion)) {
            $query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }
        if (!Utils::isUnset($request->destinationEndpointRole)) {
            $query['DestinationEndpointRole'] = $request->destinationEndpointRole;
        }
        if (!Utils::isUnset($request->destinationEndpointUserName)) {
            $query['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }
        if (!Utils::isUnset($request->disasterRecoveryJob)) {
            $query['DisasterRecoveryJob'] = $request->disasterRecoveryJob;
        }
        if (!Utils::isUnset($request->dtsBisLabel)) {
            $query['DtsBisLabel'] = $request->dtsBisLabel;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->dtsJobName)) {
            $query['DtsJobName'] = $request->dtsJobName;
        }
        if (!Utils::isUnset($request->errorNotice)) {
            $query['ErrorNotice'] = $request->errorNotice;
        }
        if (!Utils::isUnset($request->errorPhone)) {
            $query['ErrorPhone'] = $request->errorPhone;
        }
        if (!Utils::isUnset($request->fileOssUrl)) {
            $query['FileOssUrl'] = $request->fileOssUrl;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->maxDu)) {
            $query['MaxDu'] = $request->maxDu;
        }
        if (!Utils::isUnset($request->minDu)) {
            $query['MinDu'] = $request->minDu;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointDatabaseName)) {
            $query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->sourceEndpointEngineName)) {
            $query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceType)) {
            $query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }
        if (!Utils::isUnset($request->sourceEndpointOracleSID)) {
            $query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }
        if (!Utils::isUnset($request->sourceEndpointOwnerID)) {
            $query['SourceEndpointOwnerID'] = $request->sourceEndpointOwnerID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointRole)) {
            $query['SourceEndpointRole'] = $request->sourceEndpointRole;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        if (!Utils::isUnset($request->sourceEndpointVSwitchID)) {
            $query['SourceEndpointVSwitchID'] = $request->sourceEndpointVSwitchID;
        }
        if (!Utils::isUnset($request->srcCaCertificateOssUrl)) {
            $query['SrcCaCertificateOssUrl'] = $request->srcCaCertificateOssUrl;
        }
        if (!Utils::isUnset($request->srcCaCertificatePassword)) {
            $query['SrcCaCertificatePassword'] = $request->srcCaCertificatePassword;
        }
        if (!Utils::isUnset($request->srcClientCertOssUrl)) {
            $query['SrcClientCertOssUrl'] = $request->srcClientCertOssUrl;
        }
        if (!Utils::isUnset($request->srcClientKeyOssUrl)) {
            $query['SrcClientKeyOssUrl'] = $request->srcClientKeyOssUrl;
        }
        if (!Utils::isUnset($request->srcClientPassword)) {
            $query['SrcClientPassword'] = $request->srcClientPassword;
        }
        if (!Utils::isUnset($request->srcPrimaryVswId)) {
            $query['SrcPrimaryVswId'] = $request->srcPrimaryVswId;
        }
        if (!Utils::isUnset($request->srcSecondaryVswId)) {
            $query['SrcSecondaryVswId'] = $request->srcSecondaryVswId;
        }
        if (!Utils::isUnset($request->structureInitialization)) {
            $query['StructureInitialization'] = $request->structureInitialization;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        $body = [];
        if (!Utils::isUnset($request->dbList)) {
            $body['DbList'] = $request->dbList;
        }
        if (!Utils::isUnset($request->reserve)) {
            $body['Reserve'] = $request->reserve;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigureDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a data migration or synchronization task.
     *  *
     * @param ConfigureDtsJobRequest $request ConfigureDtsJobRequest
     *
     * @return ConfigureDtsJobResponse ConfigureDtsJobResponse
     */
    public function configureDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureDtsJobWithOptions($request, $runtime);
    }

    /**
     * @param ConfigureDtsJobAdvanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigureDtsJobResponse
     */
    public function configureDtsJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'Dts',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $configureDtsJobReq = new ConfigureDtsJobRequest([]);
        OpenApiUtilClient::convert($request, $configureDtsJobReq);
        if (!Utils::isUnset($request->fileOssUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileOssUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $configureDtsJobReq->fileOssUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->configureDtsJobWithOptions($configureDtsJobReq, $runtime);
    }

    /**
     * @summary Configures a data migration task.
     *  *
     * @param ConfigureMigrationJobRequest $request ConfigureMigrationJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureMigrationJobResponse ConfigureMigrationJobResponse
     */
    public function configureMigrationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->checkpoint)) {
            $query['Checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->migrationJobName)) {
            $query['MigrationJobName'] = $request->migrationJobName;
        }
        if (!Utils::isUnset($request->migrationReserved)) {
            $query['MigrationReserved'] = $request->migrationReserved;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->destinationEndpoint)) {
            $query['DestinationEndpoint'] = $request->destinationEndpoint;
        }
        if (!Utils::isUnset($request->migrationMode)) {
            $query['MigrationMode'] = $request->migrationMode;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $body = [];
        if (!Utils::isUnset($request->migrationObject)) {
            $body['MigrationObject'] = $request->migrationObject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigureMigrationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a data migration task.
     *  *
     * @param ConfigureMigrationJobRequest $request ConfigureMigrationJobRequest
     *
     * @return ConfigureMigrationJobResponse ConfigureMigrationJobResponse
     */
    public function configureMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureMigrationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Configures alert settings to monitor a data migration instance.
     *  *
     * @param ConfigureMigrationJobAlertRequest $request ConfigureMigrationJobAlertRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureMigrationJobAlertResponse ConfigureMigrationJobAlertResponse
     */
    public function configureMigrationJobAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->delayAlertPhone)) {
            $query['DelayAlertPhone'] = $request->delayAlertPhone;
        }
        if (!Utils::isUnset($request->delayAlertStatus)) {
            $query['DelayAlertStatus'] = $request->delayAlertStatus;
        }
        if (!Utils::isUnset($request->delayOverSeconds)) {
            $query['DelayOverSeconds'] = $request->delayOverSeconds;
        }
        if (!Utils::isUnset($request->errorAlertPhone)) {
            $query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }
        if (!Utils::isUnset($request->errorAlertStatus)) {
            $query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ConfigureMigrationJobAlert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureMigrationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures alert settings to monitor a data migration instance.
     *  *
     * @param ConfigureMigrationJobAlertRequest $request ConfigureMigrationJobAlertRequest
     *
     * @return ConfigureMigrationJobAlertResponse ConfigureMigrationJobAlertResponse
     */
    public function configureMigrationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureMigrationJobAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a change tracking task.
     *  *
     * @description >  You can preview related API operation parameters when you configure a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *  *
     * @param ConfigureSubscriptionRequest $request ConfigureSubscriptionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureSubscriptionResponse ConfigureSubscriptionResponse
     */
    public function configureSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkpoint)) {
            $query['Checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->dbList)) {
            $query['DbList'] = $request->dbList;
        }
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->delayNotice)) {
            $query['DelayNotice'] = $request->delayNotice;
        }
        if (!Utils::isUnset($request->delayPhone)) {
            $query['DelayPhone'] = $request->delayPhone;
        }
        if (!Utils::isUnset($request->delayRuleTime)) {
            $query['DelayRuleTime'] = $request->delayRuleTime;
        }
        if (!Utils::isUnset($request->dtsBisLabel)) {
            $query['DtsBisLabel'] = $request->dtsBisLabel;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->dtsJobName)) {
            $query['DtsJobName'] = $request->dtsJobName;
        }
        if (!Utils::isUnset($request->errorNotice)) {
            $query['ErrorNotice'] = $request->errorNotice;
        }
        if (!Utils::isUnset($request->errorPhone)) {
            $query['ErrorPhone'] = $request->errorPhone;
        }
        if (!Utils::isUnset($request->maxDu)) {
            $query['MaxDu'] = $request->maxDu;
        }
        if (!Utils::isUnset($request->minDu)) {
            $query['MinDu'] = $request->minDu;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reserve)) {
            $query['Reserve'] = $request->reserve;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointDatabaseName)) {
            $query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->sourceEndpointEngineName)) {
            $query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceType)) {
            $query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }
        if (!Utils::isUnset($request->sourceEndpointOracleSID)) {
            $query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }
        if (!Utils::isUnset($request->sourceEndpointOwnerID)) {
            $query['SourceEndpointOwnerID'] = $request->sourceEndpointOwnerID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointRole)) {
            $query['SourceEndpointRole'] = $request->sourceEndpointRole;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        if (!Utils::isUnset($request->srcCaCertificateOssUrl)) {
            $query['SrcCaCertificateOssUrl'] = $request->srcCaCertificateOssUrl;
        }
        if (!Utils::isUnset($request->srcCaCertificatePassword)) {
            $query['SrcCaCertificatePassword'] = $request->srcCaCertificatePassword;
        }
        if (!Utils::isUnset($request->srcClientCertOssUrl)) {
            $query['SrcClientCertOssUrl'] = $request->srcClientCertOssUrl;
        }
        if (!Utils::isUnset($request->srcClientKeyOssUrl)) {
            $query['SrcClientKeyOssUrl'] = $request->srcClientKeyOssUrl;
        }
        if (!Utils::isUnset($request->srcClientPassword)) {
            $query['SrcClientPassword'] = $request->srcClientPassword;
        }
        if (!Utils::isUnset($request->subscriptionDataTypeDDL)) {
            $query['SubscriptionDataTypeDDL'] = $request->subscriptionDataTypeDDL;
        }
        if (!Utils::isUnset($request->subscriptionDataTypeDML)) {
            $query['SubscriptionDataTypeDML'] = $request->subscriptionDataTypeDML;
        }
        if (!Utils::isUnset($request->subscriptionInstanceNetworkType)) {
            $query['SubscriptionInstanceNetworkType'] = $request->subscriptionInstanceNetworkType;
        }
        if (!Utils::isUnset($request->subscriptionInstanceVPCId)) {
            $query['SubscriptionInstanceVPCId'] = $request->subscriptionInstanceVPCId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceVSwitchId)) {
            $query['SubscriptionInstanceVSwitchId'] = $request->subscriptionInstanceVSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSubscription',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a change tracking task.
     *  *
     * @description >  You can preview related API operation parameters when you configure a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *  *
     * @param ConfigureSubscriptionRequest $request ConfigureSubscriptionRequest
     *
     * @return ConfigureSubscriptionResponse ConfigureSubscriptionResponse
     */
    public function configureSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a change tracking instance of the previous version.
     *  *
     * @description Before you call this operation, you must call the [CreateSubscriptionInstance](https://help.aliyun.com/document_detail/49436.html) operation to create a change tracking instance.
     *  *
     * @param ConfigureSubscriptionInstanceRequest $request ConfigureSubscriptionInstanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureSubscriptionInstanceResponse ConfigureSubscriptionInstanceResponse
     */
    public function configureSubscriptionInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceName)) {
            $query['SubscriptionInstanceName'] = $request->subscriptionInstanceName;
        }
        if (!Utils::isUnset($request->subscriptionInstanceNetworkType)) {
            $query['SubscriptionInstanceNetworkType'] = $request->subscriptionInstanceNetworkType;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        if (!Utils::isUnset($request->subscriptionDataType)) {
            $query['SubscriptionDataType'] = $request->subscriptionDataType;
        }
        if (!Utils::isUnset($request->subscriptionInstance)) {
            $query['SubscriptionInstance'] = $request->subscriptionInstance;
        }
        $body = [];
        if (!Utils::isUnset($request->subscriptionObject)) {
            $body['SubscriptionObject'] = $request->subscriptionObject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSubscriptionInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a change tracking instance of the previous version.
     *  *
     * @description Before you call this operation, you must call the [CreateSubscriptionInstance](https://help.aliyun.com/document_detail/49436.html) operation to create a change tracking instance.
     *  *
     * @param ConfigureSubscriptionInstanceRequest $request ConfigureSubscriptionInstanceRequest
     *
     * @return ConfigureSubscriptionInstanceResponse ConfigureSubscriptionInstanceResponse
     */
    public function configureSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Configures alert settings to monitor a change tracking instance.
     *  *
     * @param ConfigureSubscriptionInstanceAlertRequest $request ConfigureSubscriptionInstanceAlertRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureSubscriptionInstanceAlertResponse ConfigureSubscriptionInstanceAlertResponse
     */
    public function configureSubscriptionInstanceAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->delayAlertPhone)) {
            $query['DelayAlertPhone'] = $request->delayAlertPhone;
        }
        if (!Utils::isUnset($request->delayAlertStatus)) {
            $query['DelayAlertStatus'] = $request->delayAlertStatus;
        }
        if (!Utils::isUnset($request->delayOverSeconds)) {
            $query['DelayOverSeconds'] = $request->delayOverSeconds;
        }
        if (!Utils::isUnset($request->errorAlertPhone)) {
            $query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }
        if (!Utils::isUnset($request->errorAlertStatus)) {
            $query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSubscriptionInstanceAlert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSubscriptionInstanceAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures alert settings to monitor a change tracking instance.
     *  *
     * @param ConfigureSubscriptionInstanceAlertRequest $request ConfigureSubscriptionInstanceAlertRequest
     *
     * @return ConfigureSubscriptionInstanceAlertResponse ConfigureSubscriptionInstanceAlertResponse
     */
    public function configureSubscriptionInstanceAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSubscriptionInstanceAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a data synchronization task.
     *  *
     * @description Before you call this operation, you must call the [CreateSynchronizationJob](https://help.aliyun.com/document_detail/49446.html) operation to create a data synchronization instance.
     * >
     * *   After you call this operation to configure a data synchronization task, the task will be automatically started and prechecked. You do not need to call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to start the task.
     * *   A data synchronization task may fail to be started due to precheck failures. You can call the [DescribeSynchronizationJobStatus](https://help.aliyun.com/document_detail/49453.html) operation to query the status of the task. Then, you can change parameter settings based on the error messages about the precheck failures. After you fix the issue, you must call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to restart the data synchronization task.
     *  *
     * @param ConfigureSynchronizationJobRequest $request ConfigureSynchronizationJobRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureSynchronizationJobResponse ConfigureSynchronizationJobResponse
     */
    public function configureSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->checkpoint)) {
            $query['Checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->dataInitialization)) {
            $query['DataInitialization'] = $request->dataInitialization;
        }
        if (!Utils::isUnset($request->migrationReserved)) {
            $query['MigrationReserved'] = $request->migrationReserved;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->structureInitialization)) {
            $query['StructureInitialization'] = $request->structureInitialization;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        if (!Utils::isUnset($request->synchronizationJobName)) {
            $query['SynchronizationJobName'] = $request->synchronizationJobName;
        }
        if (!Utils::isUnset($request->destinationEndpoint)) {
            $query['DestinationEndpoint'] = $request->destinationEndpoint;
        }
        if (!Utils::isUnset($request->partitionKey)) {
            $query['PartitionKey'] = $request->partitionKey;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $body = [];
        if (!Utils::isUnset($request->synchronizationObjects)) {
            $body['SynchronizationObjects'] = $request->synchronizationObjects;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSynchronizationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures a data synchronization task.
     *  *
     * @description Before you call this operation, you must call the [CreateSynchronizationJob](https://help.aliyun.com/document_detail/49446.html) operation to create a data synchronization instance.
     * >
     * *   After you call this operation to configure a data synchronization task, the task will be automatically started and prechecked. You do not need to call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to start the task.
     * *   A data synchronization task may fail to be started due to precheck failures. You can call the [DescribeSynchronizationJobStatus](https://help.aliyun.com/document_detail/49453.html) operation to query the status of the task. Then, you can change parameter settings based on the error messages about the precheck failures. After you fix the issue, you must call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to restart the data synchronization task.
     *  *
     * @param ConfigureSynchronizationJobRequest $request ConfigureSynchronizationJobRequest
     *
     * @return ConfigureSynchronizationJobResponse ConfigureSynchronizationJobResponse
     */
    public function configureSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Configures alert settings to monitor a data synchronization instance.
     *  *
     * @param ConfigureSynchronizationJobAlertRequest $request ConfigureSynchronizationJobAlertRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureSynchronizationJobAlertResponse ConfigureSynchronizationJobAlertResponse
     */
    public function configureSynchronizationJobAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->delayAlertPhone)) {
            $query['DelayAlertPhone'] = $request->delayAlertPhone;
        }
        if (!Utils::isUnset($request->delayAlertStatus)) {
            $query['DelayAlertStatus'] = $request->delayAlertStatus;
        }
        if (!Utils::isUnset($request->delayOverSeconds)) {
            $query['DelayOverSeconds'] = $request->delayOverSeconds;
        }
        if (!Utils::isUnset($request->errorAlertPhone)) {
            $query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }
        if (!Utils::isUnset($request->errorAlertStatus)) {
            $query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSynchronizationJobAlert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSynchronizationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures alert settings to monitor a data synchronization instance.
     *  *
     * @param ConfigureSynchronizationJobAlertRequest $request ConfigureSynchronizationJobAlertRequest
     *
     * @return ConfigureSynchronizationJobAlertResponse ConfigureSynchronizationJobAlertResponse
     */
    public function configureSynchronizationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables image matching for a data synchronization instance.
     *  *
     * @param ConfigureSynchronizationJobReplicatorCompareRequest $request ConfigureSynchronizationJobReplicatorCompareRequest
     * @param RuntimeOptions                                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigureSynchronizationJobReplicatorCompareResponse ConfigureSynchronizationJobReplicatorCompareResponse
     */
    public function configureSynchronizationJobReplicatorCompareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        if (!Utils::isUnset($request->synchronizationReplicatorCompareEnable)) {
            $query['SynchronizationReplicatorCompareEnable'] = $request->synchronizationReplicatorCompareEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSynchronizationJobReplicatorCompare',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSynchronizationJobReplicatorCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables image matching for a data synchronization instance.
     *  *
     * @param ConfigureSynchronizationJobReplicatorCompareRequest $request ConfigureSynchronizationJobReplicatorCompareRequest
     *
     * @return ConfigureSynchronizationJobReplicatorCompareResponse ConfigureSynchronizationJobReplicatorCompareResponse
     */
    public function configureSynchronizationJobReplicatorCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobReplicatorCompareWithOptions($request, $runtime);
    }

    /**
     * @summary 查询符合条件的任务数
     *  *
     * @param CountJobByConditionRequest $request CountJobByConditionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CountJobByConditionResponse CountJobByConditionResponse
     */
    public function countJobByConditionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destDbType)) {
            $query['DestDbType'] = $request->destDbType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->srcDbType)) {
            $query['SrcDbType'] = $request->srcDbType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CountJobByCondition',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CountJobByConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询符合条件的任务数
     *  *
     * @param CountJobByConditionRequest $request CountJobByConditionRequest
     *
     * @return CountJobByConditionResponse CountJobByConditionResponse
     */
    public function countJobByCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countJobByConditionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a consumer group for a change tracking task. Downstream clients can use the consumer group to consume tracked data.
     *  *
     * @param CreateConsumerChannelRequest $request CreateConsumerChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerChannelResponse CreateConsumerChannelResponse
     */
    public function createConsumerChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerGroupName)) {
            $query['ConsumerGroupName'] = $request->consumerGroupName;
        }
        if (!Utils::isUnset($request->consumerGroupPassword)) {
            $query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }
        if (!Utils::isUnset($request->consumerGroupUserName)) {
            $query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
            'action'      => 'CreateConsumerChannel',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a consumer group for a change tracking task. Downstream clients can use the consumer group to consume tracked data.
     *  *
     * @param CreateConsumerChannelRequest $request CreateConsumerChannelRequest
     *
     * @return CreateConsumerChannelResponse CreateConsumerChannelResponse
     */
    public function createConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a consumer group for a change tracking instance.
     *  *
     * @param CreateConsumerGroupRequest $request CreateConsumerGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->consumerGroupName)) {
            $query['ConsumerGroupName'] = $request->consumerGroupName;
        }
        if (!Utils::isUnset($request->consumerGroupPassword)) {
            $query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }
        if (!Utils::isUnset($request->consumerGroupUserName)) {
            $query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a consumer group for a change tracking instance.
     *  *
     * @param CreateConsumerGroupRequest $request CreateConsumerGroupRequest
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an alert rule.
     *  *
     * @param CreateDedicatedClusterMonitorRuleRequest $request CreateDedicatedClusterMonitorRuleRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDedicatedClusterMonitorRuleResponse CreateDedicatedClusterMonitorRuleResponse
     */
    public function createDedicatedClusterMonitorRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cpuAlarmThreshold)) {
            $query['CpuAlarmThreshold'] = $request->cpuAlarmThreshold;
        }
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->diskAlarmThreshold)) {
            $query['DiskAlarmThreshold'] = $request->diskAlarmThreshold;
        }
        if (!Utils::isUnset($request->duAlarmThreshold)) {
            $query['DuAlarmThreshold'] = $request->duAlarmThreshold;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memAlarmThreshold)) {
            $query['MemAlarmThreshold'] = $request->memAlarmThreshold;
        }
        if (!Utils::isUnset($request->noticeSwitch)) {
            $query['NoticeSwitch'] = $request->noticeSwitch;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phones)) {
            $query['Phones'] = $request->phones;
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
            'action'      => 'CreateDedicatedClusterMonitorRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedClusterMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an alert rule.
     *  *
     * @param CreateDedicatedClusterMonitorRuleRequest $request CreateDedicatedClusterMonitorRuleRequest
     *
     * @return CreateDedicatedClusterMonitorRuleResponse CreateDedicatedClusterMonitorRuleResponse
     */
    public function createDedicatedClusterMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedClusterMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Purchases a Data Transmission Service (DTS) instance.
     *  *
     * @description *   Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of DTS.
     * *   If you want to run a DTS task on a DTS dedicated cluster, you must configure the task before you purchase a DTS instance. You can call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation to configure a DTS task.
     *  *
     * @param CreateDtsInstanceRequest $request CreateDtsInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDtsInstanceResponse CreateDtsInstanceResponse
     */
    public function createDtsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->computeUnit)) {
            $query['ComputeUnit'] = $request->computeUnit;
        }
        if (!Utils::isUnset($request->databaseCount)) {
            $query['DatabaseCount'] = $request->databaseCount;
        }
        if (!Utils::isUnset($request->destinationEndpointEngineName)) {
            $query['DestinationEndpointEngineName'] = $request->destinationEndpointEngineName;
        }
        if (!Utils::isUnset($request->destinationRegion)) {
            $query['DestinationRegion'] = $request->destinationRegion;
        }
        if (!Utils::isUnset($request->dtsRegion)) {
            $query['DtsRegion'] = $request->dtsRegion;
        }
        if (!Utils::isUnset($request->du)) {
            $query['Du'] = $request->du;
        }
        if (!Utils::isUnset($request->feeType)) {
            $query['FeeType'] = $request->feeType;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxDu)) {
            $query['MaxDu'] = $request->maxDu;
        }
        if (!Utils::isUnset($request->minDu)) {
            $query['MinDu'] = $request->minDu;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointEngineName)) {
            $query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }
        if (!Utils::isUnset($request->sourceRegion)) {
            $query['SourceRegion'] = $request->sourceRegion;
        }
        if (!Utils::isUnset($request->syncArchitecture)) {
            $query['SyncArchitecture'] = $request->syncArchitecture;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDtsInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDtsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchases a Data Transmission Service (DTS) instance.
     *  *
     * @description *   Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of DTS.
     * *   If you want to run a DTS task on a DTS dedicated cluster, you must configure the task before you purchase a DTS instance. You can call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation to configure a DTS task.
     *  *
     * @param CreateDtsInstanceRequest $request CreateDtsInstanceRequest
     *
     * @return CreateDtsInstanceResponse CreateDtsInstanceResponse
     */
    public function createDtsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDtsInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or modifies an alert rule for a Data Transmission Service (DTS) task.
     *  *
     * @description DTS provides the following metrics for DTS tasks:************
     * *   **Latency**: DTS monitors the latency of a DTS task. If the latency of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of seconds.
     * *   **Status**: DTS monitors the status of a DTS task. If the state of the task changes to **Error** or **Restore**, an alert is triggered.
     * *   **Full Timeout**: DTS monitors the duration of a DTS task. If the duration of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of hours.
     *  *
     * @param CreateJobMonitorRuleRequest $request CreateJobMonitorRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobMonitorRuleResponse CreateJobMonitorRuleResponse
     */
    public function createJobMonitorRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delayRuleTime)) {
            $query['DelayRuleTime'] = $request->delayRuleTime;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->noticeValue)) {
            $query['NoticeValue'] = $request->noticeValue;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->times)) {
            $query['Times'] = $request->times;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJobMonitorRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or modifies an alert rule for a Data Transmission Service (DTS) task.
     *  *
     * @description DTS provides the following metrics for DTS tasks:************
     * *   **Latency**: DTS monitors the latency of a DTS task. If the latency of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of seconds.
     * *   **Status**: DTS monitors the status of a DTS task. If the state of the task changes to **Error** or **Restore**, an alert is triggered.
     * *   **Full Timeout**: DTS monitors the duration of a DTS task. If the duration of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of hours.
     *  *
     * @param CreateJobMonitorRuleRequest $request CreateJobMonitorRuleRequest
     *
     * @return CreateJobMonitorRuleResponse CreateJobMonitorRuleResponse
     */
    public function createJobMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Purchases a data migration instance.
     *  *
     * @param CreateMigrationJobRequest $request CreateMigrationJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMigrationJobResponse CreateMigrationJobResponse
     */
    public function createMigrationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->migrationJobClass)) {
            $query['MigrationJobClass'] = $request->migrationJobClass;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
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
            'action'      => 'CreateMigrationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchases a data migration instance.
     *  *
     * @param CreateMigrationJobRequest $request CreateMigrationJobRequest
     *
     * @return CreateMigrationJobResponse CreateMigrationJobResponse
     */
    public function createMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a reverse task for a data synchronization or migration task.
     *  *
     * @description 调用接口创建的反向任务会立即进行预检查，预检查通过后会进行增量数据采集，增量数据写入模块不会运行（需要调用**StartReverseWriter**接口运行）。
     * > 创建的反向任务固定为同步任务，且只有增量写入模块。
     *  *
     * @param CreateReverseDtsJobRequest $request CreateReverseDtsJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateReverseDtsJobResponse CreateReverseDtsJobResponse
     */
    public function createReverseDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->shardPassword)) {
            $query['ShardPassword'] = $request->shardPassword;
        }
        if (!Utils::isUnset($request->shardUsername)) {
            $query['ShardUsername'] = $request->shardUsername;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateReverseDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReverseDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a reverse task for a data synchronization or migration task.
     *  *
     * @description 调用接口创建的反向任务会立即进行预检查，预检查通过后会进行增量数据采集，增量数据写入模块不会运行（需要调用**StartReverseWriter**接口运行）。
     * > 创建的反向任务固定为同步任务，且只有增量写入模块。
     *  *
     * @param CreateReverseDtsJobRequest $request CreateReverseDtsJobRequest
     *
     * @return CreateReverseDtsJobResponse CreateReverseDtsJobResponse
     */
    public function createReverseDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReverseDtsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Purchases a change tracking instance.
     *  *
     * @param CreateSubscriptionInstanceRequest $request CreateSubscriptionInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSubscriptionInstanceResponse CreateSubscriptionInstanceResponse
     */
    public function createSubscriptionInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscriptionInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Purchases a change tracking instance.
     *  *
     * @param CreateSubscriptionInstanceRequest $request CreateSubscriptionInstanceRequest
     *
     * @return CreateSubscriptionInstanceResponse CreateSubscriptionInstanceResponse
     */
    public function createSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a data synchronization instance.
     *  *
     * @param CreateSynchronizationJobRequest $request CreateSynchronizationJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSynchronizationJobResponse CreateSynchronizationJobResponse
     */
    public function createSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstanceCount)) {
            $query['DBInstanceCount'] = $request->DBInstanceCount;
        }
        if (!Utils::isUnset($request->destRegion)) {
            $query['DestRegion'] = $request->destRegion;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceRegion)) {
            $query['SourceRegion'] = $request->sourceRegion;
        }
        if (!Utils::isUnset($request->synchronizationJobClass)) {
            $query['SynchronizationJobClass'] = $request->synchronizationJobClass;
        }
        if (!Utils::isUnset($request->topology)) {
            $query['Topology'] = $request->topology;
        }
        if (!Utils::isUnset($request->usedTime)) {
            $query['UsedTime'] = $request->usedTime;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['networkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->destinationEndpoint)) {
            $query['DestinationEndpoint'] = $request->destinationEndpoint;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSynchronizationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a data synchronization instance.
     *  *
     * @param CreateSynchronizationJobRequest $request CreateSynchronizationJobRequest
     *
     * @return CreateSynchronizationJobResponse CreateSynchronizationJobResponse
     */
    public function createSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a consumer group.
     *  *
     * @param DeleteConsumerChannelRequest $request DeleteConsumerChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerChannelResponse DeleteConsumerChannelResponse
     */
    public function deleteConsumerChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerGroupId)) {
            $query['ConsumerGroupId'] = $request->consumerGroupId;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
            'action'      => 'DeleteConsumerChannel',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a consumer group.
     *  *
     * @param DeleteConsumerChannelRequest $request DeleteConsumerChannelRequest
     *
     * @return DeleteConsumerChannelResponse DeleteConsumerChannelResponse
     */
    public function deleteConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a consumer group.
     *  *
     * @param DeleteConsumerGroupRequest $request DeleteConsumerGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->consumerGroupID)) {
            $query['ConsumerGroupID'] = $request->consumerGroupID;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a consumer group.
     *  *
     * @param DeleteConsumerGroupRequest $request DeleteConsumerGroupRequest
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a data migration, data synchronization, or change tracking task.
     *  *
     * @param DeleteDtsJobRequest $request DeleteDtsJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDtsJobResponse DeleteDtsJobResponse
     */
    public function deleteDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a data migration, data synchronization, or change tracking task.
     *  *
     * @param DeleteDtsJobRequest $request DeleteDtsJobRequest
     *
     * @return DeleteDtsJobResponse DeleteDtsJobResponse
     */
    public function deleteDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDtsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple data migration, data synchronization, or change tracking tasks.
     *  *
     * @param DeleteDtsJobsRequest $request DeleteDtsJobsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDtsJobsResponse DeleteDtsJobsResponse
     */
    public function deleteDtsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobIds)) {
            $query['DtsJobIds'] = $request->dtsJobIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDtsJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple data migration, data synchronization, or change tracking tasks.
     *  *
     * @param DeleteDtsJobsRequest $request DeleteDtsJobsRequest
     *
     * @return DeleteDtsJobsResponse DeleteDtsJobsResponse
     */
    public function deleteDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDtsJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a data migration instance.
     *  *
     * @param DeleteMigrationJobRequest $request DeleteMigrationJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMigrationJobResponse DeleteMigrationJobResponse
     */
    public function deleteMigrationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DeleteMigrationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a data migration instance.
     *  *
     * @param DeleteMigrationJobRequest $request DeleteMigrationJobRequest
     *
     * @return DeleteMigrationJobResponse DeleteMigrationJobResponse
     */
    public function deleteMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMigrationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a change tracking instance.
     *  *
     * @param DeleteSubscriptionInstanceRequest $request DeleteSubscriptionInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSubscriptionInstanceResponse DeleteSubscriptionInstanceResponse
     */
    public function deleteSubscriptionInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubscriptionInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a change tracking instance.
     *  *
     * @param DeleteSubscriptionInstanceRequest $request DeleteSubscriptionInstanceRequest
     *
     * @return DeleteSubscriptionInstanceResponse DeleteSubscriptionInstanceResponse
     */
    public function deleteSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a data synchronization instance.
     *  *
     * @param DeleteSynchronizationJobRequest $request DeleteSynchronizationJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSynchronizationJobResponse DeleteSynchronizationJobResponse
     */
    public function deleteSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSynchronizationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a data synchronization instance.
     *  *
     * @param DeleteSynchronizationJobRequest $request DeleteSynchronizationJobRequest
     *
     * @return DeleteSynchronizationJobResponse DeleteSynchronizationJobResponse
     */
    public function deleteSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询数据投递链路store账号
     *  *
     * @param DescribeChannelAccountRequest $request DescribeChannelAccountRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeChannelAccountResponse DescribeChannelAccountResponse
     */
    public function describeChannelAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelAccount',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询数据投递链路store账号
     *  *
     * @param DescribeChannelAccountRequest $request DescribeChannelAccountRequest
     *
     * @return DescribeChannelAccountResponse DescribeChannelAccountResponse
     */
    public function describeChannelAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 请求所有数据校验任务数据
     *  *
     * @param DescribeCheckJobsRequest $request DescribeCheckJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCheckJobsResponse DescribeCheckJobsResponse
     */
    public function describeCheckJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkJobId)) {
            $query['CheckJobId'] = $request->checkJobId;
        }
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
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
            'action'      => 'DescribeCheckJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 请求所有数据校验任务数据
     *  *
     * @param DescribeCheckJobsRequest $request DescribeCheckJobsRequest
     *
     * @return DescribeCheckJobsResponse DescribeCheckJobsResponse
     */
    public function describeCheckJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries operation logs of a Data Transmission Service (DTS) dedicated cluster.
     *  *
     * @param DescribeClusterOperateLogsRequest $request DescribeClusterOperateLogsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterOperateLogsResponse DescribeClusterOperateLogsResponse
     */
    public function describeClusterOperateLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $body['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $body['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerID)) {
            $body['OwnerID'] = $request->ownerID;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterOperateLogs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries operation logs of a Data Transmission Service (DTS) dedicated cluster.
     *  *
     * @param DescribeClusterOperateLogsRequest $request DescribeClusterOperateLogsRequest
     *
     * @return DescribeClusterOperateLogsResponse DescribeClusterOperateLogsResponse
     */
    public function describeClusterOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterOperateLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource usage of a cluster.
     *  *
     * @param DescribeClusterUsedUtilizationRequest $request DescribeClusterUsedUtilizationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterUsedUtilizationResponse DescribeClusterUsedUtilizationResponse
     */
    public function describeClusterUsedUtilizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $body['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $body['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->metricType)) {
            $body['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->ownerID)) {
            $body['OwnerID'] = $request->ownerID;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $body['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterUsedUtilization',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterUsedUtilizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resource usage of a cluster.
     *  *
     * @param DescribeClusterUsedUtilizationRequest $request DescribeClusterUsedUtilizationRequest
     *
     * @return DescribeClusterUsedUtilizationResponse DescribeClusterUsedUtilizationResponse
     */
    public function describeClusterUsedUtilization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterUsedUtilizationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the connectivity of Data Transmission Service (DTS) servers to the source and destination databases.
     *  *
     * @param DescribeConnectionStatusRequest $request DescribeConnectionStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConnectionStatusResponse DescribeConnectionStatusResponse
     */
    public function describeConnectionStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationEndpointArchitecture)) {
            $query['DestinationEndpointArchitecture'] = $request->destinationEndpointArchitecture;
        }
        if (!Utils::isUnset($request->destinationEndpointDatabaseName)) {
            $query['DestinationEndpointDatabaseName'] = $request->destinationEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->destinationEndpointEngineName)) {
            $query['DestinationEndpointEngineName'] = $request->destinationEndpointEngineName;
        }
        if (!Utils::isUnset($request->destinationEndpointIP)) {
            $query['DestinationEndpointIP'] = $request->destinationEndpointIP;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceID)) {
            $query['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }
        if (!Utils::isUnset($request->destinationEndpointInstanceType)) {
            $query['DestinationEndpointInstanceType'] = $request->destinationEndpointInstanceType;
        }
        if (!Utils::isUnset($request->destinationEndpointOracleSID)) {
            $query['DestinationEndpointOracleSID'] = $request->destinationEndpointOracleSID;
        }
        if (!Utils::isUnset($request->destinationEndpointPassword)) {
            $query['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }
        if (!Utils::isUnset($request->destinationEndpointPort)) {
            $query['DestinationEndpointPort'] = $request->destinationEndpointPort;
        }
        if (!Utils::isUnset($request->destinationEndpointRegion)) {
            $query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }
        if (!Utils::isUnset($request->destinationEndpointUserName)) {
            $query['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointArchitecture)) {
            $query['SourceEndpointArchitecture'] = $request->sourceEndpointArchitecture;
        }
        if (!Utils::isUnset($request->sourceEndpointDatabaseName)) {
            $query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }
        if (!Utils::isUnset($request->sourceEndpointEngineName)) {
            $query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }
        if (!Utils::isUnset($request->sourceEndpointIP)) {
            $query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceID)) {
            $query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }
        if (!Utils::isUnset($request->sourceEndpointInstanceType)) {
            $query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }
        if (!Utils::isUnset($request->sourceEndpointOracleSID)) {
            $query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }
        if (!Utils::isUnset($request->sourceEndpointPassword)) {
            $query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }
        if (!Utils::isUnset($request->sourceEndpointPort)) {
            $query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        if (!Utils::isUnset($request->sourceEndpointUserName)) {
            $query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConnectionStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConnectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the connectivity of Data Transmission Service (DTS) servers to the source and destination databases.
     *  *
     * @param DescribeConnectionStatusRequest $request DescribeConnectionStatusRequest
     *
     * @return DescribeConnectionStatusResponse DescribeConnectionStatusResponse
     */
    public function describeConnectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectionStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a consumer group, including the consumer group ID, consumer group name, username, and message latency.
     *  *
     * @param DescribeConsumerChannelRequest $request DescribeConsumerChannelRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConsumerChannelResponse DescribeConsumerChannelResponse
     */
    public function describeConsumerChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentChannelId)) {
            $query['ParentChannelId'] = $request->parentChannelId;
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
            'action'      => 'DescribeConsumerChannel',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a consumer group, including the consumer group ID, consumer group name, username, and message latency.
     *  *
     * @param DescribeConsumerChannelRequest $request DescribeConsumerChannelRequest
     *
     * @return DescribeConsumerChannelResponse DescribeConsumerChannelResponse
     */
    public function describeConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of consumer groups in a change tracking instance.
     *  *
     * @param DescribeConsumerGroupRequest $request DescribeConsumerGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConsumerGroupResponse DescribeConsumerGroupResponse
     */
    public function describeConsumerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConsumerGroup',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of consumer groups in a change tracking instance.
     *  *
     * @param DescribeConsumerGroupRequest $request DescribeConsumerGroupRequest
     *
     * @return DescribeConsumerGroupResponse DescribeConsumerGroupResponse
     */
    public function describeConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the CIDR blocks of DTS servers.
     *  *
     * @param DescribeDTSIPRequest $request DescribeDTSIPRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDTSIPResponse DescribeDTSIPResponse
     */
    public function describeDTSIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationEndpointRegion)) {
            $query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceEndpointRegion)) {
            $query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDTSIP',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDTSIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the CIDR blocks of DTS servers.
     *  *
     * @param DescribeDTSIPRequest $request DescribeDTSIPRequest
     *
     * @return DescribeDTSIPResponse DescribeDTSIPResponse
     */
    public function describeDTSIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDTSIPWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download URL of the data consistency verification report.
     *  *
     * @param DescribeDataCheckReportUrlRequest $request DescribeDataCheckReportUrlRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataCheckReportUrlResponse DescribeDataCheckReportUrlResponse
     */
    public function describeDataCheckReportUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tbName)) {
            $query['TbName'] = $request->tbName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataCheckReportUrl',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataCheckReportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the download URL of the data consistency verification report.
     *  *
     * @param DescribeDataCheckReportUrlRequest $request DescribeDataCheckReportUrlRequest
     *
     * @return DescribeDataCheckReportUrlResponse DescribeDataCheckReportUrlResponse
     */
    public function describeDataCheckReportUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCheckReportUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a data verification task.
     *  *
     * @param DescribeDataCheckTableDetailsRequest $request DescribeDataCheckTableDetailsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataCheckTableDetailsResponse DescribeDataCheckTableDetailsResponse
     */
    public function describeDataCheckTableDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
        if (!Utils::isUnset($request->schemaName)) {
            $query['SchemaName'] = $request->schemaName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataCheckTableDetails',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataCheckTableDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a data verification task.
     *  *
     * @param DescribeDataCheckTableDetailsRequest $request DescribeDataCheckTableDetailsRequest
     *
     * @return DescribeDataCheckTableDetailsResponse DescribeDataCheckTableDetailsResponse
     */
    public function describeDataCheckTableDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCheckTableDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about inconsistent data in the data verification task.
     *  *
     * @param DescribeDataCheckTableDiffDetailsRequest $request DescribeDataCheckTableDiffDetailsRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataCheckTableDiffDetailsResponse DescribeDataCheckTableDiffDetailsResponse
     */
    public function describeDataCheckTableDiffDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
        if (!Utils::isUnset($request->tbName)) {
            $query['TbName'] = $request->tbName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataCheckTableDiffDetails',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataCheckTableDiffDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about inconsistent data in the data verification task.
     *  *
     * @param DescribeDataCheckTableDiffDetailsRequest $request DescribeDataCheckTableDiffDetailsRequest
     *
     * @return DescribeDataCheckTableDiffDetailsResponse DescribeDataCheckTableDiffDetailsResponse
     */
    public function describeDataCheckTableDiffDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCheckTableDiffDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a dedicated cluster.
     *  *
     * @param DescribeDedicatedClusterRequest $request DescribeDedicatedClusterRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedClusterResponse DescribeDedicatedClusterResponse
     */
    public function describeDedicatedClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDedicatedCluster',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a dedicated cluster.
     *  *
     * @param DescribeDedicatedClusterRequest $request DescribeDedicatedClusterRequest
     *
     * @return DescribeDedicatedClusterResponse DescribeDedicatedClusterResponse
     */
    public function describeDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * @summary The mobile phone number to which alerts are sent. Separate multiple mobile phone numbers with commas (,).
     *  *
     * @param DescribeDedicatedClusterMonitorRuleRequest $request DescribeDedicatedClusterMonitorRuleRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedClusterMonitorRuleResponse DescribeDedicatedClusterMonitorRuleResponse
     */
    public function describeDedicatedClusterMonitorRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDedicatedClusterMonitorRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedClusterMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The mobile phone number to which alerts are sent. Separate multiple mobile phone numbers with commas (,).
     *  *
     * @param DescribeDedicatedClusterMonitorRuleRequest $request DescribeDedicatedClusterMonitorRuleRequest
     *
     * @return DescribeDedicatedClusterMonitorRuleResponse DescribeDedicatedClusterMonitorRuleResponse
     */
    public function describeDedicatedClusterMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of extract, transform, and load (ETL) tasks.
     *  *
     * @param DescribeDtsEtlJobVersionInfoRequest $request DescribeDtsEtlJobVersionInfoRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDtsEtlJobVersionInfoResponse DescribeDtsEtlJobVersionInfoResponse
     */
    public function describeDtsEtlJobVersionInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
            'action'      => 'DescribeDtsEtlJobVersionInfo',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDtsEtlJobVersionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of extract, transform, and load (ETL) tasks.
     *  *
     * @param DescribeDtsEtlJobVersionInfoRequest $request DescribeDtsEtlJobVersionInfoRequest
     *
     * @return DescribeDtsEtlJobVersionInfoResponse DescribeDtsEtlJobVersionInfoResponse
     */
    public function describeDtsEtlJobVersionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsEtlJobVersionInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询DTS任务配置
     *  *
     * @param DescribeDtsJobConfigRequest $request DescribeDtsJobConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDtsJobConfigResponse DescribeDtsJobConfigResponse
     */
    public function describeDtsJobConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->forAcceleration)) {
            $query['ForAcceleration'] = $request->forAcceleration;
        }
        if (!Utils::isUnset($request->module)) {
            $query['Module'] = $request->module;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeDtsJobConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDtsJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询DTS任务配置
     *  *
     * @param DescribeDtsJobConfigRequest $request DescribeDtsJobConfigRequest
     *
     * @return DescribeDtsJobConfigResponse DescribeDtsJobConfigResponse
     */
    public function describeDtsJobConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsJobConfigWithOptions($request, $runtime);
    }

    /**
     * @summary The latency of incremental data migration or synchronization.
     * \\\\\\\\\\>  If you query data migration tasks, the unit of this parameter is milliseconds. If you query data synchronization tasks, the unit of this parameter is seconds.
     *  *
     * @param DescribeDtsJobDetailRequest $request DescribeDtsJobDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDtsJobDetailResponse DescribeDtsJobDetailResponse
     */
    public function describeDtsJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceID)) {
            $query['DtsInstanceID'] = $request->dtsInstanceID;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->syncSubJobHistory)) {
            $query['SyncSubJobHistory'] = $request->syncSubJobHistory;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDtsJobDetail',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDtsJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The latency of incremental data migration or synchronization.
     * \\\\\\\\\\>  If you query data migration tasks, the unit of this parameter is milliseconds. If you query data synchronization tasks, the unit of this parameter is seconds.
     *  *
     * @param DescribeDtsJobDetailRequest $request DescribeDtsJobDetailRequest
     *
     * @return DescribeDtsJobDetailResponse DescribeDtsJobDetailResponse
     */
    public function describeDtsJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of Data Transmission Service (DTS) tasks and the details of each task.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Dts\\&api=DescribeDtsJobs\\&type=RPC\\&version=2020-01-01)
     *  *
     * @param DescribeDtsJobsRequest $request DescribeDtsJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDtsJobsResponse DescribeDtsJobsResponse
     */
    public function describeDtsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->destProductType)) {
            $query['DestProductType'] = $request->destProductType;
        }
        if (!Utils::isUnset($request->dtsBisLabel)) {
            $query['DtsBisLabel'] = $request->dtsBisLabel;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->orderColumn)) {
            $query['OrderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->orderDirection)) {
            $query['OrderDirection'] = $request->orderDirection;
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
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->srcProductType)) {
            $query['SrcProductType'] = $request->srcProductType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->withoutDbList)) {
            $query['WithoutDbList'] = $request->withoutDbList;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDtsJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of Data Transmission Service (DTS) tasks and the details of each task.
     *  *
     * @description ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Dts\\&api=DescribeDtsJobs\\&type=RPC\\&version=2020-01-01)
     *  *
     * @param DescribeDtsJobsRequest $request DescribeDtsJobsRequest
     *
     * @return DescribeDtsJobsResponse DescribeDtsJobsResponse
     */
    public function describeDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of a data migration or synchronization task.
     *  *
     * @param DescribeDtsServiceLogRequest $request DescribeDtsServiceLogRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDtsServiceLogResponse DescribeDtsServiceLogResponse
     */
    public function describeDtsServiceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subJobType)) {
            $query['SubJobType'] = $request->subJobType;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDtsServiceLog',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDtsServiceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of a data migration or synchronization task.
     *  *
     * @param DescribeDtsServiceLogRequest $request DescribeDtsServiceLogRequest
     *
     * @return DescribeDtsServiceLogResponse DescribeDtsServiceLogResponse
     */
    public function describeDtsServiceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsServiceLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the task that changes the database connection settings.
     *  *
     * @param DescribeEndpointSwitchStatusRequest $request DescribeEndpointSwitchStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEndpointSwitchStatusResponse DescribeEndpointSwitchStatusResponse
     */
    public function describeEndpointSwitchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEndpointSwitchStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of the task that changes the database connection settings.
     *  *
     * @param DescribeEndpointSwitchStatusRequest $request DescribeEndpointSwitchStatusRequest
     *
     * @return DescribeEndpointSwitchStatusResponse DescribeEndpointSwitchStatusResponse
     */
    public function describeEndpointSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of extract, transform, and load (ETL) tasks.
     *  *
     * @param DescribeEtlJobLogsRequest $request DescribeEtlJobLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEtlJobLogsResponse DescribeEtlJobLogsResponse
     */
    public function describeEtlJobLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
            'action'      => 'DescribeEtlJobLogs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEtlJobLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of extract, transform, and load (ETL) tasks.
     *  *
     * @param DescribeEtlJobLogsRequest $request DescribeEtlJobLogsRequest
     *
     * @return DescribeEtlJobLogsResponse DescribeEtlJobLogsResponse
     */
    public function describeEtlJobLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEtlJobLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of initial data synchronization, including the information about the schemas and historical data of the object to be synchronized.
     *  *
     * @param DescribeInitializationStatusRequest $request DescribeInitializationStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInitializationStatusResponse DescribeInitializationStatusResponse
     */
    public function describeInitializationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInitializationStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInitializationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of initial data synchronization, including the information about the schemas and historical data of the object to be synchronized.
     *  *
     * @param DescribeInitializationStatusRequest $request DescribeInitializationStatusRequest
     *
     * @return DescribeInitializationStatusResponse DescribeInitializationStatusResponse
     */
    public function describeInitializationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInitializationStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the monitoring rules of a Data Transmission Service (DTS) task.
     *  *
     * @param DescribeJobMonitorRuleRequest $request DescribeJobMonitorRuleRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobMonitorRuleResponse DescribeJobMonitorRuleResponse
     */
    public function describeJobMonitorRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
            'action'      => 'DescribeJobMonitorRule',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the monitoring rules of a Data Transmission Service (DTS) task.
     *  *
     * @param DescribeJobMonitorRuleRequest $request DescribeJobMonitorRuleRequest
     *
     * @return DescribeJobMonitorRuleResponse DescribeJobMonitorRuleResponse
     */
    public function describeJobMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metrics of a cluster.
     *  *
     * @param DescribeMetricListRequest $request DescribeMetricListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMetricListResponse DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $body['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->metricName)) {
            $body['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->metricType)) {
            $body['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->ownerID)) {
            $body['OwnerID'] = $request->ownerID;
        }
        if (!Utils::isUnset($request->param)) {
            $body['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metrics of a cluster.
     *  *
     * @param DescribeMetricListRequest $request DescribeMetricListRequest
     *
     * @return DescribeMetricListResponse DescribeMetricListResponse
     */
    public function describeMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert settings of a data migration instance.
     *  *
     * @param DescribeMigrationJobAlertRequest $request DescribeMigrationJobAlertRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMigrationJobAlertResponse DescribeMigrationJobAlertResponse
     */
    public function describeMigrationJobAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeMigrationJobAlert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the alert settings of a data migration instance.
     *  *
     * @param DescribeMigrationJobAlertRequest $request DescribeMigrationJobAlertRequest
     *
     * @return DescribeMigrationJobAlertResponse DescribeMigrationJobAlertResponse
     */
    public function describeMigrationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a data migration task.
     *  *
     * @param DescribeMigrationJobDetailRequest $request DescribeMigrationJobDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMigrationJobDetailResponse DescribeMigrationJobDetailResponse
     */
    public function describeMigrationJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->migrationMode)) {
            $query['MigrationMode'] = $request->migrationMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationJobDetail',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a data migration task.
     *  *
     * @param DescribeMigrationJobDetailRequest $request DescribeMigrationJobDetailRequest
     *
     * @return DescribeMigrationJobDetailResponse DescribeMigrationJobDetailResponse
     */
    public function describeMigrationJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a data migration task.
     *  *
     * @param DescribeMigrationJobStatusRequest $request DescribeMigrationJobStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMigrationJobStatusResponse DescribeMigrationJobStatusResponse
     */
    public function describeMigrationJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeMigrationJobStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a data migration task.
     *  *
     * @param DescribeMigrationJobStatusRequest $request DescribeMigrationJobStatusRequest
     *
     * @return DescribeMigrationJobStatusResponse DescribeMigrationJobStatusResponse
     */
    public function describeMigrationJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of data migration instances and the details of each instance.
     *  *
     * @param DescribeMigrationJobsRequest $request DescribeMigrationJobsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMigrationJobsResponse DescribeMigrationJobsResponse
     */
    public function describeMigrationJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->migrationJobName)) {
            $query['MigrationJobName'] = $request->migrationJobName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of data migration instances and the details of each instance.
     *  *
     * @param DescribeMigrationJobsRequest $request DescribeMigrationJobsRequest
     *
     * @return DescribeMigrationJobsResponse DescribeMigrationJobsResponse
     */
    public function describeMigrationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a Data Transmission Service (DTS) subtask that performs precheck, schema migration, initial schema synchronization, full data migration, initial full data synchronization, incremental data migration, or incremental data synchronization.
     *  *
     * @param DescribePreCheckStatusRequest $request DescribePreCheckStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePreCheckStatusResponse DescribePreCheckStatusResponse
     */
    public function describePreCheckStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->jobCode)) {
            $query['JobCode'] = $request->jobCode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->structPhase)) {
            $query['StructPhase'] = $request->structPhase;
        }
        if (!Utils::isUnset($request->structType)) {
            $query['StructType'] = $request->structType;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePreCheckStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePreCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a Data Transmission Service (DTS) subtask that performs precheck, schema migration, initial schema synchronization, full data migration, initial full data synchronization, incremental data migration, or incremental data synchronization.
     *  *
     * @param DescribePreCheckStatusRequest $request DescribePreCheckStatusRequest
     *
     * @return DescribePreCheckStatusResponse DescribePreCheckStatusResponse
     */
    public function describePreCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert settings of a change tracking instance.
     *  *
     * @param DescribeSubscriptionInstanceAlertRequest $request DescribeSubscriptionInstanceAlertRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionInstanceAlertResponse DescribeSubscriptionInstanceAlertResponse
     */
    public function describeSubscriptionInstanceAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionInstanceAlert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionInstanceAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the alert settings of a change tracking instance.
     *  *
     * @param DescribeSubscriptionInstanceAlertRequest $request DescribeSubscriptionInstanceAlertRequest
     *
     * @return DescribeSubscriptionInstanceAlertResponse DescribeSubscriptionInstanceAlertResponse
     */
    public function describeSubscriptionInstanceAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInstanceAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a change tracking instance.
     *  *
     * @param DescribeSubscriptionInstanceStatusRequest $request DescribeSubscriptionInstanceStatusRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionInstanceStatusResponse DescribeSubscriptionInstanceStatusResponse
     */
    public function describeSubscriptionInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionInstanceStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a change tracking instance.
     *  *
     * @param DescribeSubscriptionInstanceStatusRequest $request DescribeSubscriptionInstanceStatusRequest
     *
     * @return DescribeSubscriptionInstanceStatusResponse DescribeSubscriptionInstanceStatusResponse
     */
    public function describeSubscriptionInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of change tracking instances and the details of each instance.
     *  *
     * @param DescribeSubscriptionInstancesRequest $request DescribeSubscriptionInstancesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionInstancesResponse DescribeSubscriptionInstancesResponse
     */
    public function describeSubscriptionInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceName)) {
            $query['SubscriptionInstanceName'] = $request->subscriptionInstanceName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionInstances',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of change tracking instances and the details of each instance.
     *  *
     * @param DescribeSubscriptionInstancesRequest $request DescribeSubscriptionInstancesRequest
     *
     * @return DescribeSubscriptionInstancesResponse DescribeSubscriptionInstancesResponse
     */
    public function describeSubscriptionInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInstancesWithOptions($request, $runtime);
    }

    /**
     * @description *   When Data Transmission Service (DTS) tracks data changes from a PolarDB-X 1.0 instance, data is distributed across the attached ApsaraDB RDS for MySQL instances. DTS runs a subtask for each ApsaraDB RDS for MySQL instance. You can call this operation to query the details of the subtasks in a distributed change tracking task.
     * *   You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the ID of the change tracking instance and the ID of the consumer group.
     *  *
     * @param DescribeSubscriptionMetaRequest $tmpReq  DescribeSubscriptionMetaRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSubscriptionMetaResponse DescribeSubscriptionMetaResponse
     */
    public function describeSubscriptionMetaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSubscriptionMetaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->subMigrationJobIds)) {
            $request->subMigrationJobIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subMigrationJobIds, 'SubMigrationJobIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->topics)) {
            $request->topicsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->subMigrationJobIdsShrink)) {
            $query['SubMigrationJobIds'] = $request->subMigrationJobIdsShrink;
        }
        if (!Utils::isUnset($request->topicsShrink)) {
            $query['Topics'] = $request->topicsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSubscriptionMeta',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSubscriptionMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description *   When Data Transmission Service (DTS) tracks data changes from a PolarDB-X 1.0 instance, data is distributed across the attached ApsaraDB RDS for MySQL instances. DTS runs a subtask for each ApsaraDB RDS for MySQL instance. You can call this operation to query the details of the subtasks in a distributed change tracking task.
     * *   You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the ID of the change tracking instance and the ID of the consumer group.
     *  *
     * @param DescribeSubscriptionMetaRequest $request DescribeSubscriptionMetaRequest
     *
     * @return DescribeSubscriptionMetaResponse DescribeSubscriptionMetaResponse
     */
    public function describeSubscriptionMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionMetaWithOptions($request, $runtime);
    }

    /**
     * @summary 查看同步和迁移任务的增量写入延迟信息
     *  *
     * @param DescribeSyncStatusRequest $request DescribeSyncStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSyncStatusResponse DescribeSyncStatusResponse
     */
    public function describeSyncStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
            'action'      => 'DescribeSyncStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSyncStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看同步和迁移任务的增量写入延迟信息
     *  *
     * @param DescribeSyncStatusRequest $request DescribeSyncStatusRequest
     *
     * @return DescribeSyncStatusResponse DescribeSyncStatusResponse
     */
    public function describeSyncStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alert settings of a data synchronization instance.
     *  *
     * @param DescribeSynchronizationJobAlertRequest $request DescribeSynchronizationJobAlertRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynchronizationJobAlertResponse DescribeSynchronizationJobAlertResponse
     */
    public function describeSynchronizationJobAlertWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobAlert',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the alert settings of a data synchronization instance.
     *  *
     * @param DescribeSynchronizationJobAlertRequest $request DescribeSynchronizationJobAlertRequest
     *
     * @return DescribeSynchronizationJobAlertResponse DescribeSynchronizationJobAlertResponse
     */
    public function describeSynchronizationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobAlertWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether image matching is enabled for a data synchronization instance.
     *  *
     * @param DescribeSynchronizationJobReplicatorCompareRequest $request DescribeSynchronizationJobReplicatorCompareRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynchronizationJobReplicatorCompareResponse DescribeSynchronizationJobReplicatorCompareResponse
     */
    public function describeSynchronizationJobReplicatorCompareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobReplicatorCompare',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobReplicatorCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether image matching is enabled for a data synchronization instance.
     *  *
     * @param DescribeSynchronizationJobReplicatorCompareRequest $request DescribeSynchronizationJobReplicatorCompareRequest
     *
     * @return DescribeSynchronizationJobReplicatorCompareResponse DescribeSynchronizationJobReplicatorCompareResponse
     */
    public function describeSynchronizationJobReplicatorCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobReplicatorCompareWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a data synchronization instance.
     *  *
     * @param DescribeSynchronizationJobStatusRequest $request DescribeSynchronizationJobStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynchronizationJobStatusResponse DescribeSynchronizationJobStatusResponse
     */
    public function describeSynchronizationJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of a data synchronization instance.
     *  *
     * @param DescribeSynchronizationJobStatusRequest $request DescribeSynchronizationJobStatusRequest
     *
     * @return DescribeSynchronizationJobStatusResponse DescribeSynchronizationJobStatusResponse
     */
    public function describeSynchronizationJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of one or more data synchronization instances.
     *  *
     * @param DescribeSynchronizationJobStatusListRequest $request DescribeSynchronizationJobStatusListRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynchronizationJobStatusListResponse DescribeSynchronizationJobStatusListResponse
     */
    public function describeSynchronizationJobStatusListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationJobIdListJsonStr)) {
            $query['SynchronizationJobIdListJsonStr'] = $request->synchronizationJobIdListJsonStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobStatusList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of one or more data synchronization instances.
     *  *
     * @param DescribeSynchronizationJobStatusListRequest $request DescribeSynchronizationJobStatusListRequest
     *
     * @return DescribeSynchronizationJobStatusListResponse DescribeSynchronizationJobStatusListResponse
     */
    public function describeSynchronizationJobStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobStatusListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of data synchronization instances and the details of each instance.
     *  *
     * @param DescribeSynchronizationJobsRequest $request DescribeSynchronizationJobsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynchronizationJobsResponse DescribeSynchronizationJobsResponse
     */
    public function describeSynchronizationJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationJobName)) {
            $query['SynchronizationJobName'] = $request->synchronizationJobName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of data synchronization instances and the details of each instance.
     *  *
     * @param DescribeSynchronizationJobsRequest $request DescribeSynchronizationJobsRequest
     *
     * @return DescribeSynchronizationJobsResponse DescribeSynchronizationJobsResponse
     */
    public function describeSynchronizationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the task that changes the objects to be synchronized.
     *  *
     * @param DescribeSynchronizationObjectModifyStatusRequest $request DescribeSynchronizationObjectModifyStatusRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse DescribeSynchronizationObjectModifyStatusResponse
     */
    public function describeSynchronizationObjectModifyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSynchronizationObjectModifyStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSynchronizationObjectModifyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of the task that changes the objects to be synchronized.
     *  *
     * @param DescribeSynchronizationObjectModifyStatusRequest $request DescribeSynchronizationObjectModifyStatusRequest
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse DescribeSynchronizationObjectModifyStatusResponse
     */
    public function describeSynchronizationObjectModifyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationObjectModifyStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all the tags added to a data migration, data synchronization, or change tracking instance.
     *  *
     * @param DescribeTagKeysRequest $request DescribeTagKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagKeysResponse DescribeTagKeysResponse
     */
    public function describeTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagKeys',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all the tags added to a data migration, data synchronization, or change tracking instance.
     *  *
     * @param DescribeTagKeysRequest $request DescribeTagKeysRequest
     *
     * @return DescribeTagKeysResponse DescribeTagKeysResponse
     */
    public function describeTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all the tag values of a tag bound to a data migration, data synchronization, or change tracking instance.
     *  *
     * @param DescribeTagValuesRequest $request DescribeTagValuesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTagValuesResponse DescribeTagValuesResponse
     */
    public function describeTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTagValues',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all the tag values of a tag bound to a data migration, data synchronization, or change tracking instance.
     *  *
     * @param DescribeTagValuesRequest $request DescribeTagValuesRequest
     *
     * @return DescribeTagValuesResponse DescribeTagValuesResponse
     */
    public function describeTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary Initializes a built-in account on a node of an active geo-redundancy database cluster. Data Transmission Service (DTS) uses the built-in account to connect to the node and perform data synchronization tasks.
     *  *
     * @description *   The node must be an ApsaraDB RDS for MySQL instance or a self-managed MySQL database that is connected over Cloud Enterprise Network (CEN).
     * *   This operation is used to initialize the built-in account named rdsdt_dtsacct on a node of an active geo-redundancy database cluster. DTS uses this account to connect to the node and perform data synchronization tasks.
     *  *
     * @param InitDtsRdsInstanceRequest $request InitDtsRdsInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return InitDtsRdsInstanceResponse InitDtsRdsInstanceResponse
     */
    public function initDtsRdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->endpointCenId)) {
            $query['EndpointCenId'] = $request->endpointCenId;
        }
        if (!Utils::isUnset($request->endpointInstanceId)) {
            $query['EndpointInstanceId'] = $request->endpointInstanceId;
        }
        if (!Utils::isUnset($request->endpointInstanceType)) {
            $query['EndpointInstanceType'] = $request->endpointInstanceType;
        }
        if (!Utils::isUnset($request->endpointRegion)) {
            $query['EndpointRegion'] = $request->endpointRegion;
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
            'action'      => 'InitDtsRdsInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitDtsRdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initializes a built-in account on a node of an active geo-redundancy database cluster. Data Transmission Service (DTS) uses the built-in account to connect to the node and perform data synchronization tasks.
     *  *
     * @description *   The node must be an ApsaraDB RDS for MySQL instance or a self-managed MySQL database that is connected over Cloud Enterprise Network (CEN).
     * *   This operation is used to initialize the built-in account named rdsdt_dtsacct on a node of an active geo-redundancy database cluster. DTS uses this account to connect to the node and perform data synchronization tasks.
     *  *
     * @param InitDtsRdsInstanceRequest $request InitDtsRdsInstanceRequest
     *
     * @return InitDtsRdsInstanceResponse InitDtsRdsInstanceResponse
     */
    public function initDtsRdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initDtsRdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all clusters that are created within an Alibaba Cloud account. You can also query clusters based on the specified conditions.
     *  *
     * @param ListDedicatedClusterRequest $request ListDedicatedClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDedicatedClusterResponse ListDedicatedClusterResponse
     */
    public function listDedicatedClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderColumn)) {
            $query['OrderColumn'] = $request->orderColumn;
        }
        if (!Utils::isUnset($request->orderDirection)) {
            $query['OrderDirection'] = $request->orderDirection;
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
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDedicatedCluster',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all clusters that are created within an Alibaba Cloud account. You can also query clusters based on the specified conditions.
     *  *
     * @param ListDedicatedClusterRequest $request ListDedicatedClusterRequest
     *
     * @return ListDedicatedClusterResponse ListDedicatedClusterResponse
     */
    public function listDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are bound to specific data migration, data synchronization, or change tracking instances, or queries the instances to which specific tags are bound.
     *  *
     * @description ****
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2020-01-01',
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
     * @summary Queries the tags that are bound to specific data migration, data synchronization, or change tracking instances, or queries the instances to which specific tags are bound.
     *  *
     * @description ****
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
     * @summary Modifies the information of a consumer group, including the consumer group name, username, and password.
     *  *
     * @param ModifyConsumerChannelRequest $request ModifyConsumerChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyConsumerChannelResponse ModifyConsumerChannelResponse
     */
    public function modifyConsumerChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consumerGroupId)) {
            $query['ConsumerGroupId'] = $request->consumerGroupId;
        }
        if (!Utils::isUnset($request->consumerGroupName)) {
            $query['ConsumerGroupName'] = $request->consumerGroupName;
        }
        if (!Utils::isUnset($request->consumerGroupPassword)) {
            $query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }
        if (!Utils::isUnset($request->consumerGroupUserName)) {
            $query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
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
            'action'      => 'ModifyConsumerChannel',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information of a consumer group, including the consumer group name, username, and password.
     *  *
     * @param ModifyConsumerChannelRequest $request ModifyConsumerChannelRequest
     *
     * @return ModifyConsumerChannelResponse ModifyConsumerChannelResponse
     */
    public function modifyConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the password of a consumer group
     *  *
     * @param ModifyConsumerGroupPasswordRequest $request ModifyConsumerGroupPasswordRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyConsumerGroupPasswordResponse ModifyConsumerGroupPasswordResponse
     */
    public function modifyConsumerGroupPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->consumerGroupID)) {
            $query['ConsumerGroupID'] = $request->consumerGroupID;
        }
        if (!Utils::isUnset($request->consumerGroupName)) {
            $query['ConsumerGroupName'] = $request->consumerGroupName;
        }
        if (!Utils::isUnset($request->consumerGroupPassword)) {
            $query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }
        if (!Utils::isUnset($request->consumerGroupUserName)) {
            $query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        if (!Utils::isUnset($request->consumerGroupNewPassword)) {
            $query['consumerGroupNewPassword'] = $request->consumerGroupNewPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyConsumerGroupPassword',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyConsumerGroupPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the password of a consumer group
     *  *
     * @param ModifyConsumerGroupPasswordRequest $request ModifyConsumerGroupPasswordRequest
     *
     * @return ModifyConsumerGroupPasswordResponse ModifyConsumerGroupPasswordResponse
     */
    public function modifyConsumerGroupPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConsumerGroupPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the consumption checkpoint of a change tracking instance.
     *  *
     * @param ModifyConsumptionTimestampRequest $request ModifyConsumptionTimestampRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyConsumptionTimestampResponse ModifyConsumptionTimestampResponse
     */
    public function modifyConsumptionTimestampWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->consumptionTimestamp)) {
            $query['ConsumptionTimestamp'] = $request->consumptionTimestamp;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyConsumptionTimestamp',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyConsumptionTimestampResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the consumption checkpoint of a change tracking instance.
     *  *
     * @param ModifyConsumptionTimestampRequest $request ModifyConsumptionTimestampRequest
     *
     * @return ModifyConsumptionTimestampResponse ModifyConsumptionTimestampResponse
     */
    public function modifyConsumptionTimestamp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConsumptionTimestampWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration of a cluster.
     *  *
     * @description You can modify only the overcommit ratio.
     *  *
     * @param ModifyDedicatedClusterRequest $request ModifyDedicatedClusterRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDedicatedClusterResponse ModifyDedicatedClusterResponse
     */
    public function modifyDedicatedClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->dedicatedClusterName)) {
            $query['DedicatedClusterName'] = $request->dedicatedClusterName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->oversoldRatio)) {
            $query['OversoldRatio'] = $request->oversoldRatio;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDedicatedCluster',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of a cluster.
     *  *
     * @description You can modify only the overcommit ratio.
     *  *
     * @param ModifyDedicatedClusterRequest $request ModifyDedicatedClusterRequest
     *
     * @return ModifyDedicatedClusterResponse ModifyDedicatedClusterResponse
     */
    public function modifyDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a data synchronization task.
     *  *
     * @description When you configure a data synchronization task in the Data Transmission Service (DTS) console, you can move the pointer over **Next: Save Task Settings and Precheck** in the **Advanced Settings** step and click **Preview OpenAPI parameters** to view the parameters that are used to configure the task by calling an API operation.
     *  *
     * @param ModifyDtsJobRequest $tmpReq  ModifyDtsJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobResponse ModifyDtsJobResponse
     */
    public function modifyDtsJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyDtsJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dbList)) {
            $request->dbListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dbList, 'DbList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataInitialization)) {
            $query['DataInitialization'] = $request->dataInitialization;
        }
        if (!Utils::isUnset($request->dataSynchronization)) {
            $query['DataSynchronization'] = $request->dataSynchronization;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->fileOssUrl)) {
            $query['FileOssUrl'] = $request->fileOssUrl;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->structureInitialization)) {
            $query['StructureInitialization'] = $request->structureInitialization;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $body = [];
        if (!Utils::isUnset($request->dbListShrink)) {
            $body['DbList'] = $request->dbListShrink;
        }
        if (!Utils::isUnset($request->etlOperatorColumnReference)) {
            $body['EtlOperatorColumnReference'] = $request->etlOperatorColumnReference;
        }
        if (!Utils::isUnset($request->filterTableName)) {
            $body['FilterTableName'] = $request->filterTableName;
        }
        if (!Utils::isUnset($request->modifyTypeEnum)) {
            $body['ModifyTypeEnum'] = $request->modifyTypeEnum;
        }
        if (!Utils::isUnset($request->reserved)) {
            $body['Reserved'] = $request->reserved;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a data synchronization task.
     *  *
     * @description When you configure a data synchronization task in the Data Transmission Service (DTS) console, you can move the pointer over **Next: Save Task Settings and Precheck** in the **Advanced Settings** step and click **Preview OpenAPI parameters** to view the parameters that are used to configure the task by calling an API operation.
     *  *
     * @param ModifyDtsJobRequest $request ModifyDtsJobRequest
     *
     * @return ModifyDtsJobResponse ModifyDtsJobResponse
     */
    public function modifyDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDtsJobAdvanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDtsJobResponse
     */
    public function modifyDtsJobAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'Dts',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $modifyDtsJobReq = new ModifyDtsJobRequest([]);
        OpenApiUtilClient::convert($request, $modifyDtsJobReq);
        if (!Utils::isUnset($request->fileOssUrlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->fileOssUrlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $modifyDtsJobReq->fileOssUrl = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->modifyDtsJobWithOptions($modifyDtsJobReq, $runtime);
    }

    /**
     * @summary Modifies the parameters of a Data Transmission Service (DTS) task.
     *  *
     * @param ModifyDtsJobConfigRequest $request ModifyDtsJobConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobConfigResponse ModifyDtsJobConfigResponse
     */
    public function modifyDtsJobConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
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
            'action'      => 'ModifyDtsJobConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the parameters of a Data Transmission Service (DTS) task.
     *  *
     * @param ModifyDtsJobConfigRequest $request ModifyDtsJobConfigRequest
     *
     * @return ModifyDtsJobConfigResponse ModifyDtsJobConfigResponse
     */
    public function modifyDtsJobConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the dedicated cluster on which a Data Transmission Service (DTS) task runs.
     *  *
     * @description > After a DTS task is migrated from a dedicated cluster to a shared cluster, the task is billed on a pay-as-you-go basis.
     *  *
     * @param ModifyDtsJobDedicatedClusterRequest $request ModifyDtsJobDedicatedClusterRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobDedicatedClusterResponse ModifyDtsJobDedicatedClusterResponse
     */
    public function modifyDtsJobDedicatedClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->dtsJobIds)) {
            $query['DtsJobIds'] = $request->dtsJobIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDtsJobDedicatedCluster',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the dedicated cluster on which a Data Transmission Service (DTS) task runs.
     *  *
     * @description > After a DTS task is migrated from a dedicated cluster to a shared cluster, the task is billed on a pay-as-you-go basis.
     *  *
     * @param ModifyDtsJobDedicatedClusterRequest $request ModifyDtsJobDedicatedClusterRequest
     *
     * @return ModifyDtsJobDedicatedClusterResponse ModifyDtsJobDedicatedClusterResponse
     */
    public function modifyDtsJobDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the upper limit of DTS units (DUs) for a Data Transmission Service (DTS) task.
     *  *
     * @description *   DTS allows you to upgrade or downgrade the configurations of DTS instances in a dedicated cluster. You can adjust the resources that are occupied for task execution to dynamically adjust the number of tasks that can be scheduled in the cluster. This way, you can reduce the total number of DUs required for the cluster or release DUs.
     * *   Before you modify the upper limit of DUs for a DTS task, make sure that sufficient DUs are available.
     *  *
     * @param ModifyDtsJobDuLimitRequest $request ModifyDtsJobDuLimitRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobDuLimitResponse ModifyDtsJobDuLimitResponse
     */
    public function modifyDtsJobDuLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->duLimit)) {
            $query['DuLimit'] = $request->duLimit;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'ModifyDtsJobDuLimit',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobDuLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the upper limit of DTS units (DUs) for a Data Transmission Service (DTS) task.
     *  *
     * @description *   DTS allows you to upgrade or downgrade the configurations of DTS instances in a dedicated cluster. You can adjust the resources that are occupied for task execution to dynamically adjust the number of tasks that can be scheduled in the cluster. This way, you can reduce the total number of DUs required for the cluster or release DUs.
     * *   Before you modify the upper limit of DUs for a DTS task, make sure that sufficient DUs are available.
     *  *
     * @param ModifyDtsJobDuLimitRequest $request ModifyDtsJobDuLimitRequest
     *
     * @return ModifyDtsJobDuLimitResponse ModifyDtsJobDuLimitResponse
     */
    public function modifyDtsJobDuLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobDuLimitWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the source or destination database instance of a data synchronization or migration task in Data Transmission Service (DTS).
     *  *
     * @description >  After the database is changed, Data Transmission Service (DTS) rolls back the incremental write offset for 10 seconds. If the synchronized or migrated data does not have a primary key, make sure that no data is written to the source database while the source or destination database is being replaced. Otherwise, duplicate data may exist.
     *  *
     * @param ModifyDtsJobEndpointRequest $request ModifyDtsJobEndpointRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobEndpointResponse ModifyDtsJobEndpointResponse
     */
    public function modifyDtsJobEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunUid)) {
            $query['AliyunUid'] = $request->aliyunUid;
        }
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->endpointInstanceId)) {
            $query['EndpointInstanceId'] = $request->endpointInstanceId;
        }
        if (!Utils::isUnset($request->endpointInstanceType)) {
            $query['EndpointInstanceType'] = $request->endpointInstanceType;
        }
        if (!Utils::isUnset($request->endpointIp)) {
            $query['EndpointIp'] = $request->endpointIp;
        }
        if (!Utils::isUnset($request->endpointPort)) {
            $query['EndpointPort'] = $request->endpointPort;
        }
        if (!Utils::isUnset($request->endpointRegionId)) {
            $query['EndpointRegionId'] = $request->endpointRegionId;
        }
        if (!Utils::isUnset($request->modifyAccount)) {
            $query['ModifyAccount'] = $request->modifyAccount;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->shardPassword)) {
            $query['ShardPassword'] = $request->shardPassword;
        }
        if (!Utils::isUnset($request->shardUsername)) {
            $query['ShardUsername'] = $request->shardUsername;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDtsJobEndpoint',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the source or destination database instance of a data synchronization or migration task in Data Transmission Service (DTS).
     *  *
     * @description >  After the database is changed, Data Transmission Service (DTS) rolls back the incremental write offset for 10 seconds. If the synchronized or migrated data does not have a primary key, make sure that no data is written to the source database while the source or destination database is being replaced. Otherwise, duplicate data may exist.
     *  *
     * @param ModifyDtsJobEndpointRequest $request ModifyDtsJobEndpointRequest
     *
     * @return ModifyDtsJobEndpointResponse ModifyDtsJobEndpointResponse
     */
    public function modifyDtsJobEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the name of a Data Transmission Service (DTS) task.
     *  *
     * @param ModifyDtsJobNameRequest $request ModifyDtsJobNameRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobNameResponse ModifyDtsJobNameResponse
     */
    public function modifyDtsJobNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->dtsJobName)) {
            $query['DtsJobName'] = $request->dtsJobName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDtsJobName',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the name of a Data Transmission Service (DTS) task.
     *  *
     * @param ModifyDtsJobNameRequest $request ModifyDtsJobNameRequest
     *
     * @return ModifyDtsJobNameResponse ModifyDtsJobNameResponse
     */
    public function modifyDtsJobName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobNameWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the password of the account used to log on to the source or destination database in a Data Transmission Service (DTS) task.
     *  *
     * @param ModifyDtsJobPasswordRequest $request ModifyDtsJobPasswordRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDtsJobPasswordResponse ModifyDtsJobPasswordResponse
     */
    public function modifyDtsJobPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDtsJobPassword',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDtsJobPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the password of the account used to log on to the source or destination database in a Data Transmission Service (DTS) task.
     *  *
     * @param ModifyDtsJobPasswordRequest $request ModifyDtsJobPasswordRequest
     *
     * @return ModifyDtsJobPasswordResponse ModifyDtsJobPasswordResponse
     */
    public function modifyDtsJobPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Enables throttling for data synchronization and data migration.
     *  *
     * @param ModifyDynamicConfigRequest $request ModifyDynamicConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDynamicConfigResponse ModifyDynamicConfigResponse
     */
    public function modifyDynamicConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configList)) {
            $query['ConfigList'] = $request->configList;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->enableLimit)) {
            $query['EnableLimit'] = $request->enableLimit;
        }
        if (!Utils::isUnset($request->jobCode)) {
            $query['JobCode'] = $request->jobCode;
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
            'action'      => 'ModifyDynamicConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDynamicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables throttling for data synchronization and data migration.
     *  *
     * @param ModifyDynamicConfigRequest $request ModifyDynamicConfigRequest
     *
     * @return ModifyDynamicConfigResponse ModifyDynamicConfigResponse
     */
    public function modifyDynamicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDynamicConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a change tracking task.
     *  *
     * @description >  You can preview related API operation parameters when you modify the information about a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *  *
     * @param ModifySubscriptionRequest $request ModifySubscriptionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySubscriptionResponse ModifySubscriptionResponse
     */
    public function modifySubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbList)) {
            $query['DbList'] = $request->dbList;
        }
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionDataTypeDDL)) {
            $query['SubscriptionDataTypeDDL'] = $request->subscriptionDataTypeDDL;
        }
        if (!Utils::isUnset($request->subscriptionDataTypeDML)) {
            $query['SubscriptionDataTypeDML'] = $request->subscriptionDataTypeDML;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySubscription',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a change tracking task.
     *  *
     * @description >  You can preview related API operation parameters when you modify the information about a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *  *
     * @param ModifySubscriptionRequest $request ModifySubscriptionRequest
     *
     * @return ModifySubscriptionResponse ModifySubscriptionResponse
     */
    public function modifySubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the objects for change tracking.
     *  *
     * @param ModifySubscriptionObjectRequest $request ModifySubscriptionObjectRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySubscriptionObjectResponse ModifySubscriptionObjectResponse
     */
    public function modifySubscriptionObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        if (!Utils::isUnset($request->subscriptionObject)) {
            $query['SubscriptionObject'] = $request->subscriptionObject;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySubscriptionObject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySubscriptionObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the objects for change tracking.
     *  *
     * @param ModifySubscriptionObjectRequest $request ModifySubscriptionObjectRequest
     *
     * @return ModifySubscriptionObjectResponse ModifySubscriptionObjectResponse
     */
    public function modifySubscriptionObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionObjectWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the objects to be synchronized.
     *  *
     * @param ModifySynchronizationObjectRequest $request ModifySynchronizationObjectRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySynchronizationObjectResponse ModifySynchronizationObjectResponse
     */
    public function modifySynchronizationObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $body = [];
        if (!Utils::isUnset($request->synchronizationObjects)) {
            $body['SynchronizationObjects'] = $request->synchronizationObjects;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySynchronizationObject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySynchronizationObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the objects to be synchronized.
     *  *
     * @param ModifySynchronizationObjectRequest $request ModifySynchronizationObjectRequest
     *
     * @return ModifySynchronizationObjectResponse ModifySynchronizationObjectResponse
     */
    public function modifySynchronizationObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySynchronizationObjectWithOptions($request, $runtime);
    }

    /**
     * @summary Renews a Data Transmission Service (DTS) instance. This API operation is available only for subscription instances.
     *  *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buyCount)) {
            $query['BuyCount'] = $request->buyCount;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action'      => 'RenewInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renews a Data Transmission Service (DTS) instance. This API operation is available only for subscription instances.
     *  *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Resets a data synchronization or change tracking task.
     *  *
     * @description >  If you clear the configurations of a data synchronization or change tracking task, DTS deletes the task. Then, DTS creates another task. The task is in the Not Configured state. You must call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation reconfigure the task.
     *  *
     * @param ResetDtsJobRequest $request ResetDtsJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetDtsJobResponse ResetDtsJobResponse
     */
    public function resetDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets a data synchronization or change tracking task.
     *  *
     * @description >  If you clear the configurations of a data synchronization or change tracking task, DTS deletes the task. Then, DTS creates another task. The task is in the Not Configured state. You must call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation reconfigure the task.
     *  *
     * @param ResetDtsJobRequest $request ResetDtsJobRequest
     *
     * @return ResetDtsJobResponse ResetDtsJobResponse
     */
    public function resetDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDtsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Clears the configurations of a data synchronization task.
     *  *
     * @description >  If you clear the configurations of a data synchronization task, the task will be released. To start the task again, you must call the **ConfigureSynchronizationJob** operation to reconfigure the task.
     *  *
     * @param ResetSynchronizationJobRequest $request ResetSynchronizationJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetSynchronizationJobResponse ResetSynchronizationJobResponse
     */
    public function resetSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetSynchronizationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clears the configurations of a data synchronization task.
     *  *
     * @description >  If you clear the configurations of a data synchronization task, the task will be released. To start the task again, you must call the **ConfigureSynchronizationJob** operation to reconfigure the task.
     *  *
     * @param ResetSynchronizationJobRequest $request ResetSynchronizationJobRequest
     *
     * @return ResetSynchronizationJobResponse ResetSynchronizationJobResponse
     */
    public function resetSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @summary 调转双向任务的方向
     *  *
     * @param ReverseTwoWayDirectionRequest $request ReverseTwoWayDirectionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ReverseTwoWayDirectionResponse ReverseTwoWayDirectionResponse
     */
    public function reverseTwoWayDirectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->ignoreErrorSubJob)) {
            $query['IgnoreErrorSubJob'] = $request->ignoreErrorSubJob;
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
            'action'      => 'ReverseTwoWayDirection',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReverseTwoWayDirectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调转双向任务的方向
     *  *
     * @param ReverseTwoWayDirectionRequest $request ReverseTwoWayDirectionRequest
     *
     * @return ReverseTwoWayDirectionResponse ReverseTwoWayDirectionResponse
     */
    public function reverseTwoWayDirection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reverseTwoWayDirectionWithOptions($request, $runtime);
    }

    /**
     * @summary Ignores the precheck items that a data migration or synchronization task may fail to pass.
     *  *
     * @param ShieldPrecheckRequest $request ShieldPrecheckRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ShieldPrecheckResponse ShieldPrecheckResponse
     */
    public function shieldPrecheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->precheckItems)) {
            $query['PrecheckItems'] = $request->precheckItems;
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
            'action'      => 'ShieldPrecheck',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ShieldPrecheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Ignores the precheck items that a data migration or synchronization task may fail to pass.
     *  *
     * @param ShieldPrecheckRequest $request ShieldPrecheckRequest
     *
     * @return ShieldPrecheckResponse ShieldPrecheckResponse
     */
    public function shieldPrecheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->shieldPrecheckWithOptions($request, $runtime);
    }

    /**
     * @summary Skips one or more precheck items.
     *  *
     * @param SkipPreCheckRequest $request SkipPreCheckRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SkipPreCheckResponse SkipPreCheckResponse
     */
    public function skipPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->skip)) {
            $query['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->skipPreCheckItems)) {
            $query['SkipPreCheckItems'] = $request->skipPreCheckItems;
        }
        if (!Utils::isUnset($request->skipPreCheckNames)) {
            $query['SkipPreCheckNames'] = $request->skipPreCheckNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SkipPreCheck',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SkipPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Skips one or more precheck items.
     *  *
     * @param SkipPreCheckRequest $request SkipPreCheckRequest
     *
     * @return SkipPreCheckResponse SkipPreCheckResponse
     */
    public function skipPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipPreCheckWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a data migration, data synchronization, or change tracking task.
     *  *
     * @param StartDtsJobRequest $request StartDtsJobRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDtsJobResponse StartDtsJobResponse
     */
    public function startDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a data migration, data synchronization, or change tracking task.
     *  *
     * @param StartDtsJobRequest $request StartDtsJobRequest
     *
     * @return StartDtsJobResponse StartDtsJobResponse
     */
    public function startDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDtsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Starts multiple data migration or data synchronization tasks.
     *  *
     * @param StartDtsJobsRequest $request StartDtsJobsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDtsJobsResponse StartDtsJobsResponse
     */
    public function startDtsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobIds)) {
            $query['DtsJobIds'] = $request->dtsJobIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDtsJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts multiple data migration or data synchronization tasks.
     *  *
     * @param StartDtsJobsRequest $request StartDtsJobsRequest
     *
     * @return StartDtsJobsResponse StartDtsJobsResponse
     */
    public function startDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDtsJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a data migration task.
     *  *
     * @param StartMigrationJobRequest $request StartMigrationJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StartMigrationJobResponse StartMigrationJobResponse
     */
    public function startMigrationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'StartMigrationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a data migration task.
     *  *
     * @param StartMigrationJobRequest $request StartMigrationJobRequest
     *
     * @return StartMigrationJobResponse StartMigrationJobResponse
     */
    public function startMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMigrationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Starts the reverse task that is created by calling the CreateReverseDtsJob operation.
     *  *
     * @description Before you call this operation, make sure that your instance is not released and is paused. You can check the status of the instance in the Data Transmission Service (DTS) console or by calling the [DescribeDtsJobDetail](https://help.aliyun.com/document_detail/208925.html) operation.
     *  *
     * @param StartReverseWriterRequest $request StartReverseWriterRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartReverseWriterResponse StartReverseWriterResponse
     */
    public function startReverseWriterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkPoint)) {
            $query['CheckPoint'] = $request->checkPoint;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartReverseWriter',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartReverseWriterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts the reverse task that is created by calling the CreateReverseDtsJob operation.
     *  *
     * @description Before you call this operation, make sure that your instance is not released and is paused. You can check the status of the instance in the Data Transmission Service (DTS) console or by calling the [DescribeDtsJobDetail](https://help.aliyun.com/document_detail/208925.html) operation.
     *  *
     * @param StartReverseWriterRequest $request StartReverseWriterRequest
     *
     * @return StartReverseWriterResponse StartReverseWriterResponse
     */
    public function startReverseWriter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReverseWriterWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a change tracking task.
     *  *
     * @param StartSubscriptionInstanceRequest $request StartSubscriptionInstanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSubscriptionInstanceResponse StartSubscriptionInstanceResponse
     */
    public function startSubscriptionInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->subscriptionInstanceId)) {
            $query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartSubscriptionInstance',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a change tracking task.
     *  *
     * @param StartSubscriptionInstanceRequest $request StartSubscriptionInstanceRequest
     *
     * @return StartSubscriptionInstanceResponse StartSubscriptionInstanceResponse
     */
    public function startSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a data synchronization task.
     *  *
     * @param StartSynchronizationJobRequest $request StartSynchronizationJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSynchronizationJobResponse StartSynchronizationJobResponse
     */
    public function startSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartSynchronizationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts a data synchronization task.
     *  *
     * @param StartSynchronizationJobRequest $request StartSynchronizationJobRequest
     *
     * @return StartSynchronizationJobResponse StartSynchronizationJobResponse
     */
    public function startSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a cluster.
     *  *
     * @param StopDedicatedClusterRequest $request StopDedicatedClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDedicatedClusterResponse StopDedicatedClusterResponse
     */
    public function stopDedicatedClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dedicatedClusterId)) {
            $query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }
        if (!Utils::isUnset($request->dedicatedClusterName)) {
            $query['DedicatedClusterName'] = $request->dedicatedClusterName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'StopDedicatedCluster',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases a cluster.
     *  *
     * @param StopDedicatedClusterRequest $request StopDedicatedClusterRequest
     *
     * @return StopDedicatedClusterResponse StopDedicatedClusterResponse
     */
    public function stopDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a data migration, data synchronization, or change tracking task.
     *  *
     * @param StopDtsJobRequest $request StopDtsJobRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDtsJobResponse StopDtsJobResponse
     */
    public function stopDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a data migration, data synchronization, or change tracking task.
     *  *
     * @param StopDtsJobRequest $request StopDtsJobRequest
     *
     * @return StopDtsJobResponse StopDtsJobResponse
     */
    public function stopDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDtsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Stops multiple data migration or data synchronization tasks.
     *  *
     * @param StopDtsJobsRequest $request StopDtsJobsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDtsJobsResponse StopDtsJobsResponse
     */
    public function stopDtsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobIds)) {
            $query['DtsJobIds'] = $request->dtsJobIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDtsJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops multiple data migration or data synchronization tasks.
     *  *
     * @param StopDtsJobsRequest $request StopDtsJobsRequest
     *
     * @return StopDtsJobsResponse StopDtsJobsResponse
     */
    public function stopDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDtsJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a data migration task that is in the Migrating state.
     *  *
     * @param StopMigrationJobRequest $request StopMigrationJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StopMigrationJobResponse StopMigrationJobResponse
     */
    public function stopMigrationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'StopMigrationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a data migration task that is in the Migrating state.
     *  *
     * @param StopMigrationJobRequest $request StopMigrationJobRequest
     *
     * @return StopMigrationJobResponse StopMigrationJobResponse
     */
    public function stopMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMigrationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of migrated or synchronized objects in a Data Transmission Service (DTS) task.
     *  *
     * @param SummaryJobDetailRequest $request SummaryJobDetailRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SummaryJobDetailResponse SummaryJobDetailResponse
     */
    public function summaryJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->jobCode)) {
            $query['JobCode'] = $request->jobCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->structType)) {
            $query['StructType'] = $request->structType;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SummaryJobDetail',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SummaryJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of migrated or synchronized objects in a Data Transmission Service (DTS) task.
     *  *
     * @param SummaryJobDetailRequest $request SummaryJobDetailRequest
     *
     * @return SummaryJobDetailResponse SummaryJobDetailResponse
     */
    public function summaryJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->summaryJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Pauses a data migration, data synchronization, or change tracking task.
     *  *
     * @description ****
     *  *
     * @param SuspendDtsJobRequest $request SuspendDtsJobRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendDtsJobResponse SuspendDtsJobResponse
     */
    public function suspendDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendDtsJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Pauses a data migration, data synchronization, or change tracking task.
     *  *
     * @description ****
     *  *
     * @param SuspendDtsJobRequest $request SuspendDtsJobRequest
     *
     * @return SuspendDtsJobResponse SuspendDtsJobResponse
     */
    public function suspendDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendDtsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Suspends multiple Data Transmission Service (DTS) tasks.
     *  *
     * @param SuspendDtsJobsRequest $request SuspendDtsJobsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendDtsJobsResponse SuspendDtsJobsResponse
     */
    public function suspendDtsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobIds)) {
            $query['DtsJobIds'] = $request->dtsJobIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendDtsJobs',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Suspends multiple Data Transmission Service (DTS) tasks.
     *  *
     * @param SuspendDtsJobsRequest $request SuspendDtsJobsRequest
     *
     * @return SuspendDtsJobsResponse SuspendDtsJobsResponse
     */
    public function suspendDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendDtsJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Pauses a data migration task.
     *  *
     * @param SuspendMigrationJobRequest $request SuspendMigrationJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendMigrationJobResponse SuspendMigrationJobResponse
     */
    public function suspendMigrationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->migrationJobId)) {
            $query['MigrationJobId'] = $request->migrationJobId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'SuspendMigrationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Pauses a data migration task.
     *  *
     * @param SuspendMigrationJobRequest $request SuspendMigrationJobRequest
     *
     * @return SuspendMigrationJobResponse SuspendMigrationJobResponse
     */
    public function suspendMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendMigrationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Pauses a data synchronization task.
     *  *
     * @description >
     * *   When you call this operation, the data synchronization task must be in the Synchronizing state.
     * *   We recommend that you do not pause a data synchronization task for more than 6 hours. Otherwise, the task cannot be started again.
     * *   If the billing method is pay-as-you-go, DTS charges a fee even when the task is paused. This is because DTS only stops writing data to the destination database. DTS continues to pull the logs of the source database so that the task can resume quickly after it is restarted. Therefore, data synchronization consumes resources such as the bandwidth of the source database.
     *  *
     * @param SuspendSynchronizationJobRequest $request SuspendSynchronizationJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendSynchronizationJobResponse SuspendSynchronizationJobResponse
     */
    public function suspendSynchronizationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendSynchronizationJob',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Pauses a data synchronization task.
     *  *
     * @description >
     * *   When you call this operation, the data synchronization task must be in the Synchronizing state.
     * *   We recommend that you do not pause a data synchronization task for more than 6 hours. Otherwise, the task cannot be started again.
     * *   If the billing method is pay-as-you-go, DTS charges a fee even when the task is paused. This is because DTS only stops writing data to the destination database. DTS continues to pull the logs of the source database so that the task can resume quickly after it is restarted. Therefore, data synchronization consumes resources such as the bandwidth of the source database.
     *  *
     * @param SuspendSynchronizationJobRequest $request SuspendSynchronizationJobRequest
     *
     * @return SuspendSynchronizationJobResponse SuspendSynchronizationJobResponse
     */
    public function suspendSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * @summary 物理迁移任务切换上云
     *  *
     * @param SwitchPhysicalDtsJobToCloudRequest $request SwitchPhysicalDtsJobToCloudRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchPhysicalDtsJobToCloudResponse SwitchPhysicalDtsJobToCloudResponse
     */
    public function switchPhysicalDtsJobToCloudWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchPhysicalDtsJobToCloud',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchPhysicalDtsJobToCloudResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 物理迁移任务切换上云
     *  *
     * @param SwitchPhysicalDtsJobToCloudRequest $request SwitchPhysicalDtsJobToCloudRequest
     *
     * @return SwitchPhysicalDtsJobToCloudResponse SwitchPhysicalDtsJobToCloudResponse
     */
    public function switchPhysicalDtsJobToCloud($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchPhysicalDtsJobToCloudWithOptions($request, $runtime);
    }

    /**
     * @summary After you perform a primary/secondary switchover on the source or destination database, you can call the SwitchSynchronizationEndpoint operation to transfer the connection settings to Data Transmission Service (DTS). DTS will restart the data synchronization task from the breakpoint.
     *  *
     * @param SwitchSynchronizationEndpointRequest $request SwitchSynchronizationEndpointRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchSynchronizationEndpointResponse SwitchSynchronizationEndpointResponse
     */
    public function switchSynchronizationEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        if (!Utils::isUnset($request->synchronizationJobId)) {
            $query['SynchronizationJobId'] = $request->synchronizationJobId;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->sourceEndpoint)) {
            $query['SourceEndpoint'] = $request->sourceEndpoint;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchSynchronizationEndpoint',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchSynchronizationEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary After you perform a primary/secondary switchover on the source or destination database, you can call the SwitchSynchronizationEndpoint operation to transfer the connection settings to Data Transmission Service (DTS). DTS will restart the data synchronization task from the breakpoint.
     *  *
     * @param SwitchSynchronizationEndpointRequest $request SwitchSynchronizationEndpointRequest
     *
     * @return SwitchSynchronizationEndpointResponse SwitchSynchronizationEndpointResponse
     */
    public function switchSynchronizationEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSynchronizationEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Adds tags to data migration, data synchronization, or change tracking instances.
     *  *
     * @description If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can query instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region within an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to an instance.
     * *   You can add tags to up to 50 instances in each request.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2020-01-01',
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
     * @summary Adds tags to data migration, data synchronization, or change tracking instances.
     *  *
     * @description If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can query instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region within an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to an instance.
     * *   You can add tags to up to 50 instances in each request.
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
     * @summary Upgrades or downgrades a Data Transmission Service (DTS) instance.
     *  *
     * @param TransferInstanceClassRequest $request TransferInstanceClassRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferInstanceClassResponse TransferInstanceClassResponse
     */
    public function transferInstanceClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
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
            'action'      => 'TransferInstanceClass',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades or downgrades a Data Transmission Service (DTS) instance.
     *  *
     * @param TransferInstanceClassRequest $request TransferInstanceClassRequest
     *
     * @return TransferInstanceClassResponse TransferInstanceClassResponse
     */
    public function transferInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInstanceClassWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of a Data Transmission Service (DTS) instance.
     *  *
     * @description Before you call this operation, make sure that you fully understand the [billing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of DTS.
     * *   To prevent resource waste, make sure that the billing method of your DTS instances has to be changed.
     * *   Data migration instances only support the pay-as-you-go billing method.
     *  *
     * @param TransferPayTypeRequest $request TransferPayTypeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferPayTypeResponse TransferPayTypeResponse
     */
    public function transferPayTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->buyCount)) {
            $query['BuyCount'] = $request->buyCount;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->maxDu)) {
            $query['MaxDu'] = $request->maxDu;
        }
        if (!Utils::isUnset($request->minDu)) {
            $query['MinDu'] = $request->minDu;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
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
            'action'      => 'TransferPayType',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the billing method of a Data Transmission Service (DTS) instance.
     *  *
     * @description Before you call this operation, make sure that you fully understand the [billing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of DTS.
     * *   To prevent resource waste, make sure that the billing method of your DTS instances has to be changed.
     * *   Data migration instances only support the pay-as-you-go billing method.
     *  *
     * @param TransferPayTypeRequest $request TransferPayTypeRequest
     *
     * @return TransferPayTypeResponse TransferPayTypeResponse
     */
    public function transferPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferPayTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds tags from one or more data migration, data synchronization, or change tracking instances.
     *  *
     * @description >  If a tag is unbound from an instance and is not bound to other instances, the tag is deleted.
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version'     => '2020-01-01',
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
     * @summary Unbinds tags from one or more data migration, data synchronization, or change tracking instances.
     *  *
     * @description >  If a tag is unbound from an instance and is not bound to other instances, the tag is deleted.
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
     * @summary Upgrades the synchronization topology of a data synchronization instance from one-way synchronization to two-way synchronization. This operation is supported only for pay-as-you-go synchronization instances.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of Data Transmission Service (DTS)
     * When you call this operation, take note of the following information:
     * *   The source and destination databases of the data synchronization task are both **MySQL** databases.
     * *   The synchronization topology of the data synchronization task is **one-way synchronization**.
     * *   The data synchronization task is in the **Synchronizing** state.
     * *   The upgrade operation causes data synchronization latency of about 5 seconds. We recommend that you perform this operation during off-peak hours.
     *  *
     * @param UpgradeTwoWayRequest $request UpgradeTwoWayRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeTwoWayResponse UpgradeTwoWayResponse
     */
    public function upgradeTwoWayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'UpgradeTwoWay',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeTwoWayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the synchronization topology of a data synchronization instance from one-way synchronization to two-way synchronization. This operation is supported only for pay-as-you-go synchronization instances.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of Data Transmission Service (DTS)
     * When you call this operation, take note of the following information:
     * *   The source and destination databases of the data synchronization task are both **MySQL** databases.
     * *   The synchronization topology of the data synchronization task is **one-way synchronization**.
     * *   The data synchronization task is in the **Synchronizing** state.
     * *   The upgrade operation causes data synchronization latency of about 5 seconds. We recommend that you perform this operation during off-peak hours.
     *  *
     * @param UpgradeTwoWayRequest $request UpgradeTwoWayRequest
     *
     * @return UpgradeTwoWayResponse UpgradeTwoWayResponse
     */
    public function upgradeTwoWay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeTwoWayWithOptions($request, $runtime);
    }

    /**
     * @summary If the \\\\*\\\\*source or destination instance\\\\*\\\\* is a \\\\*\\\\*self-managed database\\\\*\\\\* or a \\\\*\\\\*third-party cloud database\\\\*\\\\*, you need to call this operation to query the CIDR blocks of DTS servers. Then, you need to add the CIDR blocks of DTS servers to the security settings of the source or destination instance, for example, the firewall of your database. For more information, see \\[Add the CIDR blocks of DTS servers to the security settings of on-premises databases]\\\\(~~176627~~).
     * \\\\>  If the \\\\*\\\\*source or destination database\\\\*\\\\* is an \\\\*\\\\*ApsaraDB database instance\\\\*\\\\* (such as RDS instance and ApsaraDB for MongoDB instance) or a \\\\*\\\\*self-managed database hosted on Elastic Compute Service (ECS)\\\\*\\\\*, you do not need to add the CIDR blocks. When you click \\\\*\\\\*Set Whitelist and Next\\\\*\\\\* in the DTS console, DTS automatically adds the CIDR blocks of DTS servers to the security settings of the source or destination instance.
     *  *
     * @description The operation that you want to perform. Set the value to **WhiteIpList**.
     *  *
     * @param WhiteIpListRequest $request WhiteIpListRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return WhiteIpListResponse WhiteIpListResponse
     */
    public function whiteIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destAliyunUid)) {
            $query['DestAliyunUid'] = $request->destAliyunUid;
        }
        if (!Utils::isUnset($request->destPrimaryVswId)) {
            $query['DestPrimaryVswId'] = $request->destPrimaryVswId;
        }
        if (!Utils::isUnset($request->destRoleName)) {
            $query['DestRoleName'] = $request->destRoleName;
        }
        if (!Utils::isUnset($request->destSecondaryVswId)) {
            $query['DestSecondaryVswId'] = $request->destSecondaryVswId;
        }
        if (!Utils::isUnset($request->destVpcId)) {
            $query['DestVpcId'] = $request->destVpcId;
        }
        if (!Utils::isUnset($request->destinationRegion)) {
            $query['DestinationRegion'] = $request->destinationRegion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->srcAliyunUid)) {
            $query['SrcAliyunUid'] = $request->srcAliyunUid;
        }
        if (!Utils::isUnset($request->srcPrimaryVswId)) {
            $query['SrcPrimaryVswId'] = $request->srcPrimaryVswId;
        }
        if (!Utils::isUnset($request->srcRoleName)) {
            $query['SrcRoleName'] = $request->srcRoleName;
        }
        if (!Utils::isUnset($request->srcSecondaryVswId)) {
            $query['SrcSecondaryVswId'] = $request->srcSecondaryVswId;
        }
        if (!Utils::isUnset($request->srcVpcId)) {
            $query['SrcVpcId'] = $request->srcVpcId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->zeroEtlJob)) {
            $query['ZeroEtlJob'] = $request->zeroEtlJob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WhiteIpList',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WhiteIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary If the \\\\*\\\\*source or destination instance\\\\*\\\\* is a \\\\*\\\\*self-managed database\\\\*\\\\* or a \\\\*\\\\*third-party cloud database\\\\*\\\\*, you need to call this operation to query the CIDR blocks of DTS servers. Then, you need to add the CIDR blocks of DTS servers to the security settings of the source or destination instance, for example, the firewall of your database. For more information, see \\[Add the CIDR blocks of DTS servers to the security settings of on-premises databases]\\\\(~~176627~~).
     * \\\\>  If the \\\\*\\\\*source or destination database\\\\*\\\\* is an \\\\*\\\\*ApsaraDB database instance\\\\*\\\\* (such as RDS instance and ApsaraDB for MongoDB instance) or a \\\\*\\\\*self-managed database hosted on Elastic Compute Service (ECS)\\\\*\\\\*, you do not need to add the CIDR blocks. When you click \\\\*\\\\*Set Whitelist and Next\\\\*\\\\* in the DTS console, DTS automatically adds the CIDR blocks of DTS servers to the security settings of the source or destination instance.
     *  *
     * @description The operation that you want to perform. Set the value to **WhiteIpList**.
     *  *
     * @param WhiteIpListRequest $request WhiteIpListRequest
     *
     * @return WhiteIpListResponse WhiteIpListResponse
     */
    public function whiteIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->whiteIpListWithOptions($request, $runtime);
    }
}
