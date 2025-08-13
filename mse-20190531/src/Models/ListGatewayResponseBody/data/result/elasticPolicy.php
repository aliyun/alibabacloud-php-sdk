<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\elasticPolicy\enableScaleTimePolicyList;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\elasticPolicy\timePolicyList;

class elasticPolicy extends Model
{
    /**
     * @var bool
     */
    public $elastic;

    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var enableScaleTimePolicyList[]
     */
    public $enableScaleTimePolicyList;

    /**
     * @var bool
     */
    public $loadWarningThreshold;

    /**
     * @var int
     */
    public $maxReplica;

    /**
     * @var timePolicyList[]
     */
    public $timePolicyList;
    protected $_name = [
        'elastic' => 'Elastic',
        'elasticType' => 'ElasticType',
        'enableScaleTimePolicyList' => 'EnableScaleTimePolicyList',
        'loadWarningThreshold' => 'LoadWarningThreshold',
        'maxReplica' => 'MaxReplica',
        'timePolicyList' => 'TimePolicyList',
    ];

    public function validate()
    {
        if (\is_array($this->enableScaleTimePolicyList)) {
            Model::validateArray($this->enableScaleTimePolicyList);
        }
        if (\is_array($this->timePolicyList)) {
            Model::validateArray($this->timePolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elastic) {
            $res['Elastic'] = $this->elastic;
        }

        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }

        if (null !== $this->enableScaleTimePolicyList) {
            if (\is_array($this->enableScaleTimePolicyList)) {
                $res['EnableScaleTimePolicyList'] = [];
                $n1 = 0;
                foreach ($this->enableScaleTimePolicyList as $item1) {
                    $res['EnableScaleTimePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadWarningThreshold) {
            $res['LoadWarningThreshold'] = $this->loadWarningThreshold;
        }

        if (null !== $this->maxReplica) {
            $res['MaxReplica'] = $this->maxReplica;
        }

        if (null !== $this->timePolicyList) {
            if (\is_array($this->timePolicyList)) {
                $res['TimePolicyList'] = [];
                $n1 = 0;
                foreach ($this->timePolicyList as $item1) {
                    $res['TimePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Elastic'])) {
            $model->elastic = $map['Elastic'];
        }

        if (isset($map['ElasticType'])) {
            $model->elasticType = $map['ElasticType'];
        }

        if (isset($map['EnableScaleTimePolicyList'])) {
            if (!empty($map['EnableScaleTimePolicyList'])) {
                $model->enableScaleTimePolicyList = [];
                $n1 = 0;
                foreach ($map['EnableScaleTimePolicyList'] as $item1) {
                    $model->enableScaleTimePolicyList[$n1] = enableScaleTimePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LoadWarningThreshold'])) {
            $model->loadWarningThreshold = $map['LoadWarningThreshold'];
        }

        if (isset($map['MaxReplica'])) {
            $model->maxReplica = $map['MaxReplica'];
        }

        if (isset($map['TimePolicyList'])) {
            if (!empty($map['TimePolicyList'])) {
                $model->timePolicyList = [];
                $n1 = 0;
                foreach ($map['TimePolicyList'] as $item1) {
                    $model->timePolicyList[$n1] = timePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
