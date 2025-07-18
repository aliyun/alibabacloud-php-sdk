<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class OpenStructSaseUser extends Model
{
    /**
     * @var int
     */
    public $createTimeUnix;

    /**
     * @var IdpCustomField[]
     */
    public $customFields;

    /**
     * @var OpenStructSaseDepartment[]
     */
    public $departments;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $idpConfigId;

    /**
     * @var int
     */
    public $leaveTimeUnix;

    /**
     * @var int
     */
    public $loginTimeUnix;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $saseUserStatus;

    /**
     * @var int
     */
    public $syncTimeUnix;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $updateTimeUnix;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workStatus;
    protected $_name = [
        'createTimeUnix' => 'CreateTimeUnix',
        'customFields' => 'CustomFields',
        'departments' => 'Departments',
        'email' => 'Email',
        'idpConfigId' => 'IdpConfigId',
        'leaveTimeUnix' => 'LeaveTimeUnix',
        'loginTimeUnix' => 'LoginTimeUnix',
        'saseUserId' => 'SaseUserId',
        'saseUserStatus' => 'SaseUserStatus',
        'syncTimeUnix' => 'SyncTimeUnix',
        'telephone' => 'Telephone',
        'title' => 'Title',
        'updateTimeUnix' => 'UpdateTimeUnix',
        'username' => 'Username',
        'workStatus' => 'WorkStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeUnix) {
            $res['CreateTimeUnix'] = $this->createTimeUnix;
        }
        if (null !== $this->customFields) {
            $res['CustomFields'] = [];
            if (null !== $this->customFields && \is_array($this->customFields)) {
                $n = 0;
                foreach ($this->customFields as $item) {
                    $res['CustomFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->departments) {
            $res['Departments'] = [];
            if (null !== $this->departments && \is_array($this->departments)) {
                $n = 0;
                foreach ($this->departments as $item) {
                    $res['Departments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }
        if (null !== $this->leaveTimeUnix) {
            $res['LeaveTimeUnix'] = $this->leaveTimeUnix;
        }
        if (null !== $this->loginTimeUnix) {
            $res['LoginTimeUnix'] = $this->loginTimeUnix;
        }
        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }
        if (null !== $this->saseUserStatus) {
            $res['SaseUserStatus'] = $this->saseUserStatus;
        }
        if (null !== $this->syncTimeUnix) {
            $res['SyncTimeUnix'] = $this->syncTimeUnix;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTimeUnix) {
            $res['UpdateTimeUnix'] = $this->updateTimeUnix;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workStatus) {
            $res['WorkStatus'] = $this->workStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenStructSaseUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeUnix'])) {
            $model->createTimeUnix = $map['CreateTimeUnix'];
        }
        if (isset($map['CustomFields'])) {
            if (!empty($map['CustomFields'])) {
                $model->customFields = [];
                $n = 0;
                foreach ($map['CustomFields'] as $item) {
                    $model->customFields[$n++] = null !== $item ? IdpCustomField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = [];
                $n = 0;
                foreach ($map['Departments'] as $item) {
                    $model->departments[$n++] = null !== $item ? OpenStructSaseDepartment::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }
        if (isset($map['LeaveTimeUnix'])) {
            $model->leaveTimeUnix = $map['LeaveTimeUnix'];
        }
        if (isset($map['LoginTimeUnix'])) {
            $model->loginTimeUnix = $map['LoginTimeUnix'];
        }
        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }
        if (isset($map['SaseUserStatus'])) {
            $model->saseUserStatus = $map['SaseUserStatus'];
        }
        if (isset($map['SyncTimeUnix'])) {
            $model->syncTimeUnix = $map['SyncTimeUnix'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTimeUnix'])) {
            $model->updateTimeUnix = $map['UpdateTimeUnix'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkStatus'])) {
            $model->workStatus = $map['WorkStatus'];
        }

        return $model;
    }
}
