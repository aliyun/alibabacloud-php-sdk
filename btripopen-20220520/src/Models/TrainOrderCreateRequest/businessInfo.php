<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderCreateRequest;

use AlibabaCloud\Tea\Model;

class businessInfo extends Model
{
    /**
     * @example 4321
     *
     * @var string
     */
    public $customerApplyId;

    /**
     * @example 1234
     *
     * @var string
     */
    public $customerItineraryId;
    protected $_name = [
        'customerApplyId'     => 'customer_apply_id',
        'customerItineraryId' => 'customer_itinerary_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerApplyId) {
            $res['customer_apply_id'] = $this->customerApplyId;
        }
        if (null !== $this->customerItineraryId) {
            $res['customer_itinerary_id'] = $this->customerItineraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customer_apply_id'])) {
            $model->customerApplyId = $map['customer_apply_id'];
        }
        if (isset($map['customer_itinerary_id'])) {
            $model->customerItineraryId = $map['customer_itinerary_id'];
        }

        return $model;
    }
}
