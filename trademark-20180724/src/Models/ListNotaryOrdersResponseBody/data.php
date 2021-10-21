<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersResponseBody\data\notaryOrder;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var notaryOrder[]
     */
    public $notaryOrder;
    protected $_name = [
        'notaryOrder' => 'NotaryOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notaryOrder) {
            $res['NotaryOrder'] = [];
            if (null !== $this->notaryOrder && \is_array($this->notaryOrder)) {
                $n = 0;
                foreach ($this->notaryOrder as $item) {
                    $res['NotaryOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotaryOrder'])) {
            if (!empty($map['NotaryOrder'])) {
                $model->notaryOrder = [];
                $n                  = 0;
                foreach ($map['NotaryOrder'] as $item) {
                    $model->notaryOrder[$n++] = null !== $item ? notaryOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
