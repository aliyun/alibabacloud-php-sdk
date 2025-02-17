<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ApplyReason extends Model
{
    /**
     * @var int
     */
    public $reasonTextId;
    /**
     * @var string
     */
    public $reasonTips;
    protected $_name = [
        'reasonTextId' => 'reasonTextId',
        'reasonTips'   => 'reasonTips',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reasonTextId) {
            $res['reasonTextId'] = $this->reasonTextId;
        }

        if (null !== $this->reasonTips) {
            $res['reasonTips'] = $this->reasonTips;
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
        if (isset($map['reasonTextId'])) {
            $model->reasonTextId = $map['reasonTextId'];
        }

        if (isset($map['reasonTips'])) {
            $model->reasonTips = $map['reasonTips'];
        }

        return $model;
    }
}
