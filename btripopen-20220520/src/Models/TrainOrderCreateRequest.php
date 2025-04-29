<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\bookTrainInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\businessInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\contactInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest\passengerOpenInfoS;

class TrainOrderCreateRequest extends Model
{
    /**
     * @var string
     */
    public $acceptNoSeat;

    /**
     * @var bookTrainInfos[]
     */
    public $bookTrainInfos;

    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $btripUserName;

    /**
     * @var businessInfo
     */
    public $businessInfo;

    /**
     * @var contactInfo
     */
    public $contactInfo;

    /**
     * @var string
     */
    public $forceMatch;

    /**
     * @var bool
     */
    public $isPayNow;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var passengerOpenInfoS[]
     */
    public $passengerOpenInfoS;
    protected $_name = [
        'acceptNoSeat' => 'accept_no_seat',
        'bookTrainInfos' => 'book_train_infos',
        'btripUserId' => 'btrip_user_id',
        'btripUserName' => 'btrip_user_name',
        'businessInfo' => 'business_info',
        'contactInfo' => 'contact_info',
        'forceMatch' => 'force_match',
        'isPayNow' => 'is_pay_now',
        'outOrderId' => 'out_order_id',
        'passengerOpenInfoS' => 'passenger_open_info_s',
    ];

    public function validate()
    {
        if (\is_array($this->bookTrainInfos)) {
            Model::validateArray($this->bookTrainInfos);
        }
        if (null !== $this->businessInfo) {
            $this->businessInfo->validate();
        }
        if (null !== $this->contactInfo) {
            $this->contactInfo->validate();
        }
        if (\is_array($this->passengerOpenInfoS)) {
            Model::validateArray($this->passengerOpenInfoS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptNoSeat) {
            $res['accept_no_seat'] = $this->acceptNoSeat;
        }

        if (null !== $this->bookTrainInfos) {
            if (\is_array($this->bookTrainInfos)) {
                $res['book_train_infos'] = [];
                $n1 = 0;
                foreach ($this->bookTrainInfos as $item1) {
                    $res['book_train_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['business_info'] = null !== $this->businessInfo ? $this->businessInfo->toArray($noStream) : $this->businessInfo;
        }

        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toArray($noStream) : $this->contactInfo;
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
            if (\is_array($this->passengerOpenInfoS)) {
                $res['passenger_open_info_s'] = [];
                $n1 = 0;
                foreach ($this->passengerOpenInfoS as $item1) {
                    $res['passenger_open_info_s'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['accept_no_seat'])) {
            $model->acceptNoSeat = $map['accept_no_seat'];
        }

        if (isset($map['book_train_infos'])) {
            if (!empty($map['book_train_infos'])) {
                $model->bookTrainInfos = [];
                $n1 = 0;
                foreach ($map['book_train_infos'] as $item1) {
                    $model->bookTrainInfos[$n1++] = bookTrainInfos::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['passenger_open_info_s'] as $item1) {
                    $model->passengerOpenInfoS[$n1++] = passengerOpenInfoS::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
