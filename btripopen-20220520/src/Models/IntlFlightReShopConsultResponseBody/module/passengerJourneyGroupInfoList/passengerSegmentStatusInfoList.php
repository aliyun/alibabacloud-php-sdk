<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList;

use AlibabaCloud\Dara\Model;

class passengerSegmentStatusInfoList extends Model
{
    /**
     * @var bool
     */
    public $canReShop;

    /**
     * @var int
     */
    public $passengerId;

    /**
     * @var string
     */
    public $segmentKey;

    /**
     * @var string
     */
    public $unReShopReason;

    /**
     * @var string
     */
    public $unReShopReasonCode;
    protected $_name = [
        'canReShop' => 'can_re_shop',
        'passengerId' => 'passenger_id',
        'segmentKey' => 'segment_key',
        'unReShopReason' => 'un_re_shop_reason',
        'unReShopReasonCode' => 'un_re_shop_reason_code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canReShop) {
            $res['can_re_shop'] = $this->canReShop;
        }

        if (null !== $this->passengerId) {
            $res['passenger_id'] = $this->passengerId;
        }

        if (null !== $this->segmentKey) {
            $res['segment_key'] = $this->segmentKey;
        }

        if (null !== $this->unReShopReason) {
            $res['un_re_shop_reason'] = $this->unReShopReason;
        }

        if (null !== $this->unReShopReasonCode) {
            $res['un_re_shop_reason_code'] = $this->unReShopReasonCode;
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
        if (isset($map['can_re_shop'])) {
            $model->canReShop = $map['can_re_shop'];
        }

        if (isset($map['passenger_id'])) {
            $model->passengerId = $map['passenger_id'];
        }

        if (isset($map['segment_key'])) {
            $model->segmentKey = $map['segment_key'];
        }

        if (isset($map['un_re_shop_reason'])) {
            $model->unReShopReason = $map['un_re_shop_reason'];
        }

        if (isset($map['un_re_shop_reason_code'])) {
            $model->unReShopReasonCode = $map['un_re_shop_reason_code'];
        }

        return $model;
    }
}
