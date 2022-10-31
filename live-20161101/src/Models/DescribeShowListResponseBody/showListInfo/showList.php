<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList\show;
use AlibabaCloud\Tea\Model;

class showList extends Model
{
    /**
     * @var show[]
     */
    public $show;
    protected $_name = [
        'show' => 'Show',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->show) {
            $res['Show'] = [];
            if (null !== $this->show && \is_array($this->show)) {
                $n = 0;
                foreach ($this->show as $item) {
                    $res['Show'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return showList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Show'])) {
            if (!empty($map['Show'])) {
                $model->show = [];
                $n           = 0;
                foreach ($map['Show'] as $item) {
                    $model->show[$n++] = null !== $item ? show::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
