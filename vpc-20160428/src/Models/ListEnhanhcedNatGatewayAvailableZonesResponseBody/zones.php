<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListEnhanhcedNatGatewayAvailableZonesResponseBody;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The name of the zone.
     *
     * @example Dubai Zone A
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the zone where the instance is deployed.
     *
     * @example me-east-1a
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

        return $model;
    }
}
