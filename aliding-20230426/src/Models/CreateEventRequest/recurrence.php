<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\recurrence\pattern;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\recurrence\range;
use AlibabaCloud\Tea\Model;

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
        'range'   => 'range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pattern) {
            $res['pattern'] = null !== $this->pattern ? $this->pattern->toMap() : null;
        }
        if (null !== $this->range) {
            $res['range'] = null !== $this->range ? $this->range->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recurrence
     */
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
