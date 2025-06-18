<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class SelfQuotaPreemptionConfig extends Model
{
    /**
     * @var int[]
     */
    public $preemptedPriorities;

    /**
     * @var string[]
     */
    public $preemptedProducts;

    /**
     * @var int[]
     */
    public $preemptorPriorities;
    protected $_name = [
        'preemptedPriorities' => 'PreemptedPriorities',
        'preemptedProducts' => 'PreemptedProducts',
        'preemptorPriorities' => 'PreemptorPriorities',
    ];

    public function validate()
    {
        if (\is_array($this->preemptedPriorities)) {
            Model::validateArray($this->preemptedPriorities);
        }
        if (\is_array($this->preemptedProducts)) {
            Model::validateArray($this->preemptedProducts);
        }
        if (\is_array($this->preemptorPriorities)) {
            Model::validateArray($this->preemptorPriorities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preemptedPriorities) {
            if (\is_array($this->preemptedPriorities)) {
                $res['PreemptedPriorities'] = [];
                $n1 = 0;
                foreach ($this->preemptedPriorities as $item1) {
                    $res['PreemptedPriorities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preemptedProducts) {
            if (\is_array($this->preemptedProducts)) {
                $res['PreemptedProducts'] = [];
                $n1 = 0;
                foreach ($this->preemptedProducts as $item1) {
                    $res['PreemptedProducts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->preemptorPriorities) {
            if (\is_array($this->preemptorPriorities)) {
                $res['PreemptorPriorities'] = [];
                $n1 = 0;
                foreach ($this->preemptorPriorities as $item1) {
                    $res['PreemptorPriorities'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['PreemptedPriorities'])) {
            if (!empty($map['PreemptedPriorities'])) {
                $model->preemptedPriorities = [];
                $n1 = 0;
                foreach ($map['PreemptedPriorities'] as $item1) {
                    $model->preemptedPriorities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PreemptedProducts'])) {
            if (!empty($map['PreemptedProducts'])) {
                $model->preemptedProducts = [];
                $n1 = 0;
                foreach ($map['PreemptedProducts'] as $item1) {
                    $model->preemptedProducts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PreemptorPriorities'])) {
            if (!empty($map['PreemptorPriorities'])) {
                $model->preemptorPriorities = [];
                $n1 = 0;
                foreach ($map['PreemptorPriorities'] as $item1) {
                    $model->preemptorPriorities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
