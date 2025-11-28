<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class SourceRabbitMQMetaParameters extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $innerNameSuffix;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $maxHops;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $orderConsume;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regex;

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
    public $vSwitchIds;

    /**
     * @var string
     */
    public $virtualHostName;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'innerNameSuffix' => 'InnerNameSuffix',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'maxHops' => 'MaxHops',
        'networkType' => 'NetworkType',
        'orderConsume' => 'OrderConsume',
        'password' => 'Password',
        'regex' => 'Regex',
        'securityGroupId' => 'SecurityGroupId',
        'username' => 'Username',
        'vSwitchIds' => 'VSwitchIds',
        'virtualHostName' => 'VirtualHostName',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->innerNameSuffix) {
            $res['InnerNameSuffix'] = $this->innerNameSuffix;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxHops) {
            $res['MaxHops'] = $this->maxHops;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->orderConsume) {
            $res['OrderConsume'] = $this->orderConsume;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->regex) {
            $res['Regex'] = $this->regex;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['InnerNameSuffix'])) {
            $model->innerNameSuffix = $map['InnerNameSuffix'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxHops'])) {
            $model->maxHops = $map['MaxHops'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['OrderConsume'])) {
            $model->orderConsume = $map['OrderConsume'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Regex'])) {
            $model->regex = $map['Regex'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }

        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
