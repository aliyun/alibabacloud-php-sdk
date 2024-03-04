<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class metricConfig extends Model
{
    /**
     * @var string
     */
    public $finalMode;

    /**
     * @var mixed[]
     */
    public $metricDict;

    /**
     * @var string[]
     */
    public $metricSource;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $sourceListFinalMode;
    protected $_name = [
        'finalMode'           => 'final_mode',
        'metricDict'          => 'metric_dict',
        'metricSource'        => 'metric_source',
        'metricType'          => 'metric_type',
        'sourceListFinalMode' => 'source_list_final_mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finalMode) {
            $res['final_mode'] = $this->finalMode;
        }
        if (null !== $this->metricDict) {
            $res['metric_dict'] = $this->metricDict;
        }
        if (null !== $this->metricSource) {
            $res['metric_source'] = $this->metricSource;
        }
        if (null !== $this->metricType) {
            $res['metric_type'] = $this->metricType;
        }
        if (null !== $this->sourceListFinalMode) {
            $res['source_list_final_mode'] = $this->sourceListFinalMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['final_mode'])) {
            $model->finalMode = $map['final_mode'];
        }
        if (isset($map['metric_dict'])) {
            $model->metricDict = $map['metric_dict'];
        }
        if (isset($map['metric_source'])) {
            if (!empty($map['metric_source'])) {
                $model->metricSource = $map['metric_source'];
            }
        }
        if (isset($map['metric_type'])) {
            $model->metricType = $map['metric_type'];
        }
        if (isset($map['source_list_final_mode'])) {
            $model->sourceListFinalMode = $map['source_list_final_mode'];
        }

        return $model;
    }
}
