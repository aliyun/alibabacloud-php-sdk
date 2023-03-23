<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceDropPacketResponseBody\instanceDropPacket;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description The metric. Valid values:
     *
     *   InstanceDropPacketRX: the number of inbound packets dropped in the instance per second.
     *   InstanceDropPacketTX: the number of outbound packets dropped in the instance per second.
     *
     * @example InstanceDropPacketRX
     *
     * @var string
     */
    public $item;

    /**
     * @description The monitoring time. The time follows the ISO 8601 standard. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2022-09-06T04:00:36Z
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description The number of dropped packets in the instance.
     *
     * @example 0.0
     *
     * @var string
     */
    public $itemValue;
    protected $_name = [
        'item'      => 'Item',
        'itemTime'  => 'ItemTime',
        'itemValue' => 'ItemValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->itemTime) {
            $res['ItemTime'] = $this->itemTime;
        }
        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['ItemTime'])) {
            $model->itemTime = $map['ItemTime'];
        }
        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }

        return $model;
    }
}
