<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\TempModifyDBNodeRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The instance type of the added node. The instance type of the added node must be the same as the instance type of the original node.
     *
     * >  You can call the [DescribeDBClusters](~~98094~~) operation to view the instance types of original nodes.
     * @example polar.mysql.x4.medium
     *
     * @var string
     */
    public $targetClass;

    /**
     * @description The ID of the zone in which the added node is deployed. The instance type of the added node must be the same as the instance type of the original node.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'targetClass' => 'TargetClass',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetClass) {
            $res['TargetClass'] = $this->targetClass;
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
        if (isset($map['TargetClass'])) {
            $model->targetClass = $map['TargetClass'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
