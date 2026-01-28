<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DeleteAuthorizationResourceRequest extends Model
{
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
    public $instanceId;
    protected $_name = [
        'authorizationResourceId' => 'AuthorizationResourceId',
        'authorizationRuleId' => 'AuthorizationRuleId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationResourceId) {
            $res['AuthorizationResourceId'] = $this->authorizationResourceId;
        }

        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
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
        if (isset($map['AuthorizationResourceId'])) {
            $model->authorizationResourceId = $map['AuthorizationResourceId'];
        }

        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
