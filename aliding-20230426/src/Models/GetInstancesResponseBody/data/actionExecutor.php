<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody\data\actionExecutor\name;

class actionExecutor extends Model
{
    /**
     * @var string
     */
    public $deptName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var name
     */
    public $name;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'deptName' => 'DeptName',
        'email' => 'Email',
        'name' => 'Name',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->name) {
            $this->name->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deptName) {
            $res['DeptName'] = $this->deptName;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->name) {
            $res['Name'] = null !== $this->name ? $this->name->toArray($noStream) : $this->name;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DeptName'])) {
            $model->deptName = $map['DeptName'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Name'])) {
            $model->name = name::fromMap($map['Name']);
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
