<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityRule;

use AlibabaCloud\Tea\Model;

class samplingConfig extends Model
{
    /**
     * @example Min
     *
     * @var string
     */
    public $metric;

    /**
     * @example { "Columns": [ "id", "name" ] }
     *
     * @var string
     */
    public $metricParameters;

    /**
     * @example id IS NULL
     *
     * @var string
     */
    public $samplingFilter;

    /**
     * @example SET odps.sql.udf.timeout=600s;
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return samplingConfig
     */
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
