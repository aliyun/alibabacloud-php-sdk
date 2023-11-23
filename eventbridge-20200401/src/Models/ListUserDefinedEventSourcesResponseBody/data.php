<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The event sources.
     *
     * @var eventSourceList[]
     */
    public $eventSourceList;
    protected $_name = [
        'eventSourceList' => 'EventSourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSourceList) {
            $res['EventSourceList'] = [];
            if (null !== $this->eventSourceList && \is_array($this->eventSourceList)) {
                $n = 0;
                foreach ($this->eventSourceList as $item) {
                    $res['EventSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['EventSourceList'])) {
            if (!empty($map['EventSourceList'])) {
                $model->eventSourceList = [];
                $n                      = 0;
                foreach ($map['EventSourceList'] as $item) {
                    $model->eventSourceList[$n++] = null !== $item ? eventSourceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
