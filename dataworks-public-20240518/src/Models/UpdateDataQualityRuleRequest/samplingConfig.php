<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleRequest;

use AlibabaCloud\Tea\Model;

class samplingConfig extends Model
{
    /**
     * @description The metrics used for sampling. You can leave this parameter empty if you use a rule template. Valid values:
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
     * @example Min
     *
     * @var string
     */
    public $metric;

    /**
     * @description The parameters required for sampling.
     *
     * @example { "Columns": [ "id", "name" ] , "SQL": "select count(1) from table;"}
     *
     * @var string
     */
    public $metricParameters;

    /**
     * @description The statements that are used to filter unnecessary data during sampling. The statements can be up to 16,777,215 characters in length.
     *
     * @example id IS NULL
     *
     * @var string
     */
    public $samplingFilter;

    /**
     * @description The statements that are used to configure the parameters required for sampling before you execute the sampling statements. The statements can be up to 1,000 characters in length. Only the MaxCompute database is supported.
     *
     * @example SET odps.sql.udf.timeout=600s;
     * SET odps.sql.python.version=cp27;
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
