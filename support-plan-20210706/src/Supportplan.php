<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CloseTaskOrderRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CloseTaskOrderResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportShrinkRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\DeleteEnterpriseDingtalkGroupCustomerMemberRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\DeleteEnterpriseDingtalkGroupCustomerMemberResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupCustomerMemberRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupCustomerMemberResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListDdTaskOrderRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListDdTaskOrderResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupCustomerMembersRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupCustomerMembersResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupsResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListProductByGroupRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ListProductByGroupResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\QueryTaskInfoRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\QueryTaskInfoResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ReplyMessageApiRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\ReplyMessageApiResponse;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\RestOpenTaskOrderRequest;
use AlibabaCloud\SDK\Supportplan\V20210706\Models\RestOpenTaskOrderResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 关闭任务单
     *  *
     * @param CloseTaskOrderRequest $request CloseTaskOrderRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseTaskOrderResponse CloseTaskOrderResponse
     */
    public function closeTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭任务单
     *  *
     * @param CloseTaskOrderRequest $request CloseTaskOrderRequest
     *
     * @return CloseTaskOrderResponse CloseTaskOrderResponse
     */
    public function closeTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeTaskOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 创建工单
     *  *
     * @param CreateTaskOrderRequest $request CreateTaskOrderRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskOrderResponse CreateTaskOrderResponse
     */
    public function createTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createUserId)) {
            $query['CreateUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->isUrgent)) {
            $query['IsUrgent'] = $request->isUrgent;
        }
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        if (!Utils::isUnset($request->overview)) {
            $query['Overview'] = $request->overview;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->urgentDescription)) {
            $query['UrgentDescription'] = $request->urgentDescription;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工单
     *  *
     * @param CreateTaskOrderRequest $request CreateTaskOrderRequest
     *
     * @return CreateTaskOrderResponse CreateTaskOrderResponse
     */
    public function createTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 告警建单
     *  *
     * @param CreateTaskOrderByEventReportRequest $tmpReq  CreateTaskOrderByEventReportRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskOrderByEventReportResponse CreateTaskOrderByEventReportResponse
     */
    public function createTaskOrderByEventReportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTaskOrderByEventReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->eventBody)) {
            $request->eventBodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventBody, 'EventBody', 'json');
        }
        if (!Utils::isUnset($tmpReq->extinfo)) {
            $request->extinfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extinfo, 'Extinfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->business)) {
            $query['Business'] = $request->business;
        }
        if (!Utils::isUnset($request->createRealName)) {
            $query['CreateRealName'] = $request->createRealName;
        }
        if (!Utils::isUnset($request->createUserId)) {
            $query['CreateUserId'] = $request->createUserId;
        }
        if (!Utils::isUnset($request->eventBodyShrink)) {
            $query['EventBody'] = $request->eventBodyShrink;
        }
        if (!Utils::isUnset($request->extinfoShrink)) {
            $query['Extinfo'] = $request->extinfoShrink;
        }
        if (!Utils::isUnset($request->importantDesc)) {
            $query['ImportantDesc'] = $request->importantDesc;
        }
        if (!Utils::isUnset($request->joinChildGroupUserIds)) {
            $query['JoinChildGroupUserIds'] = $request->joinChildGroupUserIds;
        }
        if (!Utils::isUnset($request->monitorCongregation)) {
            $query['MonitorCongregation'] = $request->monitorCongregation;
        }
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskOrderByEventReport',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskOrderByEventReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 告警建单
     *  *
     * @param CreateTaskOrderByEventReportRequest $request CreateTaskOrderByEventReportRequest
     *
     * @return CreateTaskOrderByEventReportResponse CreateTaskOrderByEventReportResponse
     */
    public function createTaskOrderByEventReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskOrderByEventReportWithOptions($request, $runtime);
    }

    /**
     * @summary 删除企业钉群客户侧成员
     *  *
     * @param DeleteEnterpriseDingtalkGroupCustomerMemberRequest $tmpReq  DeleteEnterpriseDingtalkGroupCustomerMemberRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberResponse DeleteEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function deleteEnterpriseDingtalkGroupCustomerMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mobiles)) {
            $request->mobilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mobiles, 'Mobiles', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->mobilesShrink)) {
            $body['Mobiles'] = $request->mobilesShrink;
        }
        if (!Utils::isUnset($request->openGroupId)) {
            $body['OpenGroupId'] = $request->openGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnterpriseDingtalkGroupCustomerMember',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEnterpriseDingtalkGroupCustomerMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除企业钉群客户侧成员
     *  *
     * @param DeleteEnterpriseDingtalkGroupCustomerMemberRequest $request DeleteEnterpriseDingtalkGroupCustomerMemberRequest
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberResponse DeleteEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function deleteEnterpriseDingtalkGroupCustomerMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime);
    }

    /**
     * @summary 查询企业钉群
     *  *
     * @param GetEnterpriseDingtalkGroupRequest $request GetEnterpriseDingtalkGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEnterpriseDingtalkGroupResponse GetEnterpriseDingtalkGroupResponse
     */
    public function getEnterpriseDingtalkGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->openGroupId)) {
            $body['OpenGroupId'] = $request->openGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseDingtalkGroup',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseDingtalkGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询企业钉群
     *  *
     * @param GetEnterpriseDingtalkGroupRequest $request GetEnterpriseDingtalkGroupRequest
     *
     * @return GetEnterpriseDingtalkGroupResponse GetEnterpriseDingtalkGroupResponse
     */
    public function getEnterpriseDingtalkGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDingtalkGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 获取企业钉群客户侧成员
     *  *
     * @param GetEnterpriseDingtalkGroupCustomerMemberRequest $request GetEnterpriseDingtalkGroupCustomerMemberRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberResponse GetEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function getEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->openGroupId)) {
            $body['OpenGroupId'] = $request->openGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEnterpriseDingtalkGroupCustomerMember',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnterpriseDingtalkGroupCustomerMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取企业钉群客户侧成员
     *  *
     * @param GetEnterpriseDingtalkGroupCustomerMemberRequest $request GetEnterpriseDingtalkGroupCustomerMemberRequest
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberResponse GetEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function getEnterpriseDingtalkGroupCustomerMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime);
    }

    /**
     * @summary ListDdTaskOrder
     *  *
     * @param ListDdTaskOrderRequest $request ListDdTaskOrderRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDdTaskOrderResponse ListDdTaskOrderResponse
     */
    public function listDdTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createRealName)) {
            $query['CreateRealName'] = $request->createRealName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isUrgent)) {
            $query['IsUrgent'] = $request->isUrgent;
        }
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDdTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListDdTaskOrder
     *  *
     * @param ListDdTaskOrderRequest $request ListDdTaskOrderRequest
     *
     * @return ListDdTaskOrderResponse ListDdTaskOrderResponse
     */
    public function listDdTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDdTaskOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 获取钉群中所有客户侧人员信息
     *  *
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request ListEnterpriseDingtalkGroupCustomerMembersRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListEnterpriseDingtalkGroupCustomerMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取钉群中所有客户侧人员信息
     *  *
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request ListEnterpriseDingtalkGroupCustomerMembersRequest
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询所有企业钉群成员
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnterpriseDingtalkGroupsResponse ListEnterpriseDingtalkGroupsResponse
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

        return ListEnterpriseDingtalkGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询所有企业钉群成员
     *  *
     * @return ListEnterpriseDingtalkGroupsResponse ListEnterpriseDingtalkGroupsResponse
     */
    public function listEnterpriseDingtalkGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupsWithOptions($runtime);
    }

    /**
     * @summary 获取问题分类
     *  *
     * @param ListProductByGroupRequest $request ListProductByGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductByGroupResponse ListProductByGroupResponse
     */
    public function listProductByGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListProductByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取问题分类
     *  *
     * @param ListProductByGroupRequest $request ListProductByGroupRequest
     *
     * @return ListProductByGroupResponse ListProductByGroupResponse
     */
    public function listProductByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductByGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 获取工单状态
     *  *
     * @param QueryTaskInfoRequest $request QueryTaskInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskInfoResponse QueryTaskInfoResponse
     */
    public function queryTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskInfo',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工单状态
     *  *
     * @param QueryTaskInfoRequest $request QueryTaskInfoRequest
     *
     * @return QueryTaskInfoResponse QueryTaskInfoResponse
     */
    public function queryTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 客户回复消息
     *  *
     * @param ReplyMessageApiRequest $request ReplyMessageApiRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReplyMessageApiResponse ReplyMessageApiResponse
     */
    public function replyMessageApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->msgContent)) {
            $query['MsgContent'] = $request->msgContent;
        }
        if (!Utils::isUnset($request->msgType)) {
            $query['MsgType'] = $request->msgType;
        }
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReplyMessageApi',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReplyMessageApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 客户回复消息
     *  *
     * @param ReplyMessageApiRequest $request ReplyMessageApiRequest
     *
     * @return ReplyMessageApiResponse ReplyMessageApiResponse
     */
    public function replyMessageApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replyMessageApiWithOptions($request, $runtime);
    }

    /**
     * @summary 重开任务单(待客户确认状态)
     *  *
     * @param RestOpenTaskOrderRequest $request RestOpenTaskOrderRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RestOpenTaskOrderResponse RestOpenTaskOrderResponse
     */
    public function restOpenTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->openGroupId)) {
            $query['OpenGroupId'] = $request->openGroupId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->resetContent)) {
            $query['ResetContent'] = $request->resetContent;
        }
        if (!Utils::isUnset($request->resetType)) {
            $query['ResetType'] = $request->resetType;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestOpenTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestOpenTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重开任务单(待客户确认状态)
     *  *
     * @param RestOpenTaskOrderRequest $request RestOpenTaskOrderRequest
     *
     * @return RestOpenTaskOrderResponse RestOpenTaskOrderResponse
     */
    public function restOpenTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restOpenTaskOrderWithOptions($request, $runtime);
    }
}
