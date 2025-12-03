<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources;

class supportedStorageType extends Model
{
    /**
     * @var coreResources
     */
    public $coreResources;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'coreResources' => 'CoreResources',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        if (null !== $this->coreResources) {
            $this->coreResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coreResources) {
            $res['CoreResources'] = null !== $this->coreResources ? $this->coreResources->toArray($noStream) : $this->coreResources;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['CoreResources'])) {
            $model->coreResources = coreResources::fromMap($map['CoreResources']);
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
