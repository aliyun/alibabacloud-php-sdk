<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspDetailResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspDetailResponseBody\moudle\leafCodes;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspDetailResponseBody\moudle\materialInfo;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelEspDetailResponseBody\moudle\rootCode;
use AlibabaCloud\Tea\Model;

class moudle extends Model
{
    /**
     * @var int
     */
    public $bitFlag;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $grayIconUrl;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var leafCodes
     */
    public $leafCodes;

    /**
     * @var materialInfo
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $produceType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rootCode
     */
    public $rootCode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusStr;

    /**
     * @var int
     */
    public $submitAuditTime;

    /**
     * @var string
     */
    public $submitStatus;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var int
     */
    public $submitTimes;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var int
     */
    public $trademarkNameType;

    /**
     * @var string
     */
    public $trademarkNumber;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bitFlag'           => 'BitFlag',
        'bizId'             => 'BizId',
        'bizType'           => 'BizType',
        'extendInfo'        => 'ExtendInfo',
        'grayIconUrl'       => 'GrayIconUrl',
        'icon'              => 'Icon',
        'leafCodes'         => 'LeafCodes',
        'materialInfo'      => 'MaterialInfo',
        'orderId'           => 'OrderId',
        'partnerCode'       => 'PartnerCode',
        'principalKey'      => 'PrincipalKey',
        'principalName'     => 'PrincipalName',
        'produceType'       => 'ProduceType',
        'requestId'         => 'RequestId',
        'rootCode'          => 'RootCode',
        'status'            => 'Status',
        'statusStr'         => 'StatusStr',
        'submitAuditTime'   => 'SubmitAuditTime',
        'submitStatus'      => 'SubmitStatus',
        'submitTime'        => 'SubmitTime',
        'submitTimes'       => 'SubmitTimes',
        'trademarkName'     => 'TrademarkName',
        'trademarkNameType' => 'TrademarkNameType',
        'trademarkNumber'   => 'TrademarkNumber',
        'userId'            => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitFlag) {
            $res['BitFlag'] = $this->bitFlag;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->grayIconUrl) {
            $res['GrayIconUrl'] = $this->grayIconUrl;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->leafCodes) {
            $res['LeafCodes'] = null !== $this->leafCodes ? $this->leafCodes->toMap() : null;
        }
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = null !== $this->materialInfo ? $this->materialInfo->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->produceType) {
            $res['ProduceType'] = $this->produceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootCode) {
            $res['RootCode'] = null !== $this->rootCode ? $this->rootCode->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusStr) {
            $res['StatusStr'] = $this->statusStr;
        }
        if (null !== $this->submitAuditTime) {
            $res['SubmitAuditTime'] = $this->submitAuditTime;
        }
        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->submitTimes) {
            $res['SubmitTimes'] = $this->submitTimes;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->trademarkNameType) {
            $res['TrademarkNameType'] = $this->trademarkNameType;
        }
        if (null !== $this->trademarkNumber) {
            $res['TrademarkNumber'] = $this->trademarkNumber;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moudle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BitFlag'])) {
            $model->bitFlag = $map['BitFlag'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['GrayIconUrl'])) {
            $model->grayIconUrl = $map['GrayIconUrl'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['LeafCodes'])) {
            $model->leafCodes = leafCodes::fromMap($map['LeafCodes']);
        }
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = materialInfo::fromMap($map['MaterialInfo']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['ProduceType'])) {
            $model->produceType = $map['ProduceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootCode'])) {
            $model->rootCode = rootCode::fromMap($map['RootCode']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusStr'])) {
            $model->statusStr = $map['StatusStr'];
        }
        if (isset($map['SubmitAuditTime'])) {
            $model->submitAuditTime = $map['SubmitAuditTime'];
        }
        if (isset($map['SubmitStatus'])) {
            $model->submitStatus = $map['SubmitStatus'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['SubmitTimes'])) {
            $model->submitTimes = $map['SubmitTimes'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['TrademarkNameType'])) {
            $model->trademarkNameType = $map['TrademarkNameType'];
        }
        if (isset($map['TrademarkNumber'])) {
            $model->trademarkNumber = $map['TrademarkNumber'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
