<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\mongosList\mongosAttribute;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mongosAttribute) {
            $res['MongosAttribute'] = [];
            if (null !== $this->mongosAttribute && \is_array($this->mongosAttribute)) {
                $n = 0;
                foreach ($this->mongosAttribute as $item) {
                    $res['MongosAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mongosList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MongosAttribute'])) {
            if (!empty($map['MongosAttribute'])) {
                $model->mongosAttribute = [];
                $n                      = 0;
                foreach ($map['MongosAttribute'] as $item) {
                    $model->mongosAttribute[$n++] = null !== $item ? mongosAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
