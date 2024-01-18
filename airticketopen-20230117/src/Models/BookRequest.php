<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\contact;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerList;
use AlibabaCloud\Tea\Model;

class BookRequest extends Model
{
    /**
     * @var contact
     */
    public $contact;

    /**
     * @example x091-2023-0220-j-0001
     *
     * @var string
     */
    public $outOrderNum;

    /**
     * @var passengerAncillaryPurchaseMapList[]
     */
    public $passengerAncillaryPurchaseMapList;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @description solution_id
     *
     * @example eJwz8DeySEo0NjQ01TU3TU7TNTFINNO1SE5O0jVKM0hKNjEwTElLNYwz0A32cNT1dfPVNTIwMjYwNjRQ8/A3NLI01Q0Ic0cRBwBVFxJJ
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'contact'                           => 'contact',
        'outOrderNum'                       => 'out_order_num',
        'passengerAncillaryPurchaseMapList' => 'passenger_ancillary_purchase_map_list',
        'passengerList'                     => 'passenger_list',
        'solutionId'                        => 'solution_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->outOrderNum) {
            $res['out_order_num'] = $this->outOrderNum;
        }
        if (null !== $this->passengerAncillaryPurchaseMapList) {
            $res['passenger_ancillary_purchase_map_list'] = [];
            if (null !== $this->passengerAncillaryPurchaseMapList && \is_array($this->passengerAncillaryPurchaseMapList)) {
                $n = 0;
                foreach ($this->passengerAncillaryPurchaseMapList as $item) {
                    $res['passenger_ancillary_purchase_map_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passengerList) {
            $res['passenger_list'] = [];
            if (null !== $this->passengerList && \is_array($this->passengerList)) {
                $n = 0;
                foreach ($this->passengerList as $item) {
                    $res['passenger_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact'])) {
            $model->contact = contact::fromMap($map['contact']);
        }
        if (isset($map['out_order_num'])) {
            $model->outOrderNum = $map['out_order_num'];
        }
        if (isset($map['passenger_ancillary_purchase_map_list'])) {
            if (!empty($map['passenger_ancillary_purchase_map_list'])) {
                $model->passengerAncillaryPurchaseMapList = [];
                $n                                        = 0;
                foreach ($map['passenger_ancillary_purchase_map_list'] as $item) {
                    $model->passengerAncillaryPurchaseMapList[$n++] = null !== $item ? passengerAncillaryPurchaseMapList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n                    = 0;
                foreach ($map['passenger_list'] as $item) {
                    $model->passengerList[$n++] = null !== $item ? passengerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
