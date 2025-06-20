<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Safe\V20220117\Models\CancelBlockRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\CancelBlockResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCancelRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCancelResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckShrinkRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeEndRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeEndResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeStartRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeStartResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockShrinkRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateOperatorRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateOperatorResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryApproveFlowRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryApproveFlowResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryChangeInfoRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryChangeInfoResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCustomerRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCustomerResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryExecuteInfoRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryExecuteInfoResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryInnerProductInfoRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryInnerProductInfoResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryRegionAzRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryRegionAzResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCancelRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCancelResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeEndRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeEndResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryApproveFlowRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryApproveFlowResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeStartApproveRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeStartApproveResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeStartRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeStartResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeScopeDataRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeScopeDataResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\StartApproveRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\StartApproveResponse;
use AlibabaCloud\SDK\Safe\V20220117\Models\SyncProductRequest;
use AlibabaCloud\SDK\Safe\V20220117\Models\SyncProductResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Safe extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('safe', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 取消封网接口.
     *
     * @param request - CancelBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelBlockResponse
     *
     * @param CancelBlockRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelBlockResponse
     */
    public function cancelBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->blockId) {
            @$body['BlockId'] = $request->blockId;
        }

        if (null !== $request->cancelBLockDesc) {
            @$body['CancelBLockDesc'] = $request->cancelBLockDesc;
        }

        if (null !== $request->createEmpId) {
            @$body['CreateEmpId'] = $request->createEmpId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelBlock',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消封网接口.
     *
     * @param request - CancelBlockRequest
     *
     * @returns CancelBlockResponse
     *
     * @param CancelBlockRequest $request
     *
     * @return CancelBlockResponse
     */
    public function cancelBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelBlockWithOptions($request, $runtime);
    }

    /**
     * 变更取消.
     *
     * @param request - ChangeCancelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeCancelResponse
     *
     * @param ChangeCancelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ChangeCancelResponse
     */
    public function changeCancelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$query['AuthSign'] = $request->authSign;
        }

        if (null !== $request->reqTimestamp) {
            @$query['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$query['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeCancel',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更取消.
     *
     * @param request - ChangeCancelRequest
     *
     * @returns ChangeCancelResponse
     *
     * @param ChangeCancelRequest $request
     *
     * @return ChangeCancelResponse
     */
    public function changeCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCancelWithOptions($request, $runtime);
    }

    /**
     * 安全变更check.
     *
     * @param tmpReq - ChangeCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeCheckResponse
     *
     * @param ChangeCheckRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ChangeCheckResponse
     */
    public function changeCheckWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChangeCheckShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->damagedChangeNotices) {
            $request->damagedChangeNoticesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->damagedChangeNotices, 'DamagedChangeNotices', 'json');
        }

        $body = [];
        if (null !== $request->affectCustomer) {
            @$body['AffectCustomer'] = $request->affectCustomer;
        }

        $bodyFlat = [];
        if (null !== $request->approveFlowParam) {
            @$bodyFlat['ApproveFlowParam'] = $request->approveFlowParam;
        }

        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->bgCustomTemplateExtraDTO) {
            @$bodyFlat['BgCustomTemplateExtraDTO'] = $request->bgCustomTemplateExtraDTO;
        }

        if (null !== $request->bgVid) {
            @$body['BgVid'] = $request->bgVid;
        }

        if (null !== $request->blockInfos) {
            @$body['BlockInfos'] = $request->blockInfos;
        }

        if (null !== $request->callBackInfo) {
            @$bodyFlat['CallBackInfo'] = $request->callBackInfo;
        }

        if (null !== $request->changeDataType) {
            @$body['ChangeDataType'] = $request->changeDataType;
        }

        if (null !== $request->changeDesc) {
            @$body['ChangeDesc'] = $request->changeDesc;
        }

        if (null !== $request->changeEndTime) {
            @$body['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeEnv) {
            @$body['ChangeEnv'] = $request->changeEnv;
        }

        if (null !== $request->changeItems) {
            @$body['ChangeItems'] = $request->changeItems;
        }

        if (null !== $request->changeObject) {
            @$body['ChangeObject'] = $request->changeObject;
        }

        if (null !== $request->changeOptSubType) {
            @$body['ChangeOptSubType'] = $request->changeOptSubType;
        }

        if (null !== $request->changeOptType) {
            @$body['ChangeOptType'] = $request->changeOptType;
        }

        if (null !== $request->changeReason) {
            @$body['ChangeReason'] = $request->changeReason;
        }

        if (null !== $request->changeRmarks) {
            @$body['ChangeRmarks'] = $request->changeRmarks;
        }

        if (null !== $request->changeSchemes) {
            @$body['ChangeSchemes'] = $request->changeSchemes;
        }

        if (null !== $request->changeStartTime) {
            @$body['ChangeStartTime'] = $request->changeStartTime;
        }

        if (null !== $request->changeSubTypeDesc) {
            @$body['ChangeSubTypeDesc'] = $request->changeSubTypeDesc;
        }

        if (null !== $request->changeSystem) {
            @$body['ChangeSystem'] = $request->changeSystem;
        }

        if (null !== $request->changeTimes) {
            @$body['ChangeTimes'] = $request->changeTimes;
        }

        if (null !== $request->changeTitle) {
            @$body['ChangeTitle'] = $request->changeTitle;
        }

        if (null !== $request->changeValidation) {
            @$body['ChangeValidation'] = $request->changeValidation;
        }

        if (null !== $request->creatorEmpId) {
            @$body['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->damagedChangeNoticesShrink) {
            @$body['DamagedChangeNotices'] = $request->damagedChangeNoticesShrink;
        }

        if (null !== $request->executorEmpId) {
            @$body['ExecutorEmpId'] = $request->executorEmpId;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->follower) {
            @$body['Follower'] = $request->follower;
        }

        if (null !== $request->grayStatus) {
            @$body['GrayStatus'] = $request->grayStatus;
        }

        if (null !== $request->harmChangeNoticeEnum) {
            @$body['HarmChangeNoticeEnum'] = $request->harmChangeNoticeEnum;
        }

        if (null !== $request->incidence) {
            @$body['Incidence'] = $request->incidence;
        }

        if (null !== $request->influenceInfo) {
            @$bodyFlat['InfluenceInfo'] = $request->influenceInfo;
        }

        if (null !== $request->instance) {
            @$bodyFlat['Instance'] = $request->instance;
        }

        if (null !== $request->needModifyDoc) {
            @$body['NeedModifyDoc'] = $request->needModifyDoc;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->releasePackageInfos) {
            @$body['ReleasePackageInfos'] = $request->releasePackageInfos;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->reuseSourceOrderId) {
            @$body['ReuseSourceOrderId'] = $request->reuseSourceOrderId;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->rollback) {
            @$body['Rollback'] = $request->rollback;
        }

        if (null !== $request->sourceName) {
            @$body['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->sourceUrl) {
            @$body['SourceUrl'] = $request->sourceUrl;
        }

        if (null !== $request->whiteType) {
            @$body['WhiteType'] = $request->whiteType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeCheck',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 安全变更check.
     *
     * @param request - ChangeCheckRequest
     *
     * @returns ChangeCheckResponse
     *
     * @param ChangeCheckRequest $request
     *
     * @return ChangeCheckResponse
     */
    public function changeCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeCheckWithOptions($request, $runtime);
    }

    /**
     * 变更执行end.
     *
     * @param request - ChangeEndRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeEndResponse
     *
     * @param ChangeEndRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ChangeEndResponse
     */
    public function changeEndWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$query['AuthSign'] = $request->authSign;
        }

        if (null !== $request->changeEndTime) {
            @$query['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeResult) {
            @$query['ChangeResult'] = $request->changeResult;
        }

        if (null !== $request->curBatchNo) {
            @$query['CurBatchNo'] = $request->curBatchNo;
        }

        if (null !== $request->executorEmpId) {
            @$query['ExecutorEmpId'] = $request->executorEmpId;
        }

        if (null !== $request->reqTimestamp) {
            @$query['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$query['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->totalBatchNo) {
            @$query['TotalBatchNo'] = $request->totalBatchNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeEnd',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeEndResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更执行end.
     *
     * @param request - ChangeEndRequest
     *
     * @returns ChangeEndResponse
     *
     * @param ChangeEndRequest $request
     *
     * @return ChangeEndResponse
     */
    public function changeEnd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeEndWithOptions($request, $runtime);
    }

    /**
     * 变更执行start.
     *
     * @param request - ChangeStartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeStartResponse
     *
     * @param ChangeStartRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ChangeStartResponse
     */
    public function changeStartWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$query['AuthSign'] = $request->authSign;
        }

        if (null !== $request->changeEndTime) {
            @$query['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeObject) {
            @$query['ChangeObject'] = $request->changeObject;
        }

        if (null !== $request->changeOptType) {
            @$query['ChangeOptType'] = $request->changeOptType;
        }

        if (null !== $request->changeStartTime) {
            @$query['ChangeStartTime'] = $request->changeStartTime;
        }

        if (null !== $request->changeTitle) {
            @$query['ChangeTitle'] = $request->changeTitle;
        }

        if (null !== $request->creatorEmpId) {
            @$query['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->curBatchNo) {
            @$query['CurBatchNo'] = $request->curBatchNo;
        }

        if (null !== $request->executorEmpId) {
            @$query['ExecutorEmpId'] = $request->executorEmpId;
        }

        if (null !== $request->reqTimestamp) {
            @$query['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$query['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->totalBatchNo) {
            @$query['TotalBatchNo'] = $request->totalBatchNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeStart',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更执行start.
     *
     * @param request - ChangeStartRequest
     *
     * @returns ChangeStartResponse
     *
     * @param ChangeStartRequest $request
     *
     * @return ChangeStartResponse
     */
    public function changeStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeStartWithOptions($request, $runtime);
    }

    /**
     * 三方创建封网接口.
     *
     * @param request - CreateBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBlockResponse
     *
     * @param CreateBlockRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateBlockResponse
     */
    public function createBlockWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->approveStrategyNodes) {
            @$bodyFlat['ApproveStrategyNodes'] = $request->approveStrategyNodes;
        }

        if (null !== $request->blockId) {
            @$body['BlockId'] = $request->blockId;
        }

        if (null !== $request->director) {
            @$body['Director'] = $request->director;
        }

        if (null !== $request->isNeedApprove) {
            @$body['IsNeedApprove'] = $request->isNeedApprove;
        }

        if (null !== $request->isRecall) {
            @$body['IsRecall'] = $request->isRecall;
        }

        if (null !== $request->isTemplate) {
            @$body['IsTemplate'] = $request->isTemplate;
        }

        if (null !== $request->labelName) {
            @$body['LabelName'] = $request->labelName;
        }

        if (null !== $request->noticeDesc) {
            @$body['NoticeDesc'] = $request->noticeDesc;
        }

        if (null !== $request->noticeEnclosureInfos) {
            @$bodyFlat['NoticeEnclosureInfos'] = $request->noticeEnclosureInfos;
        }

        if (null !== $request->noticeRequestLink) {
            @$body['NoticeRequestLink'] = $request->noticeRequestLink;
        }

        if (null !== $request->noticeType) {
            @$body['NoticeType'] = $request->noticeType;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->scopes) {
            @$bodyFlat['Scopes'] = $request->scopes;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->versionId) {
            @$body['VersionId'] = $request->versionId;
        }

        if (null !== $request->creatorEmpId) {
            @$body['creatorEmpId'] = $request->creatorEmpId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBlock',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 三方创建封网接口.
     *
     * @param request - CreateBlockRequest
     *
     * @returns CreateBlockResponse
     *
     * @param CreateBlockRequest $request
     *
     * @return CreateBlockResponse
     */
    public function createBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBlockWithOptions($request, $runtime);
    }

    /**
     * 创建蚂蚁封网接口.
     *
     * @param tmpReq - CreateMaYiBlockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMaYiBlockResponse
     *
     * @param CreateMaYiBlockRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMaYiBlockResponse
     */
    public function createMaYiBlockWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMaYiBlockShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scope) {
            $request->scopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scope, 'Scope', 'json');
        }

        $body = [];
        if (null !== $request->blockId) {
            @$body['BlockId'] = $request->blockId;
        }

        if (null !== $request->blockTimes) {
            @$body['BlockTimes'] = $request->blockTimes;
        }

        if (null !== $request->blockType) {
            @$body['BlockType'] = $request->blockType;
        }

        if (null !== $request->creatorEmpId) {
            @$body['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->director) {
            @$body['Director'] = $request->director;
        }

        if (null !== $request->faultVersion) {
            @$body['FaultVersion'] = $request->faultVersion;
        }

        if (null !== $request->information) {
            @$body['Information'] = $request->information;
        }

        if (null !== $request->reason) {
            @$body['Reason'] = $request->reason;
        }

        if (null !== $request->scopeShrink) {
            @$body['Scope'] = $request->scopeShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMaYiBlock',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMaYiBlockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建蚂蚁封网接口.
     *
     * @param request - CreateMaYiBlockRequest
     *
     * @returns CreateMaYiBlockResponse
     *
     * @param CreateMaYiBlockRequest $request
     *
     * @return CreateMaYiBlockResponse
     */
    public function createMaYiBlock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMaYiBlockWithOptions($request, $runtime);
    }

    /**
     * 创建操作类型.
     *
     * @param request - CreateOperatorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOperatorResponse
     *
     * @param CreateOperatorRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateOperatorResponse
     */
    public function createOperatorWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->bgObject) {
            @$body['BgObject'] = $request->bgObject;
        }

        if (null !== $request->bgSystem) {
            @$body['BgSystem'] = $request->bgSystem;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->curEmpId) {
            @$body['CurEmpId'] = $request->curEmpId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->noCheck) {
            @$body['NoCheck'] = $request->noCheck;
        }

        if (null !== $request->noRisk) {
            @$body['NoRisk'] = $request->noRisk;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOperator',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOperatorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建操作类型.
     *
     * @param request - CreateOperatorRequest
     *
     * @returns CreateOperatorResponse
     *
     * @param CreateOperatorRequest $request
     *
     * @return CreateOperatorResponse
     */
    public function createOperator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOperatorWithOptions($request, $runtime);
    }

    /**
     * 变更状态查询.
     *
     * @param request - QueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryResponse
     *
     * @param QueryRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return QueryResponse
     */
    public function queryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$query['AuthSign'] = $request->authSign;
        }

        if (null !== $request->needValidate) {
            @$query['NeedValidate'] = $request->needValidate;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->reqTimestamp) {
            @$query['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$query['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Query',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更状态查询.
     *
     * @param request - QueryRequest
     *
     * @returns QueryResponse
     *
     * @param QueryRequest $request
     *
     * @return QueryResponse
     */
    public function query($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWithOptions($request, $runtime);
    }

    /**
     * 查询审批实例信息.
     *
     * @param request - QueryApproveFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryApproveFlowResponse
     *
     * @param QueryApproveFlowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryApproveFlowResponse
     */
    public function queryApproveFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$query['AuthSign'] = $request->authSign;
        }

        if (null !== $request->reqTimestamp) {
            @$query['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$query['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->stage) {
            @$query['Stage'] = $request->stage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryApproveFlow',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryApproveFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审批实例信息.
     *
     * @param request - QueryApproveFlowRequest
     *
     * @returns QueryApproveFlowResponse
     *
     * @param QueryApproveFlowRequest $request
     *
     * @return QueryApproveFlowResponse
     */
    public function queryApproveFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryApproveFlowWithOptions($request, $runtime);
    }

    /**
     * 查封网事件.
     *
     * @param request - QueryBlockEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBlockEventResponse
     *
     * @param QueryBlockEventRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryBlockEventResponse
     */
    public function queryBlockEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->bgSystemName) {
            @$body['BgSystemName'] = $request->bgSystemName;
        }

        if (null !== $request->blockHarm) {
            @$body['BlockHarm'] = $request->blockHarm;
        }

        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->deptNo) {
            @$body['DeptNo'] = $request->deptNo;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->needRule) {
            @$body['NeedRule'] = $request->needRule;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->productCodes) {
            @$body['ProductCodes'] = $request->productCodes;
        }

        if (null !== $request->regionReqs) {
            @$body['RegionReqs'] = $request->regionReqs;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryBlockEvent',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBlockEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查封网事件.
     *
     * @param request - QueryBlockEventRequest
     *
     * @returns QueryBlockEventResponse
     *
     * @param QueryBlockEventRequest $request
     *
     * @return QueryBlockEventResponse
     */
    public function queryBlockEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBlockEventWithOptions($request, $runtime);
    }

    /**
     * 变更单详情.
     *
     * @param request - QueryChangeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryChangeInfoResponse
     *
     * @param QueryChangeInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryChangeInfoResponse
     */
    public function queryChangeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->az) {
            @$body['Az'] = $request->az;
        }

        if (null !== $request->bgVid) {
            @$body['BgVid'] = $request->bgVid;
        }

        if (null !== $request->buId) {
            @$body['BuId'] = $request->buId;
        }

        if (null !== $request->changeSystem) {
            @$body['ChangeSystem'] = $request->changeSystem;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        $bodyFlat = [];
        if (null !== $request->levelTree) {
            @$bodyFlat['LevelTree'] = $request->levelTree;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryChangeInfo',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryChangeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更单详情.
     *
     * @param request - QueryChangeInfoRequest
     *
     * @returns QueryChangeInfoResponse
     *
     * @param QueryChangeInfoRequest $request
     *
     * @return QueryChangeInfoResponse
     */
    public function queryChangeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChangeInfoWithOptions($request, $runtime);
    }

    /**
     * 查询检测详情接口.
     *
     * @param request - QueryCheckInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCheckInfoResponse
     *
     * @param QueryCheckInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryCheckInfoResponse
     */
    public function queryCheckInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCheckInfo',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCheckInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询检测详情接口.
     *
     * @param request - QueryCheckInfoRequest
     *
     * @returns QueryCheckInfoResponse
     *
     * @param QueryCheckInfoRequest $request
     *
     * @return QueryCheckInfoResponse
     */
    public function queryCheckInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCheckInfoWithOptions($request, $runtime);
    }

    /**
     * 查询敏感客户.
     *
     * @param request - QueryCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomerResponse
     *
     * @param QueryCustomerRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCustomerResponse
     */
    public function queryCustomerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCustomer',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询敏感客户.
     *
     * @param request - QueryCustomerRequest
     *
     * @returns QueryCustomerResponse
     *
     * @param QueryCustomerRequest $request
     *
     * @return QueryCustomerResponse
     */
    public function queryCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomerWithOptions($request, $runtime);
    }

    /**
     * 执行单详情.
     *
     * @param request - QueryExecuteInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExecuteInfoResponse
     *
     * @param QueryExecuteInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryExecuteInfoResponse
     */
    public function queryExecuteInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->az) {
            @$body['Az'] = $request->az;
        }

        if (null !== $request->bgVid) {
            @$body['BgVid'] = $request->bgVid;
        }

        if (null !== $request->buId) {
            @$body['BuId'] = $request->buId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->exVid) {
            @$body['ExVid'] = $request->exVid;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        $bodyFlat = [];
        if (null !== $request->levelTree) {
            @$bodyFlat['LevelTree'] = $request->levelTree;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryExecuteInfo',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryExecuteInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行单详情.
     *
     * @param request - QueryExecuteInfoRequest
     *
     * @returns QueryExecuteInfoResponse
     *
     * @param QueryExecuteInfoRequest $request
     *
     * @return QueryExecuteInfoResponse
     */
    public function queryExecuteInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExecuteInfoWithOptions($request, $runtime);
    }

    /**
     * 查询内部产品接口.
     *
     * @param request - QueryInnerProductInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInnerProductInfoResponse
     *
     * @param QueryInnerProductInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryInnerProductInfoResponse
     */
    public function queryInnerProductInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryInnerProductInfo',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInnerProductInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询内部产品接口.
     *
     * @param request - QueryInnerProductInfoRequest
     *
     * @returns QueryInnerProductInfoResponse
     *
     * @param QueryInnerProductInfoRequest $request
     *
     * @return QueryInnerProductInfoResponse
     */
    public function queryInnerProductInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInnerProductInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryRegionAzRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRegionAzResponse
     *
     * @param QueryRegionAzRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryRegionAzResponse
     */
    public function queryRegionAzWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryRegionAz',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRegionAzResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryRegionAzRequest
     *
     * @returns QueryRegionAzResponse
     *
     * @param QueryRegionAzRequest $request
     *
     * @return QueryRegionAzResponse
     */
    public function queryRegionAz($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRegionAzWithOptions($request, $runtime);
    }

    /**
     * 变更取消接口.
     *
     * @param request - SafeChangeCancelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeCancelResponse
     *
     * @param SafeChangeCancelRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SafeChangeCancelResponse
     */
    public function safeChangeCancelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->bgVid) {
            @$body['BgVid'] = $request->bgVid;
        }

        if (null !== $request->operateEmpNo) {
            @$body['OperateEmpNo'] = $request->operateEmpNo;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeCancel',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更取消接口.
     *
     * @param request - SafeChangeCancelRequest
     *
     * @returns SafeChangeCancelResponse
     *
     * @param SafeChangeCancelRequest $request
     *
     * @return SafeChangeCancelResponse
     */
    public function safeChangeCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeCancelWithOptions($request, $runtime);
    }

    /**
     * 变更check接口.
     *
     * @param tmpReq - SafeChangeCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeCheckResponse
     *
     * @param SafeChangeCheckRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return SafeChangeCheckResponse
     */
    public function safeChangeCheckWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SafeChangeCheckShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->harmNoticeCombineParam) {
            $request->harmNoticeCombineParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->harmNoticeCombineParam, 'HarmNoticeCombineParam', 'json');
        }

        $query = [];
        if (null !== $request->checker) {
            @$query['Checker'] = $request->checker;
        }

        if (null !== $request->harmChangeNoticeEnum) {
            @$query['HarmChangeNoticeEnum'] = $request->harmChangeNoticeEnum;
        }

        $body = [];
        if (null !== $request->affectCustomer) {
            @$body['AffectCustomer'] = $request->affectCustomer;
        }

        $bodyFlat = [];
        if (null !== $request->approveFlowParam) {
            @$bodyFlat['ApproveFlowParam'] = $request->approveFlowParam;
        }

        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->bgCustomTemplateExtraDTO) {
            @$bodyFlat['BgCustomTemplateExtraDTO'] = $request->bgCustomTemplateExtraDTO;
        }

        if (null !== $request->blockInfos) {
            @$body['BlockInfos'] = $request->blockInfos;
        }

        if (null !== $request->callBackInfo) {
            @$bodyFlat['CallBackInfo'] = $request->callBackInfo;
        }

        if (null !== $request->changeDataType) {
            @$body['ChangeDataType'] = $request->changeDataType;
        }

        if (null !== $request->changeDesc) {
            @$body['ChangeDesc'] = $request->changeDesc;
        }

        if (null !== $request->changeEndTime) {
            @$body['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeEnv) {
            @$body['ChangeEnv'] = $request->changeEnv;
        }

        if (null !== $request->changeItems) {
            @$body['ChangeItems'] = $request->changeItems;
        }

        if (null !== $request->changeObject) {
            @$body['ChangeObject'] = $request->changeObject;
        }

        if (null !== $request->changeOptSubType) {
            @$body['ChangeOptSubType'] = $request->changeOptSubType;
        }

        if (null !== $request->changeOptType) {
            @$body['ChangeOptType'] = $request->changeOptType;
        }

        if (null !== $request->changeReason) {
            @$body['ChangeReason'] = $request->changeReason;
        }

        if (null !== $request->changeRmarks) {
            @$body['ChangeRmarks'] = $request->changeRmarks;
        }

        if (null !== $request->changeSchemes) {
            @$body['ChangeSchemes'] = $request->changeSchemes;
        }

        if (null !== $request->changeStartTime) {
            @$body['ChangeStartTime'] = $request->changeStartTime;
        }

        if (null !== $request->changeSubTypeDesc) {
            @$body['ChangeSubTypeDesc'] = $request->changeSubTypeDesc;
        }

        if (null !== $request->changeSystem) {
            @$body['ChangeSystem'] = $request->changeSystem;
        }

        if (null !== $request->changeTimes) {
            @$body['ChangeTimes'] = $request->changeTimes;
        }

        if (null !== $request->changeTitle) {
            @$body['ChangeTitle'] = $request->changeTitle;
        }

        if (null !== $request->changeValidation) {
            @$body['ChangeValidation'] = $request->changeValidation;
        }

        if (null !== $request->creatorEmpId) {
            @$body['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->damagedChangeNotices) {
            @$bodyFlat['DamagedChangeNotices'] = $request->damagedChangeNotices;
        }

        if (null !== $request->executorEmpId) {
            @$body['ExecutorEmpId'] = $request->executorEmpId;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->follower) {
            @$body['Follower'] = $request->follower;
        }

        if (null !== $request->grayStatus) {
            @$body['GrayStatus'] = $request->grayStatus;
        }

        if (null !== $request->harmNoticeCombineParamShrink) {
            @$body['HarmNoticeCombineParam'] = $request->harmNoticeCombineParamShrink;
        }

        if (null !== $request->incidence) {
            @$body['Incidence'] = $request->incidence;
        }

        if (null !== $request->influenceInfo) {
            @$bodyFlat['InfluenceInfo'] = $request->influenceInfo;
        }

        if (null !== $request->instance) {
            @$bodyFlat['Instance'] = $request->instance;
        }

        if (null !== $request->needModifyDoc) {
            @$body['NeedModifyDoc'] = $request->needModifyDoc;
        }

        if (null !== $request->operateEmpNo) {
            @$body['OperateEmpNo'] = $request->operateEmpNo;
        }

        if (null !== $request->product) {
            @$body['Product'] = $request->product;
        }

        if (null !== $request->releasePackageInfos) {
            @$body['ReleasePackageInfos'] = $request->releasePackageInfos;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->reuseSourceOrderId) {
            @$body['ReuseSourceOrderId'] = $request->reuseSourceOrderId;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->rollback) {
            @$body['Rollback'] = $request->rollback;
        }

        if (null !== $request->sourceName) {
            @$body['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->sourceUrl) {
            @$body['SourceUrl'] = $request->sourceUrl;
        }

        if (null !== $request->whiteType) {
            @$body['whiteType'] = $request->whiteType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeCheck',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更check接口.
     *
     * @param request - SafeChangeCheckRequest
     *
     * @returns SafeChangeCheckResponse
     *
     * @param SafeChangeCheckRequest $request
     *
     * @return SafeChangeCheckResponse
     */
    public function safeChangeCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeCheckWithOptions($request, $runtime);
    }

    /**
     * 变更End接口.
     *
     * @param request - SafeChangeEndRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeEndResponse
     *
     * @param SafeChangeEndRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SafeChangeEndResponse
     */
    public function safeChangeEndWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->changeEndTime) {
            @$body['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeResult) {
            @$body['ChangeResult'] = $request->changeResult;
        }

        if (null !== $request->curBatchNo) {
            @$body['CurBatchNo'] = $request->curBatchNo;
        }

        if (null !== $request->executorEmpId) {
            @$body['ExecutorEmpId'] = $request->executorEmpId;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->totalBatchNo) {
            @$body['TotalBatchNo'] = $request->totalBatchNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeEnd',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeEndResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更End接口.
     *
     * @param request - SafeChangeEndRequest
     *
     * @returns SafeChangeEndResponse
     *
     * @param SafeChangeEndRequest $request
     *
     * @return SafeChangeEndResponse
     */
    public function safeChangeEnd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeEndWithOptions($request, $runtime);
    }

    /**
     * 变更单查询.
     *
     * @param request - SafeChangeQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeQueryResponse
     *
     * @param SafeChangeQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SafeChangeQueryResponse
     */
    public function safeChangeQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->returnType) {
            @$query['ReturnType'] = $request->returnType;
        }

        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->needValidate) {
            @$body['NeedValidate'] = $request->needValidate;
        }

        if (null !== $request->queryType) {
            @$body['QueryType'] = $request->queryType;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeQuery',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更单查询.
     *
     * @param request - SafeChangeQueryRequest
     *
     * @returns SafeChangeQueryResponse
     *
     * @param SafeChangeQueryRequest $request
     *
     * @return SafeChangeQueryResponse
     */
    public function safeChangeQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeQueryWithOptions($request, $runtime);
    }

    /**
     * 查询审批实例信息.
     *
     * @param request - SafeChangeQueryApproveFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeQueryApproveFlowResponse
     *
     * @param SafeChangeQueryApproveFlowRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SafeChangeQueryApproveFlowResponse
     */
    public function safeChangeQueryApproveFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->stage) {
            @$body['Stage'] = $request->stage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeQueryApproveFlow',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeQueryApproveFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审批实例信息.
     *
     * @param request - SafeChangeQueryApproveFlowRequest
     *
     * @returns SafeChangeQueryApproveFlowResponse
     *
     * @param SafeChangeQueryApproveFlowRequest $request
     *
     * @return SafeChangeQueryApproveFlowResponse
     */
    public function safeChangeQueryApproveFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeQueryApproveFlowWithOptions($request, $runtime);
    }

    /**
     * 变更Start接口.
     *
     * @param request - SafeChangeStartRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeStartResponse
     *
     * @param SafeChangeStartRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SafeChangeStartResponse
     */
    public function safeChangeStartWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->changeEndTime) {
            @$body['ChangeEndTime'] = $request->changeEndTime;
        }

        if (null !== $request->changeObject) {
            @$body['ChangeObject'] = $request->changeObject;
        }

        if (null !== $request->changeOptType) {
            @$body['ChangeOptType'] = $request->changeOptType;
        }

        if (null !== $request->changeStartTime) {
            @$body['ChangeStartTime'] = $request->changeStartTime;
        }

        if (null !== $request->changeTitle) {
            @$body['ChangeTitle'] = $request->changeTitle;
        }

        if (null !== $request->creatorEmpId) {
            @$body['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->curBatchNo) {
            @$body['CurBatchNo'] = $request->curBatchNo;
        }

        if (null !== $request->executorEmpId) {
            @$body['ExecutorEmpId'] = $request->executorEmpId;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        if (null !== $request->totalBatchNo) {
            @$body['TotalBatchNo'] = $request->totalBatchNo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeStart',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeStartResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变更Start接口.
     *
     * @param request - SafeChangeStartRequest
     *
     * @returns SafeChangeStartResponse
     *
     * @param SafeChangeStartRequest $request
     *
     * @return SafeChangeStartResponse
     */
    public function safeChangeStart($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeStartWithOptions($request, $runtime);
    }

    /**
     * 提交审批.
     *
     * @param request - SafeChangeStartApproveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeChangeStartApproveResponse
     *
     * @param SafeChangeStartApproveRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SafeChangeStartApproveResponse
     */
    public function safeChangeStartApproveWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->creatorEmpId) {
            @$body['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$body['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeChangeStartApprove',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeChangeStartApproveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交审批.
     *
     * @param request - SafeChangeStartApproveRequest
     *
     * @returns SafeChangeStartApproveResponse
     *
     * @param SafeChangeStartApproveRequest $request
     *
     * @return SafeChangeStartApproveResponse
     */
    public function safeChangeStartApprove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeChangeStartApproveWithOptions($request, $runtime);
    }

    /**
     * 封网范围数据查询.
     *
     * @param request - SafeScopeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SafeScopeDataResponse
     *
     * @param SafeScopeDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SafeScopeDataResponse
     */
    public function safeScopeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->codeList) {
            @$body['CodeList'] = $request->codeList;
        }

        if (null !== $request->factor) {
            @$body['Factor'] = $request->factor;
        }

        if (null !== $request->groupBy) {
            @$body['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->idList) {
            @$body['IdList'] = $request->idList;
        }

        if (null !== $request->item) {
            @$body['Item'] = $request->item;
        }

        if (null !== $request->limit) {
            @$body['Limit'] = $request->limit;
        }

        if (null !== $request->needTotalCount) {
            @$body['NeedTotalCount'] = $request->needTotalCount;
        }

        if (null !== $request->orderBy) {
            @$body['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$body['OrderDirection'] = $request->orderDirection;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->parentCode) {
            @$body['ParentCode'] = $request->parentCode;
        }

        if (null !== $request->parentId) {
            @$body['ParentId'] = $request->parentId;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->regionNameEn) {
            @$body['RegionNameEn'] = $request->regionNameEn;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->searchValue) {
            @$body['SearchValue'] = $request->searchValue;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uid) {
            @$body['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SafeScopeData',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SafeScopeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 封网范围数据查询.
     *
     * @param request - SafeScopeDataRequest
     *
     * @returns SafeScopeDataResponse
     *
     * @param SafeScopeDataRequest $request
     *
     * @return SafeScopeDataResponse
     */
    public function safeScopeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->safeScopeDataWithOptions($request, $runtime);
    }

    /**
     * 提交审批.
     *
     * @param request - StartApproveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartApproveResponse
     *
     * @param StartApproveRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartApproveResponse
     */
    public function startApproveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$query['AuthSign'] = $request->authSign;
        }

        if (null !== $request->creatorEmpId) {
            @$query['CreatorEmpId'] = $request->creatorEmpId;
        }

        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->reqTimestamp) {
            @$query['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->sourceOrderId) {
            @$query['SourceOrderId'] = $request->sourceOrderId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartApprove',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartApproveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交审批.
     *
     * @param request - StartApproveRequest
     *
     * @returns StartApproveResponse
     *
     * @param StartApproveRequest $request
     *
     * @return StartApproveResponse
     */
    public function startApprove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startApproveWithOptions($request, $runtime);
    }

    /**
     * 同步产品接口.
     *
     * @param request - SyncProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncProductResponse
     *
     * @param SyncProductRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SyncProductResponse
     */
    public function syncProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authKey) {
            @$body['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSign) {
            @$body['AuthSign'] = $request->authSign;
        }

        if (null !== $request->reqTimestamp) {
            @$body['ReqTimestamp'] = $request->reqTimestamp;
        }

        if (null !== $request->syncProductList) {
            @$body['SyncProductList'] = $request->syncProductList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncProduct',
            'version' => '2022-01-17',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步产品接口.
     *
     * @param request - SyncProductRequest
     *
     * @returns SyncProductResponse
     *
     * @param SyncProductRequest $request
     *
     * @return SyncProductResponse
     */
    public function syncProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncProductWithOptions($request, $runtime);
    }
}
