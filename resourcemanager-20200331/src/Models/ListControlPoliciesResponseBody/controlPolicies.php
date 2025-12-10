<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListControlPoliciesResponseBody\controlPolicies\controlPolicy;

class controlPolicies extends Model
{
    /**
     * @var controlPolicy[]
     */
    public $controlPolicy;
    protected $_name = [
        'controlPolicy' => 'ControlPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->controlPolicy)) {
            Model::validateArray($this->controlPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlPolicy) {
            if (\is_array($this->controlPolicy)) {
                $res['ControlPolicy'] = [];
                $n1 = 0;
                foreach ($this->controlPolicy as $item1) {
                    $res['ControlPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ControlPolicy'])) {
            if (!empty($map['ControlPolicy'])) {
                $model->controlPolicy = [];
                $n1 = 0;
                foreach ($map['ControlPolicy'] as $item1) {
                    $model->controlPolicy[$n1] = controlPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
