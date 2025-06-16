<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList\bookAncillaryReqItem;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList\passengerList;

class passengerAncillaryPurchaseMapList extends Model
{
    /**
     * @var bookAncillaryReqItem
     */
    public $bookAncillaryReqItem;

    /**
     * @var passengerList[]
     */
    public $passengerList;
    protected $_name = [
        'bookAncillaryReqItem' => 'book_ancillary_req_item',
        'passengerList' => 'passenger_list',
    ];

    public function validate()
    {
        if (null !== $this->bookAncillaryReqItem) {
            $this->bookAncillaryReqItem->validate();
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookAncillaryReqItem) {
            $res['book_ancillary_req_item'] = null !== $this->bookAncillaryReqItem ? $this->bookAncillaryReqItem->toArray($noStream) : $this->bookAncillaryReqItem;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_ancillary_req_item'])) {
            $model->bookAncillaryReqItem = bookAncillaryReqItem::fromMap($map['book_ancillary_req_item']);
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

        return $model;
    }
}
