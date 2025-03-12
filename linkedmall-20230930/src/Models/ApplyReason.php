<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ApplyReason extends Model
{
    /**
     * @example 403769
     *
     * @var int
     */
    public $reasonTextId;

    /**
     * @example 不想要了
     *
     * @var string
     */
    public $reasonTips;
    protected $_name = [
        'reasonTextId' => 'reasonTextId',
        'reasonTips'   => 'reasonTips',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ApplyReason
     */
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
