<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Adb\V20190315\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\AllocateClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\BindDBResourcePoolWithUserRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\BindDBResourcePoolWithUserResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\CreateElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DeleteElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllAccountsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllAccountsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterNetInfoRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterNetInfoResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeInclinedTablesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLoadTasksRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSchemasResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSlowLogTrendResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablePartitionDiagnoseResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableStatisticsResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTaskInfoRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTaskInfoResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\GrantOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\GrantOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\KillProcessRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\KillProcessResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAuditLogConfigRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAuditLogConfigResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyClusterConnectionStringRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyClusterConnectionStringResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterResourceGroupRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterResourceGroupResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourcePoolRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyDBResourcePoolResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyElasticPlanRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyElasticPlanResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogBackupPolicyRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ModifyLogBackupPolicyResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ReleaseClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ReleaseClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\RevokeOperatorPermissionRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\RevokeOperatorPermissionResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\UnbindDBResourcePoolWithUserRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\UnbindDBResourcePoolWithUserResponse;
use AlibabaCloud\SDK\Adb\V20190315\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Adb\V20190315\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Adb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'adb.aliyuncs.com',
            'cn-beijing'                  => 'adb.aliyuncs.com',
            'cn-hangzhou'                 => 'adb.aliyuncs.com',
            'cn-shanghai'                 => 'adb.aliyuncs.com',
            'cn-shenzhen'                 => 'adb.aliyuncs.com',
            'cn-hongkong'                 => 'adb.aliyuncs.com',
            'ap-southeast-1'              => 'adb.aliyuncs.com',
            'us-west-1'                   => 'adb.aliyuncs.com',
            'us-east-1'                   => 'adb.aliyuncs.com',
            'cn-hangzhou-finance'         => 'adb.aliyuncs.com',
            'cn-north-2-gov-1'            => 'adb.aliyuncs.com',
            'ap-northeast-2-pop'          => 'adb.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'adb.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'adb.aliyuncs.com',
            'cn-beijing-gov-1'            => 'adb.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'adb.aliyuncs.com',
            'cn-edge-1'                   => 'adb.aliyuncs.com',
            'cn-fujian'                   => 'adb.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'adb.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'adb.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'adb.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'adb.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'adb.aliyuncs.com',
            'cn-qingdao-nebula'           => 'adb.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'adb.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'adb.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'adb.aliyuncs.com',
            'cn-shanghai-inner'           => 'adb.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'adb.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'adb.aliyuncs.com',
            'cn-shenzhen-inner'           => 'adb.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'adb.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'adb.aliyuncs.com',
            'cn-wuhan'                    => 'adb.aliyuncs.com',
            'cn-yushanfang'               => 'adb.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'adb.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'adb.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'adb.aliyuncs.com',
            'eu-west-1-oxs'               => 'adb.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'adb.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'adb.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('adb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AllocateClusterPublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AllocateClusterPublicConnectionResponse
     */
    public function allocateClusterPublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateClusterPublicConnectionResponse::fromMap($this->doRPCRequest('AllocateClusterPublicConnection', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateClusterPublicConnectionRequest $request
     *
     * @return AllocateClusterPublicConnectionResponse
     */
    public function allocateClusterPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateClusterPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param BindDBResourcePoolWithUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BindDBResourcePoolWithUserResponse
     */
    public function bindDBResourcePoolWithUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindDBResourcePoolWithUserResponse::fromMap($this->doRPCRequest('BindDBResourcePoolWithUser', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindDBResourcePoolWithUserRequest $request
     *
     * @return BindDBResourcePoolWithUserResponse
     */
    public function bindDBResourcePoolWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDBResourcePoolWithUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccountResponse::fromMap($this->doRPCRequest('CreateAccount', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDBClusterResponse
     */
    public function createDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBClusterResponse::fromMap($this->doRPCRequest('CreateDBCluster', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBClusterRequest $request
     *
     * @return CreateDBClusterResponse
     */
    public function createDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBResourcePoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDBResourcePoolResponse
     */
    public function createDBResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBResourcePoolResponse::fromMap($this->doRPCRequest('CreateDBResourcePool', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBResourcePoolRequest $request
     *
     * @return CreateDBResourcePoolResponse
     */
    public function createDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param CreateElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateElasticPlanResponse
     */
    public function createElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateElasticPlanResponse::fromMap($this->doRPCRequest('CreateElasticPlan', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateElasticPlanRequest $request
     *
     * @return CreateElasticPlanResponse
     */
    public function createElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAccountResponse::fromMap($this->doRPCRequest('DeleteAccount', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBClusterResponse::fromMap($this->doRPCRequest('DeleteDBCluster', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBClusterRequest $request
     *
     * @return DeleteDBClusterResponse
     */
    public function deleteDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDBResourcePoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDBResourcePoolResponse
     */
    public function deleteDBResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDBResourcePoolResponse::fromMap($this->doRPCRequest('DeleteDBResourcePool', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDBResourcePoolRequest $request
     *
     * @return DeleteDBResourcePoolResponse
     */
    public function deleteDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param DeleteElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteElasticPlanResponse
     */
    public function deleteElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteElasticPlanResponse::fromMap($this->doRPCRequest('DeleteElasticPlan', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteElasticPlanRequest $request
     *
     * @return DeleteElasticPlanResponse
     */
    public function deleteElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountsRequest $request
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllAccountsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAllAccountsResponse
     */
    public function describeAllAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllAccountsResponse::fromMap($this->doRPCRequest('DescribeAllAccounts', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllAccountsRequest $request
     *
     * @return DescribeAllAccountsResponse
     */
    public function describeAllAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllDataSourceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAllDataSourceResponse
     */
    public function describeAllDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllDataSourceResponse::fromMap($this->doRPCRequest('DescribeAllDataSource', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllDataSourceRequest $request
     *
     * @return DescribeAllDataSourceResponse
     */
    public function describeAllDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditLogConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditLogConfigResponse::fromMap($this->doRPCRequest('DescribeAuditLogConfig', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditLogConfigRequest $request
     *
     * @return DescribeAuditLogConfigResponse
     */
    public function describeAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditLogRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAuditLogRecordsResponse
     */
    public function describeAuditLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditLogRecordsResponse::fromMap($this->doRPCRequest('DescribeAuditLogRecords', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditLogRecordsRequest $request
     *
     * @return DescribeAuditLogRecordsResponse
     */
    public function describeAuditLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoRenewAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoRenewAttributeResponse::fromMap($this->doRPCRequest('DescribeAutoRenewAttribute', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoRenewAttributeRequest $request
     *
     * @return DescribeAutoRenewAttributeResponse
     */
    public function describeAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
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

        return DescribeBackupPolicyResponse::fromMap($this->doRPCRequest('DescribeBackupPolicy', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupsRequest $request
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeColumnsResponse::fromMap($this->doRPCRequest('DescribeColumns', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeColumnsRequest $request
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConnectionCountRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeConnectionCountRecordsResponse
     */
    public function describeConnectionCountRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConnectionCountRecordsResponse::fromMap($this->doRPCRequest('DescribeConnectionCountRecords', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConnectionCountRecordsRequest $request
     *
     * @return DescribeConnectionCountRecordsResponse
     */
    public function describeConnectionCountRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectionCountRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBClusterAccessWhiteListResponse
     */
    public function describeDBClusterAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterAccessWhiteListResponse::fromMap($this->doRPCRequest('DescribeDBClusterAccessWhiteList', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterAccessWhiteListRequest $request
     *
     * @return DescribeDBClusterAccessWhiteListResponse
     */
    public function describeDBClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterAttributeResponse::fromMap($this->doRPCRequest('DescribeDBClusterAttribute', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterAttributeRequest $request
     *
     * @return DescribeDBClusterAttributeResponse
     */
    public function describeDBClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterNetInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDBClusterNetInfoResponse
     */
    public function describeDBClusterNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterNetInfoResponse::fromMap($this->doRPCRequest('DescribeDBClusterNetInfo', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterNetInfoRequest $request
     *
     * @return DescribeDBClusterNetInfoResponse
     */
    public function describeDBClusterNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNetInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterPerformanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterPerformanceResponse::fromMap($this->doRPCRequest('DescribeDBClusterPerformance', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterPerformanceRequest $request
     *
     * @return DescribeDBClusterPerformanceResponse
     */
    public function describeDBClusterPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterResourcePoolPerformanceRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeDBClusterResourcePoolPerformanceResponse
     */
    public function describeDBClusterResourcePoolPerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterResourcePoolPerformanceResponse::fromMap($this->doRPCRequest('DescribeDBClusterResourcePoolPerformance', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterResourcePoolPerformanceRequest $request
     *
     * @return DescribeDBClusterResourcePoolPerformanceResponse
     */
    public function describeDBClusterResourcePoolPerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterResourcePoolPerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClustersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClustersResponse::fromMap($this->doRPCRequest('DescribeDBClusters', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClustersRequest $request
     *
     * @return DescribeDBClustersResponse
     */
    public function describeDBClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBResourcePoolRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDBResourcePoolResponse
     */
    public function describeDBResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBResourcePoolResponse::fromMap($this->doRPCRequest('DescribeDBResourcePool', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBResourcePoolRequest $request
     *
     * @return DescribeDBResourcePoolResponse
     */
    public function describeDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param DescribeElasticDailyPlanRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeElasticDailyPlanResponse
     */
    public function describeElasticDailyPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeElasticDailyPlanResponse::fromMap($this->doRPCRequest('DescribeElasticDailyPlan', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeElasticDailyPlanRequest $request
     *
     * @return DescribeElasticDailyPlanResponse
     */
    public function describeElasticDailyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticDailyPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeElasticPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeElasticPlanResponse
     */
    public function describeElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeElasticPlanResponse::fromMap($this->doRPCRequest('DescribeElasticPlan', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeElasticPlanRequest $request
     *
     * @return DescribeElasticPlanResponse
     */
    public function describeElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInclinedTablesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInclinedTablesResponse
     */
    public function describeInclinedTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInclinedTablesResponse::fromMap($this->doRPCRequest('DescribeInclinedTables', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInclinedTablesRequest $request
     *
     * @return DescribeInclinedTablesResponse
     */
    public function describeInclinedTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInclinedTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadTasksRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLoadTasksRecordsResponse
     */
    public function describeLoadTasksRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoadTasksRecordsResponse::fromMap($this->doRPCRequest('DescribeLoadTasksRecords', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLoadTasksRecordsRequest $request
     *
     * @return DescribeLoadTasksRecordsResponse
     */
    public function describeLoadTasksRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadTasksRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOperatorPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeOperatorPermissionResponse
     */
    public function describeOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOperatorPermissionResponse::fromMap($this->doRPCRequest('DescribeOperatorPermission', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOperatorPermissionRequest $request
     *
     * @return DescribeOperatorPermissionResponse
     */
    public function describeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProcessListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeProcessListResponse
     */
    public function describeProcessListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProcessListResponse::fromMap($this->doRPCRequest('DescribeProcessList', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProcessListRequest $request
     *
     * @return DescribeProcessListResponse
     */
    public function describeProcessList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProcessListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSchemasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSchemasResponse
     */
    public function describeSchemasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSchemasResponse::fromMap($this->doRPCRequest('DescribeSchemas', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSchemasRequest $request
     *
     * @return DescribeSchemasResponse
     */
    public function describeSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSchemasWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSlowLogRecords', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlowLogRecordsRequest $request
     *
     * @return DescribeSlowLogRecordsResponse
     */
    public function describeSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowLogTrendRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSlowLogTrendResponse::fromMap($this->doRPCRequest('DescribeSlowLogTrend', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSlowLogTrendRequest $request
     *
     * @return DescribeSlowLogTrendResponse
     */
    public function describeSlowLogTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowLogTrendWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLPlanRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSQLPlanResponse
     */
    public function describeSQLPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLPlanResponse::fromMap($this->doRPCRequest('DescribeSQLPlan', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSQLPlanRequest $request
     *
     * @return DescribeSQLPlanResponse
     */
    public function describeSQLPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLPlanTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLPlanTaskResponse
     */
    public function describeSQLPlanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSQLPlanTaskResponse::fromMap($this->doRPCRequest('DescribeSQLPlanTask', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSQLPlanTaskRequest $request
     *
     * @return DescribeSQLPlanTaskResponse
     */
    public function describeSQLPlanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlanTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTableDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTableDetailResponse
     */
    public function describeTableDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTableDetailResponse::fromMap($this->doRPCRequest('DescribeTableDetail', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTableDetailRequest $request
     *
     * @return DescribeTableDetailResponse
     */
    public function describeTableDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTablePartitionDiagnoseRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnoseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTablePartitionDiagnoseResponse::fromMap($this->doRPCRequest('DescribeTablePartitionDiagnose', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTablePartitionDiagnoseRequest $request
     *
     * @return DescribeTablePartitionDiagnoseResponse
     */
    public function describeTablePartitionDiagnose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablePartitionDiagnoseWithOptions($request, $runtime);
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

        return DescribeTablesResponse::fromMap($this->doRPCRequest('DescribeTables', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeTableStatisticsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTableStatisticsResponse
     */
    public function describeTableStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTableStatisticsResponse::fromMap($this->doRPCRequest('DescribeTableStatistics', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTableStatisticsRequest $request
     *
     * @return DescribeTableStatisticsResponse
     */
    public function describeTableStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTableStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTaskInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTaskInfoResponse::fromMap($this->doRPCRequest('DescribeTaskInfo', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTaskInfoRequest $request
     *
     * @return DescribeTaskInfoResponse
     */
    public function describeTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param GrantOperatorPermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantOperatorPermissionResponse::fromMap($this->doRPCRequest('GrantOperatorPermission', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantOperatorPermissionRequest $request
     *
     * @return GrantOperatorPermissionResponse
     */
    public function grantOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantOperatorPermissionWithOptions($request, $runtime);
    }

    /**
     * @param KillProcessRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return KillProcessResponse
     */
    public function killProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return KillProcessResponse::fromMap($this->doRPCRequest('KillProcess', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param KillProcessRequest $request
     *
     * @return KillProcessResponse
     */
    public function killProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killProcessWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAccountDescriptionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAccountDescriptionResponse
     */
    public function modifyAccountDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountDescriptionResponse::fromMap($this->doRPCRequest('ModifyAccountDescription', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAuditLogConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAuditLogConfigResponse::fromMap($this->doRPCRequest('ModifyAuditLogConfig', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAuditLogConfigRequest $request
     *
     * @return ModifyAuditLogConfigResponse
     */
    public function modifyAuditLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAuditLogConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAutoRenewAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAutoRenewAttributeResponse::fromMap($this->doRPCRequest('ModifyAutoRenewAttribute', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAutoRenewAttributeRequest $request
     *
     * @return ModifyAutoRenewAttributeResponse
     */
    public function modifyAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyBackupPolicy', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupPolicyRequest $request
     *
     * @return ModifyBackupPolicyResponse
     */
    public function modifyBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterConnectionStringRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyClusterConnectionStringResponse
     */
    public function modifyClusterConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterConnectionStringResponse::fromMap($this->doRPCRequest('ModifyClusterConnectionString', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyClusterConnectionStringRequest $request
     *
     * @return ModifyClusterConnectionStringResponse
     */
    public function modifyClusterConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterResponse::fromMap($this->doRPCRequest('ModifyDBCluster', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterRequest $request
     *
     * @return ModifyDBClusterResponse
     */
    public function modifyDBCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterAccessWhiteListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBClusterAccessWhiteListResponse
     */
    public function modifyDBClusterAccessWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterAccessWhiteListResponse::fromMap($this->doRPCRequest('ModifyDBClusterAccessWhiteList', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterAccessWhiteListRequest $request
     *
     * @return ModifyDBClusterAccessWhiteListResponse
     */
    public function modifyDBClusterAccessWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterAccessWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterDescriptionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBClusterDescription', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterDescriptionRequest $request
     *
     * @return ModifyDBClusterDescriptionResponse
     */
    public function modifyDBClusterDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterMaintainTimeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyDBClusterMaintainTime', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterMaintainTimeRequest $request
     *
     * @return ModifyDBClusterMaintainTimeResponse
     */
    public function modifyDBClusterMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBClusterResourceGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterResourceGroupResponse::fromMap($this->doRPCRequest('ModifyDBClusterResourceGroup', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterResourceGroupRequest $request
     *
     * @return ModifyDBClusterResourceGroupResponse
     */
    public function modifyDBClusterResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBResourcePoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDBResourcePoolResponse
     */
    public function modifyDBResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBResourcePoolResponse::fromMap($this->doRPCRequest('ModifyDBResourcePool', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBResourcePoolRequest $request
     *
     * @return ModifyDBResourcePoolResponse
     */
    public function modifyDBResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param ModifyElasticPlanRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyElasticPlanResponse
     */
    public function modifyElasticPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyElasticPlanResponse::fromMap($this->doRPCRequest('ModifyElasticPlan', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyElasticPlanRequest $request
     *
     * @return ModifyElasticPlanResponse
     */
    public function modifyElasticPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyElasticPlanWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLogBackupPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLogBackupPolicyResponse::fromMap($this->doRPCRequest('ModifyLogBackupPolicy', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyLogBackupPolicyRequest $request
     *
     * @return ModifyLogBackupPolicyResponse
     */
    public function modifyLogBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogBackupPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseClusterPublicConnectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseClusterPublicConnectionResponse::fromMap($this->doRPCRequest('ReleaseClusterPublicConnection', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseClusterPublicConnectionRequest $request
     *
     * @return ReleaseClusterPublicConnectionResponse
     */
    public function releaseClusterPublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterPublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetAccountPasswordResponse::fromMap($this->doRPCRequest('ResetAccountPassword', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RevokeOperatorPermissionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeOperatorPermissionResponse::fromMap($this->doRPCRequest('RevokeOperatorPermission', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeOperatorPermissionRequest $request
     *
     * @return RevokeOperatorPermissionResponse
     */
    public function revokeOperatorPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeOperatorPermissionWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnbindDBResourcePoolWithUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UnbindDBResourcePoolWithUserResponse
     */
    public function unbindDBResourcePoolWithUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindDBResourcePoolWithUserResponse::fromMap($this->doRPCRequest('UnbindDBResourcePoolWithUser', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindDBResourcePoolWithUserRequest $request
     *
     * @return UnbindDBResourcePoolWithUserResponse
     */
    public function unbindDBResourcePoolWithUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDBResourcePoolWithUserWithOptions($request, $runtime);
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-03-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
