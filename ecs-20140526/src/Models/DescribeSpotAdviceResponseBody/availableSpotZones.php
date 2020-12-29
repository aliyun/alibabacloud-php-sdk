<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone;
use AlibabaCloud\Tea\Model;

class availableSpotZones extends Model
{
    /**
     * @var availableSpotZone[]
     */
    public $availableSpotZone;
    protected $_name = [
        'availableSpotZone' => 'AvailableSpotZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpotZone) {
            $res['AvailableSpotZone'] = [];
            if (null !== $this->availableSpotZone && \is_array($this->availableSpotZone)) {
                $n = 0;
                foreach ($this->availableSpotZone as $item) {
                    $res['AvailableSpotZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AvailableSpotZone'])) {
            if (!empty($map['AvailableSpotZone'])) {
                $model->availableSpotZone = [];
                $n                        = 0;
                foreach ($map['AvailableSpotZone'] as $item) {
                    $model->availableSpotZone[$n++] = null !== $item ? availableSpotZone::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
