<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\recurrence\pattern;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\recurrence\range;

class recurrence extends Model
{
    /**
     * @var pattern
     */
    public $pattern;

    /**
     * @var range
     */
    public $range;
    protected $_name = [
        'pattern' => 'Pattern',
        'range' => 'Range',
    ];

    public function validate()
    {
        if (null !== $this->pattern) {
            $this->pattern->validate();
        }
        if (null !== $this->range) {
            $this->range->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pattern) {
            $res['Pattern'] = null !== $this->pattern ? $this->pattern->toArray($noStream) : $this->pattern;
        }

        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
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
        if (isset($map['Pattern'])) {
            $model->pattern = pattern::fromMap($map['Pattern']);
        }

        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        return $model;
    }
}
