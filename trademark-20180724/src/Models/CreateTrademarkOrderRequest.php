<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CreateTrademarkOrderRequest extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var string
     */
    public $bigDipperSource;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $channel;

    /**
     * @example true
     *
     * @var bool
     */
    public $isBlackIcon;

    /**
     * @var string
     */
    public $legalNoticeKey;

    /**
     * @example 112.jpg
     *
     * @var string
     */
    public $loaOssKey;

    /**
     * @example 12
     *
     * @var string
     */
    public $materialId;

    /**
     * @example {   "16": "160008,160130,160246,16090014,16090003,160014,160147,160243,16060007,160175",   "35": "35010071,350039,350084,350092,C350001,C350002,35010055,350046,350103,C350008,350106" }
     *
     * @var string
     */
    public $orderData;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $phoneNum;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $realUserName;

    /**
     * @var string
     */
    public $registerName;

    /**
     * @example 10011010
     *
     * @var string
     */
    public $registerNumber;

    /**
     * @example 121
     *
     * @var string
     */
    public $renewInfoId;

    /**
     * @example 1
     *
     * @var string
     */
    public $rootCode;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tmComment;

    /**
     * @example icon/azaa6tm403.jpg
     *
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @example 1
     *
     * @var string
     */
    public $tmNameType;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $ua;

    /**
     * @var string
     */
    public $uid;

    /**
     * @example 11211
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'agreementId'     => 'AgreementId',
        'bigDipperSource' => 'BigDipperSource',
        'bizId'           => 'BizId',
        'channel'         => 'Channel',
        'isBlackIcon'     => 'IsBlackIcon',
        'legalNoticeKey'  => 'LegalNoticeKey',
        'loaOssKey'       => 'LoaOssKey',
        'materialId'      => 'MaterialId',
        'orderData'       => 'OrderData',
        'partnerCode'     => 'PartnerCode',
        'phoneNum'        => 'PhoneNum',
        'principalName'   => 'PrincipalName',
        'realUserName'    => 'RealUserName',
        'registerName'    => 'RegisterName',
        'registerNumber'  => 'RegisterNumber',
        'renewInfoId'     => 'RenewInfoId',
        'rootCode'        => 'RootCode',
        'sessionId'       => 'SessionId',
        'tmComment'       => 'TmComment',
        'tmIcon'          => 'TmIcon',
        'tmName'          => 'TmName',
        'tmNameType'      => 'TmNameType',
        'type'            => 'Type',
        'ua'              => 'Ua',
        'uid'             => 'Uid',
        'userId'          => 'UserId',
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
        if (null !== $this->bigDipperSource) {
            $res['BigDipperSource'] = $this->bigDipperSource;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->isBlackIcon) {
            $res['IsBlackIcon'] = $this->isBlackIcon;
        }
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->orderData) {
            $res['OrderData'] = $this->orderData;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->realUserName) {
            $res['RealUserName'] = $this->realUserName;
        }
        if (null !== $this->registerName) {
            $res['RegisterName'] = $this->registerName;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->renewInfoId) {
            $res['RenewInfoId'] = $this->renewInfoId;
        }
        if (null !== $this->rootCode) {
            $res['RootCode'] = $this->rootCode;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tmComment) {
            $res['TmComment'] = $this->tmComment;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmNameType) {
            $res['TmNameType'] = $this->tmNameType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ua) {
            $res['Ua'] = $this->ua;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrademarkOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['BigDipperSource'])) {
            $model->bigDipperSource = $map['BigDipperSource'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['IsBlackIcon'])) {
            $model->isBlackIcon = $map['IsBlackIcon'];
        }
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['OrderData'])) {
            $model->orderData = $map['OrderData'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['RealUserName'])) {
            $model->realUserName = $map['RealUserName'];
        }
        if (isset($map['RegisterName'])) {
            $model->registerName = $map['RegisterName'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['RenewInfoId'])) {
            $model->renewInfoId = $map['RenewInfoId'];
        }
        if (isset($map['RootCode'])) {
            $model->rootCode = $map['RootCode'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TmComment'])) {
            $model->tmComment = $map['TmComment'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmNameType'])) {
            $model->tmNameType = $map['TmNameType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Ua'])) {
            $model->ua = $map['Ua'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
