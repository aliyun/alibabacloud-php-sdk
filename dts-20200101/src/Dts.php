<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDtsInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateDtsInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateJobMonitorRuleRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateJobMonitorRuleResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateMigrationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\CreateMigrationJobResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConnectionStatusRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConnectionStatusResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeConsumerGroupResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsEtlJobVersionInfoRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsEtlJobVersionInfoResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDTSIPRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDTSIPResponse;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagKeysRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagKeysResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagValuesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeTagValuesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\InitDtsRdsInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\InitDtsRdsInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerChannelRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerChannelResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerGroupPasswordRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumerGroupPasswordResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumptionTimestampRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyConsumptionTimestampResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobNameRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobNameResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobPasswordRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobPasswordResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\ModifyDtsJobShrinkRequest;
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
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSubscriptionInstanceRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSubscriptionInstanceResponse;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSynchronizationJobRequest;
use AlibabaCloud\SDK\Dts\V20200101\Models\StartSynchronizationJobResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
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
     * @param ConfigureDtsJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigureDtsJobResponse
     */
    public function configureDtsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkpoint)) {
            $query['Checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->dataInitialization)) {
            $query['DataInitialization'] = $request->dataInitialization;
        }
        if (!Utils::isUnset($request->dataSynchronization)) {
            $query['DataSynchronization'] = $request->dataSynchronization;
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
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param ConfigureMigrationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigureMigrationJobResponse
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
     * @param ConfigureMigrationJobAlertRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ConfigureMigrationJobAlertResponse
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
     * @param ConfigureSubscriptionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigureSubscriptionResponse
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
        if (!Utils::isUnset($request->delayNotice)) {
            $query['DelayNotice'] = $request->delayNotice;
        }
        if (!Utils::isUnset($request->delayPhone)) {
            $query['DelayPhone'] = $request->delayPhone;
        }
        if (!Utils::isUnset($request->delayRuleTime)) {
            $query['DelayRuleTime'] = $request->delayRuleTime;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reserve)) {
            $query['Reserve'] = $request->reserve;
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
     * @param ConfigureSubscriptionInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ConfigureSubscriptionInstanceResponse
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
     * @param ConfigureSubscriptionInstanceAlertRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ConfigureSubscriptionInstanceAlertResponse
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
     * @param ConfigureSynchronizationJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ConfigureSynchronizationJobResponse
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
     * @param ConfigureSynchronizationJobAlertRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ConfigureSynchronizationJobAlertResponse
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
     * @param ConfigureSynchronizationJobReplicatorCompareRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return ConfigureSynchronizationJobReplicatorCompareResponse
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
     * @param CountJobByConditionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CountJobByConditionResponse
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
     * @param CreateConsumerChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateConsumerChannelResponse
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
     * @param CreateConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
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
     * @param CreateDtsInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDtsInstanceResponse
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
        if (!Utils::isUnset($request->feeType)) {
            $query['FeeType'] = $request->feeType;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $query['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
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
     * @param CreateJobMonitorRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateJobMonitorRuleResponse
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
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param CreateMigrationJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMigrationJobResponse
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
     * @param CreateSubscriptionInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateSubscriptionInstanceResponse
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
     * @param CreateSynchronizationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSynchronizationJobResponse
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
     * @param DeleteConsumerChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteConsumerChannelResponse
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
     * @param DeleteConsumerGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteConsumerGroupResponse
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
     * @param DeleteDtsJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDtsJobResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
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
     * @param DeleteDtsJobsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDtsJobsResponse
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
     * @param DeleteMigrationJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMigrationJobResponse
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
     * @param DeleteSubscriptionInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteSubscriptionInstanceResponse
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
     * @param DeleteSynchronizationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSynchronizationJobResponse
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
     * @param DescribeConnectionStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeConnectionStatusResponse
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
     * @param DescribeConsumerChannelRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeConsumerChannelResponse
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
     * @param DescribeConsumerGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeConsumerGroupResponse
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
     * @param DescribeDTSIPRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeDTSIPResponse
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
     * @param DescribeDtsEtlJobVersionInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDtsEtlJobVersionInfoResponse
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
     * @param DescribeDtsJobDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDtsJobDetailResponse
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
        if (!Utils::isUnset($request->syncSubJobHistory)) {
            $query['SyncSubJobHistory'] = $request->syncSubJobHistory;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
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
     * @param DescribeDtsJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDtsJobsResponse
     */
    public function describeDtsJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
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
     * @param DescribeDtsServiceLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDtsServiceLogResponse
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subJobType)) {
            $query['SubJobType'] = $request->subJobType;
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
     * @param DescribeEndpointSwitchStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeEndpointSwitchStatusResponse
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
     * @param DescribeEtlJobLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEtlJobLogsResponse
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
     * @param DescribeInitializationStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeInitializationStatusResponse
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
     * @param DescribeJobMonitorRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeJobMonitorRuleResponse
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
     * @param DescribeMigrationJobAlertRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMigrationJobAlertResponse
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
     * @param DescribeMigrationJobDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMigrationJobDetailResponse
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
     * @param DescribeMigrationJobStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMigrationJobStatusResponse
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
     * @param DescribeMigrationJobsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMigrationJobsResponse
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
     * @param DescribePreCheckStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePreCheckStatusResponse
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
        if (!Utils::isUnset($request->structPhase)) {
            $query['StructPhase'] = $request->structPhase;
        }
        if (!Utils::isUnset($request->structType)) {
            $query['StructType'] = $request->structType;
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
     * @param DescribeSubscriptionInstanceAlertRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSubscriptionInstanceAlertResponse
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
     * @param DescribeSubscriptionInstanceStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSubscriptionInstanceStatusResponse
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
     * @param DescribeSubscriptionInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSubscriptionInstancesResponse
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
     * @param DescribeSubscriptionMetaRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSubscriptionMetaResponse
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
     * @param DescribeSynchronizationJobAlertRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSynchronizationJobAlertResponse
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
     * @param DescribeSynchronizationJobReplicatorCompareRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeSynchronizationJobReplicatorCompareResponse
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
     * @param DescribeSynchronizationJobStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeSynchronizationJobStatusResponse
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
     * @param DescribeSynchronizationJobStatusListRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeSynchronizationJobStatusListResponse
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
     * @param DescribeSynchronizationJobsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSynchronizationJobsResponse
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
     * @param DescribeSynchronizationObjectModifyStatusRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeSynchronizationObjectModifyStatusResponse
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
     * @param DescribeTagKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTagKeysResponse
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
     * @param DescribeTagValuesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTagValuesResponse
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
     * @param InitDtsRdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InitDtsRdsInstanceResponse
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
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
     * @param ModifyConsumerChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyConsumerChannelResponse
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
     * @param ModifyConsumerGroupPasswordRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyConsumerGroupPasswordResponse
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
     * @param ModifyConsumptionTimestampRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyConsumptionTimestampResponse
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
     * @param ModifyDtsJobRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDtsJobResponse
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
        if (!Utils::isUnset($request->dtsInstanceId)) {
            $query['DtsInstanceId'] = $request->dtsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
        }
        $body = [];
        if (!Utils::isUnset($request->dbListShrink)) {
            $body['DbList'] = $request->dbListShrink;
        }
        if (!Utils::isUnset($request->etlOperatorColumnReference)) {
            $body['EtlOperatorColumnReference'] = $request->etlOperatorColumnReference;
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
     * @param ModifyDtsJobNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDtsJobNameResponse
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
     * @param ModifyDtsJobPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDtsJobPasswordResponse
     */
    public function modifyDtsJobPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
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
     * @param ModifySubscriptionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifySubscriptionResponse
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
     * @param ModifySubscriptionObjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySubscriptionObjectResponse
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
     * @param ModifySynchronizationObjectRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifySynchronizationObjectResponse
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
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
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
     * @param ResetDtsJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetDtsJobResponse
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
     * @param ResetSynchronizationJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResetSynchronizationJobResponse
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
     * @param ShieldPrecheckRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ShieldPrecheckResponse
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
     * @param SkipPreCheckRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SkipPreCheckResponse
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
     * @param StartDtsJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDtsJobResponse
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
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
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
     * @param StartDtsJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartDtsJobsResponse
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
     * @param StartMigrationJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartMigrationJobResponse
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
     * @param StartSubscriptionInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartSubscriptionInstanceResponse
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
     * @param StartSynchronizationJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartSynchronizationJobResponse
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
     * @param StopDtsJobRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDtsJobResponse
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
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
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
     * @param StopDtsJobsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopDtsJobsResponse
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
     * @param StopMigrationJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopMigrationJobResponse
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
     * @param SummaryJobDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SummaryJobDetailResponse
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
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
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
     * @param SuspendDtsJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SuspendDtsJobResponse
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
        if (!Utils::isUnset($request->synchronizationDirection)) {
            $query['SynchronizationDirection'] = $request->synchronizationDirection;
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
     * @param SuspendDtsJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SuspendDtsJobsResponse
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
     * @param SuspendMigrationJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SuspendMigrationJobResponse
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
     * @param SuspendSynchronizationJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SuspendSynchronizationJobResponse
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
     * @param SwitchSynchronizationEndpointRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SwitchSynchronizationEndpointResponse
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param TransferInstanceClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TransferInstanceClassResponse
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
     * @param TransferPayTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return TransferPayTypeResponse
     */
    public function transferPayTypeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
     * @param UpgradeTwoWayRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeTwoWayResponse
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
     * @param WhiteIpListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return WhiteIpListResponse
     */
    public function whiteIpListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationRegion)) {
            $query['DestinationRegion'] = $request->destinationRegion;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
