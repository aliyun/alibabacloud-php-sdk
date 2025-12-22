<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryQueriesResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $appQuery;

    /**
     * @var int
     */
    public $end;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'appQuery' => 'appQuery',
        'end' => 'end',
        'index' => 'index',
        'start' => 'start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
