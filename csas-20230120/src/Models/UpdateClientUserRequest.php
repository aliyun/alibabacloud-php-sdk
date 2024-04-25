<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateClientUserRequest extends Model
{
    /**
     * @example 10701
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
     * @example 20644
     *
     * @var string
     */
    public $id;

    /**
     * @example 13641966835
     *
     * @var string
     */
    public $mobileNumber;
    protected $_name = [
        'departmentId' => 'DepartmentId',
        'description'  => 'Description',
        'email'        => 'Email',
        'id'           => 'Id',
        'mobileNumber' => 'MobileNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClientUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }

        return $model;
    }
}
