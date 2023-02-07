<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskRequest;

use AlibabaCloud\Tea\Model;

class recallRule extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @example 5
     *
     * @var int
     */
    public $interval;
    protected $_name = [
        'count'    => 'Count',
        'interval' => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recallRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
