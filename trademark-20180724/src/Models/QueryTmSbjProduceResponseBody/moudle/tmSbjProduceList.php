<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceResponseBody\moudle;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTmSbjProduceResponseBody\moudle\tmSbjProduceList\extend;
use AlibabaCloud\Tea\Model;

class tmSbjProduceList extends Model
{
    /**
     * @var int
     */
    public $bitFlag;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $classificationCode;

    /**
     * @var string
     */
    public $deleteFlag;

    /**
     * @var string
     */
    public $env;

    /**
     * @var extend
     */
    public $extend;

    /**
     * @var int
     */
    public $loaId;

    /**
     * @var string
     */
    public $mainOrderId;

    /**
     * @var int
     */
    public $materialId;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $riskSource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $submitAuditTime;

    /**
     * @var string
     */
    public $submitStatus;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var int
     */
    public $submitTimes;

    /**
     * @var string
     */
    public $tmCode;

    /**
     * @var string
     */
    public $tmIcon;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bitFlag'            => 'BitFlag',
        'bizId'              => 'BizId',
        'classificationCode' => 'ClassificationCode',
        'deleteFlag'         => 'DeleteFlag',
        'env'                => 'Env',
        'extend'             => 'Extend',
        'loaId'              => 'LoaId',
        'mainOrderId'        => 'MainOrderId',
        'materialId'         => 'MaterialId',
        'materialName'       => 'MaterialName',
        'orderId'            => 'OrderId',
        'orderPrice'         => 'OrderPrice',
        'principalKey'       => 'PrincipalKey',
        'principalName'      => 'PrincipalName',
        'productType'        => 'ProductType',
        'riskSource'         => 'RiskSource',
        'status'             => 'Status',
        'submitAuditTime'    => 'SubmitAuditTime',
        'submitStatus'       => 'SubmitStatus',
        'submitTime'         => 'SubmitTime',
        'submitTimes'        => 'SubmitTimes',
        'tmCode'             => 'TmCode',
        'tmIcon'             => 'TmIcon',
        'tmName'             => 'TmName',
        'type'               => 'Type',
        'userId'             => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitFlag) {
            $res['BitFlag'] = $this->bitFlag;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->classificationCode) {
            $res['ClassificationCode'] = $this->classificationCode;
        }
        if (null !== $this->deleteFlag) {
            $res['DeleteFlag'] = $this->deleteFlag;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->extend) {
            $res['Extend'] = null !== $this->extend ? $this->extend->toMap() : null;
        }
        if (null !== $this->loaId) {
            $res['LoaId'] = $this->loaId;
        }
        if (null !== $this->mainOrderId) {
            $res['MainOrderId'] = $this->mainOrderId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->riskSource) {
            $res['RiskSource'] = $this->riskSource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitAuditTime) {
            $res['SubmitAuditTime'] = $this->submitAuditTime;
        }
        if (null !== $this->submitStatus) {
            $res['SubmitStatus'] = $this->submitStatus;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->submitTimes) {
            $res['SubmitTimes'] = $this->submitTimes;
        }
        if (null !== $this->tmCode) {
            $res['TmCode'] = $this->tmCode;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmSbjProduceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BitFlag'])) {
            $model->bitFlag = $map['BitFlag'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ClassificationCode'])) {
            $model->classificationCode = $map['ClassificationCode'];
        }
        if (isset($map['DeleteFlag'])) {
            $model->deleteFlag = $map['DeleteFlag'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Extend'])) {
            $model->extend = extend::fromMap($map['Extend']);
        }
        if (isset($map['LoaId'])) {
            $model->loaId = $map['LoaId'];
        }
        if (isset($map['MainOrderId'])) {
            $model->mainOrderId = $map['MainOrderId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RiskSource'])) {
            $model->riskSource = $map['RiskSource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitAuditTime'])) {
            $model->submitAuditTime = $map['SubmitAuditTime'];
        }
        if (isset($map['SubmitStatus'])) {
            $model->submitStatus = $map['SubmitStatus'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['SubmitTimes'])) {
            $model->submitTimes = $map['SubmitTimes'];
        }
        if (isset($map['TmCode'])) {
            $model->tmCode = $map['TmCode'];
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
