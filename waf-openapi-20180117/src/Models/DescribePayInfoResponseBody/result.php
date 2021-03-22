<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribePayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $remainDay;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $payType;

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
    public $trial;
    protected $_name = [
        'status'     => 'Status',
        'endDate'    => 'EndDate',
        'remainDay'  => 'RemainDay',
        'region'     => 'Region',
        'payType'    => 'PayType',
        'inDebt'     => 'InDebt',
        'instanceId' => 'InstanceId',
        'trial'      => 'Trial',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->remainDay) {
            $res['RemainDay'] = $this->remainDay;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->inDebt) {
            $res['InDebt'] = $this->inDebt;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->trial) {
            $res['Trial'] = $this->trial;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['RemainDay'])) {
            $model->remainDay = $map['RemainDay'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['InDebt'])) {
            $model->inDebt = $map['InDebt'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Trial'])) {
            $model->trial = $map['Trial'];
        }

        return $model;
    }
}
