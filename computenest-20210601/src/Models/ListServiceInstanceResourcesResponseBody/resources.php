<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-03-01T12:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example RDS
     *
     * @var string
     */
    public $productType;

    /**
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $renewalPeriod;

    /**
     * @example Month
     *
     * @var string
     */
    public $renewalPeriodUnit;

    /**
     * @example arn:acs:sag:cn-hangzhou:130920852836****:ccn/ccn-b3qf0q439sq2de****
     *
     * @var string
     */
    public $resourceARN;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'expireTime'        => 'ExpireTime',
        'payType'           => 'PayType',
        'productCode'       => 'ProductCode',
        'productType'       => 'ProductType',
        'renewStatus'       => 'RenewStatus',
        'renewalPeriod'     => 'RenewalPeriod',
        'renewalPeriodUnit' => 'RenewalPeriodUnit',
        'resourceARN'       => 'ResourceARN',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }
        if (null !== $this->renewalPeriod) {
            $res['RenewalPeriod'] = $this->renewalPeriod;
        }
        if (null !== $this->renewalPeriodUnit) {
            $res['RenewalPeriodUnit'] = $this->renewalPeriodUnit;
        }
        if (null !== $this->resourceARN) {
            $res['ResourceARN'] = $this->resourceARN;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }
        if (isset($map['RenewalPeriod'])) {
            $model->renewalPeriod = $map['RenewalPeriod'];
        }
        if (isset($map['RenewalPeriodUnit'])) {
            $model->renewalPeriodUnit = $map['RenewalPeriodUnit'];
        }
        if (isset($map['ResourceARN'])) {
            $model->resourceARN = $map['ResourceARN'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
