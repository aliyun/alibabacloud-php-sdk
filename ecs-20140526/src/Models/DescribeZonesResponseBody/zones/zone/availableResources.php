<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;
use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @var resourcesInfo[]
     */
    public $resourcesInfo;
    protected $_name = [
        'resourcesInfo' => 'ResourcesInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcesInfo) {
            $res['ResourcesInfo'] = [];
            if (null !== $this->resourcesInfo && \is_array($this->resourcesInfo)) {
                $n = 0;
                foreach ($this->resourcesInfo as $item) {
                    $res['ResourcesInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcesInfo'])) {
            if (!empty($map['ResourcesInfo'])) {
                $model->resourcesInfo = [];
                $n                    = 0;
                foreach ($map['ResourcesInfo'] as $item) {
                    $model->resourcesInfo[$n++] = null !== $item ? resourcesInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
