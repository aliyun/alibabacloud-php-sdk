<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest\consigneeAddress;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest\goodsInfos;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillRequest\sendAddress;
use AlibabaCloud\Tea\Model;

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
        'appointGotEndTime'   => 'AppointGotEndTime',
        'appointGotStartTime' => 'AppointGotStartTime',
        'bizType'             => 'BizType',
        'consigneeAddress'    => 'ConsigneeAddress',
        'consigneeMobile'     => 'ConsigneeMobile',
        'consigneeName'       => 'ConsigneeName',
        'consigneePhone'      => 'ConsigneePhone',
        'cpCode'              => 'CpCode',
        'goodsInfos'          => 'GoodsInfos',
        'orderChannels'       => 'OrderChannels',
        'outerOrderCode'      => 'OuterOrderCode',
        'remark'              => 'Remark',
        'sendAddress'         => 'SendAddress',
        'sendMobile'          => 'SendMobile',
        'sendName'            => 'SendName',
        'sendPhone'           => 'SendPhone',
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
        if (null !== $this->consigneeAddress) {
            $res['ConsigneeAddress'] = null !== $this->consigneeAddress ? $this->consigneeAddress->toMap() : null;
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
            $res['GoodsInfos'] = [];
            if (null !== $this->goodsInfos && \is_array($this->goodsInfos)) {
                $n = 0;
                foreach ($this->goodsInfos as $item) {
                    $res['GoodsInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SendAddress'] = null !== $this->sendAddress ? $this->sendAddress->toMap() : null;
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
     * @return CreatePickUpWaybillRequest
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
                $n                 = 0;
                foreach ($map['GoodsInfos'] as $item) {
                    $model->goodsInfos[$n++] = null !== $item ? goodsInfos::fromMap($item) : $item;
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
