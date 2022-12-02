<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsMysqlDataSourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsMysqlDataSourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantReadOnlyConnectionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantReadOnlyConnectionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateTenantUserResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteDatabasesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteDatabasesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteInstancesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteInstancesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteSecurityIpGroupRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteSecurityIpGroupResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantUsersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DeleteTenantUsersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableCpuResourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableCpuResourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceCreatableZoneResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTenantModesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTenantModesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeNodeMetricsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeNodeMetricsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersHistoryResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRecommendIndexResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSecurityIpGroupsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLDetailsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantMetricsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantMetricsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUserRolesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseDescriptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseDescriptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseUserRolesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseUserRolesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceNameRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceNameResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyParametersRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyParametersResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifySecurityIpsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantPrimaryZoneRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantPrimaryZoneResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantResourceRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantResourceResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserDescriptionRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserDescriptionResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserPasswordRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserPasswordResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserRolesResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ReleaseOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ResetOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ResetOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ResumeOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ResumeOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIMonitorMetricResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsShrinkRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartOmsOpenAPIProjectResponse;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopOmsOpenAPIProjectRequest;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StopOmsOpenAPIProjectResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class OceanBasePro extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('oceanbasepro', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->collation)) {
            $body['Collation'] = $request->collation;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encoding)) {
            $body['Encoding'] = $request->encoding;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatabase',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDatabaseRequest $request
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $body['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->diskSize)) {
            $body['DiskSize'] = $request->diskSize;
        }
        if (!Utils::isUnset($request->diskType)) {
            $body['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->instanceClass)) {
            $body['InstanceClass'] = $request->instanceClass;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->obVersion)) {
            $body['ObVersion'] = $request->obVersion;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->series)) {
            $body['Series'] = $request->series;
        }
        if (!Utils::isUnset($request->zones)) {
            $body['Zones'] = $request->zones;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateOmsMysqlDataSourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateOmsMysqlDataSourceResponse
     */
    public function createOmsMysqlDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dgDatabaseId)) {
            $body['DgDatabaseId'] = $request->dgDatabaseId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $body['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->schema)) {
            $body['Schema'] = $request->schema;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOmsMysqlDataSource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOmsMysqlDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOmsMysqlDataSourceRequest $request
     *
     * @return CreateOmsMysqlDataSourceResponse
     */
    public function createOmsMysqlDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOmsMysqlDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateOmsOpenAPIProjectRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateOmsOpenAPIProjectResponse
     */
    public function createOmsOpenAPIProjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOmsOpenAPIProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destConfig)) {
            $request->destConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destConfig, 'DestConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->labelIds)) {
            $request->labelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelIds, 'LabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceConfig)) {
            $request->sourceConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceConfig, 'SourceConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transferMapping)) {
            $request->transferMappingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transferMapping, 'TransferMapping', 'json');
        }
        if (!Utils::isUnset($tmpReq->transferStepConfig)) {
            $request->transferStepConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transferStepConfig, 'TransferStepConfig', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->businessName)) {
            $body['BusinessName'] = $request->businessName;
        }
        if (!Utils::isUnset($request->destConfigShrink)) {
            $body['DestConfig'] = $request->destConfigShrink;
        }
        if (!Utils::isUnset($request->labelIdsShrink)) {
            $body['LabelIds'] = $request->labelIdsShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->sourceConfigShrink)) {
            $body['SourceConfig'] = $request->sourceConfigShrink;
        }
        if (!Utils::isUnset($request->transferMappingShrink)) {
            $body['TransferMapping'] = $request->transferMappingShrink;
        }
        if (!Utils::isUnset($request->transferStepConfigShrink)) {
            $body['TransferStepConfig'] = $request->transferStepConfigShrink;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOmsOpenAPIProjectRequest $request
     *
     * @return CreateOmsOpenAPIProjectResponse
     */
    public function createOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecurityIpGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecurityIpGroupResponse
     */
    public function createSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $body['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSecurityIpGroupRequest $request
     *
     * @return CreateSecurityIpGroupResponse
     */
    public function createSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateTenantRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTenantResponse
     */
    public function createTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->charset)) {
            $body['Charset'] = $request->charset;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->primaryZone)) {
            $body['PrimaryZone'] = $request->primaryZone;
        }
        if (!Utils::isUnset($request->tenantMode)) {
            $body['TenantMode'] = $request->tenantMode;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $body['TimeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->unitNum)) {
            $body['UnitNum'] = $request->unitNum;
        }
        if (!Utils::isUnset($request->userVSwitchId)) {
            $body['UserVSwitchId'] = $request->userVSwitchId;
        }
        if (!Utils::isUnset($request->userVpcId)) {
            $body['UserVpcId'] = $request->userVpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenant',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTenantRequest $request
     *
     * @return CreateTenantResponse
     */
    public function createTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantWithOptions($request, $runtime);
    }

    /**
     * @param CreateTenantReadOnlyConnectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateTenantReadOnlyConnectionResponse
     */
    public function createTenantReadOnlyConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantReadOnlyConnection',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantReadOnlyConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTenantReadOnlyConnectionRequest $request
     *
     * @return CreateTenantReadOnlyConnectionResponse
     */
    public function createTenantReadOnlyConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantReadOnlyConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateTenantUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTenantUserResponse
     */
    public function createTenantUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->roles)) {
            $body['Roles'] = $request->roles;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userPassword)) {
            $body['UserPassword'] = $request->userPassword;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantUser',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTenantUserRequest $request
     *
     * @return CreateTenantUserResponse
     */
    public function createTenantUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDatabasesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDatabasesResponse
     */
    public function deleteDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseNames)) {
            $body['DatabaseNames'] = $request->databaseNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabases',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatabasesRequest $request
     *
     * @return DeleteDatabasesResponse
     */
    public function deleteDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupRetainMode)) {
            $body['BackupRetainMode'] = $request->backupRetainMode;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $body['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstances',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstancesRequest $request
     *
     * @return DeleteInstancesResponse
     */
    public function deleteInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteOmsOpenAPIProjectResponse
     */
    public function deleteOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOmsOpenAPIProjectRequest $request
     *
     * @return DeleteOmsOpenAPIProjectResponse
     */
    public function deleteOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityIpGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecurityIpGroupResponse
     */
    public function deleteSecurityIpGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityIpGroup',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityIpGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSecurityIpGroupRequest $request
     *
     * @return DeleteSecurityIpGroupResponse
     */
    public function deleteSecurityIpGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityIpGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTenantUsersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTenantUsersResponse
     */
    public function deleteTenantUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTenantUsers',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTenantUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTenantUsersRequest $request
     *
     * @return DeleteTenantUsersResponse
     */
    public function deleteTenantUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantUsersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTenantsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteTenantsResponse
     */
    public function deleteTenantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantIds)) {
            $body['TenantIds'] = $request->tenantIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTenants',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTenantsRequest $request
     *
     * @return DeleteTenantsResponse
     */
    public function deleteTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTenantsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAnomalySQLListRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAnomalySQLListResponse
     */
    public function describeAnomalySQLListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeAnomalySQLListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterCondition)) {
            $request->filterConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $body['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterConditionShrink)) {
            $body['FilterCondition'] = $request->filterConditionShrink;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParameter)) {
            $body['SearchParameter'] = $request->searchParameter;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sortColumn)) {
            $body['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAnomalySQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAnomalySQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAnomalySQLListRequest $request
     *
     * @return DescribeAnomalySQLListResponse
     */
    public function describeAnomalySQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAnomalySQLListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableCpuResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableCpuResourceResponse
     */
    public function describeAvailableCpuResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableCpuResource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableCpuResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableCpuResourceRequest $request
     *
     * @return DescribeAvailableCpuResourceResponse
     */
    public function describeAvailableCpuResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableCpuResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableMemResourceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAvailableMemResourceResponse
     */
    public function describeAvailableMemResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuNum)) {
            $body['CpuNum'] = $request->cpuNum;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->unitNum)) {
            $body['UnitNum'] = $request->unitNum;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableMemResource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableMemResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableMemResourceRequest $request
     *
     * @return DescribeAvailableMemResourceResponse
     */
    public function describeAvailableMemResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableMemResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCharsetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCharsetResponse
     */
    public function describeCharsetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tenantMode)) {
            $body['TenantMode'] = $request->tenantMode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCharset',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCharsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCharsetRequest $request
     *
     * @return DescribeCharsetResponse
     */
    public function describeCharset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCharsetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->withTables)) {
            $body['WithTables'] = $request->withTables;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabases',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatabasesRequest $request
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstance',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceRequest $request
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceCreatableZoneRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeInstanceCreatableZoneResponse
     */
    public function describeInstanceCreatableZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceCreatableZone',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceCreatableZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceCreatableZoneRequest $request
     *
     * @return DescribeInstanceCreatableZoneResponse
     */
    public function describeInstanceCreatableZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCreatableZoneWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTenantModesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceTenantModesResponse
     */
    public function describeInstanceTenantModesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTenantModes',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTenantModesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceTenantModesRequest $request
     *
     * @return DescribeInstanceTenantModesResponse
     */
    public function describeInstanceTenantModes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTenantModesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTopologyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopologyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTopology',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTopologyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceTopologyRequest $request
     *
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopology($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTopologyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodeMetricsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNodeMetricsResponse
     */
    public function describeNodeMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metrics)) {
            $body['Metrics'] = $request->metrics;
        }
        if (!Utils::isUnset($request->nodeIdList)) {
            $body['NodeIdList'] = $request->nodeIdList;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $body['NodeName'] = $request->nodeName;
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
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodeMetrics',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNodeMetricsRequest $request
     *
     * @return DescribeNodeMetricsResponse
     */
    public function describeNodeMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeMetricsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOmsOpenAPIProjectResponse
     */
    public function describeOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOmsOpenAPIProjectRequest $request
     *
     * @return DescribeOmsOpenAPIProjectResponse
     */
    public function describeOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOmsOpenAPIProjectStepsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeOmsOpenAPIProjectStepsResponse
     */
    public function describeOmsOpenAPIProjectStepsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOmsOpenAPIProjectSteps',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOmsOpenAPIProjectStepsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOmsOpenAPIProjectStepsRequest $request
     *
     * @return DescribeOmsOpenAPIProjectStepsResponse
     */
    public function describeOmsOpenAPIProjectSteps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOmsOpenAPIProjectStepsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOutlineBindingRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeOutlineBindingResponse
     */
    public function describeOutlineBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isConcurrentLimit)) {
            $body['IsConcurrentLimit'] = $request->isConcurrentLimit;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $body['TableName'] = $request->tableName;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOutlineBinding',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOutlineBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOutlineBindingRequest $request
     *
     * @return DescribeOutlineBindingResponse
     */
    public function describeOutlineBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOutlineBindingWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->dimension)) {
            $body['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->dimensionValue)) {
            $body['DimensionValue'] = $request->dimensionValue;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeParameters',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeParametersHistoryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeParametersHistoryResponse
     */
    public function describeParametersHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dimension)) {
            $body['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->dimensionValue)) {
            $body['DimensionValue'] = $request->dimensionValue;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
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
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeParametersHistory',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParametersHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParametersHistoryRequest $request
     *
     * @return DescribeParametersHistoryResponse
     */
    public function describeParametersHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecommendIndexRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRecommendIndexResponse
     */
    public function describeRecommendIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecommendIndex',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecommendIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecommendIndexRequest $request
     *
     * @return DescribeRecommendIndexResponse
     */
    public function describeRecommendIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecommendIndexWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLDetailsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSQLDetailsResponse
     */
    public function describeSQLDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLDetails',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLDetailsRequest $request
     *
     * @return DescribeSQLDetailsResponse
     */
    public function describeSQLDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLHistoryListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSQLHistoryListResponse
     */
    public function describeSQLHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLHistoryList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLHistoryListRequest $request
     *
     * @return DescribeSQLHistoryListResponse
     */
    public function describeSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSQLPlansRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSQLPlansResponse
     */
    public function describeSQLPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSQLPlans',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSQLPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSQLPlansRequest $request
     *
     * @return DescribeSQLPlansResponse
     */
    public function describeSQLPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSQLPlansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityIpGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSecurityIpGroupsResponse
     */
    public function describeSecurityIpGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityIpGroups',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityIpGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityIpGroupsRequest $request
     *
     * @return DescribeSecurityIpGroupsResponse
     */
    public function describeSecurityIpGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIpGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowSQLHistoryListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSlowSQLHistoryListResponse
     */
    public function describeSlowSQLHistoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowSQLHistoryList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowSQLHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlowSQLHistoryListRequest $request
     *
     * @return DescribeSlowSQLHistoryListResponse
     */
    public function describeSlowSQLHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLHistoryListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlowSQLListRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSlowSQLListResponse
     */
    public function describeSlowSQLListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSlowSQLListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterCondition)) {
            $request->filterConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterConditionShrink)) {
            $body['FilterCondition'] = $request->filterConditionShrink;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParameter)) {
            $body['SearchParameter'] = $request->searchParameter;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sortColumn)) {
            $body['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowSQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlowSQLListRequest $request
     *
     * @return DescribeSlowSQLListResponse
     */
    public function describeSlowSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlowSQLListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTenantRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTenantResponse
     */
    public function describeTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenant',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTenantRequest $request
     *
     * @return DescribeTenantResponse
     */
    public function describeTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTenantMetricsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeTenantMetricsResponse
     */
    public function describeTenantMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metrics)) {
            $body['Metrics'] = $request->metrics;
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
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantIdList)) {
            $body['TenantIdList'] = $request->tenantIdList;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantMetrics',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTenantMetricsRequest $request
     *
     * @return DescribeTenantMetricsResponse
     */
    public function describeTenantMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantMetricsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTenantUserRolesResponse
     */
    public function describeTenantUserRolesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeTenantUserRoles',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeTenantUserRolesResponse
     */
    public function describeTenantUserRoles()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantUserRolesWithOptions($runtime);
    }

    /**
     * @param DescribeTenantUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeTenantUsersResponse
     */
    public function describeTenantUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantUsers',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTenantUsersRequest $request
     *
     * @return DescribeTenantUsersResponse
     */
    public function describeTenantUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTenantZonesReadRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTenantZonesReadResponse
     */
    public function describeTenantZonesReadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenantZonesRead',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantZonesReadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTenantZonesReadRequest $request
     *
     * @return DescribeTenantZonesReadResponse
     */
    public function describeTenantZonesRead($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantZonesReadWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTenantsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeTenantsResponse
     */
    public function describeTenantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->tenantName)) {
            $body['TenantName'] = $request->tenantName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTenants',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTenantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTenantsRequest $request
     *
     * @return DescribeTenantsResponse
     */
    public function describeTenants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTenantsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTimeZonesResponse
     */
    public function describeTimeZonesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeTimeZones',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTimeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeTimeZonesResponse
     */
    public function describeTimeZones()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTimeZonesWithOptions($runtime);
    }

    /**
     * @param DescribeTopSQLListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTopSQLListResponse
     */
    public function describeTopSQLListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeTopSQLListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterCondition)) {
            $request->filterConditionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filterCondition, 'FilterCondition', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterConditionShrink)) {
            $body['FilterCondition'] = $request->filterConditionShrink;
        }
        if (!Utils::isUnset($request->nodeIp)) {
            $body['NodeIp'] = $request->nodeIp;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->SQLId)) {
            $body['SQLId'] = $request->SQLId;
        }
        if (!Utils::isUnset($request->searchKeyWord)) {
            $body['SearchKeyWord'] = $request->searchKeyWord;
        }
        if (!Utils::isUnset($request->searchParameter)) {
            $body['SearchParameter'] = $request->searchParameter;
        }
        if (!Utils::isUnset($request->searchRule)) {
            $body['SearchRule'] = $request->searchRule;
        }
        if (!Utils::isUnset($request->searchValue)) {
            $body['SearchValue'] = $request->searchValue;
        }
        if (!Utils::isUnset($request->sortColumn)) {
            $body['SortColumn'] = $request->sortColumn;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTopSQLList',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTopSQLListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTopSQLListRequest $request
     *
     * @return DescribeTopSQLListResponse
     */
    public function describeTopSQLList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopSQLListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deployType)) {
            $body['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->series)) {
            $body['Series'] = $request->series;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatabaseDescriptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseDescription',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatabaseDescriptionRequest $request
     *
     * @return ModifyDatabaseDescriptionResponse
     */
    public function modifyDatabaseDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatabaseUserRolesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDatabaseUserRolesResponse
     */
    public function modifyDatabaseUserRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->databaseName)) {
            $body['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseUserRoles',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDatabaseUserRolesRequest $request
     *
     * @return ModifyDatabaseUserRolesResponse
     */
    public function modifyDatabaseUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseUserRolesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceName',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceNameRequest $request
     *
     * @return ModifyInstanceNameResponse
     */
    public function modifyInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNameWithOptions($request, $runtime);
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
        $body = [];
        if (!Utils::isUnset($request->dimension)) {
            $body['Dimension'] = $request->dimension;
        }
        if (!Utils::isUnset($request->dimensionValue)) {
            $body['DimensionValue'] = $request->dimensionValue;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyParameters',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParametersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifySecurityIpsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySecurityIpsResponse
     */
    public function modifySecurityIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityIpGroupName)) {
            $body['SecurityIpGroupName'] = $request->securityIpGroupName;
        }
        if (!Utils::isUnset($request->securityIps)) {
            $body['SecurityIps'] = $request->securityIps;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityIps',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityIpsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyTenantPrimaryZoneRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyTenantPrimaryZoneResponse
     */
    public function modifyTenantPrimaryZoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->masterIntranetAddressZone)) {
            $body['MasterIntranetAddressZone'] = $request->masterIntranetAddressZone;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->primaryZone)) {
            $body['PrimaryZone'] = $request->primaryZone;
        }
        if (!Utils::isUnset($request->primaryZoneDeployType)) {
            $body['PrimaryZoneDeployType'] = $request->primaryZoneDeployType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userVSwitchId)) {
            $body['UserVSwitchId'] = $request->userVSwitchId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantPrimaryZone',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantPrimaryZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantPrimaryZoneRequest $request
     *
     * @return ModifyTenantPrimaryZoneResponse
     */
    public function modifyTenantPrimaryZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantPrimaryZoneWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyTenantResourceResponse
     */
    public function modifyTenantResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantResource',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantResourceRequest $request
     *
     * @return ModifyTenantResourceResponse
     */
    public function modifyTenantResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantResourceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantUserDescriptionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyTenantUserDescriptionResponse
     */
    public function modifyTenantUserDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserDescription',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantUserDescriptionRequest $request
     *
     * @return ModifyTenantUserDescriptionResponse
     */
    public function modifyTenantUserDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantUserPasswordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyTenantUserPasswordResponse
     */
    public function modifyTenantUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userPassword)) {
            $body['UserPassword'] = $request->userPassword;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserPassword',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantUserPasswordRequest $request
     *
     * @return ModifyTenantUserPasswordResponse
     */
    public function modifyTenantUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantUserRolesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyTenantUserRolesResponse
     */
    public function modifyTenantUserRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->modifyType)) {
            $body['ModifyType'] = $request->modifyType;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userRole)) {
            $body['UserRole'] = $request->userRole;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserRoles',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantUserRolesRequest $request
     *
     * @return ModifyTenantUserRolesResponse
     */
    public function modifyTenantUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserRolesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantUserStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTenantUserStatusResponse
     */
    public function modifyTenantUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $body['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyTenantUserStatus',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTenantUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTenantUserStatusRequest $request
     *
     * @return ModifyTenantUserStatusResponse
     */
    public function modifyTenantUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantUserStatusWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseOmsOpenAPIProjectResponse
     */
    public function releaseOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseOmsOpenAPIProjectRequest $request
     *
     * @return ReleaseOmsOpenAPIProjectResponse
     */
    public function releaseOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param ResetOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ResetOmsOpenAPIProjectResponse
     */
    public function resetOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetOmsOpenAPIProjectRequest $request
     *
     * @return ResetOmsOpenAPIProjectResponse
     */
    public function resetOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param ResumeOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ResumeOmsOpenAPIProjectResponse
     */
    public function resumeOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeOmsOpenAPIProjectRequest $request
     *
     * @return ResumeOmsOpenAPIProjectResponse
     */
    public function resumeOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param SearchOmsOpenAPIMonitorMetricRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SearchOmsOpenAPIMonitorMetricResponse
     */
    public function searchOmsOpenAPIMonitorMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beginTime)) {
            $body['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxPointNum)) {
            $body['MaxPointNum'] = $request->maxPointNum;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchOmsOpenAPIMonitorMetric',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchOmsOpenAPIMonitorMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchOmsOpenAPIMonitorMetricRequest $request
     *
     * @return SearchOmsOpenAPIMonitorMetricResponse
     */
    public function searchOmsOpenAPIMonitorMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchOmsOpenAPIMonitorMetricWithOptions($request, $runtime);
    }

    /**
     * @param SearchOmsOpenAPIProjectsRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return SearchOmsOpenAPIProjectsResponse
     */
    public function searchOmsOpenAPIProjectsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchOmsOpenAPIProjectsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destDbTypes)) {
            $request->destDbTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destDbTypes, 'DestDbTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->labelIds)) {
            $request->labelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labelIds, 'LabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceDbTypes)) {
            $request->sourceDbTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceDbTypes, 'SourceDbTypes', 'json');
        }
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->destDbTypesShrink)) {
            $body['DestDbTypes'] = $request->destDbTypesShrink;
        }
        if (!Utils::isUnset($request->labelIdsShrink)) {
            $body['LabelIds'] = $request->labelIdsShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->sourceDbTypesShrink)) {
            $body['SourceDbTypes'] = $request->sourceDbTypesShrink;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $body['StatusList'] = $request->statusListShrink;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchOmsOpenAPIProjects',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchOmsOpenAPIProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchOmsOpenAPIProjectsRequest $request
     *
     * @return SearchOmsOpenAPIProjectsResponse
     */
    public function searchOmsOpenAPIProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchOmsOpenAPIProjectsWithOptions($request, $runtime);
    }

    /**
     * @param StartOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StartOmsOpenAPIProjectResponse
     */
    public function startOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartOmsOpenAPIProjectRequest $request
     *
     * @return StartOmsOpenAPIProjectResponse
     */
    public function startOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startOmsOpenAPIProjectWithOptions($request, $runtime);
    }

    /**
     * @param StopOmsOpenAPIProjectRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StopOmsOpenAPIProjectResponse
     */
    public function stopOmsOpenAPIProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->workerGradeId)) {
            $body['WorkerGradeId'] = $request->workerGradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopOmsOpenAPIProject',
            'version'     => '2019-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopOmsOpenAPIProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopOmsOpenAPIProjectRequest $request
     *
     * @return StopOmsOpenAPIProjectResponse
     */
    public function stopOmsOpenAPIProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopOmsOpenAPIProjectWithOptions($request, $runtime);
    }
}
