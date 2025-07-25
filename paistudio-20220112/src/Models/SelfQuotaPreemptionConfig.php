<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preemptedPriorities) {
            $res['PreemptedPriorities'] = $this->preemptedPriorities;
        }
        if (null !== $this->preemptedProducts) {
            $res['PreemptedProducts'] = $this->preemptedProducts;
        }
        if (null !== $this->preemptorPriorities) {
            $res['PreemptorPriorities'] = $this->preemptorPriorities;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelfQuotaPreemptionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreemptedPriorities'])) {
            if (!empty($map['PreemptedPriorities'])) {
                $model->preemptedPriorities = $map['PreemptedPriorities'];
            }
        }
        if (isset($map['PreemptedProducts'])) {
            if (!empty($map['PreemptedProducts'])) {
                $model->preemptedProducts = $map['PreemptedProducts'];
            }
        }
        if (isset($map['PreemptorPriorities'])) {
            if (!empty($map['PreemptorPriorities'])) {
                $model->preemptorPriorities = $map['PreemptorPriorities'];
            }
        }

        return $model;
    }
}
