<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\instancesFailModels\instancesFailModel;
use AlibabaCloud\Tea\Model;

class instancesFailModels extends Model
{
    /**
     * @var instancesFailModel[]
     */
    public $instancesFailModel;
    protected $_name = [
        'instancesFailModel' => 'InstancesFailModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancesFailModel) {
            $res['InstancesFailModel'] = [];
            if (null !== $this->instancesFailModel && \is_array($this->instancesFailModel)) {
                $n = 0;
                foreach ($this->instancesFailModel as $item) {
                    $res['InstancesFailModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancesFailModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancesFailModel'])) {
            if (!empty($map['InstancesFailModel'])) {
                $model->instancesFailModel = [];
                $n                         = 0;
                foreach ($map['InstancesFailModel'] as $item) {
                    $model->instancesFailModel[$n++] = null !== $item ? instancesFailModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
