<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody\list_\list_[]
     */
    public $list;
    protected $_name = [
        'list' => 'list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['list'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackMenuResponseBody\list_\list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
