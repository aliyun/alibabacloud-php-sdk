<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryMonthlySlaListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $availableRate;

    /**
     * @var string
     */
    public $damagedId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $month;

    /**
     * @var float
     */
    public $monthlyServiceCharge;

    /**
     * @var string
     */
    public $payDescription;

    /**
     * @var float
     */
    public $payRate;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var float
     */
    public $shouldPaySum;
    protected $_name = [
        'availableRate' => 'AvailableRate',
        'damagedId' => 'DamagedId',
        'instanceId' => 'InstanceId',
        'month' => 'Month',
        'monthlyServiceCharge' => 'MonthlyServiceCharge',
        'payDescription' => 'PayDescription',
        'payRate' => 'PayRate',
        'payStatus' => 'PayStatus',
        'productCode' => 'ProductCode',
        'shouldPaySum' => 'ShouldPaySum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableRate) {
            $res['AvailableRate'] = $this->availableRate;
        }

        if (null !== $this->damagedId) {
            $res['DamagedId'] = $this->damagedId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }

        if (null !== $this->monthlyServiceCharge) {
            $res['MonthlyServiceCharge'] = $this->monthlyServiceCharge;
        }

        if (null !== $this->payDescription) {
            $res['PayDescription'] = $this->payDescription;
        }

        if (null !== $this->payRate) {
            $res['PayRate'] = $this->payRate;
        }

        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->shouldPaySum) {
            $res['ShouldPaySum'] = $this->shouldPaySum;
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
        if (isset($map['AvailableRate'])) {
            $model->availableRate = $map['AvailableRate'];
        }

        if (isset($map['DamagedId'])) {
            $model->damagedId = $map['DamagedId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        if (isset($map['MonthlyServiceCharge'])) {
            $model->monthlyServiceCharge = $map['MonthlyServiceCharge'];
        }

        if (isset($map['PayDescription'])) {
            $model->payDescription = $map['PayDescription'];
        }

        if (isset($map['PayRate'])) {
            $model->payRate = $map['PayRate'];
        }

        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ShouldPaySum'])) {
            $model->shouldPaySum = $map['ShouldPaySum'];
        }

        return $model;
    }
}
