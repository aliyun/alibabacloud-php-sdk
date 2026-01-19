<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForResourceServerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListUsersForResourceServerResponseBody\users\resourceServerScopes;

class users extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var resourceServerScopes[]
     */
    public $resourceServerScopes;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'resourceServerScopes' => 'ResourceServerScopes',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceServerScopes)) {
            Model::validateArray($this->resourceServerScopes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceServerScopes) {
            if (\is_array($this->resourceServerScopes)) {
                $res['ResourceServerScopes'] = [];
                $n1 = 0;
                foreach ($this->resourceServerScopes as $item1) {
                    $res['ResourceServerScopes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceServerScopes'])) {
            if (!empty($map['ResourceServerScopes'])) {
                $model->resourceServerScopes = [];
                $n1 = 0;
                foreach ($map['ResourceServerScopes'] as $item1) {
                    $model->resourceServerScopes[$n1] = resourceServerScopes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
