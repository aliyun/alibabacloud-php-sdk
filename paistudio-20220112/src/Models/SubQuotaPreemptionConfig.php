<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class SubQuotaPreemptionConfig extends Model
{
    /**
     * @var int
     */
    public $preemptedPriorityUpperBound;
    /**
     * @var string[]
     */
    public $preemptedProducts;
    protected $_name = [
        'preemptedPriorityUpperBound' => 'PreemptedPriorityUpperBound',
        'preemptedProducts'           => 'PreemptedProducts',
    ];

    public function validate()
    {
        if (\is_array($this->preemptedProducts)) {
            Model::validateArray($this->preemptedProducts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preemptedPriorityUpperBound) {
            $res['PreemptedPriorityUpperBound'] = $this->preemptedPriorityUpperBound;
        }

        if (null !== $this->preemptedProducts) {
            if (\is_array($this->preemptedProducts)) {
                $res['PreemptedProducts'] = [];
                $n1                       = 0;
                foreach ($this->preemptedProducts as $item1) {
                    $res['PreemptedProducts'][$n1++] = $item1;
                }
            }
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
        if (isset($map['PreemptedPriorityUpperBound'])) {
            $model->preemptedPriorityUpperBound = $map['PreemptedPriorityUpperBound'];
        }

        if (isset($map['PreemptedProducts'])) {
            if (!empty($map['PreemptedProducts'])) {
                $model->preemptedProducts = [];
                $n1                       = 0;
                foreach ($map['PreemptedProducts'] as $item1) {
                    $model->preemptedProducts[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
