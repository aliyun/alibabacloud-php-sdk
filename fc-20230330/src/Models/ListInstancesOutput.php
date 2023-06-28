<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesOutput extends Model
{
    /**
     * @var InstanceInfo[]
     */
    public $instances;
    protected $_name = [
        'instances' => 'instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instances) {
            $res['instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? InstanceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
