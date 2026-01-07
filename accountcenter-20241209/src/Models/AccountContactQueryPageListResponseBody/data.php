<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\AccountContactQueryPageListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactMobile;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPosition;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var bool
     */
    public $emailConfirmed;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var bool
     */
    public $mobileConfirmed;

    /**
     * @var bool
     */
    public $sharedContact;

    /**
     * @var int
     */
    public $updateDate;

    /**
     * @var string
     */
    public $updateUser;
    protected $_name = [
        'contactEmail' => 'ContactEmail',
        'contactId' => 'ContactId',
        'contactMobile' => 'ContactMobile',
        'contactName' => 'ContactName',
        'contactPosition' => 'ContactPosition',
        'customerId' => 'CustomerId',
        'emailConfirmed' => 'EmailConfirmed',
        'entityId' => 'EntityId',
        'entityType' => 'EntityType',
        'mobileConfirmed' => 'MobileConfirmed',
        'sharedContact' => 'SharedContact',
        'updateDate' => 'UpdateDate',
        'updateUser' => 'UpdateUser',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactMobile) {
            $res['ContactMobile'] = $this->contactMobile;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->contactPosition) {
            $res['ContactPosition'] = $this->contactPosition;
        }

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->emailConfirmed) {
            $res['EmailConfirmed'] = $this->emailConfirmed;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->mobileConfirmed) {
            $res['MobileConfirmed'] = $this->mobileConfirmed;
        }

        if (null !== $this->sharedContact) {
            $res['SharedContact'] = $this->sharedContact;
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
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
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactMobile'])) {
            $model->contactMobile = $map['ContactMobile'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['ContactPosition'])) {
            $model->contactPosition = $map['ContactPosition'];
        }

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['EmailConfirmed'])) {
            $model->emailConfirmed = $map['EmailConfirmed'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['MobileConfirmed'])) {
            $model->mobileConfirmed = $map['MobileConfirmed'];
        }

        if (isset($map['SharedContact'])) {
            $model->sharedContact = $map['SharedContact'];
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }

        return $model;
    }
}
