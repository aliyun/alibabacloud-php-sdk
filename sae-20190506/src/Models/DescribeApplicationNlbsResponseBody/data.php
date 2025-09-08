<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationNlbsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DataInstancesValue;

class data extends Model
{
    /**
     * @var DataInstancesValue[]
     */
    public $instances;
    protected $_name = [
        'instances' => 'Instances',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                foreach ($this->instances as $key1 => $value1) {
                    $res['Instances'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                foreach ($map['Instances'] as $key1 => $value1) {
                    $model->instances[$key1] = DataInstancesValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
