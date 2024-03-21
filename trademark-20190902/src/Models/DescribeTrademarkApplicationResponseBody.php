<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\applicant;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\firstClassification;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\flags;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\judgeResultUrls;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\receiptUrls;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\supplements;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribeTrademarkApplicationResponseBody\thirdClassifications;
use AlibabaCloud\Tea\Model;

class DescribeTrademarkApplicationResponseBody extends Model
{
    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/sbj-notice/register-notice-123456789SHANG_BIAO_ZHU_CE_SHEN_QING_SHOU_LI_TONG_ZHI_SHU1560887850185.pdf?Expires=1568629374&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=TnkOWf7JrSacldGW1p3uu5YDt2Y%3D
     *
     * @var string
     */
    public $acceptUrl;

    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var applicant
     */
    public $applicant;

    /**
     * @example 23456
     *
     * @var int
     */
    public $applicantId;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicationStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicationType;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/usertrademark/191248_E1DD11C3DC8D82CBA3E08F438C3415BA.jpg?Expires=1568629293&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=bXZ6VzFAqVyBrI8mxo1XYN6BOsQ%3D
     *
     * @var string
     */
    public $authorizationUrl;

    /**
     * @example trademark_register-cn-123456789
     *
     * @var string
     */
    public $bizId;

    /**
     * @example http://...
     *
     * @var string
     */
    public $blackAndWhiteIconUrl;

    /**
     * @example 1568626966203
     *
     * @var int
     */
    public $createTime;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var firstClassification
     */
    public $firstClassification;

    /**
     * @var flags
     */
    public $flags;

    /**
     * @var judgeResultUrls
     */
    public $judgeResultUrls;

    /**
     * @var string
     */
    public $note;

    /**
     * @example 204469008550629
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 368.0
     *
     * @var float
     */
    public $orderPrice;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var receiptUrls
     */
    public $receiptUrls;

    /**
     * @example 3456789
     *
     * @var string
     */
    public $recvUserLogistics;

    /**
     * @example 1F34C10A-E135-4782-9EAB-9622F939CAD7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 23456789
     *
     * @var string
     */
    public $sendSbjLogistics;

    /**
     * @example 34567890
     *
     * @var string
     */
    public $sendUserLogistics;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $servicePrice;

    /**
     * @var supplements
     */
    public $supplements;

    /**
     * @var thirdClassifications
     */
    public $thirdClassifications;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $totalPrice;

    /**
     * @example http://...
     *
     * @var string
     */
    public $trademarkIcon;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @example 1
     *
     * @var int
     */
    public $trademarkNameType;

    /**
     * @example 23456789
     *
     * @var string
     */
    public $trademarkNumber;

