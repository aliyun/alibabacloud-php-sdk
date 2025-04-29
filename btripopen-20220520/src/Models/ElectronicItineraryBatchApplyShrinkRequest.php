<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ElectronicItineraryBatchApplyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applyItineraryListShrink;

    /**
     * @var bool
     */
    public $canReprint;
    protected $_name = [
        'applyItineraryListShrink' => 'apply_itinerary_list',
        'canReprint' => 'can_reprint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
