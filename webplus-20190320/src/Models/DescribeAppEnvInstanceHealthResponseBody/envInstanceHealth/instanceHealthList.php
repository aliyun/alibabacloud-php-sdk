<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponseBody\envInstanceHealth;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponseBody\envInstanceHealth\instanceHealthList\instanceHealth;
use AlibabaCloud\Tea\Model;

class instanceHealthList extends Model
{
    /**
     * @var instanceHealth[]
     */
    public $instanceHealth;
    protected $_name = [
        'instanceHealth' => 'InstanceHealth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceHealth) {
            $res['InstanceHealth'] = [];
            if (null !== $this->instanceHealth && \is_array($this->instanceHealth)) {
                $n = 0;
                foreach ($this->instanceHealth as $item) {
                    $res['InstanceHealth'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceHealthList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceHealth'])) {
            if (!empty($map['InstanceHealth'])) {
                $model->instanceHealth = [];
                $n                     = 0;
                foreach ($map['InstanceHealth'] as $item) {
                    $model->instanceHealth[$n++] = null !== $item ? instanceHealth::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
