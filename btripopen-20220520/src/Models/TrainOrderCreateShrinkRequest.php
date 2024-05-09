<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainOrderCreateShrinkRequest extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $acceptNoSeat;

    /**
     * @var string
     */
    public $bookTrainInfosShrink;

    /**
     * @example 12344321
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $btripUserName;

    /**
     * @var string
     */
    public $businessInfoShrink;

    /**
     * @var string
     */
    public $contactInfoShrink;

    /**
     * @example 0
     *
     * @var string
     */
    public $forceMatch;

    /**
     * @example false
     *
     * @var bool
     */
    public $isPayNow;

    /**
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $passengerOpenInfoSShrink;
    protected $_name = [
        'acceptNoSeat'             => 'accept_no_seat',
        'bookTrainInfosShrink'     => 'book_train_infos',
        'btripUserId'              => 'btrip_user_id',
        'btripUserName'            => 'btrip_user_name',
        'businessInfoShrink'       => 'business_info',
        'contactInfoShrink'        => 'contact_info',
        'forceMatch'               => 'force_match',
        'isPayNow'                 => 'is_pay_now',
        'outOrderId'               => 'out_order_id',
        'passengerOpenInfoSShrink' => 'passenger_open_info_s',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptNoSeat) {
            $res['accept_no_seat'] = $this->acceptNoSeat;
        }
        if (null !== $this->bookTrainInfosShrink) {
            $res['book_train_infos'] = $this->bookTrainInfosShrink;
        }
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->btripUserName) {
            $res['btrip_user_name'] = $this->btripUserName;
        }
        if (null !== $this->businessInfoShrink) {
            $res['business_info'] = $this->businessInfoShrink;
        }
        if (null !== $this->contactInfoShrink) {
            $res['contact_info'] = $this->contactInfoShrink;
        }
        if (null !== $this->forceMatch) {
            $res['force_match'] = $this->forceMatch;
        }
        if (null !== $this->isPayNow) {
            $res['is_pay_now'] = $this->isPayNow;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->passengerOpenInfoSShrink) {
            $res['passenger_open_info_s'] = $this->passengerOpenInfoSShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainOrderCreateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accept_no_seat'])) {
            $model->acceptNoSeat = $map['accept_no_seat'];
        }
        if (isset($map['book_train_infos'])) {
            $model->bookTrainInfosShrink = $map['book_train_infos'];
        }
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['btrip_user_name'])) {
            $model->btripUserName = $map['btrip_user_name'];
        }
        if (isset($map['business_info'])) {
            $model->businessInfoShrink = $map['business_info'];
        }
        if (isset($map['contact_info'])) {
            $model->contactInfoShrink = $map['contact_info'];
        }
        if (isset($map['force_match'])) {
            $model->forceMatch = $map['force_match'];
        }
        if (isset($map['is_pay_now'])) {
            $model->isPayNow = $map['is_pay_now'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['passenger_open_info_s'])) {
            $model->passengerOpenInfoSShrink = $map['passenger_open_info_s'];
        }

        return $model;
    }
}
