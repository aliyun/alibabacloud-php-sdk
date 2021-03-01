<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class TransformClusterMemberRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $targetClusterId;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'instanceIds'     => 'InstanceIds',
        'targetClusterId' => 'TargetClusterId',
        'password'        => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->targetClusterId) {
            $res['TargetClusterId'] = $this->targetClusterId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformClusterMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['TargetClusterId'])) {
            $model->targetClusterId = $map['TargetClusterId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
