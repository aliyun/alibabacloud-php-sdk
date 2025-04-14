<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest\consigneeAddress;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest\goodsInfos;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest\sendAddress;

class CreatePickUpWaybillRequest extends Model
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
     * @var consigneeAddress
     */
    public $consigneeAddress;

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
     * @var goodsInfos[]
     */
    public $goodsInfos;

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
     * @var sendAddress
     */
    public $sendAddress;

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
        'consigneeAddress' => 'ConsigneeAddress',
        'consigneeMobile' => 'ConsigneeMobile',
        'consigneeName' => 'ConsigneeName',
        'consigneePhone' => 'ConsigneePhone',
        'cpCode' => 'CpCode',
        'goodsInfos' => 'GoodsInfos',
        'orderChannels' => 'OrderChannels',
        'outerOrderCode' => 'OuterOrderCode',
        'remark' => 'Remark',
        'sendAddress' => 'SendAddress',
        'sendMobile' => 'SendMobile',
        'sendName' => 'SendName',
        'sendPhone' => 'SendPhone',
    ];

    public function validate()
    {
        if (null !== $this->consigneeAddress) {
            $this->consigneeAddress->validate();
        }
        if (\is_array($this->goodsInfos)) {
            Model::validateArray($this->goodsInfos);
        }
        if (null !== $this->sendAddress) {
            $this->sendAddress->validate();
        }
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

        if (null !== $this->consigneeAddress) {
            $res['ConsigneeAddress'] = null !== $this->consigneeAddress ? $this->consigneeAddress->toArray($noStream) : $this->consigneeAddress;
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

        if (null !== $this->goodsInfos) {
            if (\is_array($this->goodsInfos)) {
                $res['GoodsInfos'] = [];
                $n1 = 0;
                foreach ($this->goodsInfos as $item1) {
                    $res['GoodsInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->sendAddress) {
            $res['SendAddress'] = null !== $this->sendAddress ? $this->sendAddress->toArray($noStream) : $this->sendAddress;
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
            $model->consigneeAddress = consigneeAddress::fromMap($map['ConsigneeAddress']);
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
            if (!empty($map['GoodsInfos'])) {
                $model->goodsInfos = [];
                $n1 = 0;
                foreach ($map['GoodsInfos'] as $item1) {
                    $model->goodsInfos[$n1++] = goodsInfos::fromMap($item1);
                }
            }
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
            $model->sendAddress = sendAddress::fromMap($map['SendAddress']);
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
