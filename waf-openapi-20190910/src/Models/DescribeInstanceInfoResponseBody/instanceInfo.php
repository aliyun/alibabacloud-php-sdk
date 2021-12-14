<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $inDebt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $remainDay;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var int
     */
    public $trial;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'endDate'          => 'EndDate',
        'inDebt'           => 'InDebt',
        'instanceId'       => 'InstanceId',
        'payType'          => 'PayType',
        'region'           => 'Region',
        'remainDay'        => 'RemainDay',
        'status'           => 'Status',
        'subscriptionType' => 'SubscriptionType',
        'trial'            => 'Trial',
        'version'          => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->remainDay) {
            $res['RemainDay'] = $this->remainDay;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->trial) {
            $res['Trial'] = $this->trial;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RemainDay'])) {
            $model->remainDay = $map['RemainDay'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Trial'])) {
            $model->trial = $map['Trial'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
