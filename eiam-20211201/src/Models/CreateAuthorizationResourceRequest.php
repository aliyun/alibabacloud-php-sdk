<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateAuthorizationResourceRequest extends Model
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
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'authorizationResourceEntityId' => 'AuthorizationResourceEntityId',
        'authorizationResourceEntityType' => 'AuthorizationResourceEntityType',
        'authorizationRuleId' => 'AuthorizationRuleId',
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
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

        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
