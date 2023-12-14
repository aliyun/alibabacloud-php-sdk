<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody\data;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody\data\originator\name;
use AlibabaCloud\Tea\Model;

class originator extends Model
{
    /**
     * @example 开发部
     *
     * @var string
     */
    public $deptName;

    /**
     * @example abc@alimail.com
     *
     * @var string
     */
    public $email;

    /**
     * @var name
     */
    public $name;

    /**
     * @example manager123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'deptName' => 'DeptName',
        'email'    => 'Email',
        'name'     => 'Name',
        'userId'   => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deptName) {
            $res['DeptName'] = $this->deptName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->name) {
            $res['Name'] = null !== $this->name ? $this->name->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originator
     */
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
