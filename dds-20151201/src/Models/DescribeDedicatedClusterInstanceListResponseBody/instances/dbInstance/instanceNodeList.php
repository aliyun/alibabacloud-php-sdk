<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance\instanceNodeList\instanceNodes;
use AlibabaCloud\Tea\Model;

class instanceNodeList extends Model
{
    /**
     * @var instanceNodes[]
     */
    public $instanceNodes;
    protected $_name = [
        'instanceNodes' => 'InstanceNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceNodes) {
            $res['InstanceNodes'] = [];
            if (null !== $this->instanceNodes && \is_array($this->instanceNodes)) {
                $n = 0;
                foreach ($this->instanceNodes as $item) {
                    $res['InstanceNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceNodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceNodes'])) {
            if (!empty($map['InstanceNodes'])) {
                $model->instanceNodes = [];
                $n                    = 0;
                foreach ($map['InstanceNodes'] as $item) {
                    $model->instanceNodes[$n++] = null !== $item ? instanceNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
