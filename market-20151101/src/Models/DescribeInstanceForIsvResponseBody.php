<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceForIsvResponseBody\relationalData;
use AlibabaCloud\Tea\Model;

class DescribeInstanceForIsvResponseBody extends Model
{
    /**
     * @var string
     */
    public $activeAddress;

    /**
     * @var string
     */
    public $appJson;

    /**
     * @var string
     */
    public $autoRenewal;

    /**
     * @example 1570634021000
     *
     * @var int
     */
    public $beganOn;

    /**
     * @example {"package_version":"yuncode000111"}
     *
     * @var string
     */
    public $componentJson;

    /**
     * @example 1570634018000
     *
     * @var int
     */
    public $createdOn;

    /**
     * @example 1602259200000
     *
     * @var int
     */
    public $endOn;

    /**
     * @var string
     */
    public $extendJson;

    /**
     * @var string
     */
    public $hostJson;

    /**
     * @var string
     */
    public $imageJson;

    /**
     * @example 1551111111
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTrial;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @example 204211111111111
     *
     * @var int
     */
    public $orderId;

    /**
     * @example cmgj00**11
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example cmgj00**11-prepay
     *
     * @var string
     */
    public $productSkuCode;

    /**
     * @example APP
     *
     * @var string
     */
    public $productType;

    /**
     * @var relationalData
     */
    public $relationalData;

    /**
     * @example 6EF60BEC-****-****-****-270359FB54A7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example OPENED
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierName;
    protected $_name = [
        'activeAddress'  => 'ActiveAddress',
        'appJson'        => 'AppJson',
        'autoRenewal'    => 'AutoRenewal',
        'beganOn'        => 'BeganOn',
        'componentJson'  => 'ComponentJson',
        'createdOn'      => 'CreatedOn',
        'endOn'          => 'EndOn',
        'extendJson'     => 'ExtendJson',
        'hostJson'       => 'HostJson',
        'imageJson'      => 'ImageJson',
        'instanceId'     => 'InstanceId',
        'isTrial'        => 'IsTrial',
        'licenseCode'    => 'LicenseCode',
        'orderId'        => 'OrderId',
        'productCode'    => 'ProductCode',
        'productName'    => 'ProductName',
        'productSkuCode' => 'ProductSkuCode',
        'productType'    => 'ProductType',
        'relationalData' => 'RelationalData',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
        'supplierName'   => 'SupplierName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeAddress) {
            $res['ActiveAddress'] = $this->activeAddress;
        }
        if (null !== $this->appJson) {
            $res['AppJson'] = $this->appJson;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->beganOn) {
            $res['BeganOn'] = $this->beganOn;
        }
        if (null !== $this->componentJson) {
            $res['ComponentJson'] = $this->componentJson;
        }
        if (null !== $this->createdOn) {
            $res['CreatedOn'] = $this->createdOn;
        }
        if (null !== $this->endOn) {
            $res['EndOn'] = $this->endOn;
        }
        if (null !== $this->extendJson) {
            $res['ExtendJson'] = $this->extendJson;
        }
        if (null !== $this->hostJson) {
            $res['HostJson'] = $this->hostJson;
        }
        if (null !== $this->imageJson) {
            $res['ImageJson'] = $this->imageJson;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isTrial) {
            $res['IsTrial'] = $this->isTrial;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productSkuCode) {
            $res['ProductSkuCode'] = $this->productSkuCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->relationalData) {
            $res['RelationalData'] = null !== $this->relationalData ? $this->relationalData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceForIsvResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveAddress'])) {
            $model->activeAddress = $map['ActiveAddress'];
        }
        if (isset($map['AppJson'])) {
            $model->appJson = $map['AppJson'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['BeganOn'])) {
            $model->beganOn = $map['BeganOn'];
        }
        if (isset($map['ComponentJson'])) {
            $model->componentJson = $map['ComponentJson'];
        }
        if (isset($map['CreatedOn'])) {
            $model->createdOn = $map['CreatedOn'];
        }
        if (isset($map['EndOn'])) {
            $model->endOn = $map['EndOn'];
        }
        if (isset($map['ExtendJson'])) {
            $model->extendJson = $map['ExtendJson'];
        }
        if (isset($map['HostJson'])) {
            $model->hostJson = $map['HostJson'];
        }
        if (isset($map['ImageJson'])) {
            $model->imageJson = $map['ImageJson'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsTrial'])) {
            $model->isTrial = $map['IsTrial'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductSkuCode'])) {
            $model->productSkuCode = $map['ProductSkuCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RelationalData'])) {
            $model->relationalData = relationalData::fromMap($map['RelationalData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        return $model;
    }
}
