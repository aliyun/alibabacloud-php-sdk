<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class BookShrinkRequest extends Model
{
    /**
     * @description contact information
     *
     * This parameter is required.
     * @var string
     */
    public $contactShrink;

    /**
     * @description external order number(buyer customization)
     *
     * This parameter is required.
     * @example x091-2023-0220-j-0001
     *
     * @var string
     */
    public $outOrderNum;

    /**
     * @description passenger-ancillary purchase relationship
     *
     * @var string
     */
    public $passengerAncillaryPurchaseMapListShrink;

    /**
     * @description passenger list
     *
     * This parameter is required.
     * @var string
     */
    public $passengerListShrink;

    /**
     * @description solution_id returned by Enrich
     *
     * This parameter is required.
     * @example eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'contactShrink'                           => 'contact',
        'outOrderNum'                             => 'out_order_num',
        'passengerAncillaryPurchaseMapListShrink' => 'passenger_ancillary_purchase_map_list',
        'passengerListShrink'                     => 'passenger_list',
        'solutionId'                              => 'solution_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return BookShrinkRequest
     */
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
