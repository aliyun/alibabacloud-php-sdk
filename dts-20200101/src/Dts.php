<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\ConvertInstanceResourceGroupRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConvertInstanceResourceGroupResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CountJobByConditionRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CountJobByConditionResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDedicatedClusterMonitorRuleRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDedicatedClusterMonitorRuleResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDocParserJobAdvanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDocParserJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDocParserJobResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDocParserJobResultRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDocParserJobResultResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDocParserJobStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDocParserJobStatusResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeFullProcessListRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeFullProcessListResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstancesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstancesResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckCreateGadOrderResultResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\DetachGadInstanceDbMemberRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DetachGadInstanceDbMemberResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\InitDtsRdsInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\InitDtsRdsInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyGadInstanceNameRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyGadInstanceNameResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyJobStepCheckpointRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyJobStepCheckpointResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionObjectRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionObjectResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySubscriptionResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySynchronizationObjectRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifySynchronizationObjectResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\PreCheckCreateGadOrderRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\PreCheckCreateGadOrderResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\SkipFullJobTableRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\SkipFullJobTableResponse;
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
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dts extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'dts.aliyuncs.com',
            'cn-beijing' => 'dts.aliyuncs.com',
            'cn-zhangjiakou' => 'dts.aliyuncs.com',
            'cn-huhehaote' => 'dts.aliyuncs.com',
            'cn-hangzhou' => 'dts.aliyuncs.com',
            'cn-shanghai' => 'dts.aliyuncs.com',
            'cn-shenzhen' => 'dts.aliyuncs.com',
            'cn-hongkong' => 'dts.aliyuncs.com',
            'ap-southeast-1' => 'dts.aliyuncs.com',
            'ap-southeast-2' => 'dts.aliyuncs.com',
            'ap-southeast-3' => 'dts.aliyuncs.com',
            'ap-southeast-5' => 'dts.aliyuncs.com',
            'eu-west-1' => 'dts.aliyuncs.com',
            'us-west-1' => 'dts.aliyuncs.com',
            'us-east-1' => 'dts.aliyuncs.com',
            'eu-central-1' => 'dts.aliyuncs.com',
            'me-east-1' => 'dts.aliyuncs.com',
            'ap-south-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-finance' => 'dts.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dts.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dts.aliyuncs.com',
            'cn-north-2-gov-1' => 'dts.aliyuncs.com',
            'ap-northeast-2-pop' => 'dts.aliyuncs.com',
            'cn-beijing-finance-1' => 'dts.aliyuncs.com',
            'cn-beijing-finance-pop' => 'dts.aliyuncs.com',
            'cn-beijing-gov-1' => 'dts.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'dts.aliyuncs.com',
            'cn-chengdu' => 'dts.aliyuncs.com',
            'cn-edge-1' => 'dts.aliyuncs.com',
            'cn-fujian' => 'dts.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'dts.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'dts.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'dts.aliyuncs.com',
            'cn-hangzhou-test-306' => 'dts.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'dts.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'dts.aliyuncs.com',
            'cn-qingdao-nebula' => 'dts.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'dts.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'dts.aliyuncs.com',
            'cn-shanghai-inner' => 'dts.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'dts.aliyuncs.com',
            'cn-shenzhen-inner' => 'dts.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'dts.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'dts.aliyuncs.com',
            'cn-wuhan' => 'dts.aliyuncs.com',
            'cn-wulanchabu' => 'dts.aliyuncs.com',
            'cn-yushanfang' => 'dts.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'dts.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'dts.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'dts.aliyuncs.com',
            'eu-west-1-oxs' => 'dts.aliyuncs.com',
            'rus-west-1-pop' => 'dts.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dts', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string  $bucketName
     * @param mixed[] $form
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form)
    {
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
        $_response = Dara::send($_request);

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
     * Configures a data migration or synchronization task.
     *
     * @param Request - ConfigureDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureDtsJobResponse
     *
     * @param ConfigureDtsJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigureDtsJobResponse
     */
    public function configureDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkpoint) {
            @$query['Checkpoint'] = $request->checkpoint;
        }

        if (null !== $request->dataCheckConfigure) {
            @$query['DataCheckConfigure'] = $request->dataCheckConfigure;
        }

        if (null !== $request->dataInitialization) {
            @$query['DataInitialization'] = $request->dataInitialization;
        }

        if (null !== $request->dataSynchronization) {
            @$query['DataSynchronization'] = $request->dataSynchronization;
        }

        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->delayNotice) {
            @$query['DelayNotice'] = $request->delayNotice;
        }

        if (null !== $request->delayPhone) {
            @$query['DelayPhone'] = $request->delayPhone;
        }

        if (null !== $request->delayRuleTime) {
            @$query['DelayRuleTime'] = $request->delayRuleTime;
        }

        if (null !== $request->destCaCertificateOssUrl) {
            @$query['DestCaCertificateOssUrl'] = $request->destCaCertificateOssUrl;
        }

        if (null !== $request->destCaCertificatePassword) {
            @$query['DestCaCertificatePassword'] = $request->destCaCertificatePassword;
        }

        if (null !== $request->destClientCertOssUrl) {
            @$query['DestClientCertOssUrl'] = $request->destClientCertOssUrl;
        }

        if (null !== $request->destClientKeyOssUrl) {
            @$query['DestClientKeyOssUrl'] = $request->destClientKeyOssUrl;
        }

        if (null !== $request->destClientPassword) {
            @$query['DestClientPassword'] = $request->destClientPassword;
        }

        if (null !== $request->destPrimaryVswId) {
            @$query['DestPrimaryVswId'] = $request->destPrimaryVswId;
        }

        if (null !== $request->destSecondaryVswId) {
            @$query['DestSecondaryVswId'] = $request->destSecondaryVswId;
        }

        if (null !== $request->destinationEndpointDataBaseName) {
            @$query['DestinationEndpointDataBaseName'] = $request->destinationEndpointDataBaseName;
        }

        if (null !== $request->destinationEndpointEngineName) {
            @$query['DestinationEndpointEngineName'] = $request->destinationEndpointEngineName;
        }

        if (null !== $request->destinationEndpointIP) {
            @$query['DestinationEndpointIP'] = $request->destinationEndpointIP;
        }

        if (null !== $request->destinationEndpointInstanceID) {
            @$query['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }

        if (null !== $request->destinationEndpointInstanceType) {
            @$query['DestinationEndpointInstanceType'] = $request->destinationEndpointInstanceType;
        }

        if (null !== $request->destinationEndpointOracleSID) {
            @$query['DestinationEndpointOracleSID'] = $request->destinationEndpointOracleSID;
        }

        if (null !== $request->destinationEndpointOwnerID) {
            @$query['DestinationEndpointOwnerID'] = $request->destinationEndpointOwnerID;
        }

        if (null !== $request->destinationEndpointPassword) {
            @$query['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }

        if (null !== $request->destinationEndpointPort) {
            @$query['DestinationEndpointPort'] = $request->destinationEndpointPort;
        }

        if (null !== $request->destinationEndpointRegion) {
            @$query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }

        if (null !== $request->destinationEndpointRole) {
            @$query['DestinationEndpointRole'] = $request->destinationEndpointRole;
        }

        if (null !== $request->destinationEndpointUserName) {
            @$query['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }

        if (null !== $request->disasterRecoveryJob) {
            @$query['DisasterRecoveryJob'] = $request->disasterRecoveryJob;
        }

        if (null !== $request->dtsBisLabel) {
            @$query['DtsBisLabel'] = $request->dtsBisLabel;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->dtsJobName) {
            @$query['DtsJobName'] = $request->dtsJobName;
        }

        if (null !== $request->errorNotice) {
            @$query['ErrorNotice'] = $request->errorNotice;
        }

        if (null !== $request->errorPhone) {
            @$query['ErrorPhone'] = $request->errorPhone;
        }

        if (null !== $request->fileOssUrl) {
            @$query['FileOssUrl'] = $request->fileOssUrl;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->maxDu) {
            @$query['MaxDu'] = $request->maxDu;
        }

        if (null !== $request->minDu) {
            @$query['MinDu'] = $request->minDu;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointDatabaseName) {
            @$query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }

        if (null !== $request->sourceEndpointEngineName) {
            @$query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointInstanceType) {
            @$query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }

        if (null !== $request->sourceEndpointOracleSID) {
            @$query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }

        if (null !== $request->sourceEndpointOwnerID) {
            @$query['SourceEndpointOwnerID'] = $request->sourceEndpointOwnerID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointRole) {
            @$query['SourceEndpointRole'] = $request->sourceEndpointRole;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        if (null !== $request->sourceEndpointVSwitchID) {
            @$query['SourceEndpointVSwitchID'] = $request->sourceEndpointVSwitchID;
        }

        if (null !== $request->srcCaCertificateOssUrl) {
            @$query['SrcCaCertificateOssUrl'] = $request->srcCaCertificateOssUrl;
        }

        if (null !== $request->srcCaCertificatePassword) {
            @$query['SrcCaCertificatePassword'] = $request->srcCaCertificatePassword;
        }

        if (null !== $request->srcClientCertOssUrl) {
            @$query['SrcClientCertOssUrl'] = $request->srcClientCertOssUrl;
        }

        if (null !== $request->srcClientKeyOssUrl) {
            @$query['SrcClientKeyOssUrl'] = $request->srcClientKeyOssUrl;
        }

        if (null !== $request->srcClientPassword) {
            @$query['SrcClientPassword'] = $request->srcClientPassword;
        }

        if (null !== $request->srcPrimaryVswId) {
            @$query['SrcPrimaryVswId'] = $request->srcPrimaryVswId;
        }

        if (null !== $request->srcSecondaryVswId) {
            @$query['SrcSecondaryVswId'] = $request->srcSecondaryVswId;
        }

        if (null !== $request->structureInitialization) {
            @$query['StructureInitialization'] = $request->structureInitialization;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        $body = [];
        if (null !== $request->dbList) {
            @$body['DbList'] = $request->dbList;
        }

        if (null !== $request->reserve) {
            @$body['Reserve'] = $request->reserve;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigureDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a data migration or synchronization task.
     *
     * @param Request - ConfigureDtsJobRequest
     *
     * @returns ConfigureDtsJobResponse
     *
     * @param ConfigureDtsJobRequest $request
     *
     * @return ConfigureDtsJobResponse
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
            'Product' => 'Dts',
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
        $configureDtsJobReq = new ConfigureDtsJobRequest([]);
        Utils::convert($request, $configureDtsJobReq);
        if (null !== $request->fileOssUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileOssUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $configureDtsJobReq->fileOssUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->configureDtsJobWithOptions($configureDtsJobReq, $runtime);
    }

    /**
     * Configures a data migration task.
     *
     * @param Request - ConfigureMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureMigrationJobResponse
     *
     * @param ConfigureMigrationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigureMigrationJobResponse
     */
    public function configureMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->checkpoint) {
            @$query['Checkpoint'] = $request->checkpoint;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->migrationJobName) {
            @$query['MigrationJobName'] = $request->migrationJobName;
        }

        if (null !== $request->migrationReserved) {
            @$query['MigrationReserved'] = $request->migrationReserved;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->destinationEndpoint) {
            @$query['DestinationEndpoint'] = $request->destinationEndpoint;
        }

        if (null !== $request->migrationMode) {
            @$query['MigrationMode'] = $request->migrationMode;
        }

        if (null !== $request->sourceEndpoint) {
            @$query['SourceEndpoint'] = $request->sourceEndpoint;
        }

        $body = [];
        if (null !== $request->migrationObject) {
            @$body['MigrationObject'] = $request->migrationObject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigureMigrationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a data migration task.
     *
     * @param Request - ConfigureMigrationJobRequest
     *
     * @returns ConfigureMigrationJobResponse
     *
     * @param ConfigureMigrationJobRequest $request
     *
     * @return ConfigureMigrationJobResponse
     */
    public function configureMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Configures alert settings to monitor a data migration instance.
     *
     * @param Request - ConfigureMigrationJobAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureMigrationJobAlertResponse
     *
     * @param ConfigureMigrationJobAlertRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ConfigureMigrationJobAlertResponse
     */
    public function configureMigrationJobAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->delayAlertPhone) {
            @$query['DelayAlertPhone'] = $request->delayAlertPhone;
        }

        if (null !== $request->delayAlertStatus) {
            @$query['DelayAlertStatus'] = $request->delayAlertStatus;
        }

        if (null !== $request->delayOverSeconds) {
            @$query['DelayOverSeconds'] = $request->delayOverSeconds;
        }

        if (null !== $request->errorAlertPhone) {
            @$query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }

        if (null !== $request->errorAlertStatus) {
            @$query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ConfigureMigrationJobAlert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureMigrationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures alert settings to monitor a data migration instance.
     *
     * @param Request - ConfigureMigrationJobAlertRequest
     *
     * @returns ConfigureMigrationJobAlertResponse
     *
     * @param ConfigureMigrationJobAlertRequest $request
     *
     * @return ConfigureMigrationJobAlertResponse
     */
    public function configureMigrationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureMigrationJobAlertWithOptions($request, $runtime);
    }

    /**
     * Configures a change tracking task.
     *
     * @remarks
     * >  You can preview related API operation parameters when you configure a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *
     * @param Request - ConfigureSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureSubscriptionResponse
     *
     * @param ConfigureSubscriptionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigureSubscriptionResponse
     */
    public function configureSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkpoint) {
            @$query['Checkpoint'] = $request->checkpoint;
        }

        if (null !== $request->dbList) {
            @$query['DbList'] = $request->dbList;
        }

        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->delayNotice) {
            @$query['DelayNotice'] = $request->delayNotice;
        }

        if (null !== $request->delayPhone) {
            @$query['DelayPhone'] = $request->delayPhone;
        }

        if (null !== $request->delayRuleTime) {
            @$query['DelayRuleTime'] = $request->delayRuleTime;
        }

        if (null !== $request->dtsBisLabel) {
            @$query['DtsBisLabel'] = $request->dtsBisLabel;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->dtsJobName) {
            @$query['DtsJobName'] = $request->dtsJobName;
        }

        if (null !== $request->errorNotice) {
            @$query['ErrorNotice'] = $request->errorNotice;
        }

        if (null !== $request->errorPhone) {
            @$query['ErrorPhone'] = $request->errorPhone;
        }

        if (null !== $request->maxDu) {
            @$query['MaxDu'] = $request->maxDu;
        }

        if (null !== $request->minDu) {
            @$query['MinDu'] = $request->minDu;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reserve) {
            @$query['Reserve'] = $request->reserve;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointDatabaseName) {
            @$query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }

        if (null !== $request->sourceEndpointEngineName) {
            @$query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointInstanceType) {
            @$query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }

        if (null !== $request->sourceEndpointOracleSID) {
            @$query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }

        if (null !== $request->sourceEndpointOwnerID) {
            @$query['SourceEndpointOwnerID'] = $request->sourceEndpointOwnerID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointRole) {
            @$query['SourceEndpointRole'] = $request->sourceEndpointRole;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        if (null !== $request->srcCaCertificateOssUrl) {
            @$query['SrcCaCertificateOssUrl'] = $request->srcCaCertificateOssUrl;
        }

        if (null !== $request->srcCaCertificatePassword) {
            @$query['SrcCaCertificatePassword'] = $request->srcCaCertificatePassword;
        }

        if (null !== $request->srcClientCertOssUrl) {
            @$query['SrcClientCertOssUrl'] = $request->srcClientCertOssUrl;
        }

        if (null !== $request->srcClientKeyOssUrl) {
            @$query['SrcClientKeyOssUrl'] = $request->srcClientKeyOssUrl;
        }

        if (null !== $request->srcClientPassword) {
            @$query['SrcClientPassword'] = $request->srcClientPassword;
        }

        if (null !== $request->subscriptionDataTypeDDL) {
            @$query['SubscriptionDataTypeDDL'] = $request->subscriptionDataTypeDDL;
        }

        if (null !== $request->subscriptionDataTypeDML) {
            @$query['SubscriptionDataTypeDML'] = $request->subscriptionDataTypeDML;
        }

        if (null !== $request->subscriptionInstanceNetworkType) {
            @$query['SubscriptionInstanceNetworkType'] = $request->subscriptionInstanceNetworkType;
        }

        if (null !== $request->subscriptionInstanceVPCId) {
            @$query['SubscriptionInstanceVPCId'] = $request->subscriptionInstanceVPCId;
        }

        if (null !== $request->subscriptionInstanceVSwitchId) {
            @$query['SubscriptionInstanceVSwitchId'] = $request->subscriptionInstanceVSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureSubscription',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a change tracking task.
     *
     * @remarks
     * >  You can preview related API operation parameters when you configure a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *
     * @param Request - ConfigureSubscriptionRequest
     *
     * @returns ConfigureSubscriptionResponse
     *
     * @param ConfigureSubscriptionRequest $request
     *
     * @return ConfigureSubscriptionResponse
     */
    public function configureSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Configures a change tracking instance of the previous version.
     *
     * @remarks
     * Before you call this operation, you must call the [CreateSubscriptionInstance](https://help.aliyun.com/document_detail/49436.html) operation to create a change tracking instance.
     *
     * @param Request - ConfigureSubscriptionInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureSubscriptionInstanceResponse
     *
     * @param ConfigureSubscriptionInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ConfigureSubscriptionInstanceResponse
     */
    public function configureSubscriptionInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        if (null !== $request->subscriptionInstanceName) {
            @$query['SubscriptionInstanceName'] = $request->subscriptionInstanceName;
        }

        if (null !== $request->subscriptionInstanceNetworkType) {
            @$query['SubscriptionInstanceNetworkType'] = $request->subscriptionInstanceNetworkType;
        }

        if (null !== $request->sourceEndpoint) {
            @$query['SourceEndpoint'] = $request->sourceEndpoint;
        }

        if (null !== $request->subscriptionDataType) {
            @$query['SubscriptionDataType'] = $request->subscriptionDataType;
        }

        if (null !== $request->subscriptionInstance) {
            @$query['SubscriptionInstance'] = $request->subscriptionInstance;
        }

        $body = [];
        if (null !== $request->subscriptionObject) {
            @$body['SubscriptionObject'] = $request->subscriptionObject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigureSubscriptionInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a change tracking instance of the previous version.
     *
     * @remarks
     * Before you call this operation, you must call the [CreateSubscriptionInstance](https://help.aliyun.com/document_detail/49436.html) operation to create a change tracking instance.
     *
     * @param Request - ConfigureSubscriptionInstanceRequest
     *
     * @returns ConfigureSubscriptionInstanceResponse
     *
     * @param ConfigureSubscriptionInstanceRequest $request
     *
     * @return ConfigureSubscriptionInstanceResponse
     */
    public function configureSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * Configures alert settings to monitor a change tracking instance.
     *
     * @param Request - ConfigureSubscriptionInstanceAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureSubscriptionInstanceAlertResponse
     *
     * @param ConfigureSubscriptionInstanceAlertRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ConfigureSubscriptionInstanceAlertResponse
     */
    public function configureSubscriptionInstanceAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->delayAlertPhone) {
            @$query['DelayAlertPhone'] = $request->delayAlertPhone;
        }

        if (null !== $request->delayAlertStatus) {
            @$query['DelayAlertStatus'] = $request->delayAlertStatus;
        }

        if (null !== $request->delayOverSeconds) {
            @$query['DelayOverSeconds'] = $request->delayOverSeconds;
        }

        if (null !== $request->errorAlertPhone) {
            @$query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }

        if (null !== $request->errorAlertStatus) {
            @$query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureSubscriptionInstanceAlert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureSubscriptionInstanceAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures alert settings to monitor a change tracking instance.
     *
     * @param Request - ConfigureSubscriptionInstanceAlertRequest
     *
     * @returns ConfigureSubscriptionInstanceAlertResponse
     *
     * @param ConfigureSubscriptionInstanceAlertRequest $request
     *
     * @return ConfigureSubscriptionInstanceAlertResponse
     */
    public function configureSubscriptionInstanceAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSubscriptionInstanceAlertWithOptions($request, $runtime);
    }

    /**
     * Configures a data synchronization task.
     *
     * @remarks
     * Before you call this operation, you must call the [CreateSynchronizationJob](https://help.aliyun.com/document_detail/49446.html) operation to create a data synchronization instance.
     * >
     * *   After you call this operation to configure a data synchronization task, the task will be automatically started and prechecked. You do not need to call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to start the task.
     * *   A data synchronization task may fail to be started due to precheck failures. You can call the [DescribeSynchronizationJobStatus](https://help.aliyun.com/document_detail/49453.html) operation to query the status of the task. Then, you can change parameter settings based on the error messages about the precheck failures. After you fix the issue, you must call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to restart the data synchronization task.
     *
     * @param Request - ConfigureSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureSynchronizationJobResponse
     *
     * @param ConfigureSynchronizationJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ConfigureSynchronizationJobResponse
     */
    public function configureSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->checkpoint) {
            @$query['Checkpoint'] = $request->checkpoint;
        }

        if (null !== $request->dataInitialization) {
            @$query['DataInitialization'] = $request->dataInitialization;
        }

        if (null !== $request->migrationReserved) {
            @$query['MigrationReserved'] = $request->migrationReserved;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->structureInitialization) {
            @$query['StructureInitialization'] = $request->structureInitialization;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        if (null !== $request->synchronizationJobName) {
            @$query['SynchronizationJobName'] = $request->synchronizationJobName;
        }

        if (null !== $request->destinationEndpoint) {
            @$query['DestinationEndpoint'] = $request->destinationEndpoint;
        }

        if (null !== $request->partitionKey) {
            @$query['PartitionKey'] = $request->partitionKey;
        }

        if (null !== $request->sourceEndpoint) {
            @$query['SourceEndpoint'] = $request->sourceEndpoint;
        }

        $body = [];
        if (null !== $request->synchronizationObjects) {
            @$body['SynchronizationObjects'] = $request->synchronizationObjects;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ConfigureSynchronizationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a data synchronization task.
     *
     * @remarks
     * Before you call this operation, you must call the [CreateSynchronizationJob](https://help.aliyun.com/document_detail/49446.html) operation to create a data synchronization instance.
     * >
     * *   After you call this operation to configure a data synchronization task, the task will be automatically started and prechecked. You do not need to call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to start the task.
     * *   A data synchronization task may fail to be started due to precheck failures. You can call the [DescribeSynchronizationJobStatus](https://help.aliyun.com/document_detail/49453.html) operation to query the status of the task. Then, you can change parameter settings based on the error messages about the precheck failures. After you fix the issue, you must call the [StartSynchronizationJob](https://help.aliyun.com/document_detail/49448.html) operation to restart the data synchronization task.
     *
     * @param Request - ConfigureSynchronizationJobRequest
     *
     * @returns ConfigureSynchronizationJobResponse
     *
     * @param ConfigureSynchronizationJobRequest $request
     *
     * @return ConfigureSynchronizationJobResponse
     */
    public function configureSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * Configures alert settings to monitor a data synchronization instance.
     *
     * @param Request - ConfigureSynchronizationJobAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureSynchronizationJobAlertResponse
     *
     * @param ConfigureSynchronizationJobAlertRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ConfigureSynchronizationJobAlertResponse
     */
    public function configureSynchronizationJobAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->delayAlertPhone) {
            @$query['DelayAlertPhone'] = $request->delayAlertPhone;
        }

        if (null !== $request->delayAlertStatus) {
            @$query['DelayAlertStatus'] = $request->delayAlertStatus;
        }

        if (null !== $request->delayOverSeconds) {
            @$query['DelayOverSeconds'] = $request->delayOverSeconds;
        }

        if (null !== $request->errorAlertPhone) {
            @$query['ErrorAlertPhone'] = $request->errorAlertPhone;
        }

        if (null !== $request->errorAlertStatus) {
            @$query['ErrorAlertStatus'] = $request->errorAlertStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureSynchronizationJobAlert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureSynchronizationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures alert settings to monitor a data synchronization instance.
     *
     * @param Request - ConfigureSynchronizationJobAlertRequest
     *
     * @returns ConfigureSynchronizationJobAlertResponse
     *
     * @param ConfigureSynchronizationJobAlertRequest $request
     *
     * @return ConfigureSynchronizationJobAlertResponse
     */
    public function configureSynchronizationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobAlertWithOptions($request, $runtime);
    }

    /**
     * Enables or disables image matching for a data synchronization instance.
     *
     * @param Request - ConfigureSynchronizationJobReplicatorCompareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureSynchronizationJobReplicatorCompareResponse
     *
     * @param ConfigureSynchronizationJobReplicatorCompareRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ConfigureSynchronizationJobReplicatorCompareResponse
     */
    public function configureSynchronizationJobReplicatorCompareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        if (null !== $request->synchronizationReplicatorCompareEnable) {
            @$query['SynchronizationReplicatorCompareEnable'] = $request->synchronizationReplicatorCompareEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureSynchronizationJobReplicatorCompare',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureSynchronizationJobReplicatorCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables image matching for a data synchronization instance.
     *
     * @param Request - ConfigureSynchronizationJobReplicatorCompareRequest
     *
     * @returns ConfigureSynchronizationJobReplicatorCompareResponse
     *
     * @param ConfigureSynchronizationJobReplicatorCompareRequest $request
     *
     * @return ConfigureSynchronizationJobReplicatorCompareResponse
     */
    public function configureSynchronizationJobReplicatorCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSynchronizationJobReplicatorCompareWithOptions($request, $runtime);
    }

    /**
     * Transfers resource groups of instance resources.
     *
     * @param Request - ConvertInstanceResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConvertInstanceResourceGroupResponse
     *
     * @param ConvertInstanceResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ConvertInstanceResourceGroupResponse
     */
    public function convertInstanceResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConvertInstanceResourceGroup',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConvertInstanceResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Transfers resource groups of instance resources.
     *
     * @param Request - ConvertInstanceResourceGroupRequest
     *
     * @returns ConvertInstanceResourceGroupResponse
     *
     * @param ConvertInstanceResourceGroupRequest $request
     *
     * @return ConvertInstanceResourceGroupResponse
     */
    public function convertInstanceResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertInstanceResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Counts tasks by condition.
     *
     * @param Request - CountJobByConditionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CountJobByConditionResponse
     *
     * @param CountJobByConditionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CountJobByConditionResponse
     */
    public function countJobByConditionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destDbType) {
            @$query['DestDbType'] = $request->destDbType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->srcDbType) {
            @$query['SrcDbType'] = $request->srcDbType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CountJobByCondition',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CountJobByConditionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Counts tasks by condition.
     *
     * @param Request - CountJobByConditionRequest
     *
     * @returns CountJobByConditionResponse
     *
     * @param CountJobByConditionRequest $request
     *
     * @return CountJobByConditionResponse
     */
    public function countJobByCondition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countJobByConditionWithOptions($request, $runtime);
    }

    /**
     * Creates a consumer group for a change tracking task. Downstream clients can use the consumer group to consume tracked data.
     *
     * @param Request - CreateConsumerChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerChannelResponse
     *
     * @param CreateConsumerChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateConsumerChannelResponse
     */
    public function createConsumerChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerGroupName) {
            @$query['ConsumerGroupName'] = $request->consumerGroupName;
        }

        if (null !== $request->consumerGroupPassword) {
            @$query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }

        if (null !== $request->consumerGroupUserName) {
            @$query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'CreateConsumerChannel',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer group for a change tracking task. Downstream clients can use the consumer group to consume tracked data.
     *
     * @param Request - CreateConsumerChannelRequest
     *
     * @returns CreateConsumerChannelResponse
     *
     * @param CreateConsumerChannelRequest $request
     *
     * @return CreateConsumerChannelResponse
     */
    public function createConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a consumer group for a change tracking instance.
     *
     * @param Request - CreateConsumerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->consumerGroupName) {
            @$query['ConsumerGroupName'] = $request->consumerGroupName;
        }

        if (null !== $request->consumerGroupPassword) {
            @$query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }

        if (null !== $request->consumerGroupUserName) {
            @$query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer group for a change tracking instance.
     *
     * @param Request - CreateConsumerGroupRequest
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an alert rule.
     *
     * @param Request - CreateDedicatedClusterMonitorRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDedicatedClusterMonitorRuleResponse
     *
     * @param CreateDedicatedClusterMonitorRuleRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateDedicatedClusterMonitorRuleResponse
     */
    public function createDedicatedClusterMonitorRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cpuAlarmThreshold) {
            @$query['CpuAlarmThreshold'] = $request->cpuAlarmThreshold;
        }

        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->diskAlarmThreshold) {
            @$query['DiskAlarmThreshold'] = $request->diskAlarmThreshold;
        }

        if (null !== $request->duAlarmThreshold) {
            @$query['DuAlarmThreshold'] = $request->duAlarmThreshold;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memAlarmThreshold) {
            @$query['MemAlarmThreshold'] = $request->memAlarmThreshold;
        }

        if (null !== $request->noticeSwitch) {
            @$query['NoticeSwitch'] = $request->noticeSwitch;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phones) {
            @$query['Phones'] = $request->phones;
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
            'action' => 'CreateDedicatedClusterMonitorRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDedicatedClusterMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an alert rule.
     *
     * @param Request - CreateDedicatedClusterMonitorRuleRequest
     *
     * @returns CreateDedicatedClusterMonitorRuleResponse
     *
     * @param CreateDedicatedClusterMonitorRuleRequest $request
     *
     * @return CreateDedicatedClusterMonitorRuleResponse
     */
    public function createDedicatedClusterMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedClusterMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * 查看工作流任务结果.
     *
     * @param Request - CreateDocParserJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDocParserJobResponse
     *
     * @param CreateDocParserJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDocParserJobResponse
     */
    public function createDocParserJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileUrl) {
            @$query['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resultType) {
            @$query['ResultType'] = $request->resultType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDocParserJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDocParserJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看工作流任务结果.
     *
     * @param Request - CreateDocParserJobRequest
     *
     * @returns CreateDocParserJobResponse
     *
     * @param CreateDocParserJobRequest $request
     *
     * @return CreateDocParserJobResponse
     */
    public function createDocParserJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDocParserJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateDocParserJobAdvanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDocParserJobResponse
     */
    public function createDocParserJobAdvance($request, $runtime)
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
            'Product' => 'Dts',
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
        $createDocParserJobReq = new CreateDocParserJobRequest([]);
        Utils::convert($request, $createDocParserJobReq);
        if (null !== $request->fileUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $createDocParserJobReq->fileUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->createDocParserJobWithOptions($createDocParserJobReq, $runtime);
    }

    /**
     * Purchases a Data Transmission Service (DTS) instance.
     *
     * @remarks
     *   Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of DTS.
     * *   If you want to run a DTS task on a DTS dedicated cluster, you must configure the task before you purchase a DTS instance. You can call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation to configure a DTS task.
     *
     * @param Request - CreateDtsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDtsInstanceResponse
     *
     * @param CreateDtsInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDtsInstanceResponse
     */
    public function createDtsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->computeUnit) {
            @$query['ComputeUnit'] = $request->computeUnit;
        }

        if (null !== $request->databaseCount) {
            @$query['DatabaseCount'] = $request->databaseCount;
        }

        if (null !== $request->destinationEndpointEngineName) {
            @$query['DestinationEndpointEngineName'] = $request->destinationEndpointEngineName;
        }

        if (null !== $request->destinationRegion) {
            @$query['DestinationRegion'] = $request->destinationRegion;
        }

        if (null !== $request->dtsRegion) {
            @$query['DtsRegion'] = $request->dtsRegion;
        }

        if (null !== $request->du) {
            @$query['Du'] = $request->du;
        }

        if (null !== $request->feeType) {
            @$query['FeeType'] = $request->feeType;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->maxDu) {
            @$query['MaxDu'] = $request->maxDu;
        }

        if (null !== $request->minDu) {
            @$query['MinDu'] = $request->minDu;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointEngineName) {
            @$query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }

        if (null !== $request->sourceRegion) {
            @$query['SourceRegion'] = $request->sourceRegion;
        }

        if (null !== $request->syncArchitecture) {
            @$query['SyncArchitecture'] = $request->syncArchitecture;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDtsInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDtsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchases a Data Transmission Service (DTS) instance.
     *
     * @remarks
     *   Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/apsaradb-for-mongodb/pricing) of DTS.
     * *   If you want to run a DTS task on a DTS dedicated cluster, you must configure the task before you purchase a DTS instance. You can call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation to configure a DTS task.
     *
     * @param Request - CreateDtsInstanceRequest
     *
     * @returns CreateDtsInstanceResponse
     *
     * @param CreateDtsInstanceRequest $request
     *
     * @return CreateDtsInstanceResponse
     */
    public function createDtsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDtsInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates or modifies an alert rule for a Data Transmission Service (DTS) task.
     *
     * @remarks
     * DTS provides the following metrics for DTS tasks:************
     * *   **Latency**: DTS monitors the latency of a DTS task. If the latency of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of seconds.
     * *   **Status**: DTS monitors the status of a DTS task. If the state of the task changes to **Error** or **Restore**, an alert is triggered.
     * *   **Full Timeout**: DTS monitors the duration of a DTS task. If the duration of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of hours.
     *
     * @param Request - CreateJobMonitorRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobMonitorRuleResponse
     *
     * @param CreateJobMonitorRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateJobMonitorRuleResponse
     */
    public function createJobMonitorRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->delayRuleTime) {
            @$query['DelayRuleTime'] = $request->delayRuleTime;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->noticeValue) {
            @$query['NoticeValue'] = $request->noticeValue;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->phone) {
            @$query['Phone'] = $request->phone;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->times) {
            @$query['Times'] = $request->times;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJobMonitorRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies an alert rule for a Data Transmission Service (DTS) task.
     *
     * @remarks
     * DTS provides the following metrics for DTS tasks:************
     * *   **Latency**: DTS monitors the latency of a DTS task. If the latency of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of seconds.
     * *   **Status**: DTS monitors the status of a DTS task. If the state of the task changes to **Error** or **Restore**, an alert is triggered.
     * *   **Full Timeout**: DTS monitors the duration of a DTS task. If the duration of the task exceeds the specified threshold, an alert is triggered. The threshold is specified in units of hours.
     *
     * @param Request - CreateJobMonitorRuleRequest
     *
     * @returns CreateJobMonitorRuleResponse
     *
     * @param CreateJobMonitorRuleRequest $request
     *
     * @return CreateJobMonitorRuleResponse
     */
    public function createJobMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * Purchases a data migration instance.
     *
     * @param Request - CreateMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMigrationJobResponse
     *
     * @param CreateMigrationJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMigrationJobResponse
     */
    public function createMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->migrationJobClass) {
            @$query['MigrationJobClass'] = $request->migrationJobClass;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
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
            'action' => 'CreateMigrationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchases a data migration instance.
     *
     * @param Request - CreateMigrationJobRequest
     *
     * @returns CreateMigrationJobResponse
     *
     * @param CreateMigrationJobRequest $request
     *
     * @return CreateMigrationJobResponse
     */
    public function createMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Creates a reverse task for a data synchronization or migration task.
     *
     * @remarks
     * 调用接口创建的反向任务会立即进行预检查，预检查通过后会进行增量数据采集，增量数据写入模块不会运行（需要调用**StartReverseWriter**接口运行）。
     * > 创建的反向任务固定为同步任务，且只有增量写入模块。
     *
     * @param Request - CreateReverseDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReverseDtsJobResponse
     *
     * @param CreateReverseDtsJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateReverseDtsJobResponse
     */
    public function createReverseDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->shardPassword) {
            @$query['ShardPassword'] = $request->shardPassword;
        }

        if (null !== $request->shardUsername) {
            @$query['ShardUsername'] = $request->shardUsername;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateReverseDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateReverseDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a reverse task for a data synchronization or migration task.
     *
     * @remarks
     * 调用接口创建的反向任务会立即进行预检查，预检查通过后会进行增量数据采集，增量数据写入模块不会运行（需要调用**StartReverseWriter**接口运行）。
     * > 创建的反向任务固定为同步任务，且只有增量写入模块。
     *
     * @param Request - CreateReverseDtsJobRequest
     *
     * @returns CreateReverseDtsJobResponse
     *
     * @param CreateReverseDtsJobRequest $request
     *
     * @return CreateReverseDtsJobResponse
     */
    public function createReverseDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReverseDtsJobWithOptions($request, $runtime);
    }

    /**
     * Purchases a change tracking instance.
     *
     * @param Request - CreateSubscriptionInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubscriptionInstanceResponse
     *
     * @param CreateSubscriptionInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSubscriptionInstanceResponse
     */
    public function createSubscriptionInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->sourceEndpoint) {
            @$query['SourceEndpoint'] = $request->sourceEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSubscriptionInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchases a change tracking instance.
     *
     * @param Request - CreateSubscriptionInstanceRequest
     *
     * @returns CreateSubscriptionInstanceResponse
     *
     * @param CreateSubscriptionInstanceRequest $request
     *
     * @return CreateSubscriptionInstanceResponse
     */
    public function createSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a data synchronization instance.
     *
     * @param Request - CreateSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSynchronizationJobResponse
     *
     * @param CreateSynchronizationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSynchronizationJobResponse
     */
    public function createSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstanceCount) {
            @$query['DBInstanceCount'] = $request->DBInstanceCount;
        }

        if (null !== $request->destRegion) {
            @$query['DestRegion'] = $request->destRegion;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceRegion) {
            @$query['SourceRegion'] = $request->sourceRegion;
        }

        if (null !== $request->synchronizationJobClass) {
            @$query['SynchronizationJobClass'] = $request->synchronizationJobClass;
        }

        if (null !== $request->topology) {
            @$query['Topology'] = $request->topology;
        }

        if (null !== $request->usedTime) {
            @$query['UsedTime'] = $request->usedTime;
        }

        if (null !== $request->networkType) {
            @$query['networkType'] = $request->networkType;
        }

        if (null !== $request->destinationEndpoint) {
            @$query['DestinationEndpoint'] = $request->destinationEndpoint;
        }

        if (null !== $request->sourceEndpoint) {
            @$query['SourceEndpoint'] = $request->sourceEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSynchronizationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a data synchronization instance.
     *
     * @param Request - CreateSynchronizationJobRequest
     *
     * @returns CreateSynchronizationJobResponse
     *
     * @param CreateSynchronizationJobRequest $request
     *
     * @return CreateSynchronizationJobResponse
     */
    public function createSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a consumer group.
     *
     * @param Request - DeleteConsumerChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerChannelResponse
     *
     * @param DeleteConsumerChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteConsumerChannelResponse
     */
    public function deleteConsumerChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerGroupId) {
            @$query['ConsumerGroupId'] = $request->consumerGroupId;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'DeleteConsumerChannel',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer group.
     *
     * @param Request - DeleteConsumerChannelRequest
     *
     * @returns DeleteConsumerChannelResponse
     *
     * @param DeleteConsumerChannelRequest $request
     *
     * @return DeleteConsumerChannelResponse
     */
    public function deleteConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * Deletes a consumer group.
     *
     * @param Request - DeleteConsumerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param DeleteConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->consumerGroupID) {
            @$query['ConsumerGroupID'] = $request->consumerGroupID;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroup',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a consumer group.
     *
     * @param Request - DeleteConsumerGroupRequest
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param DeleteConsumerGroupRequest $request
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes a data migration, data synchronization, or change tracking task.
     *
     * @param Request - DeleteDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDtsJobResponse
     *
     * @param DeleteDtsJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDtsJobResponse
     */
    public function deleteDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a data migration, data synchronization, or change tracking task.
     *
     * @param Request - DeleteDtsJobRequest
     *
     * @returns DeleteDtsJobResponse
     *
     * @param DeleteDtsJobRequest $request
     *
     * @return DeleteDtsJobResponse
     */
    public function deleteDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDtsJobWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple data migration, data synchronization, or change tracking tasks.
     *
     * @param Request - DeleteDtsJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDtsJobsResponse
     *
     * @param DeleteDtsJobsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDtsJobsResponse
     */
    public function deleteDtsJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobIds) {
            @$query['DtsJobIds'] = $request->dtsJobIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDtsJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple data migration, data synchronization, or change tracking tasks.
     *
     * @param Request - DeleteDtsJobsRequest
     *
     * @returns DeleteDtsJobsResponse
     *
     * @param DeleteDtsJobsRequest $request
     *
     * @return DeleteDtsJobsResponse
     */
    public function deleteDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDtsJobsWithOptions($request, $runtime);
    }

    /**
     * Releases a data migration instance.
     *
     * @param Request - DeleteMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMigrationJobResponse
     *
     * @param DeleteMigrationJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMigrationJobResponse
     */
    public function deleteMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DeleteMigrationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a data migration instance.
     *
     * @param Request - DeleteMigrationJobRequest
     *
     * @returns DeleteMigrationJobResponse
     *
     * @param DeleteMigrationJobRequest $request
     *
     * @return DeleteMigrationJobResponse
     */
    public function deleteMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Releases a change tracking instance.
     *
     * @param Request - DeleteSubscriptionInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSubscriptionInstanceResponse
     *
     * @param DeleteSubscriptionInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSubscriptionInstanceResponse
     */
    public function deleteSubscriptionInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSubscriptionInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a change tracking instance.
     *
     * @param Request - DeleteSubscriptionInstanceRequest
     *
     * @returns DeleteSubscriptionInstanceResponse
     *
     * @param DeleteSubscriptionInstanceRequest $request
     *
     * @return DeleteSubscriptionInstanceResponse
     */
    public function deleteSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * Releases a data synchronization instance.
     *
     * @param Request - DeleteSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSynchronizationJobResponse
     *
     * @param DeleteSynchronizationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSynchronizationJobResponse
     */
    public function deleteSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSynchronizationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a data synchronization instance.
     *
     * @param Request - DeleteSynchronizationJobRequest
     *
     * @returns DeleteSynchronizationJobResponse
     *
     * @param DeleteSynchronizationJobRequest $request
     *
     * @return DeleteSynchronizationJobResponse
     */
    public function deleteSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * 查询数据投递链路store账号.
     *
     * @param Request - DescribeChannelAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeChannelAccountResponse
     *
     * @param DescribeChannelAccountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeChannelAccountResponse
     */
    public function describeChannelAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeChannelAccount',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeChannelAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据投递链路store账号.
     *
     * @param Request - DescribeChannelAccountRequest
     *
     * @returns DescribeChannelAccountResponse
     *
     * @param DescribeChannelAccountRequest $request
     *
     * @return DescribeChannelAccountResponse
     */
    public function describeChannelAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelAccountWithOptions($request, $runtime);
    }

    /**
     * 请求所有数据校验任务数据.
     *
     * @param Request - DescribeCheckJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCheckJobsResponse
     *
     * @param DescribeCheckJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeCheckJobsResponse
     */
    public function describeCheckJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkJobId) {
            @$query['CheckJobId'] = $request->checkJobId;
        }

        if (null !== $request->checkType) {
            @$query['CheckType'] = $request->checkType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
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
            'action' => 'DescribeCheckJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCheckJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 请求所有数据校验任务数据.
     *
     * @param Request - DescribeCheckJobsRequest
     *
     * @returns DescribeCheckJobsResponse
     *
     * @param DescribeCheckJobsRequest $request
     *
     * @return DescribeCheckJobsResponse
     */
    public function describeCheckJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckJobsWithOptions($request, $runtime);
    }

    /**
     * Queries operation logs of a Data Transmission Service (DTS) dedicated cluster.
     *
     * @param Request - DescribeClusterOperateLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterOperateLogsResponse
     *
     * @param DescribeClusterOperateLogsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeClusterOperateLogsResponse
     */
    public function describeClusterOperateLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedicatedClusterId) {
            @$body['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->dtsJobId) {
            @$body['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerID) {
            @$body['OwnerID'] = $request->ownerID;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterOperateLogs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterOperateLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries operation logs of a Data Transmission Service (DTS) dedicated cluster.
     *
     * @param Request - DescribeClusterOperateLogsRequest
     *
     * @returns DescribeClusterOperateLogsResponse
     *
     * @param DescribeClusterOperateLogsRequest $request
     *
     * @return DescribeClusterOperateLogsResponse
     */
    public function describeClusterOperateLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterOperateLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the resource usage of a cluster.
     *
     * @param Request - DescribeClusterUsedUtilizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterUsedUtilizationResponse
     *
     * @param DescribeClusterUsedUtilizationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeClusterUsedUtilizationResponse
     */
    public function describeClusterUsedUtilizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedicatedClusterId) {
            @$body['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->dtsJobId) {
            @$body['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->env) {
            @$body['Env'] = $request->env;
        }

        if (null !== $request->metricType) {
            @$body['MetricType'] = $request->metricType;
        }

        if (null !== $request->ownerID) {
            @$body['OwnerID'] = $request->ownerID;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityToken) {
            @$body['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterUsedUtilization',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterUsedUtilizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource usage of a cluster.
     *
     * @param Request - DescribeClusterUsedUtilizationRequest
     *
     * @returns DescribeClusterUsedUtilizationResponse
     *
     * @param DescribeClusterUsedUtilizationRequest $request
     *
     * @return DescribeClusterUsedUtilizationResponse
     */
    public function describeClusterUsedUtilization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterUsedUtilizationWithOptions($request, $runtime);
    }

    /**
     * Queries the connectivity of Data Transmission Service (DTS) servers to the source and destination databases.
     *
     * @param Request - DescribeConnectionStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConnectionStatusResponse
     *
     * @param DescribeConnectionStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeConnectionStatusResponse
     */
    public function describeConnectionStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationEndpointArchitecture) {
            @$query['DestinationEndpointArchitecture'] = $request->destinationEndpointArchitecture;
        }

        if (null !== $request->destinationEndpointDatabaseName) {
            @$query['DestinationEndpointDatabaseName'] = $request->destinationEndpointDatabaseName;
        }

        if (null !== $request->destinationEndpointEngineName) {
            @$query['DestinationEndpointEngineName'] = $request->destinationEndpointEngineName;
        }

        if (null !== $request->destinationEndpointIP) {
            @$query['DestinationEndpointIP'] = $request->destinationEndpointIP;
        }

        if (null !== $request->destinationEndpointInstanceID) {
            @$query['DestinationEndpointInstanceID'] = $request->destinationEndpointInstanceID;
        }

        if (null !== $request->destinationEndpointInstanceType) {
            @$query['DestinationEndpointInstanceType'] = $request->destinationEndpointInstanceType;
        }

        if (null !== $request->destinationEndpointOracleSID) {
            @$query['DestinationEndpointOracleSID'] = $request->destinationEndpointOracleSID;
        }

        if (null !== $request->destinationEndpointPassword) {
            @$query['DestinationEndpointPassword'] = $request->destinationEndpointPassword;
        }

        if (null !== $request->destinationEndpointPort) {
            @$query['DestinationEndpointPort'] = $request->destinationEndpointPort;
        }

        if (null !== $request->destinationEndpointRegion) {
            @$query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }

        if (null !== $request->destinationEndpointUserName) {
            @$query['DestinationEndpointUserName'] = $request->destinationEndpointUserName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointArchitecture) {
            @$query['SourceEndpointArchitecture'] = $request->sourceEndpointArchitecture;
        }

        if (null !== $request->sourceEndpointDatabaseName) {
            @$query['SourceEndpointDatabaseName'] = $request->sourceEndpointDatabaseName;
        }

        if (null !== $request->sourceEndpointEngineName) {
            @$query['SourceEndpointEngineName'] = $request->sourceEndpointEngineName;
        }

        if (null !== $request->sourceEndpointIP) {
            @$query['SourceEndpointIP'] = $request->sourceEndpointIP;
        }

        if (null !== $request->sourceEndpointInstanceID) {
            @$query['SourceEndpointInstanceID'] = $request->sourceEndpointInstanceID;
        }

        if (null !== $request->sourceEndpointInstanceType) {
            @$query['SourceEndpointInstanceType'] = $request->sourceEndpointInstanceType;
        }

        if (null !== $request->sourceEndpointOracleSID) {
            @$query['SourceEndpointOracleSID'] = $request->sourceEndpointOracleSID;
        }

        if (null !== $request->sourceEndpointPassword) {
            @$query['SourceEndpointPassword'] = $request->sourceEndpointPassword;
        }

        if (null !== $request->sourceEndpointPort) {
            @$query['SourceEndpointPort'] = $request->sourceEndpointPort;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        if (null !== $request->sourceEndpointUserName) {
            @$query['SourceEndpointUserName'] = $request->sourceEndpointUserName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConnectionStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConnectionStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the connectivity of Data Transmission Service (DTS) servers to the source and destination databases.
     *
     * @param Request - DescribeConnectionStatusRequest
     *
     * @returns DescribeConnectionStatusResponse
     *
     * @param DescribeConnectionStatusRequest $request
     *
     * @return DescribeConnectionStatusResponse
     */
    public function describeConnectionStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectionStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information of a consumer group, including the consumer group ID, consumer group name, username, and message latency.
     *
     * @param Request - DescribeConsumerChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConsumerChannelResponse
     *
     * @param DescribeConsumerChannelRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeConsumerChannelResponse
     */
    public function describeConsumerChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentChannelId) {
            @$query['ParentChannelId'] = $request->parentChannelId;
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
            'action' => 'DescribeConsumerChannel',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a consumer group, including the consumer group ID, consumer group name, username, and message latency.
     *
     * @param Request - DescribeConsumerChannelRequest
     *
     * @returns DescribeConsumerChannelResponse
     *
     * @param DescribeConsumerChannelRequest $request
     *
     * @return DescribeConsumerChannelResponse
     */
    public function describeConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the details of consumer groups in a change tracking instance.
     *
     * @param Request - DescribeConsumerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConsumerGroupResponse
     *
     * @param DescribeConsumerGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeConsumerGroupResponse
     */
    public function describeConsumerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConsumerGroup',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of consumer groups in a change tracking instance.
     *
     * @param Request - DescribeConsumerGroupRequest
     *
     * @returns DescribeConsumerGroupResponse
     *
     * @param DescribeConsumerGroupRequest $request
     *
     * @return DescribeConsumerGroupResponse
     */
    public function describeConsumerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConsumerGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the CIDR blocks of DTS servers.
     *
     * @param Request - DescribeDTSIPRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDTSIPResponse
     *
     * @param DescribeDTSIPRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeDTSIPResponse
     */
    public function describeDTSIPWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationEndpointRegion) {
            @$query['DestinationEndpointRegion'] = $request->destinationEndpointRegion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceEndpointRegion) {
            @$query['SourceEndpointRegion'] = $request->sourceEndpointRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDTSIP',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDTSIPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the CIDR blocks of DTS servers.
     *
     * @param Request - DescribeDTSIPRequest
     *
     * @returns DescribeDTSIPResponse
     *
     * @param DescribeDTSIPRequest $request
     *
     * @return DescribeDTSIPResponse
     */
    public function describeDTSIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDTSIPWithOptions($request, $runtime);
    }

    /**
     * Queries the download URL of the data consistency verification report.
     *
     * @param Request - DescribeDataCheckReportUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataCheckReportUrlResponse
     *
     * @param DescribeDataCheckReportUrlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDataCheckReportUrlResponse
     */
    public function describeDataCheckReportUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkType) {
            @$query['CheckType'] = $request->checkType;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tbName) {
            @$query['TbName'] = $request->tbName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataCheckReportUrl',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataCheckReportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the download URL of the data consistency verification report.
     *
     * @param Request - DescribeDataCheckReportUrlRequest
     *
     * @returns DescribeDataCheckReportUrlResponse
     *
     * @param DescribeDataCheckReportUrlRequest $request
     *
     * @return DescribeDataCheckReportUrlResponse
     */
    public function describeDataCheckReportUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCheckReportUrlWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a data verification task.
     *
     * @param Request - DescribeDataCheckTableDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataCheckTableDetailsResponse
     *
     * @param DescribeDataCheckTableDetailsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDataCheckTableDetailsResponse
     */
    public function describeDataCheckTableDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkType) {
            @$query['CheckType'] = $request->checkType;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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

        if (null !== $request->schemaName) {
            @$query['SchemaName'] = $request->schemaName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataCheckTableDetails',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataCheckTableDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a data verification task.
     *
     * @param Request - DescribeDataCheckTableDetailsRequest
     *
     * @returns DescribeDataCheckTableDetailsResponse
     *
     * @param DescribeDataCheckTableDetailsRequest $request
     *
     * @return DescribeDataCheckTableDetailsResponse
     */
    public function describeDataCheckTableDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCheckTableDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about inconsistent data in the data verification task.
     *
     * @param Request - DescribeDataCheckTableDiffDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataCheckTableDiffDetailsResponse
     *
     * @param DescribeDataCheckTableDiffDetailsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeDataCheckTableDiffDetailsResponse
     */
    public function describeDataCheckTableDiffDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkType) {
            @$query['CheckType'] = $request->checkType;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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

        if (null !== $request->tbName) {
            @$query['TbName'] = $request->tbName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataCheckTableDiffDetails',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataCheckTableDiffDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about inconsistent data in the data verification task.
     *
     * @param Request - DescribeDataCheckTableDiffDetailsRequest
     *
     * @returns DescribeDataCheckTableDiffDetailsResponse
     *
     * @param DescribeDataCheckTableDiffDetailsRequest $request
     *
     * @return DescribeDataCheckTableDiffDetailsResponse
     */
    public function describeDataCheckTableDiffDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCheckTableDiffDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a dedicated cluster.
     *
     * @param Request - DescribeDedicatedClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedClusterResponse
     *
     * @param DescribeDedicatedClusterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDedicatedClusterResponse
     */
    public function describeDedicatedClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDedicatedCluster',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a dedicated cluster.
     *
     * @param Request - DescribeDedicatedClusterRequest
     *
     * @returns DescribeDedicatedClusterResponse
     *
     * @param DescribeDedicatedClusterRequest $request
     *
     * @return DescribeDedicatedClusterResponse
     */
    public function describeDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an alert rule.
     *
     * @param Request - DescribeDedicatedClusterMonitorRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedClusterMonitorRuleResponse
     *
     * @param DescribeDedicatedClusterMonitorRuleRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeDedicatedClusterMonitorRuleResponse
     */
    public function describeDedicatedClusterMonitorRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDedicatedClusterMonitorRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedClusterMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an alert rule.
     *
     * @param Request - DescribeDedicatedClusterMonitorRuleRequest
     *
     * @returns DescribeDedicatedClusterMonitorRuleResponse
     *
     * @param DescribeDedicatedClusterMonitorRuleRequest $request
     *
     * @return DescribeDedicatedClusterMonitorRuleResponse
     */
    public function describeDedicatedClusterMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedClusterMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * 查看工作流任务结果.
     *
     * @param Request - DescribeDocParserJobResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocParserJobResultResponse
     *
     * @param DescribeDocParserJobResultRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDocParserJobResultResponse
     */
    public function describeDocParserJobResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'DescribeDocParserJobResult',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocParserJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看工作流任务结果.
     *
     * @param Request - DescribeDocParserJobResultRequest
     *
     * @returns DescribeDocParserJobResultResponse
     *
     * @param DescribeDocParserJobResultRequest $request
     *
     * @return DescribeDocParserJobResultResponse
     */
    public function describeDocParserJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocParserJobResultWithOptions($request, $runtime);
    }

    /**
     * 查看工作流任务结果.
     *
     * @param Request - DescribeDocParserJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocParserJobStatusResponse
     *
     * @param DescribeDocParserJobStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDocParserJobStatusResponse
     */
    public function describeDocParserJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'DescribeDocParserJobStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocParserJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看工作流任务结果.
     *
     * @param Request - DescribeDocParserJobStatusRequest
     *
     * @returns DescribeDocParserJobStatusResponse
     *
     * @param DescribeDocParserJobStatusRequest $request
     *
     * @return DescribeDocParserJobStatusResponse
     */
    public function describeDocParserJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocParserJobStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the details of extract, transform, and load (ETL) tasks.
     *
     * @param Request - DescribeDtsEtlJobVersionInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDtsEtlJobVersionInfoResponse
     *
     * @param DescribeDtsEtlJobVersionInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDtsEtlJobVersionInfoResponse
     */
    public function describeDtsEtlJobVersionInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
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
            'action' => 'DescribeDtsEtlJobVersionInfo',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDtsEtlJobVersionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of extract, transform, and load (ETL) tasks.
     *
     * @param Request - DescribeDtsEtlJobVersionInfoRequest
     *
     * @returns DescribeDtsEtlJobVersionInfoResponse
     *
     * @param DescribeDtsEtlJobVersionInfoRequest $request
     *
     * @return DescribeDtsEtlJobVersionInfoResponse
     */
    public function describeDtsEtlJobVersionInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsEtlJobVersionInfoWithOptions($request, $runtime);
    }

    /**
     * 查询DTS任务配置.
     *
     * @param Request - DescribeDtsJobConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDtsJobConfigResponse
     *
     * @param DescribeDtsJobConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDtsJobConfigResponse
     */
    public function describeDtsJobConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->forAcceleration) {
            @$query['ForAcceleration'] = $request->forAcceleration;
        }

        if (null !== $request->module) {
            @$query['Module'] = $request->module;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeDtsJobConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDtsJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询DTS任务配置.
     *
     * @param Request - DescribeDtsJobConfigRequest
     *
     * @returns DescribeDtsJobConfigResponse
     *
     * @param DescribeDtsJobConfigRequest $request
     *
     * @return DescribeDtsJobConfigResponse
     */
    public function describeDtsJobConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsJobConfigWithOptions($request, $runtime);
    }

    /**
     * The latency of incremental data migration or synchronization.
     * \\\\\\\\\\>  If you query data migration tasks, the unit of this parameter is milliseconds. If you query data synchronization tasks, the unit of this parameter is seconds.
     *
     * @param Request - DescribeDtsJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDtsJobDetailResponse
     *
     * @param DescribeDtsJobDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDtsJobDetailResponse
     */
    public function describeDtsJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceID) {
            @$query['DtsInstanceID'] = $request->dtsInstanceID;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->syncSubJobHistory) {
            @$query['SyncSubJobHistory'] = $request->syncSubJobHistory;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDtsJobDetail',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDtsJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The latency of incremental data migration or synchronization.
     * \\\\\\\\\\>  If you query data migration tasks, the unit of this parameter is milliseconds. If you query data synchronization tasks, the unit of this parameter is seconds.
     *
     * @param Request - DescribeDtsJobDetailRequest
     *
     * @returns DescribeDtsJobDetailResponse
     *
     * @param DescribeDtsJobDetailRequest $request
     *
     * @return DescribeDtsJobDetailResponse
     */
    public function describeDtsJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsJobDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the list of Data Transmission Service (DTS) tasks and the details of each task.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Dts\\&api=DescribeDtsJobs\\&type=RPC\\&version=2020-01-01)
     *
     * @param Request - DescribeDtsJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDtsJobsResponse
     *
     * @param DescribeDtsJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDtsJobsResponse
     */
    public function describeDtsJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->destProductType) {
            @$query['DestProductType'] = $request->destProductType;
        }

        if (null !== $request->dtsBisLabel) {
            @$query['DtsBisLabel'] = $request->dtsBisLabel;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderDirection) {
            @$query['OrderDirection'] = $request->orderDirection;
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

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->srcProductType) {
            @$query['SrcProductType'] = $request->srcProductType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->withoutDbList) {
            @$query['WithoutDbList'] = $request->withoutDbList;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDtsJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Data Transmission Service (DTS) tasks and the details of each task.
     *
     * @remarks
     * ## Debugging
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=Dts\\&api=DescribeDtsJobs\\&type=RPC\\&version=2020-01-01)
     *
     * @param Request - DescribeDtsJobsRequest
     *
     * @returns DescribeDtsJobsResponse
     *
     * @param DescribeDtsJobsRequest $request
     *
     * @return DescribeDtsJobsResponse
     */
    public function describeDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of a data migration or synchronization task.
     *
     * @param Request - DescribeDtsServiceLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDtsServiceLogResponse
     *
     * @param DescribeDtsServiceLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDtsServiceLogResponse
     */
    public function describeDtsServiceLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->subJobType) {
            @$query['SubJobType'] = $request->subJobType;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDtsServiceLog',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDtsServiceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a data migration or synchronization task.
     *
     * @param Request - DescribeDtsServiceLogRequest
     *
     * @returns DescribeDtsServiceLogResponse
     *
     * @param DescribeDtsServiceLogRequest $request
     *
     * @return DescribeDtsServiceLogResponse
     */
    public function describeDtsServiceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDtsServiceLogWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the task that changes the database connection settings.
     *
     * @param Request - DescribeEndpointSwitchStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEndpointSwitchStatusResponse
     *
     * @param DescribeEndpointSwitchStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeEndpointSwitchStatusResponse
     */
    public function describeEndpointSwitchStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEndpointSwitchStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEndpointSwitchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the task that changes the database connection settings.
     *
     * @param Request - DescribeEndpointSwitchStatusRequest
     *
     * @returns DescribeEndpointSwitchStatusResponse
     *
     * @param DescribeEndpointSwitchStatusRequest $request
     *
     * @return DescribeEndpointSwitchStatusResponse
     */
    public function describeEndpointSwitchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEndpointSwitchStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of extract, transform, and load (ETL) tasks.
     *
     * @param Request - DescribeEtlJobLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEtlJobLogsResponse
     *
     * @param DescribeEtlJobLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEtlJobLogsResponse
     */
    public function describeEtlJobLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'DescribeEtlJobLogs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEtlJobLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of extract, transform, and load (ETL) tasks.
     *
     * @param Request - DescribeEtlJobLogsRequest
     *
     * @returns DescribeEtlJobLogsResponse
     *
     * @param DescribeEtlJobLogsRequest $request
     *
     * @return DescribeEtlJobLogsResponse
     */
    public function describeEtlJobLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEtlJobLogsWithOptions($request, $runtime);
    }

    /**
     * Queries full data migration tasks.
     *
     * @param Request - DescribeFullProcessListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFullProcessListResponse
     *
     * @param DescribeFullProcessListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeFullProcessListResponse
     */
    public function describeFullProcessListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFullProcessList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFullProcessListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries full data migration tasks.
     *
     * @param Request - DescribeFullProcessListRequest
     *
     * @returns DescribeFullProcessListResponse
     *
     * @param DescribeFullProcessListRequest $request
     *
     * @return DescribeFullProcessListResponse
     */
    public function describeFullProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFullProcessListWithOptions($request, $runtime);
    }

    /**
     * 查询GAD实例列表.
     *
     * @param Request - DescribeGadInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGadInstancesResponse
     *
     * @param DescribeGadInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGadInstancesResponse
     */
    public function describeGadInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbEngineTypes) {
            @$query['DbEngineTypes'] = $request->dbEngineTypes;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->masterDbInstanceId) {
            @$query['MasterDbInstanceId'] = $request->masterDbInstanceId;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->slaveDbInstanceId) {
            @$query['SlaveDbInstanceId'] = $request->slaveDbInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGadInstances',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGadInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询GAD实例列表.
     *
     * @param Request - DescribeGadInstancesRequest
     *
     * @returns DescribeGadInstancesResponse
     *
     * @param DescribeGadInstancesRequest $request
     *
     * @return DescribeGadInstancesResponse
     */
    public function describeGadInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGadInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of initial data synchronization, including the information about the schemas and historical data of the object to be synchronized.
     *
     * @param Request - DescribeInitializationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInitializationStatusResponse
     *
     * @param DescribeInitializationStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInitializationStatusResponse
     */
    public function describeInitializationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInitializationStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInitializationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of initial data synchronization, including the information about the schemas and historical data of the object to be synchronized.
     *
     * @param Request - DescribeInitializationStatusRequest
     *
     * @returns DescribeInitializationStatusResponse
     *
     * @param DescribeInitializationStatusRequest $request
     *
     * @return DescribeInitializationStatusResponse
     */
    public function describeInitializationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInitializationStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring rules of a Data Transmission Service (DTS) task.
     *
     * @param Request - DescribeJobMonitorRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobMonitorRuleResponse
     *
     * @param DescribeJobMonitorRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeJobMonitorRuleResponse
     */
    public function describeJobMonitorRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'DescribeJobMonitorRule',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobMonitorRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring rules of a Data Transmission Service (DTS) task.
     *
     * @param Request - DescribeJobMonitorRuleRequest
     *
     * @returns DescribeJobMonitorRuleResponse
     *
     * @param DescribeJobMonitorRuleRequest $request
     *
     * @return DescribeJobMonitorRuleResponse
     */
    public function describeJobMonitorRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobMonitorRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the metrics of a cluster.
     *
     * @param Request - DescribeMetricListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dtsJobId) {
            @$body['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->env) {
            @$body['Env'] = $request->env;
        }

        if (null !== $request->metricName) {
            @$body['MetricName'] = $request->metricName;
        }

        if (null !== $request->metricType) {
            @$body['MetricType'] = $request->metricType;
        }

        if (null !== $request->ownerID) {
            @$body['OwnerID'] = $request->ownerID;
        }

        if (null !== $request->param) {
            @$body['Param'] = $request->param;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metrics of a cluster.
     *
     * @param Request - DescribeMetricListRequest
     *
     * @returns DescribeMetricListResponse
     *
     * @param DescribeMetricListRequest $request
     *
     * @return DescribeMetricListResponse
     */
    public function describeMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricListWithOptions($request, $runtime);
    }

    /**
     * Queries the alert settings of a data migration instance.
     *
     * @param Request - DescribeMigrationJobAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMigrationJobAlertResponse
     *
     * @param DescribeMigrationJobAlertRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMigrationJobAlertResponse
     */
    public function describeMigrationJobAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeMigrationJobAlert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMigrationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alert settings of a data migration instance.
     *
     * @param Request - DescribeMigrationJobAlertRequest
     *
     * @returns DescribeMigrationJobAlertResponse
     *
     * @param DescribeMigrationJobAlertRequest $request
     *
     * @return DescribeMigrationJobAlertResponse
     */
    public function describeMigrationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobAlertWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a data migration task.
     *
     * @param Request - DescribeMigrationJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMigrationJobDetailResponse
     *
     * @param DescribeMigrationJobDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMigrationJobDetailResponse
     */
    public function describeMigrationJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->migrationMode) {
            @$query['MigrationMode'] = $request->migrationMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMigrationJobDetail',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMigrationJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a data migration task.
     *
     * @param Request - DescribeMigrationJobDetailRequest
     *
     * @returns DescribeMigrationJobDetailResponse
     *
     * @param DescribeMigrationJobDetailRequest $request
     *
     * @return DescribeMigrationJobDetailResponse
     */
    public function describeMigrationJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a data migration task.
     *
     * @param Request - DescribeMigrationJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMigrationJobStatusResponse
     *
     * @param DescribeMigrationJobStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMigrationJobStatusResponse
     */
    public function describeMigrationJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DescribeMigrationJobStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMigrationJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a data migration task.
     *
     * @param Request - DescribeMigrationJobStatusRequest
     *
     * @returns DescribeMigrationJobStatusResponse
     *
     * @param DescribeMigrationJobStatusRequest $request
     *
     * @return DescribeMigrationJobStatusResponse
     */
    public function describeMigrationJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the list of data migration instances and the details of each instance.
     *
     * @param Request - DescribeMigrationJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMigrationJobsResponse
     *
     * @param DescribeMigrationJobsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMigrationJobsResponse
     */
    public function describeMigrationJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->migrationJobName) {
            @$query['MigrationJobName'] = $request->migrationJobName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'action' => 'DescribeMigrationJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMigrationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of data migration instances and the details of each instance.
     *
     * @param Request - DescribeMigrationJobsRequest
     *
     * @returns DescribeMigrationJobsResponse
     *
     * @param DescribeMigrationJobsRequest $request
     *
     * @return DescribeMigrationJobsResponse
     */
    public function describeMigrationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMigrationJobsWithOptions($request, $runtime);
    }

    /**
     * 查询预检查创建GAD订单任务结果.
     *
     * @param Request - DescribePreCheckCreateGadOrderResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePreCheckCreateGadOrderResultResponse
     *
     * @param DescribePreCheckCreateGadOrderResultRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribePreCheckCreateGadOrderResultResponse
     */
    public function describePreCheckCreateGadOrderResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePreCheckCreateGadOrderResult',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePreCheckCreateGadOrderResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询预检查创建GAD订单任务结果.
     *
     * @param Request - DescribePreCheckCreateGadOrderResultRequest
     *
     * @returns DescribePreCheckCreateGadOrderResultResponse
     *
     * @param DescribePreCheckCreateGadOrderResultRequest $request
     *
     * @return DescribePreCheckCreateGadOrderResultResponse
     */
    public function describePreCheckCreateGadOrderResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckCreateGadOrderResultWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a Data Transmission Service (DTS) subtask that performs precheck, schema migration, initial schema synchronization, full data migration, initial full data synchronization, incremental data migration, or incremental data synchronization.
     *
     * @param Request - DescribePreCheckStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePreCheckStatusResponse
     *
     * @param DescribePreCheckStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePreCheckStatusResponse
     */
    public function describePreCheckStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->jobCode) {
            @$query['JobCode'] = $request->jobCode;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->structPhase) {
            @$query['StructPhase'] = $request->structPhase;
        }

        if (null !== $request->structType) {
            @$query['StructType'] = $request->structType;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePreCheckStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePreCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a Data Transmission Service (DTS) subtask that performs precheck, schema migration, initial schema synchronization, full data migration, initial full data synchronization, incremental data migration, or incremental data synchronization.
     *
     * @param Request - DescribePreCheckStatusRequest
     *
     * @returns DescribePreCheckStatusResponse
     *
     * @param DescribePreCheckStatusRequest $request
     *
     * @return DescribePreCheckStatusResponse
     */
    public function describePreCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the alert settings of a change tracking instance.
     *
     * @param Request - DescribeSubscriptionInstanceAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionInstanceAlertResponse
     *
     * @param DescribeSubscriptionInstanceAlertRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSubscriptionInstanceAlertResponse
     */
    public function describeSubscriptionInstanceAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionInstanceAlert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionInstanceAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alert settings of a change tracking instance.
     *
     * @param Request - DescribeSubscriptionInstanceAlertRequest
     *
     * @returns DescribeSubscriptionInstanceAlertResponse
     *
     * @param DescribeSubscriptionInstanceAlertRequest $request
     *
     * @return DescribeSubscriptionInstanceAlertResponse
     */
    public function describeSubscriptionInstanceAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInstanceAlertWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a change tracking instance.
     *
     * @param Request - DescribeSubscriptionInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionInstanceStatusResponse
     *
     * @param DescribeSubscriptionInstanceStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSubscriptionInstanceStatusResponse
     */
    public function describeSubscriptionInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionInstanceStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a change tracking instance.
     *
     * @param Request - DescribeSubscriptionInstanceStatusRequest
     *
     * @returns DescribeSubscriptionInstanceStatusResponse
     *
     * @param DescribeSubscriptionInstanceStatusRequest $request
     *
     * @return DescribeSubscriptionInstanceStatusResponse
     */
    public function describeSubscriptionInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the list of change tracking instances and the details of each instance.
     *
     * @param Request - DescribeSubscriptionInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionInstancesResponse
     *
     * @param DescribeSubscriptionInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSubscriptionInstancesResponse
     */
    public function describeSubscriptionInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceName) {
            @$query['SubscriptionInstanceName'] = $request->subscriptionInstanceName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionInstances',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of change tracking instances and the details of each instance.
     *
     * @param Request - DescribeSubscriptionInstancesRequest
     *
     * @returns DescribeSubscriptionInstancesResponse
     *
     * @param DescribeSubscriptionInstancesRequest $request
     *
     * @return DescribeSubscriptionInstancesResponse
     */
    public function describeSubscriptionInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the subtasks in a distributed change tracking task for a PolarDB-X 1.0 instance.
     *
     * @remarks
     *   When Data Transmission Service (DTS) tracks data changes from a PolarDB-X 1.0 instance, data is distributed across the attached ApsaraDB RDS for MySQL instances. DTS runs a subtask for each ApsaraDB RDS for MySQL instance. You can call this operation to query the details of the subtasks in a distributed change tracking task.
     * *   You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the ID of the change tracking instance and the ID of the consumer group.
     *
     * @param tmpReq - DescribeSubscriptionMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSubscriptionMetaResponse
     *
     * @param DescribeSubscriptionMetaRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSubscriptionMetaResponse
     */
    public function describeSubscriptionMetaWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSubscriptionMetaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subMigrationJobIds) {
            $request->subMigrationJobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subMigrationJobIds, 'SubMigrationJobIds', 'json');
        }

        if (null !== $tmpReq->topics) {
            $request->topicsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->topics, 'Topics', 'json');
        }

        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sid) {
            @$query['Sid'] = $request->sid;
        }

        if (null !== $request->subMigrationJobIdsShrink) {
            @$query['SubMigrationJobIds'] = $request->subMigrationJobIdsShrink;
        }

        if (null !== $request->topicsShrink) {
            @$query['Topics'] = $request->topicsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSubscriptionMeta',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSubscriptionMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the subtasks in a distributed change tracking task for a PolarDB-X 1.0 instance.
     *
     * @remarks
     *   When Data Transmission Service (DTS) tracks data changes from a PolarDB-X 1.0 instance, data is distributed across the attached ApsaraDB RDS for MySQL instances. DTS runs a subtask for each ApsaraDB RDS for MySQL instance. You can call this operation to query the details of the subtasks in a distributed change tracking task.
     * *   You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the ID of the change tracking instance and the ID of the consumer group.
     *
     * @param Request - DescribeSubscriptionMetaRequest
     *
     * @returns DescribeSubscriptionMetaResponse
     *
     * @param DescribeSubscriptionMetaRequest $request
     *
     * @return DescribeSubscriptionMetaResponse
     */
    public function describeSubscriptionMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSubscriptionMetaWithOptions($request, $runtime);
    }

    /**
     * 查看同步和迁移任务的增量写入延迟信息.
     *
     * @param Request - DescribeSyncStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSyncStatusResponse
     *
     * @param DescribeSyncStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSyncStatusResponse
     */
    public function describeSyncStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'DescribeSyncStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSyncStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看同步和迁移任务的增量写入延迟信息.
     *
     * @param Request - DescribeSyncStatusRequest
     *
     * @returns DescribeSyncStatusResponse
     *
     * @param DescribeSyncStatusRequest $request
     *
     * @return DescribeSyncStatusResponse
     */
    public function describeSyncStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the alert settings of a data synchronization instance.
     *
     * @param Request - DescribeSynchronizationJobAlertRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynchronizationJobAlertResponse
     *
     * @param DescribeSynchronizationJobAlertRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSynchronizationJobAlertResponse
     */
    public function describeSynchronizationJobAlertWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynchronizationJobAlert',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynchronizationJobAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alert settings of a data synchronization instance.
     *
     * @param Request - DescribeSynchronizationJobAlertRequest
     *
     * @returns DescribeSynchronizationJobAlertResponse
     *
     * @param DescribeSynchronizationJobAlertRequest $request
     *
     * @return DescribeSynchronizationJobAlertResponse
     */
    public function describeSynchronizationJobAlert($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobAlertWithOptions($request, $runtime);
    }

    /**
     * Queries whether image matching is enabled for a data synchronization instance.
     *
     * @param Request - DescribeSynchronizationJobReplicatorCompareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynchronizationJobReplicatorCompareResponse
     *
     * @param DescribeSynchronizationJobReplicatorCompareRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeSynchronizationJobReplicatorCompareResponse
     */
    public function describeSynchronizationJobReplicatorCompareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynchronizationJobReplicatorCompare',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynchronizationJobReplicatorCompareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether image matching is enabled for a data synchronization instance.
     *
     * @param Request - DescribeSynchronizationJobReplicatorCompareRequest
     *
     * @returns DescribeSynchronizationJobReplicatorCompareResponse
     *
     * @param DescribeSynchronizationJobReplicatorCompareRequest $request
     *
     * @return DescribeSynchronizationJobReplicatorCompareResponse
     */
    public function describeSynchronizationJobReplicatorCompare($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobReplicatorCompareWithOptions($request, $runtime);
    }

    /**
     * Queries the status of a data synchronization instance.
     *
     * @param Request - DescribeSynchronizationJobStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynchronizationJobStatusResponse
     *
     * @param DescribeSynchronizationJobStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSynchronizationJobStatusResponse
     */
    public function describeSynchronizationJobStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynchronizationJobStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynchronizationJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of a data synchronization instance.
     *
     * @param Request - DescribeSynchronizationJobStatusRequest
     *
     * @returns DescribeSynchronizationJobStatusResponse
     *
     * @param DescribeSynchronizationJobStatusRequest $request
     *
     * @return DescribeSynchronizationJobStatusResponse
     */
    public function describeSynchronizationJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the status of one or more data synchronization instances.
     *
     * @param Request - DescribeSynchronizationJobStatusListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynchronizationJobStatusListResponse
     *
     * @param DescribeSynchronizationJobStatusListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeSynchronizationJobStatusListResponse
     */
    public function describeSynchronizationJobStatusListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationJobIdListJsonStr) {
            @$query['SynchronizationJobIdListJsonStr'] = $request->synchronizationJobIdListJsonStr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynchronizationJobStatusList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynchronizationJobStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of one or more data synchronization instances.
     *
     * @param Request - DescribeSynchronizationJobStatusListRequest
     *
     * @returns DescribeSynchronizationJobStatusListResponse
     *
     * @param DescribeSynchronizationJobStatusListRequest $request
     *
     * @return DescribeSynchronizationJobStatusListResponse
     */
    public function describeSynchronizationJobStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobStatusListWithOptions($request, $runtime);
    }

    /**
     * Queries the list of data synchronization instances and the details of each instance.
     *
     * @param Request - DescribeSynchronizationJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynchronizationJobsResponse
     *
     * @param DescribeSynchronizationJobsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSynchronizationJobsResponse
     */
    public function describeSynchronizationJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationJobName) {
            @$query['SynchronizationJobName'] = $request->synchronizationJobName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynchronizationJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynchronizationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of data synchronization instances and the details of each instance.
     *
     * @param Request - DescribeSynchronizationJobsRequest
     *
     * @returns DescribeSynchronizationJobsResponse
     *
     * @param DescribeSynchronizationJobsRequest $request
     *
     * @return DescribeSynchronizationJobsResponse
     */
    public function describeSynchronizationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the task that changes the objects to be synchronized.
     *
     * @param Request - DescribeSynchronizationObjectModifyStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSynchronizationObjectModifyStatusResponse
     *
     * @param DescribeSynchronizationObjectModifyStatusRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse
     */
    public function describeSynchronizationObjectModifyStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSynchronizationObjectModifyStatus',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSynchronizationObjectModifyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the task that changes the objects to be synchronized.
     *
     * @param Request - DescribeSynchronizationObjectModifyStatusRequest
     *
     * @returns DescribeSynchronizationObjectModifyStatusResponse
     *
     * @param DescribeSynchronizationObjectModifyStatusRequest $request
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse
     */
    public function describeSynchronizationObjectModifyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSynchronizationObjectModifyStatusWithOptions($request, $runtime);
    }

    /**
     * Queries all the tags added to a data migration, data synchronization, or change tracking instance.
     *
     * @param Request - DescribeTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagKeysResponse
     *
     * @param DescribeTagKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTagKeysResponse
     */
    public function describeTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagKeys',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all the tags added to a data migration, data synchronization, or change tracking instance.
     *
     * @param Request - DescribeTagKeysRequest
     *
     * @returns DescribeTagKeysResponse
     *
     * @param DescribeTagKeysRequest $request
     *
     * @return DescribeTagKeysResponse
     */
    public function describeTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagKeysWithOptions($request, $runtime);
    }

    /**
     * Queries all the tag values of a tag bound to a data migration, data synchronization, or change tracking instance.
     *
     * @param Request - DescribeTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagValuesResponse
     *
     * @param DescribeTagValuesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTagValuesResponse
     */
    public function describeTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTagValues',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all the tag values of a tag bound to a data migration, data synchronization, or change tracking instance.
     *
     * @param Request - DescribeTagValuesRequest
     *
     * @returns DescribeTagValuesResponse
     *
     * @param DescribeTagValuesRequest $request
     *
     * @return DescribeTagValuesResponse
     */
    public function describeTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTagValuesWithOptions($request, $runtime);
    }

    /**
     * 移除从角色.
     *
     * @param Request - DetachGadInstanceDbMemberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachGadInstanceDbMemberResponse
     *
     * @param DetachGadInstanceDbMemberRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DetachGadInstanceDbMemberResponse
     */
    public function detachGadInstanceDbMemberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->slaveDbInstanceId) {
            @$query['SlaveDbInstanceId'] = $request->slaveDbInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachGadInstanceDbMember',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachGadInstanceDbMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除从角色.
     *
     * @param Request - DetachGadInstanceDbMemberRequest
     *
     * @returns DetachGadInstanceDbMemberResponse
     *
     * @param DetachGadInstanceDbMemberRequest $request
     *
     * @return DetachGadInstanceDbMemberResponse
     */
    public function detachGadInstanceDbMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachGadInstanceDbMemberWithOptions($request, $runtime);
    }

    /**
     * Initializes a built-in account on a node of an active geo-redundancy database cluster. Data Transmission Service (DTS) uses the built-in account to connect to the node and perform data synchronization tasks.
     *
     * @remarks
     *   The node must be an ApsaraDB RDS for MySQL instance or a self-managed MySQL database that is connected over Cloud Enterprise Network (CEN).
     * *   This operation is used to initialize the built-in account named rdsdt_dtsacct on a node of an active geo-redundancy database cluster. DTS uses this account to connect to the node and perform data synchronization tasks.
     *
     * @param Request - InitDtsRdsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitDtsRdsInstanceResponse
     *
     * @param InitDtsRdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InitDtsRdsInstanceResponse
     */
    public function initDtsRdsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->endpointCenId) {
            @$query['EndpointCenId'] = $request->endpointCenId;
        }

        if (null !== $request->endpointInstanceId) {
            @$query['EndpointInstanceId'] = $request->endpointInstanceId;
        }

        if (null !== $request->endpointInstanceType) {
            @$query['EndpointInstanceType'] = $request->endpointInstanceType;
        }

        if (null !== $request->endpointRegion) {
            @$query['EndpointRegion'] = $request->endpointRegion;
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
            'action' => 'InitDtsRdsInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitDtsRdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes a built-in account on a node of an active geo-redundancy database cluster. Data Transmission Service (DTS) uses the built-in account to connect to the node and perform data synchronization tasks.
     *
     * @remarks
     *   The node must be an ApsaraDB RDS for MySQL instance or a self-managed MySQL database that is connected over Cloud Enterprise Network (CEN).
     * *   This operation is used to initialize the built-in account named rdsdt_dtsacct on a node of an active geo-redundancy database cluster. DTS uses this account to connect to the node and perform data synchronization tasks.
     *
     * @param Request - InitDtsRdsInstanceRequest
     *
     * @returns InitDtsRdsInstanceResponse
     *
     * @param InitDtsRdsInstanceRequest $request
     *
     * @return InitDtsRdsInstanceResponse
     */
    public function initDtsRdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initDtsRdsInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries all clusters that are created within an Alibaba Cloud account. You can also query clusters based on the specified conditions.
     *
     * @param Request - ListDedicatedClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDedicatedClusterResponse
     *
     * @param ListDedicatedClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDedicatedClusterResponse
     */
    public function listDedicatedClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderColumn) {
            @$query['OrderColumn'] = $request->orderColumn;
        }

        if (null !== $request->orderDirection) {
            @$query['OrderDirection'] = $request->orderDirection;
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

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDedicatedCluster',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all clusters that are created within an Alibaba Cloud account. You can also query clusters based on the specified conditions.
     *
     * @param Request - ListDedicatedClusterRequest
     *
     * @returns ListDedicatedClusterResponse
     *
     * @param ListDedicatedClusterRequest $request
     *
     * @return ListDedicatedClusterResponse
     */
    public function listDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * 查询JobStep列表。
     *
     * @param Request - ListJobStepRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobStepResponse
     *
     * @param ListJobStepRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListJobStepResponse
     */
    public function listJobStepWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobStep',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobStepResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询JobStep列表。
     *
     * @param Request - ListJobStepRequest
     *
     * @returns ListJobStepResponse
     *
     * @param ListJobStepRequest $request
     *
     * @return ListJobStepResponse
     */
    public function listJobStep($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobStepWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are bound to specific data migration, data synchronization, or change tracking instances, or queries the instances to which specific tags are bound.
     *
     * @remarks
     *
     * @param Request - ListTagResourcesRequest
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2020-01-01',
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
     * Queries the tags that are bound to specific data migration, data synchronization, or change tracking instances, or queries the instances to which specific tags are bound.
     *
     * @remarks
     *
     * @param Request - ListTagResourcesRequest
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
     * Modifies the information of a consumer group, including the consumer group name, username, and password.
     *
     * @param Request - ModifyConsumerChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyConsumerChannelResponse
     *
     * @param ModifyConsumerChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyConsumerChannelResponse
     */
    public function modifyConsumerChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consumerGroupId) {
            @$query['ConsumerGroupId'] = $request->consumerGroupId;
        }

        if (null !== $request->consumerGroupName) {
            @$query['ConsumerGroupName'] = $request->consumerGroupName;
        }

        if (null !== $request->consumerGroupPassword) {
            @$query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }

        if (null !== $request->consumerGroupUserName) {
            @$query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
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
            'action' => 'ModifyConsumerChannel',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyConsumerChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information of a consumer group, including the consumer group name, username, and password.
     *
     * @param Request - ModifyConsumerChannelRequest
     *
     * @returns ModifyConsumerChannelResponse
     *
     * @param ModifyConsumerChannelRequest $request
     *
     * @return ModifyConsumerChannelResponse
     */
    public function modifyConsumerChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConsumerChannelWithOptions($request, $runtime);
    }

    /**
     * Modifies the password of a consumer group.
     *
     * @param Request - ModifyConsumerGroupPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyConsumerGroupPasswordResponse
     *
     * @param ModifyConsumerGroupPasswordRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyConsumerGroupPasswordResponse
     */
    public function modifyConsumerGroupPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->consumerGroupID) {
            @$query['ConsumerGroupID'] = $request->consumerGroupID;
        }

        if (null !== $request->consumerGroupName) {
            @$query['ConsumerGroupName'] = $request->consumerGroupName;
        }

        if (null !== $request->consumerGroupPassword) {
            @$query['ConsumerGroupPassword'] = $request->consumerGroupPassword;
        }

        if (null !== $request->consumerGroupUserName) {
            @$query['ConsumerGroupUserName'] = $request->consumerGroupUserName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        if (null !== $request->consumerGroupNewPassword) {
            @$query['consumerGroupNewPassword'] = $request->consumerGroupNewPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyConsumerGroupPassword',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyConsumerGroupPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the password of a consumer group.
     *
     * @param Request - ModifyConsumerGroupPasswordRequest
     *
     * @returns ModifyConsumerGroupPasswordResponse
     *
     * @param ModifyConsumerGroupPasswordRequest $request
     *
     * @return ModifyConsumerGroupPasswordResponse
     */
    public function modifyConsumerGroupPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConsumerGroupPasswordWithOptions($request, $runtime);
    }

    /**
     * Modifies the consumption checkpoint of a change tracking instance.
     *
     * @param Request - ModifyConsumptionTimestampRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyConsumptionTimestampResponse
     *
     * @param ModifyConsumptionTimestampRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyConsumptionTimestampResponse
     */
    public function modifyConsumptionTimestampWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->consumptionTimestamp) {
            @$query['ConsumptionTimestamp'] = $request->consumptionTimestamp;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyConsumptionTimestamp',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyConsumptionTimestampResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the consumption checkpoint of a change tracking instance.
     *
     * @param Request - ModifyConsumptionTimestampRequest
     *
     * @returns ModifyConsumptionTimestampResponse
     *
     * @param ModifyConsumptionTimestampRequest $request
     *
     * @return ModifyConsumptionTimestampResponse
     */
    public function modifyConsumptionTimestamp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConsumptionTimestampWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of a cluster.
     *
     * @remarks
     * You can modify only the overcommit ratio.
     *
     * @param Request - ModifyDedicatedClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedClusterResponse
     *
     * @param ModifyDedicatedClusterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDedicatedClusterResponse
     */
    public function modifyDedicatedClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->dedicatedClusterName) {
            @$query['DedicatedClusterName'] = $request->dedicatedClusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->oversoldRatio) {
            @$query['OversoldRatio'] = $request->oversoldRatio;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDedicatedCluster',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of a cluster.
     *
     * @remarks
     * You can modify only the overcommit ratio.
     *
     * @param Request - ModifyDedicatedClusterRequest
     *
     * @returns ModifyDedicatedClusterResponse
     *
     * @param ModifyDedicatedClusterRequest $request
     *
     * @return ModifyDedicatedClusterResponse
     */
    public function modifyDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a data synchronization task.
     *
     * @remarks
     * When you configure a data synchronization task in the Data Transmission Service (DTS) console, you can move the pointer over **Next: Save Task Settings and Precheck** in the **Advanced Settings** step and click **Preview OpenAPI parameters** to view the parameters that are used to configure the task by calling an API operation.
     *
     * @param tmpReq - ModifyDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobResponse
     *
     * @param ModifyDtsJobRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDtsJobResponse
     */
    public function modifyDtsJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyDtsJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dbList) {
            $request->dbListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dbList, 'DbList', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataInitialization) {
            @$query['DataInitialization'] = $request->dataInitialization;
        }

        if (null !== $request->dataSynchronization) {
            @$query['DataSynchronization'] = $request->dataSynchronization;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->fileOssUrl) {
            @$query['FileOssUrl'] = $request->fileOssUrl;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->structureInitialization) {
            @$query['StructureInitialization'] = $request->structureInitialization;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $body = [];
        if (null !== $request->dbListShrink) {
            @$body['DbList'] = $request->dbListShrink;
        }

        if (null !== $request->etlOperatorColumnReference) {
            @$body['EtlOperatorColumnReference'] = $request->etlOperatorColumnReference;
        }

        if (null !== $request->filterTableName) {
            @$body['FilterTableName'] = $request->filterTableName;
        }

        if (null !== $request->modifyTypeEnum) {
            @$body['ModifyTypeEnum'] = $request->modifyTypeEnum;
        }

        if (null !== $request->reserved) {
            @$body['Reserved'] = $request->reserved;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a data synchronization task.
     *
     * @remarks
     * When you configure a data synchronization task in the Data Transmission Service (DTS) console, you can move the pointer over **Next: Save Task Settings and Precheck** in the **Advanced Settings** step and click **Preview OpenAPI parameters** to view the parameters that are used to configure the task by calling an API operation.
     *
     * @param Request - ModifyDtsJobRequest
     *
     * @returns ModifyDtsJobResponse
     *
     * @param ModifyDtsJobRequest $request
     *
     * @return ModifyDtsJobResponse
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
            'Product' => 'Dts',
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
        $modifyDtsJobReq = new ModifyDtsJobRequest([]);
        Utils::convert($request, $modifyDtsJobReq);
        if (null !== $request->fileOssUrlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->fileOssUrlObject,
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
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $modifyDtsJobReq->fileOssUrl = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->modifyDtsJobWithOptions($modifyDtsJobReq, $runtime);
    }

    /**
     * Modifies the parameters of a Data Transmission Service (DTS) task.
     *
     * @param Request - ModifyDtsJobConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobConfigResponse
     *
     * @param ModifyDtsJobConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDtsJobConfigResponse
     */
    public function modifyDtsJobConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
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
            'action' => 'ModifyDtsJobConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the parameters of a Data Transmission Service (DTS) task.
     *
     * @param Request - ModifyDtsJobConfigRequest
     *
     * @returns ModifyDtsJobConfigResponse
     *
     * @param ModifyDtsJobConfigRequest $request
     *
     * @return ModifyDtsJobConfigResponse
     */
    public function modifyDtsJobConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobConfigWithOptions($request, $runtime);
    }

    /**
     * Changes the dedicated cluster on which a Data Transmission Service (DTS) task runs.
     *
     * @remarks
     * > After a DTS task is migrated from a dedicated cluster to a shared cluster, the task is billed on a pay-as-you-go basis.
     *
     * @param Request - ModifyDtsJobDedicatedClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobDedicatedClusterResponse
     *
     * @param ModifyDtsJobDedicatedClusterRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDtsJobDedicatedClusterResponse
     */
    public function modifyDtsJobDedicatedClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->dtsJobIds) {
            @$query['DtsJobIds'] = $request->dtsJobIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDtsJobDedicatedCluster',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the dedicated cluster on which a Data Transmission Service (DTS) task runs.
     *
     * @remarks
     * > After a DTS task is migrated from a dedicated cluster to a shared cluster, the task is billed on a pay-as-you-go basis.
     *
     * @param Request - ModifyDtsJobDedicatedClusterRequest
     *
     * @returns ModifyDtsJobDedicatedClusterResponse
     *
     * @param ModifyDtsJobDedicatedClusterRequest $request
     *
     * @return ModifyDtsJobDedicatedClusterResponse
     */
    public function modifyDtsJobDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * Modifies the upper limit of DTS units (DUs) for a Data Transmission Service (DTS) task.
     *
     * @remarks
     *   DTS allows you to upgrade or downgrade the configurations of DTS instances in a dedicated cluster. You can adjust the resources that are occupied for task execution to dynamically adjust the number of tasks that can be scheduled in the cluster. This way, you can reduce the total number of DUs required for the cluster or release DUs.
     * *   Before you modify the upper limit of DUs for a DTS task, make sure that sufficient DUs are available.
     *
     * @param Request - ModifyDtsJobDuLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobDuLimitResponse
     *
     * @param ModifyDtsJobDuLimitRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDtsJobDuLimitResponse
     */
    public function modifyDtsJobDuLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->duLimit) {
            @$query['DuLimit'] = $request->duLimit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyDtsJobDuLimit',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobDuLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the upper limit of DTS units (DUs) for a Data Transmission Service (DTS) task.
     *
     * @remarks
     *   DTS allows you to upgrade or downgrade the configurations of DTS instances in a dedicated cluster. You can adjust the resources that are occupied for task execution to dynamically adjust the number of tasks that can be scheduled in the cluster. This way, you can reduce the total number of DUs required for the cluster or release DUs.
     * *   Before you modify the upper limit of DUs for a DTS task, make sure that sufficient DUs are available.
     *
     * @param Request - ModifyDtsJobDuLimitRequest
     *
     * @returns ModifyDtsJobDuLimitResponse
     *
     * @param ModifyDtsJobDuLimitRequest $request
     *
     * @return ModifyDtsJobDuLimitResponse
     */
    public function modifyDtsJobDuLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobDuLimitWithOptions($request, $runtime);
    }

    /**
     * Changes the source or destination database instance of a data synchronization or migration task in Data Transmission Service (DTS).
     *
     * @remarks
     * >  After the database is changed, Data Transmission Service (DTS) rolls back the incremental write offset for 10 seconds. If the synchronized or migrated data does not have a primary key, make sure that no data is written to the source database while the source or destination database is being replaced. Otherwise, duplicate data may exist.
     *
     * @param Request - ModifyDtsJobEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobEndpointResponse
     *
     * @param ModifyDtsJobEndpointRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDtsJobEndpointResponse
     */
    public function modifyDtsJobEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunUid) {
            @$query['AliyunUid'] = $request->aliyunUid;
        }

        if (null !== $request->database) {
            @$query['Database'] = $request->database;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->endpointInstanceId) {
            @$query['EndpointInstanceId'] = $request->endpointInstanceId;
        }

        if (null !== $request->endpointInstanceType) {
            @$query['EndpointInstanceType'] = $request->endpointInstanceType;
        }

        if (null !== $request->endpointIp) {
            @$query['EndpointIp'] = $request->endpointIp;
        }

        if (null !== $request->endpointPort) {
            @$query['EndpointPort'] = $request->endpointPort;
        }

        if (null !== $request->endpointRegionId) {
            @$query['EndpointRegionId'] = $request->endpointRegionId;
        }

        if (null !== $request->modifyAccount) {
            @$query['ModifyAccount'] = $request->modifyAccount;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        if (null !== $request->shardPassword) {
            @$query['ShardPassword'] = $request->shardPassword;
        }

        if (null !== $request->shardUsername) {
            @$query['ShardUsername'] = $request->shardUsername;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDtsJobEndpoint',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the source or destination database instance of a data synchronization or migration task in Data Transmission Service (DTS).
     *
     * @remarks
     * >  After the database is changed, Data Transmission Service (DTS) rolls back the incremental write offset for 10 seconds. If the synchronized or migrated data does not have a primary key, make sure that no data is written to the source database while the source or destination database is being replaced. Otherwise, duplicate data may exist.
     *
     * @param Request - ModifyDtsJobEndpointRequest
     *
     * @returns ModifyDtsJobEndpointResponse
     *
     * @param ModifyDtsJobEndpointRequest $request
     *
     * @return ModifyDtsJobEndpointResponse
     */
    public function modifyDtsJobEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobEndpointWithOptions($request, $runtime);
    }

    /**
     * Changes the name of a Data Transmission Service (DTS) task.
     *
     * @param Request - ModifyDtsJobNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobNameResponse
     *
     * @param ModifyDtsJobNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDtsJobNameResponse
     */
    public function modifyDtsJobNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->dtsJobName) {
            @$query['DtsJobName'] = $request->dtsJobName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDtsJobName',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of a Data Transmission Service (DTS) task.
     *
     * @param Request - ModifyDtsJobNameRequest
     *
     * @returns ModifyDtsJobNameResponse
     *
     * @param ModifyDtsJobNameRequest $request
     *
     * @return ModifyDtsJobNameResponse
     */
    public function modifyDtsJobName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobNameWithOptions($request, $runtime);
    }

    /**
     * Changes the password of the account used to log on to the source or destination database in a Data Transmission Service (DTS) task.
     *
     * @param Request - ModifyDtsJobPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDtsJobPasswordResponse
     *
     * @param ModifyDtsJobPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDtsJobPasswordResponse
     */
    public function modifyDtsJobPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDtsJobPassword',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDtsJobPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the password of the account used to log on to the source or destination database in a Data Transmission Service (DTS) task.
     *
     * @param Request - ModifyDtsJobPasswordRequest
     *
     * @returns ModifyDtsJobPasswordResponse
     *
     * @param ModifyDtsJobPasswordRequest $request
     *
     * @return ModifyDtsJobPasswordResponse
     */
    public function modifyDtsJobPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDtsJobPasswordWithOptions($request, $runtime);
    }

    /**
     * Enables throttling for data synchronization and data migration.
     *
     * @param Request - ModifyDynamicConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDynamicConfigResponse
     *
     * @param ModifyDynamicConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDynamicConfigResponse
     */
    public function modifyDynamicConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configList) {
            @$query['ConfigList'] = $request->configList;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->enableLimit) {
            @$query['EnableLimit'] = $request->enableLimit;
        }

        if (null !== $request->jobCode) {
            @$query['JobCode'] = $request->jobCode;
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
            'action' => 'ModifyDynamicConfig',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDynamicConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables throttling for data synchronization and data migration.
     *
     * @param Request - ModifyDynamicConfigRequest
     *
     * @returns ModifyDynamicConfigResponse
     *
     * @param ModifyDynamicConfigRequest $request
     *
     * @return ModifyDynamicConfigResponse
     */
    public function modifyDynamicConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDynamicConfigWithOptions($request, $runtime);
    }

    /**
     * 修改GAD实例名称.
     *
     * @param Request - ModifyGadInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGadInstanceNameResponse
     *
     * @param ModifyGadInstanceNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyGadInstanceNameResponse
     */
    public function modifyGadInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ModifyGadInstanceName',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGadInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改GAD实例名称.
     *
     * @param Request - ModifyGadInstanceNameRequest
     *
     * @returns ModifyGadInstanceNameResponse
     *
     * @param ModifyGadInstanceNameRequest $request
     *
     * @return ModifyGadInstanceNameResponse
     */
    public function modifyGadInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGadInstanceNameWithOptions($request, $runtime);
    }

    /**
     * 修改增量写入的位点。
     *
     * @param Request - ModifyJobStepCheckpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyJobStepCheckpointResponse
     *
     * @param ModifyJobStepCheckpointRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyJobStepCheckpointResponse
     */
    public function modifyJobStepCheckpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->jobStepId) {
            @$query['JobStepId'] = $request->jobStepId;
        }

        if (null !== $request->newCheckPoint) {
            @$query['NewCheckPoint'] = $request->newCheckPoint;
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
            'action' => 'ModifyJobStepCheckpoint',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyJobStepCheckpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改增量写入的位点。
     *
     * @param Request - ModifyJobStepCheckpointRequest
     *
     * @returns ModifyJobStepCheckpointResponse
     *
     * @param ModifyJobStepCheckpointRequest $request
     *
     * @return ModifyJobStepCheckpointResponse
     */
    public function modifyJobStepCheckpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJobStepCheckpointWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a change tracking task.
     *
     * @remarks
     * >  You can preview related API operation parameters when you modify the information about a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *
     * @param Request - ModifySubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySubscriptionResponse
     *
     * @param ModifySubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifySubscriptionResponse
     */
    public function modifySubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbList) {
            @$query['DbList'] = $request->dbList;
        }

        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->reserved) {
            @$query['Reserved'] = $request->reserved;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionDataTypeDDL) {
            @$query['SubscriptionDataTypeDDL'] = $request->subscriptionDataTypeDDL;
        }

        if (null !== $request->subscriptionDataTypeDML) {
            @$query['SubscriptionDataTypeDML'] = $request->subscriptionDataTypeDML;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySubscription',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about a change tracking task.
     *
     * @remarks
     * >  You can preview related API operation parameters when you modify the information about a change tracking task in the Data Transmission Service (DTS) console. This helps you configure the request parameters of this API operation. For more information, see [Preview the request parameters of API operations](https://help.aliyun.com/document_detail/2851612.html).
     *
     * @param Request - ModifySubscriptionRequest
     *
     * @returns ModifySubscriptionResponse
     *
     * @param ModifySubscriptionRequest $request
     *
     * @return ModifySubscriptionResponse
     */
    public function modifySubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionWithOptions($request, $runtime);
    }

    /**
     * Modifies the objects for change tracking.
     *
     * @param Request - ModifySubscriptionObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySubscriptionObjectResponse
     *
     * @param ModifySubscriptionObjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySubscriptionObjectResponse
     */
    public function modifySubscriptionObjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        if (null !== $request->subscriptionObject) {
            @$query['SubscriptionObject'] = $request->subscriptionObject;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySubscriptionObject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySubscriptionObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the objects for change tracking.
     *
     * @param Request - ModifySubscriptionObjectRequest
     *
     * @returns ModifySubscriptionObjectResponse
     *
     * @param ModifySubscriptionObjectRequest $request
     *
     * @return ModifySubscriptionObjectResponse
     */
    public function modifySubscriptionObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySubscriptionObjectWithOptions($request, $runtime);
    }

    /**
     * Modifies the objects to be synchronized.
     *
     * @param Request - ModifySynchronizationObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySynchronizationObjectResponse
     *
     * @param ModifySynchronizationObjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifySynchronizationObjectResponse
     */
    public function modifySynchronizationObjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $body = [];
        if (null !== $request->synchronizationObjects) {
            @$body['SynchronizationObjects'] = $request->synchronizationObjects;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifySynchronizationObject',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySynchronizationObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the objects to be synchronized.
     *
     * @param Request - ModifySynchronizationObjectRequest
     *
     * @returns ModifySynchronizationObjectResponse
     *
     * @param ModifySynchronizationObjectRequest $request
     *
     * @return ModifySynchronizationObjectResponse
     */
    public function modifySynchronizationObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySynchronizationObjectWithOptions($request, $runtime);
    }

    /**
     * 预检查创建GAD订单.
     *
     * @param Request - PreCheckCreateGadOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreCheckCreateGadOrderResponse
     *
     * @param PreCheckCreateGadOrderRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PreCheckCreateGadOrderResponse
     */
    public function preCheckCreateGadOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->masterDatabaseName) {
            @$query['MasterDatabaseName'] = $request->masterDatabaseName;
        }

        if (null !== $request->masterEngineArchType) {
            @$query['MasterEngineArchType'] = $request->masterEngineArchType;
        }

        if (null !== $request->masterShardAccountName) {
            @$query['MasterShardAccountName'] = $request->masterShardAccountName;
        }

        if (null !== $request->masterShardAccountPassword) {
            @$query['MasterShardAccountPassword'] = $request->masterShardAccountPassword;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->slaveDatabaseName) {
            @$query['SlaveDatabaseName'] = $request->slaveDatabaseName;
        }

        if (null !== $request->slaveDbInstanceId) {
            @$query['SlaveDbInstanceId'] = $request->slaveDbInstanceId;
        }

        if (null !== $request->slaveDbInstanceRegion) {
            @$query['SlaveDbInstanceRegion'] = $request->slaveDbInstanceRegion;
        }

        if (null !== $request->slaveEngineArchType) {
            @$query['SlaveEngineArchType'] = $request->slaveEngineArchType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreCheckCreateGadOrder',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreCheckCreateGadOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预检查创建GAD订单.
     *
     * @param Request - PreCheckCreateGadOrderRequest
     *
     * @returns PreCheckCreateGadOrderResponse
     *
     * @param PreCheckCreateGadOrderRequest $request
     *
     * @return PreCheckCreateGadOrderResponse
     */
    public function preCheckCreateGadOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preCheckCreateGadOrderWithOptions($request, $runtime);
    }

    /**
     * Renews a Data Transmission Service (DTS) instance. This API operation is available only for subscription instances.
     *
     * @param Request - RenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buyCount) {
            @$query['BuyCount'] = $request->buyCount;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
            'action' => 'RenewInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a Data Transmission Service (DTS) instance. This API operation is available only for subscription instances.
     *
     * @param Request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * Resets a data synchronization or change tracking task.
     *
     * @remarks
     * >  If you clear the configurations of a data synchronization or change tracking task, DTS deletes the task. Then, DTS creates another task. The task is in the Not Configured state. You must call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation reconfigure the task.
     *
     * @param Request - ResetDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetDtsJobResponse
     *
     * @param ResetDtsJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetDtsJobResponse
     */
    public function resetDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets a data synchronization or change tracking task.
     *
     * @remarks
     * >  If you clear the configurations of a data synchronization or change tracking task, DTS deletes the task. Then, DTS creates another task. The task is in the Not Configured state. You must call the [ConfigureDtsJob](https://help.aliyun.com/document_detail/208399.html) operation reconfigure the task.
     *
     * @param Request - ResetDtsJobRequest
     *
     * @returns ResetDtsJobResponse
     *
     * @param ResetDtsJobRequest $request
     *
     * @return ResetDtsJobResponse
     */
    public function resetDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDtsJobWithOptions($request, $runtime);
    }

    /**
     * Clears the configurations of a data synchronization task.
     *
     * @remarks
     * >  If you clear the configurations of a data synchronization task, the task will be released. To start the task again, you must call the **ConfigureSynchronizationJob** operation to reconfigure the task.
     *
     * @param Request - ResetSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetSynchronizationJobResponse
     *
     * @param ResetSynchronizationJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResetSynchronizationJobResponse
     */
    public function resetSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetSynchronizationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the configurations of a data synchronization task.
     *
     * @remarks
     * >  If you clear the configurations of a data synchronization task, the task will be released. To start the task again, you must call the **ConfigureSynchronizationJob** operation to reconfigure the task.
     *
     * @param Request - ResetSynchronizationJobRequest
     *
     * @returns ResetSynchronizationJobResponse
     *
     * @param ResetSynchronizationJobRequest $request
     *
     * @return ResetSynchronizationJobResponse
     */
    public function resetSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * 调转双向任务的方向.
     *
     * @param Request - ReverseTwoWayDirectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReverseTwoWayDirectionResponse
     *
     * @param ReverseTwoWayDirectionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReverseTwoWayDirectionResponse
     */
    public function reverseTwoWayDirectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->ignoreErrorSubJob) {
            @$query['IgnoreErrorSubJob'] = $request->ignoreErrorSubJob;
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
            'action' => 'ReverseTwoWayDirection',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReverseTwoWayDirectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调转双向任务的方向.
     *
     * @param Request - ReverseTwoWayDirectionRequest
     *
     * @returns ReverseTwoWayDirectionResponse
     *
     * @param ReverseTwoWayDirectionRequest $request
     *
     * @return ReverseTwoWayDirectionResponse
     */
    public function reverseTwoWayDirection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reverseTwoWayDirectionWithOptions($request, $runtime);
    }

    /**
     * Ignores the precheck items that a data migration or synchronization task may fail to pass.
     *
     * @param Request - ShieldPrecheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ShieldPrecheckResponse
     *
     * @param ShieldPrecheckRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ShieldPrecheckResponse
     */
    public function shieldPrecheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->precheckItems) {
            @$query['PrecheckItems'] = $request->precheckItems;
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
            'action' => 'ShieldPrecheck',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ShieldPrecheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ignores the precheck items that a data migration or synchronization task may fail to pass.
     *
     * @param Request - ShieldPrecheckRequest
     *
     * @returns ShieldPrecheckResponse
     *
     * @param ShieldPrecheckRequest $request
     *
     * @return ShieldPrecheckResponse
     */
    public function shieldPrecheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->shieldPrecheckWithOptions($request, $runtime);
    }

    /**
     * The tables that do not need to be synchronized in a full data synchronization are skipped.
     *
     * @param Request - SkipFullJobTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SkipFullJobTableResponse
     *
     * @param SkipFullJobTableRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SkipFullJobTableResponse
     */
    public function skipFullJobTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->jobProgressId) {
            @$query['JobProgressId'] = $request->jobProgressId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SkipFullJobTable',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SkipFullJobTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The tables that do not need to be synchronized in a full data synchronization are skipped.
     *
     * @param Request - SkipFullJobTableRequest
     *
     * @returns SkipFullJobTableResponse
     *
     * @param SkipFullJobTableRequest $request
     *
     * @return SkipFullJobTableResponse
     */
    public function skipFullJobTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipFullJobTableWithOptions($request, $runtime);
    }

    /**
     * Skips one or more precheck items.
     *
     * @param Request - SkipPreCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SkipPreCheckResponse
     *
     * @param SkipPreCheckRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SkipPreCheckResponse
     */
    public function skipPreCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->skipPreCheckItems) {
            @$query['SkipPreCheckItems'] = $request->skipPreCheckItems;
        }

        if (null !== $request->skipPreCheckNames) {
            @$query['SkipPreCheckNames'] = $request->skipPreCheckNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SkipPreCheck',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SkipPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Skips one or more precheck items.
     *
     * @param Request - SkipPreCheckRequest
     *
     * @returns SkipPreCheckResponse
     *
     * @param SkipPreCheckRequest $request
     *
     * @return SkipPreCheckResponse
     */
    public function skipPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipPreCheckWithOptions($request, $runtime);
    }

    /**
     * Starts a data migration, data synchronization, or change tracking task.
     *
     * @param Request - StartDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDtsJobResponse
     *
     * @param StartDtsJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDtsJobResponse
     */
    public function startDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a data migration, data synchronization, or change tracking task.
     *
     * @param Request - StartDtsJobRequest
     *
     * @returns StartDtsJobResponse
     *
     * @param StartDtsJobRequest $request
     *
     * @return StartDtsJobResponse
     */
    public function startDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDtsJobWithOptions($request, $runtime);
    }

    /**
     * Starts multiple data migration or data synchronization tasks.
     *
     * @param Request - StartDtsJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDtsJobsResponse
     *
     * @param StartDtsJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartDtsJobsResponse
     */
    public function startDtsJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobIds) {
            @$query['DtsJobIds'] = $request->dtsJobIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDtsJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts multiple data migration or data synchronization tasks.
     *
     * @param Request - StartDtsJobsRequest
     *
     * @returns StartDtsJobsResponse
     *
     * @param StartDtsJobsRequest $request
     *
     * @return StartDtsJobsResponse
     */
    public function startDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDtsJobsWithOptions($request, $runtime);
    }

    /**
     * Starts a data migration task.
     *
     * @param Request - StartMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartMigrationJobResponse
     *
     * @param StartMigrationJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartMigrationJobResponse
     */
    public function startMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'StartMigrationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a data migration task.
     *
     * @param Request - StartMigrationJobRequest
     *
     * @returns StartMigrationJobResponse
     *
     * @param StartMigrationJobRequest $request
     *
     * @return StartMigrationJobResponse
     */
    public function startMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Starts the reverse task that is created by calling the CreateReverseDtsJob operation.
     *
     * @remarks
     * Before you call this operation, make sure that your instance is not released and is paused. You can check the status of the instance in the Data Transmission Service (DTS) console or by calling the [DescribeDtsJobDetail](https://help.aliyun.com/document_detail/208925.html) operation.
     *
     * @param Request - StartReverseWriterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartReverseWriterResponse
     *
     * @param StartReverseWriterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartReverseWriterResponse
     */
    public function startReverseWriterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkPoint) {
            @$query['CheckPoint'] = $request->checkPoint;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartReverseWriter',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartReverseWriterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the reverse task that is created by calling the CreateReverseDtsJob operation.
     *
     * @remarks
     * Before you call this operation, make sure that your instance is not released and is paused. You can check the status of the instance in the Data Transmission Service (DTS) console or by calling the [DescribeDtsJobDetail](https://help.aliyun.com/document_detail/208925.html) operation.
     *
     * @param Request - StartReverseWriterRequest
     *
     * @returns StartReverseWriterResponse
     *
     * @param StartReverseWriterRequest $request
     *
     * @return StartReverseWriterResponse
     */
    public function startReverseWriter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReverseWriterWithOptions($request, $runtime);
    }

    /**
     * Starts a change tracking task.
     *
     * @param Request - StartSubscriptionInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSubscriptionInstanceResponse
     *
     * @param StartSubscriptionInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartSubscriptionInstanceResponse
     */
    public function startSubscriptionInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->subscriptionInstanceId) {
            @$query['SubscriptionInstanceId'] = $request->subscriptionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartSubscriptionInstance',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSubscriptionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a change tracking task.
     *
     * @param Request - StartSubscriptionInstanceRequest
     *
     * @returns StartSubscriptionInstanceResponse
     *
     * @param StartSubscriptionInstanceRequest $request
     *
     * @return StartSubscriptionInstanceResponse
     */
    public function startSubscriptionInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSubscriptionInstanceWithOptions($request, $runtime);
    }

    /**
     * Starts a data synchronization task.
     *
     * @param Request - StartSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSynchronizationJobResponse
     *
     * @param StartSynchronizationJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartSynchronizationJobResponse
     */
    public function startSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartSynchronizationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a data synchronization task.
     *
     * @param Request - StartSynchronizationJobRequest
     *
     * @returns StartSynchronizationJobResponse
     *
     * @param StartSynchronizationJobRequest $request
     *
     * @return StartSynchronizationJobResponse
     */
    public function startSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * Releases a cluster.
     *
     * @param Request - StopDedicatedClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDedicatedClusterResponse
     *
     * @param StopDedicatedClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopDedicatedClusterResponse
     */
    public function stopDedicatedClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dedicatedClusterId) {
            @$query['DedicatedClusterId'] = $request->dedicatedClusterId;
        }

        if (null !== $request->dedicatedClusterName) {
            @$query['DedicatedClusterName'] = $request->dedicatedClusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'StopDedicatedCluster',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDedicatedClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a cluster.
     *
     * @param Request - StopDedicatedClusterRequest
     *
     * @returns StopDedicatedClusterResponse
     *
     * @param StopDedicatedClusterRequest $request
     *
     * @return StopDedicatedClusterResponse
     */
    public function stopDedicatedCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDedicatedClusterWithOptions($request, $runtime);
    }

    /**
     * Stops a data migration, data synchronization, or change tracking task.
     *
     * @param Request - StopDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDtsJobResponse
     *
     * @param StopDtsJobRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDtsJobResponse
     */
    public function stopDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a data migration, data synchronization, or change tracking task.
     *
     * @param Request - StopDtsJobRequest
     *
     * @returns StopDtsJobResponse
     *
     * @param StopDtsJobRequest $request
     *
     * @return StopDtsJobResponse
     */
    public function stopDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDtsJobWithOptions($request, $runtime);
    }

    /**
     * Stops multiple data migration or data synchronization tasks.
     *
     * @param Request - StopDtsJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDtsJobsResponse
     *
     * @param StopDtsJobsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopDtsJobsResponse
     */
    public function stopDtsJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobIds) {
            @$query['DtsJobIds'] = $request->dtsJobIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDtsJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops multiple data migration or data synchronization tasks.
     *
     * @param Request - StopDtsJobsRequest
     *
     * @returns StopDtsJobsResponse
     *
     * @param StopDtsJobsRequest $request
     *
     * @return StopDtsJobsResponse
     */
    public function stopDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDtsJobsWithOptions($request, $runtime);
    }

    /**
     * Stops a data migration task that is in the Migrating state.
     *
     * @param Request - StopMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMigrationJobResponse
     *
     * @param StopMigrationJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopMigrationJobResponse
     */
    public function stopMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'StopMigrationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a data migration task that is in the Migrating state.
     *
     * @param Request - StopMigrationJobRequest
     *
     * @returns StopMigrationJobResponse
     *
     * @param StopMigrationJobRequest $request
     *
     * @return StopMigrationJobResponse
     */
    public function stopMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Queries the number of migrated or synchronized objects in a Data Transmission Service (DTS) task.
     *
     * @param Request - SummaryJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SummaryJobDetailResponse
     *
     * @param SummaryJobDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SummaryJobDetailResponse
     */
    public function summaryJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->jobCode) {
            @$query['JobCode'] = $request->jobCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->structType) {
            @$query['StructType'] = $request->structType;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SummaryJobDetail',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SummaryJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of migrated or synchronized objects in a Data Transmission Service (DTS) task.
     *
     * @param Request - SummaryJobDetailRequest
     *
     * @returns SummaryJobDetailResponse
     *
     * @param SummaryJobDetailRequest $request
     *
     * @return SummaryJobDetailResponse
     */
    public function summaryJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->summaryJobDetailWithOptions($request, $runtime);
    }

    /**
     * Pauses a data migration, data synchronization, or change tracking task.
     *
     * @remarks
     *
     * @param Request - SuspendDtsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendDtsJobResponse
     *
     * @param SuspendDtsJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SuspendDtsJobResponse
     */
    public function suspendDtsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendDtsJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendDtsJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a data migration, data synchronization, or change tracking task.
     *
     * @remarks
     *
     * @param Request - SuspendDtsJobRequest
     *
     * @returns SuspendDtsJobResponse
     *
     * @param SuspendDtsJobRequest $request
     *
     * @return SuspendDtsJobResponse
     */
    public function suspendDtsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendDtsJobWithOptions($request, $runtime);
    }

    /**
     * Suspends multiple Data Transmission Service (DTS) tasks.
     *
     * @param Request - SuspendDtsJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendDtsJobsResponse
     *
     * @param SuspendDtsJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SuspendDtsJobsResponse
     */
    public function suspendDtsJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobIds) {
            @$query['DtsJobIds'] = $request->dtsJobIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendDtsJobs',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendDtsJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends multiple Data Transmission Service (DTS) tasks.
     *
     * @param Request - SuspendDtsJobsRequest
     *
     * @returns SuspendDtsJobsResponse
     *
     * @param SuspendDtsJobsRequest $request
     *
     * @return SuspendDtsJobsResponse
     */
    public function suspendDtsJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendDtsJobsWithOptions($request, $runtime);
    }

    /**
     * Pauses a data migration task.
     *
     * @param Request - SuspendMigrationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendMigrationJobResponse
     *
     * @param SuspendMigrationJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SuspendMigrationJobResponse
     */
    public function suspendMigrationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->migrationJobId) {
            @$query['MigrationJobId'] = $request->migrationJobId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'SuspendMigrationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a data migration task.
     *
     * @param Request - SuspendMigrationJobRequest
     *
     * @returns SuspendMigrationJobResponse
     *
     * @param SuspendMigrationJobRequest $request
     *
     * @return SuspendMigrationJobResponse
     */
    public function suspendMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendMigrationJobWithOptions($request, $runtime);
    }

    /**
     * Pauses a data synchronization task.
     *
     * @remarks
     * >
     * *   When you call this operation, the data synchronization task must be in the Synchronizing state.
     * *   We recommend that you do not pause a data synchronization task for more than 6 hours. Otherwise, the task cannot be started again.
     * *   If the billing method is pay-as-you-go, DTS charges a fee even when the task is paused. This is because DTS only stops writing data to the destination database. DTS continues to pull the logs of the source database so that the task can resume quickly after it is restarted. Therefore, data synchronization consumes resources such as the bandwidth of the source database.
     *
     * @param Request - SuspendSynchronizationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendSynchronizationJobResponse
     *
     * @param SuspendSynchronizationJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SuspendSynchronizationJobResponse
     */
    public function suspendSynchronizationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendSynchronizationJob',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendSynchronizationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses a data synchronization task.
     *
     * @remarks
     * >
     * *   When you call this operation, the data synchronization task must be in the Synchronizing state.
     * *   We recommend that you do not pause a data synchronization task for more than 6 hours. Otherwise, the task cannot be started again.
     * *   If the billing method is pay-as-you-go, DTS charges a fee even when the task is paused. This is because DTS only stops writing data to the destination database. DTS continues to pull the logs of the source database so that the task can resume quickly after it is restarted. Therefore, data synchronization consumes resources such as the bandwidth of the source database.
     *
     * @param Request - SuspendSynchronizationJobRequest
     *
     * @returns SuspendSynchronizationJobResponse
     *
     * @param SuspendSynchronizationJobRequest $request
     *
     * @return SuspendSynchronizationJobResponse
     */
    public function suspendSynchronizationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendSynchronizationJobWithOptions($request, $runtime);
    }

    /**
     * 物理迁移任务切换上云.
     *
     * @param Request - SwitchPhysicalDtsJobToCloudRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchPhysicalDtsJobToCloudResponse
     *
     * @param SwitchPhysicalDtsJobToCloudRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SwitchPhysicalDtsJobToCloudResponse
     */
    public function switchPhysicalDtsJobToCloudWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsInstanceId) {
            @$query['DtsInstanceId'] = $request->dtsInstanceId;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchPhysicalDtsJobToCloud',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchPhysicalDtsJobToCloudResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 物理迁移任务切换上云.
     *
     * @param Request - SwitchPhysicalDtsJobToCloudRequest
     *
     * @returns SwitchPhysicalDtsJobToCloudResponse
     *
     * @param SwitchPhysicalDtsJobToCloudRequest $request
     *
     * @return SwitchPhysicalDtsJobToCloudResponse
     */
    public function switchPhysicalDtsJobToCloud($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchPhysicalDtsJobToCloudWithOptions($request, $runtime);
    }

    /**
     * After you perform a primary/secondary switchover on the source or destination database, you can call the SwitchSynchronizationEndpoint operation to transfer the connection settings to Data Transmission Service (DTS). DTS will restart the data synchronization task from the breakpoint.
     *
     * @param Request - SwitchSynchronizationEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchSynchronizationEndpointResponse
     *
     * @param SwitchSynchronizationEndpointRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SwitchSynchronizationEndpointResponse
     */
    public function switchSynchronizationEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->synchronizationDirection) {
            @$query['SynchronizationDirection'] = $request->synchronizationDirection;
        }

        if (null !== $request->synchronizationJobId) {
            @$query['SynchronizationJobId'] = $request->synchronizationJobId;
        }

        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->sourceEndpoint) {
            @$query['SourceEndpoint'] = $request->sourceEndpoint;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchSynchronizationEndpoint',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchSynchronizationEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you perform a primary/secondary switchover on the source or destination database, you can call the SwitchSynchronizationEndpoint operation to transfer the connection settings to Data Transmission Service (DTS). DTS will restart the data synchronization task from the breakpoint.
     *
     * @param Request - SwitchSynchronizationEndpointRequest
     *
     * @returns SwitchSynchronizationEndpointResponse
     *
     * @param SwitchSynchronizationEndpointRequest $request
     *
     * @return SwitchSynchronizationEndpointResponse
     */
    public function switchSynchronizationEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchSynchronizationEndpointWithOptions($request, $runtime);
    }

    /**
     * Adds tags to data migration, data synchronization, or change tracking instances.
     *
     * @remarks
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can query instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region within an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to an instance.
     * *   You can add tags to up to 50 instances in each request.
     *
     * @param Request - TagResourcesRequest
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2020-01-01',
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
     * Adds tags to data migration, data synchronization, or change tracking instances.
     *
     * @remarks
     * If you have a large number of instances, you can create multiple tags and add these tags to the instances. Then, you can query instances by tag.
     * *   A tag consists of a key and a value. Each key must be unique in a region within an Alibaba Cloud account. Different keys can be mapped to the same value.
     * *   If the tag that you specify does not exist, this tag is automatically created and added to the specified instance.
     * *   If the key of the specified tag is the same as that of an existing tag, the specified tag overwrites the existing tag.
     * *   You can add up to 20 tags to an instance.
     * *   You can add tags to up to 50 instances in each request.
     *
     * @param Request - TagResourcesRequest
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
     * Upgrades or downgrades a Data Transmission Service (DTS) instance.
     *
     * @param Request - TransferInstanceClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferInstanceClassResponse
     *
     * @param TransferInstanceClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TransferInstanceClassResponse
     */
    public function transferInstanceClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
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
            'action' => 'TransferInstanceClass',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferInstanceClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades or downgrades a Data Transmission Service (DTS) instance.
     *
     * @param Request - TransferInstanceClassRequest
     *
     * @returns TransferInstanceClassResponse
     *
     * @param TransferInstanceClassRequest $request
     *
     * @return TransferInstanceClassResponse
     */
    public function transferInstanceClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferInstanceClassWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of a Data Transmission Service (DTS) instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of DTS.
     * *   To prevent resource waste, make sure that the billing method of your DTS instances has to be changed.
     * *   Data migration instances only support the pay-as-you-go billing method.
     *
     * @param Request - TransferPayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferPayTypeResponse
     *
     * @param TransferPayTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TransferPayTypeResponse
     */
    public function transferPayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->buyCount) {
            @$query['BuyCount'] = $request->buyCount;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->dtsJobId) {
            @$query['DtsJobId'] = $request->dtsJobId;
        }

        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->maxDu) {
            @$query['MaxDu'] = $request->maxDu;
        }

        if (null !== $request->minDu) {
            @$query['MinDu'] = $request->minDu;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
            'action' => 'TransferPayType',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferPayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of a Data Transmission Service (DTS) instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the [billing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of DTS.
     * *   To prevent resource waste, make sure that the billing method of your DTS instances has to be changed.
     * *   Data migration instances only support the pay-as-you-go billing method.
     *
     * @param Request - TransferPayTypeRequest
     *
     * @returns TransferPayTypeResponse
     *
     * @param TransferPayTypeRequest $request
     *
     * @return TransferPayTypeResponse
     */
    public function transferPayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferPayTypeWithOptions($request, $runtime);
    }

    /**
     * Unbinds tags from one or more data migration, data synchronization, or change tracking instances.
     *
     * @remarks
     * >  If a tag is unbound from an instance and is not bound to other instances, the tag is deleted.
     *
     * @param Request - UntagResourcesRequest
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
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
            'version' => '2020-01-01',
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
     * Unbinds tags from one or more data migration, data synchronization, or change tracking instances.
     *
     * @remarks
     * >  If a tag is unbound from an instance and is not bound to other instances, the tag is deleted.
     *
     * @param Request - UntagResourcesRequest
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
     * Upgrades the synchronization topology of a data synchronization instance from one-way synchronization to two-way synchronization. This operation is supported only for pay-as-you-go synchronization instances.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of Data Transmission Service (DTS)
     * When you call this operation, take note of the following information:
     * *   The source and destination databases of the data synchronization task are both **MySQL** databases.
     * *   The synchronization topology of the data synchronization task is **one-way synchronization**.
     * *   The data synchronization task is in the **Synchronizing** state.
     * *   The upgrade operation causes data synchronization latency of about 5 seconds. We recommend that you perform this operation during off-peak hours.
     *
     * @param Request - UpgradeTwoWayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeTwoWayResponse
     *
     * @param UpgradeTwoWayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeTwoWayResponse
     */
    public function upgradeTwoWayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceClass) {
            @$query['InstanceClass'] = $request->instanceClass;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'UpgradeTwoWay',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeTwoWayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the synchronization topology of a data synchronization instance from one-way synchronization to two-way synchronization. This operation is supported only for pay-as-you-go synchronization instances.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/data-transmission-service/pricing) of Data Transmission Service (DTS)
     * When you call this operation, take note of the following information:
     * *   The source and destination databases of the data synchronization task are both **MySQL** databases.
     * *   The synchronization topology of the data synchronization task is **one-way synchronization**.
     * *   The data synchronization task is in the **Synchronizing** state.
     * *   The upgrade operation causes data synchronization latency of about 5 seconds. We recommend that you perform this operation during off-peak hours.
     *
     * @param Request - UpgradeTwoWayRequest
     *
     * @returns UpgradeTwoWayResponse
     *
     * @param UpgradeTwoWayRequest $request
     *
     * @return UpgradeTwoWayResponse
     */
    public function upgradeTwoWay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeTwoWayWithOptions($request, $runtime);
    }

    /**
     * If the \\\\*\\\\*source or destination instance\\\\*\\\\* is a \\\\*\\\\*self-managed database\\\\*\\\\* or a \\\\*\\\\*third-party cloud database\\\\*\\\\*, you need to call this operation to query the CIDR blocks of DTS servers. Then, you need to add the CIDR blocks of DTS servers to the security settings of the source or destination instance, for example, the firewall of your database. For more information, see \\[Add the CIDR blocks of DTS servers to the security settings of on-premises databases]\\\\(~~176627~~).
     * \\\\>  If the \\\\*\\\\*source or destination database\\\\*\\\\* is an \\\\*\\\\*ApsaraDB database instance\\\\*\\\\* (such as RDS instance and ApsaraDB for MongoDB instance) or a \\\\*\\\\*self-managed database hosted on Elastic Compute Service (ECS)\\\\*\\\\*, you do not need to add the CIDR blocks. When you click \\\\*\\\\*Set Whitelist and Next\\\\*\\\\* in the DTS console, DTS automatically adds the CIDR blocks of DTS servers to the security settings of the source or destination instance.
     *
     * @remarks
     * The operation that you want to perform. Set the value to **WhiteIpList**.
     *
     * @param Request - WhiteIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WhiteIpListResponse
     *
     * @param WhiteIpListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return WhiteIpListResponse
     */
    public function whiteIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destAliyunUid) {
            @$query['DestAliyunUid'] = $request->destAliyunUid;
        }

        if (null !== $request->destPrimaryVswId) {
            @$query['DestPrimaryVswId'] = $request->destPrimaryVswId;
        }

        if (null !== $request->destRoleName) {
            @$query['DestRoleName'] = $request->destRoleName;
        }

        if (null !== $request->destSecondaryVswId) {
            @$query['DestSecondaryVswId'] = $request->destSecondaryVswId;
        }

        if (null !== $request->destVpcId) {
            @$query['DestVpcId'] = $request->destVpcId;
        }

        if (null !== $request->destinationRegion) {
            @$query['DestinationRegion'] = $request->destinationRegion;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->srcAliyunUid) {
            @$query['SrcAliyunUid'] = $request->srcAliyunUid;
        }

        if (null !== $request->srcPrimaryVswId) {
            @$query['SrcPrimaryVswId'] = $request->srcPrimaryVswId;
        }

        if (null !== $request->srcRoleName) {
            @$query['SrcRoleName'] = $request->srcRoleName;
        }

        if (null !== $request->srcSecondaryVswId) {
            @$query['SrcSecondaryVswId'] = $request->srcSecondaryVswId;
        }

        if (null !== $request->srcVpcId) {
            @$query['SrcVpcId'] = $request->srcVpcId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->zeroEtlJob) {
            @$query['ZeroEtlJob'] = $request->zeroEtlJob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WhiteIpList',
            'version' => '2020-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WhiteIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the \\\\*\\\\*source or destination instance\\\\*\\\\* is a \\\\*\\\\*self-managed database\\\\*\\\\* or a \\\\*\\\\*third-party cloud database\\\\*\\\\*, you need to call this operation to query the CIDR blocks of DTS servers. Then, you need to add the CIDR blocks of DTS servers to the security settings of the source or destination instance, for example, the firewall of your database. For more information, see \\[Add the CIDR blocks of DTS servers to the security settings of on-premises databases]\\\\(~~176627~~).
     * \\\\>  If the \\\\*\\\\*source or destination database\\\\*\\\\* is an \\\\*\\\\*ApsaraDB database instance\\\\*\\\\* (such as RDS instance and ApsaraDB for MongoDB instance) or a \\\\*\\\\*self-managed database hosted on Elastic Compute Service (ECS)\\\\*\\\\*, you do not need to add the CIDR blocks. When you click \\\\*\\\\*Set Whitelist and Next\\\\*\\\\* in the DTS console, DTS automatically adds the CIDR blocks of DTS servers to the security settings of the source or destination instance.
     *
     * @remarks
     * The operation that you want to perform. Set the value to **WhiteIpList**.
     *
     * @param Request - WhiteIpListRequest
     *
     * @returns WhiteIpListResponse
     *
     * @param WhiteIpListRequest $request
     *
     * @return WhiteIpListResponse
     */
    public function whiteIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->whiteIpListWithOptions($request, $runtime);
    }
}
