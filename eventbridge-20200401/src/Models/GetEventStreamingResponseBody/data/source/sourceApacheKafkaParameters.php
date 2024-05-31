<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceApacheKafkaParameters extends Model
{
    /**
     * @var string
     */
    public $bootstraps;

    /**
     * @var string
     */
    public $consumerGroup;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $offsetReset;

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
     * @var string
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
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $valueDataType;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bootstraps'       => 'Bootstraps',
        'consumerGroup'    => 'ConsumerGroup',
        'networkType'      => 'NetworkType',
        'offsetReset'      => 'OffsetReset',
        'saslMechanism'    => 'SaslMechanism',
        'saslPassword'     => 'SaslPassword',
        'saslUser'         => 'SaslUser',
        'securityGroupId'  => 'SecurityGroupId',
        'securityProtocol' => 'SecurityProtocol',
        'topic'            => 'Topic',
        'vSwitchIds'       => 'VSwitchIds',
        'valueDataType'    => 'ValueDataType',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootstraps) {
            $res['Bootstraps'] = $this->bootstraps;
        }
        if (null !== $this->consumerGroup) {
            $res['ConsumerGroup'] = $this->consumerGroup;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->offsetReset) {
            $res['OffsetReset'] = $this->offsetReset;
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
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityProtocol) {
            $res['SecurityProtocol'] = $this->securityProtocol;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->valueDataType) {
            $res['ValueDataType'] = $this->valueDataType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceApacheKafkaParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bootstraps'])) {
            $model->bootstraps = $map['Bootstraps'];
        }
        if (isset($map['ConsumerGroup'])) {
            $model->consumerGroup = $map['ConsumerGroup'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OffsetReset'])) {
            $model->offsetReset = $map['OffsetReset'];
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
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityProtocol'])) {
            $model->securityProtocol = $map['SecurityProtocol'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['ValueDataType'])) {
            $model->valueDataType = $map['ValueDataType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
