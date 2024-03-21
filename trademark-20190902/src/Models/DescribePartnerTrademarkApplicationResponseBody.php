<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationResponseBody\applicant;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationResponseBody\firstClassification;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationResponseBody\supplements;
use AlibabaCloud\SDK\Trademark\V20190902\Models\DescribePartnerTrademarkApplicationResponseBody\thirdClassifications;
use AlibabaCloud\Tea\Model;

class DescribePartnerTrademarkApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceptUrl;

    /**
     * @var applicant
     */
    public $applicant;

    /**
     * @var int
     */
    public $applicantId;

    /**
     * @var int
     */
    public $applicationStatus;

    /**
     * @var int
     */
    public $applicationType;

    /**
     * @var string
     */
    public $authorizationUrl;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $blackAndWhiteIconUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var firstClassification
     */
    public $firstClassification;

    /**
     * @var string[]
     */
    public $judgeResultUrls;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string[]
     */
    public $receiptUrls;

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
    public $sendSbjLogistics;

    /**
     * @var string
     */
    public $sendUserLogistics;

    /**
     * @var float
     */
    public $servicePrice;

    /**
     * @var supplements[]
     */
    public $supplements;

    /**
     * @var thirdClassifications[]
     */
    public $thirdClassifications;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var string
     */
    public $trademarkIcon;

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
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'acceptUrl'            => 'AcceptUrl',
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
        if (null !== $this->judgeResultUrls) {
            $res['JudgeResultUrls'] = $this->judgeResultUrls;
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
            $res['ReceiptUrls'] = $this->receiptUrls;
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
            $res['Supplements'] = [];
            if (null !== $this->supplements && \is_array($this->supplements)) {
                $n = 0;
                foreach ($this->supplements as $item) {
                    $res['Supplements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thirdClassifications) {
            $res['ThirdClassifications'] = [];
            if (null !== $this->thirdClassifications && \is_array($this->thirdClassifications)) {
                $n = 0;
                foreach ($this->thirdClassifications as $item) {
                    $res['ThirdClassifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribePartnerTrademarkApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptUrl'])) {
            $model->acceptUrl = $map['AcceptUrl'];
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
        if (isset($map['JudgeResultUrls'])) {
            if (!empty($map['JudgeResultUrls'])) {
                $model->judgeResultUrls = $map['JudgeResultUrls'];
            }
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
            if (!empty($map['ReceiptUrls'])) {
                $model->receiptUrls = $map['ReceiptUrls'];
            }
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
            if (!empty($map['Supplements'])) {
                $model->supplements = [];
                $n                  = 0;
                foreach ($map['Supplements'] as $item) {
                    $model->supplements[$n++] = null !== $item ? supplements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ThirdClassifications'])) {
            if (!empty($map['ThirdClassifications'])) {
                $model->thirdClassifications = [];
                $n                           = 0;
                foreach ($map['ThirdClassifications'] as $item) {
                    $model->thirdClassifications[$n++] = null !== $item ? thirdClassifications::fromMap($item) : $item;
                }
            }
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
