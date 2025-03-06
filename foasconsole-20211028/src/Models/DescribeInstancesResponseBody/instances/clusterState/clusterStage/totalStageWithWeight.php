<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\clusterStage;

use AlibabaCloud\Tea\Model;

class totalStageWithWeight extends Model
{
    /**
     * @var int
     */
    public $stepIndex;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'stepIndex' => 'StepIndex',
        'stepName'  => 'StepName',
        'weight'    => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepIndex) {
            $res['StepIndex'] = $this->stepIndex;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalStageWithWeight
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepIndex'])) {
            $model->stepIndex = $map['StepIndex'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
