<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList\bookAncillaryReqItem;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList\passengerList;
use AlibabaCloud\Tea\Model;

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
        'passengerList'        => 'passenger_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookAncillaryReqItem) {
            $res['book_ancillary_req_item'] = null !== $this->bookAncillaryReqItem ? $this->bookAncillaryReqItem->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerAncillaryPurchaseMapList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_ancillary_req_item'])) {
            $model->bookAncillaryReqItem = bookAncillaryReqItem::fromMap($map['book_ancillary_req_item']);
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

        return $model;
    }
}
