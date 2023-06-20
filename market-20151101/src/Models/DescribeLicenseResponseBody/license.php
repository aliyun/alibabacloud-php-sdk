<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license\extendArray;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeLicenseResponseBody\license\extendInfo;
use AlibabaCloud\Tea\Model;

class license extends Model
{
    /**
     * @example 2019-05-25 09:00:00
     *
     * @var string
     */
    public $activateTime;

    /**
     * @example 2019-05-25 09:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2019-06-25 09:00:00
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @var extendArray
     */
    public $extendArray;

    /**
     * @var extendInfo
     */
    public $extendInfo;

    /**
     * @example 1551111111
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example -
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @example ACTIVATED
     *
     * @var string
     */
    public $licenseStatus;

    /**
     * @example cmgj02****
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example cmgj02****-prepay
     *
     * @var string
     */
    public $productSkuId;

    /**
     * @var string
     */
    public $supplierName;
    protected $_name = [
        'activateTime'  => 'ActivateTime',
        'createTime'    => 'CreateTime',
        'expiredTime'   => 'ExpiredTime',
        'extendArray'   => 'ExtendArray',
        'extendInfo'    => 'ExtendInfo',
        'instanceId'    => 'InstanceId',
        'licenseCode'   => 'LicenseCode',
        'licenseStatus' => 'LicenseStatus',
        'productCode'   => 'ProductCode',
        'productName'   => 'ProductName',
        'productSkuId'  => 'ProductSkuId',
        'supplierName'  => 'SupplierName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->extendArray) {
            $res['ExtendArray'] = null !== $this->extendArray ? $this->extendArray->toMap() : null;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = null !== $this->extendInfo ? $this->extendInfo->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->licenseStatus) {
            $res['LicenseStatus'] = $this->licenseStatus;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productSkuId) {
            $res['ProductSkuId'] = $this->productSkuId;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return license
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ExtendArray'])) {
            $model->extendArray = extendArray::fromMap($map['ExtendArray']);
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = extendInfo::fromMap($map['ExtendInfo']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['LicenseStatus'])) {
            $model->licenseStatus = $map['LicenseStatus'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductSkuId'])) {
            $model->productSkuId = $map['ProductSkuId'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        return $model;
    }
}
