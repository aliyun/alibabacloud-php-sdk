<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactsResponseBody;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @example 2023-03-27 17:19:21
     *
     * @var string
     */
    public $associatedDate;

    /**
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example 2023-03-27 17:19:21
     *
     * @var string
     */
    public $createDate;

    /**
     * @example someone***@example.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @var string[]
     */
    public $members;

    /**
     * @var string[]
     */
    public $messageTypes;

    /**
     * @example tom
     *
     * @var string
     */
    public $name;

    /**
     * @example 86-139****1234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example TechnicalDirector
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'associatedDate' => 'AssociatedDate',
        'contactId'      => 'ContactId',
        'createDate'     => 'CreateDate',
        'emailAddress'   => 'EmailAddress',
        'members'        => 'Members',
        'messageTypes'   => 'MessageTypes',
        'name'           => 'Name',
        'phoneNumber'    => 'PhoneNumber',
        'status'         => 'Status',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedDate) {
            $res['AssociatedDate'] = $this->associatedDate;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }
        if (null !== $this->members) {
            $res['Members'] = $this->members;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedDate'])) {
            $model->associatedDate = $map['AssociatedDate'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = $map['Members'];
            }
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
