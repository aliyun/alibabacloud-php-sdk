<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_\instanceDb;

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
        if (\is_array($this->instanceDb)) {
            Model::validateArray($this->instanceDb);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceDb) {
            if (\is_array($this->instanceDb)) {
                $res['InstanceDb'] = [];
                $n1 = 0;
                foreach ($this->instanceDb as $item1) {
                    $res['InstanceDb'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceDb'])) {
            if (!empty($map['InstanceDb'])) {
                $model->instanceDb = [];
                $n1 = 0;
                foreach ($map['InstanceDb'] as $item1) {
                    $model->instanceDb[$n1] = instanceDb::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
