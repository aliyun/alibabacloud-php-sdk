<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest\dataInfo;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest\metric;

class CapacityPlanRequest extends Model
{
    /**
     * @var bool
     */
    public $complexQueryAvailable;

    /**
     * @var dataInfo[]
     */
    public $dataInfo;

    /**
     * @var metric[]
     */
    public $metric;

    /**
     * @var string
     */
    public $usageScenario;
    protected $_name = [
        'complexQueryAvailable' => 'complexQueryAvailable',
        'dataInfo' => 'dataInfo',
        'metric' => 'metric',
        'usageScenario' => 'usageScenario',
    ];

    public function validate()
    {
        if (\is_array($this->dataInfo)) {
            Model::validateArray($this->dataInfo);
        }
        if (\is_array($this->metric)) {
            Model::validateArray($this->metric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complexQueryAvailable) {
            $res['complexQueryAvailable'] = $this->complexQueryAvailable;
        }

        if (null !== $this->dataInfo) {
            if (\is_array($this->dataInfo)) {
                $res['dataInfo'] = [];
                $n1 = 0;
                foreach ($this->dataInfo as $item1) {
                    $res['dataInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metric) {
            if (\is_array($this->metric)) {
                $res['metric'] = [];
                $n1 = 0;
                foreach ($this->metric as $item1) {
                    $res['metric'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usageScenario) {
            $res['usageScenario'] = $this->usageScenario;
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
        if (isset($map['complexQueryAvailable'])) {
            $model->complexQueryAvailable = $map['complexQueryAvailable'];
        }

        if (isset($map['dataInfo'])) {
            if (!empty($map['dataInfo'])) {
                $model->dataInfo = [];
                $n1 = 0;
                foreach ($map['dataInfo'] as $item1) {
                    $model->dataInfo[$n1] = dataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metric'])) {
            if (!empty($map['metric'])) {
                $model->metric = [];
                $n1 = 0;
                foreach ($map['metric'] as $item1) {
                    $model->metric[$n1] = metric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['usageScenario'])) {
            $model->usageScenario = $map['usageScenario'];
        }

        return $model;
    }
}
