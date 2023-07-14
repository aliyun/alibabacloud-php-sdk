<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean\event;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The ID of the event record.
     *
     * @var event[]
     */
    public $event;

    /**
     * @description The number of the page to return. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the alert rule. Valid values:
     *
     *   `1`: custom alert rules to monitor drill-down data sets
     *   `3`: custom alert rules to monitor tiled data sets
     *   `4`: alert rules to monitor the frontend, including the default frontend alert rules
     *   `5`: alert rules to monitor applications, including the default application alert rules
     *   `6`: the default frontend alert rules
     *   `7`: the default application alert rules
     *   `8`: Tracing Analysis alert rules
     *   `101`: Prometheus alert rules
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify a UNIX timestamp of the LONG data type, in milliseconds. The default value is 10 minutes before the current time.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'event'      => 'Event',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = [];
            if (null !== $this->event && \is_array($this->event)) {
                $n = 0;
                foreach ($this->event as $item) {
                    $res['Event'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Event'])) {
            if (!empty($map['Event'])) {
                $model->event = [];
                $n            = 0;
                foreach ($map['Event'] as $item) {
                    $model->event[$n++] = null !== $item ? event::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
