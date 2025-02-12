<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\AddEnterpriseGroupMemberToTaskGroupRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\AddEnterpriseGroupMemberToTaskGroupResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListDdTaskOrderRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListDdTaskOrderResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupCustomerMembersRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupCustomerMembersResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupsResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListProductByGroupRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListProductByGroupResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Supportplan extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('support-plan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加客户服务主群人员进子群.
     *
     * @param request - AddEnterpriseGroupMemberToTaskGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddEnterpriseGroupMemberToTaskGroupResponse
     *
     * @param AddEnterpriseGroupMemberToTaskGroupRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return AddEnterpriseGroupMemberToTaskGroupResponse
     */
    public function addEnterpriseGroupMemberToTaskGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskOrderId) {
            @$query['TaskOrderId'] = $request->taskOrderId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEnterpriseGroupMemberToTaskGroup',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddEnterpriseGroupMemberToTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddEnterpriseGroupMemberToTaskGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加客户服务主群人员进子群.
     *
     * @param request - AddEnterpriseGroupMemberToTaskGroupRequest
     * @returns AddEnterpriseGroupMemberToTaskGroupResponse
     *
     * @param AddEnterpriseGroupMemberToTaskGroupRequest $request
     *
     * @return AddEnterpriseGroupMemberToTaskGroupResponse
     */
    public function addEnterpriseGroupMemberToTaskGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEnterpriseGroupMemberToTaskGroupWithOptions($request, $runtime);
    }

    /**
     * 创建工单.
     *
     * @param request - CreateTaskOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateTaskOrderResponse
     *
     * @param CreateTaskOrderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTaskOrderResponse
     */
    public function createTaskOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createUserId) {
            @$query['CreateUserId'] = $request->createUserId;
        }

        if (null !== $request->isUrgent) {
            @$query['IsUrgent'] = $request->isUrgent;
        }

        if (null !== $request->openGroupId) {
            @$query['OpenGroupId'] = $request->openGroupId;
        }

        if (null !== $request->overview) {
            @$query['Overview'] = $request->overview;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->urgentDescription) {
            @$query['UrgentDescription'] = $request->urgentDescription;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTaskOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建工单.
     *
     * @param request - CreateTaskOrderRequest
     * @returns CreateTaskOrderResponse
     *
     * @param CreateTaskOrderRequest $request
     *
     * @return CreateTaskOrderResponse
     */
    public function createTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskOrderWithOptions($request, $runtime);
    }

    /**
     * ListDdTaskOrder.
     *
     * @param request - ListDdTaskOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDdTaskOrderResponse
     *
     * @param ListDdTaskOrderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDdTaskOrderResponse
     */
    public function listDdTaskOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createRealName) {
            @$query['CreateRealName'] = $request->createRealName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isUrgent) {
            @$query['IsUrgent'] = $request->isUrgent;
        }

        if (null !== $request->openGroupId) {
            @$query['OpenGroupId'] = $request->openGroupId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDdTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDdTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDdTaskOrderResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * ListDdTaskOrder.
     *
     * @param request - ListDdTaskOrderRequest
     * @returns ListDdTaskOrderResponse
     *
     * @param ListDdTaskOrderRequest $request
     *
     * @return ListDdTaskOrderResponse
     */
    public function listDdTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDdTaskOrderWithOptions($request, $runtime);
    }

    /**
     * 获取钉群中所有客户侧人员信息.
     *
     * @param request - ListEnterpriseDingtalkGroupCustomerMembersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnterpriseDingtalkGroupCustomerMembersResponse
     *
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->openGroupId) {
            @$query['OpenGroupId'] = $request->openGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnterpriseDingtalkGroupCustomerMembers',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnterpriseDingtalkGroupCustomerMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnterpriseDingtalkGroupCustomerMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取钉群中所有客户侧人员信息.
     *
     * @param request - ListEnterpriseDingtalkGroupCustomerMembersRequest
     * @returns ListEnterpriseDingtalkGroupCustomerMembersResponse
     *
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime);
    }

    /**
     * 查询所有企业钉群成员.
     *
     * @param request - ListEnterpriseDingtalkGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEnterpriseDingtalkGroupsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListEnterpriseDingtalkGroupsResponse
     */
    public function listEnterpriseDingtalkGroupsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListEnterpriseDingtalkGroups',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEnterpriseDingtalkGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnterpriseDingtalkGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询所有企业钉群成员.
     *
     * @returns ListEnterpriseDingtalkGroupsResponse
     *
     * @return ListEnterpriseDingtalkGroupsResponse
     */
    public function listEnterpriseDingtalkGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupsWithOptions($runtime);
    }

    /**
     * 获取问题分类.
     *
     * @param request - ListProductByGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListProductByGroupResponse
     *
     * @param ListProductByGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProductByGroupResponse
     */
    public function listProductByGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->openGroupId) {
            @$query['OpenGroupId'] = $request->openGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductByGroup',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProductByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProductByGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取问题分类.
     *
     * @param request - ListProductByGroupRequest
     * @returns ListProductByGroupResponse
     *
     * @param ListProductByGroupRequest $request
     *
     * @return ListProductByGroupResponse
     */
    public function listProductByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductByGroupWithOptions($request, $runtime);
    }
}
