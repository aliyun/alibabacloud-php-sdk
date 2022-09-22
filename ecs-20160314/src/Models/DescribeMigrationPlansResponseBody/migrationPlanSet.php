<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansResponseBody\migrationPlanSet\migrationPlan;
use AlibabaCloud\Tea\Model;

class migrationPlanSet extends Model
{
    /**
     * @var migrationPlan[]
     */
    public $migrationPlan;
    protected $_name = [
        'migrationPlan' => 'MigrationPlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationPlan) {
            $res['MigrationPlan'] = [];
            if (null !== $this->migrationPlan && \is_array($this->migrationPlan)) {
                $n = 0;
                foreach ($this->migrationPlan as $item) {
                    $res['MigrationPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationPlanSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationPlan'])) {
            if (!empty($map['MigrationPlan'])) {
                $model->migrationPlan = [];
                $n                    = 0;
                foreach ($map['MigrationPlan'] as $item) {
                    $model->migrationPlan[$n++] = null !== $item ? migrationPlan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
