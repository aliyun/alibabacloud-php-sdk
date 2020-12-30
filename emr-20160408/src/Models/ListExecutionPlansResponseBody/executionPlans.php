<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlansResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlansResponseBody\executionPlans\executionPlanInfo;
use AlibabaCloud\Tea\Model;

class executionPlans extends Model
{
    /**
     * @var executionPlanInfo[]
     */
    public $executionPlanInfo;
    protected $_name = [
        'executionPlanInfo' => 'ExecutionPlanInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionPlanInfo) {
            $res['ExecutionPlanInfo'] = [];
            if (null !== $this->executionPlanInfo && \is_array($this->executionPlanInfo)) {
                $n = 0;
                foreach ($this->executionPlanInfo as $item) {
                    $res['ExecutionPlanInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionPlanInfo'])) {
            if (!empty($map['ExecutionPlanInfo'])) {
                $model->executionPlanInfo = [];
                $n                        = 0;
                foreach ($map['ExecutionPlanInfo'] as $item) {
                    $model->executionPlanInfo[$n++] = null !== $item ? executionPlanInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
