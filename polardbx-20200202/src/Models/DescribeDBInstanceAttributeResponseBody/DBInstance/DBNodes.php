<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceAttributeResponseBody\DBInstance;

use AlibabaCloud\Tea\Model;

class DBNodes extends Model
{
    /**
     * @var string
     */
    public $computeNodeId;

    /**
     * @example pxc-xdb-xxxxxx
     *
     * @var string
     */
    public $dataNodeId;

    /**
     * @var string
     */
    public $id;

    /**
     * @example polarx.x4.large.2e
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'computeNodeId' => 'ComputeNodeId',
        'dataNodeId'    => 'DataNodeId',
        'id'            => 'Id',
        'nodeClass'     => 'NodeClass',
        'regionId'      => 'RegionId',
        'zoneId'        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeNodeId) {
            $res['ComputeNodeId'] = $this->computeNodeId;
        }
        if (null !== $this->dataNodeId) {
            $res['DataNodeId'] = $this->dataNodeId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
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
     * @return DBNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeNodeId'])) {
            $model->computeNodeId = $map['ComputeNodeId'];
        }
        if (isset($map['DataNodeId'])) {
            $model->dataNodeId = $map['DataNodeId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
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
