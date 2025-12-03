<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource\DBInstanceStorageRange;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource\instanceTypeDetail;

class coreResource extends Model
{
    /**
     * @var DBInstanceStorageRange
     */
    public $DBInstanceStorageRange;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var instanceTypeDetail
     */
    public $instanceTypeDetail;

    /**
     * @var int
     */
    public $maxCoreCount;
    protected $_name = [
        'DBInstanceStorageRange' => 'DBInstanceStorageRange',
        'instanceType' => 'InstanceType',
        'instanceTypeDetail' => 'InstanceTypeDetail',
        'maxCoreCount' => 'MaxCoreCount',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceStorageRange) {
            $this->DBInstanceStorageRange->validate();
        }
        if (null !== $this->instanceTypeDetail) {
            $this->instanceTypeDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceStorageRange) {
            $res['DBInstanceStorageRange'] = null !== $this->DBInstanceStorageRange ? $this->DBInstanceStorageRange->toArray($noStream) : $this->DBInstanceStorageRange;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeDetail) {
            $res['InstanceTypeDetail'] = null !== $this->instanceTypeDetail ? $this->instanceTypeDetail->toArray($noStream) : $this->instanceTypeDetail;
        }

        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
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
        if (isset($map['DBInstanceStorageRange'])) {
            $model->DBInstanceStorageRange = DBInstanceStorageRange::fromMap($map['DBInstanceStorageRange']);
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeDetail'])) {
            $model->instanceTypeDetail = instanceTypeDetail::fromMap($map['InstanceTypeDetail']);
        }

        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }

        return $model;
    }
}
