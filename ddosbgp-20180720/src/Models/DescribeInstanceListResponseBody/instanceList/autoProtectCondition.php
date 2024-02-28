<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class autoProtectCondition extends Model
{
    /**
     * @var string[]
     */
    public $events;
    protected $_name = [
        'events' => 'Events',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoProtectCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = $map['Events'];
            }
        }

        return $model;
    }
}
