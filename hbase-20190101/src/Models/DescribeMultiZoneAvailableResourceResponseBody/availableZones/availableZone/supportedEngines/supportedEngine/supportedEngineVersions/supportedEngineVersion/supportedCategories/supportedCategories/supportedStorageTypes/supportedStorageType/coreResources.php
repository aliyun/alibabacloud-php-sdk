<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEngineVersions\supportedEngineVersion\supportedCategories\supportedCategories\supportedStorageTypes\supportedStorageType\coreResources\coreResource;
use AlibabaCloud\Tea\Model;

class coreResources extends Model
{
    /**
     * @var coreResource[]
     */
    public $coreResource;
    protected $_name = [
        'coreResource' => 'CoreResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreResource) {
            $res['CoreResource'] = [];
            if (null !== $this->coreResource && \is_array($this->coreResource)) {
                $n = 0;
                foreach ($this->coreResource as $item) {
                    $res['CoreResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coreResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreResource'])) {
            if (!empty($map['CoreResource'])) {
                $model->coreResource = [];
                $n                   = 0;
                foreach ($map['CoreResource'] as $item) {
                    $model->coreResource[$n++] = null !== $item ? coreResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
