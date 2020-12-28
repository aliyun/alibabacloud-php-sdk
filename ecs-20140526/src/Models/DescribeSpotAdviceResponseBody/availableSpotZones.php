<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotResources;
use AlibabaCloud\Tea\Model;

class availableSpotZones extends Model
{
    /**
     * @var availableSpotResources[]
     */
    public $availableSpotResources;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableSpotResources' => 'AvailableSpotResources',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpotResources) {
            $res['AvailableSpotResources'] = [];
            if (null !== $this->availableSpotResources && \is_array($this->availableSpotResources)) {
                $n = 0;
                foreach ($this->availableSpotResources as $item) {
                    $res['AvailableSpotResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpotZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSpotResources'])) {
            if (!empty($map['AvailableSpotResources'])) {
                $model->availableSpotResources = [];
                $n                             = 0;
                foreach ($map['AvailableSpotResources'] as $item) {
                    $model->availableSpotResources[$n++] = null !== $item ? availableSpotResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
