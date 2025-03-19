<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SubQuotaPreemptionConfig extends Model
{
    /**
     * @example 9
     *
     * @var int
     */
    public $preemptedPriorityUpperBound;

    /**
     * @var string[]
     */
    public $preemptedProducts;
    protected $_name = [
        'preemptedPriorityUpperBound' => 'PreemptedPriorityUpperBound',
        'preemptedProducts' => 'PreemptedProducts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preemptedPriorityUpperBound) {
            $res['PreemptedPriorityUpperBound'] = $this->preemptedPriorityUpperBound;
        }
        if (null !== $this->preemptedProducts) {
            $res['PreemptedProducts'] = $this->preemptedProducts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubQuotaPreemptionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreemptedPriorityUpperBound'])) {
            $model->preemptedPriorityUpperBound = $map['PreemptedPriorityUpperBound'];
        }
        if (isset($map['PreemptedProducts'])) {
            if (!empty($map['PreemptedProducts'])) {
                $model->preemptedProducts = $map['PreemptedProducts'];
            }
        }

        return $model;
    }
}
