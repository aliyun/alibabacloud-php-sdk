<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertEventsResponseBody\pageBean\events;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The list of information about historical alert events.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The number of the page returned.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The total number of returned entries.
     *
     * @example 24
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'events' => 'Events',
        'page'   => 'Page',
        'size'   => 'Size',
        'total'  => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
