<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\ReAddMigrationTaskInPlanResponseBody;

use AlibabaCloud\Tea\Model;

class failModels extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ecs\V20160314\Models\ReAddMigrationTaskInPlanResponseBody\failModels\failModels[]
     */
    public $failModels;
    protected $_name = [
        'failModels' => 'FailModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failModels) {
            $res['FailModels'] = [];
            if (null !== $this->failModels && \is_array($this->failModels)) {
                $n = 0;
                foreach ($this->failModels as $item) {
                    $res['FailModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['FailModels'])) {
            if (!empty($map['FailModels'])) {
                $model->failModels = [];
                $n                 = 0;
                foreach ($map['FailModels'] as $item) {
                    $model->failModels[$n++] = null !== $item ? \AlibabaCloud\SDK\Ecs\V20160314\Models\ReAddMigrationTaskInPlanResponseBody\failModels\failModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
