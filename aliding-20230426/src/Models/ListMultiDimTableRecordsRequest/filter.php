<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsRequest\filter\conditions;
use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @example and
     *
     * @var string
     */
    public $combination;

    /**
     * @var conditions[]
     */
    public $conditions;
    protected $_name = [
        'combination' => 'Combination',
        'conditions'  => 'Conditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->combination) {
            $res['Combination'] = $this->combination;
        }
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Combination'])) {
            $model->combination = $map['Combination'];
        }
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
