<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\relationalData;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @example {"frontEndUrl":"https://****.aliyundoc.com","password":"Sjtv***","adminUrl":"https://****.aliyundoc.com","username":"aliyun***"}
     *
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
     * @example {}
     *
     * @var string
     */
    public $constraints;

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
     * @example {"password":"***","ip":"118.31.***.41","innerIp":"118.31.***.41","region":"","username":"***","beianInfo":""}
     *
     * @var string
     */
    public $hostJson;

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
     * @var modules
     */
    public $modules;

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
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->modules) {
            $res['Modules'] = null !== $this->modules ? $this->modules->toMap() : null;
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
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
