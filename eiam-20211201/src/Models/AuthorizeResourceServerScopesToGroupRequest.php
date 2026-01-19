<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeResourceServerScopesToGroupRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $resourceServerScopeIds;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'clientToken' => 'ClientToken',
        'groupId' => 'GroupId',
        'instanceId' => 'InstanceId',
        'resourceServerScopeIds' => 'ResourceServerScopeIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceServerScopeIds)) {
            Model::validateArray($this->resourceServerScopeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceServerScopeIds) {
            if (\is_array($this->resourceServerScopeIds)) {
                $res['ResourceServerScopeIds'] = [];
                $n1 = 0;
                foreach ($this->resourceServerScopeIds as $item1) {
                    $res['ResourceServerScopeIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceServerScopeIds'])) {
            if (!empty($map['ResourceServerScopeIds'])) {
                $model->resourceServerScopeIds = [];
                $n1 = 0;
                foreach ($map['ResourceServerScopeIds'] as $item1) {
                    $model->resourceServerScopeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
