<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes\supportedEditionType\supportedSeriesTypes\supportedSeriesType\supportedEngineVersions\supportedEngineVersion\supportedArchitectureTypes\supportedArchitectureType\supportedShardNumbers\supportedShardNumber\supportedNodeTypes\supportedNodeType\availableResources;

use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @description The memory size of the instance. Unit: MB.
     *
     * @example 16384
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The code of the instance type. If you want to view the code of an instance type, you can search for the code of the instance type in Help Center.
     *
     * @example redis.amber.logic.sharding.2g.8db.0rodb.24proxy.multithread
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The description of the instance type.
     *
     * @example 16 GB cluster instance with 8 nodes (1,920,000 queries per second and 240,000 connections)
     *
     * @var string
     */
    public $instanceClassRemark;
    protected $_name = [
        'capacity'            => 'Capacity',
        'instanceClass'       => 'InstanceClass',
        'instanceClassRemark' => 'InstanceClassRemark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceClassRemark) {
            $res['InstanceClassRemark'] = $this->instanceClassRemark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceClassRemark'])) {
            $model->instanceClassRemark = $map['InstanceClassRemark'];
        }

        return $model;
    }
}
