<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces\firstClassification;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces\flags;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces\renewResponse;
use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationsResponseBody\data\tmProduces\thirdClassification;
use AlibabaCloud\Tea\Model;

class tmProduces extends Model
{
    /**
     * @var string
     */
    public $agreementId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var firstClassification
     */
    public $firstClassification;

    /**
     * @var flags
     */
    public $flags;

    /**
     * @var string
     */
    public $loaUrl;

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
    public $note;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var renewResponse
     */
    public $renewResponse;

    /**
     * @var float
     */
    public $servicePrice;

    /**
     * @var bool
     */
    public $showGoToDefendButton;

    /**
     * @var int
     */
    public $specification;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $submitAuditTime;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var int
     */
    public $supplementId;

    /**
     * @var int
     */
    public $supplementStatus;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var thirdClassification
     */
    public $thirdClassification;

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
    public $tmNumber;

    /**
     * @var float
     */
    public $totalPrice;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agreementId'          => 'AgreementId',
        'bizId'                => 'BizId',
        'createTime'           => 'CreateTime',
        'firstClassification'  => 'FirstClassification',
        'flags'                => 'Flags',
        'loaUrl'               => 'LoaUrl',
        'materialId'           => 'MaterialId',
        'materialName'         => 'MaterialName',
        'note'                 => 'Note',
        'orderId'              => 'OrderId',
        'orderPrice'           => 'OrderPrice',
        'principalName'        => 'PrincipalName',
        'remark'               => 'Remark',
        'renewResponse'        => 'RenewResponse',
        'servicePrice'         => 'ServicePrice',
        'showGoToDefendButton' => 'ShowGoToDefendButton',
        'specification'        => 'Specification',
        'status'               => 'Status',
        'submitAuditTime'      => 'SubmitAuditTime',
        'submitTime'           => 'SubmitTime',
        'supplementId'         => 'SupplementId',
        'supplementStatus'     => 'SupplementStatus',
        'systemVersion'        => 'SystemVersion',
        'thirdClassification'  => 'ThirdClassification',
        'tmIcon'               => 'TmIcon',
        'tmName'               => 'TmName',
        'tmNumber'             => 'TmNumber',
        'totalPrice'           => 'TotalPrice',
        'type'                 => 'Type',
        'updateTime'           => 'UpdateTime',
        'userId'               => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementId) {
            $res['AgreementId'] = $this->agreementId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->firstClassification) {
            $res['FirstClassification'] = null !== $this->firstClassification ? $this->firstClassification->toMap() : null;
        }
        if (null !== $this->flags) {
            $res['Flags'] = null !== $this->flags ? $this->flags->toMap() : null;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->renewResponse) {
            $res['RenewResponse'] = null !== $this->renewResponse ? $this->renewResponse->toMap() : null;
        }
        if (null !== $this->servicePrice) {
            $res['ServicePrice'] = $this->servicePrice;
        }
        if (null !== $this->showGoToDefendButton) {
            $res['ShowGoToDefendButton'] = $this->showGoToDefendButton;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitAuditTime) {
            $res['SubmitAuditTime'] = $this->submitAuditTime;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }
        if (null !== $this->supplementStatus) {
            $res['SupplementStatus'] = $this->supplementStatus;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->thirdClassification) {
            $res['ThirdClassification'] = null !== $this->thirdClassification ? $this->thirdClassification->toMap() : null;
        }
        if (null !== $this->tmIcon) {
            $res['TmIcon'] = $this->tmIcon;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmNumber) {
            $res['TmNumber'] = $this->tmNumber;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tmProduces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementId'])) {
            $model->agreementId = $map['AgreementId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FirstClassification'])) {
            $model->firstClassification = firstClassification::fromMap($map['FirstClassification']);
        }
        if (isset($map['Flags'])) {
            $model->flags = flags::fromMap($map['Flags']);
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RenewResponse'])) {
            $model->renewResponse = renewResponse::fromMap($map['RenewResponse']);
        }
        if (isset($map['ServicePrice'])) {
            $model->servicePrice = $map['ServicePrice'];
        }
        if (isset($map['ShowGoToDefendButton'])) {
            $model->showGoToDefendButton = $map['ShowGoToDefendButton'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitAuditTime'])) {
            $model->submitAuditTime = $map['SubmitAuditTime'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }
        if (isset($map['SupplementStatus'])) {
            $model->supplementStatus = $map['SupplementStatus'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['ThirdClassification'])) {
            $model->thirdClassification = thirdClassification::fromMap($map['ThirdClassification']);
        }
        if (isset($map['TmIcon'])) {
            $model->tmIcon = $map['TmIcon'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmNumber'])) {
            $model->tmNumber = $map['TmNumber'];
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
