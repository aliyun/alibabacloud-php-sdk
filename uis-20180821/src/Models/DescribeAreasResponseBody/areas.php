<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeAreasResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeAreasResponseBody\areas\area;
use AlibabaCloud\Tea\Model;

class areas extends Model
{
    /**
     * @var area[]
     */
    public $area;
    protected $_name = [
        'area' => 'Area',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = [];
            if (null !== $this->area && \is_array($this->area)) {
                $n = 0;
                foreach ($this->area as $item) {
                    $res['Area'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return areas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            if (!empty($map['Area'])) {
                $model->area = [];
                $n           = 0;
                foreach ($map['Area'] as $item) {
                    $model->area[$n++] = null !== $item ? area::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
