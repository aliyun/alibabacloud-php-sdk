<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponseBody\data\detailList;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $deductHours;

    /**
     * @var int
     */
    public $shareUid;

    /**
     * @var string
     */
    public $deductDate;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @var float
     */
    public $deductMeasure;

    /**
     * @var string
     */
    public $region;

    /**
     * @var float
     */
    public $deductQuantity;

    /**
     * @var float
     */
    public $deductFactorTotal;

    /**
     * @var string
     */
    public $resCode;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'deductedInstanceId'    => 'DeductedInstanceId',
        'instanceId'            => 'InstanceId',
        'deductHours'           => 'DeductHours',
        'shareUid'              => 'ShareUid',
        'deductDate'            => 'DeductDate',
        'instanceSpec'          => 'InstanceSpec',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductedProductDetail' => 'DeductedProductDetail',
        'deductMeasure'         => 'DeductMeasure',
        'region'                => 'Region',
        'deductQuantity'        => 'DeductQuantity',
        'deductFactorTotal'     => 'DeductFactorTotal',
        'resCode'               => 'ResCode',
        'uid'                   => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->deductHours) {
            $res['DeductHours'] = $this->deductHours;
        }
        if (null !== $this->shareUid) {
            $res['ShareUid'] = $this->shareUid;
        }
        if (null !== $this->deductDate) {
            $res['DeductDate'] = $this->deductDate;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->deductedCommodityCode) {
            $res['DeductedCommodityCode'] = $this->deductedCommodityCode;
        }
        if (null !== $this->deductedProductDetail) {
            $res['DeductedProductDetail'] = $this->deductedProductDetail;
        }
        if (null !== $this->deductMeasure) {
            $res['DeductMeasure'] = $this->deductMeasure;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->deductFactorTotal) {
            $res['DeductFactorTotal'] = $this->deductFactorTotal;
        }
        if (null !== $this->resCode) {
            $res['ResCode'] = $this->resCode;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DeductHours'])) {
            $model->deductHours = $map['DeductHours'];
        }
        if (isset($map['ShareUid'])) {
            $model->shareUid = $map['ShareUid'];
        }
        if (isset($map['DeductDate'])) {
            $model->deductDate = $map['DeductDate'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['DeductedCommodityCode'])) {
            $model->deductedCommodityCode = $map['DeductedCommodityCode'];
        }
        if (isset($map['DeductedProductDetail'])) {
            $model->deductedProductDetail = $map['DeductedProductDetail'];
        }
        if (isset($map['DeductMeasure'])) {
            $model->deductMeasure = $map['DeductMeasure'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['DeductFactorTotal'])) {
            $model->deductFactorTotal = $map['DeductFactorTotal'];
        }
        if (isset($map['ResCode'])) {
            $model->resCode = $map['ResCode'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
