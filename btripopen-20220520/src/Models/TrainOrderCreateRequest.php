<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\bookTrainInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\businessInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\passengerOpenInfoS;
use AlibabaCloud\Tea\Model;

class TrainOrderCreateRequest extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $acceptNoSeat;

    /**
     * @description This parameter is required.
     *
     * @var bookTrainInfos[]
     */
    public $bookTrainInfos;

    /**
     * @description This parameter is required.
     *
     * @example 12344321
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $btripUserName;

    /**
     * @var businessInfo
     */
    public $businessInfo;

    /**
     * @description This parameter is required.
     *
     * @var contactInfo
     */
    public $contactInfo;

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
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @description This parameter is required.
     *
     * @var passengerOpenInfoS[]
     */
    public $passengerOpenInfoS;
    protected $_name = [
        'acceptNoSeat'       => 'accept_no_seat',
        'bookTrainInfos'     => 'book_train_infos',
        'btripUserId'        => 'btrip_user_id',
        'btripUserName'      => 'btrip_user_name',
        'businessInfo'       => 'business_info',
        'contactInfo'        => 'contact_info',
        'forceMatch'         => 'force_match',
        'isPayNow'           => 'is_pay_now',
        'outOrderId'         => 'out_order_id',
        'passengerOpenInfoS' => 'passenger_open_info_s',
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
        if (null !== $this->bookTrainInfos) {
            $res['book_train_infos'] = [];
            if (null !== $this->bookTrainInfos && \is_array($this->bookTrainInfos)) {
                $n = 0;
                foreach ($this->bookTrainInfos as $item) {
                    $res['book_train_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->btripUserName) {
            $res['btrip_user_name'] = $this->btripUserName;
        }
        if (null !== $this->businessInfo) {
            $res['business_info'] = null !== $this->businessInfo ? $this->businessInfo->toMap() : null;
        }
        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toMap() : null;
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
        if (null !== $this->passengerOpenInfoS) {
            $res['passenger_open_info_s'] = [];
            if (null !== $this->passengerOpenInfoS && \is_array($this->passengerOpenInfoS)) {
                $n = 0;
                foreach ($this->passengerOpenInfoS as $item) {
                    $res['passenger_open_info_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainOrderCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accept_no_seat'])) {
            $model->acceptNoSeat = $map['accept_no_seat'];
        }
        if (isset($map['book_train_infos'])) {
            if (!empty($map['book_train_infos'])) {
                $model->bookTrainInfos = [];
                $n                     = 0;
                foreach ($map['book_train_infos'] as $item) {
                    $model->bookTrainInfos[$n++] = null !== $item ? bookTrainInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['btrip_user_name'])) {
            $model->btripUserName = $map['btrip_user_name'];
        }
        if (isset($map['business_info'])) {
            $model->businessInfo = businessInfo::fromMap($map['business_info']);
        }
        if (isset($map['contact_info'])) {
            $model->contactInfo = contactInfo::fromMap($map['contact_info']);
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
            if (!empty($map['passenger_open_info_s'])) {
                $model->passengerOpenInfoS = [];
                $n                         = 0;
                foreach ($map['passenger_open_info_s'] as $item) {
                    $model->passengerOpenInfoS[$n++] = null !== $item ? passengerOpenInfoS::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
