<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponseBody\instanceSpecs\instanceSpec;
use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @var instanceSpec[]
     */
    public $instanceSpec;
    protected $_name = [
        'instanceSpec' => 'InstanceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = [];
            if (null !== $this->instanceSpec && \is_array($this->instanceSpec)) {
                $n = 0;
                foreach ($this->instanceSpec as $item) {
                    $res['InstanceSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSpec'])) {
            if (!empty($map['InstanceSpec'])) {
                $model->instanceSpec = [];
                $n                   = 0;
                foreach ($map['InstanceSpec'] as $item) {
                    $model->instanceSpec[$n++] = null !== $item ? instanceSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
