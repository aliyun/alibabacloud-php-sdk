<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\sgFailModels\sgFailModel;
use AlibabaCloud\Tea\Model;

class sgFailModels extends Model
{
    /**
     * @var sgFailModel[]
     */
    public $sgFailModel;
    protected $_name = [
        'sgFailModel' => 'SgFailModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sgFailModel) {
            $res['SgFailModel'] = [];
            if (null !== $this->sgFailModel && \is_array($this->sgFailModel)) {
                $n = 0;
                foreach ($this->sgFailModel as $item) {
                    $res['SgFailModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sgFailModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SgFailModel'])) {
            if (!empty($map['SgFailModel'])) {
                $model->sgFailModel = [];
                $n                  = 0;
                foreach ($map['SgFailModel'] as $item) {
                    $model->sgFailModel[$n++] = null !== $item ? sgFailModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
