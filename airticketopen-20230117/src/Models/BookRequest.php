<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\contact;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerList;

class BookRequest extends Model
{
    /**
     * @var contact
     */
    public $contact;

    /**
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
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'contact' => 'contact',
        'outOrderNum' => 'out_order_num',
        'passengerAncillaryPurchaseMapList' => 'passenger_ancillary_purchase_map_list',
        'passengerList' => 'passenger_list',
        'solutionId' => 'solution_id',
    ];

    public function validate()
    {
        if (null !== $this->contact) {
            $this->contact->validate();
        }
        if (\is_array($this->passengerAncillaryPurchaseMapList)) {
            Model::validateArray($this->passengerAncillaryPurchaseMapList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contact) {
            $res['contact'] = null !== $this->contact ? $this->contact->toArray($noStream) : $this->contact;
        }

        if (null !== $this->outOrderNum) {
            $res['out_order_num'] = $this->outOrderNum;
        }

        if (null !== $this->passengerAncillaryPurchaseMapList) {
            if (\is_array($this->passengerAncillaryPurchaseMapList)) {
                $res['passenger_ancillary_purchase_map_list'] = [];
                $n1 = 0;
                foreach ($this->passengerAncillaryPurchaseMapList as $item1) {
                    $res['passenger_ancillary_purchase_map_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->contact = contact::fromMap($map['contact']);
        }

        if (isset($map['out_order_num'])) {
            $model->outOrderNum = $map['out_order_num'];
        }

        if (isset($map['passenger_ancillary_purchase_map_list'])) {
            if (!empty($map['passenger_ancillary_purchase_map_list'])) {
                $model->passengerAncillaryPurchaseMapList = [];
                $n1 = 0;
                foreach ($map['passenger_ancillary_purchase_map_list'] as $item1) {
                    $model->passengerAncillaryPurchaseMapList[$n1] = passengerAncillaryPurchaseMapList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = passengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
