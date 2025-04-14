<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreatePickUpWaybillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appointGotEndTime;

    /**
     * @var string
     */
    public $appointGotStartTime;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $consigneeAddressShrink;

    /**
     * @var string
     */
    public $consigneeMobile;

    /**
     * @var string
     */
    public $consigneeName;

    /**
     * @var string
     */
    public $consigneePhone;

    /**
     * @var string
     */
    public $cpCode;

    /**
     * @var string
     */
    public $goodsInfosShrink;

    /**
     * @var string
     */
    public $orderChannels;

    /**
     * @var string
     */
    public $outerOrderCode;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sendAddressShrink;

    /**
     * @var string
     */
    public $sendMobile;

    /**
     * @var string
     */
    public $sendName;

    /**
     * @var string
     */
    public $sendPhone;
    protected $_name = [
        'appointGotEndTime' => 'AppointGotEndTime',
        'appointGotStartTime' => 'AppointGotStartTime',
        'bizType' => 'BizType',
        'consigneeAddressShrink' => 'ConsigneeAddress',
        'consigneeMobile' => 'ConsigneeMobile',
        'consigneeName' => 'ConsigneeName',
        'consigneePhone' => 'ConsigneePhone',
        'cpCode' => 'CpCode',
        'goodsInfosShrink' => 'GoodsInfos',
        'orderChannels' => 'OrderChannels',
        'outerOrderCode' => 'OuterOrderCode',
        'remark' => 'Remark',
        'sendAddressShrink' => 'SendAddress',
        'sendMobile' => 'SendMobile',
        'sendName' => 'SendName',
        'sendPhone' => 'SendPhone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appointGotEndTime) {
            $res['AppointGotEndTime'] = $this->appointGotEndTime;
        }

        if (null !== $this->appointGotStartTime) {
            $res['AppointGotStartTime'] = $this->appointGotStartTime;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->consigneeAddressShrink) {
            $res['ConsigneeAddress'] = $this->consigneeAddressShrink;
        }

        if (null !== $this->consigneeMobile) {
            $res['ConsigneeMobile'] = $this->consigneeMobile;
        }

        if (null !== $this->consigneeName) {
            $res['ConsigneeName'] = $this->consigneeName;
        }

        if (null !== $this->consigneePhone) {
            $res['ConsigneePhone'] = $this->consigneePhone;
        }

        if (null !== $this->cpCode) {
            $res['CpCode'] = $this->cpCode;
        }

        if (null !== $this->goodsInfosShrink) {
            $res['GoodsInfos'] = $this->goodsInfosShrink;
        }

        if (null !== $this->orderChannels) {
            $res['OrderChannels'] = $this->orderChannels;
        }

        if (null !== $this->outerOrderCode) {
            $res['OuterOrderCode'] = $this->outerOrderCode;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sendAddressShrink) {
            $res['SendAddress'] = $this->sendAddressShrink;
        }

        if (null !== $this->sendMobile) {
            $res['SendMobile'] = $this->sendMobile;
        }

        if (null !== $this->sendName) {
            $res['SendName'] = $this->sendName;
        }

        if (null !== $this->sendPhone) {
            $res['SendPhone'] = $this->sendPhone;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppointGotEndTime'])) {
            $model->appointGotEndTime = $map['AppointGotEndTime'];
        }

        if (isset($map['AppointGotStartTime'])) {
            $model->appointGotStartTime = $map['AppointGotStartTime'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ConsigneeAddress'])) {
            $model->consigneeAddressShrink = $map['ConsigneeAddress'];
        }

        if (isset($map['ConsigneeMobile'])) {
            $model->consigneeMobile = $map['ConsigneeMobile'];
        }

        if (isset($map['ConsigneeName'])) {
            $model->consigneeName = $map['ConsigneeName'];
        }

        if (isset($map['ConsigneePhone'])) {
            $model->consigneePhone = $map['ConsigneePhone'];
        }

        if (isset($map['CpCode'])) {
            $model->cpCode = $map['CpCode'];
        }

        if (isset($map['GoodsInfos'])) {
            $model->goodsInfosShrink = $map['GoodsInfos'];
        }

        if (isset($map['OrderChannels'])) {
            $model->orderChannels = $map['OrderChannels'];
        }

        if (isset($map['OuterOrderCode'])) {
            $model->outerOrderCode = $map['OuterOrderCode'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SendAddress'])) {
            $model->sendAddressShrink = $map['SendAddress'];
        }

        if (isset($map['SendMobile'])) {
            $model->sendMobile = $map['SendMobile'];
        }

        if (isset($map['SendName'])) {
            $model->sendName = $map['SendName'];
        }

        if (isset($map['SendPhone'])) {
            $model->sendPhone = $map['SendPhone'];
        }

        return $model;
    }
}
