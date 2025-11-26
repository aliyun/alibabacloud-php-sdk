<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody\EPNInstances\EPNInstance;

class EPNInstances extends Model
{
    /**
     * @var EPNInstance[]
     */
    public $EPNInstance;
    protected $_name = [
        'EPNInstance' => 'EPNInstance',
    ];

    public function validate()
    {
        if (\is_array($this->EPNInstance)) {
            Model::validateArray($this->EPNInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->EPNInstance) {
            if (\is_array($this->EPNInstance)) {
                $res['EPNInstance'] = [];
                $n1 = 0;
                foreach ($this->EPNInstance as $item1) {
                    $res['EPNInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EPNInstance'])) {
            if (!empty($map['EPNInstance'])) {
                $model->EPNInstance = [];
                $n1 = 0;
                foreach ($map['EPNInstance'] as $item1) {
                    $model->EPNInstance[$n1] = EPNInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
