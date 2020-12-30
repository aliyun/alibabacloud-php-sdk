<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesResponseBody\executionPlanInstances\executionPlanInstance;
use AlibabaCloud\Tea\Model;

class executionPlanInstances extends Model
{
    /**
     * @var executionPlanInstance[]
     */
    public $executionPlanInstance;
    protected $_name = [
        'executionPlanInstance' => 'ExecutionPlanInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionPlanInstance) {
            $res['ExecutionPlanInstance'] = [];
            if (null !== $this->executionPlanInstance && \is_array($this->executionPlanInstance)) {
                $n = 0;
                foreach ($this->executionPlanInstance as $item) {
                    $res['ExecutionPlanInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionPlanInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionPlanInstance'])) {
            if (!empty($map['ExecutionPlanInstance'])) {
                $model->executionPlanInstance = [];
                $n                            = 0;
                foreach ($map['ExecutionPlanInstance'] as $item) {
                    $model->executionPlanInstance[$n++] = null !== $item ? executionPlanInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
