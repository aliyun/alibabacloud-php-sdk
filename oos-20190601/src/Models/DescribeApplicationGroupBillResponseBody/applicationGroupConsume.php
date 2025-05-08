<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\DescribeApplicationGroupBillResponseBody;

use AlibabaCloud\Dara\Model;

class applicationGroupConsume extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $optimization;

    /**
     * @var string
     */
    public $peakType;

    /**
     * @var string
     */
    public $performance;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'amount' => 'Amount',
        'creationTime' => 'CreationTime',
        'currency' => 'Currency',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'optimization' => 'Optimization',
        'peakType' => 'PeakType',
        'performance' => 'Performance',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->optimization) {
            $res['Optimization'] = $this->optimization;
        }

        if (null !== $this->peakType) {
            $res['PeakType'] = $this->peakType;
        }

        if (null !== $this->performance) {
            $res['Performance'] = $this->performance;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Optimization'])) {
            $model->optimization = $map['Optimization'];
        }

        if (isset($map['PeakType'])) {
            $model->peakType = $map['PeakType'];
        }

        if (isset($map['Performance'])) {
            $model->performance = $map['Performance'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
