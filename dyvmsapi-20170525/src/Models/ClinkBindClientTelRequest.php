<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkBindClientTelRequest extends Model
{
    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $isBind;

    /**
     * @var int
     */
    public $isReserveTel;

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

    /**
     * @var string
     */
    public $tel;
    protected $_name = [
        'cno' => 'Cno',
        'enterpriseId' => 'EnterpriseId',
        'isBind' => 'IsBind',
        'isReserveTel' => 'IsReserveTel',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tel' => 'Tel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->isBind) {
            $res['IsBind'] = $this->isBind;
        }

        if (null !== $this->isReserveTel) {
            $res['IsReserveTel'] = $this->isReserveTel;
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

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
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
        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['IsBind'])) {
            $model->isBind = $map['IsBind'];
        }

        if (isset($map['IsReserveTel'])) {
            $model->isReserveTel = $map['IsReserveTel'];
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

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        return $model;
    }
}
