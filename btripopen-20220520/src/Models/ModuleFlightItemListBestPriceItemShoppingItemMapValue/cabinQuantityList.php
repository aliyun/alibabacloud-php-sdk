<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\cabinQuantityList\cabinInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleFlightItemListBestPriceItemShoppingItemMapValue\cabinQuantityList\segmentPosition;

class cabinQuantityList extends Model
{
    /**
     * @var segmentPosition
     */
    public $segmentPosition;

    /**
     * @var cabinInfo
     */
    public $cabinInfo;
    protected $_name = [
        'segmentPosition' => 'segment_position',
        'cabinInfo' => 'cabin_info',
    ];

    public function validate()
    {
        if (null !== $this->segmentPosition) {
            $this->segmentPosition->validate();
        }
        if (null !== $this->cabinInfo) {
            $this->cabinInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toArray($noStream) : $this->segmentPosition;
        }

        if (null !== $this->cabinInfo) {
            $res['cabin_info'] = null !== $this->cabinInfo ? $this->cabinInfo->toArray($noStream) : $this->cabinInfo;
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

        if (isset($map['cabin_info'])) {
            $model->cabinInfo = cabinInfo::fromMap($map['cabin_info']);
        }

        return $model;
    }
}
