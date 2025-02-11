<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\relationalData;

class DescribeInstanceResponseBody extends Model
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
     * @var int
     */
    public $beganOn;
    /**
     * @var string
     */
    public $componentJson;
    /**
     * @var string
     */
    public $constraints;
    /**
     * @var int
     */
    public $createdOn;
    /**
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
     * @var int
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $isTrial;
    /**
     * @var string
     */
    public $licenseCode;
    /**
     * @var modules
     */
    public $modules;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var string
     */
    public $productSkuCode;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var relationalData
     */
    public $relationalData;
    /**
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
        'constraints'    => 'Constraints',
        'createdOn'      => 'CreatedOn',
        'endOn'          => 'EndOn',
        'extendJson'     => 'ExtendJson',
        'hostJson'       => 'HostJson',
        'instanceId'     => 'InstanceId',
        'isTrial'        => 'IsTrial',
        'licenseCode'    => 'LicenseCode',
        'modules'        => 'Modules',
        'orderId'        => 'OrderId',
        'productCode'    => 'ProductCode',
        'productName'    => 'ProductName',
        'productSkuCode' => 'ProductSkuCode',
        'productType'    => 'ProductType',
        'relationalData' => 'RelationalData',
        'status'         => 'Status',
        'supplierName'   => 'SupplierName',
    ];

    public function validate()
    {
        if (null !== $this->modules) {
            $this->modules->validate();
        }
        if (null !== $this->relationalData) {
            $this->relationalData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->constraints) {
            $res['Constraints'] = $this->constraints;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isTrial) {
            $res['IsTrial'] = $this->isTrial;
        }

        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        if (null !== $this->modules) {
            $res['Modules'] = null !== $this->modules ? $this->modules->toArray($noStream) : $this->modules;
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
            $res['RelationalData'] = null !== $this->relationalData ? $this->relationalData->toArray($noStream) : $this->relationalData;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
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

        if (isset($map['Constraints'])) {
            $model->constraints = $map['Constraints'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsTrial'])) {
            $model->isTrial = $map['IsTrial'];
        }

        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        if (isset($map['Modules'])) {
            $model->modules = modules::fromMap($map['Modules']);
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        return $model;
    }
}
