<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ModuleFlightItemListItemListSubItemPositionMapValue extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $journeyIndex;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentIndex;
    protected $_name = [
        'journeyIndex' => 'journey_index',
        'segmentIndex' => 'segment_index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->journeyIndex) {
            $res['journey_index'] = $this->journeyIndex;
        }
        if (null !== $this->segmentIndex) {
            $res['segment_index'] = $this->segmentIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModuleFlightItemListItemListSubItemPositionMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['journey_index'])) {
            $model->journeyIndex = $map['journey_index'];
        }
        if (isset($map['segment_index'])) {
            $model->segmentIndex = $map['segment_index'];
        }

        return $model;
    }
}
