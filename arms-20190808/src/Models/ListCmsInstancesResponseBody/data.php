<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesResponseBody\data\products;

class data extends Model
{
    /**
     * @var bool
     */
    public $enableTag;

    /**
     * @var products[]
     */
    public $products;
    protected $_name = [
        'enableTag' => 'EnableTag',
        'products' => 'Products',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTag) {
            $res['EnableTag'] = $this->enableTag;
        }

        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1 = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnableTag'])) {
            $model->enableTag = $map['EnableTag'];
        }

        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n1 = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1] = products::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
