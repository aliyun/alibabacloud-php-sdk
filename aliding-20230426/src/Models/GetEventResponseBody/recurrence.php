<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\recurrence\pattern;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\recurrence\range;
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
        'pattern' => 'Pattern',
        'range'   => 'Range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pattern) {
            $res['Pattern'] = null !== $this->pattern ? $this->pattern->toMap() : null;
        }
        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toMap() : null;
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
        if (isset($map['Pattern'])) {
            $model->pattern = pattern::fromMap($map['Pattern']);
        }
        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        return $model;
    }
}
