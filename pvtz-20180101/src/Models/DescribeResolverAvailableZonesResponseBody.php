<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverAvailableZonesResponseBody\availableZones;
use AlibabaCloud\Tea\Model;

class DescribeResolverAvailableZonesResponseBody extends Model
{
    /**
     * @description The information about the queried zones.
     *
     * @var availableZones[]
     */
    public $availableZones;

    /**
     * @description The request ID.
     *
     * @example 23268E49-0C3E-4A2C-AB70-B4C7D092470B
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
     * @return DescribeResolverAvailableZonesResponseBody
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
