<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeAlertingMetricRuleResourcesResponseBody extends Model
{
    /**
     * @description The ID of the application group.
     *
     * >  If the alert rule is associated with an application group, the ID of the application group is returned in this parameter.
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The relationship between multiple metrics. Valid values:
     *
     *   &&: If all metrics meet the alert conditions, CloudMonitor sends alert notifications.
     *   ||: If one of the metrics meets the alert conditions, CloudMonitor sends alert notifications.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $message;

    /**
     * @description The error message.
     *
     * @example 0724011B-D9E0-4B2F-8C51-F17A894CC42C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The dimensions that specify the resources whose monitoring data you want to query.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The tags of the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The name of the metric.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
        'success'   => 'Success',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertingMetricRuleResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
