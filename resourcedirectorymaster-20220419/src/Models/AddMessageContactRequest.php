<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class AddMessageContactRequest extends Model
{
    /**
     * @description The email address of the contact.
     *
     * After you specify an email address, you need to call [SendEmailVerificationForMessageContact](~~SendEmailVerificationForMessageContact~~) to send verification information to the email address. After the verification is passed, the email address takes effect.
     *
     * This parameter is required.
     *
     * @example someone***@example.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @description The types of messages received by the contact.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $messageTypes;

    /**
     * @description The name of the contact.
     *
     * The name must be unique in your resource directory.
     *
     * The name must be 2 to 12 characters in length and can contain only letters.
     *
     * This parameter is required.
     *
     * @example tom
     *
     * @var string
     */
    public $name;

    /**
     * @description The mobile phone number of the contact.
     *
     * Specify the mobile phone number in the `<Country code>-<Mobile phone number>` format.
     *
     * > Only mobile phone numbers in the `86-<Mobile phone number>` format in the Chinese mainland are supported.
     *
     * After you specify a mobile phone number, you need to call [SendPhoneVerificationForMessageContact](~~SendPhoneVerificationForMessageContact~~) to send verification information to the mobile phone number. After the verification is passed, the mobile phone number takes effect.
     *
     * @example 86-139****1234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The job title of the contact.
     *
     * Valid values:
     *
     *   FinanceDirector
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   TechnicalDirector
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   MaintenanceDirector
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   CEO
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   ProjectDirector
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Other
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * This parameter is required.
     *
     * @example TechnicalDirector
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'emailAddress' => 'EmailAddress',
        'messageTypes' => 'MessageTypes',
        'name' => 'Name',
        'phoneNumber' => 'PhoneNumber',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }
        if (null !== $this->messageTypes) {
            $res['MessageTypes'] = $this->messageTypes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMessageContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }
        if (isset($map['MessageTypes'])) {
            if (!empty($map['MessageTypes'])) {
                $model->messageTypes = $map['MessageTypes'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
