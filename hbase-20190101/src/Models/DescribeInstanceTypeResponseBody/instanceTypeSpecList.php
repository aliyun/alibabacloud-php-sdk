<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceTypeResponseBody\instanceTypeSpecList\instanceTypeSpec;
use AlibabaCloud\Tea\Model;

class instanceTypeSpecList extends Model
{
    /**
     * @var instanceTypeSpec[]
     */
    public $instanceTypeSpec;
    protected $_name = [
        'instanceTypeSpec' => 'InstanceTypeSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeSpec) {
            $res['InstanceTypeSpec'] = [];
            if (null !== $this->instanceTypeSpec && \is_array($this->instanceTypeSpec)) {
                $n = 0;
                foreach ($this->instanceTypeSpec as $item) {
                    $res['InstanceTypeSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeSpecList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeSpec'])) {
            if (!empty($map['InstanceTypeSpec'])) {
                $model->instanceTypeSpec = [];
                $n                       = 0;
                foreach ($map['InstanceTypeSpec'] as $item) {
                    $model->instanceTypeSpec[$n++] = null !== $item ? instanceTypeSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
