<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyRequest\applyItineraryList;
use AlibabaCloud\Tea\Model;

class ElectronicItineraryBatchApplyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var applyItineraryList[]
     */
    public $applyItineraryList;

    /**
     * @example true
     *
     * @var bool
     */
    public $canReprint;
    protected $_name = [
        'applyItineraryList' => 'apply_itinerary_list',
        'canReprint'         => 'can_reprint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyItineraryList) {
            $res['apply_itinerary_list'] = [];
            if (null !== $this->applyItineraryList && \is_array($this->applyItineraryList)) {
                $n = 0;
                foreach ($this->applyItineraryList as $item) {
                    $res['apply_itinerary_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->canReprint) {
            $res['can_reprint'] = $this->canReprint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ElectronicItineraryBatchApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_itinerary_list'])) {
            if (!empty($map['apply_itinerary_list'])) {
                $model->applyItineraryList = [];
                $n                         = 0;
                foreach ($map['apply_itinerary_list'] as $item) {
                    $model->applyItineraryList[$n++] = null !== $item ? applyItineraryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['can_reprint'])) {
            $model->canReprint = $map['can_reprint'];
        }

        return $model;
    }
}
