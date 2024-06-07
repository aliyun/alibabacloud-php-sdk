<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreatePickUpWaybillShrinkRequest extends Model
{
    /**
     * @description The end time of the door-to-door pickup in the appointment. The value of **AppointGotEndTime** is the value of **EndTime** of **AppointTimes** in **CpTimeSelectList** returned by the [CreatePickUpWaybillPreQuery](~~CreatePickUpWaybillPreQuery~~#resultMapping) operation.
     *
     * >  This parameter is required when **BizType** is set to **1**.
     * @example 2021-01-01 12:00:00
     *
     * @var string
     */
    public $appointGotEndTime;

    /**
     * @description The start time of the door-to-door pickup in the appointment. The value of **AppointGotStartTime** is the value of **StartTime** of **AppointTimes** in **CpTimeSelectList** returned by the [CreatePickUpWaybillPreQuery](~~CreatePickUpWaybillPreQuery~~#resultMapping) operation.
     *
     * >  This parameter is required when **BizType** is set to **1**.
     * @example 2021-01-01 10:00:00
     *
     * @var string
     */
    public $appointGotStartTime;

    /**
     * @description The pickup mode. Valid values:
     *
     *   **0** (default): real-time order.
     *   **1**: appointment order.
     *
     * @example 0
     *
     * @var int
     */
    public $bizType;

    /**
     * @description The address of the consignee.
     *
     * This parameter is required.
     * @var string
     */
    public $consigneeAddressShrink;

    /**
     * @description The mobile phone number of the consignee.
     *
     * >  Either ConsigneeMobile or ConsigneePhone must be set.
     * @example 1580000****
     *
     * @var string
     */
    public $consigneeMobile;

    /**
     * @description The name of the consignee.
     *
     * This parameter is required.
     * @example Li
     *
     * @var string
     */
    public $consigneeName;

    /**
     * @description The landline phone number of the consignee.
     *
     * >  Either ConsigneeMobile or ConsigneePhone must be set.
     * @example 0570000****
     *
     * @var string
     */
    public $consigneePhone;

    /**
     * @description The code of the courier company.
     *
     * @example YTO
     *
     * @var string
     */
    public $cpCode;

    /**
     * @description The items.
     *
     * @var string
     */
    public $goodsInfosShrink;

    /**
     * @description The external channel sources.
     *
     * This parameter is required.
     * @example YUN_DIAN_SHANG
     *
     * @var string
     */
    public $orderChannels;

    /**
     * @description The ID of the external order.
     *
     * This parameter is required.
     * @example 143234234266****
     *
     * @var string
     */
    public $outerOrderCode;

    /**
     * @description The additional information about the order. The additional information will be printed on the order.
     *
     * @example fragile
     *
     * @var string
     */
    public $remark;

    /**
     * @description The address of the sender.
     *
     * This parameter is required.
     * @var string
     */
    public $sendAddressShrink;

    /**
     * @description The mobile phone number of the sender.
     *
     * >  Either SendMobile or SendPhone must be set.
     * @example 1596714****
     *
     * @var string
     */
    public $sendMobile;

    /**
     * @description The name of the sender.
     *
     * This parameter is required.
     * @example Wang
     *
     * @var string
     */
    public $sendName;

    /**
     * @description The landline phone number of the sender.
     *
     * >  Either SendMobile or SendPhone must be set.
     * @example 05718845****
     *
     * @var string
     */
    public $sendPhone;
    protected $_name = [
        'appointGotEndTime'      => 'AppointGotEndTime',
        'appointGotStartTime'    => 'AppointGotStartTime',
        'bizType'                => 'BizType',
        'consigneeAddressShrink' => 'ConsigneeAddress',
        'consigneeMobile'        => 'ConsigneeMobile',
        'consigneeName'          => 'ConsigneeName',
        'consigneePhone'         => 'ConsigneePhone',
        'cpCode'                 => 'CpCode',
        'goodsInfosShrink'       => 'GoodsInfos',
        'orderChannels'          => 'OrderChannels',
        'outerOrderCode'         => 'OuterOrderCode',
        'remark'                 => 'Remark',
        'sendAddressShrink'      => 'SendAddress',
        'sendMobile'             => 'SendMobile',
        'sendName'               => 'SendName',
        'sendPhone'              => 'SendPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreatePickUpWaybillShrinkRequest
     */
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
