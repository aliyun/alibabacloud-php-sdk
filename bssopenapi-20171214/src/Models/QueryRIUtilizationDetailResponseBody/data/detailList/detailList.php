<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponseBody\data\detailList;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @description The time when the fees are deducted by using the RI.
     *
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $deductDate;

    /**
     * @description The total amount of computing power of the RI or capacity of SCU in the time period.
     *
     * @example 1
     *
     * @var float
     */
    public $deductFactorTotal;

    /**
     * @description The deduct factor. This parameter is returned only if the RICommodityCode parameter is set to ecsRi.
     *
     * @example 24
     *
     * @var string
     */
    public $deductHours;

    /**
     * @description The computing power or capacity of the pay-as-you-go instance whose fees are deducted by using the RI.
     *
     * @example 1
     *
     * @var float
     */
    public $deductQuantity;

    /**
     * @description The code of the service whose fees are deducted by using the RI.
     *
     * @example rds
     *
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @description The ID of the instance whose fees are deducted by using the RI.
     *
     * @example safdffghfgh
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @description The name of the service whose fees are deducted by using the RI.
     *
     * @example ApsaraDB RDS
     *
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @description The instance type of the instance whose fees are deducted by using the RI.
     *
     * @example rds.mysql.s3.large
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The ID of the RI.
     *
     * @example 324253645
     *
     * @var string
     */
    public $RIInstanceId;
    protected $_name = [
        'deductDate'            => 'DeductDate',
        'deductFactorTotal'     => 'DeductFactorTotal',
        'deductHours'           => 'DeductHours',
        'deductQuantity'        => 'DeductQuantity',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductedInstanceId'    => 'DeductedInstanceId',
        'deductedProductDetail' => 'DeductedProductDetail',
        'instanceSpec'          => 'InstanceSpec',
        'RIInstanceId'          => 'RIInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return detailList
     */
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
