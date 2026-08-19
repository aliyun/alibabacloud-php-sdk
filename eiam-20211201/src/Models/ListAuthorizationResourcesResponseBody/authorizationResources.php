<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationResourcesResponseBody\authorizationResources\condition;

class authorizationResources extends Model
{
    /**
     * @var string
     */
    public $authorizationResourceEntityId;

    /**
     * @var string
     */
    public $authorizationResourceEntityType;

    /**
     * @var string
     */
    public $authorizationResourceId;

    /**
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var condition
     */
    public $condition;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'authorizationResourceEntityId' => 'AuthorizationResourceEntityId',
        'authorizationResourceEntityType' => 'AuthorizationResourceEntityType',
        'authorizationResourceId' => 'AuthorizationResourceId',
        'authorizationRuleId' => 'AuthorizationRuleId',
        'cloudAccountId' => 'CloudAccountId',
        'condition' => 'Condition',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->condition) {
            $this->condition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationResourceEntityId) {
            $res['AuthorizationResourceEntityId'] = $this->authorizationResourceEntityId;
        }

        if (null !== $this->authorizationResourceEntityType) {
            $res['AuthorizationResourceEntityType'] = $this->authorizationResourceEntityType;
        }

        if (null !== $this->authorizationResourceId) {
            $res['AuthorizationResourceId'] = $this->authorizationResourceId;
        }

        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }

        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->condition) {
            $res['Condition'] = null !== $this->condition ? $this->condition->toArray($noStream) : $this->condition;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AuthorizationResourceEntityId'])) {
            $model->authorizationResourceEntityId = $map['AuthorizationResourceEntityId'];
        }

        if (isset($map['AuthorizationResourceEntityType'])) {
            $model->authorizationResourceEntityType = $map['AuthorizationResourceEntityType'];
        }

        if (isset($map['AuthorizationResourceId'])) {
            $model->authorizationResourceId = $map['AuthorizationResourceId'];
        }

        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }

        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['Condition'])) {
            $model->condition = condition::fromMap($map['Condition']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
