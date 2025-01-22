<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules;

use AlibabaCloud\Dara\Model;

class samplingConfig extends Model
{
    /**
     * @var string
     */
    public $metric;
    /**
     * @var string
     */
    public $metricParameters;
    /**
     * @var string
     */
    public $samplingFilter;
    /**
     * @var string
     */
    public $settingConfig;
    protected $_name = [
        'metric'           => 'Metric',
        'metricParameters' => 'MetricParameters',
        'samplingFilter'   => 'SamplingFilter',
        'settingConfig'    => 'SettingConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->metricParameters) {
            $res['MetricParameters'] = $this->metricParameters;
        }

        if (null !== $this->samplingFilter) {
            $res['SamplingFilter'] = $this->samplingFilter;
        }

        if (null !== $this->settingConfig) {
            $res['SettingConfig'] = $this->settingConfig;
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
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['MetricParameters'])) {
            $model->metricParameters = $map['MetricParameters'];
        }

        if (isset($map['SamplingFilter'])) {
            $model->samplingFilter = $map['SamplingFilter'];
        }

        if (isset($map['SettingConfig'])) {
            $model->settingConfig = $map['SettingConfig'];
        }

        return $model;
    }
}
