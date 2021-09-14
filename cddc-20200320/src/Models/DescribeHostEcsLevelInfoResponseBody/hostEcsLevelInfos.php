<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos\items;
use AlibabaCloud\Tea\Model;

class hostEcsLevelInfos extends Model
{
    /**
     * @var string
     */
    public $cddcHostType;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'cddcHostType' => 'CddcHostType',
        'items'        => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cddcHostType) {
            $res['CddcHostType'] = $this->cddcHostType;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostEcsLevelInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CddcHostType'])) {
            $model->cddcHostType = $map['CddcHostType'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
