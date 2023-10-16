<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CheckTrademarkOrderRequest extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var bool
     */
    public $isBlackIcon;

    /**
     * @var string
     */
    public $loaOssKey;

    /**
     * @var string
     */
    public $logoGoodsId;

    /**
     * @var string
     */
    public $materialId;

    /**
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
     * @var string
     */
    public $realUserName;

    /**
     * @var string
     */
    public $registerName;

    /**
     * @var string
     */
    public $registerNumber;

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
    public $tmComment;

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
    public $tmNameType;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'agreementId'    => 'AgreementId',
        'bizId'          => 'BizId',
        'channel'        => 'Channel',
        'isBlackIcon'    => 'IsBlackIcon',
        'loaOssKey'      => 'LoaOssKey',
        'logoGoodsId'    => 'LogoGoodsId',
        'materialId'     => 'MaterialId',
        'orderData'      => 'OrderData',
        'partnerCode'    => 'PartnerCode',
        'phoneNum'       => 'PhoneNum',
        'realUserName'   => 'RealUserName',
        'registerName'   => 'RegisterName',
        'registerNumber' => 'RegisterNumber',
        'renewInfoId'    => 'RenewInfoId',
        'rootCode'       => 'RootCode',
        'tmComment'      => 'TmComment',
        'tmIcon'         => 'TmIcon',
        'tmName'         => 'TmName',
        'tmNameType'     => 'TmNameType',
        'type'           => 'Type',
        'uid'            => 'Uid',
        'userId'         => 'UserId',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->isBlackIcon) {
            $res['IsBlackIcon'] = $this->isBlackIcon;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->logoGoodsId) {
            $res['LogoGoodsId'] = $this->logoGoodsId;
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
     * @return CheckTrademarkOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
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
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['LogoGoodsId'])) {
            $model->logoGoodsId = $map['LogoGoodsId'];
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
