<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdResponseBody\job;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $honorific;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $referenceId;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'contactId'   => 'ContactId',
        'state'       => 'State',
        'jobId'       => 'JobId',
        'honorific'   => 'Honorific',
        'contactName' => 'ContactName',
        'role'        => 'Role',
        'referenceId' => 'ReferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->honorific) {
            $res['Honorific'] = $this->honorific;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
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
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Honorific'])) {
            $model->honorific = $map['Honorific'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        return $model;
    }
}
