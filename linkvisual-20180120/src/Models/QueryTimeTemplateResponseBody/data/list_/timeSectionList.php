<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class timeSectionList extends Model
{
    /**
     * @var int
     */
    public $dayOfWeek;

    /**
     * @var int
     */
    public $begin;

    /**
     * @var int
     */
    public $end;
    protected $_name = [
        'dayOfWeek' => 'DayOfWeek',
        'begin'     => 'Begin',
        'end'       => 'End',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayOfWeek) {
            $res['DayOfWeek'] = $this->dayOfWeek;
        }
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeSectionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayOfWeek'])) {
            $model->dayOfWeek = $map['DayOfWeek'];
        }
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        return $model;
    }
}
