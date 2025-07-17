<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponseBody\planResult\resourceAllocations;
use AlibabaCloud\Tea\Model;

class planResult extends Model
{
    /**
     * @var resourceAllocations[]
     */
    public $resourceAllocations;
    protected $_name = [
        'resourceAllocations' => 'ResourceAllocations',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceAllocations) {
            $res['ResourceAllocations'] = [];
            if (null !== $this->resourceAllocations && \is_array($this->resourceAllocations)) {
                $n = 0;
                foreach ($this->resourceAllocations as $item) {
                    $res['ResourceAllocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceAllocations'])) {
            if (!empty($map['ResourceAllocations'])) {
                $model->resourceAllocations = [];
                $n = 0;
                foreach ($map['ResourceAllocations'] as $item) {
                    $model->resourceAllocations[$n++] = null !== $item ? resourceAllocations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
