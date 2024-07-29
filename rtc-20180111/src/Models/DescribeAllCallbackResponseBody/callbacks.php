<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAllCallbackResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAllCallbackResponseBody\callbacks\subEvent;
use AlibabaCloud\Tea\Model;

class callbacks extends Model
{
    /**
     * @example RecordEvent
     *
     * @var string
     */
    public $category;

    /**
     * @example 录制回调
     *
     * @var string
     */
    public $name;

    /**
     * @var subEvent[]
     */
    public $subEvent;
    protected $_name = [
        'category' => 'Category',
        'name'     => 'Name',
        'subEvent' => 'SubEvent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subEvent) {
            $res['SubEvent'] = [];
            if (null !== $this->subEvent && \is_array($this->subEvent)) {
                $n = 0;
                foreach ($this->subEvent as $item) {
                    $res['SubEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callbacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubEvent'])) {
            if (!empty($map['SubEvent'])) {
                $model->subEvent = [];
                $n               = 0;
                foreach ($map['SubEvent'] as $item) {
                    $model->subEvent[$n++] = null !== $item ? subEvent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
