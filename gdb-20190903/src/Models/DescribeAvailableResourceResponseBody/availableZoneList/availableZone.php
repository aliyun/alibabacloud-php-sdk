<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
{
    /**
     * @var supportedSerialList
     */
    public $supportedSerialList;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'supportedSerialList' => 'SupportedSerialList',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSerialList) {
            $res['SupportedSerialList'] = null !== $this->supportedSerialList ? $this->supportedSerialList->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedSerialList'])) {
            $model->supportedSerialList = supportedSerialList::fromMap($map['SupportedSerialList']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
