<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeZonesResponseBody\zoneList;
use AlibabaCloud\Tea\Model;

class DescribeZonesResponseBody extends Model
{
    /**
     * @description The list of available zones.
     *
     * @example F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the zone.
     *
     * @var zoneList
     */
    public $zoneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'zoneList'  => 'ZoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneList) {
            $res['ZoneList'] = null !== $this->zoneList ? $this->zoneList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneList'])) {
            $model->zoneList = zoneList::fromMap($map['ZoneList']);
        }

        return $model;
    }
}
