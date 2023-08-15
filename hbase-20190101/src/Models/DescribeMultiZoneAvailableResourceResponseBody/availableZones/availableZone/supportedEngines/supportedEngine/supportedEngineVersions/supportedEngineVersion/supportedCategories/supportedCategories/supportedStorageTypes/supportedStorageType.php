<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources;
use AlibabaCloud\Tea\Model;

class supportedStorageType extends Model
{
    /**
     * @var coreResources
     */
    public $coreResources;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'coreResources' => 'CoreResources',
        'storageType'   => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreResources) {
            $res['CoreResources'] = null !== $this->coreResources ? $this->coreResources->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedStorageType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreResources'])) {
            $model->coreResources = coreResources::fromMap($map['CoreResources']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
