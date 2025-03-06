<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceLatencyResponseBody\instanceLatency;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description The metric. Valid values:
     *
     *   gatewayLatency API: the processing latency of API Gateway
     *   latency: the processing latency of the backend service.
     *
     * @example latency
     *
     * @var string
     */
    public $item;

    /**
     * @description The monitoring time. The time follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2022-09-06T02:05:13Z
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description The value of the average latency.
     *
     * @example 10
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
