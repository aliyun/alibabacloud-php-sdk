<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponseBody\result\elasticExpansionTask;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponseBody\result\elasticShrinkTask;

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
        'elasticShrinkTask' => 'elasticShrinkTask',
    ];

    public function validate()
    {
        if (null !== $this->elasticExpansionTask) {
            $this->elasticExpansionTask->validate();
        }
        if (null !== $this->elasticShrinkTask) {
            $this->elasticShrinkTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticExpansionTask) {
            $res['elasticExpansionTask'] = null !== $this->elasticExpansionTask ? $this->elasticExpansionTask->toArray($noStream) : $this->elasticExpansionTask;
        }

        if (null !== $this->elasticShrinkTask) {
            $res['elasticShrinkTask'] = null !== $this->elasticShrinkTask ? $this->elasticShrinkTask->toArray($noStream) : $this->elasticShrinkTask;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
