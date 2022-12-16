<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\GetElastictaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class elasticShrinkTask extends Model
{
    /**
     * @example 4 4 4 ? * WED
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example 2
     *
     * @var int
     */
    public $elasticNodeCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $replicaCount;

    /**
     * @var string[]
     */
    public $targetIndices;

    /**
     * @example crontab
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'cronExpression'   => 'cronExpression',
        'elasticNodeCount' => 'elasticNodeCount',
        'replicaCount'     => 'replicaCount',
        'targetIndices'    => 'targetIndices',
        'triggerType'      => 'triggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['targetIndices'] = $this->targetIndices;
        }
        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
                $model->targetIndices = $map['targetIndices'];
            }
        }
        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
