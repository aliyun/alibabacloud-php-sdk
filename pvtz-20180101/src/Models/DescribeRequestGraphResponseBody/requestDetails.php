<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponseBody\requestDetails\zoneRequestTop;
use AlibabaCloud\Tea\Model;

class requestDetails extends Model
{
    /**
     * @var zoneRequestTop[]
     */
    public $zoneRequestTop;
    protected $_name = [
        'zoneRequestTop' => 'ZoneRequestTop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneRequestTop) {
            $res['ZoneRequestTop'] = [];
            if (null !== $this->zoneRequestTop && \is_array($this->zoneRequestTop)) {
                $n = 0;
                foreach ($this->zoneRequestTop as $item) {
                    $res['ZoneRequestTop'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneRequestTop'])) {
            if (!empty($map['ZoneRequestTop'])) {
                $model->zoneRequestTop = [];
                $n                     = 0;
                foreach ($map['ZoneRequestTop'] as $item) {
                    $model->zoneRequestTop[$n++] = null !== $item ? zoneRequestTop::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
