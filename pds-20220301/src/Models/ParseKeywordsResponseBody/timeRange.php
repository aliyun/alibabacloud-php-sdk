<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\ParseKeywordsResponseBody;

use AlibabaCloud\Tea\Model;

class timeRange extends Model
{
    /**
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $end;

    /**
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'end'   => 'end',
        'start' => 'start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
