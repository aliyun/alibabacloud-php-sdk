<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskResponseBody\result\elasticExpansionTask;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskResponseBody\result\elasticShrinkTask;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var elasticExpansionTask
     */
    public $elasticExpansionTask;

    /**
     * @var elasticShrinkTask
     */
    public $elasticShrinkTask;
    protected $_name = [
        'elasticExpansionTask' => 'elasticExpansionTask',
        'elasticShrinkTask'    => 'elasticShrinkTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticExpansionTask) {
            $res['elasticExpansionTask'] = null !== $this->elasticExpansionTask ? $this->elasticExpansionTask->toMap() : null;
        }
        if (null !== $this->elasticShrinkTask) {
            $res['elasticShrinkTask'] = null !== $this->elasticShrinkTask ? $this->elasticShrinkTask->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['elasticExpansionTask'])) {
            $model->elasticExpansionTask = elasticExpansionTask::fromMap($map['elasticExpansionTask']);
        }
        if (isset($map['elasticShrinkTask'])) {
            $model->elasticShrinkTask = elasticShrinkTask::fromMap($map['elasticShrinkTask']);
        }

        return $model;
    }
}
