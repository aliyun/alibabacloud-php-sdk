<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ResetConsumeOffsetRequest extends Model
{
    /**
     * @var string
     */
    public $resetTime;
    /**
     * @var string
     */
    public $resetType;
    protected $_name = [
        'resetTime' => 'resetTime',
        'resetType' => 'resetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resetTime) {
            $res['resetTime'] = $this->resetTime;
        }

        if (null !== $this->resetType) {
            $res['resetType'] = $this->resetType;
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
        if (isset($map['resetTime'])) {
            $model->resetTime = $map['resetTime'];
        }

        if (isset($map['resetType'])) {
            $model->resetType = $map['resetType'];
        }

        return $model;
    }
}
