<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponseBody\data\detailList;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @var string
     */
    public $RIInstanceId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @var string
     */
    public $deductDate;

    /**
     * @var string
     */
    public $deductHours;

    /**
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @var float
     */
    public $deductQuantity;

    /**
     * @var float
     */
    public $deductFactorTotal;
    protected $_name = [
        'RIInstanceId'          => 'RIInstanceId',
        'instanceSpec'          => 'InstanceSpec',
        'deductedInstanceId'    => 'DeductedInstanceId',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductDate'            => 'DeductDate',
        'deductHours'           => 'DeductHours',
        'deductedProductDetail' => 'DeductedProductDetail',
        'deductQuantity'        => 'DeductQuantity',
        'deductFactorTotal'     => 'DeductFactorTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->RIInstanceId) {
            $res['RIInstanceId'] = $this->RIInstanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->deductedCommodityCode) {
            $res['DeductedCommodityCode'] = $this->deductedCommodityCode;
        }
        if (null !== $this->deductDate) {
            $res['DeductDate'] = $this->deductDate;
        }
        if (null !== $this->deductHours) {
            $res['DeductHours'] = $this->deductHours;
        }
        if (null !== $this->deductedProductDetail) {
            $res['DeductedProductDetail'] = $this->deductedProductDetail;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->deductFactorTotal) {
            $res['DeductFactorTotal'] = $this->deductFactorTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RIInstanceId'])) {
            $model->RIInstanceId = $map['RIInstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['DeductedCommodityCode'])) {
            $model->deductedCommodityCode = $map['DeductedCommodityCode'];
        }
        if (isset($map['DeductDate'])) {
            $model->deductDate = $map['DeductDate'];
        }
        if (isset($map['DeductHours'])) {
            $model->deductHours = $map['DeductHours'];
        }
        if (isset($map['DeductedProductDetail'])) {
            $model->deductedProductDetail = $map['DeductedProductDetail'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['DeductFactorTotal'])) {
            $model->deductFactorTotal = $map['DeductFactorTotal'];
        }

        return $model;
    }
}
