<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupLatencyResponseBody\latencyPacket;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description The metric. Valid values:
     *
     *   latency: the backend processing latency
     *   gatewayLatency: the API Gateway processing latency
     *
     * @example latency
     *
     * @var string
     */
    public $item;

    /**
     * @description The point in time when the latency data was collected. The format is YYYY-MM-DDThh:mm:ssZ.
     *
     * @example 2023-03-30T16:10:00Z
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description The latency. Unit: ms.
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
