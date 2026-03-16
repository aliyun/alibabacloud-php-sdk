<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListUsersResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string[]
     */
    public $fullDepartment;

    /**
     * @var string
     */
    public $idpName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'department' => 'Department',
        'email' => 'Email',
        'fullDepartment' => 'FullDepartment',
        'idpName' => 'IdpName',
        'phone' => 'Phone',
        'saseUserId' => 'SaseUserId',
        'status' => 'Status',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->fullDepartment)) {
            Model::validateArray($this->fullDepartment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->fullDepartment) {
            if (\is_array($this->fullDepartment)) {
                $res['FullDepartment'] = [];
                $n1 = 0;
                foreach ($this->fullDepartment as $item1) {
                    $res['FullDepartment'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->idpName) {
            $res['IdpName'] = $this->idpName;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['FullDepartment'])) {
            if (!empty($map['FullDepartment'])) {
                $model->fullDepartment = [];
                $n1 = 0;
                foreach ($map['FullDepartment'] as $item1) {
                    $model->fullDepartment[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IdpName'])) {
            $model->idpName = $map['IdpName'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
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
