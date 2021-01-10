<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryQueriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $appQuery;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $end;
    protected $_name = [
        'index'    => 'index',
        'appQuery' => 'appQuery',
        'start'    => 'start',
        'end'      => 'end',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->appQuery) {
            $res['appQuery'] = $this->appQuery;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['appQuery'])) {
            $model->appQuery = $map['appQuery'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        return $model;
    }
}
