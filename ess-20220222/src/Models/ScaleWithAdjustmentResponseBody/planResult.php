<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponseBody\planResult\resourceAllocations;

class planResult extends Model
{
    /**
     * @var resourceAllocations[]
     */
    public $resourceAllocations;
    protected $_name = [
        'resourceAllocations' => 'ResourceAllocations',
    ];

    public function validate()
    {
        if (\is_array($this->resourceAllocations)) {
            Model::validateArray($this->resourceAllocations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceAllocations) {
            if (\is_array($this->resourceAllocations)) {
                $res['ResourceAllocations'] = [];
                $n1 = 0;
                foreach ($this->resourceAllocations as $item1) {
                    $res['ResourceAllocations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ResourceAllocations'])) {
            if (!empty($map['ResourceAllocations'])) {
                $model->resourceAllocations = [];
                $n1 = 0;
                foreach ($map['ResourceAllocations'] as $item1) {
                    $model->resourceAllocations[$n1] = resourceAllocations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
