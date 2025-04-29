<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingFlightListResponseBody\module\flightInfoList\cabinList\modifyPriceList;

class cabinList extends Model
{
    /**
     * @var string
     */
    public $cabin;

    /**
     * @var string
     */
    public $cabinClass;

    /**
     * @var string
     */
    public $cabinDesc;

    /**
     * @var int
     */
    public $cabinDiscount;

    /**
     * @var string
     */
    public $childCabin;

    /**
     * @var string
     */
    public $leftNum;

    /**
     * @var modifyPriceList[]
     */
    public $modifyPriceList;

    /**
     * @var string
     */
    public $otaItemid;
    protected $_name = [
        'cabin' => 'cabin',
        'cabinClass' => 'cabin_class',
        'cabinDesc' => 'cabin_desc',
        'cabinDiscount' => 'cabin_discount',
        'childCabin' => 'child_cabin',
        'leftNum' => 'left_num',
        'modifyPriceList' => 'modify_price_list',
        'otaItemid' => 'ota_itemid',
    ];

    public function validate()
    {
        if (\is_array($this->modifyPriceList)) {
            Model::validateArray($this->modifyPriceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->modifyPriceList)) {
                $res['modify_price_list'] = [];
                $n1 = 0;
                foreach ($this->modifyPriceList as $item1) {
                    $res['modify_price_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->otaItemid) {
            $res['ota_itemid'] = $this->otaItemid;
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
                $n1 = 0;
                foreach ($map['modify_price_list'] as $item1) {
                    $model->modifyPriceList[$n1++] = modifyPriceList::fromMap($item1);
                }
            }
        }

        if (isset($map['ota_itemid'])) {
            $model->otaItemid = $map['ota_itemid'];
        }

        return $model;
    }
}
