<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest\dataInfo;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest\metric;
use AlibabaCloud\Tea\Model;

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
        'dataInfo'              => 'dataInfo',
        'metric'                => 'metric',
        'usageScenario'         => 'usageScenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complexQueryAvailable) {
            $res['complexQueryAvailable'] = $this->complexQueryAvailable;
        }
        if (null !== $this->dataInfo) {
            $res['dataInfo'] = [];
            if (null !== $this->dataInfo && \is_array($this->dataInfo)) {
                $n = 0;
                foreach ($this->dataInfo as $item) {
                    $res['dataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metric) {
            $res['metric'] = [];
            if (null !== $this->metric && \is_array($this->metric)) {
                $n = 0;
                foreach ($this->metric as $item) {
                    $res['metric'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usageScenario) {
            $res['usageScenario'] = $this->usageScenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CapacityPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['complexQueryAvailable'])) {
            $model->complexQueryAvailable = $map['complexQueryAvailable'];
        }
        if (isset($map['dataInfo'])) {
            if (!empty($map['dataInfo'])) {
                $model->dataInfo = [];
                $n               = 0;
                foreach ($map['dataInfo'] as $item) {
                    $model->dataInfo[$n++] = null !== $item ? dataInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['metric'])) {
            if (!empty($map['metric'])) {
                $model->metric = [];
                $n             = 0;
                foreach ($map['metric'] as $item) {
                    $model->metric[$n++] = null !== $item ? metric::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['usageScenario'])) {
            $model->usageScenario = $map['usageScenario'];
        }

        return $model;
    }
}
