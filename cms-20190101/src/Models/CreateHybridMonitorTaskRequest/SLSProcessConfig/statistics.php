<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The alias of the aggregation result.
     *
     * @example level_count
     *
     * @var string
     */
    public $alias;

    /**
     * @description The function that is used to aggregate the log data of a statistical period. Valid values:
     *
     *   count: counts the number.
     *   sum: calculates the total value.
     *   avg: calculates the average value.
     *   max: calculates the maximum value.
     *   min: calculates the minimum value.
     *   value: collects samples within the statistical period.
     *   countps: calculates the number of values of the specified field divided by the total number of seconds within a statistical period.
     *   sumps: calculates the sum of the values of the specified field divided by the total number of seconds within a statistical period.
     *   distinct: calculates the number of unique values of the specified field within a statistical period.
     *   distribution: calculates the number of logs that meet a specified condition within the statistical period.
     *   percentile: sorts the values of the specified field in ascending order, and then returns the value that is at the specified percentile within the statistical period. Example: P50.
     *
     * @example count
     *
     * @var string
     */
    public $function;

    /**
     * @description The value of the function that is used to aggregate logs imported from Simple Log Service.
     *
     *   If the `Function` parameter is set to `distribution`, this parameter specifies the lower limit of the statistical interval. For example, if you want to calculate the number of HTTP requests whose status code is 2XX, set this parameter to 200.
     *   If the `Function` parameter is set to `percentile`, this parameter specifies the percentile at which the expected value is. For example, 0.5 specifies P50.
     *
     * @example 200
     *
     * @var string
     */
    public $parameter1;

    /**
     * @description The value of the function that is used to aggregate logs imported from Simple Log Service.
     *
     * >  This parameter is required only if the `Function` parameter is set to `distribution`. This parameter specifies the upper limit of the statistical interval. For example, if you want to calculate the number of HTTP requests whose status code is 2XX, set this parameter to 299.
     * @example 299
     *
     * @var string
     */
    public $parameter2;

    /**
     * @description The name of the key that is used to aggregate logs imported from Simple Log Service.
     *
     * @example name
     *
     * @var string
     */
    public $SLSKeyName;
    protected $_name = [
        'alias'      => 'Alias',
        'function'   => 'Function',
        'parameter1' => 'Parameter1',
        'parameter2' => 'Parameter2',
        'SLSKeyName' => 'SLSKeyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->parameter1) {
            $res['Parameter1'] = $this->parameter1;
        }
        if (null !== $this->parameter2) {
            $res['Parameter2'] = $this->parameter2;
        }
        if (null !== $this->SLSKeyName) {
            $res['SLSKeyName'] = $this->SLSKeyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Parameter1'])) {
            $model->parameter1 = $map['Parameter1'];
        }
        if (isset($map['Parameter2'])) {
            $model->parameter2 = $map['Parameter2'];
        }
        if (isset($map['SLSKeyName'])) {
            $model->SLSKeyName = $map['SLSKeyName'];
        }

        return $model;
    }
}
