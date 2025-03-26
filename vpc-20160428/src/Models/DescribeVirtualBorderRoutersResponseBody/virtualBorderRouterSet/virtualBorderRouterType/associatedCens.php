<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedCens\associatedCen;

class associatedCens extends Model
{
    /**
     * @var associatedCen[]
     */
    public $associatedCen;
    protected $_name = [
        'associatedCen' => 'AssociatedCen',
    ];

    public function validate()
    {
        if (\is_array($this->associatedCen)) {
            Model::validateArray($this->associatedCen);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedCen) {
            if (\is_array($this->associatedCen)) {
                $res['AssociatedCen'] = [];
                $n1 = 0;
                foreach ($this->associatedCen as $item1) {
                    $res['AssociatedCen'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssociatedCen'])) {
            if (!empty($map['AssociatedCen'])) {
                $model->associatedCen = [];
                $n1 = 0;
                foreach ($map['AssociatedCen'] as $item1) {
                    $model->associatedCen[$n1++] = associatedCen::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
