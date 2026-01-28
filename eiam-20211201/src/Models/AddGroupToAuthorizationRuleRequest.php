<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\AddGroupToAuthorizationRuleRequest\validityPeriod;

class AddGroupToAuthorizationRuleRequest extends Model
{
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
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var validityPeriod
     */
    public $validityPeriod;

    /**
     * @var string
     */
    public $validityType;
    protected $_name = [
        'authorizationRuleId' => 'AuthorizationRuleId',
        'clientToken' => 'ClientToken',
        'groupId' => 'GroupId',
        'instanceId' => 'InstanceId',
        'validityPeriod' => 'ValidityPeriod',
        'validityType' => 'ValidityType',
    ];

    public function validate()
    {
        if (null !== $this->validityPeriod) {
            $this->validityPeriod->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
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

        if (null !== $this->validityPeriod) {
            $res['ValidityPeriod'] = null !== $this->validityPeriod ? $this->validityPeriod->toArray($noStream) : $this->validityPeriod;
        }

        if (null !== $this->validityType) {
            $res['ValidityType'] = $this->validityType;
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
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
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

        if (isset($map['ValidityPeriod'])) {
            $model->validityPeriod = validityPeriod::fromMap($map['ValidityPeriod']);
        }

        if (isset($map['ValidityType'])) {
            $model->validityType = $map['ValidityType'];
        }

        return $model;
    }
}
