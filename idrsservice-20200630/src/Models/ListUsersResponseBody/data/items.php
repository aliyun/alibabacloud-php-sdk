<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListUsersResponseBody\data;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListUsersResponseBody\data\items\departments;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var departments[]
     */
    public $departments;

    /**
     * @example a@a.com
     *
     * @var string
     */
    public $email;

    /**
     * @description ID
     *
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 186000000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example xxx
     *
     * @var string
     */
    public $ramUsername;

    /**
     * @example admin
     *
     * @var string
     */
    public $role;

    /**
     * @example ram
     *
     * @var string
     */
    public $source;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example xxx
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'createdAt'   => 'CreatedAt',
        'departments' => 'Departments',
        'email'       => 'Email',
        'id'          => 'Id',
        'name'        => 'Name',
        'phoneNumber' => 'PhoneNumber',
        'ramUsername' => 'RamUsername',
        'role'        => 'Role',
        'source'      => 'Source',
        'updatedAt'   => 'UpdatedAt',
        'username'    => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->ramUsername) {
            $res['RamUsername'] = $this->ramUsername;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Departments'])) {
            if (!empty($map['Departments'])) {
                $model->departments = [];
                $n                  = 0;
                foreach ($map['Departments'] as $item) {
                    $model->departments[$n++] = null !== $item ? departments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['RamUsername'])) {
            $model->ramUsername = $map['RamUsername'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
