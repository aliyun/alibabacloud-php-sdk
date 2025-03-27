<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceResponseBody\details;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var details
     */
    public $details;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $inDebt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'details' => 'Details',
        'edition' => 'Edition',
        'endTime' => 'EndTime',
        'inDebt' => 'InDebt',
        'instanceId' => 'InstanceId',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->details) {
            $this->details->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toArray($noStream) : $this->details;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
