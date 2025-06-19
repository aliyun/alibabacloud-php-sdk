<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\dubbo;
use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\springcloud;

class rules extends Model
{
    /**
     * @var springcloud[]
     */
    public $springcloud;

    /**
     * @var dubbo[]
     */
    public $dubbo;
    protected $_name = [
        'springcloud' => 'springcloud',
        'dubbo' => 'dubbo',
    ];

    public function validate()
    {
        if (\is_array($this->springcloud)) {
            Model::validateArray($this->springcloud);
        }
        if (\is_array($this->dubbo)) {
            Model::validateArray($this->dubbo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->springcloud) {
            if (\is_array($this->springcloud)) {
                $res['springcloud'] = [];
                $n1 = 0;
                foreach ($this->springcloud as $item1) {
                    $res['springcloud'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dubbo) {
            if (\is_array($this->dubbo)) {
                $res['dubbo'] = [];
                $n1 = 0;
                foreach ($this->dubbo as $item1) {
                    $res['dubbo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['springcloud'])) {
            if (!empty($map['springcloud'])) {
                $model->springcloud = [];
                $n1 = 0;
                foreach ($map['springcloud'] as $item1) {
                    $model->springcloud[$n1] = springcloud::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dubbo'])) {
            if (!empty($map['dubbo'])) {
                $model->dubbo = [];
                $n1 = 0;
                foreach ($map['dubbo'] as $item1) {
                    $model->dubbo[$n1] = dubbo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
