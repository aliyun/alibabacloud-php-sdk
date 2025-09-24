<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponseBody\data\detailList;

use AlibabaCloud\Dara\Model;

class detailList extends Model
{
    /**
     * @var string
     */
    public $deductDate;

    /**
     * @var float
     */
    public $deductFactorTotal;

    /**
     * @var string
     */
    public $deductHours;

    /**
     * @var float
     */
    public $deductQuantity;

    /**
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $RIInstanceId;
    protected $_name = [
        'deductDate' => 'DeductDate',
        'deductFactorTotal' => 'DeductFactorTotal',
        'deductHours' => 'DeductHours',
        'deductQuantity' => 'DeductQuantity',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductedInstanceId' => 'DeductedInstanceId',
        'deductedProductDetail' => 'DeductedProductDetail',
        'instanceSpec' => 'InstanceSpec',
        'RIInstanceId' => 'RIInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deductDate) {
            $res['DeductDate'] = $this->deductDate;
        }

        if (null !== $this->deductFactorTotal) {
            $res['DeductFactorTotal'] = $this->deductFactorTotal;
        }

        if (null !== $this->deductHours) {
            $res['DeductHours'] = $this->deductHours;
        }

        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }

        if (null !== $this->deductedCommodityCode) {
            $res['DeductedCommodityCode'] = $this->deductedCommodityCode;
        }

        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }

        if (null !== $this->deductedProductDetail) {
            $res['DeductedProductDetail'] = $this->deductedProductDetail;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->RIInstanceId) {
            $res['RIInstanceId'] = $this->RIInstanceId;
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
        if (isset($map['DeductDate'])) {
            $model->deductDate = $map['DeductDate'];
        }

        if (isset($map['DeductFactorTotal'])) {
            $model->deductFactorTotal = $map['DeductFactorTotal'];
        }

        if (isset($map['DeductHours'])) {
            $model->deductHours = $map['DeductHours'];
        }

        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }

        if (isset($map['DeductedCommodityCode'])) {
            $model->deductedCommodityCode = $map['DeductedCommodityCode'];
        }

        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }

        if (isset($map['DeductedProductDetail'])) {
            $model->deductedProductDetail = $map['DeductedProductDetail'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['RIInstanceId'])) {
            $model->RIInstanceId = $map['RIInstanceId'];
        }

        return $model;
    }
}
