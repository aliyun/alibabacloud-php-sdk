<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRdsListResponseBody\data\rdsInstance;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRdsListResponseBody\data\rdsInstance\readOnlyChildren\child;
use AlibabaCloud\Tea\Model;

class readOnlyChildren extends Model
{
    /**
     * @var child[]
     */
    public $child;
    protected $_name = [
        'child' => 'Child',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->child) {
            $res['Child'] = [];
            if (null !== $this->child && \is_array($this->child)) {
                $n = 0;
                foreach ($this->child as $item) {
                    $res['Child'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readOnlyChildren
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Child'])) {
            if (!empty($map['Child'])) {
                $model->child = [];
                $n            = 0;
                foreach ($map['Child'] as $item) {
                    $model->child[$n++] = null !== $item ? child::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
