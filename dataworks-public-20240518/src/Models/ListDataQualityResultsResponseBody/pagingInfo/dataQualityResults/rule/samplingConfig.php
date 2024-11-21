<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults\rule;

use AlibabaCloud\Tea\Model;

class samplingConfig extends Model
{
    /**
     * @description The metrics used for sampling. Valid values:
     *
     *   Count: the number of rows in the table.
     *   Min: the minimum value of the field.
     *   Max: the maximum value of the field.
     *   Avg: the average value of the field.
     *   DistinctCount: the number of unique values of the field after deduplication.
     *   DistinctPercent: the proportion of the number of unique values of the field after deduplication to the number of rows in the table.
     *   DuplicatedCount: the number of duplicated values of the field.
     *   DuplicatedPercent: the proportion of the number of duplicated values of the field to the number of rows in the table.
     *   TableSize: the table size.
     *   NullValueCount: the number of rows in which the field value is null.
     *   NullValuePercent: the proportion of the number of rows in which the field value is null to the number of rows in the table.
     *   GroupCount: the field value and the number of rows for each field value.
     *   CountNotIn: the number of rows in which the field values are different from the referenced values that you specified in the rule.
     *   CountDistinctNotIn: the number of unique values that are different from the referenced values that you specified in the rule after deduplication.
     *   UserDefinedSql: indicates that data is sampled by executing custom SQL statements.
     *
     * @example COUNT
     *
     * @var string
     */
    public $metric;

    /**
     * @example { "columns": [ "id", "name" ] }
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
