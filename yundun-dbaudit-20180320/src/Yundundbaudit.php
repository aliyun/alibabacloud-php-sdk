<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ConfigInstanceNetworkRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ConfigInstanceNetworkResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeLoginTicketResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\DescribeSyncInfoResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDBAuditCountListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDBAuditCountListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogDetailRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogDetailResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTypeDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetLogTypeDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskLevelDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetRiskLevelDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDistributionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionDistributionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ListSystemAlarmsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\StartInstanceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yundundbaudit extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-dbaudit', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 配置实例网络.
     *
     * @param request - ConfigInstanceNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigInstanceNetworkResponse
     *
     * @param ConfigInstanceNetworkRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigInstanceNetworkResponse
     */
    public function configInstanceNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->privateWhiteList) {
            @$query['PrivateWhiteList'] = $request->privateWhiteList;
        }

        if (null !== $request->publicAccessControl) {
            @$query['PublicAccessControl'] = $request->publicAccessControl;
        }

        if (null !== $request->publicWhiteList) {
            @$query['PublicWhiteList'] = $request->publicWhiteList;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigInstanceNetwork',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigInstanceNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置实例网络.
     *
     * @param request - ConfigInstanceNetworkRequest
     *
     * @returns ConfigInstanceNetworkResponse
     *
     * @param ConfigInstanceNetworkRequest $request
     *
     * @return ConfigInstanceNetworkResponse
     */
    public function configInstanceNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceNetworkWithOptions($request, $runtime);
    }

    /**
     * 获取实例属性.
     *
     * @param request - DescribeInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAttributeResponse
     *
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAttribute',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例属性.
     *
     * @param request - DescribeInstanceAttributeRequest
     *
     * @returns DescribeInstanceAttributeResponse
     *
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 获取实例列表.
     *
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
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

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例列表.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
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
     * 获取登录凭据.
     *
     * @param request - DescribeLoginTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoginTicketResponse
     *
     * @param DescribeLoginTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLoginTicketResponse
     */
    public function describeLoginTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoginTicket',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoginTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取登录凭据.
     *
     * @param request - DescribeLoginTicketRequest
     *
     * @returns DescribeLoginTicketResponse
     *
     * @param DescribeLoginTicketRequest $request
     *
     * @return DescribeLoginTicketResponse
     */
    public function describeLoginTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoginTicketWithOptions($request, $runtime);
    }

    /**
     * 获取同步信息.
     *
     * @param request - DescribeSyncInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSyncInfoResponse
     *
     * @param DescribeSyncInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSyncInfoResponse
     */
    public function describeSyncInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSyncInfo',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSyncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取同步信息.
     *
     * @param request - DescribeSyncInfoRequest
     *
     * @returns DescribeSyncInfoResponse
     *
     * @param DescribeSyncInfoRequest $request
     *
     * @return DescribeSyncInfoResponse
     */
    public function describeSyncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSyncInfoWithOptions($request, $runtime);
    }

    /**
     * 获取Agent列表.
     *
     * @param request - GetAgentListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentListResponse
     *
     * @param GetAgentListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentListResponse
     */
    public function getAgentListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIp) {
            @$query['AgentIp'] = $request->agentIp;
        }

        if (null !== $request->agentOs) {
            @$query['AgentOs'] = $request->agentOs;
        }

        if (null !== $request->agentStatus) {
            @$query['AgentStatus'] = $request->agentStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentList',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Agent列表.
     *
     * @param request - GetAgentListRequest
     *
     * @returns GetAgentListResponse
     *
     * @param GetAgentListRequest $request
     *
     * @return GetAgentListResponse
     */
    public function getAgentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentListWithOptions($request, $runtime);
    }

    /**
     * 查询审计统计数.
     *
     * @param request - GetAuditCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuditCountResponse
     *
     * @param GetAuditCountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAuditCountResponse
     */
    public function getAuditCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuditCount',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuditCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审计统计数.
     *
     * @param request - GetAuditCountRequest
     *
     * @returns GetAuditCountResponse
     *
     * @param GetAuditCountRequest $request
     *
     * @return GetAuditCountResponse
     */
    public function getAuditCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditCountWithOptions($request, $runtime);
    }

    /**
     * 按时间分布查询审计统计数.
     *
     * @param request - GetAuditCountDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAuditCountDistributionResponse
     *
     * @param GetAuditCountDistributionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAuditCountDistributionResponse
     */
    public function getAuditCountDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAuditCountDistribution',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAuditCountDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按时间分布查询审计统计数.
     *
     * @param request - GetAuditCountDistributionRequest
     *
     * @returns GetAuditCountDistributionResponse
     *
     * @param GetAuditCountDistributionRequest $request
     *
     * @return GetAuditCountDistributionResponse
     */
    public function getAuditCountDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditCountDistributionWithOptions($request, $runtime);
    }

    /**
     * 按数据源分组查询审计统计数.
     *
     * @param request - GetDBAuditCountListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDBAuditCountListResponse
     *
     * @param GetDBAuditCountListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDBAuditCountListResponse
     */
    public function getDBAuditCountListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDBAuditCountList',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDBAuditCountListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 按数据源分组查询审计统计数.
     *
     * @param request - GetDBAuditCountListRequest
     *
     * @returns GetDBAuditCountListResponse
     *
     * @param GetDBAuditCountListRequest $request
     *
     * @return GetDBAuditCountListResponse
     */
    public function getDBAuditCountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBAuditCountListWithOptions($request, $runtime);
    }

    /**
     * 获取单条语句详细信息.
     *
     * @param request - GetLogDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogDetailResponse
     *
     * @param GetLogDetailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetLogDetailResponse
     */
    public function getLogDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogDetail',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取单条语句详细信息.
     *
     * @param request - GetLogDetailRequest
     *
     * @returns GetLogDetailResponse
     *
     * @param GetLogDetailRequest $request
     *
     * @return GetLogDetailResponse
     */
    public function getLogDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogDetailWithOptions($request, $runtime);
    }

    /**
     * 获取语句详情列表.
     *
     * @param request - GetLogListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogListResponse
     *
     * @param GetLogListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetLogListResponse
     */
    public function getLogListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->clientIpList) {
            @$query['ClientIpList'] = $request->clientIpList;
        }

        if (null !== $request->clientProgramList) {
            @$query['ClientProgramList'] = $request->clientProgramList;
        }

        if (null !== $request->dbHostList) {
            @$query['DbHostList'] = $request->dbHostList;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->dbUserList) {
            @$query['DbUserList'] = $request->dbUserList;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isSuccess) {
            @$query['IsSuccess'] = $request->isSuccess;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxAffectRows) {
            @$query['MaxAffectRows'] = $request->maxAffectRows;
        }

        if (null !== $request->maxExecCostUS) {
            @$query['MaxExecCostUS'] = $request->maxExecCostUS;
        }

        if (null !== $request->minAffectRows) {
            @$query['MinAffectRows'] = $request->minAffectRows;
        }

        if (null !== $request->minExecCostUS) {
            @$query['MinExecCostUS'] = $request->minExecCostUS;
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

        if (null !== $request->riskLevelList) {
            @$query['RiskLevelList'] = $request->riskLevelList;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleTypeList) {
            @$query['RuleTypeList'] = $request->ruleTypeList;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        if (null !== $request->sqlKey) {
            @$query['SqlKey'] = $request->sqlKey;
        }

        if (null !== $request->sqlTypeList) {
            @$query['SqlTypeList'] = $request->sqlTypeList;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogList',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取语句详情列表.
     *
     * @param request - GetLogListRequest
     *
     * @returns GetLogListResponse
     *
     * @param GetLogListRequest $request
     *
     * @return GetLogListResponse
     */
    public function getLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogListWithOptions($request, $runtime);
    }

    /**
     * 获取语句类型分布信息.
     *
     * @param request - GetLogTypeDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogTypeDistributionResponse
     *
     * @param GetLogTypeDistributionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLogTypeDistributionResponse
     */
    public function getLogTypeDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogTypeDistribution',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogTypeDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取语句类型分布信息.
     *
     * @param request - GetLogTypeDistributionRequest
     *
     * @returns GetLogTypeDistributionResponse
     *
     * @param GetLogTypeDistributionRequest $request
     *
     * @return GetLogTypeDistributionResponse
     */
    public function getLogTypeDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogTypeDistributionWithOptions($request, $runtime);
    }

    /**
     * 获取风险级别分布情况.
     *
     * @param request - GetRiskLevelDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRiskLevelDistributionResponse
     *
     * @param GetRiskLevelDistributionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRiskLevelDistributionResponse
     */
    public function getRiskLevelDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRiskLevelDistribution',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRiskLevelDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取风险级别分布情况.
     *
     * @param request - GetRiskLevelDistributionRequest
     *
     * @returns GetRiskLevelDistributionResponse
     *
     * @param GetRiskLevelDistributionRequest $request
     *
     * @return GetRiskLevelDistributionResponse
     */
    public function getRiskLevelDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskLevelDistributionWithOptions($request, $runtime);
    }

    /**
     * 获取会话分布情况.
     *
     * @param request - GetSessionDistributionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionDistributionResponse
     *
     * @param GetSessionDistributionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSessionDistributionResponse
     */
    public function getSessionDistributionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSessionDistribution',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSessionDistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话分布情况.
     *
     * @param request - GetSessionDistributionRequest
     *
     * @returns GetSessionDistributionResponse
     *
     * @param GetSessionDistributionRequest $request
     *
     * @return GetSessionDistributionResponse
     */
    public function getSessionDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionDistributionWithOptions($request, $runtime);
    }

    /**
     * 获取指定日期会话列表.
     *
     * @param request - GetSessionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionListResponse
     *
     * @param GetSessionListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSessionListResponse
     */
    public function getSessionListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionList) {
            @$query['ActionList'] = $request->actionList;
        }

        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->clientIpList) {
            @$query['ClientIpList'] = $request->clientIpList;
        }

        if (null !== $request->clientProgramList) {
            @$query['ClientProgramList'] = $request->clientProgramList;
        }

        if (null !== $request->dbHostList) {
            @$query['DbHostList'] = $request->dbHostList;
        }

        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->dbUserList) {
            @$query['DbUserList'] = $request->dbUserList;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
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

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSessionList',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSessionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定日期会话列表.
     *
     * @param request - GetSessionListRequest
     *
     * @returns GetSessionListResponse
     *
     * @param GetSessionListRequest $request
     *
     * @return GetSessionListResponse
     */
    public function getSessionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSessionListWithOptions($request, $runtime);
    }

    /**
     * 获取数据源审计属性.
     *
     * @param request - ListDataSourceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceAttributeResponse
     *
     * @param ListDataSourceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDataSourceAttributeResponse
     */
    public function listDataSourceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbIds) {
            @$query['DbIds'] = $request->dbIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSourceAttribute',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据源审计属性.
     *
     * @param request - ListDataSourceAttributeRequest
     *
     * @returns ListDataSourceAttributeResponse
     *
     * @param ListDataSourceAttributeRequest $request
     *
     * @return ListDataSourceAttributeResponse
     */
    public function listDataSourceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceAttributeWithOptions($request, $runtime);
    }

    /**
     * 查询数据源列表.
     *
     * @param request - ListDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbId) {
            @$query['DbId'] = $request->dbId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSources',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询数据源列表.
     *
     * @param request - ListDataSourcesRequest
     *
     * @returns ListDataSourcesResponse
     *
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourcesWithOptions($request, $runtime);
    }

    /**
     * 查询系统告警.
     *
     * @param request - ListSystemAlarmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSystemAlarmsResponse
     *
     * @param ListSystemAlarmsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSystemAlarmsResponse
     */
    public function listSystemAlarmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmType) {
            @$query['AlarmType'] = $request->alarmType;
        }

        if (null !== $request->beginDate) {
            @$query['BeginDate'] = $request->beginDate;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSystemAlarms',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSystemAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询系统告警.
     *
     * @param request - ListSystemAlarmsRequest
     *
     * @returns ListSystemAlarmsResponse
     *
     * @param ListSystemAlarmsRequest $request
     *
     * @return ListSystemAlarmsResponse
     */
    public function listSystemAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemAlarmsWithOptions($request, $runtime);
    }

    /**
     * 修改指定实例的信息.
     *
     * @param request - ModifyInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAttribute',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改指定实例的信息.
     *
     * @param request - ModifyInstanceAttributeRequest
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 启动审计实例.
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vswitchId) {
            @$query['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstance',
            'version' => '2018-03-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动审计实例.
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }
}
