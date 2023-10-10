<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody\events;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterEventsResponseBody extends Model
{
    /**
     * @description The list of events.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'events'   => 'events',
        'pageInfo' => 'page_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
