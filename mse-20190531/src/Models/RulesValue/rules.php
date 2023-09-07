<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue;

use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\dubbo;
use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\springcloud;
use AlibabaCloud\Tea\Model;

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
        'dubbo'       => 'dubbo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->springcloud) {
            $res['springcloud'] = [];
            if (null !== $this->springcloud && \is_array($this->springcloud)) {
                $n = 0;
                foreach ($this->springcloud as $item) {
                    $res['springcloud'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dubbo) {
            $res['dubbo'] = [];
            if (null !== $this->dubbo && \is_array($this->dubbo)) {
                $n = 0;
                foreach ($this->dubbo as $item) {
                    $res['dubbo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['springcloud'])) {
            if (!empty($map['springcloud'])) {
                $model->springcloud = [];
                $n                  = 0;
                foreach ($map['springcloud'] as $item) {
                    $model->springcloud[$n++] = null !== $item ? springcloud::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dubbo'])) {
            if (!empty($map['dubbo'])) {
                $model->dubbo = [];
                $n            = 0;
                foreach ($map['dubbo'] as $item) {
                    $model->dubbo[$n++] = null !== $item ? dubbo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
