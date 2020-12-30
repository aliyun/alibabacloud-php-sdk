<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryIotCardOfferDtlResponseBody\cardOfferDetail;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $offerId;

    /**
     * @var string
     */
    public $offerName;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $orderTime;
    protected $_name = [
        'effectiveTime' => 'EffectiveTime',
        'offerId'       => 'OfferId',
        'offerName'     => 'OfferName',
        'expireTime'    => 'ExpireTime',
        'orderTime'     => 'OrderTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->offerId) {
            $res['OfferId'] = $this->offerId;
        }
        if (null !== $this->offerName) {
            $res['OfferName'] = $this->offerName;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->orderTime) {
            $res['OrderTime'] = $this->orderTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['OfferId'])) {
            $model->offerId = $map['OfferId'];
        }
        if (isset($map['OfferName'])) {
            $model->offerName = $map['OfferName'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['OrderTime'])) {
            $model->orderTime = $map['OrderTime'];
        }

        return $model;
    }
}
