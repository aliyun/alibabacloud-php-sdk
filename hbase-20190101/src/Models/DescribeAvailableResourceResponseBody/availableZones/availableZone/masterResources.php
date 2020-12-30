<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\masterResources\masterResource;
use AlibabaCloud\Tea\Model;

class masterResources extends Model
{
    /**
     * @var masterResource[]
     */
    public $masterResource;
    protected $_name = [
        'masterResource' => 'MasterResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterResource) {
            $res['MasterResource'] = [];
            if (null !== $this->masterResource && \is_array($this->masterResource)) {
                $n = 0;
                foreach ($this->masterResource as $item) {
                    $res['MasterResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterResource'])) {
            if (!empty($map['MasterResource'])) {
                $model->masterResource = [];
                $n                     = 0;
                foreach ($map['MasterResource'] as $item) {
                    $model->masterResource[$n++] = null !== $item ? masterResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
