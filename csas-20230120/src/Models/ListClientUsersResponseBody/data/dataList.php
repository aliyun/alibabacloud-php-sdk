<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListClientUsersResponseBody\data;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListClientUsersResponseBody\data\dataList\department;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var department
     */
    public $department;

    /**
     * @example 10800
     *
     * @var string
     */
    public $departmentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example johndoe@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1970
     *
     * @var string
     */
    public $id;

    /**
     * @example 1026
     *
     * @var string
     */
    public $idpConfigId;

    /**
     * @example 15800820468
     *
     * @var string
     */
    public $mobileNumber;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $status;

    /**
     * @example su_dead7216****
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'department'   => 'Department',
        'departmentId' => 'DepartmentId',
        'description'  => 'Description',
        'email'        => 'Email',
        'id'           => 'Id',
        'idpConfigId'  => 'IdpConfigId',
        'mobileNumber' => 'MobileNumber',
        'status'       => 'Status',
        'userId'       => 'UserId',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = null !== $this->department ? $this->department->toMap() : null;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Department'])) {
            $model->department = department::fromMap($map['Department']);
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
