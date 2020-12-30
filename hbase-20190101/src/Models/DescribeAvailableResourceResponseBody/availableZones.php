<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone;
use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @var availableZone[]
     */
    public $availableZone;
    protected $_name = [
        'availableZone' => 'AvailableZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZone) {
            $res['AvailableZone'] = [];
            if (null !== $this->availableZone && \is_array($this->availableZone)) {
                $n = 0;
                foreach ($this->availableZone as $item) {
                    $res['AvailableZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZone'])) {
            if (!empty($map['AvailableZone'])) {
                $model->availableZone = [];
                $n                    = 0;
                foreach ($map['AvailableZone'] as $item) {
                    $model->availableZone[$n++] = null !== $item ? availableZone::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
