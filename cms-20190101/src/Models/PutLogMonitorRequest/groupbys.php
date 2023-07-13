<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest;

use AlibabaCloud\Tea\Model;

class groupbys extends Model
{
    /**
     * @description The function that is used to aggregate the monitoring data of logs within an aggregation period. Valid values of N: 1 to 10. Valid values:
     *
     *   count: counts the number.
     *   sum: calculates the total value.
     *   avg: calculates the average value.
     *   max: selects the maximum value.
     *   min: selects the minimum value.
     *   countps: calculates the counted number of the specified field divided by the total number of seconds of the aggregation period.
     *   sumps: calculates the total value of the specified field divided by the total number of seconds of the aggregation period.
     *   distinct: counts the number of logs where the specified field appears within the aggregation period.
     *
     * @example CPUUtilization
     *
     * @var string
     */
    public $alias;

    /**
     * @description The ID of the application group.
     *
     * @example cpu
     *
     * @var string
     */
    public $fieldName;
    protected $_name = [
        'alias'     => 'Alias',
        'fieldName' => 'FieldName',
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
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupbys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        return $model;
    }
}
