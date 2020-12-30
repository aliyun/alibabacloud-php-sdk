<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEventsResponseBody\events\event\objectAttrs\objectAttr;
use AlibabaCloud\Tea\Model;

class objectAttrs extends Model
{
    /**
     * @var objectAttr[]
     */
    public $objectAttr;
    protected $_name = [
        'objectAttr' => 'ObjectAttr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectAttr) {
            $res['ObjectAttr'] = [];
            if (null !== $this->objectAttr && \is_array($this->objectAttr)) {
                $n = 0;
                foreach ($this->objectAttr as $item) {
                    $res['ObjectAttr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objectAttrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectAttr'])) {
            if (!empty($map['ObjectAttr'])) {
                $model->objectAttr = [];
                $n                 = 0;
                foreach ($map['ObjectAttr'] as $item) {
                    $model->objectAttr[$n++] = null !== $item ? objectAttr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
