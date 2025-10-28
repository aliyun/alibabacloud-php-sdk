<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class InsertClusterMemberRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'clusterId' => 'clusterId',
        'instanceIds' => 'instanceIds',
        'password' => 'password',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['instanceIds'])) {
            $model->instanceIds = $map['instanceIds'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}
