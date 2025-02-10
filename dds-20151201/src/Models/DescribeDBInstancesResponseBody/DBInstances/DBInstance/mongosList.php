<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\mongosList\mongosAttribute;

class mongosList extends Model
{
    /**
     * @var mongosAttribute[]
     */
    public $mongosAttribute;
    protected $_name = [
        'mongosAttribute' => 'MongosAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->mongosAttribute)) {
            Model::validateArray($this->mongosAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mongosAttribute) {
            if (\is_array($this->mongosAttribute)) {
                $res['MongosAttribute'] = [];
                $n1                     = 0;
                foreach ($this->mongosAttribute as $item1) {
                    $res['MongosAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MongosAttribute'])) {
            if (!empty($map['MongosAttribute'])) {
                $model->mongosAttribute = [];
                $n1                     = 0;
                foreach ($map['MongosAttribute'] as $item1) {
                    $model->mongosAttribute[$n1++] = mongosAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
