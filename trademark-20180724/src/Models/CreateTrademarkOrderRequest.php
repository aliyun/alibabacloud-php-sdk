<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CreateTrademarkOrderRequest extends Model
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $orderData;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $loaOssKey;

    /**
     * @var bool
     */
    public $isBlackIcon;

    /**
     * @var string
     */
    public $renewInfoId;

    /**
     * @var string
     */
    public $rootCode;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $tmNameType;

    /**
     * @var string
     */
    public $registerName;

    /**
     * @var string
     */
    public $tmComment;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $realUserName;

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
    public $bigDipperSource;

    /**
     * @var string
     */
    public $ua;

    /**
     * @var string
     */
    public $legalNoticeKey;
    protected $_name = [
        'userId'          => 'UserId',
        'tmName'          => 'TmName',
        'tmIcon'          => 'TmIcon',
        'type'            => 'Type',
        'orderData'       => 'OrderData',
        'materialId'      => 'MaterialId',
        'loaOssKey'       => 'LoaOssKey',
        'isBlackIcon'     => 'IsBlackIcon',
        'renewInfoId'     => 'RenewInfoId',
        'rootCode'        => 'RootCode',
        'channel'         => 'Channel',
        'registerNumber'  => 'RegisterNumber',
        'tmNameType'      => 'TmNameType',
        'registerName'    => 'RegisterName',
        'tmComment'       => 'TmComment',
        'bizId'           => 'BizId',
        'uid'             => 'Uid',
        'partnerCode'     => 'PartnerCode',
        'realUserName'    => 'RealUserName',
        'phoneNum'        => 'PhoneNum',
        'principalName'   => 'PrincipalName',
        'bigDipperSource' => 'BigDipperSource',
        'ua'              => 'Ua',
        'legalNoticeKey'  => 'LegalNoticeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->orderData) {
            $res['OrderData'] = $this->orderData;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->isBlackIcon) {
            $res['IsBlackIcon'] = $this->isBlackIcon;
        }
        if (null !== $this->renewInfoId) {
            $res['RenewInfoId'] = $this->renewInfoId;
        }
        if (null !== $this->rootCode) {
            $res['RootCode'] = $this->rootCode;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->tmNameType) {
            $res['TmNameType'] = $this->tmNameType;
        }
        if (null !== $this->registerName) {
            $res['RegisterName'] = $this->registerName;
        }
        if (null !== $this->tmComment) {
            $res['TmComment'] = $this->tmComment;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->realUserName) {
            $res['RealUserName'] = $this->realUserName;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->bigDipperSource) {
            $res['BigDipperSource'] = $this->bigDipperSource;
        }
        if (null !== $this->ua) {
            $res['Ua'] = $this->ua;
        }
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OrderData'])) {
            $model->orderData = $map['OrderData'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['IsBlackIcon'])) {
            $model->isBlackIcon = $map['IsBlackIcon'];
        }
        if (isset($map['RenewInfoId'])) {
            $model->renewInfoId = $map['RenewInfoId'];
        }
        if (isset($map['RootCode'])) {
            $model->rootCode = $map['RootCode'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['TmNameType'])) {
            $model->tmNameType = $map['TmNameType'];
        }
        if (isset($map['RegisterName'])) {
            $model->registerName = $map['RegisterName'];
        }
        if (isset($map['TmComment'])) {
            $model->tmComment = $map['TmComment'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['RealUserName'])) {
            $model->realUserName = $map['RealUserName'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['BigDipperSource'])) {
            $model->bigDipperSource = $map['BigDipperSource'];
        }
        if (isset($map['Ua'])) {
            $model->ua = $map['Ua'];
        }
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }

        return $model;
    }
}
