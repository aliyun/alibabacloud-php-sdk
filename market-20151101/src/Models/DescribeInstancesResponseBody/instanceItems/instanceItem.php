<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponseBody\instanceItems;

use AlibabaCloud\Tea\Model;

class instanceItem extends Model
{
    /**
     * @var string
     */
    public $apiJson;

    /**
     * @var string
     */
    public $appJson;

    /**
     * @var int
     */
    public $beganOn;

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
     * @var string
     */
    public $idaasJson;

    /**
     * @var string
     */
    public $imageJson;

    /**
     * @var int
     */
    public $instanceId;

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
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $supplierName;
    protected $_name = [
        'apiJson'        => 'ApiJson',
        'appJson'        => 'AppJson',
        'beganOn'        => 'BeganOn',
        'createdOn'      => 'CreatedOn',
        'endOn'          => 'EndOn',
        'extendJson'     => 'ExtendJson',
        'hostJson'       => 'HostJson',
        'idaasJson'      => 'IdaasJson',
        'imageJson'      => 'ImageJson',
        'instanceId'     => 'InstanceId',
        'orderId'        => 'OrderId',
        'productCode'    => 'ProductCode',
        'productName'    => 'ProductName',
        'productSkuCode' => 'ProductSkuCode',
        'productType'    => 'ProductType',
        'status'         => 'Status',
        'supplierName'   => 'SupplierName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiJson) {
            $res['ApiJson'] = $this->apiJson;
        }
        if (null !== $this->appJson) {
            $res['AppJson'] = $this->appJson;
        }
        if (null !== $this->beganOn) {
            $res['BeganOn'] = $this->beganOn;
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
        if (null !== $this->idaasJson) {
            $res['IdaasJson'] = $this->idaasJson;
        }
        if (null !== $this->imageJson) {
            $res['ImageJson'] = $this->imageJson;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return instanceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiJson'])) {
            $model->apiJson = $map['ApiJson'];
        }
        if (isset($map['AppJson'])) {
            $model->appJson = $map['AppJson'];
        }
        if (isset($map['BeganOn'])) {
            $model->beganOn = $map['BeganOn'];
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
        if (isset($map['IdaasJson'])) {
            $model->idaasJson = $map['IdaasJson'];
        }
        if (isset($map['ImageJson'])) {
            $model->imageJson = $map['ImageJson'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }

        return $model;
    }
}
