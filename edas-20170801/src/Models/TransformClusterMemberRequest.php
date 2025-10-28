<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class TransformClusterMemberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $targetClusterId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'password' => 'Password',
        'targetClusterId' => 'TargetClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->targetClusterId) {
            $res['TargetClusterId'] = $this->targetClusterId;
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
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['TargetClusterId'])) {
            $model->targetClusterId = $map['TargetClusterId'];
        }

        return $model;
    }
}
