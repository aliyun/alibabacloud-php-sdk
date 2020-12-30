<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones\zone\slaveZones\slaveZone;
use AlibabaCloud\Tea\Model;

class slaveZones extends Model
{
    /**
     * @var slaveZone[]
     */
    public $slaveZone;
    protected $_name = [
        'slaveZone' => 'SlaveZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slaveZone) {
            $res['SlaveZone'] = [];
            if (null !== $this->slaveZone && \is_array($this->slaveZone)) {
                $n = 0;
                foreach ($this->slaveZone as $item) {
                    $res['SlaveZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaveZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlaveZone'])) {
            if (!empty($map['SlaveZone'])) {
                $model->slaveZone = [];
                $n                = 0;
                foreach ($map['SlaveZone'] as $item) {
                    $model->slaveZone[$n++] = null !== $item ? slaveZone::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
