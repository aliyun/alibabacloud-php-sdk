<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones\slaveZones;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var slaveZones[]
     */
    public $slaveZones;
    protected $_name = [
        'localName'  => 'LocalName',
        'zoneId'     => 'ZoneId',
        'slaveZones' => 'SlaveZones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = [];
            if (null !== $this->slaveZones && \is_array($this->slaveZones)) {
                $n = 0;
                foreach ($this->slaveZones as $item) {
                    $res['SlaveZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SlaveZones'])) {
            if (!empty($map['SlaveZones'])) {
                $model->slaveZones = [];
                $n                 = 0;
                foreach ($map['SlaveZones'] as $item) {
                    $model->slaveZones[$n++] = null !== $item ? slaveZones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
