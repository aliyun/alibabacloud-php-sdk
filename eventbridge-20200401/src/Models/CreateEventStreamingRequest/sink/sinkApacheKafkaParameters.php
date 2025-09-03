<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\headers;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\key;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\networkType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\value;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheKafkaParameters\vSwitchIds;

class sinkApacheKafkaParameters extends Model
{
    /**
     * @var string
     */
    public $acks;

    /**
     * @var string
     */
    public $bootstraps;

    /**
     * @var headers
     */
    public $headers;

    /**
     * @var key
     */
    public $key;

    /**
     * @var networkType
     */
    public $networkType;

    /**
     * @var string
     */
    public $saslMechanism;

    /**
     * @var string
     */
    public $saslPassword;

    /**
     * @var string
     */
    public $saslUser;

    /**
     * @var securityGroupId
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityProtocol;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var value
     */
    public $value;

    /**
     * @var vpcId
     */
    public $vpcId;
    protected $_name = [
        'acks' => 'Acks',
        'bootstraps' => 'Bootstraps',
        'headers' => 'Headers',
        'key' => 'Key',
        'networkType' => 'NetworkType',
        'saslMechanism' => 'SaslMechanism',
        'saslPassword' => 'SaslPassword',
        'saslUser' => 'SaslUser',
        'securityGroupId' => 'SecurityGroupId',
        'securityProtocol' => 'SecurityProtocol',
        'topic' => 'Topic',
        'vSwitchIds' => 'VSwitchIds',
        'value' => 'Value',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->headers) {
            $this->headers->validate();
        }
        if (null !== $this->key) {
            $this->key->validate();
        }
        if (null !== $this->networkType) {
            $this->networkType->validate();
        }
        if (null !== $this->securityGroupId) {
            $this->securityGroupId->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        if (null !== $this->value) {
            $this->value->validate();
        }
        if (null !== $this->vpcId) {
            $this->vpcId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acks) {
            $res['Acks'] = $this->acks;
        }

        if (null !== $this->bootstraps) {
            $res['Bootstraps'] = $this->bootstraps;
        }

        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toArray($noStream) : $this->headers;
        }

        if (null !== $this->key) {
            $res['Key'] = null !== $this->key ? $this->key->toArray($noStream) : $this->key;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = null !== $this->networkType ? $this->networkType->toArray($noStream) : $this->networkType;
        }

        if (null !== $this->saslMechanism) {
            $res['SaslMechanism'] = $this->saslMechanism;
        }

        if (null !== $this->saslPassword) {
            $res['SaslPassword'] = $this->saslPassword;
        }

        if (null !== $this->saslUser) {
            $res['SaslUser'] = $this->saslUser;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toArray($noStream) : $this->securityGroupId;
        }

        if (null !== $this->securityProtocol) {
            $res['SecurityProtocol'] = $this->securityProtocol;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toArray($noStream) : $this->value;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toArray($noStream) : $this->vpcId;
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
        if (isset($map['Acks'])) {
            $model->acks = $map['Acks'];
        }

        if (isset($map['Bootstraps'])) {
            $model->bootstraps = $map['Bootstraps'];
        }

        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }

        if (isset($map['Key'])) {
            $model->key = key::fromMap($map['Key']);
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = networkType::fromMap($map['NetworkType']);
        }

        if (isset($map['SaslMechanism'])) {
            $model->saslMechanism = $map['SaslMechanism'];
        }

        if (isset($map['SaslPassword'])) {
            $model->saslPassword = $map['SaslPassword'];
        }

        if (isset($map['SaslUser'])) {
            $model->saslUser = $map['SaslUser'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = securityGroupId::fromMap($map['SecurityGroupId']);
        }

        if (isset($map['SecurityProtocol'])) {
            $model->securityProtocol = $map['SecurityProtocol'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = vpcId::fromMap($map['VpcId']);
        }

        return $model;
    }
}
