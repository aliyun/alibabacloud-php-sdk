<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddBuDBInstanceRelationRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AddBuDBInstanceRelationResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\AllocateInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CheckServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateECSDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateECSDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DeleteDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceIPArrayListResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceOnECSAttributeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceOnECSAttributeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePerformanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancePerformanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSSLRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceSSLResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeModifyParameterLogResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeResourceUsageRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeResourceUsageResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSlowLogRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogCountResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogFilesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogFilesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogRecordsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogRecordsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyAccountDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionModeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionModeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceConnectionStringResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceDescriptionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceSSLRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyDBInstanceSSLResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifySQLCollectorPolicyResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ReleaseInstancePublicConnectionResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RestartDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\RestartDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SwitchDBInstanceNetTypeRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\SwitchDBInstanceNetTypeResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBInstanceRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBInstanceResponse;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBVersionRequest;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpgradeDBVersionResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Gpdb extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'gpdb.aliyuncs.com',
            'cn-hangzhou'           => 'gpdb.aliyuncs.com',
            'cn-shanghai'           => 'gpdb.aliyuncs.com',
            'cn-shenzhen'           => 'gpdb.aliyuncs.com',
            'cn-hongkong'           => 'gpdb.aliyuncs.com',
            'ap-southeast-1'        => 'gpdb.aliyuncs.com',
            'us-west-1'             => 'gpdb.aliyuncs.com',
            'us-east-1'             => 'gpdb.aliyuncs.com',
            'cn-hangzhou-finance'   => 'gpdb.aliyuncs.com',
            'cn-shanghai-finance-1' => 'gpdb.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'gpdb.aliyuncs.com',
            'cn-qingdao'            => 'gpdb.aliyuncs.com',
            'cn-north-2-gov-1'      => 'gpdb.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gpdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribeModifyParameterLogRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeModifyParameterLogResponse::fromMap($this->doRequest('DescribeModifyParameterLog', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeModifyParameterLogRequest $request
     *
     * @return DescribeModifyParameterLogResponse
     */
    public function describeModifyParameterLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModifyParameterLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeParametersResponse::fromMap($this->doRequest('DescribeParameters', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeParametersRequest $request
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParametersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyParametersResponse
     */
    public function modifyParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyParametersResponse::fromMap($this->doRequest('ModifyParameters', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyParametersRequest $request
     *
     * @return ModifyParametersResponse
     */
    public function modifyParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParametersWithOptions($request, $runtime);
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

        return CreateServiceLinkedRoleResponse::fromMap($this->doRequest('CreateServiceLinkedRole', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CheckServiceLinkedRoleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CheckServiceLinkedRoleResponse
     */
    public function checkServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckServiceLinkedRoleResponse::fromMap($this->doRequest('CheckServiceLinkedRole', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeSQLLogCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLLogCountResponse
     */
    public function describeSQLLogCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogCountResponse::fromMap($this->doRequest('DescribeSQLLogCount', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSQLLogCountRequest $request
     *
     * @return DescribeSQLLogCountResponse
     */
    public function describeSQLLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogCountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeSQLLogsResponse
     */
    public function describeSQLLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogsResponse::fromMap($this->doRequest('DescribeSQLLogs', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSQLLogsRequest $request
     *
     * @return DescribeSQLLogsResponse
     */
    public function describeSQLLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogsWithOptions($request, $runtime);
    }

    /**
     * @param CreateECSDBInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateECSDBInstanceResponse
     */
    public function createECSDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateECSDBInstanceResponse::fromMap($this->doRequest('CreateECSDBInstance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateECSDBInstanceRequest $request
     *
     * @return CreateECSDBInstanceResponse
     */
    public function createECSDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createECSDBInstanceWithOptions($request, $runtime);
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

        return DescribeDBClusterPerformanceResponse::fromMap($this->doRequest('DescribeDBClusterPerformance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDBInstanceOnECSAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDBInstanceOnECSAttributeResponse
     */
    public function describeDBInstanceOnECSAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceOnECSAttributeResponse::fromMap($this->doRequest('DescribeDBInstanceOnECSAttribute', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstanceOnECSAttributeRequest $request
     *
     * @return DescribeDBInstanceOnECSAttributeResponse
     */
    public function describeDBInstanceOnECSAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceOnECSAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAvailableResourcesResponse
     */
    public function describeAvailableResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAvailableResourcesResponse::fromMap($this->doRequest('DescribeAvailableResources', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeAvailableResourcesRequest $request
     *
     * @return DescribeAvailableResourcesResponse
     */
    public function describeAvailableResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceSSLResponse::fromMap($this->doRequest('DescribeDBInstanceSSL', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstanceSSLRequest $request
     *
     * @return DescribeDBInstanceSSLResponse
     */
    public function describeDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceSSLWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceSSLRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceSSLResponse::fromMap($this->doRequest('ModifyDBInstanceSSL', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDBInstanceSSLRequest $request
     *
     * @return ModifyDBInstanceSSLResponse
     */
    public function modifyDBInstanceSSL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSSLWithOptions($request, $runtime);
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

        return DescribeTagsResponse::fromMap($this->doRequest('DescribeTags', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeSpecificationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSpecificationResponse
     */
    public function describeSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSpecificationResponse::fromMap($this->doRequest('DescribeSpecification', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSpecificationRequest $request
     *
     * @return DescribeSpecificationResponse
     */
    public function describeSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBVersionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeDBVersionResponse::fromMap($this->doRequest('UpgradeDBVersion', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpgradeDBVersionRequest $request
     *
     * @return UpgradeDBVersionResponse
     */
    public function upgradeDBVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpgradeDBInstanceResponse
     */
    public function upgradeDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeDBInstanceResponse::fromMap($this->doRequest('UpgradeDBInstance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpgradeDBInstanceRequest $request
     *
     * @return UpgradeDBInstanceResponse
     */
    public function upgradeDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeDBInstanceWithOptions($request, $runtime);
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

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeRdsVSwitchsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRdsVSwitchsResponse::fromMap($this->doRequest('DescribeRdsVSwitchs', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRdsVSwitchsRequest $request
     *
     * @return DescribeRdsVSwitchsResponse
     */
    public function describeRdsVSwitchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVSwitchsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsVpcsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRdsVpcsResponse::fromMap($this->doRequest('DescribeRdsVpcs', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRdsVpcsRequest $request
     *
     * @return DescribeRdsVpcsResponse
     */
    public function describeRdsVpcs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsVpcsWithOptions($request, $runtime);
    }

    /**
     * @param AddBuDBInstanceRelationRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddBuDBInstanceRelationResponse
     */
    public function addBuDBInstanceRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddBuDBInstanceRelationResponse::fromMap($this->doRequest('AddBuDBInstanceRelation', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddBuDBInstanceRelationRequest $request
     *
     * @return AddBuDBInstanceRelationResponse
     */
    public function addBuDBInstanceRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBuDBInstanceRelationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogRecordsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogRecordsResponse::fromMap($this->doRequest('DescribeSQLLogRecords', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSQLLogRecordsRequest $request
     *
     * @return DescribeSQLLogRecordsResponse
     */
    public function describeSQLLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ModifySQLCollectorPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifySQLCollectorPolicyResponse::fromMap($this->doRequest('ModifySQLCollectorPolicy', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifySQLCollectorPolicyRequest $request
     *
     * @return ModifySQLCollectorPolicyResponse
     */
    public function modifySQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySQLCollectorPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLLogFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLLogFilesResponse::fromMap($this->doRequest('DescribeSQLLogFiles', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSQLLogFilesRequest $request
     *
     * @return DescribeSQLLogFilesResponse
     */
    public function describeSQLLogFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLLogFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLCollectorPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSQLCollectorPolicyResponse::fromMap($this->doRequest('DescribeSQLCollectorPolicy', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSQLCollectorPolicyRequest $request
     *
     * @return DescribeSQLCollectorPolicyResponse
     */
    public function describeSQLCollectorPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLCollectorPolicyWithOptions($request, $runtime);
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

        return DescribeSlowLogRecordsResponse::fromMap($this->doRequest('DescribeSlowLogRecords', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param SwitchDBInstanceNetTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SwitchDBInstanceNetTypeResponse::fromMap($this->doRequest('SwitchDBInstanceNetType', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SwitchDBInstanceNetTypeRequest $request
     *
     * @return SwitchDBInstanceNetTypeResponse
     */
    public function switchDBInstanceNetType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchDBInstanceNetTypeWithOptions($request, $runtime);
    }

    /**
     * @param RestartDBInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RestartDBInstanceResponse::fromMap($this->doRequest('RestartDBInstance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RestartDBInstanceRequest $request
     *
     * @return RestartDBInstanceResponse
     */
    public function restartDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDBInstanceWithOptions($request, $runtime);
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

        return ResetAccountPasswordResponse::fromMap($this->doRequest('ResetAccountPassword', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param ReleaseInstancePublicConnectionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseInstancePublicConnectionResponse::fromMap($this->doRequest('ReleaseInstancePublicConnection', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReleaseInstancePublicConnectionRequest $request
     *
     * @return ReleaseInstancePublicConnectionResponse
     */
    public function releaseInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstancePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifySecurityIpsResponse::fromMap($this->doRequest('ModifySecurityIps', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifySecurityIpsRequest $request
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIpsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceNetworkTypeResponse::fromMap($this->doRequest('ModifyDBInstanceNetworkType', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDBInstanceNetworkTypeRequest $request
     *
     * @return ModifyDBInstanceNetworkTypeResponse
     */
    public function modifyDBInstanceNetworkType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceNetworkTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceMaintainTimeResponse::fromMap($this->doRequest('ModifyDBInstanceMaintainTime', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDBInstanceMaintainTimeRequest $request
     *
     * @return ModifyDBInstanceMaintainTimeResponse
     */
    public function modifyDBInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceDescriptionResponse::fromMap($this->doRequest('ModifyDBInstanceDescription', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDBInstanceDescriptionRequest $request
     *
     * @return ModifyDBInstanceDescriptionResponse
     */
    public function modifyDBInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionStringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceConnectionStringResponse::fromMap($this->doRequest('ModifyDBInstanceConnectionString', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionStringRequest $request
     *
     * @return ModifyDBInstanceConnectionStringResponse
     */
    public function modifyDBInstanceConnectionString($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionStringWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDBInstanceConnectionModeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDBInstanceConnectionModeResponse::fromMap($this->doRequest('ModifyDBInstanceConnectionMode', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDBInstanceConnectionModeRequest $request
     *
     * @return ModifyDBInstanceConnectionModeResponse
     */
    public function modifyDBInstanceConnectionMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceConnectionModeWithOptions($request, $runtime);
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

        return ModifyAccountDescriptionResponse::fromMap($this->doRequest('ModifyAccountDescription', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeResourceUsageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourceUsageResponse::fromMap($this->doRequest('DescribeResourceUsage', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeResourceUsageRequest $request
     *
     * @return DescribeResourceUsageResponse
     */
    public function describeResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceUsageWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeDBInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancesResponse::fromMap($this->doRequest('DescribeDBInstances', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstancesRequest $request
     *
     * @return DescribeDBInstancesResponse
     */
    public function describeDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstancePerformanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstancePerformanceResponse::fromMap($this->doRequest('DescribeDBInstancePerformance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstancePerformanceRequest $request
     *
     * @return DescribeDBInstancePerformanceResponse
     */
    public function describeDBInstancePerformance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstancePerformanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceNetInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceNetInfoResponse::fromMap($this->doRequest('DescribeDBInstanceNetInfo', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstanceNetInfoRequest $request
     *
     * @return DescribeDBInstanceNetInfoResponse
     */
    public function describeDBInstanceNetInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceNetInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceIPArrayListRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceIPArrayListResponse::fromMap($this->doRequest('DescribeDBInstanceIPArrayList', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstanceIPArrayListRequest $request
     *
     * @return DescribeDBInstanceIPArrayListResponse
     */
    public function describeDBInstanceIPArrayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceIPArrayListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDBInstanceAttributeResponse::fromMap($this->doRequest('DescribeDBInstanceAttribute', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDBInstanceAttributeRequest $request
     *
     * @return DescribeDBInstanceAttributeResponse
     */
    public function describeDBInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDBInstanceAttributeWithOptions($request, $runtime);
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

        return DescribeAccountsResponse::fromMap($this->doRequest('DescribeAccounts', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DeleteDBInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDBInstanceResponse::fromMap($this->doRequest('DeleteDBInstance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDBInstanceRequest $request
     *
     * @return DeleteDBInstanceResponse
     */
    public function deleteDBInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDBInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDatabaseResponse::fromMap($this->doRequest('DeleteDatabase', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDatabaseRequest $request
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
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

        return CreateDBInstanceResponse::fromMap($this->doRequest('CreateDBInstance', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateAccountResponse::fromMap($this->doRequest('CreateAccount', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
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
     * @param AllocateInstancePublicConnectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AllocateInstancePublicConnectionResponse::fromMap($this->doRequest('AllocateInstancePublicConnection', 'HTTPS', 'POST', '2016-05-03', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AllocateInstancePublicConnectionRequest $request
     *
     * @return AllocateInstancePublicConnectionResponse
     */
    public function allocateInstancePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateInstancePublicConnectionWithOptions($request, $runtime);
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
}
