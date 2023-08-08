<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody\events;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example info
     *
     * @var string
     */
    public $level;

    /**
     * @example Start to upgrade NodePool nodePool/npdd89dc2b76c04f14b06774883b******
     *
     * @var string
     */
    public $message;

    /**
     * @example Started
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'level'   => 'level',
        'message' => 'message',
        'reason'  => 'reason',
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
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
