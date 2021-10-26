<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CloseSipAccountRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $partnerId;

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
    public $sipAccountID;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'partnerId'            => 'PartnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sipAccountID'         => 'SipAccountID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sipAccountID) {
            $res['SipAccountID'] = $this->sipAccountID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseSipAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SipAccountID'])) {
            $model->sipAccountID = $map['SipAccountID'];
        }

        return $model;
    }
}
