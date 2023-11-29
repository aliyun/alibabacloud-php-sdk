<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\cabinQuantityList\cabin;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\cabinQuantityList\segmentPosition;
use AlibabaCloud\Tea\Model;

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
        'cabin'           => 'cabin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toMap() : null;
        }
        if (null !== $this->cabin) {
            $res['cabin'] = null !== $this->cabin ? $this->cabin->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cabinQuantityList
     */
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
