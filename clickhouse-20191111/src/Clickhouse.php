<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\AllocateClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\AllocateClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountAndAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountAndAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteDBClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteDBClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteLorneTaskRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DeleteLorneTaskResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAllDataSourcesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterNetInfoItemsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogHubAttributeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogHubAttributeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLoghubDetailResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogStoreKeysRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogStoreKeysResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneLogRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneLogResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksMCountRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksMCountResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksMetricsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksMetricsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSchemasRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSchemasResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeSlowLogTrendResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\KillProcessRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\KillProcessResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountAuthorityRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountAuthorityResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterAccessWhiteListRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterAccessWhiteListResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterDescriptionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterDescriptionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterMaintainTimeRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterMaintainTimeResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBClusterResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBConfigRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ModifyDBConfigResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\OperateLogHubRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\OperateLogHubResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\OperateLorneTaskStatusRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\OperateLorneTaskStatusResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ReleaseClusterPublicConnectionRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ReleaseClusterPublicConnectionResponse;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\ResetAccountPasswordResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Clickhouse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'clickhouse.aliyuncs.com',
            'ap-southeast-1'              => 'clickhouse.aliyuncs.com',
            'cn-beijing'                  => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-1'        => 'clickhouse.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'clickhouse.aliyuncs.com',
            'cn-beijing-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'clickhouse.aliyuncs.com',
            'cn-edge-1'                   => 'clickhouse.aliyuncs.com',
            'cn-fujian'                   => 'clickhouse.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou'                 => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-finance'         => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'clickhouse.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'clickhouse.aliyuncs.com',
            'cn-hongkong'                 => 'clickhouse.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'clickhouse.aliyuncs.com',
            'cn-north-2-gov-1'            => 'clickhouse.aliyuncs.com',
            'cn-qingdao'                  => 'clickhouse.aliyuncs.com',
            'cn-qingdao-nebula'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai'                 => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'clickhouse.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'clickhouse.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shanghai-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'clickhouse.aliyuncs.com',
            'cn-shenzhen'                 => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-inner'           => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'clickhouse.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'clickhouse.aliyuncs.com',
            'cn-wuhan'                    => 'clickhouse.aliyuncs.com',
            'cn-yushanfang'               => 'clickhouse.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'clickhouse.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'clickhouse.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'clickhouse.aliyuncs.com',
            'eu-west-1-oxs'               => 'clickhouse.aliyuncs.com',
            'me-east-1'                   => 'clickhouse.aliyuncs.com',
            'rus-west-1-pop'              => 'clickhouse.aliyuncs.com',
            'us-east-1'                   => 'clickhouse.aliyuncs.com',
            'us-west-1'                   => 'clickhouse.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('clickhouse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

        return AllocateClusterPublicConnectionResponse::fromMap($this->doRPCRequest('AllocateClusterPublicConnection', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CheckScaleOutBalancedRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckScaleOutBalancedResponse
     */
    public function checkScaleOutBalancedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckScaleOutBalancedResponse::fromMap($this->doRPCRequest('CheckScaleOutBalanced', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckScaleOutBalancedRequest $request
     *
     * @return CheckScaleOutBalancedResponse
     */
    public function checkScaleOutBalanced($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkScaleOutBalancedWithOptions($request, $runtime);
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckServiceLinkedRoleResponse::fromMap($this->doRPCRequest('CheckServiceLinkedRole', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckServiceLinkedRoleRequest $request
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkServiceLinkedRoleWithOptions($request, $runtime);
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

        return CreateAccountResponse::fromMap($this->doRPCRequest('CreateAccount', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateAccountAndAuthorityRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAccountAndAuthorityResponse
     */
    public function createAccountAndAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAccountAndAuthorityResponse::fromMap($this->doRPCRequest('CreateAccountAndAuthority', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAccountAndAuthorityRequest $request
     *
     * @return CreateAccountAndAuthorityResponse
     */
    public function createAccountAndAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountAndAuthorityWithOptions($request, $runtime);
    }

    /**
     * @param CreateDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDBInstanceResponse::fromMap($this->doRPCRequest('CreateDBInstance', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDBInstanceRequest $request
     *
     * @return CreateDBInstanceResponse
     */
    public function createDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->doRPCRequest('CreateServiceLinkedRole', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
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

        return DeleteAccountResponse::fromMap($this->doRPCRequest('DeleteAccount', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DeleteDBClusterResponse::fromMap($this->doRPCRequest('DeleteDBCluster', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLorneTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteLorneTaskResponse
     */
    public function deleteLorneTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLorneTaskResponse::fromMap($this->doRPCRequest('DeleteLorneTask', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLorneTaskRequest $request
     *
     * @return DeleteLorneTaskResponse
     */
    public function deleteLorneTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLorneTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountAuthorityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountAuthorityResponse::fromMap($this->doRPCRequest('DescribeAccountAuthority', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountAuthorityRequest $request
     *
     * @return DescribeAccountAuthorityResponse
     */
    public function describeAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAuthorityWithOptions($request, $runtime);
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

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeAllDataSourceResponse::fromMap($this->doRPCRequest('DescribeAllDataSource', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAllDataSourcesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAllDataSourcesResponse
     */
    public function describeAllDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllDataSourcesResponse::fromMap($this->doRPCRequest('DescribeAllDataSources', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllDataSourcesRequest $request
     *
     * @return DescribeAllDataSourcesResponse
     */
    public function describeAllDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllDataSourcesWithOptions($request, $runtime);
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

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeColumnsResponse::fromMap($this->doRPCRequest('DescribeColumns', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeDBClusterAccessWhiteListResponse::fromMap($this->doRPCRequest('DescribeDBClusterAccessWhiteList', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeDBClusterAttributeResponse::fromMap($this->doRPCRequest('DescribeDBClusterAttribute', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBClusterConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterConfigResponse::fromMap($this->doRPCRequest('DescribeDBClusterConfig', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterConfigRequest $request
     *
     * @return DescribeDBClusterConfigResponse
     */
    public function describeDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBClusterNetInfoItemsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBClusterNetInfoItemsResponse
     */
    public function describeDBClusterNetInfoItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBClusterNetInfoItemsResponse::fromMap($this->doRPCRequest('DescribeDBClusterNetInfoItems', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBClusterNetInfoItemsRequest $request
     *
     * @return DescribeDBClusterNetInfoItemsResponse
     */
    public function describeDBClusterNetInfoItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBClusterNetInfoItemsWithOptions($request, $runtime);
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

        return DescribeDBClusterPerformanceResponse::fromMap($this->doRPCRequest('DescribeDBClusterPerformance', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeDBClustersResponse::fromMap($this->doRPCRequest('DescribeDBClusters', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDBConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDBConfigResponse
     */
    public function describeDBConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDBConfigResponse::fromMap($this->doRPCRequest('DescribeDBConfig', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDBConfigRequest $request
     *
     * @return DescribeDBConfigResponse
     */
    public function describeDBConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogHubAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeLogHubAttributeResponse
     */
    public function describeLogHubAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogHubAttributeResponse::fromMap($this->doRPCRequest('DescribeLogHubAttribute', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLogHubAttributeRequest $request
     *
     * @return DescribeLogHubAttributeResponse
     */
    public function describeLogHubAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogHubAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoghubDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLoghubDetailResponse
     */
    public function describeLoghubDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLoghubDetailResponse::fromMap($this->doRPCRequest('DescribeLoghubDetail', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLoghubDetailRequest $request
     *
     * @return DescribeLoghubDetailResponse
     */
    public function describeLoghubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoghubDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogStoreKeysRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeLogStoreKeysResponse
     */
    public function describeLogStoreKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLogStoreKeysResponse::fromMap($this->doRPCRequest('DescribeLogStoreKeys', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLogStoreKeysRequest $request
     *
     * @return DescribeLogStoreKeysResponse
     */
    public function describeLogStoreKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreKeysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLorneLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeLorneLogResponse
     */
    public function describeLorneLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLorneLogResponse::fromMap($this->doRPCRequest('DescribeLorneLog', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLorneLogRequest $request
     *
     * @return DescribeLorneLogResponse
     */
    public function describeLorneLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLorneLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLorneTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLorneTasksResponse
     */
    public function describeLorneTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLorneTasksResponse::fromMap($this->doRPCRequest('DescribeLorneTasks', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLorneTasksRequest $request
     *
     * @return DescribeLorneTasksResponse
     */
    public function describeLorneTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLorneTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLorneTasksMCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLorneTasksMCountResponse
     */
    public function describeLorneTasksMCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLorneTasksMCountResponse::fromMap($this->doRPCRequest('DescribeLorneTasksMCount', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLorneTasksMCountRequest $request
     *
     * @return DescribeLorneTasksMCountResponse
     */
    public function describeLorneTasksMCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLorneTasksMCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLorneTasksMetricsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLorneTasksMetricsResponse
     */
    public function describeLorneTasksMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLorneTasksMetricsResponse::fromMap($this->doRPCRequest('DescribeLorneTasksMetrics', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLorneTasksMetricsRequest $request
     *
     * @return DescribeLorneTasksMetricsResponse
     */
    public function describeLorneTasksMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLorneTasksMetricsWithOptions($request, $runtime);
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

        return DescribeProcessListResponse::fromMap($this->doRPCRequest('DescribeProcessList', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeSchemasResponse::fromMap($this->doRPCRequest('DescribeSchemas', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeSlowLogRecordsResponse::fromMap($this->doRPCRequest('DescribeSlowLogRecords', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeSlowLogTrendResponse::fromMap($this->doRPCRequest('DescribeSlowLogTrend', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeTablesResponse::fromMap($this->doRPCRequest('DescribeTables', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return KillProcessResponse::fromMap($this->doRPCRequest('KillProcess', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAccountAuthorityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthorityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountAuthorityResponse::fromMap($this->doRPCRequest('ModifyAccountAuthority', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccountAuthorityRequest $request
     *
     * @return ModifyAccountAuthorityResponse
     */
    public function modifyAccountAuthority($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountAuthorityWithOptions($request, $runtime);
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

        return ModifyAccountDescriptionResponse::fromMap($this->doRPCRequest('ModifyAccountDescription', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyDBClusterResponse::fromMap($this->doRPCRequest('ModifyDBCluster', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyDBClusterAccessWhiteListResponse::fromMap($this->doRPCRequest('ModifyDBClusterAccessWhiteList', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDBClusterConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBClusterConfigResponse::fromMap($this->doRPCRequest('ModifyDBClusterConfig', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBClusterConfigRequest $request
     *
     * @return ModifyDBClusterConfigResponse
     */
    public function modifyDBClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBClusterConfigWithOptions($request, $runtime);
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

        return ModifyDBClusterDescriptionResponse::fromMap($this->doRPCRequest('ModifyDBClusterDescription', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyDBClusterMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyDBClusterMaintainTime', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyDBConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDBConfigResponse
     */
    public function modifyDBConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBConfigResponse::fromMap($this->doRPCRequest('ModifyDBConfig', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBConfigRequest $request
     *
     * @return ModifyDBConfigResponse
     */
    public function modifyDBConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBConfigWithOptions($request, $runtime);
    }

    /**
     * @param OperateLogHubRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OperateLogHubResponse
     */
    public function operateLogHubWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperateLogHubResponse::fromMap($this->doRPCRequest('OperateLogHub', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OperateLogHubRequest $request
     *
     * @return OperateLogHubResponse
     */
    public function operateLogHub($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateLogHubWithOptions($request, $runtime);
    }

    /**
     * @param OperateLorneTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OperateLorneTaskStatusResponse
     */
    public function operateLorneTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OperateLorneTaskStatusResponse::fromMap($this->doRPCRequest('OperateLorneTaskStatus', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OperateLorneTaskStatusRequest $request
     *
     * @return OperateLorneTaskStatusResponse
     */
    public function operateLorneTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateLorneTaskStatusWithOptions($request, $runtime);
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

        return ReleaseClusterPublicConnectionResponse::fromMap($this->doRPCRequest('ReleaseClusterPublicConnection', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ResetAccountPasswordResponse::fromMap($this->doRPCRequest('ResetAccountPassword', '2019-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
