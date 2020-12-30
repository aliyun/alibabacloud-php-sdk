<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones\zone\slaveZones;
use AlibabaCloud\Tea\Model;

class zone extends Model
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
     * @var slaveZones
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
            $res['SlaveZones'] = null !== $this->slaveZones ? $this->slaveZones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
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
            $model->slaveZones = slaveZones::fromMap($map['SlaveZones']);
        }

        return $model;
    }
}
