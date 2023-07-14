<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListCmsInstancesResponseBody\data\products;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableTag;

    /**
     * @var products[]
     */
    public $products;
    protected $_name = [
        'enableTag' => 'EnableTag',
        'products'  => 'Products',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTag) {
            $res['EnableTag'] = $this->enableTag;
        }
        if (null !== $this->products) {
            $res['Products'] = [];
            if (null !== $this->products && \is_array($this->products)) {
                $n = 0;
                foreach ($this->products as $item) {
                    $res['Products'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableTag'])) {
            $model->enableTag = $map['EnableTag'];
        }
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n               = 0;
                foreach ($map['Products'] as $item) {
                    $model->products[$n++] = null !== $item ? products::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
