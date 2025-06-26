<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponseBody\data\instances\messageProperty;

class instances extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $endpointUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceRole;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var messageProperty
     */
    public $messageProperty;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authType' => 'authType',
        'consumerGroupId' => 'consumerGroupId',
        'endpointUrl' => 'endpointUrl',
        'instanceId' => 'instanceId',
        'instanceRole' => 'instanceRole',
        'instanceType' => 'instanceType',
        'messageProperty' => 'messageProperty',
        'networkType' => 'networkType',
        'password' => 'password',
        'regionId' => 'regionId',
        'securityGroupId' => 'securityGroupId',
        'username' => 'username',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        if (null !== $this->messageProperty) {
            $this->messageProperty->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->endpointUrl) {
            $res['endpointUrl'] = $this->endpointUrl;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceRole) {
            $res['instanceRole'] = $this->instanceRole;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->messageProperty) {
            $res['messageProperty'] = null !== $this->messageProperty ? $this->messageProperty->toArray($noStream) : $this->messageProperty;
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['endpointUrl'])) {
            $model->endpointUrl = $map['endpointUrl'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceRole'])) {
            $model->instanceRole = $map['instanceRole'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['messageProperty'])) {
            $model->messageProperty = messageProperty::fromMap($map['messageProperty']);
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
