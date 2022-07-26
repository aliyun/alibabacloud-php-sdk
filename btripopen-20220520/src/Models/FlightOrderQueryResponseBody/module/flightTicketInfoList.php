<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class flightTicketInfoList extends Model
{
    /**
     * @var float
     */
    public $buildPrice;

    /**
     * @var bool
     */
    public $changed;

    /**
     * @var int
     */
    public $discount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var float
     */
    public $oilPrice;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var float
     */
    public $settlePrice;

    /**
     * @var string
     */
    public $ticketNo;

    /**
     * @var float
     */
    public $ticketPrice;

    /**
     * @var string
     */
    public $ticketStatus;

    /**
     * @var int
     */
    public $ticketStatusCode;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'buildPrice'       => 'build_price',
        'changed'          => 'changed',
        'discount'         => 'discount',
        'gmtCreate'        => 'gmt_create',
        'gmtModify'        => 'gmt_modify',
        'oilPrice'         => 'oil_price',
        'payType'          => 'pay_type',
        'settlePrice'      => 'settle_price',
        'ticketNo'         => 'ticket_no',
        'ticketPrice'      => 'ticket_price',
        'ticketStatus'     => 'ticket_status',
        'ticketStatusCode' => 'ticket_status_code',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildPrice) {
            $res['build_price'] = $this->buildPrice;
        }
        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }
        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['gmt_modify'] = $this->gmtModify;
        }
        if (null !== $this->oilPrice) {
            $res['oil_price'] = $this->oilPrice;
        }
        if (null !== $this->payType) {
            $res['pay_type'] = $this->payType;
        }
        if (null !== $this->settlePrice) {
            $res['settle_price'] = $this->settlePrice;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }
        if (null !== $this->ticketPrice) {
            $res['ticket_price'] = $this->ticketPrice;
        }
        if (null !== $this->ticketStatus) {
            $res['ticket_status'] = $this->ticketStatus;
        }
        if (null !== $this->ticketStatusCode) {
            $res['ticket_status_code'] = $this->ticketStatusCode;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightTicketInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['build_price'])) {
            $model->buildPrice = $map['build_price'];
        }
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_modify'])) {
            $model->gmtModify = $map['gmt_modify'];
        }
        if (isset($map['oil_price'])) {
            $model->oilPrice = $map['oil_price'];
        }
        if (isset($map['pay_type'])) {
            $model->payType = $map['pay_type'];
        }
        if (isset($map['settle_price'])) {
            $model->settlePrice = $map['settle_price'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }
        if (isset($map['ticket_price'])) {
            $model->ticketPrice = $map['ticket_price'];
        }
        if (isset($map['ticket_status'])) {
            $model->ticketStatus = $map['ticket_status'];
        }
        if (isset($map['ticket_status_code'])) {
            $model->ticketStatusCode = $map['ticket_status_code'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
