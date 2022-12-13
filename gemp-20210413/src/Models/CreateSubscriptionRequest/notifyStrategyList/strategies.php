<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList\strategies\conditions;
use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;
    protected $_name = [
        'conditions' => 'conditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
