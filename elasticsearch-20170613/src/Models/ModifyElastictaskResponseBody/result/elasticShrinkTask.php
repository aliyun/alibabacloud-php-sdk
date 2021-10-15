<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class elasticShrinkTask extends Model
{
    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var int
     */
    public $replicaCount;

    /**
     * @var int
     */
    public $elasticNodeCount;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string[]
     */
    public $targetIndices;
    protected $_name = [
        'triggerType'      => 'triggerType',
        'replicaCount'     => 'replicaCount',
        'elasticNodeCount' => 'elasticNodeCount',
        'cronExpression'   => 'cronExpression',
        'targetIndices'    => 'targetIndices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }
        if (null !== $this->replicaCount) {
            $res['replicaCount'] = $this->replicaCount;
        }
        if (null !== $this->elasticNodeCount) {
            $res['elasticNodeCount'] = $this->elasticNodeCount;
        }
        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }
        if (null !== $this->targetIndices) {
            $res['targetIndices'] = $this->targetIndices;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticShrinkTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }
        if (isset($map['replicaCount'])) {
            $model->replicaCount = $map['replicaCount'];
        }
        if (isset($map['elasticNodeCount'])) {
            $model->elasticNodeCount = $map['elasticNodeCount'];
        }
        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }
        if (isset($map['targetIndices'])) {
            if (!empty($map['targetIndices'])) {
                $model->targetIndices = $map['targetIndices'];
            }
        }

        return $model;
    }
}
