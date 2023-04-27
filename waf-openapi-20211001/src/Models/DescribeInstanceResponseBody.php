<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponseBody\details;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @description The details of the WAF instance.
     *
     * @var details
     */
    public $details;

    /**
     * @description The edition of the WAF instance.
     *
     * @example default_version
     *
     * @var string
     */
    public $edition;

    /**
     * @description The expiration time of the WAF instance.
     *
     * @example 4809859200000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Indicates whether the WAF instance has overdue payments. Valid values:
     *
     *   **0:** The WAF instance has overdue payments.
     *   **1:** The WAF instance does not have overdue payments.
     *
     * >  This parameter is returned only when the value of the **PayType** parameter is **POSTPAY**.
     * @example 1
     *
     * @var string
     */
    public $inDebt;

    /**
     * @description The ID of the WAF instance.
     *
     * @example waf-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The billing method of the WAF instance. Valid values:
     *
     *   **POSTPAY:** The WAF instance uses the pay-as-you-go billing method.
     *   **PREPAY:** The WAF instance uses the subscription billing method.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 66A98669-CC6E-4F3E-80A6-3014697B11AE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The purchase time of the WAF instance. The time is in the UNIX timestamp format. The time is displayed in UTC. Unit: milliseconds.
     *
     * @example 1668496310000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the WAF instance. Valid values:
     *
     *   **1:** The WAF instance is in a normal state.
     *   **2:** The WAF instance has expired.
     *   **3:** The WAF instance has been released.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'details'    => 'Details',
        'edition'    => 'Edition',
        'endTime'    => 'EndTime',
        'inDebt'     => 'InDebt',
        'instanceId' => 'InstanceId',
        'payType'    => 'PayType',
        'regionId'   => 'RegionId',
        'requestId'  => 'RequestId',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toMap() : null;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->inDebt) {
            $res['InDebt'] = $this->inDebt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            $model->details = details::fromMap($map['Details']);
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InDebt'])) {
            $model->inDebt = $map['InDebt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
