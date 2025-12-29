<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\ListContactsResponseBody;

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
     * @var int
     */
    public $main;

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
    public $phoneStatus;
    protected $_name = [
        'contactEmail' => 'ContactEmail',
        'contactId' => 'ContactId',
        'contactName' => 'ContactName',
        'contactPhone' => 'ContactPhone',
        'mailStatus' => 'MailStatus',
        'main' => 'Main',
        'openStatusWarning' => 'OpenStatusWarning',
        'opentAttributionWarning' => 'OpentAttributionWarning',
        'phoneStatus' => 'PhoneStatus',
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

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }

        if (null !== $this->mailStatus) {
            $res['MailStatus'] = $this->mailStatus;
        }

        if (null !== $this->main) {
            $res['Main'] = $this->main;
        }

        if (null !== $this->openStatusWarning) {
            $res['OpenStatusWarning'] = $this->openStatusWarning;
        }

        if (null !== $this->opentAttributionWarning) {
            $res['OpentAttributionWarning'] = $this->opentAttributionWarning;
        }

        if (null !== $this->phoneStatus) {
            $res['PhoneStatus'] = $this->phoneStatus;
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

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }

        if (isset($map['MailStatus'])) {
            $model->mailStatus = $map['MailStatus'];
        }

        if (isset($map['Main'])) {
            $model->main = $map['Main'];
        }

        if (isset($map['OpenStatusWarning'])) {
            $model->openStatusWarning = $map['OpenStatusWarning'];
        }

        if (isset($map['OpentAttributionWarning'])) {
            $model->opentAttributionWarning = $map['OpentAttributionWarning'];
        }

        if (isset($map['PhoneStatus'])) {
            $model->phoneStatus = $map['PhoneStatus'];
        }

        return $model;
    }
}
