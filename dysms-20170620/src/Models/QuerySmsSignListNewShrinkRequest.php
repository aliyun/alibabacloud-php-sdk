<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsSignListNewShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $aggregatedRegisterStatus;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $isGlobeSign;

    /**
     * @var string
     */
    public $operatorCodesShrink;

    /**
     * @var int
     */
    public $operatorRegisterStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $qualificationName;

    /**
     * @var int
     */
    public $registerResult;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $signSource;
    protected $_name = [
        'aggregatedRegisterStatus' => 'AggregatedRegisterStatus',
        'auditState' => 'AuditState',
        'bizType' => 'BizType',
        'isGlobeSign' => 'IsGlobeSign',
        'operatorCodesShrink' => 'OperatorCodes',
        'operatorRegisterStatus' => 'OperatorRegisterStatus',
        'ownerId' => 'OwnerId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'prodCode' => 'ProdCode',
        'qualificationName' => 'QualificationName',
        'registerResult' => 'RegisterResult',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'serviceType' => 'ServiceType',
        'signName' => 'SignName',
        'signSource' => 'SignSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatedRegisterStatus) {
            $res['AggregatedRegisterStatus'] = $this->aggregatedRegisterStatus;
        }

        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->isGlobeSign) {
            $res['IsGlobeSign'] = $this->isGlobeSign;
        }

        if (null !== $this->operatorCodesShrink) {
            $res['OperatorCodes'] = $this->operatorCodesShrink;
        }

        if (null !== $this->operatorRegisterStatus) {
            $res['OperatorRegisterStatus'] = $this->operatorRegisterStatus;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->qualificationName) {
            $res['QualificationName'] = $this->qualificationName;
        }

        if (null !== $this->registerResult) {
            $res['RegisterResult'] = $this->registerResult;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signSource) {
            $res['SignSource'] = $this->signSource;
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
        if (isset($map['AggregatedRegisterStatus'])) {
            $model->aggregatedRegisterStatus = $map['AggregatedRegisterStatus'];
        }

        if (isset($map['AuditState'])) {
            $model->auditState = $map['AuditState'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['IsGlobeSign'])) {
            $model->isGlobeSign = $map['IsGlobeSign'];
        }

        if (isset($map['OperatorCodes'])) {
            $model->operatorCodesShrink = $map['OperatorCodes'];
        }

        if (isset($map['OperatorRegisterStatus'])) {
            $model->operatorRegisterStatus = $map['OperatorRegisterStatus'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['QualificationName'])) {
            $model->qualificationName = $map['QualificationName'];
        }

        if (isset($map['RegisterResult'])) {
            $model->registerResult = $map['RegisterResult'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }

        return $model;
    }
}
