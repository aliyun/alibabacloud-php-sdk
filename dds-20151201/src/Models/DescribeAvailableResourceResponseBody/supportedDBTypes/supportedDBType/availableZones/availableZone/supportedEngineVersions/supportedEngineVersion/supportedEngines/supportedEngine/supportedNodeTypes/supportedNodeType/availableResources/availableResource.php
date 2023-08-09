<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes\supportedNodeType\availableResources;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType\availableZones\availableZone\supportedEngineVersions\supportedEngineVersion\supportedEngines\supportedEngine\supportedNodeTypes\supportedNodeType\availableResources\availableResource\DBInstanceStorageRange;
use AlibabaCloud\Tea\Model;

class availableResource extends Model
{
    /**
     * @description The storage capacity range of the instance.
     *
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;

    /**
     * @description The instance family.
     *
     * @example mdb.shard.2x.xlarge.d
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The type of the instance.
     *
     * @example 4 cores, 8 GB (Dedicated) (Current instance type: mdb.shard.2x.xlarge.d (4 cores, 8 GB (Dedicated cloud-disk), maximum connections: 3000, maximum IOPS: min{1800 + 50 × Storage capacity, 21000}))
     *
     * @var string
     */
    public $instanceClassRemark;
    protected $_name = [
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
        'instanceClass'          => 'InstanceClass',
        'instanceClassRemark'    => 'InstanceClassRemark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceStorageRange) {
            $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toMap() : null;
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
        if (isset($map['DBInstanceStorageRange'])) {
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
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
