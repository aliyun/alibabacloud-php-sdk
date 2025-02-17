<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DistributionMaxRefundFee extends Model
{
    /**
     * @var int
     */
    public $maxRefundFee;
    /**
     * @var int
     */
    public $minRefundFee;
    protected $_name = [
        'maxRefundFee' => 'maxRefundFee',
        'minRefundFee' => 'minRefundFee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxRefundFee) {
            $res['maxRefundFee'] = $this->maxRefundFee;
        }

        if (null !== $this->minRefundFee) {
            $res['minRefundFee'] = $this->minRefundFee;
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
        if (isset($map['maxRefundFee'])) {
            $model->maxRefundFee = $map['maxRefundFee'];
        }

        if (isset($map['minRefundFee'])) {
            $model->minRefundFee = $map['minRefundFee'];
        }

        return $model;
    }
}
