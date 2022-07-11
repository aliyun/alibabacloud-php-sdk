<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone\availableSpotResources;
use AlibabaCloud\Tea\Model;

class availableSpotZone extends Model
{
    /**
     * @var availableSpotResources
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
            $res['AvailableSpotResources'] = null !== $this->availableSpotResources ? $this->availableSpotResources->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpotZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSpotResources'])) {
            $model->availableSpotResources = availableSpotResources::fromMap($map['AvailableSpotResources']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
