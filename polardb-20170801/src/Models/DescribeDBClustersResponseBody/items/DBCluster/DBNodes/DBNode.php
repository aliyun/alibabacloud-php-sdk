<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items\DBCluster\DBNodes;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeId'    => 'DBNodeId',
        'DBNodeRole'  => 'DBNodeRole',
        'regionId'    => 'RegionId',
        'zoneId'      => 'ZoneId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
