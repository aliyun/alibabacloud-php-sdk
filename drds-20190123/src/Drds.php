<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Drds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop' => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'drds.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'drds.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'drds.aliyuncs.com',
            'cn-beijing-finance-pop' => 'drds.aliyuncs.com',
            'cn-beijing-gov-1' => 'drds.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'drds.aliyuncs.com',
            'cn-chengdu' => 'drds.aliyuncs.com',
            'cn-edge-1' => 'drds.aliyuncs.com',
            'cn-fujian' => 'drds.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'drds.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'drds.aliyuncs.com',
            'cn-hangzhou-finance' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'drds.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'drds.aliyuncs.com',
            'cn-hangzhou-test-306' => 'drds.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'drds.aliyuncs.com',
            'cn-qingdao-nebula' => 'drds.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'drds.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'drds.aliyuncs.com',
            'cn-shanghai-inner' => 'drds.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'drds.aliyuncs.com',
            'cn-shenzhen-inner' => 'drds.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'drds.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'drds.aliyuncs.com',
            'cn-wuhan' => 'drds.aliyuncs.com',
            'cn-yushanfang' => 'drds.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'drds.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'drds.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'drds.aliyuncs.com',
            'eu-central-1' => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'drds.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs' => 'drds.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'drds.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop' => 'drds.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'drds.ap-southeast-1.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - ChangeAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeAccountPasswordResponse
     *
     * @param ChangeAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeAccountPasswordResponse
     */
    public function changeAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeAccountPassword',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeAccountPasswordRequest
     *
     * @returns ChangeAccountPasswordResponse
     *
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
     * @param request - ChangeInstanceAzoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeInstanceAzoneResponse
     *
     * @param ChangeInstanceAzoneRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeInstanceAzoneResponse
     */
    public function changeInstanceAzoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->changeVSwitch) {
            @$query['ChangeVSwitch'] = $request->changeVSwitch;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->drdsRegionId) {
            @$query['DrdsRegionId'] = $request->drdsRegionId;
        }

        if (null !== $request->newVSwitch) {
            @$query['NewVSwitch'] = $request->newVSwitch;
        }

        if (null !== $request->originAzoneId) {
            @$query['OriginAzoneId'] = $request->originAzoneId;
        }

        if (null !== $request->targetAzoneId) {
            @$query['TargetAzoneId'] = $request->targetAzoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeInstanceAzone',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeInstanceAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeInstanceAzoneRequest
     *
     * @returns ChangeInstanceAzoneResponse
     *
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
     * @param request - CheckDrdsDbNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDrdsDbNameResponse
     *
     * @param CheckDrdsDbNameRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckDrdsDbNameResponse
     */
    public function checkDrdsDbNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDrdsDbName',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDrdsDbNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckDrdsDbNameRequest
     *
     * @returns CheckDrdsDbNameResponse
     *
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
     * Verifies whether scale-out operations such as smooth scale-out can be performed on a PolarDB-X database.
     *
     * @param request - CheckExpandStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckExpandStatusResponse
     *
     * @param CheckExpandStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckExpandStatusResponse
     */
    public function checkExpandStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckExpandStatus',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckExpandStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether scale-out operations such as smooth scale-out can be performed on a PolarDB-X database.
     *
     * @param request - CheckExpandStatusRequest
     *
     * @returns CheckExpandStatusResponse
     *
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
     * Checks whether the SQL audit feature is enabled for the logical database of a PolarDB-X 1.0 instance.
     *
     * @param request - CheckSqlAuditEnableStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSqlAuditEnableStatusResponse
     *
     * @param CheckSqlAuditEnableStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckSqlAuditEnableStatusResponse
     */
    public function checkSqlAuditEnableStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSqlAuditEnableStatus',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSqlAuditEnableStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the SQL audit feature is enabled for the logical database of a PolarDB-X 1.0 instance.
     *
     * @param request - CheckSqlAuditEnableStatusRequest
     *
     * @returns CheckSqlAuditEnableStatusResponse
     *
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
     * @param request - CreateDrdsDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDrdsDBResponse
     *
     * @param CreateDrdsDBRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDrdsDBResponse
     */
    public function createDrdsDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->dbInstanceIsCreating) {
            @$query['DbInstanceIsCreating'] = $request->dbInstanceIsCreating;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->encode) {
            @$query['Encode'] = $request->encode;
        }

        if (null !== $request->instDbName) {
            @$query['InstDbName'] = $request->instDbName;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->rdsInstance) {
            @$query['RdsInstance'] = $request->rdsInstance;
        }

        if (null !== $request->rdsSuperAccount) {
            @$query['RdsSuperAccount'] = $request->rdsSuperAccount;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDrdsDB',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDrdsDBRequest
     *
     * @returns CreateDrdsDBResponse
     *
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
     * @param request - CreateDrdsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDrdsInstanceResponse
     *
     * @param CreateDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDrdsInstanceResponse
     */
    public function createDrdsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceSeries) {
            @$query['InstanceSeries'] = $request->instanceSeries;
        }

        if (null !== $request->isAutoRenew) {
            @$query['IsAutoRenew'] = $request->isAutoRenew;
        }

        if (null !== $request->masterInstId) {
            @$query['MasterInstId'] = $request->masterInstId;
        }

        if (null !== $request->mySQLVersion) {
            @$query['MySQLVersion'] = $request->mySQLVersion;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
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

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->isHa) {
            @$query['isHa'] = $request->isHa;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDrdsInstance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDrdsInstanceRequest
     *
     * @returns CreateDrdsInstanceResponse
     *
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
     * @param request - CreateInstanceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceAccountResponse
     *
     * @param CreateInstanceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dbPrivilege) {
            @$query['DbPrivilege'] = $request->dbPrivilege;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceAccount',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateInstanceAccountRequest
     *
     * @returns CreateInstanceAccountResponse
     *
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
     * @param request - CreateInstanceInternetAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceInternetAddressResponse
     *
     * @param CreateInstanceInternetAddressRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateInstanceInternetAddressResponse
     */
    public function createInstanceInternetAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceInternetAddress',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateInstanceInternetAddressRequest
     *
     * @returns CreateInstanceInternetAddressResponse
     *
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
     * Creates an order to purchase an ApsaraDB RDS for MySQL instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and pricing of PolarDB-X 1.0. For more information, visit the [pricing page](https://www.aliyun.com/price/product#/rds/detail).
     *
     * @param request - CreateOrderForRdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrderForRdsResponse
     *
     * @param CreateOrderForRdsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateOrderForRdsResponse
     */
    public function createOrderForRdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOrderForRds',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOrderForRdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an order to purchase an ApsaraDB RDS for MySQL instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and pricing of PolarDB-X 1.0. For more information, visit the [pricing page](https://www.aliyun.com/price/product#/rds/detail).
     *
     * @param request - CreateOrderForRdsRequest
     *
     * @returns CreateOrderForRdsResponse
     *
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
     * @param request - CreateShardTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateShardTaskResponse
     *
     * @param CreateShardTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateShardTaskResponse
     */
    public function createShardTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceTableName) {
            @$query['SourceTableName'] = $request->sourceTableName;
        }

        if (null !== $request->targetTableName) {
            @$query['TargetTableName'] = $request->targetTableName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateShardTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateShardTaskRequest
     *
     * @returns CreateShardTaskResponse
     *
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
     * @param request - DescribeBackMenuRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackMenuResponse
     *
     * @param DescribeBackMenuRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeBackMenuResponse
     */
    public function describeBackMenuWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackMenu',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackMenuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackMenuRequest
     *
     * @returns DescribeBackMenuResponse
     *
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
     * @param request - DescribeBackupDbsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupDbsResponse
     *
     * @param DescribeBackupDbsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeBackupDbsResponse
     */
    public function describeBackupDbsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->preferredRestoreTime) {
            @$query['PreferredRestoreTime'] = $request->preferredRestoreTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupDbs',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupDbsRequest
     *
     * @returns DescribeBackupDbsResponse
     *
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
     * Queries the backup settings of local logs.
     *
     * @param request - DescribeBackupLocalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupLocalResponse
     *
     * @param DescribeBackupLocalRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupLocalResponse
     */
    public function describeBackupLocalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupLocal',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the backup settings of local logs.
     *
     * @param request - DescribeBackupLocalRequest
     *
     * @returns DescribeBackupLocalResponse
     *
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
     * Queries the information about a backup policy.
     *
     * @param request - DescribeBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPolicyResponse
     *
     * @param DescribeBackupPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeBackupPolicyResponse
     */
    public function describeBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicy',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a backup policy.
     *
     * @param request - DescribeBackupPolicyRequest
     *
     * @returns DescribeBackupPolicyResponse
     *
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
     * @param request - DescribeBackupSetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupSetsResponse
     *
     * @param DescribeBackupSetsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupSetsResponse
     */
    public function describeBackupSetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupSets',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupSetsRequest
     *
     * @returns DescribeBackupSetsResponse
     *
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
     * @param request - DescribeBackupTimesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupTimesResponse
     *
     * @param DescribeBackupTimesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupTimesResponse
     */
    public function describeBackupTimesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupTimes',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBackupTimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBackupTimesRequest
     *
     * @returns DescribeBackupTimesResponse
     *
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
     * @param request - DescribeBroadcastTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBroadcastTablesResponse
     *
     * @param DescribeBroadcastTablesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeBroadcastTablesResponse
     */
    public function describeBroadcastTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBroadcastTables',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeBroadcastTablesRequest
     *
     * @returns DescribeBroadcastTablesResponse
     *
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
     * @param request - DescribeDbInstanceDbsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDbInstanceDbsResponse
     *
     * @param DescribeDbInstanceDbsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDbInstanceDbsResponse
     */
    public function describeDbInstanceDbsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDbInstanceDbs',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDbInstanceDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDbInstanceDbsRequest
     *
     * @returns DescribeDbInstanceDbsResponse
     *
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
     * Queries DescribeDbInstances of the storage layer, such as RDS or PolarDB.
     *
     * @param request - DescribeDbInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDbInstancesResponse
     *
     * @param DescribeDbInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDbInstancesResponse
     */
    public function describeDbInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
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

        if (null !== $request->search) {
            @$query['Search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDbInstances',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries DescribeDbInstances of the storage layer, such as RDS or PolarDB.
     *
     * @param request - DescribeDbInstancesRequest
     *
     * @returns DescribeDbInstancesResponse
     *
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
     * @param request - DescribeDrdsDBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDBResponse
     *
     * @param DescribeDrdsDBRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDrdsDBResponse
     */
    public function describeDrdsDBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsDB',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDBResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsDBRequest
     *
     * @returns DescribeDrdsDBResponse
     *
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
     * You can call this operation to query the information of the PolarDB cluster in the DRDS logical database.
     *
     * @param request - DescribeDrdsDBClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDBClusterResponse
     *
     * @param DescribeDrdsDBClusterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsDBClusterResponse
     */
    public function describeDrdsDBClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsDBCluster',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDBClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the information of the PolarDB cluster in the DRDS logical database.
     *
     * @param request - DescribeDrdsDBClusterRequest
     *
     * @returns DescribeDrdsDBClusterResponse
     *
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
     * @param request - DescribeDrdsDBIpWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDBIpWhiteListResponse
     *
     * @param DescribeDrdsDBIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsDBIpWhiteList',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDBIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsDBIpWhiteListRequest
     *
     * @returns DescribeDrdsDBIpWhiteListResponse
     *
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
     * @param request - DescribeDrdsDBsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDBsResponse
     *
     * @param DescribeDrdsDBsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsDBs',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDBsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsDBsRequest
     *
     * @returns DescribeDrdsDBsResponse
     *
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
     * @param request - DescribeDrdsDbInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDbInstanceResponse
     *
     * @param DescribeDrdsDbInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsDbInstance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDbInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsDbInstanceRequest
     *
     * @returns DescribeDrdsDbInstanceResponse
     *
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
     * Queries ApsaraDB RDS for MySQL instances that are used to store the data of a database.
     *
     * @param request - DescribeDrdsDbInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDbInstancesResponse
     *
     * @param DescribeDrdsDbInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsDbInstancesResponse
     */
    public function describeDrdsDbInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
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
            'action' => 'DescribeDrdsDbInstances',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDbInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries ApsaraDB RDS for MySQL instances that are used to store the data of a database.
     *
     * @param request - DescribeDrdsDbInstancesRequest
     *
     * @returns DescribeDrdsDbInstancesResponse
     *
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
     * 查询存储实例列表.
     *
     * @param request - DescribeDrdsDbRdsNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsDbRdsNameListResponse
     *
     * @param DescribeDrdsDbRdsNameListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsDbRdsNameList',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsDbRdsNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询存储实例列表.
     *
     * @param request - DescribeDrdsDbRdsNameListRequest
     *
     * @returns DescribeDrdsDbRdsNameListResponse
     *
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
     * Queries the details of a PolarDB-X 1.0 instance.
     *
     * @param request - DescribeDrdsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsInstanceResponse
     *
     * @param DescribeDrdsInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsInstanceResponse
     */
    public function describeDrdsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsInstance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a PolarDB-X 1.0 instance.
     *
     * @param request - DescribeDrdsInstanceRequest
     *
     * @returns DescribeDrdsInstanceResponse
     *
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
     * @param request - DescribeDrdsInstanceDbMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsInstanceDbMonitorResponse
     *
     * @param DescribeDrdsInstanceDbMonitorRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDrdsInstanceDbMonitorResponse
     */
    public function describeDrdsInstanceDbMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsInstanceDbMonitor',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsInstanceDbMonitorRequest
     *
     * @returns DescribeDrdsInstanceDbMonitorResponse
     *
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
     * @param request - DescribeDrdsInstanceLevelTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsInstanceLevelTasksResponse
     *
     * @param DescribeDrdsInstanceLevelTasksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDrdsInstanceLevelTasksResponse
     */
    public function describeDrdsInstanceLevelTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsInstanceLevelTasks',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsInstanceLevelTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsInstanceLevelTasksRequest
     *
     * @returns DescribeDrdsInstanceLevelTasksResponse
     *
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
     * 查询监控数据.
     *
     * @param request - DescribeDrdsInstanceMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsInstanceMonitorResponse
     *
     * @param DescribeDrdsInstanceMonitorRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceMonitorResponse
     */
    public function describeDrdsInstanceMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->periodMultiple) {
            @$query['PeriodMultiple'] = $request->periodMultiple;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsInstanceMonitor',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsInstanceMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询监控数据.
     *
     * @param request - DescribeDrdsInstanceMonitorRequest
     *
     * @returns DescribeDrdsInstanceMonitorResponse
     *
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
     * @param request - DescribeDrdsInstanceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsInstanceVersionResponse
     *
     * @param DescribeDrdsInstanceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsInstanceVersion',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsInstanceVersionRequest
     *
     * @returns DescribeDrdsInstanceVersionResponse
     *
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
     * Queries instances that meet the specified conditions.
     *
     * @param request - DescribeDrdsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsInstancesResponse
     *
     * @param DescribeDrdsInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expired) {
            @$query['Expired'] = $request->expired;
        }

        if (null !== $request->mix) {
            @$query['Mix'] = $request->mix;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productVersion) {
            @$query['ProductVersion'] = $request->productVersion;
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsInstances',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instances that meet the specified conditions.
     *
     * @param request - DescribeDrdsInstancesRequest
     *
     * @returns DescribeDrdsInstancesResponse
     *
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
     * @param request - DescribeDrdsParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsParamsResponse
     *
     * @param DescribeDrdsParamsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDrdsParamsResponse
     */
    public function describeDrdsParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->paramLevel) {
            @$query['ParamLevel'] = $request->paramLevel;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsParams',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsParamsRequest
     *
     * @returns DescribeDrdsParamsResponse
     *
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
     * Queries the information about all custom ApsaraDB RDS for MySQL instances in a PolarDB-X instance.
     *
     * @param request - DescribeDrdsRdsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsRdsInstancesResponse
     *
     * @param DescribeDrdsRdsInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDrdsRdsInstancesResponse
     */
    public function describeDrdsRdsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsRdsInstances',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsRdsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all custom ApsaraDB RDS for MySQL instances in a PolarDB-X instance.
     *
     * @param request - DescribeDrdsRdsInstancesRequest
     *
     * @returns DescribeDrdsRdsInstancesResponse
     *
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
     * Queries the database shards of an PolarDB-X 1.0 instance.
     *
     * @param request - DescribeDrdsShardingDbsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsShardingDbsResponse
     *
     * @param DescribeDrdsShardingDbsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->dbNamePattern) {
            @$query['DbNamePattern'] = $request->dbNamePattern;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
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
            'action' => 'DescribeDrdsShardingDbs',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsShardingDbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the database shards of an PolarDB-X 1.0 instance.
     *
     * @param request - DescribeDrdsShardingDbsRequest
     *
     * @returns DescribeDrdsShardingDbsResponse
     *
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
     * Queries a slow SQL query.
     *
     * @param request - DescribeDrdsSlowSqlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsSlowSqlsResponse
     *
     * @param DescribeDrdsSlowSqlsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDrdsSlowSqlsResponse
     */
    public function describeDrdsSlowSqlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->exeTime) {
            @$query['ExeTime'] = $request->exeTime;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsSlowSqls',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsSlowSqlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a slow SQL query.
     *
     * @param request - DescribeDrdsSlowSqlsRequest
     *
     * @returns DescribeDrdsSlowSqlsResponse
     *
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
     * Queries the SQL audit details of a PolarDB-X 1.0 instance.
     *
     * @param request - DescribeDrdsSqlAuditStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsSqlAuditStatusResponse
     *
     * @param DescribeDrdsSqlAuditStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDrdsSqlAuditStatusResponse
     */
    public function describeDrdsSqlAuditStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsSqlAuditStatus',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsSqlAuditStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the SQL audit details of a PolarDB-X 1.0 instance.
     *
     * @param request - DescribeDrdsSqlAuditStatusRequest
     *
     * @returns DescribeDrdsSqlAuditStatusResponse
     *
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
     * @param request - DescribeDrdsTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDrdsTasksResponse
     *
     * @param DescribeDrdsTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDrdsTasksResponse
     */
    public function describeDrdsTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDrdsTasks',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDrdsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDrdsTasksRequest
     *
     * @returns DescribeDrdsTasksResponse
     *
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
     * @param request - DescribeExpandLogicTableInfoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExpandLogicTableInfoListResponse
     *
     * @param DescribeExpandLogicTableInfoListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeExpandLogicTableInfoListResponse
     */
    public function describeExpandLogicTableInfoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExpandLogicTableInfoList',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExpandLogicTableInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeExpandLogicTableInfoListRequest
     *
     * @returns DescribeExpandLogicTableInfoListResponse
     *
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
     * Queries the information about databases on which hots-pot scale-out is performed.
     *
     * @param request - DescribeHotDbListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHotDbListResponse
     *
     * @param DescribeHotDbListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeHotDbListResponse
     */
    public function describeHotDbListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHotDbList',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHotDbListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about databases on which hots-pot scale-out is performed.
     *
     * @param request - DescribeHotDbListRequest
     *
     * @returns DescribeHotDbListResponse
     *
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
     * @param request - DescribeInstDbLogInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstDbLogInfoResponse
     *
     * @param DescribeInstDbLogInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstDbLogInfo',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstDbLogInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeInstDbLogInfoRequest
     *
     * @returns DescribeInstDbLogInfoResponse
     *
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
     * Queries the names of the Log Service project and the Logstore used by the SQL audit feature.
     *
     * @param request - DescribeInstDbSlsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstDbSlsInfoResponse
     *
     * @param DescribeInstDbSlsInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbSlsInfoResponse
     */
    public function describeInstDbSlsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstDbSlsInfo',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstDbSlsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the names of the Log Service project and the Logstore used by the SQL audit feature.
     *
     * @param request - DescribeInstDbSlsInfoRequest
     *
     * @returns DescribeInstDbSlsInfoResponse
     *
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
     * Queries information about an instance account.
     *
     * @param request - DescribeInstanceAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAccountsResponse
     *
     * @param DescribeInstanceAccountsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAccounts',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an instance account.
     *
     * @param request - DescribeInstanceAccountsRequest
     *
     * @returns DescribeInstanceAccountsResponse
     *
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
     * Check whether zone switching is enabled.
     *
     * @param request - DescribeInstanceSwitchAzoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSwitchAzoneResponse
     *
     * @param DescribeInstanceSwitchAzoneRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceSwitchAzoneResponse
     */
    public function describeInstanceSwitchAzoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSwitchAzone',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSwitchAzoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check whether zone switching is enabled.
     *
     * @param request - DescribeInstanceSwitchAzoneRequest
     *
     * @returns DescribeInstanceSwitchAzoneResponse
     *
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
     * Queries whether you can change the network type of a PolarDB-X 1.0 instance.
     *
     * @remarks
     *
     * @param request - DescribeInstanceSwitchNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSwitchNetworkResponse
     *
     * @param DescribeInstanceSwitchNetworkRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceSwitchNetworkResponse
     */
    public function describeInstanceSwitchNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSwitchNetwork',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSwitchNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether you can change the network type of a PolarDB-X 1.0 instance.
     *
     * @remarks
     *
     * @param request - DescribeInstanceSwitchNetworkRequest
     *
     * @returns DescribeInstanceSwitchNetworkResponse
     *
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
     * @param request - DescribePreCheckResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePreCheckResultResponse
     *
     * @param DescribePreCheckResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePreCheckResultResponse
     */
    public function describePreCheckResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePreCheckResult',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePreCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePreCheckResultRequest
     *
     * @returns DescribePreCheckResultResponse
     *
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
     * @param request - DescribeRDSPerformanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRDSPerformanceResponse
     *
     * @param DescribeRDSPerformanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keys) {
            @$query['Keys'] = $request->keys;
        }

        if (null !== $request->rdsInstanceId) {
            @$query['RdsInstanceId'] = $request->rdsInstanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRDSPerformance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRDSPerformanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRDSPerformanceRequest
     *
     * @returns DescribeRDSPerformanceResponse
     *
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
     * @param request - DescribeRdsCommodityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsCommodityResponse
     *
     * @param DescribeRdsCommodityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRdsCommodityResponse
     */
    public function describeRdsCommodityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdsCommodity',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRdsCommodityRequest
     *
     * @returns DescribeRdsCommodityResponse
     *
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
     * @param request - DescribeRdsPerformanceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsPerformanceSummaryResponse
     *
     * @param DescribeRdsPerformanceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->rdsInstanceId) {
            @$query['RdsInstanceId'] = $request->rdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdsPerformanceSummary',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsPerformanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRdsPerformanceSummaryRequest
     *
     * @returns DescribeRdsPerformanceSummaryResponse
     *
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
     * @param request - DescribeRdsSuperAccountInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRdsSuperAccountInstancesResponse
     *
     * @param DescribeRdsSuperAccountInstancesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeRdsSuperAccountInstancesResponse
     */
    public function describeRdsSuperAccountInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->rdsInstance) {
            @$query['RdsInstance'] = $request->rdsInstance;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRdsSuperAccountInstances',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRdsSuperAccountInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRdsSuperAccountInstancesRequest
     *
     * @returns DescribeRdsSuperAccountInstancesResponse
     *
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
     * Queries the status of the table recycle bin.
     *
     * @param request - DescribeRecycleBinStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecycleBinStatusResponse
     *
     * @param DescribeRecycleBinStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecycleBinStatusResponse
     */
    public function describeRecycleBinStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecycleBinStatus',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the table recycle bin.
     *
     * @param request - DescribeRecycleBinStatusRequest
     *
     * @returns DescribeRecycleBinStatusResponse
     *
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
     * Queries the tables that can be restored in the recycle bin.
     *
     * @param request - DescribeRecycleBinTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecycleBinTablesResponse
     *
     * @param DescribeRecycleBinTablesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRecycleBinTablesResponse
     */
    public function describeRecycleBinTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecycleBinTables',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecycleBinTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tables that can be restored in the recycle bin.
     *
     * @param request - DescribeRecycleBinTablesRequest
     *
     * @returns DescribeRecycleBinTablesResponse
     *
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
     * You can call the DescribeRestoreOrder operation to view the details of the order.
     *
     * @param request - DescribeRestoreOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRestoreOrderResponse
     *
     * @param DescribeRestoreOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestoreOrderResponse
     */
    public function describeRestoreOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupDbNames) {
            @$query['BackupDbNames'] = $request->backupDbNames;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupLevel) {
            @$query['BackupLevel'] = $request->backupLevel;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRestoreOrder',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRestoreOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeRestoreOrder operation to view the details of the order.
     *
     * @param request - DescribeRestoreOrderRequest
     *
     * @returns DescribeRestoreOrderResponse
     *
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
     * @param request - DescribeShardTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeShardTaskInfoResponse
     *
     * @param DescribeShardTaskInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeShardTaskInfoResponse
     */
    public function describeShardTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceTableName) {
            @$query['SourceTableName'] = $request->sourceTableName;
        }

        if (null !== $request->targetTableName) {
            @$query['TargetTableName'] = $request->targetTableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeShardTaskInfo',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeShardTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeShardTaskInfoRequest
     *
     * @returns DescribeShardTaskInfoResponse
     *
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
     * Queries the flashback tasks that are performed on a PolarDB-X 1.0 instance.
     *
     * @param request - DescribeSqlFlashbakTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSqlFlashbakTaskResponse
     *
     * @param DescribeSqlFlashbakTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSqlFlashbakTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSqlFlashbakTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the flashback tasks that are performed on a PolarDB-X 1.0 instance.
     *
     * @param request - DescribeSqlFlashbakTaskRequest
     *
     * @returns DescribeSqlFlashbakTaskResponse
     *
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
     * Queries information about the schema of a table.
     *
     * @param request - DescribeTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTableResponse
     *
     * @param DescribeTableRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTableResponse
     */
    public function describeTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTable',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the schema of a table.
     *
     * @param request - DescribeTableRequest
     *
     * @returns DescribeTableResponse
     *
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
     * @param request - DescribeTableListByTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTableListByTypeResponse
     *
     * @param DescribeTableListByTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTableListByTypeResponse
     */
    public function describeTableListByTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableType) {
            @$query['TableType'] = $request->tableType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTableListByType',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTableListByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTableListByTypeRequest
     *
     * @returns DescribeTableListByTypeResponse
     *
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
     * DescribeTables文档变更.
     *
     * @param request - DescribeTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTablesResponse
     *
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTables',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeTables文档变更.
     *
     * @param request - DescribeTablesRequest
     *
     * @returns DescribeTablesResponse
     *
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
     * Disables the SQL audit feature for a database.
     *
     * @param request - DisableSqlAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSqlAuditResponse
     *
     * @param DisableSqlAuditRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableSqlAuditResponse
     */
    public function disableSqlAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSqlAudit',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the SQL audit feature for a database.
     *
     * @param request - DisableSqlAuditRequest
     *
     * @returns DisableSqlAuditResponse
     *
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
     * Creates an IPv6 address.
     *
     * @param request - EnableInstanceIpv6AddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableInstanceIpv6AddressResponse
     *
     * @param EnableInstanceIpv6AddressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableInstanceIpv6AddressResponse
     */
    public function enableInstanceIpv6AddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableInstanceIpv6Address',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableInstanceIpv6AddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an IPv6 address.
     *
     * @param request - EnableInstanceIpv6AddressRequest
     *
     * @returns EnableInstanceIpv6AddressResponse
     *
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
     * Enables the SQL audit feature for a database.
     *
     * @param request - EnableSqlAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSqlAuditResponse
     *
     * @param EnableSqlAuditRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableSqlAuditResponse
     */
    public function enableSqlAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->isRecall) {
            @$query['IsRecall'] = $request->isRecall;
        }

        if (null !== $request->recallEndTimestamp) {
            @$query['RecallEndTimestamp'] = $request->recallEndTimestamp;
        }

        if (null !== $request->recallStartTimestamp) {
            @$query['RecallStartTimestamp'] = $request->recallStartTimestamp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableSqlAudit',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSqlAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the SQL audit feature for a database.
     *
     * @param request - EnableSqlAuditRequest
     *
     * @returns EnableSqlAuditResponse
     *
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
     * @param request - EnableSqlFlashbackMatchSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSqlFlashbackMatchSwitchResponse
     *
     * @param EnableSqlFlashbackMatchSwitchRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return EnableSqlFlashbackMatchSwitchResponse
     */
    public function enableSqlFlashbackMatchSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableSqlFlashbackMatchSwitch',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableSqlFlashbackMatchSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EnableSqlFlashbackMatchSwitchRequest
     *
     * @returns EnableSqlFlashbackMatchSwitchResponse
     *
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
     * Restores a logical table that is deleted.
     *
     * @param request - FlashbackRecycleBinTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FlashbackRecycleBinTableResponse
     *
     * @param FlashbackRecycleBinTableRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FlashbackRecycleBinTableResponse
     */
    public function flashbackRecycleBinTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FlashbackRecycleBinTable',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FlashbackRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores a logical table that is deleted.
     *
     * @param request - FlashbackRecycleBinTableRequest
     *
     * @returns FlashbackRecycleBinTableResponse
     *
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
     * @param request - GetDrdsDbRdsRelationInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDrdsDbRdsRelationInfoResponse
     *
     * @param GetDrdsDbRdsRelationInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDrdsDbRdsRelationInfoResponse
     */
    public function getDrdsDbRdsRelationInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDrdsDbRdsRelationInfo',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDrdsDbRdsRelationInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetDrdsDbRdsRelationInfoRequest
     *
     * @returns GetDrdsDbRdsRelationInfoResponse
     *
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
     * 查看Tag标签.
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
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2019-01-23',
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
     * 查看Tag标签.
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
     * Manages a custom ApsaraDB RDS instance at the storage layer.
     *
     * @param request - ManagePrivateRdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManagePrivateRdsResponse
     *
     * @param ManagePrivateRdsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ManagePrivateRdsResponse
     */
    public function managePrivateRdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->rdsAction) {
            @$query['RdsAction'] = $request->rdsAction;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ManagePrivateRds',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManagePrivateRdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manages a custom ApsaraDB RDS instance at the storage layer.
     *
     * @param request - ManagePrivateRdsRequest
     *
     * @returns ManagePrivateRdsResponse
     *
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
     * @param request - ModifyAccountDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountDescriptionResponse
     *
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountDescription',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAccountDescriptionRequest
     *
     * @returns ModifyAccountDescriptionResponse
     *
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
     * @param request - ModifyAccountPrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAccountPrivilegeResponse
     *
     * @param ModifyAccountPrivilegeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountPrivilegeResponse
     */
    public function modifyAccountPrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->dbPrivilege) {
            @$query['DbPrivilege'] = $request->dbPrivilege;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAccountPrivilege',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAccountPrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyAccountPrivilegeRequest
     *
     * @returns ModifyAccountPrivilegeResponse
     *
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
     * @param request - ModifyDrdsInstanceDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDrdsInstanceDescriptionResponse
     *
     * @param ModifyDrdsInstanceDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDrdsInstanceDescription',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDrdsInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDrdsInstanceDescriptionRequest
     *
     * @returns ModifyDrdsInstanceDescriptionResponse
     *
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
     * @param request - ModifyDrdsIpWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDrdsIpWhiteListResponse
     *
     * @param ModifyDrdsIpWhiteListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDrdsIpWhiteListResponse
     */
    public function modifyDrdsIpWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->groupAttribute) {
            @$query['GroupAttribute'] = $request->groupAttribute;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->ipWhiteList) {
            @$query['IpWhiteList'] = $request->ipWhiteList;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDrdsIpWhiteList',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDrdsIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDrdsIpWhiteListRequest
     *
     * @returns ModifyDrdsIpWhiteListResponse
     *
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
     * @param request - ModifyPolarDbReadWeightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolarDbReadWeightResponse
     *
     * @param ModifyPolarDbReadWeightRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyPolarDbReadWeightResponse
     */
    public function modifyPolarDbReadWeightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstanceId) {
            @$query['DbInstanceId'] = $request->dbInstanceId;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->dbNodeIds) {
            @$query['DbNodeIds'] = $request->dbNodeIds;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->weights) {
            @$query['Weights'] = $request->weights;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPolarDbReadWeight',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolarDbReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyPolarDbReadWeightRequest
     *
     * @returns ModifyPolarDbReadWeightResponse
     *
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
     * @param request - ModifyRdsReadWeightRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRdsReadWeightResponse
     *
     * @param ModifyRdsReadWeightRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeightWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->instanceNames) {
            @$query['InstanceNames'] = $request->instanceNames;
        }

        if (null !== $request->weights) {
            @$query['Weights'] = $request->weights;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRdsReadWeight',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRdsReadWeightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyRdsReadWeightRequest
     *
     * @returns ModifyRdsReadWeightResponse
     *
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
     * @param request - PutStartBackupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutStartBackupResponse
     *
     * @param PutStartBackupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutStartBackupResponse
     */
    public function putStartBackupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupDbNames) {
            @$query['BackupDbNames'] = $request->backupDbNames;
        }

        if (null !== $request->backupLevel) {
            @$query['BackupLevel'] = $request->backupLevel;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutStartBackup',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutStartBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutStartBackupRequest
     *
     * @returns PutStartBackupResponse
     *
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
     * @param request - RefreshDrdsAtomUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshDrdsAtomUrlResponse
     *
     * @param RefreshDrdsAtomUrlRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshDrdsAtomUrlResponse
     */
    public function refreshDrdsAtomUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshDrdsAtomUrl',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshDrdsAtomUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RefreshDrdsAtomUrlRequest
     *
     * @returns RefreshDrdsAtomUrlResponse
     *
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
     * @param request - ReleaseInstanceInternetAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceInternetAddressResponse
     *
     * @param ReleaseInstanceInternetAddressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstanceInternetAddress',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceInternetAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReleaseInstanceInternetAddressRequest
     *
     * @returns ReleaseInstanceInternetAddressResponse
     *
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
     * @param request - RemoveBackupsSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveBackupsSetResponse
     *
     * @param RemoveBackupsSetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveBackupsSetResponse
     */
    public function removeBackupsSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveBackupsSet',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveBackupsSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveBackupsSetRequest
     *
     * @returns RemoveBackupsSetResponse
     *
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
     * @param request - RemoveDrdsDbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDrdsDbResponse
     *
     * @param RemoveDrdsDbRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RemoveDrdsDbResponse
     */
    public function removeDrdsDbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDrdsDb',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDrdsDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveDrdsDbRequest
     *
     * @returns RemoveDrdsDbResponse
     *
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
     * @param request - RemoveDrdsDbFailedRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDrdsDbFailedRecordResponse
     *
     * @param RemoveDrdsDbFailedRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RemoveDrdsDbFailedRecordResponse
     */
    public function removeDrdsDbFailedRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDrdsDbFailedRecord',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDrdsDbFailedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveDrdsDbFailedRecordRequest
     *
     * @returns RemoveDrdsDbFailedRecordResponse
     *
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
     * Releases an instance.
     *
     * @remarks
     * > *   You can call this operation to release an instance that is charged based on only the pay-as-you-go billing method.
     * >*   If the specifications of the instance are being changed, or one or more databases exist in the instance, you cannot call this operation to release the instance.
     *
     * @param request - RemoveDrdsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDrdsInstanceResponse
     *
     * @param RemoveDrdsInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveDrdsInstanceResponse
     */
    public function removeDrdsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDrdsInstance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an instance.
     *
     * @remarks
     * > *   You can call this operation to release an instance that is charged based on only the pay-as-you-go billing method.
     * >*   If the specifications of the instance are being changed, or one or more databases exist in the instance, you cannot call this operation to release the instance.
     *
     * @param request - RemoveDrdsInstanceRequest
     *
     * @returns RemoveDrdsInstanceResponse
     *
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
     * @param request - RemoveInstanceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveInstanceAccountResponse
     *
     * @param RemoveInstanceAccountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveInstanceAccountResponse
     */
    public function removeInstanceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveInstanceAccount',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RemoveInstanceAccountRequest
     *
     * @returns RemoveInstanceAccountResponse
     *
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
     * Deletes a table in the recycle bin.
     *
     * @param request - RemoveRecycleBinTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveRecycleBinTableResponse
     *
     * @param RemoveRecycleBinTableRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveRecycleBinTableResponse
     */
    public function removeRecycleBinTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveRecycleBinTable',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveRecycleBinTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a table in the recycle bin.
     *
     * @param request - RemoveRecycleBinTableRequest
     *
     * @returns RemoveRecycleBinTableResponse
     *
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
     * @param request - RestartDrdsInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartDrdsInstanceResponse
     *
     * @param RestartDrdsInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartDrdsInstanceResponse
     */
    public function restartDrdsInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartDrdsInstance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartDrdsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RestartDrdsInstanceRequest
     *
     * @returns RestartDrdsInstanceResponse
     *
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
     * @param request - RollbackInstanceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackInstanceVersionResponse
     *
     * @param RollbackInstanceVersionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackInstanceVersionResponse
     */
    public function rollbackInstanceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackInstanceVersion',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RollbackInstanceVersionRequest
     *
     * @returns RollbackInstanceVersionResponse
     *
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
     * Modifies a backup policy.
     *
     * @param request - SetBackupLocalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetBackupLocalResponse
     *
     * @param SetBackupLocalRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetBackupLocalResponse
     */
    public function setBackupLocalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->highSpaceUsageProtection) {
            @$query['HighSpaceUsageProtection'] = $request->highSpaceUsageProtection;
        }

        if (null !== $request->localLogRetentionHours) {
            @$query['LocalLogRetentionHours'] = $request->localLogRetentionHours;
        }

        if (null !== $request->localLogRetentionSpace) {
            @$query['LocalLogRetentionSpace'] = $request->localLogRetentionSpace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetBackupLocal',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetBackupLocalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a backup policy.
     *
     * @param request - SetBackupLocalRequest
     *
     * @returns SetBackupLocalResponse
     *
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
     * @param request - SetBackupPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetBackupPolicyResponse
     *
     * @param SetBackupPolicyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetBackupPolicyResponse
     */
    public function setBackupPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupDbNames) {
            @$query['BackupDbNames'] = $request->backupDbNames;
        }

        if (null !== $request->backupLevel) {
            @$query['BackupLevel'] = $request->backupLevel;
        }

        if (null !== $request->backupLog) {
            @$query['BackupLog'] = $request->backupLog;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->dataBackupRetentionPeriod) {
            @$query['DataBackupRetentionPeriod'] = $request->dataBackupRetentionPeriod;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->logBackupRetentionPeriod) {
            @$query['LogBackupRetentionPeriod'] = $request->logBackupRetentionPeriod;
        }

        if (null !== $request->preferredBackupEndTime) {
            @$query['PreferredBackupEndTime'] = $request->preferredBackupEndTime;
        }

        if (null !== $request->preferredBackupPeriod) {
            @$query['PreferredBackupPeriod'] = $request->preferredBackupPeriod;
        }

        if (null !== $request->preferredBackupStartTime) {
            @$query['PreferredBackupStartTime'] = $request->preferredBackupStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetBackupPolicy',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetBackupPolicyRequest
     *
     * @returns SetBackupPolicyResponse
     *
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
     * Configures a broadcast table for a database.
     *
     * @param request - SetupBroadcastTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetupBroadcastTablesResponse
     *
     * @param SetupBroadcastTablesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetupBroadcastTablesResponse
     */
    public function setupBroadcastTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetupBroadcastTables',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetupBroadcastTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a broadcast table for a database.
     *
     * @param request - SetupBroadcastTablesRequest
     *
     * @returns SetupBroadcastTablesResponse
     *
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
     * @param request - SetupDrdsParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetupDrdsParamsResponse
     *
     * @param SetupDrdsParamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetupDrdsParamsResponse
     */
    public function setupDrdsParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->paramLevel) {
            @$query['ParamLevel'] = $request->paramLevel;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetupDrdsParams',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetupDrdsParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetupDrdsParamsRequest
     *
     * @returns SetupDrdsParamsResponse
     *
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
     * Enables the table recycle bin for a database.
     *
     * @param request - SetupRecycleBinStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetupRecycleBinStatusResponse
     *
     * @param SetupRecycleBinStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetupRecycleBinStatusResponse
     */
    public function setupRecycleBinStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->statusAction) {
            @$query['StatusAction'] = $request->statusAction;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetupRecycleBinStatus',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetupRecycleBinStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the table recycle bin for a database.
     *
     * @param request - SetupRecycleBinStatusRequest
     *
     * @returns SetupRecycleBinStatusResponse
     *
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
     * @param request - SetupTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetupTableResponse
     *
     * @param SetupTableRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetupTableResponse
     */
    public function setupTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowFullTableScan) {
            @$query['AllowFullTableScan'] = $request->allowFullTableScan;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetupTable',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetupTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetupTableRequest
     *
     * @returns SetupTableResponse
     *
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
     * @param request - StartRestoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRestoreResponse
     *
     * @param StartRestoreRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartRestoreResponse
     */
    public function startRestoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupDbNames) {
            @$query['BackupDbNames'] = $request->backupDbNames;
        }

        if (null !== $request->backupId) {
            @$query['BackupId'] = $request->backupId;
        }

        if (null !== $request->backupLevel) {
            @$query['BackupLevel'] = $request->backupLevel;
        }

        if (null !== $request->backupMode) {
            @$query['BackupMode'] = $request->backupMode;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->preferredBackupTime) {
            @$query['PreferredBackupTime'] = $request->preferredBackupTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRestore',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRestoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartRestoreRequest
     *
     * @returns StartRestoreResponse
     *
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
     * Submits a cleanup task for the scale-out of a PolarDB-X database.
     *
     * @param request - SubmitCleanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitCleanTaskResponse
     *
     * @param SubmitCleanTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitCleanTaskResponse
     */
    public function submitCleanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->expandType) {
            @$query['ExpandType'] = $request->expandType;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->parentJobId) {
            @$query['ParentJobId'] = $request->parentJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitCleanTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitCleanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a cleanup task for the scale-out of a PolarDB-X database.
     *
     * @param request - SubmitCleanTaskRequest
     *
     * @returns SubmitCleanTaskResponse
     *
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
     * Submits a precheck task for the hot-spot scale-out of a PolarDB-X database. The task is used to check the table that does not contain the primary key.
     *
     * @param request - SubmitHotExpandPreCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitHotExpandPreCheckTaskResponse
     *
     * @param SubmitHotExpandPreCheckTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitHotExpandPreCheckTaskResponse
     */
    public function submitHotExpandPreCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->tableList) {
            @$query['TableList'] = $request->tableList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitHotExpandPreCheckTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitHotExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a precheck task for the hot-spot scale-out of a PolarDB-X database. The task is used to check the table that does not contain the primary key.
     *
     * @param request - SubmitHotExpandPreCheckTaskRequest
     *
     * @returns SubmitHotExpandPreCheckTaskResponse
     *
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
     * Submits a hot-spot scale-out task for a database.
     *
     * @param request - SubmitHotExpandTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitHotExpandTaskResponse
     *
     * @param SubmitHotExpandTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitHotExpandTaskResponse
     */
    public function submitHotExpandTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->extendedMapping) {
            @$query['ExtendedMapping'] = $request->extendedMapping;
        }

        if (null !== $request->instanceDbMapping) {
            @$query['InstanceDbMapping'] = $request->instanceDbMapping;
        }

        if (null !== $request->mapping) {
            @$query['Mapping'] = $request->mapping;
        }

        if (null !== $request->supperAccountMapping) {
            @$query['SupperAccountMapping'] = $request->supperAccountMapping;
        }

        if (null !== $request->taskDesc) {
            @$query['TaskDesc'] = $request->taskDesc;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitHotExpandTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitHotExpandTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a hot-spot scale-out task for a database.
     *
     * @param request - SubmitHotExpandTaskRequest
     *
     * @returns SubmitHotExpandTaskResponse
     *
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
     * Submits a precheck task for the smooth scale-out of a PolarDB-X database.
     *
     * @param request - SubmitSmoothExpandPreCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSmoothExpandPreCheckResponse
     *
     * @param SubmitSmoothExpandPreCheckRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SubmitSmoothExpandPreCheckResponse
     */
    public function submitSmoothExpandPreCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbInstType) {
            @$query['DbInstType'] = $request->dbInstType;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSmoothExpandPreCheck',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSmoothExpandPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a precheck task for the smooth scale-out of a PolarDB-X database.
     *
     * @param request - SubmitSmoothExpandPreCheckRequest
     *
     * @returns SubmitSmoothExpandPreCheckResponse
     *
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
     * Submits a precheck task for the smooth scale-out of a PolarDB-X 1.0 database.
     *
     * @param request - SubmitSmoothExpandPreCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSmoothExpandPreCheckTaskResponse
     *
     * @param SubmitSmoothExpandPreCheckTaskRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitSmoothExpandPreCheckTaskResponse
     */
    public function submitSmoothExpandPreCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSmoothExpandPreCheckTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSmoothExpandPreCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a precheck task for the smooth scale-out of a PolarDB-X 1.0 database.
     *
     * @param request - SubmitSmoothExpandPreCheckTaskRequest
     *
     * @returns SubmitSmoothExpandPreCheckTaskResponse
     *
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
     * @param request - SubmitSqlFlashbackTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitSqlFlashbackTaskResponse
     *
     * @param SubmitSqlFlashbackTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSqlFlashbackTaskResponse
     */
    public function submitSqlFlashbackTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->recallRestoreType) {
            @$query['RecallRestoreType'] = $request->recallRestoreType;
        }

        if (null !== $request->recallType) {
            @$query['RecallType'] = $request->recallType;
        }

        if (null !== $request->sqlPk) {
            @$query['SqlPk'] = $request->sqlPk;
        }

        if (null !== $request->sqlType) {
            @$query['SqlType'] = $request->sqlType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->traceId) {
            @$query['TraceId'] = $request->traceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitSqlFlashbackTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitSqlFlashbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SubmitSqlFlashbackTaskRequest
     *
     * @returns SubmitSqlFlashbackTaskResponse
     *
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
     * Switches the mode of broadcast tables from the multi-write mode to the asynchronous link mode.
     *
     * @param request - SwitchGlobalBroadcastTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchGlobalBroadcastTypeResponse
     *
     * @param SwitchGlobalBroadcastTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SwitchGlobalBroadcastTypeResponse
     */
    public function switchGlobalBroadcastTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchGlobalBroadcastType',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchGlobalBroadcastTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches the mode of broadcast tables from the multi-write mode to the asynchronous link mode.
     *
     * @param request - SwitchGlobalBroadcastTypeRequest
     *
     * @returns SwitchGlobalBroadcastTypeResponse
     *
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
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2019-01-23',
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
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
            'version' => '2019-01-23',
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
     * Changes the network type of a PolarDB-X 1.0 instance.
     *
     * @param request - UpdateInstanceNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNetworkResponse
     *
     * @param UpdateInstanceNetworkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateInstanceNetworkResponse
     */
    public function updateInstanceNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classicExpiredDays) {
            @$query['ClassicExpiredDays'] = $request->classicExpiredDays;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->retainClassic) {
            @$query['RetainClassic'] = $request->retainClassic;
        }

        if (null !== $request->srcInstanceNetworkType) {
            @$query['SrcInstanceNetworkType'] = $request->srcInstanceNetworkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceNetwork',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the network type of a PolarDB-X 1.0 instance.
     *
     * @param request - UpdateInstanceNetworkRequest
     *
     * @returns UpdateInstanceNetworkResponse
     *
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
     * Updates the specifications of a custom ApsaraDB RDS instance at the storage layer.
     *
     * @param request - UpdatePrivateRdsClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePrivateRdsClassResponse
     *
     * @param UpdatePrivateRdsClassRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePrivateRdsClassResponse
     */
    public function updatePrivateRdsClassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
        }

        if (null !== $request->DBInstanceId) {
            @$query['DBInstanceId'] = $request->DBInstanceId;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->prePayDuration) {
            @$query['PrePayDuration'] = $request->prePayDuration;
        }

        if (null !== $request->rdsClass) {
            @$query['RdsClass'] = $request->rdsClass;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePrivateRdsClass',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePrivateRdsClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the specifications of a custom ApsaraDB RDS instance at the storage layer.
     *
     * @param request - UpdatePrivateRdsClassRequest
     *
     * @returns UpdatePrivateRdsClassResponse
     *
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
     * @param request - UpdateResourceGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceGroupAttributeResponse
     *
     * @param UpdateResourceGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateResourceGroupAttributeResponse
     */
    public function updateResourceGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceGroupAttribute',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateResourceGroupAttributeRequest
     *
     * @returns UpdateResourceGroupAttributeResponse
     *
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
     * Upgrades the version of a column-oriented storage instance of a PolarDB-X 1.0 instance.
     *
     * @param request - UpgradeHiStoreInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeHiStoreInstanceResponse
     *
     * @param UpgradeHiStoreInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->historeInstanceId) {
            @$query['HistoreInstanceId'] = $request->historeInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeHiStoreInstance',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeHiStoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the version of a column-oriented storage instance of a PolarDB-X 1.0 instance.
     *
     * @param request - UpgradeHiStoreInstanceRequest
     *
     * @returns UpgradeHiStoreInstanceResponse
     *
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
     * @param request - UpgradeInstanceVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeInstanceVersionResponse
     *
     * @param UpgradeInstanceVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeInstanceVersionResponse
     */
    public function upgradeInstanceVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rpm) {
            @$query['Rpm'] = $request->rpm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeInstanceVersion',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpgradeInstanceVersionRequest
     *
     * @returns UpgradeInstanceVersionResponse
     *
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
     * @param request - ValidateShardTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateShardTaskResponse
     *
     * @param ValidateShardTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ValidateShardTaskResponse
     */
    public function validateShardTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->drdsInstanceId) {
            @$query['DrdsInstanceId'] = $request->drdsInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceTableName) {
            @$query['SourceTableName'] = $request->sourceTableName;
        }

        if (null !== $request->targetTableName) {
            @$query['TargetTableName'] = $request->targetTableName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ValidateShardTask',
            'version' => '2019-01-23',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ValidateShardTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ValidateShardTaskRequest
     *
     * @returns ValidateShardTaskResponse
     *
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
