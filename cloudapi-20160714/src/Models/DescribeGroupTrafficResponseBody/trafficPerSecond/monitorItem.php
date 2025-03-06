<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupTrafficResponseBody\trafficPerSecond;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description The metric. Valid values:
     *
     *   inbound: traffic consumed by requests
     *   outbound: traffic consumed by responses
     *
     * @example inbound
     *
     * @var string
     */
    public $item;

    /**
     * @description The corresponding time. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ.
     *
     * @example 2023-01-29T01:30:00Z
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description The traffic volume per second.
     *
     * @example 100.0
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
