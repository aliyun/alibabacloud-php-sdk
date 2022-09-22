<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\planFailModels\planFailModel;
use AlibabaCloud\Tea\Model;

class planFailModels extends Model
{
    /**
     * @var planFailModel[]
     */
    public $planFailModel;
    protected $_name = [
        'planFailModel' => 'PlanFailModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planFailModel) {
            $res['PlanFailModel'] = [];
            if (null !== $this->planFailModel && \is_array($this->planFailModel)) {
                $n = 0;
                foreach ($this->planFailModel as $item) {
                    $res['PlanFailModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planFailModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanFailModel'])) {
            if (!empty($map['PlanFailModel'])) {
                $model->planFailModel = [];
                $n                    = 0;
                foreach ($map['PlanFailModel'] as $item) {
                    $model->planFailModel[$n++] = null !== $item ? planFailModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
