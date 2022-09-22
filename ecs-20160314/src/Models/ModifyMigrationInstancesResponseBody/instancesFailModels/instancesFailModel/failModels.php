<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationInstancesResponseBody\instancesFailModels\instancesFailModel;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationInstancesResponseBody\instancesFailModels\instancesFailModel\failModels\failModel;
use AlibabaCloud\Tea\Model;

class failModels extends Model
{
    /**
     * @var failModel[]
     */
    public $failModel;
    protected $_name = [
        'failModel' => 'FailModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failModel) {
            $res['FailModel'] = [];
            if (null !== $this->failModel && \is_array($this->failModel)) {
                $n = 0;
                foreach ($this->failModel as $item) {
                    $res['FailModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailModel'])) {
            if (!empty($map['FailModel'])) {
                $model->failModel = [];
                $n                = 0;
                foreach ($map['FailModel'] as $item) {
                    $model->failModel[$n++] = null !== $item ? failModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
