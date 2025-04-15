<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskRequest;

use AlibabaCloud\Dara\Model;

class recallRule extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $interval;
    protected $_name = [
        'count' => 'Count',
        'interval' => 'Interval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
