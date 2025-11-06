<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances\instancesVO;

class instances extends Model
{
    /**
     * @var instancesVO[]
     */
    public $instancesVO;
    protected $_name = [
        'instancesVO' => 'InstancesVO',
    ];

    public function validate()
    {
        if (\is_array($this->instancesVO)) {
            Model::validateArray($this->instancesVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instancesVO) {
            if (\is_array($this->instancesVO)) {
                $res['InstancesVO'] = [];
                $n1 = 0;
                foreach ($this->instancesVO as $item1) {
                    $res['InstancesVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstancesVO'])) {
            if (!empty($map['InstancesVO'])) {
                $model->instancesVO = [];
                $n1 = 0;
                foreach ($map['InstancesVO'] as $item1) {
                    $model->instancesVO[$n1] = instancesVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
