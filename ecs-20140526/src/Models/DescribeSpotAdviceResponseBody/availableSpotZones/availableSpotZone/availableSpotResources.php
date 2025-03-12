<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone\availableSpotResources\availableSpotResource;
use AlibabaCloud\Tea\Model;

class availableSpotResources extends Model
{
    /**
     * @var availableSpotResource[]
     */
    public $availableSpotResource;
    protected $_name = [
        'availableSpotResource' => 'AvailableSpotResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpotResource) {
            $res['AvailableSpotResource'] = [];
            if (null !== $this->availableSpotResource && \is_array($this->availableSpotResource)) {
                $n = 0;
                foreach ($this->availableSpotResource as $item) {
                    $res['AvailableSpotResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpotResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSpotResource'])) {
            if (!empty($map['AvailableSpotResource'])) {
                $model->availableSpotResource = [];
                $n                            = 0;
                foreach ($map['AvailableSpotResource'] as $item) {
                    $model->availableSpotResource[$n++] = null !== $item ? availableSpotResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
