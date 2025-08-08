<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo\wangWangs\wangWang;

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
        if (\is_array($this->wangWang)) {
            Model::validateArray($this->wangWang);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wangWang) {
            if (\is_array($this->wangWang)) {
                $res['WangWang'] = [];
                $n1 = 0;
                foreach ($this->wangWang as $item1) {
                    $res['WangWang'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WangWang'])) {
            if (!empty($map['WangWang'])) {
                $model->wangWang = [];
                $n1 = 0;
                foreach ($map['WangWang'] as $item1) {
                    $model->wangWang[$n1] = wangWang::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
