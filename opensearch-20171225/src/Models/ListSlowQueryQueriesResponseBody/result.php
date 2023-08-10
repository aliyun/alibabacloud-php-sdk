<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryQueriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The content of the optimization suggestion for the query.
     *
     * @example no data
     *
     * @var string
     */
    public $appQuery;

    /**
     * @description The end of the time range that was queried.
     *
     * @example 1589990340
     *
     * @var int
     */
    public $end;

    /**
     * @description The ID of the optimization suggestion.
     *
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @description The beginning of the time range that was queried.
     *
     * @example 1589986800
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'appQuery' => 'appQuery',
        'end'      => 'end',
        'index'    => 'index',
        'start'    => 'start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appQuery) {
            $res['appQuery'] = $this->appQuery;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appQuery'])) {
            $model->appQuery = $map['appQuery'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
