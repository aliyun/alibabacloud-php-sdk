<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListOperationPlansResponseBody\plans;

class ListOperationPlansResponseBody extends Model
{
    /**
     * @var plans[]
     */
    public $plans;
    protected $_name = [
        'plans' => 'plans',
    ];

    public function validate()
    {
        if (\is_array($this->plans)) {
            Model::validateArray($this->plans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->plans) {
            if (\is_array($this->plans)) {
                $res['plans'] = [];
                $n1 = 0;
                foreach ($this->plans as $item1) {
                    $res['plans'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['plans'])) {
            if (!empty($map['plans'])) {
                $model->plans = [];
                $n1 = 0;
                foreach ($map['plans'] as $item1) {
                    $model->plans[$n1++] = plans::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
