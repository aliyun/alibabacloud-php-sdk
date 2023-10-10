<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour;

use AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\behaviour\scaleDown\policies;
use AlibabaCloud\Tea\Model;

class scaleDown extends Model
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
        'policies'                   => 'Policies',
        'selectPolicy'               => 'SelectPolicy',
        'stabilizationWindowSeconds' => 'StabilizationWindowSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return scaleDown
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
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
