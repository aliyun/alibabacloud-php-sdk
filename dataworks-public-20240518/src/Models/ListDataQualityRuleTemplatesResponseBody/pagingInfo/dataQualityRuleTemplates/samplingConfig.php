<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo\dataQualityRuleTemplates;

use AlibabaCloud\Tea\Model;

class samplingConfig extends Model
{
    /**
     * @description The name of the sampled metric.
     * - Count: number of table rows
     * - Min: minimum value of the field
     * - Max: The maximum value of the field.
     * - Avg: field mean
     * - DistinctCount: number of unique field values
     * - DistinctPercent: the ratio of the number of unique field values to the number of data rows.
     * - DuplicatedCount: number of duplicate field values
     * - DuplicatedPercent: the ratio of the number of duplicate field values to the number of data rows.
     * - TableSize: table size
     * - NullValueCount: number of rows with empty fields
     * - NullValuePercent: the proportion of fields that are empty.
     * - GroupCount: aggregate each value by field value and the corresponding number of data rows
     * - CountNotIn: the enumerated value does not match the number of rows.
     * - CountDistinctNotIn: the number of unique values that the enumerated values do not match.
     * - UserDefinedSql: use custom SQL to collect samples
     *
     * @example Max
     *
     * @var string
     */
    public $metric;

    /**
     * @description Parameters required for sample collection
     *
     * @example {"Sql": "select count(1) from table;"}
     *
     * @var string
     */
    public $metricParameters;

    /**
     * @description Before executing the sample statement, insert some runtime parameter setting statements, which can be up to 1000 characters in length. Currently, only MaxCompute are supported.
     *
     * @example SET odps.sql.udf.timeout=600s;
     * SET odps.sql.python.version=cp27;
     *
     * @var string
     */
    public $settingConfig;
    protected $_name = [
        'metric' => 'Metric',
        'metricParameters' => 'MetricParameters',
        'settingConfig' => 'SettingConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->metricParameters) {
            $res['MetricParameters'] = $this->metricParameters;
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
        if (isset($map['SettingConfig'])) {
            $model->settingConfig = $map['SettingConfig'];
        }

        return $model;
    }
}
