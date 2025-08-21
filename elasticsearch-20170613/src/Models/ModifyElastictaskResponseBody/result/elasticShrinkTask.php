<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ModifyElastictaskResponseBody\result;

use AlibabaCloud\Dara\Model;

class elasticShrinkTask extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var int
     */
    public $elasticNodeCount;

    /**
     * @var int
     */
    public $replicaCount;

    /**
     * @var string[]
     */
    public $targetIndices;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'cronExpression' => 'cronExpression',
        'elasticNodeCount' => 'elasticNodeCount',
        'replicaCount' => 'replicaCount',
        'targetIndices' => 'targetIndices',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        if (\is_array($this->targetIndices)) {
            Model::validateArray($this->targetIndices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['cronExpression'] = $this->cronExpression;
        }

        if (null !== $this->elasticNodeCount) {
            $res['elasticNodeCount'] = $this->elasticNodeCount;
        }

        if (null !== $this->replicaCount) {
            $res['replicaCount'] = $this->replicaCount;
        }

        if (null !== $this->targetIndices) {
            if (\is_array($this->targetIndices)) {
                $res['targetIndices'] = [];
                $n1 = 0;
                foreach ($this->targetIndices as $item1) {
                    $res['targetIndices'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
        if (isset($map['cronExpression'])) {
            $model->cronExpression = $map['cronExpression'];
        }

        if (isset($map['elasticNodeCount'])) {
            $model->elasticNodeCount = $map['elasticNodeCount'];
        }

        if (isset($map['replicaCount'])) {
            $model->replicaCount = $map['replicaCount'];
        }

        if (isset($map['targetIndices'])) {
            if (!empty($map['targetIndices'])) {
                $model->targetIndices = [];
                $n1 = 0;
                foreach ($map['targetIndices'] as $item1) {
                    $model->targetIndices[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
