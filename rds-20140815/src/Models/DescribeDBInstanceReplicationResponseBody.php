<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceReplicationResponseBody\slaveStatusList;

class DescribeDBInstanceReplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $externalReplication;

    /**
     * @var string
     */
    public $gtidExecuted;

    /**
     * @var string
     */
    public $importStatus;

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

    /**
     * @var slaveStatusList[]
     */
    public $slaveStatusList;
    protected $_name = [
        'externalReplication' => 'ExternalReplication',
        'gtidExecuted' => 'GtidExecuted',
        'importStatus' => 'ImportStatus',
        'replicationDelay' => 'ReplicationDelay',
        'replicationErrorMessage' => 'ReplicationErrorMessage',
        'replicationIp' => 'ReplicationIp',
        'replicationPort' => 'ReplicationPort',
        'replicationSource' => 'ReplicationSource',
        'replicationState' => 'ReplicationState',
        'requestId' => 'RequestId',
        'slaveStatusList' => 'SlaveStatusList',
    ];

    public function validate()
    {
        if (\is_array($this->slaveStatusList)) {
            Model::validateArray($this->slaveStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalReplication) {
            $res['ExternalReplication'] = $this->externalReplication;
        }

        if (null !== $this->gtidExecuted) {
            $res['GtidExecuted'] = $this->gtidExecuted;
        }

        if (null !== $this->importStatus) {
            $res['ImportStatus'] = $this->importStatus;
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

        if (null !== $this->slaveStatusList) {
            if (\is_array($this->slaveStatusList)) {
                $res['SlaveStatusList'] = [];
                $n1 = 0;
                foreach ($this->slaveStatusList as $item1) {
                    $res['SlaveStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['GtidExecuted'])) {
            $model->gtidExecuted = $map['GtidExecuted'];
        }

        if (isset($map['ImportStatus'])) {
            $model->importStatus = $map['ImportStatus'];
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

        if (isset($map['SlaveStatusList'])) {
            if (!empty($map['SlaveStatusList'])) {
                $model->slaveStatusList = [];
                $n1 = 0;
                foreach ($map['SlaveStatusList'] as $item1) {
                    $model->slaveStatusList[$n1] = slaveStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
