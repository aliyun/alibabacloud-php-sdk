<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkCreateExtenRequest extends Model
{
    /**
     * @var int
     */
    public $allow;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $extenNumber;

    /**
     * @var int
     */
    public $isDirect;

    /**
     * @var int
     */
    public $jittBuffer;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'allow' => 'Allow',
        'areaCode' => 'AreaCode',
        'enterpriseId' => 'EnterpriseId',
        'extenNumber' => 'ExtenNumber',
        'isDirect' => 'IsDirect',
        'jittBuffer' => 'JittBuffer',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allow) {
            $res['Allow'] = $this->allow;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->extenNumber) {
            $res['ExtenNumber'] = $this->extenNumber;
        }

        if (null !== $this->isDirect) {
            $res['IsDirect'] = $this->isDirect;
        }

        if (null !== $this->jittBuffer) {
            $res['JittBuffer'] = $this->jittBuffer;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Allow'])) {
            $model->allow = $map['Allow'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['ExtenNumber'])) {
            $model->extenNumber = $map['ExtenNumber'];
        }

        if (isset($map['IsDirect'])) {
            $model->isDirect = $map['IsDirect'];
        }

        if (isset($map['JittBuffer'])) {
            $model->jittBuffer = $map['JittBuffer'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
