<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events;

use AlibabaCloud\Tea\Model;

class originStart extends Model
{
    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $dateTime;
    protected $_name = [
        'dateTime' => 'DateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originStart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        return $model;
    }
}
