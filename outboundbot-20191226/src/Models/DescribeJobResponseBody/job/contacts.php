<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @example db3db762-e421-44c9-9a01-cb423470757c
     *
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $honorific;

    /**
     * @example 72dcd26b-f12d-4c27-b3af-18f6aed5b160
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1358****8888
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 2fa6bac3-06da-4315-82ab-72d6fd3a6f34
     *
     * @var string
     */
    public $referenceId;

    /**
     * @example *
     *
     * @var string
     */
    public $role;

    /**
     * @example Available
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'contactId'   => 'ContactId',
        'contactName' => 'ContactName',
        'honorific'   => 'Honorific',
        'jobId'       => 'JobId',
        'phoneNumber' => 'PhoneNumber',
        'referenceId' => 'ReferenceId',
        'role'        => 'Role',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->honorific) {
            $res['Honorific'] = $this->honorific;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Honorific'])) {
            $model->honorific = $map['Honorific'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
