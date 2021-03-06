<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventAttributeResponseBody\systemEvents\systemEvent;
use AlibabaCloud\Tea\Model;

class systemEvents extends Model
{
    /**
     * @var systemEvent[]
     */
    public $systemEvent;
    protected $_name = [
        'systemEvent' => 'SystemEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemEvent) {
            $res['SystemEvent'] = [];
            if (null !== $this->systemEvent && \is_array($this->systemEvent)) {
                $n = 0;
                foreach ($this->systemEvent as $item) {
                    $res['SystemEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemEvent'])) {
            if (!empty($map['SystemEvent'])) {
                $model->systemEvent = [];
                $n                  = 0;
                foreach ($map['SystemEvent'] as $item) {
                    $model->systemEvent[$n++] = null !== $item ? systemEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
