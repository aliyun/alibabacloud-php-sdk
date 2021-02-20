<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody\EPNInstances\EPNInstance;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstance) {
            $res['EPNInstance'] = [];
            if (null !== $this->EPNInstance && \is_array($this->EPNInstance)) {
                $n = 0;
                foreach ($this->EPNInstance as $item) {
                    $res['EPNInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EPNInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstance'])) {
            if (!empty($map['EPNInstance'])) {
                $model->EPNInstance = [];
                $n                  = 0;
                foreach ($map['EPNInstance'] as $item) {
                    $model->EPNInstance[$n++] = null !== $item ? EPNInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
