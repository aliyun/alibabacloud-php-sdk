<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListContactResponseBody;

use AlibabaCloud\Dara\Model;

class contactList extends Model
{
    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $emailStatus;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $mobileStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'contactId' => 'ContactId',
        'email' => 'Email',
        'emailStatus' => 'EmailStatus',
        'mobile' => 'Mobile',
        'mobileStatus' => 'MobileStatus',
        'name' => 'Name',
        'webhooks' => 'Webhooks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->emailStatus) {
            $res['EmailStatus'] = $this->emailStatus;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->mobileStatus) {
            $res['MobileStatus'] = $this->mobileStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EmailStatus'])) {
            $model->emailStatus = $map['EmailStatus'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['MobileStatus'])) {
            $model->mobileStatus = $map['MobileStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
