<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo\wangWangs\wangWang;
use AlibabaCloud\Tea\Model;

class wangWangs extends Model
{
    /**
     * @var wangWang[]
     */
    public $wangWang;
    protected $_name = [
        'wangWang' => 'WangWang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wangWang) {
            $res['WangWang'] = [];
            if (null !== $this->wangWang && \is_array($this->wangWang)) {
                $n = 0;
                foreach ($this->wangWang as $item) {
                    $res['WangWang'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wangWangs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WangWang'])) {
            if (!empty($map['WangWang'])) {
                $model->wangWang = [];
                $n               = 0;
                foreach ($map['WangWang'] as $item) {
                    $model->wangWang[$n++] = null !== $item ? wangWang::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
