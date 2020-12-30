<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_\instanceDb;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var instanceDb[]
     */
    public $instanceDb;
    protected $_name = [
        'instanceDb' => 'InstanceDb',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDb) {
            $res['InstanceDb'] = [];
            if (null !== $this->instanceDb && \is_array($this->instanceDb)) {
                $n = 0;
                foreach ($this->instanceDb as $item) {
                    $res['InstanceDb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDb'])) {
            if (!empty($map['InstanceDb'])) {
                $model->instanceDb = [];
                $n                 = 0;
                foreach ($map['InstanceDb'] as $item) {
                    $model->instanceDb[$n++] = null !== $item ? instanceDb::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
