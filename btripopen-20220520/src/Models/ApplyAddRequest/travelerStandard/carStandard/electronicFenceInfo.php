<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard\electronicFenceInfo\electronicFenceLocationsFrom;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard\electronicFenceInfo\electronicFenceLocationsTo;

class electronicFenceInfo extends Model
{
    /**
     * @var electronicFenceLocationsFrom[]
     */
    public $electronicFenceLocationsFrom;

    /**
     * @var electronicFenceLocationsTo[]
     */
    public $electronicFenceLocationsTo;

    /**
     * @var int
     */
    public $electronicFenceType;
    protected $_name = [
        'electronicFenceLocationsFrom' => 'electronic_fence_locations_from',
        'electronicFenceLocationsTo' => 'electronic_fence_locations_to',
        'electronicFenceType' => 'electronic_fence_type',
    ];

    public function validate()
    {
        if (\is_array($this->electronicFenceLocationsFrom)) {
            Model::validateArray($this->electronicFenceLocationsFrom);
        }
        if (\is_array($this->electronicFenceLocationsTo)) {
            Model::validateArray($this->electronicFenceLocationsTo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->electronicFenceLocationsFrom) {
            if (\is_array($this->electronicFenceLocationsFrom)) {
                $res['electronic_fence_locations_from'] = [];
                $n1 = 0;
                foreach ($this->electronicFenceLocationsFrom as $item1) {
                    $res['electronic_fence_locations_from'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->electronicFenceLocationsTo) {
            if (\is_array($this->electronicFenceLocationsTo)) {
                $res['electronic_fence_locations_to'] = [];
                $n1 = 0;
                foreach ($this->electronicFenceLocationsTo as $item1) {
                    $res['electronic_fence_locations_to'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->electronicFenceType) {
            $res['electronic_fence_type'] = $this->electronicFenceType;
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
        if (isset($map['electronic_fence_locations_from'])) {
            if (!empty($map['electronic_fence_locations_from'])) {
                $model->electronicFenceLocationsFrom = [];
                $n1 = 0;
                foreach ($map['electronic_fence_locations_from'] as $item1) {
                    $model->electronicFenceLocationsFrom[$n1] = electronicFenceLocationsFrom::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['electronic_fence_locations_to'])) {
            if (!empty($map['electronic_fence_locations_to'])) {
                $model->electronicFenceLocationsTo = [];
                $n1 = 0;
                foreach ($map['electronic_fence_locations_to'] as $item1) {
                    $model->electronicFenceLocationsTo[$n1] = electronicFenceLocationsTo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['electronic_fence_type'])) {
            $model->electronicFenceType = $map['electronic_fence_type'];
        }

        return $model;
    }
}
