<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var instanceAttribute[]
     */
    public $instanceAttribute;
    protected $_name = [
        'instanceAttribute' => 'InstanceAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAttribute) {
            $res['InstanceAttribute'] = [];
            if (null !== $this->instanceAttribute && \is_array($this->instanceAttribute)) {
                $n = 0;
                foreach ($this->instanceAttribute as $item) {
                    $res['InstanceAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceAttribute'])) {
            if (!empty($map['InstanceAttribute'])) {
                $model->instanceAttribute = [];
                $n                        = 0;
                foreach ($map['InstanceAttribute'] as $item) {
                    $model->instanceAttribute[$n++] = null !== $item ? instanceAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