    /**
     * @example 1568276757000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'acceptUrl'            => 'AcceptUrl',
        'agreementId'          => 'AgreementId',
        'applicant'            => 'Applicant',
        'applicantId'          => 'ApplicantId',
        'applicationStatus'    => 'ApplicationStatus',
        'applicationType'      => 'ApplicationType',
        'authorizationUrl'     => 'AuthorizationUrl',
        'bizId'                => 'BizId',
        'blackAndWhiteIconUrl' => 'BlackAndWhiteIconUrl',
        'createTime'           => 'CreateTime',
        'extendInfo'           => 'ExtendInfo',
        'firstClassification'  => 'FirstClassification',
        'flags'                => 'Flags',
        'judgeResultUrls'      => 'JudgeResultUrls',
        'note'                 => 'Note',
        'orderId'              => 'OrderId',
        'orderPrice'           => 'OrderPrice',
        'principalName'        => 'PrincipalName',
        'receiptUrls'          => 'ReceiptUrls',
        'recvUserLogistics'    => 'RecvUserLogistics',
        'requestId'            => 'RequestId',
        'sendSbjLogistics'     => 'SendSbjLogistics',
        'sendUserLogistics'    => 'SendUserLogistics',
        'servicePrice'         => 'ServicePrice',
        'supplements'          => 'Supplements',
        'thirdClassifications' => 'ThirdClassifications',
        'totalPrice'           => 'TotalPrice',
        'trademarkIcon'        => 'TrademarkIcon',
        'trademarkName'        => 'TrademarkName',
        'trademarkNameType'    => 'TrademarkNameType',
        'trademarkNumber'      => 'TrademarkNumber',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptUrl) {
            $res['AcceptUrl'] = $this->acceptUrl;
        }
        if (null !== $this->agreementId) {
            $res['AgreementId'] = $this->agreementId;
        }
        if (null !== $this->applicant) {
            $res['Applicant'] = null !== $this->applicant ? $this->applicant->toMap() : null;
        }
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }
        if (null !== $this->applicationStatus) {
            $res['ApplicationStatus'] = $this->applicationStatus;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->blackAndWhiteIconUrl) {
            $res['BlackAndWhiteIconUrl'] = $this->blackAndWhiteIconUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->firstClassification) {
            $res['FirstClassification'] = null !== $this->firstClassification ? $this->firstClassification->toMap() : null;
        }
        if (null !== $this->flags) {
            $res['Flags'] = null !== $this->flags ? $this->flags->toMap() : null;
        }
        if (null !== $this->judgeResultUrls) {
            $res['JudgeResultUrls'] = null !== $this->judgeResultUrls ? $this->judgeResultUrls->toMap() : null;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->receiptUrls) {
            $res['ReceiptUrls'] = null !== $this->receiptUrls ? $this->receiptUrls->toMap() : null;
        }
        if (null !== $this->recvUserLogistics) {
            $res['RecvUserLogistics'] = $this->recvUserLogistics;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sendSbjLogistics) {
            $res['SendSbjLogistics'] = $this->sendSbjLogistics;
        }
        if (null !== $this->sendUserLogistics) {
            $res['SendUserLogistics'] = $this->sendUserLogistics;
        }
        if (null !== $this->servicePrice) {
            $res['ServicePrice'] = $this->servicePrice;
        }
        if (null !== $this->supplements) {
            $res['Supplements'] = null !== $this->supplements ? $this->supplements->toMap() : null;
        }
        if (null !== $this->thirdClassifications) {
            $res['ThirdClassifications'] = null !== $this->thirdClassifications ? $this->thirdClassifications->toMap() : null;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }
        if (null !== $this->trademarkIcon) {
            $res['TrademarkIcon'] = $this->trademarkIcon;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrademarkApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptUrl'])) {
            $model->acceptUrl = $map['AcceptUrl'];
        }
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['Applicant'])) {
            $model->applicant = applicant::fromMap($map['Applicant']);
        }
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }
        if (isset($map['ApplicationStatus'])) {
            $model->applicationStatus = $map['ApplicationStatus'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BlackAndWhiteIconUrl'])) {
            $model->blackAndWhiteIconUrl = $map['BlackAndWhiteIconUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FirstClassification'])) {
            $model->firstClassification = firstClassification::fromMap($map['FirstClassification']);
        }
        if (isset($map['Flags'])) {
            $model->flags = flags::fromMap($map['Flags']);
        }
        if (isset($map['JudgeResultUrls'])) {
            $model->judgeResultUrls = judgeResultUrls::fromMap($map['JudgeResultUrls']);
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['ReceiptUrls'])) {
            $model->receiptUrls = receiptUrls::fromMap($map['ReceiptUrls']);
        }
        if (isset($map['RecvUserLogistics'])) {
            $model->recvUserLogistics = $map['RecvUserLogistics'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SendSbjLogistics'])) {
            $model->sendSbjLogistics = $map['SendSbjLogistics'];
        }
        if (isset($map['SendUserLogistics'])) {
            $model->sendUserLogistics = $map['SendUserLogistics'];
        }
        if (isset($map['ServicePrice'])) {
            $model->servicePrice = $map['ServicePrice'];
        }
        if (isset($map['Supplements'])) {
            $model->supplements = supplements::fromMap($map['Supplements']);
        }
        if (isset($map['ThirdClassifications'])) {
            $model->thirdClassifications = thirdClassifications::fromMap($map['ThirdClassifications']);
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }
        if (isset($map['TrademarkIcon'])) {
            $model->trademarkIcon = $map['TrademarkIcon'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
