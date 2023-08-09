<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailabilityZonesResponseBody\availableZones;
use AlibabaCloud\Tea\Model;

class DescribeAvailabilityZonesResponseBody extends Model
{
    /**
     * @description The details of the zones in which you can create ApsaraDB for MongoDB instances.
     *
     * @var availableZones[]
     */
    public $availableZones;

    /**
     * @description The ID of the request.
     *
     * @example 19A13A33-0FAD-5120-8AE1-B1636F74DD80
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
     * @return DescribeAvailabilityZonesResponseBody
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
