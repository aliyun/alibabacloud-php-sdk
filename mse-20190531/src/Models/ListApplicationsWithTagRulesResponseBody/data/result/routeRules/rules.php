<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules\dubbo;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules\springcloud;

class rules extends Model
{
    /**
     * @var dubbo[]
     */
    public $dubbo;

    /**
     * @var springcloud[]
     */
    public $springcloud;
    protected $_name = [
        'dubbo' => 'dubbo',
        'springcloud' => 'springcloud',
    ];

    public function validate()
    {
        if (\is_array($this->dubbo)) {
            Model::validateArray($this->dubbo);
        }
        if (\is_array($this->springcloud)) {
            Model::validateArray($this->springcloud);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dubbo) {
            if (\is_array($this->dubbo)) {
                $res['dubbo'] = [];
                $n1 = 0;
                foreach ($this->dubbo as $item1) {
                    $res['dubbo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->springcloud) {
            if (\is_array($this->springcloud)) {
                $res['springcloud'] = [];
                $n1 = 0;
                foreach ($this->springcloud as $item1) {
                    $res['springcloud'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dubbo'])) {
            if (!empty($map['dubbo'])) {
                $model->dubbo = [];
                $n1 = 0;
                foreach ($map['dubbo'] as $item1) {
                    $model->dubbo[$n1++] = dubbo::fromMap($item1);
                }
            }
        }

        if (isset($map['springcloud'])) {
            if (!empty($map['springcloud'])) {
                $model->springcloud = [];
                $n1 = 0;
                foreach ($map['springcloud'] as $item1) {
                    $model->springcloud[$n1++] = springcloud::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
