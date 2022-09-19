<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels\typeModel;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels\typeModel\instanceModels\instanceModel;
use AlibabaCloud\Tea\Model;

class instanceModels extends Model
{
    /**
     * @var instanceModel[]
     */
    public $instanceModel;
    protected $_name = [
        'instanceModel' => 'InstanceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceModel) {
            $res['InstanceModel'] = [];
            if (null !== $this->instanceModel && \is_array($this->instanceModel)) {
                $n = 0;
                foreach ($this->instanceModel as $item) {
                    $res['InstanceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceModel'])) {
            if (!empty($map['InstanceModel'])) {
                $model->instanceModel = [];
                $n                    = 0;
                foreach ($map['InstanceModel'] as $item) {
                    $model->instanceModel[$n++] = null !== $item ? instanceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
