<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class VerifyLogisticsSmsMailNoRequest extends Model
{
    /**
     * @var string
     */
    public $expressCompanyCode;

    /**
     * @var string
     */
    public $mailNo;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $platformCompanyCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'expressCompanyCode' => 'ExpressCompanyCode',
        'mailNo' => 'MailNo',
        'ownerId' => 'OwnerId',
        'platformCompanyCode' => 'PlatformCompanyCode',
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
        if (null !== $this->expressCompanyCode) {
            $res['ExpressCompanyCode'] = $this->expressCompanyCode;
        }

        if (null !== $this->mailNo) {
            $res['MailNo'] = $this->mailNo;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->platformCompanyCode) {
            $res['PlatformCompanyCode'] = $this->platformCompanyCode;
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
        if (isset($map['ExpressCompanyCode'])) {
            $model->expressCompanyCode = $map['ExpressCompanyCode'];
        }

        if (isset($map['MailNo'])) {
            $model->mailNo = $map['MailNo'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlatformCompanyCode'])) {
            $model->platformCompanyCode = $map['PlatformCompanyCode'];
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
