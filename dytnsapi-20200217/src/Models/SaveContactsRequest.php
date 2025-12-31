<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Dara\Model;

class SaveContactsRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var int
     */
    public $mailStatus;

    /**
     * @var bool
     */
    public $openStatusWarning;

    /**
     * @var bool
     */
    public $opentAttributionWarning;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $phoneStatus;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'bizType' => 'BizType',
        'contactEmail' => 'ContactEmail',
        'contactName' => 'ContactName',
        'contactPhone' => 'ContactPhone',
        'mailStatus' => 'MailStatus',
        'openStatusWarning' => 'OpenStatusWarning',
        'opentAttributionWarning' => 'OpentAttributionWarning',
        'ownerId' => 'OwnerId',
        'phoneStatus' => 'PhoneStatus',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }

        if (null !== $this->mailStatus) {
            $res['MailStatus'] = $this->mailStatus;
        }

        if (null !== $this->openStatusWarning) {
            $res['OpenStatusWarning'] = $this->openStatusWarning;
        }

        if (null !== $this->opentAttributionWarning) {
            $res['OpentAttributionWarning'] = $this->opentAttributionWarning;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneStatus) {
            $res['PhoneStatus'] = $this->phoneStatus;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }

        if (isset($map['MailStatus'])) {
            $model->mailStatus = $map['MailStatus'];
        }

        if (isset($map['OpenStatusWarning'])) {
            $model->openStatusWarning = $map['OpenStatusWarning'];
        }

        if (isset($map['OpentAttributionWarning'])) {
            $model->opentAttributionWarning = $map['OpentAttributionWarning'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneStatus'])) {
            $model->phoneStatus = $map['PhoneStatus'];
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
