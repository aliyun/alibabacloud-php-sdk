<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProjectInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $currentStepNo;

    /**
     * @var int
     */
    public $customerAliUid;

    /**
     * @var int
     */
    public $finalStepNo;

    /**
     * @var string
     */
    public $finishType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtExpired;

    /**
     * @var int
     */
    public $gmtFinished;

    /**
     * @var string
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
    public $productSkuName;

    /**
     * @var string
     */
    public $projectStatus;

    /**
     * @var int
     */
    public $supplierAliUid;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'currentStepNo'  => 'CurrentStepNo',
        'customerAliUid' => 'CustomerAliUid',
        'finalStepNo'    => 'FinalStepNo',
        'finishType'     => 'FinishType',
        'gmtCreate'      => 'GmtCreate',
        'gmtExpired'     => 'GmtExpired',
        'gmtFinished'    => 'GmtFinished',
        'instanceId'     => 'InstanceId',
        'orderId'        => 'OrderId',
        'productCode'    => 'ProductCode',
        'productName'    => 'ProductName',
        'productSkuCode' => 'ProductSkuCode',
        'productSkuName' => 'ProductSkuName',
        'projectStatus'  => 'ProjectStatus',
        'supplierAliUid' => 'SupplierAliUid',
        'templateId'     => 'TemplateId',
        'templateType'   => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentStepNo) {
            $res['CurrentStepNo'] = $this->currentStepNo;
        }
        if (null !== $this->customerAliUid) {
            $res['CustomerAliUid'] = $this->customerAliUid;
        }
        if (null !== $this->finalStepNo) {
            $res['FinalStepNo'] = $this->finalStepNo;
        }
        if (null !== $this->finishType) {
            $res['FinishType'] = $this->finishType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }
        if (null !== $this->gmtFinished) {
            $res['GmtFinished'] = $this->gmtFinished;
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
        if (null !== $this->productSkuName) {
            $res['ProductSkuName'] = $this->productSkuName;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->supplierAliUid) {
            $res['SupplierAliUid'] = $this->supplierAliUid;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentStepNo'])) {
            $model->currentStepNo = $map['CurrentStepNo'];
        }
        if (isset($map['CustomerAliUid'])) {
            $model->customerAliUid = $map['CustomerAliUid'];
        }
        if (isset($map['FinalStepNo'])) {
            $model->finalStepNo = $map['FinalStepNo'];
        }
        if (isset($map['FinishType'])) {
            $model->finishType = $map['FinishType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }
        if (isset($map['GmtFinished'])) {
            $model->gmtFinished = $map['GmtFinished'];
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
        if (isset($map['ProductSkuName'])) {
            $model->productSkuName = $map['ProductSkuName'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['SupplierAliUid'])) {
            $model->supplierAliUid = $map['SupplierAliUid'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
