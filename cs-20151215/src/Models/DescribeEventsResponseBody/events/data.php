<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsResponseBody\events;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 事件级别
     *
     * @var string
     */
    public $level;

    /**
     * @description 事件状态
     *
     * @var string
     */
    public $reason;

    /**
     * @description 事件详情
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'level'   => 'level',
        'reason'  => 'reason',
        'message' => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
