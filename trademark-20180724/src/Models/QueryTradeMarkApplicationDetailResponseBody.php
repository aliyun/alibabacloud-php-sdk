<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\adminUploads;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\firstClassification;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\flags;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\judgeResultUrl;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\materialDetail;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\receiptUrl;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\renewResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\reviewOfficialFiles;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\supplements;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\thirdClassification;
use AlibabaCloud\Tea\Model;

class QueryTradeMarkApplicationDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $acceptUrl;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var int
     */
    public $submitAuditTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $notAcceptUrl;

    /**
     * @var string
     */
    public $sendTime;

    /**
     * @var float
     */
    public $servicePrice;

    /**
     * @var string
     */
    public $partnerMobile;

    /**
     * @var string
     */
    public $recvUserLogistics;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $grayIconUrl;

    /**
     * @var int
     */
    public $materialId;

    /**
     * @var string
     */
    public $sendSbjLogistics;

    /**
     * @var string
     */
    public $sendUserLogistics;

    /**
     * @var string
     */
    public $loaUrl;

    /**
     * @var string
     */
    public $tmNumber;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $partnerName;

    /**
     * @var string
     */
    public $logisticsCertificateUrl;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var int
     */
    public $tmNameType;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var receiptUrl
     */
    public $receiptUrl;

    /**
     * @var judgeResultUrl
     */
    public $judgeResultUrl;

    /**
     * @var flags
     */
    public $flags;

    /**
     * @var adminUploads
     */
    public $adminUploads;

    /**
     * @var firstClassification
     */
    public $firstClassification;

    /**
     * @var materialDetail
     */
    public $materialDetail;

    /**
     * @var renewResponse
     */
    public $renewResponse;

    /**
     * @var reviewOfficialFiles
     */
    public $reviewOfficialFiles;

    /**
     * @var supplements
     */
    public $supplements;

    /**
     * @var thirdClassification
     */
    public $thirdClassification;
    protected $_name = [
        'type'                    => 'Type',
        'status'                  => 'Status',
        'acceptUrl'               => 'AcceptUrl',
        'orderPrice'              => 'OrderPrice',
        'submitAuditTime'         => 'SubmitAuditTime',
        'updateTime'              => 'UpdateTime',
        'createTime'              => 'CreateTime',
        'notAcceptUrl'            => 'NotAcceptUrl',
        'sendTime'                => 'SendTime',
        'servicePrice'            => 'ServicePrice',
        'partnerMobile'           => 'PartnerMobile',
        'recvUserLogistics'       => 'RecvUserLogistics',
        'requestId'               => 'RequestId',
        'grayIconUrl'             => 'GrayIconUrl',
        'materialId'              => 'MaterialId',
        'sendSbjLogistics'        => 'SendSbjLogistics',
        'sendUserLogistics'       => 'SendUserLogistics',
        'loaUrl'                  => 'LoaUrl',
        'tmNumber'                => 'TmNumber',
        'note'                    => 'Note',
        'principalName'           => 'PrincipalName',
        'partnerName'             => 'PartnerName',
        'logisticsCertificateUrl' => 'LogisticsCertificateUrl',
        'bizId'                   => 'BizId',
        'partnerCode'             => 'PartnerCode',
        'tmNameType'              => 'TmNameType',
        'extendInfo'              => 'ExtendInfo',
        'tmIcon'                  => 'TmIcon',
        'tmName'                  => 'TmName',
        'logisticsNo'             => 'LogisticsNo',
        'totalPrice'              => 'TotalPrice',
        'submitTime'              => 'SubmitTime',
        'orderId'                 => 'OrderId',
        'receiptUrl'              => 'ReceiptUrl',
        'judgeResultUrl'          => 'JudgeResultUrl',
        'flags'                   => 'Flags',
        'adminUploads'            => 'AdminUploads',
        'firstClassification'     => 'FirstClassification',
        'materialDetail'          => 'MaterialDetail',
        'renewResponse'           => 'RenewResponse',
        'reviewOfficialFiles'     => 'ReviewOfficialFiles',
        'supplements'             => 'Supplements',
        'thirdClassification'     => 'ThirdClassification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->acceptUrl) {
            $res['AcceptUrl'] = $this->acceptUrl;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->submitAuditTime) {
            $res['SubmitAuditTime'] = $this->submitAuditTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->notAcceptUrl) {
            $res['NotAcceptUrl'] = $this->notAcceptUrl;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }
        if (null !== $this->servicePrice) {
            $res['ServicePrice'] = $this->servicePrice;
        }
        if (null !== $this->partnerMobile) {
            $res['PartnerMobile'] = $this->partnerMobile;
        }
        if (null !== $this->recvUserLogistics) {
            $res['RecvUserLogistics'] = $this->recvUserLogistics;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->grayIconUrl) {
            $res['GrayIconUrl'] = $this->grayIconUrl;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->sendSbjLogistics) {
            $res['SendSbjLogistics'] = $this->sendSbjLogistics;
        }
        if (null !== $this->sendUserLogistics) {
            $res['SendUserLogistics'] = $this->sendUserLogistics;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->partnerName) {
            $res['PartnerName'] = $this->partnerName;
        }
        if (null !== $this->logisticsCertificateUrl) {
            $res['LogisticsCertificateUrl'] = $this->logisticsCertificateUrl;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->tmNameType) {
            $res['TmNameType'] = $this->tmNameType;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->receiptUrl) {
            $res['ReceiptUrl'] = null !== $this->receiptUrl ? $this->receiptUrl->toMap() : null;
        }
        if (null !== $this->judgeResultUrl) {
            $res['JudgeResultUrl'] = null !== $this->judgeResultUrl ? $this->judgeResultUrl->toMap() : null;
        }
        if (null !== $this->flags) {
            $res['Flags'] = null !== $this->flags ? $this->flags->toMap() : null;
        }
        if (null !== $this->adminUploads) {
            $res['AdminUploads'] = null !== $this->adminUploads ? $this->adminUploads->toMap() : null;
        }
        if (null !== $this->firstClassification) {
            $res['FirstClassification'] = null !== $this->firstClassification ? $this->firstClassification->toMap() : null;
        }
        if (null !== $this->materialDetail) {
            $res['MaterialDetail'] = null !== $this->materialDetail ? $this->materialDetail->toMap() : null;
        }
        if (null !== $this->renewResponse) {
            $res['RenewResponse'] = null !== $this->renewResponse ? $this->renewResponse->toMap() : null;
        }
        if (null !== $this->reviewOfficialFiles) {
            $res['ReviewOfficialFiles'] = null !== $this->reviewOfficialFiles ? $this->reviewOfficialFiles->toMap() : null;
        }
        if (null !== $this->supplements) {
            $res['Supplements'] = null !== $this->supplements ? $this->supplements->toMap() : null;
        }
        if (null !== $this->thirdClassification) {
            $res['ThirdClassification'] = null !== $this->thirdClassification ? $this->thirdClassification->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTradeMarkApplicationDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AcceptUrl'])) {
            $model->acceptUrl = $map['AcceptUrl'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['SubmitAuditTime'])) {
            $model->submitAuditTime = $map['SubmitAuditTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['NotAcceptUrl'])) {
            $model->notAcceptUrl = $map['NotAcceptUrl'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }
        if (isset($map['ServicePrice'])) {
            $model->servicePrice = $map['ServicePrice'];
        }
        if (isset($map['PartnerMobile'])) {
            $model->partnerMobile = $map['PartnerMobile'];
        }
        if (isset($map['RecvUserLogistics'])) {
            $model->recvUserLogistics = $map['RecvUserLogistics'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GrayIconUrl'])) {
            $model->grayIconUrl = $map['GrayIconUrl'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['SendSbjLogistics'])) {
            $model->sendSbjLogistics = $map['SendSbjLogistics'];
        }
        if (isset($map['SendUserLogistics'])) {
            $model->sendUserLogistics = $map['SendUserLogistics'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PartnerName'])) {
            $model->partnerName = $map['PartnerName'];
        }
        if (isset($map['LogisticsCertificateUrl'])) {
            $model->logisticsCertificateUrl = $map['LogisticsCertificateUrl'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['TmNameType'])) {
            $model->tmNameType = $map['TmNameType'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ReceiptUrl'])) {
            $model->receiptUrl = receiptUrl::fromMap($map['ReceiptUrl']);
        }
        if (isset($map['JudgeResultUrl'])) {
            $model->judgeResultUrl = judgeResultUrl::fromMap($map['JudgeResultUrl']);
        }
        if (isset($map['Flags'])) {
            $model->flags = flags::fromMap($map['Flags']);
        }
        if (isset($map['AdminUploads'])) {
            $model->adminUploads = adminUploads::fromMap($map['AdminUploads']);
        }
        if (isset($map['FirstClassification'])) {
            $model->firstClassification = firstClassification::fromMap($map['FirstClassification']);
        }
        if (isset($map['MaterialDetail'])) {
            $model->materialDetail = materialDetail::fromMap($map['MaterialDetail']);
        }
        if (isset($map['RenewResponse'])) {
            $model->renewResponse = renewResponse::fromMap($map['RenewResponse']);
        }
        if (isset($map['ReviewOfficialFiles'])) {
            $model->reviewOfficialFiles = reviewOfficialFiles::fromMap($map['ReviewOfficialFiles']);
        }
        if (isset($map['Supplements'])) {
            $model->supplements = supplements::fromMap($map['Supplements']);
        }
        if (isset($map['ThirdClassification'])) {
            $model->thirdClassification = thirdClassification::fromMap($map['ThirdClassification']);
        }

        return $model;
    }
}
