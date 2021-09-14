<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels\typeModel;
use AlibabaCloud\Tea\Model;

class typeModels extends Model
{
    /**
     * @var typeModel[]
     */
    public $typeModel;
    protected $_name = [
        'typeModel' => 'TypeModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->typeModel) {
            $res['TypeModel'] = [];
            if (null !== $this->typeModel && \is_array($this->typeModel)) {
                $n = 0;
                foreach ($this->typeModel as $item) {
                    $res['TypeModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TypeModel'])) {
            if (!empty($map['TypeModel'])) {
                $model->typeModel = [];
                $n                = 0;
                foreach ($map['TypeModel'] as $item) {
                    $model->typeModel[$n++] = null !== $item ? typeModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
