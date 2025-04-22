<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\SearchStoriesRequest;

use AlibabaCloud\Dara\Model;

class storyStartTimeRange extends Model
{
    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'end' => 'end',
        'start' => 'start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
