<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationContactsResponseBody\data;

use AlibabaCloud\Dara\Model;

class contactInfoList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var bool
     */
    public $bindContact;

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
     * @var bool
     */
    public $emailConfirmed;

    /**
     * @var bool
     */
    public $mobileConfirmed;

    /**
     * @var string
     */
    public $position;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bindContact' => 'BindContact',
        'contactEmail' => 'ContactEmail',
        'contactId' => 'ContactId',
        'contactMobile' => 'ContactMobile',
        'contactName' => 'ContactName',
        'emailConfirmed' => 'EmailConfirmed',
        'mobileConfirmed' => 'MobileConfirmed',
        'position' => 'Position',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bindContact) {
            $res['BindContact'] = $this->bindContact;
        }

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

        if (null !== $this->emailConfirmed) {
            $res['EmailConfirmed'] = $this->emailConfirmed;
        }

        if (null !== $this->mobileConfirmed) {
            $res['MobileConfirmed'] = $this->mobileConfirmed;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BindContact'])) {
            $model->bindContact = $map['BindContact'];
        }

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

        if (isset($map['EmailConfirmed'])) {
            $model->emailConfirmed = $map['EmailConfirmed'];
        }

        if (isset($map['MobileConfirmed'])) {
            $model->mobileConfirmed = $map['MobileConfirmed'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
