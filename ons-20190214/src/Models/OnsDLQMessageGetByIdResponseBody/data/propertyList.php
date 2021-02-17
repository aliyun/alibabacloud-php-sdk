<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageGetByIdResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageGetByIdResponseBody\data\propertyList\messageProperty;
use AlibabaCloud\Tea\Model;

class propertyList extends Model
{
    /**
     * @var messageProperty[]
     */
    public $messageProperty;
    protected $_name = [
        'messageProperty' => 'MessageProperty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageProperty) {
            $res['MessageProperty'] = [];
            if (null !== $this->messageProperty && \is_array($this->messageProperty)) {
                $n = 0;
                foreach ($this->messageProperty as $item) {
                    $res['MessageProperty'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageProperty'])) {
            if (!empty($map['MessageProperty'])) {
                $model->messageProperty = [];
                $n                      = 0;
                foreach ($map['MessageProperty'] as $item) {
                    $model->messageProperty[$n++] = null !== $item ? messageProperty::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
