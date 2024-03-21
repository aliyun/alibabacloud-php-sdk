<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module\floorDisplayInfos\floor;
use AlibabaCloud\Tea\Model;

class floorDisplayInfos extends Model
{
    /**
     * @var floor[]
     */
    public $floor;
    protected $_name = [
        'floor' => 'floor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->floor) {
            $res['floor'] = [];
            if (null !== $this->floor && \is_array($this->floor)) {
                $n = 0;
                foreach ($this->floor as $item) {
                    $res['floor'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return floorDisplayInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['floor'])) {
            if (!empty($map['floor'])) {
                $model->floor = [];
                $n            = 0;
                foreach ($map['floor'] as $item) {
                    $model->floor[$n++] = null !== $item ? floor::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
