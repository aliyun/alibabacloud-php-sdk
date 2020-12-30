<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource\DBInstanceStorageRange;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource\instanceTypeDetail;
use AlibabaCloud\Tea\Model;

class coreResource extends Model
{
    /**
     * @var instanceTypeDetail
     */
    public $instanceTypeDetail;

    /**
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;

    /**
     * @var int
     */
    public $maxCoreCount;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'instanceTypeDetail'     => 'InstanceTypeDetail',
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
        'maxCoreCount'           => 'MaxCoreCount',
        'instanceType'           => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeDetail) {
            $res['InstanceTypeDetail'] = null !== $this->instanceTypeDetail ? $this->instanceTypeDetail->toMap() : null;
        }
        if (null !== $this->DBInstanceStorageRange) {
            $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toMap() : null;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coreResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeDetail'])) {
            $model->instanceTypeDetail = instanceTypeDetail::fromMap($map['InstanceTypeDetail']);
        }
        if (isset($map['DBInstanceStorageRange'])) {
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
