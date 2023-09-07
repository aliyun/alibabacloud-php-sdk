<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The specifications of the read-only node that you want to add, which must be the same as the specifications of the existing nodes. For more information, see the following topics:
     *
     *   PolarDB for MySQL: [Specifications of compute nodes](~~102542~~)
     *   PolarDB for PostgreSQL (Compatible with Oracle): [Specifications of compute nodes](~~207921~~)
     *   PolarDB for PostgreSQL: [Specifications of compute nodes](~~209380~~)
     *
     * >- This parameter is required for PolarDB for PostgreSQL (Compatible with Oracle) clusters or PolarDB for PostgreSQL clusters. This parameter is optional for PolarDB for MySQL clusters.
     * @example polar.mysql.x4.medium
     *
     * @var string
     */
    public $targetClass;

    /**
     * @description The zone ID of the node that you want to add, which must be the same as the zone ID of existing nodes. You can call the [DescribeRegions](~~98041~~) operation to query the IDs of zones.
     *
     * >- This parameter is required for PolarDB for PostgreSQL (Compatible with Oracle) clusters or PolarDB for PostgreSQL clusters. This parameter is optional for PolarDB for MySQL clusters.
     * @example cn-qingdao-c
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
