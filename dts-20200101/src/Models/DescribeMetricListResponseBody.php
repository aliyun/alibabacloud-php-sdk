<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMetricListResponseBody\dataPoints;
use AlibabaCloud\Tea\Model;

class DescribeMetricListResponseBody extends Model
{
    /**
     * @description The error code returned by the backend service. The number is incremented.
     *
     * @example 403
     *
     * @var string
     */
    public $code;

    /**
     * @description The monitoring statistics.
     *
     * @var dataPoints[]
     */
    public $dataPoints;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the %s variable in the **ErrMessage** parameter.
     *
     * @example Type
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code returned for an exception.
     *
     * @example 403
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description *   **InternetOut**: the outbound traffic over the Internet. Unit: byte.
     *   **diskusage_utilization**: the disk usage.
     *   **IntranetInRate**: the inbound traffic over the internal network. Unit: byte.
     *   **InternetIn**: the inbound traffic from the Internet. Unit: byte.
     *   **cpu_total**: the CPU utilization.
     *   **memory_usedutilization**: the memory usage.
     *   **IntranetOutRate**: the outbound traffic over the internal network. Unit: byte.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description Indicates whether the metrics of the cluster or a node are queried. Valid values:
     *
     *   **CLUSTER**: The metrics of the cluster are queried.
     *   **NODE**: The metrics of a node are queried.
     *
     * @example CLUSTER
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The monitored object.
     *
     *   If the **MetricType** parameter is set to **NODE**, the value of this parameter is the ID of the node that is monitored.****
     *   If the **MetricType** parameter is set to **CLUSTER**, the value of this parameter is the ID of the dedicated cluster. You can obtain the ID by calling the ListDedicatedCluster operation.
     *
     * @example ecs-jhjnjjn
     *
     * @var string
     */
    public $param;

    /**
     * @description The monitoring interval. Unit: seconds. Minimum value: 15.
     *
     * @example 15
     *
     * @var int
     */
    public $period;

    /**
     * @description The ID of the request.
     *
     * @example 621BB4F8-3016-4FAA-8D5A-5D3163CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'dataPoints'     => 'DataPoints',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'metricName'     => 'MetricName',
        'metricType'     => 'MetricType',
        'param'          => 'Param',
        'period'         => 'Period',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->dataPoints) {
            $res['DataPoints'] = [];
            if (null !== $this->dataPoints && \is_array($this->dataPoints)) {
                $n = 0;
                foreach ($this->dataPoints as $item) {
                    $res['DataPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DataPoints'])) {
            if (!empty($map['DataPoints'])) {
                $model->dataPoints = [];
                $n                 = 0;
                foreach ($map['DataPoints'] as $item) {
                    $model->dataPoints[$n++] = null !== $item ? dataPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
