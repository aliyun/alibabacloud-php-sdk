<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHiStoreInstanceInfoResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceMenuSwitchRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceMenuSwitchResponse;
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
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlAuditRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlAuditResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlFlashbackMatchSwitchRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\EnableSqlFlashbackMatchSwitchResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ManagePrivateRdsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ManagePrivateRdsResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsInstanceDescriptionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsInstanceDescriptionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsIpWhiteListRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyDrdsIpWhiteListResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyRdsReadWeightRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyRdsReadWeightResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutStartBackupRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\PutStartBackupResponse;
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
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupLocalRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupLocalResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupPolicyRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetBackupPolicyResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupBroadcastTablesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupBroadcastTablesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SetupDrdsParamsResponse;
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
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSqlFlashbackTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSqlFlashbackTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSwitchTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSwitchTaskResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\SwitchGlobalBroadcastTypeRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\SwitchGlobalBroadcastTypeResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateInstanceNetworkRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpdateInstanceNetworkResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeHiStoreInstanceRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeHiStoreInstanceResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeInstanceVersionRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\UpgradeInstanceVersionResponse;
use AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskRequest;
use AlibabaCloud\SDK\Drds\V20190123\Models\ValidateShardTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param CheckDrdsDbNameRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckDrdsDbNameResponse
     */
    public function checkDrdsDbNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDrdsDbNameResponse::fromMap($this->doRPCRequest('CheckDrdsDbName', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckExpandStatusResponse::fromMap($this->doRPCRequest('CheckExpandStatus', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckSqlAuditEnableStatusResponse::fromMap($this->doRPCRequest('CheckSqlAuditEnableStatus', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDrdsDBResponse::fromMap($this->doRPCRequest('CreateDrdsDB', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDrdsInstanceResponse::fromMap($this->doRPCRequest('CreateDrdsInstance', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceAccountResponse::fromMap($this->doRPCRequest('CreateInstanceAccount', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceInternetAddressResponse::fromMap($this->doRPCRequest('CreateInstanceInternetAddress', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOrderForRdsResponse::fromMap($this->doRPCRequest('CreateOrderForRds', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateShardTaskResponse::fromMap($this->doRPCRequest('CreateShardTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackMenuResponse::fromMap($this->doRPCRequest('DescribeBackMenu', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupDbsResponse::fromMap($this->doRPCRequest('DescribeBackupDbs', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupLocalResponse::fromMap($this->doRPCRequest('DescribeBackupLocal', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupSetsResponse::fromMap($this->doRPCRequest('DescribeBackupSets', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupTimesResponse::fromMap($this->doRPCRequest('DescribeBackupTimes', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBroadcastTablesResponse::fromMap($this->doRPCRequest('DescribeBroadcastTables', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDbInstanceDbsResponse::fromMap($this->doRPCRequest('DescribeDbInstanceDbs', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDbInstancesResponse::fromMap($this->doRPCRequest('DescribeDbInstances', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDBResponse::fromMap($this->doRPCRequest('DescribeDrdsDB', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDBClusterResponse::fromMap($this->doRPCRequest('DescribeDrdsDBCluster', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsDbInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDrdsDbInstanceResponse
     */
    public function describeDrdsDbInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDbInstanceResponse::fromMap($this->doRPCRequest('DescribeDrdsDbInstance', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDbInstancesResponse::fromMap($this->doRPCRequest('DescribeDrdsDbInstances', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsDBIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDBIpWhiteListResponse
     */
    public function describeDrdsDBIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDBIpWhiteListResponse::fromMap($this->doRPCRequest('DescribeDrdsDBIpWhiteList', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsDbRdsNameListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDrdsDbRdsNameListResponse
     */
    public function describeDrdsDbRdsNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDbRdsNameListResponse::fromMap($this->doRPCRequest('DescribeDrdsDbRdsNameList', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsDBsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDrdsDBsResponse
     */
    public function describeDrdsDBsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDBsResponse::fromMap($this->doRPCRequest('DescribeDrdsDBs', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsDbTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDrdsDbTasksResponse
     */
    public function describeDrdsDbTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsDbTasksResponse::fromMap($this->doRPCRequest('DescribeDrdsDbTasks', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsInstanceResponse::fromMap($this->doRPCRequest('DescribeDrdsInstance', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsInstanceDbMonitorResponse::fromMap($this->doRPCRequest('DescribeDrdsInstanceDbMonitor', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsInstanceLevelTasksResponse::fromMap($this->doRPCRequest('DescribeDrdsInstanceLevelTasks', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsInstanceMonitorResponse::fromMap($this->doRPCRequest('DescribeDrdsInstanceMonitor', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsInstancesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDrdsInstancesResponse
     */
    public function describeDrdsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsInstancesResponse::fromMap($this->doRPCRequest('DescribeDrdsInstances', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsInstanceVersionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDrdsInstanceVersionResponse
     */
    public function describeDrdsInstanceVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsInstanceVersionResponse::fromMap($this->doRPCRequest('DescribeDrdsInstanceVersion', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsParamsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDrdsParamsResponse
     */
    public function describeDrdsParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsParamsResponse::fromMap($this->doRPCRequest('DescribeDrdsParams', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDrdsShardingDbsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDrdsShardingDbsResponse
     */
    public function describeDrdsShardingDbsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsShardingDbsResponse::fromMap($this->doRPCRequest('DescribeDrdsShardingDbs', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsSlowSqlsResponse::fromMap($this->doRPCRequest('DescribeDrdsSlowSqls', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsSqlAuditStatusResponse::fromMap($this->doRPCRequest('DescribeDrdsSqlAuditStatus', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDrdsTasksResponse::fromMap($this->doRPCRequest('DescribeDrdsTasks', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExpandLogicTableInfoListResponse::fromMap($this->doRPCRequest('DescribeExpandLogicTableInfoList', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeHiStoreInstanceInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeHiStoreInstanceInfoResponse
     */
    public function describeHiStoreInstanceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHiStoreInstanceInfoResponse::fromMap($this->doRPCRequest('DescribeHiStoreInstanceInfo', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHiStoreInstanceInfoRequest $request
     *
     * @return DescribeHiStoreInstanceInfoResponse
     */
    public function describeHiStoreInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHiStoreInstanceInfoWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHotDbListResponse::fromMap($this->doRPCRequest('DescribeHotDbList', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceAccountsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAccountsResponse
     */
    public function describeInstanceAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAccountsResponse::fromMap($this->doRPCRequest('DescribeInstanceAccounts', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceMenuSwitchRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeInstanceMenuSwitchResponse
     */
    public function describeInstanceMenuSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceMenuSwitchResponse::fromMap($this->doRPCRequest('DescribeInstanceMenuSwitch', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceMenuSwitchRequest $request
     *
     * @return DescribeInstanceMenuSwitchResponse
     */
    public function describeInstanceMenuSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMenuSwitchWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSwitchAzoneResponse::fromMap($this->doRPCRequest('DescribeInstanceSwitchAzone', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSwitchNetworkResponse::fromMap($this->doRPCRequest('DescribeInstanceSwitchNetwork', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstDbLogInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstDbLogInfoResponse
     */
    public function describeInstDbLogInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstDbLogInfoResponse::fromMap($this->doRPCRequest('DescribeInstDbLogInfo', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstDbSlsInfoResponse::fromMap($this->doRPCRequest('DescribeInstDbSlsInfo', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribePreCheckResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePreCheckResultResponse
     */
    public function describePreCheckResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePreCheckResultResponse::fromMap($this->doRPCRequest('DescribePreCheckResult', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRdsCommodityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRdsCommodityResponse
     */
    public function describeRdsCommodityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRdsCommodityResponse::fromMap($this->doRPCRequest('DescribeRdsCommodity', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRDSPerformanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRDSPerformanceResponse
     */
    public function describeRDSPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRDSPerformanceResponse::fromMap($this->doRPCRequest('DescribeRDSPerformance', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRdsPerformanceSummaryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRdsPerformanceSummaryResponse
     */
    public function describeRdsPerformanceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRdsPerformanceSummaryResponse::fromMap($this->doRPCRequest('DescribeRdsPerformanceSummary', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRdsSuperAccountInstancesResponse::fromMap($this->doRPCRequest('DescribeRdsSuperAccountInstances', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRestoreOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRestoreOrderResponse
     */
    public function describeRestoreOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRestoreOrderResponse::fromMap($this->doRPCRequest('DescribeRestoreOrder', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeShardTaskInfoResponse::fromMap($this->doRPCRequest('DescribeShardTaskInfo', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSqlFlashbakTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSqlFlashbakTaskResponse
     */
    public function describeSqlFlashbakTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSqlFlashbakTaskResponse::fromMap($this->doRPCRequest('DescribeSqlFlashbakTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTableResponse::fromMap($this->doRPCRequest('DescribeTable', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTableListByTypeResponse::fromMap($this->doRPCRequest('DescribeTableListByType', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTablesResponse::fromMap($this->doRPCRequest('DescribeTables', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableSqlAuditResponse::fromMap($this->doRPCRequest('DisableSqlAudit', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EnableSqlAuditRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableSqlAuditResponse
     */
    public function enableSqlAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSqlAuditResponse::fromMap($this->doRPCRequest('EnableSqlAudit', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableSqlFlashbackMatchSwitchResponse::fromMap($this->doRPCRequest('EnableSqlFlashbackMatchSwitch', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ManagePrivateRdsResponse::fromMap($this->doRPCRequest('ManagePrivateRds', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDrdsInstanceDescriptionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyDrdsInstanceDescriptionResponse
     */
    public function modifyDrdsInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDrdsInstanceDescriptionResponse::fromMap($this->doRPCRequest('ModifyDrdsInstanceDescription', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDrdsIpWhiteListResponse::fromMap($this->doRPCRequest('ModifyDrdsIpWhiteList', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyRdsReadWeightRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyRdsReadWeightResponse
     */
    public function modifyRdsReadWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRdsReadWeightResponse::fromMap($this->doRPCRequest('ModifyRdsReadWeight', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutStartBackupResponse::fromMap($this->doRPCRequest('PutStartBackup', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReleaseInstanceInternetAddressRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseInstanceInternetAddressResponse
     */
    public function releaseInstanceInternetAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseInstanceInternetAddressResponse::fromMap($this->doRPCRequest('ReleaseInstanceInternetAddress', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveBackupsSetResponse::fromMap($this->doRPCRequest('RemoveBackupsSet', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveDrdsDbResponse::fromMap($this->doRPCRequest('RemoveDrdsDb', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveDrdsDbFailedRecordResponse::fromMap($this->doRPCRequest('RemoveDrdsDbFailedRecord', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveDrdsInstanceResponse::fromMap($this->doRPCRequest('RemoveDrdsInstance', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveInstanceAccountResponse::fromMap($this->doRPCRequest('RemoveInstanceAccount', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetBackupLocalRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetBackupLocalResponse
     */
    public function setBackupLocalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetBackupLocalResponse::fromMap($this->doRPCRequest('SetBackupLocal', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetBackupPolicyResponse::fromMap($this->doRPCRequest('SetBackupPolicy', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetupBroadcastTablesResponse::fromMap($this->doRPCRequest('SetupBroadcastTables', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetupDrdsParamsResponse::fromMap($this->doRPCRequest('SetupDrdsParams', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetupTableRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetupTableResponse
     */
    public function setupTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetupTableResponse::fromMap($this->doRPCRequest('SetupTable', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRestoreResponse::fromMap($this->doRPCRequest('StartRestore', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitCleanTaskResponse::fromMap($this->doRPCRequest('SubmitCleanTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitHotExpandPreCheckTaskResponse::fromMap($this->doRPCRequest('SubmitHotExpandPreCheckTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitHotExpandTaskResponse::fromMap($this->doRPCRequest('SubmitHotExpandTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSmoothExpandPreCheckResponse::fromMap($this->doRPCRequest('SubmitSmoothExpandPreCheck', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSmoothExpandPreCheckTaskResponse::fromMap($this->doRPCRequest('SubmitSmoothExpandPreCheckTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitSmoothExpandTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSmoothExpandTaskResponse
     */
    public function submitSmoothExpandTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSmoothExpandTaskResponse::fromMap($this->doRPCRequest('SubmitSmoothExpandTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitSmoothExpandTaskRequest $request
     *
     * @return SubmitSmoothExpandTaskResponse
     */
    public function submitSmoothExpandTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmoothExpandTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSqlFlashbackTaskResponse::fromMap($this->doRPCRequest('SubmitSqlFlashbackTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SubmitSwitchTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitSwitchTaskResponse
     */
    public function submitSwitchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitSwitchTaskResponse::fromMap($this->doRPCRequest('SubmitSwitchTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitSwitchTaskRequest $request
     *
     * @return SubmitSwitchTaskResponse
     */
    public function submitSwitchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSwitchTaskWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SwitchGlobalBroadcastTypeResponse::fromMap($this->doRPCRequest('SwitchGlobalBroadcastType', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceNetworkResponse::fromMap($this->doRPCRequest('UpdateInstanceNetwork', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpgradeHiStoreInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeHiStoreInstanceResponse
     */
    public function upgradeHiStoreInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeHiStoreInstanceResponse::fromMap($this->doRPCRequest('UpgradeHiStoreInstance', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeInstanceVersionResponse::fromMap($this->doRPCRequest('UpgradeInstanceVersion', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ValidateShardTaskResponse::fromMap($this->doRPCRequest('ValidateShardTask', '2019-01-23', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
