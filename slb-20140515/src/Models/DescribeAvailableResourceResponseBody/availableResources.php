<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAvailableResourceResponseBody\availableResources\availableResource;
use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @var availableResource[]
     */
    public $availableResource;
    protected $_name = [
        'availableResource' => 'AvailableResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableResource) {
            $res['AvailableResource'] = [];
            if (null !== $this->availableResource && \is_array($this->availableResource)) {
                $n = 0;
                foreach ($this->availableResource as $item) {
                    $res['AvailableResource'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AvailableResource'])) {
            if (!empty($map['AvailableResource'])) {
                $model->availableResource = [];
                $n                        = 0;
                foreach ($map['AvailableResource'] as $item) {
                    $model->availableResource[$n++] = null !== $item ? availableResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
