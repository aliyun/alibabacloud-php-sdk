<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules;

use AlibabaCloud\Tea\Model;

class samplingConfig extends Model
{
    /**
     * @example NullValueCount
     *
     * @var string
     */
    public $metric;

    /**
     * @example { "Columns": [ "id", "name" ] , "SQL": "select count(1) from table;"}
     *
     * @var string
     */
    public $metricParameters;

    /**
     * @example status != \\"Succeeded\\"
     *
     * @var string
     */
    public $samplingFilter;

    /**
     * @example odps.sql.type.system.odps2=True,odps.sql.hive.compatible=True
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
