<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcZoneResponseBody;

use AlibabaCloud\Tea\Model;

class zoneList extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example AvailabilityZone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'localName' => 'LocalName',
        'zoneId'    => 'ZoneId',
        'zoneType'  => 'ZoneType',
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
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneList
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
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
