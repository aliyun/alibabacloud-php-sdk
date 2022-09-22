<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeSpotInstanceAdviceResponseBody;

use AlibabaCloud\Tea\Model;

class availableSpotZones extends Model
{
    /**
     * @var string[]
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
            $res['AvailableSpotZone'] = $this->availableSpotZone;
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
                $model->availableSpotZone = $map['AvailableSpotZone'];
            }
        }

        return $model;
    }
}
