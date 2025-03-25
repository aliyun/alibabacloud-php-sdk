<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworkResponseBody\DBClusters;

use AlibabaCloud\Dara\Model;

class DBNodes extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $DBNodeRole;

    /**
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @var int
     */
    public $failoverPriority;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeId' => 'DBNodeId',
        'DBNodeRole' => 'DBNodeRole',
        'DBNodeStatus' => 'DBNodeStatus',
        'failoverPriority' => 'FailoverPriority',
        'maxConnections' => 'MaxConnections',
        'maxIOPS' => 'MaxIOPS',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }

        if (null !== $this->DBNodeStatus) {
            $res['DBNodeStatus'] = $this->DBNodeStatus;
        }

        if (null !== $this->failoverPriority) {
            $res['FailoverPriority'] = $this->failoverPriority;
        }

        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }

        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }

        if (isset($map['DBNodeStatus'])) {
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }

        if (isset($map['FailoverPriority'])) {
            $model->failoverPriority = $map['FailoverPriority'];
        }

        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }

        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
