<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberPointChangeRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $extra;

    /**
     * @description This parameter is required.
     *
     * @example 750cff00c3e0996d220ac2861dafdfadsf
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $operateType;

    /**
     * @description This parameter is required.
     *
     * @example WMS_36606164948078_23218019
     *
     * @var string
     */
    public $outerMemberId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platFormType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $quantity;

    /**
     * @description This parameter is required.
     *
     * @example 4LJDNJH9JUX48L41
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'accountType'    => 'AccountType',
        'channelCode'    => 'ChannelCode',
        'extra'          => 'Extra',
        'openMerchantId' => 'OpenMerchantId',
        'operateType'    => 'OperateType',
        'outerMemberId'  => 'OuterMemberId',
        'platFormType'   => 'PlatFormType',
        'quantity'       => 'Quantity',
        'serialNo'       => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->outerMemberId) {
            $res['OuterMemberId'] = $this->outerMemberId;
        }
        if (null !== $this->platFormType) {
            $res['PlatFormType'] = $this->platFormType;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OuterMemberId'])) {
            $model->outerMemberId = $map['OuterMemberId'];
        }
        if (isset($map['PlatFormType'])) {
            $model->platFormType = $map['PlatFormType'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
