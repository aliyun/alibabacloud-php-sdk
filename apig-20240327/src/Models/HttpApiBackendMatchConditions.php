<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiBackendMatchConditions extends Model
{
    /**
     * @var HttpApiBackendMatchCondition[]
     */
    public $conditions;

    /**
     * @example true
     *
     * @var bool
     */
    public $default;
    protected $_name = [
        'conditions' => 'conditions',
        'default' => 'default',
    ];

    public function validate() {}

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
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiBackendMatchConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n = 0;
                foreach ($map['conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? HttpApiBackendMatchCondition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }

        return $model;
    }
}
