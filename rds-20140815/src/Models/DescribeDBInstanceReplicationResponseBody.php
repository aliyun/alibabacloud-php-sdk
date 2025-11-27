<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceReplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $externalReplication;

    /**
     * @var string
     */
    public $replicationDelay;

    /**
     * @var string
     */
    public $replicationErrorMessage;

    /**
     * @var string
     */
    public $replicationIp;

    /**
     * @var string
     */
    public $replicationPort;

    /**
     * @var string
     */
    public $replicationSource;

    /**
     * @var string
     */
    public $replicationState;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'externalReplication' => 'ExternalReplication',
        'replicationDelay' => 'ReplicationDelay',
        'replicationErrorMessage' => 'ReplicationErrorMessage',
        'replicationIp' => 'ReplicationIp',
        'replicationPort' => 'ReplicationPort',
        'replicationSource' => 'ReplicationSource',
        'replicationState' => 'ReplicationState',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalReplication) {
            $res['ExternalReplication'] = $this->externalReplication;
        }

        if (null !== $this->replicationDelay) {
            $res['ReplicationDelay'] = $this->replicationDelay;
        }

        if (null !== $this->replicationErrorMessage) {
            $res['ReplicationErrorMessage'] = $this->replicationErrorMessage;
        }

        if (null !== $this->replicationIp) {
            $res['ReplicationIp'] = $this->replicationIp;
        }

        if (null !== $this->replicationPort) {
            $res['ReplicationPort'] = $this->replicationPort;
        }

        if (null !== $this->replicationSource) {
            $res['ReplicationSource'] = $this->replicationSource;
        }

        if (null !== $this->replicationState) {
            $res['ReplicationState'] = $this->replicationState;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ExternalReplication'])) {
            $model->externalReplication = $map['ExternalReplication'];
        }

        if (isset($map['ReplicationDelay'])) {
            $model->replicationDelay = $map['ReplicationDelay'];
        }

        if (isset($map['ReplicationErrorMessage'])) {
            $model->replicationErrorMessage = $map['ReplicationErrorMessage'];
        }

        if (isset($map['ReplicationIp'])) {
            $model->replicationIp = $map['ReplicationIp'];
        }

        if (isset($map['ReplicationPort'])) {
            $model->replicationPort = $map['ReplicationPort'];
        }

        if (isset($map['ReplicationSource'])) {
            $model->replicationSource = $map['ReplicationSource'];
        }

        if (isset($map['ReplicationState'])) {
            $model->replicationState = $map['ReplicationState'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
