<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CopyVerifySchemeRequest extends Model
{
    /**
     * @var int
     */
    public $cmApiCode;

    /**
     * @var bool
     */
    public $cmNewFlag;

    /**
     * @var int
     */
    public $ctApiCode;

    /**
     * @var bool
     */
    public $ctNewFlag;

    /**
     * @var int
     */
    public $cuApiCode;

    /**
     * @var bool
     */
    public $cuNewFlag;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $modelSceneCode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cmApiCode' => 'CmApiCode',
        'cmNewFlag' => 'CmNewFlag',
        'ctApiCode' => 'CtApiCode',
        'ctNewFlag' => 'CtNewFlag',
        'cuApiCode' => 'CuApiCode',
        'cuNewFlag' => 'CuNewFlag',
        'email' => 'Email',
        'modelSceneCode' => 'ModelSceneCode',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmApiCode) {
            $res['CmApiCode'] = $this->cmApiCode;
        }

        if (null !== $this->cmNewFlag) {
            $res['CmNewFlag'] = $this->cmNewFlag;
        }

        if (null !== $this->ctApiCode) {
            $res['CtApiCode'] = $this->ctApiCode;
        }

        if (null !== $this->ctNewFlag) {
            $res['CtNewFlag'] = $this->ctNewFlag;
        }

        if (null !== $this->cuApiCode) {
            $res['CuApiCode'] = $this->cuApiCode;
        }

        if (null !== $this->cuNewFlag) {
            $res['CuNewFlag'] = $this->cuNewFlag;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->modelSceneCode) {
            $res['ModelSceneCode'] = $this->modelSceneCode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['CmApiCode'])) {
            $model->cmApiCode = $map['CmApiCode'];
        }

        if (isset($map['CmNewFlag'])) {
            $model->cmNewFlag = $map['CmNewFlag'];
        }

        if (isset($map['CtApiCode'])) {
            $model->ctApiCode = $map['CtApiCode'];
        }

        if (isset($map['CtNewFlag'])) {
            $model->ctNewFlag = $map['CtNewFlag'];
        }

        if (isset($map['CuApiCode'])) {
            $model->cuApiCode = $map['CuApiCode'];
        }

        if (isset($map['CuNewFlag'])) {
            $model->cuNewFlag = $map['CuNewFlag'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['ModelSceneCode'])) {
            $model->modelSceneCode = $map['ModelSceneCode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
