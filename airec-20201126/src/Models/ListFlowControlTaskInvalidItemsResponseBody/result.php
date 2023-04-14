<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskInvalidItemsResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskInvalidItemsResponseBody\result\invalidItems;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var invalidItems[]
     */
    public $invalidItems;
    protected $_name = [
        'invalidItems' => 'invalidItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidItems) {
            $res['invalidItems'] = [];
            if (null !== $this->invalidItems && \is_array($this->invalidItems)) {
                $n = 0;
                foreach ($this->invalidItems as $item) {
                    $res['invalidItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['invalidItems'])) {
            if (!empty($map['invalidItems'])) {
                $model->invalidItems = [];
                $n                   = 0;
                foreach ($map['invalidItems'] as $item) {
                    $model->invalidItems[$n++] = null !== $item ? invalidItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
