<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\Tea\Model;

class BindResourceRequest extends Model
{
    /**
     * @var string
     */
    public $asrModelId;

    /**
     * @var bool
     */
    public $asrStatus;

    /**
     * @var string
     */
    public $axnExtensionB;

    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $expTime;

    /**
     * @var bool
     */
    public $isRecord;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneNoA;

    /**
     * @var string
     */
    public $phoneNoB;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $resType;

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
    public $secretNo;
    protected $_name = [
        'asrModelId'           => 'AsrModelId',
        'asrStatus'            => 'AsrStatus',
        'axnExtensionB'        => 'AxnExtensionB',
        'billId'               => 'BillId',
        'expTime'              => 'ExpTime',
        'isRecord'             => 'IsRecord',
        'ownerId'              => 'OwnerId',
        'phoneNoA'             => 'PhoneNoA',
        'phoneNoB'             => 'PhoneNoB',
        'prodCode'             => 'ProdCode',
        'resType'              => 'ResType',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secretNo'             => 'SecretNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrModelId) {
            $res['AsrModelId'] = $this->asrModelId;
        }
        if (null !== $this->asrStatus) {
            $res['AsrStatus'] = $this->asrStatus;
        }
        if (null !== $this->axnExtensionB) {
            $res['AxnExtensionB'] = $this->axnExtensionB;
        }
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->expTime) {
            $res['ExpTime'] = $this->expTime;
        }
        if (null !== $this->isRecord) {
            $res['IsRecord'] = $this->isRecord;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }
        if (null !== $this->phoneNoB) {
            $res['PhoneNoB'] = $this->phoneNoB;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrModelId'])) {
            $model->asrModelId = $map['AsrModelId'];
        }
        if (isset($map['AsrStatus'])) {
            $model->asrStatus = $map['AsrStatus'];
        }
        if (isset($map['AxnExtensionB'])) {
            $model->axnExtensionB = $map['AxnExtensionB'];
        }
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['ExpTime'])) {
            $model->expTime = $map['ExpTime'];
        }
        if (isset($map['IsRecord'])) {
            $model->isRecord = $map['IsRecord'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }
        if (isset($map['PhoneNoB'])) {
            $model->phoneNoB = $map['PhoneNoB'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }

        return $model;
    }
}
