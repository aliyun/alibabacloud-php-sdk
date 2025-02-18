<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaScheduleResponseBody\data;

use AlibabaCloud\Dara\Model;

class condition extends Model
{
    /**
     * @var string
     */
    public $after;
    /**
     * @var string
     */
    public $at;
    protected $_name = [
        'after' => 'after',
        'at'    => 'at',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->after) {
            $res['after'] = $this->after;
        }

        if (null !== $this->at) {
            $res['at'] = $this->at;
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
        if (isset($map['after'])) {
            $model->after = $map['after'];
        }

        if (isset($map['at'])) {
            $model->at = $map['at'];
        }

        return $model;
    }
}
