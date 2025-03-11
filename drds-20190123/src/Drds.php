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
     * @param ChangeAccountPasswordRequest $request ChangeAccountPasswordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeAccountPasswordResponse ChangeAccountPasswordResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ChangeAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeAccountPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ChangeAccountPasswordRequest $request ChangeAccountPasswordRequest
     *
     * @return ChangeAccountPasswordResponse ChangeAccountPasswordResponse
     */
    public function changeAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ChangeInstanceAzoneRequest $request ChangeInstanceAzoneRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeInstanceAzoneResponse ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->changeVSwitch)) {
            $query['ChangeVSwitch'] = $request->changeVSwitch;
        }
        if (!Utils::isUnset($request->drdsInstanceId)) {
            $query['DrdsInstanceId'] = $request->drdsInstanceId;
        }
        if (!Utils::isUnset($request->drdsRegionId)) {
            $query['DrdsRegionId'] = $request->drdsRegionId;
        }
        if (!Utils::isUnset($request->newVSwitch)) {
            $query['NewVSwitch'] = $request->newVSwitch;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ChangeInstanceAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeInstanceAzoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ChangeInstanceAzoneRequest $request ChangeInstanceAzoneRequest
     *
     * @return ChangeInstanceAzoneResponse ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeInstanceAzoneWithOptions($request, $runtime);
    }

    /**
     * @param CheckDrdsDbNameRequest $request CheckDrdsDbNameRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDrdsDbNameResponse CheckDrdsDbNameResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckDrdsDbNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckDrdsDbNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CheckDrdsDbNameRequest $request CheckDrdsDbNameRequest
     *
     * @return CheckDrdsDbNameResponse CheckDrdsDbNameResponse
     */
    public function checkDrdsDbName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDrdsDbNameWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether scale-out operations such as smooth scale-out can be performed on a PolarDB-X database.
     *  *
     * @param CheckExpandStatusRequest $request CheckExpandStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckExpandStatusResponse CheckExpandStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckExpandStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckExpandStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Verifies whether scale-out operations such as smooth scale-out can be performed on a PolarDB-X database.
     *  *
     * @param CheckExpandStatusRequest $request CheckExpandStatusRequest
     *
     * @return CheckExpandStatusResponse CheckExpandStatusResponse
     */
    public function checkExpandStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkExpandStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the SQL audit feature is enabled for the logical database of a PolarDB-X 1.0 instance.
     *  *
     * @param CheckSqlAuditEnableStatusRequest $request CheckSqlAuditEnableStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckSqlAuditEnableStatusResponse CheckSqlAuditEnableStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckSqlAuditEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckSqlAuditEnableStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the SQL audit feature is enabled for the logical database of a PolarDB-X 1.0 instance.
     *  *
     * @param CheckSqlAuditEnableStatusRequest $request CheckSqlAuditEnableStatusRequest
     *
     * @return CheckSqlAuditEnableStatusResponse CheckSqlAuditEnableStatusResponse
     */
    public function checkSqlAuditEnableStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSqlAuditEnableStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsDBRequest $request CreateDrdsDBRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDrdsDBResponse CreateDrdsDBResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDrdsDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsDBRequest $request CreateDrdsDBRequest
     *
     * @return CreateDrdsDBResponse CreateDrdsDBResponse
     */
    public function createDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @param CreateDrdsInstanceRequest $request CreateDrdsInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDrdsInstanceResponse CreateDrdsInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDrdsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateDrdsInstanceRequest $request CreateDrdsInstanceRequest
     *
     * @return CreateDrdsInstanceResponse CreateDrdsInstanceResponse
     */
    public function createDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceAccountRequest $request CreateInstanceAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceAccountResponse CreateInstanceAccountResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceAccountRequest $request CreateInstanceAccountRequest
     *
     * @return CreateInstanceAccountResponse CreateInstanceAccountResponse
     */
    public function createInstanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceInternetAddressRequest $request CreateInstanceInternetAddressRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceInternetAddressResponse CreateInstanceInternetAddressResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceInternetAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceInternetAddressRequest $request CreateInstanceInternetAddressRequest
     *
     * @return CreateInstanceInternetAddressResponse CreateInstanceInternetAddressResponse
     */
    public function createInstanceInternetAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceInternetAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an order to purchase an ApsaraDB RDS for MySQL instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of PolarDB-X 1.0. For more information, visit the [pricing page](https://www.aliyun.com/price/product#/rds/detail).
     *  *
     * @param CreateOrderForRdsRequest $request CreateOrderForRdsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOrderForRdsResponse CreateOrderForRdsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateOrderForRdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrderForRdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an order to purchase an ApsaraDB RDS for MySQL instance.
     *  *
     * @description Before you call this operation, make sure that you understand the billing methods and pricing of PolarDB-X 1.0. For more information, visit the [pricing page](https://www.aliyun.com/price/product#/rds/detail).
     *  *
     * @param CreateOrderForRdsRequest $request CreateOrderForRdsRequest
     *
     * @return CreateOrderForRdsResponse CreateOrderForRdsResponse
     */
    public function createOrderForRds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderForRdsWithOptions($request, $runtime);
    }

    /**
     * @param CreateShardTaskRequest $request CreateShardTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateShardTaskResponse CreateShardTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateShardTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateShardTaskRequest $request CreateShardTaskRequest
     *
     * @return CreateShardTaskResponse CreateShardTaskResponse
     */
    public function createShardTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createShardTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackMenuRequest $request DescribeBackMenuRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackMenuResponse DescribeBackMenuResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackMenuResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackMenuResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackMenuRequest $request DescribeBackMenuRequest
     *
     * @return DescribeBackMenuResponse DescribeBackMenuResponse
     */
    public function describeBackMenu($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackMenuWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupDbsRequest $request DescribeBackupDbsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupDbsResponse DescribeBackupDbsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupDbsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupDbsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupDbsRequest $request DescribeBackupDbsRequest
     *
     * @return DescribeBackupDbsResponse DescribeBackupDbsResponse
     */
    public function describeBackupDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupDbsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the backup settings of local logs.
     *  *
     * @param DescribeBackupLocalRequest $request DescribeBackupLocalRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupLocalResponse DescribeBackupLocalResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupLocalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the backup settings of local logs.
     *  *
     * @param DescribeBackupLocalRequest $request DescribeBackupLocalRequest
     *
     * @return DescribeBackupLocalResponse DescribeBackupLocalResponse
     */
    public function describeBackupLocal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupLocalWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a backup policy.
     *  *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a backup policy.
     *  *
     * @param DescribeBackupPolicyRequest $request DescribeBackupPolicyRequest
     *
     * @return DescribeBackupPolicyResponse DescribeBackupPolicyResponse
     */
    public function describeBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupSetsRequest $request DescribeBackupSetsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupSetsResponse DescribeBackupSetsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupSetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupSetsRequest $request DescribeBackupSetsRequest
     *
     * @return DescribeBackupSetsResponse DescribeBackupSetsResponse
     */
    public function describeBackupSets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupSetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupTimesRequest $request DescribeBackupTimesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBackupTimesResponse DescribeBackupTimesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBackupTimesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBackupTimesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBackupTimesRequest $request DescribeBackupTimesRequest
     *
     * @return DescribeBackupTimesResponse DescribeBackupTimesResponse
     */
    public function describeBackupTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupTimesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBroadcastTablesRequest $request DescribeBroadcastTablesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBroadcastTablesResponse DescribeBroadcastTablesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeBroadcastTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeBroadcastTablesRequest $request DescribeBroadcastTablesRequest
     *
     * @return DescribeBroadcastTablesResponse DescribeBroadcastTablesResponse
     */
    public function describeBroadcastTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBroadcastTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDbInstanceDbsRequest $request DescribeDbInstanceDbsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDbInstanceDbsResponse DescribeDbInstanceDbsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDbInstanceDbsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDbInstanceDbsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDbInstanceDbsRequest $request DescribeDbInstanceDbsRequest
     *
     * @return DescribeDbInstanceDbsResponse DescribeDbInstanceDbsResponse
     */
    public function describeDbInstanceDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbInstanceDbsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries DescribeDbInstances of the storage layer, such as RDS or PolarDB.
     *  *
     * @param DescribeDbInstancesRequest $request DescribeDbInstancesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDbInstancesResponse DescribeDbInstancesResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDbInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries DescribeDbInstances of the storage layer, such as RDS or PolarDB.
     *  *
     * @param DescribeDbInstancesRequest $request DescribeDbInstancesRequest
     *
     * @return DescribeDbInstancesResponse DescribeDbInstancesResponse
     */
    public function describeDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBRequest $request DescribeDrdsDBRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDBResponse DescribeDrdsDBResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBRequest $request DescribeDrdsDBRequest
     *
     * @return DescribeDrdsDBResponse DescribeDrdsDBResponse
     */
    public function describeDrdsDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to query the information of the PolarDB cluster in the DRDS logical database.
     *  *
     * @param DescribeDrdsDBClusterRequest $request DescribeDrdsDBClusterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDBClusterResponse DescribeDrdsDBClusterResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDBClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query the information of the PolarDB cluster in the DRDS logical database.
     *  *
     * @param DescribeDrdsDBClusterRequest $request DescribeDrdsDBClusterRequest
     *
     * @return DescribeDrdsDBClusterResponse DescribeDrdsDBClusterResponse
     */
    public function describeDrdsDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request DescribeDrdsDBIpWhiteListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDBIpWhiteListResponse DescribeDrdsDBIpWhiteListResponse
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDBIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDBIpWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBIpWhiteListRequest $request DescribeDrdsDBIpWhiteListRequest
     *
     * @return DescribeDrdsDBIpWhiteListResponse DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDBsRequest $request DescribeDrdsDBsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDBsResponse DescribeDrdsDBsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDBsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDBsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDBsRequest $request DescribeDrdsDBsRequest
     *
     * @return DescribeDrdsDBsResponse DescribeDrdsDBsResponse
     */
    public function describeDrdsDBs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDBsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbInstanceRequest $request DescribeDrdsDbInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDbInstanceResponse DescribeDrdsDbInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDbInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDbInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbInstanceRequest $request DescribeDrdsDbInstanceRequest
     *
     * @return DescribeDrdsDbInstanceResponse DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries ApsaraDB RDS for MySQL instances that are used to store the data of a database.
     *  *
     * @param DescribeDrdsDbInstancesRequest $request DescribeDrdsDbInstancesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDbInstancesResponse DescribeDrdsDbInstancesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDbInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries ApsaraDB RDS for MySQL instances that are used to store the data of a database.
     *  *
     * @param DescribeDrdsDbInstancesRequest $request DescribeDrdsDbInstancesRequest
     *
     * @return DescribeDrdsDbInstancesResponse DescribeDrdsDbInstancesResponse
     */
    public function describeDrdsDbInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsDbRdsNameListRequest $request DescribeDrdsDbRdsNameListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsDbRdsNameListResponse DescribeDrdsDbRdsNameListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsDbRdsNameListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsDbRdsNameListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsDbRdsNameListRequest $request DescribeDrdsDbRdsNameListRequest
     *
     * @return DescribeDrdsDbRdsNameListResponse DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsDbRdsNameListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a PolarDB-X 1.0 instance.
     *  *
     * @param DescribeDrdsInstanceRequest $request DescribeDrdsInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsInstanceResponse DescribeDrdsInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a PolarDB-X 1.0 instance.
     *  *
     * @param DescribeDrdsInstanceRequest $request DescribeDrdsInstanceRequest
     *
     * @return DescribeDrdsInstanceResponse DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request DescribeDrdsInstanceDbMonitorRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsInstanceDbMonitorResponse DescribeDrdsInstanceDbMonitorResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceDbMonitorRequest $request DescribeDrdsInstanceDbMonitorRequest
     *
     * @return DescribeDrdsInstanceDbMonitorResponse DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceDbMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceLevelTasksRequest $request DescribeDrdsInstanceLevelTasksRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsInstanceLevelTasksResponse DescribeDrdsInstanceLevelTasksResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsInstanceLevelTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsInstanceLevelTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceLevelTasksRequest $request DescribeDrdsInstanceLevelTasksRequest
     *
     * @return DescribeDrdsInstanceLevelTasksResponse DescribeDrdsInstanceLevelTasksResponse
     */
    public function describeDrdsInstanceLevelTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceLevelTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request DescribeDrdsInstanceMonitorRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsInstanceMonitorResponse DescribeDrdsInstanceMonitorResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsInstanceMonitorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceMonitorRequest $request DescribeDrdsInstanceMonitorRequest
     *
     * @return DescribeDrdsInstanceMonitorResponse DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceMonitorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsInstanceVersionRequest $request DescribeDrdsInstanceVersionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsInstanceVersionResponse DescribeDrdsInstanceVersionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsInstanceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsInstanceVersionRequest $request DescribeDrdsInstanceVersionRequest
     *
     * @return DescribeDrdsInstanceVersionResponse DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries instances that meet the specified conditions.
     *  *
     * @param DescribeDrdsInstancesRequest $request DescribeDrdsInstancesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsInstancesResponse DescribeDrdsInstancesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries instances that meet the specified conditions.
     *  *
     * @param DescribeDrdsInstancesRequest $request DescribeDrdsInstancesRequest
     *
     * @return DescribeDrdsInstancesResponse DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsParamsRequest $request DescribeDrdsParamsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsParamsResponse DescribeDrdsParamsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsParamsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsParamsRequest $request DescribeDrdsParamsRequest
     *
     * @return DescribeDrdsParamsResponse DescribeDrdsParamsResponse
     */
    public function describeDrdsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsParamsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all custom ApsaraDB RDS for MySQL instances in a PolarDB-X instance.
     *  *
     * @param DescribeDrdsRdsInstancesRequest $request DescribeDrdsRdsInstancesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsRdsInstancesResponse DescribeDrdsRdsInstancesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsRdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsRdsInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all custom ApsaraDB RDS for MySQL instances in a PolarDB-X instance.
     *  *
     * @param DescribeDrdsRdsInstancesRequest $request DescribeDrdsRdsInstancesRequest
     *
     * @return DescribeDrdsRdsInstancesResponse DescribeDrdsRdsInstancesResponse
     */
    public function describeDrdsRdsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsRdsInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the database shards of an PolarDB-X 1.0 instance.
     *  *
     * @param DescribeDrdsShardingDbsRequest $request DescribeDrdsShardingDbsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsShardingDbsResponse DescribeDrdsShardingDbsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsShardingDbsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsShardingDbsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the database shards of an PolarDB-X 1.0 instance.
     *  *
     * @param DescribeDrdsShardingDbsRequest $request DescribeDrdsShardingDbsRequest
     *
     * @return DescribeDrdsShardingDbsResponse DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsShardingDbsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a slow SQL query.
     *  *
     * @param DescribeDrdsSlowSqlsRequest $request DescribeDrdsSlowSqlsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsSlowSqlsResponse DescribeDrdsSlowSqlsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsSlowSqlsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsSlowSqlsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a slow SQL query.
     *  *
     * @param DescribeDrdsSlowSqlsRequest $request DescribeDrdsSlowSqlsRequest
     *
     * @return DescribeDrdsSlowSqlsResponse DescribeDrdsSlowSqlsResponse
     */
    public function describeDrdsSlowSqls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsSlowSqlsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL audit details of a PolarDB-X 1.0 instance.
     *  *
     * @param DescribeDrdsSqlAuditStatusRequest $request DescribeDrdsSqlAuditStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsSqlAuditStatusResponse DescribeDrdsSqlAuditStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsSqlAuditStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsSqlAuditStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the SQL audit details of a PolarDB-X 1.0 instance.
     *  *
     * @param DescribeDrdsSqlAuditStatusRequest $request DescribeDrdsSqlAuditStatusRequest
     *
     * @return DescribeDrdsSqlAuditStatusResponse DescribeDrdsSqlAuditStatusResponse
     */
    public function describeDrdsSqlAuditStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsSqlAuditStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDrdsTasksRequest $request DescribeDrdsTasksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDrdsTasksResponse DescribeDrdsTasksResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDrdsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDrdsTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDrdsTasksRequest $request DescribeDrdsTasksRequest
     *
     * @return DescribeDrdsTasksResponse DescribeDrdsTasksResponse
     */
    public function describeDrdsTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDrdsTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExpandLogicTableInfoListRequest $request DescribeExpandLogicTableInfoListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExpandLogicTableInfoListResponse DescribeExpandLogicTableInfoListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeExpandLogicTableInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeExpandLogicTableInfoListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeExpandLogicTableInfoListRequest $request DescribeExpandLogicTableInfoListRequest
     *
     * @return DescribeExpandLogicTableInfoListResponse DescribeExpandLogicTableInfoListResponse
     */
    public function describeExpandLogicTableInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExpandLogicTableInfoListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about databases on which hots-pot scale-out is performed.
     *  *
     * @param DescribeHotDbListRequest $request DescribeHotDbListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHotDbListResponse DescribeHotDbListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHotDbListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHotDbListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about databases on which hots-pot scale-out is performed.
     *  *
     * @param DescribeHotDbListRequest $request DescribeHotDbListRequest
     *
     * @return DescribeHotDbListResponse DescribeHotDbListResponse
     */
    public function describeHotDbList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotDbListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstDbLogInfoRequest $request DescribeInstDbLogInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstDbLogInfoResponse DescribeInstDbLogInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstDbLogInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstDbLogInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeInstDbLogInfoRequest $request DescribeInstDbLogInfoRequest
     *
     * @return DescribeInstDbLogInfoResponse DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstDbLogInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the names of the Log Service project and the Logstore used by the SQL audit feature.
     *  *
     * @param DescribeInstDbSlsInfoRequest $request DescribeInstDbSlsInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstDbSlsInfoResponse DescribeInstDbSlsInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstDbSlsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstDbSlsInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the names of the Log Service project and the Logstore used by the SQL audit feature.
     *  *
     * @param DescribeInstDbSlsInfoRequest $request DescribeInstDbSlsInfoRequest
     *
     * @return DescribeInstDbSlsInfoResponse DescribeInstDbSlsInfoResponse
     */
    public function describeInstDbSlsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstDbSlsInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about an instance account.
     *  *
     * @param DescribeInstanceAccountsRequest $request DescribeInstanceAccountsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceAccountsResponse DescribeInstanceAccountsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about an instance account.
     *  *
     * @param DescribeInstanceAccountsRequest $request DescribeInstanceAccountsRequest
     *
     * @return DescribeInstanceAccountsResponse DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Check whether zone switching is enabled
     *  *
     * @param DescribeInstanceSwitchAzoneRequest $request DescribeInstanceSwitchAzoneRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSwitchAzoneResponse DescribeInstanceSwitchAzoneResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceSwitchAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSwitchAzoneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Check whether zone switching is enabled
     *  *
     * @param DescribeInstanceSwitchAzoneRequest $request DescribeInstanceSwitchAzoneRequest
     *
     * @return DescribeInstanceSwitchAzoneResponse DescribeInstanceSwitchAzoneResponse
     */
    public function describeInstanceSwitchAzone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSwitchAzoneWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether you can change the network type of a PolarDB-X 1.0 instance.
     *  *
     * @description ****
     *  *
     * @param DescribeInstanceSwitchNetworkRequest $request DescribeInstanceSwitchNetworkRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSwitchNetworkResponse DescribeInstanceSwitchNetworkResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceSwitchNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSwitchNetworkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries whether you can change the network type of a PolarDB-X 1.0 instance.
     *  *
     * @description ****
     *  *
     * @param DescribeInstanceSwitchNetworkRequest $request DescribeInstanceSwitchNetworkRequest
     *
     * @return DescribeInstanceSwitchNetworkResponse DescribeInstanceSwitchNetworkResponse
     */
    public function describeInstanceSwitchNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSwitchNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DescribePreCheckResultRequest $request DescribePreCheckResultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePreCheckResultResponse DescribePreCheckResultResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePreCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePreCheckResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribePreCheckResultRequest $request DescribePreCheckResultRequest
     *
     * @return DescribePreCheckResultResponse DescribePreCheckResultResponse
     */
    public function describePreCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreCheckResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRDSPerformanceRequest $request DescribeRDSPerformanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRDSPerformanceResponse DescribeRDSPerformanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRDSPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRDSPerformanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeRDSPerformanceRequest $request DescribeRDSPerformanceRequest
     *
     * @return DescribeRDSPerformanceResponse DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRDSPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsCommodityRequest $request DescribeRdsCommodityRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsCommodityResponse DescribeRdsCommodityResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRdsCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRdsCommodityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsCommodityRequest $request DescribeRdsCommodityRequest
     *
     * @return DescribeRdsCommodityResponse DescribeRdsCommodityResponse
     */
    public function describeRdsCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsCommodityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsPerformanceSummaryRequest $request DescribeRdsPerformanceSummaryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsPerformanceSummaryResponse DescribeRdsPerformanceSummaryResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRdsPerformanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRdsPerformanceSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsPerformanceSummaryRequest $request DescribeRdsPerformanceSummaryRequest
     *
     * @return DescribeRdsPerformanceSummaryResponse DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsPerformanceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsSuperAccountInstancesRequest $request DescribeRdsSuperAccountInstancesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRdsSuperAccountInstancesResponse DescribeRdsSuperAccountInstancesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRdsSuperAccountInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRdsSuperAccountInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsSuperAccountInstancesRequest $request DescribeRdsSuperAccountInstancesRequest
     *
     * @return DescribeRdsSuperAccountInstancesResponse DescribeRdsSuperAccountInstancesResponse
     */
    public function describeRdsSuperAccountInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsSuperAccountInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the table recycle bin.
     *  *
     * @param DescribeRecycleBinStatusRequest $request DescribeRecycleBinStatusRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecycleBinStatusResponse DescribeRecycleBinStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRecycleBinStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of the table recycle bin.
     *  *
     * @param DescribeRecycleBinStatusRequest $request DescribeRecycleBinStatusRequest
     *
     * @return DescribeRecycleBinStatusResponse DescribeRecycleBinStatusResponse
     */
    public function describeRecycleBinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecycleBinStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tables that can be restored in the recycle bin.
     *  *
     * @param DescribeRecycleBinTablesRequest $request DescribeRecycleBinTablesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecycleBinTablesResponse DescribeRecycleBinTablesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRecycleBinTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRecycleBinTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the tables that can be restored in the recycle bin.
     *  *
     * @param DescribeRecycleBinTablesRequest $request DescribeRecycleBinTablesRequest
     *
     * @return DescribeRecycleBinTablesResponse DescribeRecycleBinTablesResponse
     */
    public function describeRecycleBinTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecycleBinTablesWithOptions($request, $runtime);
    }

    /**
     * @summary You can call the DescribeRestoreOrder operation to view the details of the order.
     *  *
     * @param DescribeRestoreOrderRequest $request DescribeRestoreOrderRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRestoreOrderResponse DescribeRestoreOrderResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRestoreOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRestoreOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeRestoreOrder operation to view the details of the order.
     *  *
     * @param DescribeRestoreOrderRequest $request DescribeRestoreOrderRequest
     *
     * @return DescribeRestoreOrderResponse DescribeRestoreOrderResponse
     */
    public function describeRestoreOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRestoreOrderWithOptions($request, $runtime);
    }

    /**
     * @param DescribeShardTaskInfoRequest $request DescribeShardTaskInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeShardTaskInfoResponse DescribeShardTaskInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeShardTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeShardTaskInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeShardTaskInfoRequest $request DescribeShardTaskInfoRequest
     *
     * @return DescribeShardTaskInfoResponse DescribeShardTaskInfoResponse
     */
    public function describeShardTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeShardTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the flashback tasks that are performed on a PolarDB-X 1.0 instance.
     *  *
     * @param DescribeSqlFlashbakTaskRequest $request DescribeSqlFlashbakTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlFlashbakTaskResponse DescribeSqlFlashbakTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeSqlFlashbakTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSqlFlashbakTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the flashback tasks that are performed on a PolarDB-X 1.0 instance.
     *  *
     * @param DescribeSqlFlashbakTaskRequest $request DescribeSqlFlashbakTaskRequest
     *
     * @return DescribeSqlFlashbakTaskResponse DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlFlashbakTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about the schema of a table.
     *  *
     * @param DescribeTableRequest $request DescribeTableRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTableResponse DescribeTableResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the schema of a table.
     *  *
     * @param DescribeTableRequest $request DescribeTableRequest
     *
     * @return DescribeTableResponse DescribeTableResponse
     */
    public function describeTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTableListByTypeRequest $request DescribeTableListByTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTableListByTypeResponse DescribeTableListByTypeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTableListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTableListByTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeTableListByTypeRequest $request DescribeTableListByTypeRequest
     *
     * @return DescribeTableListByTypeResponse DescribeTableListByTypeResponse
     */
    public function describeTableListByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableListByTypeWithOptions($request, $runtime);
    }

    /**
     * @summary DescribeTables文档变更
     *  *
     * @param DescribeTablesRequest $request DescribeTablesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTablesResponse DescribeTablesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary DescribeTables文档变更
     *  *
     * @param DescribeTablesRequest $request DescribeTablesRequest
     *
     * @return DescribeTablesResponse DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the SQL audit feature for a database.
     *  *
     * @param DisableSqlAuditRequest $request DisableSqlAuditRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableSqlAuditResponse DisableSqlAuditResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableSqlAuditResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables the SQL audit feature for a database.
     *  *
     * @param DisableSqlAuditRequest $request DisableSqlAuditRequest
     *
     * @return DisableSqlAuditResponse DisableSqlAuditResponse
     */
    public function disableSqlAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSqlAuditWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an IPv6 address.
     *  *
     * @param EnableInstanceIpv6AddressRequest $request EnableInstanceIpv6AddressRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableInstanceIpv6AddressResponse EnableInstanceIpv6AddressResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableInstanceIpv6AddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableInstanceIpv6AddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an IPv6 address.
     *  *
     * @param EnableInstanceIpv6AddressRequest $request EnableInstanceIpv6AddressRequest
     *
     * @return EnableInstanceIpv6AddressResponse EnableInstanceIpv6AddressResponse
     */
    public function enableInstanceIpv6Address($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstanceIpv6AddressWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the SQL audit feature for a database.
     *  *
     * @param EnableSqlAuditRequest $request EnableSqlAuditRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSqlAuditResponse EnableSqlAuditResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableSqlAuditResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables the SQL audit feature for a database.
     *  *
     * @param EnableSqlAuditRequest $request EnableSqlAuditRequest
     *
     * @return EnableSqlAuditResponse EnableSqlAuditResponse
     */
    public function enableSqlAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlAuditWithOptions($request, $runtime);
    }

    /**
     * @param EnableSqlFlashbackMatchSwitchRequest $request EnableSqlFlashbackMatchSwitchRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSqlFlashbackMatchSwitchResponse EnableSqlFlashbackMatchSwitchResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableSqlFlashbackMatchSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableSqlFlashbackMatchSwitchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param EnableSqlFlashbackMatchSwitchRequest $request EnableSqlFlashbackMatchSwitchRequest
     *
     * @return EnableSqlFlashbackMatchSwitchResponse EnableSqlFlashbackMatchSwitchResponse
     */
    public function enableSqlFlashbackMatchSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlFlashbackMatchSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Restores a logical table that is deleted.
     *  *
     * @param FlashbackRecycleBinTableRequest $request FlashbackRecycleBinTableRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return FlashbackRecycleBinTableResponse FlashbackRecycleBinTableResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return FlashbackRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FlashbackRecycleBinTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Restores a logical table that is deleted.
     *  *
     * @param FlashbackRecycleBinTableRequest $request FlashbackRecycleBinTableRequest
     *
     * @return FlashbackRecycleBinTableResponse FlashbackRecycleBinTableResponse
     */
    public function flashbackRecycleBinTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->flashbackRecycleBinTableWithOptions($request, $runtime);
    }

    /**
     * @param GetDrdsDbRdsRelationInfoRequest $request GetDrdsDbRdsRelationInfoRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDrdsDbRdsRelationInfoResponse GetDrdsDbRdsRelationInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDrdsDbRdsRelationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDrdsDbRdsRelationInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param GetDrdsDbRdsRelationInfoRequest $request GetDrdsDbRdsRelationInfoRequest
     *
     * @return GetDrdsDbRdsRelationInfoResponse GetDrdsDbRdsRelationInfoResponse
     */
    public function getDrdsDbRdsRelationInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDrdsDbRdsRelationInfoWithOptions($request, $runtime);
    }

    /**
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @summary Manages a custom ApsaraDB RDS instance at the storage layer.
     *  *
     * @param ManagePrivateRdsRequest $request ManagePrivateRdsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ManagePrivateRdsResponse ManagePrivateRdsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ManagePrivateRdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ManagePrivateRdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Manages a custom ApsaraDB RDS instance at the storage layer.
     *  *
     * @param ManagePrivateRdsRequest $request ManagePrivateRdsRequest
     *
     * @return ManagePrivateRdsResponse ManagePrivateRdsResponse
     */
    public function managePrivateRds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->managePrivateRdsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAccountDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountDescriptionRequest $request ModifyAccountDescriptionRequest
     *
     * @return ModifyAccountDescriptionResponse ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request ModifyAccountPrivilegeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAccountPrivilegeResponse ModifyAccountPrivilegeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAccountPrivilegeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyAccountPrivilegeRequest $request ModifyAccountPrivilegeRequest
     *
     * @return ModifyAccountPrivilegeResponse ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request ModifyDrdsInstanceDescriptionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDrdsInstanceDescriptionResponse ModifyDrdsInstanceDescriptionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyDrdsInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDrdsInstanceDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsInstanceDescriptionRequest $request ModifyDrdsInstanceDescriptionRequest
     *
     * @return ModifyDrdsInstanceDescriptionResponse ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request ModifyDrdsIpWhiteListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDrdsIpWhiteListResponse ModifyDrdsIpWhiteListResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyDrdsIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDrdsIpWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyDrdsIpWhiteListRequest $request ModifyDrdsIpWhiteListRequest
     *
     * @return ModifyDrdsIpWhiteListResponse ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDrdsIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPolarDbReadWeightRequest $request ModifyPolarDbReadWeightRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolarDbReadWeightResponse ModifyPolarDbReadWeightResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyPolarDbReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyPolarDbReadWeightResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyPolarDbReadWeightRequest $request ModifyPolarDbReadWeightRequest
     *
     * @return ModifyPolarDbReadWeightResponse ModifyPolarDbReadWeightResponse
     */
    public function modifyPolarDbReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolarDbReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRdsReadWeightRequest $request ModifyRdsReadWeightRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRdsReadWeightResponse ModifyRdsReadWeightResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyRdsReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyRdsReadWeightResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ModifyRdsReadWeightRequest $request ModifyRdsReadWeightRequest
     *
     * @return ModifyRdsReadWeightResponse ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRdsReadWeightWithOptions($request, $runtime);
    }

    /**
     * @param PutStartBackupRequest $request PutStartBackupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return PutStartBackupResponse PutStartBackupResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PutStartBackupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutStartBackupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param PutStartBackupRequest $request PutStartBackupRequest
     *
     * @return PutStartBackupResponse PutStartBackupResponse
     */
    public function putStartBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putStartBackupWithOptions($request, $runtime);
    }

    /**
     * @param RefreshDrdsAtomUrlRequest $request RefreshDrdsAtomUrlRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshDrdsAtomUrlResponse RefreshDrdsAtomUrlResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RefreshDrdsAtomUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RefreshDrdsAtomUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RefreshDrdsAtomUrlRequest $request RefreshDrdsAtomUrlRequest
     *
     * @return RefreshDrdsAtomUrlResponse RefreshDrdsAtomUrlResponse
     */
    public function refreshDrdsAtomUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDrdsAtomUrlWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceInternetAddressRequest $request ReleaseInstanceInternetAddressRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceInternetAddressResponse ReleaseInstanceInternetAddressResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ReleaseInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleaseInstanceInternetAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceInternetAddressRequest $request ReleaseInstanceInternetAddressRequest
     *
     * @return ReleaseInstanceInternetAddressResponse ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceInternetAddressWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBackupsSetRequest $request RemoveBackupsSetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveBackupsSetResponse RemoveBackupsSetResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveBackupsSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveBackupsSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RemoveBackupsSetRequest $request RemoveBackupsSetRequest
     *
     * @return RemoveBackupsSetResponse RemoveBackupsSetResponse
     */
    public function removeBackupsSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackupsSetWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsDbRequest $request RemoveDrdsDbRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDrdsDbResponse RemoveDrdsDbResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveDrdsDbResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveDrdsDbResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsDbRequest $request RemoveDrdsDbRequest
     *
     * @return RemoveDrdsDbResponse RemoveDrdsDbResponse
     */
    public function removeDrdsDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsDbWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDrdsDbFailedRecordRequest $request RemoveDrdsDbFailedRecordRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDrdsDbFailedRecordResponse RemoveDrdsDbFailedRecordResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveDrdsDbFailedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveDrdsDbFailedRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RemoveDrdsDbFailedRecordRequest $request RemoveDrdsDbFailedRecordRequest
     *
     * @return RemoveDrdsDbFailedRecordResponse RemoveDrdsDbFailedRecordResponse
     */
    public function removeDrdsDbFailedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsDbFailedRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an instance.
     *  *
     * @description > *   You can call this operation to release an instance that is charged based on only the pay-as-you-go billing method.
     * >*   If the specifications of the instance are being changed, or one or more databases exist in the instance, you cannot call this operation to release the instance.
     *  *
     * @param RemoveDrdsInstanceRequest $request RemoveDrdsInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDrdsInstanceResponse RemoveDrdsInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveDrdsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Releases an instance.
     *  *
     * @description > *   You can call this operation to release an instance that is charged based on only the pay-as-you-go billing method.
     * >*   If the specifications of the instance are being changed, or one or more databases exist in the instance, you cannot call this operation to release the instance.
     *  *
     * @param RemoveDrdsInstanceRequest $request RemoveDrdsInstanceRequest
     *
     * @return RemoveDrdsInstanceResponse RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveInstanceAccountRequest $request RemoveInstanceAccountRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveInstanceAccountResponse RemoveInstanceAccountResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveInstanceAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RemoveInstanceAccountRequest $request RemoveInstanceAccountRequest
     *
     * @return RemoveInstanceAccountResponse RemoveInstanceAccountResponse
     */
    public function removeInstanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstanceAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a table in the recycle bin.
     *  *
     * @param RemoveRecycleBinTableRequest $request RemoveRecycleBinTableRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveRecycleBinTableResponse RemoveRecycleBinTableResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RemoveRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveRecycleBinTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a table in the recycle bin.
     *  *
     * @param RemoveRecycleBinTableRequest $request RemoveRecycleBinTableRequest
     *
     * @return RemoveRecycleBinTableResponse RemoveRecycleBinTableResponse
     */
    public function removeRecycleBinTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeRecycleBinTableWithOptions($request, $runtime);
    }

    /**
     * @param RestartDrdsInstanceRequest $request RestartDrdsInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDrdsInstanceResponse RestartDrdsInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RestartDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartDrdsInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RestartDrdsInstanceRequest $request RestartDrdsInstanceRequest
     *
     * @return RestartDrdsInstanceResponse RestartDrdsInstanceResponse
     */
    public function restartDrdsInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDrdsInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RollbackInstanceVersionRequest $request RollbackInstanceVersionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackInstanceVersionResponse RollbackInstanceVersionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RollbackInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RollbackInstanceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param RollbackInstanceVersionRequest $request RollbackInstanceVersionRequest
     *
     * @return RollbackInstanceVersionResponse RollbackInstanceVersionResponse
     */
    public function rollbackInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a backup policy.
     *  *
     * @param SetBackupLocalRequest $request SetBackupLocalRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetBackupLocalResponse SetBackupLocalResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetBackupLocalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a backup policy.
     *  *
     * @param SetBackupLocalRequest $request SetBackupLocalRequest
     *
     * @return SetBackupLocalResponse SetBackupLocalResponse
     */
    public function setBackupLocal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackupLocalWithOptions($request, $runtime);
    }

    /**
     * @param SetBackupPolicyRequest $request SetBackupPolicyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetBackupPolicyResponse SetBackupPolicyResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetBackupPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param SetBackupPolicyRequest $request SetBackupPolicyRequest
     *
     * @return SetBackupPolicyResponse SetBackupPolicyResponse
     */
    public function setBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a broadcast table for a database.
     *  *
     * @param SetupBroadcastTablesRequest $request SetupBroadcastTablesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetupBroadcastTablesResponse SetupBroadcastTablesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetupBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetupBroadcastTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures a broadcast table for a database.
     *  *
     * @param SetupBroadcastTablesRequest $request SetupBroadcastTablesRequest
     *
     * @return SetupBroadcastTablesResponse SetupBroadcastTablesResponse
     */
    public function setupBroadcastTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupBroadcastTablesWithOptions($request, $runtime);
    }

    /**
     * @param SetupDrdsParamsRequest $request SetupDrdsParamsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetupDrdsParamsResponse SetupDrdsParamsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetupDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetupDrdsParamsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param SetupDrdsParamsRequest $request SetupDrdsParamsRequest
     *
     * @return SetupDrdsParamsResponse SetupDrdsParamsResponse
     */
    public function setupDrdsParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupDrdsParamsWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the table recycle bin for a database.
     *  *
     * @param SetupRecycleBinStatusRequest $request SetupRecycleBinStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetupRecycleBinStatusResponse SetupRecycleBinStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetupRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetupRecycleBinStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables the table recycle bin for a database.
     *  *
     * @param SetupRecycleBinStatusRequest $request SetupRecycleBinStatusRequest
     *
     * @return SetupRecycleBinStatusResponse SetupRecycleBinStatusResponse
     */
    public function setupRecycleBinStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupRecycleBinStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetupTableRequest $request SetupTableRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetupTableResponse SetupTableResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetupTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetupTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param SetupTableRequest $request SetupTableRequest
     *
     * @return SetupTableResponse SetupTableResponse
     */
    public function setupTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setupTableWithOptions($request, $runtime);
    }

    /**
     * @param StartRestoreRequest $request StartRestoreRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRestoreResponse StartRestoreResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartRestoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param StartRestoreRequest $request StartRestoreRequest
     *
     * @return StartRestoreResponse StartRestoreResponse
     */
    public function startRestore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRestoreWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a cleanup task for the scale-out of a PolarDB-X database.
     *  *
     * @param SubmitCleanTaskRequest $request SubmitCleanTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCleanTaskResponse SubmitCleanTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitCleanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCleanTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a cleanup task for the scale-out of a PolarDB-X database.
     *  *
     * @param SubmitCleanTaskRequest $request SubmitCleanTaskRequest
     *
     * @return SubmitCleanTaskResponse SubmitCleanTaskResponse
     */
    public function submitCleanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCleanTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a precheck task for the hot-spot scale-out of a PolarDB-X database. The task is used to check the table that does not contain the primary key.
     *  *
     * @param SubmitHotExpandPreCheckTaskRequest $request SubmitHotExpandPreCheckTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitHotExpandPreCheckTaskResponse SubmitHotExpandPreCheckTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitHotExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitHotExpandPreCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a precheck task for the hot-spot scale-out of a PolarDB-X database. The task is used to check the table that does not contain the primary key.
     *  *
     * @param SubmitHotExpandPreCheckTaskRequest $request SubmitHotExpandPreCheckTaskRequest
     *
     * @return SubmitHotExpandPreCheckTaskResponse SubmitHotExpandPreCheckTaskResponse
     */
    public function submitHotExpandPreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotExpandPreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a hot-spot scale-out task for a database.
     *  *
     * @param SubmitHotExpandTaskRequest $request SubmitHotExpandTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitHotExpandTaskResponse SubmitHotExpandTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitHotExpandTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitHotExpandTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a hot-spot scale-out task for a database.
     *  *
     * @param SubmitHotExpandTaskRequest $request SubmitHotExpandTaskRequest
     *
     * @return SubmitHotExpandTaskResponse SubmitHotExpandTaskResponse
     */
    public function submitHotExpandTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotExpandTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a precheck task for the smooth scale-out of a PolarDB-X database.
     *  *
     * @param SubmitSmoothExpandPreCheckRequest $request SubmitSmoothExpandPreCheckRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSmoothExpandPreCheckResponse SubmitSmoothExpandPreCheckResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSmoothExpandPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSmoothExpandPreCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a precheck task for the smooth scale-out of a PolarDB-X database.
     *  *
     * @param SubmitSmoothExpandPreCheckRequest $request SubmitSmoothExpandPreCheckRequest
     *
     * @return SubmitSmoothExpandPreCheckResponse SubmitSmoothExpandPreCheckResponse
     */
    public function submitSmoothExpandPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandPreCheckWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a precheck task for the smooth scale-out of a PolarDB-X 1.0 database.
     *  *
     * @param SubmitSmoothExpandPreCheckTaskRequest $request SubmitSmoothExpandPreCheckTaskRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse SubmitSmoothExpandPreCheckTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSmoothExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSmoothExpandPreCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a precheck task for the smooth scale-out of a PolarDB-X 1.0 database.
     *  *
     * @param SubmitSmoothExpandPreCheckTaskRequest $request SubmitSmoothExpandPreCheckTaskRequest
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse SubmitSmoothExpandPreCheckTaskResponse
     */
    public function submitSmoothExpandPreCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandPreCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSqlFlashbackTaskRequest $request SubmitSqlFlashbackTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSqlFlashbackTaskResponse SubmitSqlFlashbackTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSqlFlashbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSqlFlashbackTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param SubmitSqlFlashbackTaskRequest $request SubmitSqlFlashbackTaskRequest
     *
     * @return SubmitSqlFlashbackTaskResponse SubmitSqlFlashbackTaskResponse
     */
    public function submitSqlFlashbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSqlFlashbackTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Switches the mode of broadcast tables from the multi-write mode to the asynchronous link mode.
     *  *
     * @param SwitchGlobalBroadcastTypeRequest $request SwitchGlobalBroadcastTypeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchGlobalBroadcastTypeResponse SwitchGlobalBroadcastTypeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SwitchGlobalBroadcastTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SwitchGlobalBroadcastTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Switches the mode of broadcast tables from the multi-write mode to the asynchronous link mode.
     *  *
     * @param SwitchGlobalBroadcastTypeRequest $request SwitchGlobalBroadcastTypeRequest
     *
     * @return SwitchGlobalBroadcastTypeResponse SwitchGlobalBroadcastTypeResponse
     */
    public function switchGlobalBroadcastType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchGlobalBroadcastTypeWithOptions($request, $runtime);
    }

    /**
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
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
     * @summary Changes the network type of a PolarDB-X 1.0 instance.
     *  *
     * @param UpdateInstanceNetworkRequest $request UpdateInstanceNetworkRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceNetworkResponse UpdateInstanceNetworkResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateInstanceNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateInstanceNetworkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Changes the network type of a PolarDB-X 1.0 instance.
     *  *
     * @param UpdateInstanceNetworkRequest $request UpdateInstanceNetworkRequest
     *
     * @return UpdateInstanceNetworkResponse UpdateInstanceNetworkResponse
     */
    public function updateInstanceNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the specifications of a custom ApsaraDB RDS instance at the storage layer.
     *  *
     * @param UpdatePrivateRdsClassRequest $request UpdatePrivateRdsClassRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePrivateRdsClassResponse UpdatePrivateRdsClassResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePrivateRdsClassResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePrivateRdsClassResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the specifications of a custom ApsaraDB RDS instance at the storage layer.
     *  *
     * @param UpdatePrivateRdsClassRequest $request UpdatePrivateRdsClassRequest
     *
     * @return UpdatePrivateRdsClassResponse UpdatePrivateRdsClassResponse
     */
    public function updatePrivateRdsClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePrivateRdsClassWithOptions($request, $runtime);
    }

    /**
     * @param UpdateResourceGroupAttributeRequest $request UpdateResourceGroupAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceGroupAttributeResponse UpdateResourceGroupAttributeResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateResourceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateResourceGroupAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UpdateResourceGroupAttributeRequest $request UpdateResourceGroupAttributeRequest
     *
     * @return UpdateResourceGroupAttributeResponse UpdateResourceGroupAttributeResponse
     */
    public function updateResourceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateResourceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades the version of a column-oriented storage instance of a PolarDB-X 1.0 instance.
     *  *
     * @param UpgradeHiStoreInstanceRequest $request UpgradeHiStoreInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeHiStoreInstanceResponse UpgradeHiStoreInstanceResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeHiStoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeHiStoreInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Upgrades the version of a column-oriented storage instance of a PolarDB-X 1.0 instance.
     *  *
     * @param UpgradeHiStoreInstanceRequest $request UpgradeHiStoreInstanceRequest
     *
     * @return UpgradeHiStoreInstanceResponse UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeHiStoreInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceVersionRequest $request UpgradeInstanceVersionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeInstanceVersionResponse UpgradeInstanceVersionResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpgradeInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeInstanceVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UpgradeInstanceVersionRequest $request UpgradeInstanceVersionRequest
     *
     * @return UpgradeInstanceVersionResponse UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceVersionWithOptions($request, $runtime);
    }

    /**
     * @param ValidateShardTaskRequest $request ValidateShardTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ValidateShardTaskResponse ValidateShardTaskResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ValidateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ValidateShardTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ValidateShardTaskRequest $request ValidateShardTaskRequest
     *
     * @return ValidateShardTaskResponse ValidateShardTaskResponse
     */
    public function validateShardTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateShardTaskWithOptions($request, $runtime);
    }
}
