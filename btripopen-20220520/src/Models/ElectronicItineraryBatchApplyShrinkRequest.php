<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ElectronicItineraryBatchApplyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $applyItineraryListShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $canReprint;
    protected $_name = [
        'applyItineraryListShrink' => 'apply_itinerary_list',
        'canReprint'               => 'can_reprint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyItineraryListShrink) {
            $res['apply_itinerary_list'] = $this->applyItineraryListShrink;
        }
        if (null !== $this->canReprint) {
            $res['can_reprint'] = $this->canReprint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ElectronicItineraryBatchApplyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_itinerary_list'])) {
            $model->applyItineraryListShrink = $map['apply_itinerary_list'];
        }
        if (isset($map['can_reprint'])) {
            $model->canReprint = $map['can_reprint'];
        }

        return $model;
    }
}
