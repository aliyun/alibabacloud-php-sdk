<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\cabinQuantityList\cabin;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\cabinQuantityList\segmentPosition;

class cabinQuantityList extends Model
{
    /**
     * @var segmentPosition
     */
    public $segmentPosition;

    /**
     * @var cabin
     */
    public $cabin;
    protected $_name = [
        'segmentPosition' => 'segment_position',
        'cabin' => 'cabin',
    ];

    public function validate()
    {
        if (null !== $this->segmentPosition) {
            $this->segmentPosition->validate();
        }
        if (null !== $this->cabin) {
            $this->cabin->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toArray($noStream) : $this->segmentPosition;
        }

        if (null !== $this->cabin) {
            $res['cabin'] = null !== $this->cabin ? $this->cabin->toArray($noStream) : $this->cabin;
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
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }

        if (isset($map['cabin'])) {
            $model->cabin = cabin::fromMap($map['cabin']);
        }

        return $model;
    }
}
