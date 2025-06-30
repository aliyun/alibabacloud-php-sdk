<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyRequest\applyItineraryList;

class ElectronicItineraryBatchApplyRequest extends Model
{
    /**
     * @var applyItineraryList[]
     */
    public $applyItineraryList;

    /**
     * @var bool
     */
    public $canReprint;
    protected $_name = [
        'applyItineraryList' => 'apply_itinerary_list',
        'canReprint' => 'can_reprint',
    ];

    public function validate()
    {
        if (\is_array($this->applyItineraryList)) {
            Model::validateArray($this->applyItineraryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyItineraryList) {
            if (\is_array($this->applyItineraryList)) {
                $res['apply_itinerary_list'] = [];
                $n1 = 0;
                foreach ($this->applyItineraryList as $item1) {
                    $res['apply_itinerary_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['apply_itinerary_list'])) {
                $model->applyItineraryList = [];
                $n1 = 0;
                foreach ($map['apply_itinerary_list'] as $item1) {
                    $model->applyItineraryList[$n1] = applyItineraryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['can_reprint'])) {
            $model->canReprint = $map['can_reprint'];
        }

        return $model;
    }
}
