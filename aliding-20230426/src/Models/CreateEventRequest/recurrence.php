<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\recurrence\pattern;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\recurrence\range;

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
        'pattern' => 'pattern',
        'range' => 'range',
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
            $res['pattern'] = null !== $this->pattern ? $this->pattern->toArray($noStream) : $this->pattern;
        }

        if (null !== $this->range) {
            $res['range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
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
        if (isset($map['pattern'])) {
            $model->pattern = pattern::fromMap($map['pattern']);
        }

        if (isset($map['range'])) {
            $model->range = range::fromMap($map['range']);
        }

        return $model;
    }
}
