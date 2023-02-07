<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponseBody\data\detailList;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @example 2019/5/23 12:00
     *
     * @var string
     */
    public $deductDate;

    /**
     * @example 1
     *
     * @var float
     */
    public $deductFactorTotal;

    /**
     * @example 24
     *
     * @var float
     */
    public $deductHours;

    /**
     * @example 1
     *
     * @var float
     */
    public $deductMeasure;

    /**
     * @example 1
     *
     * @var float
     */
    public $deductQuantity;

    /**
     * @example rds
     *
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @example oss-123123
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @example oss-123123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example rds.mysql.s3.large
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example PutRequest
     *
     * @var string
     */
    public $resCode;

    /**
     * @example 1111111111
     *
     * @var int
     */
    public $shareUid;

    /**
     * @example 1111111111
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'deductDate'            => 'DeductDate',
        'deductFactorTotal'     => 'DeductFactorTotal',
        'deductHours'           => 'DeductHours',
        'deductMeasure'         => 'DeductMeasure',
        'deductQuantity'        => 'DeductQuantity',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductedInstanceId'    => 'DeductedInstanceId',
        'deductedProductDetail' => 'DeductedProductDetail',
        'instanceId'            => 'InstanceId',
        'instanceSpec'          => 'InstanceSpec',
        'region'                => 'Region',
        'resCode'               => 'ResCode',
        'shareUid'              => 'ShareUid',
        'uid'                   => 'Uid',
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
        if (null !== $this->deductMeasure) {
            $res['DeductMeasure'] = $this->deductMeasure;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resCode) {
            $res['ResCode'] = $this->resCode;
        }
        if (null !== $this->shareUid) {
            $res['ShareUid'] = $this->shareUid;
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
        if (isset($map['DeductDate'])) {
            $model->deductDate = $map['DeductDate'];
        }
        if (isset($map['DeductFactorTotal'])) {
            $model->deductFactorTotal = $map['DeductFactorTotal'];
        }
        if (isset($map['DeductHours'])) {
            $model->deductHours = $map['DeductHours'];
        }
        if (isset($map['DeductMeasure'])) {
            $model->deductMeasure = $map['DeductMeasure'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResCode'])) {
            $model->resCode = $map['ResCode'];
        }
        if (isset($map['ShareUid'])) {
            $model->shareUid = $map['ShareUid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
