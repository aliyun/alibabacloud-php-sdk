<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListClientUsersRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 10785
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example johndoe@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description This parameter is required.
     *
     * @example 1071
     *
     * @var string
     */
    public $idpConfigId;

    /**
     * @example 18980976559
     *
     * @var string
     */
    public $mobileNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'departmentId' => 'DepartmentId',
        'email'        => 'Email',
        'idpConfigId'  => 'IdpConfigId',
        'mobileNumber' => 'MobileNumber',
        'pageSize'     => 'PageSize',
        'status'       => 'Status',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
