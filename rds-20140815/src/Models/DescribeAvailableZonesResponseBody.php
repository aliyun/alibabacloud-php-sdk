<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponseBody\availableZones;
use AlibabaCloud\Tea\Model;

class DescribeAvailableZonesResponseBody extends Model
{
    /**
     * @description An array that consists of available zones and resources available in the zones.
     *
     * @var availableZones[]
     */
    public $availableZones;

    /**
     * @description The ID of the request.
     *
     * @example 4256E149-C3C4-4FA7-BDEA-13CA415E8763
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableZones' => 'AvailableZones',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = [];
            if (null !== $this->availableZones && \is_array($this->availableZones)) {
                $n = 0;
                foreach ($this->availableZones as $item) {
                    $res['AvailableZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = [];
                $n                     = 0;
                foreach ($map['AvailableZones'] as $item) {
                    $model->availableZones[$n++] = null !== $item ? availableZones::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
