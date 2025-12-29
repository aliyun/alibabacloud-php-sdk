<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeRoleTagStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roleTagStatus;

    /**
     * @var mixed[]
     */
    public $shardRoleTagStatus;
    protected $_name = [
        'requestId' => 'RequestId',
        'roleTagStatus' => 'RoleTagStatus',
        'shardRoleTagStatus' => 'ShardRoleTagStatus',
    ];

    public function validate()
    {
        if (\is_array($this->shardRoleTagStatus)) {
            Model::validateArray($this->shardRoleTagStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleTagStatus) {
            $res['RoleTagStatus'] = $this->roleTagStatus;
        }

        if (null !== $this->shardRoleTagStatus) {
            if (\is_array($this->shardRoleTagStatus)) {
                $res['ShardRoleTagStatus'] = [];
                foreach ($this->shardRoleTagStatus as $key1 => $value1) {
                    $res['ShardRoleTagStatus'][$key1] = $value1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleTagStatus'])) {
            $model->roleTagStatus = $map['RoleTagStatus'];
        }

        if (isset($map['ShardRoleTagStatus'])) {
            if (!empty($map['ShardRoleTagStatus'])) {
                $model->shardRoleTagStatus = [];
                foreach ($map['ShardRoleTagStatus'] as $key1 => $value1) {
                    $model->shardRoleTagStatus[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
