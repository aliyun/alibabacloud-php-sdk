<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class SaveContactsNewRequest extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $openPkgWarning;

    /**
     * @var int
     */
    public $openPreventBrushWarning;

    /**
     * @var int
     */
    public $openSendWarning;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $receiveSignTemplateAuditResult;

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
    public $verificationCode;
    protected $_name = [
        'email' => 'Email',
        'id' => 'Id',
        'name' => 'Name',
        'openPkgWarning' => 'OpenPkgWarning',
        'openPreventBrushWarning' => 'OpenPreventBrushWarning',
        'openSendWarning' => 'OpenSendWarning',
        'ownerId' => 'OwnerId',
        'phone' => 'Phone',
        'prodCode' => 'ProdCode',
        'receiveSignTemplateAuditResult' => 'ReceiveSignTemplateAuditResult',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'verificationCode' => 'VerificationCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->openPkgWarning) {
            $res['OpenPkgWarning'] = $this->openPkgWarning;
        }

        if (null !== $this->openPreventBrushWarning) {
            $res['OpenPreventBrushWarning'] = $this->openPreventBrushWarning;
        }

        if (null !== $this->openSendWarning) {
            $res['OpenSendWarning'] = $this->openSendWarning;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->receiveSignTemplateAuditResult) {
            $res['ReceiveSignTemplateAuditResult'] = $this->receiveSignTemplateAuditResult;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpenPkgWarning'])) {
            $model->openPkgWarning = $map['OpenPkgWarning'];
        }

        if (isset($map['OpenPreventBrushWarning'])) {
            $model->openPreventBrushWarning = $map['OpenPreventBrushWarning'];
        }

        if (isset($map['OpenSendWarning'])) {
            $model->openSendWarning = $map['OpenSendWarning'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['ReceiveSignTemplateAuditResult'])) {
            $model->receiveSignTemplateAuditResult = $map['ReceiveSignTemplateAuditResult'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
