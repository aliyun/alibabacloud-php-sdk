<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudListOnlineAgentRequest extends Model
{
    /**
     * @var string
     */
    public $cnos;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pauseDescription;

    /**
     * @var string
     */
    public $pauseType;

    /**
     * @var string
     */
    public $qnos;

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
    public $stateCode;
    protected $_name = [
        'cnos' => 'Cnos',
        'enterpriseId' => 'EnterpriseId',
        'ownerId' => 'OwnerId',
        'pauseDescription' => 'PauseDescription',
        'pauseType' => 'PauseType',
        'qnos' => 'Qnos',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'stateCode' => 'StateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnos) {
            $res['Cnos'] = $this->cnos;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pauseDescription) {
            $res['PauseDescription'] = $this->pauseDescription;
        }

        if (null !== $this->pauseType) {
            $res['PauseType'] = $this->pauseType;
        }

        if (null !== $this->qnos) {
            $res['Qnos'] = $this->qnos;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
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
        if (isset($map['Cnos'])) {
            $model->cnos = $map['Cnos'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PauseDescription'])) {
            $model->pauseDescription = $map['PauseDescription'];
        }

        if (isset($map['PauseType'])) {
            $model->pauseType = $map['PauseType'];
        }

        if (isset($map['Qnos'])) {
            $model->qnos = $map['Qnos'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }

        return $model;
    }
}
