<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig\filter;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The description of the metric import task.
     *
     * @example =
     *
     * @var string
     */
    public $operator;

    /**
     * @description The configuration file of the Alibaba Cloud service that you want to monitor by using Hybrid Cloud Monitoring.
     *
     *   namespace: the namespace of the Alibaba Cloud service. For information about how to query the namespace of an Alibaba Cloud service, see [DescribeMetricMetaList](~~98846~~).
     *   metric_list: the metrics of the Alibaba Cloud service. For information about how to query the metrics of an Alibaba Cloud service, see [DescribeMetricMetaList](~~98846~~).
     *
     * >  This parameter is required only if the `TaskType` parameter is set to `aliyun_fc`.
     * @example code
     *
     * @var string
     */
    public $SLSKeyName;

    /**
     * @description The name of the metric import task.
     *
     *   If the `TaskType` parameter is set to `aliyun_fc`, enter the name of the metric import task.
     *   If the `TaskType` parameter is set to `aliyun_sls`, enter the name of the metric for logs imported from Log Service.
     *
     * @example 200
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'operator'   => 'Operator',
        'SLSKeyName' => 'SLSKeyName',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->SLSKeyName) {
            $res['SLSKeyName'] = $this->SLSKeyName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['SLSKeyName'])) {
            $model->SLSKeyName = $map['SLSKeyName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
