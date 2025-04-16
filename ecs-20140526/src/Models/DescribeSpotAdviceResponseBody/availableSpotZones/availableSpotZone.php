<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone\availableSpotResources;

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
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->availableSpotResources) {
            $this->availableSpotResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableSpotResources) {
            $res['AvailableSpotResources'] = null !== $this->availableSpotResources ? $this->availableSpotResources->toArray($noStream) : $this->availableSpotResources;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AvailableSpotResources'])) {
            $model->availableSpotResources = availableSpotResources::fromMap($map['AvailableSpotResources']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
