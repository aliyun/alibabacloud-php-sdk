<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesResponseBody\data;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommoditiesResponseBody\data\commodities\commodity;
use AlibabaCloud\Tea\Model;

class commodities extends Model
{
    /**
     * @var commodity[]
     */
    public $commodity;
    protected $_name = [
        'commodity' => 'Commodity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = [];
            if (null !== $this->commodity && \is_array($this->commodity)) {
                $n = 0;
                foreach ($this->commodity as $item) {
                    $res['Commodity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodity'])) {
            if (!empty($map['Commodity'])) {
                $model->commodity = [];
                $n                = 0;
                foreach ($map['Commodity'] as $item) {
                    $model->commodity[$n++] = null !== $item ? commodity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
