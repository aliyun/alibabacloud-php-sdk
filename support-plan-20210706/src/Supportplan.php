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
use AlibabaCloud\Tea\Tea;
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
     * @param CloseTaskOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloseTaskOrderResponse
     */
    public function closeTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['OrderId']  = $request->orderId;
        $query['UserName'] = $request->userName;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CloseTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseTaskOrderRequest $request
     *
     * @return CloseTaskOrderResponse
     */
    public function closeTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeTaskOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskOrderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTaskOrderResponse
     */
    public function createTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['CustomerRealName']     = $request->customerRealName;
        $query['CustomerUserId']       = $request->customerUserId;
        $query['ImportantDescription'] = $request->importantDescription;
        $query['IsImportant']          = $request->isImportant;
        $query['OpenGroupId']          = $request->openGroupId;
        $query['ProductType']          = $request->productType;
        $query['ProductTypeName']      = $request->productTypeName;
        $query['TaskTitle']            = $request->taskTitle;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateTaskOrderByEventReportRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateTaskOrderByEventReportResponse
     */
    public function createTaskOrderByEventReportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTaskOrderByEventReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->eventBody)) {
            $request->eventBodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->eventBody), 'EventBody', 'json');
        }
        if (!Utils::isUnset($tmpReq->extinfo)) {
            $request->extinfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extinfo, 'Extinfo', 'json');
        }
        $query                          = [];
        $query['Business']              = $request->business;
        $query['CreateRealName']        = $request->createRealName;
        $query['CreateUserId']          = $request->createUserId;
        $query['EventBody']             = $request->eventBodyShrink;
        $query['Extinfo']               = $request->extinfoShrink;
        $query['ImportantDesc']         = $request->importantDesc;
        $query['JoinChildGroupUserIds'] = $request->joinChildGroupUserIds;
        $query['MonitorCongregation']   = $request->monitorCongregation;
        $query['OpenGroupId']           = $request->openGroupId;
        $query['ProductType']           = $request->productType;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateTaskOrderByEventReport',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTaskOrderByEventReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTaskOrderByEventReportRequest $request
     *
     * @return CreateTaskOrderByEventReportResponse
     */
    public function createTaskOrderByEventReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskOrderByEventReportWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEnterpriseDingtalkGroupCustomerMemberRequest $tmpReq
     * @param RuntimeOptions                                     $runtime
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function deleteEnterpriseDingtalkGroupCustomerMemberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEnterpriseDingtalkGroupCustomerMemberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mobiles)) {
            $request->mobilesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mobiles, 'Mobiles', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
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
     * @param DeleteEnterpriseDingtalkGroupCustomerMemberRequest $request
     *
     * @return DeleteEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function deleteEnterpriseDingtalkGroupCustomerMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDingtalkGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEnterpriseDingtalkGroupResponse
     */
    public function getEnterpriseDingtalkGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
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
     * @param GetEnterpriseDingtalkGroupRequest $request
     *
     * @return GetEnterpriseDingtalkGroupResponse
     */
    public function getEnterpriseDingtalkGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDingtalkGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetEnterpriseDingtalkGroupCustomerMemberRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function getEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
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
     * @param GetEnterpriseDingtalkGroupCustomerMemberRequest $request
     *
     * @return GetEnterpriseDingtalkGroupCustomerMemberResponse
     */
    public function getEnterpriseDingtalkGroupCustomerMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnterpriseDingtalkGroupCustomerMemberWithOptions($request, $runtime);
    }

    /**
     * @param ListDdTaskOrderRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDdTaskOrderResponse
     */
    public function listDdTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['CallerParentId'] = $request->callerParentId;
        $query['CallerType']     = $request->callerType;
        $query['CallerUid']      = $request->callerUid;
        $query['OpenGroupId']    = $request->openGroupId;
        $query['OrderId']        = $request->orderId;
        $query['RequestId']      = $request->requestId;
        $query['TaskStatus']     = $request->taskStatus;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListDdTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDdTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListEnterpriseDingtalkGroupCustomerMembersRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return ListEnterpriseDingtalkGroupCustomerMembersResponse
     */
    public function listEnterpriseDingtalkGroupCustomerMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
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
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEnterpriseDingtalkGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListEnterpriseDingtalkGroupsResponse
     */
    public function listEnterpriseDingtalkGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnterpriseDingtalkGroupsWithOptions($runtime);
    }

    /**
     * @param ListProductByGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProductByGroupResponse
     */
    public function listProductByGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['OpenGroupId'] = $request->openGroupId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListProductByGroup',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductByGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductByGroupRequest $request
     *
     * @return ListProductByGroupResponse
     */
    public function listProductByGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductByGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryTaskInfoResponse
     */
    public function queryTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['OrderId'] = $request->orderId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskInfo',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTaskInfoRequest $request
     *
     * @return QueryTaskInfoResponse
     */
    public function queryTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param ReplyMessageApiRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReplyMessageApiResponse
     */
    public function replyMessageApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['MsgContent']  = $request->msgContent;
        $query['MsgType']     = $request->msgType;
        $query['OpenGroupId'] = $request->openGroupId;
        $query['OrderId']     = $request->orderId;
        $query['UserId']      = $request->userId;
        $query['UserName']    = $request->userName;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReplyMessageApi',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReplyMessageApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplyMessageApiRequest $request
     *
     * @return ReplyMessageApiResponse
     */
    public function replyMessageApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replyMessageApiWithOptions($request, $runtime);
    }

    /**
     * @param RestOpenTaskOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RestOpenTaskOrderResponse
     */
    public function restOpenTaskOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['OpenGroupId']  = $request->openGroupId;
        $query['OrderId']      = $request->orderId;
        $query['ResetContent'] = $request->resetContent;
        $query['ResetType']    = $request->resetType;
        $query['UserName']     = $request->userName;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RestOpenTaskOrder',
            'version'     => '2021-07-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestOpenTaskOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestOpenTaskOrderRequest $request
     *
     * @return RestOpenTaskOrderResponse
     */
    public function restOpenTaskOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restOpenTaskOrderWithOptions($request, $runtime);
    }
}
