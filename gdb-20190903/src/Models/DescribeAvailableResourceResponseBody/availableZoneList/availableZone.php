<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList;

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
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->supportedSerialList) {
            $this->supportedSerialList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedSerialList) {
            $res['SupportedSerialList'] = null !== $this->supportedSerialList ? $this->supportedSerialList->toArray($noStream) : $this->supportedSerialList;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
