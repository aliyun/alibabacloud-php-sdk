<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The time when the resource was created.
     *
     * @example 2022-01-01T12:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the resource expires.
     *
     * @example 2022-03-01T12:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription
     *   PayAsYouGo
     *
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @description The code of the cloud service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the cloud service.
     *
     * @example RDS
     *
     * @var string
     */
    public $productType;

    /**
     * @description The renewal state. Valid values:
     *
     *   AutoRenewal
     *   ManualRenewal
     *   NotRenewal
     *
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewStatus;

    /**
     * @description The renewal period.
     *
     * @example 1
     *
     * @var int
     */
    public $renewalPeriod;

    /**
     * @description The unit of the renewal period. Valid values:
     *
     *   Month
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $renewalPeriodUnit;

    /**
     * @description The ARN of the resource.
     *
     * @example arn:acs:sag:cn-hangzhou:130920852836****:ccn/ccn-b3qf0q439sq2de****
     *
     * @var string
     */
    public $resourceARN;

    /**
     * @description The state of the resource. Valid values:
     *
     *   running
     *   waiting
     *   terminated
     *
     * >  This parameter is returned only for containers.
     * @example running
     *
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
