<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\DescribeApplicationGroupBillResponseBody;

use AlibabaCloud\Tea\Model;

class applicationGroupConsume extends Model
{
    /**
     * @example 18.88
     *
     * @var float
     */
    public $amount;

    /**
     * @example 2023-06-10T06:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example i-0jl781czrhqey0s5zpsj
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test-
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example ALIYUN::ECS::INSTANCE
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1
     *
     * @var string
     */
    public $optimization;

    /**
     * @example WHITE
     *
     * @var string
     */
    public $peakType;

    /**
     * @example "{\"mem\":\"6.82\",\"cpu\":\"0.55\"}"
     *
     * @var string
     */
    public $performance;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'amount'       => 'Amount',
        'creationTime' => 'CreationTime',
        'currency'     => 'Currency',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'optimization' => 'Optimization',
        'peakType'     => 'PeakType',
        'performance'  => 'Performance',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return applicationGroupConsume
     */
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
