<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeAccountPasswordRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeAccountPasswordResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeInstanceAzoneRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ChangeInstanceAzoneResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckDrdsDbNameRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckDrdsDbNameResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckExpandStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckSqlAuditEnableStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CheckSqlAuditEnableStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceAccountRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceAccountResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceInternetAddressRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateInstanceInternetAddressResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateOrderForRdsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateOrderForRdsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateShardTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateShardTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupTimesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBroadcastTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBroadcastTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstanceDbsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstanceDbsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDbInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbTasksRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbTasksResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceDbMonitorRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceDbMonitorResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceLevelTasksResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceMonitorRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceMonitorResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsParamsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsParamsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsRdsInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsRdsInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsShardingDbsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSlowSqlsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSlowSqlsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsSqlAuditStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsTasksRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsTasksResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeExpandLogicTableInfoListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeExpandLogicTableInfoListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchAzoneResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbSlsInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribePreCheckResultResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsCommodityRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsCommodityResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRDSPerformanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsPerformanceSummaryResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsSuperAccountInstancesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRecycleBinTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableListByTypeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableListByTypeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DisableSqlAuditRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DisableSqlAuditResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableInstanceIpv6AddressRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableInstanceIpv6AddressResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlAuditRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlAuditResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlFlashbackMatchSwitchRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlFlashbackMatchSwitchResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\FlashbackRecycleBinTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\FlashbackRecycleBinTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\GetDrdsDbRdsRelationInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\GetDrdsDbRdsRelationInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ManagePrivateRdsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ManagePrivateRdsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountPrivilegeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountPrivilegeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsInstanceDescriptionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsInstanceDescriptionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyPolarDbReadWeightRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyPolarDbReadWeightResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyRdsReadWeightRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyRdsReadWeightResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutStartBackupRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutStartBackupResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RefreshDrdsAtomUrlRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RefreshDrdsAtomUrlResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ReleaseInstanceInternetAddressRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ReleaseInstanceInternetAddressResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveBackupsSetRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveBackupsSetResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbFailedRecordRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbFailedRecordResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsDbResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveInstanceAccountRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveInstanceAccountResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveRecycleBinTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveRecycleBinTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RestartDrdsInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RestartDrdsInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\RollbackInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\RollbackInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupLocalRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupLocalResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupPolicyRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupPolicyResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupBroadcastTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupBroadcastTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupRecycleBinStatusRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupRecycleBinStatusResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupTableRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupTableResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\StartRestoreRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\StartRestoreResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitCleanTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitCleanTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandPreCheckTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandPreCheckTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandPreCheckTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSqlFlashbackTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSqlFlashbackTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SwitchGlobalBroadcastTypeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SwitchGlobalBroadcastTypeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateInstanceNetworkRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateInstanceNetworkResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdatePrivateRdsClassRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdatePrivateRdsClassResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateResourceGroupAttributeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateResourceGroupAttributeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeHiStoreInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeHiStoreInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Drds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-south-1'                  => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'drds.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'drds.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'drds.aliyuncs.com',
            'cn-beijing-gov-1'            => 'drds.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'drds.aliyuncs.com',
            'cn-chengdu'                  => 'drds.aliyuncs.com',
            'cn-edge-1'                   => 'drds.aliyuncs.com',
            'cn-fujian'                   => 'drds.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'drds.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'drds.aliyuncs.com',
            'cn-hangzhou-finance'         => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'drds.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'drds.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'drds.aliyuncs.com',
            'cn-qingdao-nebula'           => 'drds.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'drds.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'drds.aliyuncs.com',
            'cn-shanghai-inner'           => 'drds.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'drds.aliyuncs.com',
            'cn-shenzhen-inner'           => 'drds.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'drds.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'drds.aliyuncs.com',
            'cn-wuhan'                    => 'drds.aliyuncs.com',
            'cn-yushanfang'               => 'drds.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'drds.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'drds.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'drds.aliyuncs.com',
            'eu-central-1'                => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'drds.ap-southeast-1.aliyuncs.com',
            'me-east-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'drds.ap-southeast-1.aliyuncs.com',
            'us-west-1'                   => 'drds.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('drds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ChangeAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeAccountPasswordResponse
     */
    public function changeAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeAccountPassword',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeAccountPasswordRequest $request
     *
     * @return ChangeAccountPasswordResponse
     */
    public function changeAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ChangeInstanceAzoneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->drdsRegionId)) {
            $query['DrdsRegionId'] = $request->drdsRegionId;
        }
        if (!Utils::isUnset($request->originAzoneId)) {
            $query['OriginAzoneId'] = $request->originAzoneId;
        }
        if (!Utils::isUnset($request->targetAzoneId)) {
            $query['TargetAzoneId'] = $request->targetAzoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeInstanceAzone',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeInstanceAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeInstanceAzoneRequest $request
     *
     * @return ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeInstanceAzoneWithOptions($request, $runtime);
    }

    /**
     * @param CheckDrdsDbNameRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckDrdsDbNameResponse
     */
    public function checkDrdsDbNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDrdsDbName',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDrdsDbNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckDrdsDbNameRequest $request
     *
     * @return CheckDrdsDbNameResponse
     */
    public function checkDrdsDbName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDrdsDbNameWithOptions($request, $runtime);
    }

    /**
     * @param CheckExpandStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckExpandStatusResponse
     */
    public function checkExpandStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckExpandStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckExpandStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckExpandStatusRequest $request
     *
     * @return CheckExpandStatusResponse
     */
    public function checkExpandStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExpandStatusWithOptions($request, $runtime);
    }

    /**
     * @param CheckSqlAuditEnableStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckSqlAuditEnableStatusResponse
     */
    public function checkSqlAuditEnableStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSqlAuditEnableStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSqlAuditEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckSqlAuditEnableStatusRequest $request
     *
     * @return CheckSqlAuditEnableStatusResponse
     */
    public function checkSqlAuditEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSqlAuditEnableStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->dbInstanceIsCreating)) {
            $query['DbInstanceIsCreating'] = $request->dbInstanceIsCreating;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->encode)) {
            $query['Encode'] = $request->encode;
        }
        if (!Utils::isUnset($request->instDbName)) {
            $query['InstDbName'] = $request->instDbName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->rdsInstance)) {
            $query['RdsInstance'] = $request->rdsInstance;
        }
        if (!Utils::isUnset($request->rdsSuperAccount)) {
            $query['RdsSuperAccount'] = $request->rdsSuperAccount;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsDB',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsDBRequest $request
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceSeries)) {
            $query['InstanceSeries'] = $request->instanceSeries;
        }
        if (!Utils::isUnset($request->isAutoRenew)) {
            $query['IsAutoRenew'] = $request->isAutoRenew;
        }
        if (!Utils::isUnset($request->masterInstId)) {
            $query['MasterInstId'] = $request->masterInstId;
        }
        if (!Utils::isUnset($request->mySQLVersion)) {
            $query['MySQLVersion'] = $request->mySQLVersion;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $query['PricingCycle'] = $request->pricingCycle;
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
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->isHa)) {
            $query['isHa'] = $request->isHa;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsInstanceRequest $request
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->dbPrivilege)) {
            $query['DbPrivilege'] = $request->dbPrivilege;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceAccount',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceAccountRequest $request
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceInternetAddressRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateInstanceInternetAddressResponse
     */
    public function createInstanceInternetAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceInternetAddress',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceInternetAddressRequest $request
     *
     * @return CreateInstanceInternetAddressResponse
     */
    public function createInstanceInternetAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceInternetAddressWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderForRdsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateOrderForRdsResponse
     */
    public function createOrderForRdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOrderForRds',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrderForRdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOrderForRdsRequest $request
     *
     * @return CreateOrderForRdsResponse
     */
    public function createOrderForRds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderForRdsWithOptions($request, $runtime);
    }

    /**
     * @param CreateShardTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateShardTaskResponse
     */
    public function createShardTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceTableName)) {
            $query['SourceTableName'] = $request->sourceTableName;
        }
        if (!Utils::isUnset($request->targetTableName)) {
            $query['TargetTableName'] = $request->targetTableName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateShardTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateShardTaskRequest $request
     *
     * @return CreateShardTaskResponse
     */
    public function createShardTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShardTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackMenuRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBackMenuResponse
     */
    public function describeBackMenuWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackMenu',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackMenuRequest $request
     *
     * @return DescribeBackMenuResponse
     */
    public function describeBackMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackMenuWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupDbsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupDbsResponse
     */
    public function describeBackupDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->preferredRestoreTime)) {
            $query['PreferredRestoreTime'] = $request->preferredRestoreTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupDbs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupDbsRequest $request
     *
     * @return DescribeBackupDbsResponse
     */
    public function describeBackupDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDbsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupLocalRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupLocalResponse
     */
    public function describeBackupLocalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupLocal',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupLocalRequest $request
     *
     * @return DescribeBackupLocalResponse
     */
    public function describeBackupLocal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupLocalWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupPolicy',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupPolicyRequest $request
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupSetsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupSetsResponse
     */
    public function describeBackupSetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupSets',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupSetsRequest $request
     *
     * @return DescribeBackupSetsResponse
     */
    public function describeBackupSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupTimesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTimesResponse
     */
    public function describeBackupTimesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBackupTimes',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBackupTimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupTimesRequest $request
     *
     * @return DescribeBackupTimesResponse
     */
    public function describeBackupTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTimesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBroadcastTablesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBroadcastTablesResponse
     */
    public function describeBroadcastTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBroadcastTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBroadcastTablesRequest $request
     *
     * @return DescribeBroadcastTablesResponse
     */
    public function describeBroadcastTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBroadcastTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbInstanceDbsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDbInstanceDbsResponse
     */
    public function describeDbInstanceDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbInstanceDbs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDbInstanceDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbInstanceDbsRequest $request
     *
     * @return DescribeDbInstanceDbsResponse
     */
    public function describeDbInstanceDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbInstanceDbsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDbInstancesResponse
     */
    public function describeDbInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            $query['Search'] = $request->search;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDbInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDbInstancesRequest $request
     *
     * @return DescribeDbInstancesResponse
     */
    public function describeDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDB',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBRequest $request
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBClusterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsDBClusterResponse
     */
    public function describeDrdsDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBCluster',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBClusterRequest $request
     *
     * @return DescribeDrdsDBClusterResponse
     */
    public function describeDrdsDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDBIpWhiteList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
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
            'action'      => 'DescribeDrdsDBs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDBsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBsRequest $request
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbInstanceRequest $request
     *
     * @return DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsDbInstancesResponse
     */
    public function describeDrdsDbInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
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
            'action'      => 'DescribeDrdsDbInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbInstancesRequest $request
     *
     * @return DescribeDrdsDbInstancesResponse
     */
    public function describeDrdsDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbRdsNameListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbRdsNameList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbRdsNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbRdsNameListRequest $request
     *
     * @return DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbRdsNameListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDrdsDbTasksResponse
     */
    public function describeDrdsDbTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsDbTasks',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsDbTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbTasksRequest $request
     *
     * @return DescribeDrdsDbTasksResponse
     */
    public function describeDrdsDbTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceRequest $request
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceDbMonitor',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceDbMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceLevelTasksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDrdsInstanceLevelTasksResponse
     */
    public function describeDrdsInstanceLevelTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceLevelTasks',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceLevelTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceLevelTasksRequest $request
     *
     * @return DescribeDrdsInstanceLevelTasksResponse
     */
    public function describeDrdsInstanceLevelTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceLevelTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->periodMultiple)) {
            $query['PeriodMultiple'] = $request->periodMultiple;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceMonitor',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstanceVersion',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceVersionRequest $request
     *
     * @return DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expired)) {
            $query['Expired'] = $request->expired;
        }
        if (!Utils::isUnset($request->mix)) {
            $query['Mix'] = $request->mix;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productVersion)) {
            $query['ProductVersion'] = $request->productVersion;
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstancesRequest $request
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsParamsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDrdsParamsResponse
     */
    public function describeDrdsParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->paramLevel)) {
            $query['ParamLevel'] = $request->paramLevel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsParams',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsParamsRequest $request
     *
     * @return DescribeDrdsParamsResponse
     */
    public function describeDrdsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsParamsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsRdsInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDrdsRdsInstancesResponse
     */
    public function describeDrdsRdsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsRdsInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsRdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsRdsInstancesRequest $request
     *
     * @return DescribeDrdsRdsInstancesResponse
     */
    public function describeDrdsRdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsRdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsShardingDbsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dbNamePattern)) {
            $query['DbNamePattern'] = $request->dbNamePattern;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
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
            'action'      => 'DescribeDrdsShardingDbs',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsShardingDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsShardingDbsRequest $request
     *
     * @return DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsShardingDbsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsSlowSqlsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsSlowSqlsResponse
     */
    public function describeDrdsSlowSqlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->exeTime)) {
            $query['ExeTime'] = $request->exeTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsSlowSqls',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsSlowSqlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsSlowSqlsRequest $request
     *
     * @return DescribeDrdsSlowSqlsResponse
     */
    public function describeDrdsSlowSqls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsSlowSqlsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsSqlAuditStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDrdsSqlAuditStatusResponse
     */
    public function describeDrdsSqlAuditStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsSqlAuditStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsSqlAuditStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsSqlAuditStatusRequest $request
     *
     * @return DescribeDrdsSqlAuditStatusResponse
     */
    public function describeDrdsSqlAuditStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsSqlAuditStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDrdsTasksResponse
     */
    public function describeDrdsTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDrdsTasks',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDrdsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsTasksRequest $request
     *
     * @return DescribeDrdsTasksResponse
     */
    public function describeDrdsTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpandLogicTableInfoListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeExpandLogicTableInfoListResponse
     */
    public function describeExpandLogicTableInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExpandLogicTableInfoList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExpandLogicTableInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExpandLogicTableInfoListRequest $request
     *
     * @return DescribeExpandLogicTableInfoListResponse
     */
    public function describeExpandLogicTableInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpandLogicTableInfoListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHotDbListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeHotDbListResponse
     */
    public function describeHotDbListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHotDbList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHotDbListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeHotDbListRequest $request
     *
     * @return DescribeHotDbListResponse
     */
    public function describeHotDbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotDbListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstDbLogInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstDbLogInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstDbLogInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstDbLogInfoRequest $request
     *
     * @return DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstDbLogInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstDbSlsInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbSlsInfoResponse
     */
    public function describeInstDbSlsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstDbSlsInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstDbSlsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstDbSlsInfoRequest $request
     *
     * @return DescribeInstDbSlsInfoResponse
     */
    public function describeInstDbSlsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstDbSlsInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAccountsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAccounts',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceAccountsRequest $request
     *
     * @return DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSwitchAzoneRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceSwitchAzoneResponse
     */
    public function describeInstanceSwitchAzoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSwitchAzone',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSwitchAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSwitchAzoneRequest $request
     *
     * @return DescribeInstanceSwitchAzoneResponse
     */
    public function describeInstanceSwitchAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSwitchAzoneWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSwitchNetworkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceSwitchNetworkResponse
     */
    public function describeInstanceSwitchNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSwitchNetwork',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSwitchNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSwitchNetworkRequest $request
     *
     * @return DescribeInstanceSwitchNetworkResponse
     */
    public function describeInstanceSwitchNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSwitchNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DescribePreCheckResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePreCheckResultResponse
     */
    public function describePreCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
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
            'action'      => 'DescribePreCheckResult',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePreCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePreCheckResultRequest $request
     *
     * @return DescribePreCheckResultResponse
     */
    public function describePreCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRDSPerformanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keys)) {
            $query['Keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->rdsInstanceId)) {
            $query['RdsInstanceId'] = $request->rdsInstanceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRDSPerformance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRDSPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRDSPerformanceRequest $request
     *
     * @return DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRDSPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsCommodityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRdsCommodityResponse
     */
    public function describeRdsCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsCommodity',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsCommodityRequest $request
     *
     * @return DescribeRdsCommodityResponse
     */
    public function describeRdsCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsCommodityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsPerformanceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->rdsInstanceId)) {
            $query['RdsInstanceId'] = $request->rdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsPerformanceSummary',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsPerformanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsPerformanceSummaryRequest $request
     *
     * @return DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsPerformanceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsSuperAccountInstancesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeRdsSuperAccountInstancesResponse
     */
    public function describeRdsSuperAccountInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->rdsInstance)) {
            $query['RdsInstance'] = $request->rdsInstance;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsSuperAccountInstances',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsSuperAccountInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsSuperAccountInstancesRequest $request
     *
     * @return DescribeRdsSuperAccountInstancesResponse
     */
    public function describeRdsSuperAccountInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsSuperAccountInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecycleBinStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecycleBinStatusResponse
     */
    public function describeRecycleBinStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecycleBinStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecycleBinStatusRequest $request
     *
     * @return DescribeRecycleBinStatusResponse
     */
    public function describeRecycleBinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecycleBinStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecycleBinTablesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecycleBinTablesResponse
     */
    public function describeRecycleBinTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecycleBinTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecycleBinTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecycleBinTablesRequest $request
     *
     * @return DescribeRecycleBinTablesResponse
     */
    public function describeRecycleBinTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecycleBinTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRestoreOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestoreOrderResponse
     */
    public function describeRestoreOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupDbNames)) {
            $query['BackupDbNames'] = $request->backupDbNames;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupLevel)) {
            $query['BackupLevel'] = $request->backupLevel;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRestoreOrder',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRestoreOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRestoreOrderRequest $request
     *
     * @return DescribeRestoreOrderResponse
     */
    public function describeRestoreOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreOrderWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardTaskInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeShardTaskInfoResponse
     */
    public function describeShardTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceTableName)) {
            $query['SourceTableName'] = $request->sourceTableName;
        }
        if (!Utils::isUnset($request->targetTableName)) {
            $query['TargetTableName'] = $request->targetTableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeShardTaskInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeShardTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShardTaskInfoRequest $request
     *
     * @return DescribeShardTaskInfoResponse
     */
    public function describeShardTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardTaskListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeShardTaskListResponse
     */
    public function describeShardTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeShardTaskList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeShardTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeShardTaskListRequest $request
     *
     * @return DescribeShardTaskListResponse
     */
    public function describeShardTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardTaskListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSqlFlashbakTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlFlashbakTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlFlashbakTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSqlFlashbakTaskRequest $request
     *
     * @return DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlFlashbakTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTableRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTableResponse
     */
    public function describeTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTableRequest $request
     *
     * @return DescribeTableResponse
     */
    public function describeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTableListByTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTableListByTypeResponse
     */
    public function describeTableListByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableType)) {
            $query['TableType'] = $request->tableType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTableListByType',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTableListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTableListByTypeRequest $request
     *
     * @return DescribeTableListByTypeResponse
     */
    public function describeTableListByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableListByTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTablesRequest $request
     *
     * @return DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * @param DisableSqlAuditRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableSqlAuditResponse
     */
    public function disableSqlAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableSqlAudit',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableSqlAuditRequest $request
     *
     * @return DisableSqlAuditResponse
     */
    public function disableSqlAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSqlAuditWithOptions($request, $runtime);
    }

    /**
     * @param EnableInstanceIpv6AddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableInstanceIpv6AddressResponse
     */
    public function enableInstanceIpv6AddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableInstanceIpv6Address',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableInstanceIpv6AddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableInstanceIpv6AddressRequest $request
     *
     * @return EnableInstanceIpv6AddressResponse
     */
    public function enableInstanceIpv6Address($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceIpv6AddressWithOptions($request, $runtime);
    }

    /**
     * @param EnableSqlAuditRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableSqlAuditResponse
     */
    public function enableSqlAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->isRecall)) {
            $query['IsRecall'] = $request->isRecall;
        }
        if (!Utils::isUnset($request->recallEndTimestamp)) {
            $query['RecallEndTimestamp'] = $request->recallEndTimestamp;
        }
        if (!Utils::isUnset($request->recallStartTimestamp)) {
            $query['RecallStartTimestamp'] = $request->recallStartTimestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSqlAudit',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSqlAuditRequest $request
     *
     * @return EnableSqlAuditResponse
     */
    public function enableSqlAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlAuditWithOptions($request, $runtime);
    }

    /**
     * @param EnableSqlFlashbackMatchSwitchRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableSqlFlashbackMatchSwitchResponse
     */
    public function enableSqlFlashbackMatchSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSqlFlashbackMatchSwitch',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSqlFlashbackMatchSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSqlFlashbackMatchSwitchRequest $request
     *
     * @return EnableSqlFlashbackMatchSwitchResponse
     */
    public function enableSqlFlashbackMatchSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlFlashbackMatchSwitchWithOptions($request, $runtime);
    }

    /**
     * @param FlashbackRecycleBinTableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FlashbackRecycleBinTableResponse
     */
    public function flashbackRecycleBinTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FlashbackRecycleBinTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FlashbackRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FlashbackRecycleBinTableRequest $request
     *
     * @return FlashbackRecycleBinTableResponse
     */
    public function flashbackRecycleBinTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flashbackRecycleBinTableWithOptions($request, $runtime);
    }

    /**
     * @param GetDrdsDbRdsRelationInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDrdsDbRdsRelationInfoResponse
     */
    public function getDrdsDbRdsRelationInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDrdsDbRdsRelationInfo',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDrdsDbRdsRelationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDrdsDbRdsRelationInfoRequest $request
     *
     * @return GetDrdsDbRdsRelationInfoResponse
     */
    public function getDrdsDbRdsRelationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDrdsDbRdsRelationInfoWithOptions($request, $runtime);
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
            'version'     => '2019-01-23',
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
     * @param ManagePrivateRdsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ManagePrivateRdsResponse
     */
    public function managePrivateRdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->rdsAction)) {
            $query['RdsAction'] = $request->rdsAction;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManagePrivateRds',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManagePrivateRdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ManagePrivateRdsRequest $request
     *
     * @return ManagePrivateRdsResponse
     */
    public function managePrivateRds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->managePrivateRdsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountDescription',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountDescriptionRequest $request
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->dbPrivilege)) {
            $query['DbPrivilege'] = $request->dbPrivilege;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAccountPrivilege',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsInstanceDescription',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->groupAttribute)) {
            $query['GroupAttribute'] = $request->groupAttribute;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ipWhiteList)) {
            $query['IpWhiteList'] = $request->ipWhiteList;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDrdsIpWhiteList',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDrdsIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPolarDbReadWeightRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyPolarDbReadWeightResponse
     */
    public function modifyPolarDbReadWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstanceId)) {
            $query['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->dbNodeIds)) {
            $query['DbNodeIds'] = $request->dbNodeIds;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->weights)) {
            $query['Weights'] = $request->weights;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolarDbReadWeight',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolarDbReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPolarDbReadWeightRequest $request
     *
     * @return ModifyPolarDbReadWeightResponse
     */
    public function modifyPolarDbReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolarDbReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRdsReadWeightRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->instanceNames)) {
            $query['InstanceNames'] = $request->instanceNames;
        }
        if (!Utils::isUnset($request->weights)) {
            $query['Weights'] = $request->weights;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRdsReadWeight',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRdsReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRdsReadWeightRequest $request
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRdsReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param PutStartBackupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutStartBackupResponse
     */
    public function putStartBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupDbNames)) {
            $query['BackupDbNames'] = $request->backupDbNames;
        }
        if (!Utils::isUnset($request->backupLevel)) {
            $query['BackupLevel'] = $request->backupLevel;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutStartBackup',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutStartBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutStartBackupRequest $request
     *
     * @return PutStartBackupResponse
     */
    public function putStartBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putStartBackupWithOptions($request, $runtime);
    }

    /**
     * @param RefreshDrdsAtomUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshDrdsAtomUrlResponse
     */
    public function refreshDrdsAtomUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshDrdsAtomUrl',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDrdsAtomUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshDrdsAtomUrlRequest $request
     *
     * @return RefreshDrdsAtomUrlResponse
     */
    public function refreshDrdsAtomUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDrdsAtomUrlWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceInternetAddressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstanceInternetAddress',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceInternetAddressRequest $request
     *
     * @return ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceInternetAddressWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBackupsSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveBackupsSetResponse
     */
    public function removeBackupsSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBackupsSet',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBackupsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveBackupsSetRequest $request
     *
     * @return RemoveBackupsSetResponse
     */
    public function removeBackupsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackupsSetWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RemoveDrdsDbResponse
     */
    public function removeDrdsDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsDb',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsDbRequest $request
     *
     * @return RemoveDrdsDbResponse
     */
    public function removeDrdsDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsDbWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsDbFailedRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveDrdsDbFailedRecordResponse
     */
    public function removeDrdsDbFailedRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsDbFailedRecord',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsDbFailedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsDbFailedRecordRequest $request
     *
     * @return RemoveDrdsDbFailedRecordResponse
     */
    public function removeDrdsDbFailedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsDbFailedRecordWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsInstanceRequest $request
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveInstanceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveInstanceAccountResponse
     */
    public function removeInstanceAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveInstanceAccount',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveInstanceAccountRequest $request
     *
     * @return RemoveInstanceAccountResponse
     */
    public function removeInstanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstanceAccountWithOptions($request, $runtime);
    }

    /**
     * @param RemoveRecycleBinTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveRecycleBinTableResponse
     */
    public function removeRecycleBinTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveRecycleBinTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveRecycleBinTableRequest $request
     *
     * @return RemoveRecycleBinTableResponse
     */
    public function removeRecycleBinTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRecycleBinTableWithOptions($request, $runtime);
    }

    /**
     * @param RestartDrdsInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartDrdsInstanceResponse
     */
    public function restartDrdsInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDrdsInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDrdsInstanceRequest $request
     *
     * @return RestartDrdsInstanceResponse
     */
    public function restartDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RollbackInstanceVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackInstanceVersionResponse
     */
    public function rollbackInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackInstanceVersion',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackInstanceVersionRequest $request
     *
     * @return RollbackInstanceVersionResponse
     */
    public function rollbackInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param SetBackupLocalRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetBackupLocalResponse
     */
    public function setBackupLocalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->highSpaceUsageProtection)) {
            $query['HighSpaceUsageProtection'] = $request->highSpaceUsageProtection;
        }
        if (!Utils::isUnset($request->localLogRetentionHours)) {
            $query['LocalLogRetentionHours'] = $request->localLogRetentionHours;
        }
        if (!Utils::isUnset($request->localLogRetentionSpace)) {
            $query['LocalLogRetentionSpace'] = $request->localLogRetentionSpace;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetBackupLocal',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetBackupLocalRequest $request
     *
     * @return SetBackupLocalResponse
     */
    public function setBackupLocal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackupLocalWithOptions($request, $runtime);
    }

    /**
     * @param SetBackupPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetBackupPolicyResponse
     */
    public function setBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupDbNames)) {
            $query['BackupDbNames'] = $request->backupDbNames;
        }
        if (!Utils::isUnset($request->backupLevel)) {
            $query['BackupLevel'] = $request->backupLevel;
        }
        if (!Utils::isUnset($request->backupLog)) {
            $query['BackupLog'] = $request->backupLog;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->dataBackupRetentionPeriod)) {
            $query['DataBackupRetentionPeriod'] = $request->dataBackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->logBackupRetentionPeriod)) {
            $query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupEndTime)) {
            $query['PreferredBackupEndTime'] = $request->preferredBackupEndTime;
        }
        if (!Utils::isUnset($request->preferredBackupPeriod)) {
            $query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }
        if (!Utils::isUnset($request->preferredBackupStartTime)) {
            $query['PreferredBackupStartTime'] = $request->preferredBackupStartTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetBackupPolicy',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetBackupPolicyRequest $request
     *
     * @return SetBackupPolicyResponse
     */
    public function setBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetupBroadcastTablesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetupBroadcastTablesResponse
     */
    public function setupBroadcastTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetupBroadcastTables',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetupBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupBroadcastTablesRequest $request
     *
     * @return SetupBroadcastTablesResponse
     */
    public function setupBroadcastTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupBroadcastTablesWithOptions($request, $runtime);
    }

    /**
     * @param SetupDrdsParamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetupDrdsParamsResponse
     */
    public function setupDrdsParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->paramLevel)) {
            $query['ParamLevel'] = $request->paramLevel;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetupDrdsParams',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetupDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupDrdsParamsRequest $request
     *
     * @return SetupDrdsParamsResponse
     */
    public function setupDrdsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupDrdsParamsWithOptions($request, $runtime);
    }

    /**
     * @param SetupRecycleBinStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetupRecycleBinStatusResponse
     */
    public function setupRecycleBinStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->statusAction)) {
            $query['StatusAction'] = $request->statusAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetupRecycleBinStatus',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetupRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupRecycleBinStatusRequest $request
     *
     * @return SetupRecycleBinStatusResponse
     */
    public function setupRecycleBinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupRecycleBinStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetupTableRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetupTableResponse
     */
    public function setupTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowFullTableScan)) {
            $query['AllowFullTableScan'] = $request->allowFullTableScan;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetupTable',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetupTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetupTableRequest $request
     *
     * @return SetupTableResponse
     */
    public function setupTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupTableWithOptions($request, $runtime);
    }

    /**
     * @param StartRestoreRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartRestoreResponse
     */
    public function startRestoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupDbNames)) {
            $query['BackupDbNames'] = $request->backupDbNames;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupLevel)) {
            $query['BackupLevel'] = $request->backupLevel;
        }
        if (!Utils::isUnset($request->backupMode)) {
            $query['BackupMode'] = $request->backupMode;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->preferredBackupTime)) {
            $query['PreferredBackupTime'] = $request->preferredBackupTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRestore',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartRestoreRequest $request
     *
     * @return StartRestoreResponse
     */
    public function startRestore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRestoreWithOptions($request, $runtime);
    }

    /**
     * @param SubmitCleanTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitCleanTaskResponse
     */
    public function submitCleanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->expandType)) {
            $query['ExpandType'] = $request->expandType;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->parentJobId)) {
            $query['ParentJobId'] = $request->parentJobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCleanTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitCleanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitCleanTaskRequest $request
     *
     * @return SubmitCleanTaskResponse
     */
    public function submitCleanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCleanTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitHotExpandPreCheckTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitHotExpandPreCheckTaskResponse
     */
    public function submitHotExpandPreCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->tableList)) {
            $query['TableList'] = $request->tableList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotExpandPreCheckTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitHotExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitHotExpandPreCheckTaskRequest $request
     *
     * @return SubmitHotExpandPreCheckTaskResponse
     */
    public function submitHotExpandPreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotExpandPreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitHotExpandTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitHotExpandTaskResponse
     */
    public function submitHotExpandTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->extendedMapping)) {
            $query['ExtendedMapping'] = $request->extendedMapping;
        }
        if (!Utils::isUnset($request->instanceDbMapping)) {
            $query['InstanceDbMapping'] = $request->instanceDbMapping;
        }
        if (!Utils::isUnset($request->mapping)) {
            $query['Mapping'] = $request->mapping;
        }
        if (!Utils::isUnset($request->supperAccountMapping)) {
            $query['SupperAccountMapping'] = $request->supperAccountMapping;
        }
        if (!Utils::isUnset($request->taskDesc)) {
            $query['TaskDesc'] = $request->taskDesc;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotExpandTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitHotExpandTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitHotExpandTaskRequest $request
     *
     * @return SubmitHotExpandTaskResponse
     */
    public function submitHotExpandTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotExpandTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmoothExpandPreCheckRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitSmoothExpandPreCheckResponse
     */
    public function submitSmoothExpandPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbInstType)) {
            $query['DbInstType'] = $request->dbInstType;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSmoothExpandPreCheck',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSmoothExpandPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSmoothExpandPreCheckRequest $request
     *
     * @return SubmitSmoothExpandPreCheckResponse
     */
    public function submitSmoothExpandPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandPreCheckWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSmoothExpandPreCheckTaskRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse
     */
    public function submitSmoothExpandPreCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSmoothExpandPreCheckTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSmoothExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSmoothExpandPreCheckTaskRequest $request
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse
     */
    public function submitSmoothExpandPreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandPreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSqlFlashbackTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSqlFlashbackTaskResponse
     */
    public function submitSqlFlashbackTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->recallRestoreType)) {
            $query['RecallRestoreType'] = $request->recallRestoreType;
        }
        if (!Utils::isUnset($request->recallType)) {
            $query['RecallType'] = $request->recallType;
        }
        if (!Utils::isUnset($request->sqlPk)) {
            $query['SqlPk'] = $request->sqlPk;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSqlFlashbackTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSqlFlashbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSqlFlashbackTaskRequest $request
     *
     * @return SubmitSqlFlashbackTaskResponse
     */
    public function submitSqlFlashbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSqlFlashbackTaskWithOptions($request, $runtime);
    }

    /**
     * @param SwitchGlobalBroadcastTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SwitchGlobalBroadcastTypeResponse
     */
    public function switchGlobalBroadcastTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchGlobalBroadcastType',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchGlobalBroadcastTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchGlobalBroadcastTypeRequest $request
     *
     * @return SwitchGlobalBroadcastTypeResponse
     */
    public function switchGlobalBroadcastType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGlobalBroadcastTypeWithOptions($request, $runtime);
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
            'version'     => '2019-01-23',
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
            'version'     => '2019-01-23',
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
     * @param UpdateInstanceNetworkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateInstanceNetworkResponse
     */
    public function updateInstanceNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classicExpiredDays)) {
            $query['ClassicExpiredDays'] = $request->classicExpiredDays;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->retainClassic)) {
            $query['RetainClassic'] = $request->retainClassic;
        }
        if (!Utils::isUnset($request->srcInstanceNetworkType)) {
            $query['SrcInstanceNetworkType'] = $request->srcInstanceNetworkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceNetwork',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceNetworkRequest $request
     *
     * @return UpdateInstanceNetworkResponse
     */
    public function updateInstanceNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceNetworkWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePrivateRdsClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePrivateRdsClassResponse
     */
    public function updatePrivateRdsClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->prePayDuration)) {
            $query['PrePayDuration'] = $request->prePayDuration;
        }
        if (!Utils::isUnset($request->rdsClass)) {
            $query['RdsClass'] = $request->rdsClass;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePrivateRdsClass',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePrivateRdsClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePrivateRdsClassRequest $request
     *
     * @return UpdatePrivateRdsClassResponse
     */
    public function updatePrivateRdsClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateRdsClassWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateResourceGroupAttributeResponse
     */
    public function updateResourceGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceGroupAttribute',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceGroupAttributeRequest $request
     *
     * @return UpdateResourceGroupAttributeResponse
     */
    public function updateResourceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeHiStoreInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->historeInstanceId)) {
            $query['HistoreInstanceId'] = $request->historeInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeHiStoreInstance',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeHiStoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeHiStoreInstanceRequest $request
     *
     * @return UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeHiStoreInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rpm)) {
            $query['Rpm'] = $request->rpm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeInstanceVersion',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeInstanceVersionRequest $request
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param ValidateShardTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ValidateShardTaskResponse
     */
    public function validateShardTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceTableName)) {
            $query['SourceTableName'] = $request->sourceTableName;
        }
        if (!Utils::isUnset($request->targetTableName)) {
            $query['TargetTableName'] = $request->targetTableName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ValidateShardTask',
            'version'     => '2019-01-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ValidateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ValidateShardTaskRequest $request
     *
     * @return ValidateShardTaskResponse
     */
    public function validateShardTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateShardTaskWithOptions($request, $runtime);
    }
}
