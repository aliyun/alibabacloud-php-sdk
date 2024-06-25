<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items\DBCluster\DBNodes;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The specifications of the node.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The ID of the node.
     *
     * @example pi-****************
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The role of the node. Valid values:
     *
     *   **Writer**: primary node
     *   **Reader**: read-only node
     *   **ColumnReader**: column store read-only node
     *   **AI**: AI node
     *
     * @example Reader
     *
     * @var string
     */
    public $DBNodeRole;

    /**
     * @description Indicates whether the hot standby feature is enabled. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example OFF
     *
     * @var string
     */
    public $hotReplicaMode;

    /**
     * @description Indicates whether the In-Memory Column Index (IMCI) feature is enabled. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example OFF
     *
     * @var string
     */
    public $imciSwitch;

    /**
     * @description The region ID of the node.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the serverless feature is enabled for the node.
     *
     *   **ON** indicates that the serverless feature is enabled.
     *   No value is returned if the serverless feature is disabled.
     *
     * @example ON
     *
     * @var string
     */
    public $serverless;

    /**
     * @description The zone ID of node.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBNodeClass'    => 'DBNodeClass',
        'DBNodeId'       => 'DBNodeId',
        'DBNodeRole'     => 'DBNodeRole',
        'hotReplicaMode' => 'HotReplicaMode',
        'imciSwitch'     => 'ImciSwitch',
        'regionId'       => 'RegionId',
        'serverless'     => 'Serverless',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }
        if (null !== $this->hotReplicaMode) {
            $res['HotReplicaMode'] = $this->hotReplicaMode;
        }
        if (null !== $this->imciSwitch) {
            $res['ImciSwitch'] = $this->imciSwitch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverless) {
            $res['Serverless'] = $this->serverless;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }
        if (isset($map['HotReplicaMode'])) {
            $model->hotReplicaMode = $map['HotReplicaMode'];
        }
        if (isset($map['ImciSwitch'])) {
            $model->imciSwitch = $map['ImciSwitch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Serverless'])) {
            $model->serverless = $map['Serverless'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
