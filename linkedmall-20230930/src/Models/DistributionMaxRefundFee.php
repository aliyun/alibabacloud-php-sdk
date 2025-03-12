<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DistributionMaxRefundFee extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $maxRefundFee;

    /**
     * @example 1
     *
     * @var int
     */
    public $minRefundFee;
    protected $_name = [
        'maxRefundFee' => 'maxRefundFee',
        'minRefundFee' => 'minRefundFee',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DistributionMaxRefundFee
     */
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
