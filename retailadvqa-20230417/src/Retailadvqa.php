<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\CalculateMemberLevelRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\CalculateMemberLevelResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\CalculateMemberLevelShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\EditMemberBasicInfoRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\EditMemberBasicInfoResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\EditMemberBasicInfoShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberAccountDetailPageQueryRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberAccountDetailPageQueryResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberAccountDetailPageQueryShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberPointChangeRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberPointChangeResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberPointChangeShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\QueryMemberBasicInfoRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\QueryMemberBasicInfoResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\QueryMemberBasicInfoShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoShrinkRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncMemberBehaviorInfoRequest;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncMemberBehaviorInfoResponse;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncMemberBehaviorInfoShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Retailadvqa extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('retailadvqa', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 开放平台同步会员基础信息
     *  *
     * @param AddMemberBasicInfoRequest $tmpReq  AddMemberBasicInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMemberBasicInfoResponse AddMemberBasicInfoResponse
     */
    public function addMemberBasicInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddMemberBasicInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMemberBasicInfo',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMemberBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开放平台同步会员基础信息
     *  *
     * @param AddMemberBasicInfoRequest $request AddMemberBasicInfoRequest
     *
     * @return AddMemberBasicInfoResponse AddMemberBasicInfoResponse
     */
    public function addMemberBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMemberBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 批量保存订单信息
     *  *
     * @param BatchSaveOrderPopRequest $tmpReq  BatchSaveOrderPopRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSaveOrderPopResponse BatchSaveOrderPopResponse
     */
    public function batchSaveOrderPopWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchSaveOrderPopShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orders)) {
            $request->ordersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orders, 'Orders', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ordersShrink)) {
            $query['Orders'] = $request->ordersShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSaveOrderPop',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSaveOrderPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量保存订单信息
     *  *
     * @param BatchSaveOrderPopRequest $request BatchSaveOrderPopRequest
     *
     * @return BatchSaveOrderPopResponse BatchSaveOrderPopResponse
     */
    public function batchSaveOrderPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSaveOrderPopWithOptions($request, $runtime);
    }

    /**
     * @summary 会员等级初始化
     *  *
     * @param CalculateMemberLevelRequest $tmpReq  CalculateMemberLevelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CalculateMemberLevelResponse CalculateMemberLevelResponse
     */
    public function calculateMemberLevelWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CalculateMemberLevelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'Body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['Body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CalculateMemberLevel',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CalculateMemberLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会员等级初始化
     *  *
     * @param CalculateMemberLevelRequest $request CalculateMemberLevelRequest
     *
     * @return CalculateMemberLevelResponse CalculateMemberLevelResponse
     */
    public function calculateMemberLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->calculateMemberLevelWithOptions($request, $runtime);
    }

    /**
     * @summary 会员信息编辑API
     *  *
     * @param EditMemberBasicInfoRequest $tmpReq  EditMemberBasicInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EditMemberBasicInfoResponse EditMemberBasicInfoResponse
     */
    public function editMemberBasicInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EditMemberBasicInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'Body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['Body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditMemberBasicInfo',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditMemberBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会员信息编辑API
     *  *
     * @param EditMemberBasicInfoRequest $request EditMemberBasicInfoRequest
     *
     * @return EditMemberBasicInfoResponse EditMemberBasicInfoResponse
     */
    public function editMemberBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editMemberBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 开放平台会员积分明细查询
     *  *
     * @param MemberAccountDetailPageQueryRequest $tmpReq  MemberAccountDetailPageQueryRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return MemberAccountDetailPageQueryResponse MemberAccountDetailPageQueryResponse
     */
    public function memberAccountDetailPageQueryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new MemberAccountDetailPageQueryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MemberAccountDetailPageQuery',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MemberAccountDetailPageQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开放平台会员积分明细查询
     *  *
     * @param MemberAccountDetailPageQueryRequest $request MemberAccountDetailPageQueryRequest
     *
     * @return MemberAccountDetailPageQueryResponse MemberAccountDetailPageQueryResponse
     */
    public function memberAccountDetailPageQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->memberAccountDetailPageQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 会员积分变更
     *  *
     * @param MemberPointChangeRequest $tmpReq  MemberPointChangeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MemberPointChangeResponse MemberPointChangeResponse
     */
    public function memberPointChangeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new MemberPointChangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MemberPointChange',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MemberPointChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 会员积分变更
     *  *
     * @param MemberPointChangeRequest $request MemberPointChangeRequest
     *
     * @return MemberPointChangeResponse MemberPointChangeResponse
     */
    public function memberPointChange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->memberPointChangeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询会员基础信息
     *  *
     * @param QueryMemberBasicInfoRequest $tmpReq  QueryMemberBasicInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMemberBasicInfoResponse QueryMemberBasicInfoResponse
     */
    public function queryMemberBasicInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMemberBasicInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMemberBasicInfo',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMemberBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会员基础信息
     *  *
     * @param QueryMemberBasicInfoRequest $request QueryMemberBasicInfoRequest
     *
     * @return QueryMemberBasicInfoResponse QueryMemberBasicInfoResponse
     */
    public function queryMemberBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMemberBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 卡券信息同步
     *  *
     * @param SyncCardInfoRequest $tmpReq  SyncCardInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncCardInfoResponse SyncCardInfoResponse
     */
    public function syncCardInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SyncCardInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncCardInfo',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncCardInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卡券信息同步
     *  *
     * @param SyncCardInfoRequest $request SyncCardInfoRequest
     *
     * @return SyncCardInfoResponse SyncCardInfoResponse
     */
    public function syncCardInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncCardInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 开放平台会员行为信息同步
     *  *
     * @param SyncMemberBehaviorInfoRequest $tmpReq  SyncMemberBehaviorInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncMemberBehaviorInfoResponse SyncMemberBehaviorInfoResponse
     */
    public function syncMemberBehaviorInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SyncMemberBehaviorInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncMemberBehaviorInfo',
            'version'     => '2023-04-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncMemberBehaviorInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开放平台会员行为信息同步
     *  *
     * @param SyncMemberBehaviorInfoRequest $request SyncMemberBehaviorInfoRequest
     *
     * @return SyncMemberBehaviorInfoResponse SyncMemberBehaviorInfoResponse
     */
    public function syncMemberBehaviorInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncMemberBehaviorInfoWithOptions($request, $runtime);
    }
}
