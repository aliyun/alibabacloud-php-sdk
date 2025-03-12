<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones;
use AlibabaCloud\Tea\Model;

class DescribeSpotAdviceResponseBody extends Model
{
    /**
     * @description Details about preemptible instances in the zones of the specified region.
     *
     * >  The return values are sorted based on the historical percentages of average preemptible instance prices relative to pay-as-you-go instance prices for instance types.
     * @var availableSpotZones
     */
    public $availableSpotZones;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableSpotZones' => 'AvailableSpotZones',
        'regionId'           => 'RegionId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpotZones) {
            $res['AvailableSpotZones'] = null !== $this->availableSpotZones ? $this->availableSpotZones->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AvailableSpotZones'])) {
            $model->availableSpotZones = availableSpotZones::fromMap($map['AvailableSpotZones']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
