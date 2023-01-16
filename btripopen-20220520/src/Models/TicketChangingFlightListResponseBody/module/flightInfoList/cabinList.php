<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList\cabinList\modifyPriceList;
use AlibabaCloud\Tea\Model;

class cabinList extends Model
{
    /**
     * @example G
     *
     * @var string
     */
    public $cabin;

    /**
     * @example Y
     *
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinDesc;

    /**
     * @example 80
     *
     * @var int
     */
    public $cabinDiscount;

    /**
     * @example G
     *
     * @var string
     */
    public $childCabin;

    /**
     * @example A
     *
     * @var string
     */
    public $leftNum;

    /**
     * @var modifyPriceList[]
     */
    public $modifyPriceList;

    /**
     * @example "360379a11ee84e9aa011baa41b758fe6"
     *
     * @var string
     */
    public $otaItemid;
    protected $_name = [
        'cabin'           => 'cabin',
        'cabinClass'      => 'cabin_class',
        'cabinDesc'       => 'cabin_desc',
        'cabinDiscount'   => 'cabin_discount',
        'childCabin'      => 'child_cabin',
        'leftNum'         => 'left_num',
        'modifyPriceList' => 'modify_price_list',
        'otaItemid'       => 'ota_itemid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cabin) {
            $res['cabin'] = $this->cabin;
        }
        if (null !== $this->cabinClass) {
            $res['cabin_class'] = $this->cabinClass;
        }
        if (null !== $this->cabinDesc) {
            $res['cabin_desc'] = $this->cabinDesc;
        }
        if (null !== $this->cabinDiscount) {
            $res['cabin_discount'] = $this->cabinDiscount;
        }
        if (null !== $this->childCabin) {
            $res['child_cabin'] = $this->childCabin;
        }
        if (null !== $this->leftNum) {
            $res['left_num'] = $this->leftNum;
        }
        if (null !== $this->modifyPriceList) {
            $res['modify_price_list'] = [];
            if (null !== $this->modifyPriceList && \is_array($this->modifyPriceList)) {
                $n = 0;
                foreach ($this->modifyPriceList as $item) {
                    $res['modify_price_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->otaItemid) {
            $res['ota_itemid'] = $this->otaItemid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cabinList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cabin'])) {
            $model->cabin = $map['cabin'];
        }
        if (isset($map['cabin_class'])) {
            $model->cabinClass = $map['cabin_class'];
        }
        if (isset($map['cabin_desc'])) {
            $model->cabinDesc = $map['cabin_desc'];
        }
        if (isset($map['cabin_discount'])) {
            $model->cabinDiscount = $map['cabin_discount'];
        }
        if (isset($map['child_cabin'])) {
            $model->childCabin = $map['child_cabin'];
        }
        if (isset($map['left_num'])) {
            $model->leftNum = $map['left_num'];
        }
        if (isset($map['modify_price_list'])) {
            if (!empty($map['modify_price_list'])) {
                $model->modifyPriceList = [];
                $n                      = 0;
                foreach ($map['modify_price_list'] as $item) {
                    $model->modifyPriceList[$n++] = null !== $item ? modifyPriceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ota_itemid'])) {
            $model->otaItemid = $map['ota_itemid'];
        }

        return $model;
    }
}
