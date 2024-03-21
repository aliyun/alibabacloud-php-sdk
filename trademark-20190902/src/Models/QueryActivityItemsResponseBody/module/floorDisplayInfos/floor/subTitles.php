<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module\floorDisplayInfos\floor;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module\floorDisplayInfos\floor\subTitles\subFloor;
use AlibabaCloud\Tea\Model;

class subTitles extends Model
{
    /**
     * @var subFloor[]
     */
    public $subFloor;
    protected $_name = [
        'subFloor' => 'subFloor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subFloor) {
            $res['subFloor'] = [];
            if (null !== $this->subFloor && \is_array($this->subFloor)) {
                $n = 0;
                foreach ($this->subFloor as $item) {
                    $res['subFloor'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTitles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subFloor'])) {
            if (!empty($map['subFloor'])) {
                $model->subFloor = [];
                $n               = 0;
                foreach ($map['subFloor'] as $item) {
                    $model->subFloor[$n++] = null !== $item ? subFloor::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
