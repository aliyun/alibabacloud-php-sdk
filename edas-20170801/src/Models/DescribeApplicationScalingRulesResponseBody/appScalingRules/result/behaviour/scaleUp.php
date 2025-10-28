<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour\scaleUp\policies;

class scaleUp extends Model
{
    /**
     * @var policies[]
     */
    public $policies;

    /**
     * @var string
     */
    public $selectPolicy;

    /**
     * @var int
     */
    public $stabilizationWindowSeconds;
    protected $_name = [
        'policies' => 'Policies',
        'selectPolicy' => 'SelectPolicy',
        'stabilizationWindowSeconds' => 'StabilizationWindowSeconds',
    ];

    public function validate()
    {
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policies) {
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1 = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectPolicy) {
            $res['SelectPolicy'] = $this->selectPolicy;
        }

        if (null !== $this->stabilizationWindowSeconds) {
            $res['StabilizationWindowSeconds'] = $this->stabilizationWindowSeconds;
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
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n1 = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1] = policies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SelectPolicy'])) {
            $model->selectPolicy = $map['SelectPolicy'];
        }

        if (isset($map['StabilizationWindowSeconds'])) {
            $model->stabilizationWindowSeconds = $map['StabilizationWindowSeconds'];
        }

        return $model;
    }
}
