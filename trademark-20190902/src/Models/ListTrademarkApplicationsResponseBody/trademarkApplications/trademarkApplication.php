<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication\firstClassification;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication\flags;
use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationsResponseBody\trademarkApplications\trademarkApplication\thirdClassification;
use AlibabaCloud\Tea\Model;

class trademarkApplication extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicantId;

    /**
     * @var string
     */
    public $applicantName;

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
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/icon/6xreg1ooy9a.jpg?Expires=1570955079&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=Qdyo6vrdAaktFB6iEumnXO2plME%3D
     *
     * @var string
     */
    public $authorizationUrl;

    /**
     * @example trademark_register-cn-v0h1awaycdp
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1568276757000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var firstClassification
     */
    public $firstClassification;

    /**
     * @var flags
     */
    public $flags;

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
     * @example 0.0
     *
     * @var float
     */
    public $servicePrice;

    /**
     * @example 1
     *
     * @var int
     */
    public $supplementId;

    /**
     * @example 1
     *
     * @var int
     */
    public $supplementStatus;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var thirdClassification
     */
    public $thirdClassification;

    /**
     * @example 100.0
     *
     * @var float
     */
    public $totalPrice;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/icon/6xreg1ooy9a.jpg?Expires=1570955079&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=Qdyo6vrdAaktFB6iEumnXO2plME%3D
     *
     * @var string
     */
    public $trademarkIcon;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @example 345678
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

    /**
     * @example 1219541161213057
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'agreementId'         => 'AgreementId',
        'applicantId'         => 'ApplicantId',
        'applicantName'       => 'ApplicantName',
        'applicationStatus'   => 'ApplicationStatus',
        'applicationType'     => 'ApplicationType',
        'authorizationUrl'    => 'AuthorizationUrl',
        'bizId'               => 'BizId',
        'createTime'          => 'CreateTime',
        'firstClassification' => 'FirstClassification',
        'flags'               => 'Flags',
        'note'                => 'Note',
        'orderId'             => 'OrderId',
        'orderPrice'          => 'OrderPrice',
        'principalName'       => 'PrincipalName',
        'servicePrice'        => 'ServicePrice',
        'supplementId'        => 'SupplementId',
        'supplementStatus'    => 'SupplementStatus',
        'systemVersion'       => 'SystemVersion',
        'thirdClassification' => 'ThirdClassification',
        'totalPrice'          => 'TotalPrice',
        'trademarkIcon'       => 'TrademarkIcon',
        'trademarkName'       => 'TrademarkName',
        'trademarkNumber'     => 'TrademarkNumber',
        'updateTime'          => 'UpdateTime',
        'userId'              => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementId) {
            $res['AgreementId'] = $this->agreementId;
        }
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->firstClassification) {
            $res['FirstClassification'] = null !== $this->firstClassification ? $this->firstClassification->toMap() : null;
        }
        if (null !== $this->flags) {
            $res['Flags'] = null !== $this->flags ? $this->flags->toMap() : null;
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
        if (null !== $this->servicePrice) {
            $res['ServicePrice'] = $this->servicePrice;
        }
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->thirdClassification) {
            $res['ThirdClassification'] = null !== $this->thirdClassification ? $this->thirdClassification->toMap() : null;
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
        if (null !== $this->trademarkNumber) {
            $res['TrademarkNumber'] = $this->trademarkNumber;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarkApplication
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FirstClassification'])) {
            $model->firstClassification = firstClassification::fromMap($map['FirstClassification']);
        }
        if (isset($map['Flags'])) {
            $model->flags = flags::fromMap($map['Flags']);
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
        if (isset($map['ServicePrice'])) {
            $model->servicePrice = $map['ServicePrice'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['ThirdClassification'])) {
            $model->thirdClassification = thirdClassification::fromMap($map['ThirdClassification']);
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
        if (isset($map['TrademarkNumber'])) {
            $model->trademarkNumber = $map['TrademarkNumber'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
