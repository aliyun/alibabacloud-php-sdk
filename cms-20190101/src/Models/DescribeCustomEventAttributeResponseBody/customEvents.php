<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponseBody\customEvents\customEvent;
use AlibabaCloud\Tea\Model;

class customEvents extends Model
{
    /**
     * @var customEvent[]
     */
    public $customEvent;
    protected $_name = [
        'customEvent' => 'CustomEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customEvent) {
            $res['CustomEvent'] = [];
            if (null !== $this->customEvent && \is_array($this->customEvent)) {
                $n = 0;
                foreach ($this->customEvent as $item) {
                    $res['CustomEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomEvent'])) {
            if (!empty($map['CustomEvent'])) {
                $model->customEvent = [];
                $n                  = 0;
                foreach ($map['CustomEvent'] as $item) {
                    $model->customEvent[$n++] = null !== $item ? customEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
