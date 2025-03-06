<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description The name of the zone.
     *
     * @example China (Hangzhou) Multi-zone 2(j,g)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-MAZ2(j,g)
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'localName' => 'LocalName',
        'zoneId'    => 'ZoneId',
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

        return $model;
    }
}
