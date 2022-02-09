<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponseBody\availableZones;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAvailableResourcesResponseBody extends Model
{
    /**
     * @var availableZones[]
     */
    public $availableZones;

    /**
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
     * @return DescribeDBClusterAvailableResourcesResponseBody
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
