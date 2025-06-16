<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class BookShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactShrink;

    /**
     * @var string
     */
    public $outOrderNum;

    /**
     * @var string
     */
    public $passengerAncillaryPurchaseMapListShrink;

    /**
     * @var string
     */
    public $passengerListShrink;

    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'contactShrink' => 'contact',
        'outOrderNum' => 'out_order_num',
        'passengerAncillaryPurchaseMapListShrink' => 'passenger_ancillary_purchase_map_list',
        'passengerListShrink' => 'passenger_list',
        'solutionId' => 'solution_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactShrink) {
            $res['contact'] = $this->contactShrink;
        }

        if (null !== $this->outOrderNum) {
            $res['out_order_num'] = $this->outOrderNum;
        }

        if (null !== $this->passengerAncillaryPurchaseMapListShrink) {
            $res['passenger_ancillary_purchase_map_list'] = $this->passengerAncillaryPurchaseMapListShrink;
        }

        if (null !== $this->passengerListShrink) {
            $res['passenger_list'] = $this->passengerListShrink;
        }

        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
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
        if (isset($map['contact'])) {
            $model->contactShrink = $map['contact'];
        }

        if (isset($map['out_order_num'])) {
            $model->outOrderNum = $map['out_order_num'];
        }

        if (isset($map['passenger_ancillary_purchase_map_list'])) {
            $model->passengerAncillaryPurchaseMapListShrink = $map['passenger_ancillary_purchase_map_list'];
        }

        if (isset($map['passenger_list'])) {
            $model->passengerListShrink = $map['passenger_list'];
        }

        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
