<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones;
use AlibabaCloud\Tea\Model;

class DescribeSpotAdviceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var availableSpotZones
     */
    public $availableSpotZones;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'requestId'          => 'RequestId',
        'availableSpotZones' => 'AvailableSpotZones',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->availableSpotZones) {
            $res['AvailableSpotZones'] = null !== $this->availableSpotZones ? $this->availableSpotZones->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpotAdviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailableSpotZones'])) {
            $model->availableSpotZones = availableSpotZones::fromMap($map['AvailableSpotZones']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
