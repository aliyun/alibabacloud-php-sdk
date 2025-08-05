<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceOpenSourceRabbitMQParameters extends Model
{
    /**
     * @example ACL
     *
     * @var string
     */
    public $authType;

    /**
     * @example Json
     *
     * @var string
     */
    public $bodyDataType;

    /**
     * @example 192.168.1.100:5672
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example PrivateNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @example demo
     *
     * @var string
     */
    public $queueName;

    /**
     * @example sg-2ze65razphjfz3******
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example admin
     *
     * @var string
     */
    public $username;

    /**
     * @example vsw-uf65zhil5oukof5******
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @example eb-connect
     *
     * @var string
     */
    public $virtualHostName;

    /**
     * @example vpc-bp1vllc1lnw1v657******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authType' => 'AuthType',
        'bodyDataType' => 'BodyDataType',
        'endpoint' => 'Endpoint',
        'networkType' => 'NetworkType',
        'password' => 'Password',
        'queueName' => 'QueueName',
        'securityGroupId' => 'SecurityGroupId',
        'username' => 'Username',
        'vSwitchIds' => 'VSwitchIds',
        'virtualHostName' => 'VirtualHostName',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->bodyDataType) {
            $res['BodyDataType'] = $this->bodyDataType;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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

    /**
     * @param array $map
     *
     * @return sourceOpenSourceRabbitMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BodyDataType'])) {
            $model->bodyDataType = $map['BodyDataType'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
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
